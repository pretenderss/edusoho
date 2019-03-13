<?php

/* @activity\discuss\resources\views\create_or_update_body.html.twig */
class __TwigTemplate_3d3f19dd1127e5be42e5918350670588bf41a3e34f1b9556a4b5ca025b70764a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-layout.html.twig", "@activity\\discuss\\resources\\views\\create_or_update_body.html.twig", 1);
        $this->blocks = array(
            'activity_step' => array($this, 'block_activity_step'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/activity-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-client.js", 1 => "libs/es-ckeditor/ckeditor.js", 2 => "libs/bootstrap-datetimepicker.js", 3 => "discussactivity/js/manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_activity_step($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"tab-pane js-course-tasks-pane active js-step2-view\">
    <form class=\"form-horizontal\" id=\"step2-form\" >
      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\">
        <label for=\"title\" class=\"control-label-required\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.title_name"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\" >
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\">
          <label for=\"text-content-field\" class=\"style1 control-label-required\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.discuss"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          <textarea class=\"form-control type-hidden\" id=\"text-content-field\" name=\"content\" rows=\"10\" data-image-upload-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-flash-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
        >";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
        </div>
      </div>
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@activity\\discuss\\resources\\views\\create_or_update_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  60 => 20,  54 => 17,  46 => 12,  40 => 9,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity\\discuss\\resources\\views\\create_or_update_body.html.twig", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\discuss\\resources\\views\\create_or_update_body.html.twig");
    }
}
