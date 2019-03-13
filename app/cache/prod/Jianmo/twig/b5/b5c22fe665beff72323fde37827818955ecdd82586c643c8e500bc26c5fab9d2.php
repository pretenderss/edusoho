<?php

/* course/tabs/tasks.html.twig */
class __TwigTemplate_6cb4d38c2a4999c548dc7616e800ada69715539f748b0f5183ca2a3d0d0130c1 extends Twig_Template
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
        $this->loadTemplate((("course/task-list/" . $this->getAttribute(($context["course"] ?? null), "courseType", array())) . "-task-list.html.twig"), "course/tabs/tasks.html.twig", 1)->display($context);
        // line 2
        echo "
";
    }

    public function getTemplateName()
    {
        return "course/tabs/tasks.html.twig";
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
        return new Twig_Source("", "course/tabs/tasks.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\tabs\\tasks.html.twig");
    }
}
