<?php

/* org/course-create-org-tree-select.html.twig */
class __TwigTemplate_7963036d08f3786db9bbd3606e4db309f1c79be42bf18afcee1ae7538c586a58 extends Twig_Template
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
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter(($context["orgCode"] ?? null), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "orgCode", array())));
            // line 6
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) ? (null) : (($context["currentOrgCode"] ?? null)))));
            // line 7
            echo "  <div class=\"course-title form-group\">
    <div class=\"mlm course-org-title controls-label text-lg\">
      <div class=\"course-piece title\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org"), "html", null, true);
            echo "
      </div>
    </div>
    <div class=\"col-md-10 course-title-input\">
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control js-org-tree-select\">
        <option value=";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentOrgTree"] ?? null), 0, array()), "orgCode", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentOrgTree"] ?? null), 0, array()), "name", array()), "html", null, true);
            echo "</option>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentOrgTree"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 17
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
            // line 19
            echo "      </select>
    </div>
  </div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "org/course-create-org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  57 => 17,  53 => 16,  47 => 15,  39 => 10,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/course-create-org-tree-select.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\org\\course-create-org-tree-select.html.twig");
    }
}
