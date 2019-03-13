<?php

/* default/header/user-operation.html.twig */
class __TwigTemplate_881c47e3858dc699755b7ca0f1d5c2d38a3a98a6b77c158d742aab9932176868 extends Twig_Template
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
        echo "<div class=\"navbar-user ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
  <ul class=\"nav user-nav\">
    ";
        // line 3
        $context["show_switch_locale"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.show_switch_locale"), 0);
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 5
            echo "      ";
            $this->loadTemplate("default/header/part/user-role-manage.html.twig", "default/header/user-operation.html.twig", 5)->display($context);
            // line 6
            echo "      ";
            $this->loadTemplate("default/header/part/user-inform.html.twig", "default/header/user-operation.html.twig", 6)->display($context);
            // line 7
            echo "      ";
            $this->loadTemplate("default/header/part/user-avatar.html.twig", "default/header/user-operation.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "      ";
            $this->loadTemplate("default/header/part/visitor-login.html.twig", "default/header/user-operation.html.twig", 9)->display($context);
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ((($context["show_switch_locale"] ?? null) == 1)) {
            // line 13
            echo "      ";
            if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
                $context["langClass"] = "visitor-li visible-lg";
            } else {
                $context["langClass"] = "visitor-li hidden-xs";
            }
            // line 14
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/user-operation.html.twig", 14)->display(array_merge($context, array("langClass" => ($context["langClass"] ?? null))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "  </ul>
  <form class=\"navbar-form navbar-right hidden-xs\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
    <div class=\"form-group\">
      <input class=\"form-control js-search\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "q"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "q"), "method"))) : ("")), "html", null, true);
        echo "\" name=\"q\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.search"), "html", null, true);
        echo "\">
      <button class=\"button es-icon es-icon-search\"></button>
    </div>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "default/header/user-operation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  55 => 13,  53 => 12,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header/user-operation.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\header\\user-operation.html.twig");
    }
}
