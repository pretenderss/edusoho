<?php

/* courseset-manage/live/base-live-create-show.html.twig */
class __TwigTemplate_a15f61896aa1c377982e5f92870b6dcb792340997292322ba349659a59e6e4c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'type_icon' => array($this, 'block_type_icon'),
            'type_title' => array($this, 'block_type_title'),
            'type_intro' => array($this, 'block_type_intro'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["liveAccount"] = $this->env->getExtension('AppBundle\Twig\LiveExtension')->getLiveAccount();
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["liveAccount"] ?? null), "error", array(), "any", true, true)) {
            // line 4
            echo "  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.not_purchase_live"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\">
";
        } elseif ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("live-course.live_course_enabled")) {
            // line 6
            echo "  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.available_after_open"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\">
";
        } elseif ($this->getAttribute(        // line 7
($context["liveAccount"] ?? null), "isExpired", array())) {
            // line 8
            echo "  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.valid_service"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\">
";
        } else {
            // line 10
            echo "  <div class=\"course-select js-courseSetType\" data-type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\">
";
        }
        // line 12
        echo "    ";
        $this->displayBlock('type_icon', $context, $blocks);
        // line 15
        echo "    <div class=\"course-type\">
      ";
        // line 16
        $this->displayBlock('type_title', $context, $blocks);
        // line 19
        echo "    </div>
    <div class=\"course-intro\">
      ";
        // line 21
        $this->displayBlock('type_intro', $context, $blocks);
        // line 24
        echo "    </div>
  </div>";
    }

    // line 12
    public function block_type_icon($context, array $blocks = array())
    {
        // line 13
        echo "      <i class=\"es-icon es-icon-zhibokecheng \"></i>
    ";
    }

    // line 16
    public function block_type_title($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_course"), "html", null, true);
        echo "
      ";
    }

    // line 21
    public function block_type_intro($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_course.tips"), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "courseset-manage/live/base-live-create-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  97 => 21,  90 => 17,  87 => 16,  82 => 13,  79 => 12,  74 => 24,  72 => 21,  68 => 19,  66 => 16,  63 => 15,  60 => 12,  54 => 10,  46 => 8,  44 => 7,  37 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/live/base-live-create-show.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\live\\base-live-create-show.html.twig");
    }
}
