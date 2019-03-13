<?php

/* courseset-manage/file/tbody-tr.html.twig */
class __TwigTemplate_e91af4e79868cfe364f6e7b96f06e21f47258d6c57c7fa195a5f4d8a261c451d extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "courseset-manage/file/tbody-tr.html.twig", 1);
        // line 2
        $context["quality"] = "";
        // line 3
        if (twig_in_filter($this->getAttribute(($context["courseSet"] ?? null), "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 4
            echo "  ";
            $context["fileShowUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_file_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array())));
            // line 5
            echo "  ";
            $context["convertUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_file_convert", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array())));
        } else {
            // line 7
            echo "  ";
            $context["fileShowUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_file_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array())));
            // line 8
            echo "  ";
            $context["convertUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_file_convert", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array())));
        }
        // line 10
        echo "
";
        // line 11
        $context["canRetryTranscode"] = ((($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud") && ($this->getAttribute(($context["uploadFile"] ?? null), "type", array()) == "video")) && (twig_in_filter($this->getAttribute(($context["uploadFile"] ?? null), "audioConvertStatus", array()), array(0 => "error", 1 => "none")) || twig_in_filter($this->getAttribute(($context["uploadFile"] ?? null), "convertStatus", array()), array(0 => "error", 1 => "none"))));
        // line 12
        echo "
<tr id=\"upload-file-tr-";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), "html", null, true);
        echo "\" data-role=\"item\" data-convertHash=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "convertHash", array()), "html", null, true);
        echo "\">
  <td><input value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" ></td>
  <td>
    <a class=\"link-dark\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["fileShowUrl"] ?? null), "html", null, true);
        echo "\" target=\"_blank\" rel=\"tooltip\" title data-original-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "filename", array()), "html", null, true);
        echo "\"  >
      ";
        // line 17
        if (($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud")) {
            // line 18
            echo "        <i class=\"glyphicon glyphicon-cloud color-gray\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.cloud_file"), "html", null, true);
            echo "\"></i>
      ";
        }
        // line 20
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute(($context["uploadFile"] ?? null), "filename", array()), 30);
        echo "
    </a>
    ";
        // line 22
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.debug") && ($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud")) && twig_in_filter($this->getAttribute(($context["uploadFile"] ?? null), "type", array()), array(0 => "video", 1 => "ppt", 2 => "document")))) {
            // line 23
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, ($context["convertUrl"] ?? null), "html", null, true);
            echo "\" class=\"convert-file-btn ml5\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.reconvert_btn"), "html", null, true);
            echo "</a>
    ";
        }
        // line 25
        echo "    <br>
    
    ";
        // line 27
        if ((($this->getAttribute(($context["subtitles"] ?? null), $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["subtitles"] ?? null), $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), array(), "array"))) : (""))) {
            // line 28
            echo "      <span class='label label-success mr5 tip'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.subtitle_manage.subtitle"), "html", null, true);
            echo "</span> 
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if (((($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud") && ($this->getAttribute(($context["uploadFile"] ?? null), "type", array()) == "video")) && (($this->getAttribute(($context["courseSet"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "enableAudio", array()), true)) : (true)))) {
            // line 32
            echo "      <span class='label ";
            echo ((($this->getAttribute(($context["uploadFile"] ?? null), "audioConvertStatus", array()) == "success")) ? ("label-success") : ("label-warning"));
            echo " mr5 tip'>";
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("audioConvertStatus", $this->getAttribute(($context["uploadFile"] ?? null), "audioConvertStatus", array()));
            echo "</span>
    ";
        }
        // line 34
        echo "  </td>
  <td>
    ";
        // line 36
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("fileType", $this->getAttribute(($context["uploadFile"] ?? null), "type", array()));
        echo "
  </td>
  <td>";
        // line 38
        echo $context["web_macro"]->getbytesToSize($this->getAttribute(($context["uploadFile"] ?? null), "fileSize", array()));
        echo "</td>
  <td>
    ";
        // line 40
        $context["fileQuotes"] = (($this->getAttribute(($context["filesQuote"] ?? null), $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["filesQuote"] ?? null), $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), array(), "array"), null)) : (null));
        // line 41
        echo "    ";
        if (((($this->getAttribute(($context["uploadFile"] ?? null), "targetType", array()) == "coursematerial") && ($this->getAttribute(($context["uploadFile"] ?? null), "usedCount", array()) <= 1)) || (($this->getAttribute(($context["uploadFile"] ?? null), "targetType", array()) != "coursematerial") && ($this->getAttribute(($context["uploadFile"] ?? null), "usedCount", array()) < 1)))) {
            // line 42
            echo "      <span class=\"label label-default tip\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.use_status.unused"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 44
            echo "      <span class=\"label label-success tip\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.use_status.using"), "html", null, true);
            echo "</span>
    ";
        }
        // line 46
        echo "  </td>
  <td>
    <span class=\"text-sm\">";
        // line 48
        echo $context["web_macro"]->getuser_link((($this->getAttribute(($context["users"] ?? null), $this->getAttribute(($context["uploadFile"] ?? null), "updatedUserId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute(($context["uploadFile"] ?? null), "updatedUserId", array()), array(), "array"), null)) : (null)));
        echo "</span>
    <br>
    <span class=\"color-gray text-sm\">
      ";
        // line 51
        if ( !$this->getAttribute(($context["uploadFile"] ?? null), "updatedTime", array())) {
            // line 52
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "
      ";
        } else {
            // line 54
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "updatedTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "
      ";
        }
        // line 56
        echo "    </span>
  </td>
  <td>
    ";
        // line 59
        if ((($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud") && ($this->getAttribute(($context["uploadFile"] ?? null), "type", array()) == "video"))) {
            // line 60
            echo "      ";
            if (($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "open")) {
                // line 61
                echo "        ";
                $context["goto"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_files", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array())));
                // line 62
                echo "      ";
            } else {
                // line 63
                echo "        ";
                $context["goto"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array())));
                // line 64
                echo "      ";
            }
            // line 65
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_subtitle_manage", array("mediaId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), "goto" => ($context["goto"] ?? null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.subtitle_manage_btn"), "html", null, true);
            echo "</a>
      ";
            // line 66
            if (((($this->getAttribute(($context["courseSet"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "enableAudio", array()), true)) : (true)) && ($context["canRetryTranscode"] ?? null))) {
                // line 67
                echo "        <a href=\"javascript:;\" class=\"convert-file-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_retry_transcode", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.re_try_convert_video_to_audio"), "html", null, true);
                echo "</a>
      ";
            }
            // line 69
            echo "    ";
        }
        // line 70
        echo "  </td>

</tr>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/file/tbody-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 70,  207 => 69,  199 => 67,  197 => 66,  190 => 65,  187 => 64,  184 => 63,  181 => 62,  178 => 61,  175 => 60,  173 => 59,  168 => 56,  162 => 54,  156 => 52,  154 => 51,  148 => 48,  144 => 46,  138 => 44,  132 => 42,  129 => 41,  127 => 40,  122 => 38,  117 => 36,  113 => 34,  105 => 32,  103 => 31,  100 => 30,  94 => 28,  92 => 27,  88 => 25,  80 => 23,  78 => 22,  72 => 20,  66 => 18,  64 => 17,  58 => 16,  53 => 14,  47 => 13,  44 => 12,  42 => 11,  39 => 10,  35 => 8,  32 => 7,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/file/tbody-tr.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\file\\tbody-tr.html.twig");
    }
}
