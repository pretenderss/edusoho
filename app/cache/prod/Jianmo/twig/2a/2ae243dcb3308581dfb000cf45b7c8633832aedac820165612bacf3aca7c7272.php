<?php

/* courseset-manage/create.html.twig */
class __TwigTemplate_bc0c7cce5561495a6827c9cb9ef4944b9f5be6f2b332b3d3dd499b1e943c88f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "courseset-manage/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/courseset/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create_btn"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\">
    <div class=\"panel panel-default panel-page panel-create-course\">
      <div class=\"panel-heading\">
        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create_btn"), "html", null, true);
        echo "</h2>
      </div>
      ";
        // line 13
        if ((( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "largeAvatar", array()) ||  !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "title", array())) ||  !$this->getAttribute(($context["userProfile"] ?? null), "about", array()))) {
            // line 14
            echo "        ";
            $this->loadTemplate("settings/user-profile.html.twig", "courseset-manage/create.html.twig", 14)->display($context);
            // line 15
            echo "      ";
        } else {
            // line 16
            echo "        <form id=\"courseset-create-form\" class=\"form-horizontal\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\"
              method=\"post\">
          ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
            echo "
          <div class=\"course-piece\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type"), "html", null, true);
            echo "</div>
          <div class=\"form-group cd-row mb0\">
            ";
            // line 21
            $context["typeCount"] = twig_length_filter($this->env, ($context["courseTypes"] ?? null));
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courseTypes"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["type"]) {
                // line 23
                echo "              <div class=\"";
                if ((($context["typeCount"] ?? null) <= 4)) {
                    echo "col-md-3 ";
                } else {
                    echo "col-md-2 course-five-types ";
                }
                echo "\">
                ";
                // line 24
                $this->loadTemplate($this->getAttribute($context["type"], "template", array()), "courseset-manage/create.html.twig", 24)->display(array_merge($context, array("type" => $context["key"])));
                // line 25
                echo "              </div>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "          </div>
          
            ";
            // line 29
            $this->loadTemplate("org/course-create-org-tree-select.html.twig", "courseset-manage/create.html.twig", 29)->display($context);
            // line 30
            echo "            <div class=\"course-title form-group\">
              <div class=\"mlm pull-left controls-label text-lg\">
                <div class=\"course-piece title\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.course_title"), "html", null, true);
            echo "</div>
              </div>
              <div class=\"col-md-10 controls course-title-input\">
                <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\"
                       data-widget-cid=\"widget-1\" data-explain=\"\">
              </div>
            </div>
            <div class=\"text-center\">
              ";
            // line 40
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
                // line 41
                echo "                <span class=\"mrm\">
              <a href=\"http://www.qiqiuyu.com/course/22\" class=\"color-gray\" target=\"_blank\">";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.how_do_create"), "html", null, true);
                echo "</a>
            </span>
              ";
            }
            // line 45
            echo "              <button id=\"courseset-create-btn\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create.submiting"), "html", null, true);
            echo "\"
                     class=\"cd-btn cd-btn-primary\" type=\"submit\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create"), "html", null, true);
            echo "</button>
              <a class=\"btn btn-fat btn-link link-gray course-cancel-btn\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "Referer"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
            echo "</a>
            </div>
            <input type=\"hidden\" name=\"type\" value=\"normal\"/>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\"></div>
        </div>
      </form>
      ";
        }
        // line 54
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 54,  171 => 50,  163 => 47,  159 => 46,  154 => 45,  148 => 42,  145 => 41,  143 => 40,  132 => 32,  128 => 30,  126 => 29,  122 => 27,  107 => 25,  105 => 24,  96 => 23,  78 => 22,  76 => 21,  71 => 19,  67 => 18,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  48 => 11,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/create.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\create.html.twig");
    }
}
