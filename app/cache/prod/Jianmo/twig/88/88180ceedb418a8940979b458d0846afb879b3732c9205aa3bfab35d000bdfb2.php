<?php

/* my/navbar.html.twig */
class __TwigTemplate_1fd690eacaad5edd5838f0cd459fe84ef9cf0492b9de3e740dee82cb9a6f3208 extends Twig_Template
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
        echo "<div class=\"nav-header\">
  <ul class=\"nav nav-tabs nav-header-section clearfix\">
    <div class=\"nav-header-section__heading\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.menu_heading"), "html", null, true);
        echo "</div>
    <li class=\"nav-header-section__item ";
        // line 4
        if ((($context["side_nav"] ?? null) == "my-teaching-courses")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set_menu"), "html", null, true);
        echo "</a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 8
        if ((($context["side_nav"] ?? null) == "my-teaching-live-calendar")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_live_calendar");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.live_schedule_menu"), "html", null, true);
        echo "</a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 12
        if ((($context["side_nav"] ?? null) == "my-teaching-classroom")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_classrooms");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.classroom_menu", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "
      </a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 17
        if ((($context["side_nav"] ?? null) == "my-teaching-questions")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_threads", array("type" => "question"));
        echo "\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.question_menu"), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"nav-header-section__item ";
        // line 22
        if ((($context["side_nav"] ?? null) == "my-teaching-discussions")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_threads", array("type" => "discussion"));
        echo "\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.discussion_menu"), "html", null, true);
        echo "
      </a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 28
        if ((($context["side_nav"] ?? null) == "my-testpaper-check")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_testpaper_check_list", array("status" => "reviewing"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.testpaper_check_menu"), "html", null, true);
        echo "</a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 32
        if ((($context["side_nav"] ?? null) == "my-homework-check")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homework_check_list", array("status" => "reviewing"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.homework_check_menu"), "html", null, true);
        echo "</a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 36
        if ((($context["side_nav"] ?? null) == "material-lib")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_browsing");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.material_lib_menu"), "html", null, true);
        echo "</a>
    </li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "my/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  131 => 36,  123 => 33,  117 => 32,  109 => 29,  103 => 28,  96 => 24,  92 => 23,  86 => 22,  80 => 19,  76 => 18,  70 => 17,  61 => 13,  55 => 12,  47 => 9,  41 => 8,  33 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/navbar.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\navbar.html.twig");
    }
}
