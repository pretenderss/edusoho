<?php

/* course-manage/marketing/set-reward-point.html.twig */
class __TwigTemplate_3a56f5891d15c0363b07f97fe1b00b6a8b7f40661b360280305968cd17b9b061 extends Twig_Template
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
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("reward_point.enable", 0) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("reward_point.allowTeacherSet", 0))) {
            // line 2
            echo "  <div class=\"es-piece\">
    <div class=\"form-group form-inline\">
      <label class=\"col-sm-2 control-label\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.study_award"), "html", null, true);
            echo "
      </label>
      <div class=\"col-sm-8\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.task_award"), "html", null, true);
            echo "
        <input class=\"form-control\" type=\"text\" name=\"taskRewardPoint\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "taskRewardPoint", array()), "html", null, true);
            echo "\">   / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.times"), "html", null, true);
            echo "
      </div>
    </div>
    <div class=\"form-group form-inline\">
      <label class=\"col-sm-2 control-label display\"></label>
      <div class=\"col-sm-8\">
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.course_award"), "html", null, true);
            echo "  <input class=\"form-control\" type=\"text\" name=\"rewardPoint\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "rewardPoint", array()), "html", null, true);
            echo "\">   / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.times"), "html", null, true);
            echo "
      </div>
    </div>
  </div>
  <hr class=\"mb30 bg-border-color\">
";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/marketing/set-reward-point.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  36 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/marketing/set-reward-point.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\marketing\\set-reward-point.html.twig");
    }
}
