<?php

/* course-manage/marketing/set-rule.html.twig */
class __TwigTemplate_6d825e8eb34cef3c52c5ee27f416ddeeac4294b0c94e6cc5b24cf88b8c813e96 extends Twig_Template
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
        echo "<div class=\"form-group mb0\">
  <label class=\"col-sm-2 control-label\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.expiry_date"), "html", null, true);
        echo "
    <a class=\"es-icon es-icon-help course-mangae-info__help text-normal\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" 
    data-content=\"<ul class='pl10 list-unstyled'>
      <li class='mb10'>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.anytime");
        echo "</li>
      <li class='mb10'>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.real_time");
        echo "</li>
      <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.overdue_tips"), "html", null, true);
        echo "</li>
    </ul>\">
    </a>
  </label>
  <div class=\"col-sm-10 cd-radio-group mbm\">
    ";
        // line 13
        $context["coursePublished"] = ((($this->getAttribute(($context["course"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "status", array()), "draft")) : ("draft")) == "published");
        // line 14
        echo "    ";
        $context["courseClosed"] = ((($this->getAttribute(($context["course"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "status", array()), "draft")) : ("draft")) == "closed");
        // line 15
        echo "    ";
        $context["courseSetPublished"] = ((($this->getAttribute(($context["courseSet"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "status", array()), "draft")) : ("draft")) == "published");
        // line 16
        echo "    ";
        $context["courseSetClosed"] = ((($this->getAttribute(($context["courseSet"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "status", array()), "draft")) : ("draft")) == "closed");
        // line 17
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("expiryMode", array("days" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.anywhere_mode"), "date" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.date_mode"), "forever" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.forever_mode")), (($this->getAttribute(        // line 19
($context["course"] ?? null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryMode", array()), "days")) : ("days")), (((($context["coursePublished"] ?? null) || ($context["courseClosed"] ?? null))) ? ("disabled") : ("")));
        echo "
    
    ";
        // line 21
        if ((($context["courseClosed"] ?? null) || ((($context["courseSetClosed"] ?? null) && ((($this->getAttribute(($context["course"] ?? null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryMode", array()), "days")) : ("days")) == "days")) && ((($this->getAttribute(($context["course"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "status", array()), "draft")) : ("draft")) != "draft")))) {
            // line 22
            echo "      <input type=\"hidden\" name=\"expiryMode\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryMode", array()), "days")) : ("days")), "html", null, true);
            echo "\">
    ";
        }
        // line 24
        echo "    ";
        // line 25
        echo "    <div class=\"course-manage-expiry ";
        if (twig_in_filter((($this->getAttribute(($context["course"] ?? null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryMode", array()), "days")) : ("days")), array(0 => "date", 1 => "forever"))) {
            echo "hidden";
        }
        echo "\" id=\"expiry-days\">
      <span class=\"caret\"></span>
      ";
        // line 27
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("deadlineType", array("end_date" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.end_date_mode"), "days" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.days_mode")), (($this->getAttribute(        // line 29
($context["course"] ?? null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "deadlineType", array()), "days")) : ("days")), (((($context["coursePublished"] ?? null) || ($context["courseClosed"] ?? null))) ? ("disabled") : ("")));
        echo "

      ";
        // line 31
        if ((($context["coursePublished"] ?? null) || ($context["courseClosed"] ?? null))) {
            // line 32
            echo "        <input type=\"hidden\" name=\"deadlineType\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "deadlineType", array()), "days")) : ("days")), "html", null, true);
            echo "\">
      ";
        }
        // line 34
        echo "
      <div class=\"cd-mt16 ";
        // line 35
        if (((($this->getAttribute(($context["course"] ?? null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "deadlineType", array()), "days")) : ("days")) != "end_date")) {
            echo "hidden";
        }
        echo "\" id=\"deadlineType-date\">
        <input autocomplete=\"off\" class=\"form-control course-mangae-info__input js-expiry-input cd-mr8\" id=\"deadline\" name=\"deadline\" value=\"";
        // line 36
        if ((($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), 0)) : (0))) {
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), 0)) : (0)), "html", null, true);
        }
        echo "\" ";
        if ((($context["coursePublished"] ?? null) && ($context["courseSetPublished"] ?? null))) {
            echo " disabled ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.expiry_date_tips"), "html", null, true);
        echo "
      </div>
      <div class=\"cd-mt16 ";
        // line 38
        if (((($this->getAttribute(($context["course"] ?? null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "deadlineType", array()), "days")) : ("days")) != "days")) {
            echo "hidden";
        }
        echo "\" id=\"deadlineType-days\">
        <input class=\"form-control course-mangae-info__input js-expiry-input cd-mr8\" type=\"text\" id=\"expiryDays\" name=\"expiryDays\" value=\"";
        // line 39
        if ((($this->getAttribute(($context["course"] ?? null), "expiryDays", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryDays", array()), 1)) : (1))) {
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "expiryDays", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryDays", array()), 1)) : (1)), "html", null, true);
        }
        echo "\" ";
        if ((($context["coursePublished"] ?? null) && ($context["courseSetPublished"] ?? null))) {
            echo "disabled ";
        }
        echo ">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.expiry_date.publish_tips"), "html", null, true);
        echo "
      </div>
    </div>
    ";
        // line 44
        echo "    <div class=\"course-manage-expiry ";
        if (twig_in_filter((($this->getAttribute(($context["course"] ?? null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryMode", array()), "days")) : ("days")), array(0 => "days", 1 => "forever"))) {
            echo "hidden";
        }
        echo "\" id=\"expiry-date\">
      <span class=\"caret\"></span>
      <div class=\"course-manage-expiry__circle\">
        ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.start_time"), "html", null, true);
        echo "<input class=\"form-control cd-ml16 cd-mr32 course-mangae-info__input js-expiry-input\" id=\"expiryStartDate\" type=\"text\" name=\"expiryStartDate\" value=\"";
        if (((($this->getAttribute(($context["course"] ?? null), "expiryStartDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryStartDate", array()), 0)) : (0)) == 0)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "expiryStartDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryStartDate", array()), twig_date_format_filter($this->env, "now", "Y-m-d"))) : (twig_date_format_filter($this->env, "now", "Y-m-d"))), "html", null, true);
        }
        echo "\" ";
        if ((($context["coursePublished"] ?? null) && ($context["courseSetPublished"] ?? null))) {
            echo " disabled ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.end_time"), "html", null, true);
        echo "<input class=\"form-control cd-ml16 course-mangae-info__input js-expiry-input\" type=\"text\" id=\"expiryEndDate\" name=\"expiryEndDate\" value=\"";
        if (((($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), 0)) : (0)) != 0)) {
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), 0)) : (0)), "html", null, true);
        }
        echo "\" ";
        if ((($context["coursePublished"] ?? null) && ($context["courseSetPublished"] ?? null))) {
            echo "disabled ";
        }
        echo " >
      </div>
    </div>
    <div class=\"course-mangae-info__tip js-expiry-tip ";
        // line 50
        if (((($this->getAttribute(($context["course"] ?? null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "expiryMode", array()), "days")) : ("days")) == "forever")) {
            echo " ml0 ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.expiry_date.first_publish_tips"), "html", null, true);
        echo "</div>
  </div>
</div>
";
        // line 53
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.lesson_watch_limit")) {
            // line 54
            echo "  <div class=\"form-group mtl\">
    <label class=\"col-sm-2 control-label\">
      ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.watch_time_limit"), "html", null, true);
            echo "
    </label>
    <div class=\"col-sm-8\">
      <input class=\"form-control course-mangae-info__input mrs\" type=\"text\" name=\"watchLimit\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "watchLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "watchLimit", array()), 0)) : (0)), "html", null, true);
            echo "\">
      ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.watch_time_limit.watch_limit"), "html", null, true);
            echo "
      <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.watch_time_limit.watch_limit_tips");
            echo "\">
      </a>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/marketing/set-rule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 61,  200 => 60,  196 => 59,  190 => 56,  186 => 54,  184 => 53,  174 => 50,  148 => 47,  139 => 44,  133 => 40,  123 => 39,  117 => 38,  104 => 36,  98 => 35,  95 => 34,  89 => 32,  87 => 31,  82 => 29,  81 => 27,  73 => 25,  71 => 24,  65 => 22,  63 => 21,  58 => 19,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  45 => 13,  37 => 8,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/marketing/set-rule.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\marketing\\set-rule.html.twig");
    }
}
