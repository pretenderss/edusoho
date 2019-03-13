<?php

/* courseset-manage/header.html.twig */
class __TwigTemplate_826480cb5af9bb32bb4eb3a5924a15696220a31d99454a56286b37aa39363c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'unfold' => array($this, 'block_unfold'),
            'coursesetImg' => array($this, 'block_coursesetImg'),
            'coursesetTitle' => array($this, 'block_coursesetTitle'),
            'courseType' => array($this, 'block_courseType'),
            'btn' => array($this, 'block_btn'),
            'courseTitle' => array($this, 'block_courseTitle'),
            'fold' => array($this, 'block_fold'),
            'close' => array($this, 'block_close'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "courseset-manage/header.html.twig", 1);
        // line 2
        $this->displayBlock('js', $context, $blocks);
        // line 5
        $context["basepath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array())));
        // line 6
        echo "
<div class=\"courseset-manage-header ";
        // line 7
        if (((((array_key_exists("couserNum", $context)) ? (_twig_default_filter(($context["couserNum"] ?? null), 0)) : (0)) > 1) && (((array_key_exists("foldType", $context)) ? (_twig_default_filter(($context["foldType"] ?? null), 0)) : (0)) == 1))) {
            echo "courseset-manage-header--hide ";
        }
        echo "js-origin-header clearfix\">
  ";
        // line 8
        $this->displayBlock('unfold', $context, $blocks);
        // line 13
        echo "  <div class=\"clearfix js-origin-header-content ";
        if (((((array_key_exists("couserNum", $context)) ? (_twig_default_filter(($context["couserNum"] ?? null), 0)) : (0)) > 1) && (((array_key_exists("foldType", $context)) ? (_twig_default_filter(($context["foldType"] ?? null), 0)) : (0)) == 1))) {
            echo "courseset-manage-opacity ";
        }
        echo "\">
    ";
        // line 15
        echo "    ";
        $this->displayBlock('coursesetImg', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $context["publishUrl"] = ((array_key_exists("publishUrl", $context)) ? (_twig_default_filter(($context["publishUrl"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_publish", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_publish", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array())))));
        // line 20
        echo "
    ";
        // line 22
        echo "    ";
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) == "closed")) {
            // line 23
            echo "      <span class=\"course-publish-status course-publish-status--closed\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.closed"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 24
($context["courseSet"] ?? null), "status", array()) == "draft")) {
            // line 25
            echo "      <span class=\"course-publish-status course-publish-status--unpublished\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.unpublished"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 26
($context["courseSet"] ?? null), "status", array()) == "published")) {
            // line 27
            echo "      ";
            if (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()) == "serialized")) {
                // line 28
                echo "        <span class=\"course-publish-status course-publish-status--published\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.serialized"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 29
($context["courseSet"] ?? null), "serializeMode", array()) == "finished")) {
                // line 30
                echo "        <span class=\"course-publish-status course-publish-status--unpublished\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.finished"), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 32
                echo "        <span class=\"course-publish-status course-publish-status--published\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.published"), "html", null, true);
                echo "</span>
      ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    <div class=\"courseset-manage-header-info\">
      <div class=\"courseset-manage-header-info__title text-overflow\" ";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array())) > 21)) {
            echo "data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo "\" data-container=\"body\" ";
        }
        echo ">
        ";
        // line 38
        $this->displayBlock('coursesetTitle', $context, $blocks);
        // line 41
        echo "      </div>
      ";
        // line 42
        $this->displayBlock('courseType', $context, $blocks);
        // line 47
        echo "      <div class=\"courseset-manage-header-info__price color-danger\">
        ";
        // line 48
        if (($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array()) == $this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()))) {
            // line 49
            echo "          ";
            $this->loadTemplate("common/price.html.twig", "courseset-manage/header.html.twig", 49)->display(array_merge($context, array("productPrice" => $this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array()))));
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "          ";
            $this->loadTemplate("common/price.html.twig", "courseset-manage/header.html.twig", 51)->display(array_merge($context, array("productPrice" => $this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array()))));
            // line 52
            echo "          <span class=\"cd-text-sm\">～</span>
          ";
            // line 53
            $this->loadTemplate("common/price.html.twig", "courseset-manage/header.html.twig", 53)->display(array_merge($context, array("productPrice" => $this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()))));
            // line 54
            echo "        ";
        }
        // line 55
        echo "      </div>
    </div>

    <div class=\"courseset-manage-header-btn\">
      ";
        // line 59
        $this->displayBlock('btn', $context, $blocks);
        // line 69
        echo "
    </div>

    <div class=\"courseset-manage-header-data hidden-xs\">
      <span class=\"cd-text-medium\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.student_member"), "html", null, true);
        echo "</span>
      <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()))) : ("")), "html", null, true);
        echo " </span></div>
    </div>

    ";
        // line 77
        if ( !$this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute(($context["courseSet"] ?? null), "id", array()))) {
            // line 78
            echo "      <div class=\"courseset-manage-header-data hidden-xs\">
        <span class=\"cd-text-medium\">";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan"), "html", null, true);
            echo "</span>
        <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">";
            // line 80
            $this->displayBlock('courseTitle', $context, $blocks);
            echo "</span></div>
      </div>
    ";
        }
        // line 83
        echo "  </div>
</div>


";
        // line 87
        $this->displayBlock('fold', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('close', $context, $blocks);
    }

    // line 2
    public function block_js($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/courseset-manage/header/index.js"));
    }

    // line 8
    public function block_unfold($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if (((((array_key_exists("couserNum", $context)) ? (_twig_default_filter(($context["couserNum"] ?? null), 0)) : (0)) > 1) && (((array_key_exists("foldType", $context)) ? (_twig_default_filter(($context["foldType"] ?? null), 0)) : (0)) == 1))) {
            // line 10
            echo "      <div class=\"courseset-manage-hide js-new-header\"><a class=\"js-show-courseset cd-link-assist\" href=\"javascript:;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
            echo "<i class=\"es-icon es-icon-xiala\"></i></a></div>
    ";
        }
        // line 12
        echo "  ";
    }

    // line 15
    public function block_coursesetImg($context, array $blocks = array())
    {
        // line 16
        echo "      <img class=\"courseset-manage-header__img\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(($context["courseSet"] ?? null), "large"), "courseSet.png"), "html", null, true);
        echo "\" /> <!-- courseSet.largePicture -->
    ";
    }

    // line 38
    public function block_coursesetTitle($context, array $blocks = array())
    {
        // line 39
        echo "          <span class=\"cd-dark-major\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</span>
        ";
    }

    // line 42
    public function block_courseType($context, array $blocks = array())
    {
        // line 43
        echo "        ";
        if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute(($context["courseSet"] ?? null), "id", array()))) {
            // line 44
            echo "          <span class=\"cd-tag cd-tag-orange\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseType"), $this->getAttribute(($context["courseSet"] ?? null), "type", array()), array(), "array"), "html", null, true);
            echo "</span>
        ";
        }
        // line 46
        echo "      ";
    }

    // line 59
    public function block_btn($context, array $blocks = array())
    {
        // line 60
        echo "        ";
        // line 61
        echo "        ";
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) == "published")) {
            // line 62
            echo "          <a class=\"cd-btn cd-btn-primary\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["basepath"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.watch"), "html", null, true);
            echo "</a>
        ";
        }
        // line 64
        echo "
        ";
        // line 65
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) != "published")) {
            // line 66
            echo "          <a class=\"cd-btn cd-btn-default\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()), "previewAs" => "guest")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.preview.course"), "html", null, true);
            echo "</a><button class=\"cd-btn cd-btn-primary cd-ml16 js-courseset-publish-btn\" id=\"step-4\"  data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_publish", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.publish"), "html", null, true);
            echo "</button>
        ";
        }
        // line 68
        echo "      ";
    }

    // line 80
    public function block_courseTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((array_key_exists("couserNum", $context)) ? (_twig_default_filter(($context["couserNum"] ?? null), 0)) : (0)), "html", null, true);
    }

    // line 87
    public function block_fold($context, array $blocks = array())
    {
        // line 88
        echo "  ";
        if (((((array_key_exists("couserNum", $context)) ? (_twig_default_filter(($context["couserNum"] ?? null), 0)) : (0)) > 1) && (((array_key_exists("foldType", $context)) ? (_twig_default_filter(($context["foldType"] ?? null), 0)) : (0)) == 1))) {
            // line 89
            echo "    <div class=\"text-center cd-dark-assist courseset-manage-fold js-shrink-item cd-mv8\"><a class=\"js-shrink-courseset cd-link-assist hidden\" href=\"javascript:;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.close_btn"), "html", null, true);
            echo "<i class=\"es-icon es-icon-xiala\"></i></a></div>
  ";
        }
    }

    // line 93
    public function block_close($context, array $blocks = array())
    {
        // line 94
        echo "  ";
        if (($this->getAttribute(($context["courseSet"] ?? null), "status", array()) == "closed")) {
            // line 95
            echo "    <div class=\"cd-alert cd-alert-warning cd-mt24\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.remove_students_tips"), "html", null, true);
            echo "</div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "courseset-manage/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 95,  320 => 94,  317 => 93,  309 => 89,  306 => 88,  303 => 87,  297 => 80,  293 => 68,  281 => 66,  279 => 65,  276 => 64,  268 => 62,  265 => 61,  263 => 60,  260 => 59,  256 => 46,  250 => 44,  247 => 43,  244 => 42,  237 => 39,  234 => 38,  227 => 16,  224 => 15,  220 => 12,  214 => 10,  211 => 9,  208 => 8,  203 => 3,  200 => 2,  196 => 93,  193 => 92,  191 => 87,  185 => 83,  179 => 80,  175 => 79,  172 => 78,  170 => 77,  164 => 74,  160 => 73,  154 => 69,  152 => 59,  146 => 55,  143 => 54,  141 => 53,  138 => 52,  135 => 51,  132 => 50,  129 => 49,  127 => 48,  124 => 47,  122 => 42,  119 => 41,  117 => 38,  109 => 37,  105 => 35,  102 => 34,  96 => 32,  90 => 30,  88 => 29,  83 => 28,  80 => 27,  78 => 26,  73 => 25,  71 => 24,  66 => 23,  63 => 22,  60 => 20,  58 => 19,  55 => 18,  52 => 15,  45 => 13,  43 => 8,  37 => 7,  34 => 6,  32 => 5,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/header.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\header.html.twig");
    }
}
