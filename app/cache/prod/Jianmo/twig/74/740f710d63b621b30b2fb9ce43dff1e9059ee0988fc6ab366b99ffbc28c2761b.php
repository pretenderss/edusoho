<?php

/* task/finish-tip.html.twig */
class __TwigTemplate_b464dcacd5bcb26c1078241bfed84be6825c95d8851cdc73c4f9ccc0cb1c93dd extends Twig_Template
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
        $context["condition"] = (($this->getAttribute(($context["conditions"] ?? null), $this->getAttribute(($context["activity"] ?? null), "finishType", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["conditions"] ?? null), $this->getAttribute(($context["activity"] ?? null), "finishType", array()), array(), "array"))) : (""));
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute(($context["activity"] ?? null), "finishType", array()) == "time")) {
            // line 4
            echo "  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_manage.finish_tips_time", array("%finishDetail%" => $this->getAttribute(($context["activity"] ?? null), "finishData", array())));
            echo "
";
        } elseif ((($this->getAttribute(        // line 5
($context["condition"] ?? null), "describe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["condition"] ?? null), "describe", array()))) : (""))) {
            // line 6
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["condition"] ?? null), "describe", array())), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_manage.finish_select_tips_end"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "task/finish-tip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  33 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/finish-tip.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\task\\finish-tip.html.twig");
    }
}
