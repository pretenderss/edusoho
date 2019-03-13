<?php

/* my/learning/lives-calendar.html.twig */
class __TwigTemplate_e00811025a58f0441815eab4cc639a458f137b5dad8208463b3412307efb92d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("v2/layout.html.twig", "my/learning/lives-calendar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/fullcalendar.js", 1 => "app/js/my/learning-calendar/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.live_schedule_menu"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_full_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"container cd-container\">
    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.menu_heading"), "html", null, true);
        echo "</a></li>
      <li class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.live_schedule_menu"), "html", null, true);
        echo "</li>
    </ol>
    <div class=\"cd-content mt0\">
      <div class=\"cd-panel schedule-panel\">
        <div class=\"cd-panel-heading schedule-panel__heading clearfix\">
          <span class=\"pull-right\">
            <a class=\"btn cd-btn cd-btn-info cd-btn-sm\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course"), "html", null, true);
        echo "</a>
          </span>
        </div>
        <div class=\"cd-panel-body schedule-panel__body\">
          <div class=\"js-calendar\" id='calendar'></div>
          <div id=\"todayDateStr\" class=\"hidden\">";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "my/learning/lives-calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  62 => 17,  53 => 11,  47 => 10,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/lives-calendar.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\learning\\lives-calendar.html.twig");
    }
}
