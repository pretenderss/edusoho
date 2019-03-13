<?php

/* course-manage/overview/date-range-picker.html.twig */
class __TwigTemplate_8fa10707eff681cb28f6f2231ac2b4d5565366fe0b22e5be6d2e7829555e30b1 extends Twig_Template
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
        echo "<div id=\"date-range-picker\">
  <span class=\"select-content\">
    <input class=\"select-time-input js-date-range-input\" type=\"text\" name=\"course-datetime\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "-6 days", "Y/m/d"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y/m/d"), "html", null, true);
        echo "\">
    <i class=\"es-icon es-icon-arrowdropdown\"></i>
  </span>
  <a href=\"javascript:;\" class=\"date-change is-date-change js-quick-day-pick week\" data-days=\"7\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.student_trend_seven_days"), "html", null, true);
        echo "</a>
  <a href=\"javascript:;\" class=\"date-change is-date-change js-quick-day-pick month\" data-days=\"30\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.student_trend_thirty_days"), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/date-range-picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/date-range-picker.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\date-range-picker.html.twig");
    }
}
