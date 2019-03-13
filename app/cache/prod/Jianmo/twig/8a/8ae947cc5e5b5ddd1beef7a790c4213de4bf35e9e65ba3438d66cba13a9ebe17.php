<?php

/* bootstrap-modal-layout.html.twig */
class __TwigTemplate_ad8a483094d3e354cd1c71196c4bb5a352140e621a235daef87db123b59c09a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'modal_content' => array($this, 'block_modal_content'),
            'modal_header' => array($this, 'block_modal_header'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "bootstrap-modal-layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "bootstrap-modal-layout.html.twig", 2);
        // line 3
        $this->loadTemplate("css_loader.html.twig", "bootstrap-modal-layout.html.twig", 3)->display($context);
        // line 4
        echo "
<div class=\"modal-dialog ";
        // line 5
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter(($context["modal_class"] ?? null), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["modal_class"] ?? null), "html", null, true);
        }
        echo "\" data-clear=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("closeClear", $context)) ? (_twig_default_filter(($context["closeClear"] ?? null), 0)) : (0)), "html", null, true);
        echo "\">
  ";
        // line 6
        $this->displayBlock('modal_content', $context, $blocks);
        // line 22
        echo "  ";
        $this->loadTemplate("js_loader_async.html.twig", "bootstrap-modal-layout.html.twig", 22)->display($context);
        // line 23
        echo "</div>";
    }

    // line 6
    public function block_modal_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"modal-content\">
      ";
        // line 8
        $this->displayBlock('modal_header', $context, $blocks);
        // line 16
        echo "      <div class=\"modal-body\">";
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
      ";
        // line 17
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter(($context["hide_footer"] ?? null), false)) : (false))) {
            // line 18
            echo "        <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
      ";
        }
        // line 20
        echo "    </div>
  ";
    }

    // line 8
    public function block_modal_header($context, array $blocks = array())
    {
        // line 9
        echo "        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"cd-icon cd-icon-close\"></i>
          </button>
          <h4 class=\"modal-title\">";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
        </div>
      ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  97 => 16,  86 => 13,  80 => 9,  77 => 8,  72 => 20,  66 => 18,  64 => 17,  59 => 16,  57 => 8,  54 => 7,  51 => 6,  47 => 23,  44 => 22,  42 => 6,  33 => 5,  30 => 4,  28 => 3,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap-modal-layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\bootstrap-modal-layout.html.twig");
    }
}
