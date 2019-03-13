<?php

/* admin/faq/sdk.html.twig */
class __TwigTemplate_bcd3b5842722d53e742dbfa8397eebffe297b72978d4a55a512621ea66373917 extends Twig_Template
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
        if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) != 1)) {
            // line 2
            echo "  <script aysnc=\"aysnc\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("faq"), "html", null, true);
            echo "\"></script>
  <script aysnc=\"aysnc\">
    ";
            // line 4
            $context["faqApiServer"] = ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.faq_api_server", "") != "")) ? ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.faq_api_server")) : (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getScheme", array(), "method") . "://www.qiqiuyu.com")));
            // line 5
            echo "    try {
      new FaqSDK({
        id: 'faq-sdk',
        apiUrl: '";
            // line 8
            echo twig_escape_filter($this->env, ($context["faqApiServer"] ?? null), "html", null, true);
            echo "/faq/api/hotlist?version=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("/"), "html", null, true);
            echo "&host=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getHost", array(), "method"), "html", null, true);
            echo "&url=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getRequestUri", array(), "method"), "html", null, true);
            echo "',
        color: '#43bc60',
      });
    }
    catch(err){
      console.log(err);
    }
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/faq/sdk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/faq/sdk.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\admin\\faq\\sdk.html.twig");
    }
}
