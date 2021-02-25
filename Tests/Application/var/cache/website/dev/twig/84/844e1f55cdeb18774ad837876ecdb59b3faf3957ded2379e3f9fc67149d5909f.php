<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SuluWebsite/Extension/seo.html.twig */
class __TwigTemplate_fbf1c7689e885de40437e27f3be8ec6c4901bc00d1cb54f315ea73c4581ac0d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'keywords' => [$this, 'block_keywords'],
            'robots' => [$this, 'block_robots'],
            'urls' => [$this, 'block_urls'],
            'canonical' => [$this, 'block_canonical'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SuluWebsite/Extension/seo.html.twig"));

        // line 9
        if ( !array_key_exists("localizations", $context)) {
            // line 10
            echo "    ";
            @trigger_error("The \"urls\" variable is deprecated, set \"localizations\" instead in the \"seo.html.twig\"."." (\"@SuluWebsite/Extension/seo.html.twig\" at line 10).", E_USER_DEPRECATED);
            // line 11
            echo "    ";
            $context["localizations"] = [];
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["locale"] => $context["url"]) {
                // line 13
                echo "        ";
                $context["localizations"] = twig_array_merge((isset($context["localizations"]) || array_key_exists("localizations", $context) ? $context["localizations"] : (function () { throw new RuntimeError('Variable "localizations" does not exist.', 13, $this->source); })()), [                // line 14
$context["locale"] => ["locale" =>                 // line 15
$context["locale"], "url" => $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(                // line 16
$context["url"], null, $context["locale"])]]);
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 23
        $context["seo"] = twig_array_merge(((array_key_exists("seo", $context)) ? (_twig_default_filter((isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 23, $this->source); })()), [])) : ([])), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 23), "attributes", [], "any", false, true, false, 23), "get", [0 => "_seo", 1 => []], "method", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 23), "attributes", [], "any", false, true, false, 23), "get", [0 => "_seo", 1 => []], "method", false, false, false, 23), [])) : ([])));
        // line 26
        $context["seoTitle"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "title", [], "any", false, false, false, 26), ((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, false, 26))) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, false, 26))) : (""))));
        // line 27
        $context["seoDescription"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "description", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "description", [], "any", false, false, false, 27))) : (""));
        // line 28
        $context["seoKeywords"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "keywords", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "keywords", [], "any", false, false, false, 28))) : (""));
        // line 29
        echo "
";
        // line 30
        $context["seoRobots"] = "";
        // line 31
        if (((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noIndex", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noIndex", [], "any", false, false, false, 31), false)) : (false))) {
            // line 32
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 32, $this->source); })()) . "noIndex");
        } else {
            // line 34
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 34, $this->source); })()) . "index");
        }
        // line 36
        if (((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "noFollow", [], "any", false, false, false, 36), false)) : (false))) {
            // line 37
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 37, $this->source); })()) . ",noFollow");
        } else {
            // line 39
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 39, $this->source); })()) . ",follow");
        }
        // line 42
        $context["seoCanonical"] = ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "canonicalUrl", [], "any", false, false, false, 42))) : (""));
        // line 44
        if ((( !(isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context) ? $context["seoCanonical"] : (function () { throw new RuntimeError('Variable "seoCanonical" does not exist.', 44, $this->source); })()) && (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 44, $this->source); })())) && ((twig_get_attribute($this->env, $this->source, ($context["localizations"] ?? null), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 44, $this->source); })()), [], "array", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["localizations"] ?? null), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 44, $this->source); })()), [], "array", false, false, false, 44))) : ("")))) {
            // line 45
            echo "    ";
            $context["seoCanonical"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizations"]) || array_key_exists("localizations", $context) ? $context["localizations"] : (function () { throw new RuntimeError('Variable "localizations" does not exist.', 45, $this->source); })()), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 45, $this->source); })()), [], "array", false, false, false, 45), "url", [], "any", false, false, false, 45);
        }
        // line 50
        $this->displayBlock('title', $context, $blocks);
        // line 56
        $this->displayBlock('description', $context, $blocks);
        // line 62
        $this->displayBlock('keywords', $context, $blocks);
        // line 68
        $this->displayBlock('robots', $context, $blocks);
        // line 74
        $this->displayBlock('urls', $context, $blocks);
        // line 86
        $this->displayBlock('canonical', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 51
        if ((isset($context["seoTitle"]) || array_key_exists("seoTitle", $context) ? $context["seoTitle"] : (function () { throw new RuntimeError('Variable "seoTitle" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "<title>";
            echo twig_escape_filter($this->env, (isset($context["seoTitle"]) || array_key_exists("seoTitle", $context) ? $context["seoTitle"] : (function () { throw new RuntimeError('Variable "seoTitle" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "</title>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        // line 57
        if ((isset($context["seoDescription"]) || array_key_exists("seoDescription", $context) ? $context["seoDescription"] : (function () { throw new RuntimeError('Variable "seoDescription" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoDescription"]) || array_key_exists("seoDescription", $context) ? $context["seoDescription"] : (function () { throw new RuntimeError('Variable "seoDescription" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        // line 63
        if ((isset($context["seoKeywords"]) || array_key_exists("seoKeywords", $context) ? $context["seoKeywords"] : (function () { throw new RuntimeError('Variable "seoKeywords" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoKeywords"]) || array_key_exists("seoKeywords", $context) ? $context["seoKeywords"] : (function () { throw new RuntimeError('Variable "seoKeywords" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "robots"));

        // line 69
        if ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new RuntimeError('Variable "seoRobots" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_urls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "urls"));

        // line 76
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["localizations"]) || array_key_exists("localizations", $context) ? $context["localizations"] : (function () { throw new RuntimeError('Variable "localizations" does not exist.', 76, $this->source); })())), 1))) {
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localizations"]) || array_key_exists("localizations", $context) ? $context["localizations"] : (function () { throw new RuntimeError('Variable "localizations" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
                // line 78
                if ((0 === twig_compare((isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 78, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["localization"], "locale", [], "any", false, false, false, 78)))) {
                    // line 79
                    echo "<link rel=\"alternate\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localization"], "url", [], "any", false, false, false, 79), "html", null, true);
                    echo "\" hreflang=\"x-default\"/>";
                }
                // line 81
                echo "<link rel=\"alternate\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localization"], "url", [], "any", false, false, false, 81), "html", null, true);
                echo "\" hreflang=\"";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["localization"], "locale", [], "any", false, false, false, 81), ["_" => "-"]), "html", null, true);
                echo "\"/>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        // line 88
        echo "<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("seoCanonical", $context)) ? (_twig_default_filter((isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context) ? $context["seoCanonical"] : (function () { throw new RuntimeError('Variable "seoCanonical" does not exist.', 88, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "uri", [], "any", false, false, false, 88))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "uri", [], "any", false, false, false, 88))), "html", null, true);
        echo "\"/>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SuluWebsite/Extension/seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 88,  238 => 86,  222 => 81,  217 => 79,  215 => 78,  211 => 77,  209 => 76,  202 => 74,  192 => 70,  190 => 69,  183 => 68,  173 => 64,  171 => 63,  164 => 62,  154 => 58,  152 => 57,  145 => 56,  135 => 52,  133 => 51,  126 => 50,  119 => 86,  117 => 74,  115 => 68,  113 => 62,  111 => 56,  109 => 50,  105 => 45,  103 => 44,  101 => 42,  98 => 39,  95 => 37,  93 => 36,  90 => 34,  87 => 32,  85 => 31,  83 => 30,  80 => 29,  78 => 28,  76 => 27,  74 => 26,  72 => 23,  65 => 19,  63 => 16,  62 => 15,  61 => 14,  59 => 13,  54 => 12,  51 => 11,  48 => 10,  46 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#-
 # content array
 # defaultLocale string
 # seo array
 # shadowBaseLocale string
 # localizations array
-#}

{% if localizations is not defined %}
    {% deprecated 'The \"urls\" variable is deprecated, set \"localizations\" instead in the \"seo.html.twig\".' %}
    {% set localizations = {} %}
    {% for locale, url in urls %}
        {% set localizations = localizations|merge({
            (locale): {
                locale: locale,
                url: sulu_content_path(url, null, locale),
            }
        }) %}
    {% endfor %}
{% endif %}

{#- merge seo data with _seo from attributes for custom urls -#}
{% set seo = seo|default([])|merge(app.request.attributes.get('_seo', [])|default([])) %}

{#- fallback to content title when no seo title is set -#}
{% set seoTitle = seo.title|default(content.title|default()) %}
{% set seoDescription = seo.description|default() %}
{% set seoKeywords = seo.keywords|default() %}

{% set seoRobots = '' %}
{%- if seo.noIndex|default(false) -%}
    {% set seoRobots = seoRobots ~ 'noIndex' -%}
{%- else -%}
    {% set seoRobots = seoRobots ~ 'index' -%}
{%- endif -%}
{%- if seo.noFollow|default(false) -%}
    {% set seoRobots = seoRobots ~ ',noFollow' -%}
{%- else -%}
    {% set seoRobots = seoRobots ~ ',follow' -%}
{%- endif -%}

{% set seoCanonical = seo.canonicalUrl|default() %}

{%- if not seoCanonical and shadowBaseLocale and localizations[shadowBaseLocale]|default() %}
    {% set seoCanonical = localizations[shadowBaseLocale].url %}
{%- endif -%}

{#- render blocks -#}

{%- block title -%}
    {%- if seoTitle -%}
        <title>{{ seoTitle }}</title>
    {%- endif -%}
{%- endblock -%}

{%- block description -%}
    {%- if seoDescription -%}
        <meta name=\"description\" content=\"{{ seoDescription }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block keywords -%}
    {%- if seoKeywords -%}
        <meta name=\"keywords\" content=\"{{ seoKeywords }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block robots -%}
    {%- if seoRobots -%}
        <meta name=\"robots\" content=\"{{ seoRobots }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block urls -%}
    {#- when only one language do not show alternative -#}
    {%- if localizations|length > 1 -%}
        {%- for localization in localizations -%}
            {%- if defaultLocale == localization.locale -%}
                <link rel=\"alternate\" href=\"{{ localization.url }}\" hreflang=\"x-default\"/>
            {%- endif -%}
            <link rel=\"alternate\" href=\"{{ localization.url }}\" hreflang=\"{{ localization.locale|replace({'_': '-'}) }}\"/>
        {%- endfor -%}
    {%- endif -%}
{%- endblock -%}

{%- block canonical -%}
    {#- Set canonical to itself if a bot clone the page -#}
    <link rel=\"canonical\" href=\"{{ seoCanonical|default(app.request.uri) }}\"/>
{%- endblock -%}
", "@SuluWebsite/Extension/seo.html.twig", "/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Extension/seo.html.twig");
    }
}
