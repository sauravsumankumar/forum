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

/* acp_icons.html */
class __TwigTemplate_96fdc63a525fa0c34fce72007078c12f5ddea6359709659ad0861a5a340657cf extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_icons.html", 1)->display($context);
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
\t<script type=\"text/javascript\" defer=\"defer\">
\t// <![CDATA[
\t";
            // line 9
            if ((isset($context["S_ADD_CODE"]) ? $context["S_ADD_CODE"] : null)) {
                // line 10
                echo "
\t\t\tvar smiley = Array();
\t\t\t";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smile", []));
                foreach ($context['_seq'] as $context["_key"] => $context["smile"]) {
                    // line 13
                    echo "\t\t\t\tsmiley['";
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", []);
                    echo "'] = Array();
\t\t\t\tsmiley['";
                    // line 14
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", []);
                    echo "']['code'] = '";
                    echo $this->getAttribute($context["smile"], "CODE", []);
                    echo "';
\t\t\t\tsmiley['";
                    // line 15
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", []);
                    echo "']['emotion'] = '";
                    echo $this->getAttribute($context["smile"], "EMOTION", []);
                    echo "';
\t\t\t\tsmiley['";
                    // line 16
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", []);
                    echo "']['width'] = ";
                    echo $this->getAttribute($context["smile"], "WIDTH", []);
                    echo ";
\t\t\t\tsmiley['";
                    // line 17
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", []);
                    echo "']['height'] = ";
                    echo $this->getAttribute($context["smile"], "HEIGHT", []);
                    echo ";
\t\t\t\tsmiley['";
                    // line 18
                    echo $this->getAttribute($context["smile"], "SMILEY_URL", []);
                    echo "']['order'] = ";
                    echo $this->getAttribute($context["smile"], "ORDER", []);
                    echo ";
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tvar use_element = smiley[newimage];

\t\t\t\tdocument.getElementById('add_image_src').src = '";
                // line 25
                echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                echo (isset($context["IMG_PATH"]) ? $context["IMG_PATH"] : null);
                echo "/' + encodeURI(newimage);
\t\t\t\tdocument.getElementById('add_code').value = use_element['code'];
\t\t\t\tdocument.getElementById('add_emotion').value = use_element['emotion'];
\t\t\t\tdocument.getElementById('add_width').value = use_element['width'];
\t\t\t\tdocument.getElementById('add_height').value = use_element['height'];

\t\t\t\telement = document.getElementById('add_order');
\t\t\t\tfor (var i = 0; i < element.length; i++)
\t\t\t\t{
\t\t\t\t\tif (element.options[i].value == use_element['order'])
\t\t\t\t\t{
\t\t\t\t\t\tdocument.getElementById('add_order').options.selectedIndex = i;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t";
            }
            // line 42
            echo "

\tfunction toggle_select(icon, display, select)
\t{
\t\tvar disp = document.getElementById('order_disp_' + select);
\t\tvar nodisp = document.getElementById('order_no_disp_' + select);
\t\tdisp.disabled = !display;
\t\tnodisp.disabled = display;
\t\tif (display)
\t\t{
\t\t\tdocument.getElementById('order_' + select).selectedIndex = 0;
\t\t\tnodisp.className = 'disabled-options';
\t\t\tdisp.className = '';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('order_' + select).selectedIndex = ";
            // line 58
            echo (isset($context["S_ORDER_LIST_DISPLAY_COUNT"]) ? $context["S_ORDER_LIST_DISPLAY_COUNT"] : null);
            echo ";
\t\t\tdisp.className = 'disabled-options';
\t\t\tnodisp.className = '';
\t\t}
\t}
\t// ]]>
\t</script>

\t<a href=\"";
            // line 66
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 70
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPLAIN");
            echo "</p>

\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 72
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 75
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table\" id=\"smilies\">
\t<thead>
\t<tr>
\t\t<th colspan=\"";
            // line 80
            echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIG");
            echo "</th>
\t</tr>
\t";
            // line 82
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "items", [])) || (isset($context["S_ADD_CODE"]) ? $context["S_ADD_CODE"] : null))) {
                // line 83
                echo "\t<tr class=\"row3\">
\t\t<td>";
                // line 84
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("URL");
                echo "</td>
\t\t<td>";
                // line 85
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCATION");
                echo "</td>
\t";
                // line 86
                if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                    // line 87
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SMILIES_CODE");
                    echo "</td>
\t\t<td>";
                    // line 88
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SMILIES_EMOTION");
                    echo "</td>
\t";
                }
                // line 90
                echo "\t\t<td>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WIDTH");
                echo "</td>
\t\t<td>";
                // line 91
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HEIGHT");
                echo "</td>
\t";
                // line 92
                if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                    // line 93
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALT_TEXT");
                    echo "</td>
\t";
                }
                // line 95
                echo "\t\t<td>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_ON_POSTING");
                echo "</td>
\t";
                // line 96
                if (((isset($context["ID"]) ? $context["ID"] : null) || (isset($context["S_ADD"]) ? $context["S_ADD"] : null))) {
                    // line 97
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ORDER");
                    echo "</td>
\t";
                }
                // line 99
                echo "\t";
                if ((isset($context["S_ADD"]) ? $context["S_ADD"] : null)) {
                    // line 100
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD");
                    echo " <a href=\"#\" onclick=\"marklist('smilies', 'add_img', true); return false;\">(";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                    echo ")</a></td>
\t";
                }
                // line 102
                echo "\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                    // line 106
                    echo "\t\t<tr>

\t\t<td style=\"text-align: center;\"><img src=\"";
                    // line 108
                    echo $this->getAttribute($context["items"], "IMG_SRC", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["items"], "TEXT_ALT", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["items"], "TEXT_ALT", []);
                    echo "\" /><input type=\"hidden\" name=\"image[";
                    echo $this->getAttribute($context["items"], "IMG", []);
                    echo "]\" value=\"1\" /></td>
\t\t<td style=\"vertical-align: top;\">[";
                    // line 109
                    echo $this->getAttribute($context["items"], "IMG", []);
                    echo "]</td>
\t\t";
                    // line 110
                    if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                        // line 111
                        echo "\t\t\t<td><input class=\"text post\" type=\"text\" name=\"code[";
                        echo $this->getAttribute($context["items"], "IMG", []);
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["items"], "CODE", []);
                        echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t\t<td><input class=\"text post\" type=\"text\" name=\"emotion[";
                        // line 112
                        echo $this->getAttribute($context["items"], "IMG", []);
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["items"], "EMOTION", []);
                        echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t";
                    }
                    // line 114
                    echo "\t\t<td><input class=\"text post\" type=\"number\" min=\"0\" max=\"999\" name=\"width[";
                    echo $this->getAttribute($context["items"], "IMG", []);
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["items"], "WIDTH", []);
                    echo "\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" min=\"0\" max=\"999\" name=\"height[";
                    // line 115
                    echo $this->getAttribute($context["items"], "IMG", []);
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["items"], "HEIGHT", []);
                    echo "\" /></td>
\t\t";
                    // line 116
                    if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                        // line 117
                        echo "\t\t\t<td><input class=\"text post\" type=\"text\" name=\"alt[";
                        echo $this->getAttribute($context["items"], "IMG", []);
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["items"], "ALT", []);
                        echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t";
                    }
                    // line 119
                    echo "\t\t<td>
\t\t\t<input type=\"checkbox\" class=\"radio\" name=\"display_on_posting[";
                    // line 120
                    echo $this->getAttribute($context["items"], "IMG", []);
                    echo "]\"";
                    echo $this->getAttribute($context["items"], "POSTING_CHECKED", []);
                    echo " onclick=\"toggle_select('";
                    echo $this->getAttribute($context["items"], "A_IMG", []);
                    echo "', this.checked, '";
                    echo $this->getAttribute($context["items"], "S_ROW_COUNT", []);
                    echo "');\"/>
\t\t\t";
                    // line 121
                    if ($this->getAttribute($context["items"], "S_ID", [])) {
                        // line 122
                        echo "\t\t\t\t<input type=\"hidden\" name=\"id[";
                        echo $this->getAttribute($context["items"], "IMG", []);
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["items"], "ID", []);
                        echo "\" />
\t\t\t";
                    }
                    // line 124
                    echo "\t\t</td>
\t\t";
                    // line 125
                    if (((isset($context["ID"]) ? $context["ID"] : null) || (isset($context["S_ADD"]) ? $context["S_ADD"] : null))) {
                        // line 126
                        echo "\t\t\t<td><select id=\"order_";
                        echo $this->getAttribute($context["items"], "S_ROW_COUNT", []);
                        echo "\" name=\"order[";
                        echo $this->getAttribute($context["items"], "IMG", []);
                        echo "]\">
\t\t\t\t<optgroup id=\"order_disp_";
                        // line 127
                        echo $this->getAttribute($context["items"], "S_ROW_COUNT", []);
                        echo "\" label=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTING");
                        echo "\" ";
                        if ( !$this->getAttribute($context["items"], "POSTING_CHECKED", [])) {
                            echo "disabled=\"disabled\" class=\"disabled-options\" ";
                        }
                        echo ">";
                        echo (isset($context["S_ORDER_LIST_DISPLAY"]) ? $context["S_ORDER_LIST_DISPLAY"] : null);
                        echo "</optgroup>
\t\t\t\t<optgroup id=\"order_no_disp_";
                        // line 128
                        echo $this->getAttribute($context["items"], "S_ROW_COUNT", []);
                        echo "\" label=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTING_NO");
                        echo "\" ";
                        if ($this->getAttribute($context["items"], "POSTING_CHECKED", [])) {
                            echo "disabled=\"disabled\" class=\"disabled-options\" ";
                        }
                        echo ">";
                        echo (isset($context["S_ORDER_LIST_UNDISPLAY"]) ? $context["S_ORDER_LIST_UNDISPLAY"] : null);
                        echo "</optgroup>
\t\t\t</select></td>
\t\t";
                    }
                    // line 131
                    echo "\t\t";
                    if ((isset($context["S_ADD"]) ? $context["S_ADD"] : null)) {
                        // line 132
                        echo "\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_img[";
                        echo $this->getAttribute($context["items"], "IMG", []);
                        echo "]\" value=\"1\" /></td>
\t\t";
                    }
                    // line 134
                    echo "\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "\t";
                if ((isset($context["S_ADD_CODE"]) ? $context["S_ADD_CODE"] : null)) {
                    // line 137
                    echo "\t<tr>
\t\t<th colspan=\"";
                    // line 138
                    echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_SMILEY_CODE");
                    echo "</th>
\t</tr>
\t<tr class=\"row1\">
\t\t<td style=\"text-align: center;\"><select name=\"add_image\" id=\"add_image\" onchange=\"update_image(this.options[selectedIndex].value);\">";
                    // line 141
                    echo (isset($context["S_IMG_OPTIONS"]) ? $context["S_IMG_OPTIONS"] : null);
                    echo "</select></td>
\t\t<td style=\"vertical-align: top;\"><img src=\"";
                    // line 142
                    echo (isset($context["IMG_SRC"]) ? $context["IMG_SRC"] : null);
                    echo "\" id=\"add_image_src\" alt=\"\" title=\"\" /></td>
\t\t<td><input class=\"text post\" type=\"text\" name=\"add_code\" id=\"add_code\" value=\"";
                    // line 143
                    echo (isset($context["CODE"]) ? $context["CODE"] : null);
                    echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t<td><input class=\"text post\" type=\"text\" name=\"add_emotion\" id=\"add_emotion\" value=\"";
                    // line 144
                    echo (isset($context["EMOTION"]) ? $context["EMOTION"] : null);
                    echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" min=\"0\" max=\"999\" name=\"add_width\" id=\"add_width\" value=\"";
                    // line 145
                    echo (isset($context["WIDTH"]) ? $context["WIDTH"] : null);
                    echo "\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" min=\"0\" max=\"999\" name=\"add_height\" id=\"add_height\" value=\"";
                    // line 146
                    echo (isset($context["HEIGHT"]) ? $context["HEIGHT"] : null);
                    echo "\" /></td>
\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_display_on_posting\" checked=\"checked\" onclick=\"toggle_select('add', this.checked, 'add_order');\"/></td>
 \t\t<td><select id=\"order_add_order\" name=\"add_order\">
\t\t\t\t<optgroup id=\"order_disp_add_order\" label=\"";
                    // line 149
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTING");
                    echo "\">";
                    echo (isset($context["S_ADD_ORDER_LIST_DISPLAY"]) ? $context["S_ADD_ORDER_LIST_DISPLAY"] : null);
                    echo "</optgroup>
\t\t\t\t<optgroup id=\"order_no_disp_add_order\" label=\"";
                    // line 150
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTING_NO");
                    echo "\" disabled=\"disabled\" class=\"disabled-options\" >";
                    echo (isset($context["S_ADD_ORDER_LIST_UNDISPLAY"]) ? $context["S_ADD_ORDER_LIST_UNDISPLAY"] : null);
                    echo "</optgroup>
\t\t</select></td>
\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_additional_code\" value=\"1\" /></td>
\t</tr>
\t";
                }
                // line 155
                echo "\t";
            } else {
                // line 156
                echo "\t</thead>
\t<tbody>
\t<tr class=\"row3\">
\t\t<td colspan=\"";
                // line 159
                echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ICONS");
                echo "</td>
\t</tr>
\t";
            }
            // line 162
            echo "\t</tbody>
\t</table>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 166
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 167
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 169
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 173
(isset($context["S_CHOOSE_PAK"]) ? $context["S_CHOOSE_PAK"] : null)) {
            // line 174
            echo "
\t<a href=\"";
            // line 175
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 177
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 179
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPLAIN");
            echo "</p>

\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 181
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 184
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMPORT");
            echo "</legend>

\t";
            // line 186
            if ( !(isset($context["S_PAK_OPTIONS"]) ? $context["S_PAK_OPTIONS"] : null)) {
                // line 187
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PAK_OPTIONS");
                echo "</p>

\t";
            } else {
                // line 190
                echo "\t\t<dl>
\t\t\t<dt><label for=\"pak\">";
                // line 191
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_PACKAGE");
                echo "</label></dt>
\t\t\t<dd><select id=\"pak\" name=\"pak\">";
                // line 192
                echo (isset($context["S_PAK_OPTIONS"]) ? $context["S_PAK_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t\t\t<dt><label for=\"current\">";
                // line 194
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"current\" name=\"current\" value=\"keep\" checked=\"checked\" /> ";
                // line 195
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("KEEP_ALL");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"current\" value=\"replace\" /> ";
                // line 196
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLACE_MATCHES");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"current\" value=\"delete\" /> ";
                // line 197
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL");
                echo "</label></dd>
\t\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"import\" name=\"import\" value=\"";
                // line 201
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMPORT_SUBMIT");
                echo "\" />
\t</p>
\t";
            }
            // line 204
            echo "\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 209
            echo "
\t<h1>";
            // line 210
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 212
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPLAIN");
            echo "</p>

\t";
            // line 214
            if ((isset($context["NOTICE"]) ? $context["NOTICE"] : null)) {
                // line 215
                echo "\t\t<div class=\"successbox\">
\t\t\t<h3>";
                // line 216
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY");
                echo "</h3>
\t\t\t<p>";
                // line 217
                echo (isset($context["NOTICE"]) ? $context["NOTICE"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 220
            echo "
\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 221
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<div style=\"text-align: right;\"><a href=\"";
            // line 223
            echo (isset($context["U_IMPORT"]) ? $context["U_IMPORT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMPORT");
            echo "</a> | <a href=\"";
            echo (isset($context["U_EXPORT"]) ? $context["U_EXPORT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPORT");
            echo "</a></div>

\t<fieldset class=\"tabulated\">

\t<legend>";
            // line 227
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 232
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</th>
\t\t";
            // line 233
            if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                // line 234
                echo "\t\t<th>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CODE");
                echo "</th>
\t\t<th>";
                // line 235
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMOTION");
                echo "</th>
\t\t";
            }
            // line 237
            echo "\t\t<th>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "items", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 242
                echo "\t\t";
                if ($this->getAttribute($context["items"], "S_SPACER", [])) {
                    // line 243
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"row3\" colspan=\"";
                    // line 244
                    echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
                    echo "\" style=\"text-align: center;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_DISPLAYED");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                // line 247
                echo "\t\t<tr>
\t\t\t<td style=\"width: 85%; text-align: center;\"><img src=\"";
                // line 248
                echo $this->getAttribute($context["items"], "IMG_SRC", []);
                echo "\" width=\"";
                echo $this->getAttribute($context["items"], "WIDTH", []);
                echo "\" height=\"";
                echo $this->getAttribute($context["items"], "HEIGHT", []);
                echo "\" alt=\"";
                echo $this->getAttribute($context["items"], "ALT_TEXT", []);
                echo "\" title=\"";
                echo $this->getAttribute($context["items"], "ALT_TEXT", []);
                echo "\" /></td>
\t\t\t";
                // line 249
                if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
                    // line 250
                    echo "\t\t\t\t<td style=\"text-align: center;\">";
                    echo $this->getAttribute($context["items"], "CODE", []);
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 251
                    echo $this->getAttribute($context["items"], "EMOTION", []);
                    echo "</td>
\t\t\t";
                }
                // line 253
                echo "\t\t\t<td class=\"actions\" style=\"text-align: right;\">
\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 254
                echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                echo "</span>
\t\t\t\t<span class=\"up\"><a href=\"";
                // line 255
                echo $this->getAttribute($context["items"], "U_MOVE_UP", []);
                echo "\" data-ajax=\"row_up\">";
                echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                echo "</a></span>
\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 256
                echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                echo "</span>
\t\t\t\t<span class=\"down\"><a href=\"";
                // line 257
                echo $this->getAttribute($context["items"], "U_MOVE_DOWN", []);
                echo "\" data-ajax=\"row_down\">";
                echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                echo "</a></span>
\t\t\t\t<a href=\"";
                // line 258
                echo $this->getAttribute($context["items"], "U_EDIT", []);
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["items"], "U_DELETE", []);
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a>
\t\t\t</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 262
                echo "\t\t<tr class=\"row3\">
\t\t\t<td colspan=\"";
                // line 263
                echo (isset($context["COLSPAN"]) ? $context["COLSPAN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_NO_ITEMS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "\t</tbody>
\t</table>
\t<div class=\"pagination\">
\t";
            // line 269
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", []))) {
                // line 270
                echo "\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "acp_icons.html", 270)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 271
                echo "\t";
            }
            // line 272
            echo "\t</div>
\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 274
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_ADD");
            echo "\" />&nbsp; &nbsp;<input class=\"button2\" type=\"submit\" name=\"edit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON_EDIT");
            echo "\" />
\t</p>
\t";
            // line 276
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 281
        echo "
";
        // line 282
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_icons.html", 282)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  819 => 282,  816 => 281,  808 => 276,  801 => 274,  797 => 272,  794 => 271,  781 => 270,  779 => 269,  774 => 266,  763 => 263,  760 => 262,  745 => 258,  739 => 257,  735 => 256,  729 => 255,  725 => 254,  722 => 253,  717 => 251,  712 => 250,  710 => 249,  698 => 248,  695 => 247,  687 => 244,  684 => 243,  681 => 242,  676 => 241,  668 => 237,  663 => 235,  658 => 234,  656 => 233,  652 => 232,  644 => 227,  631 => 223,  626 => 221,  623 => 220,  617 => 217,  613 => 216,  610 => 215,  608 => 214,  603 => 212,  598 => 210,  595 => 209,  586 => 204,  580 => 201,  573 => 197,  569 => 196,  565 => 195,  559 => 194,  554 => 192,  550 => 191,  547 => 190,  540 => 187,  538 => 186,  533 => 184,  527 => 181,  522 => 179,  517 => 177,  508 => 175,  505 => 174,  503 => 173,  496 => 169,  491 => 167,  487 => 166,  481 => 162,  473 => 159,  468 => 156,  465 => 155,  455 => 150,  449 => 149,  443 => 146,  439 => 145,  435 => 144,  431 => 143,  427 => 142,  423 => 141,  415 => 138,  412 => 137,  409 => 136,  402 => 134,  396 => 132,  393 => 131,  379 => 128,  367 => 127,  360 => 126,  358 => 125,  355 => 124,  347 => 122,  345 => 121,  335 => 120,  332 => 119,  324 => 117,  322 => 116,  316 => 115,  309 => 114,  302 => 112,  295 => 111,  293 => 110,  289 => 109,  279 => 108,  275 => 106,  271 => 105,  266 => 102,  258 => 100,  255 => 99,  249 => 97,  247 => 96,  242 => 95,  236 => 93,  234 => 92,  230 => 91,  225 => 90,  220 => 88,  215 => 87,  213 => 86,  209 => 85,  205 => 84,  202 => 83,  200 => 82,  193 => 80,  185 => 75,  179 => 72,  174 => 70,  169 => 68,  160 => 66,  149 => 58,  131 => 42,  110 => 25,  103 => 20,  93 => 18,  87 => 17,  81 => 16,  75 => 15,  69 => 14,  64 => 13,  60 => 12,  56 => 10,  54 => 9,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_icons.html", "");
    }
}
