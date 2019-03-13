<?php

/* order/order-table-v2.html.twig */
class __TwigTemplate_9ff8f63ed9dc1b5e743db6c0c9c2328a1fd74af165663f1fb1b05256f915398d extends Twig_Template
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
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "order/order-table-v2.html.twig", 1);
        // line 2
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "order/order-table-v2.html.twig", 2);
        // line 3
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter(($context["mode"] ?? null), array(0 => "my"))) : (array(0 => "my")));
        // line 4
        echo "
<thead>
  <tr>
    <th width=\"25%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.product_name"), "html", null, true);
        echo "</th>
    <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.id"), "html", null, true);
        echo "</th>
    <th class=\"text-right\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.price"), "html", null, true);
        echo "</th>
    <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.created_time"), "html", null, true);
        echo "</th>
    <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.status"), "html", null, true);
        echo "</th>
    <th style=\"min-width:100px\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.operation"), "html", null, true);
        echo "</th>
  </tr>
</thead>

<tbody>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 18
            echo "    <tr id=\"order-table-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\">
      <td>
        ";
            // line 20
            if (($this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_type", array()) == "course")) {
                // line 21
                echo "          <a class=\"cd-link-major\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</a>
        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 22
$context["order"], "item", array()), "target_type", array()) == "vip")) {
                // line 23
                echo "          <a class=\"cd-link-major\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</a>
        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 24
$context["order"], "item", array()), "target_type", array()) == "classroom")) {
                // line 25
                echo "          <a class=\"cd-link-major\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 27
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "
        ";
            }
            // line 29
            echo "      </td>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "sn", array()), "html", null, true);
            echo "</td>
      <td class=\"text-right\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\OrderExtension')->toCash($this->getAttribute($context["order"], "pay_amount", array()), 0), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.currency.CNY"), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "created_time", array()), "Y-n-d"), "html", null, true);
            echo "</td>
      <td>
        ";
            // line 34
            echo $this->env->getExtension('AppBundle\Twig\OrderExtension')->displayOrderStatus($this->getAttribute($context["order"], "status", array()), 0);
            echo "

      </td>
      <td>
        <div class=\"table-action\">
          ";
            // line 39
            if (twig_in_filter($this->getAttribute($context["order"], "status", array()), array(0 => "created", 1 => "paying"))) {
                // line 40
                echo "            <div class=\"table-action__item\">
              <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cashier_show", array("sn" => $this->getAttribute($context["order"], "sn", array()))), "html", null, true);
                echo "\" class=\"cd-link-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.pay"), "html", null, true);
                echo "</a>
            </div>
            <div class=\"table-action__item cd-dropdown\" data-toggle=\"cd-dropdown\">
              <a href=\"javascript:;\" class=\"cd-link-primary\">
                ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.more"), "html", null, true);
                echo "<i class=\"cd-text-sm cd-icon cd-icon-arrow-down\"></i>
              </a>
              <ul class=\"dropdown-menu\">
                <li>
                  <a href=\"javascript:;\" class=\"cd-link-primary\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_user_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.content_title"), "html", null, true);
                echo "</a>
                </li>
                <li>
                  <a href=\"javascript:;\" class=\"js-cancel\" data-url=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_cancel", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.cancel_order"), "html", null, true);
                echo "</a>
                </li>
              </ul>
            </div>
          ";
            }
            // line 57
            echo "          ";
            if (twig_in_filter($this->getAttribute($context["order"], "status", array()), array(0 => "paid", 1 => "refunding", 2 => "refunded", 3 => "closed", 4 => "success", 5 => "finished"))) {
                // line 58
                echo "            <div class=\"table-action__item\">
              <a href=\"javascript:;\" class=\"cd-link-primary\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_user_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.content_title"), "html", null, true);
                echo "</a>
            </div>

            ";
                // line 62
                if (((($this->getAttribute($context["order"], "pay_amount", array()) != 0) && twig_in_filter($this->getAttribute($context["order"], "status", array()), array(0 => "success"))) && twig_in_filter((($this->getAttribute($this->getAttribute($context["order"], "refund", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["order"], "refund", array(), "any", false, true), "status", array()), "")) : ("")), array(0 => "cancel", 1 => "")))) {
                    // line 63
                    echo "              ";
                    if ((($this->getAttribute($context["order"], "refund_deadline", array()) != 0) && twig_in_filter($this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_type", array()), array(0 => "course", 1 => "classroom")))) {
                        // line 64
                        echo "                ";
                        if (($this->getAttribute($context["order"], "refund_deadline", array()) > $this->getAttribute(twig_date_converter($this->env), "timestamp", array()))) {
                            // line 65
                            echo "                  <br>
                  <div class=\"table-action__item\">
                    <a href=\"javascript:;\" class=\"cd-link-minor\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                            // line 67
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_refund_apply", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.refund.apply_for_btn"), "html", null, true);
                            echo "</a>
                  </div>
                ";
                        }
                        // line 70
                        echo "              ";
                    }
                    // line 71
                    echo "            ";
                }
                // line 72
                echo "            ";
                if ((twig_in_filter($this->getAttribute($context["order"], "status", array()), array(0 => "refunded", 1 => "refunding", 2 => "success", 3 => "closed", 4 => "finished")) && twig_in_filter((($this->getAttribute($this->getAttribute($context["order"], "refund", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["order"], "refund", array(), "any", false, true), "status", array()), "")) : ("")), array(0 => "auditing", 1 => "refunding", 2 => "refunded", 3 => "refused")))) {
                    // line 73
                    echo "              <br>
              <div class=\"table-action__item\">
                <a href=\"javascript:;\" class=\"cd-link-minor\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_refund_detail", array("id" => $this->getAttribute($this->getAttribute($context["order"], "refund", array(), "array"), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.show_refund_detail"), "html", null, true);
                    echo "</a>
              </div>
            ";
                }
                // line 78
                echo "          ";
            }
            // line 79
            echo "        </div>
      </td>
    </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            echo "    <tr><td colspan=\"20\"><div class=\"cd-empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "</tbody>";
    }

    public function getTemplateName()
    {
        return "order/order-table-v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 85,  234 => 83,  226 => 79,  223 => 78,  215 => 75,  211 => 73,  208 => 72,  205 => 71,  202 => 70,  194 => 67,  190 => 65,  187 => 64,  184 => 63,  182 => 62,  174 => 59,  171 => 58,  168 => 57,  158 => 52,  150 => 49,  143 => 45,  134 => 41,  131 => 40,  129 => 39,  121 => 34,  116 => 32,  110 => 31,  106 => 30,  103 => 29,  97 => 27,  89 => 25,  87 => 24,  80 => 23,  78 => 22,  71 => 21,  69 => 20,  63 => 18,  58 => 17,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "order/order-table-v2.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\order\\order-table-v2.html.twig");
    }
}
