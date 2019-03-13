<?php

/* course/header/free-mode-header-for-member.html.twig */
class __TwigTemplate_1e75fdf65c69878282fa7a72fa900261250f0def69a022350a22d2b558094aca extends Twig_Template
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
        echo "<section class=\"course-freelearn-section\">
  <div class=\"row\">
    <div class=\"col-md-3\">
      <div class=\"course-progress\">
        <div class=\"cricle-progress\" id=\"freeprogress\" data-percent=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
        echo "\">
          <span class=\"percent\"></span>
        </div>
      </div>
    </div>
    <div class=\"col-md-7 hidden-xs hidden-sm\">
      <ul class=\"clearfix text-12 course-learn-list \">
        <li>
          <p class=\"mb15 color-gray\">
            <i class=\"es-icon es-icon-iccheckcircleblack24px mrm\"></i>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.course.free_mode_plan.task_finished"), "html", null, true);
        echo "
          </p>
          <span class=\"text-16\"><span class=\"color-primary\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["taskResultCount"] ?? null), "html", null, true);
        echo "</span> / <span
                class=\"mrl\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["taskCount"] ?? null), "html", null, true);
        echo "</span>
          ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "</span>
        </li>
        <li>
          <p class=\"mb15 color-gray\">
            <i class=\"es-icon es-icon-today mrm\"></i>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date"), "html", null, true);
        echo "
          </p>
          <span class=\"text-16\">
            ";
        // line 25
        $this->loadTemplate("course/header/parts/member-deadline-info.html.twig", "course/header/free-mode-header-for-member.html.twig", 25)->display($context);
        // line 26
        echo "           </span>
        </li>
        <li>
          <p class=\"mb15 color-gray\">
            <i class=\"es-icon es-icon-book mrm\"></i>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.course.free_mode_plan.next_task", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
          </p>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["toLearnTasks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["toLearnTask"]) {
            // line 33
            echo "            <a class=\"link-dark text-16\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute($context["toLearnTask"], "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["toLearnTask"], "title", array()), 15);
            echo "</a>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <span class=\"text-16\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.course.free_mode_plan.task_empty", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
            echo "</span>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toLearnTask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </li>
      </ul>
      ";
        // line 39
        if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled"), false) && $this->env->getExtension('AppBundle\Twig\CourseExtension')->isSupportEnableAudio((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), 0)) : (0)))) && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal"))) {
            // line 40
            echo "        <ul class=\"clearfix text-12 course-learn-list mt10\">
          <li>
            <span class=\"lump-sm color-lump bg-primary\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.listen"), "html", null, true);
            echo "</span>
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.click.listen"), "html", null, true);
            echo "
            <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"__blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.try"), "html", null, true);
            echo "</a>
          </li>
        </ul>
      ";
        }
        // line 48
        echo "    </div>
    ";
        // line 49
        if (((array_key_exists("showLearnBtn", $context)) ? (_twig_default_filter(($context["showLearnBtn"] ?? null), 1)) : (1))) {
            // line 50
            echo "      <div class=\"col-md-2 hidden-xs hidden-sm pt10\">
        ";
            // line 51
            $this->loadTemplate("course/header/free-mode-member-learn-btn.html.twig", "course/header/free-mode-header-for-member.html.twig", 51)->display($context);
            // line 52
            echo "      </div>
    ";
        }
        // line 54
        echo "  </div>
  ";
        // line 55
        $this->loadTemplate("course/header/header-for-member-responsive.html.twig", "course/header/free-mode-header-for-member.html.twig", 55)->display($context);
        // line 56
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "course/header/free-mode-header-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 56,  144 => 55,  141 => 54,  137 => 52,  135 => 51,  132 => 50,  130 => 49,  127 => 48,  118 => 44,  114 => 43,  110 => 42,  106 => 40,  104 => 39,  100 => 37,  91 => 35,  81 => 33,  76 => 32,  71 => 30,  65 => 26,  63 => 25,  57 => 22,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/free-mode-header-for-member.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\free-mode-header-for-member.html.twig");
    }
}
