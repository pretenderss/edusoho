<?php

/* default/header.html.twig */
class __TwigTemplate_76ff486b057c5efb776fa5c02fe8ae08f9eed62f2c5693e295d1bbd890f5048c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/default/header/index.js"));
        // line 2
        $context["navigations"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("NavigationsTree", array());
        // line 3
        echo "
<header class=\"es-header navbar\">
  ";
        // line 5
        $this->loadTemplate("default/header/logo.html.twig", "default/header.html.twig", 5)->display($context);
        // line 6
        echo "  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 8
        $this->loadTemplate("default/top-navigation.html.twig", "default/header.html.twig", 8)->display(array_merge($context, array("navigations" => ($context["navigations"] ?? null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? null), null)) : (null)), "isMobile" => false)));
        // line 9
        echo "    </ul>
    ";
        // line 10
        $this->loadTemplate("default/header/user-operation.html.twig", "default/header.html.twig", 10)->display($context);
        // line 11
        echo "  </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  38 => 10,  35 => 9,  33 => 8,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\header.html.twig");
    }
}
