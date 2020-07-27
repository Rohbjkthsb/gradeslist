<?php

/* admins/add_class-ajax.html */
class __TwigTemplate_e46e663781879ac956095969a53ad255 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
\$(document).ready(function() { 
\t\$('#addClassForm').validate({
\t\tmessages: {
\t\t\tteacher_id: \"Укажите классного руководителя\"
\t\t}
\t});

\t// bind form using ajaxForm 
    \$('#addClassForm').ajaxForm({ 
        // dataType identifies the expected content type of the server response 
        dataType:  'json', 
         // success identifies the function to invoke when the server response 
        // has been received 
        success:   processJson 
    }); 
});
function processJson(data) { 
    // 'data' is the json object returned from the server
    if (data.isError) {
    \t//alert(data.errorText);
    \t\$('#resultError').text(data.errorText);
    } else {
    \t\$('#resultError').empty();
    \tif ((\$dialog != undefined) && (\$dialog.dialog != undefined)) {
    \t\t\$dialog.dialog(\"close\");
    \t}
    \tif (typeof(updateClassList) == 'function') {
    \t\tupdateClassList();
    \t}
    }
}
</script>

<form id=\"addClassForm\" action=\"add_class.php\" method=\"post\">
<input type=\"hidden\" name=\"action\" value=\"add\" />
<input type=\"hidden\" name=\"school_year_id\" value=\"";
        // line 37
        echo (isset($context['school_year_id']) ? $context['school_year_id'] : null);
        echo "\" class=\"required\" />
<span id=\"resultError\" class=\"error\"></span>
<table>
  <tr>
    <td>Номер класса</td>
    <td>:</td>
    <td>
<select name=\"class\">
";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['class_numbers']) ? $context['class_numbers'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['class_number']) {
            echo "  <option value=\"";
            // line 46
            echo (isset($context['class_number']) ? $context['class_number'] : null);
            echo "\">";
            echo (isset($context['class_number']) ? $context['class_number'] : null);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class_number'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "</select>
\t</td>
  </tr>
  <tr>
    <td>Литерал класса</td>
    <td>:</td>
    <td>
<select name=\"letter\">
";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['class_letters']) ? $context['class_letters'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['class_letter']) {
            echo "  <option value=\"";
            // line 57
            echo (isset($context['class_letter']) ? $context['class_letter'] : null);
            echo "\">";
            echo (isset($context['class_letter']) ? $context['class_letter'] : null);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class_letter'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo "</select>
    </td>
  </tr>

  <tr>
    <td>Классный руководитель<font color=\"red\">*</font></td>
    <td>:</td>
    <td>
<select name=\"teacher_id\" id=\"teacher_id_id\" class=\"required\">
  <option value=\"\">&nbsp;-</option>
";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['teachers']) ? $context['teachers'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['teacher']) {
            echo "<option value=\"";
            // line 70
            echo $this->getAttribute((isset($context['teacher']) ? $context['teacher'] : null), "teacher_id", array(), "array");
            echo "\">";
            echo sprintf("%s %s %s", $this->getAttribute((isset($context['teacher']) ? $context['teacher'] : null), "last_name", array(), "array"), $this->getAttribute((isset($context['teacher']) ? $context['teacher'] : null), "first_name", array(), "array"), $this->getAttribute((isset($context['teacher']) ? $context['teacher'] : null), "middle_name", array(), "array"));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo " 
</select>
    </td>
  </tr>
</table>
<br />
</form>
";
    }

}
