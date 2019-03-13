<?php

/* my/learning/notebook/index.html.twig */
class __TwigTemplate_467093f43653eb3f412ae971f8f010a83bdbd5feba6a015fe314d00cd28972ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/layout.html.twig", "my/learning/notebook/index.html.twig", 1);
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
        $context["side_nav"] = "my-notes";
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/my/learn/notebook/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.note"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      <ul class=\"media-list notebook-list\" id=\"notebook-list\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseMembers"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            if ( !twig_test_empty((($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["member"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["member"], "courseId", array()), array(), "array"), null)) : (null)))) {
                // line 16
                echo "          ";
                $context["course"] = (($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["member"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["member"], "courseId", array()), array(), "array"), null)) : (null));
                // line 17
                echo "          <div class=\"media\">
            <img class=\"pull-left media-object\" src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCover(($context["course"] ?? null), "large"), "courseSet.png"), "html", null, true);
                echo "\">
            <div class=\"media-body\">
              <h4 class=\"media-heading\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
                echo "</h4>
              <div class=\"notebook-metas\">
                <span class=\"notebook-number\">";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.note.total_number", array("%noteNum%" => $this->getAttribute($context["member"], "noteNum", array()))), "html", null, true);
                echo "</span>
              </div>
              <div class=\"notebook-metas\">
                ";
                // line 25
                if (($this->getAttribute($context["member"], "noteLastUpdateTime", array()) > 0)) {
                    // line 26
                    echo "                  <span class=\"notebook-time\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.note.last_update_time", array("%noteLastUpdateTime%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["member"], "noteLastUpdateTime", array())))), "html", null, true);
                    echo " </span>
                ";
                }
                // line 28
                echo "                <a class=\"pull-right notebook-go\"
                   href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_notebook_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.note.watch_link"), "html", null, true);
                echo "</a>
              </div>
            </div>
          </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 34
            echo "          <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.note.empty"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </ul>
      ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "my/learning/notebook/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  116 => 36,  107 => 34,  94 => 29,  91 => 28,  85 => 26,  83 => 25,  77 => 22,  72 => 20,  67 => 18,  64 => 17,  61 => 16,  55 => 15,  49 => 12,  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/notebook/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\learning\\notebook\\index.html.twig");
    }
}
