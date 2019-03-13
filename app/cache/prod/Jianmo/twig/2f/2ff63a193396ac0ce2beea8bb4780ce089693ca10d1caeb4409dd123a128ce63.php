<?php

/* uploader/batch-upload-modal.html.twig */
class __TwigTemplate_71004730671775d966f46448abb1b5940400680f9d5cee3653ce14b9868e5cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "uploader/batch-upload-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["modal_class"] = "modal-lg";
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("uploader"), 1 => "libs/jquery-sortable.js", 2 => "app/js/batch-upload/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("upload.content_title"), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $context["mediaType"] = "video";
        // line 10
        echo "  ";
        $context["showVideoQuality"] = 1;
        // line 11
        echo "  ";
        $this->loadTemplate("file-chooser/parts/upload-file.html.twig", "uploader/batch-upload-modal.html.twig", 11)->display($context);
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.close"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "uploader/batch-upload-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  55 => 14,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  35 => 4,  31 => 1,  29 => 6,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "uploader/batch-upload-modal.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\uploader\\batch-upload-modal.html.twig");
    }
}
