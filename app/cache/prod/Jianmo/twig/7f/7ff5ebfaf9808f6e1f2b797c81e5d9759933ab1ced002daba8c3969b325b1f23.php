<?php

/* @activity\testpaper\resources\views\create_or_update_content.html.twig */
class __TwigTemplate_91c786ee682279e32cbbe702a252e91123c416c904fdefb307da1e1abd84df5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-layout.html.twig", "@activity\\testpaper\\resources\\views\\create_or_update_content.html.twig", 1);
        $this->blocks = array(
            'activity_step' => array($this, 'block_activity_step'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/activity-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-client.js", 1 => "libs/bootstrap-datetimepicker.js", 2 => "testpaperactivity/js/manage/index.js"), 300);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_activity_step($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"tab-pane js-course-tasks-pane active js-step2-view\">
    <form class=\"form-horizontal\" id=\"step2-form\">
      ";
        // line 8
        $context["course"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourse($this->getAttribute(($context["activity"] ?? null), "fromCourseId", array()));
        // line 9
        echo "      ";
        $context["testpapers"] = $this->env->getExtension('AppBundle\Twig\TestpaperExtension')->findTestpapersByCourseSetId($this->getAttribute(($context["course"] ?? null), "courseSetId", array()));
        // line 10
        echo "      ";
        $context["features"] = $this->env->getExtension('AppBundle\Twig\TestpaperExtension')->getFeatures();
        // line 11
        echo "      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\">
          <label for=\"title\" class=\"control-label-required\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.title_name"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\" >
        </div>
      </div>
      <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\">
              <label for=\"testpaper-media\" class=\"control-label-required\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-sm-10 controls\">
              <select id=\"testpaper-media\" class=\"form-control\" name=\"testpaperId\"  data-get-testpaper-items=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper_info", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
        echo "\">
                  <option value=\"\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.choose"), "html", null, true);
        echo "</option>
                  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testpapers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testpaper"]) {
            if ($context["testpaper"]) {
                // line 27
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testpaper"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["testpaper"], "id", array()) == (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaId", array()), "")) : ("")))) {
                    echo "selected";
                }
                echo " data-score=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testpaper"], "score", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testpaper"], "name", array()), "html", null, true);
                echo "</option>
                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testpaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "              </select>
              ";
        // line 30
        if (twig_test_empty(($context["testpapers"] ?? null))) {
            // line 31
            echo "                  <div class=\"help-block color-danger\">
                      ";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.create", array("%testpaperUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array())))));
            echo "
                  </div>
              ";
        } else {
            // line 35
            echo "                  <div class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.empty_tips"), "html", null, true);
            echo "</div>
              ";
        }
        // line 37
        echo "          </div>
      </div>

      <div class=\"form-group\" id=\"questionItemShowDiv\" style=\"display:none;\">
          <div class=\"col-sm-2 control-label\"></div>
          <div class=\"col-sm-10 controls\" id=\"questionItemShowTable\"></div>
      </div>

      <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\"><label for=\"length\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.time_limit"), "html", null, true);
        echo "</label></div>
          <div class=\"col-sm-10 controls radios\">
              <input id=\"length\" class=\"form-control inline-block width-150\" type=\"text\" name=\"length\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "length", array()), 0)) : (0)), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date.minute"), "html", null, true);
        echo "
              <div class=\"help-block\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.time_length_tips"), "html", null, true);
        echo "</div>
          </div>
      </div>

      <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\"><label>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.times"), "html", null, true);
        echo "</label></div>
          <div class=\"col-sm-10 controls radios\">
              ";
        // line 56
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("doTimes", array("0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.times.always"), "1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.times.once")), (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "doTimes", array()), "normal")) : ("normal")));
        echo "
          </div>
      </div>

      <div class=\"form-group\" ";
        // line 60
        if (((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "doTimes", array()), "0")) : ("0")) == 1)) {
            echo "style=\"display:none;\" ";
        }
        echo ">
          <div class=\"col-sm-2 control-label\"><label for=\"lesson-redo-interval-field\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.redo_interval"), "html", null, true);
        echo "</label></div>
          <div class=\"col-sm-10 controls\">
              <input id=\"lesson-redo-interval-field\" class=\"form-control inline-block width-150\" type=\"text\" name=\"redoInterval\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "redoInterval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "redoInterval", array()), "0")) : ("0")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date.hour"), "html", null, true);
        echo "
              <i class=\"es-icon es-icon-help color-gray\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.redo_interval_tips"), "html", null, true);
        echo "\"></i>
              <div class=\"help-block\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.time_limit_tips"), "html", null, true);
        echo "</div>
          </div>
      </div>

      <div class=\"form-group starttime-check-div\" ";
        // line 69
        if (((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "doTimes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "doTimes", array()), "0")) : ("0")) == 0)) {
            echo "style=\"display:none;\" ";
        }
        echo ">
          <div class=\"col-sm-2 control-label\">
              <label for=\"startTime\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.start_time"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-sm-10 controls radios\">
              ";
        // line 74
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("testMode", array("normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.mode.always"), "realTime" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.mode.realTime")), (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "testMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "testMode", array()), "normal")) : ("normal")));
        echo "
          </div>
          <div class=\"col-sm-10 mtm starttime-input pull-right ";
        // line 76
        if (((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "testMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "testMode", array()), "normal")) : ("normal")) == "normal")) {
            echo " hidden ";
        }
        echo "\">
              <input class=\"form-control width-input width-input-large mr0\" id=\"startTime\" type=\"text\" name=\"startTime\" autocomplete=\"off\" value=\"";
        // line 77
        if ((((array_key_exists("activity", $context)) ? (_twig_default_filter(($context["activity"] ?? null), null)) : (null)) && ((($this->getAttribute(($context["activity"] ?? null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "startTime", array()), 0)) : (0)) != 0))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "startTime", array()), "Y-m-d H:i"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\" >
          </div>
      </div>
    </form>
  </div>
  ";
        // line 82
        if (twig_in_filter("lesson_credit", ($context["features"] ?? null))) {
            // line 83
            echo "      <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\"><label for=\"lesson-title-field\">";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.mode.require_credit"), "html", null, true);
            echo "</label></div>
          <div class=\"col-sm-10 controls\">
              <input class=\"form-control widt-input width-150\" type=\"text\" name=\"requireCredit\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["lesson"] ?? null), "requireCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["lesson"] ?? null), "requireCredit", array()), 0)) : (0)), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.score"), "html", null, true);
            echo "
              <div class=\"help-block\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.testpaper.mode.require_credit_tips"), "html", null, true);
            echo "</div>
          </div>
      </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@activity\\testpaper\\resources\\views\\create_or_update_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 87,  237 => 86,  232 => 84,  229 => 83,  227 => 82,  215 => 77,  209 => 76,  204 => 74,  198 => 71,  191 => 69,  184 => 65,  180 => 64,  174 => 63,  169 => 61,  163 => 60,  156 => 56,  151 => 54,  143 => 49,  137 => 48,  132 => 46,  121 => 37,  115 => 35,  109 => 32,  106 => 31,  104 => 30,  101 => 29,  83 => 27,  78 => 26,  74 => 25,  70 => 24,  64 => 21,  56 => 16,  50 => 13,  46 => 11,  43 => 10,  40 => 9,  38 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity\\testpaper\\resources\\views\\create_or_update_content.html.twig", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\testpaper\\resources\\views\\create_or_update_content.html.twig");
    }
}
