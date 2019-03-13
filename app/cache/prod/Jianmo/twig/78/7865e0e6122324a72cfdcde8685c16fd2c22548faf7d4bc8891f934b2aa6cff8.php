<?php

/* script_boot.html.twig */
class __TwigTemplate_56ad535e60eac40d6f596eac89dbf518ab3b2c2e9bf5cd9d8c2835369ec2f332 extends Twig_Template
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
        echo "<script>
  if (typeof app === 'undefined') {
      var app = {};
  }
  app.version = '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("/"), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->basePath(), "html", null, true);
        echo "';
  app.theme = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';

  ";
        // line 10
        $context["crontabNextExecutedTime"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getNextExecutedTime();
        // line 11
        echo "  ";
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.disable_web_crontab", 0) && (($context["crontabNextExecutedTime"] ?? null) > 0))) {
            // line 12
            echo "    ";
            if ((twig_date_converter($this->env, twig_date_format_filter($this->env, ($context["crontabNextExecutedTime"] ?? null), "Y-m-d H:i:s")) < twig_date_converter($this->env))) {
                // line 13
                echo "      app.scheduleCrontab = '";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crontab_web");
                echo "';
    ";
            }
            // line 15
            echo "  ";
        }
        // line 16
        echo "
  var CLOUD_FILE_SERVER = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_file_server", ""), "html", null, true);
        echo "\"; 

  app.config = ";
        // line 19
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.renren_key", ""))), "loading_img_path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/loading.gif")));
        // line 29
        echo ";

  app.arguments = {};
  ";
        // line 32
        if (array_key_exists("script_controller", $context)) {
            // line 33
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, ($context["script_controller"] ?? null), "html", null, true);
            echo "';
  ";
        }
        // line 35
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 36
            echo "    app.arguments = ";
            echo twig_jsonencode_filter(($context["script_arguments"] ?? null));
            echo ";
  ";
        }
        // line 38
        echo "  
  app.scripts = ";
        // line 39
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->exportScripts(), null));
        echo ";

  app.fileSingleSizeLimit = ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.file_single_size_limit", 10), "html", null, true);
        echo ";
  app.uploadUrl = '";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudPlayerSdkUrl = '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("player"), "html", null, true);
        echo "';
  app.cloudPlayServer = '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_play_server", ""), "html", null, true);
        echo "';
  app.cloudVideoPlayerSdkUrl = '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("video"), "html", null, true);
        echo "';
  app.cloudOldUploaderSdkUrl = '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("old_uploader"), "html", null, true);
        echo "';
  app.cloudOldDocumentSdkUrl = '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("old_document"), "html", null, true);
        echo "';
  app.lang = '";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()), "html", null, true);
        echo "';
</script>

";
        // line 53
        $this->loadTemplate("script/translation.html.twig", "script_boot.html.twig", 53)->display($context);
        // line 54
        $this->loadTemplate("js_loader.html.twig", "script_boot.html.twig", 54)->display($context);
        // line 55
        echo "
<script type=\"text/javascript\">
  window.seajsBoot && window.seajsBoot();
</script>
";
    }

    public function getTemplateName()
    {
        return "script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  143 => 54,  141 => 53,  135 => 50,  131 => 49,  127 => 48,  123 => 47,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  94 => 39,  91 => 38,  85 => 36,  82 => 35,  76 => 33,  74 => 32,  69 => 29,  67 => 19,  62 => 17,  59 => 16,  56 => 15,  50 => 13,  47 => 12,  44 => 11,  42 => 10,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "script_boot.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\script_boot.html.twig");
    }
}
