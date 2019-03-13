<?php

/* lesson-manage/chapter/modal.html.twig */
class __TwigTemplate_baf30b9fc7e45003e87b58c8894bc80d6d61c738d6572d205a57de9e71372681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "lesson-manage/chapter/modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/course-chapter-manage/index.js"));
        // line 3
        $context["chapter"] = ((array_key_exists("chapter", $context)) ? (_twig_default_filter(($context["chapter"] ?? null), null)) : (null));
        // line 4
        $context["type"] = (($this->getAttribute(($context["chapter"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["chapter"] ?? null), "type", array()), ($context["type"] ?? null))) : (($context["type"] ?? null)));
        // line 48
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if (($context["chapter"] ?? null)) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.edit"), "html", null, true);
            echo "
  ";
        } else {
            // line 8
            echo "  
    ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create"), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias(($context["type"] ?? null))), "html", null, true);
        echo "  
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "  ";
        if (((($this->getAttribute(($context["chapter"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["chapter"] ?? null), "type", array()), "")) : ("")) == "lesson")) {
            // line 16
            echo "    ";
            $context["saveUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_update", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "lessonId" => (($this->getAttribute(($context["chapter"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["chapter"] ?? null), "id", array()))) : (""))));
            // line 17
            echo "  ";
        } else {
            // line 18
            echo "    ";
            $context["saveUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_manage", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "chapterId" => (($this->getAttribute(($context["chapter"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["chapter"] ?? null), "id", array()))) : (""))));
            // line 19
            echo "  ";
        }
        // line 20
        echo "  
  <form id=\"course-chapter-form\" class=\"form-horizontal\" method=\"post\" data-chapter-id=\"";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["chapter"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["chapter"] ?? null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\" data-parentId=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("parentId", $context)) ? (_twig_default_filter(($context["parentId"] ?? null))) : ("")), "html", null, true);
        echo "\"
      action=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["saveUrl"] ?? null), "html", null, true);
        echo "\">
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"chapter-title-field\">
          ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias(($context["type"] ?? null))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.title"), "html", null, true);
        echo "
        </label>
      </div>
      <div class=\"col-md-8 controls\">
        <input id=\"chapter-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 30
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue(($context["chapter"] ?? null), "title");
        echo "\" class=\"form-control\">
      </div>
    </div>
    <input type=\"hidden\" name=\"type\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
  </form>
";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
    <button id=\"course-chapter-btn\" data-loading-text=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit.submiting"), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-chapter-form\">
      ";
        // line 40
        if (($context["chapter"] ?? null)) {
            // line 41
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
            echo "
      ";
        } else {
            // line 43
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.add"), "html", null, true);
            echo "
      ";
        }
        // line 45
        echo "    </button>
";
    }

    public function getTemplateName()
    {
        return "lesson-manage/chapter/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 45,  142 => 43,  136 => 41,  134 => 40,  130 => 39,  125 => 38,  122 => 37,  115 => 33,  109 => 30,  100 => 26,  93 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  59 => 11,  54 => 9,  51 => 8,  45 => 7,  42 => 6,  39 => 5,  35 => 1,  33 => 48,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/chapter/modal.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\chapter\\modal.html.twig");
    }
}
