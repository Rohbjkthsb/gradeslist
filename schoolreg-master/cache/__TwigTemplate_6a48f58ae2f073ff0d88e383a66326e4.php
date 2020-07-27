<?php

/* admins/admin-base.html */
class __TwigTemplate_6a48f58ae2f073ff0d88e383a66326e4 extends Twig_Template
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
        // line 24
        echo "</head>
<body>
";
        // line 27
        $this->getBlock('header', $context, $blocks);
        // line 46
        echo "  
  <div id=\"content_grid\">";
        // line 48
        $this->getBlock('content', $context, $blocks);
        echo "</div>
  
    ";
        // line 50
        $this->getBlock('footer', $context, $blocks);
        // line 53
        echo "  
  </div>
</body>
</html>";
    }

    // line 6
    public function block_headcss($context, array $blocks = array())
    {
        echo "  
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"../ui-theme/";
        // line 7
        echo (isset($context['ui_theme']) ? $context['ui_theme'] : null);
        echo "/jquery-ui.css\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"../thickbox.css\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../style.css\" />
  ";
    }

    // line 11
    public function block_headjavascript($context, array $blocks = array())
    {
        echo "    <script type=\"text/javascript\" src=\"../js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"../js/jquery.jeditable.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/jquery-ui.js\"></script>
    <script type=\"text/javascript\" src=\"../js/jquery.cookie.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/i18n/jquery-ui.datepicker-ru.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/jquery.validate.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/i18n/jquery.validate-ru.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/jquery.maskedinput.js\"></script>
  ";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        echo "Школьный журнал";
    }

    // line 21
    public function block_headtitle($context, array $blocks = array())
    {
        echo "    <title>";
        // line 22
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
        // line 10
        echo "  ";
        // line 11
        $this->getBlock('headjavascript', $context, $blocks);
        // line 20
        echo "  ";
        // line 21
        $this->getBlock('headtitle', $context, $blocks);
        // line 23
        echo "  
  ";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        echo "<div class=\"pageMain\" >
<div class=\"table_menu\">
<div class =\"menu_ui\"> <a href=\"../index.php\">Главная</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\"> <a href=\"classes.php\">Классы</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\"> <a href=\"teachers.php\">Учителя</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\"> <a href=\"disciplines.php\">Дисциплины</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\"> <a href=\"users.php\">Пользователи</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\"> <a href=\"curriculum.php\">Учебный план</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\"> <a href=\"index.php\">Отчет</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\">&nbsp;<a href=\"login.php?action=logout\">Выход</a>&nbsp; </div>
</div>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        ob_start();
        echo "../";
        $context['rel_path'] = ob_get_clean();
        // line 52
        $this->env->loadTemplate("cr_footer.html")->display($context);
        echo "    ";
    }

}
