<?php

/* course-manage/overview/overview.html.twig */
class __TwigTemplate_14b45a2aad8b12587212f244450ad9772e2200fa1893270a692b4115c16b07c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/overview/layout.html.twig", "course-manage/overview/overview.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'overview' => array($this, 'block_overview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/overview/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/echarts.js", 1 => "app/js/course-manage/overview/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_overview($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("course-manage/overview/dashboard.html.twig", "course-manage/overview/overview.html.twig", 8)->display($context);
        // line 9
        echo "
";
        // line 10
        $this->loadTemplate("course-manage/overview/student-trendency.html.twig", "course-manage/overview/overview.html.twig", 10)->display($context);
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("course-manage/overview/finished-rate-trend.html.twig", "course-manage/overview/overview.html.twig", 12)->display($context);
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate("course-manage/overview/task-detail.htm.twig", "course-manage/overview/overview.html.twig", 14)->display($context);
        // line 15
        echo "  
";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  63 => 14,  60 => 13,  58 => 12,  55 => 11,  53 => 10,  50 => 9,  48 => 8,  45 => 7,  42 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/overview.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\overview.html.twig");
    }
}
