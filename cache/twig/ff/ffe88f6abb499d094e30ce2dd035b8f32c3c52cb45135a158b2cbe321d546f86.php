<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/sidebar.html.twig */
class __TwigTemplate_a14c6690021072f89b8bcd275bde33f4c137fc6415970191d553560f8d47a119 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        $context["arrayofpath"] = twig_split_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "path", []), "/");
        // line 4
        $context["firstfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 1, [], "array");
        // line 5
        $context["secondfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 2, [], "array");
        // line 6
        echo "
";
        // line 8
        $context["sidebar_page_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/sidebar")], "method"), "content", []);
        // line 9
        if ((($context["sidebar_page_content"] ?? null) == ($context["empty"] ?? null))) {
            // line 10
            echo "  ";
            $context["sidebar_page_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/sidebar")], "method"), "content", []);
            // line 11
            echo "  ";
            if ((($context["sidebar_page_content"] ?? null) == ($context["empty"] ?? null))) {
                // line 12
                echo "    ";
                $context["sidebar_page_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/sidebar"], "method"), "content", []);
                // line 13
                echo "  ";
            }
        }
        // line 15
        echo "
<h1 class=\"hidden\">";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>

";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 19
            echo "<div class=\"sidebar-content\">
    <h2>";
            // line 20
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.SIMPLE_SEARCH.HEADLINE");
            echo "</h2>
    ";
            // line 21
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 21)->display($context);
            // line 22
            echo "</div>
";
        }
        // line 24
        echo "
";
        // line 26
        if ((($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", []) == "top") || twig_test_empty($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", [])))) {
            // line 27
            echo "  ";
            if ( !twig_test_empty(($context["sidebar_page_content"] ?? null))) {
                // line 28
                echo "    <div class=\"sidebar-content\">
      ";
                // line 29
                echo ($context["sidebar_page_content"] ?? null);
                echo "
    </div>
  ";
            }
        }
        // line 33
        echo "
";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 35
            echo "    <h2>";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h2>
    ";
            // line 36
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 36)->display($context);
        }
        // line 38
        echo "
";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 40
            echo "<div class=\"sidebar-content\">
    <h2>";
            // line 41
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h2>
    <a class=\"btn\" href=\"";
            // line 42
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
";
        }
        // line 45
        echo "
";
        // line 46
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 47
            echo "<div class=\"sidebar-content\">
    <h2>";
            // line 48
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h2>
    ";
            // line 49
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 49)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 50
            echo "</div>
";
        }
        // line 52
        echo "
";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 54
            echo "<div class=\"sidebar-content\">
    <h2>";
            // line 55
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h2>
\t";
            // line 56
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 56)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 57
            echo "</div>
";
        }
        // line 59
        echo "
";
        // line 61
        if (($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", []), "position", []) == "bottom")) {
            // line 62
            echo "  ";
            if ( !twig_test_empty(($context["sidebar_page_content"] ?? null))) {
                // line 63
                echo "    <div class=\"sidebar-content\">
      ";
                // line 64
                echo ($context["sidebar_page_content"] ?? null);
                echo "
    </div>
  ";
            }
        }
        // line 68
        echo "
";
        // line 69
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 70
            echo "<div class=\"sidebar-content\">
  ";
            // line 71
            if (($this->getAttribute(($context["page"] ?? null), "template", []) == "blog")) {
                // line 72
                echo "    <h2>";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SIDEBAR.SYNDICATE.HEADLINE");
                echo "</h2>
    <div class=\"btn-group\">
        <a class=\"btn btn-warning\" href=\"";
                // line 74
                echo ($context["feed_url"] ?? null);
                echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
        <a class=\"btn btn-warning\" href=\"";
                // line 75
                echo ($context["feed_url"] ?? null);
                echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    </div>
  ";
            }
            // line 78
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 78,  206 => 75,  202 => 74,  196 => 72,  194 => 71,  191 => 70,  189 => 69,  186 => 68,  179 => 64,  176 => 63,  173 => 62,  171 => 61,  168 => 59,  164 => 57,  162 => 56,  158 => 55,  155 => 54,  153 => 53,  150 => 52,  146 => 50,  144 => 49,  140 => 48,  137 => 47,  135 => 46,  132 => 45,  126 => 42,  122 => 41,  119 => 40,  117 => 39,  114 => 38,  111 => 36,  106 => 35,  104 => 34,  101 => 33,  94 => 29,  91 => 28,  88 => 27,  86 => 26,  83 => 24,  79 => 22,  77 => 21,  73 => 20,  70 => 19,  68 => 18,  63 => 16,  60 => 15,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  45 => 9,  43 => 8,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}
{% set arrayofpath = uri.path|split('/') %}
{% set firstfolderofpath = arrayofpath[1] %}
{% set secondfolderofpath = arrayofpath[2] %}

{# MultiCourse hub and Presentation hub compatibility - hibbittsdesign.org #}
{% set sidebar_page_content = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/sidebar').content %}
{% if sidebar_page_content == empty %}
  {% set sidebar_page_content = page.find('/' ~ firstfolderofpath ~ '/sidebar').content %}
  {% if sidebar_page_content == empty %}
    {% set sidebar_page_content = page.find('/sidebar').content %}
  {% endif %}
{% endif %}

<h1 class=\"hidden\">{{page.title}}</h1>

{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <h2>{{ 'SIDEBAR.SIMPLE_SEARCH.HEADLINE'|t }}</h2>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}

{# display sidebar markdown page - hibbittsdesign.org #}
{% if sidebar_page.header.position == 'top' or sidebar_page.header.position is empty %}
  {% if sidebar_page_content is not empty %}
    <div class=\"sidebar-content\">
      {{ sidebar_page_content|raw }}
    </div>
  {% endif %}
{% endif %}

{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <h2>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h2>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}

{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
    <h2>{{ 'SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h2>
    <a class=\"btn\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h2>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h2>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</div>
{% endif %}

{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h2>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h2>
\t{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}

{# display sidebar markdown page - hibbittsdesign.org #}
{% if sidebar_page.header.position == 'bottom' %}
  {% if sidebar_page_content is not empty %}
    <div class=\"sidebar-content\">
      {{ sidebar_page_content|raw }}
    </div>
  {% endif %}
{% endif %}

{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content\">
  {% if page.template == 'blog' %}
    <h2>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h2>
    <div class=\"btn-group\">
        <a class=\"btn btn-warning\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
        <a class=\"btn btn-warning\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    </div>
  {% endif  %}
</div>
{% endif %}
", "partials/sidebar.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/partials/sidebar.html.twig");
    }
}
