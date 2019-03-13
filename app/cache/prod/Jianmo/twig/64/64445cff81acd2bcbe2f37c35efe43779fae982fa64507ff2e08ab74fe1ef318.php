<?php

/* courseset-manage/sidebar.html.twig */
class __TwigTemplate_3b6cfd0a0049d8ed32f435ec97dbf069e7de471984906a6aedbf1d70fa08b303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'side' => array($this, 'block_side'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('side', $context, $blocks);
    }

    public function block_side($context, array $blocks = array())
    {
        // line 2
        echo "  <div class=\"cd-sidebar locked js-sidenav\" data-course-length=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseCount($this->getAttribute(($context["courseSet"] ?? null), "id", array())), "html", null, true);
        echo "\">
    <ul class=\"cd-sidebar__list\">
      <div class=\"js-sidenav-course-menu\">
        <li class=\"cd-sidebar__item ";
        // line 5
        if ((($context["course_side_nav"] ?? null) == "info")) {
            echo "active";
        }
        echo "\">
          ";
        // line 6
        if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
            // line 7
            echo "            <a class=\"pl10\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "info")), "html", null, true);
            echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "html", null, true);
            echo "
            </a>
          ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "html", null, true);
            echo "
            </a>
          ";
        }
        // line 15
        echo "        </li>
        <li class=\"cd-sidebar__item ";
        // line 16
        if ((($context["course_side_nav"] ?? null) == "tasks")) {
            echo "active";
        }
        echo "\">
          ";
        // line 17
        if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
            // line 18
            echo "            <a class=\"pl10\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "tasks")), "html", null, true);
            echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task"), "html", null, true);
            echo "
            </a>
          ";
        } else {
            // line 22
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task"), "html", null, true);
            echo "
            </a>
          ";
        }
        // line 26
        echo "        </li>
        ";
        // line 28
        echo "        ";
        if ((($context["hasLiveTasks"] ?? null) || ($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "live"))) {
            // line 29
            echo "          <li class=\"cd-sidebar__item ";
            if ((($context["course_side_nav"] ?? null) == "replay")) {
                echo "active";
            }
            echo "\">
            ";
            // line 30
            if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
                // line 31
                echo "              <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "replay")), "html", null, true);
                echo "\">
                <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.replay_manage"), "html", null, true);
                echo "
              </a>
            ";
            } else {
                // line 35
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_replay", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.replay_manage"), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 39
            echo "          </li>
        ";
        }
        // line 41
        echo "        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>

        <li class=\"cd-sidebar__item ";
        // line 43
        if ((($context["course_side_nav"] ?? null) == "teachers")) {
            echo "active";
        }
        echo "\">
          ";
        // line 44
        if ($this->getAttribute(($context["courseSet"] ?? null), "locked", array())) {
            // line 45
            echo "            <a class=\"pl10\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "sideNav" => "teachers")), "html", null, true);
            echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "html", null, true);
            echo "
            </a>
          ";
        } else {
            // line 49
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_teachers", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "html", null, true);
            echo "
            </a>
          ";
        }
        // line 53
        echo "        </li>

        <li class=\"cd-sidebar__item ";
        // line 55
        if ((($context["course_side_nav"] ?? null) == "students")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.student_manage"), "html", null, true);
        echo "
          </a>
        </li>


        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>

        <li class=\"cd-sidebar__item ";
        // line 64
        if ((($context["course_side_nav"] ?? null) == "testpaper-check")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_testpaper_check_list", array("id" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_check"), "html", null, true);
        echo "
          </a>
        </li>
        <li class=\"cd-sidebar__item ";
        // line 68
        if ((($context["course_side_nav"] ?? null) == "homework-check")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_homework_check_list", array("id" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.homework_check"), "html", null, true);
        echo "
          </a>
        </li>

        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>
        <li class=\"cd-sidebar__item ";
        // line 74
        if ((($context["course_side_nav"] ?? null) == "overview")) {
            echo "active";
        }
        echo "\" id=\"step-0\">
          <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_overview", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_overview"), "html", null, true);
        echo "
          </a>
        </li>
        ";
        // line 79
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud")) {
            // line 80
            echo "          <li class=\"cd-sidebar__item ";
            if ((($context["course_side_nav"] ?? null) == "question_marker")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_question_marker", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_marker_statistics"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 85
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_search_order") == 1))) {
            // line 86
            echo "          <li class=\"cd-sidebar__item ";
            if ((($context["course_side_nav"] ?? null) == "orders")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_orders", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["curCourse"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.order"), "html", null, true);
            echo "
            </a>
          </li>
        ";
        }
        // line 91
        echo "      </div>
    </ul>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  279 => 91,  270 => 87,  263 => 86,  260 => 85,  254 => 82,  250 => 81,  243 => 80,  241 => 79,  235 => 76,  231 => 75,  225 => 74,  215 => 69,  209 => 68,  201 => 65,  195 => 64,  185 => 57,  181 => 56,  175 => 55,  171 => 53,  165 => 50,  160 => 49,  154 => 46,  149 => 45,  147 => 44,  141 => 43,  137 => 41,  133 => 39,  127 => 36,  122 => 35,  116 => 32,  111 => 31,  109 => 30,  102 => 29,  99 => 28,  96 => 26,  90 => 23,  85 => 22,  79 => 19,  74 => 18,  72 => 17,  66 => 16,  63 => 15,  57 => 12,  52 => 11,  46 => 8,  41 => 7,  39 => 6,  33 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/sidebar.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\sidebar.html.twig");
    }
}
