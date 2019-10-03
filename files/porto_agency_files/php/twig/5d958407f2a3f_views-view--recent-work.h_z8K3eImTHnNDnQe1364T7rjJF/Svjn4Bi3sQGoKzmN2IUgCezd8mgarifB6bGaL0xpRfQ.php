<?php

/* themes/porto/templates/view/portfolio/views-view--recent-work.html.twig */
class __TwigTemplate_51a84b92e2f0a8e52e5b7f2f3240b02c63a58b551f5db17a81adea9ebd55a837 extends Twig_Template
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
        $tags = array("set" => 34, "if" => 44);
        $filters = array("clean_class" => 36);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 34
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["id"] ?? null))), 2 => ("view-id-" .         // line 37
($context["id"] ?? null)), 3 => ("view-display-id-" .         // line 38
($context["display_id"] ?? null)), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
        // line 42
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 44
        if (($context["title"] ?? null)) {
            // line 45
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 47
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

    ";
        // line 49
        if (($context["exposed"] ?? null)) {
            // line 50
            echo "        <div class=\"view-filters\">
            ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 54
        echo "    ";
        if (($context["attachment_before"] ?? null)) {
            // line 55
            echo "        <div class=\"attachment attachment-before\">
            ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if (($context["rows"] ?? null)) {
            // line 61
            echo "        <section class=\"mt-xl mb-none pb-none\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 center\">
                        ";
            // line 65
            if (($context["header"] ?? null)) {
                // line 66
                echo "                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
                        ";
            }
            // line 68
            echo "                        <div class=\"divider divider-primary divider-small divider-small-center mb-xl\">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <div class=\"carousel-areas mt-xl mb-none\">
                            <div class=\"owl-carousel owl-theme m-none\" data-plugin-options='{\"autoHeight\": true, \"items\": 1, \"margin\": 10, \"nav\": true, \"dots\": false, \"stagePadding\": 0}'>
                                ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    ";
        } elseif (        // line 85
($context["empty"] ?? null)) {
            // line 86
            echo "        <div class=\"view-empty\">
            ";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if (($context["pager"] ?? null)) {
            // line 92
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 94
        echo "    ";
        if (($context["attachment_after"] ?? null)) {
            // line 95
            echo "        <div class=\"attachment attachment-after\">
            ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 99
        echo "    ";
        if (($context["more"] ?? null)) {
            // line 100
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 102
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 103
            echo "        <div class=\"view-footer\">
            ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 107
        echo "    ";
        if (($context["feed_icons"] ?? null)) {
            // line 108
            echo "        <div class=\"feed-icons\">
            ";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 112
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/portfolio/views-view--recent-work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 112,  197 => 109,  194 => 108,  191 => 107,  185 => 104,  182 => 103,  179 => 102,  173 => 100,  170 => 99,  164 => 96,  161 => 95,  158 => 94,  152 => 92,  150 => 91,  147 => 90,  141 => 87,  138 => 86,  136 => 85,  125 => 77,  114 => 68,  108 => 66,  106 => 65,  100 => 61,  98 => 60,  95 => 59,  89 => 56,  86 => 55,  83 => 54,  77 => 51,  74 => 50,  72 => 49,  66 => 47,  60 => 45,  58 => 44,  54 => 43,  49 => 42,  47 => 39,  46 => 38,  45 => 37,  44 => 36,  43 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/view/portfolio/views-view--recent-work.html.twig", "/var/www/drupalvm/themeforest-md-porto/demo_agency/docroot/themes/porto/templates/view/portfolio/views-view--recent-work.html.twig");
    }
}
