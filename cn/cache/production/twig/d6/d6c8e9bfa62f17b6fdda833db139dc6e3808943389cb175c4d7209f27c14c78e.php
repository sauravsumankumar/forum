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

/* ucp_header.html */
class __TwigTemplate_66f951754ae4a1a20f94251411689888efdbdbfad79481f203be8aa7ead35ea5 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"ucp-title\">";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
        echo "</h2>

<div id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1", []));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 8
            echo "\t\t<li class=\"tab";
            if ($this->getAttribute($context["t_block1"], "S_SELECTED", [])) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["t_block1"], "U_TITLE", []);
            echo "\">";
            echo $this->getAttribute($context["t_block1"], "L_TITLE", []);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ul>
</div>

";
        // line 13
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 14
            echo "<form id=\"postform\" method=\"post\" action=\"";
            echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
            echo "\"";
            echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
            echo ">
";
        }
        // line 16
        echo "
<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\" class=\"cp-menu\">
\t\t<div id=\"navigation\" class=\"navigation\" role=\"navigation\">

\t\t";
        // line 25
        if ((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
            // line 26
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", []));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 27
                echo "\t\t\t\t";
                if (((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) &&  !$this->getAttribute($context["t_block2"], "S_LAST_ROW", []))) {
                    // line 28
                    echo "\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 29
                    if ($this->getAttribute($context["t_block2"], "S_SELECTED", [])) {
                        // line 30
                        echo "\t\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", []);
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", []);
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", []);
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", []);
                        echo "</span></a></li>
\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                // line 36
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
\t\t\t<hr />
\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "folder", []));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 40
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_FIRST_ROW", [])) {
                    echo "<ul>";
                }
                // line 41
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_CUR_FOLDER", [])) {
                    // line 42
                    echo "\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", []);
                    echo "\">";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", []) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", []);
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", []);
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", []);
                    }
                    echo "</a></li>
\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", []);
                    echo "\"><span>";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", []) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", []);
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", []);
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", []);
                    }
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_LAST_ROW", [])) {
                    echo "</ul>";
                }
                // line 47
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t<hr />
\t\t";
        }
        // line 50
        echo "
\t\t\t<ul>
\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", []));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 53
            echo "\t\t\t";
            if ((((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && $this->getAttribute($context["t_block2"], "S_LAST_ROW", [])) ||  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null))) {
                // line 54
                echo "\t\t\t\t";
                if ($this->getAttribute($context["t_block2"], "S_SELECTED", [])) {
                    // line 55
                    echo "\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", []);
                    echo "\"><span>";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", []);
                    echo "</span></a></li>
\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", []);
                    echo "\"><span>";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", []);
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 59
                echo "\t\t\t";
            }
            // line 60
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t</ul>
\t\t</div>

\t\t";
        // line 64
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", [])) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", [])))) {
            // line 65
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 69
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FRIENDS");
            echo "</dt>

\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", []));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 72
                echo "\t\t\t\t\t<dd class=\"friend-online\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FRIENDS_ONLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_online"], "USERNAME_FULL", []);
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo " <input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_online"], "USER_ID", []);
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                if (($this->getAttribute($context["friends_online"], "S_LAST_ROW", []) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", [])))) {
                    echo "<hr />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
\t\t\t\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", []));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 76
                echo "\t\t\t\t\t<dd class=\"friend-offline\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FRIENDS_OFFLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_offline"], "USERNAME_FULL", []);
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo "<input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_offline"], "USER_ID", []);
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 83
        echo "
\t\t";
        // line 84
        if ((isset($context["S_SHOW_COLOUR_LEGEND"]) ? $context["S_SHOW_COLOUR_LEGEND"] : null)) {
            // line 85
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 89
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_COLOURS");
            echo "</dt>
\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_colour_info", []));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                // line 91
                echo "\t\t\t\t\t<dd class=\"pm-legend";
                if ($this->getAttribute($context["pm_colour_info"], "CLASS", [])) {
                    echo " ";
                    echo $this->getAttribute($context["pm_colour_info"], "CLASS", []);
                }
                echo "\">";
                if ($this->getAttribute($context["pm_colour_info"], "IMG", [])) {
                    echo $this->getAttribute($context["pm_colour_info"], "IMG", []);
                    echo " ";
                }
                echo $this->getAttribute($context["pm_colour_info"], "LANG", []);
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 98
        echo "
\t</div>

\t<div id=\"cp-main\" class=\"cp-main ucp-main panel-container\">
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 98,  354 => 93,  336 => 91,  332 => 90,  328 => 89,  322 => 85,  320 => 84,  317 => 83,  310 => 78,  291 => 76,  287 => 75,  284 => 74,  262 => 72,  258 => 71,  253 => 69,  247 => 65,  245 => 64,  240 => 61,  234 => 60,  231 => 59,  223 => 57,  215 => 55,  212 => 54,  209 => 53,  205 => 52,  201 => 50,  197 => 48,  191 => 47,  186 => 46,  170 => 44,  154 => 42,  151 => 41,  146 => 40,  142 => 39,  138 => 37,  132 => 36,  128 => 34,  120 => 32,  112 => 30,  110 => 29,  107 => 28,  104 => 27,  99 => 26,  97 => 25,  86 => 16,  78 => 14,  76 => 13,  71 => 10,  56 => 8,  52 => 7,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_header.html", "");
    }
}
