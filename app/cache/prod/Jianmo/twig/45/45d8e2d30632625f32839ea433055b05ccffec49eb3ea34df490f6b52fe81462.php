<?php

/* course-manage/panel-header/students-btn-group.html.twig */
class __TwigTemplate_2c154e3bb94cd3e3c1822d622c25e53bbf1936ca55884ae8c9817757dd7cd15b extends Twig_Template
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
";
        // line 2
        if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute(($context["courseSet"] ?? null), "id", array()))) {
            // line 3
            echo "  ";
            $context["type"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.course");
        }
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_manage_student", 0))) {
            // line 6
            echo "  ";
            if (($this->getAttribute(($context["course"] ?? null), "status", array()) == "published")) {
                // line 7
                echo "    <button class=\"cd-btn cd-btn-info cd-btn-sm mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_add", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.add_btn"), "html", null, true);
                echo "</button>
    <a class=\"cd-btn cd-btn-info cd-btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_index", array("type" => "course-member", "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.batch_import_btn"), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 10
                echo "    <a class=\"cd-btn cd-btn-info cd-btn-sm mhs\" disabled id=\"student-add-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.add_failed_tips", array("%type%" => ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.plan"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.plan"))))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.add_btn"), "html", null, true);
                echo "</a>
    <a class=\"cd-btn cd-btn-info cd-btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.import_failed_tips", array("%type%" => ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.plan"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.plan"))))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.batch_import_btn"), "html", null, true);
                echo "</a>
  ";
            }
        }
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_export_student", false))) {
            // line 15
            echo "  ";
            $this->loadTemplate("export/export-btn.html.twig", "course-manage/panel-header/students-btn-group.html.twig", 15)->display(array_merge($context, array("exportFileName" => "course-students", "targetFormId" => "course-students-export", "exportClass" => "cd-btn-info cd-btn-sm", "text" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.export") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student")), "exportWebpack" => true)));
            // line 24
            echo "  <form id=\"course-students-export\" class=\"hide\">
    <input type=\"hidden\" name=\"courseSetId\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"courseId\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "id", array()), "html", null, true);
            echo "\">
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/panel-header/students-btn-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  70 => 25,  67 => 24,  64 => 15,  62 => 14,  54 => 11,  47 => 10,  40 => 8,  33 => 7,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/panel-header/students-btn-group.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\panel-header\\students-btn-group.html.twig");
    }
}
