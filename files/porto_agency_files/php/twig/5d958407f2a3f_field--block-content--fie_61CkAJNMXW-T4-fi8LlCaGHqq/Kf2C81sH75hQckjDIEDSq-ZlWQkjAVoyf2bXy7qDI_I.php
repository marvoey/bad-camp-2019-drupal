<?php

/* themes/porto/templates/block_type/field--block-content--field-testimonials-description--testimonials.html.twig */
class __TwigTemplate_94dbcc55ecc2541e8ebdf8885332537afd42ee04f2eea961d279d9f4eb6b6987 extends Twig_Template
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
        $tags = array("for" => 1, "set" => 2);
        $filters = array("raw" => 5);
        $functions = array("file_url" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set'),
                array('raw'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 2
            echo "    ";
            $context["avatar"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#field_collection_item", array(), "array"), "field_avatar", array()), "entity", array()), "fileuri", array())));
            // line 3
            echo "    <div class=\"col-md-4\">
        <div class=\"testimonial testimonial-style-2 appear-animation\" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"300\">
            ";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#field_collection_item", array(), "array"), "field_description", array()), "value", array())));
            echo "
            <div class=\"testimonial-arrow-down\"></div>
            <div class=\"testimonial-author\">
                <img src=\"";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["avatar"] ?? null), "html", null, true));
            echo "\" class=\"img-responsive img-circle\" alt=\"\">
                <p><strong>";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#field_collection_item", array(), "array"), "field_title", array()), "value", array())));
            echo "</strong><span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#field_collection_item", array(), "array"), "field_job", array()), "value", array())));
            echo "</span></p>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/block_type/field--block-content--field-testimonials-description--testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  54 => 5,  50 => 3,  47 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/block_type/field--block-content--field-testimonials-description--testimonials.html.twig", "/var/www/drupalvm/themeforest-md-porto/demo_agency/docroot/themes/porto/templates/block_type/field--block-content--field-testimonials-description--testimonials.html.twig");
    }
}
