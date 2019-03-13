<?php

/* admin/default/script-webpack.html.twig */
class __TwigTemplate_f94403d978c063f9a84dde7e444360708321056556d77746a8d29f47b9e6bf19 extends Twig_Template
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
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("script.webpack.extension");
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/default/script-webpack.html.twig";
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
        return new Twig_Source("", "admin/default/script-webpack.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\admin\\default\\script-webpack.html.twig");
    }
}
