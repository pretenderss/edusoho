<?php

/* default/header/part/user-avatar.html.twig */
class __TwigTemplate_1b17ede46a2d1caff50033251f902c4f5ee848cb5099d4b3090ee75f17f315af extends Twig_Template
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
        echo "<li class=\"user-avatar-li cd-dropdown cd-ml24\"  data-toggle=\"cd-dropdown\">
  <a class=\"user-avatar-toggle\" href=\"javascript:;\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
  </a>
  <div class=\"dropdown-menu user-dropdown hidden-sm hidden-xs hidden-md js-user-nav-dropdown\">
    <div class=\"user-dropdown-info cd-mb24\">
      <a class=\"user-dropdown-info__avatar cd-mr24\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "\">
        <img class=\"cd-avatar\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
      </a>
      <div class=\"user-dropdown-profile\">
        <div class=\"user-dropdown-profile__nickname\">
          <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
        echo "</span>";
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("header.user.logo", array("user" => $this->getAttribute(($context["app"] ?? null), "user", array())));
        echo "
        </div>
        ";
        // line 14
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("header.user.info", array("user" => $this->getAttribute(($context["app"] ?? null), "user", array())));
        echo "
      </div>
    </div>
    <div class=\"user-dropdown__link cd-mb24\">
      <a class=\"cd-link-minor\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
        echo "\"><i class=\"cd-icon cd-icon-payment\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.account_menu"), "html", null, true);
        echo "</a>
      <a class=\"cd-link-minor\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\"><i class=\"es-icon es-icon-setting\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.settings_menu"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"user-dropdown__logout\"><a class=\"cd-link-minor\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.logout"), "html", null, true);
        echo "</a></div>
  </div>
  <ul class=\"dropdown-menu hidden-lg\" role=\"menu\">
    <div class=\"dropdown-header\"><a class=\"cd-link-minor\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
        echo "</a></div>
    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
        echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.account_menu"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\"><i class=\"es-icon es-icon-setting\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.settings_menu"), "html", null, true);
        echo "</a></li>
    ";
        // line 27
        if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 29
        echo "    ";
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) {
            echo "<li class=\"user-nav-li-my\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\"><i class=\"es-icon es-icon-event\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_teaching_menu"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 31
        echo "    <li class=\"user-nav-li-my\">
      <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">
        <i class=\"es-icon es-icon-book\"></i>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning_menu"), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"hidden-md\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
        echo "\"><span class=\"pull-right num\">";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()), "html", null, true);
        }
        echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.notice"), "html", null, true);
        echo "</a></li>
    <li class=\"hidden-md\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\"><span class=\"pull-right num\">";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()), "html", null, true);
        }
        echo "</span><i class=\"es-icon es-icon-mail\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.message"), "html", null, true);
        echo "</a></li>
    ";
        // line 38
        if (($context["mobile"] ?? null)) {
            // line 39
            echo "      <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_pc"), "html", null, true);
            echo "</a></li>
    ";
        } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wap.version") == 1)) {
            // line 42
            echo "      <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_mobile"), "html", null, true);
            echo "</a>
      </li>
    ";
        }
        // line 46
        echo "    ";
        if ((($context["show_switch_locale"] ?? null) == 1)) {
            // line 47
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/part/user-avatar.html.twig", 47)->display(array_merge($context, array("langClass" => "text-center user-nav-li-logout")));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    <li class=\"user-nav-li-logout\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"es-icon es-icon-power\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.logout"), "html", null, true);
        echo "</a></li>
  </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "default/header/part/user-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 49,  171 => 48,  168 => 47,  165 => 46,  159 => 43,  156 => 42,  151 => 40,  148 => 39,  146 => 38,  136 => 37,  126 => 36,  120 => 33,  116 => 32,  113 => 31,  103 => 29,  94 => 27,  88 => 26,  82 => 25,  76 => 24,  68 => 21,  61 => 19,  55 => 18,  48 => 14,  41 => 12,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header/part/user-avatar.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\header\\part\\user-avatar.html.twig");
    }
}
