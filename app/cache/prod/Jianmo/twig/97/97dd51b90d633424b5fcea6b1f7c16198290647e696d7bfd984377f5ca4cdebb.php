<?php

/* default/stylesheet-webpack.html.twig */
class __TwigTemplate_06b84bf0aae18fbca36530d0301ce8b84034f2c405f91df71bef91e9f780489f extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main-v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
        // line 5
        if (($context["mobile"] ?? null)) {
            // line 6
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/mobile.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 8
        if (((($context["maincolor"] ?? null) != "default") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            // line 9
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("static-dist/app/css/main-" . ($context["maincolor"] ?? null)) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 11
        if (((($context["navigationcolor"] ?? null) != "default") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            // line 12
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("static-dist/app/css/header-" . ($context["navigationcolor"] ?? null)) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 14
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("stylesheet.webpack.extension", array("maincolor" => ($context["maincolor"] ?? null)));
        echo "

";
        // line 16
        $this->loadTemplate("stylesheet/stylesheet-custom.html.twig", "default/stylesheet-webpack.html.twig", 16)->display(array_merge($context, array("config" =>         // line 17
($context["currentTheme"] ?? null), "mobile" =>         // line 18
($context["mobile"] ?? null), "maincolor" =>         // line 19
($context["maincolor"] ?? null), "navigationcolor" =>         // line 20
($context["navigationcolor"] ?? null))));
    }

    public function getTemplateName()
    {
        return "default/stylesheet-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  65 => 19,  64 => 18,  63 => 17,  62 => 16,  57 => 14,  51 => 12,  49 => 11,  43 => 9,  41 => 8,  35 => 6,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/stylesheet-webpack.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\stylesheet-webpack.html.twig");
    }
}
