<?php

/* admin/role/templates/navigation.html.twig */
class __TwigTemplate_6c4aef1e12c081243e7fe8be0d6f5e239029156fb118ba561b0f9c60d6f80b5c extends Twig_Template
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
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions(($context["parentCode"] ?? null));
        // line 2
        echo "
";
        // line 3
        if (((array_key_exists("permissions", $context)) ? (_twig_default_filter(($context["permissions"] ?? null), null)) : (null))) {
            // line 4
            echo "  ";
            if (((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? null), null)) : (null))) {
                // line 5
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array()));
                // line 6
                echo "  ";
            } else {
                // line 7
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode("admin");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
  ";
            // line 11
            echo "  ";
            $context["permissions"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arraysKeyConvert(($context["permissions"] ?? null), "visable", "visible");
            // line 12
            echo "  ";
            // line 13
            echo "
  <ul class=\"nav navbar-nav\">
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visible", array(), "any", true, true) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visible", array())))) {
                    // line 16
                    echo "      ";
                    // line 17
                    echo "      ";
                    if (($this->getAttribute($context["m"], "code", array()) != "admin_homepage")) {
                        // line 18
                        echo "        <li ";
                        if ((($context["menu"] ?? null) && ($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute(($context["rootMenu"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["rootMenu"] ?? null), "code", array()), null)) : (null))))) {
                            echo "class=\"active\"";
                        }
                        echo " id=\"menu_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "code", array()), "html", null, true);
                        echo "\">
          ";
                        // line 19
                        $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                        // line 20
                        echo "          ";
                        if (((($this->getAttribute(($context["tabMenu"] ?? null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tabMenu"] ?? null), "mode", array()), "")) : ("")) == "capsules")) {
                            // line 21
                            echo "            ";
                            $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild(($context["tabMenu"] ?? null));
                            // line 22
                            echo "          ";
                        }
                        // line 23
                        echo "          <a
              title=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                        echo "\"
              href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["tabMenu"] ?? null)), "html", null, true);
                        echo "\"
              ";
                        // line 26
                        if ((($this->getAttribute($context["m"], "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "blank", array()), false)) : (false))) {
                            // line 27
                            echo "                target=\"_blank\"
              ";
                        }
                        // line 29
                        echo "          >
            ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                        echo "
          </a>

        ";
                        // line 34
                        echo "      </li>
      ";
                    }
                    // line 36
                    echo "      ";
                    // line 37
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/role/templates/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  115 => 37,  113 => 36,  109 => 34,  103 => 30,  100 => 29,  96 => 27,  94 => 26,  90 => 25,  86 => 24,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  72 => 19,  63 => 18,  60 => 17,  58 => 16,  53 => 15,  49 => 13,  47 => 12,  44 => 11,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/templates/navigation.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\admin\\role\\templates\\navigation.html.twig");
    }
}
