<?php

/* macro.html.twig */
class __TwigTemplate_8d33f19f35a9a78a773dd6026813b132761c698d2ffd8226d956213652cd3635 extends Twig_Template
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
        // line 79
        echo "
";
        // line 102
        echo "
";
        // line 123
        echo "
";
        // line 145
        echo "
";
        // line 168
        echo "
";
        // line 172
        echo "
";
        // line 189
        echo "
";
    }

    // line 2
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            if (($context["user"] ?? null)) {
                // line 4
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo " ";
                if (($context["card"] ?? null)) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 5
                if ((($context["imgClass"] ?? null) == "avatar-md")) {
                    // line 6
                    echo "        ";
                    $context["avatarType"] = "medium";
                    // line 7
                    echo "      ";
                } elseif ((($context["imgClass"] ?? null) == "avatar-lg")) {
                    // line 8
                    echo "        ";
                    $context["avatarType"] = "large";
                    // line 9
                    echo "      ";
                } else {
                    // line 10
                    echo "        ";
                    $context["avatarType"] = "small";
                    // line 11
                    echo "      ";
                }
                // line 12
                echo "    <img class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter(($context["imgClass"] ?? null), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? null), ($context["avatarType"] ?? null)), "html", null, true);
                echo "\">

  </a>
  ";
            } else {
                // line 16
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 17
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter(($context["imgClass"] ?? null), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath("", "small"), "html", null, true);
                echo "\">
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getuser_avatar_link($__user__ = null, $__size__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            $context["size"] = ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? null), "small")) : ("small"));
            // line 25
            echo "  ";
            if (($context["user"] ?? null)) {
                // line 26
                echo "    <a
      class=\"avatar-link-";
                // line 27
                echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
                echo " ";
                if (twig_in_filter("card", ($context["options"] ?? null))) {
                    echo "js-user-card";
                }
                echo "\"
      ";
                // line 28
                if (twig_in_filter("_blank", ($context["options"] ?? null))) {
                    // line 29
                    echo "        target=\"_blank\"
      ";
                }
                // line 31
                echo "      href=\"";
                if (twig_in_filter("null_link", ($context["options"] ?? null))) {
                    echo "javascript:;";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                }
                echo "\"
      data-card-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\"
      data-user-id=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 34
                echo $this->getAttribute($this, "user_avater_img", array(0 => ($context["user"] ?? null), 1 => ($context["size"] ?? null)), "method");
                echo "
    </a>
  ";
            } else {
                // line 37
                echo "    <a class=\"avatar-link-";
                echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
                echo "\" href=\"javascript:;\">
      ";
                // line 38
                echo $this->getAttribute($this, "user_avater_img", array(0 => ($context["user"] ?? null), 1 => ($context["size"] ?? null)), "method");
                echo "
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getuser_avater_img($__user__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 44
            echo "<img class=\"avatar-";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? null), ($context["size"] ?? null)), "html", null, true);
            echo "\">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            if (($context["user"] ?? null)) {
                // line 60
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 62
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" href=\"javascript:;\"><del>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.not_exist"), "html", null, true);
                echo "</del></a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getflash_messages($__isUseNew__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "isUseNew" => $__isUseNew__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 68
                echo "    ";
                if (("currentThrowedException" != $context["type"])) {
                    // line 69
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                        // line 70
                        echo "        ";
                        if (($context["isUseNew"] ?? null)) {
                            // line 71
                            echo "          <div class=\"alert cd-alert cd-alert-";
                            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]);
                            echo "</div>
        ";
                        } else {
                            // line 73
                            echo "          <div class=\"alert alert-";
                            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]);
                            echo "</div>
        ";
                        }
                        // line 75
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "    ";
                }
                // line 77
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 80
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            echo "  ";
            ob_start();
            // line 82
            echo "
      ";
            // line 83
            $context["kilobyte"] = 1024;
            // line 84
            echo "      ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 85
            echo "      ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 86
            echo "      ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 87
            echo "
      ";
            // line 88
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 89
                echo "          ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 90
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 91
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 92
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 93
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 94
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 95
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 97
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 99
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 103
    public function getpaginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 104
            echo "  ";
            if ((((array_key_exists("paginator", $context)) ? (_twig_default_filter(($context["paginator"] ?? null))) : ("")) && ($this->getAttribute(($context["paginator"] ?? null), "lastPage", array()) > 1))) {
                // line 105
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination cd-pagination\">
        ";
                // line 107
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "firstPage", array()))) {
                    // line 108
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "firstPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li><a  href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        ";
                }
                // line 111
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? null), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 112
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "
        ";
                // line 115
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "lastPage", array()))) {
                    // line 116
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li><a  href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        ";
                }
                // line 119
                echo "      </ul>
    </nav>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 124
    public function getstar($__score__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 125
            echo "  ";
            $context["floorScore"] = twig_round(($context["score"] ?? null), 0, "floor");
            // line 126
            echo "  ";
            $context["emptyNum"] = (5 - ($context["floorScore"] ?? null));
            // line 127
            echo "
  ";
            // line 128
            if ((($context["floorScore"] ?? null) > 0)) {
                // line 129
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["floorScore"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 130
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "  ";
            }
            // line 133
            echo "
  ";
            // line 134
            if (((($context["score"] ?? null) - ($context["floorScore"] ?? null)) >= 0.5)) {
                // line 135
                echo "    ";
                $context["emptyNum"] = (($context["emptyNum"] ?? null) - 1);
                // line 136
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 138
            echo "
  ";
            // line 139
            if ((($context["emptyNum"] ?? null) > 0)) {
                // line 140
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["emptyNum"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 141
                    echo "      <i class=\"es-icon es-icon-staroutline\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function getajax_paginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 147
            echo "  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()), 1)) : (1)), "html", null, true);
            echo "\">

  ";
            // line 149
            if (($this->getAttribute(($context["paginator"] ?? null), "lastPage", array()) > 1)) {
                // line 150
                echo "    <nav class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination cd-pagination\">
        ";
                // line 152
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "firstPage", array()))) {
                    // line 153
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "firstPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "firstPage", array()), "html", null, true);
                    echo "\"><a href=\"javascript:;\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li data-url=\"";
                    // line 154
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "previousPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "previousPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        ";
                }
                // line 156
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? null), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 157
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo " data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "
        ";
                // line 160
                if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? null), "lastPage", array()))) {
                    // line 161
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "nextPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "nextPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li data-url=\"";
                    // line 162
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? null), "getLastPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "getLastPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        ";
                }
                // line 164
                echo "      </ul>
    </nav>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 169
    public function getlink($__name__ = null, $__url__ = null, $__title__ = "", $__target__ = "_blnak", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "url" => $__url__,
            "title" => $__title__,
            "target" => $__target__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 170
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" title= \"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</strong></a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 173
    public function gettable_filter($__header__ = null, $__choices__ = null, $__key__ = null, $__dataTarget__ = null, $__selectedChoice__ = null, $__default__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "header" => $__header__,
            "choices" => $__choices__,
            "key" => $__key__,
            "dataTarget" => $__dataTarget__,
            "selectedChoice" => $__selectedChoice__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 174
            echo "  <div class=\"cd-dropdown cd-dropdown-filter\" data-toggle=\"cd-dropdown\">
    ";
            // line 175
            echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
            echo "
    <a href=\"javascript:;\" class=\"";
            // line 176
            if ((($context["selectedChoice"] ?? null) == "")) {
                echo "cd-link-assist";
            } else {
                echo "cd-link-primary";
            }
            echo "\">
      <i class=\"cd-icon cd-icon-filter cd-text-sm\"></i>
    </a>
    <ul class=\"dropdown-menu\">
      ";
            // line 180
            if (($context["default"] ?? null)) {
                // line 181
                echo "        <li class=\"";
                if ((($context["selectedChoice"] ?? null) == "")) {
                    echo "active";
                }
                echo "\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["dataTarget"] ?? null), "html", null, true);
                echo "\" data-filter-key=\"";
                echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo "\" data-filter-value=\"\">";
                echo twig_escape_filter($this->env, ($context["default"] ?? null), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 183
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["choiceKey"] => $context["choice"]) {
                // line 184
                echo "        <li class=\"";
                if ((($context["selectedChoice"] ?? null) == $context["choiceKey"])) {
                    echo "active";
                }
                echo "\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["dataTarget"] ?? null), "html", null, true);
                echo "\" data-filter-key=\"";
                echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo "\"  data-filter-value=\"";
                echo twig_escape_filter($this->env, $context["choiceKey"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choiceKey'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "    </ul>
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 190
    public function getcd_select($__options__ = null, $__checkedOption__ = null, $__name__ = null, $__className__ = "", $__id__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "checkedOption" => $__checkedOption__,
            "name" => $__name__,
            "className" => $__className__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 191
            echo "  <div class=\"cd-select ";
            echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
    <input type=\"hidden\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, ($context["checkedOption"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" />
    <div class=\"select-value\">";
            // line 193
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["options"] ?? null), ($context["checkedOption"] ?? null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), ($context["checkedOption"] ?? null), array(), "array"), "")) : ("")), "html", null, true);
            echo "</div>
    <ul class=\"select-options\">
      ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["optionKey"] => $context["option"]) {
                // line 196
                echo "        <li class=\"";
                if (($context["optionKey"] == ($context["checkedOption"] ?? null))) {
                    echo "checked";
                }
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $context["optionKey"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['optionKey'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "    </ul>
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  904 => 198,  889 => 196,  885 => 195,  880 => 193,  874 => 192,  867 => 191,  851 => 190,  834 => 186,  815 => 184,  810 => 183,  796 => 181,  794 => 180,  783 => 176,  779 => 175,  776 => 174,  759 => 173,  735 => 170,  720 => 169,  702 => 164,  695 => 162,  688 => 161,  686 => 160,  683 => 159,  666 => 157,  661 => 156,  654 => 154,  647 => 153,  645 => 152,  639 => 150,  637 => 149,  631 => 147,  618 => 146,  602 => 143,  595 => 141,  590 => 140,  588 => 139,  585 => 138,  581 => 136,  578 => 135,  576 => 134,  573 => 133,  570 => 132,  563 => 130,  558 => 129,  556 => 128,  553 => 127,  550 => 126,  547 => 125,  535 => 124,  517 => 119,  512 => 117,  507 => 116,  505 => 115,  502 => 114,  487 => 112,  482 => 111,  477 => 109,  472 => 108,  470 => 107,  464 => 105,  461 => 104,  448 => 103,  431 => 99,  425 => 97,  419 => 95,  417 => 94,  412 => 93,  410 => 92,  405 => 91,  403 => 90,  398 => 89,  396 => 88,  393 => 87,  390 => 86,  387 => 85,  384 => 84,  382 => 83,  379 => 82,  376 => 81,  364 => 80,  345 => 77,  342 => 76,  336 => 75,  328 => 73,  320 => 71,  317 => 70,  312 => 69,  309 => 68,  304 => 67,  292 => 66,  271 => 62,  261 => 60,  259 => 59,  245 => 58,  226 => 44,  213 => 43,  194 => 38,  189 => 37,  183 => 34,  179 => 33,  175 => 32,  166 => 31,  162 => 29,  160 => 28,  152 => 27,  149 => 26,  146 => 25,  144 => 24,  130 => 23,  109 => 17,  104 => 16,  94 => 12,  91 => 11,  88 => 10,  85 => 9,  82 => 8,  79 => 7,  76 => 6,  74 => 5,  59 => 4,  57 => 3,  42 => 2,  37 => 189,  34 => 172,  31 => 168,  28 => 145,  25 => 123,  22 => 102,  19 => 79,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "macro.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\macro.html.twig");
    }
}
