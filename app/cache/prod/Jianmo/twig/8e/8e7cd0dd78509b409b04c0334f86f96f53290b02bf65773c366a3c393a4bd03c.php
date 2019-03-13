<?php

/* course-manage/layout.html.twig */
class __TwigTemplate_fad13cc94226ab211ea4a22c35ebe685e3ce8e8595f1ae27dc4bf8d6b6226109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "course-manage/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'courseset_header' => array($this, 'block_courseset_header'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'course_header' => array($this, 'block_course_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
            'main_heading_class' => array($this, 'block_main_heading_class'),
            'main_heading' => array($this, 'block_main_heading'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["hasMulCourses"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute(($context["courseSet"] ?? null), "id", array()));
        // line 7
        $context["side_nav"] = ((($context["hasMulCourses"] ?? null)) ? ("plan") : ("default-course-info"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 10
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li class=\"text-overflow\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set_menu"), "html", null, true);
        echo "</a></li>
    <li class=\"text-overflow courseset-header-section__breadcrumb\"><a class=\"active\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</a></li>
  </ol>
";
    }

    // line 16
    public function block_courseset_header($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:header", array("courseSet" => ($context["courseSet"] ?? null), "course" => ((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), null)) : (null)), "foldType" => 1)));
        echo "
";
    }

    // line 21
    public function block_paddingClass($context, array $blocks = array())
    {
        echo "course-manage-body ";
    }

    // line 23
    public function block_course_header($context, array $blocks = array())
    {
        // line 24
        echo "  ";
        if (($context["hasMulCourses"] ?? null)) {
            // line 25
            echo "    <div class=\"course-manage-header-wrap\">
      ";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseManage:header", array("courseSet" => ($context["courseSet"] ?? null), "course" => ($context["course"] ?? null), "manage" => true)));
            echo "
    </div>
  ";
        }
    }

    // line 31
    public function block_sidebar($context, array $blocks = array())
    {
        // line 32
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:sidebar", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "curCourse" => ((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), null)) : (null)), "courseSideNav" => ((array_key_exists("course_side_nav", $context)) ? (_twig_default_filter(($context["course_side_nav"] ?? null), null)) : (null)))));
        echo "
";
    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
        // line 36
        echo "  <div class=\"cd-main\">
    <div class=\"cd-main__heading ";
        // line 37
        $this->displayBlock('main_heading_class', $context, $blocks);
        echo "\">
      ";
        // line 38
        $this->displayBlock('main_heading', $context, $blocks);
        // line 43
        echo "    </div>
    <div class=\"cd-main__body\">
      ";
        // line 45
        $this->displayBlock('main_body', $context, $blocks);
        // line 47
        echo "    </div>
  </div>
";
    }

    // line 37
    public function block_main_heading_class($context, array $blocks = array())
    {
    }

    // line 38
    public function block_main_heading($context, array $blocks = array())
    {
        // line 39
        echo "        <div class=\"cd-main__title\">
          ";
        // line 40
        $this->displayBlock('page_title', $context, $blocks);
        // line 41
        echo "        </div>
      ";
    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
    }

    // line 45
    public function block_main_body($context, array $blocks = array())
    {
        // line 46
        echo "      ";
    }

    public function getTemplateName()
    {
        return "course-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 46,  166 => 45,  161 => 40,  156 => 41,  154 => 40,  151 => 39,  148 => 38,  143 => 37,  137 => 47,  135 => 45,  131 => 43,  129 => 38,  125 => 37,  122 => 36,  119 => 35,  112 => 32,  109 => 31,  101 => 26,  98 => 25,  95 => 24,  92 => 23,  86 => 21,  79 => 17,  76 => 16,  67 => 12,  61 => 11,  58 => 10,  55 => 9,  46 => 3,  43 => 2,  39 => 1,  37 => 7,  35 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\layout.html.twig");
    }
}
