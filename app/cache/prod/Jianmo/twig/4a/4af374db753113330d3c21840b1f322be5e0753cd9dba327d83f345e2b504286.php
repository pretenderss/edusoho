<?php

/* course-manage/panel-header/course-publish-header.html.twig */
class __TwigTemplate_113fd60f1b73fc3b2c5dc1ff83acbb3c4500499865c7b28b9603295ce768d073 extends Twig_Template
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
        $context["side_navs"] = array("tasks" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task"), "info" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "marketing" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup"), "teachers" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "students" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage"), "testpaper-check" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_check"), "homework-check" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.homework_check"), "dashboard" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard"), "orders" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.order"), "overview" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_overview"));
        // line 4
        $context["menuType"] = "course";
        // line 5
        if (twig_in_filter(($context["course_side_nav"] ?? null), array(0 => "base", 1 => "detail", 2 => "cover", 3 => "question", 4 => "testpaper", 5 => "files", 6 => "plan"))) {
            // line 6
            echo "    ";
            $context["menuType"] = "courseSet";
        }
        // line 8
        echo "
";
        // line 10
        echo "
<div class=\"cd-main__title\">
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["side_navs"] ?? null), ($context["code"] ?? null), array(), "array")), "html", null, true);
        echo "
</div>
";
        // line 14
        if (((array_key_exists("btnGroup", $context)) ? (_twig_default_filter(($context["btnGroup"] ?? null))) : (""))) {
            // line 15
            echo "  <div class=\"course-main-header__operation\">
    ";
            // line 16
            $this->loadTemplate((("course-manage/panel-header/" . ($context["code"] ?? null)) . "-btn-group.html.twig"), "course-manage/panel-header/course-publish-header.html.twig", 16)->display(array_merge($context, array("code" => ($context["side_nav"] ?? null))));
            // line 17
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/panel-header/course-publish-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  46 => 16,  43 => 15,  41 => 14,  36 => 12,  32 => 10,  29 => 8,  25 => 6,  23 => 5,  21 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/panel-header/course-publish-header.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\panel-header\\course-publish-header.html.twig");
    }
}
