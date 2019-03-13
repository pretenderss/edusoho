<?php

/* task/task-finished-prompt.html.twig */
class __TwigTemplate_0dffc29d5e03d516d8e4beb9f6cec9bf1a9dda68c734c15f010b260de7112b01 extends Twig_Template
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
        echo "<div class=\"task-state-modal task-state-modal-xs\">
  <div class=\"title\">
    <i class=\"es-icon es-icon-iccheckcircleblack24px color-success\"></i>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.finish_task_title", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
  </div>
  <div class=\"content\">
    <div class=\"content-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.task_title", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "%taskTitle%" => $this->getAttribute(($context["task"] ?? null), "title", array()))), "html", null, true);
        echo "</div>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.study_rate"), "html", null, true);
        echo "
    <div class=\"content-progress\">
      <div class=\"progress progress-radius mts mb0\">
        <div class=\"progress-bar  progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["finishedRate"] ?? null), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
        echo twig_escape_filter($this->env, ($context["finishedRate"] ?? null), "html", null, true);
        echo "%;min-width: 20%\">";
        echo twig_escape_filter($this->env, ($context["finishedRate"] ?? null), "html", null, true);
        echo "%</div>
      </div>

    </div>
  </div>

  ";
        // line 16
        if (($context["nextTask"] ?? null)) {
            // line 17
            echo "  <div class=\"text-right mt20\">
    <a class=\"btn btn-primary btn-sm\"
    href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["nextTask"] ?? null), "id", array()))), "html", null, true);
            echo "\"
    >";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.next_task", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
            echo "</a>
  </div>
  ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "task/task-finished-prompt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 20,  58 => 19,  54 => 17,  52 => 16,  39 => 10,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/task-finished-prompt.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\task\\task-finished-prompt.html.twig");
    }
}
