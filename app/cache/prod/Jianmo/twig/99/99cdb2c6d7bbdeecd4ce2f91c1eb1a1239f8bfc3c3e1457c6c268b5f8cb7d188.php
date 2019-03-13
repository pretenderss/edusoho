<?php

/* course-manage/overview/task-detail/task-chart-data.html.twig */
class __TwigTemplate_da151607ac6a60c3ecbc1eb2b5cdd0b046a85a9443090881838b938a5b610198 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course-manage/overview/task-detail/task-chart-data.html.twig", 1);
        // line 2
        echo "<div class=\"row\">
    <div class=\"legend clearfix\">
        <div class=\"col-10\">
            ";
        // line 5
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "html", null, true);
        echo "
        </div>
        <div class=\"col-80\">
            ";
        // line 8
        $this->loadTemplate("course-manage/overview/task-detail/chart-data-legend.html.twig", "course-manage/overview/task-detail/task-chart-data.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
        <div class=\"col-10\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.rate.finish"), "html", null, true);
        echo "</div>
    </div>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 13
            echo "        <div class=\"chart-item clearfix\">
            <div class=\"col-10 color-gray\">
                ";
            // line 15
            if ($this->getAttribute($context["task"], "number", array())) {
                // line 16
                echo "                    ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 18
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.is_optional_task"), "html", null, true);
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "html", null, true);
                echo "
                ";
            }
            // line 20
            echo "            </div>
            <div class=\"col-80\">
                <div class=\"progress\"
                     data-toggle=\"popover\"
                     data-trigger=\"hover\"
                     data-placement=\"top\"
                     data-html=\"true\"
                     data-delay=\"100\"
                     data-content=\"
                        <div><p class='mbs'>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</p>
                        <span class='legend-icon finish'></span>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.member_learn_status.learned"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "finishedNum", array()), "html", null, true);
            echo "<br/>
                        <span class='legend-icon start'></span>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.member_learn_status.learning"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "learnNum", array()), "html", null, true);
            echo "<br/>
                        <span class='legend-icon learn'></span>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.member_learn_status.none"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "notStartedNum", array()), "html", null, true);
            echo "<br/>
                    </div>\">

                    <div class=\"progress-bar finish-color\" style=\"width: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "rate", array()), "html", null, true);
            echo "%\">
                    </div>
                    <div class=\"progress-bar start-color\" style=\"width: ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->calculatePercent($this->getAttribute($context["task"], "learnNum", array()), $this->getAttribute(($context["course"] ?? null), "studentNum", array())), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"progress-bar learn-color\" style=\"width: ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->calculatePercent($this->getAttribute($context["task"], "notStartedNum", array()), $this->getAttribute(($context["course"] ?? null), "studentNum", array())), "html", null, true);
            echo "%\">
                    </div>
                </div>
            </div>
            <div class=\"col-10\">
                <span class=\"color-gray\">";
            // line 44
            echo twig_escape_filter($this->env, sprintf("%d", $this->getAttribute($context["task"], "rate", array())), "html", null, true);
            echo "% </span>
                <a class=\"js-task-chart-detail more\"
                   data-toggle=\"modal\"
                   data-target=\"#modal\"
                   data-url=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_learn_detail", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "taskId" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\"
                   href=\"javascript:;\" >";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.btn.detail"), "html", null, true);
            echo "</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    ";
        if ( !($context["tasks"] ?? null)) {
            // line 54
            echo "        <div class=\"empty\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 58
        echo "</div>
<div class=\"pull-right mtm\">
    ";
        // line 60
        echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/task-detail/task-chart-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  152 => 58,  146 => 55,  143 => 54,  140 => 53,  130 => 49,  126 => 48,  119 => 44,  111 => 39,  106 => 37,  101 => 35,  93 => 32,  87 => 31,  81 => 30,  77 => 29,  66 => 20,  59 => 18,  52 => 16,  50 => 15,  46 => 13,  42 => 12,  37 => 10,  34 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/task-detail/task-chart-data.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\task-detail\\task-chart-data.html.twig");
    }
}
