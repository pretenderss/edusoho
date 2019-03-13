<?php

/* course-manage/testpaper-check/check-list.html.twig */
class __TwigTemplate_6c6aee21f03f7bf8e9517b532231b0c2d3be87a1bf68b5137fca3407deeadae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/layout.html.twig", "course-manage/testpaper-check/check-list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["course_side_nav"] = "testpaper-check";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_check"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_check"), "html", null, true);
    }

    // line 8
    public function block_main_body($context, array $blocks = array())
    {
        // line 9
        echo "  <div>

    ";
        // line 11
        if (((array_key_exists("isTeacher", $context) &&  !($context["isTeacher"] ?? null)) &&  !$this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_manage"))) {
            // line 12
            echo "      <span class=\"color-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_check.no_permission_tips"), "html", null, true);
            echo "</span>
    ";
        }
        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Testpaper/Manage:checkList", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()), "targetId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "targetType" => "course", "type" => "testpaper")));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "course-manage/testpaper-check/check-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  58 => 12,  56 => 11,  52 => 9,  49 => 8,  43 => 6,  33 => 3,  29 => 1,  27 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/testpaper-check/check-list.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\testpaper-check\\check-list.html.twig");
    }
}
