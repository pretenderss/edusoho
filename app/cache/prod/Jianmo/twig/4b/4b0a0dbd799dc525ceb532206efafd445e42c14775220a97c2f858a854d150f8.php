<?php

/* my/user/avatar-alert.html.twig */
class __TwigTemplate_2e345e1c3fcefa168d2b7ce33b23f0a6815e7eec0bf3f091011d6f919139b695 extends Twig_Template
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
        if (($context["avatarAlert"] ?? null)) {
            // line 2
            echo "  <div class=\"alert cd-alert cd-alert-warning cd-alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"><i class=\"cd-icon cd-icon-close\"></i></button>
    ";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.avatar", array("%setAvatar%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings")));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "my/user/avatar-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/user/avatar-alert.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\user\\avatar-alert.html.twig");
    }
}
