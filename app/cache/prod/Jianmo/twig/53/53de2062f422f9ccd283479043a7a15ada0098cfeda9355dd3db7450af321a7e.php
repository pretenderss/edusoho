<?php

/* default/header/part/user-role-manage.html.twig */
class __TwigTemplate_28ffbd7f3448e4ab276649c97b3e8fca2abe4fa5d2ce7fa7edcf96b8fabdfe48 extends Twig_Template
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
        if (($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin") || twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array())))) {
            // line 2
            echo "  <li class=\"user-manage-li cd-dropdown cd-dropdown-right visible-lg cd-ml24\"  data-toggle=\"cd-dropdown\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"javascript:;\">";
            // line 3
            if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
            } elseif (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_course"), "html", null, true);
            }
            echo "<i class=\"cd-icon cd-icon-arrow-down cd-text-sm\"></i></a>
    <ul class=\"dropdown-menu user-manage-dropdown\" role=\"menu\">
      ";
            // line 5
            if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin")) {
                // line 6
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 8
            echo "
      ";
            // line 9
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isTeacher", array(), "method")) {
                // line 10
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_course"), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 12
            echo "      <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning"), "html", null, true);
            echo "</a></li>
    </ul>
  </li>
";
        } else {
            // line 16
            echo "  <li class=\"user-manage-li visible-lg cd-ml24\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning"), "html", null, true);
            echo "</a>
  </li>
";
        }
        // line 20
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/header/part/user-role-manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  69 => 17,  66 => 16,  56 => 12,  48 => 10,  46 => 9,  43 => 8,  35 => 6,  33 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header/part/user-role-manage.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\header\\part\\user-role-manage.html.twig");
    }
}
