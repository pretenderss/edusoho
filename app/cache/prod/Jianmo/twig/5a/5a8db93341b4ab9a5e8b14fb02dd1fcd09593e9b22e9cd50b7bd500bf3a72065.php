<?php

/* course-manage/tasks/layout.html.twig */
class __TwigTemplate_da836001d01d2f97f287cb2e8173c6c6e1535bfb04f7f2822b15324e360c7940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("course-manage/layout.html.twig", "course-manage/tasks/layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'paddingClass' => array($this, 'block_paddingClass'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["course_side_nav"] = "tasks";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_paddingClass($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course-manage/tasks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  32 => 4,  28 => 2,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/tasks/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\tasks\\layout.html.twig");
    }
}
