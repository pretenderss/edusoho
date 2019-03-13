<?php

/* admin/layout.html.twig */
class __TwigTemplate_cb5448a3cb61926d8bbb2f4d4b3e452217b751e963ccacc35bc746f918b8e21e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_flash_message' => array($this, 'block_page_flash_message'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'tabs' => array($this, 'block_tabs'),
            'capsule' => array($this, 'block_capsule'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'scriptBoot' => array($this, 'block_scriptBoot'),
            'faqSDK' => array($this, 'block_faqSDK'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "admin/layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? null), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode(($context["menu"] ?? null));
        // line 7
        $context["cloudSmsInfo"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getOldSmsUserStatus(), false);
        // line 8
        $context["lang"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getLocale", array(), "method");
        // line 9
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
";
        // line 15
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\" class=\"";
        if ((($context["lang"] ?? null) == "en")) {
            echo "es-en-admin";
        }
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "    ";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 28
        echo "  </title>

  ";
        // line 30
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 31
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 34
        echo "  
  ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
  ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 177
        echo "</html>

";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["currentMenu"] ?? null), "name", array()), array(), "menu"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "name", array()), array(), "menu"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array())), "name", array()), array(), "menu"), "html", null, true);
        echo "
    ";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "  <body ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
    <!--[if lt IE 9]>
      ";
        // line 49
        $this->loadTemplate("default/ie8-alert.html.twig", "admin/layout.html.twig", 49)->display($context);
        // line 50
        echo "    <![endif]-->

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
    ";
        // line 53
        if (($context["cloudSmsInfo"] ?? null)) {
            // line 54
            echo "      <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.new_layout.cloudSmsInfo.tips", array("%remainCount%" => (($this->getAttribute(($context["cloudSmsInfo"] ?? null), "remainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cloudSmsInfo"] ?? null), "remainCount", array()), 0)) : (0)))), "html", null, true);
            echo "</strong></div></div>
    ";
        }
        // line 56
        echo "      <div class=\"phl\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.console_btn"), "html", null, true);
        echo "</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          ";
        // line 66
        $this->loadTemplate("admin/role/templates/navigation.html.twig", "admin/layout.html.twig", 66)->display(array_merge($context, array("parentCode" => "admin")));
        // line 67
        echo "
          <ul class=\"nav navbar-nav navbar-right\">
            <li data-url=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_admin");
        echo "\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.often_used_btn"), "html", null, true);
        echo "</a>
              <ul class=\"dropdown-menu shortcuts\">
                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/CommonAdmin:commonAdmin"));
        echo "
              </ul>
            </li>
            <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.home_btn"), "html", null, true);
        echo "</a></li>
            <li class=\"dropdown\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
              <ul class=\"dropdown-menu main-list\">
                ";
        // line 79
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) {
            // line 80
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\"><i class=\"es-icon es-icon-event mrs\" style=\"vertical-align: middle;\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_course"), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 82
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\"><i class=\"es-icon es-icon-book mrs\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.dropdown_menu.exit_btn"), "html", null, true);
        echo "</a></li>
              </ul>
            </li>
          </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class=\"container ";
        // line 92
        if (($context["cloudSmsInfo"] ?? null)) {
            echo "es-admin-container-down";
        }
        echo "\">

      ";
        // line 94
        $this->loadTemplate("admin/plugin-upgrade-notify-modal.html.twig", "admin/layout.html.twig", 94)->display($context);
        // line 95
        echo "
      ";
        // line 96
        $this->displayBlock('container', $context, $blocks);
        // line 145
        echo "
    </div>

    ";
        // line 148
        $this->displayBlock('footer', $context, $blocks);
        // line 155
        echo "
    ";
        // line 156
        $this->displayBlock('scriptBoot', $context, $blocks);
        // line 160
        echo "    
    <div id=\"modal\" class=\"modal\" ></div>
    <div id=\"attachment-modal\" class=\"modal\" ></div>
    ";
        // line 163
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 164
            echo "      <div class=\"fixed-bar\">
        <a href=\"";
            // line 165
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
          <i class=\"es-icon es-icon-help\"></i>
          <span>";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.fixed_bar.product_feedback");
            echo "</span>
        </a>
      </div>
    ";
        }
        // line 171
        echo "
    ";
        // line 172
        $this->displayBlock('faqSDK', $context, $blocks);
        // line 175
        echo "  </body>
";
    }

    // line 96
    public function block_container($context, array $blocks = array())
    {
        // line 97
        echo "        <div class=\"row\">
          ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "        </div>
      ";
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "            <div class=\"col-md-2\">
              ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "            </div>

            <div class=\"col-md-10\">
              <div class=\"page-header clearfix\">
                ";
        // line 107
        $this->displayBlock('page_flash_message', $context, $blocks);
        // line 110
        echo "                <h1 class=\"pull-left\">
                  ";
        // line 111
        $this->displayBlock('page_title', $context, $blocks);
        // line 114
        echo "                </h1>
                <div class=\"pull-right\">

                  ";
        // line 117
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 129
        echo "
                </div>
              </div>

              ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 134
        echo "
              ";
        // line 135
        $this->displayBlock('tabs', $context, $blocks);
        // line 136
        echo "
              ";
        // line 137
        $this->displayBlock('capsule', $context, $blocks);
        // line 138
        echo "
              ";
        // line 139
        $this->displayBlock('main', $context, $blocks);
        // line 140
        echo "            </div>

          ";
    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        // line 101
        echo "                ";
        $this->loadTemplate("admin/role/templates/side-bar.html.twig", "admin/layout.html.twig", 101)->display($context);
        // line 102
        echo "              ";
    }

    // line 107
    public function block_page_flash_message($context, array $blocks = array())
    {
        // line 108
        echo "
                ";
    }

    // line 111
    public function block_page_title($context, array $blocks = array())
    {
        // line 112
        echo "                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute(($context["currentMenu"] ?? null), "code", array())), "name", array()), array(), "menu"), "html", null, true);
        echo "
                  ";
    }

    // line 117
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 118
        echo "
                    ";
        // line 119
        if ((((($this->getAttribute(($context["currentMenu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentMenu"] ?? null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter(($context["capsule"] ?? null), false)) : (false)))) {
            // line 120
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode(($context["capsule"] ?? null)), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 121
                echo "                        ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                    ";
        } else {
            // line 124
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute(($context["currentMenu"] ?? null), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 125
                echo "                        ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                    ";
        }
        // line 128
        echo "                  ";
    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 135
    public function block_tabs($context, array $blocks = array())
    {
        $this->loadTemplate("admin/role/templates/tabs.html.twig", "admin/layout.html.twig", 135)->display($context);
    }

    // line 137
    public function block_capsule($context, array $blocks = array())
    {
    }

    // line 139
    public function block_main($context, array $blocks = array())
    {
    }

    // line 148
    public function block_footer($context, array $blocks = array())
    {
        // line 149
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "

      ";
        // line 151
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.enabled"), false)) {
            // line 152
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.script");
            echo "
      ";
        }
        // line 154
        echo "    ";
    }

    // line 156
    public function block_scriptBoot($context, array $blocks = array())
    {
        // line 157
        echo "      ";
        $this->loadTemplate("old-script_boot.html.twig", "admin/layout.html.twig", 157)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 158
        echo "      ";
        $this->loadTemplate("admin/default/script-webpack.html.twig", "admin/layout.html.twig", 158)->display($context);
        // line 159
        echo "    ";
    }

    // line 172
    public function block_faqSDK($context, array $blocks = array())
    {
        // line 173
        echo "      ";
        $this->loadTemplate("admin/faq/sdk.html.twig", "admin/layout.html.twig", 173)->display($context);
        // line 174
        echo "    ";
    }

    // line 179
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 180
            echo "  <a 
  ";
            // line 181
            if (($context["class"] ?? null)) {
                // line 182
                echo "    class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\"
  ";
            }
            // line 184
            echo "  ";
            if (((($this->getAttribute(($context["menu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["menu"] ?? null), "mode", array()), null)) : (null)) == "modal")) {
                // line 185
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["menu"] ?? null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 189
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["menu"] ?? null)), "html", null, true);
                echo "\"
  ";
            }
            // line 191
            echo "  ";
            if ((($this->getAttribute(($context["menu"] ?? null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["menu"] ?? null), "blank", array()), false)) : (false))) {
                // line 192
                echo "    target=\"blank\"
  ";
            }
            // line 194
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["menu"] ?? null), "name", array()), array(), "menu"), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 194,  591 => 192,  588 => 191,  582 => 189,  574 => 185,  571 => 184,  565 => 182,  563 => 181,  560 => 180,  546 => 179,  542 => 174,  539 => 173,  536 => 172,  532 => 159,  529 => 158,  526 => 157,  523 => 156,  519 => 154,  513 => 152,  511 => 151,  505 => 149,  502 => 148,  497 => 139,  492 => 137,  486 => 135,  481 => 133,  477 => 128,  474 => 127,  465 => 125,  460 => 124,  457 => 123,  448 => 121,  443 => 120,  441 => 119,  438 => 118,  435 => 117,  428 => 112,  425 => 111,  420 => 108,  417 => 107,  413 => 102,  410 => 101,  407 => 100,  401 => 140,  399 => 139,  396 => 138,  394 => 137,  391 => 136,  389 => 135,  386 => 134,  384 => 133,  378 => 129,  376 => 117,  371 => 114,  369 => 111,  366 => 110,  364 => 107,  358 => 103,  356 => 100,  353 => 99,  350 => 98,  345 => 143,  343 => 98,  340 => 97,  337 => 96,  332 => 175,  330 => 172,  327 => 171,  320 => 167,  315 => 165,  312 => 164,  310 => 163,  305 => 160,  303 => 156,  300 => 155,  298 => 148,  293 => 145,  291 => 96,  288 => 95,  286 => 94,  279 => 92,  265 => 83,  258 => 82,  250 => 80,  248 => 79,  243 => 77,  236 => 75,  230 => 72,  225 => 70,  221 => 69,  217 => 67,  215 => 66,  204 => 63,  195 => 56,  189 => 54,  187 => 53,  182 => 50,  180 => 49,  170 => 47,  167 => 46,  162 => 40,  156 => 37,  151 => 36,  148 => 35,  137 => 25,  134 => 24,  128 => 177,  126 => 46,  120 => 43,  116 => 42,  113 => 41,  111 => 40,  108 => 39,  106 => 35,  103 => 34,  98 => 32,  93 => 31,  91 => 30,  87 => 28,  82 => 27,  80 => 24,  74 => 21,  60 => 15,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  42 => 4,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\admin\\layout.html.twig");
    }
}
