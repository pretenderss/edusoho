<?php

/* courseset-manage/navbar.html.twig */
class __TwigTemplate_25ad0fbdcb660e331ea007f30343a95d3cb7b971167e349055c5a876286e0557 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs nav-header-section cd-mt24 clearfix\">
  ";
        // line 2
        if ( !$this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute(($context["courseSet"] ?? null), "id", array()))) {
            // line 3
            echo "    <li class=\"nav-header-section__item cd-ml32 ";
            if ((($context["side_nav"] ?? null) == "base")) {
                echo "active";
            }
            echo "\">
      ";
            // line 4
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 5
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "base")), "html", null, true);
                echo "\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
                echo "
        </a>
      ";
            } else {
                // line 9
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
                echo "</a>
      ";
            }
            // line 11
            echo "    </li>
    ";
            // line 12
            if ( !$this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute(($context["courseSet"] ?? null), "id", array()))) {
                // line 13
                echo "      <div class=\"pull-left nav-header-section-step\" id=\"step-2\">
        <li class=\"nav-header-section__item ";
                // line 14
                if ((($context["side_nav"] ?? null) == "default-course-info")) {
                    echo "active";
                }
                echo "\">
          ";
                // line 15
                if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                    // line 16
                    echo "            <a class=\"nav-header-section__link\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.plan_setting"), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 18
                    echo "            <a class=\"nav-header-section__link\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.plan_setting"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 20
                echo "        </li>
      </div>
    ";
            }
            // line 23
            echo "    <div class=\"pull-left nav-header-section-step\" id=\"step-3\">
      <li class=\"nav-header-section__item ";
            // line 24
            if ((($context["side_nav"] ?? null) == "plan")) {
                echo "active";
            }
            echo "\">
        ";
            // line 25
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 26
                echo "          <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
                echo "\">
            ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teach_plan_manage"), "html", null, true);
                echo "
          </a>
        ";
            } elseif (($this->getAttribute(            // line 29
($context["courseSet"] ?? null), "type", array()) == "live")) {
                // line 30
                echo "          <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teach_plan_manage"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 32
                echo "          <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_courses", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.filter.all_plan"), "html", null, true);
                echo "</a>
        ";
            }
            // line 34
            echo "      </li>
    </div>
  ";
        } else {
            // line 37
            echo "    <li class=\"nav-header-section__item ";
            if ((($context["side_nav"] ?? null) == "default-course-info")) {
                echo "active";
            }
            echo "\">
      ";
            // line 38
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 39
                echo "        <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("courseset.setup"), "html", null, true);
                echo "</a>
      ";
            } else {
                // line 41
                echo "        <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("courseset.setup"), "html", null, true);
                echo "</a>
      ";
            }
            // line 43
            echo "    </li>
  ";
        }
        // line 45
        echo "
  <div class=\"clearfix nav-header-section-step\" id=\"step-1\">
    <li class=\"nav-header-section__item pull-right cd-mr32 ";
        // line 47
        if ((($context["side_nav"] ?? null) == "question")) {
            echo "active";
        }
        echo "\">
      ";
        // line 48
        if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
            // line 49
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "question")), "html", null, true);
            echo "\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage"), "html", null, true);
            echo "
        </a>
      ";
        } else {
            // line 53
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage"), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 57
        echo "    </li>

    <li class=\"nav-header-section__item pull-right ";
        // line 59
        if ((($context["side_nav"] ?? null) == "testpaper")) {
            echo "active";
        }
        echo "\" data-intro-group=\"odd\">
      ";
        // line 60
        if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
            // line 61
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "testpaper")), "html", null, true);
            echo "\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage"), "html", null, true);
            echo "
        </a>
      ";
        } else {
            // line 65
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage"), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 69
        echo "    </li>

    <li class=\"nav-header-section__item pull-right cd-ml24 ";
        // line 71
        if ((($context["side_nav"] ?? null) == "files")) {
            echo "active";
        }
        echo "\" data-intro-group=\"odd\">
      ";
        // line 72
        if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
            // line 73
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "files")), "html", null, true);
            echo "\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files"), "html", null, true);
            echo "
        </a>
      ";
        } else {
            // line 77
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files"), "html", null, true);
            echo "</a>
      ";
        }
        // line 79
        echo "    </li>
  </div>

  ";
        // line 82
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course_set.menu.extension", array("courseSet" => ($context["courseSet"] ?? null), "sideNav" => ($context["side_nav"] ?? null)));
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "courseset-manage/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 82,  261 => 79,  253 => 77,  247 => 74,  242 => 73,  240 => 72,  234 => 71,  230 => 69,  224 => 66,  219 => 65,  213 => 62,  208 => 61,  206 => 60,  200 => 59,  196 => 57,  190 => 54,  185 => 53,  179 => 50,  174 => 49,  172 => 48,  166 => 47,  162 => 45,  158 => 43,  150 => 41,  142 => 39,  140 => 38,  133 => 37,  128 => 34,  120 => 32,  112 => 30,  110 => 29,  105 => 27,  100 => 26,  98 => 25,  92 => 24,  89 => 23,  84 => 20,  76 => 18,  68 => 16,  66 => 15,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  44 => 9,  38 => 6,  33 => 5,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/navbar.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\navbar.html.twig");
    }
}
