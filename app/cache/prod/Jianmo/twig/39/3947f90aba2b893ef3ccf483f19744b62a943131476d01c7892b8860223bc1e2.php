<?php

/* my/teaching/lives-calendar.html.twig */
class __TwigTemplate_b1e87f21341d80634f5bb2b2f3f7a0bb7e09bccc3de09d0038c5dd9727b7a3d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/my-teaching.html.twig", "my/teaching/lives-calendar.html.twig", 1);
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
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/fullcalendar.js", 1 => "app/js/my/teaching-calendar/index.js"));
        // line 7
        $context["side_nav"] = "my-teaching-live-calendar";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.live_schedule_menu"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"cd-content mt0\">
    <div class=\"cd-panel schedule-panel\">
      <div class=\"cd-panel-body schedule-panel__body\">
        <div class=\"schedule-panel-body__current-num\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.today_courses"), "html", null, true);
        echo "：<span style=\"font-size: 24px\">";
        echo twig_escape_filter($this->env, ($context["courseNumber"] ?? null), "html", null, true);
        echo "</span><span class=\"cd-ml8 cd-text-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.hints_block"), "html", null, true);
        echo "</span></div>
        <div id='calendar'></div>
        <div id=\"todayDateStr\" class=\"hidden\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "</div>
        <div id=\"courseNumber\" class=\"hidden\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["courseNumber"] ?? null), "html", null, true);
        echo "</div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "my/teaching/lives-calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 15,  50 => 13,  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/teaching/lives-calendar.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\teaching\\lives-calendar.html.twig");
    }
}
