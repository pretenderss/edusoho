<?php

/* course/announcement/write-modal.html.twig */
class __TwigTemplate_0be03bf161a417479298943378fbdac25b2b2c03d303123871da75f17fe75fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("announcement/announcement-modal-layout.html.twig", "course/announcement/write-modal.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "announcement/announcement-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "libs/bootstrap-datetimepicker.js", 3 => "app/js/announcement/announcement-write/index.js"));
        // line 3
        $context["tab"] = "manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"announcement-write-form\" class=\"form-horizontal\"
    ";
        // line 7
        if ($this->getAttribute(($context["announcement"] ?? null), "id", array())) {
            // line 8
            echo "      action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_update", array("id" => $this->getAttribute(($context["announcement"] ?? null), "id", array()), "targetType" => ($context["targetType"] ?? null), "targetId" => $this->getAttribute(($context["targetObject"] ?? null), "id", array()))), "html", null, true);
            echo "\"
    ";
        } else {
            // line 10
            echo "      action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_add", array("targetType" => ($context["targetType"] ?? null), "targetId" => $this->getAttribute(($context["targetObject"] ?? null), "id", array()))), "html", null, true);
            echo "\"
    ";
        }
        // line 12
        echo "  >

    ";
        // line 14
        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), null)) : (null))) {
            // line 15
            echo "      <input type=\"hidden\" name=\"targetId\" value=\"";
            echo twig_escape_filter($this->env, ($context["targetId"] ?? null), "html", null, true);
            echo "\">
    ";
        } else {
            // line 17
            echo "      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"startTime\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("announcement.modal.write.select_plan"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-9 controls\" style=\"z-index:2000;\">
          <select class=\"form-control\" name=\"targetId\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                if ($context["plan"]) {
                    // line 24
                    echo "              <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "id", array()), "html", null, true);
                    echo "\" ";
                    if ((($this->getAttribute($context["plan"], "id", array()) == (($this->getAttribute(($context["course"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "id", array()), 0)) : (0))) || ($this->getAttribute($context["plan"], "id", array()) == (($this->getAttribute(($context["announcement"] ?? null), "targetId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["announcement"] ?? null), "targetId", array()), 0)) : (0))))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "title", array()), "html", null, true);
                    echo "</option>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "          </select>
        </div>
      </div>
    ";
        }
        // line 30
        echo "
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"startTime\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("announcement.modal.write.startTime"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-9 controls\" style=\"z-index:2000;\">
        <input type=\"text\" id=\"startTime\"  name=\"startTime\" class=\"form-control\" value=\"";
        // line 36
        if ((($this->getAttribute(($context["announcement"] ?? null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["announcement"] ?? null), "startTime", array()), "now")) : ("now"))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute(($context["announcement"] ?? null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["announcement"] ?? null), "startTime", array()), "now")) : ("now")), "Y-m-d H:i"), "html", null, true);
        }
        echo "\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"endTime\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("announcement.modal.write.endTime"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-9 controls\" style=\"z-index:2000;\">
        <input type=\"text\" id=\"endTime\"  name=\"endTime\" class=\"form-control\" value=\"";
        // line 45
        if ((($this->getAttribute(($context["announcement"] ?? null), "endTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["announcement"] ?? null), "endTime", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["announcement"] ?? null), "endTime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"content\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("announcement.modal.view_all.content"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-9 controls\">
        <textarea class=\"form-control\" id=\"announcement-content-field\" name=\"content\" data-display=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("announcement.modal.view_all.content"), "html", null, true);
        echo "\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["announcement"] ?? null), "content", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

    ";
        // line 58
        if ( !$this->getAttribute(($context["announcement"] ?? null), "id", array())) {
            // line 59
            echo "    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
      </div>
      <div class=\"col-md-9 controls\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" name=\"notify\" value=\"notify\"> ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("announcement.modal.write.send_notify_to_user"), "html", null, true);
            echo "
          </label>
        </div>
      </div>
    </div>
    ";
        }
        // line 71
        echo "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-primary pull-right js-save-btn\" data-target=\"#announcement-write-form\" data-loading-text=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "course/announcement/write-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 77,  191 => 76,  188 => 75,  179 => 71,  170 => 65,  162 => 59,  160 => 58,  149 => 54,  143 => 51,  132 => 45,  126 => 42,  115 => 36,  109 => 33,  104 => 30,  98 => 26,  82 => 24,  77 => 23,  70 => 19,  66 => 17,  60 => 15,  58 => 14,  54 => 12,  48 => 10,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/announcement/write-modal.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\announcement\\write-modal.html.twig");
    }
}
