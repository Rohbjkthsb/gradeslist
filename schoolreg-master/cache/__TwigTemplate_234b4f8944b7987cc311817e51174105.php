<?php

/* teachers/login.html */
class __TwigTemplate_234b4f8944b7987cc311817e51174105 extends Twig_Template
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

    // line 7
    public function block_header($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        echo "<div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\" style=\"width: 50%;\">
\t\t\t
\t\t\t\t<div class=\"login100-form-title\" style=\"background-image: url(../images/bg-01.jpg);\">
\t\t\t\t\t<span class=\"login100-form-title-1\">
\t\t\t\t\t\tВход для учителя
\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t\t<form action=\"login.php\" method=\"post\" class=\"login100-form validate-form\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"login\" />
\t\t\t\t\t<div class=\"wrap-input100 validate-input m-b-26\" data-validate=\"Username is required\">
\t\t\t\t\t\t<span class=\"label-input100\">Логин</span>
\t\t\t\t\t\t<input class=\"input100\" type=\"login\" name=\"login\"  placeholder=\"Введите логин\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input m-b-18\" data-validate = \"Password is required\">
\t\t\t\t\t\t<span class=\"label-input100\">Пароль</span>
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"passwd\" placeholder=\"Введите пароль\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"flex-sb-m w-full p-b-30\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"txt1\">
\t\t\t\t\t\t\t\tЗабыли пароль?
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\" type=\"submit\">
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
    }

}
