<?php

/* @activity\video\resources\views\show.html.twig */
class __TwigTemplate_f95efeb9240cbea53310c5ddcdbf9232ee85071f6851c70544d63c96ca27a406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/content-layout.html.twig", "@activity\\video\\resources\\views\\show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "preview"), "method") == 1)) {
            // line 5
            echo "    ";
            $this->loadTemplate("@activity/video/resources/views/show/preview.html.twig", "@activity\\video\\resources\\views\\show.html.twig", 5)->display($context);
            // line 6
            echo "  ";
        } else {
            // line 7
            echo "    ";
            $this->loadTemplate("@activity/video/resources/views/show/index.html.twig", "@activity\\video\\resources\\views\\show.html.twig", 7)->display($context);
            // line 8
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "@activity\\video\\resources\\views\\show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity\\video\\resources\\views\\show.html.twig", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\video\\resources\\views\\show.html.twig");
    }
}
