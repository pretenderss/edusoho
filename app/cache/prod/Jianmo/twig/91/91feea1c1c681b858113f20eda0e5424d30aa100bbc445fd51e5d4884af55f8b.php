<?php

/* course/header/parts/member-deadline-info.html.twig */
class __TwigTemplate_b371a3fb80f42558ca0b5c019b3ac3ecf9c9542a6a51149ba70c3da93db43fa4 extends Twig_Template
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
        // line 2
        echo "  ";
        if (($this->getAttribute(($context["member"] ?? null), "role", array()) == "teacher")) {
            // line 3
            echo "    ";
            if (($this->getAttribute(($context["course"] ?? null), "expiryMode", array()) == "forever")) {
                // line 4
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.forever_mode"), "html", null, true);
                echo "
    ";
            } elseif (($this->getAttribute(            // line 5
($context["course"] ?? null), "expiryMode", array()) == "days")) {
                // line 6
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.days_mode.total_days", array("%expiryDays%" => $this->getAttribute(($context["course"] ?? null), "expiryDays", array()))), "html", null, true);
                echo "
    ";
            } else {
                // line 8
                echo "      ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), "Y-m-d"), "html", null, true);
                echo "
    ";
            }
            // line 10
            echo "  ";
        } else {
            // line 11
            echo "    ";
            if ((($this->getAttribute(($context["course"] ?? null), "expiryMode", array()) == "forever") || ($this->getAttribute(($context["member"] ?? null), "deadline", array()) == 0))) {
                // line 12
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.forever_mode"), "html", null, true);
                echo "
    ";
            } elseif (twig_in_filter($this->getAttribute(            // line 13
($context["course"] ?? null), "expiryMode", array()), array(0 => "end_date", 1 => "date"))) {
                // line 14
                echo "      ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["member"] ?? null), "deadline", array()), "Y-m-d"), "html", null, true);
                echo "
      ";
                // line 15
                if (($this->getAttribute(twig_date_converter($this->env, "now"), "timestamp", array()) > $this->getAttribute(($context["member"] ?? null), "deadline", array()))) {
                    // line 16
                    echo "        <span class=\"color-danger text-12\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.overdue"), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 18
                    echo "        ";
                    $context["lastDays"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->timeDiffFilter($this->getAttribute(($context["member"] ?? null), "deadline", array()));
                    // line 19
                    echo "        ";
                    if ((($context["lastDays"] ?? null) == 0)) {
                        // line 20
                        echo "          <span class=\"color-warning text-12\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.today_will_overdue"), "html", null, true);
                        echo "</span>
        ";
                    } elseif ((                    // line 21
($context["lastDays"] ?? null) == 1)) {
                        // line 22
                        echo "          <span class=\"color-warning text-12\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.tomorrow_will_overdue"), "html", null, true);
                        echo "</span>
        ";
                    } elseif ((                    // line 23
($context["lastDays"] ?? null) < 31)) {
                        // line 24
                        echo "          <span class=\"color-warning text-12\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.days_remaining", array("%lastDays%" => ($context["lastDays"] ?? null))), "html", null, true);
                        echo "</span>
        ";
                    }
                    // line 26
                    echo "      ";
                }
                // line 27
                echo "    ";
            } else {
                // line 28
                echo "      ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["member"] ?? null), "deadline", array()), "Y-m-d"), "html", null, true);
                echo "
      ";
                // line 29
                if (($this->getAttribute(twig_date_converter($this->env, "now"), "timestamp", array()) > $this->getAttribute(($context["member"] ?? null), "deadline", array()))) {
                    // line 30
                    echo "        <span class=\"color-danger text-12\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.overdue"), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 32
                    echo "        ";
                    $context["lastDays"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->timeDiffFilter($this->getAttribute(($context["member"] ?? null), "deadline", array()));
                    // line 33
                    echo "        ";
                    if ((($context["lastDays"] ?? null) == 0)) {
                        // line 34
                        echo "          <span class=\"color-warning text-12\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.today_will_overdue"), "html", null, true);
                        echo "</span>
        ";
                    } elseif ((                    // line 35
($context["lastDays"] ?? null) == 1)) {
                        // line 36
                        echo "          <span class=\"color-warning text-12\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.tomorrow_will_overdue"), "html", null, true);
                        echo "</span>
        ";
                    } elseif ((                    // line 37
($context["lastDays"] ?? null) < 31)) {
                        // line 38
                        echo "          <span class=\"color-warning text-12\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.days_remaining", array("%lastDays%" => ($context["lastDays"] ?? null))), "html", null, true);
                        echo "</span>
        ";
                    }
                    // line 40
                    echo "      ";
                }
                // line 41
                echo "    ";
            }
            // line 42
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "course/header/parts/member-deadline-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  144 => 41,  141 => 40,  135 => 38,  133 => 37,  128 => 36,  126 => 35,  121 => 34,  118 => 33,  115 => 32,  109 => 30,  107 => 29,  102 => 28,  99 => 27,  96 => 26,  90 => 24,  88 => 23,  83 => 22,  81 => 21,  76 => 20,  73 => 19,  70 => 18,  64 => 16,  62 => 15,  57 => 14,  55 => 13,  50 => 12,  47 => 11,  44 => 10,  38 => 8,  32 => 6,  30 => 5,  25 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/parts/member-deadline-info.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\parts\\member-deadline-info.html.twig");
    }
}
