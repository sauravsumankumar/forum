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

/* acp_permissions.html */
class __TwigTemplate_91ea100a1d7b8e43a052cad43548002b910439a643fa13b30182b62d0940d3a4 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_permissions.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_INTRO"]) ? $context["S_INTRO"] : null)) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PERMISSIONS");
            echo "</h1>

\t";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PERMISSIONS_EXPLAIN");
            echo "

";
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["S_SELECT_VICTIM"]) ? $context["S_SELECT_VICTIM"] : null)) {
            // line 14
            echo "
\t";
            // line 15
            if ((isset($context["U_BACK"]) ? $context["U_BACK"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
                echo "\" style=\"float: ";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo ";\">&laquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
                echo "</a>";
            }
            // line 16
            echo "
\t<h1>";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPLAIN");
            echo "</p>

\t";
            // line 21
            if ((isset($context["S_FORUM_NAMES"]) ? $context["S_FORUM_NAMES"] : null)) {
                // line 22
                echo "\t\t<p><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo (isset($context["FORUM_NAMES"]) ? $context["FORUM_NAMES"] : null);
                echo "</p>
\t";
            }
            // line 24
            echo "
\t";
            // line 25
            if ((isset($context["S_SELECT_FORUM"]) ? $context["S_SELECT_FORUM"] : null)) {
                // line 26
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 27
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 30
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUM");
                echo "</legend>
\t\t\t";
                // line 31
                if ((isset($context["S_FORUM_MULTIPLE"]) ? $context["S_FORUM_MULTIPLE"] : null)) {
                    echo "<p>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUMS_EXPLAIN");
                    echo "</p>";
                }
                // line 32
                echo "\t\t<dl>
\t\t\t<dt>";
                // line 33
                echo "<label for=\"forum\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUM");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>";
                echo "</dt>
\t\t\t<dd><select id=\"forum\" name=\"forum_id[]\"";
                // line 34
                if ((isset($context["S_FORUM_MULTIPLE"]) ? $context["S_FORUM_MULTIPLE"] : null)) {
                    echo " multiple=\"multiple\"";
                }
                echo " size=\"10\">";
                echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
                echo "</select></dd>
\t\t\t";
                // line 35
                if ((isset($context["S_FORUM_ALL"]) ? $context["S_FORUM_ALL"] : null)) {
                    echo "<dd><label><input type=\"checkbox\" class=\"radio\" name=\"all_forums\" value=\"1\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                    echo "</label></dd>";
                }
                // line 36
                echo "\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 39
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 40
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 41
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>

\t\t</fieldset>
\t\t</form>

\t\t";
                // line 47
                if ((isset($context["S_FORUM_MULTIPLE"]) ? $context["S_FORUM_MULTIPLE"] : null)) {
                    // line 48
                    echo "
\t\t\t<form id=\"select_subforum\" method=\"post\" action=\"";
                    // line 49
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 52
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUM");
                    echo "</legend>
\t\t\t\t<p>";
                    // line 53
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_FORUM_SUBFORUM_EXPLAIN");
                    echo "</p>
\t\t\t<dl>
\t\t\t\t<dt>";
                    // line 55
                    echo "<label for=\"sforum\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label>";
                    echo "</dt>
\t\t\t\t<dd><select id=\"sforum\" name=\"subforum_id\">";
                    // line 56
                    echo (isset($context["S_SUBFORUM_OPTIONS"]) ? $context["S_SUBFORUM_OPTIONS"] : null);
                    echo "</select></dd>
\t\t\t</dl>

\t\t\t<p class=\"quick\">
\t\t\t\t";
                    // line 60
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 61
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                    // line 62
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                    echo "\" class=\"button1\" />
\t\t\t</p>

\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 69
                echo "
\t";
            } elseif ((            // line 70
(isset($context["S_SELECT_USER"]) ? $context["S_SELECT_USER"] : null) && (isset($context["S_CAN_SELECT_USER"]) ? $context["S_CAN_SELECT_USER"] : null))) {
                // line 71
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 72
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 75
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_USER");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"username\">";
                // line 77
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"username\" name=\"username[]\" /></dd>
\t\t\t<dd>[ <a href=\"";
                // line 79
                echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "</a> ]</dd>
\t\t\t<dd class=\"full\" style=\"text-align: left;\"><label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                // line 80
                echo (isset($context["ANONYMOUS_USER_ID"]) ? $context["ANONYMOUS_USER_ID"] : null);
                echo "\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_ANONYMOUS");
                echo "</label></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 84
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 85
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 86
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>
\t\t</fieldset>
\t\t</form>

\t";
            } elseif ((            // line 91
(isset($context["S_SELECT_GROUP"]) ? $context["S_SELECT_GROUP"] : null) && (isset($context["S_CAN_SELECT_GROUP"]) ? $context["S_CAN_SELECT_GROUP"] : null))) {
                // line 92
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 93
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 96
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_GROUP");
                echo "</legend>
\t\t<dl>
\t\t\t<dt>";
                // line 98
                echo "<label for=\"group\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_GROUP");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>";
                echo "</dt>
\t\t\t<dd><select name=\"group_id[]\" id=\"group\">";
                // line 99
                echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 103
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 104
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 105
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>

\t\t</fieldset>
\t\t</form>

\t\t";
            } elseif (            // line 111
(isset($context["S_SELECT_USERGROUP"]) ? $context["S_SELECT_USERGROUP"] : null)) {
                // line 112
                echo "
\t\t<div class=\"column1\">

\t\t";
                // line 115
                if ((isset($context["S_CAN_SELECT_USER"]) ? $context["S_CAN_SELECT_USER"] : null)) {
                    // line 116
                    echo "
\t\t\t<h1>";
                    // line 117
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERS");
                    echo "</h1>

\t\t\t<form id=\"users\" method=\"post\" action=\"";
                    // line 119
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 122
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANAGE_USERS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"user_id[]\" multiple=\"multiple\" size=\"5\">";
                    // line 124
                    echo (isset($context["S_DEFINED_USER_OPTIONS"]) ? $context["S_DEFINED_USER_OPTIONS"] : null);
                    echo "</select></dd>
\t\t\t\t";
                    // line 125
                    if ((isset($context["S_ALLOW_ALL_SELECT"]) ? $context["S_ALLOW_ALL_SELECT"] : null)) {
                        echo "<dd class=\"full\" style=\"text-align: right;\"><label><input type=\"checkbox\" class=\"radio\" name=\"all_users\" value=\"1\" /> ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_USERS");
                        echo "</label></dd>";
                    }
                    // line 126
                    echo "\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 130
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 131
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[delete]\" value=\"";
                    // line 132
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" /> &nbsp; <input class=\"button1\" type=\"submit\" name=\"submit_edit_options\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_user\" method=\"post\" action=\"";
                    // line 136
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 139
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_USERS");
                    echo "</legend>
\t\t\t\t<p>";
                    // line 140
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAMES_EXPLAIN");
                    echo "</p>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><textarea id=\"username\" name=\"usernames\" rows=\"5\" cols=\"5\" style=\"width: 100%; height: 60px;\"></textarea></dd>
\t\t\t\t<dd class=\"full\" style=\"text-align: left;\">";
                    // line 143
                    echo "<div style=\"float: ";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo ";\">[ <a href=\"";
                    echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                    echo "\" onclick=\"find_username(this.href); return false;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                    echo "</a> ]</div>";
                    echo "<label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                    echo (isset($context["ANONYMOUS_USER_ID"]) ? $context["ANONYMOUS_USER_ID"] : null);
                    echo "\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_ANONYMOUS");
                    echo "</label></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 148
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 149
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit_add_options\" value=\"";
                    // line 150
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_PERMISSIONS");
                    echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 155
                echo "
\t\t</div>

\t\t<div class=\"column2\">

\t\t";
                // line 160
                if ((isset($context["S_CAN_SELECT_GROUP"]) ? $context["S_CAN_SELECT_GROUP"] : null)) {
                    // line 161
                    echo "
\t\t\t<h1>";
                    // line 162
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERGROUPS");
                    echo "</h1>

\t\t\t<form id=\"groups\" method=\"post\" action=\"";
                    // line 164
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 167
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANAGE_GROUPS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"group_id[]\" multiple=\"multiple\" size=\"5\">";
                    // line 169
                    echo (isset($context["S_DEFINED_GROUP_OPTIONS"]) ? $context["S_DEFINED_GROUP_OPTIONS"] : null);
                    echo "</select></dd>
\t\t\t\t";
                    // line 170
                    if ((isset($context["S_ALLOW_ALL_SELECT"]) ? $context["S_ALLOW_ALL_SELECT"] : null)) {
                        echo "<dd class=\"full\" style=\"text-align: right;\"><label><input type=\"checkbox\" class=\"radio\" name=\"all_groups\" value=\"1\" /> ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_GROUPS");
                        echo "</label></dd>";
                    }
                    // line 171
                    echo "\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 175
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 176
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[delete]\" value=\"";
                    // line 177
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" /> &nbsp; <input class=\"button1\" type=\"submit\" name=\"submit_edit_options\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_groups\" method=\"post\" action=\"";
                    // line 181
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 184
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_GROUPS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\">";
                    // line 186
                    echo "<select name=\"group_id[]\" style=\"width: 100%; height: 107px;\" multiple=\"multiple\">";
                    echo (isset($context["S_ADD_GROUP_OPTIONS"]) ? $context["S_ADD_GROUP_OPTIONS"] : null);
                    echo "</select>";
                    echo "</dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 191
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 192
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input type=\"submit\" class=\"button1\" name=\"submit_add_options\" value=\"";
                    // line 193
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_PERMISSIONS");
                    echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 198
                echo "
\t\t</div>

\t";
            } elseif (            // line 201
(isset($context["S_SELECT_USERGROUP_VIEW"]) ? $context["S_SELECT_USERGROUP_VIEW"] : null)) {
                // line 202
                echo "
\t\t<div class=\"column1\">

\t\t\t<h1>";
                // line 205
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERS");
                echo "</h1>

\t\t\t<form id=\"users\" method=\"post\" action=\"";
                // line 207
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 210
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANAGE_USERS");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"user_id[]\" multiple=\"multiple\" size=\"5\">";
                // line 212
                echo (isset($context["S_DEFINED_USER_OPTIONS"]) ? $context["S_DEFINED_USER_OPTIONS"] : null);
                echo "</select></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 217
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 218
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
                // line 219
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PERMISSIONS");
                echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_user\" method=\"post\" action=\"";
                // line 223
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 226
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_USER");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"username\">";
                // line 228
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" id=\"username\" name=\"username[]\" /></dd>
\t\t\t\t<dd>[ <a href=\"";
                // line 230
                echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "</a> ]</dd>
\t\t\t\t<dd class=\"full\" style=\"text-align: left;\"><label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                // line 231
                echo (isset($context["ANONYMOUS_USER_ID"]) ? $context["ANONYMOUS_USER_ID"] : null);
                echo "\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_ANONYMOUS");
                echo "</label></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 236
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 237
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 238
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PERMISSIONS");
                echo "\" class=\"button1\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t</div>

\t\t<div class=\"column2\">

\t\t\t<h1>";
                // line 246
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERGROUPS");
                echo "</h1>

\t\t\t<form id=\"groups\" method=\"post\" action=\"";
                // line 248
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 251
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANAGE_GROUPS");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"group_id[]\" multiple=\"multiple\" size=\"5\">";
                // line 253
                echo (isset($context["S_DEFINED_GROUP_OPTIONS"]) ? $context["S_DEFINED_GROUP_OPTIONS"] : null);
                echo "</select></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 258
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 259
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
                // line 260
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PERMISSIONS");
                echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"group\" method=\"post\" action=\"";
                // line 264
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 267
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_GROUP");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"group_select\">";
                // line 269
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_GROUP");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 270
                // line 271
                echo "\t\t\t\t<dd><select name=\"group_id[]\" id=\"group_select\">";
                echo (isset($context["S_ADD_GROUP_OPTIONS"]) ? $context["S_ADD_GROUP_OPTIONS"] : null);
                echo "</select></dd>
\t\t\t\t";
                // line 272
                // line 273
                echo "\t\t\t\t<dd>&nbsp;</dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 278
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 279
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 280
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PERMISSIONS");
                echo "\" class=\"button1\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t</div>

\t";
            }
            // line 287
            echo "
";
        }
        // line 289
        echo "
";
        // line 290
        if ((isset($context["S_VIEWING_PERMISSIONS"]) ? $context["S_VIEWING_PERMISSIONS"] : null)) {
            // line 291
            echo "
\t<h1>";
            // line 292
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_VIEW");
            echo "</h1>

\t<p>";
            // line 294
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_VIEW_EXPLAIN");
            echo "</p>

\t<fieldset class=\"quick\">
\t\t<strong>&raquo; ";
            // line 297
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PERMISSION_TYPE");
            echo "</strong>
\t</fieldset>

\t";
            // line 300
            $location = "permission_mask.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("permission_mask.html", "acp_permissions.html", 300)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 301
            echo "
";
        }
        // line 303
        echo "
";
        // line 304
        if ((isset($context["S_SETTING_PERMISSIONS"]) ? $context["S_SETTING_PERMISSIONS"] : null)) {
            // line 305
            echo "
\t<h1>";
            // line 306
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_SET");
            echo "</h1>

\t<p>";
            // line 308
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_SET_EXPLAIN");
            echo "</p>

\t<br />

\t<fieldset class=\"quick\" style=\"float: ";
            // line 312
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">
\t\t<strong>&raquo; ";
            // line 313
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PERMISSION_TYPE");
            echo "</strong>
\t</fieldset>

\t";
            // line 316
            if ((isset($context["S_PERMISSION_DROPDOWN"]) ? $context["S_PERMISSION_DROPDOWN"] : null)) {
                // line 317
                echo "\t\t<form id=\"pselect\" method=\"post\" action=\"";
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 319
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ";\">
\t\t\t";
                // line 320
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 321
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t";
                // line 322
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_TYPE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <select name=\"type\">";
                echo (isset($context["S_PERMISSION_DROPDOWN"]) ? $context["S_PERMISSION_DROPDOWN"] : null);
                echo "</select>

\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 324
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" />
\t\t</fieldset>
\t\t</form>
\t";
            }
            // line 328
            echo "
\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t<!-- include tooltip file -->
\t";
            // line 332
            $asset_file = "tooltip.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version('3');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 333
            echo "
\t<form id=\"set-permissions\" method=\"post\" action=\"";
            // line 334
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\" data-role-description=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ROLE_DESCRIPTION");
            echo "\">

\t";
            // line 336
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "

\t";
            // line 338
            $location = "permission_mask.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("permission_mask.html", "acp_permissions.html", 338)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 339
            echo "
\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t<fieldset class=\"quick\" style=\"float: ";
            // line 342
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">
\t\t<input class=\"button1\" type=\"submit\" name=\"action[apply_all_permissions]\" value=\"";
            // line 343
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPLY_ALL_PERMISSIONS");
            echo "\" />
\t\t<input class=\"button2\" type=\"button\" name=\"cancel\" value=\"";
            // line 344
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" onclick=\"document.forms['set-permissions'].reset(); init_colours(active_pmask + active_fmask);\" />
\t\t";
            // line 345
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>

\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t</form>

";
        }
        // line 353
        echo "
";
        // line 354
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_permissions.html", 354)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_permissions.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  917 => 354,  914 => 353,  903 => 345,  899 => 344,  895 => 343,  891 => 342,  886 => 339,  874 => 338,  869 => 336,  862 => 334,  859 => 333,  845 => 332,  839 => 328,  832 => 324,  824 => 322,  820 => 321,  816 => 320,  812 => 319,  806 => 317,  804 => 316,  798 => 313,  794 => 312,  787 => 308,  782 => 306,  779 => 305,  777 => 304,  774 => 303,  770 => 301,  758 => 300,  752 => 297,  746 => 294,  741 => 292,  738 => 291,  736 => 290,  733 => 289,  729 => 287,  719 => 280,  715 => 279,  711 => 278,  704 => 273,  703 => 272,  698 => 271,  697 => 270,  692 => 269,  687 => 267,  681 => 264,  674 => 260,  670 => 259,  666 => 258,  658 => 253,  653 => 251,  647 => 248,  642 => 246,  631 => 238,  627 => 237,  623 => 236,  613 => 231,  607 => 230,  601 => 228,  596 => 226,  590 => 223,  583 => 219,  579 => 218,  575 => 217,  567 => 212,  562 => 210,  556 => 207,  551 => 205,  546 => 202,  544 => 201,  539 => 198,  531 => 193,  527 => 192,  523 => 191,  513 => 186,  508 => 184,  502 => 181,  493 => 177,  489 => 176,  485 => 175,  479 => 171,  473 => 170,  469 => 169,  464 => 167,  458 => 164,  453 => 162,  450 => 161,  448 => 160,  441 => 155,  433 => 150,  429 => 149,  425 => 148,  407 => 143,  401 => 140,  397 => 139,  391 => 136,  382 => 132,  378 => 131,  374 => 130,  368 => 126,  362 => 125,  358 => 124,  353 => 122,  347 => 119,  342 => 117,  339 => 116,  337 => 115,  332 => 112,  330 => 111,  321 => 105,  317 => 104,  313 => 103,  306 => 99,  299 => 98,  294 => 96,  288 => 93,  285 => 92,  283 => 91,  275 => 86,  271 => 85,  267 => 84,  258 => 80,  252 => 79,  246 => 77,  241 => 75,  235 => 72,  232 => 71,  230 => 70,  227 => 69,  217 => 62,  213 => 61,  209 => 60,  202 => 56,  195 => 55,  190 => 53,  186 => 52,  180 => 49,  177 => 48,  175 => 47,  166 => 41,  162 => 40,  158 => 39,  153 => 36,  147 => 35,  139 => 34,  132 => 33,  129 => 32,  123 => 31,  119 => 30,  113 => 27,  110 => 26,  108 => 25,  105 => 24,  96 => 22,  94 => 21,  89 => 19,  84 => 17,  81 => 16,  71 => 15,  68 => 14,  66 => 13,  63 => 12,  57 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_permissions.html", "");
    }
}
