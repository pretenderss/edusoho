<?php

/* material-lib/web/widget/thumbnail.html.twig */
class __TwigTemplate_39e9371ae476f4b0c77fb6665dbe8ca9b5cd2008f2af966a3ee021478aa0e5f1 extends Twig_Template
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
        echo "<input class=\"batch-item\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\"
    data-link-count=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "usedCount", array()), "html", null, true);
        echo "\"
    data-file-name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "filename", array()), "html", null, true);
        echo "\" style=\"display:none;\">
";
        // line 4
        if ((($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "local") || ((($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud") && twig_in_filter($this->getAttribute(($context["uploadFile"] ?? null), "type", array()), array(0 => "video", 1 => "ppt", 2 => "document"))) && ($this->getAttribute(($context["uploadFile"] ?? null), "convertStatus", array()) != "success")))) {
            // line 5
            echo "  <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute(($context["uploadFile"] ?? null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uploadFile"] ?? null), "thumbnail", array()), (("assets/img/default/cloud_" . $this->getAttribute(($context["uploadFile"] ?? null), "type", array())) . ".png"))) : ((("assets/img/default/cloud_" . $this->getAttribute(($context["uploadFile"] ?? null), "type", array())) . ".png")))), "html", null, true);
            echo "\">
";
        } else {
            // line 7
            echo "  <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute(($context["uploadFile"] ?? null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uploadFile"] ?? null), "thumbnail", array()), (("assets/img/default/cloud_" . $this->getAttribute(($context["uploadFile"] ?? null), "type", array())) . ".png"))) : ((("assets/img/default/cloud_" . $this->getAttribute(($context["uploadFile"] ?? null), "type", array())) . ".png")))), "html", null, true);
            echo "\">
";
        }
        // line 9
        echo "
<div class=\"mask\">
  <div class=\"icon-operation\">
    <i
      class=\"glyphicon glyphicon-star js-collect-btn left ";
        // line 13
        if ((($this->getAttribute(($context["collections"] ?? null), $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collections"] ?? null), $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), array(), "array"), 0)) : (0))) {
            echo " material-collection ";
        }
        echo "\"
      data-toggle=\"tooltip\"
      data-placement=\"bottom\"
      title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.collect"), "html", null, true);
        echo "\"
      data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_save_collection", array("fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()))), "html", null, true);
        echo "\"
    ></i>
    <i
      href=\"javascript:;\"
      class=\"glyphicon glyphicon-option-vertical\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
    ></i>
    <ul class=\"dropdown-menu\">
      ";
        // line 27
        if (($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
            // line 28
            echo "        <li>
          <a href=\"javascript:;\" class=\"js-detail-btn\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_file_detail", array("fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()))), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-pencil prm\"></i>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.edit"), "html", null, true);
            echo "
          </a>
        </li>
      ";
        }
        // line 34
        echo "
      ";
        // line 35
        if ((($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud") && ($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())))) {
            // line 36
            echo "        <li>
          <a href=\"javascript:;\" class=\"js-detail-btn\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-url=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_file_detail", array("fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()))), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-eye-open prm\"></i>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.view"), "html", null, true);
            echo "
          </a>
        </li>
      ";
        }
        // line 42
        echo "
      ";
        // line 43
        if ((($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud") && ($this->getAttribute(($context["uploadFile"] ?? null), "type", array()) == "video"))) {
            // line 44
            echo "        <li>
          <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_subtitle_manage", array("mediaId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), "goto" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_browsing"))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">
            <i class=\"glyphicon glyphicon-cog prm\"></i>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.subtitle_manage"), "html", null, true);
            echo "
          </a>
        </li>
      ";
        }
        // line 50
        echo "
      <li>
        <a href=\"javascript:;\"  data-url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_download", array("fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"js-download-btn\" data-toggle=\"tooltip\" data-placement=\"bottom\" >
          <i class=\"glyphicon glyphicon-save prm\"></i>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.download"), "html", null, true);
        echo "
        </a>
      </li>

      ";
        // line 57
        if (($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
            // line 58
            echo "
        ";
            // line 59
            if ($this->getAttribute(($context["uploadFile"] ?? null), "isPublic", array())) {
                // line 60
                echo "          <li>
            <a href=\"javascript:;\" class=\"js-unshare-btn\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-url=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_unshare", array("fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()))), "html", null, true);
                echo "\">
              <i class=\"es-icon es-icon-share prm\"></i>";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.cancel_share"), "html", null, true);
                echo "
            </a>
          </li>
        ";
            } else {
                // line 66
                echo "            <li>
            <a href=\"javascript:;\" class=\"js-share-btn\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-file-id=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_batch_share");
                echo "\">
              <i class=\"es-icon es-icon-share prm\"></i>";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.share"), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            // line 72
            echo "
        ";
            // line 73
            if ((($context["source"] ?? null) != "public")) {
                // line 74
                echo "          <li>
            <a href=\"javascript:;\"  class=\"js-delete-btn\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-url=\"";
                // line 75
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_delete_modal_show");
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), "html", null, true);
                echo "\">
              <i class=\"glyphicon glyphicon-trash prm\"></i>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.delete"), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            // line 80
            echo "      ";
        }
        // line 81
        echo "    </ul>
  </div>
  <div class=\"btn-operation\">
      <!-- 选择一种状态 -->

      <a class=\"btn btn-info\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_file_preview", array("fileId" => $this->getAttribute(($context["uploadFile"] ?? null), "id", array()))), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.preview"), "html", null, true);
        echo "
      </a>

      ";
        // line 89
        if (($this->getAttribute(($context["uploadFile"] ?? null), "convertStatus", array()) == "error")) {
            // line 90
            echo "        ";
            if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.debug"), 0)) {
                // line 91
                echo "        <a class=\"js-reconvert-btn btn btn-warning\" data-url='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_reconvert", array("globalId" => $this->getAttribute(($context["uploadFile"] ?? null), "globalId", array()))), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.convert_again"), "html", null, true);
                echo "</a>
        ";
            }
            // line 93
            echo "      ";
        }
        // line 94
        echo "
  </div>
  <div class=\"time\">
    ";
        // line 97
        if ((twig_in_filter($this->getAttribute(($context["uploadFile"] ?? null), "type", array()), array(0 => "video", 1 => "audio")) && ($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud"))) {
            // line 98
            echo "      ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "length", array()), "i:s"), "html", null, true);
            echo "
    ";
        } else {
            // line 100
            echo "      ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "ext", array())), "html", null, true);
            echo "
    ";
        }
        // line 102
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "material-lib/web/widget/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 102,  251 => 100,  245 => 98,  243 => 97,  238 => 94,  235 => 93,  227 => 91,  224 => 90,  222 => 89,  214 => 86,  207 => 81,  204 => 80,  197 => 76,  191 => 75,  188 => 74,  186 => 73,  183 => 72,  176 => 68,  170 => 67,  167 => 66,  160 => 62,  156 => 61,  153 => 60,  151 => 59,  148 => 58,  146 => 57,  139 => 53,  135 => 52,  131 => 50,  124 => 46,  120 => 45,  117 => 44,  115 => 43,  112 => 42,  105 => 38,  101 => 37,  98 => 36,  96 => 35,  93 => 34,  86 => 30,  82 => 29,  79 => 28,  77 => 27,  64 => 17,  60 => 16,  52 => 13,  46 => 9,  40 => 7,  34 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "material-lib/web/widget/thumbnail.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\material-lib\\web\\widget\\thumbnail.html.twig");
    }
}
