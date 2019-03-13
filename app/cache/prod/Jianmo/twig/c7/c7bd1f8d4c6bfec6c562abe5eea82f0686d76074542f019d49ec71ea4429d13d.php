<?php

/* admin/plugin-upgrade-notify-modal.html.twig */
class __TwigTemplate_fe34283b2e3c767ef0f1b77795bfbdae3f1a0f00d683f728eb728c112bc302cb extends Twig_Template
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
        $context["current_route"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method");
        // line 2
        echo "
";
        // line 3
        if ((((($context["current_route"] ?? null) != "admin_app_upgrades") && $this->getAttribute(($context["app"] ?? null), "user", array())) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isSuperAdmin", array(), "method"))) {
            // line 4
            echo "  ";
            $context["notifies"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->pluginUpdateNotify();
            // line 5
            echo "
  ";
            // line 6
            $context["dispalys"] = array("plugin" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.plugin"), "theme" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.theme"));
            // line 7
            echo "  ";
            if ( !twig_test_empty(($context["notifies"] ?? null))) {
                // line 8
                echo "    <div class=\"modal js-update-modal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.upgrade_guide"), "html", null, true);
                echo "</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"update-redmine-body\">
              <img class=\"pbm img-responsive\" src='";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/img/course-8-update.jpg"), "html", null, true);
                echo "'>
              <div class=\"mll mtl mrl clearfix\">
                ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["notifies"] ?? null));
                foreach ($context['_seq'] as $context["type"] => $context["apps"]) {
                    // line 20
                    echo "                  <p class=\"color-primary mbl mtl\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.upgrade.tips", array("%displayType%" => $this->getAttribute(($context["dispalys"] ?? null), $context["type"], array(), "array"))), "html", null, true);
                    echo "</p>
                  <div class=\"clearfix\">
                    ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["apps"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                        // line 23
                        echo "                      <p class=\"color-dark\" style=\"float:left;width:33.33%\"><span class=\"mrm\">●</span>";
                        echo twig_escape_filter($this->env, $context["app"], "html", null, true);
                        echo "</p>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['apps'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                <p class=\"color-primary mbl mtl\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.not_upgrade.tips"), "html", null, true);
                echo "</p>

              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <a type=\"button\" class=\"btn btn-primary\" href=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades_btn"), "html", null, true);
                echo "</a>
          </div>
        </div>
      </div>
    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "admin/plugin-upgrade-notify-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  86 => 27,  79 => 25,  70 => 23,  66 => 22,  60 => 20,  56 => 19,  51 => 17,  44 => 13,  37 => 8,  34 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/plugin-upgrade-notify-modal.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\admin\\plugin-upgrade-notify-modal.html.twig");
    }
}
