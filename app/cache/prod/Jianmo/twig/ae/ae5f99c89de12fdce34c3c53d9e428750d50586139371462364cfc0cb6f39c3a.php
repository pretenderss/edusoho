<?php

/* my/learning/classroom/classroom.html.twig */
class __TwigTemplate_0c1f9df1811bbd3c94d6d84256e03dc9c6b77b6a9f301d0b412e6944a183fe52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/layout.html.twig", "my/learning/classroom/classroom.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<style>
.classroom-footer{

  margin-top: 50px;
}
</style>
<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
   ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
    <ul class=\"course-wide-list\">
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            if ($context["classroom"]) {
                // line 22
                echo "        <li class=\"course-item clearfix\">
          <a class=\"course-picture-link\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
            <img class=\"course-picture\" src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "\">
          </a>
          <div class=\"course-body\">
            <h4 class=\"mbl\">
              <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a>
              ";
                // line 29
                if (($this->getAttribute($context["classroom"], "status", array()) == "draft")) {
                    // line 30
                    echo "                <span class=\"label label-warning \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.unpublish"), "html", null, true);
                    echo "</span>
                ";
                } elseif (($this->getAttribute(                // line 31
$context["classroom"], "status", array()) == "closed")) {
                    // line 32
                    echo "                <span class=\"label label-danger \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.closed"), "html", null, true);
                    echo "</span>
              ";
                }
                // line 34
                echo "            </h4>

            <div class=\"pull-right\">
              ";
                // line 37
                if (twig_in_filter("assistant", $this->getAttribute($this->getAttribute(($context["members"] ?? null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()))) {
                    // line 38
                    echo "                <span class=\"color-gray\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.study_days", array("%day%" => $this->getAttribute($context["classroom"], "day", array()))), "html", null, true);
                    echo "</span><br>
                <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-sm mts\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.classroom.manage_btn", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
                    echo "</a>
              ";
                } elseif (twig_in_filter("student", $this->getAttribute($this->getAttribute(                // line 40
($context["members"] ?? null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()))) {
                    // line 41
                    echo "                <span class=\"color-gray\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.study_days", array("%day%" => $this->getAttribute($context["classroom"], "day", array()))), "html", null, true);
                    echo "</span><br>
                <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-sm mts\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.contiune_study"), "html", null, true);
                    echo "</a>
              ";
                } else {
                    // line 44
                    echo "                <span class=\"color-gray\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.auditor"), "html", null, true);
                    echo "</span><br>
                <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-sm mts\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.join_classroom", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
                    echo "</a>
              ";
                }
                // line 47
                echo "            </div>
            
            <div class=\"classroom-footer clearfix\">
              ";
                // line 50
                if (twig_in_filter("student", $this->getAttribute($this->getAttribute(($context["members"] ?? null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()))) {
                    // line 51
                    echo "                <div class=\"col-md-7\">
                  <div class=\"progress\">
                    <div class=\"progress-bar\" style=\"width: ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "learningProgressPercent", array()), "html", null, true);
                    echo "%\">
                    </div>
                  </div>
                </div>
              ";
                }
                // line 58
                echo "            </div>

          </div>
        </li>
      ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 63
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.not_join_classroom", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </ul>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "my/learning/classroom/classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 65,  177 => 63,  167 => 58,  159 => 53,  155 => 51,  153 => 50,  148 => 47,  141 => 45,  136 => 44,  129 => 42,  124 => 41,  122 => 40,  116 => 39,  111 => 38,  109 => 37,  104 => 34,  98 => 32,  96 => 31,  91 => 30,  89 => 29,  83 => 28,  74 => 24,  70 => 23,  67 => 22,  61 => 21,  53 => 16,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/learning/classroom/classroom.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\learning\\classroom\\classroom.html.twig");
    }
}
