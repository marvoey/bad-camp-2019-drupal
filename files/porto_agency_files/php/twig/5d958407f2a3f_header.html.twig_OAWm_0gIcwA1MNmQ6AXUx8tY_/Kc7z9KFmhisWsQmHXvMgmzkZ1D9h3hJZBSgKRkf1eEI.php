<?php

/* themes/porto/templates/includes/header.html.twig */
class __TwigTemplate_4a943a0b966a7923351972c82af04051a91b2f5083ada41fe781fb00dd34ea30 extends Twig_Template
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
        $tags = array("if" => 5);
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
        echo "<header id=\"header\" class=\"header-narrow header-semi-transparent\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 1, \"stickySetTop\": \"0\"}'>
    <div class=\"header-body\">
        <div class=\"header-container container\">
            <div class=\"header-row\">
                ";
        // line 5
        if (($context["logopath"] ?? null)) {
            // line 6
            echo "                    <div class=\"header-column\">
                        <div class=\"header-logo\">
                            <a href=\"";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
            echo "\">
                                <img alt=\"Porto\" width=\"131\" height=\"40\" src=\"";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logopath"] ?? null), "html", null, true));
            echo "\">
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 14
        echo "                <div class=\"header-column\">
                    <div class=\"header-row\">
                        <div class=\"header-nav header-nav-stripe\">
                            <button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
                                <i class=\"fa fa-bars\"></i>
                            </button>

                            ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "nav_top", array())) {
            // line 22
            echo "                                <div class=\"header-social-icons\">
                                    ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "nav_top", array()), "html", null, true));
            echo "
                                </div>
                            ";
        }
        // line 26
        echo "                            ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 27
            echo "                            <div class=\"header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse\">
                                ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
                            </div>
                            ";
        }
        // line 31
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--breadcrumbs-->
";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 40
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
";
        }
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  111 => 40,  109 => 39,  99 => 31,  93 => 28,  90 => 27,  87 => 26,  81 => 23,  78 => 22,  76 => 21,  67 => 14,  59 => 9,  55 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/includes/header.html.twig", "/var/www/drupalvm/themeforest-md-porto/demo_agency/docroot/themes/porto/templates/includes/header.html.twig");
    }
}
