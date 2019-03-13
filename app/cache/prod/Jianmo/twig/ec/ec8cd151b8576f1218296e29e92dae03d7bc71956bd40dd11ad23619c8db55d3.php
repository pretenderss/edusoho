<?php

/* login/index.html.twig */
class __TwigTemplate_ef7fdda7a65f4a15e741cebc1a9d075823f8307ee4e1e5fad9b4e67a26125459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/auth/login/index.js"));
        // line 3
        $context["bodyClass"] = "login";
        // line 4
        $context["ai_face_enabled"] = ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("feature.face_enabled"), 0) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("face.login.enabled"), 0)) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("face.login.pc_enabled"), 0));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.content_title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 9
            echo "    <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\"
      data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\"><span
        class=\"receive-modal\"></span></a>
  ";
        }
        // line 13
        echo "  <div class=\"es-section login-section\">
    <div class=\"logon-tab clearfix\">
      <a class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.login_account"), "html", null, true);
        echo "</a>
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ($context["_target_path"] ?? null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.register_account"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"login-main js-login-main\">
      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

        ";
        // line 21
        if (($context["error"] ?? null)) {
            // line 22
            echo "          <div class=\"alert alert-danger\">
            ";
            // line 23
            if (($this->getAttribute(($context["error"] ?? null), "message", array()) == "Bad credentials.")) {
                // line 24
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.user_password.error_tips"), "html", null, true);
                echo "
            ";
            } elseif (($this->getAttribute(            // line 25
($context["error"] ?? null), "message", array()) == "User account is locked.")) {
                // line 26
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exception.user_lock"), "html", null, true);
                echo "
            ";
            } else {
                // line 28
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "message", array())), "html", null, true);
                echo "
            ";
            }
            // line 30
            echo "          </div>
        ";
        }
        // line 32
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_username\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required
              placeholder='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_placeholder"), "html", null, true);
        echo "'/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_password\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_placeholder"), "html", null, true);
        echo "'/>
          </div>
        </div>

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.remember_me"), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"form-group mbl\">
          <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.submit_button"), "html", null, true);
        echo "</button>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["_target_path"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <div class=\"mbl\">
        <a class=\"link-primary\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.find_password"), "html", null, true);
        echo "</a>
        <span class=\"color-gray mhs\">|</span>
        <span class=\"color-gray\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.ask_register"), "html", null, true);
        echo "</span>
        <a class=\"link-primary\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ($context["_target_path"] ?? null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.go_register"), "html", null, true);
        echo "</a>
      </div>

      ";
        // line 68
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled") || ($context["ai_face_enabled"] ?? null))) {
            // line 69
            echo "        <div class=\"social-login\">
            <span>
              ";
            // line 71
            if (($context["ai_face_enabled"] ?? null)) {
                // line 72
                echo "                <a class=\"sts-login-link js-sts-login-link\" href=\"javascript:;\">
                  <img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face.png"), "html", null, true);
                echo "\"
                    srcset=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face.png"), "html", null, true);
                echo " 1x, ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face@2x.png"), "html", null, true);
                echo " 2x\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.sts_discovery"), "html", null, true);
                echo "\"/>
                </a>
              ";
            }
            // line 77
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Login:oauth2LoginsBlock", array("targetPath" => ($context["_target_path"] ?? null))));
            echo "
            </span>
          <div class=\"line\"></div>
        </div>
      ";
        }
        // line 82
        echo "    </div>

    ";
        // line 84
        if (($context["ai_face_enabled"] ?? null)) {
            // line 85
            echo "      ";
            $context["type"] = "page";
            // line 86
            echo "      ";
            $this->loadTemplate("login/sts-logins-block.htm.twig", "login/index.html.twig", 86)->display(array_merge($context, array("type" => ($context["type"] ?? null), "goto" => ($context["_target_path"] ?? null))));
            // line 87
            echo "    ";
        }
        // line 88
        echo "  </div>

";
    }

    // line 92
    public function block_bottom($context, array $blocks = array())
    {
        // line 93
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "login/index.html.twig", 93)->display(array_merge($context, array("mobile_tool_bar" => "login")));
    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 93,  246 => 92,  240 => 88,  237 => 87,  234 => 86,  231 => 85,  229 => 84,  225 => 82,  216 => 77,  206 => 74,  202 => 73,  199 => 72,  197 => 71,  193 => 69,  191 => 68,  183 => 65,  179 => 64,  172 => 62,  165 => 58,  161 => 57,  155 => 54,  148 => 50,  139 => 44,  134 => 42,  126 => 37,  122 => 36,  117 => 34,  111 => 32,  107 => 30,  101 => 28,  95 => 26,  93 => 25,  88 => 24,  86 => 23,  83 => 22,  81 => 21,  76 => 19,  68 => 16,  64 => 15,  60 => 13,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  37 => 5,  33 => 1,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\login\\index.html.twig");
    }
}
