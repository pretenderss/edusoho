<?php

/* testpaper/manage/form-breadcrumb.html.twig */
class __TwigTemplate_271aef675e4717babc37f4645fe1a877027cb3cd4c53dd05e9dae14db451d7c3 extends Twig_Template
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
        echo "<ol class=\"breadcrumb\">
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.bread_crumbs", array("%testpaperManageUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "%name%" => ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create")))));
        echo "
</ol>
";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/form-breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/form-breadcrumb.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\testpaper\\manage\\form-breadcrumb.html.twig");
    }
}
