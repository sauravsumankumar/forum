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

/* acp_words.html */
class __TwigTemplate_8d0bec55eb8265ced88a19c91c2967f8908dd61578ff125607490e612a25b8e1 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_words.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT_WORD"]) ? $context["S_EDIT_WORD"] : null)) {
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

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_WORDS");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_WORDS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_words\" method=\"post\" action=\"";
            // line 13
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_WORD");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"word\">";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WORD");
            echo "</label></dt>
\t\t\t<dd><input id=\"word\" type=\"text\" name=\"word\" value=\"";
            // line 19
            echo (isset($context["WORD"]) ? $context["WORD"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"replacement\">";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLACEMENT");
            echo "</label></dt>
\t\t\t<dd><input id=\"replacement\" type=\"text\" name=\"replacement\" value=\"";
            // line 23
            echo (isset($context["REPLACEMENT"]) ? $context["REPLACEMENT"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t";
            // line 25
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"save\" value=\"";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t\t";
            // line 30
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 36
            echo "
\t<h1>";
            // line 37
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_WORDS");
            echo "</h1>

\t<p>";
            // line 39
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_WORDS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_words\" method=\"post\" action=\"";
            // line 41
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 44
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_WORDS");
            echo "</legend>
\t<p class=\"quick\">
\t\t";
            // line 46
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 47
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_WORD");
            echo "\" />
\t</p>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 53
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WORD");
            echo "</th>
\t\t<th>";
            // line 54
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLACEMENT");
            echo "</th>
\t\t<th>";
            // line 55
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "words", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["words"]) {
                // line 60
                echo "\t<tr>
\t\t<td style=\"text-align: center;\">";
                // line 61
                echo $this->getAttribute($context["words"], "WORD", []);
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 62
                echo $this->getAttribute($context["words"], "REPLACEMENT", []);
                echo "</td>
\t\t<td>&nbsp;<a href=\"";
                // line 63
                echo $this->getAttribute($context["words"], "U_EDIT", []);
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a>&nbsp;&nbsp;<a href=\"";
                echo $this->getAttribute($context["words"], "U_DELETE", []);
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a>&nbsp;</td>
\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 66
                echo "\t<tr class=\"row3\">
\t\t<td colspan=\"3\">";
                // line 67
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_NO_ITEMS");
                echo "</td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['words'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t</tbody>
\t</table>
\t";
            // line 72
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>
";
        }
        // line 76
        echo "
";
        // line 77
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_words.html", 77)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_words.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 77,  229 => 76,  222 => 72,  218 => 70,  209 => 67,  206 => 66,  192 => 63,  188 => 62,  184 => 61,  181 => 60,  176 => 59,  169 => 55,  165 => 54,  161 => 53,  152 => 47,  148 => 46,  143 => 44,  137 => 41,  132 => 39,  127 => 37,  124 => 36,  115 => 30,  111 => 29,  107 => 28,  101 => 25,  96 => 23,  92 => 22,  86 => 19,  82 => 18,  77 => 16,  71 => 13,  66 => 11,  61 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_words.html", "");
    }
}
