<?php

/* file-chooser/widget/choose-table.html.twig */
class __TwigTemplate_20823898f3ce8a8e51e631711fb6f649c7c569cf43343d264f7bbef5fbd3dbea extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "file-chooser/widget/choose-table.html.twig", 1);
        // line 2
        if (($context["files"] ?? null)) {
            // line 3
            echo "<div class=\"chooser-list\"><table class=\"table table-striped table-hover\">
  <tbody>
  ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 6
                echo "    <tr id=\"material-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                echo "\" class=\"file-browser-item\"
      data-id=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                echo "\"
      data-name=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                echo "\"
      data-status=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "convertStatus", array()), "html", null, true);
                echo "\"
      data-source=\"self\"
      data-length=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "length", array()), "html", null, true);
                echo "\"
      data-size=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "fileSize", array()), "html", null, true);
                echo "\">
      <td class=\"mlm\"> ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                echo "</td>
      <td> ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->fileSizeFilter($this->getAttribute($context["file"], "fileSize", array())), "html", null, true);
                echo "</td>
      <td> ";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "createdTime", array()), "Y-m-d"), "html", null, true);
                echo "</td>
    </tr>
  ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 18
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "  </tbody>
  </table></div>
";
        } else {
            // line 23
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.empty"), "html", null, true);
            echo "</div>
";
        }
        // line 25
        echo "
";
        // line 26
        echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "file-chooser/widget/choose-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  92 => 25,  86 => 23,  81 => 20,  74 => 18,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  45 => 9,  41 => 8,  37 => 7,  32 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/widget/choose-table.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\file-chooser\\widget\\choose-table.html.twig");
    }
}
