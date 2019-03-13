<?php

/* course/header/header-for-price.html.twig */
class __TwigTemplate_d18c04de5343f053598e0dd5eaa48c0ed99a572faedb8c9044cf12697893936c extends Twig_Template
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
        $context["coinSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin");
        // line 2
        $context["coinEnabled"] = ((($this->getAttribute(($context["coinSetting"] ?? null), "coin_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["coinSetting"] ?? null), "coin_enabled", array()), false)) : (false)) && ($this->getAttribute(($context["coinSetting"] ?? null), "price_type", array()) == "Coin"));
        // line 3
        $context["onDiscount"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->isDiscount(($context["course"] ?? null));
        // line 4
        $context["showPrice"] = ((($this->getAttribute(($context["course"] ?? null), "parentId", array()) == 0)) ? ($this->getAttribute(($context["course"] ?? null), "price", array())) : ($this->getAttribute(($context["course"] ?? null), "originPrice", array())));
        // line 5
        echo "<span class=\"course-detail__label vertical-sub\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price"), "html", null, true);
        echo "</span>
<span class=\"course-detail-price-money vertical-sub mrm\">
  ";
        // line 7
        if ((($this->getAttribute(($context["course"] ?? null), "price", array()) == 0) && ($this->getAttribute(($context["courseSet"] ?? null), "discountId", array()) <= 0))) {
            // line 8
            echo "    <b class=\"pirce-num color-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price.free"), "html", null, true);
            echo "</b>
  ";
        } else {
            // line 10
            echo "    ";
            if (($context["coinEnabled"] ?? null)) {
                // line 11
                echo "      <b class=\"pirce-num\">";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "price", array()) * $this->getAttribute(($context["coinSetting"] ?? null), "cash_rate", array())), "html", null, true);
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["coinSetting"] ?? null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["coinSetting"] ?? null), "coin_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))), "html", null, true);
                echo "</b>
    ";
            } else {
                // line 13
                echo "      <b class=\"pirce-num\"><span class=\"cd-text-lg\">¥&nbsp;</span>";
                echo twig_escape_filter($this->env, ($context["showPrice"] ?? null), "html", null, true);
                echo "</b>
    ";
            }
            // line 15
            echo "  ";
        }
        // line 16
        echo "</span>

";
        // line 18
        if (($context["onDiscount"] ?? null)) {
            // line 19
            echo "  <span class=\"original-price\">
    ";
            // line 20
            if (($context["coinEnabled"] ?? null)) {
                // line 21
                echo "      <span class=\"price\">
        ";
                // line 22
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "originPrice", array()) * $this->getAttribute(($context["coinSetting"] ?? null), "cash_rate", array())), "html", null, true);
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["coinSetting"] ?? null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["coinSetting"] ?? null), "coin_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))), "html", null, true);
                echo "
      </span>
    ";
            } else {
                // line 25
                echo "      ¥<span class=\"price\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "originPrice", array()), "html", null, true);
                echo "</span>
    ";
            }
            // line 27
            echo "  </span>
  ";
            // line 28
            if (($this->getAttribute(($context["courseSet"] ?? null), "discount", array()) != 0)) {
                // line 29
                echo "    <span class=\"tag-discount\">
        <span class=\"discount-font\">
          ";
                // line 31
                if (((($this->getAttribute(($context["courseSet"] ?? null), "discount", array()) * 10) % 10) > 0)) {
                    // line 32
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price.discount", array("%discount%" => sprintf("%.1f", $this->getAttribute(($context["courseSet"] ?? null), "discount", array())))), "html", null, true);
                    echo "
          ";
                } else {
                    // line 34
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price.discount", array("%discount%" => sprintf("%d", $this->getAttribute(($context["courseSet"] ?? null), "discount", array())))), "html", null, true);
                    echo "
          ";
                }
                // line 36
                echo "        </span>
    </span>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "course/header/header-for-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  104 => 34,  98 => 32,  96 => 31,  92 => 29,  90 => 28,  87 => 27,  81 => 25,  74 => 22,  71 => 21,  69 => 20,  66 => 19,  64 => 18,  60 => 16,  57 => 15,  51 => 13,  44 => 11,  41 => 10,  35 => 8,  33 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-price.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\header-for-price.html.twig");
    }
}
