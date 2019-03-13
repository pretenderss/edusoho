<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_805867cb6234b5db90952c1c80058c7c0a3ee6562e07182fd53a7898961c3102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle:Exception:layout.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "出错啦 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container\">
    <div class=\"panel panel-default error-panel\">
      <div class=\"panel-heading\">
         <span class=\"error-title\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</span>
        ";
        // line 9
        if (($this->getAttribute(($context["exception"] ?? null), "code", array()) > 0)) {
            echo " 
          ";
            // line 10
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? null), "message", array())), ($context["status_text"] ?? null)), "html", null, true);
            echo "
        ";
        } else {
            // line 12
            echo "          ";
            echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <p>如果你看到该提示，说明服务器出现了问题。</p>
          <p>刚从被窝中努力爬起来的程序员哥哥正拼命修复中。</p>
          <p><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("ref" => 500));
        echo "\">返回首页 ></a></p>
          <span class=\"error-500-icon hidden-xs\"></span>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  63 => 14,  57 => 12,  52 => 10,  48 => 9,  44 => 8,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\TwigBundle\\views\\Exception\\error.html.twig");
    }
}
