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

/* acp_contact.html */
class __TwigTemplate_327bd9ef1184c2df3a10841a6ca9a4df35a10a566ccf7d27219d577492ad1865 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_contact.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script type=\"text/javascript\">
// <![CDATA[

\tvar form_name = 'acp_contact';
\tvar text_name = 'contact_admin_info';
\tvar load_draft = false;
\tvar upload = false;
\tvar imageTag = false;

// ]]>
</script>

<a id=\"maincontent\"></a>

<h1>";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_CONTACT_SETTINGS");
        echo "</h1>

<p>";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_CONTACT_SETTINGS_EXPLAIN");
        echo "</p>

<form id=\"acp_contact\" method=\"post\" action=\"";
        // line 21
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GENERAL_OPTIONS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"contact_admin_form_enable\">";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US_ENABLE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US_ENABLE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"contact_admin_form_enable\" name=\"contact_admin_form_enable\" value=\"1\"";
        // line 27
        if ((isset($context["CONTACT_ENABLED"]) ? $context["CONTACT_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLED");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"contact_admin_form_enable\" value=\"0\"";
        // line 28
        if ( !(isset($context["CONTACT_ENABLED"]) ? $context["CONTACT_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLED");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 33
        if ((isset($context["CONTACT_US_INFO_PREVIEW"]) ? $context["CONTACT_US_INFO_PREVIEW"] : null)) {
            // line 34
            echo "\t<fieldset>
\t\t<legend>";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US_INFO_PREVIEW");
            echo "</legend>
\t\t<p>";
            // line 36
            echo (isset($context["CONTACT_US_INFO_PREVIEW"]) ? $context["CONTACT_US_INFO_PREVIEW"] : null);
            echo "</p>
\t</fieldset>
\t";
        }
        // line 39
        echo "
\t<fieldset>
\t\t<legend>";
        // line 41
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US_INFO");
        echo "</legend>
\t\t<p>";
        // line 42
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US_INFO_EXPLAIN");
        echo "</p>

\t\t";
        // line 44
        $location = "acp_posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("acp_posting_buttons.html", "acp_contact.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 45
        echo "
\t\t<dl class=\"responsive-columns\">
\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\">
\t\t\t</dt>

\t\t\t<dd style=\"margin-";
        // line 50
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px;\">
\t\t\t\t<textarea name=\"contact_admin_info\" rows=\"10\" cols=\"60\" style=\"width: 95%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" data-bbcode=\"true\">";
        // line 51
        echo (isset($context["CONTACT_US_INFO"]) ? $context["CONTACT_US_INFO"] : null);
        echo "</textarea>
\t\t\t</dd>

\t\t\t<dd style=\"margin-";
        // line 54
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px; margin-top: 5px;\">
\t\t\t\t";
        // line 55
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 56
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"";
            if ((isset($context["S_BBCODE_DISABLE_CHECKED"]) ? $context["S_BBCODE_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_BBCODE");
            echo "</label>
\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 59
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"";
            if ((isset($context["S_SMILIES_DISABLE_CHECKED"]) ? $context["S_SMILIES_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_SMILIES");
            echo "</label>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 62
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"";
            if ((isset($context["S_MAGIC_URL_DISABLE_CHECKED"]) ? $context["S_MAGIC_URL_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t\t\t";
        }
        // line 64
        echo "\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 65
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px; margin-top: 10px;\"><strong>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " </strong>";
        echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
        echo " :: ";
        echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
        echo " :: ";
        echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
        echo " :: ";
        echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
        echo " :: ";
        echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
        echo "</dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 70
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" name=\"preview\" value=\"";
        // line 71
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
        echo "\" />
\t\t";
        // line 72
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</form>

";
        // line 76
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_contact.html", 76)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 76,  238 => 72,  234 => 71,  230 => 70,  209 => 65,  206 => 64,  196 => 62,  193 => 61,  183 => 59,  180 => 58,  170 => 56,  168 => 55,  164 => 54,  158 => 51,  154 => 50,  147 => 45,  135 => 44,  130 => 42,  126 => 41,  122 => 39,  116 => 36,  112 => 35,  109 => 34,  107 => 33,  95 => 28,  87 => 27,  79 => 25,  74 => 23,  69 => 21,  64 => 19,  59 => 17,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_contact.html", "");
    }
}
