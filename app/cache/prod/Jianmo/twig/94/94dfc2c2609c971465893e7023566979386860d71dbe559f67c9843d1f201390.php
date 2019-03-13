<?php

/* v2/sidebar.html.twig */
class __TwigTemplate_5f85d27c8ae59299e59b39cdc008ce79b098e2656763b1b8465c4569885c2289 extends Twig_Template
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
        echo "<div class=\"cd-sidebar\">
  <ul class=\"cd-sidebar__list\">
    <li class=\"cd-sidebar__heading\">
      ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.account_center"), "html", null, true);
        echo "
    </li>
    <li class=\"cd-sidebar__item ";
        // line 6
        if ((($context["side_nav"] ?? null) == "my-orders")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.order_menu"), "html", null, true);
        echo "</a>
    </li>
    ";
        // line 9
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled", 0)) {
            // line 10
            echo "      <li class=\"cd-sidebar__item  ";
            if ((($context["side_nav"] ?? null) == "my-coin")) {
                echo " active ";
            }
            echo "\">
        <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_coin");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.account.my_coin", array("%coin_name%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"))), "html", null, true);
            echo "</a>
      </li>
    ";
        }
        // line 14
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("invite.invite_code_setting", 0)) {
            // line 15
            echo "      <li class=\"cd-sidebar__item ";
            if ((($context["side_nav"] ?? null) == "my-invite-code")) {
                echo " active ";
            }
            echo "\">
        <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_invite_code");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.account.invite_code"), "html", null, true);
            echo "</a>
      </li>
    ";
        }
        // line 19
        echo "    <li class=\"cd-sidebar__item ";
        if ((($context["side_nav"] ?? null) == "my-coupon")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_cards");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.coupon"), "html", null, true);
        echo "</a>
    </li>
    ";
        // line 22
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("my.account.menu.extension", array("sideNav" => ($context["side_nav"] ?? null)));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("my.account.menu.extension.invoice", array("sideNav" => ($context["side_nav"] ?? null)));
        echo "
    <li class=\"cd-sidebar__heading\">
      ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.menu_heading"), "html", null, true);
        echo "
    </li>
    <li class=\"cd-sidebar__item ";
        // line 27
        if ((($context["side_nav"] ?? null) == "profile")) {
            echo "active";
        }
        echo "\">
      <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.personal_info_menu"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"cd-sidebar__item ";
        // line 30
        if ((($context["side_nav"] ?? null) == "approval")) {
            echo "active";
        }
        echo "\">
      <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setting_approval_submit");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.verification_menu"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"cd-sidebar__item ";
        // line 33
        if ((($context["side_nav"] ?? null) == "security")) {
            echo "active";
        }
        echo "\">
      <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_security");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security_menu"), "html", null, true);
        echo "</a>
    </li>
    ";
        // line 36
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("TeacherAudit")) {
            echo "   
    <li class=\"cd-sidebar__item ";
            // line 37
            if ((($context["side_nav"] ?? null) == "teacheraudit")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_audit_submit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.teachers_qualification_menu"), "html", null, true);
            echo "</a>
    </li>
    ";
        }
        // line 41
        echo "    ";
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind", array()), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind", array()), "enabled", array()), false)) : (false))) {
            // line 42
            echo "      <li class=\"cd-sidebar__item ";
            if ((($context["side_nav"] ?? null) == "binds")) {
                echo "active";
            }
            echo "\" >
        <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_binds");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.oauth_menu"), "html", null, true);
            echo "</a>
      </li>
    ";
        }
        // line 46
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "v2/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 46,  172 => 43,  165 => 42,  162 => 41,  154 => 38,  148 => 37,  144 => 36,  137 => 34,  131 => 33,  124 => 31,  118 => 30,  111 => 28,  105 => 27,  100 => 25,  95 => 23,  91 => 22,  84 => 20,  77 => 19,  69 => 16,  62 => 15,  59 => 14,  51 => 11,  44 => 10,  42 => 9,  35 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "v2/sidebar.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\v2\\sidebar.html.twig");
    }
}
