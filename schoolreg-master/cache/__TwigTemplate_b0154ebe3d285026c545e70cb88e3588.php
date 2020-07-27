<?php

/* install/install-step-result.html */
class __TwigTemplate_b0154ebe3d285026c545e70cb88e3588 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headjavascript' => array($this, 'block_headjavascript'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("install/install-base.html");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_headjavascript($context, array $blocks = array())
    {
        echo "    ";
        // line 5
        $this->getParentBlock("headjavascript", $context, $blocks);
        echo "    <script type=\"text/javascript\" src=\"../js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/jquery.validate.js\"></script>
\t<script type=\"text/javascript\" src=\"../js/i18n/jquery.validate-ru.js\"></script>
  ";
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        echo "  ";
        // line 3
        $this->getParentBlock("head", $context, $blocks);
        echo "  ";
        // line 4
        $this->getBlock('headjavascript', $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        echo "<script type=\"text/javascript\">
\$(document).ready(function() { 
\t\$('.ValidatedForm').validate();
});
</script>

<form action=\"index.php\" method=\"post\" class=\"ValidatedForm\">
<input type=\"hidden\" name=\"step\" value=\"";
        // line 20
        echo (isset($context['step']) ? $context['step'] : null);
        echo "\" />
<input type=\"hidden\" name=\"action\" value=\"";
        // line 21
        echo ((isset($context['ErrorText']) ? $context['ErrorText'] : null)) ? ("retry") : ("next");
        echo "\" />

<table align=\"center\">
";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['log']) ? $context['log'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['logItem']) {
            echo "<tr>
<td class=\"logItemName\">";
            // line 26
            echo $this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "index", array(), "any");
            echo ".</td>
<td class=\"logItemName\">";
            // line 27
            echo $this->getAttribute((isset($context['logItem']) ? $context['logItem'] : null), "name", array(), "any");
            echo "</td>
<td class=\"logItemResult\">";
            // line 28
            echo $this->getAttribute((isset($context['logItem']) ? $context['logItem'] : null), "result", array(), "any");
            echo "</td>
</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logItem'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "</table>


<table align=\"center\">
";
        // line 35
        if ((isset($context['resultText']) ? $context['resultText'] : null)) {
            echo "  <tr>
    <td colspan=\"2\"><span class=\"resultText\">";
            // line 37
            echo (isset($context['resultText']) ? $context['resultText'] : null);
            echo "</span></td>
  </tr>
";
        }
        // line 40
        if ((isset($context['ErrorText']) ? $context['ErrorText'] : null)) {
            echo "  <tr>
    <td colspan=\"2\"><span class=\"errorText\">";
            // line 42
            echo (isset($context['ErrorText']) ? $context['ErrorText'] : null);
            echo "</span></td>
  </tr>
";
        }
        // line 45
        if ((isset($context['addNewUser']) ? $context['addNewUser'] : null)) {
            echo "  <tr>\t
    <td colspan=\"2\">&nbsp;</td>
  </tr>
  <tr>
    <td colspan=\"2\" class=\"title\">Администратор системы \"Школьный журнал\"</td>
  </tr>
  <tr>
    <td>Администратор</td>
    <td><input type=\"text\" name=\"user_name\" class=\"required\" /></td>
  </tr>
  <tr>
    <td>Пароль</td>
    <td><input type=\"text\" name=\"user_pwd\" class=\"required\" /></td>
  </tr>
";
        }
        // line 60
        echo "  <tr>
    <td colspan=\"2\" align=\"center\">
\t\t<br />
    </td>
  </tr>
  <tr>
    <td colspan=\"2\" align=\"center\">
      <input type=\"submit\" value=\"";
        // line 68
        echo ((isset($context['ErrorText']) ? $context['ErrorText'] : null)) ? ("Повторить") : ("Далее");
        echo "\" />
    </td>
  </tr>
</table>
</form>
";
    }

}
