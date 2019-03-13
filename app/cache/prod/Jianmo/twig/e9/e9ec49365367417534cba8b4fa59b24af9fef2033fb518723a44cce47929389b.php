<?php

/* testpaper/manage/check-list.html.twig */
class __TwigTemplate_47f784dfbf80bf29203fc12637afc1d19e779a0096d4137e41a358c1a3dc5d36 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "testpaper/manage/check-list.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/testpaper-manage/check-list/index.js"));
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if ($context["task"]) {
                // line 6
                echo "  ";
                $context["resultListRout"] = (((array_key_exists("targetType", $context)) ? (_twig_default_filter(($context["targetType"] ?? null), "course")) : ("course")) . "_manage_testpaper_result_list");
                // line 7
                echo "  ";
                $context["testpaper"] = (($this->getAttribute(($context["testpapers"] ?? null), $this->getAttribute($context["task"], "testId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["testpapers"] ?? null), $this->getAttribute($context["task"], "testId", array()), array(), "array"), null)) : (null));
                // line 8
                echo "  ";
                $context["statusNum"] = (($this->getAttribute(($context["resultStatusNum"] ?? null), $this->getAttribute($context["task"], "activityId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["resultStatusNum"] ?? null), $this->getAttribute($context["task"], "activityId", array()), array(), "array"), null)) : (null));
                // line 9
                echo "  ";
                $this->loadTemplate("testpaper/manage/check-list-item.html.twig", "testpaper/manage/check-list.html.twig", 9)->display(array_merge($context, array("task" => $context["task"], "testpaper" => ($context["testpaper"] ?? null), "targetResultInfo" => ($context["statusNum"] ?? null), "targetId" => ($context["targetId"] ?? null))));
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_check.empty"), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
<nav class=\"text-center\">
  ";
        // line 15
        echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
        echo "
</nav>
";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/check-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  69 => 13,  60 => 11,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/check-list.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\testpaper\\manage\\check-list.html.twig");
    }
}
