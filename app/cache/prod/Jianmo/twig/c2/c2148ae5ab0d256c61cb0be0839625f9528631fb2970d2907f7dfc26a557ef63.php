<?php

/* my/learning/course/learning.html.twig */
class __TwigTemplate_9dcc2bdbc31c376f3456f4a9820e8e7a1adb121d7d527f676bd5544b6e763051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/learning/course/layout.html.twig", "my/learning/course/learning.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'main_mobile' => array($this, 'block_main_mobile'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/learning/course/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 4
        $context["tab_nav"] = "learning";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.learning"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"panel panel-default panel-col\">

    <div class=\"panel-heading\">
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course"), "html", null, true);
        echo "
      <a class=\"btn cd-btn cd-btn-info cd-btn-sm pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_live_calendar");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.live_schedule_menu"), "html", null, true);
        echo "</a>
    </div>

    <div class=\"panel-body\">
      ";
        // line 17
        $this->loadTemplate("my/learning/course/nav-pill.html.twig", "my/learning/course/learning.html.twig", 17)->display($context);
        // line 18
        echo "      ";
        $context["type"] = "learning";
        // line 19
        echo "
      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            if ($context["courseSet"]) {
                // line 21
                echo "        ";
                $context["currentCourses"] = $this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["courseSet"], "id", array()), array(), "array");
                // line 22
                echo "        ";
                $context["classroom"] = (($this->getAttribute($context["courseSet"], "classroom", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "classroom", array(), "array"), null)) : (null));
                // line 23
                echo "
        ";
                // line 24
                if (($context["currentCourses"] ?? null)) {
                    // line 25
                    echo "          ";
                    $this->loadTemplate("my/learning/course/courses-block-item.html.twig", "my/learning/course/learning.html.twig", 25)->display($context);
                    // line 26
                    echo "        ";
                }
                // line 27
                echo "      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        <div class=\"cd-empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.learning_empty"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
    </div>
  </div>
";
    }

    // line 35
    public function block_main_mobile($context, array $blocks = array())
    {
        // line 36
        echo "  ";
        if (($context["mobile"] ?? null)) {
            // line 37
            echo "    ";
            $this->loadTemplate("my/learning/course/learning-mobile.html.twig", "my/learning/course/learning.html.twig", 37)->display(array_merge($context, array("courses" => ($context["learningCourses"] ?? null))));
            // line 38
            echo "  ";
        }
    }

    // line 41
    public function block_bottom($context, array $blocks = array())
    {
        // line 42
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "my/learning/course/learning.html.twig", 42)->display(array_merge($context, array("mobile_tool_bar" => "learning")));
    }

    public function getTemplateName()
    {
        return "my/learning/course/learning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  144 => 41,  139 => 38,  136 => 37,  133 => 36,  130 => 35,  121 => 30,  112 => 28,  103 => 27,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  89 => 22,  86 => 21,  74 => 20,  71 => 19,  68 => 18,  66 => 17,  57 => 13,  53 => 12,  47 => 8,  44 => 7,  36 => 5,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/course/learning.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\learning\\course\\learning.html.twig");
    }
}
