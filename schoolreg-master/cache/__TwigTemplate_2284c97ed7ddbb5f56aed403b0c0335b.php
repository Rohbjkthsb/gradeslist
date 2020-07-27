<?php

/* admins/index.html */
class __TwigTemplate_2284c97ed7ddbb5f56aed403b0c0335b extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("admins/admin-base.html");
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

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        $this->getParentBlock("header", $context, $blocks);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        $this->getParentBlock("content", $context, $blocks);
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        $this->getParentBlock("footer", $context, $blocks);
    }

}
