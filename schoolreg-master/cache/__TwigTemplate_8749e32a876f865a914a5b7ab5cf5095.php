<?php

/* admins/classes-ajax.html */
class __TwigTemplate_8749e32a876f865a914a5b7ab5cf5095 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        // line 1
        echo "<table id=\"rounded-corner\">
<thead>
  <tr>
    <th class=\"rounded-left\">Класс</th>
    <th>Руководитель</th>
    <th>Учебный год</th>
    <th class=\"rounded-right\">&nbsp;</th>
  </tr>
</head>
<tbody>
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['classes_list']) ? $context['classes_list'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['class']) {
            echo "<tr>
\t<td>";
            // line 13
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "class", array(), "array");
            echo "-";
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "letter", array(), "array");
            echo "</td>
\t<td>";
            // line 14
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "teacher_name", array(), "array");
            echo "</td>
\t<td>";
            // line 15
            echo twig_date_format_filter($this->getAttribute((isset($context['current_year']) ? $context['current_year'] : null), "started", array(), "array"), "d.m.Y");
            echo "-";
            echo twig_date_format_filter($this->getAttribute((isset($context['current_year']) ? $context['current_year'] : null), "finished", array(), "array"), "d.m.Y");
            echo "</td>
\t<td><a href=\"class.php?class_id=";
            // line 16
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "class_id", array(), "array");
            echo "\">Редактировать</a></td>
</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "</tbody>
<tfoot>
\t<tr>
\t\t<td colspan=\"3\" class=\"rounded-foot-left\"></td>
\t\t<td class=\"rounded-foot-right\">
\t\t\t<a href=\"add_class.php?school_year_id=";
        // line 24
        echo (isset($context['school_year_id']) ? $context['school_year_id'] : null);
        echo "\" onClick=\"showDialog(this);return false\" class=\"add\" title=\"Добавить класс\">Добавить класс</a>
\t\t</td>
\t</tr>
</tfoot>
</table>
";
    }

}
