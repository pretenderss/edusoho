<?php

/* mobile/footer-tool-bar.html.twig */
class __TwigTemplate_24c5e10446f4158bf3c6b8711b7f91af20bb215dbc4d57b060d29aea6895f4ce extends Twig_Template
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
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 2
        if (($context["mobile"] ?? null)) {
            // line 3
            echo "<div class=\"footer-tool-bar\">
  <div class=\"";
            // line 4
            if ((($context["mobile_tool_bar"] ?? null) == "index")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
            echo "
    </a>
  </div>
  <div class=\"";
            // line 10
            if ((($context["mobile_tool_bar"] ?? null) == "course")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
            echo "\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course"), "html", null, true);
            echo "
    </a>
  </div>
  <div class=\"";
            // line 16
            if ((($context["mobile_tool_bar"] ?? null) == "learning")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">
      <i class=\"es-icon es-icon-write\"></i><br>
      ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.learning"), "html", null, true);
            echo "
    </a>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "mobile/footer-tool-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  66 => 17,  60 => 16,  54 => 13,  49 => 11,  43 => 10,  37 => 7,  32 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mobile/footer-tool-bar.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\mobile\\footer-tool-bar.html.twig");
    }
}
