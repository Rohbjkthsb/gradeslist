<?php

/* students/login.html */
class __TwigTemplate_b833bb9cad357bb625df5a78981e2bf5 extends Twig_Template
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
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        echo "

<div class=\"limiter\">
<span class=\"loginerr\"></span>
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\" style=\"width: 50%;\">
\t\t\t
\t\t\t\t<div class=\"login100-form-title\" style=\"background-image: url(../images/bg-01.jpg);\">
\t\t\t\t\t<span class=\"login100-form-title-1\">
\t\t\t\t\t\tВход для ученика
\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t<form action=\"login.php\" method=\"post\" class=\"login100-form validate-form\">
\t\t\t\t

\t\t\t\t<div class=\"wrap-input100 validate-input m-b-18\" style=\"height: 83.1px\" data-validate = \"Password is required\">
\t\t\t\t\t
\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pin_code\" style=\"height: 117.1px;\" placeholder=\"";
        // line 27
        echo (isset($context['loginError']) ? $context['loginError'] : null);
        echo "\">
\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-sb-m w-full p-b-30\">
\t\t\t\t\t\t<div class=\"contact100-form-checkbox\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"txt1\">
\t\t\t\t\t\t\t\tЗабыли ПИН?
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container-login100-form-btn\" style=\"margin-top:35px\">
\t\t\t\t\t\t<button class=\"login100-form-btn\" type=\"submit\" >
\t\t\t\t\t\t\tВойти
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t\t</div></div></div>
";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
    }

}
