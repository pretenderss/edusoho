<?php

/* lesson-manage/common/marker-manage-btn.html.twig */
class __TwigTemplate_70026888da655420def8502db154d1108900b35b465e546ad8c3af275e41380d extends Twig_Template
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
        // line 2
        if ((($this->getAttribute(($context["task"] ?? null), "type", array()) == "video") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 3
            echo "  ";
            $context["file"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array(), "any", false, true), "ext", array(), "any", false, true), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["task"] ?? null), "activity", array(), "any", false, true), "ext", array(), "any", false, true), "file", array()), null)) : (null));
            // line 4
            echo "  ";
            if (((($this->getAttribute(($context["file"] ?? null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["file"] ?? null), "storage", array()), null)) : (null)) == "cloud")) {
                // line 5
                echo "    <li class=\"mark-manage\">
      <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_marker_manage", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
      ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.lesson-marker_btn"), "html", null, true);
                echo "
      </a>
    </li>
    <li class=\"divider mark-manage-divider\" style=\"display:none;\"></li>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "lesson-manage/common/marker-manage-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  30 => 6,  27 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lesson-manage/common/marker-manage-btn.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\lesson-manage\\common\\marker-manage-btn.html.twig");
    }
}
