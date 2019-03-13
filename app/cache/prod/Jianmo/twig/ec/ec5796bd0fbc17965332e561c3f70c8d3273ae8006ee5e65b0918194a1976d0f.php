<?php

/* courseset-manage/course-list.html.twig */
class __TwigTemplate_8bcf6e95390c65678ddeac89dcc496cdb3be81651beedd3732d0c92fc1def811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/header.html.twig", "courseset-manage/course-list.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'title' => array($this, 'block_title'),
            'planType' => array($this, 'block_planType'),
            'action' => array($this, 'block_action'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_js($context, array $blocks = array())
    {
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if (($context["hasMulCourses"] ?? null)) {
            // line 7
            echo "    <a class=\"cd-link-major\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
      ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo "
    </a>
  ";
        }
    }

    // line 13
    public function block_planType($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        if (($this->getAttribute(($context["course"] ?? null), "courseType", array()) == "default")) {
            // line 15
            echo "    <span class=\"cd-tag cd-tag-blue cd-ml8 ";
            if (twig_test_empty($this->getAttribute(($context["course"] ?? null), "title", array()))) {
                echo " default-single-span ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_default_plan"), "html", null, true);
            echo "</span>
  ";
        }
    }

    // line 19
    public function block_action($context, array $blocks = array())
    {
        // line 20
        echo "  <a class=\"pull-right cd-btn cd-btn-ghost-primary visible-xs\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.manage"), "html", null, true);
        echo "</a>
  <div class=\"pull-right hidden-xs courses-operation js-plan-operation\">
    ";
        // line 22
        if (((($this->getAttribute(($context["courseSet"] ?? null), "canManage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "canManage", array()))) : ("")) || (($this->getAttribute(($context["course"] ?? null), "canManage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "canManage", array()))) : ("")))) {
            // line 23
            echo "      <div class=\"js-plan-icon\">
        <a class=\"cd-mr32 cd-link-major\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.manage"), "html", null, true);
            echo "\"></i>
        </a>

        <div class=\"cd-dropdown\" data-toggle=\"cd-dropdown\" data-trigger=\"hover\">
          <a class=\"cd-link-major\" href=\"javascript:;\">
            <i class=\"es-icon es-icon-morehoriz\"></i>
          </a>
          <ul class=\"dropdown-menu courses-operation-dropdown\">
            <li>
              <a href=";
            // line 34
            if (((($this->getAttribute(($context["course"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "status", array()), "")) : ("")) == "published")) {
                echo "\"";
                echo twig_escape_filter($this->env, ($context["basepath"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            }
            echo " target=\"_blank\">";
            if (((($this->getAttribute(($context["course"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "status", array()), "")) : ("")) == "published")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.check.plan"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.preview.plan"), "html", null, true);
            }
            echo "</a>
            </li>
            ";
            // line 36
            if (((($this->getAttribute(($context["course"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "status", array()), "")) : ("")) == "published")) {
                // line 37
                echo "              <li>
                <a class=\"js-copy-plan\" href=\"javascript:;\"
                  data-url=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_copy", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                  ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.copy_btn"), "html", null, true);
                echo "
                </a>
              </li>
              <li>
                <a href=\"javascript:;\"
                  data-check-url=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_close_check", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                  data-url=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_close", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                  class=\"js-close-course\">
                  ";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.close"), "html", null, true);
                echo "
                </a>
              </li>
            ";
            } else {
                // line 52
                echo "              <li>
                <a href=\"javascript:;\"
                  data-url=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_publish", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                  data-pre-url=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_pre_publish", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                  data-save-url=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_publish_set_title", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                  class=\"js-publish-course\">";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.publish_btn"), "html", null, true);
                echo "</a><!-- 已发布的不能删除，可关闭 -->
              </li>
              <li>
                <a class=\"js-copy-plan\" href=\"javascript:;\"
                  data-url=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_copy", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                  ";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.copy_btn"), "html", null, true);
                echo "
                </a>
              </li>
              <li>
                <a href=\"javascript:;\"
                  data-url=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_delete", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                  class=\"js-delete-course\">";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.delete_btn"), "html", null, true);
                echo "</a>
              </li>
            ";
            }
            // line 71
            echo "
          </ul>
        </div>
      </div>
      <div class=\"js-plan-dragged-icon hidden\">
        <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-sort\"></i></a>
      </div>
    ";
        } else {
            // line 79
            echo "      <span class=\"color-gray\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.no_permission"), "html", null, true);
            echo "</span>
    ";
        }
        // line 81
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/course-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 81,  213 => 79,  203 => 71,  197 => 68,  193 => 67,  185 => 62,  181 => 61,  174 => 57,  170 => 56,  166 => 55,  162 => 54,  158 => 52,  151 => 48,  146 => 46,  142 => 45,  134 => 40,  130 => 39,  126 => 37,  124 => 36,  105 => 34,  93 => 25,  89 => 24,  86 => 23,  84 => 22,  76 => 20,  73 => 19,  61 => 15,  58 => 14,  55 => 13,  47 => 8,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/course-list.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\course-list.html.twig");
    }
}
