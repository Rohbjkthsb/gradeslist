<?php

/* teachers/class_lessons.html */
class __TwigTemplate_fc70856c82d68bf2a1e13de2bc8b6e44 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("teachers/teachers-base.html");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headcss($context, array $blocks = array())
    {
        // line 4
        $this->getParentBlock("headcss", $context, $blocks);
    }

    // line 6
    public function block_headjavascript($context, array $blocks = array())
    {
        // line 7
        $this->getParentBlock("headjavascript", $context, $blocks);
        echo "<script type=\"text/javascript\" src=\"../js/jquery.form.js\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
\tvar \$dialog = \$(\"#new-lesson-dialog\").dialog({
\t\tautoOpen: false,
\t\tresizable: false,
\t\tmodal: true,
\t\twidth: 400,
\t\tbuttons: {
\t\t\t\"Сохранить\": function() {
\t\t\t\t//alert(\"Нажата кнопка Применить\");
\t\t\t\t\$(\"#new-lesson-form\").submit();
\t\t\t\t\$(this).dialog(\"close\");
\t\t\t},
\t\t\t\"Закрыть\": function() {
\t\t\t  \$(this).dialog(\"close\");
\t\t\t}}
\t});
\t\$('#link-new-lesson').click(function() {
\t\t\$dialog.dialog('open');
\t\t// prevent the default action, e.g., following a link
\t\treturn false;
\t});
\t\$(\".date_input\").datepicker({
\t\tchangeMonth: true,
\t\tchangeYear: true
\t});
\t\$(\"button, input:submit\").button();

\t\$('#dateRangeForm').ajaxForm ({ 
    \ttarget: '#gradesBlock' 
\t}); 

\t\$('#new-lesson-form').submit(function() {
\t\t\$(this).ajaxSubmit({target: '#gradesBlock'}); 
\t\treturn false; 
\t}); 

\t\$(\"#gradesBlock\").ajaxSuccess(function(evt, request, settings){
   \t\t//alert(\"Table successfully loaded!\");
   \t});
\t\$('#dateRangeForm').submit();

});
</script>
";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        echo "<div>
<form id=\"dateRangeForm\" action=\"class_lessons.php\" method=\"post\">
\t<input name=\"action\" value=\"changeDates\" type=\"hidden\">
\t<input name=\"fromAjax\" value=\"1\" type=\"hidden\">
\t<input name=\"subject_id\" value=\"";
        // line 59
        echo (isset($context['subject_id']) ? $context['subject_id'] : null);
        echo "\" type=\"hidden\">
\t<button id=\"link-new-lesson\">Новый урок</button>
\t<input name=\"lesson_date_from\" class=\"date_input\" value=\"";
        // line 61
        echo (isset($context['date_from']) ? $context['date_from'] : null);
        echo "\" size=\"12\" type=\"text\"></td>
\t<input name=\"lesson_date_to\" class=\"date_input\" value=\"";
        // line 62
        echo (isset($context['date_to']) ? $context['date_to'] : null);
        echo "\" size=\"12\" type=\"text\"></td>
\t<input type=\"submit\" id=\"reloadgradesBlock\" value=\"Обновить таблицу оценок\" />
</form>
</div>
<div id=\"gradesBlock\"></div>
<div id=\"new-lesson-dialog\" title=\"Новый урок\">
<form id=\"new-lesson-form\" action=\"class_lessons.php\" method=\"post\">
<input name=\"action\" value=\"addlesson\" type=\"hidden\">
<input name=\"fromAjax\" value=\"1\" type=\"hidden\">
<input name=\"subject_id\" value=\"";
        // line 71
        echo (isset($context['subject_id']) ? $context['subject_id'] : null);
        echo "\" type=\"hidden\">
<table>
  <tbody><tr>
    <td>Дата урока</td>
    <td>
    <input name=\"lesson_date\" id=\"lesson_date_id\" class=\"date_input\" value=\"\" size=\"26\" type=\"text\"></td>
  </tr>

    <tr>
    <td>Тема урока</td>
    <td><input name=\"topic\" value=\"\" size=\"26\" type=\"text\"></td>
  </tr>
    <tr>
    <td>Тип урока</td>
    <td>
    <select name=\"lesson_type_id\" id=\"\$lesson_type_id\">
";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['lesson_types']) ? $context['lesson_types'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['lesson_type']) {
            echo "<option value=\"";
            // line 88
            echo $this->getAttribute((isset($context['lesson_type']) ? $context['lesson_type'] : null), "lesson_type_id", array(), "array");
            echo "\">";
            echo $this->getAttribute((isset($context['lesson_type']) ? $context['lesson_type'] : null), "lesson_type_name", array(), "array");
            echo "</option>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson_type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 89
        echo " 
</select>
    
    </td>
  </tr>
</tbody></table>

</form>
</div>
";
    }

    // line 99
    public function block_footer($context, array $blocks = array())
    {
        // line 100
        $this->getParentBlock("footer", $context, $blocks);
    }

}
