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

/* acp_modules.html */
class __TwigTemplate_902bcd55dd3be5ecf917b397a6242bdb327ea5fdae221edfb7ad2648b9fc0c3c extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_modules.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT_MODULE"]) ? $context["S_EDIT_MODULE"] : null)) {
            // line 6
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tfunction display_options(value)
\t\t{
\t\t\tif (value == 'category')
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('modoptions', -1);
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('modoptions', 1);
\t\t\t}
\t\t}

\t\tfunction display_modes(value)
\t\t{
\t\t\t// Find the old select tag
\t\t\tvar item = document.getElementById('module_mode');

\t\t\t// Create the new select tag
\t\t\tvar new_node = document.createElement('select');
\t\t\tnew_node.setAttribute('id', 'module_mode');
\t\t\tnew_node.setAttribute('name', 'module_mode');

\t\t\t// Substitute it for the old one
\t\t\titem.parentNode.replaceChild(new_node, item);

\t\t\t// Reset the variable
\t\t\titem = document.getElementById('module_mode');

\t\t\tvar j = 0;
";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "m_names", []));
            foreach ($context['_seq'] as $context["_key"] => $context["m_names"]) {
                // line 39
                echo "\t\t
\t\t\tif (value == '";
                // line 40
                echo $this->getAttribute($context["m_names"], "A_NAME", []);
                echo "')
\t\t\t{
\t";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["m_names"], "modes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["modes"]) {
                    // line 43
                    echo "\t\t\t\titem.options[j] = new Option('";
                    echo $this->getAttribute($context["modes"], "A_VALUE", []);
                    echo "');
\t\t\t\titem.options[j].value = '";
                    // line 44
                    echo $this->getAttribute($context["modes"], "A_OPTION", []);
                    echo "';
\t\t\t\tj++;
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modes'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t}
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m_names'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
\t\t\t// select first item
\t\t\titem.options[0].selected = true;
\t\t}

\t// ]]>
\t</script>

\t<a href=\"";
            // line 57
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 59
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo " :: ";
            echo (isset($context["MODULENAME"]) ? $context["MODULENAME"] : null);
            echo "</h1>

\t<p>";
            // line 61
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_MODULE_EXPLAIN");
            echo "</p>

\t";
            // line 63
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 64
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 65
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 66
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 69
            echo "
\t<form id=\"moduleedit\" method=\"post\" action=\"";
            // line 70
            echo (isset($context["U_EDIT_ACTION"]) ? $context["U_EDIT_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 73
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GENERAL_OPTIONS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"module_langname\">";
            // line 75
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODULE_LANGNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br />
\t\t<span>";
            // line 76
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODULE_LANGNAME_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"module_langname\" type=\"text\" class=\"text medium\" id=\"module_langname\" value=\"";
            // line 77
            echo (isset($context["MODULE_LANGNAME"]) ? $context["MODULE_LANGNAME"] : null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"module_type\">";
            // line 80
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODULE_TYPE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"module_type\" id=\"module_type\" onchange=\"display_options(this.value);\"><option value=\"category\"";
            // line 81
            if ((isset($context["S_IS_CAT"]) ? $context["S_IS_CAT"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CATEGORY");
            echo "</option><option value=\"module\"";
            if ( !(isset($context["S_IS_CAT"]) ? $context["S_IS_CAT"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODULE");
            echo "</option></select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"parent_id\">";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARENT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"module_parent_id\" id=\"parent_id\">";
            // line 85
            echo (isset($context["S_CAT_OPTIONS"]) ? $context["S_CAT_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t<hr />
\t<dl>
\t\t<dt><label for=\"module_enabled\">";
            // line 89
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODULE_ENABLED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"module_enabled\" id=\"module_enabled\" value=\"1\"";
            // line 90
            if ((isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_enabled\" value=\"0\"";
            // line 91
            if ( !(isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<div id=\"modoptions\"";
            // line 93
            if ((isset($context["S_IS_CAT"]) ? $context["S_IS_CAT"] : null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t<dl>
\t\t\t<dt><label for=\"module_display\">";
            // line 95
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODULE_DISPLAYED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODULE_DISPLAYED_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"module_display\" id=\"module_display\" value=\"1\"";
            // line 96
            if ((isset($context["MODULE_DISPLAY"]) ? $context["MODULE_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_display\" value=\"0\"";
            // line 97
            if ( !(isset($context["MODULE_DISPLAY"]) ? $context["MODULE_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"module_basename\">";
            // line 100
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHOOSE_MODULE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br />
\t\t\t<span>";
            // line 101
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHOOSE_MODULE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><select name=\"module_basename\" id=\"module_basename\" onchange=\"display_modes(this.value);\">";
            // line 102
            echo (isset($context["S_MODULE_NAMES"]) ? $context["S_MODULE_NAMES"] : null);
            echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"module_mode\">";
            // line 105
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHOOSE_MODE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br />
\t\t\t<span>";
            // line 106
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHOOSE_MODE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><select name=\"module_mode\" id=\"module_mode\">";
            // line 107
            echo (isset($context["S_MODULE_MODES"]) ? $context["S_MODULE_MODES"] : null);
            echo "</select></dd>
\t\t</dl>
\t</div>

\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"action\" value=\"";
            // line 112
            echo (isset($context["ACTION"]) ? $context["ACTION"] : null);
            echo "\" />
\t\t<input type=\"hidden\" name=\"m\" value=\"";
            // line 113
            echo (isset($context["MODULE_ID"]) ? $context["MODULE_ID"] : null);
            echo "\" />
\t\t
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 115
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 116
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 118
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 123
            echo "
\t<h1>";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_MODULE_MANAGEMENT");
            echo "</h1>

\t<p>";
            // line 126
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_MODULE_MANAGEMENT_EXPLAIN");
            echo "</p>

\t";
            // line 128
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 129
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 130
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 131
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 134
            echo "
\t<table class=\"table1\">
\t<tbody>
\t<tr>
\t\t<td class=\"row3\">";
            // line 138
            echo (isset($context["NAVIGATION"]) ? $context["NAVIGATION"] : null);
            if ((isset($context["S_NO_MODULES"]) ? $context["S_NO_MODULES"] : null)) {
                echo " [<a href=\"";
                echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT");
                echo "</a> | <a href=\"";
                echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "</a> | ";
                if ((isset($context["MODULE_ENABLED"]) ? $context["MODULE_ENABLED"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_DISABLE"]) ? $context["U_DISABLE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE");
                    echo "</a>";
                } else {
                    echo "<a href=\"";
                    echo (isset($context["U_ENABLE"]) ? $context["U_ENABLE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE");
                    echo "</a>";
                }
                echo "]";
            }
            echo "</td>
\t</tr>
\t</tbody>
\t</table>

\t";
            // line 143
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules", []))) {
                // line 144
                echo "\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" /><col class=\"row2\" />
\t\t<tbody>
\t\t";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules", []));
                foreach ($context['_seq'] as $context["_key"] => $context["modules"]) {
                    // line 148
                    echo "\t\t\t<tr>
\t\t\t\t<td style=\"width: 5%; text-align: center;\">";
                    // line 149
                    echo $this->getAttribute($context["modules"], "MODULE_IMAGE", []);
                    echo "</td>
\t\t\t\t<td><a href=\"";
                    // line 150
                    echo $this->getAttribute($context["modules"], "U_MODULE", []);
                    echo "\">";
                    echo $this->getAttribute($context["modules"], "MODULE_TITLE", []);
                    echo "</a>";
                    if ( !$this->getAttribute($context["modules"], "MODULE_DISPLAYED", [])) {
                        echo " <span class=\"small\">[";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDDEN_MODULE");
                        echo "]</span>";
                    }
                    echo "</td>
\t\t\t\t<td style=\"width: 15%; white-space: nowrap; text-align: center; vertical-align: middle;\">&nbsp;";
                    // line 151
                    if ($this->getAttribute($context["modules"], "MODULE_ENABLED", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["modules"], "U_DISABLE", []);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE");
                        echo "</a>";
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["modules"], "U_ENABLE", []);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE");
                        echo "</a>";
                    }
                    echo "&nbsp;</td>
\t\t\t\t<td class=\"actions\">
\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 153
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                    echo "</span>
\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 154
                    echo $this->getAttribute($context["modules"], "U_MOVE_UP", []);
                    echo "\" data-ajax=\"row_up\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a></span>
\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 155
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                    echo "</span>
\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 156
                    echo $this->getAttribute($context["modules"], "U_MOVE_DOWN", []);
                    echo "\" data-ajax=\"row_down\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a></span>
\t\t\t\t\t<a href=\"";
                    // line 157
                    echo $this->getAttribute($context["modules"], "U_EDIT", []);
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a> 
\t\t\t\t\t<a href=\"";
                    // line 158
                    echo $this->getAttribute($context["modules"], "U_DELETE", []);
                    echo "\" data-ajax=\"row_delete\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 165
            echo "
\t<div class=\"clearfix\">&nbsp;</div>

\t<form id=\"quick\" method=\"post\" action=\"";
            // line 168
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"quick\" style=\"float: ";
            // line 170
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">
\t\t<input type=\"hidden\" name=\"action\" value=\"quickadd\" />

\t\t<select name=\"quick_install\">";
            // line 173
            echo (isset($context["S_INSTALL_OPTIONS"]) ? $context["S_INSTALL_OPTIONS"] : null);
            echo "</select>
\t\t<input class=\"button2\" name=\"quickadd\" type=\"submit\" value=\"";
            // line 174
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_MODULE");
            echo "\" />
\t</fieldset>
\t
\t</form>

\t<form id=\"module\" method=\"post\" action=\"";
            // line 179
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"quick\" style=\"float: ";
            // line 181
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo ";\">
\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t<input type=\"hidden\" name=\"module_parent_id\" value=\"";
            // line 183
            echo (isset($context["PARENT_ID"]) ? $context["PARENT_ID"] : null);
            echo "\" />

\t\t<input type=\"text\" name=\"module_langname\" maxlength=\"255\" /> 
\t\t<input class=\"button2\" name=\"addmodule\" type=\"submit\" value=\"";
            // line 186
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_MODULE");
            echo "\" />
\t</fieldset>

\t</form>

\t<div class=\"clearfix\">&nbsp;</div><br style=\"clear: both;\" />
\t
\t<form id=\"mselect\" method=\"post\" action=\"";
            // line 193
            echo (isset($context["U_SEL_ACTION"]) ? $context["U_SEL_ACTION"] : null);
            echo "\">
\t<fieldset class=\"quick\">
\t\t";
            // line 195
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_MODULE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"parent_id\" onchange=\"if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }\">";
            echo (isset($context["MODULE_BOX"]) ? $context["MODULE_BOX"] : null);
            echo "</select> 

\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 197
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" />
\t</fieldset>
\t</form>

";
        }
        // line 202
        echo "
";
        // line 203
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_modules.html", 203)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_modules.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 203,  572 => 202,  564 => 197,  556 => 195,  551 => 193,  541 => 186,  535 => 183,  530 => 181,  525 => 179,  517 => 174,  513 => 173,  507 => 170,  502 => 168,  497 => 165,  492 => 162,  480 => 158,  474 => 157,  468 => 156,  464 => 155,  458 => 154,  454 => 153,  437 => 151,  425 => 150,  421 => 149,  418 => 148,  414 => 147,  409 => 144,  407 => 143,  374 => 138,  368 => 134,  362 => 131,  358 => 130,  355 => 129,  353 => 128,  348 => 126,  343 => 124,  340 => 123,  332 => 118,  327 => 116,  323 => 115,  318 => 113,  314 => 112,  306 => 107,  302 => 106,  297 => 105,  291 => 102,  287 => 101,  282 => 100,  272 => 97,  264 => 96,  257 => 95,  250 => 93,  241 => 91,  233 => 90,  228 => 89,  221 => 85,  216 => 84,  200 => 81,  195 => 80,  189 => 77,  185 => 76,  180 => 75,  175 => 73,  169 => 70,  166 => 69,  160 => 66,  156 => 65,  153 => 64,  151 => 63,  146 => 61,  139 => 59,  130 => 57,  120 => 49,  113 => 47,  104 => 44,  99 => 43,  95 => 42,  90 => 40,  87 => 39,  83 => 38,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_modules.html", "");
    }
}
