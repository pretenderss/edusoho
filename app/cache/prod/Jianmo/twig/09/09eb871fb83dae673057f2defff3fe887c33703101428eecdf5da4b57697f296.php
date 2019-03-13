<?php

/* course/thread/header.html.twig */
class __TwigTemplate_33e2e721caa7f57b4806d409646df1967669b3b83e360490908fef73968470f7 extends Twig_Template
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
        echo "<div class=\"nav-filter clearfix\">

  <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("thread.create_discussion_btn"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "discussion")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("thread.create_discussion_btn"), "html", null, true);
        echo "</a></li>
      <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_create", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "type" => "question")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("thread.create_question_btn"), "html", null, true);
        echo "</a></li>
    </ul>
  </div>


  <ul class=\"nav nav-pills nav-pills-sm\">
    <li";
        // line 13
        if (($this->getAttribute(($context["filters"] ?? null), "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "threads"), ($context["filters"] ?? null)), array("type" => "all"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.nav.all_btn"), "html", null, true);
        echo "</a></li>

    <li";
        // line 15
        if (($this->getAttribute(($context["filters"] ?? null), "type", array()) == "question")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "threads"), ($context["filters"] ?? null)), array("type" => "question"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.nav.question_btn"), "html", null, true);
        echo "</a></li>

    <li";
        // line 17
        if (($this->getAttribute(($context["filters"] ?? null), "type", array()) == "elite")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "threads"), ($context["filters"] ?? null)), array("type" => "elite"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.nav.nice_btn"), "html", null, true);
        echo "</a></li>

    <li class=\"dropdown\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.nav.seq"), "html", null, true);
        echo "</span>
        ";
        // line 22
        if (($this->getAttribute(($context["filters"] ?? null), "sort", array()) == "posted")) {
            // line 23
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.nav.posted"), "html", null, true);
            echo "
        ";
        } elseif (($this->getAttribute(        // line 24
($context["filters"] ?? null), "sort", array()) == "created")) {
            // line 25
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.nav.created"), "html", null, true);
            echo "
        ";
        }
        // line 27
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 30
        if (($this->getAttribute(($context["filters"] ?? null), "sort", array()) == "posted")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "threads"), ($context["filters"] ?? null)), array("sort" => "posted"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.nav.posted"), "html", null, true);
        echo "</a></li>
        <li class=\"";
        // line 31
        if (($this->getAttribute(($context["filters"] ?? null), "sort", array()) == "created")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()), "tab" => "threads"), ($context["filters"] ?? null)), array("sort" => "created"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.nav.created"), "html", null, true);
        echo "</a></li>
      </ul>
    </li>
  </ul>

</div>
";
    }

    public function getTemplateName()
    {
        return "course/thread/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  105 => 30,  100 => 27,  94 => 25,  92 => 24,  87 => 23,  85 => 22,  81 => 21,  68 => 17,  57 => 15,  46 => 13,  35 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/thread/header.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\thread\\header.html.twig");
    }
}
