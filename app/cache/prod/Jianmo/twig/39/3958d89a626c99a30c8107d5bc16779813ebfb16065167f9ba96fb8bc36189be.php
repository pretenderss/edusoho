<?php

/* course/header/free-mode-member-learn-btn.html.twig */
class __TwigTemplate_33dd08524b35b214e3f502ea1e9538b728465832703de6faaf9502c8ba767669 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["toLearnTasks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["toLearnTask"]) {
            // line 2
            echo "  ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 3
                echo "    <a class=\"btn btn-primary btn-lg \"
      href=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute($context["toLearnTask"], "id", array()))), "html", null, true);
                echo "\">
      ";
                // line 5
                if ((($context["taskResultCount"] ?? null) < 1)) {
                    // line 6
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.start_learning"), "html", null, true);
                    echo "
      ";
                } else {
                    // line 8
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.continue_learning_btn"), "html", null, true);
                    echo "
      ";
                }
                // line 10
                echo "    </a>
  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toLearnTask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "course/header/free-mode-member-learn-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 8,  48 => 6,  46 => 5,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/free-mode-member-learn-btn.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\free-mode-member-learn-btn.html.twig");
    }
}
