<?php

/* course/task-list/parts/task-list-template.html.twig */
class __TwigTemplate_fdb6a16a4b9beeff515802750768aae3cf06cbcf9c831e39f6101e033858d82b extends Twig_Template
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
        echo "<!-- 见 app/Resources/static-src/app/js/courseset/show/index.js -->

<div class=\"js-infinite-item-template hidden\">
  <li class=\"task-item bg-gray-lighter js-task-chapter infinite-item\" 
      display-if=\"{isChapter}\"><i class=\"es-icon es-icon-menu left-menu\"></i>
    <a href=\"javascript:\" class=\"title gray-dark\">{getChapterName}</a>
    <i class=\"right-menu es-icon es-icon-remove js-remove-icon\"></i>
  </li>

  <li class=\"task-item color-gray bg-gray-lighter infinite-item\"
    display-if=\"{isUnit}\">
    <span class=\"title\">{getUnitName}</span>
  </li>

  <li class=\"task-item infinite-item {lessonContainerClass}\"
    display-if=\"{isLesson}\">
    <span class=\"title\">{getLessonName}</span>

    <tmp display-if=\"{isItemDisplayedAsUnpublished}\">
      <span class=\"right-menu \">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.looking_forward"), "html", null, true);
        echo "</span>
    </tmp>
  </li>

  <li class=\"task-item task-content mouse-control infinite-item {lessonContainerClass}\"
      display-if=\"{isTask}\">
    <i display-if=\"{isTaskLocked}\" class=\"{taskClass}\" data-toggle=\"tooltip\" data-trigger=\"hover\" 
      data-placement=\"top\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.lock_tips", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "\">
    </i>

    <i hide-if=\"{isTaskLocked}\" class=\"{taskClass}\">
    </i>

    ";
        // line 33
        $this->loadTemplate("course/task-list/parts/task-link-template.html.twig", "course/task-list/parts/task-list-template.html.twig", 33)->display($context);
        // line 34
        echo "
  </li>

</div>

";
        // line 39
        $this->loadTemplate("course/task-list/parts/task-course-data.html.twig", "course/task-list/parts/task-list-template.html.twig", 39)->display($context);
    }

    public function getTemplateName()
    {
        return "course/task-list/parts/task-list-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 39,  61 => 34,  59 => 33,  50 => 27,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/parts/task-list-template.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\task-list-template.html.twig");
    }
}
