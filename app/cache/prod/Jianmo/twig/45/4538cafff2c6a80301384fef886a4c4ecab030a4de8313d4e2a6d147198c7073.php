<?php

/* my/learning/thread/tab.html.twig */
class __TwigTemplate_835f9cc147a0a9fc3013ea54976c191e1e63e756611769270b473a4416c12a29 extends Twig_Template
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
        echo "<ul class=\"nav nav-pills\">
\t<li class=\"";
        // line 2
        if ((($context["threadType"] ?? null) == "course")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.question.course_thread"), "html", null, true);
        echo "</a></li>
\t<li class=\"";
        // line 3
        if ((($context["threadType"] ?? null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_classroom_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.question.classroom_thread", array("%classroomName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "</a></li>
</ul>
<br>
";
    }

    public function getTemplateName()
    {
        return "my/learning/thread/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/thread/tab.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\learning\\thread\\tab.html.twig");
    }
}
