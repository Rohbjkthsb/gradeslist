<?php

/* install/install-base.html */
class __TwigTemplate_231fbcc930c255130bd653b8a0c41c4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    public function display(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html lang=\"ru\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
";
        // line 5
        $this->getBlock('head', $context, $blocks);
        // line 13
        echo "</head>
<body>
  <div id=\"pageHeader\">Установка системы \"Школьный журнал\"</div>
  <div id=\"stepDesc\">Шаг ";
        // line 17
        echo (isset($context['step']) ? $context['step'] : null);
        echo " - ";
        echo (isset($context['stepDesc']) ? $context['stepDesc'] : null);
        echo "</div>
  <div id=\"content\">";
        // line 18
        $this->getBlock('content', $context, $blocks);
        echo "</div>
  <br />
  <div id=\"footer\" align=\"center\">
";
        // line 21
        $this->getBlock('footer', $context, $blocks);
        // line 24
        echo "  </div>
</body>
";
    }

    // line 7
    public function block_headcss($context, array $blocks = array())
    {
        echo "  
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../style.css\" />
  ";
    }

    // line 10
    public function block_headjavascript($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Школьный журнал";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\" />
  ";
        // line 7
        $this->getBlock('headcss', $context, $blocks);
        // line 9
        echo "  ";
        // line 10
        $this->getBlock('headjavascript', $context, $blocks);
        // line 11
        echo "    <title>";
        // line 12
        $this->getBlock('title', $context, $blocks);
        echo "</title>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        // line 22
        ob_start();
        echo "../";
        $context['rel_path'] = ob_get_clean();
        // line 23
        $this->env->loadTemplate("cr_footer.html")->display($context);
    }

}
