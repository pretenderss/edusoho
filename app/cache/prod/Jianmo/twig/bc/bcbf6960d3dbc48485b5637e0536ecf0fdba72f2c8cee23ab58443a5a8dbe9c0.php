<?php

/* courseset-manage/courses.html.twig */
class __TwigTemplate_c74d33af0beae2b0168bb71aebe9d4d5dbab751a297e33f41d5c4d47c98a2258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/courseset-layout.html.twig", "courseset-manage/courses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/courseset-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "plan";
        // line 5
        $context["hasMulCourses"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute(($context["courseSet"] ?? null), "id", array()));
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/course-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teach_plan_manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div role=\"courseset-manage-courses\">
    <div class=\"cd-mb24 clearfix\">
      <div class=\"pull-right\">
        <div class=\"js-sort-group hidden-xs\">
          <a class=\"cd-btn cd-btn-primary js-create-plan\" ";
        // line 13
        if ((twig_length_filter($this->env, ($context["courses"] ?? null)) > 9)) {
            echo " disabled data-toggle=\"tooltip\" data-placement=\"top\" title=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.create.max_plan_number"), "html", null, true);
            echo " ";
        } else {
            echo "data-toggle=\"modal\" data-target=\"#modal\"
            data-url=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_create", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\" ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.create"), "html", null, true);
        echo "</a>
          ";
        // line 15
        if (($context["hasMulCourses"] ?? null)) {
            echo "<button class=\"cd-btn cd-btn-default cd-ml16 js-sort-btn\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.sort"), "html", null, true);
            echo "</button>";
        }
        // line 16
        echo "        </div>
        <div class=\"js-sort-group hidden-xs hide\">
          <button class=\"cd-btn cd-btn-primary cd-mr16 js-save-sort-btn\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.sort.save"), "html", null, true);
        echo "</button>
          <button class=\"cd-btn cd-btn-default js-cancel-sort-btn\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.sort.cancel"), "html", null, true);
        echo "</button>
        </div>
      </div>
      <div class=\"cd-select teaching-type-select\" id=\"select-single\">
        <div class=\"select-value\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.filter.all_plan"), "html", null, true);
        echo "</div>
        <ul class=\"select-options\">
          <li class=\"checked\" data-value=\"\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.filter.all_plan"), "html", null, true);
        echo "</li>
          <li data-value=\"published\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.published"), "html", null, true);
        echo "</li>
          <li data-value=\"draft\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.unpublished"), "html", null, true);
        echo "</li>
          <li data-value=\"closed\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.closed"), "html", null, true);
        echo "</li>
        </ul>
      </div>
    </div>
    <ul class=\"js-plan-list courses-manage-list sortable-list\" data-sort-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_sort", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 34
            echo "        <li class=\"cd-mb24 js-plan-item courses-manage-item js-status-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "status", array()), "html", null, true);
            echo "\" id=\"course-plan-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" data-course-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\">
          ";
            // line 35
            $this->loadTemplate("courseset-manage/course-list.html.twig", "courseset-manage/courses.html.twig", 35)->display(array_merge($context, array("hasMulCourses" => ($context["hasMulCourses"] ?? null))));
            // line 36
            echo "        </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </ul>
    ";
        // line 39
        if ( !($context["hasMulCourses"] ?? null)) {
            // line 40
            echo "      <div class=\"courses-manage-plan-info\">
        ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_info");
            echo "
      </div>
    ";
        }
        // line 44
        echo "    <nav class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "</nav>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 44,  169 => 41,  166 => 40,  164 => 39,  161 => 38,  146 => 36,  144 => 35,  135 => 34,  118 => 33,  114 => 32,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  90 => 23,  83 => 19,  79 => 18,  75 => 16,  69 => 15,  61 => 14,  53 => 13,  47 => 9,  44 => 8,  36 => 3,  32 => 1,  30 => 6,  28 => 5,  26 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/courses.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\courses.html.twig");
    }
}
