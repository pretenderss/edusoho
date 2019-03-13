<?php

/* course/task-list/parts/list-li-title-template.html.twig */
class __TwigTemplate_c16719b30924f89c5c20ceb5595c3ca2b4f14fced63a42b4ac99d81e44ef6815 extends Twig_Template
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
        if (twig_test_empty(($context["member"] ?? null))) {
            // line 2
            echo "  <span display-if=\"{isTaskFree}\" class=\"label label-success mr10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.free"), "html", null, true);
            echo "</span>
  
  ";
            // line 4
            if ($this->getAttribute(($context["course"] ?? null), "tryLookable", array())) {
                // line 5
                echo "    <tmp hide-if=\"{isTaskFree}\">
      <span display-if=\"{isCloudVideo}\" class=\"label label-warning mrm\">";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.try_lookable"), "html", null, true);
                echo "</span>
    </tmp>
  ";
            }
            // line 9
            echo "
";
        } else {
            // line 11
            echo "  <span display-if=\"{isOptional}\" class=\"label label-info mr10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.is_optional"), "html", null, true);
            echo "</span>
";
        }
        // line 13
        echo "{getTaskName}";
    }

    public function getTemplateName()
    {
        return "course/task-list/parts/list-li-title-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  42 => 11,  38 => 9,  32 => 6,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/parts/list-li-title-template.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\list-li-title-template.html.twig");
    }
}
