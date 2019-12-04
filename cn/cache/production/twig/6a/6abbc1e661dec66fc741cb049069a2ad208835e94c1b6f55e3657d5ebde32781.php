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

/* acp_ranks.html */
class __TwigTemplate_970ff69bf2a62b49b5418a1e1a043cef3530c204c2e3e8706ce69bca50595566 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_ranks.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT"]) ? $context["S_EDIT"] : null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tfunction update_image(newimage)
\t\t{
\t\t\tdocument.getElementById('image').src = (newimage) ? \"";
            // line 13
            echo (isset($context["RANKS_PATH"]) ? $context["RANKS_PATH"] : null);
            echo "/\" + encodeURI(newimage) : \"./images/spacer.gif\";
\t\t}

\t// ]]>
\t</script>

\t<h1>";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_MANAGE_RANKS");
            echo "</h1>

\t<p>";
            // line 21
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_RANKS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_ranks\" method=\"post\" action=\"";
            // line 23
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t
\t<fieldset>
\t\t<legend>";
            // line 26
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_RANKS");
            echo "</legend>

\t";
            // line 28
            // line 29
            echo "
\t<dl>
\t\t<dt><label for=\"title\">";
            // line 31
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK_TITLE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"title\" type=\"text\" id=\"title\" value=\"";
            // line 32
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"rank_image\">";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK_IMAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"rank_image\" id=\"rank_image\" onchange=\"update_image(this.options[selectedIndex].value);\">";
            // line 36
            echo (isset($context["S_FILENAME_LIST"]) ? $context["S_FILENAME_LIST"] : null);
            echo "</select></dd>
\t\t<dd><img src=\"";
            // line 37
            echo (isset($context["RANK_IMAGE"]) ? $context["RANK_IMAGE"] : null);
            echo "\" id=\"image\" alt=\"\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"special_rank\">";
            // line 40
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK_SPECIAL");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input onclick=\"phpbb.toggleDisplay('posts', -1)\" type=\"radio\" class=\"radio\" name=\"special_rank\" value=\"1\" id=\"special_rank\"";
            // line 41
            if ((isset($context["S_SPECIAL_RANK"]) ? $context["S_SPECIAL_RANK"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input onclick=\"phpbb.toggleDisplay('posts', 1)\" type=\"radio\" class=\"radio\" name=\"special_rank\" value=\"0\"";
            // line 42
            if ( !(isset($context["S_SPECIAL_RANK"]) ? $context["S_SPECIAL_RANK"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<div id=\"posts\"";
            // line 44
            if ((isset($context["S_SPECIAL_RANK"]) ? $context["S_SPECIAL_RANK"] : null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t<dl>
\t\t<dt><label for=\"min_posts\">";
            // line 46
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK_MINIMUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"min_posts\" type=\"number\" id=\"min_posts\" min=\"0\" max=\"9999999999\" value=\"";
            // line 47
            echo (isset($context["MIN_POSTS"]) ? $context["MIN_POSTS"] : null);
            echo "\" /></dd>
\t</dl>
\t</div>

\t";
            // line 51
            // line 52
            echo "
\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"action\" value=\"save\" />

\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 56
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 57
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t\t";
            // line 58
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 64
            echo "
\t<h1>";
            // line 65
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_MANAGE_RANKS");
            echo "</h1>

\t<p>";
            // line 67
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_RANKS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_ranks\" method=\"post\" action=\"";
            // line 69
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_MANAGE_RANKS");
            echo "</legend>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t";
            // line 76
            // line 77
            echo "\t\t<th>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK_IMAGE");
            echo "</th>
\t\t<th>";
            // line 78
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK_TITLE");
            echo "</th>
\t\t<th>";
            // line 79
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK_MINIMUM");
            echo "</th>
\t\t";
            // line 80
            // line 81
            echo "\t\t<th>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "ranks", []));
            foreach ($context['_seq'] as $context["_key"] => $context["ranks"]) {
                // line 86
                echo "\t<tr>
\t\t";
                // line 87
                // line 88
                echo "\t\t<td style=\"text-align: center;\">";
                if ($this->getAttribute($context["ranks"], "S_RANK_IMAGE", [])) {
                    echo "<img src=\"";
                    echo $this->getAttribute($context["ranks"], "RANK_IMAGE", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["ranks"], "RANK_TITLE", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["ranks"], "RANK_TITLE", []);
                    echo "\" />";
                } else {
                    echo "&nbsp; - &nbsp;";
                }
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 89
                echo $this->getAttribute($context["ranks"], "RANK_TITLE", []);
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 90
                if ($this->getAttribute($context["ranks"], "S_SPECIAL_RANK", [])) {
                    echo "&nbsp; - &nbsp;";
                } else {
                    echo $this->getAttribute($context["ranks"], "MIN_POSTS", []);
                }
                echo "</td>
\t\t";
                // line 91
                // line 92
                echo "\t\t<td style=\"text-align: center;\"><a href=\"";
                echo $this->getAttribute($context["ranks"], "U_EDIT", []);
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["ranks"], "U_DELETE", []);
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ranks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t</tbody>
\t</table>

\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 99
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_RANK");
            echo "\" />
\t\t";
            // line 100
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        }
        // line 106
        echo "
";
        // line 107
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ranks.html", 107)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ranks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 107,  311 => 106,  302 => 100,  298 => 99,  292 => 95,  276 => 92,  275 => 91,  267 => 90,  263 => 89,  248 => 88,  247 => 87,  244 => 86,  240 => 85,  232 => 81,  231 => 80,  227 => 79,  223 => 78,  218 => 77,  217 => 76,  209 => 71,  204 => 69,  199 => 67,  194 => 65,  191 => 64,  182 => 58,  178 => 57,  174 => 56,  168 => 52,  167 => 51,  160 => 47,  155 => 46,  148 => 44,  139 => 42,  131 => 41,  126 => 40,  120 => 37,  116 => 36,  111 => 35,  105 => 32,  100 => 31,  96 => 29,  95 => 28,  90 => 26,  84 => 23,  79 => 21,  74 => 19,  65 => 13,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_ranks.html", "");
    }
}
