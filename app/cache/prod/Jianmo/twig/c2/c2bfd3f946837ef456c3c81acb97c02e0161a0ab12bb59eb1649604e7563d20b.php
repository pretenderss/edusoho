<?php

/* course/task-list/parts/task-course-data.html.twig */
class __TwigTemplate_c88f1420ecd3e18e47dda38948065bc2f4a4a1a1cda8dd66da7d1bb1ec3e1cc8 extends Twig_Template
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
        echo "<!-- 
  接受参数 showOptional, 表示是否显示选修课程
-->

<div class=\"hidden js-hidden-course-info\">
  {
    \"id\": \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "id", array()), "html", null, true);
        echo "\",
    \"isDefault\": \"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "isDefault", array()), "html", null, true);
        echo "\",
    \"learnMode\": \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "learnMode", array()), "html", null, true);
        echo "\",
    \"isMember\": \"";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["member"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "id", array()), "")) : ("")), "html", null, true);
        echo "\",
    \"status\": \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "status", array()), "html", null, true);
        echo "\",
    \"currentTaskId\": \"";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("currentTaskId", $context)) ? (_twig_default_filter(($context["currentTaskId"] ?? null), "")) : ("")), "html", null, true);
        echo "\",
    \"isHideUnpublish\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "isHideUnpublish", array()), "html", null, true);
        echo "\"
  }
</div>

<div class=\"hidden js-hidden-current-task-id\">";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("currentTaskId", $context)) ? (_twig_default_filter(($context["currentTaskId"] ?? null), "")) : ("")), "html", null, true);
        echo "</div>

<div class=\"hidden js-hidden-i18n\">
  {
    \"i18nChapterName\": \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter")), "html", null, true);
        echo "\",
    \"i18nUnitName\": \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part")), "html", null, true);
        echo "\",
    \"i18nLessonName\": \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.lesson"), "html", null, true);
        echo "\",
    \"i18nTaskName\":\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("task")), "html", null, true);
        echo "\"
  }
</div>

<div class=\"hidden js-hidden-cached-data\">
  ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CourseExtension')->taskListJsonData(($context["courseItems"] ?? null), ((array_key_exists("showOptional", $context)) ? (_twig_default_filter(($context["showOptional"] ?? null), false)) : (false))), "html", null, true);
        echo "
</div>

<div class=\"hidden js-hidden-activity-metas\">
  {
    ";
        // line 34
        $context["allMetas"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta();
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allMetas"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 36
            echo "      ";
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 37
                echo "        ,
      ";
            }
            // line 39
            echo "      
      \"";
            // line 40
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\": {
        \"icon\": \"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\",
        \"name\": \"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\"
      }
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  }
</div>

<div class=\"hidden js-hidden-current-timestamp\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "course/task-list/parts/task-course-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 48,  148 => 45,  131 => 42,  127 => 41,  123 => 40,  120 => 39,  116 => 37,  113 => 36,  95 => 35,  93 => 34,  85 => 29,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  58 => 17,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/parts/task-course-data.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\task-course-data.html.twig");
    }
}
