<?php

/* my/teaching/course-set-list.html.twig */
class __TwigTemplate_72b8da4c7481590b0f64837665110fd65099a530075275014af78dfd298c78dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/header.html.twig", "my/teaching/course-set-list.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'coursesetImg' => array($this, 'block_coursesetImg'),
            'coursesetTitle' => array($this, 'block_coursesetTitle'),
            'courseTitle' => array($this, 'block_courseTitle'),
            'courseType' => array($this, 'block_courseType'),
            'btn' => array($this, 'block_btn'),
            'close' => array($this, 'block_close'),
            'fold' => array($this, 'block_fold'),
            'unfold' => array($this, 'block_unfold'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_js($context, array $blocks = array())
    {
    }

    // line 6
    public function block_coursesetImg($context, array $blocks = array())
    {
        // line 7
        echo "  <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "redirect_path", array()), "html", null, true);
        echo "\">
    <img class=\"courseset-manage-header__img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(($context["courseSet"] ?? null), "large"), "courseSet.png"), "html", null, true);
        echo "\" /> <!-- courseSet.largePicture -->
  </a>
";
    }

    // line 12
    public function block_coursesetTitle($context, array $blocks = array())
    {
        // line 13
        echo "  <a class=\"cd-link-major\" target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "redirect_path", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</a>
";
    }

    // line 16
    public function block_courseTitle($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "courseNum", array()), 0)) : (0)), "html", null, true);
        echo "
";
    }

    // line 20
    public function block_courseType($context, array $blocks = array())
    {
    }

    // line 23
    public function block_btn($context, array $blocks = array())
    {
        // line 24
        echo "  <a class=\"cd-btn cd-btn-ghost-primary cd-mr16\" target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "redirect_path", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.manage_btn"), "html", null, true);
        echo "</a>
  ";
        // line 25
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) != "published")) {
            // line 26
            echo "    <a class=\"cd-btn cd-btn-ghost-default\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()), "previewAs" => "guest")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.preview.course"), "html", null, true);
            echo "</a>
  ";
        } else {
            // line 28
            echo "    <a class=\"cd-btn cd-btn-ghost-default\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.watch"), "html", null, true);
            echo "</a>
  ";
        }
    }

    // line 32
    public function block_close($context, array $blocks = array())
    {
    }

    // line 35
    public function block_fold($context, array $blocks = array())
    {
    }

    // line 36
    public function block_unfold($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "my/teaching/course-set-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  118 => 35,  113 => 32,  103 => 28,  95 => 26,  93 => 25,  86 => 24,  83 => 23,  78 => 20,  71 => 17,  68 => 16,  59 => 13,  56 => 12,  49 => 8,  44 => 7,  41 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/teaching/course-set-list.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\teaching\\course-set-list.html.twig");
    }
}
