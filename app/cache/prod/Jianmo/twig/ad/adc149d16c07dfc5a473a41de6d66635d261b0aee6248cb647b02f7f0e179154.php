<?php

/* courseset-manage/layout.html.twig */
class __TwigTemplate_0e5a4d9413bfb91229f6ecb4d4846f7b4ed10a2940334333d7b152c640df8fc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("v2/layout.html.twig", "courseset-manage/layout.html.twig", 1);
        $this->blocks = array(
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'sectionClass' => array($this, 'block_sectionClass'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'courseset_header' => array($this, 'block_courseset_header'),
            'navbar' => array($this, 'block_navbar'),
            'course_header' => array($this, 'block_course_header'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_full_content($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 20
        echo "  <div class=\"container cd-container\">
    <div class=\"cd-content courseset-manage-body ";
        // line 21
        $this->displayBlock('paddingClass', $context, $blocks);
        echo "\">
      ";
        // line 22
        $this->displayBlock('sidebar', $context, $blocks);
        // line 24
        echo "
      ";
        // line 25
        $this->displayBlock('main', $context, $blocks);
        // line 27
        echo "    </div>
  </div>
";
    }

    // line 4
    public function block_top_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"";
        $this->displayBlock('sectionClass', $context, $blocks);
        echo "\">
      <div class=\"container cd-container\">
        ";
        // line 7
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('courseset_header', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('course_header', $context, $blocks);
        // line 17
        echo "      </div>
    </div>
  ";
    }

    // line 5
    public function block_sectionClass($context, array $blocks = array())
    {
        echo " courseset-header-section ";
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 8
        echo "          ";
        // line 9
        echo "        ";
    }

    // line 10
    public function block_courseset_header($context, array $blocks = array())
    {
        // line 11
        echo "        ";
    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        // line 13
        echo "          ";
        $this->loadTemplate("courseset-manage/navbar.html.twig", "courseset-manage/layout.html.twig", 13)->display($context);
        // line 14
        echo "        ";
    }

    // line 15
    public function block_course_header($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    // line 21
    public function block_paddingClass($context, array $blocks = array())
    {
        echo " courseset-manage-padding ";
    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        // line 23
        echo "      ";
    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
        // line 26
        echo "      ";
    }

    public function getTemplateName()
    {
        return "courseset-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 26,  141 => 25,  137 => 23,  134 => 22,  128 => 21,  124 => 16,  121 => 15,  117 => 14,  114 => 13,  111 => 12,  107 => 11,  104 => 10,  100 => 9,  98 => 8,  95 => 7,  89 => 5,  83 => 17,  80 => 15,  77 => 12,  74 => 10,  72 => 7,  66 => 5,  63 => 4,  57 => 27,  55 => 25,  52 => 24,  50 => 22,  46 => 21,  43 => 20,  40 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\layout.html.twig");
    }
}
