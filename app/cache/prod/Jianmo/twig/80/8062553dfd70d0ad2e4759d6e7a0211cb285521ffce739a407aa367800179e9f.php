<?php

/* task-manage/create-or-update-finish.html.twig */
class __TwigTemplate_9351a162097e68a28fae50c6684417d35f3e6e8ca56dc97bc20c99e019973739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "task-manage/create-or-update-finish.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/ltc-sdk-client.js", 2 => "app/js/task-manage/finish/index.js"), 500);
        // line 3
        $context["bodyClass"] = "task-iframe-body";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"tab-content\" id=\"iframe-content\">
  ";
        // line 6
        $context["selectTips"] = array("time" => "activity_manage.finish_select_tips_time", "end" => "activity_manage.finish_select_tips_end");
        // line 7
        echo "  ";
        $context["defaultCondition"] = $this->getAttribute(($context["conditions"] ?? null), 0, array(), "array");
        // line 8
        echo "
    <div class=\"tab-pane js-course-tasks-pane active\">
        <form class=\"form-horizontal\" id=\"step3-form\" >
          <div class=\"form-group\">
            <div class=\"col-sm-2 control-label\">
              <label for=\"condition-select\">
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.finished_condition"), "html", null, true);
        echo "
              </label>
            </div>
            <div class=\"col-sm-4 ";
        // line 17
        if ((twig_length_filter($this->env, ($context["conditions"] ?? null)) == 1)) {
            echo "form-control-static";
        }
        echo "\">
            ";
        // line 18
        if ((twig_length_filter($this->env, ($context["conditions"] ?? null)) == 1)) {
            // line 19
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["defaultCondition"] ?? null), "describe", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultCondition"] ?? null), "describe", array(), "array"), (($this->getAttribute(($context["selectTips"] ?? null), $this->getAttribute(($context["defaultCondition"] ?? null), "type", array(), "array"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["selectTips"] ?? null), $this->getAttribute(($context["defaultCondition"] ?? null), "type", array(), "array"), array(), "array"), "")) : ("")))) : ((($this->getAttribute(($context["selectTips"] ?? null), $this->getAttribute(($context["defaultCondition"] ?? null), "type", array(), "array"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["selectTips"] ?? null), $this->getAttribute(($context["defaultCondition"] ?? null), "type", array(), "array"), array(), "array"), "")) : (""))))), "html", null, true);
            echo "
              <input type=\"hidden\" id=\"finish-type\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultCondition"] ?? null), "type", array(), "array"), "html", null, true);
            echo "\" name=\"finishType\">
            ";
        } else {
            // line 22
            echo "              <select id=\"finish-type\" name=\"finishType\" class=\"form-control\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["conditions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
                // line 24
                echo "                  <option data-value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["condition"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["condition"], "value", array()), "")) : ("")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["condition"], "type", array()), "html", null, true);
                echo "\" ";
                if (((($this->getAttribute(($context["activity"] ?? null), "finishType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "finishType", array()), $this->getAttribute(($context["defaultCondition"] ?? null), "type", array()))) : ($this->getAttribute(($context["defaultCondition"] ?? null), "type", array()))) == (($this->getAttribute($context["condition"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["condition"], "type", array()))) : ("")))) {
                    echo " selected ";
                }
                echo ">
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["condition"], "describe", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["condition"], "describe", array(), "array"), (($this->getAttribute(($context["selectTips"] ?? null), $this->getAttribute($context["condition"], "type", array(), "array"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["selectTips"] ?? null), $this->getAttribute($context["condition"], "type", array(), "array"), array(), "array"), "")) : ("")))) : ((($this->getAttribute(($context["selectTips"] ?? null), $this->getAttribute($context["condition"], "type", array(), "array"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["selectTips"] ?? null), $this->getAttribute($context["condition"], "type", array(), "array"), array(), "array"), "")) : (""))))), "html", null, true);
                echo "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "              </select>
            ";
        }
        // line 30
        echo "            </div>
          </div>
          <div class=\"\" id=\"conditions\" >
            <div id=\"conditions-time\" class=\"form-group\" ";
        // line 33
        if (((($this->getAttribute(($context["activity"] ?? null), "finishType", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "finishType", array(), "array"), $this->getAttribute(($context["defaultCondition"] ?? null), "type", array(), "array"))) : ($this->getAttribute(($context["defaultCondition"] ?? null), "type", array(), "array"))) != "time")) {
            echo " style=\"display: none;\"";
        }
        echo ">
              <div class=\"col-sm-2 control-label\">
                <label for=\"watchTime\">
                  至少观看
                </label>
              </div>
              <div class=\"col-sm-4\">
                <input class=\"form-control\" id=\"watchTime\" type=\"text\"  name=\"watchTime\" value=\"";
        // line 40
        if (((($this->getAttribute(($context["activity"] ?? null), "finishType", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "finishType", array(), "array"))) : ("")) == "time")) {
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "finishData", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "finishData", array(), "array"))) : ("")), "html", null, true);
        } elseif (($this->getAttribute(($context["defaultCondition"] ?? null), "type", array(), "array") == "time")) {
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["defaultCondition"] ?? null), "value", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultCondition"] ?? null), "value", array(), "array"), "1")) : ("1")), "html", null, true);
        }
        echo "\">
              </div>
              <div class=\"col-sm-4\">
                <p class=\"form-control-static\">
                  分
                </p>
              </div>
            </div>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conditions"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 49
            echo "              ";
            if ((($this->getAttribute($context["condition"], "html", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["condition"], "html", array(), "array"))) : (""))) {
                // line 50
                echo "                ";
                $this->loadTemplate(((("@activity/" . $this->getAttribute(($context["activity"] ?? null), "mediaType", array())) . "/resources/views/") . $this->getAttribute($context["condition"], "html", array(), "array")), "task-manage/create-or-update-finish.html.twig", 50)->display(array_merge($context, array("condition" => $context["condition"])));
                // line 51
                echo "              ";
            }
            // line 52
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          </div>
          <input type=\"hidden\" id=\"finish-data\" name=\"finishData\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "finishData", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "finishData", array(), "array"), (($this->getAttribute(($context["defaultCondition"] ?? null), "value", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultCondition"] ?? null), "value", array(), "array"))) : ("")))) : ((($this->getAttribute(($context["defaultCondition"] ?? null), "value", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["defaultCondition"] ?? null), "value", array(), "array"))) : ("")))), "html", null, true);
        echo "\">
        </form>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "task-manage/create-or-update-finish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 54,  179 => 53,  165 => 52,  162 => 51,  159 => 50,  156 => 49,  139 => 48,  124 => 40,  112 => 33,  107 => 30,  103 => 28,  94 => 25,  83 => 24,  79 => 23,  76 => 22,  71 => 20,  66 => 19,  64 => 18,  58 => 17,  52 => 14,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task-manage/create-or-update-finish.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\task-manage\\create-or-update-finish.html.twig");
    }
}
