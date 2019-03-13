<?php

/* common/upload-image.html.twig */
class __TwigTemplate_c396e8a99dea7c41a69987acf251eb180017d68ec30c482618520c35a4542067 extends Twig_Template
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/upload-image/index.js"));
        // line 2
        echo "
<div class=\"cd-image-upload\">
  <img class=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["imageClass"] ?? null), "html", null, true);
        echo " js-upload-cover\" id=\"";
        echo twig_escape_filter($this->env, ($context["targetImg"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, ($context["imageSrc"] ?? null), "html", null, true);
        echo "\">
  <div class=\"image-upload-mask\">
    <div class=\"image-upload-content\">
      <i class=\"cd-icon cd-icon-camera\"></i>
      ";
        // line 8
        echo twig_escape_filter($this->env, ($context["imageText"] ?? null), "html", null, true);
        echo "
    </div>
  </div>
  <label class=\"image-upload-label\">
    <input type=\"file\" name=\"file\" class=\"js-upload-input hidden\" accept=\"image/bmp,image/jpeg,image/png, image/jpg\"
    data-token=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken(((array_key_exists("uploadToken", $context)) ? (_twig_default_filter(($context["uploadToken"] ?? null), "default")) : ("default")), "image"), "html", null, true);
        echo "\" 
    data-file-upload=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "\" 
    data-crop=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "\"
    data-save-url=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["saveUrl"] ?? null), "html", null, true);
        echo "\"
    data-target-img=\"#";
        // line 17
        echo twig_escape_filter($this->env, ($context["targetImg"] ?? null), "html", null, true);
        echo "\"
    data-crop-width=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["cropWidth"] ?? null), "html", null, true);
        echo "\"
    data-crop-height=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["cropHeight"] ?? null), "html", null, true);
        echo "\" />
  </label>
</div>";
    }

    public function getTemplateName()
    {
        return "common/upload-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  36 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/upload-image.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\common\\upload-image.html.twig");
    }
}
