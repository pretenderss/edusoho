<?php

/* org/org-tree-select-webpack.html.twig */
class __TwigTemplate_f53bd5b8d52515797ada28090861c2c401aaa31c899839d1c71e93065bfdd681 extends Twig_Template
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
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "
  ";
            // line 3
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/select2.js", 1 => "app/js/org/org-tree-select/index.js"));
            // line 4
            echo "  
  ";
            // line 5
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter(($context["modal"] ?? null), null)) : (null));
            // line 6
            echo "
  ";
            // line 7
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter(($context["colmd"] ?? null), 8)) : (8));
            // line 8
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter(($context["lablecolmd"] ?? null), 2)) : (2));
            // line 9
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter(($context["nocolmd"] ?? null), false)) : (false));
            // line 10
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter(($context["inputClass"] ?? null), "")) : (""));
            // line 11
            echo "
  ";
            // line 12
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter(($context["orgCode"] ?? null), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "orgCode", array())));
            // line 13
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) ? (null) : (($context["currentOrgCode"] ?? null)))));
            // line 14
            echo "
    <div class=\"form-group ";
            // line 15
            if ((($context["modal"] ?? null) == "list")) {
                echo "controls";
            }
            echo "\">
      ";
            // line 16
            if ((($context["modal"] ?? null) != "list")) {
                // line 17
                echo "      <label class=\"";
                if ( !($context["nocolmd"] ?? null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, ($context["lablecolmd"] ?? null), "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org"), "html", null, true);
                echo "</label>
      <div class=\"";
                // line 18
                if ( !($context["nocolmd"] ?? null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, ($context["colmd"] ?? null), "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 20
            echo "
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control js-org-tree-select ";
            // line 21
            echo twig_escape_filter($this->env, ($context["inputClass"] ?? null), "html", null, true);
            echo "\">
        <option value=";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentOrgTree"] ?? null), 0, array()), "orgCode", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentOrgTree"] ?? null), 0, array()), "name", array()), "html", null, true);
            echo "</option>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentOrgTree"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 24
                echo "          <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "orgCode", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["org"], "orgCode", array()) == ($context["currentOrgCode"] ?? null))) {
                    echo "selected";
                }
                echo ">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["org"], "depth", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($this->getAttribute($context["org"], "depth", array()) > 1)) {
                        echo "　";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "name", array()), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </select>

      ";
            // line 28
            if ((($context["modal"] ?? null) != "list")) {
                // line 29
                echo "      </div>
      ";
            }
            // line 31
            echo "    </div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "org/org-tree-select-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 31,  131 => 29,  129 => 28,  125 => 26,  100 => 24,  96 => 23,  90 => 22,  86 => 21,  83 => 20,  74 => 18,  64 => 17,  62 => 16,  56 => 15,  53 => 14,  50 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/org-tree-select-webpack.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\org\\org-tree-select-webpack.html.twig");
    }
}
