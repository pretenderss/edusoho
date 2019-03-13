<?php

/* lesson-manage/chapter/action.html.twig */
class __TwigTemplate_10bb0367ff8d0fee87dc2c07f26077f3211d2a552d9815e32ed9e350768dd700 extends Twig_Template
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

<div class=\"cd-dropdown\" data-toggle=\"cd-dropdown\" data-trigger=\"hover\">
  <a class=\"cd-link-assist\" href=\"javascript:;\">
    <i class=\"es-icon es-icon-morehoriz\"></i>
  </a>
  <ul class=\"dropdown-menu task-manage-item__dropdown\">
    <li>
      <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_manage", array("chapterId" => $this->getAttribute(($context["chapter"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.lesson_manage.rename"), "html", null, true);
        echo "</a>
    </li>
    <li>
      <a class=\"js-delete\" href=\"javascript:;\" data-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias($this->getAttribute(($context["chapter"] ?? null), "type", array()))), "html", null, true);
        echo "\" data-type=\"chapter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_delete", array("chapterId" => $this->getAttribute(($context["chapter"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
        echo "
      </a>
    </li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "lesson-manage/chapter/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  37 => 12,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/chapter/action.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\chapter\\action.html.twig");
    }
}
