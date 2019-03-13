<?php

/* task-manage/modal-layout.html.twig */
class __TwigTemplate_17a9aa115ae9d5a22c9e7135ce5acffe4879d79b01dadbdf6e6b06b887e50d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "task-manage/modal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'task_create_type' => array($this, 'block_task_create_type'),
            'task_create_content' => array($this, 'block_task_create_content'),
            'task_create_finish' => array($this, 'block_task_create_finish'),
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
        $context["modal_class"] = "modal-lg";
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-server.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if ((((array_key_exists("customTitle", $context)) ? (_twig_default_filter(($context["customTitle"] ?? null), "")) : ("")) != "")) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, ($context["customTitle"] ?? null), "html", null, true);
            echo "
  ";
        } else {
            // line 9
            echo "    ";
            if (((array_key_exists("task", $context)) ? (_twig_default_filter(($context["task"] ?? null), false)) : (false))) {
                // line 10
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.modify", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
                echo "
    ";
            } else {
                // line 12
                echo "      ";
                if (((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0))) {
                    // line 13
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.create", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
                    echo "
      ";
                } else {
                    // line 15
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.manage.create_lesson"), "html", null, true);
                    echo "
      ";
                }
                // line 17
                echo "    ";
            }
            // line 18
            echo "  ";
        }
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "  <div class=\"task-create-editor\" id=\"task-create-editor\">
    <ul class=\"es-step es-step-3 clearfix\" id=\"task-create-step\">
      <li class=\"doing\">
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.choose_teach_way");
        echo "
      </li>
      <li>
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.setup_content");
        echo "
      </li>
      <li>
        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.setup_finish_condition");
        echo "
      </li>
    </ul>
    ";
        // line 34
        $this->displayBlock('task_create_type', $context, $blocks);
        // line 35
        echo "    ";
        $this->displayBlock('task_create_content', $context, $blocks);
        // line 36
        echo "    ";
        $this->displayBlock('task_create_finish', $context, $blocks);
        // line 37
        echo "  </div>
";
    }

    // line 34
    public function block_task_create_type($context, array $blocks = array())
    {
    }

    // line 35
    public function block_task_create_content($context, array $blocks = array())
    {
    }

    // line 36
    public function block_task_create_finish($context, array $blocks = array())
    {
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "  ";
        if (((((array_key_exists("task", $context)) ? (_twig_default_filter(($context["task"] ?? null), false)) : (false)) && ((array_key_exists("taskMode", $context)) ? (_twig_default_filter(($context["taskMode"] ?? null), "")) : (""))) && (($context["taskMode"] ?? null) != "lesson"))) {
            // line 41
            echo "    <button id=\"course-tasks-delete\" type=\"submit\" class=\"btn btn-danger pull-left delete-task\"
            data-url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_task_delete", array("taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()))), "html", null, true);
            echo "\">
      <i class=\"es-icon es-icon-delete\"></i>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
            echo "</button>
  ";
        }
        // line 45
        echo "  <button id=\"course-tasks-prev\" type=\"submit\" class=\"btn btn-default hidden\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.back"), "html", null, true);
        echo "</button>
  <button id=\"course-tasks-next\" type=\"submit\" class=\"btn btn-default hidden\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.next"), "html", null, true);
        echo "</button>
  <button id=\"course-tasks-submit\" type=\"submit\" class=\"btn btn-primary hidden\"
          data-loading-text=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
";
        // line 49
        $this->loadTemplate("activity/ltc-server/js-loader.html.twig", "task-manage/modal-layout.html.twig", 49)->display(array_merge($context, array("taskId" => (($this->getAttribute(($context["task"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["task"] ?? null), "id", array()), 0)) : (0)), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))));
    }

    public function getTemplateName()
    {
        return "task-manage/modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  164 => 48,  159 => 46,  154 => 45,  149 => 43,  145 => 42,  142 => 41,  139 => 40,  136 => 39,  131 => 36,  126 => 35,  121 => 34,  116 => 37,  113 => 36,  110 => 35,  108 => 34,  102 => 31,  96 => 28,  90 => 25,  85 => 22,  82 => 21,  77 => 18,  74 => 17,  68 => 15,  62 => 13,  59 => 12,  53 => 10,  50 => 9,  44 => 7,  41 => 6,  38 => 5,  34 => 1,  32 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task-manage/modal-layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\task-manage\\modal-layout.html.twig");
    }
}
