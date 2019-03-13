<?php

/* layout.html.twig */
class __TwigTemplate_57d34b9cb67ba2e9c1b5399814821c3050411a9178e4ba659cee1336627dbdb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'format_detection' => array($this, 'block_format_detection'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'footer_mobile' => array($this, 'block_footer_mobile'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
            'footer_script' => array($this, 'block_footer_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->

";
        // line 12
        $context["lang"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getLocale", array(), "method");
        // line 13
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 14
        echo "
";
        // line 15
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 16
        $context["themeConfig"] = (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method"), false)) : (false))) ? ($this->getAttribute(($context["currentTheme"] ?? null), "config", array())) : ($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array())));
        // line 17
        $context["maincolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array()), "default")) : ("default"));
        // line 18
        $context["navigationcolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array()), "default")) : ("default"));
        // line 19
        echo "
<html lang=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\" class=\"";
        if ((($context["lang"] ?? null) == "en")) {
            echo "es-en";
        }
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "</title>
  ";
        // line 32
        $this->displayBlock('meta', $context, $blocks);
        // line 44
        echo "

  ";
        // line 46
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 47
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 48
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 51
        echo "
  <!--[if lt IE 9]>
  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-shim.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-sham.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 58
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "
  ";
        // line 63
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 64
        echo "</head>
<body class=\"";
        // line 65
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">

<!--[if lt IE 9]>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/fix-ie.js"), "html", null, true);
        echo "\"></script>
";
        // line 69
        $this->loadTemplate("default/ie8-alert.html.twig", "layout.html.twig", 69)->display($context);
        // line 70
        echo "<![endif]-->

";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('footer_script', $context, $blocks);
        // line 138
        echo "
</body>
</html>";
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
    }

    // line 32
    public function block_meta($context, array $blocks = array())
    {
        // line 33
        echo "    <meta name=\"keywords\"
          content=\"
";
        // line 35
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"description\"
          content=\"";
        // line 37
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"format-detection\"
          content=\"";
        // line 39
        ob_start();
        $this->displayBlock('format_detection', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\"/>
    <meta content=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\"/>
    <meta content=\"";
        // line 42
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->isWechatLoginBind(), 0), "html", null, true);
        echo "\" name=\"wechat_login_bind\"/>
  ";
    }

    // line 35
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 37
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 39
    public function block_format_detection($context, array $blocks = array())
    {
    }

    // line 58
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->loadTemplate("css_loader.html.twig", "layout.html.twig", 59)->display($context);
        // line 60
        echo "    ";
        $this->loadTemplate("default/stylesheet-webpack.html.twig", "layout.html.twig", 60)->display($context);
        // line 61
        echo "  ";
    }

    // line 63
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 65
    public function block_bodyClass($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("es-main-" . ($context["maincolor"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . ($context["navigationcolor"] ?? null)), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? null), "")) : (""))) {
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? null), "html", null, true);
        }
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "  <div class=\"es-wrap\">

    ";
        // line 75
        $this->displayBlock('header', $context, $blocks);
        // line 80
        echo "
    ";
        // line 81
        $this->displayBlock('full_content', $context, $blocks);
        // line 90
        echo "
    ";
        // line 91
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "
    ";
        // line 95
        $this->displayBlock('footer_mobile', $context, $blocks);
        // line 97
        echo "
    ";
        // line 98
        $this->displayBlock('bottom', $context, $blocks);
        // line 99
        echo "  </div>

  ";
        // line 101
        $this->displayBlock('esBar', $context, $blocks);
        // line 106
        echo "
  ";
        // line 107
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 120
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>

  ";
        // line 125
        $context["reward_notify"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->popRewardPointNotify();
        // line 126
        echo "  ";
        if (($context["reward_notify"] ?? null)) {
            // line 127
            echo "    <div class=\"hidden\" id=\"rewardPointNotify\">
      ";
            // line 128
            echo twig_escape_filter($this->env, ($context["reward_notify"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 131
        echo "
";
    }

    // line 75
    public function block_header($context, array $blocks = array())
    {
        // line 76
        echo "      ";
        $this->loadTemplate("site-hint.html.twig", "layout.html.twig", 76)->display($context);
        // line 77
        echo "      ";
        $this->loadTemplate("default/header.html.twig", "layout.html.twig", 77)->display($context);
        // line 78
        echo "      ";
        $this->loadTemplate("default/exception.html.twig", "layout.html.twig", 78)->display($context);
        // line 79
        echo "    ";
    }

    // line 81
    public function block_full_content($context, array $blocks = array())
    {
        // line 82
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 83
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "      </div>

      ";
        // line 88
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 89
        echo "    ";
    }

    // line 82
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
    }

    // line 88
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 91
    public function block_footer($context, array $blocks = array())
    {
        // line 92
        echo "      ";
        $this->loadTemplate("default/footer.html.twig", "layout.html.twig", 92)->display($context);
        // line 93
        echo "    ";
    }

    // line 95
    public function block_footer_mobile($context, array $blocks = array())
    {
        // line 96
        echo "    ";
    }

    // line 98
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 101
    public function block_esBar($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            // line 103
            echo "      ";
            $this->loadTemplate("es-bar/index.html.twig", "layout.html.twig", 103)->display($context);
            // line 104
            echo "    ";
        }
        // line 105
        echo "  ";
    }

    // line 107
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 108
        echo "  
    ";
        // line 109
        $context["cloudConsultPath"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudConsultPath();
        // line 110
        echo "    ";
        if (((array_key_exists("cloudConsultPath", $context)) ? (_twig_default_filter(($context["cloudConsultPath"] ?? null))) : (""))) {
            // line 111
            echo "      ";
            echo ($context["cloudConsultPath"] ?? null);
            echo "
    ";
        }
        // line 113
        echo "
    ";
        // line 114
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter(($context["consultDisplay"] ?? null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? null))) : ("")) == "/")))) {
            // line 115
            echo "      ";
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 116
                echo "        ";
                $this->loadTemplate("float-consult.html.twig", "layout.html.twig", 116)->display($context);
                // line 117
                echo "      ";
            }
            // line 118
            echo "    ";
        }
        // line 119
        echo "  ";
    }

    // line 134
    public function block_footer_script($context, array $blocks = array())
    {
        // line 135
        echo "  ";
        $this->loadTemplate("default/script-webpack.html.twig", "layout.html.twig", 135)->display($context);
        // line 136
        echo "  ";
        $this->loadTemplate("script_boot.html.twig", "layout.html.twig", 136)->display($context);
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 136,  472 => 135,  469 => 134,  465 => 119,  462 => 118,  459 => 117,  456 => 116,  453 => 115,  451 => 114,  448 => 113,  442 => 111,  439 => 110,  437 => 109,  434 => 108,  431 => 107,  427 => 105,  424 => 104,  421 => 103,  418 => 102,  415 => 101,  410 => 98,  406 => 96,  403 => 95,  399 => 93,  396 => 92,  393 => 91,  388 => 88,  383 => 85,  378 => 82,  374 => 89,  372 => 88,  368 => 86,  366 => 85,  362 => 83,  359 => 82,  356 => 81,  352 => 79,  349 => 78,  346 => 77,  343 => 76,  340 => 75,  335 => 131,  329 => 128,  326 => 127,  323 => 126,  321 => 125,  314 => 121,  311 => 120,  309 => 107,  306 => 106,  304 => 101,  300 => 99,  298 => 98,  295 => 97,  293 => 95,  290 => 94,  288 => 91,  285 => 90,  283 => 81,  280 => 80,  278 => 75,  274 => 73,  271 => 72,  259 => 65,  254 => 63,  250 => 61,  247 => 60,  244 => 59,  241 => 58,  236 => 39,  230 => 37,  224 => 35,  218 => 42,  214 => 41,  210 => 40,  204 => 39,  197 => 37,  190 => 35,  186 => 33,  183 => 32,  172 => 29,  169 => 28,  163 => 138,  161 => 134,  158 => 133,  156 => 72,  152 => 70,  150 => 69,  146 => 68,  140 => 65,  137 => 64,  135 => 63,  132 => 62,  130 => 58,  124 => 55,  120 => 54,  116 => 53,  112 => 51,  107 => 49,  102 => 48,  100 => 47,  96 => 46,  92 => 44,  90 => 32,  87 => 31,  85 => 28,  71 => 20,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  60 => 15,  57 => 14,  55 => 13,  53 => 12,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\layout.html.twig");
    }
}
