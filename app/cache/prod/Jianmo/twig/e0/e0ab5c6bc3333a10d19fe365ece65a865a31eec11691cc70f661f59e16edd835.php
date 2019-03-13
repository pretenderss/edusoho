<?php

/* admin/default/index.html.twig */
class __TwigTemplate_ffbe99ed627f254b2f9ba8046082e453f6d825118a0a365ecdf0795d45e39368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.hompage.html_head_title"), "html", null, true);
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        // line 7
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:validateDomain"));
        echo "
  <div class=\"row\">
    ";
        // line 9
        if ( !(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 10
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:getCloudNotices"));
            echo "
    ";
        }
        // line 12
        echo "
    <div class=\"
      ";
        // line 14
        if ( !(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 15
            echo "        col-md-6
      ";
        } else {
            // line 17
            echo "        col-md-12
      ";
        }
        // line 19
        echo "      \">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.content_title"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\" id=\"system-status\" data-url=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_system_status");
        echo "\">
          <div class=\"empty\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.loadig_data_tips"), "html", null, true);
        echo "</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data_title"), "html", null, true);
        echo "
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.tooltips");
        echo "
      </h3>

    </div>
    <div class=\"panel-body\" id=\"site-overview-table\" data-url=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_analysis");
        echo "\">
      <div class=\"empty\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.loadig_data_tips"), "html", null, true);
        echo "</div>
    </div>
  </div>
  ";
        // line 45
        echo "  ";
        // line 46
        echo "    ";
        // line 47
        echo "      ";
        // line 48
        echo "        ";
        // line 49
        echo "        ";
        // line 50
        echo "          ";
        // line 51
        echo "                  ";
        // line 52
        echo "                  ";
        // line 53
        echo "          ";
        // line 54
        echo "          ";
        // line 55
        echo "                  ";
        // line 56
        echo "                  ";
        // line 57
        echo "          ";
        // line 58
        echo "        ";
        // line 59
        echo "      ";
        // line 60
        echo "      ";
        // line 61
        echo "        ";
        // line 62
        echo "        ";
        // line 63
        echo "          ";
        // line 64
        echo "            ";
        // line 65
        echo "            ";
        // line 66
        echo "          ";
        // line 67
        echo "          ";
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        // line 70
        echo "          ";
        // line 71
        echo "        ";
        // line 72
        echo "      ";
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        // line 75
        echo "         ";
        // line 76
        echo "      ";
        // line 77
        echo "    ";
        // line 78
        echo "  ";
        // line 79
        echo "  ";
        // line 80
        echo "
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.month"), "html", null, true);
        echo "
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.order_statistic_title"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.order_statistic.tips");
        echo "
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.month"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.pay_order_statistic_title"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-task-switch-button\"
                      data-time=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-task-switch-button\"
                      data-time=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.month"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.task_finish_statistic_title", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">
                  ";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.task_finish_statistic.tips", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
                </div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-task-count-statistic\"
             data-url=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "week"));
        echo "\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.month"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.course_ranking_title"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
          >";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.more_btn"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question_title"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:unsolvedQuestionsBlock"));
        echo "
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_review");
        echo "\" class=\"pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.more_btn"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">
            ";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_review_title"), "html", null, true);
        echo "
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:courseReview"));
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          ";
        // line 222
        echo "          <h3 class=\"panel-title\">
            ";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.top_search_title"), "html", null, true);
        echo "
            <small>";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 228
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 229
            echo "            <div class=\"empty\">
              <a target=\"_blank\" href=\"";
            // line 230
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.free_access_edu_cloud_search_btn"), "html", null, true);
            echo "</a>
            </div>
          ";
        } else {
            // line 233
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:cloudSearchRanking"));
            echo "
          ";
        }
        // line 235
        echo "        </div>
      </div>
    </div>
  </div>
  <div  id=\"cloud-ad\" class=\"admin-cloud-ad modal fade text-center\" aria-hidden=\"true\" data-backdrop=\"static\"  tabindex=\"-1\" role=\"dialog\" data-url =\"";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_ad");
        echo "\">
    <div class=\"modal-dialog\">
        <a href=\"\" target=\"_blank\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
        </a>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "admin/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 239,  515 => 235,  509 => 233,  501 => 230,  498 => 229,  496 => 228,  489 => 224,  485 => 223,  482 => 222,  472 => 214,  465 => 210,  458 => 208,  447 => 200,  441 => 197,  437 => 196,  433 => 195,  418 => 183,  412 => 180,  404 => 177,  398 => 176,  391 => 174,  385 => 173,  371 => 162,  361 => 155,  352 => 149,  344 => 146,  338 => 145,  331 => 143,  325 => 142,  317 => 139,  302 => 127,  296 => 124,  288 => 121,  282 => 120,  275 => 118,  269 => 117,  261 => 114,  249 => 105,  242 => 101,  236 => 98,  227 => 94,  221 => 93,  213 => 90,  207 => 89,  199 => 86,  191 => 80,  189 => 79,  187 => 78,  185 => 77,  183 => 76,  181 => 75,  179 => 74,  177 => 73,  175 => 72,  173 => 71,  171 => 70,  169 => 69,  167 => 68,  165 => 67,  163 => 66,  161 => 65,  159 => 64,  157 => 63,  155 => 62,  153 => 61,  151 => 60,  149 => 59,  147 => 58,  145 => 57,  143 => 56,  141 => 55,  139 => 54,  137 => 53,  135 => 52,  133 => 51,  131 => 50,  129 => 49,  127 => 48,  125 => 47,  123 => 46,  121 => 45,  115 => 41,  111 => 40,  104 => 36,  99 => 34,  87 => 25,  83 => 24,  78 => 22,  73 => 19,  69 => 17,  65 => 15,  63 => 14,  59 => 12,  53 => 10,  51 => 9,  45 => 7,  43 => 6,  40 => 5,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\admin\\default\\index.html.twig");
    }
}
