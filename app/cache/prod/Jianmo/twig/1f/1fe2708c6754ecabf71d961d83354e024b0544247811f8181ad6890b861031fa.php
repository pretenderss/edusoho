<?php

/* default/navigation-li.html.twig */
class __TwigTemplate_8ee6cb1d43c6df86b576e1a9fa82b7793997e753aa86edc507adfd934d0a8b6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"";
        if (($context["subNavs"] ?? null)) {
            echo "nav-hover";
        }
        if ((($context["siteNav"] ?? null) && (($context["siteNav"] ?? null) == $this->getAttribute(($context["nav"] ?? null), "url", array())))) {
            echo " active ";
        }
        echo "\">
  <a href=\"";
        // line 2
        if ($this->getAttribute(($context["nav"] ?? null), "url", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute(($context["nav"] ?? null), "url", array())), "html", null, true);
        } else {
            echo "javascript:;";
        }
        echo "\" ";
        if ($this->getAttribute(($context["nav"] ?? null), "isNewWin", array())) {
            echo "target=\"_blank\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nav"] ?? null), "name", array()), "html", null, true);
        echo " ";
        if (($context["subNavs"] ?? null)) {
            echo " <b class=\"caret\"></b>";
        }
        echo "</a>
  ";
        // line 3
        if (($context["subNavs"] ?? null)) {
            // line 4
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subNavs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                if ($this->getAttribute($context["subNav"], "isOpen", array())) {
                    // line 6
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute($context["subNav"], "url", array())), "html", null, true);
                    echo "\"  ";
                    if ($this->getAttribute($context["subNav"], "isNewWin", array())) {
                        echo "target=\"_blank\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subNav"], "name", array()), "html", null, true);
                    echo "</a></li>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
  ";
        }
        // line 10
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "default/navigation-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  73 => 8,  57 => 6,  52 => 5,  49 => 4,  47 => 3,  29 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/navigation-li.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\navigation-li.html.twig");
    }
}
