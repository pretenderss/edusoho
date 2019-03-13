<?php

/* homework/manage/question-picker.html.twig */
class __TwigTemplate_1087793db18b56b391c3e0ce567d65d1306c1de6d20f08a76286089322d8acf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "homework/manage/question-picker.html.twig", 1);
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
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 5
        $context["replaceFor"] = ((array_key_exists("replaceFor", $context)) ? (_twig_default_filter(($context["replaceFor"] ?? null), null)) : (null));
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/activity-manage/homework/picker/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        if (($context["replaceFor"] ?? null)) {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.replace_modal.select"), "html", null, true);
            echo "
  ";
        } else {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.replace_modal.replace"), "html", null, true);
            echo "
  ";
        }
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<div id=\"question-picker-body\">

  ";
        // line 20
        $this->loadTemplate("homework/manage/picker-search-form.html.twig", "homework/manage/question-picker.html.twig", 20)->display(array_merge($context, array("targetType" => "homework")));
        // line 21
        echo "
  <table class=\"table table-condensed\" id=\"item-picker-table\">
    <thead>
    <tr>
      ";
        // line 25
        if ( !((array_key_exists("replace", $context)) ? (_twig_default_filter(($context["replace"] ?? null), null)) : (null))) {
            // line 26
            echo "        <th><input type=\"checkbox\" data-role=\"batch-select\"></th>
      ";
        }
        // line 28
        echo "      <th width=\"45%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.stem"), "html", null, true);
        echo "</th>
      <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.type"), "html", null, true);
        echo "</th>
      <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.operation"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            if ((($this->getAttribute($context["question"], "type", array()) != "material") || ($this->getAttribute($context["question"], "subCount", array()) > 0))) {
                // line 35
                echo "        ";
                $this->loadTemplate("homework/manage/question-picker-tr.html.twig", "homework/manage/question-picker.html.twig", 35)->display($context);
                // line 36
                echo "      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 37
            echo "        <tr>
          <td colspan=\"20\"><div class=\"empty\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.replace_modal.empty"), "html", null, true);
            echo "<a class=\"link-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.replace_modal.create_btn"), "html", null, true);
            echo "</a></div>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </tbody>
  </table>
  ";
        // line 44
        if ( !($context["replace"] ?? null)) {
            // line 45
            echo "    <div id=\"item-operate\">
      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" data-role=\"batch-select\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.select_all"), "html", null, true);
            echo "
      </label>
    </div>
  ";
        }
        // line 51
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
</div>

";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "    <span class=\"color-danger pull-left js-choice-notice\" style=\"display:none;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.question.replace_modal.select_btn"), "html", null, true);
        echo "</span>
    <button type=\"button\" class=\"btn btn-primary\" type=\"button\" class=\"btn btn-primary pull-right\" data-role=\"batch-select-save\" data-toggle=\"form-submit\" data-target=\"#block-form\" data-url=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_homework_question_picked", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.confirm"), "html", null, true);
        echo "
    </button>

    <button type=\"button\" class=\"btn btn-link pull-right js-close-modal\" data-dismiss=\"modal\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.close"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "homework/manage/question-picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 61,  169 => 58,  164 => 57,  161 => 56,  152 => 51,  145 => 47,  141 => 45,  139 => 44,  135 => 42,  121 => 38,  118 => 37,  109 => 36,  106 => 35,  94 => 34,  87 => 30,  83 => 29,  78 => 28,  74 => 26,  72 => 25,  66 => 21,  64 => 20,  60 => 18,  57 => 17,  49 => 13,  43 => 11,  40 => 10,  37 => 9,  33 => 1,  31 => 7,  29 => 5,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homework/manage/question-picker.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\homework\\manage\\question-picker.html.twig");
    }
}
