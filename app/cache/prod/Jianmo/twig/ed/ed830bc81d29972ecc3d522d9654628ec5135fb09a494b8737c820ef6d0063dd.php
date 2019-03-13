<?php

/* @activity/video/resources/views/show/index.html.twig */
class __TwigTemplate_8777c7df251cd295e5e44a2ec3a427c7f4ff521302b87455813e836066dbab6b extends Twig_Template
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "videoactivity/js/show/index.js"));
        // line 2
        $context["video"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->prepareVideoMediaUri($this->getAttribute(($context["activity"] ?? null), "ext", array()));
        // line 3
        echo "
";
        // line 4
        if (((($this->getAttribute(($context["video"] ?? null), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "mediaSource", array()), "self")) : ("self")) == "self")) {
            // line 5
            echo "  ";
            if ((($this->getAttribute(($context["video"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "file", array()), null)) : (null))) {
                // line 6
                echo "    <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\"
         data-role=\"lesson-content\"
         data-watch-url=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_acitvity_watch", array("courseId" => $this->getAttribute(($context["activity"] ?? null), "fromCourseId", array()), "id" => $this->getAttribute(($context["activity"] ?? null), "id", array()))), "html", null, true);
                echo "\"
         data-id=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "id", array()), "html", null, true);
                echo "\"
    data-watch-time-sec=\"";
                // line 10
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.watch_time_sec"), 120), "html", null, true);
                echo "\">
    ";
                // line 12
                echo "    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Player:show", array("id" => $this->getAttribute(($context["video"] ?? null), "mediaId", array()), "isPart" => true)));
                echo "
  </div>
  ";
            } else {
                // line 15
                echo "  <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"lesson-content\">
    ";
                // line 16
                $this->loadTemplate("activity/file-not-found.html.twig", "@activity/video/resources/views/show/index.html.twig", 16)->display(array_merge($context, array("type" => "video")));
                // line 17
                echo "  </div>
  ";
            }
        } elseif (((($this->getAttribute(        // line 19
($context["video"] ?? null), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "mediaSource", array()), "self")) : ("self")) == "iframe")) {
            // line 20
            echo "  <div id=\"task-preview-iframe\" class=\"iframe-parent-content iframe-parent-full\">
    <iframe src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["video"] ?? null), "mediaUri", array()), "html", null, true);
            echo "\" style=\"height:100%; width:100%; border:0px; overflow: hidden\"
            scrolling=\"no\"></iframe>
  </div>
";
        } else {
            // line 25
            echo "  <div class=\"dashboard-body\">
    <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"lesson-content\"
         data-media-source=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["video"] ?? null), "mediaSource", array()), "html", null, true);
            echo "\">
      <div id=\"swf-player\" data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["video"] ?? null), "mediaUri", array()), "html", null, true);
            echo "\"></div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@activity/video/resources/views/show/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  79 => 27,  75 => 25,  68 => 21,  65 => 20,  63 => 19,  59 => 17,  57 => 16,  54 => 15,  47 => 12,  43 => 10,  39 => 9,  35 => 8,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/video/resources/views/show/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\video\\resources\\views\\show\\index.html.twig");
    }
}
