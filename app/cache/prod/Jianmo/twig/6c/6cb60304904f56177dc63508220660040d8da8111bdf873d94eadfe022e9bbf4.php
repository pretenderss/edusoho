<?php

/* common/price.html.twig */
class __TwigTemplate_ddc2516f227babd7237de89b10823349b936dc99bf3bcac5a3e9321d5e560b1b extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (twig_test_empty(((array_key_exists("currentCoinSetting", $context)) ? (_twig_default_filter(($context["currentCoinSetting"] ?? null))) : ("")))) {
            // line 4
            echo "    ";
            $context["currentCoinSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin");
            // line 5
            echo "    ";
            $context["coinEnabled"] = ((($this->getAttribute(($context["currentCoinSetting"] ?? null), "coin_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentCoinSetting"] ?? null), "coin_enabled", array()), false)) : (false)) && ($this->getAttribute(($context["currentCoinSetting"] ?? null), "price_type", array()) == "Coin"));
        }
        // line 7
        echo "
";
        // line 8
        if (($context["coinEnabled"] ?? null)) {
            // line 9
            echo "    <span class=\"coin\">
      ";
            // line 10
            echo twig_escape_filter($this->env, (($context["productPrice"] ?? null) * $this->getAttribute(($context["currentCoinSetting"] ?? null), "cash_rate", array())), "html", null, true);
            echo "
      <span class=\"cd-text-sm\">";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["currentCoinSetting"] ?? null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentCoinSetting"] ?? null), "coin_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 14
            echo "    <span class=\"money-symbol cd-text-sm\">¥</span><span class=\"pure-price\">";
            echo twig_escape_filter($this->env, ($context["productPrice"] ?? null), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "common/price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  43 => 11,  39 => 10,  36 => 9,  34 => 8,  31 => 7,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/price.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\common\\price.html.twig");
    }
}
