<?php

/* course/widgets/other-courses.html.twig */
class __TwigTemplate_ce3225608199ef3aa42d6f9cbb047d0e5325743b87b61e46c0807f9ecf924e21 extends Twig_Template
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
        if (($context["otherCourses"] ?? null)) {
            // line 2
            echo "    <div class=\"panel panel-default other-courses\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">其他计划</h3>
            <a class=\"more link-gray\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-morehoriz\"></i>
            </a>
        </div>
        <div class=\"panel-body\">
            <ul class=\"list-group\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["otherCourses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 12
                echo "                    <li class=\"pvs text-overflow\">
                        <a class=\"link-gray\"
                            ";
                // line 14
                if (twig_in_filter($this->getAttribute($context["course"], "id", array()), ($context["purchasedCourseIds"] ?? null))) {
                    // line 15
                    echo "                                href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\"
                            ";
                } else {
                    // line 17
                    echo "                                href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\"
                            ";
                }
                // line 19
                echo "                        >
                            ";
                // line 20
                if (($this->getAttribute($context["course"], "status", array()) != "published")) {
                    echo "<span class=\"text-sm\">(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.unpublished"), "html", null, true);
                    echo ")</span>";
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "
                        </a>
                        ";
                // line 22
                if (twig_in_filter($this->getAttribute($context["course"], "id", array()), ($context["purchasedCourseIds"] ?? null))) {
                    // line 23
                    echo "                            <span class=\"label label-primary color-white text-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.joined"), "html", null, true);
                    echo "</span>
                        ";
                } else {
                    // line 25
                    echo "                            <span class=\"label label-default color-white text-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.not_joined"), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 27
                echo "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </ul>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "course/widgets/other-courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  85 => 27,  79 => 25,  73 => 23,  71 => 22,  60 => 20,  57 => 19,  51 => 17,  45 => 15,  43 => 14,  39 => 12,  35 => 11,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/other-courses.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\widgets\\other-courses.html.twig");
    }
}
