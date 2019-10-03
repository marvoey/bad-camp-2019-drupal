<?php

/* themes/porto/templates/includes/footer.html.twig */
class __TwigTemplate_a606f620b4e7d221ca738acd39efdd2d6c3164d9ab8c63b312ab3117baa8e2ba extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "<footer class=\"short\" id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "footer_11", array())) {
            // line 5
            echo "            <div class=\"col-sm-2\">
                ";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_11", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 9
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_12", array())) {
            // line 10
            echo "            <div class=\"col-sm-2 col-sm-offset-6 align-right\">
                ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_12", array()), "html", null, true));
            echo "

            </div>
            ";
        }
        // line 15
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_13", array())) {
            // line 16
            echo "            <div class=\"col-sm-2 align-right\">
                ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_13", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 20
        echo "        </div>
        ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
            // line 22
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <hr class=\"solid\">
                <div class=\"row\">
                    ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
            echo "

                </div>
            </div>
        </div>
        ";
        }
        // line 32
        echo "    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  95 => 26,  89 => 22,  87 => 21,  84 => 20,  78 => 17,  75 => 16,  72 => 15,  65 => 11,  62 => 10,  59 => 9,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/includes/footer.html.twig", "/var/www/drupalvm/themeforest-md-porto/demo_agency/docroot/themes/porto/templates/includes/footer.html.twig");
    }
}
