<?php

/* courseset-manage/courseset-layout.html.twig */
class __TwigTemplate_ae8ff3479385ed64ca77960a74d9f172e89d09f4dab280181aa6df56626f5088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "courseset-manage/courseset-layout.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'courseset_header' => array($this, 'block_courseset_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li class=\"text-overflow\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set_menu"), "html", null, true);
        echo "</a></li>
    <li class=\"active text-overflow courseset-header-section__breadcrumb\" title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</li>
  </ol>
";
    }

    // line 9
    public function block_courseset_header($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:header", array("courseSet" => ($context["courseSet"] ?? null), "course" => ((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), null)) : (null)), "foldType" => 0)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/courseset-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  50 => 9,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/courseset-layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\courseset-layout.html.twig");
    }
}
