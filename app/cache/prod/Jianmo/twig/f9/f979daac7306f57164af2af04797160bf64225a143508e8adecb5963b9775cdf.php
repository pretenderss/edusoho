<?php

/* default/header/logo.html.twig */
class __TwigTemplate_e61e44ea82ec6f667629bebd91563d0e5dfbf76bbfaa7a68085067024b321107 extends Twig_Template
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
        echo "<div class=\"navbar-header\">
  <div class=\"visible-xs  navbar-mobile\">
    <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
      <i class=\"es-icon es-icon-menu\"></i>
    </a>
    <div class=\"html-mask\"></div>
    <div class=\"nav-mobile\">
      <form class=\"navbar-form\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.search"), "html", null, true);
        echo "\" name=\"q\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>

      <ul class=\"nav navbar-nav\">
        ";
        // line 16
        $this->loadTemplate("default/top-navigation.html.twig", "default/header/logo.html.twig", 16)->display(array_merge($context, array("navigations" => ($context["navigations"] ?? null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? null), null)) : (null)), "isMobile" => true)));
        // line 17
        echo "      </ul>
    </div>
  </div>
  ";
        // line 20
        if (($context["mobile"] ?? null)) {
            // line 21
            echo "    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
  ";
        }
        // line 25
        echo "  <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
    ";
        // line 26
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")) {
            // line 27
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath(("../" . $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")), ""), "html", null, true);
            echo "\">
    ";
        } else {
            // line 29
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "default/header/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  70 => 29,  64 => 27,  62 => 26,  57 => 25,  51 => 21,  49 => 20,  44 => 17,  42 => 16,  33 => 10,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header/logo.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\header\\logo.html.twig");
    }
}
