<?php

/* course-manage/base-info/rule.html.twig */
class __TwigTemplate_25c68238c8234a957cdcfe8cbc207fc46f51790de7f4c7f21d348144f5e446d4 extends Twig_Template
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
        echo "<div class=\"form-group\">
  <label for=\"\" class=\"col-sm-2 control-label\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode"), "html", null, true);
        echo "
    <a class=\"es-icon es-icon-help course-mangae-info__help text-normal\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\"
       data-content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.tips"), "html", null, true);
        echo "\">
    </a></label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    ";
        // line 7
        $context["courseDraft"] = ((($this->getAttribute(($context["course"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "status", array()), "draft")) : ("draft")) == "draft");
        // line 8
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("learnMode", array("freeMode" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.free"), "lockMode" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.locked")), (($this->getAttribute(        // line 11
($context["course"] ?? null), "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "learnMode", array()), "freeMode")) : ("freeMode")), ((($context["courseDraft"] ?? null)) ? ("") : ("disabled")));
        echo "
  </div>
</div>

";
        // line 15
        $this->loadTemplate("course-manage/marketing/set-rule.html.twig", "course-manage/base-info/rule.html.twig", 15)->display($context);
        // line 16
        echo "
<div class=\"form-group\">
  <label for=\"\" class=\"col-sm-2 control-label mbs\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "</label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    <label class=\"cd-radio ";
        // line 20
        if (((($this->getAttribute(($context["course"] ?? null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableFinish", array()), "0")) : ("0")) == 1)) {
            echo "checked";
        }
        echo "\">
      <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableFinish\" value=\"1\" > ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.nothing"), "html", null, true);
        echo "
    </label><label class=\"cd-radio ";
        // line 22
        if (((($this->getAttribute(($context["course"] ?? null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableFinish", array()), "0")) : ("0")) == 0)) {
            echo "checked";
        }
        echo "\">
      <input type=\"radio\" data-toggle=\"cd-radio\"  name=\"enableFinish\" value=\"0\"> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.depend_on_finish_condition", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
      <a class=\"es-icon es-icon-help course-mangae-info__help\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.depend_on_finish_condition_tips", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "\"></a>
    </label>
  </div>
</div>
";
        // line 28
        if (($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "live")) {
            // line 29
            echo "  ";
            $this->loadTemplate("course-manage/marketing/set-live-capacity.html.twig", "course-manage/base-info/rule.html.twig", 29)->display($context);
        } else {
            // line 31
            echo "  ";
            $this->loadTemplate("course-manage/marketing/set-preview.html.twig", "course-manage/base-info/rule.html.twig", 31)->display($context);
        }
        // line 33
        echo "<div class=\"form-group js-services\">
  <label class=\"col-sm-2 control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.services.provide_services"), "html", null, true);
        echo "</label>
  <div class=\"col-sm-8 form-control-static\">
    ";
        // line 36
        $context["serviceTags"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->buildServiceTags((($this->getAttribute(($context["course"] ?? null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "services", array()), array())) : (array())));
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["serviceTags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 38
            echo "      <span class=\"service-item js-service-item ";
            if ($this->getAttribute($context["tag"], "active", array())) {
                echo "service-primary-item";
            }
            echo "\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tag"], "summary", array())), "html", null, true);
            echo "\" data-code=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "code", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tag"], "fullName", array())), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    <input type=\"hidden\" id=\"course_services\" name=\"services\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute(($context["course"] ?? null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "services", array()), array())) : (array()))), "html", null, true);
        echo "\">
  </div>
</div>

";
        // line 44
        if (((($context["audioServiceStatus"] ?? null) != "needOpen") && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal"))) {
            // line 45
            echo "  <div class=\"form-group\" id=\"audio-modal-id\">
    <label for=\"\" class=\"col-sm-2 control-label\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.enable"), "html", null, true);
            echo "</label>
    <div class=\"col-sm-8 cd-radio-group\" data-value=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["audioServiceStatus"] ?? null), "html", null, true);
            echo "\" id=\"course-audio-mode\">
      <label class=\"cd-radio ";
            // line 48
            if (((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), "0")) : ("0")) == 1)) {
                echo "checked";
            }
            echo "\">
        <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableAudio\" value=\"1\">
        ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.start"), "html", null, true);
            echo "
      </label>
      <label class=\"cd-radio ";
            // line 52
            if (((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), "0")) : ("0")) == 0)) {
                echo "checked";
            }
            echo "\">
        <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableAudio\" value=\"0\">
        ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.close"), "html", null, true);
            echo "
      </label>
      <div>
        <div class=\"course-mangae-info__tip\">1.";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.enable.video.convert.audio.benefit"), "html", null, true);
            echo "</div>
        <div class=\"course-mangae-info__tip\">2.";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.audio.status"), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CourseExtension')->getAudioConvertionStatus($this->getAttribute(($context["course"] ?? null), "id", array())), "html", null, true);
            echo " <a class=\"ml5 link-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array(), "array"))), "html", null, true);
            echo "\" target=\"__blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.audio.detail"), "html", null, true);
            echo "</a></div>
      </div>
    </div>
  </div>
";
        }
        // line 63
        echo "
";
        // line 64
        $this->loadTemplate("course-manage/marketing/set-reward-point.html.twig", "course-manage/base-info/rule.html.twig", 64)->display($context);
    }

    public function getTemplateName()
    {
        return "course-manage/base-info/rule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 64,  188 => 63,  174 => 58,  170 => 57,  164 => 54,  157 => 52,  152 => 50,  145 => 48,  141 => 47,  137 => 46,  134 => 45,  132 => 44,  124 => 40,  107 => 38,  102 => 37,  100 => 36,  95 => 34,  92 => 33,  88 => 31,  84 => 29,  82 => 28,  75 => 24,  71 => 23,  65 => 22,  61 => 21,  55 => 20,  50 => 18,  46 => 16,  44 => 15,  37 => 11,  35 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/base-info/rule.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\base-info\\rule.html.twig");
    }
}
