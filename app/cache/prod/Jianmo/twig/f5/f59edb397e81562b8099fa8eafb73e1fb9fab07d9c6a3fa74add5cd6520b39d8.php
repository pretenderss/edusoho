<?php

/* lesson-manage/header.html.twig */
class __TwigTemplate_b4c590191fd5b4e98f03c525297eb1302b121d25c1830d704dee841eea0f9a45 extends Twig_Template
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
        echo "<div class=\"task-list-header clearfix js-task-list-header\">
  <span data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" title=\"\" data-html=\"true\" data-content=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.published_lessons"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "publishLessonNum", array()), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.unpublished_lessons"), "html", null, true);
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "lessonNum", array()) - $this->getAttribute(($context["course"] ?? null), "publishLessonNum", array())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.total_lessons"), "html", null, true);
        echo "<span class=\"cd-mr16 cd-ml8\" id=\"task-num\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "lessonNum", array()), "html", null, true);
        echo "</span></span>
  ";
        // line 3
        $context["taskPerDay"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseDailyTasksNum($this->getAttribute(($context["course"] ?? null), "id", array()));
        // line 4
        echo "  ";
        if (((array_key_exists("taskPerDay", $context)) ? (_twig_default_filter(($context["taskPerDay"] ?? null), false)) : (false))) {
            // line 5
            echo "  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.everyday_finish_tasks", array("%taskPerDay%" => ($context["taskPerDay"] ?? null)));
            echo "
  ";
        }
        // line 7
        echo "  ";
        // line 8
        echo "    ";
        // line 9
        echo "  ";
        // line 10
        echo "  <label id=\"isHideUnPublish\" class=\"cd-switch task-list-header__switch ";
        if (($this->getAttribute(($context["course"] ?? null), "isHideUnpublish", array()) == 1)) {
            echo "checked";
        }
        echo " hidden\">
    <input type=\"checkbox\" class=\"js-switch\" name=\"isHideUnpublish\" id=\"isHideUnpublish\" data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_change_lesson_show_status", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
  </label>

  <div class=\"pull-right\">
    <button class=\"cd-btn cd-btn-primary cd-btn-sm cd-mr16 js-lesson-create-btn\" id=\"step-3\" data-url=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.manage.create_lesson"), "html", null, true);
        echo "
    </button>

    ";
        // line 19
        if (((($this->getAttribute(($context["courseSet"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "type", array()), "")) : ("")) == "normal")) {
            // line 20
            echo "      <button class=\"cd-btn cd-btn-default cd-btn-sm cd-mr16 js-batch-add ";
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "local")) {
                echo "btn-default-popover";
            }
            echo "\"
        ";
            // line 21
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "local")) {
                // line 22
                echo "          data-toggle=\"popover\" data-placement=\"top\" data-trigger=\"hover\" data-container=\".js-batch-add\"
          data-content=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.batch_create_tips"), "html", null, true);
                echo "\"
        ";
            } else {
                // line 25
                echo "          data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
          data-url=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_batch_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "mode" => ((array_key_exists("taskMode", $context)) ? (_twig_default_filter(($context["taskMode"] ?? null), "")) : ("")), "token" => $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken("course-task", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "private"))), "html", null, true);
                echo "\"
        ";
            }
            // line 27
            echo ">
        ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.batch_create_btn"), "html", null, true);
            echo "
      </button>
    ";
        }
        // line 31
        echo "
    <div class=\"cd-dropdown\" data-toggle=\"cd-dropdown\">
      <button class=\"cd-btn cd-btn-default cd-btn-sm\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.field.create"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter")), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("unit")), "html", null, true);
        echo "<span class=\"caret\"></span>
      </button>

      <ul class=\"dropdown-menu task-list-header__dropdown\" role=\"menu\">
        <li>
          <a href=\"javascript:;\" id=\"chapter-create-btn\" data-position data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"
            data-keyboard=\"false\" data-url=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_manage", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.add_chapter_btn", array("%chapter_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter")))), "html", null, true);
        echo "
          </a>
        </li>
        <li>
          <a href=\"javascript:;\" id=\"chapter-create-btn\" data-position data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_manage", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "unit")), "html", null, true);
        echo "\">
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.add_part_btn", array("%part_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("unit")))), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "lesson-manage/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  139 => 45,  132 => 41,  128 => 40,  116 => 34,  111 => 31,  105 => 28,  102 => 27,  97 => 26,  94 => 25,  89 => 23,  86 => 22,  84 => 21,  77 => 20,  75 => 19,  69 => 16,  65 => 15,  58 => 11,  51 => 10,  49 => 9,  47 => 8,  45 => 7,  39 => 5,  36 => 4,  34 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/header.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\header.html.twig");
    }
}
