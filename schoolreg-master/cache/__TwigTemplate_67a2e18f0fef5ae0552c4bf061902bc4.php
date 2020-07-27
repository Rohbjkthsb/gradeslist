<?php

/* students/index-ajax.html */
class __TwigTemplate_67a2e18f0fef5ae0552c4bf061902bc4 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
<h3>";
        // line 2
        echo $this->getAttribute((isset($context['quarter']) ? $context['quarter'] : null), "started_date", array(), "any");
        echo " - ";
        echo $this->getAttribute((isset($context['quarter']) ? $context['quarter'] : null), "finished_date", array(), "any");
        echo "</h3>
<div id=\"accordion\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['dates']) ? $context['dates'] : null));
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
        foreach ($context['_seq'] as $context['month'] => $context['monthdays']) {
            echo "    <h3><a href=\"#\">";
            // line 5
            echo (isset($context['month']) ? $context['month'] : null);
            echo "</a></h3>
    <div>
\t\t<table id=\"rounded-corner\" width=\"100%\">
\t\t<thead>
  \t\t<tr>
    \t\t<th><font size=\"1px\">Дисциплина</font></th>
";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['monthdays']) ? $context['monthdays'] : null));
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
            foreach ($context['_seq'] as $context['encdate'] => $context['day']) {
                echo "    \t\t<th><font size=\"1px\">";
                // line 12
                echo $this->getAttribute((isset($context['day']) ? $context['day'] : null), "lesson_day", array(), "any");
                echo "<br />";
                echo $this->getAttribute((isset($context['day']) ? $context['day'] : null), "lesson_weekday_w", array(), "any");
                echo "</font></th>
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
            unset($context['_seq'], $context['_iterated'], $context['encdate'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "
  \t\t</tr>
\t\t</thead>
";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['disciplines']) ? $context['disciplines'] : null));
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
            foreach ($context['_seq'] as $context['discipline_id'] => $context['discipline']) {
                echo " 
\t\t<tr>
\t\t\t<td nowrap=\"nowrap\"><font size=\"1px\">";
                // line 19
                echo (isset($context['discipline']) ? $context['discipline'] : null);
                echo "</font></td>
";
                // line 20
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_iterator_to_array((isset($context['monthdays']) ? $context['monthdays'] : null));
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
                foreach ($context['_seq'] as $context['encdate'] => $context['day']) {
                    echo "\t\t\t<td>
";
                    // line 22
                    $context['_parent'] = (array) $context;
                    $context['_iterated'] = false;
                    $context['_seq'] = twig_iterator_to_array($this->getAttribute($this->getAttribute((isset($context['grades']) ? $context['grades'] : null), (isset($context['discipline_id']) ? $context['discipline_id'] : null), array(), "array"), (isset($context['encdate']) ? $context['encdate'] : null), array(), "array"));
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
                    foreach ($context['_seq'] as $context['_key'] => $context['grade']) {
                        $context['_iterated'] = true;
                        echo " <div title=\"";
                        // line 23
                        echo $this->getAttribute((isset($context['grade']) ? $context['grade'] : null), "lesson_type_name", array(), "any");
                        echo ($this->getAttribute((isset($context['grade']) ? $context['grade'] : null), "topic", array(), "any")) ? (": ") : ("");
                        echo $this->getAttribute((isset($context['grade']) ? $context['grade'] : null), "topic", array(), "any");
                        echo "\" ";
                        if ($this->getAttribute((isset($context['grade']) ? $context['grade'] : null), "lesson_type_id", array(), "array") > 1) {
                            echo "class=\"grade_special\"";
                        }
                        echo ">";
                        echo $this->getAttribute((isset($context['grade']) ? $context['grade'] : null), "grade", array(), "array");
                        echo "</div>
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
                    if (!$context['_iterated']) {
                        // line 24
                        echo "&nbsp;
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 26
                    echo "\t\t\t</td>
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
                unset($context['_seq'], $context['_iterated'], $context['encdate'], $context['day'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 28
                echo "\t\t</tr>
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
            unset($context['_seq'], $context['_iterated'], $context['discipline_id'], $context['discipline'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "\t\t<tr>
\t\t</tr>
\t\t</table>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['month'], $context['monthdays'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "</div>
</div>
<script type=\"text/javascript\">
  \$(document).ready(function(){
\t\t\$( \"#accordion\" ).accordion();
\t});
</script>
";
    }

}
