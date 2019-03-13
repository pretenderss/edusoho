<?php

/* course-manage/student/panel-nav.html.twig */
class __TwigTemplate_886e9090f589d4a0550b368e8376eaf02c0aa4edc320a7e6513def613da0548f extends Twig_Template
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
        echo "<ul class=\"cd-tabs mbl\">
  <li ";
        // line 2
        if ((($context["panelNav"] ?? null) == "manage")) {
            echo "class=\"active\" ";
        }
        echo ">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.official_student"), "html", null, true);
        echo "</a>
  </li>
  <li ";
        // line 5
        if ((($context["panelNav"] ?? null) == "join")) {
            echo "class=\"active\" ";
        }
        echo ">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_records", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "join")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.join_records"), "html", null, true);
        echo "</a>
  </li>
  <li ";
        // line 8
        if ((($context["panelNav"] ?? null) == "exit")) {
            echo "class=\"active\" ";
        }
        echo ">
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_records", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "exit")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.members_manage.quit_records"), "html", null, true);
        echo "</a>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "course-manage/student/panel-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  48 => 8,  41 => 6,  35 => 5,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/student/panel-nav.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\student\\panel-nav.html.twig");
    }
}
