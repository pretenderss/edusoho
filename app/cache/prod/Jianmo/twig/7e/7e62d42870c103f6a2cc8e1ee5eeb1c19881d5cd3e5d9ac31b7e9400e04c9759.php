<?php

/* float-consult.html.twig */
class __TwigTemplate_cf23625cb7951a9e5a70a4a6d3a69181d2eaf5aadeee81c85074c2b218d1e3d2 extends Twig_Template
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/float-consult/index.js"));
        // line 2
        echo "
";
        // line 3
        $context["consult"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult");
        // line 4
        echo "<div id=\"float-consult\" class=\"float-consult hidden-xs\">
  <div class=\"btn-group-vertical\">

    ";
        // line 7
        $context["break"] = 0;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "qq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            if ((( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qq"], "number", array()))) && (($context["break"] ?? null) == 0))) {
                // line 9
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "color", array()), "html", null, true);
                echo " float-consult-qq-btn\" data-container=\".float-consult-qq-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.qq_customer_service"), "html", null, true);
                echo "\" data-content-element=\"#consult-qq-content\"><span class=\"es-icon es-icon-qq\"></span></span>
      ";
                // line 10
                $context["break"] = 1;
                // line 11
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context["break"] = 0;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "qqgroup", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            if ((( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qqgroup"], "number", array()))) && (($context["break"] ?? null) == 0))) {
                // line 15
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "color", array()), "html", null, true);
                echo " float-consult-qqgroup-btn\" data-container=\".float-consult-qqgroup-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.qq_group"), "html", null, true);
                echo "\" data-content-element=\"#consult-qqgroup-content\"><span class=\"es-icon es-icon-friends\"></span></span>
      ";
                // line 16
                $context["break"] = 1;
                // line 17
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    ";
        // line 19
        $context["break"] = 0;
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "phone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            if (( !twig_test_empty($this->getAttribute($context["phone"], "name", array())) && (($context["break"] ?? null) == 0))) {
                // line 21
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "color", array()), "html", null, true);
                echo " float-consult-phone-btn\" data-container=\".float-consult-phone-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.mobile_group"), "html", null, true);
                echo "\" data-content-element=\"#consult-phone-content\"><span class=\"es-icon es-icon-phone\"></span></span>
      ";
                // line 22
                $context["break"] = 1;
                // line 23
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? null), "webchatURI", array()))) {
            // line 26
            echo "      <span class=\"btn btn-consult-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "color", array()), "html", null, true);
            echo " float-consult-weixin-btn\" data-container=\".float-consult-weixin-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.weixin-content"), "html", null, true);
            echo "\" data-content-element=\"#consult-weixin-content\"><span class=\"es-icon es-icon-weixin\"></span></span>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ( !twig_test_empty($this->getAttribute(($context["consult"] ?? null), "email", array()))) {
            // line 30
            echo "      <span class=\"btn btn-consult-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "color", array()), "html", null, true);
            echo " float-consult-email-btn\" data-container=\".float-consult-email-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.email"), "html", null, true);
            echo "\" data-content-element=\"#consult-email-content\"><span class=\"es-icon es-icon-mail\"></span></span>
    ";
        }
        // line 32
        echo "  </div>

  <div class=\"consult-contents\">
    <div id=\"consult-qq-content\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "qq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            if (( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qq"], "number", array())))) {
                // line 37
                echo "        ";
                if ( !(($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), false)) : (false))) {
                    // line 38
                    echo "        <p>

          <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                    echo "&site=qq&menu=yes\" >
            <img class=\"mrs\" src=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                    echo "\" alt=\"\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.send_message"), "html", null, true);
                    echo "\" alt=\"\">

            ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
          </a>
        </p>
        ";
                } else {
                    // line 47
                    echo "          <p>
            <a href=\"";
                    // line 48
                    echo $this->getAttribute($context["qq"], "url", array());
                    echo "\" target=\"_blank\">
            <img class=\"mrs\" src=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                    echo "\" alt=\"\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.send_message"), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
            </a>
          </p>
        ";
                }
                // line 54
                echo "      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </div>

    <div id=\"consult-qqgroup-content\">
      ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "qqgroup", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            if (( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qqgroup"], "number", array())))) {
                // line 59
                echo "        <p>
          <span class=\"icon icon-qqgroup color-gray\" style=\"font-size:14px;\"></span>
          ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                echo "
           <br> ";
                // line 63
                echo "
            ";
                // line 64
                if ((($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), "")) : (""))) {
                    // line 65
                    echo "              <p class=\"text-overflow\">
                ";
                    // line 66
                    echo $this->getAttribute($context["qqgroup"], "url", array());
                    echo "
              </p>
            ";
                } else {
                    // line 69
                    echo "              <p class=\"text-overflow\">
                ";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                    echo "
              </p>
            ";
                }
                // line 73
                echo "
        </p>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </div>
    <div id=\"consult-phone-content\">
      <p>
        <strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.time"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "worktime", array()), "html", null, true);
        echo "
      </p>

      ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["consult"] ?? null), "phone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            if ( !twig_test_empty($this->getAttribute($context["phone"], "name", array()))) {
                // line 83
                echo "        <p>
          ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                echo "： ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo "
        </p>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </div>


    <div id=\"consult-weixin-content\">
      <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["consult"] ?? null), "webchatURI", array())), "html", null, true);
        echo "\" class=\"qrcode center-block\">
    </div>
    <div id=\"consult-email-content\">
      <a href=\"mailto:";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["consult"] ?? null), "email", array()), "html", null, true);
        echo "</a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "float-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 94,  287 => 91,  281 => 87,  269 => 84,  266 => 83,  261 => 82,  253 => 79,  248 => 76,  239 => 73,  233 => 70,  230 => 69,  224 => 66,  221 => 65,  219 => 64,  216 => 63,  212 => 61,  208 => 59,  203 => 58,  198 => 55,  191 => 54,  184 => 50,  178 => 49,  174 => 48,  171 => 47,  164 => 43,  157 => 41,  153 => 40,  149 => 38,  146 => 37,  141 => 36,  135 => 32,  127 => 30,  125 => 29,  122 => 28,  114 => 26,  112 => 25,  109 => 24,  102 => 23,  100 => 22,  93 => 21,  87 => 20,  85 => 19,  82 => 18,  75 => 17,  73 => 16,  66 => 15,  60 => 14,  58 => 13,  55 => 12,  48 => 11,  46 => 10,  39 => 9,  33 => 8,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "float-consult.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\float-consult.html.twig");
    }
}
