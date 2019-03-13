<?php

/* course-manage/overview/task-detail/task-chart.html.twig */
class __TwigTemplate_c3c3a5f63a17279d716f23961c1702843eefdbe6943c2c14d3b521945ec65fda extends Twig_Template
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
        echo "<span class=\"select-content\">
  <form class=\"js-task-detail\" id=\"overview-task-list\">
    <input class=\"select-time-input\" type=\"text\" name=\"titleLike\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.study_detail.name", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "\">
    <i class=\"es-icon es-icon-search cursor-pointer js-task-detail-search\"></i>
    <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "id", array()), "html", null, true);
        echo "\">
  </form>
</span>
";
        // line 8
        $this->loadTemplate("export/export-btn.html.twig", "course-manage/overview/task-detail/task-chart.html.twig", 8)->display(array_merge($context, array("exportFileName" => "course-overview-task-list", "targetFormId" => "overview-task-list", "exportClass" => "cd-btn-sm pull-right cd-btn-primary", "exportWebpack" => "ture")));
        // line 16
        echo "<div id=\"task-data-chart\"
  data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_task_detail", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\"
  data-form=\".js-task-detail\"
  class=\"mtl detail-chart-container chart-container text-sm\">
</div>";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/task-detail/task-chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 17,  36 => 16,  34 => 8,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/task-detail/task-chart.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\task-detail\\task-chart.html.twig");
    }
}
