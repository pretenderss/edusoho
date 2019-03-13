<?php

/* course/header/header-for-member-layout.html.twig */
class __TwigTemplate_0c70d3fb235b590d5aeea54b148ccfea928c4adce25af7e278147ba2da744fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/header/header-layout.html.twig", "course/header/header-for-member-layout.html.twig", 1);
        $this->blocks = array(
            'course_header_info' => array($this, 'block_course_header_info'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/header/header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_course_header_info($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (((($this->getAttribute(($context["member"] ?? null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 5
            echo "  <div class=\"alert alert-warning\">
    ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.course.refund_tips"), "html", null, true);
            echo "
    <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_cancel_refund", array("orderId" => $this->getAttribute(($context["member"] ?? null), "orderId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.course.cancle_refund_btn"), "html", null, true);
            echo "</button>
  </div>
  ";
        }
    }

    // line 12
    public function block_course_member_exit($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        if ((((($context["member"] ?? null) &&  !$this->getAttribute(($context["member"] ?? null), "locked", array())) && ($this->getAttribute(($context["member"] ?? null), "role", array()) != "teacher")) && ($this->getAttribute(($context["course"] ?? null), "parentId", array()) == 0))) {
            // line 14
            echo "\t\t<li>
\t\t  <a class=\"btn btn-default btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_exit_modal", array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_exit", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))))), "html", null, true);
            echo "\" ><i class=\"es-icon es-icon-exit\"></i>
\t\t  </a>
\t\t</li>
\t";
        }
    }

    public function getTemplateName()
    {
        return "course/header/header-for-member-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  58 => 14,  55 => 13,  52 => 12,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-member-layout.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\header\\header-for-member-layout.html.twig");
    }
}
