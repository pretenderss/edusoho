<?php

/* default/top-navigation.html.twig */
class __TwigTemplate_e8f981920f5cb9c0151715e38b981ba0a19a85d002624b6f915aae690e126679 extends Twig_Template
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
        $context["topNavNum"] = (($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "navigation", array(), "any", false, true), "topNavNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "navigation", array(), "any", false, true), "topNavNum", array()), 5)) : (5));
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigations"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            if ($this->getAttribute($context["nav"], "isOpen", array())) {
                // line 4
                echo "  ";
                $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                // line 5
                echo "  ";
                if ((($this->getAttribute($context["loop"], "index", array()) == (($context["topNavNum"] ?? null) + 1)) &&  !((array_key_exists("isMobile", $context)) ? (_twig_default_filter(($context["isMobile"] ?? null), false)) : (false)))) {
                    // line 6
                    echo "    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["navigations"] ?? null), ($context["topNavNum"] ?? null), null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                        if ($this->getAttribute($context["nav"], "isOpen", array())) {
                            // line 12
                            echo "          ";
                            $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                            // line 13
                            echo "
          ";
                            // line 14
                            $this->loadTemplate("default/navigation-li.html.twig", "default/top-navigation.html.twig", 14)->display($context);
                            // line 15
                            echo "        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "      </ul>
    </li>
  ";
                }
                // line 19
                echo "
  ";
                // line 20
                if ((($this->getAttribute($context["loop"], "index", array()) <= ($context["topNavNum"] ?? null)) || ((array_key_exists("isMobile", $context)) ? (_twig_default_filter(($context["isMobile"] ?? null), false)) : (false)))) {
                    // line 21
                    echo "    ";
                    $this->loadTemplate("default/navigation-li.html.twig", "default/top-navigation.html.twig", 21)->display($context);
                    // line 22
                    echo "  ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  87 => 21,  85 => 20,  82 => 19,  77 => 16,  67 => 15,  65 => 14,  62 => 13,  59 => 12,  48 => 11,  41 => 6,  38 => 5,  35 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/top-navigation.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\top-navigation.html.twig");
    }
}
