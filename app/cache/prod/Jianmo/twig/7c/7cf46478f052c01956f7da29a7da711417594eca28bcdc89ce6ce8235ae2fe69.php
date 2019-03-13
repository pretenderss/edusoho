<?php

/* course-manage/marketing/set-preview.html.twig */
class __TwigTemplate_275a0658d9e9fd137e5bd2ad328da61f292c937a29d81bf7f8aa81384f3aab85 extends Twig_Template
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
  <label class=\"col-sm-2 control-label mbs\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.set_task", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "</label>
  <div class=\"col-sm-8\">
    <ul class=\"list-group mb0 pb0 ";
        // line 4
        if ((twig_length_filter($this->env, ($context["canFreeTasks"] ?? null)) > 0)) {
            echo "task-price-setting-group";
        }
        echo " js-task-price-setting\">

      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["canFreeTasks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 7
            echo "        <li class=\"task-price-setting-group__item ";
            if ((($this->getAttribute(($context["freeTasks"] ?? null), $this->getAttribute($context["task"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["freeTasks"] ?? null), $this->getAttribute($context["task"], "id", array()), array(), "array"), null)) : (null))) {
                echo " open ";
            }
            echo " ";
            if (($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, ($context["canFreeTasks"] ?? null)))) {
                echo " mb5 ";
            }
            echo "\">
          <input type=\"checkbox\" class=\"mr10\" name=\"freeTaskIds[]\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "\" ";
            if ((($this->getAttribute(($context["freeTasks"] ?? null), $this->getAttribute($context["task"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["freeTasks"] ?? null), $this->getAttribute($context["task"], "id", array()), array(), "array"), null)) : (null))) {
                echo " checked ";
            }
            echo ">
          
          ";
            // line 10
            $context["meta"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta($this->getAttribute($context["task"], "type", array()));
            // line 11
            echo "          <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["meta"] ?? null), "icon", array()), "html", null, true);
            echo " color-gray\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-container=\"body\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.set_task.task_name", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "%name%" => $this->getAttribute(($context["meta"] ?? null), "name", array()))), "html", null, true);
            echo "\"></i>
          <span class=\"inline-block vertical-middle text-overflow title\">
            ";
            // line 13
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "
          </span>
          <span class=\"cd-tag cd-tag-orange pull-right price\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.set_task.free"), "html", null, true);
            echo "</span>
        </li>
      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
    ";
        // line 19
        $context["can_free_activity_types"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->getCanFreeActivityTypes();
        // line 20
        echo "    <div class=\"help-block course-mange-space\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.set_task.free_tips", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo twig_escape_filter($this->env, twig_join_filter(($context["can_free_activity_types"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("word.seperator")), "html", null, true);
        echo "
    </div>
  </div>
</div>
";
        // line 24
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local")) {
            // line 25
            echo "  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">
      ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.try_watch"), "html", null, true);
            echo "
      <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\" data-container=\"body\"
          data-toggle=\"popover\"
          data-trigger=\"hover\"
          data-placement=\"top\"
          data-content=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.try_watch_tips"), "html", null, true);
            echo "\">
      </a>
    </label>
    <div class=\"col-sm-8\">
      <select class=\"form-control course-mange-info__select mh5\" id=\"tryLookLength\" name=\"tryLookLength\">
        <option value=\"0\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.not.support.try_watch"), "html", null, true);
            echo "</option>
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 39
                echo "          ";
                if (((($this->getAttribute(($context["course"] ?? null), "tryLookLength", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "tryLookLength", array()), 1)) : (1)) == $context["i"])) {
                    // line 40
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, ($context["i"] . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.minutes.try_watch")), "html", null, true);
                    echo "</option>
          ";
                } else {
                    // line 42
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($context["i"] . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.preview.minutes.try_watch")), "html", null, true);
                    echo "</option>
          ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </select>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course-manage/marketing/set-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 45,  170 => 44,  162 => 42,  154 => 40,  151 => 39,  147 => 38,  143 => 37,  135 => 32,  127 => 27,  123 => 25,  121 => 24,  112 => 20,  110 => 19,  107 => 18,  90 => 15,  81 => 13,  73 => 11,  71 => 10,  62 => 8,  51 => 7,  34 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/marketing/set-preview.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\marketing\\set-preview.html.twig");
    }
}
