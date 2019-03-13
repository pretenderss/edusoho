<?php

/* my/layout.html.twig */
class __TwigTemplate_63257741e248fed29eec1116442a2f4028bc635ffd51b281557f0d80585c1eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "my/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'main_mobile' => array($this, 'block_main_mobile'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.menu_heading"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:My/User:avatarAlert"));
        echo "

  <div class=\"row row-3-9 my-layout\">
    <div class=\"col-md-3\">
      <div class=\"sidenav\">
        ";
        // line 14
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Point")) {
            // line 15
            echo "          <ul class=\"list-group\">
            <li class=\"list-group-heading\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.point"), "html", null, true);
            echo "</li>
            <li class=\"list-group-item
           ";
            // line 18
            if ((($context["side_nav"] ?? null) == "growth")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.point.growth"), "html", null, true);
            echo "</a>
            </li>
          </ul>
        ";
        }
        // line 23
        echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.menu_heading"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 25
        if ((($context["side_nav"] ?? null) == "my-learning")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course_set_menu"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 29
        if ((($context["side_nav"] ?? null) == "my-classroom")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_classrooms");
        echo "\">
              ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom_menu", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
        echo "
            </a>
          </li>

          ";
        // line 35
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 36
            echo "            <li class=\"list-group-item
          ";
            // line 37
            if ((($context["side_nav"] ?? null) == "my-learning-live")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_live_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.live_menu"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 41
        echo "
          <li class=\"list-group-item
        ";
        // line 43
        if ((($context["side_nav"] ?? null) == "my-questions")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_questions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.question_menu"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 47
        if ((($context["side_nav"] ?? null) == "my-discussions")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.discussion_menu"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 51
        if ((($context["side_nav"] ?? null) == "my-notes")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_notebooks");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.notebook_menu"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 55
        if ((($context["side_nav"] ?? null) == "my-homework")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homework_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.homework_menu"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 59
        if ((($context["side_nav"] ?? null) == "my-testpaper")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_testpaper_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.testpaper_menu"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 63
        if ((($context["side_nav"] ?? null) == "my-group")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_group_member_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.group_menu"), "html", null, true);
        echo "</a>
          </li>

          ";
        // line 67
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("my.learning.menu", array("side_nav" => ($context["side_nav"] ?? null)));
        echo "
        </ul>
      </div>
    </div>
    <div class=\"col-md-9\">";
        // line 71
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
  </div>

  ";
        // line 74
        $this->displayBlock('main_mobile', $context, $blocks);
        // line 75
        echo "
";
    }

    // line 71
    public function block_main($context, array $blocks = array())
    {
    }

    // line 74
    public function block_main_mobile($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "my/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 74,  247 => 71,  242 => 75,  240 => 74,  234 => 71,  227 => 67,  219 => 64,  213 => 63,  205 => 60,  199 => 59,  191 => 56,  185 => 55,  177 => 52,  171 => 51,  163 => 48,  157 => 47,  149 => 44,  143 => 43,  139 => 41,  131 => 38,  125 => 37,  122 => 36,  120 => 35,  113 => 31,  109 => 30,  103 => 29,  95 => 26,  89 => 25,  85 => 24,  82 => 23,  73 => 19,  67 => 18,  62 => 16,  59 => 15,  57 => 14,  49 => 9,  46 => 8,  43 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my/layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\my\\layout.html.twig");
    }
}
