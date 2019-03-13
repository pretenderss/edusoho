<?php

/* course/task-list/parts/task-length-template.html.twig */
class __TwigTemplate_6ea76ca8791392ab11feb707d4de5c32c9227f62070d6596735aaa0e6b9e5a52 extends Twig_Template
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
        echo "<span class=\"right-menu color-gray ";
        if ( !($context["member"] ?? null)) {
            echo " mouse-leave ";
        }
        echo "\">

  <span class=\"hidden-xs mr20\" display-if=\"{hasWatchLimitRemaining}\">  ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.remaining.watch_time"), "html", null, true);
        echo "：{watchLimitRemaining} </span>
  ";
        // line 4
        $context["now"] = $this->getAttribute(twig_date_converter($this->env), "timestamp", array());
        // line 5
        echo "
  <tmp display-if=\"{isLive}\">
    <tmp display-if=\"{isLiveReplayGenerated}\">
      ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.block_grid.live_back"), "html", null, true);
        echo "
    </tmp>

    <tmp hide-if=\"{isLiveReplayGenerated}\">
      <tmp display-if=\"{isLiveNotStarted}\">
        {activityStartTimeStr}
      </tmp>

      <tmp display-if=\"{isLiveStarting}\">
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.block_grid.onlive"), "html", null, true);
        echo "
      </tmp>

      <tmp display-if=\"{isLiveFinished}\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.block_grid.live_finish"), "html", null, true);
        echo "
      </tmp>
    </tmp>
  </tmp>

  <tmp hide-if=\"{isLive}\">
    {activityLength}
  </tmp>
  <i class=\"{getMetaIcon}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{getMetaName}任务\" data-container=\"body\"></i>
</span>
";
    }

    public function getTemplateName()
    {
        return "course/task-list/parts/task-length-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  50 => 17,  38 => 8,  33 => 5,  31 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/task-list/parts/task-length-template.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\task-length-template.html.twig");
    }
}
