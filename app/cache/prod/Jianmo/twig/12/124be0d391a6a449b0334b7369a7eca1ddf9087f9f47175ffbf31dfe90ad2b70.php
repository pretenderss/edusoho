<?php

/* lesson-manage/default-list.html.twig */
class __TwigTemplate_2478deab84d23ac399d82b10c1783ad4450ae678398fe8a17f4aa1bd05952280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/tasks/layout.html.twig", "lesson-manage/default-list.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/tasks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-sortable.js", 1 => "app/js/course-manage/lesson-manage/default/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.content_title"), "html", null, true);
    }

    // line 5
    public function block_main_body($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("lesson-manage/header.html.twig", "lesson-manage/default-list.html.twig", 6)->display(array_merge($context, array("taskMode" => "lesson")));
        // line 7
        echo "  <ul id=\"sortable-list\" class=\"task-manage-list sortable-list\" data-sort-url='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_items_sort", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "'>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            // line 9
            echo "      ";
            if (($this->getAttribute($context["item"], "type", array()) == "lesson")) {
                // line 10
                echo "        ";
                $this->loadTemplate("lesson-manage/default/lesson.html.twig", "lesson-manage/default-list.html.twig", 10)->display(array_merge($context, array("lesson" => $context["item"])));
                // line 11
                echo "      ";
            } else {
                // line 12
                echo "        ";
                $this->loadTemplate("lesson-manage/chapter/item.html.twig", "lesson-manage/default-list.html.twig", 12)->display(array_merge($context, array("chapter" => $context["item"], "course" => ($context["course"] ?? null))));
                // line 13
                echo "      ";
            }
            // line 14
            echo "    ";
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
        // line 15
        echo "  </ul>
  <div class=\"empty task-empty js-task-empty ";
        // line 16
        if (($context["items"] ?? null)) {
            echo " hidden ";
        }
        echo "\">
    <i class=\"es-icon es-icon-book task-empty-icon\"></i>
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.empty"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "lesson-manage/default-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  98 => 16,  95 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  49 => 8,  44 => 7,  41 => 6,  38 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/default-list.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\default-list.html.twig");
    }
}
