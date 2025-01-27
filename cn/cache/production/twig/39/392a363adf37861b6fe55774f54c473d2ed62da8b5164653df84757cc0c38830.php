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

/* jumpbox.html */
class __TwigTemplate_812481cfda0fad338c977cf61c2b7af6355904ca782910b2ab99d230d97ad61f extends \Twig\Template
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
        echo "
<div class=\"action-bar actions-jump\">
\t";
        // line 3
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 4
            echo "\t<p class=\"jumpbox-return\">
\t\t<a href=\"";
            // line 5
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 6
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_FORUM");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 9
(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 10
            echo "\t<p class=\"jumpbox-return\">
\t\t<a href=\"";
            // line 11
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 12
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_INDEX");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 15
(isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 16
            echo "\t<p class=\"jumpbox-return\">
\t\t<a class=\"left-box arrow-";
            // line 17
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 18
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 21
(isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
            // line 22
            echo "\t<p class=\"jumpbox-return\">
\t\t<a class=\"left-box arrow-";
            // line 23
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 24
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_SEARCH_ADV");
            echo "</span>
\t\t</a>
\t</p>
\t";
        }
        // line 28
        echo "
\t";
        // line 29
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 30
            echo "\t<div class=\"jumpbox dropdown-container dropdown-container-right";
            if ( !(isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t\t<span title=\"";
            // line 31
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
            }
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t\t<span>";
            // line 32
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
            }
            echo "</span>
\t\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", []));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 39
                echo "\t\t\t\t";
                if (($this->getAttribute($context["jumpbox_forums"], "FORUM_ID", []) !=  -1)) {
                    // line 40
                    echo "\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["jumpbox_forums"], "LINK", []);
                    echo "\" class=\"";
                    if ($this->getAttribute($context["jumpbox_forums"], "level", [])) {
                        echo "jumpbox-sub-link";
                    } elseif ($this->getAttribute($context["jumpbox_forums"], "S_IS_CAT", [])) {
                        echo "jumpbox-cat-link";
                    } else {
                        echo "jumpbox-forum-link";
                    }
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "<span class=\"spacer\"></span>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <span>";
                    if ($this->getAttribute($context["jumpbox_forums"], "level", [])) {
                        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                            echo "&#8626;";
                        } else {
                            echo "&#8627;";
                        }
                        echo " &nbsp;";
                    }
                    echo " ";
                    echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", []);
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t";
        } else {
            // line 48
            echo "\t<br /><br />
\t";
        }
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 50,  206 => 48,  199 => 43,  193 => 42,  159 => 40,  156 => 39,  152 => 38,  137 => 32,  127 => 31,  118 => 30,  116 => 29,  113 => 28,  104 => 24,  96 => 23,  93 => 22,  91 => 21,  83 => 18,  77 => 17,  74 => 16,  72 => 15,  64 => 12,  58 => 11,  55 => 10,  53 => 9,  45 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "jumpbox.html", "");
    }
}
