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

/* modular/alert.html.twig */
class __TwigTemplate_bbf721c202e1480d52c8671660a24ea6260288b8b09552984d8e2e52e399015e extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "published", [])) {
            // line 2
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "alert_style", [], "any", true, true)) {
                // line 3
                echo "  ";
                $context["alert_style"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "alert_style", []);
            } else {
                // line 5
                echo "  ";
                $context["alert_style"] = "alert-primary";
            }
            // line 7
            echo "
<div class=\"list-item\">
  <div class=\"list-blog-header\">
    <div class=\"list-blog-padding\">
      <div class=\"listbullet alert ";
            // line 11
            echo ($context["alert_style"] ?? null);
            echo "\">
        ";
            // line 12
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
      </div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  48 => 11,  42 => 7,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.published %}
{% if page.header.alert_style is defined %}
  {% set alert_style = page.header.alert_style %}
{% else %}
  {% set alert_style = 'alert-primary' %}
{% endif %}

<div class=\"list-item\">
  <div class=\"list-blog-header\">
    <div class=\"list-blog-padding\">
      <div class=\"listbullet alert {{ alert_style }}\">
        {{ page.content|raw }}
      </div>
    </div>
  </div>
</div>
{% endif %}
", "modular/alert.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/modular/alert.html.twig");
    }
}
