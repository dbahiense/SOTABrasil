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

/* partials/pagination.html.twig */
class __TwigTemplate_ad365916b57b2757c5325dff3184605ecfe3fc45702898933d0bd0f097fe3839 extends \Twig\Template
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
        $context["pagination"] = ((array_key_exists("pagination", $context)) ? (_twig_default_filter(($context["pagination"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", [])));
        // line 2
        $context["base_url"] = ((array_key_exists("base_url", $context)) ? (_twig_default_filter(($context["base_url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", []))) : ($this->getAttribute(($context["page"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 5
            echo "
<ul class=\"pagination\">
    ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
                // line 9
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 10
                echo ($context["url"] ?? null);
                echo "\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </li>
    ";
            } else {
                // line 16
                echo "        <li class=\"page-item disabled\">
            <span class=\"page-link\" aria-hidden=\"true\">&laquo;</span>
            <span class=\"sr-only\">Previous</span>
        </li>
    ";
            }
            // line 21
            echo "
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 23
                echo "
        ";
                // line 24
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 25
                    echo "            <li class=\"page-item active\">
                <span class=\"page-link\">";
                    // line 26
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "</span>
                <span class=\"sr-only\">(current)</span>
            </li>
        ";
                } elseif ($this->getAttribute(                // line 29
$context["paginate"], "isInDelta", [])) {
                    // line 30
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]);
                    // line 31
                    echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                    // line 32
                    echo ($context["url"] ?? null);
                    echo "\">
                    <span class=\"sr-only\">Goes to Page</span>";
                    // line 33
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "
                </a>
            </li>
        ";
                } elseif ($this->getAttribute(                // line 36
$context["paginate"], "isDeltaBorder", [])) {
                    // line 37
                    echo "            <li class=\"page-item gap\">
                <span class=\"page-link\">&hellip;</span>
            </li>
        ";
                }
                // line 41
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 44
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
                // line 45
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"next\" href=\"";
                // line 46
                echo ($context["url"] ?? null);
                echo "\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </a>
        </li>
    ";
            } else {
                // line 52
                echo "        <li class=\"page-item disabled\">
            <span class=\"page-link\" aria-hidden=\"true\">&raquo;</span>
            <span class=\"sr-only\">Next</span>
        </li>
    ";
            }
            // line 57
            echo "</ul>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 57,  139 => 52,  130 => 46,  127 => 45,  124 => 44,  121 => 43,  114 => 41,  108 => 37,  106 => 36,  100 => 33,  96 => 32,  93 => 31,  90 => 30,  88 => 29,  82 => 26,  79 => 25,  77 => 24,  74 => 23,  70 => 22,  67 => 21,  60 => 16,  51 => 10,  48 => 9,  45 => 8,  43 => 7,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set pagination = pagination|default(page.collection.params.pagination) %}
{% set base_url = base_url|default(page.url) %}

{% if pagination|length > 1 %}

<ul class=\"pagination\">
    {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"prev\" href=\"{{ url }}\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </li>
    {% else %}
        <li class=\"page-item disabled\">
            <span class=\"page-link\" aria-hidden=\"true\">&laquo;</span>
            <span class=\"sr-only\">Previous</span>
        </li>
    {% endif %}

    {% for paginate in pagination %}

        {% if paginate.isCurrent %}
            <li class=\"page-item active\">
                <span class=\"page-link\">{{ paginate.number }}</span>
                <span class=\"sr-only\">(current)</span>
            </li>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ url }}\">
                    <span class=\"sr-only\">Goes to Page</span>{{ paginate.number }}
                </a>
            </li>
        {% elseif paginate.isDeltaBorder %}
            <li class=\"page-item gap\">
                <span class=\"page-link\">&hellip;</span>
            </li>
        {% endif %}

    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"next\" href=\"{{ url }}\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </a>
        </li>
    {% else %}
        <li class=\"page-item disabled\">
            <span class=\"page-link\" aria-hidden=\"true\">&raquo;</span>
            <span class=\"sr-only\">Next</span>
        </li>
    {% endif %}
</ul>

{% endif %}
", "partials/pagination.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/partials/pagination.html.twig");
    }
}
