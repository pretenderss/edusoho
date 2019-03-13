<?php

/* course-manage/overview/layout.html.twig */
class __TwigTemplate_a4f0771debcff662a1009b10291934f03f9430557bac2ed0545d69c4ff15136f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/layout.html.twig", "course-manage/overview/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
            'overview' => array($this, 'block_overview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["course_side_nav"] = "overview";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.content_title"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_overview"), "html", null, true);
    }

    // line 7
    public function block_main_body($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"course-statictics\">
    ";
        // line 9
        $this->displayBlock('overview', $context, $blocks);
        // line 10
        echo "  </div>
";
    }

    // line 9
    public function block_overview($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course-manage/overview/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  58 => 10,  56 => 9,  53 => 8,  50 => 7,  44 => 6,  34 => 3,  30 => 1,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\layout.html.twig");
    }
}
