<?php

/* script/script-custom.html.twig */
class __TwigTemplate_0d8eaef64509f564bd35ca880650d7b3a5b6dc4fd87a7f104b07de9f2ebceb6c extends Twig_Template
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "jianmotheme/js/main.js"), 999);
    }

    public function getTemplateName()
    {
        return "script/script-custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "script/script-custom.html.twig", "D:\\workspace\\vboxShare\\edusoho/web/themes/jianmo/views/script/script-custom.html.twig");
    }
}
