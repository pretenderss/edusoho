<?php

/* task/show.html.twig */
class __TwigTemplate_8662c7f493c10309763fe969aa85b7e26e62fea327b8dcb39a763aed06230459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "task/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "";
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-server.js", 1 => "libs/perfect-scrollbar.js", 2 => "libs/es-ckeditor/ckeditor.js", 3 => "app/js/task/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $context["preview"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "preview"), "method");
        // line 10
        echo "
  ";
        // line 11
        if (((($this->getAttribute(($context["member"] ?? null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "role", array()), "")) : ("")) != "student")) {
            // line 12
            echo "    ";
            $context["preview"] = true;
            // line 13
            echo "  ";
        }
        // line 14
        echo "
  <div id=\"js-hidden-data\">
    <input type=\"hidden\" name=\"course-id\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "courseId", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"task-id\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "id", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"task-result-status\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["taskResult"] ?? null), "status", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"mode\" value=\"";
        // line 19
        if (($context["preview"] ?? null)) {
            echo "preview";
        } else {
            echo "learn";
        }
        echo "\">
    <input type=\"hidden\" name=\"plugins_url\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show_plugins", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\">
  </div>

  <div class=\"task-dashboard-page js-task-dashboard-page\">
    <div class=\"dashboard-content\" id=\"dashboard-content\">
      <div class=\"dashboard-header\">
        <a class=\"back-link\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
          <i class=\"es-icon es-icon-chevronleft\"></i>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.back_course_btn"), "html", null, true);
        echo "
        </a>
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "number", array()), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "title", array()), "html", null, true);
        echo "
      </div>
      <div class=\"dashboard-body\">
        <div class=\"";
        // line 32
        if (twig_in_filter($this->getAttribute(($context["task"] ?? null), "type", array()), array(0 => "exercise", 1 => "homework", 2 => "testpaper"))) {
            echo " mobile-scroll-wrapper ";
        }
        echo " all-wrapper\">
          <iframe id=\"task-content-iframe\" class=\"task-content-iframe\" name=\"task-content-iframe\"
            data-next-task-url=\"";
        // line 34
        if (($context["nextTask"] ?? null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["nextTask"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["nextTask"] ?? null), "id", array()))), "html", null, true);
        }
        echo "\"
            data-event-enable=\"";
        // line 35
        if (($context["allowEventAutoTrigger"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
            data-event-url=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_trigger", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\"
            data-last-time=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo "\"
            data-learn-time-sec=\"";
        // line 38
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.learn_time_sec"), 60), "html", null, true);
        echo "\"
            data-last-learn-time=\"";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["taskResult"] ?? null), "lastLearnTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["taskResult"] ?? null), "lastLearnTime", array()), 0)) : (0)), "html", null, true);
        echo "\"
            data-user-id=\"";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["taskResult"] ?? null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["taskResult"] ?? null), "userId", array()), 0)) : (0)), "html", null, true);
        echo "\"
            data-file-id=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["media"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["media"] ?? null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\"
            data-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_activity_show", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()), "preview" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "preview"), "method"))), "html", null, true);
        echo "\"
            src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_activity_show", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()), "preview" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "preview"), "method"), "blank" => true)), "html", null, true);
        echo "\"
            style=\"width:100%;height:100%;border:0px\"
            allowfullscreen webkitallowfullscreen>
          </iframe>
        </div>
      </div>
      <div class=\"dashboard-footer js-dashboard-footer ";
        // line 49
        if (((((((( !twig_test_empty(($context["media"] ?? null)) && $this->env->getExtension('AppBundle\Twig\CourseExtension')->isSupportEnableAudio((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), 0)) : (0)))) && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal")) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled"), false)) && ($this->getAttribute(($context["media"] ?? null), "type", array()) == "video")) && ($this->getAttribute(($context["media"] ?? null), "storage", array()) == "cloud")) && ($this->getAttribute(($context["media"] ?? null), "audioConvertStatus", array()) == "success")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "close-convert-audio-ad", 1 => false), "method"))) {
            echo " dashboard-footer--audio";
        }
        echo "\">
        <div class=\"pull-left js-audio-convert-box audio-convert-tip\">
          ";
        // line 51
        if (((((((( !twig_test_empty(($context["media"] ?? null)) && $this->env->getExtension('AppBundle\Twig\CourseExtension')->isSupportEnableAudio((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), 0)) : (0)))) && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal")) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled"), false)) && ($this->getAttribute(($context["media"] ?? null), "type", array()) == "video")) && ($this->getAttribute(($context["media"] ?? null), "storage", array()) == "cloud")) && ($this->getAttribute(($context["media"] ?? null), "audioConvertStatus", array()) == "success")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "close-convert-audio-ad", 1 => false), "method"))) {
            // line 52
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.show.video.convert.client.try"), "html", null, true);
            echo "
            <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.try"), "html", null, true);
            echo "</a>
            <a class=\"js-audio-convert-ad\" href=\"javascript:;\" data-cookie=\"close-convert-audio-ad\"><i class=\"es-icon es-icon-icon_close_circle text-xlg\"></i><span class=\"hidden-xs\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.show.video.convert.client.notify"), "html", null, true);
            echo "</span></a>
          ";
        }
        // line 56
        echo "        </div>
        <div class=\"btn-group pull-left visible-xs js-mobile-btn\" role=\"group\">
          <a class=\"btn btn-default  ";
        // line 58
        if ( !((array_key_exists("previousTask", $context)) ? (_twig_default_filter(($context["previousTask"] ?? null), null)) : (null))) {
            echo " disabled ";
        }
        echo "\"
             ";
        // line 59
        if (((array_key_exists("previousTask", $context)) ? (_twig_default_filter(($context["previousTask"] ?? null), null)) : (null))) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["previousTask"] ?? null), "id", array()))), "html", null, true);
            echo "\" ";
        }
        echo "><strong class=\"es-icon es-icon-chevronleft text-xlg\"></strong></a>
         ";
        // line 60
        $context["task_disable"] = (($this->getAttribute(($context["course"] ?? null), "learnMode", array()) == "lockMode") && ($this->getAttribute(($context["taskResult"] ?? null), "status", array()) != "finish"));
        // line 61
        echo "          <a class=\"btn btn-default js-next-mobile-btn  ";
        if ( !((array_key_exists("nextTask", $context)) ? (_twig_default_filter(($context["nextTask"] ?? null), null)) : (null))) {
            echo " disabled  ";
        }
        echo "\"
             ";
        // line 62
        if (($context["task_disable"] ?? null)) {
            // line 63
            echo "               data-toggle=\"popover\"
               data-trigger=\"hover\"
               data-placement=\"top\"
               data-content=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.learning_hint"), "html", null, true);
            echo "\"
             ";
        }
        // line 68
        echo "              ";
        if (((array_key_exists("nextTask", $context)) ? (_twig_default_filter(($context["nextTask"] ?? null), null)) : (null))) {
            // line 69
            echo "                ";
            if ((($this->getAttribute(($context["course"] ?? null), "learnMode", array()) == "lockMode") && ($this->getAttribute(($context["taskResult"] ?? null), "status", array()) != "finish"))) {
                // line 70
                echo "                  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["nextTask"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                ";
            } else {
                // line 72
                echo "                  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["nextTask"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                ";
            }
            // line 74
            echo "              ";
        }
        echo "><strong class=\"es-icon es-icon-chevronright text-xlg\"></strong></a>
        </div>
        <div class=\"state-opration js-state-opration\" data-learnmode=\"";
        // line 76
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "learnMode", array()), "freeMode")) : ("freeMode")), "html", null, true);
        echo "\">
          <a class=\"btn btn-gray text-sm js-learn-prompt ";
        // line 77
        if (($this->getAttribute(($context["taskResult"] ?? null), "status", array()) != "finish")) {
            echo "open";
        }
        echo "\"
            href=\"javascript:;\"
            data-toggle=\"popover\"
            data-trigger=\"hover\"
            data-placement=\"top\"
            data-content='";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_manage.finish_tips"), "html", null, true);
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Task:finishCondition", array("task" => ($context["task"] ?? null))));
        echo "'>
            <i class=\"es-icon es-icon-help mrs text-md\"></i>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.finish_condition", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
          </a>
          <span class=\"btn text-sm js-learned-prompt color-primary ";
        // line 85
        if (($this->getAttribute(($context["taskResult"] ?? null), "status", array()) == "finish")) {
            echo "open";
        }
        echo "\"
              href=\"javascript:;\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"top\"
              data-container=\".js-learned-prompt\"
              data-content='";
        // line 91
        $this->loadTemplate("task/task-finished-prompt.html.twig", "task/show.html.twig", 91)->display($context);
        echo "'
              data-url=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_finished_prompt", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-iccheckcircleblack24px mrs text-md\"></i>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.finish_btn", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
          </span>
        </div>
        ";
        // line 96
        if (((($this->getAttribute(($context["course"] ?? null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableFinish", array()), 0)) : (0)) == 1)) {
            // line 97
            echo "          <a type=\"button\" href=\"javascript:;\"
            ";
            // line 98
            if (($this->getAttribute(($context["taskResult"] ?? null), "status", array()) != "finish")) {
                // line 99
                echo "              class=\"btn btn-transparent btn-learn js-btn-learn\"
              id='learn-btn'
              data-url='";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_finish", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
                echo "'
            ";
            } else {
                // line 103
                echo "              class=\"btn btn-transparent btn-learn js-btn-learn active\"
            ";
            }
            // line 104
            echo ">
              <i class=\"es-icon es-icon--check-circle done\"></i>
              <i class=\"es-icon es-icon-undone-check doing\"></i>
            ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.learned_btn"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 110
        echo "
      </div>
    </div>
    <div class=\"dashboard-sidebar hidden-xs\" id=\"dashboard-sidebar\">

    </div>
  </div>

  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
    ";
        // line 121
        $this->loadTemplate("event_report.html.twig", "task/show.html.twig", 121)->display(array_merge($context, array("eventName" => "task.view", "subjectType" => "courseMember", "subjectId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "eventReportParams" => array())));
        // line 122
        echo "    ";
        $this->loadTemplate("activity/ltc-server/js-loader.html.twig", "task/show.html.twig", 122)->display(array_merge($context, array("taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()))));
        // line 123
        echo "
";
    }

    public function getTemplateName()
    {
        return "task/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 123,  354 => 122,  352 => 121,  346 => 118,  336 => 110,  330 => 107,  325 => 104,  321 => 103,  316 => 101,  312 => 99,  310 => 98,  307 => 97,  305 => 96,  299 => 93,  295 => 92,  291 => 91,  280 => 85,  275 => 83,  270 => 82,  260 => 77,  256 => 76,  250 => 74,  244 => 72,  238 => 70,  235 => 69,  232 => 68,  227 => 66,  222 => 63,  220 => 62,  213 => 61,  211 => 60,  203 => 59,  197 => 58,  193 => 56,  188 => 54,  182 => 53,  177 => 52,  175 => 51,  168 => 49,  159 => 43,  155 => 42,  151 => 41,  147 => 40,  143 => 39,  139 => 38,  135 => 37,  131 => 36,  123 => 35,  117 => 34,  110 => 32,  101 => 29,  96 => 27,  92 => 26,  83 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 14,  56 => 13,  53 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/show.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\task\\show.html.twig");
    }
}
