<?php

/* @activity\text\resources\views\show.html */
class __TwigTemplate_afd99276997a0c5e85394bac5ead7231b755e54994b90d98fc5124ca3366a226 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"utf-8\" />
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <title>Picture and text task display page</title>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <link href=\"/activities/text/static-dist/css/text.css\" rel=\"stylesheet\" />
      <base target=\"_blank\">
  </head>
  <body>
    <script src=\"/static-dist/libs/ltc-sdk-client.js\"></script>
    
    <div class=\"iframe-parent-content iframe-parent-full\" id=\"text-activity\" data-finish-time=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "finishDetail", array()), "html", null, true);
        echo "\" data-disable-copy=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled"), "html", null, true);
        echo "\">
      <div class=\"text-activity-content cke_editable cke_contents_ltr\">
      </div>
    </div>
    <script src=\"/activities/text/static-dist/js/show/index.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@activity\\text\\resources\\views\\show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity\\text\\resources\\views\\show.html", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\text\\resources\\views\\show.html");
    }
}
