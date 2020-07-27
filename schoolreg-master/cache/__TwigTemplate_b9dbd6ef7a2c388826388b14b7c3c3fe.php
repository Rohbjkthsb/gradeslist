<?php

/* students/login.html */
class __TwigTemplate_b9dbd6ef7a2c388826388b14b7c3c3fe extends Twig_Template
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
        echo "<div align=\"center\">
<span class=\"loginerr\">";
        // line 10
        echo (isset($context['loginError']) ? $context['loginError'] : null);
        echo "</span>
<form action=\"login.php\" method=\"post\">
<input type=\"hidden\" name=\"action\" value=\"login\" />
  <table id=\"rounded-corner\" style=\"width:auto\">
  <thead>
    <tr>
      <th class=\"rounded-left\">&nbsp;</th>
      <th colspan=\"2\">Авторизация родителей</th>
      <th class=\"rounded-right\">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  \t<tr>
    \t<td>&nbsp;</td>
    \t<td>ПИН код:</td>
    \t<td><input type=\"password\" name=\"pin_code\" /></td>
    \t<td>&nbsp;</td>
  \t</tr>
  </tbody>
  <tfoot>
    <tr>
      <td class=\"rounded-foot-left\">&nbsp;</td>
      <td colspan=\"2\" align=\"center\"><input type=\"submit\" class=\"button\" value=\"Войти\" /></td>
      <td class=\"rounded-foot-right\">&nbsp;</td>
    </tr>
  </tfoot>
  </table>
</form>
</div>
";
    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
    }

}
