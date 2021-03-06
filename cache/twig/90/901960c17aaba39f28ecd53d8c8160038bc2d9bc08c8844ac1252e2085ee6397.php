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

/* partials/youtube.html.twig */
class __TwigTemplate_40f30bb627d3a9eaca174ccaea6070270936158893bec4c6e1314f1b85d34e3c extends \Twig\Template
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
        echo "<div class=\"grav-youtube-wrapper ";
        echo ($context["class"] ?? null);
        echo "\">
";
        // line 2
        if ((($context["lazy_load"] ?? null) == true)) {
            // line 3
            echo "  <div class=\"grav-youtube grav-youtube--lazyloaded\" style=\"background-image: url('";
            echo $this->env->getExtension('Grav\Plugin\Youtube\Twig\YoutubeTwigExtension')->thumbnailUrl(($context["video_id"] ?? null));
            echo "')\">
      <iframe data-src=\"";
            // line 4
            echo $this->env->getExtension('Grav\Plugin\Youtube\Twig\YoutubeTwigExtension')->embedUrl(($context["video_id"] ?? null), ($context["player_parameters"] ?? null), ($context["privacy_enhanced_mode"] ?? null));
            echo "\" frameborder=\"0\" allow=\"autoplay\" allowfullscreen></iframe>
      <button>
          <svg viewBox=\"0 0 68 48\">
              <path d=\"M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z\" fill=\"#212121\" fill-opacity=\"0.8\"></path>
              <path d=\"M 45,24 27,14 27,34\" fill=\"#fff\"></path>
          </svg>
      </button>
  </div>
";
        } else {
            // line 13
            echo "  <div class=\"grav-youtube\">
      <iframe src=\"";
            // line 14
            echo $this->env->getExtension('Grav\Plugin\Youtube\Twig\YoutubeTwigExtension')->embedUrl(($context["video_id"] ?? null), ($context["player_parameters"] ?? null), ($context["privacy_enhanced_mode"] ?? null));
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
";
        }
        // line 17
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  57 => 14,  54 => 13,  42 => 4,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grav-youtube-wrapper {{ class }}\">
{% if lazy_load == true %}
  <div class=\"grav-youtube grav-youtube--lazyloaded\" style=\"background-image: url('{{- youtube_thumbnail_url(video_id) -}}')\">
      <iframe data-src=\"{{- youtube_embed_url(video_id, player_parameters, privacy_enhanced_mode) -}}\" frameborder=\"0\" allow=\"autoplay\" allowfullscreen></iframe>
      <button>
          <svg viewBox=\"0 0 68 48\">
              <path d=\"M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z\" fill=\"#212121\" fill-opacity=\"0.8\"></path>
              <path d=\"M 45,24 27,14 27,34\" fill=\"#fff\"></path>
          </svg>
      </button>
  </div>
{% else %}
  <div class=\"grav-youtube\">
      <iframe src=\"{{- youtube_embed_url(video_id, player_parameters, privacy_enhanced_mode) -}}\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
{% endif %}
</div>", "partials/youtube.html.twig", "/var/www/sotabrasil.com.br/user/plugins/youtube/templates/partials/youtube.html.twig");
    }
}
