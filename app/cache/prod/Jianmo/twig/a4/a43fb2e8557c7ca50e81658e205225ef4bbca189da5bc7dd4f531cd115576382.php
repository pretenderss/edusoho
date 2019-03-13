<?php

/* course/course-show.html.twig */
class __TwigTemplate_37b079f199576c719171fc81cafe5cc286b1a0ff3c126cfe626fc02b87bd2045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "course/course-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'format_detection' => array($this, 'block_format_detection'),
            'full_content' => array($this, 'block_full_content'),
            'detail_content' => array($this, 'block_detail_content'),
            'member_expired' => array($this, 'block_member_expired'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/easy-pie-chart/dist/jquery.easypiechart.js", 1 => "libs/excanvas-compiled.js", 2 => "libs/jquery-countdown.js", 3 => "app/js/courseset/show/index.js"));
        // line 5
        $context["course_set"] = twig_array_merge($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), array("tags" => "tags"));
        // line 6
        $context["bodyClass"] = "course-dashboard-page";
        // line 7
        $context["description"] = (($this->getAttribute(($context["course"] ?? null), "summary", array())) ? ($this->getAttribute(($context["course"] ?? null), "summary", array())) : ($this->getAttribute(($context["course_set"] ?? null), "summary", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course_set"] ?? null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_keywords($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course_set"] ?? null), "tags", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
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
            $this->displayParentBlock("keywords", $context, $blocks);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 15
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml(($context["description"] ?? null)), ""), 100);
    }

    // line 16
    public function block_format_detection($context, array $blocks = array())
    {
        echo "telephone=no";
    }

    // line 17
    public function block_full_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["eventReportParams"] = array("user-id" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array()), 0)) : (0)));
        // line 19
        echo "    ";
        $this->loadTemplate("event_report.html.twig", "course/course-show.html.twig", 19)->display(array_merge($context, array("eventName" => "course.view", "subjectType" => "course", "subjectId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "eventReportParams" => ($context["eventReportParams"] ?? null))));
        // line 20
        echo "
  ";
        // line 21
        $context["previewAs"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "previewAs"), "method");
        // line 22
        echo "  ";
        $context["defaultMetas"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseShowMetas(((((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null))) ? ("member") : ("guest")));
        // line 23
        echo "  ";
        $context["metas"] = ((array_key_exists("metas", $context)) ? (_twig_default_filter(($context["metas"] ?? null), ($context["defaultMetas"] ?? null))) : (($context["defaultMetas"] ?? null)));
        // line 24
        echo "  ";
        $context["route_params"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
        // line 25
        echo "
  ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute(($context["metas"] ?? null), "header", array()), array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()), "course" => ($context["course"] ?? null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null)))));
        echo "

  ";
        // line 28
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("marketing.tool", array("type" => "course", "targetId" => $this->getAttribute(($context["course"] ?? null), "id", array())));
        echo "

  <div class=\"container cd-container\">
    <div class=\"row cd-row\">
      <div class=\"col-lg-9 col-md-8 course-detail-content\">
        ";
        // line 33
        $this->loadTemplate("course/announcement/block.html.twig", "course/course-show.html.twig", 33)->display(array_merge($context, array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))));
        // line 34
        echo "
        ";
        // line 35
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.show.content.section", array("course" => ($context["course"] ?? null)));
        echo "

        <section class=\"es-section\">
          <div class=\"nav-btn-tab\">

\t          ";
        // line 40
        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null))) {
            // line 41
            echo "\t\t          ";
            $this->loadTemplate("course/header/nav-tab-for-member.html.twig", "course/course-show.html.twig", 41)->display($context);
            // line 42
            echo "\t          ";
        } else {
            // line 43
            echo "\t\t          ";
            $this->loadTemplate("course/header/nav-tab-for-guest.html.twig", "course/course-show.html.twig", 43)->display($context);
            // line 44
            echo "\t          ";
        }
        // line 45
        echo "
            ";
        // line 46
        if (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((array_key_exists("isCourseTeacher", $context)) ? (_twig_default_filter(($context["isCourseTeacher"] ?? null), false)) : (false)))) {
            // line 47
            echo "              <div class=\"btnbar hidden-xs\">
                <a href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\"
                  class=\"btn btn-link\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.announcement"), "html", null, true);
            echo "
                </a>
              </div>
            ";
        }
        // line 56
        echo "
          </div>
          ";
        // line 58
        $this->displayBlock('detail_content', $context, $blocks);
        // line 61
        echo "        </section>

        ";
        // line 63
        $this->loadTemplate("course/block/related-courses.html.twig", "course/course-show.html.twig", 63)->display(array_merge($context, array("courseSetId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))));
        // line 64
        echo "
      </div>

      <div class=\"col-lg-3 col-md-4 course-sidebar\">

        ";
        // line 69
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.show.sidebar", array("course" => ($context["course"] ?? null)));
        echo "

        ";
        // line 72
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["metas"] ?? null), "widgets", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["widget"]) {
            // line 73
            echo "          ";
            if ((((((($this->getAttribute($context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "classroom") && ($this->getAttribute(($context["course"] ?? null), "parentId", array()) > 0)) || (((($this->getAttribute(            // line 74
$context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "course") && ($this->getAttribute(($context["course"] ?? null), "parentId", array()) == 0))) || ((($this->getAttribute(            // line 75
$context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "all"))) {
                // line 76
                echo "            ";
                if (($this->getAttribute($context["widget"], "renderType", array()) == "render")) {
                    // line 77
                    echo "              ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($context["widget"], "uri", array()), array("course" => ($context["course"] ?? null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), array())) : (array())))));
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 78
$context["widget"], "renderType", array()) == "include")) {
                    // line 79
                    echo "              ";
                    $this->loadTemplate($this->getAttribute($context["widget"], "uri", array()), "course/course-show.html.twig", 79)->display(array_merge($context, array("course" => ($context["course"] ?? null))));
                    // line 80
                    echo "            ";
                }
                // line 81
                echo "          ";
            }
            // line 82
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "      </div>

    </div>
  </div>

  ";
        // line 88
        $this->displayBlock('member_expired', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->loadTemplate("common/weixin-share.html.twig", "course/course-show.html.twig", 96)->display(array_merge($context, array("title" => $this->getAttribute(        // line 97
($context["course_set"] ?? null), "title", array()), "desc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 98
($context["course_set"] ?? null), "summary", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 99
($context["app"] ?? null), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl((($this->getAttribute($this->getAttribute(        // line 100
($context["course_set"] ?? null), "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["course_set"] ?? null), "cover", array(), "any", false, true), "large", array()))) : ("")), "course.png"))));
        // line 102
        echo "
  ";
        // line 103
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.bottom.extension", array("course" => ($context["course"] ?? null)));
        echo "
";
    }

    // line 58
    public function block_detail_content($context, array $blocks = array())
    {
        // line 59
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($this->getAttribute($this->getAttribute(($context["metas"] ?? null), "tabs", array()), ($context["tab"] ?? null), array(), "array"), "content", array()), array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()), "course" => ($context["course"] ?? null), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null)))));
        echo "
          ";
    }

    // line 88
    public function block_member_expired($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isMemberExpired(((array_key_exists("course", $context)) ? (_twig_default_filter(($context["course"] ?? null), null)) : (null)), ((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null)))) {
            // line 90
            echo "      <div class=\"member-expire\">
        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_member_expired", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\"></a>
      </div>
    ";
        }
        // line 94
        echo "  ";
    }

    public function getTemplateName()
    {
        return "course/course-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 94,  321 => 91,  318 => 90,  315 => 89,  312 => 88,  305 => 59,  302 => 58,  296 => 103,  293 => 102,  291 => 100,  290 => 99,  289 => 98,  288 => 97,  287 => 96,  284 => 95,  282 => 88,  275 => 83,  261 => 82,  258 => 81,  255 => 80,  252 => 79,  250 => 78,  245 => 77,  242 => 76,  240 => 75,  239 => 74,  237 => 73,  219 => 72,  214 => 69,  207 => 64,  205 => 63,  201 => 61,  199 => 58,  195 => 56,  188 => 52,  182 => 49,  178 => 47,  176 => 46,  173 => 45,  170 => 44,  167 => 43,  164 => 42,  161 => 41,  159 => 40,  151 => 35,  148 => 34,  146 => 33,  138 => 28,  133 => 26,  130 => 25,  127 => 24,  124 => 23,  121 => 22,  119 => 21,  116 => 20,  113 => 19,  110 => 18,  107 => 17,  101 => 16,  95 => 15,  54 => 12,  51 => 11,  43 => 9,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/course-show.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\course-show.html.twig");
    }
}
