<?php

/* course/header/header-for-guest-buy-btn.html.twig */
class __TwigTemplate_8f206eb4f6d7698308daa221f927e3e3f30604f6e2366e8c1628056bd70be409 extends Twig_Template
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
        if ((((($this->getAttribute(($context["course"] ?? null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "buyable", array()), true)) : (true)) == false) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && ($this->getAttribute(($context["course"] ?? null), "vipLevelId", array()) == 0)))) {
            // line 2
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_limited_tips"), "html", null, true);
            echo "
";
        } elseif ((($this->getAttribute(        // line 3
($context["course"] ?? null), "status", array()) != "published") || ($this->getAttribute(($context["courseSet"] ?? null), "status", array()) != "published"))) {
            // line 4
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unbuyable.unpublished_tips"), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 5
($context["course"] ?? null), "buyExpiryTime", array()) && ($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) < twig_date_format_filter($this->env, "now", "U")))) {
            // line 6
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unbuyable.over_buy_expiry_time_tips"), "html", null, true);
            echo "
";
        } elseif ((twig_in_filter($this->getAttribute(        // line 7
($context["course"] ?? null), "expiryMode", array()), array(0 => "end_date", 1 => "date")) && ($this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()) < twig_date_format_filter($this->env, "now", "U")))) {
            // line 8
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unbuyable.over_expiry_end_date_tips"), "html", null, true);
            echo "
";
        } else {
            // line 10
            echo "  ";
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.purchase.extension", array("course" => ($context["course"] ?? null)));
            echo "


  ";
            // line 13
            $context["noVipText"] = 1;
            // line 14
            echo "  ";
            if (twig_trim_filter($this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.buy-btn.extension", array("course" => ($context["course"] ?? null))))) {
                // line 15
                echo "    ";
                $context["btnText"] = $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.buy-btn.extension", array("course" => ($context["course"] ?? null)));
                // line 16
                echo "    ";
                $context["noVipText"] = 0;
                // line 17
                echo "  ";
            } elseif ((($this->getAttribute(($context["course"] ?? null), "originPrice", array()) == 0) || $this->getAttribute(($context["course"] ?? null), "isFree", array()))) {
                // line 18
                echo "    ";
                $context["btnText"] = "course.btn.join";
                // line 19
                echo "  ";
            } else {
                // line 20
                echo "    ";
                $context["btnText"] = "course.btn.buy";
                // line 21
                echo "  ";
            }
            // line 22
            echo "
  ";
            // line 24
            echo "  ";
            if (((((($this->getAttribute(($context["course"] ?? null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "buyable", array()), true)) : (true)) == false) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && ($this->getAttribute(($context["course"] ?? null), "vipLevelId", array()) > 0))) && ($context["noVipText"] ?? null))) {
                // line 25
                echo "  ";
            } else {
                // line 26
                echo "    <a class=\"cd-btn cd-btn-primary js-buy-btn ";
                if (((array_key_exists("previewAs", $context)) ? (_twig_default_filter(($context["previewAs"] ?? null))) : (""))) {
                    echo "disabled";
                }
                echo "\" href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\">
      ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btnText"] ?? null)), "html", null, true);
                echo "
    </a>
  ";
            }
            // line 30
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "course/header/header-for-guest-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  99 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  55 => 13,  48 => 10,  42 => 8,  40 => 7,  35 => 6,  33 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-guest-buy-btn.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\header-for-guest-buy-btn.html.twig");
    }
}
