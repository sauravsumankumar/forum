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

/* ucp_main_bookmarks.html */
class __TwigTemplate_1caddfaaa17cd0013bca837301a5bd28d4ef56f164b975e69aa3b259843db385 extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_main_bookmarks.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOKMARKS_EXPLAIN");
        echo "</p>

";
        // line 12
        if ((isset($context["S_NO_DISPLAY_BOOKMARKS"]) ? $context["S_NO_DISPLAY_BOOKMARKS"] : null)) {
            // line 13
            echo "\t<p class=\"error\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOKMARKS_DISABLED");
            echo "</p>
";
        } else {
            // line 15
            echo "
";
            // line 16
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", []))) {
                // line 17
                echo "\t<ul class=\"topiclist missing-column\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"row-item\">
\t\t\t\t<dt><div class=\"list-inner\">";
                // line 20
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOKMARKS");
                echo "</div></dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t<dd class=\"mark\">";
                // line 22
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist cplist missing-column\">

\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", []));
                foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                    // line 29
                    echo "\t\t<li class=\"row";
                    if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                        echo " reported";
                    } elseif (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", []) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t";
                    // line 30
                    if ($this->getAttribute($context["topicrow"], "S_DELETED_TOPIC", [])) {
                        // line 31
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\"><strong>";
                        // line 32
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETED_TOPIC");
                        echo "</strong></div></dt>
\t\t\t\t\t<dd class=\"lastpost\"><span>&nbsp;</span></dd>
\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                        // line 34
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", []);
                        echo "]\" id=\"t";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", []);
                        echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t";
                    } else {
                        // line 37
                        echo "\t\t\t<dl class=\"row-item ";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", []);
                        echo "\">
\t\t\t\t<dt";
                        // line 38
                        if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", [])) {
                            echo " style=\"background-image: url(";
                            echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                            echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", []);
                            echo "); background-repeat: no-repeat;\"";
                        }
                        echo " title=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", []);
                        echo "\">
\t\t\t\t\t";
                        // line 39
                        if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", [])) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                            echo "\" class=\"row-item-link\"></a>";
                        }
                        // line 40
                        echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                        // line 41
                        if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", [])) {
                            // line 42
                            echo "\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                            echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 43
                            echo (isset($context["NEW_POST"]) ? $context["NEW_POST"] : null);
                            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                        }
                        // line 45
                        echo "<a href=\"";
                        echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", []);
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", []);
                        echo "</a>
\t\t\t\t\t\t";
                        // line 46
                        if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", []) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", []))) {
                            // line 47
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", []);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                            echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 48
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                        }
                        // line 51
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                            // line 52
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", []);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                            echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 53
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                        }
                        // line 56
                        echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
                        // line 57
                        if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", []))) {
                            // line 58
                            echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                            // line 60
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 61
                                echo "\t\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["pagination"], "S_IS_PREV", [])) {
                                    // line 62
                                    echo "\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", [])) {
                                    echo "<li class=\"active\"><span>";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 63
$context["pagination"], "S_IS_ELLIPSIS", [])) {
                                    echo "<li class=\"ellipsis\"><span>";
                                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 64
$context["pagination"], "S_IS_NEXT", [])) {
                                    // line 65
                                    echo "\t\t\t\t\t\t\t\t";
                                } else {
                                    echo "<li><a href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                                }
                                // line 67
                                echo "\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 68
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                        // line 72
                        if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", [])) {
                            echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                        }
                        // line 73
                        echo "\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", []);
                        echo " &raquo; ";
                        echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", []);
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                        // line 76
                        if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", [])) {
                            echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo " ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
                        echo " &laquo;
\t\t\t\t\t\t\t<a href=\"";
                        // line 78
                        echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
                        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                        // line 82
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo " </dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
                        echo "
\t\t\t\t\t<a href=\"";
                        // line 83
                        echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                        echo "\">
\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 84
                        echo (isset($context["VIEW_LATEST_POST"]) ? $context["VIEW_LATEST_POST"] : null);
                        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<br />";
                        // line 86
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
                        echo "</span>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                        // line 88
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", []);
                        echo "]\" id=\"t";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", []);
                        echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
                    }
                    // line 91
                    echo "\t\t</li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "\t</ul>

\t<div class=\"action-bar bar-bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
                // line 97
                echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                echo "
\t\t\t";
                // line 98
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", []))) {
                    // line 99
                    echo "\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_main_bookmarks.html", 99)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 100
                    echo "\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t &bull; ";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t\t";
                }
                // line 103
                echo "\t\t</div>
\t</div>

";
            } else {
                // line 107
                echo "\t<p><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BOOKMARKS");
                echo "</strong></p>
";
            }
            // line 109
            echo "
";
        }
        // line 111
        echo "
\t</div>
</div>

";
        // line 115
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", [])) &&  !(isset($context["S_NO_DISPLAY_BOOKMARKS"]) ? $context["S_NO_DISPLAY_BOOKMARKS"] : null))) {
            // line 116
            echo "\t<fieldset class=\"display-actions\">
\t\t<input type=\"submit\" name=\"unbookmark\" value=\"";
            // line 117
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_BOOKMARK_MARKED");
            echo "\" class=\"button2\" />
\t\t<div><a href=\"#\" onclick=\"marklist('ucp', '', true); return false;\">";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ucp', '', false); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 119
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
";
        }
        // line 122
        echo "</form>

";
        // line 124
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_bookmarks.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_bookmarks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 124,  419 => 122,  413 => 119,  407 => 118,  403 => 117,  400 => 116,  398 => 115,  392 => 111,  388 => 109,  382 => 107,  376 => 103,  370 => 101,  367 => 100,  354 => 99,  352 => 98,  348 => 97,  342 => 93,  335 => 91,  327 => 88,  322 => 86,  317 => 84,  311 => 83,  303 => 82,  292 => 78,  283 => 77,  279 => 76,  268 => 73,  264 => 72,  261 => 71,  256 => 68,  250 => 67,  240 => 65,  238 => 64,  232 => 63,  225 => 62,  222 => 61,  218 => 60,  214 => 58,  212 => 57,  209 => 56,  203 => 53,  196 => 52,  193 => 51,  187 => 48,  180 => 47,  178 => 46,  171 => 45,  165 => 43,  160 => 42,  158 => 41,  155 => 40,  149 => 39,  138 => 38,  133 => 37,  125 => 34,  120 => 32,  117 => 31,  115 => 30,  104 => 29,  100 => 28,  91 => 22,  87 => 21,  83 => 20,  78 => 17,  76 => 16,  73 => 15,  67 => 13,  65 => 12,  60 => 10,  52 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_main_bookmarks.html", "");
    }
}
