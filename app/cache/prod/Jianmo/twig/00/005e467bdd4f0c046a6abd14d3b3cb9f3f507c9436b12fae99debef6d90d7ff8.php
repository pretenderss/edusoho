<?php

/* my/learning/thread/discussions.html.twig */
class __TwigTemplate_9347dd189e8bc07810fa1300d205c3e3f5a90c41ba7fc8eec6bca382d60d68ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/layout.html.twig", "my/learning/thread/discussions.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-discussions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.thread"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.thread"), "html", null, true);
        echo "</div>

  <div class=\"panel-body\">
    ";
        // line 13
        $this->loadTemplate("my/learning/thread/tab.html.twig", "my/learning/thread/discussions.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        if (($context["threads"] ?? null)) {
            // line 15
            echo "\t    ";
            $this->loadTemplate("my/learning/thread/thread-list.html.twig", "my/learning/thread/discussions.html.twig", 15)->display(array_merge($context, array("type" => "discussion")));
            // line 16
            echo "\t  ";
        } else {
            // line 17
            echo "\t    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.thread.empty"), "html", null, true);
            echo "</div>
\t  ";
        }
        // line 19
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "my/learning/thread/discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  47 => 10,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/thread/discussions.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\learning\\thread\\discussions.html.twig");
    }
}
