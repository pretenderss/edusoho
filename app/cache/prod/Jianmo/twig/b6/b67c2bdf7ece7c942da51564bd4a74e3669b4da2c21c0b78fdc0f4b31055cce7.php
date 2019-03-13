<?php

/* lesson-manage/chapter/item.html.twig */
class __TwigTemplate_aa17a82f89dd41386ce1d9463d3c940ebc01af0c18800ad5503981a8c79836f6 extends Twig_Template
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
        echo "<li id=\"chapter-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"task-manage-item drag js-task-manage-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "type", array()), "html", null, true);
        echo " task-manage-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "type", array()), "html", null, true);
        echo " clearfix\">
  ";
        // line 2
        if (($this->getAttribute(($context["chapter"] ?? null), "type", array()) == "unit")) {
            // line 3
            echo "    <div class=\"item-line\"></div>
  ";
        }
        // line 5
        echo "  <div class=\"item-content\">
    <a class=\"js-toggle-show js-toggle-";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "type", array()), "html", null, true);
        echo " cd-link-assist\" href=\"javascript:;\">
      <i class=\"es-icon es-icon-keyboardarrowdown cd-mr16\"></i></a>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.which_chapter", array("%chapterNumber%" => $this->getAttribute(($context["chapter"] ?? null), "number", array()), "%chapter%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias($this->getAttribute(($context["chapter"] ?? null), "type", array()))), "%title%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute(($context["chapter"] ?? null), "title", array()), 30)));
        echo "
  </div>
  ";
        // line 11
        echo "  <div class=\"item-actions\">
    ";
        // line 12
        if (($this->getAttribute(($context["chapter"] ?? null), "type", array()) == "chapter")) {
            // line 13
            echo "      <div class=\"cd-dropdown cd-mr24\" data-toggle=\"cd-dropdown\" data-trigger=\"hover\">
        <a class=\"cd-link-assist\" href=\"javascript:;\">
          <i class=\"cd-icon cd-icon-add\"></i>
        </a>
        <ul class=\"dropdown-menu task-manage-item__dropdown\">
          <li>
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" data-position=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "id", array()), "html", null, true);
            echo "\" data-type=\"chapter\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_manage", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "unit")), "html", null, true);
            echo "\">
              ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.create_part", array("%partName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("unit")))), "html", null, true);
            echo "
            </a>
          </li>
          <li>
            <a href=\"javascript:;\" class=\"js-lesson-create-btn\" data-position=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "id", array()), "html", null, true);
            echo "\" data-type=\"chapter\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.manage.create_lesson"), "html", null, true);
            echo "
            </a>
          </li>
        </ul>
      </div>
    ";
        } else {
            // line 31
            echo "      <a class=\"cd-mr24 js-lesson-create-btn\" data-position=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["chapter"] ?? null), "id", array()), "html", null, true);
            echo "\" data-type=\"lesson\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\">
        <i class=\"cd-icon cd-icon-add\" data-toggle=\"tooltip\" title=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.manage.create_lesson"), "html", null, true);
            echo "\" data-placement=\"top\"></i>
      </a>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        $this->loadTemplate("lesson-manage/chapter/action.html.twig", "lesson-manage/chapter/item.html.twig", 36)->display(array_merge($context, array("course" => ($context["course"] ?? null), "chapter" => ($context["chapter"] ?? null))));
        // line 37
        echo "  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "lesson-manage/chapter/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  103 => 36,  100 => 35,  94 => 32,  87 => 31,  78 => 25,  72 => 24,  65 => 20,  59 => 19,  51 => 13,  49 => 12,  46 => 11,  41 => 7,  37 => 6,  34 => 5,  30 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/chapter/item.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\chapter\\item.html.twig");
    }
}
