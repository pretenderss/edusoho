<?php

/* lesson-manage/default/lesson-manage.html.twig */
class __TwigTemplate_6476bb55b825959c1a5323aa3e4f773355fff7c47fb0777f19051152d3ea6338 extends Twig_Template
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
        echo "<div class=\"cd-dropdown\" data-toggle=\"cd-dropdown\" data-trigger=\"hover\">
  <a class=\"cd-link-assist\" href=\"javascript:;\">
    <i class=\"es-icon es-icon-morehoriz\"></i>
  </a>
  <ul class=\"dropdown-menu task-manage-item__dropdown\">
    ";
        // line 6
        $this->loadTemplate("lesson-manage/common/marker-manage-btn.html.twig", "lesson-manage/default/lesson-manage.html.twig", 6)->display(array_merge($context, array("course" => ($context["course"] ?? null), "task" => ($context["task"] ?? null))));
        // line 7
        echo "
    ";
        // line 8
        if (((($this->getAttribute(($context["lesson"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["lesson"] ?? null), "status", array()), "create")) : ("create")) == "published")) {
            // line 9
            echo "      ";
            $context["isPublish"] = true;
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "      ";
            $context["isPublish"] = 0;
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <li>
      <a class='js-unpublish-item ";
        // line 14
        if ( !($context["isPublish"] ?? null)) {
            echo "hidden";
        }
        echo "' href=\"javascript:;\"
        data-url=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_unpublish", array("lessonId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()))), "html", null, true);
        echo "\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.unpublish_btn"), "html", null, true);
        echo "
      </a>
    </li>
    <li>
      <a class='js-publish-item ";
        // line 20
        if (($context["isPublish"] ?? null)) {
            echo "hidden";
        }
        echo "' href=\"javascript:;\"
        data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_publish", array("lessonId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()))), "html", null, true);
        echo "\">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.publish_btn"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.lesson"), "html", null, true);
        echo "
      </a>
    </li>
    <li>
      <a class='js-set-optional ";
        // line 26
        if (($this->getAttribute(($context["lesson"] ?? null), "isOptional", array()) == 1)) {
            echo "hidden";
        }
        echo "' href=\"javascript:;\" data-type=\"chapter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_set_optional", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "lessonId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
        echo "\">
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.lesson_manage.set_optional"), "html", null, true);
        echo "
      </a>
    </li>
    <li>
      <a class='js-unset-optional ";
        // line 31
        if (($this->getAttribute(($context["lesson"] ?? null), "isOptional", array()) != 1)) {
            echo "hidden";
        }
        echo "' href=\"javascript:;\" data-type=\"chapter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_unset_optional", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "lessonId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()))), "html", null, true);
        echo "\">
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.lesson_manage.unset_optional"), "html", null, true);
        echo "
      </a>
    </li>
    <li>
      <a class='js-delete ";
        // line 36
        if (($context["isPublish"] ?? null)) {
            echo "hidden";
        }
        echo "' href=\"javascript:;\" data-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.lesson"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_delete", array("lessonId" => $this->getAttribute(($context["lesson"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()))), "html", null, true);
        echo "\">
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.delete_btn"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.lesson"), "html", null, true);
        echo "
      </a>
    </li>
    ";
        // line 40
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("task.menu.extension", array("task" => ($context["task"] ?? null)));
        echo "
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "lesson-manage/default/lesson-manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  123 => 37,  113 => 36,  106 => 32,  98 => 31,  91 => 27,  83 => 26,  75 => 22,  71 => 21,  65 => 20,  58 => 16,  54 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  33 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/default/lesson-manage.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\default\\lesson-manage.html.twig");
    }
}
