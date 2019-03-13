<?php

/* file-chooser/parts/import-video.html.twig */
class __TwigTemplate_8991e7672bcc451beafb52e3f9e3ac5be5ca11944b09cb2f567cf3eb536f173b extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"video-chooser-import-pane\">
  ";
        // line 2
        if (((array_key_exists("lesson", $context)) ? (_twig_default_filter(($context["lesson"] ?? null), null)) : (null))) {
            // line 3
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.import_video.mediaUri"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lesson"] ?? null), "mediaUri", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"import-content\">
    <div class=\"input-group\">
      <input class=\"form-control border-gray mb0\" type=\"text\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.media.import.input_placeholder"), "html", null, true);
        echo "\"
             data-role=\"import-url\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaUri", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaUri", array()), null)) : (null)), "html", null, true);
        echo "\">
      <span class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default js-video-import\" data-role=\"import\"
                data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_video_import", array("courseId" => ($context["courseId"] ?? null))), "html", null, true);
        echo "\"
                data-loading-text=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.import.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.import"), "html", null, true);
        echo "</button>
      </span>
    </div>
    <div class=\"text-warning mts\">
      <div>
        * ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.import_video.not_support_tips"), "html", null, true);
        echo "
      </div>
      <div>
        * ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.import_video.not_support_tips2"), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "file-chooser/parts/import-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  59 => 17,  49 => 12,  45 => 11,  39 => 8,  35 => 7,  31 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/parts/import-video.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\file-chooser\\parts\\import-video.html.twig");
    }
}
