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

/* item.html.twig */
class __TwigTemplate_030767f5a288fc07baa86625735fa803ee70ae1ff7aedce198f616e3f8fc3c1c extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 2
            echo "  ";
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "show_sidebar", []);
        } else {
            // line 4
            echo "  ";
            $context["show_sidebar"] = true;
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("item.html.twig", "item.html.twig", 7, "1866063766")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.parent.header.show_sidebar is defined %}
  {% set show_sidebar = page.parent.header.show_sidebar %}
{% else %}
  {% set show_sidebar = true %}
{% endif %}

{% embed 'partials/base.html.twig' %}

    {% set base_url = page.parent.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.parent.slug %}
    {% endif  %}

    {% block content %}
        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    {# check content display flag - hibbittsdesign.org #}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
                      <div class=\"col-md-8 blog-main\">
                    {% else %}
                      <div class=\"col-md-12 blog-main\">
                    {% endif %}
                        {# no breadcrumbs if summary only flag - hibbittsdesign.org #}
                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false, 'big_header':false} %}
                    </div>

                    {# check content display flag - hibbittsdesign.org #}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
                      <div class=\"col-md-4 blog-sidebar\">
                          {% include 'partials/sidebar.html.twig' with {'blog':page.parent} %}
                      </div>
                    {% endif %}

                </div>
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_030767f5a288fc07baa86625735fa803ee70ae1ff7aedce198f616e3f8fc3c1c___1866063766 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 9
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
        // line 10
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 12
        if ((($context["base_url"] ?? null) == "/")) {
            // line 13
            $context["base_url"] = "";
        }
        // line 16
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 17
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []));
        }
        // line 7
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        // line 21
        echo "        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 25
        echo "                    ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled")) && ($context["show_sidebar"] ?? null))) {
            // line 26
            echo "                      <div class=\"col-md-8 blog-main\">
                    ";
        } else {
            // line 28
            echo "                      <div class=\"col-md-12 blog-main\">
                    ";
        }
        // line 30
        echo "                        ";
        // line 31
        echo "                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 32
            echo "                            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 32)->display($context);
            // line 33
            echo "                        ";
        }
        // line 34
        echo "
                        ";
        // line 35
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 35)->display(twig_array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", []), "truncate" => false, "big_header" => false]));
        // line 36
        echo "                    </div>

                    ";
        // line 39
        echo "                    ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled")) && ($context["show_sidebar"] ?? null))) {
            // line 40
            echo "                      <div class=\"col-md-4 blog-sidebar\">
                          ";
            // line 41
            $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 41)->display(twig_array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", [])]));
            // line 42
            echo "                      </div>
                    ";
        }
        // line 44
        echo "
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 44,  212 => 42,  210 => 41,  207 => 40,  204 => 39,  200 => 36,  198 => 35,  195 => 34,  192 => 33,  189 => 32,  186 => 31,  184 => 30,  180 => 28,  176 => 26,  173 => 25,  168 => 21,  165 => 20,  160 => 7,  157 => 17,  155 => 16,  152 => 13,  150 => 12,  148 => 10,  146 => 9,  43 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.parent.header.show_sidebar is defined %}
  {% set show_sidebar = page.parent.header.show_sidebar %}
{% else %}
  {% set show_sidebar = true %}
{% endif %}

{% embed 'partials/base.html.twig' %}

    {% set base_url = page.parent.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.parent.slug %}
    {% endif  %}

    {% block content %}
        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    {# check content display flag - hibbittsdesign.org #}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
                      <div class=\"col-md-8 blog-main\">
                    {% else %}
                      <div class=\"col-md-12 blog-main\">
                    {% endif %}
                        {# no breadcrumbs if summary only flag - hibbittsdesign.org #}
                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false, 'big_header':false} %}
                    </div>

                    {# check content display flag - hibbittsdesign.org #}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (show_sidebar) %}
                      <div class=\"col-md-4 blog-sidebar\">
                          {% include 'partials/sidebar.html.twig' with {'blog':page.parent} %}
                      </div>
                    {% endif %}

                </div>
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/item.html.twig");
    }
}
