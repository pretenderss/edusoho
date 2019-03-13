<?php

/* course/task-list/parts/task-link-template.html.twig */
class __TwigTemplate_23d4ba2598f81b2a29f15dba0e7c7f4d1903e3fb5c396650d895577af9e554ac extends Twig_Template
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
        $context["isOvertime"] = (($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) && ($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) < twig_date_format_filter($this->env, "now", "U"))) || ($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()) && ($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()) < twig_date_format_filter($this->env, "now", "U"))));
        // line 2
        echo "
<tmp hide-if=\"{isItemDisplayedAsUnpublished}\">
  ";
        // line 4
        if (($context["member"] ?? null)) {
            // line 5
            echo "    <a hide-if=\"{isTaskLocked}\" class=\"title\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => "{taskId}")), "html", null, true);
            echo "\">
      ";
            // line 6
            $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 6)->display($context);
            // line 7
            echo "    </a>

    <span display-if=\"{isTaskLocked}\" class=\"title\">
      ";
            // line 10
            $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 10)->display($context);
            // line 11
            echo "    </span>
  ";
        } elseif ( !        // line 12
($context["isOvertime"] ?? null)) {
            // line 13
            echo "    <a class=\"title\" href=\"#modal\" data-toggle=\"modal\"
        data-url=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => "{taskId}")), "html", null, true);
            echo "\"
        style=\"margin-top:-6px\">";
            // line 15
            $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 15)->display($context);
            echo "</a>
  ";
        } else {
            // line 17
            echo "    <a class=\"title\" href=\"javascript:;\" data-toggle=\"modal\"
        style=\"margin-top:-6px\">";
            // line 18
            $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 18)->display($context);
            echo "</a>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        $this->loadTemplate("course/task-list/parts/task-length-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 21)->display($context);
        // line 22
        echo "  <span class=\"right-menu mouse-enter\">
    ";
        // line 23
        if ((( !($context["member"] ?? null) &&  !($context["isOvertime"] ?? null)) && ((($this->getAttribute(($context["courseSet"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "status", array()), "published")) : ("published")) == "published"))) {
            // line 24
            echo "      <tmp display-if=\"{isTaskFree}\">
        <a class=\"btn btn-primary\" href=\"#modal\" data-toggle=\"modal\"
            data-url=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => "{taskId}")), "html", null, true);
            echo "\"
            style=\"margin-top:-6px\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.preview_btn"), "html", null, true);
            echo "</a>
      </tmp>

      <tmp hide-if=\"{isTaskFree}\">
        <tmp display-if=\"{isTaskTryLookable}\">
          <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
              data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => "{taskId}")), "html", null, true);
            echo "\"
              style=\"margin-top:-6px\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.try_look_btn"), "html", null, true);
            echo "</a>
        </tmp>

        <tmp hide-if=\"{isTaskTryLookable}\">
          ";
            // line 38
            if (((($this->getAttribute(($context["course"] ?? null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "parentId", array()), 0)) : (0)) == 0)) {
                // line 39
                echo "            ";
                if ($this->getAttribute(($context["course"] ?? null), "isFree", array())) {
                    // line 40
                    echo "              <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => "{taskId}")), "html", null, true);
                    echo "\"
                  style=\"margin-top:-6px\">";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.join_btn"), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 44
                    echo "              <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => "{taskId}")), "html", null, true);
                    echo "\"
                  style=\"margin-top:-6px\">";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.buy_btn"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 48
                echo "          ";
            }
            // line 49
            echo "        </tmp>
      </tmp>
    ";
        }
        // line 52
        echo "  </span>
</tmp>

<tmp display-if=\"{isItemDisplayedAsUnpublished}\">
  <span class=\"title\">
    ";
        // line 57
        $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 57)->display($context);
        // line 58
        echo "  </span>
  <span class=\"right-menu color-gray\">
    ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.looking_forward"), "html", null, true);
        echo "
  </span>
</tmp>";
    }

    public function getTemplateName()
    {
        return "course/task-list/parts/task-link-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 60,  150 => 58,  148 => 57,  141 => 52,  136 => 49,  133 => 48,  128 => 46,  124 => 45,  121 => 44,  116 => 42,  112 => 41,  109 => 40,  106 => 39,  104 => 38,  97 => 34,  93 => 33,  84 => 27,  80 => 26,  76 => 24,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  61 => 18,  58 => 17,  53 => 15,  49 => 14,  46 => 13,  44 => 12,  41 => 11,  39 => 10,  34 => 7,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/parts/task-link-template.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\task-link-template.html.twig");
    }
}
