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

/* @App/base.html.twig */
class __TwigTemplate_9af28ebc2b81d5e1bcdd542cbcfd07681fda3ad0f726451cd7072290f80b528f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'aside' => [$this, 'block_aside'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "_"), 0, [], "array", false, false, false, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('style', $context, $blocks);
        // line 19
        echo "</head>
<body>
<header>
    ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "</header>

<section id=\"content\">
    ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "</section>

<aside>
    ";
        // line 45
        $this->displayBlock('aside', $context, $blocks);
        // line 46
        echo "</aside>

<footer>
    ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "</footer>

";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 9
        echo "        ";
        $this->loadTemplate("@SuluWebsite/Extension/seo.html.twig", "@App/base.html.twig", 9)->display(twig_array_merge($context, ["seo" => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["extension"] ?? null), "seo", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extension"] ?? null), "seo", [], "any", false, false, false, 10), [])) : ([])), "content" => ((        // line 11
array_key_exists("content", $context)) ? (_twig_default_filter((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 11, $this->source); })()), [])) : ([])), "urls" => ((        // line 12
array_key_exists("urls", $context)) ? (_twig_default_filter((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 12, $this->source); })()), [])) : ([])), "shadowBaseLocale" => ((        // line 13
array_key_exists("shadowBaseLocale", $context)) ? (_twig_default_filter((isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new RuntimeError('Variable "shadowBaseLocale" does not exist.', 13, $this->source); })()))) : ("")), "defaultLocale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "locale", [], "any", false, false, false, 14)]));
        // line 16
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "        <nav>
            <ul>
                <li>
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentRootPath(), "html", null, true);
        echo "\">Homepage</a>
                </li>

                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sulu_navigation_root_tree')->getCallable(), ["main"]));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "                    <li>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, $context["item"], "webspaceKey", [], "any", false, false, false, 31)), "html", null, true);
            echo "\"
                           title=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </ul>
        </nav>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "        <p>Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " The Cocktail</p>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <span class=\"schema\">
        ";
        // line 56
        echo twig_constant("TheCocktail\\Bundle\\SuluSchemaOrgBundle\\Factory\\SchemaOrgFactory::TWIG_KEY");
        echo "
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 56,  240 => 55,  233 => 54,  223 => 50,  216 => 49,  204 => 45,  192 => 41,  183 => 35,  172 => 32,  168 => 31,  165 => 30,  161 => 29,  155 => 26,  150 => 23,  143 => 22,  131 => 18,  124 => 16,  122 => 14,  121 => 13,  120 => 12,  119 => 11,  118 => 10,  116 => 9,  109 => 8,  100 => 59,  98 => 54,  94 => 52,  92 => 49,  87 => 46,  85 => 45,  80 => 42,  78 => 41,  73 => 38,  71 => 22,  66 => 19,  64 => 18,  61 => 17,  59 => 8,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')[0] }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% block meta %}
        {% include \"@SuluWebsite/Extension/seo.html.twig\" with {
            \"seo\": extension.seo|default([]),
            \"content\": content|default([]),
            \"urls\": urls|default([]),
            \"shadowBaseLocale\": shadowBaseLocale|default(),
            \"defaultLocale\": app.request.locale
        } %}
    {% endblock %}

    {% block style %}{% endblock %}
</head>
<body>
<header>
    {% block header %}
        <nav>
            <ul>
                <li>
                    <a href=\"{{ sulu_content_root_path() }}\">Homepage</a>
                </li>

                {% for item in sulu_navigation_root_tree('main') %}
                    <li>
                        <a href=\"{{ sulu_content_path(item.url, item.webspaceKey) }}\"
                           title=\"{{ item.title }}\">{{ item.title }}</a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endblock %}
</header>

<section id=\"content\">
    {% block content %}{% endblock %}
</section>

<aside>
    {% block aside %}{% endblock %}
</aside>

<footer>
    {% block footer %}
        <p>Copyright {{ 'now'|date('Y') }} The Cocktail</p>
    {% endblock %}
</footer>

{% block javascripts %}
    <span class=\"schema\">
        {{ constant('TheCocktail\\\\Bundle\\\\SuluSchemaOrgBundle\\\\Factory\\\\SchemaOrgFactory::TWIG_KEY')|raw }}
    </span>
{% endblock %}
</body>
</html>
", "@App/base.html.twig", "/Users/pablolozano/Projects/SuluSchemaOrgBundle/Tests/Application/AppBundle/Resources/views/base.html.twig");
    }
}
