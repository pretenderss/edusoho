<?php

/* site-hint.html.twig */
class __TwigTemplate_eeff4f4babfd7c238f461763d3182961f56b12cb9117acdc868d12364f3467d7 extends Twig_Template
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
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("layout/announcement", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 2
                echo "  ";
                $this->loadTemplate("announcement/announcement.html.twig", "site-hint.html.twig", 2)->display($context);
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
    }

    public function getTemplateName()
    {
        return "site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "site-hint.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\site-hint.html.twig");
    }
}
