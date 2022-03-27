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

/* partials/git_sync_repo_link.html.twig */
class __TwigTemplate_438b0eaef46704ac6da1d479a4f993ad226604522d5463e33c217b969d3bd3e9 extends \Twig\Template
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
        if (($context["linkinmenu"] ?? null)) {
            // line 2
            echo "  ";
            $context["link_classes"] = "newwindow external-link nav-link";
        } else {
            // line 4
            echo "  ";
            $context["link_classes"] = "newwindow external-link";
        }
        // line 6
        echo "
";
        // line 7
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "git_sync_repo_link")) {
            // line 8
            echo "  ";
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", []) &&  !($context["presentationslides"] ?? null))) {
                // line 9
                echo "    ";
                $context["git_repo_link_url"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "git_sync_repo_link");
                // line 10
                echo "    ";
                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_icon"))) {
                    // line 11
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                        // line 12
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 13
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                        // line 14
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 15
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                        // line 16
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 17
                        echo "      ";
                    } else {
                        // line 18
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 19
                        echo "      ";
                    }
                    // line 20
                    echo "    ";
                } else {
                    // line 21
                    echo "      ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_icon");
                    // line 22
                    echo "    ";
                }
                // line 23
                echo "    ";
                if ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_of_git_sync_repo_link")))) {
                    // line 24
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 25
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 26
                        echo "      ";
                    } else {
                        // line 27
                        echo "        ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text"))) {
                            // line 28
                            echo "          ";
                            $context["git_repo_link_text"] = "View Content Repository";
                            // line 29
                            echo "        ";
                        } else {
                            // line 30
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 31
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text");
                                // line 32
                                echo "          ";
                            } else {
                                // line 33
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text");
                                // line 34
                                echo "          ";
                            }
                            // line 35
                            echo "        ";
                        }
                        // line 36
                        echo "      ";
                    }
                    // line 37
                    echo "      ";
                    if ( !($context["presentationslides"] ?? null)) {
                        // line 38
                        echo "        <a class=\"";
                        echo ($context["link_classes"] ?? null);
                        echo "\" href=\"";
                        echo ($context["git_repo_link_url"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\">
          <i class=\"fa fa-";
                        // line 39
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "</a>
      ";
                    }
                    // line 41
                    echo "    ";
                } else {
                    // line 42
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 43
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 44
                        echo "      ";
                    } elseif (($context["presentationpagepath"] ?? null)) {
                        // line 45
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . ($context["presentationpagepath"] ?? null));
                        // line 46
                        echo "      ";
                    } else {
                        // line 47
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 48
                        echo "      ";
                    }
                    // line 49
                    echo "      ";
                    if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                        // line 50
                        echo "        ";
                        $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                        // line 51
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                        // line 53
                        echo "      ";
                    }
                    // line 54
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 55
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 56
                        echo "      ";
                    } else {
                        // line 57
                        echo "        ";
                        if ( !($context["presentationslides"] ?? null)) {
                            // line 58
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text"))) {
                                // line 59
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit this Page";
                                // line 60
                                echo "          ";
                            } else {
                                // line 61
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text");
                                // line 62
                                echo "          ";
                            }
                            // line 63
                            echo "        ";
                        } else {
                            // line 64
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text"))) {
                                // line 65
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit these Slides";
                                // line 66
                                echo "          ";
                            } else {
                                // line 67
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text");
                                // line 68
                                echo "          ";
                            }
                            // line 69
                            echo "        ";
                        }
                        // line 70
                        echo "      ";
                    }
                    // line 71
                    echo "      ";
                    if (($context["presentationslides"] ?? null)) {
                        echo "(";
                    }
                    echo "<a class=\"";
                    echo ($context["link_classes"] ?? null);
                    echo "\" href=\"";
                    echo ($context["git_repo_link_url"] ?? null);
                    echo "\" title=\"";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "\" target=\"_blank\"><i class=\"fa fa-";
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "</a>";
                    if (($context["presentationslides"] ?? null)) {
                        echo ")";
                    }
                    // line 72
                    echo "    ";
                }
                // line 73
                echo "  ";
            }
        } else {
            // line 75
            echo "  ";
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []))))) {
                // line 76
                echo "    ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", []) . "/admin/plugins/git-sync");
                // line 77
                echo "    ";
                if ( !($context["presentationslides"] ?? null)) {
                    // line 78
                    echo "      <a class=\"";
                    echo ($context["link_classes"] ?? null);
                    echo "\" href=\"";
                    echo ($context["admin_panel_appearance_url"] ?? null);
                    echo "\" title=\"Setup Git Sync\">
        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    ";
                }
                // line 81
                echo "  ";
            } else {
                // line 82
                echo "    ";
                if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", []) &&  !($context["presentationslides"] ?? null))) {
                    // line 83
                    echo "      ";
                    $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []);
                    // line 84
                    echo "      ";
                    $context["git_sync_repo_link"] = twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]);
                    // line 85
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 86
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 87
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 88
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 89
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 90
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 91
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 92
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 93
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("src/master", ["user/" => "/"]));
                        // line 94
                        echo "      ";
                    } else {
                        // line 95
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 96
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 97
                        echo "      ";
                    }
                    // line 98
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 99
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 100
                        echo "      ";
                    } elseif (($context["presentationpagepath"] ?? null)) {
                        // line 101
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . ($context["presentationpagepath"] ?? null));
                        // line 102
                        echo "      ";
                    } else {
                        // line 103
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 104
                        echo "      ";
                    }
                    // line 105
                    echo "      ";
                    if ( !twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_icon"))) {
                        // line 106
                        echo "        ";
                        $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_icon");
                        // line 107
                        echo "      ";
                    }
                    // line 108
                    echo "      ";
                    if ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_of_git_sync_repo_link")))) {
                        // line 109
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 110
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 111
                            echo "        ";
                        } else {
                            // line 112
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "git_sync_repo_link_text"))) {
                                // line 113
                                echo "            ";
                                $context["git_repo_link_text"] = "View Content Repository";
                                // line 114
                                echo "          ";
                            } else {
                                // line 115
                                echo "            ";
                                if ( !($context["presentationslides"] ?? null)) {
                                    // line 116
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text");
                                    // line 117
                                    echo "            ";
                                } else {
                                    // line 118
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text");
                                    // line 119
                                    echo "            ";
                                }
                                // line 120
                                echo "          ";
                            }
                            // line 121
                            echo "        ";
                        }
                        // line 122
                        echo "        ";
                        if ( !($context["presentationslides"] ?? null)) {
                            // line 123
                            echo "          <a class=\"";
                            echo ($context["link_classes"] ?? null);
                            echo "\" href=\"";
                            echo ($context["git_sync_repo_link"] ?? null);
                            echo "\" title=\"";
                            echo ($context["git_repo_link_text"] ?? null);
                            echo "\" target=\"_blank\">
            <i class=\"fa fa-";
                            // line 124
                            echo ($context["git_repo_link_icon"] ?? null);
                            echo "\" aria-hidden=\"true\"></i>";
                            echo ($context["git_repo_link_text"] ?? null);
                            echo "</a>
        ";
                        }
                        // line 126
                        echo "      ";
                    } else {
                        // line 127
                        echo "        ";
                        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                            // line 128
                            echo "          ";
                            $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                            // line 129
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                            // line 131
                            echo "        ";
                        }
                        // line 132
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 133
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 134
                            echo "        ";
                        } else {
                            // line 135
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 136
                                echo "            ";
                                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text"))) {
                                    // line 137
                                    echo "              ";
                                    $context["git_repo_link_text"] = "Edit this Page";
                                    // line 138
                                    echo "            ";
                                } else {
                                    // line 139
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text");
                                    // line 140
                                    echo "            ";
                                }
                                // line 141
                                echo "          ";
                            } else {
                                // line 142
                                echo "            ";
                                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text"))) {
                                    // line 143
                                    echo "              ";
                                    $context["git_repo_link_text"] = "Edit these Slides";
                                    // line 144
                                    echo "            ";
                                } else {
                                    // line 145
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text");
                                    // line 146
                                    echo "            ";
                                }
                                // line 147
                                echo "          ";
                            }
                            // line 148
                            echo "        ";
                        }
                        // line 149
                        echo "        ";
                        if (($context["presentationslides"] ?? null)) {
                            echo "(";
                        }
                        echo "<a class=\"";
                        echo ($context["link_classes"] ?? null);
                        echo "\" href=\"";
                        echo ($context["git_repo_link_url"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\"><i class=\"fa fa-";
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "</a>";
                        if (($context["presentationslides"] ?? null)) {
                            echo ")";
                        }
                        // line 150
                        echo "      ";
                    }
                    // line 151
                    echo "    ";
                }
                // line 152
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/git_sync_repo_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 152,  508 => 151,  505 => 150,  486 => 149,  483 => 148,  480 => 147,  477 => 146,  474 => 145,  471 => 144,  468 => 143,  465 => 142,  462 => 141,  459 => 140,  456 => 139,  453 => 138,  450 => 137,  447 => 136,  444 => 135,  441 => 134,  438 => 133,  435 => 132,  432 => 131,  430 => 129,  428 => 128,  425 => 127,  422 => 126,  415 => 124,  406 => 123,  403 => 122,  400 => 121,  397 => 120,  394 => 119,  391 => 118,  388 => 117,  385 => 116,  382 => 115,  379 => 114,  376 => 113,  373 => 112,  370 => 111,  367 => 110,  364 => 109,  361 => 108,  358 => 107,  355 => 106,  352 => 105,  349 => 104,  346 => 103,  343 => 102,  340 => 101,  337 => 100,  334 => 99,  331 => 98,  328 => 97,  325 => 96,  322 => 95,  319 => 94,  316 => 93,  313 => 92,  310 => 91,  307 => 90,  304 => 89,  301 => 88,  298 => 87,  295 => 86,  292 => 85,  289 => 84,  286 => 83,  283 => 82,  280 => 81,  271 => 78,  268 => 77,  265 => 76,  262 => 75,  258 => 73,  255 => 72,  236 => 71,  233 => 70,  230 => 69,  227 => 68,  224 => 67,  221 => 66,  218 => 65,  215 => 64,  212 => 63,  209 => 62,  206 => 61,  203 => 60,  200 => 59,  197 => 58,  194 => 57,  191 => 56,  188 => 55,  185 => 54,  182 => 53,  180 => 51,  178 => 50,  175 => 49,  172 => 48,  169 => 47,  166 => 46,  163 => 45,  160 => 44,  157 => 43,  154 => 42,  151 => 41,  144 => 39,  135 => 38,  132 => 37,  129 => 36,  126 => 35,  123 => 34,  120 => 33,  117 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  43 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if linkinmenu %}
  {% set link_classes = \"newwindow external-link nav-link\" %}
{% else %}
  {% set link_classes = \"newwindow external-link\" %}
{% endif %}

{% if theme_var('git_sync_repo_link') %}
  {% if not (page.header.hide_git_sync_repo_link and not (presentationslides)) %}
    {% set git_repo_link_url = theme_var('git_sync_repo_link') %}
    {% if theme_var('custom_git_sync_repo_link_icon') is empty %}
      {% if 'github' in git_repo_link_url %}
        {% set git_repo_link_icon = \"github\" %}
      {% elseif 'gitlab' in git_repo_link_url %}
        {% set git_repo_link_icon = \"gitlab\" %}
      {% elseif 'bitbucket' in git_repo_link_url %}
        {% set git_repo_link_icon = \"bitbucket\" %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
      {% endif %}
    {% else %}
      {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
    {% endif %}
    {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link') is empty %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if theme_var('custom_git_sync_repo_link_text') is empty %}
          {% set git_repo_link_text = 'View Content Repository' %}
        {% else %}
          {% if not presentationslides %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if not presentationslides %}
        <a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
          <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
      {% endif %}
    {% else %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% elseif presentationpagepath %}
        {% set git_repo_link_url = git_repo_link_url ~ presentationpagepath %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if (page.children.count) and (not presentationslides) %}
        {% set git_repo_link_url = (git_repo_link_url | replace({
          ('/' ~ page.template ~ '.md'): '/'
        })) %}
      {% endif %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if not presentationslides %}
          {% if theme_var('custom_git_sync_repo_link_text') is empty %}
            {% set git_repo_link_text = 'Edit this Page' %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% endif %}
        {% else %}
          {% if theme_var('custom_git_sync_repo_presentation_link_text') is empty %}
            {% set git_repo_link_text = 'Edit these Slides' %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
    {% endif %}
  {% endif %}
{% else %}
  {% if not (config.plugins['git-sync'].enabled) or (config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty) %}
    {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
    {% if not presentationslides %}
      <a class=\"{{ link_classes }}\" href=\"{{ admin_panel_appearance_url }}\" title=\"Setup Git Sync\">
        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    {% endif %}
  {% else %}
    {% if not (page.header.hide_git_sync_repo_link and not (presentationslides)) %}
      {% set git_sync_repo = config.plugins['git-sync'].repository %}
      {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
      {% if 'github' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"github\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% elseif 'gitlab' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"gitlab\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% elseif 'bitbucket' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"bitbucket\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'src/master' | replace({'user/': '/'}) %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% endif %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% elseif presentationpagepath %}
        {% set git_repo_link_url = git_repo_link_url ~ presentationpagepath %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if theme_var('custom_git_sync_repo_link_icon') is not empty %}
        {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
      {% endif %}
      {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link') is empty %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if theme_var('git_sync_repo_link_text') is empty %}
            {% set git_repo_link_text = 'View Content Repository' %}
          {% else %}
            {% if not presentationslides %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if not presentationslides %}
          <a class=\"{{ link_classes }}\" href=\"{{ git_sync_repo_link}}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
            <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
        {% endif %}
      {% else %}
        {% if (page.children.count) and (not presentationslides) %}
          {% set git_repo_link_url = (git_repo_link_url | replace({
            ('/' ~ page.template ~ '.md'): '/'
          })) %}
        {% endif %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if not presentationslides %}
            {% if theme_var('custom_git_sync_repo_link_text') is empty %}
              {% set git_repo_link_text = 'Edit this Page' %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% endif %}
          {% else %}
            {% if theme_var('custom_git_sync_repo_presentation_link_text') is empty %}
              {% set git_repo_link_text = 'Edit these Slides' %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
      {% endif %}
    {% endif %}
  {% endif %}
{% endif %}
", "partials/git_sync_repo_link.html.twig", "/var/www/sotabrasil.com.br/user/themes/bootstrap4-open-matter/templates/partials/git_sync_repo_link.html.twig");
    }
}
