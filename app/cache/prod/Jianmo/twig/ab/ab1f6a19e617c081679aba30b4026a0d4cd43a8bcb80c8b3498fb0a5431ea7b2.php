<?php

/* my-order/layout.html.twig */
class __TwigTemplate_1739b004ea2842344ac9948cc951edca515d1f8029c8eff8015ebe130576db36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("v2/layout.html.twig", "my-order/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
            'myorder_content' => array($this, 'block_myorder_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-orders";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.content_title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.content_title"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_main_body($context, array $blocks = array())
    {
        // line 12
        echo "  <ul class=\"cd-tabs\">
    <li ";
        // line 13
        if ((($context["my_order_side_nav"] ?? null) == "order_list")) {
            echo "class=\"active\"";
        }
        echo ">
      <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders", array("display_status" => ""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.order.order_list"), "html", null, true);
        echo "</a>
    </li>
    <li ";
        // line 16
        if ((($context["my_order_side_nav"] ?? null) == "refund_list")) {
            echo "class=\"active\"";
        }
        echo ">
      <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_refunds", array("display_status" => "no_paid"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.order.refund_list"), "html", null, true);
        echo "
        ";
        // line 19
        echo "      </a>
    </li>
  </ul>
  ";
        // line 22
        $this->displayBlock('myorder_content', $context, $blocks);
    }

    public function block_myorder_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "my-order/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  83 => 19,  77 => 17,  71 => 16,  64 => 14,  58 => 13,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my-order/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my-order\\layout.html.twig");
    }
}
