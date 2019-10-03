<?php

/* themes/porto/templates/page--panels.html.twig */
class __TwigTemplate_d9d10e7916b2e0510e61c636f92c4e5c1dfb3caed1a57c4caa9cb06956c0c210 extends Twig_Template
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
        $tags = array("include" => 3, "if" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
                array(),
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

        // line 1
        echo "
<div id=\"wrapper\">
    ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/porto/templates/page--panels.html.twig", 3)->display($context);
        // line 4
        echo "    <div role=\"main\" class=\"main relative\">
        ";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "top_categories", array())) {
            // line 6
            echo "            <div class=\"home-slider-area\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9 col-md-push-3\">
                            ";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slide_show", array()), "html", null, true));
            echo "
                        </div>
                        <div class=\"col-md-3 col-md-pull-9\">
                            ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_categories", array()), "html", null, true));
            echo "
                        </div>
                    </div>
                </div>
            </div>

        ";
        } else {
            // line 20
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "slide_show", array())) {
                // line 21
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slide_show", array()), "html", null, true));
                echo "
            ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "
";
        // line 26
        echo "
        ";
        // line 27
        if (($context["messages"] ?? null)) {
            // line 28
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
                </div>
            </section>
        ";
        }
        // line 34
        echo "        ";
        if (($this->getAttribute(($context["page"] ?? null), "left_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())))) {
            // line 35
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
                <div class=\"col-md-9\">
                    ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
            </div>

        </div>

        ";
        } elseif (($this->getAttribute(        // line 49
($context["page"] ?? null), "right_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "left_sidebar", array())))) {
            // line 50
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    ";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
            </div>
        </div>


        ";
        } elseif (($this->getAttribute(        // line 64
($context["page"] ?? null), "right_sidebar", array()) && $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()))) {
            // line 65
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
                <div class=\"col-md-6\">
                    ";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
            </div>
        </div>

        ";
        } else {
            // line 84
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "

        ";
        }
        // line 87
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 88
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
        ";
        }
        // line 90
        echo "    </div>
    ";
        // line 91
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page--panels.html.twig", 91)->display($context);
        // line 92
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page--panels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 92,  207 => 91,  204 => 90,  198 => 88,  195 => 87,  188 => 84,  178 => 77,  171 => 73,  164 => 69,  158 => 65,  156 => 64,  146 => 57,  139 => 53,  134 => 50,  132 => 49,  123 => 43,  116 => 39,  110 => 35,  107 => 34,  100 => 30,  96 => 28,  94 => 27,  91 => 26,  88 => 24,  85 => 23,  79 => 21,  76 => 20,  66 => 13,  60 => 10,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/page--panels.html.twig", "/var/www/drupalvm/themeforest-md-porto/demo_agency/docroot/themes/porto/templates/page--panels.html.twig");
    }
}
