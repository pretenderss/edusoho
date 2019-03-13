<?php

/* courseset-manage/base-info/info.html.twig */
class __TwigTemplate_91cd4d2592cd43856fe75569a0db2de9ad7d419d42d01569938708a7e87f5a3a extends Twig_Template
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
        echo "<div class=\"form-group\">
  <div class=\"col-md-2 control-label courseset-manage-body__lable\">
    <label class=\"control-label-required\" for=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.title"), "html", null, true);
        echo "</label>
  </div>
  <div class=\"col-md-8\">
    <input type=\"text\" id=\"title\" name=\"title\" required=\"required\" class=\"form-control js-courseset-title\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"subtitle\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.sub_title"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8\">
    <textarea id=\"subtitle\" name=\"subtitle\" class=\"form-control js-courseset-subtitle\">";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"tags\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <input type=\"text\" id=\"tags\" name=\"tags\" class=\"width-full select2-offscreen\"tabindex=\"-1\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_join_filter(((array_key_exists("tags", $context)) ? (_twig_default_filter(($context["tags"] ?? null), "")) : ("")), ","), "html", null, true);
        echo "\"
      data-url=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match");
        echo "\"
      data-explain=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag_tips"), "html", null, true);
        echo "\">
    <div class=\"help-block courseset-manage-body__tip\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag_tips"), "html", null, true);
        echo "</div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"categoryId\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.category"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <select id=\"categoryId\" name=\"categoryId\" class=\"form-control width-input width-input-large\">
      ";
        // line 33
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute(($context["courseSet"] ?? null), "categoryId", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.category"));
        echo "
    </select>
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>
";
        // line 38
        $this->loadTemplate("org/org-tree-select-webpack.html.twig", "courseset-manage/base-info/info.html.twig", 38)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["courseSet"] ?? null), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 39
        echo "
<div class=\"form-group\">
  <label class=\"col-md-2 control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 cd-radio-group\">
    ";
        // line 43
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("serializeMode", array("none" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.none"), "serialized" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.serialized"), "finished" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.finished")), (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()), "none")) : ("none")));
        echo "
  </div>
</div>

<!-- 封面图片 -->
<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"cover\"><b>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.content_title"), "html", null, true);
        echo "</b></label>
  <div class=\"col-md-8 controls\">
    ";
        // line 51
        $this->loadTemplate("common/upload-image.html.twig", "courseset-manage/base-info/info.html.twig", 51)->display(array_merge($context, array("saveUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_cover_crop", array("id" => $this->getAttribute(        // line 52
($context["courseSet"] ?? null), "id", array()))), "targetImg" => "course-cover", "cropWidth" => "480", "cropHeight" => "270", "uploadToken" => "tmp", "imageClass" => "course-manage-cover", "imageText" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover.change"), "imageSrc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(        // line 59
($context["courseSet"] ?? null), "large"), "courseSet.png"))));
        // line 62
        echo "    <div class=\"courseset-manage-body__tip\">
      ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.upload_tips");
        echo "
    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.detail.summary"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <textarea name=\"summary\" rows=\"10\" data-form=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
        echo "\" data-button=\"";
        echo twig_escape_filter($this->env, ($context["button"] ?? null), "html", null, true);
        echo "\" id=\"courseset-summary-field\" class=\"form-control\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue(($context["courseSet"] ?? null), "summary");
        echo "</textarea>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "courseset-manage/base-info/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 71,  132 => 69,  123 => 63,  120 => 62,  118 => 59,  117 => 52,  116 => 51,  111 => 49,  102 => 43,  97 => 41,  93 => 39,  91 => 38,  83 => 33,  77 => 30,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  52 => 20,  43 => 14,  38 => 12,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/base-info/info.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\base-info\\info.html.twig");
    }
}
