<?php

/* course/tabs/summary.html.twig */
class __TwigTemplate_21273fbcead51a43934c7147b82bc1087260012d39cff24dc23fa4baafd33433 extends Twig_Template
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
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array())));
        // line 2
        echo "
";
        // line 3
        if (( !((array_key_exists("isMarketingPage", $context)) ? (_twig_default_filter(($context["isMarketingPage"] ?? null), null)) : (null)) && ((($this->getAttribute(($context["course"] ?? null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "courseNum", array()), 1)) : (1)) > 1))) {
            // line 4
            echo "  <div class=\"es-piece\">
    <div class=\"piece-body\">
      ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.introduction.more_teaching_plan", array("%courseUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array())))));
            echo "
    </div>
  </div>
";
        }
        // line 10
        echo "
<div class=\"es-piece\">
  <div class=\"piece-header\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.introduction.course_introduction"), "html", null, true);
        echo "</div>
  <div class=\"piece-body p-lg clearfix\">
    ";
        // line 14
        echo _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->cdn($this->getAttribute(($context["course"] ?? null), "summary", array())), $this->env->getExtension('AppBundle\Twig\WebExtension')->cdn($this->getAttribute(($context["courseSet"] ?? null), "summary", array())));
        echo "
  </div>
</div>

</section>


";
        // line 21
        if ((((array_key_exists("isMarketingPage", $context)) ? (_twig_default_filter(($context["isMarketingPage"] ?? null), null)) : (null)) && ($this->getAttribute(($context["course"] ?? null), "courseItemNum", array()) > 0))) {
            // line 22
            echo "
  <div class=\"panel panel-default hidden-xs\">
    <div class=\"panel-heading \">
      <h3 class=\"panel-title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.content_title"), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 28
            $this->loadTemplate($this->env->getExtension('AppBundle\Twig\CourseExtension')->getDynUrl("course/tabs/tasks.html.twig", array("type" => $this->getAttribute(($context["course"] ?? null), "type", array()))), "course/tabs/summary.html.twig", 28)->display(array_merge($context, array("limitCount" => 2)));
            // line 29
            echo "      <div class=\"js-only-display-one-page\"></div>

      ";
            // line 31
            if (($this->getAttribute(($context["course"] ?? null), "courseItemNum", array()) > 25)) {
                // line 32
                echo "        <div class=\"text-center pt10 border-top-gray-lighter\" >
          <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "tasks")), "html", null, true);
                echo " \" class=\"link-dark\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.view_all_btn"), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 36
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course/tabs/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 36,  80 => 33,  77 => 32,  75 => 31,  71 => 29,  69 => 28,  63 => 25,  58 => 22,  56 => 21,  46 => 14,  41 => 12,  37 => 10,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/tabs/summary.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\tabs\\summary.html.twig");
    }
}
