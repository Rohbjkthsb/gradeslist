<?php

/* teachers/class_lessons_ajax.html */
class __TwigTemplate_701c13e49bc3309c539edceb56ed04b3 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        // line 1
        echo "<br />
";
        // line 2
        if ((isset($context['queryResult']) ? $context['queryResult'] : null)) {
            echo "<span class=\"dbResult\">";
            // line 3
            echo (isset($context['queryResult']) ? $context['queryResult'] : null);
            echo "</span>
";
        }
        // line 4
        echo "<div id=\"lessontabs\">
\t<ul>
\t\t<li><a href=\"#tabs-1\"><span class=\"tab_head_top\">Таблица оценок</span></a></li>
\t\t<li><a href=\"#tabs-2\"><span class=\"tab_head_top\">Список уроков</span></a></li>
\t</ul>
<div id=\"tabs-1\">
<form id=\"gradeForm\" action=\"class_lessons.php\" method=\"post\">
<input type=\"hidden\" name=\"subject_id\" value=\"";
        // line 12
        echo (isset($context['subject_id']) ? $context['subject_id'] : null);
        echo "\" />
<input type=\"hidden\" name=\"action\" value=\"update\" />
<input type=\"hidden\" name=\"fromAjax\" value=\"1\" />
<div align=\"center\"></div>
<table  id=\"rounded-corner\" width=\"100%\" align=\"center\">
  <thead>
  <tr class=\"TableHead\">
    <th class=\"rounded-left\">№</th>
    <th>Имя</th>
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['lessons']) ? $context['lessons'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            echo "\t<th ";
            // line 22
            if ($this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "last", array(), "any")) {
                echo "class=\"rounded-right\"";
            }
            echo "><div title=\"";
            echo $this->getAttribute((isset($context['item']) ? $context['item'] : null), "lesson_type_name", array(), "any");
            echo ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "topic", array(), "any")) ? (": ") : ("");
            echo $this->getAttribute((isset($context['item']) ? $context['item'] : null), "topic", array(), "any");
            echo "\">";
            echo $this->getAttribute((isset($context['item']) ? $context['item'] : null), "lesson_date_short", array(), "any");
            echo "</div></th>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "  </tr>
  </thead>
  <tbody>
";
        // line 27
        ob_start();
        $context['existActiveLesson'] = ob_get_clean();
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['students_list']) ? $context['students_list'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['student']) {
            echo "\t<tr>
\t\t<td>";
            // line 30
            echo $this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "index", array(), "any");
            echo "</td><td nowrap=\"nowrap\">";
            echo $this->getAttribute((isset($context['student']) ? $context['student'] : null), "student_name", array(), "array");
            echo "</td>
\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['student']) ? $context['student'] : null), "grades", array(), "any"));
            $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
            $length = $countable ? count($context['_seq']) : null;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if ($countable) {
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context['_key'] => $context['student_grade']) {
                echo "\t\t<td align=\"center\">
\t\t";
                // line 33
                if ($this->getAttribute((isset($context['student_grade']) ? $context['student_grade'] : null), "active", array(), "any")) {
                    echo "\t\t\t";
                    // line 34
                    ob_start();
                    echo "1";
                    $context['existActiveLesson'] = ob_get_clean();
                    echo "\t\t\t<input type=\"text\" name=\"grades[";
                    // line 35
                    echo $this->getAttribute((isset($context['student_grade']) ? $context['student_grade'] : null), "lesson_id", array(), "any");
                    echo "][";
                    echo $this->getAttribute((isset($context['student']) ? $context['student'] : null), "student_id", array(), "any");
                    echo "]\" size=\"2\" value=\"";
                    echo $this->getAttribute((isset($context['student_grade']) ? $context['student_grade'] : null), "grade", array(), "any");
                    echo "\" maxlength=\"2\" />
\t\t";
                } else {
                    // line 36
                    echo "\t\t \t<span id=\"grade_";
                    // line 37
                    echo $this->getAttribute((isset($context['student']) ? $context['student'] : null), "student_id", array(), "any");
                    echo "_";
                    echo (isset($context['subject_id']) ? $context['subject_id'] : null);
                    echo "_";
                    echo $this->getAttribute((isset($context['student_grade']) ? $context['student_grade'] : null), "lesson_id", array(), "any");
                    echo "\" class=\"grade";
                    if ($this->getAttribute((isset($context['student_grade']) ? $context['student_grade'] : null), "lesson_type_id", array(), "array") > 1) {
                        echo " grade_special";
                    }
                    echo "\" style=\"display: inline\">";
                    echo $this->getAttribute((isset($context['student_grade']) ? $context['student_grade'] : null), "grade", array(), "any");
                    echo "</span>
\t\t";
                }
                // line 38
                echo " 
    \t</td>
\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if ($countable) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student_grade'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "\t</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "  </tbody>
  <tfoot>
  \t<tr class=\"TableHead\">
    \t<td class=\"rounded-foot-left\">&nbsp;</td>
        <td>&nbsp;</td>
";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['lessons']) ? $context['lessons'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['item']) {
            echo "\t\t<td ";
            // line 49
            if ($this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "last", array(), "any")) {
                echo "class=\"rounded-foot-right\"";
            }
            echo "><div title=\"";
            echo $this->getAttribute((isset($context['item']) ? $context['item'] : null), "lesson_type_name", array(), "any");
            echo ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "topic", array(), "any")) ? (": ") : ("");
            echo $this->getAttribute((isset($context['item']) ? $context['item'] : null), "topic", array(), "any");
            echo "\">";
            echo $this->getAttribute((isset($context['item']) ? $context['item'] : null), "lesson_date_short", array(), "any");
            echo "</div></td>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "        </tr>
    </tfoot>
</table>
<br />
<input type=\"submit\" value=\"Сохранить\" ";
        // line 55
        if ((!(isset($context['existActiveLesson']) ? $context['existActiveLesson'] : null))) {
            echo "disabled=\"disabled\"";
        }
        echo "/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=\"submit\" value=\"Закончить урок\" onClick=\"javascript:this.form.action.value='close';\" ";
        // line 57
        if ((!(isset($context['existActiveLesson']) ? $context['existActiveLesson'] : null))) {
            echo "disabled=\"disabled\"";
        }
        echo "/>
</form>
</div>
<div id=\"tabs-2\">
<table id=\"rounded-corner\" width=\"100%\" align=\"center\">
<thead>
  <tr>
    <th class=\"rounded-left\">Дата</th>
    <th>Тип</th>
    <th class=\"rounded-right\">Тема урока</th>
  </tr>
</thead>
<tbody>
";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['lessons']) ? $context['lessons'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['lesson']) {
            echo "\t<tr>
\t\t<td>";
            // line 72
            echo $this->getAttribute((isset($context['lesson']) ? $context['lesson'] : null), "lesson_date_short", array(), "array");
            echo "</td>
\t\t<td>";
            // line 73
            echo $this->getAttribute((isset($context['lesson']) ? $context['lesson'] : null), "lesson_type_name", array(), "array");
            echo "</td>
\t\t<td>";
            // line 74
            echo $this->getAttribute((isset($context['lesson']) ? $context['lesson'] : null), "topic", array(), "array");
            echo "</td>
\t</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 76
        echo "</tbody>
<tfoot>
\t<tr>
    \t<td class=\"rounded-foot-left\">&nbsp;</td>
       \t<td>&nbsp;</td>
        <td class=\"rounded-foot-right\">&nbsp;</td>
\t</tr>
</tfoot>
</table>
</div>
</div>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$(\"button, input:submit\").button();
\t
\t\$('#gradeForm').ajaxForm ({ 
        \ttarget: '#gradesBlock' 
    }); 
\t\$(\".grade\").editable(\"savegrade.php\", {
\t      indicator : \"<img src='images/indicator.gif'>\",
    \t  tooltip   : \"Двойной клик для редактирования...\",
      \tplaceholder: '&nbsp;&nbsp;&nbsp;',
      \tevent     : \"dblclick\",
      \twidth : 25
  \t});
\t\$(function() {
\t\t\$( \"#lessontabs\" ).tabs({ cookie: { expires: 30 } });
\t});
});
</script>
";
    }

}
