<?php

/* @activity\homework\resources\views\create_or_update_body.html.twig */
class __TwigTemplate_2a796b5dca3653095be31f892f67b29952a99535c88b526018bf7ce38631696e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-layout.html.twig", "@activity\\homework\\resources\\views\\create_or_update_body.html.twig", 1);
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
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-client.js", 1 => "libs/es-ckeditor/ckeditor.js", 2 => "libs/jquery-sortable.js", 3 => "homeworkactivity/js/create/index.js"), 300);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_activity_step($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"tab-pane js-course-tasks-pane active js-step2-view\">
    <form class=\"form-horizontal\" id=\"step2-form\" >
      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\">
          <label for=\"title\" class=\"control-label-required\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.title_name"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\" >
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\"><label for=\"homework-about-field\" class=\"control-label-required\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.homework.info"), "html", null, true);
        echo "</label></div>
        <div class=\"col-sm-10 controls\">
          <textarea name=\"description\" rows=\"10\" id=\"homework-about-field\" class=\"form-control\" data-image-upload-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "description", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
        </div>
      </div>

      ";
        // line 21
        if ( !(($this->getAttribute(($context["activity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "id", array()), null)) : (null))) {
            // line 22
            echo "        <div class=\"form-group\">
          <div class=\"col-sm-2 control-label\"><label for=\"homework-about-field\" class=\"control-label-required\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.homework.choose_question"), "html", null, true);
            echo "</label></div>
          <div class=\"col-sm-8\">
            <a id=\"picker_homework_items\" data-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_homework_question_picker", array("id" => $this->getAttribute(($context["activity"] ?? null), "fromCourseSetId", array()), "targetType" => "homework")), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\" data-role=\"pick-item\"　><i class=\"es-icon es-icon-anonymous-iconfont\"></i>
              ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.homework.choose_question"), "html", null, true);
            echo "
            </a>
            <input type=\"hidden\" name=\"questionLength\" value=\"";
            // line 28
            if (((array_key_exists("questions", $context)) ? (_twig_default_filter(($context["questions"] ?? null), null)) : (null))) {
                echo " questionItems.lenght ";
            }
            echo "\">
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"col-sm-10 col-sm-offset-2\">
            <table class=\"table\" id=\"question-table\">
              <thead>
              <tr>
                <th></th>
                <th><input type=\"checkbox\" data-role=\"batch-select\"></th>
                <th width=\"10%\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.seq"), "html", null, true);
            echo "</th>
                <th width=\"25%\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.stem"), "html", null, true);
            echo "</th>
                <th width=\"15%\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.type"), "html", null, true);
            echo "</th>
                <th width=\"10%\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.difficulty"), "html", null, true);
            echo "</th>
                <th width=\"25%\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.operation"), "html", null, true);
            echo "</th>
              </tr>
              </thead>
              <tbody class=\"js-homework-table\" id=\"question-table-tbody\">
              ";
            // line 46
            if (((array_key_exists("questions", $context)) ? (_twig_default_filter(($context["questions"] ?? null), null)) : (null))) {
                // line 47
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["questionItems"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["questionItem"]) {
                    // line 48
                    echo "                  ";
                    $context["questionId"] = $this->getAttribute($context["questionItem"], "questionId", array());
                    // line 49
                    echo "                  ";
                    $context["question"] = $this->getAttribute(($context["questions"] ?? null), ($context["questionId"] ?? null), array(), "array");
                    // line 50
                    echo "                  ";
                    // line 51
                    echo "                  ";
                    $this->loadTemplate("question-manage/question-tr.html.twig", "@activity\\homework\\resources\\views\\create_or_update_body.html.twig", 51)->display($context);
                    // line 52
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['questionItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "              ";
            }
            // line 54
            echo "              </tbody>
            </table>
            <div class=\"mbl\">
              <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.select_all"), "html", null, true);
            echo "</label>
              <button type=\"button\" class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete-btn\"  data-name=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.content"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.operation.delete_btn"), "html", null, true);
            echo "</button>
            </div>
            <span class=\"color-danger js-help-redmine\"></span>
            <p class=\"js-subjective-remask\" data-type=\"homework\">
            </p>
            <p class=\"help-block color-warning\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.homework.save_tips"), "html", null, true);
            echo "</p>
          </div>
        </div>
      ";
        }
        // line 67
        echo "    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@activity\\homework\\resources\\views\\create_or_update_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 67,  193 => 63,  183 => 58,  179 => 57,  174 => 54,  171 => 53,  157 => 52,  154 => 51,  152 => 50,  149 => 49,  146 => 48,  128 => 47,  126 => 46,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  88 => 28,  83 => 26,  79 => 25,  74 => 23,  71 => 22,  69 => 21,  58 => 17,  53 => 15,  46 => 11,  40 => 8,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity\\homework\\resources\\views\\create_or_update_body.html.twig", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\homework\\resources\\views\\create_or_update_body.html.twig");
    }
}
