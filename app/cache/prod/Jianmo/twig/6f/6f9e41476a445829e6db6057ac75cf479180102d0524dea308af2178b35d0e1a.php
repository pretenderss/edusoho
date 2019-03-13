<?php

/* material-lib/web/form/head.html.twig */
class __TwigTemplate_d8b598a8d4ac784858b9e8616dcead50a1979ecca2d9c560d612bc95bdb7dfba extends Twig_Template
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
        echo "<div class=\"text-sm pull-right\">
\t\t<a class=\"btn btn-primary\" id=\"myShare\" href=\"javascript:;\" data-toggle=\"modal\" data-backdrop=\"static\"data-target=\"#modal\" data-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_show_sharing_history");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.sharing_history.history_btn"), "html", null, true);
        echo "</a>
\t\t<a class=\"btn btn-info\" id=\"shareMaterials\" href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.my_sharing.my_btn"), "html", null, true);
        echo "</a>
\t\t";
        // line 9
        echo "\t<input type=\"hidden\" name=\"source\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("source", $context)) ? (_twig_default_filter(($context["source"] ?? null), "")) : ("")), "html", null, true);
        echo "\">

</div>
";
    }

    public function getTemplateName()
    {
        return "material-lib/web/form/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "material-lib/web/form/head.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\material-lib\\web\\form\\head.html.twig");
    }
}
