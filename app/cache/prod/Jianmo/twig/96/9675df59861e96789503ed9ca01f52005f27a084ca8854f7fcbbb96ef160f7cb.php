<?php

/* course/header/nav-tab-for-guest.html.twig */
class __TwigTemplate_39ac8fbb3bdd9935b877d1e11bbb59489647bf3fc3302affe7c0ae91bf1d9360 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs ";
        if (($context["mobile"] ?? null)) {
            echo " es-mobile-nav ";
        }
        echo "\" role=\"tablist\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["metas"] ?? null), "tabs", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            if ((!twig_in_filter($context["key"], array(0 => "material", 1 => "threads")) || ((array_key_exists("navMember", $context)) ? (_twig_default_filter(($context["navMember"] ?? null), null)) : (null)))) {
                // line 3
                echo "\t\t";
                if (($context["mobile"] ?? null)) {
                    // line 4
                    echo "\t\t\t";
                    if (( !((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null)) && ($this->getAttribute($context["loop"], "index", array()) <= 3))) {
                        // line 5
                        echo "\t\t\t\t<li role=\"presentation\" id=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\"
\t\t\t\t    class=\"";
                        // line 6
                        if ((((($this->getAttribute(($context["route_params"] ?? null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route_params"] ?? null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter(($context["nav"] ?? null), "")) : ("")) == $context["key"]))) {
                            echo "active";
                        }
                        echo "\">
\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                        // line 8
                        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                            // line 9
                            echo "\t\t\t\t\t\t\t\thref=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t";
                        } else {
                            // line 11
                            echo "\t\t\t\t\t\t\t\thref=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t";
                        }
                        // line 13
                        echo "\t\t\t\t\t>
\t\t\t\t\t\t";
                        // line 14
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tab"], "name", array())), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                        // line 15
                        if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter(($context["categoryTag"] ?? null), null)) : (null)))) {
                            // line 16
                            echo "\t\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["categoryTag"] ?? null)), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t";
                        }
                        // line 18
                        echo "\t\t\t\t\t\t";
                        if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                            // line 19
                            echo "\t\t\t\t\t\t\t";
                            if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                                // line 20
                                echo "\t\t\t\t\t\t\t\t<small>(";
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                                echo ")</small>
\t\t\t\t\t\t\t";
                            } else {
                                // line 22
                                echo "\t\t\t\t\t\t\t\t<small>(";
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                                echo ")</small>
\t\t\t\t\t\t\t";
                            }
                            // line 24
                            echo "\t\t\t\t\t\t";
                        }
                        // line 25
                        echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                    } elseif (($this->getAttribute(                    // line 27
$context["loop"], "index", array()) == 1)) {
                        // line 28
                        echo "\t\t\t\t<li role=\"presentation\" id=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\"
\t\t\t\t    class=\"navs ";
                        // line 29
                        if ((((($this->getAttribute(($context["route_params"] ?? null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route_params"] ?? null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter(($context["nav"] ?? null), "")) : ("")) == $context["key"]))) {
                            echo "active";
                        }
                        echo "\">
\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                        // line 31
                        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                            // line 32
                            echo "\t\t\t\t\t\t\t\thref=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t";
                        } else {
                            // line 34
                            echo "\t\t\t\t\t\t\t\thref=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t\t\t>
\t\t\t\t\t\t";
                        // line 37
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tab"], "name", array())), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                        // line 38
                        if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter(($context["categoryTag"] ?? null), null)) : (null)))) {
                            // line 39
                            echo "\t\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["categoryTag"] ?? null)), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t";
                        }
                        // line 41
                        echo "\t\t\t\t\t\t";
                        if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                            // line 42
                            echo "\t\t\t\t\t\t\t";
                            if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                                // line 43
                                echo "\t\t\t\t\t\t\t\t<small>(";
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                                echo ")</small>
\t\t\t\t\t\t\t";
                            } else {
                                // line 45
                                echo "\t\t\t\t\t\t\t\t<small>(";
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                                echo ")</small>
\t\t\t\t\t\t\t";
                            }
                            // line 47
                            echo "\t\t\t\t\t\t";
                        }
                        // line 48
                        echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                    }
                    // line 51
                    echo "\t\t";
                } else {
                    // line 52
                    echo "\t\t\t<li role=\"presentation\" id=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
\t\t\t    class=\"";
                    // line 53
                    if ((((($this->getAttribute(($context["route_params"] ?? null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route_params"] ?? null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter(($context["nav"] ?? null), "")) : ("")) == $context["key"]))) {
                        echo "active";
                    }
                    echo "\">
\t\t\t\t<a
\t\t\t\t\t\t";
                    // line 55
                    if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                        // line 56
                        echo "\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t";
                    } else {
                        // line 58
                        echo "\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => $context["key"], "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t>
\t\t\t\t\t";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tab"], "name", array())), "html", null, true);
                    echo "
\t\t\t\t\t";
                    // line 62
                    if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter(($context["categoryTag"] ?? null), null)) : (null)))) {
                        // line 63
                        echo "\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["categoryTag"] ?? null)), "html", null, true);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 65
                    echo "\t\t\t\t\t";
                    if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                        // line 66
                        echo "\t\t\t\t\t\t";
                        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
                            // line 67
                            echo "\t\t\t\t\t\t\t<small>(";
                            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                            echo ")</small>
\t\t\t\t\t\t";
                        } else {
                            // line 69
                            echo "\t\t\t\t\t\t\t<small>(";
                            echo twig_escape_filter($this->env, (($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course_set"] ?? null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                            echo ")</small>
\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t</a>
\t\t\t</li>
\t\t";
                }
                // line 75
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "course/header/nav-tab-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 76,  248 => 75,  243 => 72,  240 => 71,  234 => 69,  228 => 67,  225 => 66,  222 => 65,  216 => 63,  214 => 62,  210 => 61,  207 => 60,  201 => 58,  195 => 56,  193 => 55,  186 => 53,  181 => 52,  178 => 51,  173 => 48,  170 => 47,  164 => 45,  158 => 43,  155 => 42,  152 => 41,  146 => 39,  144 => 38,  140 => 37,  137 => 36,  131 => 34,  125 => 32,  123 => 31,  116 => 29,  111 => 28,  109 => 27,  105 => 25,  102 => 24,  96 => 22,  90 => 20,  87 => 19,  84 => 18,  78 => 16,  76 => 15,  72 => 14,  69 => 13,  63 => 11,  57 => 9,  55 => 8,  48 => 6,  43 => 5,  40 => 4,  37 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/nav-tab-for-guest.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\nav-tab-for-guest.html.twig");
    }
}
