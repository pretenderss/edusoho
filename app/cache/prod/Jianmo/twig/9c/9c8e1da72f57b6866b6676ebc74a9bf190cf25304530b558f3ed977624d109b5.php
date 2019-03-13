<?php

/* course/header/header-for-guest.html.twig */
class __TwigTemplate_4af49b045a689940e01bfb0b5822a4557d45ef75f96e7c249c6f6e2271eb3e58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/header/header-layout.html.twig", "course/header/header-for-guest.html.twig", 1);
        $this->blocks = array(
            'course_header_subtitle' => array($this, 'block_course_header_subtitle'),
            'course_header_people_num' => array($this, 'block_course_header_people_num'),
            'course_member_count' => array($this, 'block_course_member_count'),
            'course_heard_content' => array($this, 'block_course_heard_content'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
            'course_header_top' => array($this, 'block_course_header_top'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/header/header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ((($context["previewAs"] ?? null) == "guest")) {
            // line 4
            $context["member"] = null;
            // line 5
            $context["courses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CoursesByCourseSetId", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array())));
        }
        // line 8
        $context["page_type"] = "guest";
        // line 11
        $context["showCourses"] = ((array_key_exists("showCourses", $context)) ? (_twig_default_filter(($context["showCourses"] ?? null), 1)) : (1));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_course_header_subtitle($context, array $blocks = array())
    {
    }

    // line 14
    public function block_course_header_people_num($context, array $blocks = array())
    {
    }

    // line 16
    public function block_course_member_count($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_member_count", array("%studentsNum%" => $this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()))), "html", null, true);
        echo "
";
    }

    // line 20
    public function block_course_heard_content($context, array $blocks = array())
    {
        // line 21
        echo "  <div class=\"course-detail-bottom\">
    <div class=\"course-detail-img\">
      <span class=\"tags mrm\">
        ";
        // line 24
        if (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()) == "serialized")) {
            // line 25
            echo "          <span class=\"tag-serialing\"></span>
        ";
        } elseif (($this->getAttribute(        // line 26
($context["courseSet"] ?? null), "serializeMode", array()) == "finished")) {
            // line 27
            echo "          <span class=\"tag-finished\"></span>
        ";
        }
        // line 29
        echo "      </span>
      <img class=\"img-responsive\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(($context["courseSet"] ?? null), "large"), "courseSet.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " \">
      <div class=\"image-overlay\"></div>
\t\t\t";
        // line 32
        if (((array_key_exists("previewTask", $context)) ? (_twig_default_filter(($context["previewTask"] ?? null), null)) : (null))) {
            // line 33
            echo "        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["previewTask"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"course-img-cover\">
          <i class=\"es-icon es-icon-playcircleoutline\"></i>
        </a>
\t\t\t";
        }
        // line 37
        echo "      
      <div class=\"course-detail-remask\">
\t\t\t\t";
        // line 39
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 40
            echo "          <i class=\"es-icon es-icon-people\"></i>
\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.students_count", array("%studentsNum%" => (($this->getAttribute(($context["courseSet"] ?? null), "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()), 0)) : (0))));
            echo "
\t\t\t\t";
        }
        // line 43
        echo "        <div class=\"score pull-right mb0\">
\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "star", array(0 => (($this->getAttribute(($context["courseSet"] ?? null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "rating", array()), 0)) : (0))), "method"), "html", null, true);
        echo "
          <span class=\"vertical-middle\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.mask.rating_num", array("%ratingNum%" => (($this->getAttribute(($context["courseSet"] ?? null), "ratingNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "ratingNum", array()), 0)) : (0)))), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    <div class=\"course-detail-info\">
      <div class=\"course-detail-info__text js-course-detail-info\">
        ";
        // line 51
        $context["onDiscount"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->isDiscount(($context["course"] ?? null));
        // line 52
        echo "        <div class=\"course-detail-info__title\">
          ";
        // line 53
        if (($context["marketingPage"] ?? null)) {
            // line 54
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo "
          ";
        } else {
            // line 56
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 58
        echo "        </div>
        ";
        // line 59
        $context["canManage"] = (((($this->getAttribute(($context["member"] ?? null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"));
        // line 60
        echo "        ";
        if (($context["canManage"] ?? null)) {
            // line 61
            echo "          <a class=\"btn btn-default btn-xs course-detail-info__manage\" href=\"";
            if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter(($context["page_type"] ?? null), "guest")) : ("guest")) == "member")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            }
            echo "\">
            <i class=\"es-icon es-icon-setting\"></i>&nbsp;";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.manage"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 65
        echo "        ";
        if ($this->getAttribute(($context["courseSet"] ?? null), "subtitle", array())) {
            // line 66
            echo "          <p class=\"course-detail-info__subtitle text-overflow subtitle cd-text-sm cd-mb16\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\"
            data-trigger=\"hover\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "subtitle", array()), "html", null, true);
            echo "\">
            <span >";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "subtitle", array()), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 71
        echo "        <div class=\"";
        if (($context["onDiscount"] ?? null)) {
            echo " mb10  ";
        } else {
            echo " cd-mb16 ";
        }
        echo "\">
          ";
        // line 72
        $this->loadTemplate("course/header/header-for-price.html.twig", "course/header/header-for-guest.html.twig", 72)->display($context);
        // line 73
        echo "        </div>
        
        ";
        // line 75
        if (($context["onDiscount"] ?? null)) {
            // line 76
            echo "          <div class=\"cd-mb8\">
            <span class=\"course-detail__label\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.acitivity"), "html", null, true);
            echo "</span>
            <span class=\"text-12 color-warning\">
              <b class=\"hidden-xs course-detail-activity-title\">";
            // line 79
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($this->getAttribute(($context["course"] ?? null), "discount", array()), "name", array()), 10);
            echo "</b><span class=\"cd-text-medium cd-ml16\" id=\"discount-endtime-countdown\" data-remaintime=";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["course"] ?? null), "discount", array()), "endTime", array()) - $this->env->getExtension('AppBundle\Twig\WebExtension')->timestamp()), "html", null, true);
            echo "></span><i class=\"es-icon es-icon-accesstime text-14 mls cd-text-medium\"></i>
            <span>
          </div>
        ";
        }
        // line 83
        echo "        <div class=\"course-detail-gray course-detail-gray--market ";
        if ( !($context["onDiscount"] ?? null)) {
            echo " not-activity ";
        }
        echo "\">
          ";
        // line 84
        if (($context["previewAs"] ?? null)) {
            // line 85
            echo "            ";
            $context["hasMulCoursePlans"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute(($context["courseSet"] ?? null), "id", array()));
            // line 86
            echo "          ";
        } else {
            // line 87
            echo "            ";
            $context["hasMulCoursePlans"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute(($context["courseSet"] ?? null), "id", array()), 1);
            // line 88
            echo "          ";
        }
        // line 89
        echo "          ";
        if ((($context["showCourses"] ?? null) && ($context["hasMulCoursePlans"] ?? null))) {
            // line 90
            echo "            <div class=\"course-detail-content\">
              <span class=\"course-detail-title vertical-middle\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan"), "html", null, true);
            echo "</span>
              <ul class=\"nav nav-pills nav-pills-sm nav-pills-transparent course-detail-nav\">
                ";
            // line 93
            $context["current_course"] = ($context["course"] ?? null);
            // line 94
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                if ((($this->getAttribute($context["course"], "status", array()) == "published") || ($context["previewAs"] ?? null))) {
                    // line 95
                    echo "                  <li class=\"mb5 mrs ";
                    if (($this->getAttribute(($context["current_course"] ?? null), "id", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        echo " active ";
                    }
                    echo "\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" data-container=\"body\" title=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                    echo "\"
                  data-trigger=\"hover\" href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()), "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["course"], "title", array()), 10), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unname_title")), "html", null, true);
                    echo "
                    </a>
                    <i class=\"es-icon es-icon-done done-icon\"></i>
                  </li>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "              </ul>
            </div>
          ";
        }
        // line 105
        echo "
          <div class=\"hidden-xs common-line-height\">
            <span class=\"course-detail-title\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date"), "html", null, true);
        echo "</span>
            ";
        // line 108
        if (($this->getAttribute(($context["course"] ?? null), "expiryMode", array()) == "days")) {
            // line 109
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.days_mode", array("%expiryDays%" => $this->getAttribute(($context["course"] ?? null), "expiryDays", array())));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 112
($context["course"] ?? null), "expiryMode", array()) == "end_date")) {
            // line 113
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.end_date_mode", array("%expiryEndDate%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), "Y-m-d ")));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 116
($context["course"] ?? null), "expiryMode", array()) == "date")) {
            // line 117
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.date_mode", array("%expiryStartDate%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryStartDate", array()), "Y-m-d "), "%expiryEndDate%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), "Y-m-d ")));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 120
($context["course"] ?? null), "expiryMode", array()) == "forever")) {
            // line 121
            echo "              <span class=\"gray-dark course-detail-expiry mrl\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.forever_mode"), "html", null, true);
            echo "</span>
            ";
        }
        // line 123
        echo "          </div>
          
          ";
        // line 125
        if ((($this->getAttribute(($context["course"] ?? null), "buyable", array()) != 0) && ($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) != 0))) {
            // line 126
            echo "            <div class=\"mtl hidden-xs common-line-height\">
              ";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.buy_expiry_date.buy_expiry_time", array("%buyExpiryTime%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()), "Y-m-d ")));
            echo "
            </div>
          ";
        }
        // line 130
        echo "          
          ";
        // line 131
        if ((($this->getAttribute(($context["course"] ?? null), "showServices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "showServices", array()), 1)) : (1))) {
            // line 132
            echo "            <div class=\"course-detail-service cd-mt16\">
              ";
            // line 133
            $context["serviceTags"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->buildServiceTags((($this->getAttribute(($context["course"] ?? null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "services", array()), array())) : (array())));
            // line 134
            echo "              <span class=\"course-detail-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.showServices"), "html", null, true);
            echo "</span>
              ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["serviceTags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 136
                echo "                ";
                if ($this->getAttribute($context["tag"], "active", array())) {
                    // line 137
                    echo "                  <span
                      class=\"lump-sm color-lump bg-primary mr5 hidden-xs\"
                      data-container=\"body\"
                      data-trigger=\"hover\"
                      data-placement=\"top\"
                      data-toggle=\"tooltip\"
                      title=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "fullName", array()), "html", null, true);
                    echo "\"
                      data-content=\"";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "summary", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "shortName", array()), "html", null, true);
                    echo "
                  </span>
                ";
                }
                // line 148
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "            </div>
          ";
        }
        // line 151
        echo "          
          ";
        // line 152
        if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled"), false) && $this->env->getExtension('AppBundle\Twig\CourseExtension')->isSupportEnableAudio((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), 0)) : (0)))) && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal"))) {
            // line 153
            echo "            <div class=\"course-detail-listening\">
              <span class=\"course-detail-title\">";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.enable_label"), "html", null, true);
            echo "</span>
              ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.click.listen"), "html", null, true);
            echo "
              <a href=\"";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"__blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.try"), "html", null, true);
            echo "</a>
            </div>
          ";
        }
        // line 159
        echo "        </div>

        <div class=\"course-detail-section-responsive visible-xs visible-sm clearfix\">
          <ul class=\"clearfix\">
            <!--营销页显示-->
            ";
        // line 164
        if (($context["marketingPage"] ?? null)) {
            // line 165
            echo "              <li class=\"js-unfavorite-btn ";
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "hidden";
            }
            echo "\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\">
                <a class=\"color-primary\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-favorite color-primary\"></i>
                  <br/>
                  ";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "
                </a>
              </li>
              <li class=\"js-favorite-btn ";
            // line 173
            if (($context["isUserFavorite"] ?? null)) {
                echo "hidden";
            }
            echo "\" id=\"favorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\">
                <a class=\"\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-favoriteoutline\"></i>
                  <br/>
                  ";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "
                </a>
              </li>
            ";
        }
        // line 182
        echo "            
            <li class=\"es-share top\">
              <a class=\" dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "\">
                <i class=\"es-icon es-icon-share\"></i>
                <br/>
                ";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "
              </a>
              ";
        // line 189
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-guest.html.twig", 189)->display(array_merge($context, array("type" => "courseSet")));
        // line 190
        echo "            </li>

            ";
        // line 192
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => ($context["course"] ?? null), "mobile" => true));
        echo "

          </ul>
        </div>
      </div>

      <div class=\"course-detail-info__btn js-course-header-operation\">
        <ul class=\"course-operation course-operation--market hidden-xs hidden-sm clearfix mb0\">
          <li class=\"es-qrcode top hidden-xs mrl\" data-url=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_qrcode", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-saoyisao course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.qrcode_tips"), "html", null, true);
        echo "</span></a>
            <span class=\"qrcode-popover\">
              <img class=\"mb0\" src=\"\" alt=\"\">";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.tips.scan_qrcode_tips"), "html", null, true);
        echo "
            </span>
          </li>

          ";
        // line 208
        echo "          <li class=\"es-share es-share-item top mrl\">
            <a class=\"dropdown-toggle cd-link-assist\" href=\"javascript:;\" data-toggle=\"dropdown\">
              <i class=\"es-icon es-icon-share course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "</span>
            </a>
            ";
        // line 212
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-guest.html.twig", 212)->display(array_merge($context, array("type" => "courseSet")));
        // line 213
        echo "          </li>
          <!--营销页显示-->
          ";
        // line 216
        echo "          ";
        if (($context["marketingPage"] ?? null)) {
            // line 217
            echo "            <li class=\"js-unfavorite-btn mrl ";
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "hidden ";
            }
            echo "\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\">
              <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-favorite color-danger course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li class=\"js-favorite-btn mrl ";
            // line 221
            if (($context["isUserFavorite"] ?? null)) {
                echo "hidden";
            }
            echo "\" id=\"favorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\">
              <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-favoriteoutline course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "</span>
              </a>
            </li>
          ";
        }
        // line 226
        echo "

          ";
        // line 228
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => ($context["course"] ?? null)));
        echo "
          ";
        // line 230
        echo "         
          ";
        // line 231
        $this->displayBlock('course_member_exit', $context, $blocks);
        // line 232
        echo "        </ul>
        <div class=\"text-right buy-btn-group course-operation-btn ";
        // line 233
        if (((array_key_exists("classroom", $context)) ? (_twig_default_filter(($context["classroom"] ?? null), null)) : (null))) {
            echo " course-classroom-tip";
        }
        echo "\">
          ";
        // line 234
        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
            // line 235
            echo "            ";
            if ((($this->getAttribute(($context["course"] ?? null), "expiryMode", array()) == "date") && ($this->getAttribute(($context["course"] ?? null), "expiryStartDate", array()) >= $this->env->getExtension('AppBundle\Twig\WebExtension')->timestamp()))) {
                // line 236
                echo "              ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.expiryStartDate", array("%expiryStartDate%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryStartDate", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date.format"))));
                echo "
            ";
            } else {
                // line 238
                echo "              <a class=\"cd-btn cd-btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.learn"), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 242
            echo "          ";
        } else {
            // line 243
            echo "            ";
            if (((array_key_exists("classroom", $context)) ? (_twig_default_filter(($context["classroom"] ?? null), null)) : (null))) {
                // line 244
                echo "              ";
                $this->loadTemplate("course/header/header-for-classroom-info.html.twig", "course/header/header-for-guest.html.twig", 244)->display($context);
                // line 245
                echo "            ";
            } else {
                // line 246
                echo "              ";
                $this->loadTemplate("course/header/header-for-guest-buy-btn.html.twig", "course/header/header-for-guest.html.twig", 246)->display($context);
                // line 247
                echo "            ";
            }
            // line 248
            echo "          ";
        }
        // line 249
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    // line 231
    public function block_course_member_exit($context, array $blocks = array())
    {
    }

    // line 255
    public function block_course_header_top($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course/header/header-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 255,  659 => 231,  651 => 249,  648 => 248,  645 => 247,  642 => 246,  639 => 245,  636 => 244,  633 => 243,  630 => 242,  624 => 239,  619 => 238,  613 => 236,  610 => 235,  608 => 234,  602 => 233,  599 => 232,  597 => 231,  594 => 230,  590 => 228,  586 => 226,  579 => 222,  571 => 221,  565 => 218,  556 => 217,  553 => 216,  549 => 213,  547 => 212,  542 => 210,  538 => 208,  531 => 203,  526 => 201,  522 => 200,  511 => 192,  507 => 190,  505 => 189,  500 => 187,  494 => 184,  490 => 182,  483 => 178,  476 => 174,  468 => 173,  462 => 170,  455 => 166,  446 => 165,  444 => 164,  437 => 159,  429 => 156,  425 => 155,  421 => 154,  418 => 153,  416 => 152,  413 => 151,  409 => 149,  403 => 148,  397 => 145,  393 => 144,  389 => 143,  381 => 137,  378 => 136,  374 => 135,  369 => 134,  367 => 133,  364 => 132,  362 => 131,  359 => 130,  353 => 127,  350 => 126,  348 => 125,  344 => 123,  338 => 121,  336 => 120,  331 => 118,  328 => 117,  326 => 116,  321 => 114,  318 => 113,  316 => 112,  311 => 110,  308 => 109,  306 => 108,  302 => 107,  298 => 105,  293 => 102,  277 => 97,  273 => 96,  266 => 95,  260 => 94,  258 => 93,  253 => 91,  250 => 90,  247 => 89,  244 => 88,  241 => 87,  238 => 86,  235 => 85,  233 => 84,  226 => 83,  217 => 79,  212 => 77,  209 => 76,  207 => 75,  203 => 73,  201 => 72,  192 => 71,  186 => 68,  182 => 67,  179 => 66,  176 => 65,  170 => 62,  161 => 61,  158 => 60,  156 => 59,  153 => 58,  147 => 56,  141 => 54,  139 => 53,  136 => 52,  134 => 51,  125 => 45,  121 => 44,  118 => 43,  113 => 41,  110 => 40,  108 => 39,  104 => 37,  96 => 33,  94 => 32,  87 => 30,  84 => 29,  80 => 27,  78 => 26,  75 => 25,  73 => 24,  68 => 21,  65 => 20,  58 => 17,  55 => 16,  50 => 14,  45 => 12,  41 => 1,  39 => 11,  37 => 8,  34 => 5,  32 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-guest.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\header-for-guest.html.twig");
    }
}
