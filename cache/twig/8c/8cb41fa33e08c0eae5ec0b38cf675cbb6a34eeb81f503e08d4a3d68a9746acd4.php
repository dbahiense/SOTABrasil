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

/* partials/navigation.html.twig */
class __TwigTemplate_db984da2b79a6a0763480d2d155102f0247afffd39b15897d76eb3a83606e618 extends \Twig\Template
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
        $context["navbar_style"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "navbar_style");
        // line 2
        $context["navbar_bg"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "navbar_bg");
        // line 3
        $context["navbar_bg_color"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "navbar_bg_color");
        // line 4
        $context["navbar_position"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "navbar_position");
        // line 5
        $context["navbar_breakpoint"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "navbar_breakpoint");
        // line 6
        $context["arrayofpath"] = twig_split_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "path", []), "/");
        // line 7
        $context["firstfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 1, [], "array");
        // line 8
        $context["secondfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 2, [], "array");
        // line 9
        echo "
";
        // line 11
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "subsite"))) {
            // line 12
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "header", []), "navbar_bg_color", [])) {
                // line 13
                echo "      ";
                $context["navbar_bg_color"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "header", []), "navbar_bg_color", []);
                // line 14
                echo "    ";
            }
            // line 15
            echo "    ";
            $context["course_home"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "header", []), "course_home", []);
            // line 16
            echo "    ";
            if (twig_test_empty(($context["course_home"] ?? null))) {
                // line 17
                echo "        ";
                $context["course_home"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "header", []), "subsite_home", []);
                // line 18
                echo "    ";
            }
            // line 19
            echo "    ";
            if (twig_test_empty(($context["course_home"] ?? null))) {
                // line 20
                echo "        ";
                $context["course_home"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "home", []), "alias", []);
                // line 21
                echo "    ";
            }
            // line 22
            echo "    ";
            if (($context["firstfolderofpath"] ?? null)) {
                // line 23
                echo "      ";
                if ( !twig_in_filter(($context["firstfolderofpath"] ?? null), ($context["base_url"] ?? null))) {
                    // line 24
                    echo "        ";
                    $context["base_url"] = ((((($context["base_url"] ?? null) . "/") . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["course_home"] ?? null));
                    // line 25
                    echo "      ";
                }
                // line 26
                echo "    ";
            }
            // line 27
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "routable", [])) {
                // line 28
                echo "      ";
                $context["site_title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "title", []);
                // line 29
                echo "    ";
            } else {
                // line 30
                echo "      ";
                $context["site_title"] = twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "title", []));
                // line 31
                echo "    ";
            }
            // line 32
            echo "    ";
            $context["background_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/headerimage")], "method"), "media", []), "images", []));
            // line 33
            echo "    ";
            if ((($context["background_image"] ?? null) == ($context["empty"] ?? null))) {
                // line 34
                echo "      ";
                $context["background_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/headerimage"], "method"), "media", []), "images", []));
                // line 35
                echo "    ";
            }
            // line 36
            echo "    ";
            $context["pages"] = $this->getAttribute(($context["page"] ?? null), "evaluate", [0 => [0 => ["@page.children" => ("/" . ($context["firstfolderofpath"] ?? null))]]], "method");
        } elseif ((($this->getAttribute($this->getAttribute(        // line 37
($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "subsite"))) {
            // line 38
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "header", []), "navbar_bg_color", [])) {
                // line 39
                echo "      ";
                $context["navbar_bg_color"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "navbar_bg_color", []);
                // line 40
                echo "    ";
            }
            // line 41
            echo "    ";
            $context["course_home"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "course_home", []);
            // line 42
            echo "    ";
            if (twig_test_empty(($context["course_home"] ?? null))) {
                // line 43
                echo "        ";
                $context["course_home"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "subsite_home", []);
                // line 44
                echo "    ";
            }
            // line 45
            echo "    ";
            if (twig_test_empty(($context["course_home"] ?? null))) {
                // line 46
                echo "        ";
                $context["course_home"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "home", []), "alias", []);
                // line 47
                echo "    ";
            }
            // line 48
            echo "    ";
            if ( !twig_in_filter(((($context["firstfolderofpath"] ?? null) . "/") . ($context["secondfolderofpath"] ?? null)), ($context["base_url"] ?? null))) {
                // line 49
                echo "      ";
                $context["base_url"] = ((((((($context["base_url"] ?? null) . "/") . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/") . ($context["course_home"] ?? null));
                // line 50
                echo "    ";
            }
            // line 51
            echo "    ";
            $context["site_title"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "course_site_title", []);
            // line 52
            echo "    ";
            if (twig_test_empty(($context["site_title"] ?? null))) {
                // line 53
                echo "      ";
                $context["site_title"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "subsite_site_title", []);
                // line 54
                echo "    ";
            }
            // line 55
            echo "    ";
            if (twig_test_empty(($context["site_title"] ?? null))) {
                // line 56
                echo "      ";
                $context["site_title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "title", []);
                // line 57
                echo "    ";
            }
            // line 58
            echo "    ";
            $context["background_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/headerimage")], "method"), "media", []), "images", []));
            // line 59
            echo "    ";
            if ((($context["background_image"] ?? null) == ($context["empty"] ?? null))) {
                // line 60
                echo "      ";
                $context["background_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/headerimage"], "method"), "media", []), "images", []));
                // line 61
                echo "    ";
            }
            // line 62
            echo "    ";
            $context["pages"] = $this->getAttribute(($context["page"] ?? null), "evaluate", [0 => [0 => ["@page.children" => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))]]], "method");
        } else {
            // line 64
            echo "  ";
            $context["site_title"] = twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
            // line 65
            echo "  ";
            $context["background_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/headerimage"], "method"), "media", []), "images", []));
            // line 66
            echo "  ";
            $context["pages"] = $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []);
        }
        // line 68
        echo "
";
        // line 69
        if ((($context["background_image"] ?? null) &&  !(($context["navbar_position"] ?? null) == "fixed-bottom"))) {
            // line 70
            echo "  <div class=\"myheader\" style=\"background-image: url(";
            echo $this->getAttribute(($context["background_image"] ?? null), "url", []);
            echo ");\"></div>
";
        }
        // line 72
        echo "
";
        // line 73
        if (($context["navbar_bg_color"] ?? null)) {
            // line 74
            echo "    ";
            $context["navbar_bg_color"] = (("style=\"background-color: " . ($context["navbar_bg_color"] ?? null)) . "\"");
            // line 75
            echo "    ";
            $context["navbar_bg"] = "";
        } elseif ((        // line 76
($context["navbar_bg"] ?? null) && (($context["navbar_bg"] ?? null) != "default"))) {
            // line 77
            echo "    ";
            $context["navbar_bg_color"] = "";
        } else {
            // line 79
            echo "    ";
            $context["navbar_bg"] = "bg-primary";
            // line 80
            echo "    ";
            $context["navbar_bg_color"] = "";
        }
        // line 82
        echo "
<nav class=\"navbar ";
        // line 83
        echo ($context["navbar_position"] ?? null);
        echo " navbar-expand-";
        echo ($context["navbar_breakpoint"] ?? null);
        echo " ";
        echo ($context["navbar_style"] ?? null);
        echo " ";
        echo ($context["navbar_bg"] ?? null);
        echo "\" ";
        echo ($context["navbar_bg_color"] ?? null);
        echo ";\" role=\"navigation\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 85
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo ($context["site_title"] ?? null);
        echo "</a>
        ";
        // line 86
        if ((twig_first($this->env, ($context["pages"] ?? null)) || (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == ($context["empty"] ?? null))))) {
            // line 87
            echo "          <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
          </button>
        ";
        }
        // line 91
        echo "
        <div class=\"navbar-collapse collapse justify-content-end\">
            <ul class=\"navbar-nav\">

              ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 96
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 97
                echo "                  ";
                // line 98
                echo "                  ";
                $context["current_page"] = "active";
                // line 99
                echo "                  ";
                if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "dropdown.enabled") && ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []), "count", []) > 0))) {
                    // line 100
                    echo "                      <li class=\"nav-item dropdown ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    // line 101
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "</a>
                          <div class=\"dropdown-menu\">
                              ";
                    // line 103
                    $context["current_parent"] = (($this->getAttribute($context["page"], "active", [])) ? ("active") : (""));
                    // line 104
                    echo "                              <a href=\"";
                    echo $this->getAttribute($context["page"], "url", []);
                    echo "\" class=\"dropdown-item ";
                    echo ($context["current_parent"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "</a>
                              <div class=\"dropdown-divider\"></div>
                              ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 107
                        echo "                                  ";
                        $context["current_child"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                        // line 108
                        echo "                                  <a href=\"";
                        echo $this->getAttribute($context["child"], "url", []);
                        echo "\" class=\"dropdown-item ";
                        echo ($context["current_child"] ?? null);
                        echo "\">";
                        echo $this->getAttribute($context["child"], "menu", []);
                        echo "</a>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                          </div>
                      </li>
                  ";
                } else {
                    // line 113
                    echo "                    ";
                    if ( !(((($this->getAttribute($this->getAttribute($context["page"], "find", [0 => ("/" . $this->getAttribute($context["page"], "slug", []))], "method"), "template", []) == "course") || ($this->getAttribute($this->getAttribute($context["page"], "find", [0 => ("/" . $this->getAttribute($context["page"], "slug", []))], "method"), "template", []) == "subsite")) || ($this->getAttribute($this->getAttribute($context["page"], "find", [0 => ("/" . $this->getAttribute($context["page"], "slug", []))], "method"), "template", []) == "coursegroup")) || ($this->getAttribute($this->getAttribute($context["page"], "find", [0 => ("/" . $this->getAttribute($context["page"], "slug", []))], "method"), "template", []) == "subsitegroup"))) {
                        // line 114
                        echo "                      ";
                        $context["page_url"] = $this->getAttribute($context["page"], "url", []);
                        // line 115
                        echo "                      ";
                        $context["page_menu"] = $this->getAttribute($context["page"], "menu", []);
                        // line 116
                        echo "                      <li class=\"nav-item ";
                        echo ($context["current_page"] ?? null);
                        echo "\"><a class=\"nav-link\" href=\"";
                        echo ($context["page_url"] ?? null);
                        echo "\" ";
                        if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "menu_target", [])) {
                            echo " target=\"";
                            echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "menu_target", []);
                            echo "\" ";
                        }
                        echo ">";
                        if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "menu_icon", [])) {
                            echo "<i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "menu_icon", []);
                            echo "\"></i>";
                        }
                        echo ($context["page_menu"] ?? null);
                        echo "</a></li>
                    ";
                    }
                    // line 118
                    echo "                  ";
                }
                // line 119
                echo "                ";
            }
            // line 120
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 123
            echo "                    <li class=\"nav-item active\">
                        ";
            // line 124
            $context["icon"] = (($this->getAttribute($context["mitem"], "icon", [])) ? ((("<i class=\"fa fa-fw fa-" . $this->getAttribute($context["mitem"], "icon", [])) . "\"></i> ")) : (""));
            // line 125
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">";
            echo ($context["icon"] ?? null);
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
                ";
        // line 130
        echo "                ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "displaycustommenus.enabled")) {
            // line 131
            echo "
                  ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custommenu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 133
                echo "                    <li class=\"nav-item active\" >
                      ";
                // line 134
                if (($this->getAttribute($context["mitem"], "target", []) == "_blank")) {
                    // line 135
                    echo "                        ";
                    $context["mclass"] = "external-link";
                    // line 136
                    echo "                      ";
                }
                // line 137
                echo "                      <a class=\"nav-link ";
                echo ($context["mclass"] ?? null);
                echo "\" href=\"";
                echo $this->getAttribute($context["mitem"], "url", []);
                echo "\" target=\"";
                echo $this->getAttribute($context["mitem"], "target", []);
                echo "\">
                        ";
                // line 138
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    // line 139
                    echo "                          <i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", []);
                    echo "\"></i>";
                    echo $this->getAttribute($context["mitem"], "text", []);
                    echo "
                        ";
                } else {
                    // line 141
                    echo "                          ";
                    echo $this->getAttribute($context["mitem"], "text", []);
                    echo "
                        ";
                }
                // line 143
                echo "                      </a>
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                ";
        }
        // line 147
        echo "
                ";
        // line 149
        echo "                ";
        if ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == ($context["empty"] ?? null)))) {
            // line 150
            echo "                  <li class=\"nav-item active\" >
                      ";
            // line 151
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 151)->display(twig_array_merge($context, ["linkinmenu" => true]));
            // line 152
            echo "                  </li>
                ";
        }
        // line 154
        echo "
                ";
        // line 155
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 156
            echo "                    <li class=\"nav-item\"><span class=\"nav-link\"><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 156)->display($context);
            echo "</span></li>
                ";
        }
        // line 158
        echo "            </ul>
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 158,  494 => 156,  492 => 155,  489 => 154,  485 => 152,  483 => 151,  480 => 150,  477 => 149,  474 => 147,  471 => 146,  463 => 143,  457 => 141,  449 => 139,  447 => 138,  438 => 137,  435 => 136,  432 => 135,  430 => 134,  427 => 133,  423 => 132,  420 => 131,  417 => 130,  414 => 128,  401 => 125,  399 => 124,  396 => 123,  392 => 122,  389 => 121,  383 => 120,  380 => 119,  377 => 118,  356 => 116,  353 => 115,  350 => 114,  347 => 113,  342 => 110,  329 => 108,  326 => 107,  322 => 106,  312 => 104,  310 => 103,  305 => 101,  300 => 100,  297 => 99,  294 => 98,  292 => 97,  289 => 96,  285 => 95,  279 => 91,  273 => 87,  271 => 86,  265 => 85,  252 => 83,  249 => 82,  245 => 80,  242 => 79,  238 => 77,  236 => 76,  233 => 75,  230 => 74,  228 => 73,  225 => 72,  219 => 70,  217 => 69,  214 => 68,  210 => 66,  207 => 65,  204 => 64,  200 => 62,  197 => 61,  194 => 60,  191 => 59,  188 => 58,  185 => 57,  182 => 56,  179 => 55,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  164 => 50,  161 => 49,  158 => 48,  155 => 47,  152 => 46,  149 => 45,  146 => 44,  143 => 43,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  126 => 37,  123 => 36,  120 => 35,  117 => 34,  114 => 33,  111 => 32,  108 => 31,  105 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  46 => 9,  44 => 8,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set navbar_style = theme_var('navbar_style') %}
{% set navbar_bg = theme_var('navbar_bg') %}
{% set navbar_bg_color = theme_var('navbar_bg_color') %}
{% set navbar_position = theme_var('navbar_position') %}
{% set navbar_breakpoint = theme_var('navbar_breakpoint') %}
{% set arrayofpath = uri.path|split('/') %}
{% set firstfolderofpath = arrayofpath[1] %}
{% set secondfolderofpath = arrayofpath[2] %}

{# MultiCourse hub compatibility - hibbittsdesign.org #}
{% if page.find('/' ~ firstfolderofpath).template == 'course' or page.find('/' ~ firstfolderofpath).template == 'subsite' %}
    {% if page.find('/' ~ firstfolderofpath ).header.navbar_bg_color %}
      {% set navbar_bg_color = page.find('/' ~ firstfolderofpath ).header.navbar_bg_color %}
    {% endif %}
    {% set course_home = page.find('/' ~ firstfolderofpath ).header.course_home %}
    {% if course_home is empty %}
        {% set course_home = page.find('/' ~ firstfolderofpath ).header.subsite_home %}
    {% endif %}
    {% if course_home is empty %}
        {% set course_home = config.system.home.alias %}
    {% endif %}
    {% if firstfolderofpath %}
      {% if not (firstfolderofpath in base_url) %}
        {% set base_url = base_url ~ '/' ~ firstfolderofpath ~ '/' ~ course_home %}
      {% endif %}
    {% endif %}
    {% if page.find('/' ~ firstfolderofpath).routable %}
      {% set site_title = page.find('/' ~ firstfolderofpath ).title %}
    {% else %}
      {% set site_title = page.find('/' ~ firstfolderofpath ).title|upper %}
    {% endif %}
    {% set background_image = page.find('/' ~ firstfolderofpath ~ '/headerimage').media.images|first %}
    {% if background_image == empty %}
      {% set background_image = page.find('/headerimage').media.images|first %}
    {% endif %}
    {% set pages = page.evaluate([{'@page.children':'/' ~ firstfolderofpath }]) %}
{% elseif page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'course' or page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'subsite' %}
    {% if page.find('/' ~ firstfolderofpath ).header.navbar_bg_color %}
      {% set navbar_bg_color = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.navbar_bg_color %}
    {% endif %}
    {% set course_home = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.course_home %}
    {% if course_home is empty %}
        {% set course_home = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.subsite_home %}
    {% endif %}
    {% if course_home is empty %}
        {% set course_home = config.system.home.alias %}
    {% endif %}
    {% if not (firstfolderofpath ~ '/' ~ secondfolderofpath in base_url) %}
      {% set base_url = base_url ~ '/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/' ~ course_home %}
    {% endif %}
    {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.course_site_title %}
    {% if site_title is empty %}
      {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.subsite_site_title %}
    {% endif %}
    {% if site_title is empty %}
      {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).title %}
    {% endif %}
    {% set background_image = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/headerimage').media.images|first %}
    {% if background_image == empty %}
      {% set background_image = page.find('/headerimage').media.images|first %}
    {% endif %}
    {% set pages = page.evaluate([{'@page.children':'/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath}]) %}
{% else %}
  {% set site_title = site.title|e('html') %}
  {% set background_image = page.find('/headerimage').media.images|first %}
  {% set pages = pages.children.visible %}
{% endif %}

{% if background_image and not(navbar_position == 'fixed-bottom') %}
  <div class=\"myheader\" style=\"background-image: url({{ background_image.url }});\"></div>
{% endif %}

{% if navbar_bg_color %}
    {% set navbar_bg_color = \"style=\\\"background-color: #{navbar_bg_color}\\\"\" %}
    {% set navbar_bg = '' %}
{% elseif navbar_bg and navbar_bg != 'default' %}
    {% set navbar_bg_color = '' %}
{% else %}
    {% set navbar_bg = 'bg-primary' %}
    {% set navbar_bg_color = '' %}
{% endif %}

<nav class=\"navbar {{ navbar_position }} navbar-expand-{{ navbar_breakpoint }} {{ navbar_style }} {{ navbar_bg }}\" {{ navbar_bg_color|raw }};\" role=\"navigation\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site_title }}</a>
        {% if (pages|first) or (theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty) %}
          <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
          </button>
        {% endif %}

        <div class=\"navbar-collapse collapse justify-content-end\">
            <ul class=\"navbar-nav\">

              {% for page in pages %}
                {% if page.visible %}
                  {# Set all pages to use active page style - hibbittsdesign.org#}
                  {% set current_page = 'active' %}
                  {% if theme_var('dropdown.enabled') and page.children.visible.count > 0 %}
                      <li class=\"nav-item dropdown {{ current_page }}\">
                          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ page.menu }}</a>
                          <div class=\"dropdown-menu\">
                              {% set current_parent = page.active ? 'active' : '' %}
                              <a href=\"{{ page.url }}\" class=\"dropdown-item {{ current_parent }}\">{{ page.menu }}</a>
                              <div class=\"dropdown-divider\"></div>
                              {% for child in page.children.visible %}
                                  {% set current_child = (child.active or child.activeChild) ? 'active' : '' %}
                                  <a href=\"{{ child.url }}\" class=\"dropdown-item {{ current_child }}\">{{ child.menu }}</a>
                              {% endfor %}
                          </div>
                      </li>
                  {% else %}
                    {% if not (page.find('/' ~ page.slug).template == 'course' or page.find('/' ~ page.slug).template == 'subsite' or page.find('/' ~ page.slug).template == 'coursegroup' or page.find('/' ~ page.slug).template == 'subsitegroup') %}
                      {% set page_url = page.url %}
                      {% set page_menu = page.menu %}
                      <li class=\"nav-item {{ current_page }}\"><a class=\"nav-link\" href=\"{{ page_url }}\" {% if page.header.menu_target %} target=\"{{ page.header.menu_target }}\" {% endif %}>{% if page.header.menu_icon %}<i class=\"fa fa-{{ page.header.menu_icon }}\"></i>{% endif %}{{ page_menu }}</a></li>
                    {% endif %}
                  {% endif %}
                {% endif %}
              {% endfor %}

                {% for mitem in site.menu %}
                    <li class=\"nav-item active\">
                        {% set icon = mitem.icon ? '<i class=\"fa fa-fw fa-' ~ mitem.icon ~ '\"></i> ' : '' %}
                        <a class=\"nav-link\" href=\"{{ mitem.url }}\">{{ icon|raw }}{{ mitem.text }}</a>
                    </li>
                {% endfor %}

                {# custom menu items check and display - hibbittsdesign.org #}
                {% if theme_var('displaycustommenus.enabled') %}

                  {% for mitem in theme_var('custommenu') %}
                    <li class=\"nav-item active\" >
                      {% if mitem.target == \"_blank\" %}
                        {% set mclass = 'external-link' %}
                      {% endif %}
                      <a class=\"nav-link {{mclass}}\" href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
                        {% if mitem.icon %}
                          <i class=\"fa fa-{{ mitem.icon }}\"></i>{{ mitem.text }}
                        {% else %}
                          {{ mitem.text }}
                        {% endif %}
                      </a>
                    </li>
                  {% endfor %}
                {% endif %}

                {# check to display git sync link in menu - hibbittsdesign.org #}
                {% if theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty %}
                  <li class=\"nav-item active\" >
                      {% include 'partials/git_sync_repo_link.html.twig' with {linkinmenu: true} %}
                  </li>
                {% endif %}

                {% if config.plugins.login.enabled and grav.user.username %}
                    <li class=\"nav-item\"><span class=\"nav-link\"><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</span></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "partials/navigation.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/partials/navigation.html.twig");
    }
}
