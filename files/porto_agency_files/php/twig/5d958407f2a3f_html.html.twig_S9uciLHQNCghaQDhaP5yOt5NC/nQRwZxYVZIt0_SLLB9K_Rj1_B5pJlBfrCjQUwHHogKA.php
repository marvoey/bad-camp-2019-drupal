<?php

/* themes/porto/templates/html.html.twig */
class __TwigTemplate_fc9a11abecfe107f6ec43a727e567ca10211fa4b0eb807b17dc80a63f27f572d extends Twig_Template
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
        $tags = array("set" => 2, "if" => 12);
        $filters = array("clean_class" => 4, "raw" => 15, "safe_join" => 16, "t" => 4686);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'raw', 'safe_join', 't'),
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

        // line 2
        $context["body_classes"] = array(0 => ((        // line 3
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 4
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => ((        // line 5
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 3 => ((        // line 6
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((        // line 7
($context["current_path"] ?? null)) ? (("context" . \Drupal\Component\Utility\Html::getClass(($context["current_path"] ?? null)))) : ("")));
        // line 10
        echo "
<!DOCTYPE html>
<html";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
        echo " class=\"";
        if ((($context["h_semi_transparent_option"] ?? null) == 1)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent "));
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-semi-transparent")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent"));
            }
        }
        if ((($context["header_option"] ?? null) == "h_left")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header"));
        } elseif ((($context["header_option"] ?? null) == "h_right")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right"));
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-left")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header"));
            } elseif ((($context["arg"] ?? null) == "index-header-side-header-right")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right"));
            }
        }
        echo " ";
        if ((($context["arg"] ?? null) == "index-layout-boxed")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("boxed"));
        } elseif ((($context["arg"] ?? null) == "index-layout-dark")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("dark"));
        } else {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["layout_option"] ?? null), "html", null, true));
        }
        echo "\">

<head>
    <head-placeholder token=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
        <title>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">
        <css-placeholder token=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
            ";
        // line 20
        if ((($context["skin_option"] ?? null) == "custom")) {
            // line 21
            echo "                <style>
                a {
                    color: ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                a:hover {
                    color: ";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                a:focus {
                    color: ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                a:active {
                    color: ";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .heading-primary,
                html .lnk-primary,
                html .text-color-primary {
                    color: ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .heading.heading-primary h1,
                html .heading.heading-primary h2,
                html .heading.heading-primary h3,
                html .heading.heading-primary h4,
                html .heading.heading-primary h5,
                html .heading.heading-primary h6 {
                    border-color: ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .heading-secondary,
                html .lnk-secondary,
                html .text-color-secondary {
                    color: ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .heading.heading-secondary h1,
                html .heading.heading-secondary h2,
                html .heading.heading-secondary h3,
                html .heading.heading-secondary h4,
                html .heading.heading-secondary h5,
                html .heading.heading-secondary h6 {
                    border-color: ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .heading-tertiary,
                html .lnk-tertiary,
                html .text-color-tertiary {
                    color: #dfe5ea !important;
                }

                html .heading.heading-tertiary h1,
                html .heading.heading-tertiary h2,
                html .heading.heading-tertiary h3,
                html .heading.heading-tertiary h4,
                html .heading.heading-tertiary h5,
                html .heading.heading-tertiary h6 {
                    border-color: #dfe5ea;
                }

                html .heading-quaternary,
                html .lnk-quaternary,
                html .text-color-quaternary {
                    color: #444444 !important;
                }

                html .heading.heading-quaternary h1,
                html .heading.heading-quaternary h2,
                html .heading.heading-quaternary h3,
                html .heading.heading-quaternary h4,
                html .heading.heading-quaternary h5,
                html .heading.heading-quaternary h6 {
                    border-color: #444444;
                }

                html .heading-dark,
                html .lnk-dark,
                html .text-color-dark {
                    color: #2e353e !important;
                }

                html .heading.heading-dark h1,
                html .heading.heading-dark h2,
                html .heading.heading-dark h3,
                html .heading.heading-dark h4,
                html .heading.heading-dark h5,
                html .heading.heading-dark h6 {
                    border-color: #2e353e;
                }

                html .heading-light,
                html .lnk-light,
                html .text-color-light {
                    color: #ffffff !important;
                }

                html .heading.heading-light h1,
                html .heading.heading-light h2,
                html .heading.heading-light h3,
                html .heading.heading-light h4,
                html .heading.heading-light h5,
                html .heading.heading-light h6 {
                    border-color: #ffffff;
                }

                html .background-color-primary {
                    background-color: ";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .background-color-secondary {
                    background-color: ";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .background-color-tertiary {
                    background-color: #dfe5ea !important;
                }

                html .background-color-quaternary {
                    background-color: #444444 !important;
                }

                html .background-color-dark {
                    background-color: #2e353e !important;
                }

                html .background-color-light {
                    background-color: #ffffff !important;
                }

                .alternative-font {
                    color: ";
            // line 153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .blockquote-primary {
                    border-color: ";
            // line 157
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .blockquote-secondary {
                    border-color: ";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .blockquote-tertiary {
                    border-color: #dfe5ea !important;
                }

                html .blockquote-quaternary {
                    border-color: #444444 !important;
                }

                html .blockquote-dark {
                    border-color: #2e353e !important;
                }

                html .blockquote-light {
                    border-color: #ffffff !important;
                }

                p.drop-caps:first-letter {
                    color: ";
            // line 181
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                p.drop-caps.drop-caps-style-2:first-letter {
                    background-color: ";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                ul.nav-pills > li.active > a {
                    background-color: ";
            // line 189
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                ul.nav-pills > li.active > a:hover,
                ul.nav-pills > li.active > a:focus {
                    background-color: ";
            // line 194
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-primary a {
                    color: ";
            // line 198
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-primary a:hover {
                    color: ";
            // line 202
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-primary a:focus {
                    color: ";
            // line 206
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-primary a:active {
                    color: ";
            // line 210
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-primary > li.active > a {
                    background-color: ";
            // line 214
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-primary > li.active > a:hover,
                html ul.nav-pills-primary > li.active > a:focus {
                    background-color: ";
            // line 219
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-secondary a {
                    color: ";
            // line 223
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-secondary a:hover {
                    color: ";
            // line 227
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-secondary a:focus {
                    color: ";
            // line 231
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-secondary a:active {
                    color: ";
            // line 235
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-secondary > li.active > a {
                    background-color: ";
            // line 239
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-secondary > li.active > a:hover,
                html ul.nav-pills-secondary > li.active > a:focus {
                    background-color: ";
            // line 244
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html ul.nav-pills-tertiary a {
                    color: #dfe5ea;
                }

                html ul.nav-pills-tertiary a:hover {
                    color: #eef2f4;
                }

                html ul.nav-pills-tertiary a:focus {
                    color: #eef2f4;
                }

                html ul.nav-pills-tertiary a:active {
                    color: #d0d8e0;
                }

                html ul.nav-pills-tertiary > li.active > a {
                    background-color: #dfe5ea;
                }

                html ul.nav-pills-tertiary > li.active > a:hover,
                html ul.nav-pills-tertiary > li.active > a:focus {
                    background-color: #dfe5ea;
                }

                html ul.nav-pills-quaternary a {
                    color: #444444;
                }

                html ul.nav-pills-quaternary a:hover {
                    color: #515151;
                }

                html ul.nav-pills-quaternary a:focus {
                    color: #515151;
                }

                html ul.nav-pills-quaternary a:active {
                    color: #373737;
                }

                html ul.nav-pills-quaternary > li.active > a {
                    background-color: #444444;
                }

                html ul.nav-pills-quaternary > li.active > a:hover,
                html ul.nav-pills-quaternary > li.active > a:focus {
                    background-color: #444444;
                }

                html ul.nav-pills-dark a {
                    color: #2e353e;
                }

                html ul.nav-pills-dark a:hover {
                    color: #39424d;
                }

                html ul.nav-pills-dark a:focus {
                    color: #39424d;
                }

                html ul.nav-pills-dark a:active {
                    color: #23282f;
                }

                html ul.nav-pills-dark > li.active > a {
                    background-color: #2e353e;
                }

                html ul.nav-pills-dark > li.active > a:hover,
                html ul.nav-pills-dark > li.active > a:focus {
                    background-color: #2e353e;
                }

                html ul.nav-pills-light a {
                    color: #ffffff;
                }

                html ul.nav-pills-light a:hover {
                    color: #ffffff;
                }

                html ul.nav-pills-light a:focus {
                    color: #ffffff;
                }

                html ul.nav-pills-light a:active {
                    color: #f2f2f2;
                }

                html ul.nav-pills-light > li.active > a {
                    background-color: #ffffff;
                }

                html ul.nav-pills-light > li.active > a:hover,
                html ul.nav-pills-light > li.active > a:focus {
                    background-color: #ffffff;
                }

                .sort-source-wrapper .nav > li.active > a {
                    color: ";
            // line 348
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .sort-source-wrapper .nav > li.active > a:hover,
                .sort-source-wrapper .nav > li.active > a:focus {
                    color: ";
            // line 353
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .sort-source.sort-source-style-2 > li.active > a:after {
                    border-top-color: ";
            // line 357
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .label-primary {
                    background-color: ";
            // line 361
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .label-secondary {
                    background-color: ";
            // line 365
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .label-tertiary {
                    background-color: #dfe5ea;
                }

                html .label-quaternary {
                    background-color: #444444;
                }

                html .label-dark {
                    background-color: #2e353e;
                }

                html .label-light {
                    background-color: #ffffff;
                }

                .btn-link {
                    color: ";
            // line 385
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .btn-link:hover {
                    color: ";
            // line 389
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .btn-link:active {
                    color: ";
            // line 393
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-primary {
                    color: #ffffff;
                    background-color: ";
            // line 398
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 399
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #6c912b;
                }

                html .btn-primary:hover {
                    border-color: ";
            // line 403
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 404
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-primary:active,
                html .btn-primary:focus,
                html .btn-primary:active:hover,
                html .btn-primary:active:focus {
                    border-color: ";
            // line 411
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 412
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-primary.dropdown-toggle {
                    border-left-color: ";
            // line 416
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-primary[disabled],
                html .btn-primary[disabled]:hover,
                html .btn-primary[disabled]:active,
                html .btn-primary[disabled]:focus {
                    border-color: #b7d87d;
                    background-color: #b7d87d;
                }

                html .btn-primary:hover,
                html .btn-primary:focus,
                html .btn-primary:active:hover,
                html .btn-primary:active:focus {
                    color: #ffffff;
                }

                html .btn-primary-scale-2 {
                    color: #ffffff;
                    background-color: #6c912b;
                    border-color: #6c912b #6c912b #4f6920;
                }

                html .btn-primary-scale-2:hover {
                    border-color: ";
            // line 441
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #5d7d25;
                    background-color: ";
            // line 442
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-primary-scale-2:active,
                html .btn-primary-scale-2:focus,
                html .btn-primary-scale-2:active:hover,
                html .btn-primary-scale-2:active:focus {
                    border-color: #5d7d25 #5d7d25 #5d7d25;
                    background-color: #5d7d25;
                }

                html .btn-primary-scale-2.dropdown-toggle {
                    border-left-color: #5d7d25;
                }

                html .btn-primary-scale-2[disabled],
                html .btn-primary-scale-2[disabled]:hover,
                html .btn-primary-scale-2[disabled]:active,
                html .btn-primary-scale-2[disabled]:focus {
                    border-color: #a1cc56;
                    background-color: #a1cc56;
                }

                html .btn-secondary {
                    color: #ffffff;
                    background-color: ";
            // line 467
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 468
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary:hover {
                    border-color: ";
            // line 472
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 473
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary:active,
                html .btn-secondary:focus,
                html .btn-secondary:active:hover,
                html .btn-secondary:active:focus {
                    border-color: ";
            // line 480
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 481
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary.dropdown-toggle {
                    border-left-color: ";
            // line 485
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary[disabled],
                html .btn-secondary[disabled]:hover,
                html .btn-secondary[disabled]:active,
                html .btn-secondary[disabled]:focus {
                    border-color: ";
            // line 492
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 493
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary:hover,
                html .btn-secondary:focus,
                html .btn-secondary:active:hover,
                html .btn-secondary:active:focus {
                    color: #ffffff;
                }

                html .btn-secondary-scale-2 {
                    color: #ffffff;
                    background-color: ";
            // line 505
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 506
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary-scale-2:hover {
                    border-color: ";
            // line 510
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 511
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary-scale-2:active,
                html .btn-secondary-scale-2:focus,
                html .btn-secondary-scale-2:active:hover,
                html .btn-secondary-scale-2:active:focus {
                    border-color: ";
            // line 518
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 519
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary-scale-2.dropdown-toggle {
                    border-left-color: ";
            // line 523
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-secondary-scale-2[disabled],
                html .btn-secondary-scale-2[disabled]:hover,
                html .btn-secondary-scale-2[disabled]:active,
                html .btn-secondary-scale-2[disabled]:focus {
                    border-color: ";
            // line 530
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 531
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-tertiary {
                    color: #ffffff;
                    background-color: #dfe5ea;
                    border-color: #dfe5ea #dfe5ea #c0ccd6;
                }

                html .btn-tertiary:hover {
                    border-color: #eef2f4 #eef2f4 #d0d8e0;
                    background-color: #eef2f4;
                }

                html .btn-tertiary:active,
                html .btn-tertiary:focus,
                html .btn-tertiary:active:hover,
                html .btn-tertiary:active:focus {
                    border-color: #d0d8e0 #d0d8e0 #d0d8e0;
                    background-color: #d0d8e0;
                }

                html .btn-tertiary.dropdown-toggle {
                    border-left-color: #d0d8e0;
                }

                html .btn-tertiary[disabled],
                html .btn-tertiary[disabled]:hover,
                html .btn-tertiary[disabled]:active,
                html .btn-tertiary[disabled]:focus {
                    border-color: #ffffff;
                    background-color: #ffffff;
                }

                html .btn-tertiary:hover,
                html .btn-tertiary:focus,
                html .btn-tertiary:active:hover,
                html .btn-tertiary:active:focus {
                    color: #777777;
                }

                html .btn-tertiary-scale-2 {
                    color: #ffffff;
                    background-color: #c0ccd6;
                    border-color: #c0ccd6 #c0ccd6 #a1b3c2;
                }

                html .btn-tertiary-scale-2:hover {
                    border-color: #d0d8e0 #d0d8e0 #b1bfcc;
                    background-color: #d0d8e0;
                }

                html .btn-tertiary-scale-2:active,
                html .btn-tertiary-scale-2:focus,
                html .btn-tertiary-scale-2:active:hover,
                html .btn-tertiary-scale-2:active:focus {
                    border-color: #b1bfcc #b1bfcc #b1bfcc;
                    background-color: #b1bfcc;
                }

                html .btn-tertiary-scale-2.dropdown-toggle {
                    border-left-color: #b1bfcc;
                }

                html .btn-tertiary-scale-2[disabled],
                html .btn-tertiary-scale-2[disabled]:hover,
                html .btn-tertiary-scale-2[disabled]:active,
                html .btn-tertiary-scale-2[disabled]:focus {
                    border-color: #fefefe;
                    background-color: #fefefe;
                }

                html .btn-quaternary {
                    color: #ffffff;
                    background-color: #444444;
                    border-color: #444444 #444444 #2b2b2b;
                }

                html .btn-quaternary:hover {
                    border-color: #515151 #515151 #373737;
                    background-color: #515151;
                }

                html .btn-quaternary:active,
                html .btn-quaternary:focus,
                html .btn-quaternary:active:hover,
                html .btn-quaternary:active:focus {
                    border-color: #373737 #373737 #373737;
                    background-color: #373737;
                }

                html .btn-quaternary.dropdown-toggle {
                    border-left-color: #373737;
                }

                html .btn-quaternary[disabled],
                html .btn-quaternary[disabled]:hover,
                html .btn-quaternary[disabled]:active,
                html .btn-quaternary[disabled]:focus {
                    border-color: #777777;
                    background-color: #777777;
                }

                html .btn-quaternary:hover,
                html .btn-quaternary:focus,
                html .btn-quaternary:active:hover,
                html .btn-quaternary:active:focus {
                    color: #ffffff;
                }

                html .btn-quaternary-scale-2 {
                    color: #ffffff;
                    background-color: #2b2b2b;
                    border-color: #2b2b2b #2b2b2b #111111;
                }

                html .btn-quaternary-scale-2:hover {
                    border-color: #373737 #373737 #1e1e1e;
                    background-color: #373737;
                }

                html .btn-quaternary-scale-2:active,
                html .btn-quaternary-scale-2:focus,
                html .btn-quaternary-scale-2:active:hover,
                html .btn-quaternary-scale-2:active:focus {
                    border-color: #1e1e1e #1e1e1e #1e1e1e;
                    background-color: #1e1e1e;
                }

                html .btn-quaternary-scale-2.dropdown-toggle {
                    border-left-color: #1e1e1e;
                }

                html .btn-quaternary-scale-2[disabled],
                html .btn-quaternary-scale-2[disabled]:hover,
                html .btn-quaternary-scale-2[disabled]:active,
                html .btn-quaternary-scale-2[disabled]:focus {
                    border-color: #5e5e5e;
                    background-color: #5e5e5e;
                }

                html .btn-dark {
                    color: #ffffff;
                    background-color: #2e353e;
                    border-color: #2e353e #2e353e #181c21;
                }

                html .btn-dark:hover {
                    border-color: #39424d #39424d #23282f;
                    background-color: #39424d;
                }

                html .btn-dark:active,
                html .btn-dark:focus,
                html .btn-dark:active:hover,
                html .btn-dark:active:focus {
                    border-color: #23282f #23282f #23282f;
                    background-color: #23282f;
                }

                html .btn-dark.dropdown-toggle {
                    border-left-color: #23282f;
                }

                html .btn-dark[disabled],
                html .btn-dark[disabled]:hover,
                html .btn-dark[disabled]:active,
                html .btn-dark[disabled]:focus {
                    border-color: #596779;
                    background-color: #596779;
                }

                html .btn-dark:hover,
                html .btn-dark:focus,
                html .btn-dark:active:hover,
                html .btn-dark:active:focus {
                    color: #ffffff;
                }

                html .btn-dark-scale-2 {
                    color: #ffffff;
                    background-color: #181c21;
                    border-color: #181c21 #181c21 #030303;
                }

                html .btn-dark-scale-2:hover {
                    border-color: #23282f #23282f #0d0f12;
                    background-color: #23282f;
                }

                html .btn-dark-scale-2:active,
                html .btn-dark-scale-2:focus,
                html .btn-dark-scale-2:active:hover,
                html .btn-dark-scale-2:active:focus {
                    border-color: #0d0f12 #0d0f12 #0d0f12;
                    background-color: #0d0f12;
                }

                html .btn-dark-scale-2.dropdown-toggle {
                    border-left-color: #0d0f12;
                }

                html .btn-dark-scale-2[disabled],
                html .btn-dark-scale-2[disabled]:hover,
                html .btn-dark-scale-2[disabled]:active,
                html .btn-dark-scale-2[disabled]:focus {
                    border-color: #444e5b;
                    background-color: #444e5b;
                }

                html .btn-light {
                    color: #ffffff;
                    background-color: #ffffff;
                    border-color: #ffffff #ffffff #e6e6e6;
                }

                html .btn-light:hover {
                    border-color: #ffffff #ffffff #f2f2f2;
                    background-color: #ffffff;
                }

                html .btn-light:active,
                html .btn-light:focus,
                html .btn-light:active:hover,
                html .btn-light:active:focus {
                    border-color: #f2f2f2 #f2f2f2 #f2f2f2;
                    background-color: #f2f2f2;
                }

                html .btn-light.dropdown-toggle {
                    border-left-color: #f2f2f2;
                }

                html .btn-light[disabled],
                html .btn-light[disabled]:hover,
                html .btn-light[disabled]:active,
                html .btn-light[disabled]:focus {
                    border-color: #ffffff;
                    background-color: #ffffff;
                }

                html .btn-light:hover,
                html .btn-light:focus,
                html .btn-light:active:hover,
                html .btn-light:active:focus {
                    color: #777777;
                }

                html .btn-light-scale-2 {
                    color: #ffffff;
                    background-color: #e6e6e6;
                    border-color: #e6e6e6 #e6e6e6 #cccccc;
                }

                html .btn-light-scale-2:hover {
                    border-color: #f2f2f2 #f2f2f2 #d9d9d9;
                    background-color: #f2f2f2;
                }

                html .btn-light-scale-2:active,
                html .btn-light-scale-2:focus,
                html .btn-light-scale-2:active:hover,
                html .btn-light-scale-2:active:focus {
                    border-color: #d9d9d9 #d9d9d9 #d9d9d9;
                    background-color: #d9d9d9;
                }

                html .btn-light-scale-2.dropdown-toggle {
                    border-left-color: #d9d9d9;
                }

                html .btn-light-scale-2[disabled],
                html .btn-light-scale-2[disabled]:hover,
                html .btn-light-scale-2[disabled]:active,
                html .btn-light-scale-2[disabled]:focus {
                    border-color: #ffffff;
                    background-color: #ffffff;
                }

                html .btn-borders.btn-primary {
                    background: transparent;
                    border-color: ";
            // line 812
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 813
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    text-shadow: none;
                }

                html .btn-borders.btn-primary:hover,
                html .btn-borders.btn-primary:focus {
                    background-color: ";
            // line 819
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 820
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #6c912b;
                    border-color: ";
            // line 821
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                    color: #ffffff;
                }

                html .btn-borders.btn-primary:hover:hover,
                html .btn-borders.btn-primary:focus:hover {
                    border-color: ";
            // line 827
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 828
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-borders.btn-primary:hover:active,
                html .btn-borders.btn-primary:focus:active,
                html .btn-borders.btn-primary:hover:focus,
                html .btn-borders.btn-primary:focus:focus,
                html .btn-borders.btn-primary:hover:active:hover,
                html .btn-borders.btn-primary:focus:active:hover,
                html .btn-borders.btn-primary:hover:active:focus,
                html .btn-borders.btn-primary:focus:active:focus {
                    border-color: ";
            // line 839
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 840
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-borders.btn-primary:hover.dropdown-toggle,
                html .btn-borders.btn-primary:focus.dropdown-toggle {
                    border-left-color: ";
            // line 845
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-borders.btn-primary:hover[disabled],
                html .btn-borders.btn-primary:focus[disabled],
                html .btn-borders.btn-primary:hover[disabled]:hover,
                html .btn-borders.btn-primary:focus[disabled]:hover,
                html .btn-borders.btn-primary:hover[disabled]:active,
                html .btn-borders.btn-primary:focus[disabled]:active,
                html .btn-borders.btn-primary:hover[disabled]:focus,
                html .btn-borders.btn-primary:focus[disabled]:focus {
                    border-color: #b7d87d;
                    background-color: #b7d87d;
                }

                html .btn-borders.btn-secondary {
                    background: transparent;
                    border-color: ";
            // line 862
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 863
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    text-shadow: none;
                }

                html .btn-borders.btn-secondary:hover,
                html .btn-borders.btn-secondary:focus {
                    background-color: ";
            // line 869
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 870
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 871
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                    color: #ffffff;
                }

                html .btn-borders.btn-secondary:hover:hover,
                html .btn-borders.btn-secondary:focus:hover {
                    border-color: ";
            // line 877
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 878
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-borders.btn-secondary:hover:active,
                html .btn-borders.btn-secondary:focus:active,
                html .btn-borders.btn-secondary:hover:focus,
                html .btn-borders.btn-secondary:focus:focus,
                html .btn-borders.btn-secondary:hover:active:hover,
                html .btn-borders.btn-secondary:focus:active:hover,
                html .btn-borders.btn-secondary:hover:active:focus,
                html .btn-borders.btn-secondary:focus:active:focus {
                    border-color: ";
            // line 889
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 890
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-borders.btn-secondary:hover.dropdown-toggle,
                html .btn-borders.btn-secondary:focus.dropdown-toggle {
                    border-left-color: ";
            // line 895
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-borders.btn-secondary:hover[disabled],
                html .btn-borders.btn-secondary:focus[disabled],
                html .btn-borders.btn-secondary:hover[disabled]:hover,
                html .btn-borders.btn-secondary:focus[disabled]:hover,
                html .btn-borders.btn-secondary:hover[disabled]:active,
                html .btn-borders.btn-secondary:focus[disabled]:active,
                html .btn-borders.btn-secondary:hover[disabled]:focus,
                html .btn-borders.btn-secondary:focus[disabled]:focus {
                    border-color: ";
            // line 906
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 907
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .btn-borders.btn-tertiary {
                    background: transparent;
                    border-color: #dfe5ea;
                    color: #dfe5ea;
                    text-shadow: none;
                }

                html .btn-borders.btn-tertiary:hover,
                html .btn-borders.btn-tertiary:focus {
                    color: #ffffff;
                    background-color: #dfe5ea;
                    border-color: #dfe5ea #dfe5ea #c0ccd6;
                    border-color: #dfe5ea !important;
                    color: #777777;
                }

                html .btn-borders.btn-tertiary:hover:hover,
                html .btn-borders.btn-tertiary:focus:hover {
                    border-color: #eef2f4 #eef2f4 #d0d8e0;
                    background-color: #eef2f4;
                }

                html .btn-borders.btn-tertiary:hover:active,
                html .btn-borders.btn-tertiary:focus:active,
                html .btn-borders.btn-tertiary:hover:focus,
                html .btn-borders.btn-tertiary:focus:focus,
                html .btn-borders.btn-tertiary:hover:active:hover,
                html .btn-borders.btn-tertiary:focus:active:hover,
                html .btn-borders.btn-tertiary:hover:active:focus,
                html .btn-borders.btn-tertiary:focus:active:focus {
                    border-color: #d0d8e0 #d0d8e0 #d0d8e0;
                    background-color: #d0d8e0;
                }

                html .btn-borders.btn-tertiary:hover.dropdown-toggle,
                html .btn-borders.btn-tertiary:focus.dropdown-toggle {
                    border-left-color: #d0d8e0;
                }

                html .btn-borders.btn-tertiary:hover[disabled],
                html .btn-borders.btn-tertiary:focus[disabled],
                html .btn-borders.btn-tertiary:hover[disabled]:hover,
                html .btn-borders.btn-tertiary:focus[disabled]:hover,
                html .btn-borders.btn-tertiary:hover[disabled]:active,
                html .btn-borders.btn-tertiary:focus[disabled]:active,
                html .btn-borders.btn-tertiary:hover[disabled]:focus,
                html .btn-borders.btn-tertiary:focus[disabled]:focus {
                    border-color: #ffffff;
                    background-color: #ffffff;
                }

                html .btn-borders.btn-quaternary {
                    background: transparent;
                    border-color: #444444;
                    color: #444444;
                    text-shadow: none;
                }

                html .btn-borders.btn-quaternary:hover,
                html .btn-borders.btn-quaternary:focus {
                    background-color: #444444;
                    border-color: #444444 #444444 #2b2b2b;
                    border-color: #444444 !important;
                    color: #ffffff;
                }

                html .btn-borders.btn-quaternary:hover:hover,
                html .btn-borders.btn-quaternary:focus:hover {
                    border-color: #515151 #515151 #373737;
                    background-color: #515151;
                }

                html .btn-borders.btn-quaternary:hover:active,
                html .btn-borders.btn-quaternary:focus:active,
                html .btn-borders.btn-quaternary:hover:focus,
                html .btn-borders.btn-quaternary:focus:focus,
                html .btn-borders.btn-quaternary:hover:active:hover,
                html .btn-borders.btn-quaternary:focus:active:hover,
                html .btn-borders.btn-quaternary:hover:active:focus,
                html .btn-borders.btn-quaternary:focus:active:focus {
                    border-color: #373737 #373737 #373737;
                    background-color: #373737;
                }

                html .btn-borders.btn-quaternary:hover.dropdown-toggle,
                html .btn-borders.btn-quaternary:focus.dropdown-toggle {
                    border-left-color: #373737;
                }

                html .btn-borders.btn-quaternary:hover[disabled],
                html .btn-borders.btn-quaternary:focus[disabled],
                html .btn-borders.btn-quaternary:hover[disabled]:hover,
                html .btn-borders.btn-quaternary:focus[disabled]:hover,
                html .btn-borders.btn-quaternary:hover[disabled]:active,
                html .btn-borders.btn-quaternary:focus[disabled]:active,
                html .btn-borders.btn-quaternary:hover[disabled]:focus,
                html .btn-borders.btn-quaternary:focus[disabled]:focus {
                    border-color: #777777;
                    background-color: #777777;
                }

                html .btn-borders.btn-dark {
                    background: transparent;
                    border-color: #2e353e;
                    color: #2e353e;
                    text-shadow: none;
                }

                html .btn-borders.btn-dark:hover,
                html .btn-borders.btn-dark:focus {
                    background-color: #2e353e;
                    border-color: #2e353e #2e353e #181c21;
                    border-color: #2e353e !important;
                    color: #ffffff;
                }

                html .btn-borders.btn-dark:hover:hover,
                html .btn-borders.btn-dark:focus:hover {
                    border-color: #39424d #39424d #23282f;
                    background-color: #39424d;
                }

                html .btn-borders.btn-dark:hover:active,
                html .btn-borders.btn-dark:focus:active,
                html .btn-borders.btn-dark:hover:focus,
                html .btn-borders.btn-dark:focus:focus,
                html .btn-borders.btn-dark:hover:active:hover,
                html .btn-borders.btn-dark:focus:active:hover,
                html .btn-borders.btn-dark:hover:active:focus,
                html .btn-borders.btn-dark:focus:active:focus {
                    border-color: #23282f #23282f #23282f;
                    background-color: #23282f;
                }

                html .btn-borders.btn-dark:hover.dropdown-toggle,
                html .btn-borders.btn-dark:focus.dropdown-toggle {
                    border-left-color: #23282f;
                }

                html .btn-borders.btn-dark:hover[disabled],
                html .btn-borders.btn-dark:focus[disabled],
                html .btn-borders.btn-dark:hover[disabled]:hover,
                html .btn-borders.btn-dark:focus[disabled]:hover,
                html .btn-borders.btn-dark:hover[disabled]:active,
                html .btn-borders.btn-dark:focus[disabled]:active,
                html .btn-borders.btn-dark:hover[disabled]:focus,
                html .btn-borders.btn-dark:focus[disabled]:focus {
                    border-color: #596779;
                    background-color: #596779;
                }

                html .btn-borders.btn-light {
                    background: transparent;
                    border-color: #ffffff;
                    color: #ffffff;
                    text-shadow: none;
                }

                html .btn-borders.btn-light:hover,
                html .btn-borders.btn-light:focus {
                    color: #ffffff;
                    background-color: #ffffff;
                    border-color: #ffffff #ffffff #e6e6e6;
                    border-color: #ffffff !important;
                    color: #777777;
                }

                html .btn-borders.btn-light:hover:hover,
                html .btn-borders.btn-light:focus:hover {
                    border-color: #ffffff #ffffff #f2f2f2;
                    background-color: #ffffff;
                }

                html .btn-borders.btn-light:hover:active,
                html .btn-borders.btn-light:focus:active,
                html .btn-borders.btn-light:hover:focus,
                html .btn-borders.btn-light:focus:focus,
                html .btn-borders.btn-light:hover:active:hover,
                html .btn-borders.btn-light:focus:active:hover,
                html .btn-borders.btn-light:hover:active:focus,
                html .btn-borders.btn-light:focus:active:focus {
                    border-color: #f2f2f2 #f2f2f2 #f2f2f2;
                    background-color: #f2f2f2;
                }

                html .btn-borders.btn-light:hover.dropdown-toggle,
                html .btn-borders.btn-light:focus.dropdown-toggle {
                    border-left-color: #f2f2f2;
                }

                html .btn-borders.btn-light:hover[disabled],
                html .btn-borders.btn-light:focus[disabled],
                html .btn-borders.btn-light:hover[disabled]:hover,
                html .btn-borders.btn-light:focus[disabled]:hover,
                html .btn-borders.btn-light:hover[disabled]:active,
                html .btn-borders.btn-light:focus[disabled]:active,
                html .btn-borders.btn-light:hover[disabled]:focus,
                html .btn-borders.btn-light:focus[disabled]:focus {
                    border-color: #ffffff;
                    background-color: #ffffff;
                }

                .pagination > li > a,
                .pagination > li > span,
                .pagination > li > a:hover,
                .pagination > li > span:hover,
                .pagination > li > a:focus,
                .pagination > li > span:focus {
                    color: ";
            // line 1118
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .pagination > .active > a,
                .pagination > .active > span,
                .pagination > .active > a:hover,
                .pagination > .active > span:hover,
                .pagination > .active > a:focus,
                .pagination > .active > span:focus {
                    background-color: ";
            // line 1127
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                    border-color: ";
            // line 1128
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                body.dark .pagination > li > a,
                body.dark .pagination > li > span,
                body.dark .pagination > li > a:hover,
                body.dark .pagination > li > span:hover,
                body.dark .pagination > li > a:focus,
                body.dark .pagination > li > span:focus {
                    color: ";
            // line 1137
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                body.dark .pagination > .active > a,
                body.dark .pagination > .active > span,
                body.dark .pagination > .active > a:hover,
                body.dark .pagination > .active > span:hover,
                body.dark .pagination > .active > a:focus,
                body.dark .pagination > .active > span:focus {
                    background-color: ";
            // line 1146
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 1147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .pagination > .active > a,
                body.dark .pagination > .active > a {
                    color: #ffffff;
                    background-color: ";
            // line 1153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 1154
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #6c912b;
                }

                .pagination > .active > a:hover,
                body.dark .pagination > .active > a:hover {
                    border-color: ";
            // line 1159
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 1160
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .pagination > .active > a:active,
                body.dark .pagination > .active > a:active,
                .pagination > .active > a:focus,
                body.dark .pagination > .active > a:focus,
                .pagination > .active > a:active:hover,
                body.dark .pagination > .active > a:active:hover,
                .pagination > .active > a:active:focus,
                body.dark .pagination > .active > a:active:focus {
                    border-color: ";
            // line 1171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 1172
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .pagination > .active > a.dropdown-toggle,
                body.dark .pagination > .active > a.dropdown-toggle {
                    border-left-color: ";
            // line 1177
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .pagination > .active > a[disabled],
                body.dark .pagination > .active > a[disabled],
                .pagination > .active > a[disabled]:hover,
                body.dark .pagination > .active > a[disabled]:hover,
                .pagination > .active > a[disabled]:active,
                body.dark .pagination > .active > a[disabled]:active,
                .pagination > .active > a[disabled]:focus,
                body.dark .pagination > .active > a[disabled]:focus {
                    border-color: #b7d87d;
                    background-color: #b7d87d;
                }

                html .alert-primary {
                    background-color: ";
            // line 1193
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: #80ac33;
                    color: #ffffff;
                }

                html .alert-primary .alert-link {
                    color: #ffffff;
                }

                html .alert-secondary {
                    background-color: ";
            // line 1203
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: #6f972d;
                    color: #ffffff;
                }

                html .alert-secondary .alert-link {
                    color: #ffffff;
                }

                html .alert-tertiary {
                    background-color: #dfe5ea;
                    border-color: #d6dde4;
                    color: #777777;
                }

                html .alert-tertiary .alert-link {
                    color: #777777;
                }

                html .alert-quaternary {
                    background-color: #444444;
                    border-color: #3c3c3c;
                    color: #ffffff;
                }

                html .alert-quaternary .alert-link {
                    color: #ffffff;
                }

                html .alert-dark {
                    background-color: #2e353e;
                    border-color: #272d35;
                    color: #ffffff;
                }

                html .alert-dark .alert-link {
                    color: #ffffff;
                }

                html .alert-light {
                    background-color: #ffffff;
                    border-color: #f7f7f7;
                    color: #777777;
                }

                html .alert-light .alert-link {
                    color: #777777;
                }

                html .progress-bar-primary {
                    background-color: ";
            // line 1253
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .progress-bar-secondary {
                    background-color: ";
            // line 1257
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .progress-bar-tertiary {
                    background-color: #dfe5ea;
                }

                html .progress-bar-quaternary {
                    background-color: #444444;
                }

                html .progress-bar-dark {
                    background-color: #2e353e;
                }

                html .progress-bar-light {
                    background-color: #ffffff;
                }

                html section.section-primary {
                    background-color: ";
            // line 1277
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                    border-color: ";
            // line 1278
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html section.section-primary h1,
                html section.section-primary h2,
                html section.section-primary h3,
                html section.section-primary h4,
                html section.section-primary h5,
                html section.section-primary h6 {
                    color: #ffffff;
                }

                html section.section-primary p {
                    color: #e6e6e6;
                }

                html section.section-primary-scale-2 {
                    background-color: #6c912b !important;
                    border-color: #5d7d25 !important;
                }

                html section.section-primary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
                    border-top-color: #6c912b;
                }

                html section.section-secondary {
                    background-color: ";
            // line 1304
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                    border-color: ";
            // line 1305
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html section.section-secondary h1,
                html section.section-secondary h2,
                html section.section-secondary h3,
                html section.section-secondary h4,
                html section.section-secondary h5,
                html section.section-secondary h6 {
                    color: #ffffff;
                }

                html section.section-secondary p {
                    color: #e6e6e6;
                }

                html section.section-secondary-scale-2 {
                    background-color: ";
            // line 1322
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                    border-color: ";
            // line 1323
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html section.section-secondary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
                    border-top-color: ";
            // line 1327
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html section.section-tertiary {
                    background-color: #dfe5ea !important;
                    border-color: #d0d8e0 !important;
                }

                html section.section-tertiary h1,
                html section.section-tertiary h2,
                html section.section-tertiary h3,
                html section.section-tertiary h4,
                html section.section-tertiary h5,
                html section.section-tertiary h6 {
                    color: #777777;
                }

                html section.section-tertiary p {
                    color: #5e5e5e;
                }

                html section.section-tertiary-scale-2 {
                    background-color: #c0ccd6 !important;
                    border-color: #b1bfcc !important;
                }

                html section.section-tertiary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
                    border-top-color: #c0ccd6;
                }

                html section.section-quaternary {
                    background-color: #444444 !important;
                    border-color: #373737 !important;
                }

                html section.section-quaternary h1,
                html section.section-quaternary h2,
                html section.section-quaternary h3,
                html section.section-quaternary h4,
                html section.section-quaternary h5,
                html section.section-quaternary h6 {
                    color: #ffffff;
                }

                html section.section-quaternary p {
                    color: #e6e6e6;
                }

                html section.section-quaternary-scale-2 {
                    background-color: #2b2b2b !important;
                    border-color: #1e1e1e !important;
                }

                html section.section-quaternary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
                    border-top-color: #2b2b2b;
                }

                html section.section-dark {
                    background-color: #2e353e !important;
                    border-color: #23282f !important;
                }

                html section.section-dark h1,
                html section.section-dark h2,
                html section.section-dark h3,
                html section.section-dark h4,
                html section.section-dark h5,
                html section.section-dark h6 {
                    color: #ffffff;
                }

                html section.section-dark p {
                    color: #e6e6e6;
                }

                html section.section-dark-scale-2 {
                    background-color: #181c21 !important;
                    border-color: #0d0f12 !important;
                }

                html section.section-dark-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
                    border-top-color: #181c21;
                }

                html section.section-light {
                    background-color: #ffffff !important;
                    border-color: #f2f2f2 !important;
                }

                html section.section-light h1,
                html section.section-light h2,
                html section.section-light h3,
                html section.section-light h4,
                html section.section-light h5,
                html section.section-light h6 {
                    color: #777777;
                }

                html section.section-light p {
                    color: #5e5e5e;
                }

                html section.section-light-scale-2 {
                    background-color: #e6e6e6 !important;
                    border-color: #d9d9d9 !important;
                }

                html section.section-light-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
                    border-top-color: #e6e6e6;
                }

                html section.section-default-scale-1 {
                    background-color: #dbdbdb !important;
                    border-top-color: #d3d3d3 !important;
                }

                html section.section-default-scale-2 {
                    background-color: #c1c1c1 !important;
                    border-top-color: #b9b9b9 !important;
                }

                html section.section-default-scale-3 {
                    background-color: #a8a8a8 !important;
                    border-top-color: #a0a0a0 !important;
                }

                html section.section-default-scale-4 {
                    background-color: #8e8e8e !important;
                    border-top-color: #868686 !important;
                }

                html section.section-default-scale-5 {
                    background-color: #757575 !important;
                    border-top-color: #6d6d6d !important;
                }

                html section.section-default-scale-6 {
                    background-color: #5b5b5b !important;
                    border-top-color: #535353 !important;
                }

                html section.section-default-scale-7 {
                    background-color: #424242 !important;
                    border-top-color: #3a3a3a !important;
                }

                html section.section-default-scale-8 {
                    background-color: #282828 !important;
                    border-top-color: #202020 !important;
                }

                html section.section-default-scale-9 {
                    background-color: #0f0f0f !important;
                    border-top-color: #070707 !important;
                }

                html.dark section.section-default-scale-1 {
                    background-color: #333a44 !important;
                    border-top-color: #2c323b !important;
                }

                html.dark section.section-default-scale-2 {
                    background-color: #495362 !important;
                    border-top-color: #424b59 !important;
                }

                html.dark section.section-default-scale-3 {
                    background-color: #5e6b7f !important;
                    border-top-color: #586476 !important;
                }

                html.dark section.section-default-scale-4 {
                    background-color: #77849a !important;
                    border-top-color: #6e7d93 !important;
                }

                html.dark section.section-default-scale-5 {
                    background-color: #949faf !important;
                    border-top-color: #8b97a9 !important;
                }

                html.dark section.section-default-scale-6 {
                    background-color: #b1b9c5 !important;
                    border-top-color: #a8b1be !important;
                }

                html.dark section.section-default-scale-7 {
                    background-color: #ced3db !important;
                    border-top-color: #c5cbd4 !important;
                }

                html.dark section.section-default-scale-8 {
                    background-color: #ebeef1 !important;
                    border-top-color: #e3e6ea !important;
                }

                html.dark section.section-default-scale-9 {
                    background-color: #ffffff !important;
                    border-top-color: #f7f7f7 !important;
                }

                section.page-header h1 {
                    border-bottom-color: ";
            // line 1529
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                section.page-header.custom-product {
                    background-color: ";
            // line 1533
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: #83b035;
                }

                html .page-header-color.page-header-primary {
                    background-color: ";
            // line 1538
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-bottom-color: ";
            // line 1539
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .page-header-color.page-header-primary h1 {
                    color: #ffffff;
                }

                html .page-header-color.page-header-primary h1 span {
                    color: #ffffff;
                }

                html .page-header-color.page-header-primary a {
                    color: #ffffff;
                }

                html .page-header-color.page-header-primary .breadcrumb > .active {
                    color: #ffffff;
                }

                html .page-header-color.page-header-secondary {
                    background-color: ";
            // line 1560
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-bottom-color: ";
            // line 1561
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .page-header-color.page-header-secondary h1 {
                    color: #ffffff;
                }

                html .page-header-color.page-header-secondary h1 span {
                    color: #ffffff;
                }

                html .page-header-color.page-header-secondary a {
                    color: #ffffff;
                }

                html .page-header-color.page-header-secondary .breadcrumb > .active {
                    color: #ffffff;
                }

                html .page-header-color.page-header-tertiary {
                    background-color: #dfe5ea;
                    border-bottom-color: #dfe5ea;
                    color: #777777;
                }

                html .page-header-color.page-header-tertiary h1 {
                    color: #777777;
                }

                html .page-header-color.page-header-tertiary h1 span {
                    color: #777777;
                }

                html .page-header-color.page-header-tertiary a {
                    color: #777777;
                }

                html .page-header-color.page-header-tertiary .breadcrumb > .active {
                    color: #777777;
                }

                html .page-header-color.page-header-quaternary {
                    background-color: #444444;
                    border-bottom-color: #444444;
                    color: #ffffff;
                }

                html .page-header-color.page-header-quaternary h1 {
                    color: #ffffff;
                }

                html .page-header-color.page-header-quaternary h1 span {
                    color: #ffffff;
                }

                html .page-header-color.page-header-quaternary a {
                    color: #ffffff;
                }

                html .page-header-color.page-header-quaternary .breadcrumb > .active {
                    color: #ffffff;
                }

                html .page-header-color.page-header-dark {
                    background-color: #2e353e;
                    border-bottom-color: #2e353e;
                    color: #ffffff;
                }

                html .page-header-color.page-header-dark h1 {
                    color: #ffffff;
                }

                html .page-header-color.page-header-dark h1 span {
                    color: #ffffff;
                }

                html .page-header-color.page-header-dark a {
                    color: #ffffff;
                }

                html .page-header-color.page-header-dark .breadcrumb > .active {
                    color: #ffffff;
                }

                html .page-header-color.page-header-light {
                    background-color: #ffffff;
                    border-bottom-color: #ffffff;
                    color: #777777;
                }

                html .page-header-color.page-header-light h1 {
                    color: #777777;
                }

                html .page-header-color.page-header-light h1 span {
                    color: #777777;
                }

                html .page-header-color.page-header-light a {
                    color: #777777;
                }

                html .page-header-color.page-header-light .breadcrumb > .active {
                    color: #777777;
                }

                html .toggle-primary .toggle label {
                    color: ";
            // line 1670
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-left-color: ";
            // line 1671
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-right-color: ";
            // line 1672
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .toggle-primary .toggle.active > label {
                    background-color: ";
            // line 1676
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 1677
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .toggle-primary.toggle-simple .toggle > label:after {
                    background-color: ";
            // line 1682
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .toggle-secondary .toggle label {
                    color: ";
            // line 1686
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-left-color: ";
            // line 1687
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-right-color: ";
            // line 1688
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .toggle-secondary .toggle.active > label {
                    background-color: ";
            // line 1692
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 1693
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .toggle-secondary.toggle-simple .toggle > label:after {
                    background-color: ";
            // line 1698
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .toggle-tertiary .toggle label {
                    color: #dfe5ea;
                    border-left-color: #dfe5ea;
                    border-right-color: #dfe5ea;
                }

                html .toggle-tertiary .toggle.active > label {
                    background-color: #dfe5ea;
                    border-color: #dfe5ea;
                    color: #777777;
                }

                html .toggle-tertiary.toggle-simple .toggle > label:after {
                    background-color: #dfe5ea;
                }

                html .toggle-quaternary .toggle label {
                    color: #444444;
                    border-left-color: #444444;
                    border-right-color: #444444;
                }

                html .toggle-quaternary .toggle.active > label {
                    background-color: #444444;
                    border-color: #444444;
                    color: #ffffff;
                }

                html .toggle-quaternary.toggle-simple .toggle > label:after {
                    background-color: #444444;
                }

                html .toggle-dark .toggle label {
                    color: #2e353e;
                    border-left-color: #2e353e;
                    border-right-color: #2e353e;
                }

                html .toggle-dark .toggle.active > label {
                    background-color: #2e353e;
                    border-color: #2e353e;
                    color: #ffffff;
                }

                html .toggle-dark.toggle-simple .toggle > label:after {
                    background-color: #2e353e;
                }

                html .toggle-light .toggle label {
                    color: #ffffff;
                    border-left-color: #ffffff;
                    border-right-color: #ffffff;
                }

                html .toggle-light .toggle.active > label {
                    background-color: #ffffff;
                    border-color: #ffffff;
                    color: #777777;
                }

                html .toggle-light.toggle-simple .toggle > label:after {
                    background-color: #ffffff;
                }

                .thumb-info .thumb-info-type {
                    background-color: ";
            // line 1766
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .thumb-info .thumb-info-action-icon {
                    background-color: ";
            // line 1770
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .thumb-info-social-icons a {
                    background-color: ";
            // line 1774
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .thumbnail .zoom {
                    background-color: ";
            // line 1778
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .img-thumbnail .zoom {
                    background-color: ";
            // line 1782
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .thumb-info .thumb-info-action-icon-primary {
                    background-color: ";
            // line 1786
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .thumb-info .thumb-info-action-icon-primary i {
                    color: #ffffff;
                }

                html .thumb-info .thumb-info-action-icon-secondary {
                    background-color: ";
            // line 1794
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .thumb-info .thumb-info-action-icon-secondary i {
                    color: #ffffff;
                }

                html .thumb-info .thumb-info-action-icon-tertiary {
                    background-color: #dfe5ea;
                }

                html .thumb-info .thumb-info-action-icon-tertiary i {
                    color: #777777;
                }

                html .thumb-info .thumb-info-action-icon-quaternary {
                    background-color: #444444;
                }

                html .thumb-info .thumb-info-action-icon-quaternary i {
                    color: #ffffff;
                }

                html .thumb-info .thumb-info-action-icon-dark {
                    background-color: #2e353e;
                }

                html .thumb-info .thumb-info-action-icon-dark i {
                    color: #ffffff;
                }

                html .thumb-info .thumb-info-action-icon-light {
                    background-color: #ffffff;
                }

                html .thumb-info .thumb-info-action-icon-light i {
                    color: #777777;
                }

                .thumb-info-ribbon {
                    background: ";
            // line 1834
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .thumb-info-ribbon:before {
                    border-right-color: #5d7d25;
                    border-left-color: #5d7d25;
                }

                .inverted {
                    background-color: ";
            // line 1843
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .inverted-primary {
                    background-color: ";
            // line 1847
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .inverted-secondary {
                    background-color: ";
            // line 1851
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .inverted-tertiary {
                    background-color: #dfe5ea;
                }

                html .inverted-quaternary {
                    background-color: #444444;
                }

                html .inverted-dark {
                    background-color: #2e353e;
                }

                html .inverted-light {
                    background-color: #ffffff;
                }

                .owl-carousel .owl-dots .owl-dot.active span,
                .owl-carousel .owl-dots .owl-dot:hover span {
                    background-color: #77a030;
                }

                .owl-carousel.show-nav-title .owl-nav [class*=\"owl-\"] {
                    color: ";
            // line 1876
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .owl-carousel .owl-nav [class*=\"owl-\"] {
                    color: #ffffff;
                    background-color: ";
            // line 1881
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 1882
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #6c912b;
                }

                .owl-carousel .owl-nav [class*=\"owl-\"]:hover {
                    border-color: ";
            // line 1886
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 1887
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .owl-carousel .owl-nav [class*=\"owl-\"]:active,
                .owl-carousel .owl-nav [class*=\"owl-\"]:focus,
                .owl-carousel .owl-nav [class*=\"owl-\"]:active:hover,
                .owl-carousel .owl-nav [class*=\"owl-\"]:active:focus {
                    border-color: ";
            // line 1894
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 1895
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .owl-carousel .owl-nav [class*=\"owl-\"].dropdown-toggle {
                    border-left-color: ";
            // line 1899
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .owl-carousel .owl-nav [class*=\"owl-\"][disabled],
                .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:hover,
                .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:active,
                .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:focus {
                    border-color: #b7d87d;
                    background-color: #b7d87d;
                }

                html body .tabs .nav-tabs a,
                html.dark body .tabs .nav-tabs a,
                html body .tabs .nav-tabs a:hover,
                html.dark body .tabs .nav-tabs a:hover {
                    color: ";
            // line 1914
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs .nav-tabs a:hover,
                html.dark body .tabs .nav-tabs a:hover,
                html body .tabs .nav-tabs a:focus,
                html.dark body .tabs .nav-tabs a:focus {
                    border-top-color: ";
            // line 1921
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs .nav-tabs li.active a,
                html.dark body .tabs .nav-tabs li.active a {
                    border-top-color: ";
            // line 1926
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 1927
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs .nav-tabs.nav-justified a:hover,
                html.dark body .tabs .nav-tabs.nav-justified a:hover,
                html body .tabs .nav-tabs.nav-justified a:focus,
                html.dark body .tabs .nav-tabs.nav-justified a:focus {
                    border-top-color: ";
            // line 1934
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs.tabs-bottom .nav-tabs li a:hover,
                html.dark body .tabs.tabs-bottom .nav-tabs li a:hover,
                html body .tabs.tabs-bottom .nav-tabs li.active a,
                html.dark body .tabs.tabs-bottom .nav-tabs li.active a,
                html body .tabs.tabs-bottom .nav-tabs li.active a:hover,
                html.dark body .tabs.tabs-bottom .nav-tabs li.active a:hover,
                html body .tabs.tabs-bottom .nav-tabs li.active a:focus,
                html.dark body .tabs.tabs-bottom .nav-tabs li.active a:focus {
                    border-bottom-color: ";
            // line 1945
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
                html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
                html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
                html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
                html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
                html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
                html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus,
                html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {
                    border-left-color: ";
            // line 1956
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
                html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
                html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
                html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
                html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
                html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
                html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus,
                html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {
                    border-right-color: ";
            // line 1967
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs.tabs-simple .nav-tabs > li.active a,
                html.dark body .tabs.tabs-simple .nav-tabs > li.active a,
                html body .tabs.tabs-simple .nav-tabs > li.active a:focus,
                html.dark body .tabs.tabs-simple .nav-tabs > li.active a:focus,
                html body .tabs.tabs-simple .nav-tabs > li a:hover,
                html.dark body .tabs.tabs-simple .nav-tabs > li a:hover,
                html body .tabs.tabs-simple .nav-tabs > li.active a:hover,
                html.dark body .tabs.tabs-simple .nav-tabs > li.active a:hover {
                    border-top-color: ";
            // line 1978
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 1979
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary .nav-tabs li a,
                html.dark body .tabs-primary .nav-tabs li a,
                html body .tabs-primary .nav-tabs.nav-justified li a,
                html.dark body .tabs-primary .nav-tabs.nav-justified li a,
                html body .tabs-primary .nav-tabs li a:hover,
                html.dark body .tabs-primary .nav-tabs li a:hover,
                html body .tabs-primary .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {
                    color: ";
            // line 1990
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary .nav-tabs li a:hover,
                html.dark body .tabs-primary .nav-tabs li a:hover,
                html body .tabs-primary .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {
                    border-top-color: ";
            // line 1997
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary .nav-tabs li.active a,
                html.dark body .tabs-primary .nav-tabs li.active a,
                html body .tabs-primary .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-primary .nav-tabs.nav-justified li.active a,
                html body .tabs-primary .nav-tabs li.active a:hover,
                html.dark body .tabs-primary .nav-tabs li.active a:hover,
                html body .tabs-primary .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-primary .nav-tabs li.active a:focus,
                html.dark body .tabs-primary .nav-tabs li.active a:focus,
                html body .tabs-primary .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:focus {
                    border-top-color: ";
            // line 2012
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 2013
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary.tabs-bottom .nav-tabs li a:hover,
                html.dark body .tabs-primary.tabs-bottom .nav-tabs li a:hover,
                html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover {
                    border-bottom-color: ";
            // line 2020
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary.tabs-bottom .nav-tabs li.active a,
                html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a,
                html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,
                html body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,
                html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,
                html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,
                html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,
                html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
                    border-bottom-color: ";
            // line 2035
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary.tabs-vertical.tabs-left li a:hover,
                html.dark body .tabs-primary.tabs-vertical.tabs-left li a:hover {
                    border-left-color: ";
            // line 2040
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary.tabs-vertical.tabs-left li.active a,
                html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a,
                html body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,
                html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,
                html body .tabs-primary.tabs-vertical.tabs-left li.active a:focus,
                html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:focus {
                    border-left-color: ";
            // line 2049
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary.tabs-vertical.tabs-right li a:hover,
                html.dark body .tabs-primary.tabs-vertical.tabs-right li a:hover {
                    border-right-color: ";
            // line 2054
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-primary.tabs-vertical.tabs-right li.active a,
                html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a,
                html body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,
                html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,
                html body .tabs-primary.tabs-vertical.tabs-right li.active a:focus,
                html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:focus {
                    border-right-color: ";
            // line 2063
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary .nav-tabs li a,
                html.dark body .tabs-secondary .nav-tabs li a,
                html body .tabs-secondary .nav-tabs.nav-justified li a,
                html.dark body .tabs-secondary .nav-tabs.nav-justified li a,
                html body .tabs-secondary .nav-tabs li a:hover,
                html.dark body .tabs-secondary .nav-tabs li a:hover,
                html body .tabs-secondary .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {
                    color: ";
            // line 2074
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary .nav-tabs li a:hover,
                html.dark body .tabs-secondary .nav-tabs li a:hover,
                html body .tabs-secondary .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {
                    border-top-color: ";
            // line 2081
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary .nav-tabs li.active a,
                html.dark body .tabs-secondary .nav-tabs li.active a,
                html body .tabs-secondary .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a,
                html body .tabs-secondary .nav-tabs li.active a:hover,
                html.dark body .tabs-secondary .nav-tabs li.active a:hover,
                html body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-secondary .nav-tabs li.active a:focus,
                html.dark body .tabs-secondary .nav-tabs li.active a:focus,
                html body .tabs-secondary .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:focus {
                    border-top-color: ";
            // line 2096
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 2097
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,
                html.dark body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,
                html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover {
                    border-bottom-color: ";
            // line 2104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary.tabs-bottom .nav-tabs li.active a,
                html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a,
                html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,
                html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,
                html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,
                html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,
                html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,
                html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
                    border-bottom-color: ";
            // line 2119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary.tabs-vertical.tabs-left li a:hover,
                html.dark body .tabs-secondary.tabs-vertical.tabs-left li a:hover {
                    border-left-color: ";
            // line 2124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary.tabs-vertical.tabs-left li.active a,
                html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a,
                html body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,
                html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,
                html body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus,
                html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus {
                    border-left-color: ";
            // line 2133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary.tabs-vertical.tabs-right li a:hover,
                html.dark body .tabs-secondary.tabs-vertical.tabs-right li a:hover {
                    border-right-color: ";
            // line 2138
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-secondary.tabs-vertical.tabs-right li.active a,
                html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a,
                html body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,
                html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,
                html body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus,
                html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus {
                    border-right-color: ";
            // line 2147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html body .tabs-tertiary .nav-tabs li a,
                html.dark body .tabs-tertiary .nav-tabs li a,
                html body .tabs-tertiary .nav-tabs.nav-justified li a,
                html.dark body .tabs-tertiary .nav-tabs.nav-justified li a,
                html body .tabs-tertiary .nav-tabs li a:hover,
                html.dark body .tabs-tertiary .nav-tabs li a:hover,
                html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {
                    color: #dfe5ea;
                }

                html body .tabs-tertiary .nav-tabs li a:hover,
                html.dark body .tabs-tertiary .nav-tabs li a:hover,
                html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {
                    border-top-color: #dfe5ea;
                }

                html body .tabs-tertiary .nav-tabs li.active a,
                html.dark body .tabs-tertiary .nav-tabs li.active a,
                html body .tabs-tertiary .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a,
                html body .tabs-tertiary .nav-tabs li.active a:hover,
                html.dark body .tabs-tertiary .nav-tabs li.active a:hover,
                html body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-tertiary .nav-tabs li.active a:focus,
                html.dark body .tabs-tertiary .nav-tabs li.active a:focus,
                html body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus {
                    border-top-color: #dfe5ea;
                    color: #dfe5ea;
                }

                html body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,
                html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,
                html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover {
                    border-bottom-color: #dfe5ea;
                }

                html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,
                html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,
                html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,
                html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,
                html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,
                html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,
                html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,
                html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
                    border-bottom-color: #dfe5ea;
                }

                html body .tabs-tertiary.tabs-vertical.tabs-left li a:hover,
                html.dark body .tabs-tertiary.tabs-vertical.tabs-left li a:hover {
                    border-left-color: #dfe5ea;
                }

                html body .tabs-tertiary.tabs-vertical.tabs-left li.active a,
                html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a,
                html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,
                html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,
                html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus,
                html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus {
                    border-left-color: #dfe5ea;
                }

                html body .tabs-tertiary.tabs-vertical.tabs-right li a:hover,
                html.dark body .tabs-tertiary.tabs-vertical.tabs-right li a:hover {
                    border-right-color: #dfe5ea;
                }

                html body .tabs-tertiary.tabs-vertical.tabs-right li.active a,
                html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a,
                html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,
                html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,
                html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus,
                html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus {
                    border-right-color: #dfe5ea;
                }

                html body .tabs-quaternary .nav-tabs li a,
                html.dark body .tabs-quaternary .nav-tabs li a,
                html body .tabs-quaternary .nav-tabs.nav-justified li a,
                html.dark body .tabs-quaternary .nav-tabs.nav-justified li a,
                html body .tabs-quaternary .nav-tabs li a:hover,
                html.dark body .tabs-quaternary .nav-tabs li a:hover,
                html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {
                    color: #444444;
                }

                html body .tabs-quaternary .nav-tabs li a:hover,
                html.dark body .tabs-quaternary .nav-tabs li a:hover,
                html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {
                    border-top-color: #444444;
                }

                html body .tabs-quaternary .nav-tabs li.active a,
                html.dark body .tabs-quaternary .nav-tabs li.active a,
                html body .tabs-quaternary .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a,
                html body .tabs-quaternary .nav-tabs li.active a:hover,
                html.dark body .tabs-quaternary .nav-tabs li.active a:hover,
                html body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-quaternary .nav-tabs li.active a:focus,
                html.dark body .tabs-quaternary .nav-tabs li.active a:focus,
                html body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus {
                    border-top-color: #444444;
                    color: #444444;
                }

                html body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,
                html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,
                html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover {
                    border-bottom-color: #444444;
                }

                html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,
                html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,
                html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,
                html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,
                html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,
                html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,
                html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,
                html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
                    border-bottom-color: #444444;
                }

                html body .tabs-quaternary.tabs-vertical.tabs-left li a:hover,
                html.dark body .tabs-quaternary.tabs-vertical.tabs-left li a:hover {
                    border-left-color: #444444;
                }

                html body .tabs-quaternary.tabs-vertical.tabs-left li.active a,
                html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a,
                html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,
                html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,
                html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus,
                html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus {
                    border-left-color: #444444;
                }

                html body .tabs-quaternary.tabs-vertical.tabs-right li a:hover,
                html.dark body .tabs-quaternary.tabs-vertical.tabs-right li a:hover {
                    border-right-color: #444444;
                }

                html body .tabs-quaternary.tabs-vertical.tabs-right li.active a,
                html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a,
                html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,
                html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,
                html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus,
                html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus {
                    border-right-color: #444444;
                }

                html body .tabs-dark .nav-tabs li a,
                html.dark body .tabs-dark .nav-tabs li a,
                html body .tabs-dark .nav-tabs.nav-justified li a,
                html.dark body .tabs-dark .nav-tabs.nav-justified li a,
                html body .tabs-dark .nav-tabs li a:hover,
                html.dark body .tabs-dark .nav-tabs li a:hover,
                html body .tabs-dark .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {
                    color: #2e353e;
                }

                html body .tabs-dark .nav-tabs li a:hover,
                html.dark body .tabs-dark .nav-tabs li a:hover,
                html body .tabs-dark .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {
                    border-top-color: #2e353e;
                }

                html body .tabs-dark .nav-tabs li.active a,
                html.dark body .tabs-dark .nav-tabs li.active a,
                html body .tabs-dark .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-dark .nav-tabs.nav-justified li.active a,
                html body .tabs-dark .nav-tabs li.active a:hover,
                html.dark body .tabs-dark .nav-tabs li.active a:hover,
                html body .tabs-dark .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-dark .nav-tabs li.active a:focus,
                html.dark body .tabs-dark .nav-tabs li.active a:focus,
                html body .tabs-dark .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:focus {
                    border-top-color: #2e353e;
                    color: #2e353e;
                }

                html body .tabs-dark.tabs-bottom .nav-tabs li a:hover,
                html.dark body .tabs-dark.tabs-bottom .nav-tabs li a:hover,
                html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover {
                    border-bottom-color: #2e353e;
                }

                html body .tabs-dark.tabs-bottom .nav-tabs li.active a,
                html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a,
                html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,
                html body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,
                html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,
                html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,
                html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,
                html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
                    border-bottom-color: #2e353e;
                }

                html body .tabs-dark.tabs-vertical.tabs-left li a:hover,
                html.dark body .tabs-dark.tabs-vertical.tabs-left li a:hover {
                    border-left-color: #2e353e;
                }

                html body .tabs-dark.tabs-vertical.tabs-left li.active a,
                html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a,
                html body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,
                html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,
                html body .tabs-dark.tabs-vertical.tabs-left li.active a:focus,
                html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:focus {
                    border-left-color: #2e353e;
                }

                html body .tabs-dark.tabs-vertical.tabs-right li a:hover,
                html.dark body .tabs-dark.tabs-vertical.tabs-right li a:hover {
                    border-right-color: #2e353e;
                }

                html body .tabs-dark.tabs-vertical.tabs-right li.active a,
                html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a,
                html body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,
                html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,
                html body .tabs-dark.tabs-vertical.tabs-right li.active a:focus,
                html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:focus {
                    border-right-color: #2e353e;
                }

                html body .tabs-light .nav-tabs li a,
                html.dark body .tabs-light .nav-tabs li a,
                html body .tabs-light .nav-tabs.nav-justified li a,
                html.dark body .tabs-light .nav-tabs.nav-justified li a,
                html body .tabs-light .nav-tabs li a:hover,
                html.dark body .tabs-light .nav-tabs li a:hover,
                html body .tabs-light .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {
                    color: #ffffff;
                }

                html body .tabs-light .nav-tabs li a:hover,
                html.dark body .tabs-light .nav-tabs li a:hover,
                html body .tabs-light .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {
                    border-top-color: #ffffff;
                }

                html body .tabs-light .nav-tabs li.active a,
                html.dark body .tabs-light .nav-tabs li.active a,
                html body .tabs-light .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-light .nav-tabs.nav-justified li.active a,
                html body .tabs-light .nav-tabs li.active a:hover,
                html.dark body .tabs-light .nav-tabs li.active a:hover,
                html body .tabs-light .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-light .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-light .nav-tabs li.active a:focus,
                html.dark body .tabs-light .nav-tabs li.active a:focus,
                html body .tabs-light .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-light .nav-tabs.nav-justified li.active a:focus {
                    border-top-color: #ffffff;
                    color: #ffffff;
                }

                html body .tabs-light.tabs-bottom .nav-tabs li a:hover,
                html.dark body .tabs-light.tabs-bottom .nav-tabs li a:hover,
                html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover,
                html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover {
                    border-bottom-color: #ffffff;
                }

                html body .tabs-light.tabs-bottom .nav-tabs li.active a,
                html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a,
                html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,
                html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,
                html body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,
                html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,
                html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
                html body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,
                html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,
                html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
                html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
                    border-bottom-color: #ffffff;
                }

                html body .tabs-light.tabs-vertical.tabs-left li a:hover,
                html.dark body .tabs-light.tabs-vertical.tabs-left li a:hover {
                    border-left-color: #ffffff;
                }

                html body .tabs-light.tabs-vertical.tabs-left li.active a,
                html.dark body .tabs-light.tabs-vertical.tabs-left li.active a,
                html body .tabs-light.tabs-vertical.tabs-left li.active a:hover,
                html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:hover,
                html body .tabs-light.tabs-vertical.tabs-left li.active a:focus,
                html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:focus {
                    border-left-color: #ffffff;
                }

                html body .tabs-light.tabs-vertical.tabs-right li a:hover,
                html.dark body .tabs-light.tabs-vertical.tabs-right li a:hover {
                    border-right-color: #ffffff;
                }

                html body .tabs-light.tabs-vertical.tabs-right li.active a,
                html.dark body .tabs-light.tabs-vertical.tabs-right li.active a,
                html body .tabs-light.tabs-vertical.tabs-right li.active a:hover,
                html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:hover,
                html body .tabs-light.tabs-vertical.tabs-right li.active a:focus,
                html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:focus {
                    border-right-color: #ffffff;
                }

                html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
                html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
                html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
                html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {
                    border-right-color: ";
            // line 2490
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-left-color: transparent;
                }

                html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
                html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
                html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
                html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {
                    border-right-color: transparent;
                    border-left-color: ";
            // line 2499
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .list.list-icons li > .fa:first-child,
                .list.list-icons li a:first-child > .fa:first-child,
                .list.list-icons li > .icons:first-child,
                .list.list-icons li a:first-child > .icons:first-child {
                    color: ";
            // line 2506
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 2507
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .list.list-icons.list-icons-style-3 li > .fa:first-child,
                .list.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
                .list.list-icons.list-icons-style-3 li > .icons:first-child,
                .list.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
                    background-color: ";
            // line 2514
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .list.list-ordened li:before {
                    color: ";
            // line 2518
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 2519
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .list.list-ordened.list-ordened-style-3 li:before {
                    background-color: ";
            // line 2523
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .list-primary.list-icons li > .fa:first-child,
                html .list-primary.list-icons li a:first-child > .fa:first-child,
                html .list-primary.list-icons li > .icons:first-child,
                html .list-primary.list-icons li a:first-child > .icons:first-child {
                    color: ";
            // line 2530
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 2531
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .list-primary.list-icons.list-icons-style-3 li > .fa:first-child,
                html .list-primary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
                html .list-primary.list-icons.list-icons-style-3 li > .icons:first-child,
                html .list-primary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
                    background-color: ";
            // line 2538
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .list-primary.list-ordened li:before {
                    color: ";
            // line 2543
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .list-primary.list-ordened.list-ordened-style-3 li:before {
                    background-color: ";
            // line 2547
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .list-secondary.list-icons li > .fa:first-child,
                html .list-secondary.list-icons li a:first-child > .fa:first-child,
                html .list-secondary.list-icons li > .icons:first-child,
                html .list-secondary.list-icons li a:first-child > .icons:first-child {
                    color: ";
            // line 2555
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 2556
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .list-secondary.list-icons.list-icons-style-3 li > .fa:first-child,
                html .list-secondary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
                html .list-secondary.list-icons.list-icons-style-3 li > .icons:first-child,
                html .list-secondary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
                    background-color: ";
            // line 2563
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .list-secondary.list-ordened li:before {
                    color: ";
            // line 2568
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .list-secondary.list-ordened.list-ordened-style-3 li:before {
                    background-color: ";
            // line 2572
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .list-tertiary.list-icons li > .fa:first-child,
                html .list-tertiary.list-icons li a:first-child > .fa:first-child,
                html .list-tertiary.list-icons li > .icons:first-child,
                html .list-tertiary.list-icons li a:first-child > .icons:first-child {
                    color: #dfe5ea;
                    border-color: #dfe5ea;
                }

                html .list-tertiary.list-icons.list-icons-style-3 li > .fa:first-child,
                html .list-tertiary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
                html .list-tertiary.list-icons.list-icons-style-3 li > .icons:first-child,
                html .list-tertiary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
                    background-color: #dfe5ea;
                    color: #777777;
                }

                html .list-tertiary.list-ordened li:before {
                    color: #dfe5ea;
                }

                html .list-tertiary.list-ordened.list-ordened-style-3 li:before {
                    background-color: #dfe5ea;
                    color: #777777;
                }

                html .list-quaternary.list-icons li > .fa:first-child,
                html .list-quaternary.list-icons li a:first-child > .fa:first-child,
                html .list-quaternary.list-icons li > .icons:first-child,
                html .list-quaternary.list-icons li a:first-child > .icons:first-child {
                    color: #444444;
                    border-color: #444444;
                }

                html .list-quaternary.list-icons.list-icons-style-3 li > .fa:first-child,
                html .list-quaternary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
                html .list-quaternary.list-icons.list-icons-style-3 li > .icons:first-child,
                html .list-quaternary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
                    background-color: #444444;
                    color: #ffffff;
                }

                html .list-quaternary.list-ordened li:before {
                    color: #444444;
                }

                html .list-quaternary.list-ordened.list-ordened-style-3 li:before {
                    background-color: #444444;
                    color: #ffffff;
                }

                html .list-dark.list-icons li > .fa:first-child,
                html .list-dark.list-icons li a:first-child > .fa:first-child,
                html .list-dark.list-icons li > .icons:first-child,
                html .list-dark.list-icons li a:first-child > .icons:first-child {
                    color: #2e353e;
                    border-color: #2e353e;
                }

                html .list-dark.list-icons.list-icons-style-3 li > .fa:first-child,
                html .list-dark.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
                html .list-dark.list-icons.list-icons-style-3 li > .icons:first-child,
                html .list-dark.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
                    background-color: #2e353e;
                    color: #ffffff;
                }

                html .list-dark.list-ordened li:before {
                    color: #2e353e;
                }

                html .list-dark.list-ordened.list-ordened-style-3 li:before {
                    background-color: #2e353e;
                    color: #ffffff;
                }

                html .list-light.list-icons li > .fa:first-child,
                html .list-light.list-icons li a:first-child > .fa:first-child,
                html .list-light.list-icons li > .icons:first-child,
                html .list-light.list-icons li a:first-child > .icons:first-child {
                    color: #ffffff;
                    border-color: #ffffff;
                }

                html .list-light.list-icons.list-icons-style-3 li > .fa:first-child,
                html .list-light.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
                html .list-light.list-icons.list-icons-style-3 li > .icons:first-child,
                html .list-light.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
                    background-color: #ffffff;
                    color: #777777;
                }

                html .list-light.list-ordened li:before {
                    color: #ffffff;
                }

                html .list-light.list-ordened.list-ordened-style-3 li:before {
                    background-color: #ffffff;
                    color: #777777;
                }

                .parallax blockquote i.fa-quote-left {
                    color: ";
            // line 2677
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                section.video blockquote i.fa-quote-left {
                    color: ";
            // line 2681
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .panel-group .panel-heading a {
                    color: ";
            // line 2685
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .panel-group.panel-group-primary .panel-heading {
                    background-color: ";
            // line 2689
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .panel-group.panel-group-primary .panel-heading a {
                    color: #ffffff;
                }

                html .panel-group.panel-group-secondary .panel-heading {
                    background-color: ";
            // line 2697
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .panel-group.panel-group-secondary .panel-heading a {
                    color: #ffffff;
                }

                html .panel-group.panel-group-tertiary .panel-heading {
                    background-color: #dfe5ea !important;
                }

                html .panel-group.panel-group-tertiary .panel-heading a {
                    color: #777777;
                }

                html .panel-group.panel-group-quaternary .panel-heading {
                    background-color: #444444 !important;
                }

                html .panel-group.panel-group-quaternary .panel-heading a {
                    color: #ffffff;
                }

                html .panel-group.panel-group-dark .panel-heading {
                    background-color: #2e353e !important;
                }

                html .panel-group.panel-group-dark .panel-heading a {
                    color: #ffffff;
                }

                html .panel-group.panel-group-light .panel-heading {
                    background-color: #ffffff !important;
                }

                html .panel-group.panel-group-light .panel-heading a {
                    color: #777777;
                }

                html .divider.divider-primary .fa,
                html .divider.divider-primary .icons {
                    color: ";
            // line 2738
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .divider.divider-primary.divider-small hr {
                    background: ";
            // line 2742
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .divider.divider-secondary .fa,
                html .divider.divider-secondary .icons {
                    color: ";
            // line 2747
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .divider.divider-secondary.divider-small hr {
                    background: ";
            // line 2751
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .divider.divider-tertiary .fa,
                html .divider.divider-tertiary .icons {
                    color: #dfe5ea;
                }

                html .divider.divider-tertiary.divider-small hr {
                    background: #dfe5ea;
                }

                html .divider.divider-quaternary .fa,
                html .divider.divider-quaternary .icons {
                    color: #444444;
                }

                html .divider.divider-quaternary.divider-small hr {
                    background: #444444;
                }

                html .divider.divider-dark .fa,
                html .divider.divider-dark .icons {
                    color: #2e353e;
                }

                html .divider.divider-dark.divider-small hr {
                    background: #2e353e;
                }

                html .divider.divider-light .fa,
                html .divider.divider-light .icons {
                    color: #ffffff;
                }

                html .divider.divider-light.divider-small hr {
                    background: #ffffff;
                }

                html .divider.divider-style-2.divider-primary .fa,
                html .divider.divider-style-2.divider-primary .icons {
                    background: ";
            // line 2792
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .divider.divider-style-2.divider-secondary .fa,
                html .divider.divider-style-2.divider-secondary .icons {
                    background: ";
            // line 2798
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .divider.divider-style-2.divider-tertiary .fa,
                html .divider.divider-style-2.divider-tertiary .icons {
                    background: #dfe5ea;
                    color: #777777;
                }

                html .divider.divider-style-2.divider-quaternary .fa,
                html .divider.divider-style-2.divider-quaternary .icons {
                    background: #444444;
                    color: #ffffff;
                }

                html .divider.divider-style-2.divider-dark .fa,
                html .divider.divider-style-2.divider-dark .icons {
                    background: #2e353e;
                    color: #ffffff;
                }

                html .divider.divider-style-2.divider-light .fa,
                html .divider.divider-style-2.divider-light .icons {
                    background: #ffffff;
                    color: #777777;
                }

                html .divider.divider-style-3.divider-primary .fa,
                html .divider.divider-style-3.divider-primary .icons {
                    border-color: ";
            // line 2828
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .divider.divider-style-3.divider-secondary .fa,
                html .divider.divider-style-3.divider-secondary .icons {
                    border-color: ";
            // line 2833
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .divider.divider-style-3.divider-tertiary .fa,
                html .divider.divider-style-3.divider-tertiary .icons {
                    border-color: #dfe5ea;
                }

                html .divider.divider-style-3.divider-quaternary .fa,
                html .divider.divider-style-3.divider-quaternary .icons {
                    border-color: #444444;
                }

                html .divider.divider-style-3.divider-dark .fa,
                html .divider.divider-style-3.divider-dark .icons {
                    border-color: #2e353e;
                }

                html .divider.divider-style-3.divider-light .fa,
                html .divider.divider-style-3.divider-light .icons {
                    border-color: #ffffff;
                }

                #header .tip {
                    background: ";
            // line 2857
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                #header .tip:before {
                    border-right-color: ";
            // line 2862
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .tip-primary {
                    background: ";
            // line 2866
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                    color: #ffffff !important;
                }

                html #header .tip-primary:before {
                    border-right-color: ";
            // line 2871
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html #header .tip-secondary {
                    background: ";
            // line 2875
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                    color: #ffffff !important;
                }

                html #header .tip-secondary:before {
                    border-right-color: ";
            // line 2880
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html #header .tip-tertiary {
                    background: #dfe5ea !important;
                    color: #777777 !important;
                }

                html #header .tip-tertiary:before {
                    border-right-color: #dfe5ea !important;
                }

                html #header .tip-quaternary {
                    background: #444444 !important;
                    color: #ffffff !important;
                }

                html #header .tip-quaternary:before {
                    border-right-color: #444444 !important;
                }

                html #header .tip-dark {
                    background: #2e353e !important;
                    color: #ffffff !important;
                }

                html #header .tip-dark:before {
                    border-right-color: #2e353e !important;
                }

                html #header .tip-light {
                    background: #ffffff !important;
                    color: #777777 !important;
                }

                html #header .tip-light:before {
                    border-right-color: #ffffff !important;
                }

                html[dir=\"rtl\"] #header .tip.skin:before {
                    border-left-color: ";
            // line 2920
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                #header .header-btn-collapse-nav {
                    background: ";
            // line 2924
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                @media (min-width: 992px) {
                    #header .header-nav-main nav > ul > li.open > a,
                    #header .header-nav-main nav > ul > li:hover > a {
                        background: ";
            // line 2930
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav-main nav > ul > li.dropdown .dropdown-menu {
                        border-top-color: ";
            // line 2934
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent transparent transparent ";
            // line 2938
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu {
                        border-top-color: ";
            // line 2942
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent ";
            // line 2946
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent;
                    }

                    #header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu {
                        border-top-color: ";
            // line 2950
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu li a {
                        color: ";
            // line 2954
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a {
                        color: ";
            // line 2958
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a.dropdown-toggle:after {
                        border-color: ";
            // line 2962
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
                    }

                    #header .header-nav.header-nav-stripe nav > ul > li:hover > a {
                        background-color: ";
            // line 2966
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav.header-nav-top-line nav > ul li.active > a,
                    #header .header-nav.header-nav-top-line nav > ul li:hover > a {
                        color: ";
            // line 2971
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav.header-nav-top-line nav > ul li.active > a:before,
                    #header .header-nav.header-nav-top-line nav > ul li:hover > a:before {
                        background: ";
            // line 2976
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav.header-nav-top-line nav > ul li.active > a.dropdown-toggle:after,
                    #header .header-nav.header-nav-top-line nav > ul li:hover > a.dropdown-toggle:after {
                        border-color: ";
            // line 2981
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
                    }

                    #header .header-nav.header-nav-dark-dropdown nav > ul li.active > a,
                    #header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a {
                        color: ";
            // line 2986
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav.header-nav-dark-dropdown nav > ul li.active > a.dropdown-toggle:after,
                    #header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a.dropdown-toggle:after {
                        border-color: ";
            // line 2991
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
                    }

                    html.side-header #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,
                    html.side-header #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {
                        border-left-color: ";
            // line 2996
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html.side-header-right #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,
                    html.side-header-right #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {
                        border-right-color: ";
            // line 3001
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }
                }

                @media (min-width: 992px) {
                    #header .header-nav-main nav > ul > li > a.dropdown-toggle:after {
                        border-color: ";
            // line 3007
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
                    }

                    html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
                    html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                        border-color: ";
            // line 3012
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a {
                        color: ";
            // line 3016
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a:focus,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a:hover {
                        background: ";
            // line 3021
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary:hover > a {
                        background: ";
            // line 3027
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu {
                        border-top-color: ";
            // line 3032
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                        background-color: ";
            // line 3033
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li a {
                        color: #ffffff;
                        border-bottom-color: ";
            // line 3038
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li:hover > a {
                        background: ";
            // line 3042
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent transparent transparent #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-primary .dropdown-mega-sub-title {
                        color: #ffffff;
                        opacity: 0.70;
                    }

                    html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
                    html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                        border-color: ";
            // line 3056
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a {
                        color: ";
            // line 3060
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a:focus,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a:hover {
                        background: ";
            // line 3065
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary:hover > a {
                        background: ";
            // line 3071
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu {
                        border-top-color: ";
            // line 3076
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                        background-color: ";
            // line 3077
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li a {
                        color: #ffffff;
                        border-bottom-color: ";
            // line 3082
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li:hover > a {
                        background: ";
            // line 3086
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent transparent transparent #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-secondary .dropdown-mega-sub-title {
                        color: #ffffff;
                        opacity: 0.70;
                    }

                    html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
                    html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                        border-color: #dfe5ea transparent transparent transparent;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a {
                        color: #dfe5ea;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a:focus,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a:hover {
                        background: #dfe5ea;
                        color: #777777;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary:hover > a {
                        background: #dfe5ea;
                        color: #777777;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu {
                        border-top-color: #dfe5ea;
                        background-color: #dfe5ea;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li a {
                        color: #777777;
                        border-bottom-color: #eef2f4;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li:hover > a {
                        background: #eef2f4;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent transparent transparent #777777;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-tertiary .dropdown-mega-sub-title {
                        color: #777777;
                        opacity: 0.70;
                    }

                    html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
                    html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                        border-color: #444444 transparent transparent transparent;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a {
                        color: #444444;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a:focus,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a:hover {
                        background: #444444;
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary:hover > a {
                        background: #444444;
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu {
                        border-top-color: #444444;
                        background-color: #444444;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li a {
                        color: #ffffff;
                        border-bottom-color: #515151;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li:hover > a {
                        background: #515151;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent transparent transparent #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-quaternary .dropdown-mega-sub-title {
                        color: #ffffff;
                        opacity: 0.70;
                    }

                    html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
                    html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                        border-color: #2e353e transparent transparent transparent;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a {
                        color: #2e353e;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a:focus,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a:hover {
                        background: #2e353e;
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark:hover > a {
                        background: #2e353e;
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu {
                        border-top-color: #2e353e;
                        background-color: #2e353e;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li a {
                        color: #ffffff;
                        border-bottom-color: #39424d;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li:hover > a {
                        background: #39424d;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent transparent transparent #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-dark .dropdown-mega-sub-title {
                        color: #ffffff;
                        opacity: 0.70;
                    }

                    html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
                    html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                        border-color: #ffffff transparent transparent transparent;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a {
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a:focus,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a:hover {
                        background: #ffffff;
                        color: #777777;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a,
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light:hover > a {
                        background: #ffffff;
                        color: #777777;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu {
                        border-top-color: #ffffff;
                        background-color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li a {
                        color: #777777;
                        border-bottom-color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li:hover > a {
                        background: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent transparent transparent #777777;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-light .dropdown-mega-sub-title {
                        color: #777777;
                        opacity: 0.70;
                    }

                    html[dir=\"rtl\"] #header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {
                        border-color: transparent ";
            // line 3275
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent;
                    }
                }

                @media (max-width: 991px) {
                    #header .header-nav-main nav > ul > li > a,
                    #header .header-nav-main nav > ul > li > a:focus,
                    #header .header-nav-main nav > ul > li > a:hover {
                        color: ";
            // line 3283
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav-main nav > ul > li.active > a,
                    #header .header-nav-main nav > ul > li.active > a:focus,
                    #header .header-nav-main nav > ul > li.active > a:hover {
                        background-color: ";
            // line 3289
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }
                }

                @media (max-width: 991px) {
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary > a {
                        color: ";
            // line 3295
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a {
                        background: ";
            // line 3299
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary > a {
                        color: ";
            // line 3304
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a {
                        background: ";
            // line 3308
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary > a {
                        color: #dfe5ea;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a {
                        background: #dfe5ea;
                        color: #777777;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary > a {
                        color: #444444;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a {
                        background: #444444;
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark > a {
                        color: #2e353e;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a {
                        background: #2e353e;
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light > a {
                        color: #ffffff;
                    }

                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a {
                        background: #ffffff;
                        color: #777777;
                    }
                }

                html #header .header-top.header-top-primary {
                    background: ";
            // line 3350
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: ";
            // line 3351
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .header-top.header-top-primary .header-nav-top ul > li.open > a {
                    background: ";
            // line 3355
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .header-top.header-top-primary .header-nav-top ul > li > a:hover,
                html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:hover,
                html #header .header-top.header-top-primary .header-nav-top ul > li > a:focus,
                html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:focus {
                    background: ";
            // line 3362
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .header-top.header-top-primary .dropdown-menu {
                    background: ";
            // line 3366
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 3367
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .header-top.header-top-primary .dropdown-menu a:hover,
                html #header .header-top.header-top-primary .dropdown-menu a:focus {
                    background: #a1cc56 !important;
                }

                html #header .header-top.header-top-secondary {
                    background: ";
            // line 3376
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: ";
            // line 3377
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a {
                    background: ";
            // line 3381
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .header-top.header-top-secondary .header-nav-top ul > li > a:hover,
                html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:hover,
                html #header .header-top.header-top-secondary .header-nav-top ul > li > a:focus,
                html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:focus {
                    background: ";
            // line 3388
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .header-top.header-top-secondary .dropdown-menu {
                    background: ";
            // line 3392
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 3393
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #header .header-top.header-top-secondary .dropdown-menu a:hover,
                html #header .header-top.header-top-secondary .dropdown-menu a:focus {
                    background: ";
            // line 3398
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html #header .header-top.header-top-tertiary {
                    background: #dfe5ea;
                    border-top-color: #d0d8e0;
                }

                html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a {
                    background: #eef2f4;
                }

                html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:hover,
                html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:hover,
                html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:focus,
                html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:focus {
                    background: #eef2f4;
                }

                html #header .header-top.header-top-tertiary .dropdown-menu {
                    background: #eef2f4;
                    border-color: #eef2f4;
                }

                html #header .header-top.header-top-tertiary .dropdown-menu a:hover,
                html #header .header-top.header-top-tertiary .dropdown-menu a:focus {
                    background: #fefefe !important;
                }

                html #header .header-top.header-top-quaternary {
                    background: #444444;
                    border-top-color: #373737;
                }

                html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a {
                    background: #515151;
                }

                html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:hover,
                html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:hover,
                html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:focus,
                html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:focus {
                    background: #515151;
                }

                html #header .header-top.header-top-quaternary .dropdown-menu {
                    background: #515151;
                    border-color: #515151;
                }

                html #header .header-top.header-top-quaternary .dropdown-menu a:hover,
                html #header .header-top.header-top-quaternary .dropdown-menu a:focus {
                    background: #5e5e5e !important;
                }

                html #header .header-top.header-top-dark {
                    background: #2e353e;
                    border-top-color: #23282f;
                }

                html #header .header-top.header-top-dark .header-nav-top ul > li.open > a {
                    background: #39424d;
                }

                html #header .header-top.header-top-dark .header-nav-top ul > li > a:hover,
                html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:hover,
                html #header .header-top.header-top-dark .header-nav-top ul > li > a:focus,
                html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:focus {
                    background: #39424d;
                }

                html #header .header-top.header-top-dark .dropdown-menu {
                    background: #39424d;
                    border-color: #39424d;
                }

                html #header .header-top.header-top-dark .dropdown-menu a:hover,
                html #header .header-top.header-top-dark .dropdown-menu a:focus {
                    background: #444e5b !important;
                }

                html #header .header-top.header-top-light {
                    background: #ffffff;
                    border-top-color: #f2f2f2;
                }

                html #header .header-top.header-top-light .header-nav-top ul > li.open > a {
                    background: #ffffff;
                }

                html #header .header-top.header-top-light .header-nav-top ul > li > a:hover,
                html #header .header-top.header-top-light .header-nav-top ul > li.open > a:hover,
                html #header .header-top.header-top-light .header-nav-top ul > li > a:focus,
                html #header .header-top.header-top-light .header-nav-top ul > li.open > a:focus {
                    background: #ffffff;
                }

                html #header .header-top.header-top-light .dropdown-menu {
                    background: #ffffff;
                    border-color: #ffffff;
                }

                html #header .header-top.header-top-light .dropdown-menu a:hover,
                html #header .header-top.header-top-light .dropdown-menu a:focus {
                    background: #ffffff !important;
                }

                @media (min-width: 992px) {
                    html #header .header-nav-bar-primary {
                        background: ";
            // line 3507
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                        color: #ffffff !important;
                    }

                    html #header .header-nav-bar-secondary {
                        background: ";
            // line 3512
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                        color: #ffffff !important;
                    }

                    html #header .header-nav-bar-tertiary {
                        background: #dfe5ea !important;
                        color: #777777 !important;
                    }

                    html #header .header-nav-bar-quaternary {
                        background: #444444 !important;
                        color: #ffffff !important;
                    }

                    html #header .header-nav-bar-dark {
                        background: #2e353e !important;
                        color: #ffffff !important;
                    }

                    html #header .header-nav-bar-light {
                        background: #ffffff !important;
                        color: #777777 !important;
                    }
                }

                @media (min-width: 992px) {
                    #header .header-nav-main.header-nav-main-light nav > ul > li.open > a,
                    #header .header-nav-main.header-nav-main-light nav > ul > li:hover > a {
                        color: ";
            // line 3540
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }

                    #header .header-nav-main.header-nav-main-light nav > ul > li.active > a {
                        color: ";
            // line 3544
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    }
                }

                .testimonial blockquote {
                    background: ";
            // line 3549
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .testimonial .testimonial-arrow-down {
                    border-top-color: ";
            // line 3553
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .testimonial-primary blockquote {
                    background: ";
            // line 3557
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .testimonial-primary .testimonial-arrow-down {
                    border-top-color: ";
            // line 3561
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .testimonial-secondary blockquote {
                    background: ";
            // line 3565
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .testimonial-secondary .testimonial-arrow-down {
                    border-top-color: ";
            // line 3569
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .testimonial-tertiary blockquote {
                    background: #eef2f4;
                }

                html .testimonial-tertiary .testimonial-arrow-down {
                    border-top-color: #eef2f4;
                }

                html .testimonial-quaternary blockquote {
                    background: #515151;
                }

                html .testimonial-quaternary .testimonial-arrow-down {
                    border-top-color: #515151;
                }

                html .testimonial-dark blockquote {
                    background: #39424d;
                }

                html .testimonial-dark .testimonial-arrow-down {
                    border-top-color: #39424d;
                }

                html .testimonial-light blockquote {
                    background: #ffffff;
                }

                html .testimonial-light .testimonial-arrow-down {
                    border-top-color: #ffffff;
                }

                .circular-bar.only-icon .fa,
                .circular-bar.only-icon .icons {
                    color: ";
            // line 3606
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .counters .counter-primary .fa,
                html .counters .counter-primary .icons,
                html .counters .counter-primary strong {
                    color: ";
            // line 3612
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .counters .counter-secondary .fa,
                html .counters .counter-secondary .icons,
                html .counters .counter-secondary strong {
                    color: ";
            // line 3618
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .counters .counter-tertiary .fa,
                html .counters .counter-tertiary .icons,
                html .counters .counter-tertiary strong {
                    color: #dfe5ea;
                }

                html .counters .counter-quaternary .fa,
                html .counters .counter-quaternary .icons,
                html .counters .counter-quaternary strong {
                    color: #444444;
                }

                html .counters .counter-dark .fa,
                html .counters .counter-dark .icons,
                html .counters .counter-dark strong {
                    color: #2e353e;
                }

                html .counters .counter-light .fa,
                html .counters .counter-light .icons,
                html .counters .counter-light strong {
                    color: #ffffff;
                }

                .icon-featured {
                    background-color: ";
            // line 3646
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .featured-box-primary .icon-featured {
                    background-color: ";
            // line 3650
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .featured-box-primary .icon-featured:after {
                    border-color: ";
            // line 3654
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .featured-box-primary h4 {
                    color: ";
            // line 3658
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .featured-box-primary .box-content {
                    border-top-color: ";
            // line 3662
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-primary .icon-featured {
                    background-color: ";
            // line 3666
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-primary h4 {
                    color: ";
            // line 3670
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-primary .box-content {
                    border-top-color: ";
            // line 3674
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-secondary .icon-featured {
                    background-color: ";
            // line 3678
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-secondary h4 {
                    color: ";
            // line 3682
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-secondary .box-content {
                    border-top-color: ";
            // line 3686
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-tertiary .icon-featured {
                    background-color: #dfe5ea;
                }

                html .featured-box-tertiary h4 {
                    color: #dfe5ea;
                }

                html .featured-box-tertiary .box-content {
                    border-top-color: #dfe5ea;
                }

                html .featured-box-quaternary .icon-featured {
                    background-color: #444444;
                }

                html .featured-box-quaternary h4 {
                    color: #444444;
                }

                html .featured-box-quaternary .box-content {
                    border-top-color: #444444;
                }

                html .featured-box-dark .icon-featured {
                    background-color: #2e353e;
                }

                html .featured-box-dark h4 {
                    color: #2e353e;
                }

                html .featured-box-dark .box-content {
                    border-top-color: #2e353e;
                }

                html .featured-box-light .icon-featured {
                    background-color: #ffffff;
                }

                html .featured-box-light h4 {
                    color: #ffffff;
                }

                html .featured-box-light .box-content {
                    border-top-color: #ffffff;
                }

                html .featured-boxes-style-3 .featured-box.featured-box-primary .icon-featured {
                    border-color: ";
            // line 3738
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 3739
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-3 .featured-box.featured-box-secondary .icon-featured {
                    border-color: ";
            // line 3743
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 3744
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-3 .featured-box.featured-box-tertiary .icon-featured {
                    border-color: #dfe5ea;
                    color: #dfe5ea;
                }

                html .featured-boxes-style-3 .featured-box.featured-box-quaternary .icon-featured {
                    border-color: #444444;
                    color: #444444;
                }

                html .featured-boxes-style-3 .featured-box.featured-box-dark .icon-featured {
                    border-color: #2e353e;
                    color: #2e353e;
                }

                html .featured-boxes-style-3 .featured-box.featured-box-light .icon-featured {
                    border-color: #ffffff;
                    color: #ffffff;
                }

                html .featured-boxes-style-4 .featured-box.featured-box-primary .icon-featured {
                    border-color: ";
            // line 3768
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 3769
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-4 .featured-box.featured-box-secondary .icon-featured {
                    border-color: ";
            // line 3773
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: ";
            // line 3774
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-4 .featured-box.featured-box-tertiary .icon-featured {
                    border-color: #dfe5ea;
                    color: #dfe5ea;
                }

                html .featured-boxes-style-4 .featured-box.featured-box-quaternary .icon-featured {
                    border-color: #444444;
                    color: #444444;
                }

                html .featured-boxes-style-4 .featured-box.featured-box-dark .icon-featured {
                    border-color: #2e353e;
                    color: #2e353e;
                }

                html .featured-boxes-style-4 .featured-box.featured-box-light .icon-featured {
                    border-color: #ffffff;
                    color: #ffffff;
                }

                html .featured-boxes-style-5 .featured-box.featured-box-primary .icon-featured {
                    color: ";
            // line 3798
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-5 .featured-box.featured-box-secondary .icon-featured {
                    color: ";
            // line 3802
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-5 .featured-box.featured-box-tertiary .icon-featured {
                    color: #dfe5ea;
                }

                html .featured-boxes-style-5 .featured-box.featured-box-quaternary .icon-featured {
                    color: #444444;
                }

                html .featured-boxes-style-5 .featured-box.featured-box-dark .icon-featured {
                    color: #2e353e;
                }

                html .featured-boxes-style-5 .featured-box.featured-box-light .icon-featured {
                    color: #ffffff;
                }

                html .featured-boxes-style-6 .featured-box.featured-box-primary .icon-featured {
                    color: ";
            // line 3822
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-6 .featured-box.featured-box-secondary .icon-featured {
                    color: ";
            // line 3826
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-6 .featured-box.featured-box-tertiary .icon-featured {
                    color: #dfe5ea;
                }

                html .featured-boxes-style-6 .featured-box.featured-box-quaternary .icon-featured {
                    color: #444444;
                }

                html .featured-boxes-style-6 .featured-box.featured-box-dark .icon-featured {
                    color: #2e353e;
                }

                html .featured-boxes-style-6 .featured-box.featured-box-light .icon-featured {
                    color: #ffffff;
                }

                html .featured-boxes-style-8 .featured-box.featured-box-primary .icon-featured {
                    color: ";
            // line 3846
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-8 .featured-box.featured-box-secondary .icon-featured {
                    color: ";
            // line 3850
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-style-8 .featured-box.featured-box-tertiary .icon-featured {
                    color: #dfe5ea;
                }

                html .featured-boxes-style-8 .featured-box.featured-box-quaternary .icon-featured {
                    color: #444444;
                }

                html .featured-boxes-style-8 .featured-box.featured-box-dark .icon-featured {
                    color: #2e353e;
                }

                html .featured-boxes-style-8 .featured-box.featured-box-light .icon-featured {
                    color: #ffffff;
                }

                html .featured-box-effect-2.featured-box-primary .icon-featured:after {
                    box-shadow: 0 0 0 3px ";
            // line 3870
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-effect-2.featured-box-secondary .icon-featured:after {
                    box-shadow: 0 0 0 3px ";
            // line 3874
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-effect-2.featured-box-tertiary .icon-featured:after {
                    box-shadow: 0 0 0 3px #dfe5ea;
                }

                html .featured-box-effect-2.featured-box-quaternary .icon-featured:after {
                    box-shadow: 0 0 0 3px #444444;
                }

                html .featured-box-effect-2.featured-box-dark .icon-featured:after {
                    box-shadow: 0 0 0 3px #2e353e;
                }

                html .featured-box-effect-2.featured-box-light .icon-featured:after {
                    box-shadow: 0 0 0 3px #ffffff;
                }

                html .featured-box-effect-3.featured-box-primary .icon-featured:after {
                    box-shadow: 0 0 0 10px ";
            // line 3894
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-effect-3.featured-box-primary:hover .icon-featured {
                    background: ";
            // line 3898
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .featured-box-effect-3.featured-box-secondary .icon-featured:after {
                    box-shadow: 0 0 0 10px ";
            // line 3902
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-box-effect-3.featured-box-secondary:hover .icon-featured {
                    background: ";
            // line 3906
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                html .featured-box-effect-3.featured-box-tertiary .icon-featured:after {
                    box-shadow: 0 0 0 10px #dfe5ea;
                }

                html .featured-box-effect-3.featured-box-tertiary:hover .icon-featured {
                    background: #dfe5ea !important;
                }

                html .featured-box-effect-3.featured-box-quaternary .icon-featured:after {
                    box-shadow: 0 0 0 10px #444444;
                }

                html .featured-box-effect-3.featured-box-quaternary:hover .icon-featured {
                    background: #444444 !important;
                }

                html .featured-box-effect-3.featured-box-dark .icon-featured:after {
                    box-shadow: 0 0 0 10px #2e353e;
                }

                html .featured-box-effect-3.featured-box-dark:hover .icon-featured {
                    background: #2e353e !important;
                }

                html .featured-box-effect-3.featured-box-light .icon-featured:after {
                    box-shadow: 0 0 0 10px #ffffff;
                }

                html .featured-box-effect-3.featured-box-light:hover .icon-featured {
                    background: #ffffff !important;
                }

                .feature-box .feature-box-icon {
                    background-color: ";
            // line 3942
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-primary .feature-box-icon {
                    background-color: ";
            // line 3946
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-secondary .feature-box-icon {
                    background-color: ";
            // line 3950
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-tertiary .feature-box-icon {
                    background-color: #dfe5ea;
                }

                html .feature-box-quaternary .feature-box-icon {
                    background-color: #444444;
                }

                html .feature-box-dark .feature-box-icon {
                    background-color: #2e353e;
                }

                html .feature-box-light .feature-box-icon {
                    background-color: #ffffff;
                }

                .feature-box.feature-box-style-2 .feature-box-icon i.fa,
                .feature-box.feature-box-style-2 .feature-box-icon .icons {
                    color: ";
            // line 3971
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-primary.feature-box-style-2 .feature-box-icon i.fa,
                html .feature-box-primary.feature-box-style-2 .feature-box-icon .icons {
                    color: ";
            // line 3976
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-secondary.feature-box-style-2 .feature-box-icon i.fa,
                html .feature-box-secondary.feature-box-style-2 .feature-box-icon .icons {
                    color: ";
            // line 3981
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-tertiary.feature-box-style-2 .feature-box-icon i.fa,
                html .feature-box-tertiary.feature-box-style-2 .feature-box-icon .icons {
                    color: #dfe5ea;
                }

                html .feature-box-quaternary.feature-box-style-2 .feature-box-icon i.fa,
                html .feature-box-quaternary.feature-box-style-2 .feature-box-icon .icons {
                    color: #444444;
                }

                html .feature-box-dark.feature-box-style-2 .feature-box-icon i.fa,
                html .feature-box-dark.feature-box-style-2 .feature-box-icon .icons {
                    color: #2e353e;
                }

                html .feature-box-light.feature-box-style-2 .feature-box-icon i.fa,
                html .feature-box-light.feature-box-style-2 .feature-box-icon .icons {
                    color: #ffffff;
                }

                .feature-box.feature-box-style-3 .feature-box-icon {
                    border-color: ";
            // line 4005
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .feature-box.feature-box-style-3 .feature-box-icon i.fa,
                .feature-box.feature-box-style-3 .feature-box-icon .icons {
                    color: ";
            // line 4010
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-primary.feature-box-style-3 .feature-box-icon {
                    border-color: ";
            // line 4014
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-primary.feature-box-style-3 .feature-box-icon i.fa,
                html .feature-box-primary.feature-box-style-3 .feature-box-icon .icons {
                    color: ";
            // line 4019
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-secondary.feature-box-style-3 .feature-box-icon {
                    border-color: ";
            // line 4023
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-secondary.feature-box-style-3 .feature-box-icon i.fa,
                html .feature-box-secondary.feature-box-style-3 .feature-box-icon .icons {
                    color: ";
            // line 4028
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-tertiary.feature-box-style-3 .feature-box-icon {
                    border-color: #dfe5ea;
                }

                html .feature-box-tertiary.feature-box-style-3 .feature-box-icon i.fa,
                html .feature-box-tertiary.feature-box-style-3 .feature-box-icon .icons {
                    color: #dfe5ea;
                }

                html .feature-box-quaternary.feature-box-style-3 .feature-box-icon {
                    border-color: #444444;
                }

                html .feature-box-quaternary.feature-box-style-3 .feature-box-icon i.fa,
                html .feature-box-quaternary.feature-box-style-3 .feature-box-icon .icons {
                    color: #444444;
                }

                html .feature-box-dark.feature-box-style-3 .feature-box-icon {
                    border-color: #2e353e;
                }

                html .feature-box-dark.feature-box-style-3 .feature-box-icon i.fa,
                html .feature-box-dark.feature-box-style-3 .feature-box-icon .icons {
                    color: #2e353e;
                }

                html .feature-box-light.feature-box-style-3 .feature-box-icon {
                    border-color: #ffffff;
                }

                html .feature-box-light.feature-box-style-3 .feature-box-icon i.fa,
                html .feature-box-light.feature-box-style-3 .feature-box-icon .icons {
                    color: #ffffff;
                }

                .feature-box.feature-box-style-4 .feature-box-icon i.fa,
                .feature-box.feature-box-style-4 .feature-box-icon .icons {
                    color: ";
            // line 4069
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-primary.feature-box-style-4 .feature-box-icon i.fa,
                html .feature-box-primary.feature-box-style-4 .feature-box-icon .icons {
                    color: ";
            // line 4074
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-secondary.feature-box-style-4 .feature-box-icon i.fa,
                html .feature-box-secondary.feature-box-style-4 .feature-box-icon .icons {
                    color: ";
            // line 4079
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-tertiary.feature-box-style-4 .feature-box-icon i.fa,
                html .feature-box-tertiary.feature-box-style-4 .feature-box-icon .icons {
                    color: #dfe5ea;
                }

                html .feature-box-quaternary.feature-box-style-4 .feature-box-icon i.fa,
                html .feature-box-quaternary.feature-box-style-4 .feature-box-icon .icons {
                    color: #444444;
                }

                html .feature-box-dark.feature-box-style-4 .feature-box-icon i.fa,
                html .feature-box-dark.feature-box-style-4 .feature-box-icon .icons {
                    color: #2e353e;
                }

                html .feature-box-light.feature-box-style-4 .feature-box-icon i.fa,
                html .feature-box-light.feature-box-style-4 .feature-box-icon .icons {
                    color: #ffffff;
                }

                .feature-box.feature-box-style-5 .feature-box-icon i.fa,
                .feature-box.feature-box-style-5 .feature-box-icon i.icons {
                    color: ";
            // line 4104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-primary.feature-box-style-5 .feature-box-icon i.fa,
                html .feature-box-primary.feature-box-style-5 .feature-box-icon i.icons {
                    color: ";
            // line 4109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.fa,
                html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.icons {
                    color: ";
            // line 4114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.fa,
                html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.icons {
                    color: #dfe5ea;
                }

                html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.fa,
                html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.icons {
                    color: #444444;
                }

                html .feature-box-dark.feature-box-style-5 .feature-box-icon i.fa,
                html .feature-box-dark.feature-box-style-5 .feature-box-icon i.icons {
                    color: #2e353e;
                }

                html .feature-box-light.feature-box-style-5 .feature-box-icon i.fa,
                html .feature-box-light.feature-box-style-5 .feature-box-icon i.icons {
                    color: #ffffff;
                }

                html .feature-box-primary.feature-box-style-6 .feature-box-icon i.fa,
                html .feature-box-primary.feature-box-style-6 .feature-box-icon i.icons {
                    color: ";
            // line 4139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.fa,
                html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.icons {
                    color: ";
            // line 4144
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.fa,
                html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.icons {
                    color: #dfe5ea;
                }

                html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.fa,
                html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.icons {
                    color: #444444;
                }

                html .feature-box-dark.feature-box-style-6 .feature-box-icon i.fa,
                html .feature-box-dark.feature-box-style-6 .feature-box-icon i.icons {
                    color: #2e353e;
                }

                html .feature-box-light.feature-box-style-6 .feature-box-icon i.fa,
                html .feature-box-light.feature-box-style-6 .feature-box-icon i.icons {
                    color: #ffffff;
                }

                html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(1) .featured-box-full-primary {
                    background-color: #6c912b;
                }

                html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(2) .featured-box-full-primary {
                    background-color: ";
            // line 4172
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(3) .featured-box-full-primary {
                    background-color: ";
            // line 4176
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(4) .featured-box-full-primary {
                    background-color: ";
            // line 4180
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(5) .featured-box-full-primary {
                    background-color: #a1cc56;
                }

                html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(6) .featured-box-full-primary {
                    background-color: #acd269;
                }

                html .featured-boxes-full .featured-box-full-primary {
                    background-color: ";
            // line 4192
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .featured-boxes-full .featured-box-full-secondary {
                    background-color: ";
            // line 4197
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    color: #ffffff;
                }

                html .featured-boxes-full .featured-box-full-tertiary {
                    background-color: #dfe5ea;
                    color: #777777;
                }

                html .featured-boxes-full .featured-box-full-quaternary {
                    background-color: #444444;
                    color: #ffffff;
                }

                html .featured-boxes-full .featured-box-full-dark {
                    background-color: #2e353e;
                    color: #ffffff;
                }

                html .featured-boxes-full .featured-box-full-light {
                    background-color: #ffffff;
                    color: #777777;
                }

                .pricing-table .most-popular {
                    border-color: ";
            // line 4222
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .pricing-table .most-popular h3 {
                    background-color: ";
            // line 4226
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                }

                .pricing-table.princig-table-flat .plan h3 {
                    background-color: ";
            // line 4230
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .pricing-table.princig-table-flat .plan h3 span {
                    background: ";
            // line 4234
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.featured.featured-primary {
                    border-top-color: ";
            // line 4238
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.call-to-action-primary {
                    background: ";
            // line 4242
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.with-full-borders-primary {
                    border-color: ";
            // line 4246
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.call-to-action-primary {
                    background: ";
            // line 4250
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.call-to-action-primary h3,
                html .call-to-action.call-to-action-primary p {
                    color: #ffffff;
                }

                html .call-to-action.featured.featured-secondary {
                    border-top-color: ";
            // line 4259
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.call-to-action-secondary {
                    background: ";
            // line 4263
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.with-full-borders-secondary {
                    border-color: ";
            // line 4267
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.call-to-action-secondary {
                    background: ";
            // line 4271
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .call-to-action.call-to-action-secondary h3,
                html .call-to-action.call-to-action-secondary p {
                    color: #ffffff;
                }

                html .call-to-action.featured.featured-tertiary {
                    border-top-color: #dfe5ea;
                }

                html .call-to-action.call-to-action-tertiary {
                    background: #dfe5ea;
                }

                html .call-to-action.with-full-borders-tertiary {
                    border-color: #dfe5ea;
                }

                html .call-to-action.call-to-action-tertiary {
                    background: #dfe5ea;
                }

                html .call-to-action.call-to-action-tertiary h3,
                html .call-to-action.call-to-action-tertiary p {
                    color: #777777;
                }

                html .call-to-action.featured.featured-quaternary {
                    border-top-color: #444444;
                }

                html .call-to-action.call-to-action-quaternary {
                    background: #444444;
                }

                html .call-to-action.with-full-borders-quaternary {
                    border-color: #444444;
                }

                html .call-to-action.call-to-action-quaternary {
                    background: #444444;
                }

                html .call-to-action.call-to-action-quaternary h3,
                html .call-to-action.call-to-action-quaternary p {
                    color: #ffffff;
                }

                html .call-to-action.featured.featured-dark {
                    border-top-color: #2e353e;
                }

                html .call-to-action.call-to-action-dark {
                    background: #2e353e;
                }

                html .call-to-action.with-full-borders-dark {
                    border-color: #2e353e;
                }

                html .call-to-action.call-to-action-dark {
                    background: #2e353e;
                }

                html .call-to-action.call-to-action-dark h3,
                html .call-to-action.call-to-action-dark p {
                    color: #ffffff;
                }

                html .call-to-action.featured.featured-light {
                    border-top-color: #ffffff;
                }

                html .call-to-action.call-to-action-light {
                    background: #ffffff;
                }

                html .call-to-action.with-full-borders-light {
                    border-color: #ffffff;
                }

                html .call-to-action.call-to-action-light {
                    background: #ffffff;
                }

                html .call-to-action.call-to-action-light h3,
                html .call-to-action.call-to-action-light p {
                    color: #777777;
                }

                section.timeline .timeline-box.left:before,
                section.timeline .timeline-box.right:before {
                    background: ";
            // line 4365
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    box-shadow: 0 0 0 3px #ffffff, 0 0 0 6px ";
            // line 4366
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                ul.history li .featured-box .box-content {
                    border-top-color: ";
            // line 4370
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .recent-posts .date .month,
                article.post .post-date .month {
                    background-color: ";
            // line 4375
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .recent-posts .date .day,
                article.post .post-date .day {
                    color: ";
            // line 4380
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .slider .tp-bannertimer {
                    background-color: ";
            // line 4384
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .home-concept strong {
                    color: ";
            // line 4388
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .home-intro-primary {
                    background: ";
            // line 4392
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .home-intro-secondary {
                    background: ";
            // line 4396
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .home-intro-tertiary {
                    background: #dfe5ea;
                }

                html .home-intro-quaternary {
                    background: #444444;
                }

                html .home-intro-dark {
                    background: #2e353e;
                }

                html .home-intro-light {
                    background: #ffffff;
                }

                .home-intro p em {
                    color: #a1cc56;
                }

                html .slider-container .tp-caption-overlay-primary {
                    background: ";
            // line 4420
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .slider-container .tp-caption-overlay-opacity-primary {
                    background: rgba(137, 184, 55, 0.4);
                }

                html .slider-container .tp-caption-overlay-secondary {
                    background: ";
            // line 4428
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html .slider-container .tp-caption-overlay-opacity-secondary {
                    background: rgba(120, 163, 48, 0.4);
                }

                html .slider-container .tp-caption-overlay-tertiary {
                    background: #dfe5ea;
                }

                html .slider-container .tp-caption-overlay-opacity-tertiary {
                    background: rgba(223, 229, 234, 0.4);
                }

                html .slider-container .tp-caption-overlay-quaternary {
                    background: #444444;
                }

                html .slider-container .tp-caption-overlay-opacity-quaternary {
                    background: rgba(68, 68, 68, 0.4);
                }

                html .slider-container .tp-caption-overlay-dark {
                    background: #2e353e;
                }

                html .slider-container .tp-caption-overlay-opacity-dark {
                    background: rgba(46, 53, 62, 0.4);
                }

                html .slider-container .tp-caption-overlay-light {
                    background: #ffffff;
                }

                html .slider-container .tp-caption-overlay-opacity-light {
                    background: rgba(255, 255, 255, 0.4);
                }
                /* Arrows */
                .tparrows.tparrows-carousel.tp-leftarrow,
                .tparrows.tparrows-carousel.tp-rightarrow {
                    color: #ffffff;
                    background-color: ";
            // line 4470
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-color: ";
            // line 4471
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #6c912b;
                }

                .tparrows.tparrows-carousel.tp-leftarrow:hover,
                .tparrows.tparrows-carousel.tp-rightarrow:hover {
                    border-color: ";
            // line 4476
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 4477
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .tparrows.tparrows-carousel.tp-leftarrow:active,
                .tparrows.tparrows-carousel.tp-rightarrow:active,
                .tparrows.tparrows-carousel.tp-leftarrow:focus,
                .tparrows.tparrows-carousel.tp-rightarrow:focus,
                .tparrows.tparrows-carousel.tp-leftarrow:active:hover,
                .tparrows.tparrows-carousel.tp-rightarrow:active:hover,
                .tparrows.tparrows-carousel.tp-leftarrow:active:focus,
                .tparrows.tparrows-carousel.tp-rightarrow:active:focus {
                    border-color: ";
            // line 4488
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    background-color: ";
            // line 4489
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .tparrows.tparrows-carousel.tp-leftarrow.dropdown-toggle,
                .tparrows.tparrows-carousel.tp-rightarrow.dropdown-toggle {
                    border-left-color: ";
            // line 4494
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                .tparrows.tparrows-carousel.tp-leftarrow[disabled],
                .tparrows.tparrows-carousel.tp-rightarrow[disabled],
                .tparrows.tparrows-carousel.tp-leftarrow[disabled]:hover,
                .tparrows.tparrows-carousel.tp-rightarrow[disabled]:hover,
                .tparrows.tparrows-carousel.tp-leftarrow[disabled]:active,
                .tparrows.tparrows-carousel.tp-rightarrow[disabled]:active,
                .tparrows.tparrows-carousel.tp-leftarrow[disabled]:focus,
                .tparrows.tparrows-carousel.tp-rightarrow[disabled]:focus {
                    border-color: #b7d87d;
                    background-color: #b7d87d;
                }

                .shop ul.products li.product .onsale {
                    background-color: ";
            // line 4510
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-bottom-color: #72992e;
                }

                .shop .star-rating span,
                .shop .cart-totals tr.total .amount {
                    color: ";
            // line 4516
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                #footer .footer-ribbon {
                    background: ";
            // line 4520
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                #footer .footer-ribbon:before {
                    border-right-color: #5d7d25;
                    border-left-color: #5d7d25;
                }

                #footer.light h1,
                #footer.light h2,
                #footer.light h3,
                #footer.light h4,
                #footer.light a {
                    color: ";
            // line 4533
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                #footer.color {
                    background: ";
            // line 4537
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: ";
            // line 4538
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                #footer.color .footer-ribbon {
                    background: #6c912b;
                }

                #footer.color .footer-ribbon:before {
                    border-right-color: #40561a;
                }

                #footer.color .footer-copyright {
                    background: ";
            // line 4550
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: ";
            // line 4551
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #footer.color-primary {
                    background: ";
            // line 4555
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: ";
            // line 4556
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #footer.color-primary .footer-ribbon {
                    background: #6c912b;
                }

                html #footer.color-primary .footer-ribbon:before {
                    border-right-color: #40561a;
                }

                html #footer.color-primary .footer-copyright {
                    background: ";
            // line 4568
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: ";
            // line 4569
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #footer.color-secondary {
                    background: ";
            // line 4573
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: ";
            // line 4574
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #footer.color-secondary .footer-ribbon {
                    background: ";
            // line 4578
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #footer.color-secondary .footer-ribbon:before {
                    border-right-color: #2f4113;
                }

                html #footer.color-secondary .footer-copyright {
                    background: ";
            // line 4586
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                    border-top-color: ";
            // line 4587
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html #footer.color-tertiary {
                    background: #dfe5ea;
                    border-top-color: #dfe5ea;
                }

                html #footer.color-tertiary .footer-ribbon {
                    background: #c0ccd6;
                }

                html #footer.color-tertiary .footer-ribbon:before {
                    border-right-color: #92a6b7;
                }

                html #footer.color-tertiary .footer-copyright {
                    background: #d0d8e0;
                    border-top-color: #d0d8e0;
                }

                html #footer.color-quaternary {
                    background: #444444;
                    border-top-color: #444444;
                }

                html #footer.color-quaternary .footer-ribbon {
                    background: #2b2b2b;
                }

                html #footer.color-quaternary .footer-ribbon:before {
                    border-right-color: #040404;
                }

                html #footer.color-quaternary .footer-copyright {
                    background: #373737;
                    border-top-color: #373737;
                }

                html #footer.color-dark {
                    background: #2e353e;
                    border-top-color: #2e353e;
                }

                html #footer.color-dark .footer-ribbon {
                    background: #181c21;
                }

                html #footer.color-dark .footer-ribbon:before {
                    border-right-color: #000000;
                }

                html #footer.color-dark .footer-copyright {
                    background: #23282f;
                    border-top-color: #23282f;
                }

                html #footer.color-light {
                    background: #ffffff;
                    border-top-color: #ffffff;
                }

                html #footer.color-light .footer-ribbon {
                    background: #e6e6e6;
                }

                html #footer.color-light .footer-ribbon:before {
                    border-right-color: #bfbfbf;
                }

                html #footer.color-light .footer-copyright {
                    background: #f2f2f2;
                    border-top-color: #f2f2f2;
                }

                .sample-icon-list .sample-icon a:hover {
                    background-color: ";
            // line 4663
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }

                html.boxed .body {
                    border-top-color: ";
            // line 4667
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                }
                </style>
            ";
        } else {
            // line 4671
            echo "                <link rel='stylesheet' href='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/skins/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["skin_option"] ?? null), "html", null, true));
            echo ".css' type='text/css' media='all' />
            ";
        }
        // line 4673
        echo "            ";
        if ( !twig_test_empty(($context["your_css"] ?? null))) {
            // line 4674
            echo "                <style>
                    ";
            // line 4675
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["your_css"] ?? null), "html", null, true));
            echo "
                </style>
            ";
        }
        // line 4678
        echo "
            <js-placeholder token=\"";
        // line 4679
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
            <meta name=\"HandheldFriendly\" content=\"true\" />
            <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
</head>
<body ";
        // line 4683
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo " data-spy=\"scroll\" data-offset=\"100\">

<a href=\"#main-content\" class=\"visually-hidden focusable\">
    ";
        // line 4686
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
</a>
<div class=\"body\">
    ";
        // line 4689
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 4690
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 4691
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
</div>
<js-bottom-placeholder token=\"";
        // line 4693
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  6062 => 4693,  6057 => 4691,  6053 => 4690,  6049 => 4689,  6043 => 4686,  6037 => 4683,  6030 => 4679,  6027 => 4678,  6021 => 4675,  6018 => 4674,  6015 => 4673,  6007 => 4671,  6000 => 4667,  5993 => 4663,  5914 => 4587,  5910 => 4586,  5899 => 4578,  5892 => 4574,  5888 => 4573,  5881 => 4569,  5877 => 4568,  5862 => 4556,  5858 => 4555,  5851 => 4551,  5847 => 4550,  5832 => 4538,  5828 => 4537,  5821 => 4533,  5805 => 4520,  5798 => 4516,  5789 => 4510,  5770 => 4494,  5762 => 4489,  5754 => 4488,  5740 => 4477,  5732 => 4476,  5722 => 4471,  5718 => 4470,  5673 => 4428,  5662 => 4420,  5635 => 4396,  5628 => 4392,  5621 => 4388,  5614 => 4384,  5607 => 4380,  5599 => 4375,  5591 => 4370,  5584 => 4366,  5580 => 4365,  5483 => 4271,  5476 => 4267,  5469 => 4263,  5462 => 4259,  5450 => 4250,  5443 => 4246,  5436 => 4242,  5429 => 4238,  5422 => 4234,  5415 => 4230,  5408 => 4226,  5401 => 4222,  5373 => 4197,  5365 => 4192,  5350 => 4180,  5343 => 4176,  5336 => 4172,  5305 => 4144,  5297 => 4139,  5269 => 4114,  5261 => 4109,  5253 => 4104,  5225 => 4079,  5217 => 4074,  5209 => 4069,  5165 => 4028,  5157 => 4023,  5150 => 4019,  5142 => 4014,  5135 => 4010,  5127 => 4005,  5100 => 3981,  5092 => 3976,  5084 => 3971,  5060 => 3950,  5053 => 3946,  5046 => 3942,  5007 => 3906,  5000 => 3902,  4993 => 3898,  4986 => 3894,  4963 => 3874,  4956 => 3870,  4933 => 3850,  4926 => 3846,  4903 => 3826,  4896 => 3822,  4873 => 3802,  4866 => 3798,  4839 => 3774,  4835 => 3773,  4828 => 3769,  4824 => 3768,  4797 => 3744,  4793 => 3743,  4786 => 3739,  4782 => 3738,  4727 => 3686,  4720 => 3682,  4713 => 3678,  4706 => 3674,  4699 => 3670,  4692 => 3666,  4685 => 3662,  4678 => 3658,  4671 => 3654,  4664 => 3650,  4657 => 3646,  4626 => 3618,  4617 => 3612,  4608 => 3606,  4568 => 3569,  4561 => 3565,  4554 => 3561,  4547 => 3557,  4540 => 3553,  4533 => 3549,  4525 => 3544,  4518 => 3540,  4487 => 3512,  4479 => 3507,  4367 => 3398,  4359 => 3393,  4355 => 3392,  4348 => 3388,  4338 => 3381,  4331 => 3377,  4327 => 3376,  4315 => 3367,  4311 => 3366,  4304 => 3362,  4294 => 3355,  4287 => 3351,  4283 => 3350,  4238 => 3308,  4231 => 3304,  4223 => 3299,  4216 => 3295,  4207 => 3289,  4198 => 3283,  4187 => 3275,  3995 => 3086,  3988 => 3082,  3980 => 3077,  3976 => 3076,  3968 => 3071,  3959 => 3065,  3951 => 3060,  3944 => 3056,  3927 => 3042,  3920 => 3038,  3912 => 3033,  3908 => 3032,  3900 => 3027,  3891 => 3021,  3883 => 3016,  3876 => 3012,  3868 => 3007,  3859 => 3001,  3851 => 2996,  3843 => 2991,  3835 => 2986,  3827 => 2981,  3819 => 2976,  3811 => 2971,  3803 => 2966,  3796 => 2962,  3789 => 2958,  3782 => 2954,  3775 => 2950,  3768 => 2946,  3761 => 2942,  3754 => 2938,  3747 => 2934,  3740 => 2930,  3731 => 2924,  3724 => 2920,  3681 => 2880,  3673 => 2875,  3666 => 2871,  3658 => 2866,  3651 => 2862,  3643 => 2857,  3616 => 2833,  3608 => 2828,  3575 => 2798,  3566 => 2792,  3522 => 2751,  3515 => 2747,  3507 => 2742,  3500 => 2738,  3456 => 2697,  3445 => 2689,  3438 => 2685,  3431 => 2681,  3424 => 2677,  3316 => 2572,  3309 => 2568,  3301 => 2563,  3291 => 2556,  3287 => 2555,  3276 => 2547,  3269 => 2543,  3261 => 2538,  3251 => 2531,  3247 => 2530,  3237 => 2523,  3230 => 2519,  3226 => 2518,  3219 => 2514,  3209 => 2507,  3205 => 2506,  3195 => 2499,  3183 => 2490,  2837 => 2147,  2825 => 2138,  2817 => 2133,  2805 => 2124,  2797 => 2119,  2779 => 2104,  2769 => 2097,  2765 => 2096,  2747 => 2081,  2737 => 2074,  2723 => 2063,  2711 => 2054,  2703 => 2049,  2691 => 2040,  2683 => 2035,  2665 => 2020,  2655 => 2013,  2651 => 2012,  2633 => 1997,  2623 => 1990,  2609 => 1979,  2605 => 1978,  2591 => 1967,  2577 => 1956,  2563 => 1945,  2549 => 1934,  2539 => 1927,  2535 => 1926,  2527 => 1921,  2517 => 1914,  2499 => 1899,  2492 => 1895,  2484 => 1894,  2474 => 1887,  2466 => 1886,  2457 => 1882,  2453 => 1881,  2445 => 1876,  2417 => 1851,  2410 => 1847,  2403 => 1843,  2391 => 1834,  2348 => 1794,  2337 => 1786,  2330 => 1782,  2323 => 1778,  2316 => 1774,  2309 => 1770,  2302 => 1766,  2231 => 1698,  2223 => 1693,  2219 => 1692,  2212 => 1688,  2208 => 1687,  2204 => 1686,  2197 => 1682,  2189 => 1677,  2185 => 1676,  2178 => 1672,  2174 => 1671,  2170 => 1670,  2058 => 1561,  2054 => 1560,  2030 => 1539,  2026 => 1538,  2018 => 1533,  2011 => 1529,  1806 => 1327,  1799 => 1323,  1795 => 1322,  1775 => 1305,  1771 => 1304,  1742 => 1278,  1738 => 1277,  1715 => 1257,  1708 => 1253,  1655 => 1203,  1642 => 1193,  1623 => 1177,  1615 => 1172,  1607 => 1171,  1593 => 1160,  1585 => 1159,  1575 => 1154,  1571 => 1153,  1562 => 1147,  1558 => 1146,  1546 => 1137,  1534 => 1128,  1530 => 1127,  1518 => 1118,  1304 => 907,  1300 => 906,  1286 => 895,  1278 => 890,  1270 => 889,  1256 => 878,  1248 => 877,  1239 => 871,  1231 => 870,  1227 => 869,  1218 => 863,  1214 => 862,  1194 => 845,  1186 => 840,  1178 => 839,  1164 => 828,  1156 => 827,  1147 => 821,  1141 => 820,  1137 => 819,  1128 => 813,  1124 => 812,  840 => 531,  836 => 530,  826 => 523,  819 => 519,  811 => 518,  801 => 511,  793 => 510,  782 => 506,  778 => 505,  763 => 493,  759 => 492,  749 => 485,  742 => 481,  734 => 480,  724 => 473,  716 => 472,  705 => 468,  701 => 467,  673 => 442,  667 => 441,  639 => 416,  632 => 412,  624 => 411,  614 => 404,  606 => 403,  597 => 399,  593 => 398,  585 => 393,  578 => 389,  571 => 385,  548 => 365,  541 => 361,  534 => 357,  527 => 353,  519 => 348,  412 => 244,  404 => 239,  397 => 235,  390 => 231,  383 => 227,  376 => 223,  369 => 219,  361 => 214,  354 => 210,  347 => 206,  340 => 202,  333 => 198,  326 => 194,  318 => 189,  311 => 185,  304 => 181,  281 => 161,  274 => 157,  267 => 153,  244 => 133,  237 => 129,  170 => 65,  158 => 56,  149 => 50,  137 => 41,  128 => 35,  121 => 31,  114 => 27,  107 => 23,  103 => 21,  101 => 20,  97 => 19,  91 => 16,  87 => 15,  54 => 12,  50 => 10,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/html.html.twig", "/var/www/drupalvm/themeforest-md-porto/demo_agency/docroot/themes/porto/templates/html.html.twig");
    }
}
