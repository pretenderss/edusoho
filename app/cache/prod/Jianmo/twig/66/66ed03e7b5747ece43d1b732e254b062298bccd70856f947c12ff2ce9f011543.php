<?php

/* course-manage/overview/finished-rate-trend.html.twig */
class __TwigTemplate_78733517f9dadbdc319e445186453af8518c4695dff22d4c716f34273168b692 extends Twig_Template
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
        echo "<!-- 完课率 -->
<div class=\"statictic-body\" id=\"finished-rate-trend\" data-course-id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"statictic-header\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.finished_course_rate"), "html", null, true);
        echo "<span class=\"link-medium es-icon es-icon-help ml5\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\"
             data-content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.finished_course_rate_tips"), "html", null, true);
        echo "\"></span>
  </div>

  ";
        // line 8
        $this->loadTemplate("course-manage/overview/date-range-picker.html.twig", "course-manage/overview/finished-rate-trend.html.twig", 8)->display($context);
        // line 9
        echo "
  <div class=\"course-chart-container chart-container mtl\" id=\"finished-rate-chart\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/finished-rate-trend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  37 => 8,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/finished-rate-trend.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\finished-rate-trend.html.twig");
    }
}
