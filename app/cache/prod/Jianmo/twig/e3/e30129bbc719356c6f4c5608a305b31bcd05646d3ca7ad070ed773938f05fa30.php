<?php

/* course/widgets/characteristic.html.twig */
class __TwigTemplate_2d1a9615426029f3e69f5e8b8807abc53a88e1c06cb8b73a0f6d793db83e5768 extends Twig_Template
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
        if ( !twig_test_empty(($context["characteristicData"] ?? null))) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.characteristic.content_title"), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"panel-body pt0\">
      <div class=\"course-features pl0\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["characteristicData"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 9
                echo "          ";
                if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                    // line 10
                    echo "            <div class=\"course-features-item clearfix\">
          ";
                }
                // line 12
                echo "          <div class=\"media\">
            <div class=\"media-left prm\">
                <span class=\"color-lump bg-primary\"> <i class=\"es-icon ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "icon", array()), "html", null, true);
                echo " media-logo\"></i>
                </span>
            </div>
            <div class=\"media-body media-middle\">";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["data"], "name", array())), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "num", array()), "html", null, true);
                echo ")</div>
          </div>
          ";
                // line 19
                if (((($this->getAttribute($context["loop"], "index", array()) % 2) == 0) || ($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, ($context["characteristicData"] ?? null))))) {
                    // line 20
                    echo "            </div>
          ";
                }
                // line 22
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course/widgets/characteristic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  79 => 22,  75 => 20,  73 => 19,  66 => 17,  60 => 14,  56 => 12,  52 => 10,  49 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/characteristic.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\widgets\\characteristic.html.twig");
    }
}
