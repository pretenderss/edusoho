<?php

/* course-manage/overview/task-detail/student-chart-data.html.twig */
class __TwigTemplate_b573f29db3503bca08f1058f73a188b444f9574d6c2d6272f6ba66b3d58be947 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course-manage/overview/task-detail/student-chart-data.html.twig", 1);
        // line 2
        echo "<div class=\"legend clearfix\">
    <div class=\"col-10\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"), "html", null, true);
        echo "
    </div>
    <div class=\"col-80\">
        ";
        // line 7
        $this->loadTemplate("course-manage/overview/task-detail/chart-data-legend.html.twig", "course-manage/overview/task-detail/student-chart-data.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"col-10\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.rate.finish"), "html", null, true);
        echo "</div>
</div>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["members"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            if (($context["tasks"] ?? null)) {
                // line 12
                echo "    ";
                $context["user"] = $this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["member"], "userId", array()), array(), "array");
                // line 13
                echo "    ";
                $context["userTaskResults"] = (($this->getAttribute(($context["taskResults"] ?? null), $this->getAttribute(($context["user"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["taskResults"] ?? null), $this->getAttribute(($context["user"] ?? null), "id", array()), array(), "array"))) : (""));
                // line 14
                echo "    <div class=\"chart-item clearfix\">
        <div class=\"col-10 color-gray text-overflow\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-delay=\"100\" data-content=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
                echo "\">
           ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
                echo "
        </div>
        <ul class=\"col-80 student-detail\">
            ";
                // line 19
                $this->loadTemplate("course-manage/overview/task-detail/student-chart-item.html.twig", "course-manage/overview/task-detail/student-chart-data.html.twig", 19)->display($context);
                // line 20
                echo "        </ul>
        <div class=\"col-10\">
            <span class=\"color-gray\">
                ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->calculatePercent($this->getAttribute($context["member"], "learnedCompulsoryTaskNum", array()), $this->getAttribute(($context["course"] ?? null), "compulsoryTaskNum", array())), "html", null, true);
                echo "
            </span>
            ";
                // line 25
                if ((($context["taskCount"] ?? null) > 20)) {
                    // line 26
                    echo "                <a class=\"js-task-chart-detail more\"
                   data-toggle=\"modal\"
                   data-target=\"#modal\"
                   data-url=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_student_learn_detail_modal", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "userId" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                    echo "\"
                   href=\"javascript:;\" >";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.btn.detail"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 32
                echo "        </div>
    </div>
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        if (( !($context["members"] ?? null) ||  !($context["tasks"] ?? null))) {
            // line 36
            echo "    <div class=\"empty\">
        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "
    </div>
";
        }
        // line 40
        echo "
";
        // line 41
        if (($context["tasks"] ?? null)) {
            // line 42
            echo "    <div class=\"pull-right mtm\">
      ";
            // line 43
            echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/overview/task-detail/student-chart-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  127 => 42,  125 => 41,  122 => 40,  116 => 37,  113 => 36,  111 => 35,  99 => 32,  94 => 30,  90 => 29,  85 => 26,  83 => 25,  78 => 23,  73 => 20,  71 => 19,  65 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  41 => 11,  36 => 9,  33 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/task-detail/student-chart-data.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\task-detail\\student-chart-data.html.twig");
    }
}
