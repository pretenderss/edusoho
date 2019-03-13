<?php

/* my/teaching/course-sets.html.twig */
class __TwigTemplate_b79d335af80e97fabb95f7e12484225e87a7794f790a96b8d7de6ad4ba0eccb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("my/my-teaching.html.twig", "my/teaching/course-sets.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/my-teaching.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "my/teaching/course-sets.html.twig", 1);
        // line 6
        $context["side_nav"] = "my-teaching-courses";
        // line 8
        $context["type"] = "question";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.page_title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "  <div role=\"my-teaching-course-sets\">
    ";
        // line 12
        $this->loadTemplate("my/teaching/course-type-select.html.twig", "my/teaching/course-sets.html.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 15
            echo "      <div class=\"js-course-set-item cd-mb32\">
        ";
            // line 16
            $this->loadTemplate("my/teaching/course-set-list.html.twig", "my/teaching/course-sets.html.twig", 16)->display($context);
            // line 17
            echo "      </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 19
            echo "      <div class=\"empty\">
        <a class=\"cd-link-primary\" href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\" target=\"_blank\">
          ";
            // line 21
            if ((((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? null), "normal")) : ("normal")) == "live")) {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.live_empty_hint"), "html", null, true);
                echo "
          ";
            } else {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.empty_hint"), "html", null, true);
                echo "
          ";
            }
            // line 26
            echo "        </a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    <nav class=\"text-center\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    public function getTemplateName()
    {
        return "my/teaching/course-sets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  121 => 29,  113 => 26,  107 => 24,  101 => 22,  99 => 21,  95 => 20,  92 => 19,  78 => 17,  76 => 16,  73 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  44 => 10,  36 => 4,  32 => 2,  30 => 8,  28 => 6,  26 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/teaching/course-sets.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\teaching\\course-sets.html.twig");
    }
}
