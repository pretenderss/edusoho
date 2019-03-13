<?php

/* my-order/order/index.html.twig */
class __TwigTemplate_a2f6825232cbd67f2f0daf4f446d64222d48d78f802775ecce1b1d9f2366a937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my-order/layout.html.twig", "my-order/order/index.html.twig", 1);
        $this->blocks = array(
            'myorder_content' => array($this, 'block_myorder_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my-order/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["my_order_side_nav"] = "order_list";
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/my/order/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_myorder_content($context, array $blocks = array())
    {
        // line 9
        echo "  <form class=\"form-inline cd-form-inline\" action=\"\" method=\"get\">
    <div class=\"form-group cd-form-group cd-form-group-button\">
      <input name=\"status\" type=\"hidden\" class=\"hidden\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "status"), "method"), "html", null, true);
        echo "\">
      <input name=\"q\" type=\"text\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control form-control-sm\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.placeholder_product_name"), "html", null, true);
        echo "\">
      <button type=\"submit\"><i class=\"cd-icon cd-icon-search\"></i></button>
    </div>
  </form>
  <div class=\"table-responsive cd-table-responsive\">
    <table class=\"table cd-table\" id=\"orders-table\">
      ";
        // line 18
        $this->loadTemplate("order/order-table-v2.html.twig", "my-order/order/index.html.twig", 18)->display(array_merge($context, array("mode" => "my")));
        // line 19
        echo "    </table>
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "my-order/order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  57 => 19,  55 => 18,  44 => 12,  40 => 11,  36 => 9,  33 => 8,  29 => 1,  27 => 6,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my-order/order/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my-order\\order\\index.html.twig");
    }
}
