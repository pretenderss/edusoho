<?php

/* course-manage/overview/student-trendency.html.twig */
class __TwigTemplate_5ea708220b17e5c100e7ee6892a7b43ceea172f59910b56fccd44da5aa52e58c extends Twig_Template
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
        echo "<!-- 学员趋势 -->
<div class=\"statictic-body\" id=\"js-student-trendency\" data-course-id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "id", array()), "html", null, true);
        echo "\">
    <div class=\"statictic-header\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.student_trend"), "html", null, true);
        echo "
    </div>
    ";
        // line 6
        $this->loadTemplate("course-manage/overview/date-range-picker.html.twig", "course-manage/overview/student-trendency.html.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"stu-chart-container chart-container mtl\" id=\"js-student-trendency-chart\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/student-trendency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/student-trendency.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\student-trendency.html.twig");
    }
}
