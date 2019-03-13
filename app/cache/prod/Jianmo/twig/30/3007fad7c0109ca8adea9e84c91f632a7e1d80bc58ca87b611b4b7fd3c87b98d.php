<?php

/* export/export-btn.html.twig */
class __TwigTemplate_7a86c76746bcd8344d0b5b138dcf38a2864a1874360444b25158eadf6a215ff6 extends Twig_Template
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
        echo "<a class=\"";
        if ( !((array_key_exists("showDownLoadText", $context)) ? (_twig_default_filter(($context["showDownLoadText"] ?? null), 1)) : (1))) {
            echo "color-primary";
        } else {
            echo " cd-btn ";
        }
        echo " mhs ";
        echo twig_escape_filter($this->env, ((array_key_exists("exportClass", $context)) ? (_twig_default_filter(($context["exportClass"] ?? null), "cd-btn-primary")) : ("cd-btn-primary")), "html", null, true);
        echo " js-export-btn\"
   href=\"javascript:;\"
   data-try-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("try_export", array("name" => ($context["exportFileName"] ?? null), "limit" => ((array_key_exists("exportLimit", $context)) ? (_twig_default_filter(($context["exportLimit"] ?? null), "")) : ("")))), "html", null, true);
        echo "\"
   data-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export", array("name" => ($context["exportFileName"] ?? null))), "html", null, true);
        echo "\"
   data-pre-url=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pre_export", array("name" => ($context["exportFileName"] ?? null))), "html", null, true);
        echo "\"
   data-loading-text=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.export.submiting"), "html", null, true);
        echo "\"
   data-target-form=\"#";
        // line 7
        echo twig_escape_filter($this->env, ($context["targetFormId"] ?? null), "html", null, true);
        echo "\"
>
    <i class=\"es-icon es-icon-filedownload cd-text-sm\"></i>
    ";
        // line 10
        if (((array_key_exists("showDownLoadText", $context)) ? (_twig_default_filter(($context["showDownLoadText"] ?? null), 1)) : (1))) {
            // line 11
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "form.btn.export")) : ("form.btn.export"))), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "</a>

<div id=\"export-modal\" class=\"hide\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 class=\"modal-title\" data-success=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file.download.finish"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file.download.start"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress progress-striped active\">
                    <div  id=\"progress-bar\" class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 31
        if (((array_key_exists("exportWebpack", $context)) ? (_twig_default_filter(($context["exportWebpack"] ?? null))) : (""))) {
            // line 32
            echo "    ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/exporter/index.js"));
        } else {
            // line 34
            echo "    ";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/export/export.js");
        }
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "export/export-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  92 => 34,  88 => 32,  86 => 31,  70 => 20,  61 => 13,  55 => 11,  53 => 10,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "export/export-btn.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\export\\export-btn.html.twig");
    }
}
