<?php

/* activity/activity-layout.html.twig */
class __TwigTemplate_0ec808f2b9b384f7ff770fb26e10b80ca54e1d08848082e35558a16e79ac67b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "activity/activity-layout.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
            'activity_step' => array($this, 'block_activity_step'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/iframe-resizer-contentWindow.js"), 500);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_bodyClass($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("es-main-" . ($context["maincolor"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . ($context["navigationcolor"] ?? null)), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? null), "")) : (""))) {
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? null), "html", null, true);
        }
        echo " ";
        echo "task-iframe-body";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"tab-content\" id=\"iframe-content\" ";
        if ((($this->getAttribute(($context["activity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "id", array()), 0)) : (0))) {
            echo "data-status=\"edit\"";
        }
        echo ">
    ";
        // line 7
        $this->displayBlock('activity_step', $context, $blocks);
        // line 9
        echo "  </div>
";
    }

    // line 7
    public function block_activity_step($context, array $blocks = array())
    {
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "activity/activity-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  64 => 7,  59 => 9,  57 => 7,  50 => 6,  47 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/activity-layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\activity\\activity-layout.html.twig");
    }
}
