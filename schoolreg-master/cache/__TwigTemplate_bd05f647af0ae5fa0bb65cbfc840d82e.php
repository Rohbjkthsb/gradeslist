<?php

/* admins/classes.html */
class __TwigTemplate_bd05f647af0ae5fa0bb65cbfc840d82e extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
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
        // line 7
        $this->getParentBlock("headjavascript", $context, $blocks);
        echo "<script type=\"text/javascript\" src=\"../js/jquery.form.js\"></script>
<script type=\"text/javascript\">
var \$loading = \$('<img src=\"images/loading.gif\" alt=\"loading\" class=\"loading\">');
var \$dialog;

\$(document).ready(function(){
\t\$('#selectYearForm').ajaxForm ({ 
    \ttarget: '#classesBlock'
    }); 
});

function updateClassList() {
\t\$('#selectYearForm').submit()
}

function showDialog(callinput){
  if (\$dialog == undefined)
\t  \$dialog = \$('<div></div>');
  \$dialog = \$dialog.append(\$loading.clone());
  \$dialog.dialog({
       autoOpen: true,
       modal: true,
       title: \"Добавить класс\",
       open: function() {
    \t   \t\t\$(this).load(callinput.href);
           \t },
\t   close: function() {
\t\t   \t\t\$(this).remove();
\t\t      },
  \t   buttons: {
\t\t\t\t \t\"Сохранить\": function() {
\t\t\t\t\t\t\$(\"#addClassForm\").submit();
\t\t\t        },
\t\t\t\t\t\"Закрыть\": function() {
\t\t\t\t\t\t\$(this).dialog(\"close\");
\t\t\t\t    }
\t   },
       height: 230,
       width: 420
  });
  return false;
}
</script>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        echo "<br />
<div align=\"center\">
<form id=\"selectYearForm\" action=\"classes.php\" method=\"get\">
<span class=\"head_top\">Учебный год:
<select name=\"school_year_id\" onChange=\"javascript: \$('#selectYearForm').submit();\">
";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['school_years']) ? $context['school_years'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['school_year']) {
            echo "<option value=\"";
            // line 59
            echo $this->getAttribute((isset($context['school_year']) ? $context['school_year'] : null), "school_year_id", array(), "array");
            echo "\" ";
            if ($this->getAttribute((isset($context['school_year']) ? $context['school_year'] : null), "school_year_id", array(), "array") == (isset($context['school_year_id']) ? $context['school_year_id'] : null)) {
                echo " selected=\"selected\" ";
            }
            echo ">
";
            // line 60
            echo twig_date_format_filter($this->getAttribute((isset($context['school_year']) ? $context['school_year'] : null), "started", array(), "array"), "d.m.Y");
            echo " - ";
            echo twig_date_format_filter($this->getAttribute((isset($context['school_year']) ? $context['school_year'] : null), "finished", array(), "array"), "d.m.Y");
            echo "
</option>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school_year'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "</select>
</span>
<br /><br />
<span class=\"head_top\">Список классов: </span>
</form>
</div>

<div id=\"classesBlock\" align=\"center\">
";
        // line 71
        $this->env->loadTemplate("admins/classes-ajax.html")->display($context);
        echo "</div>
<br />
";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        $this->getParentBlock("footer", $context, $blocks);
    }

}
