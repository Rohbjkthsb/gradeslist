<?php


define('TEACHER_ZONE', true);
include_once ('../init.php');
include_once ('../include/classes.php');

$value = mysql_escape_string($_POST['value']);
list($prefix, $student_id, $subject_id, $lesson_id) = explode('_', $_POST['id']);

db_query($sql = "INSERT INTO students_on_lesson (student_id, lesson_id, grade) VALUES ($student_id, $lesson_id, '$value') ON DUPLICATE KEY UPDATE grade=$value;");
echo $value;