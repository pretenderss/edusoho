<?php

/* @activity\download\resources\views\create_or_update_body.html.twig */
class __TwigTemplate_ba89d6a4282f46ddefe545488312f61298050ba13598356c2bcf0330dc42feb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-layout.html.twig", "@activity\\download\\resources\\views\\create_or_update_body.html.twig", 1);
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-client.js", 1 => $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("uploader"), 2 => "downloadactivity/js/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_activity_step($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $context["optionalDefault"] = 1;
        // line 5
        echo "  ";
        $context["mediaType"] = (($this->getAttribute(($context["activity"] ?? null), "mediaType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "mediaType", array()), "download")) : ("download"));
        // line 6
        echo "  ";
        $context["medias"] = $this->env->getExtension('AppBundle\Twig\MaterialExtension')->findMaterialsByActivityIdAndSource((($this->getAttribute(($context["activity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "id", array()), 0)) : (0)), "coursematerial");
        // line 7
        echo "  <div class=\"tab-pane js-course-tasks-pane active js-step2-view\">
    <form class=\"form-horizontal\" id=\"step2-form\" >
      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\">
          <label for=\"title\" class=\"control-label-required\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.title_name"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\" >
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\">
          <label for=\"materials\" class=\"style control-label-required\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.choose_file"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          <ul class=\"download-list\" id=\"material-list\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("medias", $context)) ? (_twig_default_filter(($context["medias"] ?? null))) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 24
            echo "              <li class=\"download-item\" data-id=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["media"], "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["media"], "link", array()), $this->getAttribute($context["media"], "fileId", array()))) : ($this->getAttribute($context["media"], "fileId", array()))), "html", null, true);
            echo "\">
                ";
            // line 25
            if ((($this->getAttribute($context["media"], "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["media"], "link", array()), null)) : (null))) {
                // line 26
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "link", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "title", array()), "html", null, true);
                echo "</a>
                  <span class=\"glyphicon glyphicon-new-window color-gray text-sm\" title=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.link_file"), "html", null, true);
                echo "\"></span>
                ";
            } else {
                // line 29
                echo "                  <a class=\"gray-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_download", array("fileId" => $this->getAttribute($context["media"], "fileId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "title", array()), "html", null, true);
                echo "</a>
                ";
            }
            // line 31
            echo "                <a class=\"gray-primary phm btn-delete js-btn-delete\" href=\"javascript:;\" data-url=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.delete_btn"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-delete\"></i></a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          </ul>
          ";
        // line 35
        $this->loadTemplate("file-chooser/file-choose.html.twig", "@activity\\download\\resources\\views\\create_or_update_body.html.twig", 35)->display(array_merge($context, array("courseId" => $this->getAttribute(($context["activity"] ?? null), "fromCourseId", array()), "mediaType" => ($context["mediaType"] ?? null), "fileType" => "all", "file" => null)));
        // line 36
        echo "          <input id=\"materials\" class=\"form-control\" type=\"hidden\" name=\"materials\"
            ";
        // line 37
        if (((array_key_exists("medias", $context)) ? (_twig_default_filter(($context["medias"] ?? null))) : (""))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("medias", $context)) ? (_twig_default_filter(($context["medias"] ?? null))) : (""))), "html", null, true);
            echo "\" ";
        }
        echo " >
        </div>
        <p class=\"col-sm-offset-2 col-sm-10 mt10 color-warning\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.file_tips"), "html", null, true);
        echo "</p>
      </div>
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@activity\\download\\resources\\views\\create_or_update_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  119 => 37,  116 => 36,  114 => 35,  111 => 34,  101 => 31,  93 => 29,  88 => 27,  81 => 26,  79 => 25,  74 => 24,  70 => 23,  63 => 19,  55 => 14,  49 => 11,  43 => 7,  40 => 6,  37 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity\\download\\resources\\views\\create_or_update_body.html.twig", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\download\\resources\\views\\create_or_update_body.html.twig");
    }
}
