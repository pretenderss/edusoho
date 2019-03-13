<?php

/* courseset-manage/cover-crop-modal.html.twig */
class __TwigTemplate_39f36f874a2e5d7514fdf21141b8f77232ff391995a8eff06785144e044d66fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "courseset-manage/cover-crop-modal.html.twig", 1);
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
        // line 7
        $context["modal_class"] = "cd-modal-dialog";
        // line 8
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/courseset-manage/cover-crop/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程图片上传"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  <img class=\"img-full\" src=\"\" id=\"course-crop\"/>
  <div class=\"text-center cd-dark-major cd-mt16 cd-mb16\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.avatar.crop_hint"), "html", null, true);
        echo "
  </div>
";
    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        // line 18
        echo "  <div class=\"text-center\">
    <button type=\"button\" class=\"btn cd-btn cd-btn-ghost-default cd-btn-lg\" id=\"select-btn\">
      ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.profile.choose_again"), "html", null, true);
        echo "
    </button>

    <button type=\"button\" class=\"btn cd-btn cd-btn-primary cd-btn-lg\" id=\"save-btn\"
      data-loading-text=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit.submiting"), "html", null, true);
        echo "\">
      ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存图片"), "html", null, true);
        echo "
    </button>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/cover-crop-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  73 => 24,  66 => 20,  62 => 18,  59 => 17,  52 => 13,  48 => 11,  45 => 10,  38 => 4,  35 => 3,  31 => 1,  29 => 8,  27 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/cover-crop-modal.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\cover-crop-modal.html.twig");
    }
}
