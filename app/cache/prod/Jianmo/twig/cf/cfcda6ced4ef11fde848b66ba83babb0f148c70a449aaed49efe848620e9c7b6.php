<?php

/* testpaper/manage/create-build-info.html.twig */
class __TwigTemplate_8479aaa98c67c2e6c361b216d204193a035bacec729bf99f7a396f1692b4f775 extends Twig_Template
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
  <div class=\"col-md-2 control-label\">
    <label for=\"testpaper-percentage-field\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.build_mode"), "html", null, true);
        echo "</label>
  </div>
  <div class=\"col-md-8 controls radios\">
    ";
        // line 6
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("mode", array("rand" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.build_mode.rand"), "difficulty" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.build_mode.difficulty")), "rand");
        echo "
  </div>
</div>

<div class=\"form-group hidden\" id=\"difficulty-form-group\">
  <div class=\"col-md-2 control-label\">
    <label for=\"testpaper-percentage-field\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.difficulty"), "html", null, true);
        echo "</label>
  </div>
  <div class=\"col-md-8 controls mtm\">
    <div class=\"mbm\" id=\"difficulty-percentage-slider\"></div>
    <p class=\"help-block mbm\">
      <span class=\"js-simple-percentage-text\"></span>
      <span class=\"js-normal-percentage-text\"></span>
      <span class=\"js-difficulty-percentage-text\"></span>
    </p>
    <span class=\"color-warning\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.difficulty.tips"), "html", null, true);
        echo "</span>
  </div>
</div>

<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-range-field\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.range"), "html", null, true);
        echo "</label></div>
  <div class=\"col-md-8 controls\">
    ";
        // line 44
        echo "    <select class=\"form-control width-150\" name=\"ranges[courseId]\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_show_tasks", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\" data-check-num-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_check_num", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\">
      <option value=\"0\" ";
        // line 45
        if ( !(($this->getAttribute(($context["range"] ?? null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["range"] ?? null), "courseId", array()), 0)) : (0))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.range.course"), "html", null, true);
        echo "</option>
      ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($context["course"]) {
                // line 47
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" ";
                if (((($this->getAttribute(($context["range"] ?? null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["range"] ?? null), "courseId", array()), 0)) : (0)) == $this->getAttribute($context["course"], "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseTitle($context["course"]), "html", null, true);
                echo "</option>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </select>
    <select class=\"form-control width-150\" ";
        // line 50
        if ( !((array_key_exists("showTasks", $context)) ? (_twig_default_filter(($context["showTasks"] ?? null), null)) : (null))) {
            echo "style=\"display:none;\"";
        }
        echo " name=\"ranges[lessonId]\" data-check-num-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_check_num", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\">
      <option value=\"0\" ";
        // line 51
        if ( !(($this->getAttribute(($context["range"] ?? null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["range"] ?? null), "lessonId", array()), 0)) : (0))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.range.choose"), "html", null, true);
        echo "</option>
      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("showTasks", $context)) ? (_twig_default_filter(($context["showTasks"] ?? null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            if ($context["task"]) {
                // line 53
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\" ";
                if (((($this->getAttribute(($context["range"] ?? null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["range"] ?? null), "lessonId", array()), 0)) : (0)) == $this->getAttribute($context["task"], "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                echo "</option>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </select>
  </div>
</div>

<div class=\"form-group\">
  <style>.testpaper-question-option-item{margin-left:-12px;margin-bottom:5px;list-style: none;}</style>
  <div class=\"col-md-2 control-label\"><label class=\"control-label-required\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.questions_setup"), "html", null, true);
        echo "</label></div>
  <ul class=\"col-md-10 controls\" id=\"testpaper-question-options\">
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["config"]) {
            // line 64
            echo "      <li class=\"testpaper-question-option-item\">
        <button type=\"button\" class=\"btn btn-link question-type-sort-handler\"><span class=\"glyphicon glyphicon-move\"></span></button>
        <span style=\"min-width:85px;display:inline-block;_display:inline;\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["config"], "name", array())), "html", null, true);
            echo "</span>
        <span class=\"mlm\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.questions_setup.number"), "html", null, true);
            echo ":</span>
        <input type=\"text\" class=\"form-control width-input width-input-mini item-number\" name=\"counts[";
            // line 68
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "]\" data-role=\"count\"  value=\"0\" ";
            if (((($this->getAttribute($this->getAttribute(($context["questionNums"] ?? null), $context["type"], array(), "array", false, true), "questionNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["questionNums"] ?? null), $context["type"], array(), "array", false, true), "questionNum", array()), 0)) : (0)) == 0)) {
                echo " disabled ";
            }
            echo " />/
        <span class=\"text-info question-num\" role=\"questionNum\" type=\"";
            // line 69
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" style=\"display:inline-block;min-width: 45px;\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["questionNums"] ?? null), $context["type"], array(), "array", false, true), "questionNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["questionNums"] ?? null), $context["type"], array(), "array", false, true), "questionNum", array()), 0)) : (0)), "html", null, true);
            echo "</span>

        <span class=\"mlm\">";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.questions_setup.score"), "html", null, true);
            echo ":</span>
        <input type=\"text\" class=\"form-control width-input width-input-mini item-score\" name=\"scores[";
            // line 72
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "]\"  value=\"2\" data-role=\"score\" />

        ";
            // line 74
            if ((($this->getAttribute($context["config"], "hasMissScore", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "hasMissScore", array()), null)) : (null))) {
                // line 75
                echo "          <span class=\"mlm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.create.questions_setup.missing_score"), "html", null, true);
                echo ":</span>
          <input type=\"text\" class=\"form-control width-input width-input-mini item-miss-score\" name=\"missScores[";
                // line 76
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "]\"  value=\"0\" data-role=\"missScore\" />
        ";
            }
            // line 78
            echo "      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    <input type=\"hidden\" name=\"questioncount\">
    <span class=\"help-block color-danger js-build-check\"></span>
  </ul>

</div>

<input type=\"hidden\" name=\"percentages[simple]\">
<input type=\"hidden\" name=\"percentages[normal]\">
<input type=\"hidden\" name=\"percentages[difficulty]\">
";
    }

    public function getTemplateName()
    {
        return "testpaper/manage/create-build-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 80,  204 => 78,  199 => 76,  194 => 75,  192 => 74,  187 => 72,  183 => 71,  176 => 69,  168 => 68,  164 => 67,  160 => 66,  156 => 64,  152 => 63,  147 => 61,  139 => 55,  123 => 53,  118 => 52,  110 => 51,  102 => 50,  99 => 49,  83 => 47,  78 => 46,  70 => 45,  63 => 44,  58 => 26,  50 => 21,  38 => 12,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testpaper/manage/create-build-info.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\testpaper\\manage\\create-build-info.html.twig");
    }
}
