<?php

/* students/index.html */
class __TwigTemplate_72a5c4996fbe1fd2590cf473bea77feb extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("students/students-base.html");
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
        echo "<script type=\"text/javascript\">
  \$(document).ready(function(){
\t\t\$( \"#quarters-tabs\" ).tabs({ cookie: { expires: 30 } });
\t});
</script>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        echo "<h2>";
        // line 16
        echo $this->getAttribute((isset($context['year']) ? $context['year'] : null), "name_year", array(), "any");
        echo "</h2>
<div id=\"quarters-tabs\">
\t<ul>
";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['quarters']) ? $context['quarters'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['quarter']) {
            echo "\t\t<li><a href=\"index.php?fromAjax=1&quarter_id=";
            // line 20
            echo $this->getAttribute((isset($context['quarter']) ? $context['quarter'] : null), "quarter_id", array(), "array");
            echo "\">";
            echo $this->getAttribute((isset($context['quarter']) ? $context['quarter'] : null), "quarter_name", array(), "array");
            echo "</a></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quarter'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "\t</ul>
</div>
";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
    }

}
