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

/* partials/base.html.twig */
class __TwigTemplate_e0113606b1f814c77ce07e2fa42de87028c0cae854f00abcc84c9ddde5d865ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["arrayofpath"] = twig_split_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "path", []), "/");
        // line 2
        $context["firstfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 1, [], "array");
        // line 3
        $context["secondfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 2, [], "array");
        // line 4
        echo "
";
        // line 6
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "subsite"))) {
            // line 7
            echo "  ";
            if (($context["firstfolderofpath"] ?? null)) {
                // line 8
                echo "    ";
                $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/favicon")], "method"), "media", []), "images", []));
                // line 9
                echo "    ";
                $context["site_title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "title", []);
                // line 10
                echo "  ";
            } else {
                // line 11
                echo "    ";
                $context["site_title"] = twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
                // line 12
                echo "  ";
            }
            // line 13
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/footer")], "method"), "content", []);
            // line 14
            echo "  ";
            if ((($context["footer_content"] ?? null) == ($context["empty"] ?? null))) {
                // line 15
                echo "    ";
                $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
                // line 16
                echo "  ";
            }
        } elseif ((($this->getAttribute($this->getAttribute(        // line 17
($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "subsite"))) {
            // line 18
            echo "  ";
            $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/favicon")], "method"), "media", []), "images", []));
            // line 19
            echo "  ";
            if (twig_test_empty(($context["favicon"] ?? null))) {
                // line 20
                echo "    ";
                $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/favicon")], "method"), "media", []), "images", []));
                // line 21
                echo "  ";
            }
            // line 22
            echo "  ";
            $context["site_title"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "course_site_title", []);
            // line 23
            echo "  ";
            if (twig_test_empty(($context["site_title"] ?? null))) {
                // line 24
                echo "    ";
                $context["site_title"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "subsite_site_title", []);
                // line 25
                echo "  ";
            }
            // line 26
            echo "  ";
            if (twig_test_empty(($context["site_title"] ?? null))) {
                // line 27
                echo "    ";
                $context["site_title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "title", []);
                // line 28
                echo "  ";
            }
            // line 29
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/footer")], "method"), "content", []);
            // line 30
            echo "  ";
            if ((($context["footer_content"] ?? null) == ($context["empty"] ?? null))) {
                // line 31
                echo "    ";
                $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
                // line 32
                echo "  ";
            }
        } else {
            // line 34
            echo "  ";
            $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/favicon"], "method"), "media", []), "images", []));
            // line 35
            echo "  ";
            $context["site_title"] = twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
            // line 36
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
        }
        // line 38
        echo "
";
        // line 39
        if ((($context["favicon"] ?? null) == ($context["empty"] ?? null))) {
            // line 40
            echo "  ";
            $context["favicon"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/favicon"], "method"), "media", []), "images", []));
            // line 41
            echo "    ";
            if ((($context["favicon"] ?? null) == ($context["empty"] ?? null))) {
                // line 42
                echo "      ";
                $context["favicon_url"] = "theme://images/favicon.png";
                // line 43
                echo "    ";
            } else {
                // line 44
                echo "      ";
                $context["favicon_url"] = $this->getAttribute(($context["favicon"] ?? null), "url", []);
                // line 45
                echo "    ";
            }
        } else {
            // line 47
            echo "  ";
            $context["favicon_url"] = $this->getAttribute(($context["favicon"] ?? null), "url", []);
        }
        // line 49
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 51
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
    <head>
        ";
        // line 53
        $this->displayBlock('head', $context, $blocks);
        // line 104
        echo "    </head>

    <body class=\"";
        // line 106
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">

        ";
        // line 109
        echo "        ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
            // line 110
            echo "
          ";
            // line 111
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
                // line 112
                echo "              ";
                $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 112)->display($context);
                // line 113
                echo "          ";
            }
            // line 114
            echo "
          ";
            // line 115
            $this->displayBlock('header_navigation', $context, $blocks);
            // line 118
            echo "        ";
        }
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('content', $context, $blocks);
        // line 121
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 122
        echo "
        ";
        // line 123
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
            // line 124
            echo "          <div class=\"footer\">
              <div class=\"container\">
                ";
            // line 126
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "header", []), "footer_scroll", [])) {
                // line 127
                echo "                  ";
                // line 128
                echo "                  <div class=\"up-arrow\">
                    <a href=\"#\" id=\"top\" title=\"Top of Page\">
                      <i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
                    </a>
                  </div>
                ";
            }
            // line 134
            echo "                ";
            // line 135
            echo "                <div class=\"text-muted\">
                  ";
            // line 136
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_display", []) == "footer")) || ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == "footer") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true)) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])))) {
                // line 137
                echo "                    <p>";
                $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/base.html.twig", 137)->display($context);
                echo "</p>
                  ";
            }
            // line 139
            echo "                  ";
            if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "git_sync_edit_theme_link_location") == "footer")) {
                // line 140
                echo "                    <p>";
                $this->loadTemplate("partials/git_sync_theme_link.html.twig", "partials/base.html.twig", 140)->display($context);
                echo "</p>
                  ";
            }
            // line 142
            echo "                  ";
            if (($context["footer_content"] ?? null)) {
                // line 143
                echo "                    ";
                echo ($context["footer_content"] ?? null);
                echo "
                  ";
            }
            // line 145
            echo "                  </div>
              </div>
          </div>
        ";
        }
        // line 149
        echo "
        <script async charset=\"utf-8\" src=\"//cdn.embedly.com/widgets/platform.js\"></script>

        ";
        // line 152
        $this->displayBlock('bottom', $context, $blocks);
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 157)->display($context);
        // line 158
        echo "
    </body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 53
    public function block_head($context, array $blocks = [])
    {
        // line 54
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        ";
        // line 58
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "
        <title>";
        // line 60
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo ($context["site_title"] ?? null);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 61
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(($context["favicon_url"] ?? null), true);
        echo "\" />

        ";
        // line 63
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 83
        echo "
        ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "
        ";
        // line 98
        $this->displayBlock('assets', $context, $blocks);
        // line 102
        echo "
        ";
    }

    // line 63
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 64
        echo "            ";
        // line 65
        echo "            ";
        if (($this->getAttribute(($context["theme"] ?? null), "theme_stylesheet", [], "any", true, true) &&  !twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "theme_stylesheet")))) {
            // line 66
            echo "              ";
            if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "theme_stylesheet") != "default")) {
                // line 67
                echo "                ";
                $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("theme://css/bootswatch/" . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "theme_stylesheet")) . "/bootstrap.min.css"), 1 => 100], "method");
                // line 68
                echo "              ";
            } else {
                // line 69
                echo "                ";
                $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap/bootstrap.min.css"], "method");
                // line 70
                echo "              ";
            }
            // line 71
            echo "            ";
        } else {
            // line 72
            echo "              ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap/bootstrap.min.css"], "method");
            // line 73
            echo "            ";
        }
        // line 74
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 75
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/theme.css"], "method");
        // line 76
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/theme.css"], "method");
        // line 77
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 78
        echo "
            ";
        // line 79
        if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
            // line 80
            echo "              ";
            $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ".chromeless-show{display:block}.chromeless-hide{display:none}"], "method");
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        // line 85
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 102], "method");
        // line 86
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bootstrap.min.js", 1 => 101], "method");
        // line 87
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr-custom.js", 1 => 100], "method");
        // line 88
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 89
        echo "            ";
        // line 90
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/my.js", 1 => 99], "method");
        // line 91
        echo "
            ";
        // line 92
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 93
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 94
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 95
            echo "            ";
        }
        // line 96
        echo "        ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 98
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 99
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 100
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 106
    public function block_body_classes($context, array $blocks = [])
    {
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
            echo " chromeless";
        }
    }

    // line 115
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 116
        echo "              ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 116)->display($context);
        // line 117
        echo "          ";
    }

    // line 120
    public function block_content($context, array $blocks = [])
    {
    }

    // line 121
    public function block_pagination($context, array $blocks = [])
    {
    }

    // line 152
    public function block_bottom($context, array $blocks = [])
    {
        // line 153
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 153,  486 => 152,  481 => 121,  476 => 120,  472 => 117,  469 => 116,  466 => 115,  457 => 106,  450 => 100,  445 => 99,  442 => 98,  433 => 96,  430 => 95,  427 => 94,  424 => 93,  422 => 92,  419 => 91,  416 => 90,  414 => 89,  411 => 88,  408 => 87,  405 => 86,  402 => 85,  399 => 84,  395 => 82,  392 => 81,  389 => 80,  387 => 79,  384 => 78,  381 => 77,  378 => 76,  375 => 75,  372 => 74,  369 => 73,  366 => 72,  363 => 71,  360 => 70,  357 => 69,  354 => 68,  351 => 67,  348 => 66,  345 => 65,  343 => 64,  340 => 63,  335 => 102,  333 => 98,  330 => 97,  328 => 84,  325 => 83,  323 => 63,  318 => 61,  310 => 60,  307 => 59,  305 => 58,  299 => 54,  296 => 53,  288 => 158,  285 => 157,  282 => 155,  280 => 152,  275 => 149,  269 => 145,  263 => 143,  260 => 142,  254 => 140,  251 => 139,  245 => 137,  243 => 136,  240 => 135,  238 => 134,  230 => 128,  228 => 127,  226 => 126,  222 => 124,  220 => 123,  217 => 122,  214 => 121,  212 => 120,  209 => 119,  206 => 118,  204 => 115,  201 => 114,  198 => 113,  195 => 112,  193 => 111,  190 => 110,  187 => 109,  182 => 106,  178 => 104,  176 => 53,  171 => 51,  167 => 49,  163 => 47,  159 => 45,  156 => 44,  153 => 43,  150 => 42,  147 => 41,  144 => 40,  142 => 39,  139 => 38,  135 => 36,  132 => 35,  129 => 34,  125 => 32,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  49 => 6,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set arrayofpath = uri.path|split('/') %}
{% set firstfolderofpath = arrayofpath[1] %}
{% set secondfolderofpath = arrayofpath[2] %}

{# MultiCourse hub compatibility - hibbittsdesign.org #}
{% if page.find('/' ~ firstfolderofpath).template == 'course' or page.find('/' ~ firstfolderofpath).template == 'subsite' %}
  {% if firstfolderofpath %}
    {% set favicon = page.find('/' ~ firstfolderofpath ~ '/favicon' ).media.images|first %}
    {% set site_title = page.find('/' ~ firstfolderofpath ).title %}
  {% else %}
    {% set site_title = site.title|e('html') %}
  {% endif %}
  {% set footer_content = page.find('/' ~ firstfolderofpath ~ '/footer').content %}
  {% if footer_content == empty %}
    {% set footer_content = page.find('/footer').content %}
  {% endif %}
{% elseif page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'course' or  page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'subsite' %}
  {% set favicon = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/favicon' ).media.images|first %}
  {% if favicon is empty %}
    {% set favicon = page.find('/' ~ firstfolderofpath ~ '/favicon' ).media.images|first %}
  {% endif %}
  {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.course_site_title %}
  {% if site_title is empty %}
    {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.subsite_site_title %}
  {% endif %}
  {% if site_title is empty %}
    {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).title %}
  {% endif %}
  {% set footer_content = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/footer').content %}
  {% if footer_content == empty %}
    {% set footer_content = page.find('/footer').content %}
  {% endif %}
{% else %}
  {% set favicon = page.find('/favicon' ).media.images|first %}
  {% set site_title = site.title|e('html') %}
  {% set footer_content = page.find('/footer').content %}
{% endif %}

{% if favicon == empty %}
  {% set favicon = page.find('/favicon' ).media.images|first %}
    {% if favicon == empty %}
      {% set favicon_url = 'theme://images/favicon.png' %}
    {% else %}
      {% set favicon_url = favicon.url %}
    {% endif %}
{% else %}
  {% set favicon_url = favicon.url %}
{% endif %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        {% include 'partials/metadata.html.twig' %}

        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site_title }}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url(favicon_url,true) }}\" />

        {% block stylesheets %}
            {# load theme.css and custom.css files - hibbittsdesign.org #}
            {% if theme.theme_stylesheet is defined and theme_var('theme_stylesheet') is not empty %}
              {% if theme_var('theme_stylesheet') != 'default' %}
                {% do assets.addCss(\"theme://css/bootswatch/#{ theme_var('theme_stylesheet') }/bootstrap.min.css\", 100) %}
              {% else %}
                {% do assets.addCss('theme://css/bootstrap/bootstrap.min.css') %}
              {% endif %}
            {% else %}
              {% do assets.addCss('theme://css/bootstrap/bootstrap.min.css') %}
            {% endif %}
            {% do assets.add('theme://css/font-awesome.min.css') %}
            {% do assets.add('theme://css-compiled/theme.css') %}
            {% do assets.addCss('theme://css/theme.css') %}
            {% do assets.addCss('theme://css/custom.css') %}

            {% if ((grav.uri.param('chromeless') or grav.uri.param('embedded')) or theme_var('chromeless.enabled')) %}
              {% do assets.addInlineCss('.chromeless-show{display:block}.chromeless-hide{display:none}') %}
            {% endif %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery', 102) %}
            {% do assets.add('theme://js/bootstrap.min.js', 101) %}
            {% do assets.add('theme://js/modernizr-custom.js', 100) %}
            {% do assets.add('theme://js/site.js', {group:'bottom'}) %}
            {# load custom js - hibbittsdesign.org #}
            {% do assets.addJs('theme://js/my.js', 99) %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
            {% endif %}
        {% endblock %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

        {% endblock head %}
    </head>

    <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% if (grav.uri.param('chromeless') or grav.uri.param('embedded')) or (theme_var('chromeless.enabled')) %} chromeless{% endif %}{% endblock %}\">

        {# check content display flag - hibbittsdesign.org #}
        {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}

          {% if config.plugins.langswitcher.enabled %}
              {% include 'partials/langswitcher.html.twig' %}
          {% endif %}

          {% block header_navigation %}
              {% include 'partials/navigation.html.twig' %}
          {% endblock %}
        {% endif %}

        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
          <div class=\"footer\">
              <div class=\"container\">
                {% if page.find('/footer').header.footer_scroll %}
                  {# added top of page navigation element - hibbittsdesign.org #}
                  <div class=\"up-arrow\">
                    <a href=\"#\" id=\"top\" title=\"Top of Page\">
                      <i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
                    </a>
                  </div>
                {% endif %}
                {# use footer folder page for content - hibbittsdesign.org #}
                <div class=\"text-muted\">
                  {% if (page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'footer' ) or (( theme_var('display_of_git_sync_repo_link') == 'footer' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
                    <p>{% include 'partials/git_sync_repo_link.html.twig' %}</p>
                  {% endif %}
                  {% if theme_var('git_sync_edit_theme_link_location') == 'footer' %}
                    <p>{% include 'partials/git_sync_theme_link.html.twig' %}</p>
                  {% endif %}
                  {% if footer_content %}
                    {{ footer_content|raw }}
                  {% endif %}
                  </div>
              </div>
          </div>
        {% endif %}

        <script async charset=\"utf-8\" src=\"//cdn.embedly.com/widgets/platform.js\"></script>

        {% block bottom %}
            {{ assets.js('bottom')|raw }}
        {% endblock %}

        {# added global scripts - hibbittsdesign.org #}
        {% include 'partials/scripts.html.twig' %}

    </body>
</html>
", "partials/base.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/partials/base.html.twig");
    }
}
