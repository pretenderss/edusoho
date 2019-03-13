<?php

/* course/widgets/course-grid.html.twig */
class __TwigTemplate_f5753760fdbff860c95b955bd237d9862ab00a9d88eb597b332994158cc0e219 extends Twig_Template
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
        echo "<div class=\"course-item\">
  <div class=\"course-img\">
    ";
        // line 3
        if ($this->getAttribute(($context["courseSet"] ?? null), "course", array(), "any", true, true)) {
            // line 4
            echo "      ";
            $context["course"] = $this->getAttribute(($context["courseSet"] ?? null), "course", array());
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "      ";
            $context["course"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PublishedCourseByCourseSet", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array())));
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
        echo "\" target=\"_blank\">
      ";
        // line 10
        if (($this->getAttribute(($context["courseSet"] ?? null), "discountId", array()) > 0)) {
            // line 11
            echo "        ";
            if (($this->getAttribute(($context["courseSet"] ?? null), "discount", array()) == 0)) {
                // line 12
                echo "          <!-- 限免 -->
          <span class=\"tag-discount free\"></span>
        ";
            } else {
                // line 15
                echo "          <!-- 折扣 -->
          <span class=\"tag-discount\"></span>
        ";
            }
            // line 18
            echo "      ";
        }
        // line 19
        echo "      ";
        if (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()) == "serialized")) {
            // line 20
            echo "        <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
      ";
        } elseif (($this->getAttribute(        // line 21
($context["courseSet"] ?? null), "serializeMode", array()) == "finished")) {
            // line 22
            echo "        <span class=\"tags\"><span class=\"tag-finished\"></span></span>
      ";
        }
        // line 24
        echo "      ";
        if (((($this->getAttribute(($context["courseSet"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "type", array()))) : ("")) == "live")) {
            // line 25
            echo "        <span class=\"tags\">
          <span class=\"tag-live\"></span>
        </span>
      ";
        }
        // line 29
        echo "      ";
        if (((($this->getAttribute(($context["courseSet"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "type", array()))) : ("")) == "reservation")) {
            // line 30
            echo "        <span class=\"tags\">
          <span class=\"tag-reservation\"></span>
        </span>
      ";
        }
        // line 34
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(($context["courseSet"] ?? null), "large"), "courseSet.png"), "img-responsive", $this->getAttribute(($context["courseSet"] ?? null), "title", array()));
        echo "
    </a>
  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "defaultCourseId", array()))), "html", null, true);
        echo "\" target=\"_blank\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"metas clearfix\">
      ";
        // line 44
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 45
            echo "        <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()), "html", null, true);
            echo "</span>
      ";
        }
        // line 47
        echo "      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "ratingNum", array()), "html", null, true);
        echo "</span>
      ";
        // line 48
        if ((($this->getAttribute($this->getAttribute(($context["courseSet"] ?? null), "course", array(), "any", false, true), "tryLookVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["courseSet"] ?? null), "course", array(), "any", false, true), "tryLookVideo", array()), false)) : (false))) {
            // line 49
            echo "        <span class=\"comment\"><i class=\"es-icon es-icon-playcircleoutline\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.badge.try_watch"), "html", null, true);
            echo "</span>
      ";
        }
        // line 51
        echo "      ";
        // line 52
        echo "        ";
        // line 53
        echo "      ";
        // line 54
        echo "        ";
        $this->loadTemplate("course/widgets/course-set-price.html.twig", "course/widgets/course-grid.html.twig", 54)->display(array_merge($context, array("shows" => "price")));
        // line 55
        echo "      ";
        // line 56
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "course/widgets/course-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  142 => 55,  139 => 54,  137 => 53,  135 => 52,  133 => 51,  127 => 49,  125 => 48,  120 => 47,  114 => 45,  112 => 44,  105 => 40,  101 => 39,  92 => 34,  86 => 30,  83 => 29,  77 => 25,  74 => 24,  70 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  54 => 15,  49 => 12,  46 => 11,  44 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/course-grid.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\widgets\\course-grid.html.twig");
    }
}
