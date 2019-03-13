<?php

/* @activity\text\resources\views\create_or_update_body.html */
class __TwigTemplate_da4f3f898c1d0030367ea057363196670eb1c5ce6554587d75d40031d2cb939c extends Twig_Template
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
    <title>text create or update</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"/activities/text/static-dist/css/text.css\" rel=\"stylesheet\" />
</head>
<style>
  .ckeditor-uploadpictures-pick-btn.file-pick-btn {
    position: relative;
  }
  .ckeditor-uploadpictures-pick-btn.file-pick-btn  >div:nth-child(2){
    width:100%!important;
    height:100%!important;
  }
</style>
<body>
<script src=\"/static-dist/libs/ltc-sdk-client.js\"></script>
<div class=\"tab-content\" id=\"iframe-content\">
    <div class=\"tab-pane js-course-tasks-pane active js-step2-view\">
        <form class=\"form-horizontal\" id=\"step2-form\" >
            <div class=\"form-group\">
                <div class=\"col-sm-2 control-label\">
                    <label for=\"title\" class=\"control-label-required\">
                        标题名称
                    </label>
                </div>
                <div class=\"col-sm-10\">
                  <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"\" >
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-2 control-label\">
                    <label for=\"text-content-field\" class=\"control-label-required\">
                      内容
                    </label>
                </div>
                <div class=\"col-sm-10\">
                  <a id=\"see-draft-btn\" class=\"activity-link text-12 js-continue-edit hidden\" data-content=\"\">
                    您有一段自动保存内容，请点击继续编辑
                  </a>
                    <textarea class=\"form-control type-hidden js-text\" id=\"text-content-field\" name=\"content\"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
<script src=\"/activities/text/static-dist/js/create/index.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@activity\\text\\resources\\views\\create_or_update_body.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity\\text\\resources\\views\\create_or_update_body.html", "D:\\workspace\\vboxShare\\edusoho\\web\\activities\\text\\resources\\views\\create_or_update_body.html");
    }
}
