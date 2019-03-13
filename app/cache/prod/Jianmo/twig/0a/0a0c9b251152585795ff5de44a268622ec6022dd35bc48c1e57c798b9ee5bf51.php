<?php

/* user/card-show.html.twig */
class __TwigTemplate_719f3123db24d0d4a6d90d8692e133f36987c9911911c0cc456b649d2a6806d7 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "user/card-show.html.twig", 1);
        // line 2
        echo "
<div id=\"user-card-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"js-card-content\" data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"card-header media-middle\">
    <div class=\"media\">
      <div class=\"media-left\">
        <div class=\"user-avatar\">
          ";
        // line 8
        echo $context["web_macro"]->getuser_avatar(($context["user"] ?? null), "", "avatar-md", false);
        echo "
          ";
        // line 9
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute(($context["user"] ?? null), "roles", array()))) {
            // line 10
            echo "            <span class=\"icon-user-status\"><i class=\"es-icon es-icon-school\"></i></span
          >
          ";
        } elseif ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("vip")) {
            // line 13
            echo "            ";
            $context["userVip"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getUserVipLevel($this->getAttribute(($context["user"] ?? null), "id", array()));
            // line 14
            echo "              ";
            if (((($context["userVip"] ?? null) && ($context["levels"] ?? null)) && (twig_date_format_filter($this->env, $this->getAttribute(($context["userVip"] ?? null), "deadline", array()), "Y-m-d") > twig_date_format_filter($this->env, ($context["nowTime"] ?? null), "Y-m-d")))) {
                // line 15
                echo "                <span class=\"icon-user-status\"><img src=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["levels"] ?? null), $this->getAttribute(($context["userVip"] ?? null), "levelId", array()), array(), "array", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["levels"] ?? null), $this->getAttribute(($context["userVip"] ?? null), "levelId", array()), array(), "array", false, true), "icon", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))), "html", null, true);
                echo "\" alt=\"\"></span>
              ";
            }
            // line 17
            echo "            ";
        }
        // line 18
        echo "        </div>
      </div>
      <div class=\"media-body\">
        <div class=\"title\">
          ";
        // line 22
        echo $context["web_macro"]->getuser_link(($context["user"] ?? null), "", false);
        echo "
        </div>
        <div class=\"content\">
          ";
        // line 25
        if ($this->getAttribute(($context["user"] ?? null), "title", array())) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 28
        echo "        </div>
      </div>
    </div>
    ";
        // line 31
        if (( !$this->getAttribute(($context["app"] ?? null), "user", array()) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()) != $this->getAttribute(($context["user"] ?? null), "id", array())))) {
            // line 32
            echo "      <div class=\"metas\">
        <a class=\"btn btn-primary btn-xs follow-btn\" href=\"javascript:;\" data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
            echo "\" ";
            if (($context["isFollowed"] ?? null)) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute(($context["app"] ?? null), "user", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.card_show_following"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-xs unfollow-btn\" href=\"javascript:;\"  data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !($context["isFollowed"] ?? null)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.card_show_followed"), "html", null, true);
            echo "</a>
        ";
            // line 35
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->canSendMessage($this->getAttribute(($context["user"] ?? null), "id", array()))) {
                // line 36
                echo "          <a class=\"btn btn-default btn-xs direct-message-btn\" herf=\"javascript:;\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.card_show_message"), "html", null, true);
                echo "</a>
        ";
            }
            // line 38
            echo "      </div>
    ";
        }
        // line 40
        echo "  </div>
  <div class=\"card-body\">
    ";
        // line 42
        if ($this->getAttribute(($context["profile"] ?? null), "signature", array())) {
            // line 43
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "signature", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 45
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.card_show_sign_tips"), "html", null, true);
            echo "
    ";
        }
        // line 47
        echo "  </div>
  <div class=\"card-footer clearfix\">
    <span><a class=\"link-dark\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_learn", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "learningNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.card_show_learn"), "html", null, true);
        echo "</a></span>
    <span><a class=\"link-dark\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_following", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "followingNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.card_show_following"), "html", null, true);
        echo "</a></span>
    <span><a class=\"link-dark\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follower", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "followerNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.card_show_fans"), "html", null, true);
        echo "</a></span>
  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "user/card-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 51,  160 => 50,  152 => 49,  148 => 47,  142 => 45,  136 => 43,  134 => 42,  130 => 40,  126 => 38,  118 => 36,  116 => 35,  106 => 34,  90 => 33,  87 => 32,  85 => 31,  80 => 28,  74 => 26,  72 => 25,  66 => 22,  60 => 18,  57 => 17,  51 => 15,  48 => 14,  45 => 13,  40 => 10,  38 => 9,  34 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/card-show.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\user\\card-show.html.twig");
    }
}
