<?php

/* course-manage/overview/task-detail/chart-data-legend.html.twig */
class __TwigTemplate_2b6f9cbf571ee3e282c3d4a2e1ebf197e0802d02752d433f51a269dfe49cf1e2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.progress", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
<span class=\"legend-icon mll finish js-legend-btn\"  data-bar-class=\".finish-color\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.member_learn_status.learned"), "html", null, true);
        echo "
</span>
<span class=\"legend-icon mll start js-legend-btn\"  data-bar-class=\".start-color\">
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.member_learn_status.learning"), "html", null, true);
        echo "
</span>
<span class=\"legend-icon mll learn js-legend-btn\" data-bar-class=\".learn-color\">
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.member_learn_status.none"), "html", null, true);
        echo "
</span>";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/task-detail/chart-data-legend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  30 => 6,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/task-detail/chart-data-legend.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\task-detail\\chart-data-legend.html.twig");
    }
}
