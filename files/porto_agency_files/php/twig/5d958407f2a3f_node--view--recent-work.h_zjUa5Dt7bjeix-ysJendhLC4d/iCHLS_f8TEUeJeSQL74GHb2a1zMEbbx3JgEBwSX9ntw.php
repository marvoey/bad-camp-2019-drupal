<?php

/* themes/porto/templates/node/portfolio/node--view--recent-work.html.twig */
class __TwigTemplate_401e46c4a197d70af057ec6e1538e88cfeb80d41f49ea8f290e7fc82cb15d3fb extends Twig_Template
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
        $tags = array("set" => 1, "if" => 4);
        $filters = array("render" => 4);
        $functions = array("file_url" => 6);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('render'),
                array('file_url')
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
        $context["thumbnail"] = $this->getAttribute(($context["node"] ?? null), "field_thumbnail", array());
        // line 2
        echo "
<div>
    ";
        // line 4
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_thumbnail", array()))) {
            // line 5
            echo "        <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">
            <img alt=\"\" class=\"img-responsive\" src=\"";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_thumbnail", array()), "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\">
        </a>
    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/node/portfolio/node--view--recent-work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  56 => 6,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/node/portfolio/node--view--recent-work.html.twig", "/var/www/drupalvm/themeforest-md-porto/demo_agency/docroot/themes/porto/templates/node/portfolio/node--view--recent-work.html.twig");
    }
}
