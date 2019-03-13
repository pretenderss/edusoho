<?php

/* course-manage/teachers.html.twig */
class __TwigTemplate_5b52c86a86048bfd6afa0b4237c04b7bf0e7982547e6b5a4389f66e02fbec906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/layout.html.twig", "course-manage/teachers.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["course_side_nav"] = "teachers";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/course-manage/teachers/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "html", null, true);
    }

    // line 9
    public function block_main_body($context, array $blocks = array())
    {
        // line 10
        echo "  <div>
    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\" >
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"form-group\" id=\"teachers-form-group\">
        <div class=\"col-md-2 control-label\"><label>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup.exist_teacher"), "html", null, true);
        echo "</label></div>
        <div class=\"col-md-8 controls\">
          <div id=\"course-teachers\" data-field-name=\"teachers\" data-init-value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["teacherIds"] ?? null)), "html", null, true);
        echo "\" data-query-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_teachers_match", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\"></div>
          <div class=\"help-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup.exist_teacher.add_tips"), "html", null, true);
        echo "</div>
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <button type=\"button\" class=\"cd-btn cd-btn-primary js-btn-save\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
        </div>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  82 => 22,  74 => 17,  68 => 16,  63 => 14,  58 => 12,  54 => 10,  51 => 9,  45 => 7,  35 => 3,  31 => 1,  29 => 5,  27 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/teachers.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\teachers.html.twig");
    }
}
