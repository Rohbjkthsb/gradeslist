<?php

/* teachers/teachers-base.html */
class __TwigTemplate_a8c6b45421829e9eb8440826e6e9951e extends Twig_Template
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
        // line 46
        echo "</head>
<body>


";
        // line 51
        $this->getBlock('header', $context, $blocks);
        // line 61
        echo "
<div id=\"content_grid\">


";
        // line 66
        $this->getBlock('content', $context, $blocks);
        echo "
</div>
  

";
        // line 71
        $this->getBlock('footer', $context, $blocks);
        // line 74
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
    
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../fonts/font-awesome-4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../fonts/Linearicons-Free-v1.0.0/icon-font.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/animate/animate.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/css-hamburgers/hamburgers.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/animsition/css/animsition.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/select2/select2.min.css\">\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/daterangepicker/daterangepicker.css\">
\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/util.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/main.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../style.css\" />
\t
  ";
    }

    // line 24
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
\t<script src=\"vendor/jquery/jquery-3.2.1.min.js\"></script>
\t<script src=\"vendor/animsition/js/animsition.min.js\"></script>
\t<script src=\"vendor/bootstrap/js/popper.js\"></script>
\t<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
\t<script src=\"vendor/select2/select2.min.js\"></script>
\t<script src=\"vendor/daterangepicker/moment.min.js\"></script>
\t<script src=\"vendor/daterangepicker/daterangepicker.js\"></script>
\t<script src=\"vendor/countdowntime/countdowntime.js\"></script>
\t<script src=\"js/main.js\"></script>\t
  ";
    }

    // line 44
    public function block_title($context, array $blocks = array())
    {
        echo "Школьный журнал";
    }

    // line 43
    public function block_headtitle($context, array $blocks = array())
    {
        echo "    <title>";
        // line 44
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
        // line 23
        echo "  ";
        // line 24
        $this->getBlock('headjavascript', $context, $blocks);
        // line 42
        echo "  ";
        // line 43
        $this->getBlock('headtitle', $context, $blocks);
        // line 45
        echo "  
  ";
    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        echo "<div class=\"pageMain\" >
<div class=\"table_menu\">
<div class =\"menu_ui\"> <a href=\"../index.php\">Главная</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\"> <a href=\"index.php\">Список класов</a></div>
\t<div class=\"line_table\"> </div>
    <div class =\"menu_ui\">&nbsp;<a href=\"login.php?action=logout\">Выход</a>&nbsp;</div>
    </div>

";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        // line 72
        ob_start();
        echo "../";
        $context['rel_path'] = ob_get_clean();
        // line 73
        $this->env->loadTemplate("cr_footer.html")->display($context);
    }

}
