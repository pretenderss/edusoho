<?php

/* default/exception.html.twig */
class __TwigTemplate_51f47e79f676483d79266085e58817330666a88f3f097286dd51fbd4929dce2f extends Twig_Template
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
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "flashBag", array(), "any", false, true), "has", array(0 => "currentThrowedException"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "flashBag", array(), "any", false, true), "has", array(0 => "currentThrowedException"), "method"))) : (""))) {
            // line 2
            echo "  <div class=\"js-hidden-exception hidden\">
    ";
            // line 3
            $context["currentThrowedException"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "currentThrowedException"), "method"), 0, array(), "array");
            // line 4
            echo "    {
      \"statusCode\": \"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentThrowedException"] ?? null), "statusCode", array(), "array"), "html", null, true);
            echo "\",
      \"code\": \"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentThrowedException"] ?? null), "code", array(), "array"), "html", null, true);
            echo "\",
      \"message\": \"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["currentThrowedException"] ?? null), "message", array(), "array")), "html", null, true);
            echo "\"
    }
  </div>

  ";
            // line 11
            if (("dev" == $this->getAttribute(($context["app"] ?? null), "environment", array()))) {
                // line 12
                echo "    <div class=\"js-hidden-exception-trace hidden\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentThrowedException"] ?? null), "trace", array(), "array"), "html", null, true);
                echo "
    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/exception.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\exception.html.twig");
    }
}
