<?php

/* school/school-base.html */
class __TwigTemplate_ba736fcb9d1f4c66719cc58ab59c3b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
            'title' => array($this, 'block_title'),
            'headtitle' => array($this, 'block_headtitle'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    public function display(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
  ";
        // line 4
        $this->getBlock('head', $context, $blocks);
        // line 17
        echo "</head>
<body>
<br />
  <div id=\"header\" align=\"center\">
";
        // line 22
        $this->getBlock('header', $context, $blocks);
        // line 27
        echo "</div>
  <br />
  <div id=\"content\">";
        // line 30
        $this->getBlock('content', $context, $blocks);
        echo "</div>
  <div id=\"footer\" align=\"center\">
";
        // line 32
        $this->getBlock('footer', $context, $blocks);
        // line 34
        echo "  </div>
</body>
</html>
";
    }

    // line 6
    public function block_headcss($context, array $blocks = array())
    {
        echo "  \t
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"ui-theme/";
        // line 7
        echo (isset($context['ui_theme']) ? $context['ui_theme'] : null);
        echo "/jquery-ui.css\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"style.css\" />
  ";
    }

    // line 10
    public function block_headjavascript($context, array $blocks = array())
    {
        echo "    <script type=\"text/javascript\" src=\"js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.cookie.js\"></script>
  ";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "Школьный Журнал \"ВШЯ\" ";
    }

    // line 14
    public function block_headtitle($context, array $blocks = array())
    {
        echo "    <title>";
        // line 15
        $this->getBlock('title', $context, $blocks);
        echo "</title>
  ";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\" />
  ";
        // line 6
        $this->getBlock('headcss', $context, $blocks);
        // line 9
        echo "  ";
        // line 10
        $this->getBlock('headjavascript', $context, $blocks);
        // line 13
        echo "  ";
        // line 14
        $this->getBlock('headtitle', $context, $blocks);
        // line 16
        echo "  
  ";
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        echo " 
<div class=\"table_home\">
  <div class=\"table_text\">
  <h1>Школьный Журнал \"ВШЯ\"</h1>
  </div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        $this->env->loadTemplate("cr_footer.html")->display($context);
    }

}
