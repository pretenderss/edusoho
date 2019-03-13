<?php

/* course-manage/info.html.twig */
class __TwigTemplate_5e6658f6f4275c2a58a2fe90ab4eac2c2e8b7b54bba71edaef7a241bec5029aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/layout.html.twig", "course-manage/info.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'main_heading_class' => array($this, 'block_main_heading_class'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["course_side_nav"] = "info";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-intro.js", 1 => "libs/es-ckeditor/ckeditor.js", 2 => "libs/jquery-validation.js", 3 => "libs/bootstrap-datetimepicker.js", 4 => "libs/select2.js", 5 => "libs/perfect-scrollbar.js", 6 => "app/js/course-manage/info/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "html", null, true);
    }

    // line 8
    public function block_paddingClass($context, array $blocks = array())
    {
        echo "course-manage-body course-manage-info js-course-manage-info";
    }

    // line 9
    public function block_main_heading_class($context, array $blocks = array())
    {
        echo " course-manage-info__title ";
    }

    // line 11
    public function block_main_body($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $context["hasMulCourses"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute(($context["courseSet"] ?? null), "id", array()));
        // line 13
        echo "  ";
        if ((((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array())) || twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) || (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array())) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_manage_marketing", 0) == 1))) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"))) {
            // line 14
            echo "    <form class=\"form-horizontal\" role=\"form\" id=\"course-info-form\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
      ";
            // line 16
            echo "      ";
            if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute(($context["courseSet"] ?? null), "id", array()))) {
                // line 17
                echo "        <div class=\"course-manage-subltitle cd-mb40\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base_info"), "html", null, true);
                echo "</div>
        ";
                // line 18
                $this->loadTemplate("courseset-manage/base-info/info.html.twig", "course-manage/info.html.twig", 18)->display(array_merge($context, array("form" => "course-info-form", "button" => "course-submit")));
                // line 19
                echo "      ";
            }
            // line 20
            echo "
      ";
            // line 22
            echo "      ";
            if (($context["hasMulCourses"] ?? null)) {
                // line 23
                echo "        <div class=\"course-manage-subltitle cd-mb40\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base_info"), "html", null, true);
                echo "</div>
        ";
                // line 24
                $this->loadTemplate("course-manage/base-info/title.html.twig", "course-manage/info.html.twig", 24)->display($context);
                // line 25
                echo "      ";
            }
            // line 26
            echo "      
      ";
            // line 28
            echo "      <div class=\"course-manage-subltitle cd-mb40\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup"), "html", null, true);
            echo "</div>
      <div role=\"course-marketing-info\">
        ";
            // line 30
            $this->loadTemplate("course-manage/base-info/marketing.html.twig", "course-manage/info.html.twig", 30)->display($context);
            // line 31
            echo "      </div>

      ";
            // line 34
            echo "      <div class=\"course-manage-subltitle cd-mb40\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base_setup.rules"), "html", null, true);
            echo "</div>
      <div role=\"course-base-rule\">
        ";
            // line 36
            $this->loadTemplate("course-manage/base-info/rule.html.twig", "course-manage/info.html.twig", 36)->display($context);
            // line 37
            echo "      </div>
      
      <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-8\">
          <button id=\"course-submit\" type=\"button\" class=\"cd-btn cd-btn-primary\" data-loading-text=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
            echo "</button>
          <div id=\"test\"></div>
        </div>
      </div>

      ";
            // line 46
            if (( !($context["hasMulCourses"] ?? null) && ($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "normal"))) {
                // line 47
                echo "        <div class=\"course-manage-intro js-plan-intro hidden\">
          <div class=\"course-manage-intro__outer js-plan-intro-btn\">
            <div class=\"course-manage-intro__inner\"><i class=\"es-icon es-icon-zhinan\"></i></div>
          </div>
          <div class=\"mtm course-manage-intro__tip\">";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base_plan_intro"), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 54
            echo "      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        } else {
            // line 57
            echo "    <div class=\"cd-alert cd-alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.no_permission_tips"), "html", null, true);
            echo "</div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  161 => 54,  155 => 51,  149 => 47,  147 => 46,  137 => 41,  131 => 37,  129 => 36,  123 => 34,  119 => 31,  117 => 30,  111 => 28,  108 => 26,  105 => 25,  103 => 24,  98 => 23,  95 => 22,  92 => 20,  89 => 19,  87 => 18,  82 => 17,  79 => 16,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  59 => 9,  53 => 8,  47 => 7,  37 => 3,  33 => 1,  31 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/info.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\info.html.twig");
    }
}
