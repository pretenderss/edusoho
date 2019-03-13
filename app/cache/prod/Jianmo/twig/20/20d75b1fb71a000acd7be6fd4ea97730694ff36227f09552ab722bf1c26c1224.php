<?php

/* default/script-webpack.html.twig */
class __TwigTemplate_c5d66fc7c489cc48623e2e67ee099e9781ad1d81752aaed39cdd84f23c873314 extends Twig_Template
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/base.js", 1 => "app/js/common.js", 2 => "app/js/main.js"), 1000);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("script.webpack.extension");
        echo "

";
        // line 5
        $this->loadTemplate("script/script-custom.html.twig", "default/script-webpack.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "default/script-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/script-webpack.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\script-webpack.html.twig");
    }
}
