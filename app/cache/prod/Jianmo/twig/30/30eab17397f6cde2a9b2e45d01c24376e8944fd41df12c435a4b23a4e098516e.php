<?php

/* course/tabs/reviews.html.twig */
class __TwigTemplate_3e158d91bdc4294e8451ca1cb4aa007bbee52aa91642d2875f9a61a598bac68c extends Twig_Template
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
        $context["canAccess"] = (((((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false)) && twig_in_filter("teacher", $this->getAttribute(($context["member"] ?? null), "role", array()))) || twig_in_filter("ROLE_SUPER_ADMIN", (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "roles", array()), "")) : ("")))) || twig_in_filter("ROLE_ADMIN", (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "roles", array()), "")) : (""))));
        // line 2
        $context["reviewSaveUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_review_create", array("id" => ((($context["selectedCourseId"] ?? null)) ? (($context["selectedCourseId"] ?? null)) : ($this->getAttribute(($context["course"] ?? null), "id", array())))));
        // line 3
        echo "
";
        // line 4
        $context["hideRereview"] = ((($context["selectedCourseId"] ?? null) == 0) ||  !($context["userReview"] ?? null));
        // line 5
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/Course:renderCourseChoice"));
        echo "

";
        // line 8
        $this->loadTemplate("review/widget/list.html.twig", "course/tabs/reviews.html.twig", 8)->display($context);
    }

    public function getTemplateName()
    {
        return "course/tabs/reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/reviews.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\tabs\\reviews.html.twig");
    }
}
