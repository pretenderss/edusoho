<?php

/* player/play.html.twig */
class __TwigTemplate_c9c5a5dc2248349c416b2b6a7afd17dd7571989a9210f17dab7038ae9be62093 extends Twig_Template
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
        echo "<meta content=\"yes\" name=\"apple-mobile-web-app-capable\" />
<meta content=\"black\" name=\"apple-mobile-web-app-status-bar-style\" />
<meta content=\"telephone=no\" name=\"format-detection\" />

";
        // line 5
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient() && ($context["isEncryptionPlus"] ?? null))) {
            // line 6
            echo "  <div class=\"\"><br>&nbsp;&nbsp;&nbsp;&nbsp;";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.not_support_cloud_video", array("%mobileUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile")));
            echo "</div>
";
        } else {
            // line 8
            echo "  ";
            if (((array_key_exists("file", $context)) ? (_twig_default_filter(($context["file"] ?? null), null)) : (null))) {
                // line 9
                echo "    ";
                if (((($this->getAttribute(($context["file"] ?? null), "storage", array()) == "cloud") && twig_in_filter($this->getAttribute(($context["file"] ?? null), "type", array()), array(0 => "ppt", 1 => "document", 2 => "video"))) && ($this->getAttribute(($context["file"] ?? null), "convertStatus", array()) == "error"))) {
                    // line 10
                    echo "      <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.cloud.file.convert_failed_tips"), "html", null, true);
                    echo "</div>
      ";
                } elseif (((($this->getAttribute(                // line 11
($context["file"] ?? null), "storage", array()) == "cloud") && twig_in_filter($this->getAttribute(($context["file"] ?? null), "type", array()), array(0 => "ppt", 1 => "document", 2 => "video"))) && ($this->getAttribute(($context["file"] ?? null), "convertStatus", array()) != "success"))) {
                    // line 12
                    echo "      <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.cloud.file.converting_tips"), "html", null, true);
                    echo "</div>
    ";
                } else {
                    // line 14
                    echo "      <div style=\"position:absolute;top:0;bottom:0;left:0;right:0;text-align:center;\">
        <div id=\"lesson-video-content\"
          data-disable-mode-selection=\"";
                    // line 16
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["context"] ?? null), "disableModeSelection", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "disableModeSelection", array()), false)) : (false)), "html", null, true);
                    echo "\"
          data-content=\"";
                    // line 17
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["context"] ?? null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "content", array()), "")) : ("")), "html", null, true);
                    echo "\"
          data-user-id=\"";
                    // line 18
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array()), 0)) : (0)), "html", null, true);
                    echo "\"
          data-user-name=\"";
                    // line 19
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), "")) : ("")), "html", null, true);
                    echo "\"
          data-file-global-id=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? null), "globalId", array()), "html", null, true);
                    echo "\"
          data-file-id=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? null), "id", array()), "html", null, true);
                    echo "\"
          data-file-type=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["file"] ?? null), "type", array()), "html", null, true);
                    echo "\"
          data-file-length=\"";
                    // line 23
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["file"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["file"] ?? null), "length", array()), 0)) : (0)), "html", null, true);
                    echo "\"
          data-url=\"";
                    // line 24
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\"
          data-video-header-length=\"";
                    // line 25
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["context"] ?? null), "videoHeaderLength", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "videoHeaderLength", array()), 0)) : (0)), "html", null, true);
                    echo "\"
          data-video-h5=\"";
                    // line 26
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_h5_enable"), 1), "html", null, true);
                    echo "\"
          data-enable-playback-rates=\"";
                    // line 27
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.enable_playback_rates"), false), "html", null, true);
                    echo "\"
          data-player=\"";
                    // line 28
                    echo twig_escape_filter($this->env, ($context["player"] ?? null), "html", null, true);
                    echo "\"
          data-agentInWhiteList=\"";
                    // line 29
                    echo twig_escape_filter($this->env, ($context["agentInWhiteList"] ?? null), "html", null, true);
                    echo "\"
          data-autoplay=\"";
                    // line 30
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["context"] ?? null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "autoplay", array()), $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_auto_play", true))) : ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_auto_play", true))), "html", null, true);
                    echo "\"
          ";
                    // line 31
                    if ((( !(($this->getAttribute($this->getAttribute(($context["file"] ?? null), "convertParams", array(), "any", false, true), "hasVideoWatermark", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["file"] ?? null), "convertParams", array(), "any", false, true), "hasVideoWatermark", array()), 0)) : (0)) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark") > 0)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark_image"))) {
                        // line 32
                        echo "            data-watermark=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_watermark_image"), null), "html", null, true);
                        echo "\"
          ";
                    }
                    // line 34
                    echo "          ";
                    if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.cloud_access_key")) {
                        // line 35
                        echo "            data-access-key=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.cloud_access_key"), "html", null, true);
                        echo "\"
          ";
                    }
                    // line 37
                    echo "          ";
                    if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_fingerprint") && $this->getAttribute(($context["app"] ?? null), "user", array()))) {
                        // line 38
                        echo "            data-fingerprint=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFingerprint(), "html", null, true);
                        echo "\"
            data-fingerprint-src=\"";
                        // line 39
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\"
            data-fingerprint-time=\"";
                        // line 40
                        echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_fingerprint_time"), 0.5) * 1000), "html", null, true);
                        echo "\"
          ";
                    }
                    // line 42
                    echo "          ";
                    if ((($context["player"] ?? null) == "balloon-cloud-video-player")) {
                        // line 43
                        echo "            class=\"ballon-video-player\"
          ";
                    } elseif (($this->getAttribute(                    // line 44
($context["file"] ?? null), "type", array()) == "audio")) {
                        // line 45
                        echo "            class=\"local-video-player local-audio-player\"
          ";
                    } else {
                        // line 47
                        echo "            class=\"local-video-player\"
          ";
                    }
                    // line 49
                    echo "          ";
                    if (((($this->getAttribute(($context["context"] ?? null), "hideQuestion", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "hideQuestion", array()), 0)) : (0)) == 0)) {
                        // line 50
                        echo "            data-markerurl=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_question_markers_show", array("mediaId" => $this->getAttribute(($context["file"] ?? null), "id", array()))), "html", null, true);
                        echo "\"
            data-finish-question-marker-url=\"";
                        // line 51
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_question_marker_finish");
                        echo "\"
          ";
                    }
                    // line 53
                    echo "          ";
                    if (($this->getAttribute(($context["context"] ?? null), "subtitles", array(), "any", true, true) && ((($this->getAttribute(($context["context"] ?? null), "hideSubtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "hideSubtitle", array()), 0)) : (0)) == 0))) {
                        // line 54
                        echo "            data-subtitles=\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["context"] ?? null), "subtitles", array())), "html", null, true);
                        echo "\"
          ";
                    }
                    // line 56
                    echo "          data-timelimit=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["context"] ?? null), "watchTimeLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "watchTimeLimit", array()), "")) : ("")), "html", null, true);
                    echo "\"
          data-starttime=\"";
                    // line 57
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["context"] ?? null), "starttime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "starttime", array()), "")) : ("")), "html", null, true);
                    echo "\"
          data-lesson-id=\"";
                    // line 58
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["context"] ?? null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "lessonId", array()), 0)) : (0)), "html", null, true);
                    echo "\"
          style=\"height:100%\"
        ></div>
      </div>
      ";
                    // line 62
                    if (($context["cloudSdk"] ?? null)) {
                        // line 63
                        echo "        <script src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl(($context["cloudSdk"] ?? null)), "html", null, true);
                        echo "\"></script>
      ";
                    }
                    // line 65
                    echo "      ";
                    $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/base.js", 1 => "app/js/common.js", 2 => "app/js/player/index.js"), 1000);
                    // line 66
                    echo "    ";
                }
                // line 67
                echo "    ";
                $this->loadTemplate("script_boot.html.twig", "player/play.html.twig", 67)->display($context);
                // line 68
                echo "  ";
            } else {
                // line 69
                echo "    <div class=\"\"><br>&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.cloud.file.not_find_tips"), "html", null, true);
                echo "</div>
  ";
            }
        }
        // line 72
        echo "

";
    }

    public function getTemplateName()
    {
        return "player/play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 72,  224 => 69,  221 => 68,  218 => 67,  215 => 66,  212 => 65,  206 => 63,  204 => 62,  197 => 58,  193 => 57,  188 => 56,  182 => 54,  179 => 53,  174 => 51,  169 => 50,  166 => 49,  162 => 47,  158 => 45,  156 => 44,  153 => 43,  150 => 42,  145 => 40,  141 => 39,  136 => 38,  133 => 37,  127 => 35,  124 => 34,  118 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 14,  46 => 12,  44 => 11,  39 => 10,  36 => 9,  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "player/play.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\player\\play.html.twig");
    }
}
