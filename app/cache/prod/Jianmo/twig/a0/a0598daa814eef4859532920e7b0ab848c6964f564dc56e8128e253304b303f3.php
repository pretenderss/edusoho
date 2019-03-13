<?php

/* css_loader.html.twig */
class __TwigTemplate_27a5762bddbc261704d09d98f5264cefe8e6cbe6a15525839d984936af0060e8 extends Twig_Template
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
            if ((is_string($__internal_96ca3550f5283efb89a5e86912f45f4c2c8851917d795abe01ae9389f6f63cda = $context["path"]) && is_string($__internal_bd920ef6fa9013443f17e7e01fe7e5195d93f9abc23f6d7dd99473f55809de19 = "http://") && ('' === $__internal_bd920ef6fa9013443f17e7e01fe7e5195d93f9abc23f6d7dd99473f55809de19 || 0 === strpos($__internal_96ca3550f5283efb89a5e86912f45f4c2c8851917d795abe01ae9389f6f63cda, $__internal_bd920ef6fa9013443f17e7e01fe7e5195d93f9abc23f6d7dd99473f55809de19)))) {
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
