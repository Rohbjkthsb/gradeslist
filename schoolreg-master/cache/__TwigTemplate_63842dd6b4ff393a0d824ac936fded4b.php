<?php

/* students/students-base.html */
class __TwigTemplate_63842dd6b4ff393a0d824ac936fded4b extends Twig_Template
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
        // line 43
        echo "</head>
<body>
<div id=\"header\" align=\"center\">
";
        // line 47
        $this->getBlock('header', $context, $blocks);
        // line 71
        echo "</div>
  <br />
  <div id=\"content\">";
        // line 74
        $this->getBlock('content', $context, $blocks);
        echo "</div>
  <div id=\"footer\" align=\"center\">
";
        // line 76
        $this->getBlock('footer', $context, $blocks);
        // line 78
        echo "  </div>
</body>
</html>
";
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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/util.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/main.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../style.css\" />
  ";
    }

    // line 21
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
\t<script src=\"js/main.js\"></script>
  ";
    }

    // line 41
    public function block_title($context, array $blocks = array())
    {
        echo "Школьный журнал";
    }

    // line 40
    public function block_headtitle($context, array $blocks = array())
    {
        echo "    <title>";
        // line 41
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
        // line 20
        echo "  ";
        // line 21
        $this->getBlock('headjavascript', $context, $blocks);
        // line 39
        echo "  ";
        // line 40
        $this->getBlock('headtitle', $context, $blocks);
        // line 42
        echo "  
  ";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        echo " 
 <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"table_menu\" style=\"width:200px\">
  <tr>
    <td><img src=\"images/circle_left_top.gif\" alt=\"\" width=\"6\" height=\"6\"></td>
    <td valign=\"top\" class=\"border_top\"><img src=\"images/border.gif\" alt=\"\" width=\"1\" height=\"1\"></td>
    <td><img src=\"images/circle_right_top.gif\" alt=\"\" width=\"6\" height=\"6\"></td>
  </tr>
  <tr>
    <td class=\"border_left\">&nbsp;</td>
    <td class=\"padding\"><table>
      <tr>
        <td nowrap=\"nowrap\">&nbsp;<a href=\"index.php\">Просмотр оценок</a>&nbsp;</td>
        <td align=\"center\"><img src=\"../images/dec.png\" alt=\"\" width=\"1\" height=\"51\"></td>
        <td>&nbsp;<a href=\"login.php?action=logout\">Выход</a>&nbsp;</td>
      </tr>
    </table></td>
    <td class=\"border_right\">&nbsp;</td>
  </tr>
  <tr>
    <td><img src=\"images/circle_left_bottom.gif\" alt=\"\" width=\"6\" height=\"6\"></td>
    <td width=\"99%\" valign=\"bottom\" class=\"border_bottom\"><img src=\"images/border.gif\" alt=\"\" width=\"1\" height=\"1\"></td>
    <td><img src=\"images/circle_right_bottom.gif\" alt=\"\" width=\"6\" height=\"6\"></td>
  </tr>
</table>
";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        $this->env->loadTemplate("cr_footer.html")->display($context);
    }

}
