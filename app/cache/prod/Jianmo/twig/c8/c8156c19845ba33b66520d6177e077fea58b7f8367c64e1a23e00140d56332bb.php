<?php

/* settings/user-profile.html.twig */
class __TwigTemplate_450c7085ed6d8f6a9c18ae5c4b2d17e24a9cbfa86ec378e31a79546e5a607981 extends Twig_Template
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
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "app/js/settings/user-profile/index.js"));
        // line 3
        echo "
<div class=\"alert alert-info\">
  <h5><strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.tips"), "html", null, true);
        echo "</strong></h5>
  <ol>
    <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.setup_avatar"), "html", null, true);
        echo "
      ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "largeAvatar", array())) {
            // line 9
            echo "        <span class=\"color-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.finish"), "html", null, true);
            echo "</span> </li>
      ";
        } else {
            // line 11
            echo "        <span class=\"color-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.unfinish"), "html", null, true);
            echo "</span>
      ";
        }
        // line 13
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.setup_introduction"), "html", null, true);
        echo "
      ";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "title", array()) && $this->getAttribute(($context["userProfile"] ?? null), "about", array()))) {
            // line 15
            echo "        <span class=\"color-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.finish"), "html", null, true);
            echo "</span> </li>
      ";
        } else {
            // line 17
            echo "        <span class=\"color-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.unfinish"), "html", null, true);
            echo "</span>
      ";
        }
        // line 19
        echo "    </li>
  </ol>
</div>

<form id=\"user-profile-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\">
  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\" for=\"profile_avatar\"><b>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.user_avatar"), "html", null, true);
        echo "</b></label>
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
      <input id=\"profile_avatar\" name=\"profile_avatar\" type=\"hidden\"  value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "largeAvatar", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
    </div>
    <div class=\"controls col-md-8 controls\">
      ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.upload_tips");
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"></div>
    <div class=\"controls col-md-8 controls\">
      <a id=\"upload-picture-btn\"
      class=\"btn btn-primary upload-picture-btn\"
      data-upload-token=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
      data-goto-url=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_avatar_crop_modal");
        echo "\"
      >";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.upload_btn"), "html", null, true);
        echo "</a>
    </div>
  </div>

  ";
        // line 53
        $context["user"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("UserandProfiles", array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())));
        // line 54
        echo "  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\" for=\"profile_title\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.rank"), "html", null, true);
        echo "</label>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "title", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\" style=\"display:none;\"></div>
    </div>
  </div>

  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\" for=\"profile_about\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.create.introduction"), "html", null, true);
        echo "</label>
    <div class=\"col-md-8 controls\">
      <textarea name=\"profile[about]\" rows=\"10\" id=\"profile_about\" class=\"form-control\" data-image-upload-url=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("user"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "profiles", array()), "about", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-7 col-md-offset-2\">
      <button id=\"profile-save-btn\" data-loading-text=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "settings/user-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 74,  164 => 70,  154 => 65,  149 => 63,  140 => 57,  135 => 55,  132 => 54,  130 => 53,  123 => 49,  119 => 48,  115 => 47,  103 => 38,  92 => 30,  88 => 29,  83 => 27,  77 => 24,  73 => 23,  67 => 19,  61 => 17,  55 => 15,  53 => 14,  48 => 13,  42 => 11,  36 => 9,  34 => 8,  30 => 7,  25 => 5,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/user-profile.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\settings\\user-profile.html.twig");
    }
}
