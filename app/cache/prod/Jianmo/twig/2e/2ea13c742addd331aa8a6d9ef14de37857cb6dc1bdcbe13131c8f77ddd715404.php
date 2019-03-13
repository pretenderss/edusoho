<?php

/* lesson-manage/default/tasks.html.twig */
class __TwigTemplate_aced409245d269aa28196a6083e8fae2ef77b2241b2b409ee6ba4420f789a2d1 extends Twig_Template
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
        echo "  
<div class=\"settings-list js-settings-list clearfix\">
  <div class=\"settings-item ";
        // line 3
        if ((($this->getAttribute(($context["tasks"] ?? null), "preparation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "preparation", array()), null)) : (null))) {
            echo " active ";
        }
        echo "\">
    <a href=\"javascript:;\" 
      data-backdrop=\"static\" data-keyboard=\"false\"
      data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\"
      ";
        // line 7
        if ( !(($this->getAttribute(($context["tasks"] ?? null), "preparation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "preparation", array()), null)) : (null))) {
            // line 8
            echo "        class=\"js-lesson-create-btn\"
        data-content=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.preparation_tips", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
            echo "\"
        data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "preparation", "categoryId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
            echo "\">
      ";
        } else {
            // line 12
            echo "        data-toggle=\"modal\" data-target=\"#modal\"
        data-content=\"<i class='mr10 es-icon
          ";
            // line 14
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "preparation", array()), "type", array()))) {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "preparation", array()), "type", array())), "icon", array()), "html", null, true);
                echo "
          ";
            }
            // line 16
            echo "'></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "preparation", array()), "title", array())), "html", null, true);
            echo "\"
        data-url= \"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "preparation", array()), "id", array()), "courseId" => $this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "preparation", array()), "courseId", array()), "type" => "preparation", "categoryId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
            echo "\">
      ";
        }
        // line 19
        echo "      <i class=\"mrm es-icon es-icon-yulan \"
        ";
        // line 20
        if ((($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "preparation", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "preparation", array(), "any", false, true), "id", array()), null)) : (null))) {
            // line 21
            echo "          data-role=\"task\"
        ";
        }
        // line 22
        echo ">
      </i>
      ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.preparation"), "html", null, true);
        echo "
    </a>
    <i class=\"es-icon es-icon-angledoubleright after\"></i>
  </div>
  <div class=\"settings-item js-settings-item active\">
    <a href=\"javascript:;\" data-role='update-task' data-toggle=\"modal\" data-target=\"#modal\"
      data-url=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute(($context["task"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "type" => "lesson")), "html", null, true);
        echo "\"
      data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\"
      data-content=\"<i class='mr10 es-icon
        ";
        // line 33
        if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "mediaType", array()))) {
            // line 34
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array()), "mediaType", array())), "icon", array()), "html", null, true);
            echo "
        ";
        }
        // line 35
        echo " '></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["task"] ?? null), "title", array())), "html", null, true);
        echo "\">
      <i class=\"es-icon es-icon-book mrm\" data-role=\"task\"></i>
      ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.task", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
    </a>
    <i class=\"es-icon es-icon-angledoubleright after\"></i>
  </div>
  <div class=\"settings-item ";
        // line 41
        if ((($this->getAttribute(($context["tasks"] ?? null), "exercise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "exercise", array()), null)) : (null))) {
            echo " active ";
        }
        echo "\">
    <a href=\"javascript:;\" data-backdrop=\"static\" data-keyboard=\"false\"
      data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\"
      ";
        // line 44
        if ( !(($this->getAttribute(($context["tasks"] ?? null), "exercise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "exercise", array()), null)) : (null))) {
            // line 45
            echo "        class=\"js-lesson-create-btn\" 
        data-content=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.practice_tips"), "html", null, true);
            echo "\"
        data-url=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "exercise", "categoryId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
            echo "\">
      ";
        } else {
            // line 49
            echo "        data-toggle=\"modal\" data-target=\"#modal\"
        data-content=\"<i class='mr10 es-icon
          ";
            // line 51
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "exercise", array()), "type", array()))) {
                // line 52
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "exercise", array()), "type", array())), "icon", array()), "html", null, true);
                echo "
          ";
            }
            // line 54
            echo "        '></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "exercise", array()), "title", array())), "html", null, true);
            echo "\"
        data-url=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "exercise", array()), "id", array()), "courseId" => $this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "exercise", array()), "courseId", array()), "type" => "exercise", "categoryId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
            echo "\">
      ";
        }
        // line 57
        echo "      <i class=\"es-icon es-icon-mylibrarybooks mrm\" ";
        if ((($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "exercise", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "exercise", array(), "any", false, true), "id", array()), null)) : (null))) {
            echo "data-role=\"task\"";
        }
        echo "></i>
      ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.practice"), "html", null, true);
        echo "
    </a>
    <i class=\"es-icon es-icon-angledoubleright after\"></i>
  </div>
  <div class=\"settings-item ";
        // line 62
        if ((($this->getAttribute(($context["tasks"] ?? null), "homework", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "homework", array()), null)) : (null))) {
            echo " active ";
        }
        echo "\">
    <a href=\"javascript:;\" 
      data-backdrop=\"static\" data-keyboard=\"false\"
      data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\"
      ";
        // line 66
        if ( !(($this->getAttribute(($context["tasks"] ?? null), "homework", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "homework", array()), null)) : (null))) {
            // line 67
            echo "        class=\"js-lesson-create-btn\"
        data-content=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.homework_tips"), "html", null, true);
            echo "\"
        data-url=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "homework", "categoryId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
            echo "\">
      ";
        } else {
            // line 71
            echo "        data-toggle=\"modal\" data-target=\"#modal\"
        data-content=\"<i class='mr10 es-icon
          ";
            // line 73
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "homework", array()), "type", array()))) {
                // line 74
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "homework", array()), "type", array())), "icon", array()), "html", null, true);
                echo "
          ";
            }
            // line 76
            echo "        '></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "homework", array()), "title", array())), "html", null, true);
            echo "\"
        data-url=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "homework", array()), "id", array()), "courseId" => $this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "homework", array()), "courseId", array()), "type" => "homework", "categoryId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
            echo "\">
      ";
        }
        // line 79
        echo "    <i class=\"es-icon es-icon-zuoye mrm\" ";
        if ((($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "homework", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "homework", array(), "any", false, true), "id", array()), null)) : (null))) {
            echo "data-role=\"task\"";
        }
        echo "></i>
      ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.homework"), "html", null, true);
        echo "
    </a>
    <i class=\"es-icon es-icon-angledoubleright after\"></i>
  </div>

  <div class=\"settings-item ";
        // line 85
        if ((($this->getAttribute(($context["tasks"] ?? null), "extraClass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "extraClass", array()), null)) : (null))) {
            echo " active ";
        }
        echo "\">
    <a href=\"javascript:;\" 
      data-backdrop=\"static\" data-keyboard=\"false\"
      data-help=\"popover\" data-placement=\"top\" data-html=\"true\" data-trigger=\"hover\"
      ";
        // line 89
        if ( !(($this->getAttribute(($context["tasks"] ?? null), "extraClass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tasks"] ?? null), "extraClass", array()), null)) : (null))) {
            // line 90
            echo "        class=\"js-lesson-create-btn\"
        data-content=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.extra_class_tips"), "html", null, true);
            echo "\"
        data-url=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "extraClass", "categoryId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
            echo "\">
      ";
        } else {
            // line 94
            echo "        data-toggle=\"modal\" data-target=\"#modal\"
        data-content=\"<i class='mr10 es-icon
        ";
            // line 96
            if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "extraClass", array()), "type", array()))) {
                // line 97
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "extraClass", array()), "type", array())), "icon", array()), "html", null, true);
                echo "
        ";
            }
            // line 99
            echo "        '></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "extraClass", array()), "title", array())), "html", null, true);
            echo "\"
        data-url=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("id" => $this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "extraClass", array()), "id", array()), "courseId" => $this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "extraClass", array()), "courseId", array()), "type" => "extraClass", "categoryId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
            echo "\">
      ";
        }
        // line 102
        echo "      <i class=\"es-icon es-icon-sun mrm\" ";
        if ((($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "extraClass", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["tasks"] ?? null), "extraClass", array(), "any", false, true), "id", array()), null)) : (null))) {
            echo "data-role=\"task\"";
        }
        echo "></i>
      ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.extra_class"), "html", null, true);
        echo "
    </a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "lesson-manage/default/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 103,  280 => 102,  275 => 100,  270 => 99,  264 => 97,  262 => 96,  258 => 94,  253 => 92,  249 => 91,  246 => 90,  244 => 89,  235 => 85,  227 => 80,  220 => 79,  215 => 77,  210 => 76,  204 => 74,  202 => 73,  198 => 71,  193 => 69,  189 => 68,  186 => 67,  184 => 66,  175 => 62,  168 => 58,  161 => 57,  156 => 55,  151 => 54,  145 => 52,  143 => 51,  139 => 49,  134 => 47,  130 => 46,  127 => 45,  125 => 44,  117 => 41,  110 => 37,  104 => 35,  98 => 34,  96 => 33,  90 => 30,  81 => 24,  77 => 22,  73 => 21,  71 => 20,  68 => 19,  63 => 17,  58 => 16,  52 => 15,  50 => 14,  46 => 12,  41 => 10,  37 => 9,  34 => 8,  32 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/default/tasks.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\default\\tasks.html.twig");
    }
}
