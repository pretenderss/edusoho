<?php

/* question-manage/index.html.twig */
class __TwigTemplate_f94c242607e076d90f1fd7293d49d468b78dab526a4c0884853015e907e812a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/courseset-layout.html.twig", "question-manage/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/courseset-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macro"] = $this->loadTemplate("macro.html.twig", "question-manage/index.html.twig", 2);
        // line 6
        $context["parentId"] = (($this->getAttribute(($context["parentQuestion"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parentQuestion"] ?? null), "id", array()), 0)) : (0));
        // line 8
        $context["side_nav"] = "question";
        // line 9
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/question-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
 ";
        // line 13
        $context["questionTypes"] = $this->env->getExtension('AppBundle\Twig\QuestionTypeExtension')->getQuestionTypes();
        // line 14
        echo "
  <div role=\"courseset-manage-question\">
    <div class=\"courseset-manage-body__title\">
      <div class=\"courseset-manage-body__btn\">
        ";
        // line 18
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course_set.questions_import_btn.extension", array("courseSet" => ($context["courseSet"] ?? null)));
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questionTypes"] ?? null));
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
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 20
            echo "          ";
            if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                // line 21
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_create", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "type" => $context["type"], "parentId" => ($context["parentId"] ?? null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
                echo "\" class=\"cd-btn cd-btn-info cd-btn-sm\"><i class=\"cd-icon cd-icon-add cd-text-sm\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"]), "html", null, true);
                echo "</a>
          ";
            }
            // line 23
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <div class=\"btn-group\">
        <a href=\"#\" type=\"button\" class=\"cd-btn cd-btn-default cd-btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu pull-right\">
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questionTypes"] ?? null));
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
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 28
            echo "            ";
            if ((($this->getAttribute($context["loop"], "index", array()) > 3) && ((($context["type"] == "material") &&  !($context["parentQuestion"] ?? null)) || ($context["type"] != "material")))) {
                // line 29
                echo "              <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_create", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "type" => $context["type"], "parentId" => ($context["parentId"] ?? null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
                echo "\"><span class=\"es-icon es-icon-anonymous-iconfont\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"]), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 31
            echo "          ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </ul>
      </div>

      </div>
      ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.content_title"), "html", null, true);
        echo "
    </div>

    <div id=\"quiz-table-container\">

      ";
        // line 41
        if (($context["parentQuestion"] ?? null)) {
            // line 42
            echo "        <ol class=\"breadcrumb\">
          <li><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.content_title"), "html", null, true);
            echo "</a></li>
          <li class=\"active\">";
            // line 44
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("questionType", "material");
            echo "</li>
        </ol>
      ";
        }
        // line 47
        echo "
      ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      ";
        // line 50
        if (($context["parentQuestion"] ?? null)) {
            // line 51
            echo "        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"well well-sm short-long-text\">
              <div class=\"short-text\">";
            // line 54
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["parentQuestion"] ?? null), "stem", array()), 100);
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.btn.expand"), "html", null, true);
            echo ")</span></div>
              <div class=\"long-text\">";
            // line 55
            echo $this->getAttribute(($context["parentQuestion"] ?? null), "stem", array());
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.btn.collapse"), "html", null, true);
            echo ")</span></div>
            </div>
          </div>
        </div>
      ";
        }
        // line 60
        echo "
      ";
        // line 61
        if ( !($context["parentQuestion"] ?? null)) {
            // line 62
            echo "        ";
            $this->loadTemplate("question-manage/search-form.html.twig", "question-manage/index.html.twig", 62)->display($context);
            // line 63
            echo "      ";
        }
        // line 64
        echo "
      <table class=\"table table-striped table-hover\" id=\"quiz-table\">
        <thead>
        <tr>
          <th><input type=\"checkbox\"  autocomplete=\"off\"  data-role=\"batch-select\"></th>
          <th width=\"45%\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.stem"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.type"), "html", null, true);
        echo "</th>
          <th>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.update"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.operation"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
          ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 77
            echo "            ";
            $this->loadTemplate("question-manage/question-tr.html.twig", "question-manage/index.html.twig", 77)->display($context);
            // line 78
            echo "          ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 79
            echo "            <tr>
              <td colspan=\"20\"><div class=\"empty\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.empty"), "html", null, true);
            echo "</div></td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
      </table>
      <div>
        <label class=\"checkbox-inline\"><input type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-select\"> ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.select_all"), "html", null, true);
        echo "</label>
        <button class=\"cd-btn cd-btn-default cd-btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.question"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question_deletes", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
        echo "</button>
        <span class=\"pull-right color-gray\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage.count", array("%getItemCount()%" => $this->getAttribute(($context["paginator"] ?? null), "getItemCount", array(), "method"))), "html", null, true);
        echo "</span>
      </div>
      <nav class=\"text-center\">
        ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
      </nav>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "question-manage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 91,  317 => 88,  307 => 87,  303 => 86,  298 => 83,  289 => 80,  286 => 79,  273 => 78,  270 => 77,  252 => 76,  245 => 72,  241 => 71,  237 => 70,  233 => 69,  226 => 64,  223 => 63,  220 => 62,  218 => 61,  215 => 60,  205 => 55,  199 => 54,  194 => 51,  192 => 50,  187 => 48,  184 => 47,  178 => 44,  172 => 43,  169 => 42,  167 => 41,  159 => 36,  153 => 32,  139 => 31,  131 => 29,  128 => 28,  111 => 27,  106 => 24,  92 => 23,  84 => 21,  81 => 20,  64 => 19,  60 => 18,  54 => 14,  52 => 13,  49 => 12,  46 => 11,  38 => 4,  34 => 1,  32 => 9,  30 => 8,  28 => 6,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question-manage/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\question-manage\\index.html.twig");
    }
}
