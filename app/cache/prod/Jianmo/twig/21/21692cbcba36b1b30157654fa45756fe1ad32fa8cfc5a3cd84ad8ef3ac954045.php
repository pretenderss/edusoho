<?php

/* courseset-manage/base.html.twig */
class __TwigTemplate_d9a0531c847975fb32fe4ab1b07ea3b8223be75d7ec5a95312446a7b903b4397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/courseset-layout.html.twig", "courseset-manage/base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/courseset-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "libs/select2.js", 3 => "app/js/courseset-manage/base/index.js"));
        // line 6
        $context["side_nav"] = "base";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_paddingClass($context, array $blocks = array())
    {
        echo " courseset-manage-padding course-manage-info ";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"courseset-manage-body__title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.content_title"), "html", null, true);
        echo "</div>
  <div class=\"courseset-manage-body__content cd-mt32\">
    <form class=\"form-horizontal\" id=\"courseset-form\" data-value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["isCoursesSummaryEmpty"] ?? null), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      ";
        // line 13
        $this->loadTemplate("courseset-manage/base-info/info.html.twig", "courseset-manage/base.html.twig", 13)->display(array_merge($context, array("form" => "courseset-form", "button" => "courseset-base-submit")));
        // line 14
        echo "
      <div class=\"form-group cd-mt40\">
        <div class=\"col-md-offset-2 col-sm-8\">
          <button id=\"courseset-base-submit\" type=\"button\" class=\"cd-btn cd-btn-primary\" data-loading-text=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  71 => 17,  66 => 14,  64 => 13,  58 => 12,  52 => 10,  49 => 9,  43 => 7,  35 => 3,  31 => 1,  29 => 6,  27 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/base.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\base.html.twig");
    }
}
