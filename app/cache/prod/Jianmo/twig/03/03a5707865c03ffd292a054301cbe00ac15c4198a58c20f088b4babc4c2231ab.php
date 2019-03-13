<?php

/* v2/layout.html.twig */
class __TwigTemplate_c79e908056cebb97fbec7dd3ecf87be0893dc04f1a8144a01ccd166d79ed61d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "v2/layout.html.twig", 1);
        $this->blocks = array(
            'full_content' => array($this, 'block_full_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
            'main_heading' => array($this, 'block_main_heading'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "cd-design";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_full_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"container cd-container\">
    <div class=\"cd-content\">
      ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 11
        echo "
      ";
        // line 12
        $this->displayBlock('main', $context, $blocks);
        // line 27
        echo "    </div>
  </div>
";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->loadTemplate("v2/sidebar.html.twig", "v2/layout.html.twig", 9)->display(array_merge($context, array("side_nav" => ((array_key_exists("side_nav", $context)) ? (_twig_default_filter(($context["side_nav"] ?? null), "")) : ("")))));
        // line 10
        echo "      ";
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "        <div class=\"cd-main\">
          <div class=\"cd-main__heading\">
            ";
        // line 15
        $this->displayBlock('main_heading', $context, $blocks);
        // line 20
        echo "          </div>
          <div class=\"cd-main__body\">
            ";
        // line 22
        $this->displayBlock('main_body', $context, $blocks);
        // line 24
        echo "          </div>
        </div>
      ";
    }

    // line 15
    public function block_main_heading($context, array $blocks = array())
    {
        // line 16
        echo "              <div class=\"cd-main__title\">
                ";
        // line 17
        $this->displayBlock('page_title', $context, $blocks);
        // line 18
        echo "              </div>
            ";
    }

    // line 17
    public function block_page_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_main_body($context, array $blocks = array())
    {
        // line 23
        echo "            ";
    }

    // line 31
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 34
    public function block_floatConsult($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "v2/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  114 => 31,  110 => 23,  107 => 22,  102 => 17,  97 => 18,  95 => 17,  92 => 16,  89 => 15,  83 => 24,  81 => 22,  77 => 20,  75 => 15,  71 => 13,  68 => 12,  64 => 10,  61 => 9,  58 => 8,  52 => 27,  50 => 12,  47 => 11,  45 => 8,  41 => 6,  38 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "v2/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\v2\\layout.html.twig");
    }
}
