<?php

/* default/base-index.html.twig */
class __TwigTemplate_2676c23b888009a8600adc0e8c39712221dce48e0e4e0d11d2f57741c2e0578c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/base-index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["appDownload"] = (($this->env->getExtension('AppBundle\Twig\WebExtension')->isESCopyright() && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled", null)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage());
        // line 7
        $context["bodyClass"] = ((($context["appDownload"] ?? null)) ? ("homepage has-app") : ("homepage"));
        // line 8
        $context["siteNav"] = "/";
        // line 10
        $context["_target_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        // line 12
        $context["isIndex"] = true;
        // line 13
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 15
    public function block_full_content($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        if (($context["appDownload"] ?? null)) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:appDownload"));
            echo "
  ";
        }
        // line 19
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "default/base-index.html.twig", 20)->display(array_merge($context, array("mobile_tool_bar" => "index")));
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default/base-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  71 => 20,  68 => 19,  62 => 17,  59 => 16,  56 => 15,  50 => 4,  44 => 3,  40 => 1,  38 => 13,  36 => 12,  34 => 10,  32 => 8,  30 => 7,  28 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/base-index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\base-index.html.twig");
    }
}
