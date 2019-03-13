<?php

/* file-chooser/file-choose.html.twig */
class __TwigTemplate_18b454f17d3fb15a05f2c5a9e19d323f21257dd87cda07f672c206c2f84c1b31 extends Twig_Template
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
        if ( !twig_test_empty(($context["file"] ?? null))) {
            // line 2
            echo "  ";
            $context["selectedFile"] = array("id" => $this->getAttribute(($context["file"] ?? null), "id", array()), "name" => $this->getAttribute(($context["file"] ?? null), "filename", array()), "status" => $this->getAttribute(($context["file"] ?? null), "convertStatus", array()), "source" => "self", "length" => $this->getAttribute(($context["file"] ?? null), "length", array()), "size" => $this->getAttribute(($context["file"] ?? null), "fileSize", array()));
        }
        // line 4
        $context["courseType"] = ((array_key_exists("courseType", $context)) ? (_twig_default_filter(($context["courseType"] ?? null), "course")) : ("course"));
        // line 5
        echo "
<input type=\"hidden\" name=\"media\" id=\"media\" value=\"";
        // line 6
        if (((array_key_exists("file", $context)) ? (_twig_default_filter(($context["file"] ?? null), null)) : (null))) {
            echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("selectedFile", $context)) ? (_twig_default_filter(($context["selectedFile"] ?? null))) : (""))), "html", null, true);
        }
        echo "\">
<div class=\"file-chooser-bar ";
        // line 7
        if ( !((array_key_exists("file", $context)) ? (_twig_default_filter(($context["file"] ?? null), null)) : (null))) {
            echo "hidden ";
        }
        echo "\">
  <span data-role=\"placeholder\">";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["file"] ?? null), "filename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["file"] ?? null), "filename", array()), null)) : (null)), "html", null, true);
        echo "</span>
  <button class=\"btn btn-link btn-sm js-choose-trigger\" type=\"button\">
    <i class=\"glyphicon glyphicon-edit\"></i>
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.edit"), "html", null, true);
        echo "
  </button>

  <div class=\"alert alert-warning\" data-role=\"waiting-tip\"
       style=\"display:none;\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.converting_tips");
        echo "
  </div>
</div>
<div class=\"file-chooser-main ";
        // line 18
        if (((array_key_exists("file", $context)) ? (_twig_default_filter(($context["file"] ?? null), null)) : (null))) {
            echo "hidden ";
        }
        echo "\">
  <div class=\"file-chooser-nav\">
    <ul class=\"nav nav-pills nav-pills-sm  nav-pills-gray mb0\" id=\"material\">
      <li role=\"presentation\" class=\"active\"><a
            href=\"#chooser-upload-panel\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.upload_files"), "html", null, true);
        echo "</a></li>
      <li role=\"presentation\"><a href=\"#chooser-material-panel\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.chooser_from_material"), "html", null, true);
        echo "</a></li>
      <li role=\"presentation\"><a href=\"#chooser-course-panel\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.chooser_from_course"), "html", null, true);
        echo "</a></li>
      ";
        // line 25
        if (((($context["mediaType"] ?? null) == "video") &&  !((array_key_exists("hideImportVideo", $context)) ? (_twig_default_filter(($context["hideImportVideo"] ?? null), false)) : (false)))) {
            // line 26
            echo "        <li role=\"presentation\" >
          <a class=\"js-import-video\" href=\"#import-video-panel\" data-link=\"";
            // line 27
            if ((((array_key_exists("link", $context)) ? (_twig_default_filter(($context["link"] ?? null), null)) : (null)) && (($context["link"] ?? null) != "self"))) {
                echo " ";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.import_video"), "html", null, true);
            echo "</a>
        </li>
      ";
        }
        // line 30
        echo "      ";
        if ((($context["mediaType"] ?? null) == "download")) {
            // line 31
            echo "        <li role=\"presentation\"><a href=\"#import-link-panel\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.link"), "html", null, true);
            echo "</a>
        </li>
      ";
        }
        // line 34
        echo "    </ul>
  </div>
  <div class=\"tab-content \">
    <div class=\"tab-pane file-chooser-tab active\" id=\"chooser-upload-panel\">
      ";
        // line 38
        $this->loadTemplate("file-chooser/parts/upload-file.html.twig", "file-chooser/file-choose.html.twig", 38)->display($context);
        // line 39
        echo "    </div>

    <div class=\"tab-pane \" id=\"chooser-material-panel\">
      ";
        // line 42
        $this->loadTemplate("file-chooser/parts/materiallib-choose.html.twig", "file-chooser/file-choose.html.twig", 42)->display($context);
        // line 43
        echo "    </div>

    <div class=\"tab-pane file-chooser-tab\" id=\"chooser-course-panel\">
      ";
        // line 46
        $this->loadTemplate("file-chooser/parts/course-file-choose.html.twig", "file-chooser/file-choose.html.twig", 46)->display($context);
        // line 47
        echo "    </div>

    ";
        // line 49
        if (((($context["mediaType"] ?? null) == "video") &&  !((array_key_exists("hideImportVideo", $context)) ? (_twig_default_filter(($context["hideImportVideo"] ?? null), false)) : (false)))) {
            // line 50
            echo "      <div class=\"tab-pane file-chooser-tab\" id=\"import-video-panel\">
        ";
            // line 51
            $this->loadTemplate("file-chooser/parts/import-video.html.twig", "file-chooser/file-choose.html.twig", 51)->display($context);
            // line 52
            echo "      </div>
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        if ((($context["mediaType"] ?? null) == "download")) {
            // line 56
            echo "      <div class=\"tab-pane file-chooser-tab\" id=\"import-link-panel\">
        ";
            // line 57
            $this->loadTemplate("file-chooser/parts/import-link.html.twig", "file-chooser/file-choose.html.twig", 57)->display($context);
            // line 58
            echo "      </div>
    ";
        }
        // line 60
        echo "  </div>

</div>

";
        // line 64
        if ((($context["mediaType"] ?? null) == "download")) {
            // line 65
            echo "  <p class=\"mbl mtl\"><label>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.file_name"), "html", null, true);
            echo "</label><span class=\"js-current-file\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.upload_btn"), "html", null, true);
            echo "</span></p>
  <div class=\"row\">
    <div class=\"col-sm-10\"><input class=\"form-control \" type=\"text\" id=\"file-summary\" name=\"description\" placeholder=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.input_placeholder"), "html", null, true);
            echo "\"></div>
    <div class=\"col-sm-2\"><a class=\"btn btn-primary btn-block js-add-file-list\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.download.add_btn"), "html", null, true);
            echo "</a></div>
  </div>
  <span class=\"color-success js-success-redmine\"></span>
  <span class=\"color-danger js-danger-redmine\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "file-chooser/file-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 68,  175 => 67,  167 => 65,  165 => 64,  159 => 60,  155 => 58,  153 => 57,  150 => 56,  148 => 55,  145 => 54,  141 => 52,  139 => 51,  136 => 50,  134 => 49,  130 => 47,  128 => 46,  123 => 43,  121 => 42,  116 => 39,  114 => 38,  108 => 34,  101 => 31,  98 => 30,  87 => 27,  84 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  61 => 18,  55 => 15,  48 => 11,  42 => 8,  36 => 7,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/file-choose.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\file-chooser\\file-choose.html.twig");
    }
}
