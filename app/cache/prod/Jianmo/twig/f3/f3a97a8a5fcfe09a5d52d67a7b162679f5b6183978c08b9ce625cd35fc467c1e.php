<?php

/* announcement/announcement.html.twig */
class __TwigTemplate_f04cabd36f5241ff0c556612e78c3d82796dfde4e388fd68fe1ed19d35b2d5c3 extends Twig_Template
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
        $context["announcements"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Announcement", array("count" => 3));
        // line 2
        if ((($context["announcements"] ?? null) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "close_announcements_alert"), "method"))) {
            // line 3
            echo "<div class=\"alert cd-alert cd-alert-warning alert-notice hidden-xs\" id=\"announcements-alert\" role=\"alert\">
  <div class=\"container swiper-container\">
    <div class=\"swiper-wrapper\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["announcements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 7
                echo "        ";
                if ($this->getAttribute($context["announcement"], "url", array())) {
                    // line 8
                    echo "        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          <a style=\"color:#ffa51f\" class=\"alert-link\" href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">
            ";
                    // line 11
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 50);
                    echo "
          </a>
        </div>
        ";
                } else {
                    // line 15
                    echo "          <div class=\"swiper-slide\">
            <i class=\"es-icon es-icon-infooutline\"></i>
            <a style=\"color:#ffa51f\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_global_show", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                    echo "\" >
              ";
                    // line 18
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 50);
                    echo "
            </a>
          </div>
        ";
                }
                // line 22
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" data-cookie=\"close_announcements_alert\">
      <span aria-hidden=\"true\">×</span>
    </button> 
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "announcement/announcement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  65 => 22,  58 => 18,  54 => 17,  50 => 15,  43 => 11,  39 => 10,  35 => 8,  32 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "announcement/announcement.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\announcement\\announcement.html.twig");
    }
}
