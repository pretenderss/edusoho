<?php

/* open-course-manage/liveOpen/create-show.html.twig */
class __TwigTemplate_df987802c3dfbbc207046f883447e8f4c86bc09a39fdb467f402a1c25962df54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/live/base-live-create-show.html.twig", "open-course-manage/liveOpen/create-show.html.twig", 1);
        $this->blocks = array(
            'type_icon' => array($this, 'block_type_icon'),
            'type_title' => array($this, 'block_type_title'),
            'type_intro' => array($this, 'block_type_intro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/live/base-live-create-show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_type_icon($context, array $blocks = array())
    {
        // line 4
        echo "  <i class=\"es-icon es-icon-zhibokecheng2\"></i>
";
    }

    // line 7
    public function block_type_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_type_intro($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.tips"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "open-course-manage/liveOpen/create-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  48 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/liveOpen/create-show.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\open-course-manage\\liveOpen\\create-show.html.twig");
    }
}
