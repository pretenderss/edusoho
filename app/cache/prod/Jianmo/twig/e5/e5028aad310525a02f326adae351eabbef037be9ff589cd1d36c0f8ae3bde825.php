<?php

/* course/tabs/threads.html.twig */
class __TwigTemplate_c76d5495cf5630cff9f310b52a9dbb5a8c836208c59f25aa68febf938cf093dc extends Twig_Template
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
        $this->loadTemplate("course/thread/header.html.twig", "course/tabs/threads.html.twig", 1)->display(array_merge($context, array("courseSet" => ($context["courseSet"] ?? null), "course" => ($context["course"] ?? null))));
        // line 2
        $this->loadTemplate("thread/list.html.twig", "course/tabs/threads.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "course/tabs/threads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/threads.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\tabs\\threads.html.twig");
    }
}
