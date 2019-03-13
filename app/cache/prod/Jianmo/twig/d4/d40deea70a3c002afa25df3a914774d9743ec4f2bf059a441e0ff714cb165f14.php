<?php

/* material-lib/web/widget/thumb-item.html.twig */
class __TwigTemplate_578fd3153ae51f51b1dd5bd7b9bb017d087f8ce9968b0bab36307216b0878914 extends Twig_Template
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
        echo "<div class=\"col-lg-3 col-sm-4 col-xs-6 materials-list";
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter(($context["source"] ?? null), "")) : ("")) == "my")) {
            echo " my-materials-list ";
        }
        echo "\" data-file-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "id", array()), "html", null, true);
        echo "\">
  <ul class=\"materials-ul clearfix\">
    <li class=\"img-li\">
      ";
        // line 4
        $this->loadTemplate("material-lib/web/widget/thumbnail.html.twig", "material-lib/web/widget/thumb-item.html.twig", 4)->display($context);
        // line 5
        echo "    </li>
    <li class=\"caption\">
      <p class=\"title text-overflow\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "filename", array()), "html", null, true);
        echo "\">";
        if (($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud")) {
            // line 8
            echo "        <span class=\"glyphicon glyphicon-cloud\"></span>
      ";
        }
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "filename", array()), "html", null, true);
        echo "</p>

      <p class=\"status-parent\">
      ";
        // line 12
        if ((($this->getAttribute(($context["uploadFile"] ?? null), "storage", array()) == "cloud") && twig_in_filter($this->getAttribute(($context["uploadFile"] ?? null), "type", array()), array(0 => "video", 1 => "ppt", 2 => "document")))) {
            // line 13
            echo "        ";
            if (($this->getAttribute(($context["uploadFile"] ?? null), "convertStatus", array()) == "error")) {
                // line 14
                echo "          <span class=\"status label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.upload_file.convert_status.error"), "html", null, true);
                echo "</span>
        ";
            } elseif (twig_in_filter($this->getAttribute(            // line 15
($context["uploadFile"] ?? null), "convertStatus", array()), array(0 => "doing", 1 => "waiting"))) {
                // line 16
                echo "          <span class=\"status label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.upload_file.convert_status.doing"), "html", null, true);
                echo "</span>
        ";
            }
            // line 18
            echo "      ";
        }
        // line 19
        echo "
      ";
        // line 20
        if (((($this->getAttribute(($context["uploadFile"] ?? null), "usedCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uploadFile"] ?? null), "usedCount", array()), 0)) : (0)) == 0)) {
            // line 21
            echo "        <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.upload_file.not_used"), "html", null, true);
            echo "</span>
      ";
        }
        // line 23
        echo "      </p>
      ";
        // line 25
        echo "      <p class=\"color-gray text-overflow text-sm mb0\" title=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "createdTime", array()), "Y/m/d H:i"), "html", null, true);
        echo "\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.upload_file.time"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["uploadFile"] ?? null), "createdTime", array()), "Y/m/d H:i"), "html", null, true);
        echo "
      </p>
      ";
        // line 28
        if (twig_in_filter(($context["source"] ?? null), array(0 => "public", 1 => "sharing", 2 => "favorite"))) {
            // line 29
            echo "      <p class=\"color-gray text-overflow text-sm\" title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["createdUsers"] ?? null), (($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array()), 0)) : (0)), array(), "array", false, true), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["createdUsers"] ?? null), (($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array()), 0)) : (0)), array(), "array", false, true), "nickname", array()), "")) : ("")), "html", null, true);
            echo "\">
        ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.upload_file.creator"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["createdUsers"] ?? null), (($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array()), 0)) : (0)), array(), "array", false, true), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["createdUsers"] ?? null), (($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uploadFile"] ?? null), "createdUserId", array()), 0)) : (0)), array(), "array", false, true), "nickname", array()), "")) : ("")), "html", null, true);
            echo "
      </p>
      ";
        }
        // line 33
        echo "    </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "material-lib/web/widget/thumb-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  104 => 30,  99 => 29,  97 => 28,  90 => 26,  85 => 25,  82 => 23,  76 => 21,  74 => 20,  71 => 19,  68 => 18,  62 => 16,  60 => 15,  55 => 14,  52 => 13,  50 => 12,  44 => 9,  40 => 8,  36 => 7,  32 => 5,  30 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "material-lib/web/widget/thumb-item.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\material-lib\\web\\widget\\thumb-item.html.twig");
    }
}
