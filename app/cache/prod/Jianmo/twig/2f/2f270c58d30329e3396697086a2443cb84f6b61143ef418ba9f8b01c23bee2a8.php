<?php

/* my/learning/course/nav-pill.html.twig */
class __TwigTemplate_6abb5cf2b20eef479a744b7cb7eba62882003e40c384bbf7a727716ca8e97100 extends Twig_Template
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
        echo "<ul class=\"cd-tabs\">
\t<li";
        // line 2
        if ((($context["tab_nav"] ?? null) == "learning")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.learning"), "html", null, true);
        echo "</a></li>
\t<li";
        // line 3
        if ((($context["tab_nav"] ?? null) == "learned")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learned");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.learned"), "html", null, true);
        echo "</a></li>
\t<li";
        // line 4
        if ((($context["tab_nav"] ?? null) == "favorited")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_sets_favorite");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.favorite"), "html", null, true);
        echo "</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "my/learning/course/nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  32 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/course/nav-pill.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\learning\\course\\nav-pill.html.twig");
    }
}
