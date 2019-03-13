<?php

/* my/teaching/course-type-select.html.twig */
class __TwigTemplate_fb4a668ea325f3f2898462ef9f6feff03c3900d3d1c0ce02d7ddd83554f037a7 extends Twig_Template
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
        echo "<div class=\"visible-xs cd-mb24 clearfix\">
  <div class=\"pull-right\">
    <a class=\"cd-btn cd-btn-primary\" id=\"create-course\" href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create"), "html", null, true);
        echo "</a>
  </div>
</div>
<div class=\"cd-mb24\">
  <div class=\"pull-right hidden-xs\">
    <a class=\"cd-btn cd-btn-primary\" id=\"create-course\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create"), "html", null, true);
        echo "</a>
  </div>
  <ul class=\"courseset-type-list nav nav-pills\">
    <li class=\"";
        // line 11
        if ((($context["filter"] ?? null) == "normal")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets", array("filter" => "normal"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.normal"), "html", null, true);
        echo "</a></li>
    <li class=\"";
        // line 12
        if ((($context["filter"] ?? null) == "live")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets", array("filter" => "live"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.live"), "html", null, true);
        echo "</a></li>
    <li class=\"";
        // line 13
        if ((($context["filter"] ?? null) == "open")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_open_courses", array("filter" => "open"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.normal"), "html", null, true);
        echo "</a></li>
    <li class=\"";
        // line 14
        if ((($context["filter"] ?? null) == "liveOpen")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_open_courses", array("filter" => "liveOpen"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.live"), "html", null, true);
        echo "</a></li>
    ";
        // line 15
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("my.teaching.menu", array("side_nav" => ($context["side_nav"] ?? null)));
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "my/teaching/course-type-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 14,  61 => 13,  51 => 12,  41 => 11,  33 => 8,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/teaching/course-type-select.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\teaching\\course-type-select.html.twig");
    }
}
