<?php

/* settings/profile.html.twig */
class __TwigTemplate_17b21063f3aba6c5db81905c331bad900d7c16ef8d52afb11069157112a24d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("v2/layout.html.twig", "settings/profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "profile";
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/bootstrap-datetimepicker.js", 2 => "libs/jquery-validation.js", 3 => "app/js/settings/profile/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.personal_info_menu"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.personal_info_menu"), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_main_body($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        if (($context["fromCourse"] ?? null)) {
            // line 15
            echo "    <div class=\"alert cd-alert cd-alert-info\">
      ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.alter_description"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(0 => true), "method"), "html", null, true);
        echo "
  <form id=\"user-profile-form\" class=\"row cd-row\" method=\"post\">
    <div class=\"col-md-11\">
      <div class=\" cd-mr24 cd-mb40\">
        ";
        // line 24
        $this->loadTemplate("common/upload-image.html.twig", "settings/profile.html.twig", 24)->display(array_merge($context, array("saveUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_profile_avatar_crop_modal"), "targetImg" => "profile-avatar", "cropWidth" => "270", "cropHeight" => "270", "imageClass" => "cd-avatar cd-avatar-square cd-avatar-lg", "imageText" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.shange_avatar"), "imageSrc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(        // line 31
($context["user"] ?? null), "largeAvatar", array()), "avatar.png"))));
        // line 33
        echo "      </div>
      <p class=\"image-upload-tip\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.upload.img.tip"), "html", null, true);
        echo "</p>
      <div class=\"form-group cd-form-group cd-form-group-inline cd-form-group-action\" id=\"nickname-form-group\">

        <label for=\"nickname\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.username_label"), "html", null, true);
        echo "</label>

        <div class=\"static-text input-edit__static-dom\">
          <span class=\"input-edit__static-text\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
        echo "</span>
          ";
        // line 41
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("user_partner.nickname_enabled")) {
            // line 42
            echo "            <a href=\"javascript:;\" class=\"input-edit__edit-btn cd-link-minor\">
              <i class=\"cd-icon cd-icon-edit\"></i>
            </a>
          ";
        }
        // line 46
        echo "        </div>

        <div class=\"input-edit__edit-dom\" style=\"display:none\">
          <input data-url=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_nickname_check");
        echo "\" name=\"nickname\" id=\"nickname\" type=\"text\" class=\"form-control input-edit__input\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nickname", array()), "html", null, true);
        echo "\">

          <div class=\"action-button\">
            <button type=\"button\" class=\"btn cd-btn cd-btn-primary input-edit__save-btn\"
              data-input-name=\"nickname\"
              data-url=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("setting_nickname");
        echo "\" 
              data-loading-text=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">
              ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "
            </button>
            <button type=\"button\" class=\"btn cd-btn cd-btn-flat-default input-edit__cancel-btn\">
              ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "
            </button>
          </div>
        </div> 

      </div>
    </div>
    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_truename\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fileds.realname"), "html", null, true);
        echo "</label>
        ";
        // line 69
        if (($this->getAttribute(($context["profile"] ?? null), "truename", array()) && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 70
            echo "          <input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\"  class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "truename", array()), "html", null, true);
            echo "\" readonly>
        ";
        } else {
            // line 72
            echo "          <input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "truename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "truename", array()), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 74
        echo "      </div>
    </div>
    <div class=\"col-md-5 col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.gender_label"), "html", null, true);
        echo "</label>
        <div class=\"cd-radio-group\">
          <label class=\"cd-radio ";
        // line 80
        if (($this->getAttribute(($context["profile"] ?? null), "gender", array()) == "male")) {
            echo "checked";
        }
        echo "\" for=\"profile_gender_0\">
            <input type=\"radio\" id=\"profile_gender_0\" name=\"profile[gender]\" value=\"male\" ";
        // line 81
        if (($this->getAttribute(($context["profile"] ?? null), "gender", array()) == "male")) {
            echo "checked";
        }
        echo " data-toggle=\"cd-radio\">
            ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.gender.male"), "html", null, true);
        echo "
          </label>

          <label class=\"cd-radio ";
        // line 85
        if (($this->getAttribute(($context["profile"] ?? null), "gender", array()) == "female")) {
            echo "checked";
        }
        echo "\" for=\"profile_gender_1\" >
            <input type=\"radio\" id=\"profile_gender_1\" name=\"profile[gender]\" value=\"female\" ";
        // line 86
        if (($this->getAttribute(($context["profile"] ?? null), "gender", array()) == "female")) {
            echo "checked";
        }
        echo " data-toggle=\"cd-radio\">
            ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.gender.female"), "html", null, true);
        echo "
          </label>
        </div>
      </div>
    </div>

    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_title\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.rank"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"col-md-5 col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_signature\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.personal_signature"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_signature\" name=\"profile[signature]\" class=\"form-control\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "signature", array()), "")) : ("")), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"col-md-11\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_about\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.self_introduction"), "html", null, true);
        echo "</label>
        <textarea name=\"profile[about]\" rows=\"10\" id=\"profile_about\" class=\"form-control\" data-image-upload-url=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("user"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "about", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
      </div>
    </div>

    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_company\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.company_label"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_company\" name=\"profile[company]\" class=\"form-control\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "company", array()), "")) : ("")), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"col-md-5  col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_job\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.occupation"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_job\" name=\"profile[job]\" class=\"form-control\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "job", array()), "")) : ("")), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_site\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.personal_space"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_site\" name=\"profile[site]\" class=\"form-control\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "site", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "site", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"http://\">
      </div>
    </div>

    <div class=\"col-md-5  col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label for=\"weibo\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fileds.microblog"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"weibo\" name=\"profile[weibo]\" class=\"form-control\"  value=\"";
        // line 138
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "weibo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "weibo", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"http://\">
        <input class=\"hidden\" type=\"text\" name=\"profile[isWeiboPublic]\" value=\"1\"/>
        <div class=\"help-block\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.basic_info.public"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"col-md-5\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_weixin\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fileds.wechat"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_weixin\" name=\"profile[weixin]\" class=\"form-control\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "weixin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "weixin", array()), "")) : ("")), "html", null, true);
        echo "\">
        <input class=\"hidden\" type=\"text\" name=\"profile[isWeixinPublic]\" value=\"1\"/>
      </div>
    </div>

    <div class=\"col-md-5  col-md-offset-1\">
      <div class=\"form-group cd-form-group\">
        <label for=\"profile_qq\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fileds.qq"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"profile_qq\" name=\"profile[qq]\" class=\"form-control\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), "qq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), "qq", array()), "")) : ("")), "html", null, true);
        echo "\">
        <input class=\"hidden\" type=\"text\" name=\"profile[isQQPublic]\" value=\"1\"/>
      </div>
    </div>

    ";
        // line 160
        if (($context["fields"] ?? null)) {
            // line 161
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 162
                echo "        <div class=\"
          ";
                // line 163
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 164
                    echo "            col-md-11
          ";
                } else {
                    // line 166
                    echo "            col-md-5 ";
                    if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                        echo "col-md-offset-1";
                    }
                    // line 167
                    echo "          ";
                }
                echo "\">
          <div class=\"form-group cd-form-group\">
            <label for=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "</label>

            ";
                // line 171
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 172
                    echo "              <textarea id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" rows=\"4\" maxlength=\"80\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
            ";
                } elseif (($this->getAttribute(                // line 173
$context["field"], "type", array()) == "int")) {
                    // line 174
                    echo "              <input type=\"text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.validate_rules.max_int"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
            ";
                } elseif (($this->getAttribute(                // line 175
$context["field"], "type", array()) == "float")) {
                    // line 176
                    echo "              <input type=\"text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.validate_rules.two_decimal_places"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
            ";
                } elseif (($this->getAttribute(                // line 177
$context["field"], "type", array()) == "date")) {
                    // line 178
                    echo "              <input type=\"text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"js-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
            ";
                } elseif (($this->getAttribute(                // line 179
$context["field"], "type", array()) == "varchar")) {
                    // line 180
                    echo "              <input type=\"text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["profile"] ?? null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
            ";
                }
                // line 182
                echo "          </div>
        </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "    ";
        }
        // line 186
        echo "
    <div class=\"col-md-11\">
      <button id=\"profile-save-btn\" data-loading-text=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn cd-btn cd-btn-primary cd-btn-lg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "settings/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 190,  475 => 188,  471 => 186,  468 => 185,  452 => 182,  442 => 180,  440 => 179,  429 => 178,  427 => 177,  416 => 176,  414 => 175,  403 => 174,  401 => 173,  392 => 172,  390 => 171,  383 => 169,  377 => 167,  372 => 166,  368 => 164,  366 => 163,  363 => 162,  345 => 161,  343 => 160,  335 => 155,  331 => 154,  321 => 147,  317 => 146,  308 => 140,  303 => 138,  299 => 137,  290 => 131,  286 => 130,  277 => 124,  273 => 123,  264 => 117,  260 => 116,  249 => 110,  245 => 109,  236 => 103,  232 => 102,  223 => 96,  219 => 95,  208 => 87,  202 => 86,  196 => 85,  190 => 82,  184 => 81,  178 => 80,  173 => 78,  167 => 74,  161 => 72,  155 => 70,  153 => 69,  149 => 68,  137 => 59,  131 => 56,  127 => 55,  123 => 54,  113 => 49,  108 => 46,  102 => 42,  100 => 41,  96 => 40,  90 => 37,  84 => 34,  81 => 33,  79 => 31,  78 => 24,  71 => 20,  68 => 19,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  46 => 10,  43 => 9,  35 => 3,  31 => 1,  29 => 7,  27 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/profile.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\settings\\profile.html.twig");
    }
}
