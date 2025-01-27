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

/* ucp_main_drafts.html */
class __TwigTemplate_f3904e5a4bfa02cad3db411a363acad6216a3f6fdb3a890adbf0ef1176f4fd00 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_drafts.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"postform\" method=\"post\" action=\"";
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
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DRAFTS_EXPLAIN");
        echo "</p>

";
        // line 12
        if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
            // line 13
            echo "
\t\t";
            // line 14
            $location = "posting_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_editor.html", "ucp_main_drafts.html", 14)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 15
            echo "\t\t</div>
\t</div>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
            // line 19
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"reset\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 20
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE");
            echo "\" class=\"button1\" />
\t\t\t\t";
            // line 21
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t</fieldset>

";
        } else {
            // line 25
            echo "
\t";
            // line 26
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", []))) {
                // line 27
                echo "\t\t<ul class=\"topiclist missing-column\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 30
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DRAFT_TITLE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                // line 31
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DATE");
                echo "</span></dd>
\t\t\t\t\t<dd class=\"mark\">";
                // line 32
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist missing-column\">

\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", []));
                foreach ($context['_seq'] as $context["_key"] => $context["draftrow"]) {
                    // line 39
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["draftrow"], "S_ROW_COUNT", []) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a class=\"topictitle\" href=\"";
                    // line 43
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", []);
                    echo "\">";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_SUBJECT", []);
                    echo "</a><br />
\t\t\t\t\t\t\t";
                    // line 44
                    if ($this->getAttribute($context["draftrow"], "S_LINK_TOPIC", [])) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_VIEW", []);
                        echo "\">";
                        echo $this->getAttribute($context["draftrow"], "TITLE", []);
                        echo "</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 45
$context["draftrow"], "S_LINK_FORUM", [])) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_VIEW", []);
                        echo "\">";
                        echo $this->getAttribute($context["draftrow"], "TITLE", []);
                        echo "</a>
\t\t\t\t\t\t\t";
                    } elseif (                    // line 46
(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPIC_FORUM");
                    }
                    // line 48
                    echo "\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t";
                    // line 49
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DATE");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["draftrow"], "DATE", []);
                    echo "</strong><br />
\t\t\t\t\t\t\t\t";
                    // line 50
                    if ($this->getAttribute($context["draftrow"], "U_INSERT", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_INSERT", []);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_EDIT");
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                    // line 54
                    echo $this->getAttribute($context["draftrow"], "DATE", []);
                    echo "<br />";
                    if ($this->getAttribute($context["draftrow"], "U_INSERT", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_INSERT", []);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_EDIT");
                    echo "</a></span></dd>
\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"d[";
                    // line 55
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", []);
                    echo "]\" id=\"d";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", []);
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draftrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t</ul>
\t";
            } else {
                // line 61
                echo "\t\t<p><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SAVED_DRAFTS");
                echo "</strong></p>
\t";
            }
            // line 63
            echo "
\t\t</div>
\t</div>

\t";
            // line 67
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", []))) {
                // line 68
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"delete\" value=\"";
                // line 69
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MARKED");
                echo "\" />
\t\t\t<div><a href=\"#\" onclick=\"marklist('postform', '', true); return false;\">";
                // line 70
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('postform', '', false); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t\t";
                // line 71
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</fieldset>
\t";
            }
            // line 74
            echo "
";
        }
        // line 76
        echo "
</form>

";
        // line 79
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_drafts.html", 79)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_drafts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 79,  277 => 76,  273 => 74,  267 => 71,  261 => 70,  257 => 69,  254 => 68,  252 => 67,  246 => 63,  240 => 61,  236 => 59,  224 => 55,  208 => 54,  191 => 50,  184 => 49,  181 => 48,  176 => 47,  174 => 46,  164 => 45,  154 => 44,  148 => 43,  136 => 39,  132 => 38,  123 => 32,  119 => 31,  115 => 30,  110 => 27,  108 => 26,  105 => 25,  98 => 21,  94 => 20,  88 => 19,  82 => 15,  70 => 14,  67 => 13,  65 => 12,  60 => 10,  52 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_main_drafts.html", "");
    }
}
