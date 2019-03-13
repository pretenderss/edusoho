<?php

/* task-manage/modal.html.twig */
class __TwigTemplate_68d55786829777f5647170a25614d15e656af6ed626528b8f5d1efce82e5dd70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("task-manage/modal-layout.html.twig", "task-manage/modal.html.twig", 1);
        $this->blocks = array(
            'task_create_type' => array($this, 'block_task_create_type'),
            'task_create_content' => array($this, 'block_task_create_content'),
            'task_create_finish' => array($this, 'block_task_create_finish'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "task-manage/modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-server.js", 1 => "libs/jquery-validation.js", 2 => "libs/iframe-resizer.js", 3 => "app/js/task-manage/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_task_create_type($context, array $blocks = array())
    {
        // line 6
        echo "  <div id=\"task-create-type\" class=\"hidden\" data-editor-mode=\"";
        echo twig_escape_filter($this->env, ($context["mode"] ?? null), "html", null, true);
        echo "\" data-course-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "type", array()), "html", null, true);
        echo "\"
    ";
        // line 7
        if ((($context["mode"] ?? null) == "edit")) {
            // line 8
            echo "      data-editor-type=\"";
            echo twig_escape_filter($this->env, ($context["currentType"] ?? null), "html", null, true);
            echo "\"
      data-editor-step2-url=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_fields", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "mode" => "edit", "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
            echo "\"
      data-content-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_activity_content_modal", array("activityId" => $this->getAttribute(($context["task"] ?? null), "activityId", array()), "type" => $this->getAttribute(($context["task"] ?? null), "type", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\"
      data-finish-url=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_activity_finish_modal", array("activityId" => $this->getAttribute(($context["task"] ?? null), "activityId", array()), "type" => $this->getAttribute(($context["task"] ?? null), "type", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\"
      data-save-url=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_update", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
            echo "\"
    ";
        } elseif ((        // line 13
($context["mode"] ?? null) == "create")) {
            // line 14
            echo "      ";
            if (((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), "0")) : ("0"))) {
                // line 15
                echo "        data-save-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
      ";
            } else {
                // line 17
                echo "        data-save-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
      ";
            }
            // line 19
            echo "    ";
        }
        echo ">
    <form class=\"form-horizontal\" id=\"step1-form\">
      <ul class=\"form-group task-create-type-list \">
        ";
        // line 22
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey((($this->getAttribute(($context["courseSet"] ?? null), "type", array()) . "-create-task-activity-metas-") . $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local")), 1000        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 23
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta());
                foreach ($context['_seq'] as $context["type"] => $context["meta"]) {
                    if ($this->env->getExtension('AppBundle\Twig\ActivityExtension')->isActivityVisible($context["type"], ($context["courseSet"] ?? null), ($context["course"] ?? null))) {
                        // line 24
                        echo "            <li class=\"col-xs-3 task-create-type-item js-course-tasks-item ";
                        if (((($this->getAttribute(($context["task"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["task"] ?? null), "type", array()), null)) : (null)) == $context["type"])) {
                            echo " active ";
                        }
                        echo "\"
                data-role=\"activityType\" data-type=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\"
                data-content-url=\"";
                        // line 26
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_activity_content_modal", array("activityId" => 0, "type" => $context["type"], "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                        echo "\"
                data-finish-url=\"";
                        // line 27
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_activity_finish_modal", array("activityId" => 0, "type" => $context["type"], "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                        echo "\">
              <a href=\"javascript:;\" ";
                        // line 28
                        if ((($context["mode"] ?? null) == "edit")) {
                            echo " disabled ";
                        }
                        echo ">
                <i class=\"";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "icon", array()), "html", null, true);
                        echo "\"></i>
                ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["meta"], "name", array())), "html", null, true);
                        echo "
              </a>
            </li>
          ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['meta'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 35
        echo "        <li class=\"col-xs-12\">
          <label for=\"mediaType\" class=\"hidden\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("category"), "html", null, true);
        echo "</label>
          <input name=\"mediaType\" id=\"mediaType\" class=\"type-hidden\">
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"mode\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ((array_key_exists("taskMode", $context)) ? (_twig_default_filter(($context["taskMode"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"categoryId\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), null)) : (null)), "html", null, true);
        echo "\">
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"fromCourseId\" value='";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "id", array()), "html", null, true);
        echo "'>
          <input class=\"js-hidden-data\" type=\"hidden\" name=\"courseSetType\" id=\"courseSetType\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "type", array()), "html", null, true);
        echo "\">
          <input type=\"hidden\" id=\"courseExpiryMode\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryMode", array()), "html", null, true);
        echo "\">
        </li>
      </ul>
    </form>
  </div>
";
    }

    // line 49
    public function block_task_create_content($context, array $blocks = array())
    {
        // line 50
        echo "  <div id=\"task-create-content\"  data-course-id=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\" data-activity-id=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["task"] ?? null), "activityId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["task"] ?? null), "activityId", array()), 0)) : (0)), "html", null, true);
        echo "\" class=\"task-create-content hidden\">
    <iframe src=\"\" scrolling=\"no\" class=\"task-create-content-iframe\" id=\"task-create-content-iframe\" name=\"task-create-content-iframe\" frameborder=\"0\"></iframe>
  </div>
";
    }

    // line 54
    public function block_task_create_finish($context, array $blocks = array())
    {
        // line 55
        echo "  <div id=\"task-create-finish\" class=\"task-create-finish hidden\">
    <iframe src=\"\" scrolling=\"no\" class=\"task-create-finish-iframe\" id=\"task-create-finish-iframe\" name=\"task-create-finish-iframe\" frameborder=\"0\"></iframe>
  </div>
";
    }

    public function getTemplateName()
    {
        return "task-manage/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  197 => 54,  186 => 50,  183 => 49,  173 => 42,  169 => 41,  165 => 40,  161 => 39,  157 => 38,  152 => 36,  149 => 35,  142 => 34,  131 => 30,  127 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  102 => 24,  96 => 23,  90 => 22,  83 => 19,  77 => 17,  71 => 15,  68 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  45 => 8,  43 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task-manage/modal.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\task-manage\\modal.html.twig");
    }
}
