<?php

/* school/index.html */
class __TwigTemplate_c59841b3f915f36558900a221330b6fc extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("school/school-base.html");
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
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo "

";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
    }

}
