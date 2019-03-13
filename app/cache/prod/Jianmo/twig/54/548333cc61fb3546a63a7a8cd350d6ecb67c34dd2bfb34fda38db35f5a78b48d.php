<?php

/* lesson-manage/default/lesson.html.twig */
class __TwigTemplate_3c4e513fb42ec49c2e623952f90c708c8f96fb77b36dd93b462bfddcb3b7bda9 extends Twig_Template
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
        $context["tasks"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayIndex($this->getAttribute(($context["lesson"] ?? null), "tasks", array()), "mode");
        // line 2
        echo "  ";
        if (($this->env->getExtension('AppBundle\Twig\AppExtension')->count(($context["tasks"] ?? null)) == 0)) {
            // line 3
            echo "    ";
            $context["task"] = $this->getAttribute($this->getAttribute(($context["lesson"] ?? null), "tasks", array()), 0, array(), "array");
            // line 4
            echo "  ";
        } else {
            // line 5
            echo "    ";
            $context["task"] = (($this->getAttribute(($context["tasks"] ?? null), "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "lesson", array()), null)) : (null));
            // line 6
            echo "  ";
        }
        // line 7
        $context["isHideUnpublish"] = (($this->getAttribute(($context["course"] ?? null), "isHideUnpublish", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "isHideUnpublish", array(), "array"), false)) : (false));
        // line 8
        echo "
";
        // line 9
        $context["isShowText"] = ($this->getAttribute(($context["lesson"] ?? null), "isOptional", array()) || (($context["isHideUnpublish"] ?? null) && ($this->getAttribute(($context["lesson"] ?? null), "status", array()) != "published")));
        // line 10
        echo "
<li id=\"chapter-";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lesson"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"task-manage-item task-manage-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lesson"] ?? null), "type", array()), "html", null, true);
        echo " js-task-manage-item drag clearfix \"
    show-num=\"";
        // line 12
        if (($context["isShowText"] ?? null)) {
            echo "0";
        } else {
            echo "1";
        }
        echo "\">

  <div class=\"item-default-header clearfix\">
    <div class=\"item-line\"></div>
    <div class=\"item-content text-overflow js-item-content\">
      <span class=\"lesson-unpublish-status js-lesson-unpublish-status
        ";
        // line 18
        if (($this->getAttribute(($context["lesson"] ?? null), "status", array()) == "published")) {
            // line 19
            echo "          hidden
        ";
        }
        // line 20
        echo "\">
         ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.task_unpublished"), "html", null, true);
        echo "
      </span>

      <span class=\"cd-tag cd-tag-blue mrm js-lesson-option-tag ";
        // line 24
        if ( !$this->getAttribute(($context["lesson"] ?? null), "isOptional", array())) {
            echo "hidden";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.is_optional_task"), "html", null, true);
        echo "</span>
      ";
        // line 25
        $context["displayText"] = "";
        // line 26
        echo "
      ";
        // line 27
        if ((($this->getAttribute(($context["course"] ?? null), "isHideUnpublish", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "isHideUnpublish", array(), "array"), false)) : (false))) {
            // line 28
            echo "        ";
            if (($this->getAttribute(($context["lesson"] ?? null), "status", array()) == "published")) {
                // line 29
                echo "          ";
                $context["displayedLessonNum"] = $this->getAttribute(($context["lesson"] ?? null), "published_number", array());
                // line 30
                echo "        ";
            } else {
                // line 31
                echo "          ";
                $context["displayedLessonNum"] = "";
                // line 32
                echo "        ";
            }
            // line 33
            echo "      ";
        } else {
            // line 34
            echo "        ";
            $context["displayedLessonNum"] = $this->getAttribute(($context["lesson"] ?? null), "number", array());
            // line 35
            echo "      ";
        }
        // line 36
        echo "
      ";
        // line 37
        $context["displayText"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.lesson");
        // line 38
        echo "
      ";
        // line 39
        $context["displayText"] = (((($context["displayText"] ?? null) . "<span class=\"number mls\">") . ($context["displayedLessonNum"] ?? null)) . "</span>");
        // line 40
        echo "      ";
        $context["displayText"] = (($context["displayText"] ?? null) . "：");
        // line 41
        echo "
      <span class=\"display-text ";
        // line 42
        if (($context["isShowText"] ?? null)) {
            echo "hidden";
        }
        echo "\">
        ";
        // line 43
        echo ($context["displayText"] ?? null);
        echo "
      </span>

      ";
        // line 46
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute(($context["lesson"] ?? null), "title", array()), 30);
        echo "

      ";
        // line 48
        if (($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "mediaType", array()) === "live")) {
            // line 49
            echo "        ";
            if ( !(($this->getAttribute($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array(), "any", false, true), "ext", array(), "any", false, true), "roomCreated", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array(), "any", false, true), "ext", array(), "any", false, true), "roomCreated", array()), true)) : (true))) {
                // line 50
                echo "          <span class=\"color-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.edit_tips"), "html", null, true);
                echo "</span>
        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 51
($context["task"] ?? null), "activity", array()), "endTime", array()) < $this->getAttribute(twig_date_converter($this->env), "timestamp", array()))) {
                // line 52
                echo "          <span class=\"color-gray cd-ml8\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.live_finish_tips"), "html", null, true);
                echo "</span>
        ";
            } else {
                // line 54
                echo "          <span class=\"color-success mls\">
          ";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "startTime", array()), "Y-n-j H:i")), "html", null, true);
                echo " ~ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "endTime", array()), "H:i")), "html", null, true);
                echo "</span>
        ";
            }
            // line 57
            echo "      ";
        } else {
            // line 58
            echo "        ";
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->lengthFormat($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "length", array()), $this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "mediaType", array()))) {
                echo "<span class=\"mls\">
          （";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ActivityExtension')->lengthFormat($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "length", array()), $this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "mediaType", array())), "html", null, true);
                echo "）</span>";
            }
            // line 60
            echo "      ";
        }
        // line 61
        echo "    </div>

    <div class=\"item-actions\">
      <a class=\"cd-mr24\" data-role='update-task' href=\"javascript:;\"
        data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute(($context["task"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()))), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-edit\" data-toggle=\"tooltip\" title=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.modify", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "\" data-placement=\"top\"></i>
      </a>
      <a class=\"cd-mr24\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("id" => $this->getAttribute(($context["task"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "preview" => 1)), "html", null, true);
        echo "\" target=\"_blank\">
        <i class=\"es-icon es-icon-removeredeye\" data-toggle=\"tooltip\" title=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.preview", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "\" data-placement=\"top\"></i>
      </a>

      ";
        // line 72
        $this->loadTemplate("lesson-manage/default/lesson-manage.html.twig", "lesson-manage/default/lesson.html.twig", 72)->display($context);
        // line 73
        echo "    </div>
  </div>

  ";
        // line 76
        $this->loadTemplate("lesson-manage/default/tasks.html.twig", "lesson-manage/default/lesson.html.twig", 76)->display($context);
        // line 77
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "lesson-manage/default/lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 77,  227 => 76,  222 => 73,  220 => 72,  214 => 69,  210 => 68,  205 => 66,  201 => 65,  195 => 61,  192 => 60,  188 => 59,  183 => 58,  180 => 57,  173 => 55,  170 => 54,  164 => 52,  162 => 51,  157 => 50,  154 => 49,  152 => 48,  147 => 46,  141 => 43,  135 => 42,  132 => 41,  129 => 40,  127 => 39,  124 => 38,  122 => 37,  119 => 36,  116 => 35,  113 => 34,  110 => 33,  107 => 32,  104 => 31,  101 => 30,  98 => 29,  95 => 28,  93 => 27,  90 => 26,  88 => 25,  80 => 24,  74 => 21,  71 => 20,  67 => 19,  65 => 18,  52 => 12,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/default/lesson.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\default\\lesson.html.twig");
    }
}
