<?php

/* course-manage/overview/task-detail.htm.twig */
class __TwigTemplate_a2782b1e5601ef9680a8b08f0c1d106bee658eb82dac25a8d91aaf5a85e7ea1d extends Twig_Template
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
        echo "<div class=\"statictic-body\">
    <div class=\"statictic-header\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\">
                <a href=\"#student-data-detail\" data-toggle=\"tab\">
                    ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.student_detail"), "html", null, true);
        echo "
                </a>
            </li>
            <li>
                <a href=\"#task-data-detail\" data-toggle=\"tab\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.task_detail", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
                </a>
            </li>
        </ul>
    </div>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade in active\" id=\"student-data-detail\">
            ";
        // line 18
        $this->loadTemplate("course-manage/overview/task-detail/student-chart.html.twig", "course-manage/overview/task-detail.htm.twig", 18)->display($context);
        // line 19
        echo "        </div>
        <div class=\"tab-pane fade clearfix\" id=\"task-data-detail\">
            ";
        // line 21
        $this->loadTemplate("course-manage/overview/task-detail/task-chart.html.twig", "course-manage/overview/task-detail.htm.twig", 21)->display($context);
        // line 22
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/task-detail.htm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  50 => 21,  46 => 19,  44 => 18,  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/task-detail.htm.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\task-detail.htm.twig");
    }
}
