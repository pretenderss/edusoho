<?php

/* material-lib/web/material-thumb-view.html.twig */
class __TwigTemplate_2fd0850ab86c8080b105c6ac9ee152e9527b9a71c05ac8aa082be0d86184c96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("material-lib/web/layout.html.twig", "material-lib/web/material-thumb-view.html.twig", 1);
        $this->blocks = array(
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "material-lib/web/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/bootstrap-datetimepicker.js", 1 => "libs/jquery-validation.js", 2 => "libs/select2.js", 3 => "app/js/material-lib/index/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_body($context, array $blocks = array())
    {
        // line 6
        echo "<form id=\"material-search-form\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_browsing");
        echo "\" method=\"get\" novalidate>
  <input type=\"hidden\" class=\"js-page\" name=\"page\" value=\"1\">
  <div class=\"source-btn\" role=\"group\" aria-label=\"...\">
    <ul class=\"nav nav-tabs\">
      <li class=\"active\" data-value=\"my\"><a href=\"javascript:;\" class=\"js-source-btn\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.my"), "html", null, true);
        echo "</a></li>
      <li class=\"\" data-value=\"public\"><a href=\"javascript:;\" class=\"js-source-btn\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.public"), "html", null, true);
        echo "</a></li>
      <li class=\"\" data-value=\"favorite\"><a href=\"javascript:;\" class=\"js-source-btn\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.favorite"), "html", null, true);
        echo "</a></li>
      <li class=\"\" data-value=\"sharing\"><a href=\"javascript:;\" class=\"js-source-btn\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.sharing"), "html", null, true);
        echo "</a></li>
    </ul>
    <input type=\"hidden\" name=\"sourceFrom\" value=\"my\">
  </div>
  <div class=\"form-group clearfix material-search-list\">
    <div class=\"col-sm-4\">
      <div class=\"input-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.input_placeholder"), "html", null, true);
        echo "\"  name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
        <span class=\"input-group-btn js-search-btn\">
          <button class=\"btn btn-primary\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.search_btn"), "html", null, true);
        echo "</button>
        </span>
      </div>
    </div>
    <div class=\"col-sm-8 btn-group\">
    ";
        // line 27
        $this->loadTemplate("material-lib/web/form/head.html.twig", "material-lib/web/material-thumb-view.html.twig", 27)->display($context);
        // line 28
        echo "    </div>
  </div>
  ";
        // line 30
        $this->loadTemplate("material-lib/web/form/nav.html.twig", "material-lib/web/material-thumb-view.html.twig", 30)->display($context);
        // line 31
        echo "  <div class=\"material-search-list material-tag js-material-tag\">
    <span  class=\"all\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.tags"), "html", null, true);
        echo "</span>
      <div class=\"right-content\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 35
            echo "          <span class=\"label label-default\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        <input type=\"hidden\" name=\"tagId\">
      </div>
  </div>
  <div class=\"material-search-list bottom\">
    <span class=\"all\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions"), "html", null, true);
        echo "</span>
    <div class=\"right-content \">
      <div class=\"row\">
        <div class=\"col-sm-6\">
        <input class=\"form-control input-time\" type=\"text\" id=\"startDate\" name=\"startDate\" value=\"\" placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.start_time"), "html", null, true);
        echo "\"><span class=\"input-space\">-</span><input class=\"form-control input-time\" type=\"text\" id=\"endDate\" name=\"endDate\" value=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.finish_time"), "html", null, true);
        echo "\" ></div>
        <div class=\"col-sm-2\">
          <select class=\"form-control js-process-status-select\" name=\"processStatus\">
            <option value=\"\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.convert_status"), "html", null, true);
        echo "</option>
            <option value=\"ok\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.convert_status.success"), "html", null, true);
        echo "</option>
            <option value=\"waiting\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.convert_status.doing"), "html", null, true);
        echo "</option>
            <option value=\"error\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.convert_status.error"), "html", null, true);
        echo "</option>
          </select>
        </div>
        <div class=\"col-sm-2\">
          <select class=\"form-control js-use-status-select\" name=\"useStatus\">
            <option value=\"\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.use_status"), "html", null, true);
        echo "</option>
            <option value=\"unused\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.use_status.using"), "html", null, true);
        echo "</option>
            <option value=\"used\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.search.conditions.use_status.used"), "html", null, true);
        echo "</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div id=\"material-lib-items-panel\">
    <a class=\"btn btn-primary js-upload-file-btn\" data-toggle=\"modal\" data-backdrop=\"static\"  data-target=\"#modal\"
    data-url=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_batch_upload", array("token" => $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken("materiallib", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "private"))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.upload_files"), "html", null, true);
        echo "\"   data-placement=\"bottom\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.upload_files"), "html", null, true);
        echo "
    </a>
    <a class=\"btn btn-info js-manage-batch-btn\" href=\"javascript:;\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.batch_manage"), "html", null, true);
        echo "
    </a>
    <span id=\"material-lib-batch-btn-bar\" style=\"display:none;\">
      <a class=\"btn btn-info js-batch-tag-btn\" data-role=\"batch-tag\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.add_tag"), "html", null, true);
        echo "
      </a>
      <a class=\"btn btn-info js-batch-share-btn\" data-role=\"batch-share\" href=\"javascript:;\" data-url=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_batch_share");
        echo "\"  >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.share"), "html", null, true);
        echo "
      </a>
      <a class=\"btn btn-danger js-batch-delete-btn\" data-role=\"batch-dalete\" href=\"javascript:;\" data-url=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_delete_modal_show");
        echo "\"  >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.btn.delete"), "html", null, true);
        echo "
      </a>
      <label class=\"checkbox-inline\" data-role=\"batch-manage\" >
        <input type=\"checkbox\"  data-role=\"batch-select\"/> ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.radios.all"), "html", null, true);
        echo "
      </label>
    </span>
    <div class=\"material-list-container\" id=\"material-item-list\" data-url=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_show_browsing");
        echo "\"></div>
  </div>
</form>
<div id=\"tag-modal\" class=\"modal in\" aria-hidden=\"false\" data-backdrop=\"static\" style=\"\">
  <div class=\"modal-dialog \">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"  aria-hidden=\"true\">×</button>
        <h4 class=\"modal-title\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.tag_manage"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" id=\"tag-form\" action=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_batch_tag_show");
        echo "\" method=\"post\">
          <div class=\"form-group\" id=\"form\">
            <div class=\"col-md-2 control-label\">
              <label for=\"modal-tags\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.tag_manage.tag"), "html", null, true);
        echo "</label>
            </div>

            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"modal-tags\" data-url=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_tag_show_match");
        echo "\" name=\"tags\" required=\"required\" class=\"width-full\" tabindex=\"-1\" value=\"\" data-explain=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.tag_manage.tag_explain"), "html", null, true);
        echo "\">
              <div class=\"help-block\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("material_lib.tag_manage.tag_explain"), "html", null, true);
        echo "</div>
            </div>

          </div>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          <input id=\"select-tag-items\" name=\"fileIds\" type=\"hidden\" value=\"\">
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
        <button id=\"tag-create-btn\" data-submiting-text=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#tag-form \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "material-lib/web/material-thumb-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 110,  262 => 109,  254 => 104,  247 => 100,  241 => 99,  234 => 95,  228 => 92,  222 => 89,  211 => 81,  205 => 78,  197 => 75,  190 => 73,  185 => 71,  179 => 68,  170 => 66,  159 => 58,  155 => 57,  151 => 56,  143 => 51,  139 => 50,  135 => 49,  131 => 48,  123 => 45,  116 => 41,  110 => 37,  99 => 35,  95 => 34,  90 => 32,  87 => 31,  85 => 30,  81 => 28,  79 => 27,  71 => 22,  64 => 20,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "material-lib/web/material-thumb-view.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\material-lib\\web\\material-thumb-view.html.twig");
    }
}
