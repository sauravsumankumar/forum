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

/* acp_prune_forums.html */
class __TwigTemplate_67a249b40b20294aecad2298f43ab40dba92e7d0388f9f3625db23c8921f6402 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_prune_forums.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_PRUNED"]) ? $context["S_PRUNED"] : null)) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PRUNE");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_SUCCESS");
            echo "</p>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
            echo "</th>
\t\t<th>";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_PRUNED");
            echo "</th>
\t\t<th>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_PRUNED");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pruned", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pruned"]) {
                // line 21
                echo "\t<tr>
\t\t<td style=\"text-align: center;\">";
                // line 22
                echo $this->getAttribute($context["pruned"], "FORUM_NAME", []);
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 23
                echo $this->getAttribute($context["pruned"], "NUM_TOPICS", []);
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 24
                echo $this->getAttribute($context["pruned"], "NUM_POSTS", []);
                echo "</td>
\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "\t\t<tr>
\t\t\t<td colspan=\"3\" class=\"row3\" style=\"text-align: center;\">";
                // line 28
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PRUNE");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pruned'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t</tbody>
\t</table>

";
        } elseif (        // line 34
(isset($context["S_SELECT_FORUM"]) ? $context["S_SELECT_FORUM"] : null)) {
            // line 35
            echo "
\t<h1>";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PRUNE_FORUMS");
            echo "</h1>

\t<p>";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PRUNE_FORUMS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_prune\" method=\"post\" action=\"";
            // line 40
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t
\t<fieldset>
\t\t<legend>";
            // line 43
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_FORUM");
            echo "</legend>
\t\t<p>";
            // line 44
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUMS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt>";
            // line 46
            echo "<label for=\"forum\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>";
            echo "</dt>
\t\t<dd><select id=\"forum\" name=\"f[]\" multiple=\"multiple\" size=\"10\">";
            // line 47
            echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
            echo "</select></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"all_forums\" value=\"1\" /> ";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
            echo "</label></dd>
\t</dl>
\t
\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUM");
            echo "\" />
\t</p>
\t</fieldset>

\t</form>

";
        } else {
            // line 59
            echo "
\t<a href=\"";
            // line 60
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 62
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PRUNE_FORUMS");
            echo "</h1>

\t<p>";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PRUNE_FORUMS_EXPLAIN");
            echo "</p>

\t<h2>";
            // line 66
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
            echo "</h2>

\t<p>";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECTED_FORUMS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo (isset($context["FORUM_LIST"]) ? $context["FORUM_LIST"] : null);
            echo "</p>

\t<form id=\"acp_prune\" method=\"post\" action=\"";
            // line 70
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 73
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PRUNE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"prune_days\">";
            // line 75
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_NOT_POSTED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"number\" id=\"prune_days\" name=\"prune_days\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"prune_vieweddays\">";
            // line 79
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_NOT_VIEWED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"number\" id=\"prune_vieweddays\" name=\"prune_vieweddays\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"polls\">";
            // line 83
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_OLD_POLLS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_OLD_POLLS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"1\" /> ";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"polls\" name=\"prune_old_polls\" value=\"0\" checked=\"checked\" /> ";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"announce\">";
            // line 88
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_ANNOUNCEMENTS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"1\" /> ";
            // line 89
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"announce\" name=\"prune_announce\" value=\"0\" checked=\"checked\" /> ";
            // line 90
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sticky\">";
            // line 93
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRUNE_STICKY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"1\" /> ";
            // line 94
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"sticky\" name=\"prune_sticky\" value=\"0\" checked=\"checked\" /> ";
            // line 95
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>

\t";
            // line 98
            // line 99
            echo "
\t<p class=\"quick\">
\t\t";
            // line 101
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t";
            // line 102
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 103
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>
\t</form>

";
        }
        // line 109
        echo "
";
        // line 110
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_prune_forums.html", 110)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_prune_forums.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 110,  310 => 109,  301 => 103,  297 => 102,  293 => 101,  289 => 99,  288 => 98,  282 => 95,  278 => 94,  273 => 93,  267 => 90,  263 => 89,  258 => 88,  252 => 85,  248 => 84,  241 => 83,  233 => 79,  225 => 75,  220 => 73,  214 => 70,  206 => 68,  201 => 66,  196 => 64,  191 => 62,  182 => 60,  179 => 59,  169 => 52,  162 => 48,  158 => 47,  151 => 46,  146 => 44,  142 => 43,  136 => 40,  131 => 38,  126 => 36,  123 => 35,  121 => 34,  116 => 31,  107 => 28,  104 => 27,  96 => 24,  92 => 23,  88 => 22,  85 => 21,  80 => 20,  73 => 16,  69 => 15,  65 => 14,  57 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_prune_forums.html", "");
    }
}
