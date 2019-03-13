<?php

/* file-chooser/parts/import-link.html.twig */
class __TwigTemplate_acd1f724cf8f8f7b90463beaa0e994cdd2a950bbe10cb2f9eda185056c78fd66 extends Twig_Template
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
  <div class=\"import-content\">
    <div class=\"input-group\">
      <input class=\"form-control border-gray\" id=\"link\"  name=\"link\" type=\"text\" placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.import_link.intpu_placeholder"), "html", null, true);
        echo "\">
      <input class=\"form-control border-gray\" id=\"verifyLink\"  name=\"verifyLink\" type=\"hidden\" placeholder=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.import_link.intpu_placeholder"), "html", null, true);
        echo "\">
      <span class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default js-video-import\" data-role=\"import\" data-url=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_video_import", array("courseId" => ($context["courseId"] ?? null))), "html", null, true);
        echo "\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.import.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.import"), "html", null, true);
        echo "</button>
      </span>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "file-chooser/parts/import-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/parts/import-link.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\file-chooser\\parts\\import-link.html.twig");
    }
}
