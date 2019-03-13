<?php

/* course-manage/overview/dashboard.html.twig */
class __TwigTemplate_443c3f4c0a7099c6fee1d64ca3c2ba0c5d6fd04577fa1a40c812269d8f47ae5b extends Twig_Template
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
        echo "<!-- 概览 -->
<div class=\"dashboard row\">
    <div class=\"col-xs-4 item bottom-border\">
    <span class=\"number\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "studentNum", array()), "html", null, true);
        echo "
        ";
        // line 5
        if ($this->getAttribute(($context["summary"] ?? null), "studentNumToday", array())) {
            // line 6
            echo "            <span class=\"incre\">+";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "studentNumToday", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 8
        echo "    </span>
        <div class=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.stunents_numbers"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"col-xs-4 item bottom-border\">
    <span class=\"number\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "finishedNum", array()), "html", null, true);
        echo "
        ";
        // line 13
        if ($this->getAttribute(($context["summary"] ?? null), "finishedNumToday", array())) {
            // line 14
            echo "            <span class=\"incre\">+";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "finishedNumToday", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 16
        echo "    </span>
        <div class=\"title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.finished_numbers"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"col-xs-4 item bottom-border no-right-border\">
    <span class=\"number\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "tryViewNum", array()), "html", null, true);
        echo "
        ";
        // line 21
        if ($this->getAttribute(($context["summary"] ?? null), "tryViewNumToday", array())) {
            // line 22
            echo "            <span class=\"incre\">+";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "tryViewNumToday", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 24
        echo "    </span>
        <div class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.free_view_numbers"), "html", null, true);
        echo "
            <span class=\"link-medium es-icon es-icon-help ml5\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.free_view_numbers_tips", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "\">
            </span>
        </div>
    </div>
    <div class=\"col-xs-4 item\">
    <span class=\"number\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "noteNum", array()), "html", null, true);
        echo "
        ";
        // line 32
        if ($this->getAttribute(($context["summary"] ?? null), "noteNumToday", array())) {
            // line 33
            echo "            <span class=\"incre\">+";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "noteNumToday", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 35
        echo "    </span>
        <div class=\"title\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.notes_numbers"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"col-xs-4 item\">
    <span class=\"number\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "askNum", array()), "html", null, true);
        echo "
        ";
        // line 40
        if ($this->getAttribute(($context["summary"] ?? null), "askNumToday", array())) {
            // line 41
            echo "            <span class=\"incre\">+";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "askNumToday", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 43
        echo "    </span>
        <div class=\"title\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.questions_numbers"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"col-xs-4 item no-right-border\">
    <span class=\"number\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "discussionNum", array()), "html", null, true);
        echo "
        ";
        // line 48
        if ($this->getAttribute(($context["summary"] ?? null), "discussionNumToday", array())) {
            // line 49
            echo "            <span class=\"incre\">+";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["summary"] ?? null), "discussionNumToday", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 51
        echo "    </span>
        <div class=\"title\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.dashboard.discussions_numbers"), "html", null, true);
        echo "</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/overview/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  147 => 51,  141 => 49,  139 => 48,  135 => 47,  129 => 44,  126 => 43,  120 => 41,  118 => 40,  114 => 39,  108 => 36,  105 => 35,  99 => 33,  97 => 32,  93 => 31,  85 => 26,  81 => 25,  78 => 24,  72 => 22,  70 => 21,  66 => 20,  60 => 17,  57 => 16,  51 => 14,  49 => 13,  45 => 12,  39 => 9,  36 => 8,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/overview/dashboard.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\overview\\dashboard.html.twig");
    }
}
