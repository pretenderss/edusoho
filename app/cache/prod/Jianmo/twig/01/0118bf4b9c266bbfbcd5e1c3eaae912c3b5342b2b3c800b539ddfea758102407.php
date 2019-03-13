<?php

/* course-manage/student/index.html.twig */
class __TwigTemplate_cb9b0980cf2612e0ac292e74c8596de903870d971e7094b1a34b29e0e9be0220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/layout.html.twig", "course-manage/student/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main_heading_class' => array($this, 'block_main_heading_class'),
            'main_heading' => array($this, 'block_main_heading'),
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/course-manage/students/index.js"));
        // line 5
        $context["course_side_nav"] = "students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main_heading_class($context, array $blocks = array())
    {
        echo "course-main-header";
    }

    // line 7
    public function block_main_heading($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("course-manage/panel-header/course-publish-header.html.twig", "course-manage/student/index.html.twig", 8)->display(array_merge($context, array("code" => ($context["course_side_nav"] ?? null), "btnGroup" => 1)));
    }

    // line 11
    public function block_main_body($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"student-table-container\" role=\"course-manage-student-index\">
      ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      ";
        // line 14
        $this->loadTemplate("course-manage/student/panel-nav.html.twig", "course-manage/student/index.html.twig", 14)->display(array_merge($context, array("panelNav" => "manage")));
        // line 15
        echo "
      <form class=\"form-inline well well-sm\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"get\" novalidate>
        <div class=\"form-group col-md-7\">
          <input class=\"form-control\" type=\"text\" style=\"width:45%\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.official_student.input_placeholder"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
          <button type=\"submit\" class=\"cd-btn cd-btn-primary\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.official_student.search"), "html", null, true);
        echo "</button>
        </div>
        <div class=\"clearfix\"></div>
      </form>
      ";
        // line 23
        if ((("forever" != $this->getAttribute(($context["course"] ?? null), "expiryMode", array())) && (twig_length_filter($this->env, ($context["students"] ?? null)) > 0))) {
            // line 24
            echo "        <button id=\"batch-update-expiry-day\" type=\"button\" class=\"cd-btn cd-btn-primary cd-mb16\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students_deadline_batch", array("courseSetId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.official_student.batch_upload_deadline"), "html", null, true);
            echo "</button>
      ";
        }
        // line 26
        echo "      <table class=\"table table-striped\" id=\"course-student-list\">
        <thead>
          <tr>
            <th><input type=\"checkbox\"  autocomplete=\"off\"  data-role=\"batch-select\"></th>
            <th width=\"23%\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"), "html", null, true);
        echo "</th>
            <th width=\"18%\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.official_student.progress"), "html", null, true);
        echo "</th>
            <th width=\"17%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("join.time"), "html", null, true);
        echo "</th>
            <th width=\"17%\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date"), "html", null, true);
        echo "</th>
            <th width=\"25%\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.official_student.operation"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            if ($context["student"]) {
                // line 39
                echo "            ";
                $context["user"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["student"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["student"], "userId", array()), array(), "array"), null)) : (null));
                // line 40
                echo "            ";
                $this->loadTemplate("course-manage/student/tr-v2.html.twig", "course-manage/student/index.html.twig", 40)->display($context);
                // line 41
                echo "          ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.official_student.empty"), "html", null, true);
            echo "</td></tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
        </tbody>
      </table>
      <nav class=\"text-center\">
        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
      </nav>
    </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 48,  168 => 44,  159 => 42,  150 => 41,  147 => 40,  144 => 39,  132 => 38,  125 => 34,  121 => 33,  117 => 32,  113 => 31,  109 => 30,  103 => 26,  95 => 24,  93 => 23,  86 => 19,  80 => 18,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  63 => 12,  60 => 11,  55 => 8,  52 => 7,  46 => 6,  36 => 3,  32 => 1,  30 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/student/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\student\\index.html.twig");
    }
}
