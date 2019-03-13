<?php

/* default/course-grid-with-condition-index.html.twig */
class __TwigTemplate_57ee22e7d6b5292121ab277341df58ed2631c95b2daf96e193935cedd195d56f extends Twig_Template
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
        echo "<section class=\"course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">

  ";
        // line 3
        $context["count"] = (($this->getAttribute(($context["config"] ?? null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", array()), 12)) : (12));
        // line 4
        echo "  ";
        $context["categoryId"] = (($this->getAttribute(($context["config"] ?? null), "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryId", array()), 0)) : (0));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute(($context["config"] ?? null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        if ((($context["orderBy"] ?? null) == "latest")) {
            // line 7
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestCourseSets", array("count" => ($context["count"] ?? null), "categoryId" => ($context["categoryId"] ?? null)));
            // line 8
            echo "  ";
        } elseif ((($context["orderBy"] ?? null) == "recommendedSeq")) {
            // line 9
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendCourseSets", array("count" => ($context["count"] ?? null), "categoryId" => ($context["categoryId"] ?? null)));
            // line 10
            echo "  ";
        } elseif ((($context["orderBy"] ?? null) == "studentNum")) {
            // line 11
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PopularCourseSets", array("count" => ($context["count"] ?? null), "categoryId" => ($context["categoryId"] ?? null), "type" => "studentNum"));
            // line 12
            echo "  ";
        } elseif ((($context["orderBy"] ?? null) == "hotSeq")) {
            // line 13
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PopularCourseSets", array("count" => ($context["count"] ?? null), "categoryId" => ($context["categoryId"] ?? null), "type" => "hotSeq"));
            // line 14
            echo "  ";
        }
        // line 15
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Categories", array("group" => "course", "parentId" => 0));
        // line 16
        echo "  ";
        $context["moreCategories"] = twig_slice($this->env, ($context["categoriesFirst"] ?? null), (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)), null);
        // line 17
        echo "  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", array()), $this->getAttribute(($context["config"] ?? null), "defaultTitle", array()))) : ($this->getAttribute(($context["config"] ?? null), "defaultTitle", array()))), "html", null, true);
        echo "</span>
        <div class=\"line\"></div>
      </h5>
      <div class=\"subtitle\">";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", array()), $this->getAttribute(($context["config"] ?? null), "defaultSubTitle", array()))) : ($this->getAttribute(($context["config"] ?? null), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"";
        // line 26
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo " js-course-filter\"
            data-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a
              href=\"javascript:;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo "</a></li>
        ";
        // line 29
        if (($context["categoriesFirst"] ?? null)) {
            // line 30
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesFirst"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "            ";
                if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)))) {
                    // line 32
                    echo "              <li role=\"presentation\"
                  class=\"";
                    // line 33
                    if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                        echo "active ";
                    }
                    echo " js-course-filter\"
                  data-url=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "latest")) : ("latest")))), "html", null, true);
                    echo "\"
                  data-type=\"course\"><a href=\"javascript:;\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 37
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "          ";
            if (($context["moreCategories"] ?? null)) {
                // line 39
                echo "            <li class=\"dropdown nav-hover\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
                <i class=\"es-icon es-icon-morehoriz\"></i>
              </a>
              <ul class=\"dropdown-menu\">
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["moreCategories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["moreCategory"]) {
                    // line 45
                    echo "                  <li role=\"presentation\"
                      class=\"";
                    // line 46
                    if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0)) == $this->getAttribute($context["moreCategory"], "id", array()))) {
                        echo "active ";
                    }
                    echo " js-course-filter\"
                      data-url=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["moreCategory"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "latest")) : ("latest")))), "html", null, true);
                    echo "\"
                      data-type=\"course\"><a href=\"javascript:;\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moreCategory"], "name", array()), "html", null, true);
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moreCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "              </ul>
            </li>
          ";
            }
            // line 53
            echo "        ";
        }
        // line 54
        echo "      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"
                aria-expanded=\"false\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 59
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\"
              data-url=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a
                href=\"javascript:;\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo "</a></li>
          ";
        // line 62
        if (($context["categoriesFirst"] ?? null)) {
            // line 63
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesFirst"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 64
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)))) {
                        // line 65
                        echo "                <li role=\"presentation\"
                    class=\"js-course-filter ";
                        // line 66
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo "\"
                    data-url=\"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "latest")) : ("latest")))), "html", null, true);
                        echo "\"
                    data-type=\"course\"><a href=\"javascript:;\">";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 70
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
            if (($context["moreCategories"] ?? null)) {
                // line 72
                echo "              <li role=\"presentation\" class=\"js-course-filteractive\" data-type=\"course\"><a
                    href=\"";
                // line 73
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.category_more"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 75
            echo "          ";
        }
        // line 76
        echo "        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 80
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0)), "orderBy" => "latest")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.latest"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 86
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "recommendedSeq")) : ("recommendedSeq")) == "hotSeq")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0)), "orderBy" => "hotSeq")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.hotest"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 92
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.recommended"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 102
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 103
            $this->loadTemplate("course/widgets/course-grid.html.twig", "default/course-grid-with-condition-index.html.twig", 103)->display(array_merge($context, array("courseSet" => $context["courseSet"])));
            // line 104
            echo "          </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.course_more"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default/course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 110,  382 => 109,  377 => 106,  362 => 104,  360 => 103,  357 => 102,  340 => 101,  331 => 95,  326 => 93,  320 => 92,  314 => 89,  309 => 87,  303 => 86,  297 => 83,  292 => 81,  286 => 80,  280 => 76,  277 => 75,  270 => 73,  267 => 72,  264 => 71,  254 => 70,  249 => 68,  245 => 67,  239 => 66,  236 => 65,  233 => 64,  221 => 63,  219 => 62,  215 => 61,  211 => 60,  205 => 59,  200 => 57,  195 => 54,  192 => 53,  187 => 50,  179 => 48,  175 => 47,  169 => 46,  166 => 45,  162 => 44,  155 => 39,  152 => 38,  138 => 37,  133 => 35,  129 => 34,  123 => 33,  120 => 32,  117 => 31,  99 => 30,  97 => 29,  93 => 28,  89 => 27,  83 => 26,  76 => 22,  70 => 19,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/course-grid-with-condition-index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\course-grid-with-condition-index.html.twig");
    }
}
