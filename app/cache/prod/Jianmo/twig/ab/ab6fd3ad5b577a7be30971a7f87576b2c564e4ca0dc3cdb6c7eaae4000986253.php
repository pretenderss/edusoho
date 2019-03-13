<?php

/* @activity\download\resources\views\show.html.twig */
class __TwigTemplate_fc661331dfde4ca590a0316dbedfe274d4ec941544acbe97ffdf8fa9dc68072d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/content-layout.html.twig", "@activity\\download\\resources\\views\\show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/perfect-scrollbar.js", 1 => "downloadactivity/js/show/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["materials"] = $this->env->getExtension('AppBundle\Twig\MaterialExtension')->findMaterialsByActivityIdAndSource($this->getAttribute(($context["activity"] ?? null), "id", array()), "coursematerial");
        // line 7
        echo "    ";
        $context["download"] = $this->getAttribute(($context["activity"] ?? null), "ext", array());
        // line 8
        echo "    <div class=\"iframe-parent-content iframe-parent-full\" id=\"download-activity\">
        <ul class=\"download-activity-list\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["materials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 11
            echo "                <li>
                    <a class=\"link-darker\" data-file-id=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "id", array()), "html", null, true);
            echo "\"
                       data-url=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_activity_download", array("courseId" => $this->getAttribute(($context["activity"] ?? null), "fromCourseId", array()), "activityId" => $this->getAttribute($context["material"], "lessonId", array()), "materialId" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
            echo "\"
                       target=\"_blank\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
            echo "
                        ";
            // line 15
            if ((($this->getAttribute($context["material"], "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["material"], "link", array()), null)) : (null))) {
                // line 16
                echo "                            (link)
                        ";
            } else {
                // line 18
                echo "                            (";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->fileSizeFilter($this->getAttribute($context["material"], "fileSize", array())), "html", null, true);
                echo ")
                        ";
            }
            // line 20
            echo "                        <i class=\"es-icon es-icon-filedownload download-icon\"></i>
                        <div class=\"text-xs color-gray mts\">";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute($context["material"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["material"], "description", array()), "")) : ("")), "html", null, true);
            echo "</div>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@activity\\download\\resources\\views\\show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  78 => 21,  75 => 20,  69 => 18,  65 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity\\download\\resources\\views\\show.html.twig", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\download\\resources\\views\\show.html.twig");
    }
}
