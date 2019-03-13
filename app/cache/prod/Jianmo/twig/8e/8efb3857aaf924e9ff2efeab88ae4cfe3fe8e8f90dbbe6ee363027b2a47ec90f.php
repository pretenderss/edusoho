<?php

/* my/learning/thread/questions.html.twig */
class __TwigTemplate_184c4dbd260a50b6ef3bcea993d13816f3fa5ead3bbd3086b1e153618ff92ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/layout.html.twig", "my/learning/thread/questions.html.twig", 1);
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
        $context["side_nav"] = "my-questions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.question"), "html", null, true);
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
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.question"), "html", null, true);
        echo "
  </div>
  <div class=\"panel-body\">

    ";
        // line 15
        if (($context["threads"] ?? null)) {
            // line 16
            echo "\t    ";
            $this->loadTemplate("my/learning/thread/thread-list.html.twig", "my/learning/thread/questions.html.twig", 16)->display(array_merge($context, array("type" => "question")));
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.question.empty"), "html", null, true);
            echo "</div>
    ";
        }
        // line 20
        echo "  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "my/learning/thread/questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  63 => 18,  60 => 17,  57 => 16,  55 => 15,  48 => 11,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/thread/questions.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\learning\\thread\\questions.html.twig");
    }
}
