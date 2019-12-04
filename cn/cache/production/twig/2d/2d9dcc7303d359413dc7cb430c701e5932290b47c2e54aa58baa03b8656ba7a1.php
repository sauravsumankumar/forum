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

/* acp_posting_buttons.html */
class __TwigTemplate_5405dea13e0cd0312ad6f5014b791a95eeb4c6004cd6ce0e3bac416fefcb9643 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
// <![CDATA[

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", []));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", []);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP"), "js");
        echo "',
\t\ti: '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP"), "js");
        echo "',
\t\tu: '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP"), "js");
        echo "',
\t\tq: '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP"), "js");
        echo "',
\t\tc: '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP"), "js");
        echo "',
\t\tl: '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP"), "js");
        echo "',
\t\to: '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP"), "js");
        echo "',
\t\tp: '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP"), "js");
        echo "',
\t\tw: '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP"), "js");
        echo "',
\t\ta: '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_A_HELP"), "js");
        echo "',
\t\ts: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP"), "js");
        echo "',
\t\tf: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP"), "js");
        echo "',
\t\ty: '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Y_HELP"), "js");
        echo "',
\t\td: '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP"), "js");
        echo "'
\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", []));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 25
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", []);
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", []);
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t}

// ]]>
</script>

";
        // line 32
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('3');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 33
        echo "
";
        // line 34
        // line 35
        echo "<div id=\"format-buttons\">
\t<input type=\"button\" class=\"button2\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
        // line 36
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
        // line 37
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
        // line 38
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP");
        echo "\" />
\t";
        // line 39
        if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
            // line 40
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP");
            echo "\" />
\t";
        }
        // line 42
        echo "\t<input type=\"button\" class=\"button2\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" title=\"";
        // line 43
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"width: 40px\" onclick=\"bbstyle(12)\" title=\"";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP");
        echo "\" />
\t<input type=\"button\" class=\"button2\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" title=\"";
        // line 45
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_LISTITEM_HELP");
        echo "\" />
\t";
        // line 46
        if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
            // line 47
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP");
            echo "\" />
\t";
        }
        // line 49
        echo "\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 50
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP");
            echo "\" />
\t";
        }
        // line 52
        echo "\t";
        if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
            // line 53
            echo "\t\t<input type=\"button\" class=\"button2\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP");
            echo "\" />
\t";
        }
        // line 55
        echo "\t<select name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP");
        echo "\">
\t\t<option value=\"50\">";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_TINY");
        echo "</option>
\t\t<option value=\"85\">";
        // line 57
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_SMALL");
        echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
        // line 58
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_NORMAL");
        echo "</option>
\t\t";
        // line 59
        if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
            // line 60
            echo "\t\t<option value=\"150\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_LARGE");
            echo "</option>
\t\t";
            // line 61
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                // line 62
                echo "\t\t<option value=\"200\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_HUGE");
                echo "</option>
\t\t";
            }
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t</select>
\t";
        // line 66
        // line 67
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", []));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 68
            echo "\t<input type=\"button\" class=\"button2\" name=\"addbbcode";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", []);
            echo "\" value=\"";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", []);
            echo "\" onclick=\"bbstyle(";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", []);
            echo ")\" title=\"";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", []);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</div>
";
        // line 71
    }

    public function getTemplateName()
    {
        return "acp_posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 71,  274 => 70,  259 => 68,  254 => 67,  253 => 66,  250 => 65,  247 => 64,  241 => 62,  239 => 61,  234 => 60,  232 => 59,  228 => 58,  224 => 57,  220 => 56,  215 => 55,  209 => 53,  206 => 52,  200 => 50,  197 => 49,  191 => 47,  189 => 46,  185 => 45,  181 => 44,  177 => 43,  172 => 42,  166 => 40,  164 => 39,  160 => 38,  156 => 37,  152 => 36,  149 => 35,  148 => 34,  145 => 33,  131 => 32,  124 => 27,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_posting_buttons.html", "");
    }
}
