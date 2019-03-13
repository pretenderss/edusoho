<?php

/* default/header/part/visitor-login.html.twig */
class __TwigTemplate_1db7a6208e4dc60c777e5d1a0a7bec73ba7bf8515dea6735c9d1da7c8548e0e6 extends Twig_Template
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
        echo "<li class=\"user-avatar-li nav-hover visible-xs\">
  <a href=\"javascript:;\" class=\"user-avatar-toggle\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
        echo "\">
  </a>
  <ul class=\"dropdown-menu\" role=\"menu\">
    <li class=\"user-nav-li-login\">
      <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-denglu\"></i>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.login"), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"user-nav-li-register\">
      <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-zhuce\"></i>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.register"), "html", null, true);
        echo "
      </a>
    </li>
    ";
        // line 16
        if (($context["mobile"] ?? null)) {
            // line 17
            echo "      <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_pc"), "html", null, true);
            echo "</a>
      </li>
    ";
        } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wap.version") == 1)) {
            // line 21
            echo "      <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_mobile"), "html", null, true);
            echo "</a>
      </li>
     ";
        }
        // line 25
        echo "    ";
        if ((($context["show_switch_locale"] ?? null) == 1)) {
            // line 26
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/part/visitor-login.html.twig", 26)->display(array_merge($context, array("langClass" => "text-center visible-xs")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "  </ul>
</li>

<li class=\"visitor-li hidden-xs\"><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.login"), "html", null, true);
        echo "</a></li>
<li class=\"visitor-li hidden-xs\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter(($context["_target_path"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.register"), "html", null, true);
        echo "</a></li>";
    }

    public function getTemplateName()
    {
        return "default/header/part/visitor-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  85 => 31,  80 => 28,  77 => 27,  74 => 26,  71 => 25,  65 => 22,  62 => 21,  56 => 18,  53 => 17,  51 => 16,  45 => 13,  41 => 12,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header/part/visitor-login.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\header\\part\\visitor-login.html.twig");
    }
}
