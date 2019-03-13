<?php

/* default/header/part/user-inform.html.twig */
class __TwigTemplate_6e5131be7cc064c0e41104a4a7466d283c54e945ef6d07afc1ab83912c9bdd0c extends Twig_Template
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
        echo "<li class=\"user-inform-li js-user-inform hidden-xs hidden-sm cd-ml24 cd-dropdown\" data-toggle=\"cd-dropdown\">
  <a class=\"inform-dropdown-toggle\"><i class=\"cd-icon cd-icon-bell\"></i>";
        // line 2
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()) > 0))) {
            echo "<span class=\"inform-dropdown-toggle__num cd-badge cd-badge-danger ";
            if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) + $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array())) > 9)) {
                echo " inform-dropdown-toggle__num--big ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) + $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array())), "html", null, true);
            echo "</span>";
        }
        echo "</a>
  <div class=\"dropdown-menu inform-dropdown js-user-nav-dropdown\" role=\"menu\">
    <div class=\"clearfix inform-dropdown-head\" role=\"tablist\">
      <a class=\"inform-dropdown-head__tab js-inform-tab active\" href=\"#notification\" role=\"tab\" data-toggle=\"tab\" data-type=\"newNotification\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notification.user_notification"), "html", null, true);
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0)) {
            echo "<span class=\"inform-dropdown-dot\"></span>";
        }
        echo "</a>
      <a class=\"inform-dropdown-head__tab js-inform-tab\" href=\"#message\" role=\"tab\" data-toggle=\"tab\" data-type=\"conversation\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.send_message"), "html", null, true);
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()) > 0)) {
            echo "<span class=\"inform-dropdown-dot\"></span>";
        }
        echo "</a>
    </div>
    <div class=\"tab-content\">
      <div class=\"notification-content tab-pane active\" role=\"tabpanel\" id=\"notification\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          ";
        // line 11
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0)) {
            // line 12
            echo "            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-newNotification\"></div>
          ";
        } else {
            // line 15
            echo "            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice.png"), "html", null, true);
            echo "\"
            srcset=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice.png"), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice@2x.png"), "html", null, true);
            echo " 2x\"/>
              <div class=\"inform-empty-status__tip\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.no_new_notifications"), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        // line 21
        echo "        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.check_all_notifications"), "html", null, true);
        echo "</a>
        </div>
      </div>
      <div class=\"message-content tab-pane\" role=\"tabpanel\" id=\"message\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          ";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array()) > 0)) {
            // line 29
            echo "            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-conversation\"></div>
          ";
        } else {
            // line 32
            echo "            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message.png"), "html", null, true);
            echo "\"
          srcset=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message.png"), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message@2x.png"), "html", null, true);
            echo " 2x\"/>
              <div class=\"inform-empty-status__tip\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.no_new_messages"), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        // line 38
        echo "        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.check_all_messages"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "default/header/part/user-inform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  120 => 38,  114 => 35,  108 => 34,  104 => 33,  101 => 32,  96 => 29,  94 => 28,  84 => 23,  80 => 21,  74 => 18,  68 => 17,  64 => 16,  61 => 15,  56 => 12,  54 => 11,  43 => 6,  36 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header/part/user-inform.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\header\\part\\user-inform.html.twig");
    }
}
