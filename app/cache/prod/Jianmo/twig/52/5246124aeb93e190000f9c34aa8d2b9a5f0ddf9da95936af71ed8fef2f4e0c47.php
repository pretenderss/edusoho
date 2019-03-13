<?php

/* default/index.html.twig */
class __TwigTemplate_1b3ceaf0141178eb2c2813dfb7792255fe34257462621cbf06a0fbe2b518b6e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/base-index.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/base-index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/index/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 6
                echo "    ";
                echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:home_top_banner");
                echo "
    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 9
            echo "        ";
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 10
            echo "        ";
            if ((((($this->getAttribute($context["config"], "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", array()), "")) : ("")) == "recommended") && (($context["code"] ?? null) == "category-course"))) {
                // line 11
                echo "            ";
                $context["code"] = "recommend-course";
                // line 12
                echo "        ";
            }
            // line 13
            echo "        ";
            $context["isPlugin"] = (($this->getAttribute($context["config"], "isPlugin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "isPlugin", array()), 0)) : (0));
            // line 14
            echo "
        ";
            // line 15
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
            // line 16
            echo "
        ";
            // line 17
            if ((($context["isPlugin"] ?? null) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled($this->getAttribute($context["config"], "pluginName", array())))) {
                // line 18
                echo "          ";
                $this->loadTemplate($this->getAttribute($context["config"], "show", array()), "default/index.html.twig", 18)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? null))));
                // line 19
                echo "        ";
            } elseif ( !($context["isPlugin"] ?? null)) {
                // line 20
                echo "          ";
                if ((($context["code"] ?? null) == "friend-link")) {
                    // line 21
                    echo "              ";
                    $this->loadTemplate((("default/" . ($context["code"] ?? null)) . ".html.twig"), "default/index.html.twig", 21)->display(array_merge($context, array("friendlyLinks" => ($context["friendlyLinks"] ?? null))));
                    // line 22
                    echo "          ";
                } elseif ((($context["code"] ?? null) != "footer-link")) {
                    // line 23
                    echo "              ";
                    if ((($context["code"] ?? null) != "course-grid-with-condition-index")) {
                        // line 24
                        echo "                  ";
                        $asm89CacheStrategy2 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
                        $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . ($context["code"] ?? null)), 600                        );
                        $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                        if ($asm89CacheBody2 === false) {
                            ob_start();
                                // line 25
                                echo "                  ";
                                $this->loadTemplate((("default/" . ($context["code"] ?? null)) . ".html.twig"), "default/index.html.twig", 25)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? null))));
                                // line 26
                                echo "                  ";
                            
                            $asm89CacheBody2 = ob_get_clean();
                            $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                        }
                        echo $asm89CacheBody2;
                        // line 27
                        echo "              ";
                    } else {
                        // line 28
                        echo "                  ";
                        $this->loadTemplate((("default/" . ($context["code"] ?? null)) . ".html.twig"), "default/index.html.twig", 28)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? null))));
                        // line 29
                        echo "              ";
                    }
                    // line 30
                    echo "          ";
                }
                // line 31
                echo "        ";
            }
            // line 32
            echo "        
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 32,  141 => 31,  138 => 30,  135 => 29,  132 => 28,  129 => 27,  122 => 26,  119 => 25,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  89 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  69 => 9,  51 => 8,  41 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "D:\\workspace\\vboxShare\\edusoho\\app\\Resources\\views\\default\\index.html.twig");
    }
}
