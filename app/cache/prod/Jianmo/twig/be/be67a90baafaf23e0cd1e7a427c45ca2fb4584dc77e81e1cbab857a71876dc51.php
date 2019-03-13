<?php

/* course/task-list/default-task-list.html.twig */
class __TwigTemplate_e8305259df426ab6036d577847af1b5e1240f8e27a18371f570d9a60327f8167 extends Twig_Template
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
        echo "<div class=\"course-detail-content js-course-detail-content\">
  
  ";
        // line 3
        $this->loadTemplate("course/task-list/parts/task-list-template.html.twig", "course/task-list/default-task-list.html.twig", 3)->display($context);
        // line 4
        echo "
  <ul class=\"task-list task-list-md task-list-hover infinite-container\"></ul>

  <div class=\"js-down-loading-more\" style=\"min-height: 1px\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "course/task-list/default-task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/default-task-list.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\task-list\\default-task-list.html.twig");
    }
}
