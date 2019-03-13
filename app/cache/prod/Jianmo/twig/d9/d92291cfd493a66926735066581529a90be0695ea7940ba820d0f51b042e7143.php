<?php

/* material-lib/web/layout.html.twig */
class __TwigTemplate_b6087db707d7a4de0265dab63b99bf31d14a04a4dfea6da48c464d6f603dc0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/my-teaching.html.twig", "material-lib/web/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/my-teaching.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["side_nav"] = "material-lib";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/colorbox/colorbox.css"), "html", null, true);
        echo "\" />
";
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"panel panel-default panel-col\">

\t<div class=\"panel-heading\">
\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.content_title"), "html", null, true);
        echo "
\t</div>

\t<div class=\"panel-body material-body\">
\t";
        // line 20
        $this->displayBlock('page_body', $context, $blocks);
        // line 22
        echo "\t</div>
</div>
";
    }

    // line 20
    public function block_page_body($context, array $blocks = array())
    {
        // line 21
        echo "\t";
    }

    public function getTemplateName()
    {
        return "material-lib/web/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  79 => 20,  73 => 22,  71 => 20,  64 => 16,  59 => 13,  56 => 12,  50 => 7,  45 => 6,  42 => 5,  34 => 3,  30 => 1,  28 => 10,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "material-lib/web/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\material-lib\\web\\layout.html.twig");
    }
}
