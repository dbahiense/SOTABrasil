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

/* sections.html.twig */
class __TwigTemplate_adde8e04fe37c01ab895f4292eda7fff8bcf1ccf387327e8fd1098d9abb72bdf extends \Twig\Template
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
        $context["arrayofpath"] = twig_split_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "path", []), "/");
        // line 2
        $context["firstfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 1, [], "array");
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "parent", [], "any", false, true), "parent", [], "any", false, true), "header", [], "any", false, true), "hide_next_prev_page_buttons", [], "any", true, true)) {
            // line 5
            echo "  ";
            $context["hide_next_prev_page_buttons"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "parent", []), "parent", []), "header", []), "hide_next_prev_page_buttons", []);
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
($context["page"] ?? null), "parent", [], "any", false, true), "parent", [], "any", false, true), "header", [], "any", false, true), "hide_next_prev_page_buttons", [], "any", true, true)) {
            // line 7
            echo "  ";
            $context["hide_next_prev_page_buttons"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "parent", []), "header", []), "hide_next_prev_page_buttons", []);
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
($context["page"] ?? null), "parent", [], "any", false, true), "header", [], "any", false, true), "hide_next_prev_page_buttons", [], "any", true, true)) {
            // line 9
            echo "  ";
            $context["hide_next_prev_page_buttons"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "hide_next_prev_page_buttons", []);
        }
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("sections.html.twig", "sections.html.twig", 12, "576488532")->display($context);
    }

    public function getTemplateName()
    {
        return "sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  53 => 11,  49 => 9,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set arrayofpath = uri.path | split('/') %}
{% set firstfolderofpath = arrayofpath[1] %}

{% if page.parent.parent.parent.header.hide_next_prev_page_buttons is defined %}
  {% set hide_next_prev_page_buttons = page.parent.parent.parent.header.hide_next_prev_page_buttons %}
{% elseif page.parent.parent.header.hide_next_prev_page_buttons is defined %}
  {% set hide_next_prev_page_buttons = page.parent.parent.header.hide_next_prev_page_buttons %}
{% elseif page.parent.header.hide_next_prev_page_buttons is defined %}
  {% set hide_next_prev_page_buttons = page.parent.header.hide_next_prev_page_buttons %}
{% endif %}

{% embed 'partials/base.html.twig' %}

  {% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
  {% else %}
    {% if page.parent.header.show_sidebar is defined %}
      {% set show_sidebar = page.parent.header.show_sidebar %}
    {% else %}
      {% if page.parent.parent.header.show_sidebar is defined %}
        {% set show_sidebar = page.parent.parent.header.show_sidebar %}
      {% else %}
        {% set show_sidebar = true %}
      {% endif %}
    {% endif %}
  {% endif %}

  {% if page.header.sections_nav_align is defined %}
    {% set sections_nav_align = page.header.sections_nav_align %}
  {% else %}
    {% if page.parent.header.sections_nav_align is defined %}
      {% set sections_nav_align = page.parent.header.sections_nav_align %}
    {% else %}
      {% if page.parent.parent.header.sections_nav_align is defined %}
        {% set sections_nav_align = page.parent.parent.header.sections_nav_align %}
      {% endif %}
    {% endif %}
  {% endif %}

  {% block content %}

    {% set activetag = uri.param('filter') %}

    <div class=\"main-content\">
      <div class=\"container\">
        <div class=\"row\">

          {% if sections_nav_align == 'right' %}
            <div class=\"col-md-3 blog-sidebar order-last\">
            {% else %}
              <div class=\"col-md-3 blog-sidebar\">
              {% endif %}

              <ul class=\"nav flex-column\">

                {% set collection = page.collection.visible() %}
                {% if collection is empty %}
                  {% set collection = page.parent.collection.visible() %}
                  {% if collection is empty %}
                    {% set collection = page.parent.parent.collection.visible() %}
                  {% endif %}
                {% endif %}
                {% for p in collection %}

                  <li class=\"nav-item\">
                    {% set current_parent = p.active
                      ? 'active'
                      : '' %}
                    <a class=\"nav-link {{ current_parent }}\" href=\"{% if activetag %}{{ p.url ~ '/filter:' ~ activetag }}{% else %}{{ p.url }}{% endif %}\">{{ p.menu }}</a>
                  </li>

                  {% if p.children.count != 0 %}

                    {% if p.active or(p.slug == page.parent.slug) %}
                      <ul class=\"nav flex-column ml-3\">
                        {% for child in p.children.visible %}
                          {% set current_child = child.active
                            ? 'active'
                            : '' %}
                          {% if activetag %}
                            {% if activetag in child.taxonomy['filter'] %}
                              <li class=\"nav-item\">
                                <a class=\"nav-link {{ current_child }}\" href=\"{% if activetag %}{{ child.url  ~ '/filter:' ~ activetag }}{% else %}{{ child.url }}{% endif %}\">{{ child.menu }}</a>
                              </li>
                            {% endif %}
                          {% else %}
                            <li class=\"nav-item\">
                              <a class=\"nav-link {{ current_child }}\" href=\"{% if activetag %}{{ child.url  ~ '/filter:' ~ activetag }}{% else %}{{ child.url }}{% endif %}\">{{ child.menu }}</a>
                            </li>
                          {% endif %}
                        {% endfor %}
                      </ul>
                    {% endif %}

                  {% endif %}

                {% endfor %}
            </ul>
          </div>

          {% if show_sidebar and not(grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
            <div class=\"col-md-5 blog-main order-first order-md-2\">
            {% else %}
              <div class=\"col-md-9 blog-main order-first order-md-2\">
              {% endif %}

              {% if not(page.header.hide_page_title) and not(grav.uri.param('hidepagetitle')) %}
                <h1>{{page.title}}</h1>
              {% endif %}

              {{ page.content|raw }}

              {% if not(hide_next_prev_page_buttons) %}

                <p class=\"prev-next\">

                  {% set siblings = page.collection({
                    'items': {
                      '@page.children.visible': page.parent.route
                    }
                  }) %}
                  {% set children = page.collection({
                    'items': {
                      '@page.children.visible': page.route
                    }
                  }) %}

                  {% if not(page.template == 'sections') %}

                    {% if not siblings.isFirst(page.path) %}
                      {% if children | length != 0 %}
                        {% if (siblings.nextSibling(page.path).children | last) %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.nextSibling(page.path).children|last.url ~ '/filter:' ~ activetag }}{% else %}{{ siblings.nextSibling(page.path).children|last.url }}{% endif %}\">
                            <i class=\"fa fa-chevron-left\"></i>
                            {{ siblings.nextSibling(page.path).children|last.menu }}
                          </a>
                        {% else %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.nextSibling(page.path).url ~ '/filter:' ~ activetag }}{% else %}{{ siblings.nextSibling(page.path).url }}{% endif %}\">
                            <i class=\"fa fa-chevron-left\"></i>
                            {{ siblings.nextSibling(page.path).menu }}</a>
                        {% endif %}
                      {% else %}
                        {% if siblings.nextSibling(page.path).url %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.nextSibling(page.path).url  ~ '/filter:' ~ activetag }}{% else %}{{ siblings.nextSibling(page.path).url }}{% endif %}\">
                            <i class=\"fa fa-chevron-left\"></i>
                            {{ siblings.nextSibling(page.path).menu }}</a>
                        {% endif %}
                      {% endif %}
                    {% else %}
                      {% if not(page.parent.template == 'sections') %}
                        <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ page.parent.url ~ '/filter:' ~ activetag }}{% else %}{{ page.parent.url }}{% endif %}\">
                          <i class=\"fa fa-chevron-left\"></i>
                          {{ page.parent.menu }}</a>
                      {% endif %}
                    {% endif %}

                    {% if not siblings.isLast(page.path) %}
                      {% if children | length == 0 %}
                        {% if siblings.prevSibling(page.path).url %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.prevSibling(page.path).url ~ '/filter:' ~ activetag }}{% else %}{{ siblings.prevSibling(page.path).url }}{% endif %}\">{{ siblings.prevSibling(page.path).menu }}
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        {% endif %}
                      {% else %}
                        <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ page.children|first.url ~ '/filter:' ~ activetag }}{% else %}{{ page.children|first.url }}{% endif %}\">{{ page.children|first.menu }}
                          <i class=\"fa fa-chevron-right\"></i>
                        </a>
                      {% endif %}
                    {% else %}
                      {% if not(page.parent.template == 'sections') %}
                        {% set siblings = page.collection({
                          items: {
                            '@page.children.visible': page.parent.parent.route
                          }
                        }) %}
                        {% if not siblings.isLast(page.parent.path) %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.prevSibling(page.parent.path).url ~ '/filter:' ~ activetag }}{% else %}{{ siblings.prevSibling(page.parent.path).url }}{% endif %}\">{{ siblings.prevSibling(page.parent.path).menu }}
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        {% endif %}
                      {% else %}
                        {% if page.children.count != 0 %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ page.children|first.url ~ '/filter:' ~ activetag }}{% else %}{{ page.children|first.url }}{% endif %}\">{{ page.children|first.menu }}
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        {% endif %}
                      {% endif %}
                    {% endif %}

                  </p>

                {% endif %}

              {% endif %}

              {# Creative Commons License -  hibbittsdesign.org #}
              {% if not(grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
                <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
              {% endif %}

              {# Git repository edit link - hibbittsdesign.org #}
              {% if (page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page')
                or((theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined) and not(page.header.hide_git_sync_repo_link)) %}
                <br>
                <hr>
                <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
              {% endif %}
            </div>

            {# check content display flag - hibbittsdesign.org #}
            {% if show_sidebar and not(grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
              <div class=\"col-md-4 blog-sidebar order-last\">
                {% include 'partials/sidebar.html.twig' with {
                  'blog' : page
                } %}
              </div>
            {% endif %}

          </div>
        </div>
      </div>

    {% endblock %}

  {% endembed %}
", "sections.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/sections.html.twig");
    }
}


/* sections.html.twig */
class __TwigTemplate_adde8e04fe37c01ab895f4292eda7fff8bcf1ccf387327e8fd1098d9abb72bdf___576488532 extends \Twig\Template
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
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 15
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []);
        } else {
            // line 17
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
                // line 18
                $context["show_sidebar"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "show_sidebar", []);
            } else {
                // line 20
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "parent", [], "any", false, true), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
                    // line 21
                    $context["show_sidebar"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "parent", []), "header", []), "show_sidebar", []);
                } else {
                    // line 23
                    $context["show_sidebar"] = true;
                }
            }
        }
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "sections_nav_align", [], "any", true, true)) {
            // line 29
            $context["sections_nav_align"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sections_nav_align", []);
        } else {
            // line 31
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "header", [], "any", false, true), "sections_nav_align", [], "any", true, true)) {
                // line 32
                $context["sections_nav_align"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "sections_nav_align", []);
            } else {
                // line 34
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", [], "any", false, true), "parent", [], "any", false, true), "header", [], "any", false, true), "sections_nav_align", [], "any", true, true)) {
                    // line 35
                    $context["sections_nav_align"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "parent", []), "header", []), "sections_nav_align", []);
                }
            }
        }
        // line 12
        $this->parent = $this->loadTemplate("partials/base.html.twig", "sections.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        // line 41
        echo "
    ";
        // line 42
        $context["activetag"] = $this->getAttribute(($context["uri"] ?? null), "param", [0 => "filter"], "method");
        // line 43
        echo "
    <div class=\"main-content\">
      <div class=\"container\">
        <div class=\"row\">

          ";
        // line 48
        if ((($context["sections_nav_align"] ?? null) == "right")) {
            // line 49
            echo "            <div class=\"col-md-3 blog-sidebar order-last\">
            ";
        } else {
            // line 51
            echo "              <div class=\"col-md-3 blog-sidebar\">
              ";
        }
        // line 53
        echo "
              <ul class=\"nav flex-column\">

                ";
        // line 56
        $context["collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "visible", [], "method");
        // line 57
        echo "                ";
        if (twig_test_empty(($context["collection"] ?? null))) {
            // line 58
            echo "                  ";
            $context["collection"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "collection", []), "visible", [], "method");
            // line 59
            echo "                  ";
            if (twig_test_empty(($context["collection"] ?? null))) {
                // line 60
                echo "                    ";
                $context["collection"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "parent", []), "collection", []), "visible", [], "method");
                // line 61
                echo "                  ";
            }
            // line 62
            echo "                ";
        }
        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 64
            echo "
                  <li class=\"nav-item\">
                    ";
            // line 66
            $context["current_parent"] = (($this->getAttribute($context["p"], "active", [])) ? ("active") : (""));
            // line 69
            echo "                    <a class=\"nav-link ";
            echo ($context["current_parent"] ?? null);
            echo "\" href=\"";
            if (($context["activetag"] ?? null)) {
                echo (($this->getAttribute($context["p"], "url", []) . "/filter:") . ($context["activetag"] ?? null));
            } else {
                echo $this->getAttribute($context["p"], "url", []);
            }
            echo "\">";
            echo $this->getAttribute($context["p"], "menu", []);
            echo "</a>
                  </li>

                  ";
            // line 72
            if (($this->getAttribute($this->getAttribute($context["p"], "children", []), "count", []) != 0)) {
                // line 73
                echo "
                    ";
                // line 74
                if (($this->getAttribute($context["p"], "active", []) || ($this->getAttribute($context["p"], "slug", []) == $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", [])))) {
                    // line 75
                    echo "                      <ul class=\"nav flex-column ml-3\">
                        ";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 77
                        echo "                          ";
                        $context["current_child"] = (($this->getAttribute($context["child"], "active", [])) ? ("active") : (""));
                        // line 80
                        echo "                          ";
                        if (($context["activetag"] ?? null)) {
                            // line 81
                            echo "                            ";
                            if (twig_in_filter(($context["activetag"] ?? null), $this->getAttribute($this->getAttribute($context["child"], "taxonomy", []), "filter", [], "array"))) {
                                // line 82
                                echo "                              <li class=\"nav-item\">
                                <a class=\"nav-link ";
                                // line 83
                                echo ($context["current_child"] ?? null);
                                echo "\" href=\"";
                                if (($context["activetag"] ?? null)) {
                                    echo (($this->getAttribute($context["child"], "url", []) . "/filter:") . ($context["activetag"] ?? null));
                                } else {
                                    echo $this->getAttribute($context["child"], "url", []);
                                }
                                echo "\">";
                                echo $this->getAttribute($context["child"], "menu", []);
                                echo "</a>
                              </li>
                            ";
                            }
                            // line 86
                            echo "                          ";
                        } else {
                            // line 87
                            echo "                            <li class=\"nav-item\">
                              <a class=\"nav-link ";
                            // line 88
                            echo ($context["current_child"] ?? null);
                            echo "\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo (($this->getAttribute($context["child"], "url", []) . "/filter:") . ($context["activetag"] ?? null));
                            } else {
                                echo $this->getAttribute($context["child"], "url", []);
                            }
                            echo "\">";
                            echo $this->getAttribute($context["child"], "menu", []);
                            echo "</a>
                            </li>
                          ";
                        }
                        // line 91
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                      </ul>
                    ";
                }
                // line 94
                echo "
                  ";
            }
            // line 96
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </ul>
          </div>

          ";
        // line 101
        if ((($context["show_sidebar"] ?? null) &&  !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled")))) {
            // line 102
            echo "            <div class=\"col-md-5 blog-main order-first order-md-2\">
            ";
        } else {
            // line 104
            echo "              <div class=\"col-md-9 blog-main order-first order-md-2\">
              ";
        }
        // line 106
        echo "
              ";
        // line 107
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_page_title", []) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "hidepagetitle"], "method"))) {
            // line 108
            echo "                <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
              ";
        }
        // line 110
        echo "
              ";
        // line 111
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

              ";
        // line 113
        if ( !($context["hide_next_prev_page_buttons"] ?? null)) {
            // line 114
            echo "
                <p class=\"prev-next\">

                  ";
            // line 117
            $context["siblings"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@page.children.visible" => $this->getAttribute($this->getAttribute(            // line 119
($context["page"] ?? null), "parent", []), "route", [])]]], "method");
            // line 122
            echo "                  ";
            $context["children"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@page.children.visible" => $this->getAttribute(            // line 124
($context["page"] ?? null), "route", [])]]], "method");
            // line 127
            echo "
                  ";
            // line 128
            if ( !($this->getAttribute(($context["page"] ?? null), "template", []) == "sections")) {
                // line 129
                echo "
                    ";
                // line 130
                if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method")) {
                    // line 131
                    echo "                      ";
                    if ((twig_length_filter($this->env, ($context["children"] ?? null)) != 0)) {
                        // line 132
                        echo "                        ";
                        if (twig_last($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "children", []))) {
                            // line 133
                            echo "                          <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo (($this->getAttribute(twig_last($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "children", [])), "url", []) . "/filter:") . ($context["activetag"] ?? null));
                            } else {
                                echo $this->getAttribute(twig_last($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "children", [])), "url", []);
                            }
                            echo "\">
                            <i class=\"fa fa-chevron-left\"></i>
                            ";
                            // line 135
                            echo $this->getAttribute(twig_last($this->env, $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "children", [])), "menu", []);
                            echo "
                          </a>
                        ";
                        } else {
                            // line 138
                            echo "                          <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo (($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []) . "/filter:") . ($context["activetag"] ?? null));
                            } else {
                                echo $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []);
                            }
                            echo "\">
                            <i class=\"fa fa-chevron-left\"></i>
                            ";
                            // line 140
                            echo $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "menu", []);
                            echo "</a>
                        ";
                        }
                        // line 142
                        echo "                      ";
                    } else {
                        // line 143
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", [])) {
                            // line 144
                            echo "                          <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo (($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []) . "/filter:") . ($context["activetag"] ?? null));
                            } else {
                                echo $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []);
                            }
                            echo "\">
                            <i class=\"fa fa-chevron-left\"></i>
                            ";
                            // line 146
                            echo $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "nextSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "menu", []);
                            echo "</a>
                        ";
                        }
                        // line 148
                        echo "                      ";
                    }
                    // line 149
                    echo "                    ";
                } else {
                    // line 150
                    echo "                      ";
                    if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "template", []) == "sections")) {
                        // line 151
                        echo "                        <a class=\"btn btn-primary\" href=\"";
                        if (($context["activetag"] ?? null)) {
                            echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []) . "/filter:") . ($context["activetag"] ?? null));
                        } else {
                            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
                        }
                        echo "\">
                          <i class=\"fa fa-chevron-left\"></i>
                          ";
                        // line 153
                        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "menu", []);
                        echo "</a>
                      ";
                    }
                    // line 155
                    echo "                    ";
                }
                // line 156
                echo "
                    ";
                // line 157
                if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method")) {
                    // line 158
                    echo "                      ";
                    if ((twig_length_filter($this->env, ($context["children"] ?? null)) == 0)) {
                        // line 159
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", [])) {
                            // line 160
                            echo "                          <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo (($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []) . "/filter:") . ($context["activetag"] ?? null));
                            } else {
                                echo $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "url", []);
                            }
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute(($context["page"] ?? null), "path", [])], "method"), "menu", []);
                            echo "
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        ";
                        }
                        // line 164
                        echo "                      ";
                    } else {
                        // line 165
                        echo "                        <a class=\"btn btn-primary\" href=\"";
                        if (($context["activetag"] ?? null)) {
                            echo (($this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "url", []) . "/filter:") . ($context["activetag"] ?? null));
                        } else {
                            echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "url", []);
                        }
                        echo "\">";
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "menu", []);
                        echo "
                          <i class=\"fa fa-chevron-right\"></i>
                        </a>
                      ";
                    }
                    // line 169
                    echo "                    ";
                } else {
                    // line 170
                    echo "                      ";
                    if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "template", []) == "sections")) {
                        // line 171
                        echo "                        ";
                        $context["siblings"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@page.children.visible" => $this->getAttribute($this->getAttribute($this->getAttribute(                        // line 173
($context["page"] ?? null), "parent", []), "parent", []), "route", [])]]], "method");
                        // line 176
                        echo "                        ";
                        if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "path", [])], "method")) {
                            // line 177
                            echo "                          <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo (($this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "path", [])], "method"), "url", []) . "/filter:") . ($context["activetag"] ?? null));
                            } else {
                                echo $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "path", [])], "method"), "url", []);
                            }
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute(($context["siblings"] ?? null), "prevSibling", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "path", [])], "method"), "menu", []);
                            echo "
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        ";
                        }
                        // line 181
                        echo "                      ";
                    } else {
                        // line 182
                        echo "                        ";
                        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) != 0)) {
                            // line 183
                            echo "                          <a class=\"btn btn-primary\" href=\"";
                            if (($context["activetag"] ?? null)) {
                                echo (($this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "url", []) . "/filter:") . ($context["activetag"] ?? null));
                            } else {
                                echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "url", []);
                            }
                            echo "\">";
                            echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "children", [])), "menu", []);
                            echo "
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        ";
                        }
                        // line 187
                        echo "                      ";
                    }
                    // line 188
                    echo "                    ";
                }
                // line 189
                echo "
                  </p>

                ";
            }
            // line 193
            echo "
              ";
        }
        // line 195
        echo "
              ";
        // line 197
        echo "              ";
        if ((( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled")) && ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])))) {
            // line 198
            echo "                <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "sections.html.twig", 198)->display($context);
            echo "</p>
              ";
        }
        // line 200
        echo "
              ";
        // line 202
        echo "              ";
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_display", []) == "page")) || ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == "page") &&  !$this->getAttribute($this->getAttribute(        // line 203
($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true)) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])))) {
            // line 204
            echo "                <br>
                <hr>
                <p>";
            // line 206
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "sections.html.twig", 206)->display($context);
            echo "</p>
              ";
        }
        // line 208
        echo "            </div>

            ";
        // line 211
        echo "            ";
        if ((($context["show_sidebar"] ?? null) &&  !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled")))) {
            // line 212
            echo "              <div class=\"col-md-4 blog-sidebar order-last\">
                ";
            // line 213
            $this->loadTemplate("partials/sidebar.html.twig", "sections.html.twig", 213)->display(twig_array_merge($context, ["blog" =>             // line 214
($context["page"] ?? null)]));
            // line 216
            echo "              </div>
            ";
        }
        // line 218
        echo "
          </div>
        </div>
      </div>

    ";
    }

    public function getTemplateName()
    {
        return "sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  826 => 218,  822 => 216,  820 => 214,  819 => 213,  816 => 212,  813 => 211,  809 => 208,  804 => 206,  800 => 204,  798 => 203,  796 => 202,  793 => 200,  787 => 198,  784 => 197,  781 => 195,  777 => 193,  771 => 189,  768 => 188,  765 => 187,  751 => 183,  748 => 182,  745 => 181,  731 => 177,  728 => 176,  726 => 173,  724 => 171,  721 => 170,  718 => 169,  704 => 165,  701 => 164,  687 => 160,  684 => 159,  681 => 158,  679 => 157,  676 => 156,  673 => 155,  668 => 153,  658 => 151,  655 => 150,  652 => 149,  649 => 148,  644 => 146,  634 => 144,  631 => 143,  628 => 142,  623 => 140,  613 => 138,  607 => 135,  597 => 133,  594 => 132,  591 => 131,  589 => 130,  586 => 129,  584 => 128,  581 => 127,  579 => 124,  577 => 122,  575 => 119,  574 => 117,  569 => 114,  567 => 113,  562 => 111,  559 => 110,  553 => 108,  551 => 107,  548 => 106,  544 => 104,  540 => 102,  538 => 101,  533 => 98,  526 => 96,  522 => 94,  518 => 92,  512 => 91,  498 => 88,  495 => 87,  492 => 86,  478 => 83,  475 => 82,  472 => 81,  469 => 80,  466 => 77,  462 => 76,  459 => 75,  457 => 74,  454 => 73,  452 => 72,  437 => 69,  435 => 66,  431 => 64,  426 => 63,  423 => 62,  420 => 61,  417 => 60,  414 => 59,  411 => 58,  408 => 57,  406 => 56,  401 => 53,  397 => 51,  393 => 49,  391 => 48,  384 => 43,  382 => 42,  379 => 41,  376 => 40,  371 => 12,  366 => 35,  364 => 34,  361 => 32,  359 => 31,  356 => 29,  354 => 28,  349 => 23,  346 => 21,  344 => 20,  341 => 18,  339 => 17,  336 => 15,  334 => 14,  56 => 12,  53 => 11,  49 => 9,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set arrayofpath = uri.path | split('/') %}
{% set firstfolderofpath = arrayofpath[1] %}

{% if page.parent.parent.parent.header.hide_next_prev_page_buttons is defined %}
  {% set hide_next_prev_page_buttons = page.parent.parent.parent.header.hide_next_prev_page_buttons %}
{% elseif page.parent.parent.header.hide_next_prev_page_buttons is defined %}
  {% set hide_next_prev_page_buttons = page.parent.parent.header.hide_next_prev_page_buttons %}
{% elseif page.parent.header.hide_next_prev_page_buttons is defined %}
  {% set hide_next_prev_page_buttons = page.parent.header.hide_next_prev_page_buttons %}
{% endif %}

{% embed 'partials/base.html.twig' %}

  {% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
  {% else %}
    {% if page.parent.header.show_sidebar is defined %}
      {% set show_sidebar = page.parent.header.show_sidebar %}
    {% else %}
      {% if page.parent.parent.header.show_sidebar is defined %}
        {% set show_sidebar = page.parent.parent.header.show_sidebar %}
      {% else %}
        {% set show_sidebar = true %}
      {% endif %}
    {% endif %}
  {% endif %}

  {% if page.header.sections_nav_align is defined %}
    {% set sections_nav_align = page.header.sections_nav_align %}
  {% else %}
    {% if page.parent.header.sections_nav_align is defined %}
      {% set sections_nav_align = page.parent.header.sections_nav_align %}
    {% else %}
      {% if page.parent.parent.header.sections_nav_align is defined %}
        {% set sections_nav_align = page.parent.parent.header.sections_nav_align %}
      {% endif %}
    {% endif %}
  {% endif %}

  {% block content %}

    {% set activetag = uri.param('filter') %}

    <div class=\"main-content\">
      <div class=\"container\">
        <div class=\"row\">

          {% if sections_nav_align == 'right' %}
            <div class=\"col-md-3 blog-sidebar order-last\">
            {% else %}
              <div class=\"col-md-3 blog-sidebar\">
              {% endif %}

              <ul class=\"nav flex-column\">

                {% set collection = page.collection.visible() %}
                {% if collection is empty %}
                  {% set collection = page.parent.collection.visible() %}
                  {% if collection is empty %}
                    {% set collection = page.parent.parent.collection.visible() %}
                  {% endif %}
                {% endif %}
                {% for p in collection %}

                  <li class=\"nav-item\">
                    {% set current_parent = p.active
                      ? 'active'
                      : '' %}
                    <a class=\"nav-link {{ current_parent }}\" href=\"{% if activetag %}{{ p.url ~ '/filter:' ~ activetag }}{% else %}{{ p.url }}{% endif %}\">{{ p.menu }}</a>
                  </li>

                  {% if p.children.count != 0 %}

                    {% if p.active or(p.slug == page.parent.slug) %}
                      <ul class=\"nav flex-column ml-3\">
                        {% for child in p.children.visible %}
                          {% set current_child = child.active
                            ? 'active'
                            : '' %}
                          {% if activetag %}
                            {% if activetag in child.taxonomy['filter'] %}
                              <li class=\"nav-item\">
                                <a class=\"nav-link {{ current_child }}\" href=\"{% if activetag %}{{ child.url  ~ '/filter:' ~ activetag }}{% else %}{{ child.url }}{% endif %}\">{{ child.menu }}</a>
                              </li>
                            {% endif %}
                          {% else %}
                            <li class=\"nav-item\">
                              <a class=\"nav-link {{ current_child }}\" href=\"{% if activetag %}{{ child.url  ~ '/filter:' ~ activetag }}{% else %}{{ child.url }}{% endif %}\">{{ child.menu }}</a>
                            </li>
                          {% endif %}
                        {% endfor %}
                      </ul>
                    {% endif %}

                  {% endif %}

                {% endfor %}
            </ul>
          </div>

          {% if show_sidebar and not(grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
            <div class=\"col-md-5 blog-main order-first order-md-2\">
            {% else %}
              <div class=\"col-md-9 blog-main order-first order-md-2\">
              {% endif %}

              {% if not(page.header.hide_page_title) and not(grav.uri.param('hidepagetitle')) %}
                <h1>{{page.title}}</h1>
              {% endif %}

              {{ page.content|raw }}

              {% if not(hide_next_prev_page_buttons) %}

                <p class=\"prev-next\">

                  {% set siblings = page.collection({
                    'items': {
                      '@page.children.visible': page.parent.route
                    }
                  }) %}
                  {% set children = page.collection({
                    'items': {
                      '@page.children.visible': page.route
                    }
                  }) %}

                  {% if not(page.template == 'sections') %}

                    {% if not siblings.isFirst(page.path) %}
                      {% if children | length != 0 %}
                        {% if (siblings.nextSibling(page.path).children | last) %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.nextSibling(page.path).children|last.url ~ '/filter:' ~ activetag }}{% else %}{{ siblings.nextSibling(page.path).children|last.url }}{% endif %}\">
                            <i class=\"fa fa-chevron-left\"></i>
                            {{ siblings.nextSibling(page.path).children|last.menu }}
                          </a>
                        {% else %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.nextSibling(page.path).url ~ '/filter:' ~ activetag }}{% else %}{{ siblings.nextSibling(page.path).url }}{% endif %}\">
                            <i class=\"fa fa-chevron-left\"></i>
                            {{ siblings.nextSibling(page.path).menu }}</a>
                        {% endif %}
                      {% else %}
                        {% if siblings.nextSibling(page.path).url %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.nextSibling(page.path).url  ~ '/filter:' ~ activetag }}{% else %}{{ siblings.nextSibling(page.path).url }}{% endif %}\">
                            <i class=\"fa fa-chevron-left\"></i>
                            {{ siblings.nextSibling(page.path).menu }}</a>
                        {% endif %}
                      {% endif %}
                    {% else %}
                      {% if not(page.parent.template == 'sections') %}
                        <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ page.parent.url ~ '/filter:' ~ activetag }}{% else %}{{ page.parent.url }}{% endif %}\">
                          <i class=\"fa fa-chevron-left\"></i>
                          {{ page.parent.menu }}</a>
                      {% endif %}
                    {% endif %}

                    {% if not siblings.isLast(page.path) %}
                      {% if children | length == 0 %}
                        {% if siblings.prevSibling(page.path).url %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.prevSibling(page.path).url ~ '/filter:' ~ activetag }}{% else %}{{ siblings.prevSibling(page.path).url }}{% endif %}\">{{ siblings.prevSibling(page.path).menu }}
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        {% endif %}
                      {% else %}
                        <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ page.children|first.url ~ '/filter:' ~ activetag }}{% else %}{{ page.children|first.url }}{% endif %}\">{{ page.children|first.menu }}
                          <i class=\"fa fa-chevron-right\"></i>
                        </a>
                      {% endif %}
                    {% else %}
                      {% if not(page.parent.template == 'sections') %}
                        {% set siblings = page.collection({
                          items: {
                            '@page.children.visible': page.parent.parent.route
                          }
                        }) %}
                        {% if not siblings.isLast(page.parent.path) %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ siblings.prevSibling(page.parent.path).url ~ '/filter:' ~ activetag }}{% else %}{{ siblings.prevSibling(page.parent.path).url }}{% endif %}\">{{ siblings.prevSibling(page.parent.path).menu }}
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        {% endif %}
                      {% else %}
                        {% if page.children.count != 0 %}
                          <a class=\"btn btn-primary\" href=\"{% if activetag %}{{ page.children|first.url ~ '/filter:' ~ activetag }}{% else %}{{ page.children|first.url }}{% endif %}\">{{ page.children|first.menu }}
                            <i class=\"fa fa-chevron-right\"></i>
                          </a>
                        {% endif %}
                      {% endif %}
                    {% endif %}

                  </p>

                {% endif %}

              {% endif %}

              {# Creative Commons License -  hibbittsdesign.org #}
              {% if not(grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license)) %}
                <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
              {% endif %}

              {# Git repository edit link - hibbittsdesign.org #}
              {% if (page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'page')
                or((theme_var('display_of_git_sync_repo_link') == 'page' and page.header.git_sync_repo_link_display is not defined) and not(page.header.hide_git_sync_repo_link)) %}
                <br>
                <hr>
                <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
              {% endif %}
            </div>

            {# check content display flag - hibbittsdesign.org #}
            {% if show_sidebar and not(grav.uri.param('chromeless') or grav.uri.param('embedded') or theme_var('chromeless.enabled')) %}
              <div class=\"col-md-4 blog-sidebar order-last\">
                {% include 'partials/sidebar.html.twig' with {
                  'blog' : page
                } %}
              </div>
            {% endif %}

          </div>
        </div>
      </div>

    {% endblock %}

  {% endembed %}
", "sections.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/sections.html.twig");
    }
}
