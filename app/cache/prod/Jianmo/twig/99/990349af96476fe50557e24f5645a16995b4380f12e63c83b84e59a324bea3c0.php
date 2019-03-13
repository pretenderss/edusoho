<?php

/* admin/default/cloud-notice.html.twig */
class __TwigTemplate_68bdfadff8d87c083ef028bac5e91ac728237bfeb3d0b8ffc3f13b25986d5160 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/default/cloud-notice.html.twig", 1);
        // line 2
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial()) {
            // line 3
            echo "  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"col-md-12\">
    <div class=\"alert alert-warning\">
      ";
            // line 9
            if ($this->getAttribute(($context["trialTime"] ?? null), "endTime", array(), "any", true, true)) {
                // line 10
                echo "        ";
                $context["endTime"] = twig_date_format_filter($this->env, $this->getAttribute(($context["trialTime"] ?? null), "endTime", array()), "Y-m-d");
                echo " 
      ";
            } else {
                // line 11
                echo " 
        ";
                // line 12
                $context["endTime"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.cloud_notice.unknown_time");
                // line 13
                echo "      ";
            }
            // line 14
            echo "      
      ";
            // line 15
            if ($this->getAttribute(($context["trialTime"] ?? null), "remainDays", array(), "any", true, true)) {
                // line 16
                echo "        ";
                $context["remainDays"] = $this->getAttribute(($context["trialTime"] ?? null), "remainDays", array());
                // line 17
                echo "      ";
            } else {
                // line 18
                echo "        ";
                $context["remainDays"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.unknown");
                // line 19
                echo "      ";
            }
            // line 20
            echo "
      ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.cloud_notice", array("%endTime%" => (("<span style=\"color:#fed032;\">" . ($context["endTime"] ?? null)) . "</span>"), "%remainDays%" => (("<span style=\"color:#fed032;\">" . ($context["remainDays"] ?? null)) . "</span>")));
            echo "
      <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
";
        } else {
            // line 30
            echo "    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.admins_announcements_title"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
          <ul class=\"admin-notice-list\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notices"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 38
                echo "            <li>
              <a class=\"link-primary\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "detailUrl", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "content", array()), "html", null, true);
                echo "</a>
              ";
                // line 41
                echo "            </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 43
                echo "              <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.admins_announcements_empty"), "html", null, true);
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "          </ul>
        </div>
      </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/default/cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  111 => 43,  105 => 41,  99 => 39,  96 => 38,  91 => 37,  84 => 33,  79 => 30,  67 => 21,  64 => 20,  61 => 19,  58 => 18,  55 => 17,  52 => 16,  50 => 15,  47 => 14,  44 => 13,  42 => 12,  39 => 11,  33 => 10,  31 => 9,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/cloud-notice.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\admin\\default\\cloud-notice.html.twig");
    }
}
