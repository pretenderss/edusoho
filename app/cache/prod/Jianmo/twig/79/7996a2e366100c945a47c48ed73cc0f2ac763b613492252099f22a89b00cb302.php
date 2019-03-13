<?php

/* courseset-manage/file/index.html.twig */
class __TwigTemplate_95cd141f9cd89e4d70744986416fa3c77eb6f06d48e63bcc1705940bafe821e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate(($context["layout"] ?? null), "courseset-manage/file/index.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "open") || ($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "liveOpen"))) {
            // line 2
            $context["layout"] = "open-course-manage/layout.html.twig";
        } else {
            // line 4
            $context["layout"] = "courseset-manage/courseset-layout.html.twig";
        }
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/course-manage-file/index/index.js"));
        // line 11
        $context["side_nav"] = "files";
        // line 12
        $context["tab"] = "courseLesson";
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["courseSet"] ?? null), "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 18
            echo "    ";
            $context["targetType"] = "opencoursematerial";
            // line 19
            echo "  ";
        } else {
            // line 20
            echo "    ";
            $context["targetType"] = "coursematerial";
            // line 21
            echo "  ";
        }
        // line 22
        echo "  <div role=\"courseset-manage-file\">
    <div class=\"courseset-manage-body__title\">
      <a class=\"cd-btn cd-btn-info cd-btn-sm  courseset-manage-body__btn\"
        data-toggle=\"modal\" data-target=\"#modal\"
        data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_batch_upload", array("token" => $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken(($context["targetType"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "private"))), "html", null, true);
        echo "\"
      >
        <i class=\"glyphicon glyphicon-cloud-upload mrs\"></i>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.create_btn"), "html", null, true);
        echo "
      </a>
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.content_title"), "html", null, true);
        echo "
    </div>

    <div id=\"file-manage-panel\" data-file-status-url=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_file_status");
        echo "\">
      <table class=\"table table-striped table-hover\" id=\"course-lesson-table\">
        <thead>
          <tr>
            <th width=\"5%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
            <th width=\"30%\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.name"), "html", null, true);
        echo "</th>
            <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.type"), "html", null, true);
        echo "</th>
            <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.size"), "html", null, true);
        echo "</th>
            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.use_status"), "html", null, true);
        echo "</th>
            <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.last_update"), "html", null, true);
        echo "</th>
            <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.operation"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody>

          ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["uploadFile"]) {
            if ($context["uploadFile"]) {
                // line 49
                echo "            ";
                $this->loadTemplate("courseset-manage/file/tbody-tr.html.twig", "courseset-manage/file/index.html.twig", 49)->display($context);
                // line 50
                echo "          ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.empty"), "html", null, true);
            echo "</td></tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uploadFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        </tbody>
      </table>

      <label class=\"checkbox-inline mrm mbm\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.select_all_btn"), "html", null, true);
        echo "</label>

      <div class=\"btn-group mbm\">
        ";
        // line 60
        if ((($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "normal") || ($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "live"))) {
            // line 61
            echo "          <button class=\"cd-btn cd-btn-danger cd-btn-sm\" data-role=\"batch-delete\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.record"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_delete_materials_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "type" => ($context["tab"] ?? null))), "html", null, true);
            echo "\">
        ";
        } elseif ((($this->getAttribute(        // line 62
($context["courseSet"] ?? null), "type", array()) == "open") || ($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "liveOpen"))) {
            // line 63
            echo "          <button class=\"cd-btn cd-btn-danger cd-btn-sm\" data-role=\"batch-delete\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files.record"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_delete_materials_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "type" => ($context["tab"] ?? null))), "html", null, true);
            echo "\">
        ";
        }
        // line 65
        echo "        <i class=\"glyphicon glyphicon-trash\"></i>
        ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.remove"), "html", null, true);
        echo "</button>
      </div>

      <nav class=\"text-center\">
        ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
      </nav>

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/file/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 70,  194 => 66,  191 => 65,  183 => 63,  181 => 62,  174 => 61,  172 => 60,  166 => 57,  160 => 53,  151 => 51,  142 => 50,  139 => 49,  127 => 48,  119 => 43,  115 => 42,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  91 => 33,  85 => 30,  80 => 28,  75 => 26,  69 => 22,  66 => 21,  63 => 20,  60 => 19,  57 => 18,  54 => 17,  51 => 16,  43 => 9,  39 => 6,  37 => 12,  35 => 11,  33 => 7,  30 => 4,  27 => 2,  25 => 1,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/file/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\courseset-manage\\file\\index.html.twig");
    }
}
