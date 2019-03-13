<?php

/* course-manage/base-info/marketing.html.twig */
class __TwigTemplate_3aedac89cacd869053a7e1405e4f4e77fff2bd28c549c7a079b05b9408a8e79e extends Twig_Template
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
        echo "<div class=\"form-group\">
  <div class=\"col-sm-2 control-label\">
    <label class=\"control-label-required\" for=\"course_price\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.price"), "html", null, true);
        echo "</label>
  </div>
  <div class=\"col-sm-8\">
    <input class=\"form-control course-mangae-info__input mrs\" id=\"course_price\" type=\"text\" name=\"originPrice\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "originPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "originPrice", array()), 0)) : (0)), "html", null, true);
        echo "\" aria-required=\"true\" aria-describedby=\"course_price-error\" aria-invalid=\"true\">
    <span class=\"ml5\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.currency.CNY"), "html", null, true);
        echo "</span>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label mb5\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.setup.can_join"), "html", null, true);
        echo "
    <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.setup.can_join.tips"), "html", null, true);
        echo "\"></a>
  </label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("buyable", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.setup.can_join"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.setup.can_not_join")), (($this->getAttribute(($context["course"] ?? null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "buyable", array()), 1)) : (1)));
        echo "
  </div>
</div>

<div class=\"js-course-add-open-show ";
        // line 21
        if (((($this->getAttribute(($context["course"] ?? null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "buyable", array()), 1)) : (1)) == 0)) {
            echo " hidden ";
        }
        echo "\">
  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\">
      <label class=\"control-label-required\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.expiry_date"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-8 cd-radio-group course-mangae-info__group mb0\">
      ";
        // line 27
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("enableBuyExpiryTime", array("0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.expiry_date.anytime"), "1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.expiry_date.custom")), ((((($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()), 0)) : (0)) > 0)) ? (1) : (0)));
        echo "
      <input type=\"text\" class=\"form-control course-mangae-info__input mlm ";
        // line 28
        if (($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) == 0)) {
            echo " hidden ";
        }
        echo "\" id=\"buyExpiryTime\" name=\"buyExpiryTime\"
              value=\"";
        // line 29
        if (($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->dateformatFilter($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()), "Y-m-d"), "html", null, true);
        }
        echo "\">
    </div>
  </div>
  ";
        // line 33
        echo "  ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.buy_before_approval")) {
            // line 34
            echo "    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.approval"), "html", null, true);
            echo "
        <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\"
            data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\"
            data-placement=\"top\" data-content=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.approval_tips"), "html", null, true);
            echo "\"></a></label>
      <div class=\"col-sm-8 cd-radio-group\">
        ";
            // line 41
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("approval", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.radios.yes"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.radios.no")), (($this->getAttribute(($context["course"] ?? null), "approval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "approval", array()), 0)) : (0)));
            echo "
      </div>
    </div>
  ";
        }
        // line 45
        echo "</div>

";
        // line 47
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.marketing.setting", array("course" => ($context["course"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "course-manage/base-info/marketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  116 => 45,  109 => 41,  104 => 39,  98 => 36,  94 => 34,  91 => 33,  83 => 29,  77 => 28,  73 => 27,  67 => 24,  59 => 21,  52 => 17,  46 => 14,  42 => 13,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course-manage/base-info/marketing.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course-manage\\base-info\\marketing.html.twig");
    }
}
