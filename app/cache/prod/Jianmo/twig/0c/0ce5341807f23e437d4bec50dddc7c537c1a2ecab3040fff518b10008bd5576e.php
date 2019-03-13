<?php

/* course/header/header-layout.html.twig */
class __TwigTemplate_cf4ca6f80065e2e95cd8c8b237a04ecfa4ff3788531e222489086cc67bd83fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'course_header_info' => array($this, 'block_course_header_info'),
            'course_header_top' => array($this, 'block_course_header_top'),
            'course_header_qrcode' => array($this, 'block_course_header_qrcode'),
            'course_header_subtitle' => array($this, 'block_course_header_subtitle'),
            'course_header_people_num' => array($this, 'block_course_header_people_num'),
            'course_member_count' => array($this, 'block_course_member_count'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
            'course_heard_content' => array($this, 'block_course_heard_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course/header/header-layout.html.twig", 1);
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script("app/js/course/header-top/index.js");
        // line 3
        echo "
<!-- 3、加入后：任务式学习 -->
<div class=\"container cd-container\">
  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("breadcrumbs", $context)) ? (_twig_default_filter(($context["breadcrumbs"] ?? null))) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter(($context["page_type"] ?? null), "guest")) : ("guest")) == "member")) {
            // line 12
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo " </a></li>
    ";
        } else {
            // line 14
            echo "      <li class=\"active\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo " </li>
    ";
        }
        // line 16
        echo "  </ol>

  ";
        // line 18
        $this->displayBlock('course_header_info', $context, $blocks);
        // line 19
        echo "  <div class=\"es-section course-detail-section ";
        if ( !($context["marketingPage"] ?? null)) {
            echo "course-detail-section--normal ";
        }
        echo " clearfix\">
    ";
        // line 20
        $this->displayBlock('course_header_top', $context, $blocks);
        // line 113
        echo "    ";
        $this->displayBlock('course_heard_content', $context, $blocks);
        // line 114
        echo "  </div>
</div>
";
    }

    // line 18
    public function block_course_header_info($context, array $blocks = array())
    {
    }

    // line 20
    public function block_course_header_top($context, array $blocks = array())
    {
        // line 21
        echo "      <div class=\"course-detail-top clearfix\">
        ";
        // line 23
        echo "        <span class=\"tags mrm\">
          ";
        // line 24
        if (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()) == "serialized")) {
            // line 25
            echo "            <span class=\"tag-serialing\"></span>
          ";
        } elseif (($this->getAttribute(        // line 26
($context["courseSet"] ?? null), "serializeMode", array()) == "finished")) {
            // line 27
            echo "            <span class=\"tag-finished\"></span>
          ";
        }
        // line 29
        echo "        </span>
        <span class=\"course-detail-heading\">
          ";
        // line 31
        if (($context["marketingPage"] ?? null)) {
            // line 32
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 34
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 36
        echo "          ";
        // line 37
        echo "          ";
        $this->displayBlock('course_header_qrcode', $context, $blocks);
        // line 46
        echo "        </span>
        ";
        // line 48
        echo "        ";
        $this->displayBlock('course_header_subtitle', $context, $blocks);
        // line 49
        echo "        ";
        // line 50
        echo "        <ul class=\"course-operation ";
        if ( !($context["marketingPage"] ?? null)) {
            echo " course-operation--normal  ";
        }
        echo " hidden-xs hidden-sm clearfix\">
          <!--非营销页显示-->
          ";
        // line 52
        $this->displayBlock('course_header_people_num', $context, $blocks);
        // line 62
        echo "
          <!--营销页显示-->
          ";
        // line 64
        if (($context["marketingPage"] ?? null)) {
            // line 65
            echo "            <li class=\"js-unfavorite-btn\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
                ";
            // line 66
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\" ";
            }
            echo ">
              <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "\"
                data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmark color-primary\"></i>
              </a>
            </li>
            <li class=\"js-favorite-btn\" id=\"favorite-btn\" data-url=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\"
                ";
            // line 72
            if (($context["isUserFavorite"] ?? null)) {
                echo "style=\"display: none\"";
            }
            echo ">
              <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "\"
                data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmarkoutline\"></i>
              </a>
            </li>
          ";
        }
        // line 78
        echo "
          <li class=\"es-share top\">
            <a class=\"btn btn-default btn-xs dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-share\"></i>
            </a>
            ";
        // line 83
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-layout.html.twig", 83)->display(array_merge($context, array("type" => "courseSet")));
        // line 84
        echo "          </li>

          ";
        // line 86
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => ($context["course"] ?? null)));
        echo "

          ";
        // line 88
        $context["canManage"] = (((($this->getAttribute(($context["member"] ?? null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"));
        // line 89
        echo "          ";
        if (($context["canManage"] ?? null)) {
            // line 90
            echo "            <li>
              ";
            // line 91
            if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter(($context["page_type"] ?? null), "guest")) : ("guest")) == "member")) {
                // line 92
                echo "                <a class=\"btn btn-default btn-xs \"
                  href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_manage"), "html", null, true);
                echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-setting\"></i>
                </a>
              ";
            } else {
                // line 99
                echo "                <a class=\"btn btn-default btn-xs \"
                  href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
                echo "\"
                  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_manage"), "html", null, true);
                echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-setting\"></i>
                </a>
              ";
            }
            // line 106
            echo "            </li>
          ";
        }
        // line 108
        echo "          ";
        $this->displayBlock('course_member_exit', $context, $blocks);
        // line 109
        echo "        </ul>

      </div>
    ";
    }

    // line 37
    public function block_course_header_qrcode($context, array $blocks = array())
    {
        // line 38
        echo "            <span class=\"es-qrcode top pt5 hidden-xs\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_qrcode", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.tips.scan_qrcode_tips"), "html", null, true);
        echo "
              </span>
            </span>
          ";
    }

    // line 48
    public function block_course_header_subtitle($context, array $blocks = array())
    {
    }

    // line 52
    public function block_course_header_people_num($context, array $blocks = array())
    {
        // line 53
        echo "            ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 54
            echo "              <li>
                <span class=\"btn btn-xs cursor-default\">
                  <i class=\"es-icon es-icon-people text-16\"></i>
                  <span class=\"mls\">";
            // line 57
            $this->displayBlock('course_member_count', $context, $blocks);
            echo "</span>
                </span>
              </li>
            ";
        }
        // line 61
        echo "          ";
    }

    // line 57
    public function block_course_member_count($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_member_count", array("%studentsNum%" => $this->getAttribute(($context["course"] ?? null), "studentNum", array()))), "html", null, true);
        echo " ";
    }

    // line 108
    public function block_course_member_exit($context, array $blocks = array())
    {
    }

    // line 113
    public function block_course_heard_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course/header/header-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 113,  335 => 108,  328 => 57,  324 => 61,  317 => 57,  312 => 54,  309 => 53,  306 => 52,  301 => 48,  293 => 42,  285 => 38,  282 => 37,  275 => 109,  272 => 108,  268 => 106,  260 => 101,  256 => 100,  253 => 99,  245 => 94,  241 => 93,  238 => 92,  236 => 91,  233 => 90,  230 => 89,  228 => 88,  223 => 86,  219 => 84,  217 => 83,  211 => 80,  207 => 78,  199 => 73,  193 => 72,  189 => 71,  182 => 67,  176 => 66,  171 => 65,  169 => 64,  165 => 62,  163 => 52,  155 => 50,  153 => 49,  150 => 48,  147 => 46,  144 => 37,  142 => 36,  136 => 34,  130 => 32,  128 => 31,  124 => 29,  120 => 27,  118 => 26,  115 => 25,  113 => 24,  110 => 23,  107 => 21,  104 => 20,  99 => 18,  93 => 114,  90 => 113,  88 => 20,  81 => 19,  79 => 18,  75 => 16,  69 => 14,  61 => 12,  58 => 11,  47 => 9,  43 => 8,  37 => 7,  31 => 3,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\header-layout.html.twig");
    }
}
