<?php

/* my/my-teaching.html.twig */
class __TwigTemplate_a16a8e6aa26d6b3a0a4c1f076d1fb2ede3c93fe2f8ee1e6c1757a16f6aa9b1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("v2/layout.html.twig", "my/my-teaching.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'main' => array($this, 'block_main'),
            'main_mobile' => array($this, 'block_main_mobile'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.menu_heading"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_full_content($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 15
        echo "  <div class=\"cd-container\">
    <div class=\"cd-content my-teaching-body\">
      ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:My/User:avatarAlert"));
        echo "
      ";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 20
        echo "
      ";
        // line 21
        $this->displayBlock('main_mobile', $context, $blocks);
        // line 22
        echo "    </div>
  </div>
";
    }

    // line 8
    public function block_top_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"my-header-section\">
      <div class=\"cd-container\">
        ";
        // line 11
        $this->loadTemplate("my/navbar.html.twig", "my/my-teaching.html.twig", 11)->display($context);
        // line 12
        echo "      </div>
    </div>
  ";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "      ";
    }

    // line 21
    public function block_main_mobile($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "my/my-teaching.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  89 => 19,  86 => 18,  80 => 12,  78 => 11,  74 => 9,  71 => 8,  65 => 22,  63 => 21,  60 => 20,  58 => 18,  54 => 17,  50 => 15,  47 => 8,  44 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/my-teaching.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\my-teaching.html.twig");
    }
}
