<?php

/* default/footer.html.twig */
class __TwigTemplate_70ddde29c98d25833eecb2417fbcaaa3a1fc21a2b3301e82ae80c7d4c125c6ca extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 2
            echo "    ";
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 3
            echo "    ";
            if ((($context["code"] ?? null) == "footer-link")) {
                // line 4
                echo "      ";
                $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
                // line 5
                echo "      ";
                $this->loadTemplate((("default/" . ($context["code"] ?? null)) . ".html.twig"), "default/footer.html.twig", 5)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? null))));
                // line 6
                echo "    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 12
        $this->loadTemplate("powered-by.html.twig", "default/footer.html.twig", 12)->display($context);
        // line 13
        echo "
      ";
        // line 14
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "

      ";
        // line 16
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.enabled"), false)) {
            // line 17
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.script");
            echo "
      ";
        }
        // line 19
        echo "
      <a class=\"mlm\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_archive");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.archive"), "html", null, true);
        echo "</a>
      <div class=\"mts\">
        ";
        // line 22
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")) {
            // line 23
            echo "          ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.course_copyright", array("%copyRightUrl%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")));
            echo "
        ";
        }
        // line 25
        echo "        ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp")) {
            // line 26
            echo "          <a class=\"mlm\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 30
        echo "      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  111 => 27,  108 => 26,  105 => 25,  99 => 23,  97 => 22,  90 => 20,  87 => 19,  81 => 17,  79 => 16,  74 => 14,  71 => 13,  69 => 12,  63 => 8,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/footer.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\footer.html.twig");
    }
}
