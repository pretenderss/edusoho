<?php

/* common/weixin-share.html.twig */
class __TwigTemplate_453b130d617fc65d461b08d6d4d7ded7991157f84986a7329d71c1f31e4e422a extends Twig_Template
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
        $context["wxconfig"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->weixinConfig();
        // line 2
        if (((array_key_exists("wxconfig", $context)) ? (_twig_default_filter(($context["wxconfig"] ?? null), null)) : (null))) {
            // line 3
            echo "  ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/weixin-share/index.js"));
            // line 4
            echo "  <div class=\"hidden jweixin-data\" 
    data-config=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["wxconfig"] ?? null), "html", null, true);
            echo "\"
    data-title=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" 
    data-desc='";
            // line 7
            echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
            echo "'
    data-link=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" 
    data-img-url=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["imgUrl"] ?? null), "html", null, true);
            echo "\" 
    data-type=\"";
            // line 10
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")), "html", null, true);
            echo "\" 
    data-data-url=\"";
            // line 11
            echo twig_escape_filter($this->env, ((array_key_exists("dataUrl", $context)) ? (_twig_default_filter(($context["dataUrl"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
  </div>
";
        }
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "common/weixin-share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/weixin-share.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\common\\weixin-share.html.twig");
    }
}
