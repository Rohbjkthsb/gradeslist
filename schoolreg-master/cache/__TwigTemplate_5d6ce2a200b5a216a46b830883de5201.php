<?php

/* teachers/index.html */
class __TwigTemplate_5d6ce2a200b5a216a46b830883de5201 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
            'content' => array($this, 'block_content'),
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
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo "<div align=\"center\">
<span class=\"head_top\">Список классов:</span>
<div class=\"table-corner\">
<div class= \"menu-border\"> Класс </div>
<div class= \"menu-border\">Предмет</div>
<div class= \"menu-border\"> &nbsp </div>
<div class= \"menu-border\"> &nbsp </div>

";
        // line 18
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
            echo "<div>";
            // line 19
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "class", array(), "array");
            echo "-";
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "letter", array(), "array");
            echo "</div>
<div>";
            // line 20
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "discipline", array(), "array");
            echo "</div>

<a href=\"class_lessons.php?subject_id=";
            // line 22
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "subject_id", array(), "array");
            echo "\" id=\"update_info\">  </a> 
<div> <a href=\"class_lessons.php?subject_id=";
            // line 23
            echo $this->getAttribute((isset($context['class']) ? $context['class'] : null), "subject_id", array(), "array");
            echo "\">Уроки</a></div>

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
        // line 25
        echo "</div>
</div>
 
";
    }

}
