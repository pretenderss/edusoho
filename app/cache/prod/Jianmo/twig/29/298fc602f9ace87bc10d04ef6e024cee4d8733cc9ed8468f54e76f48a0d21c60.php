<?php

/* course-manage/create-modal.html.twig */
class __TwigTemplate_04b0166f32b56530199a9cdb761356d0f88bd777167e28bf709f79ec6f15e604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "course-manage/create-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["modal_class"] = "modal-lg cd-modal-dialog";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/bootstrap-datetimepicker.js", 2 => "app/js/course-manage/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        if (((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), false)) : (false))) {
            // line 8
            echo "    ";
            if (twig_test_empty($this->getAttribute(($context["course"] ?? null), "title", array()))) {
                // line 9
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.edit.copy", array("%title%" => (("\"" . $this->getAttribute(($context["courseSet"] ?? null), "title", array())) . "\""))), "html", null, true);
                echo "
    ";
            } else {
                // line 11
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.edit.copy", array("%title%" => (("\"" . $this->getAttribute(($context["course"] ?? null), "title", array())) . "\""))), "html", null, true);
                echo "
    ";
            }
            // line 13
            echo "  ";
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.create"), "html", null, true);
            echo "
  ";
        }
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "  <div class=\"course-create-editor\" id=\"course-create-editor\">
      <form class=\"form-horizontal\" id=\"course-create-form\"
      ";
        // line 21
        if (((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), false)) : (false))) {
            // line 22
            echo "        action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_copy", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } else {
            // line 24
            echo "        action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_create", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 26
        echo "        method=\"post\">
        <div class=\"form-group mbl\">
          <div class=\"col-sm-2 control-label\">
            <label for=\"title\" class=\"control-label-required\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.create.new_plan_name"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"col-sm-8\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"courseSetId\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"serializeMode\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"copyCourseId\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"courseType\" value=\"normal\">
            <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder=\"\">
          </div>
        </div>
        <div class=\"form-group cd-mb8\">
          <label for=\"learnMode\" class=\"col-sm-2 control-label\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.create.mode"), "html", null, true);
        echo "
            <a class=\"es-icon es-icon-help ml5 cd-link-assist cd-text-sm text-normal\" data-trigger=\"hover\"
              data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\"
              data-content=\"<ul class='pl10 list-unstyled'>
              ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.create.mode.free");
        echo "
              ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.create.mode.limit");
        echo "</ul>\">
            </a>
          </label>
          <div class=\"col-sm-8 cd-radio-group mb0\">
            ";
        // line 51
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("learnMode", array("freeMode" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.free"), "lockMode" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.locked")), (($this->getAttribute(($context["course"] ?? null), "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "learnMode", array()), "freeMode")) : ("freeMode")));
        echo "
            <div class=\"cd-text-sm course-mangae-info__tip\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.create.create_tips"), "html", null, true);
        echo "</div>
          </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">
              ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date"), "html", null, true);
        echo "
              <a class=\"es-icon es-icon-help ml5 cd-link-assist cd-text-sm text-normal\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\"
                data-content=\"<ul class='pl10 list-unstyled'>
                  <li class='mb10'>";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.anytime");
        echo "</li>
                  <li class='mb10'>";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.real_time");
        echo "</li>
                  <li>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.overdue_tips"), "html", null, true);
        echo "</li>
                </ul>\">
              </a>
            </label>
            <div class=\"col-sm-8 cd-radio-group\">
                ";
        // line 68
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("expiryMode", array("days" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.anywhere_mode"), "date" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.date_mode"), "forever" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.forever_mode")), "forever");
        // line 74
        echo "
                ";
        // line 76
        echo "                <div class=\"course-manage-expiry hidden\" id=\"expiry-days\">
                  <span class=\"caret\"></span>
                  ";
        // line 78
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("deadlineType", array("end_date" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.end_date_mode"), "days" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.days_mode")), (($this->getAttribute(        // line 81
($context["course"] ?? null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "deadlineType", array()), "days")) : ("days")));
        // line 83
        echo "
                  <div class=\"cd-mt16 hidden\" id=\"deadlineType-date\">
                    ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.deadline_learn_tips");
        echo "
                  </div>
                  <div class=\"cd-mt16\" id=\"deadlineType-days\">
                    ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.expiry_days_learn_tips");
        echo "
                  </div>
                </div>
                ";
        // line 92
        echo "                <div class=\"course-manage-expiry hidden\" id=\"expiry-date\">
                  <span class=\"caret\"></span>
                  <div class=\"course-manage-expiry__circle\">
                    ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.start_time"), "html", null, true);
        echo "
                    <input class=\"form-control mh10 width-150 js-expiry-input\" id=\"expiryStartDate\" type=\"text\" name=\"expiryStartDate\" value=\"\">
                    ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.end_time"), "html", null, true);
        echo "
                    <input class=\"form-control ml5 width-150 js-expiry-input\" type=\"text\" id=\"expiryEndDate\" name=\"expiryEndDate\"
                    value=\"\">
                  </div>
                </div>
                <div class=\"cd-text-sm course-mangae-info__tip js-expiry-tip ml0\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.not_change_tips"), "html", null, true);
        echo "</div>
            </div>
          </div>
      </form>
    </div>
";
    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        // line 110
        echo "  <button id=\"course-cancel\" type=\"button\" class=\"cd-btn cd-btn-link-default\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
  <button id=\"course-submit\" type=\"button\" class=\"cd-btn cd-btn-primary\" data-loading-text=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "course-manage/create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 111,  233 => 110,  230 => 109,  220 => 102,  212 => 97,  207 => 95,  202 => 92,  196 => 88,  190 => 85,  186 => 83,  184 => 81,  183 => 78,  179 => 76,  176 => 74,  174 => 68,  166 => 63,  162 => 62,  158 => 61,  152 => 58,  143 => 52,  139 => 51,  132 => 47,  128 => 46,  121 => 42,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  93 => 29,  88 => 26,  82 => 24,  76 => 22,  74 => 21,  70 => 19,  67 => 18,  59 => 14,  56 => 13,  50 => 11,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/create-modal.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\create-modal.html.twig");
    }
}
