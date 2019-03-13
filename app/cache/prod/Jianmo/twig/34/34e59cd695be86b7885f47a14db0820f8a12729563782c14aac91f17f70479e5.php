<?php

/* css_loader.html.twig */
class __TwigTemplate_583315d8a00269e5e2219baa65c4cbbd667d06906f35d4dd06ac1461bce08831 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_2b90eb94c1d961dc779cf697b17c1b0ee4d36a712d8acf9e704a1639a73d535e = $context["path"]) && is_string($__internal_3922abe7bd2b48c8a16ab787a5c5becf106287af70d758b88005c38ef63e0054 = "http://") && ('' === $__internal_3922abe7bd2b48c8a16ab787a5c5becf106287af70d758b88005c38ef63e0054 || 0 === strpos($__internal_2b90eb94c1d961dc779cf697b17c1b0ee4d36a712d8acf9e704a1639a73d535e, $__internal_3922abe7bd2b48c8a16ab787a5c5becf106287af70d758b88005c38ef63e0054)))) {
                // line 3
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 5
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "css_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "css_loader.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\css_loader.html.twig");
    }
}
