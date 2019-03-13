<?php

/* course-manage/header.html.twig */
class __TwigTemplate_6aa4672006bf2c9adc4eebff40e67fb907778db9afb6927c7348acce2c8cdf1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'title' => array($this, 'block_title'),
            'planType' => array($this, 'block_planType'),
            'action' => array($this, 'block_action'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course-manage/header.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('js', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $context["basepath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array())));
        // line 8
        echo "
<div class=\"course-manage-header clearfix\">

  ";
        // line 11
        if (($this->getAttribute(($context["course"] ?? null), "status", array()) == "closed")) {
            // line 12
            echo "    <span class=\"course-publish-status course-publish-status--closed\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.closed"), "html", null, true);
            echo "</span>
  ";
        } elseif (($this->getAttribute(        // line 13
($context["course"] ?? null), "status", array()) == "draft")) {
            // line 14
            echo "    <span class=\"course-publish-status course-publish-status--unpublished\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.unpublished"), "html", null, true);
            echo "</span>
  ";
        } elseif (($this->getAttribute(        // line 15
($context["course"] ?? null), "status", array()) == "published")) {
            // line 16
            echo "    <span class=\"course-publish-status course-publish-status--published\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.published"), "html", null, true);
            echo "</span>
  ";
        }
        // line 18
        echo "
  <div class=\"course-manage-header-info\">
    <h1 class=\"course-manage-header-info__title text-overflow\" ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array())) > 10)) {
            echo "data-toggle=\"tooltip\" data-container=\"body\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo "\" ";
        }
        echo ">
      ";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        // line 24
        echo "    </h1>
    <div class=\"course-manage-header-info__type\">
      ";
        // line 26
        if (("freeMode" == $this->getAttribute(($context["course"] ?? null), "learnMode", array()))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.free_mode"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.locked_mode"), "html", null, true);
        }
        // line 27
        echo "      ";
        $this->displayBlock('planType', $context, $blocks);
        // line 29
        echo "    </div>
    <span class=\"visible-xs color-danger\">";
        // line 30
        $this->loadTemplate("common/price.html.twig", "course-manage/header.html.twig", 30)->display(array_merge($context, array("productPrice" => $this->getAttribute(($context["course"] ?? null), "price", array()))));
        echo "</span>
  </div>


  ";
        // line 34
        $this->displayBlock('action', $context, $blocks);
        // line 48
        echo "
  <div class=\"clearfix courseset-manage-data ";
        // line 49
        if (($this->getAttribute(($context["course"] ?? null), "status", array()) != "published")) {
            echo "courseset-manage-data--unpublished";
        }
        echo " hidden-xs\">
    <div class=\"courseset-manage-header-data course-manage-header__price mt0\">
      <span class=\"cd-text-medium\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teach_plan_price"), "html", null, true);
        echo "</span>
      <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num color-danger\">";
        // line 52
        $this->loadTemplate("common/price.html.twig", "course-manage/header.html.twig", 52)->display(array_merge($context, array("productPrice" => $this->getAttribute(($context["course"] ?? null), "price", array()))));
        echo "</span></div>
    </div>

    <div class=\"courseset-manage-header-data mt0\">
      <span class=\"cd-text-medium\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_total_members"), "html", null, true);
        echo "</span>
      <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">";
        // line 57
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "studentNum", array()))) : ("")), "html", null, true);
        echo " </span></div>
    </div>

    <div class=\"courseset-manage-header-data mt0\">
      <span class=\"cd-text-medium\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.total_lessons"), "html", null, true);
        echo "</span>
      <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "lessonNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "lessonNum", array()))) : ("")), "html", null, true);
        echo " </span></div>
    </div>
  </div>
</div>
";
    }

    // line 3
    public function block_js($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/course-manage/header/index.js"));
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        // line 22
        echo "        <span class=\"cd-dark-major\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo "</span>
      ";
    }

    // line 27
    public function block_planType($context, array $blocks = array())
    {
        // line 28
        echo "      ";
    }

    // line 34
    public function block_action($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"pull-right course-manage-header-btns\">
      ";
        // line 37
        echo "      ";
        if (($this->getAttribute(($context["course"] ?? null), "status", array()) != "published")) {
            // line 38
            echo "        <a class=\"cd-btn cd-btn-default\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "previewAs" => "guest")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.preview.plan"), "html", null, true);
            echo "</a>
        <button class=\"cd-btn cd-btn-primary js-course-publish-btn cd-ml16\" 
          data-url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_publish", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\" 
          data-pre-url=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_pre_publish", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\" 
          data-save-url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_publish_set_title", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.publish_task"), "html", null, true);
            echo "</button>
      ";
        } else {
            // line 44
            echo "        <a class=\"cd-btn cd-btn-default\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["basepath"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.check.plan"), "html", null, true);
            echo "</a>
      ";
        }
        // line 46
        echo "    </div>
  ";
    }

    public function getTemplateName()
    {
        return "course-manage/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 46,  203 => 44,  196 => 42,  192 => 41,  188 => 40,  180 => 38,  177 => 37,  174 => 35,  171 => 34,  167 => 28,  164 => 27,  157 => 22,  154 => 21,  149 => 4,  146 => 3,  137 => 62,  133 => 61,  126 => 57,  122 => 56,  115 => 52,  111 => 51,  104 => 49,  101 => 48,  99 => 34,  92 => 30,  89 => 29,  86 => 27,  80 => 26,  76 => 24,  74 => 21,  66 => 20,  62 => 18,  56 => 16,  54 => 15,  49 => 14,  47 => 13,  42 => 12,  40 => 11,  35 => 8,  33 => 7,  30 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/header.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\header.html.twig");
    }
}
