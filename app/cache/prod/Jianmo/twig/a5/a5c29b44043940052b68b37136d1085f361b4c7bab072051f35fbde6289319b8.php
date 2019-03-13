<?php

/* material-lib/web/form/nav.html.twig */
class __TwigTemplate_9348edf65ac6c52b94a379751e154781cbe68abdecd32493b92ae6260908387c extends Twig_Template
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
        echo "<div class=\"material-search-list material-tabs\">
  <span class=\"all\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.type"), "html", null, true);
        echo "</span>
  <ul class=\"js-material-tabs right-content  clearfix\">
    <li class=\"active js-type-btn\" data-value=\"\">
      <a href=\"javascript:;\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.type.all"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"js-type-btn\" data-value=\"video\">
      <a href=\"javascript:;\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.type.video"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"js-type-btn\" data-value=\"flash\">
      <a href=\"javascript:;\">flash</a>
    </li>
    <li class=\"js-type-btn\" data-value=\"audio\">
      <a href=\"javascript:;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.type.audio"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"js-type-btn\" data-value=\"image\">
      <a href=\"javascript:;\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.type.image"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"js-type-btn\" data-value=\"document\">
      <a href=\"javascript:;\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.type.doc"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"js-type-btn\" data-value=\"ppt\">
      <a href=\"javascript:;\">PPT</a>
    </li>
    <li class=\"js-type-btn\" data-value=\"other\">
      <a href=\"javascript:;\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.type.other"), "html", null, true);
        echo "</a>
    </li>
    <input type=\"hidden\" name=\"type\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")), "html", null, true);
        echo "\"></ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "material-lib/web/form/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  64 => 26,  55 => 20,  49 => 17,  43 => 14,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "material-lib/web/form/nav.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\material-lib\\web\\form\\nav.html.twig");
    }
}
