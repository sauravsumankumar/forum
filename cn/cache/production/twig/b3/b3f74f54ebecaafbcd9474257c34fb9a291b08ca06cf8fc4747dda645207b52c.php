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

/* permission_forum_copy.html */
class __TwigTemplate_037de5eb7a23c8522abe2b4d4e5873fe1a62d94e10e9c85fa04eda1ad6992658 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "permission_forum_copy.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FORUM_PERMISSIONS_COPY");
        echo "</h1>

\t";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FORUM_PERMISSIONS_COPY_EXPLAIN");
        echo "

\t<form id=\"forum_perm_copy\" method=\"post\" action=\"";
        // line 9
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

\t<fieldset>
\t\t<legend>";
        // line 12
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUM");
        echo "</legend>

\t\t<dl>
\t\t\t<dt>";
        // line 15
        echo "<label for=\"src_forum\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_PERMISSIONS_FROM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_PERMISSIONS_FORUM_FROM_EXPLAIN");
        echo "</span>";
        echo "</dt>
\t\t\t<dd><select id=\"src_forum\" name=\"src_forum_id\"><option value=\"0\">";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_FORUM");
        echo "</option><option value=\"-1\">------------------</option>";
        echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
        echo "</select></dd>
\t\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUM");
        echo "</legend>
\t\t<p>";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOK_UP_FORUMS_EXPLAIN");
        echo "</p>

\t\t<dl>
\t\t\t<dt>";
        // line 25
        echo "<label for=\"dest_forums\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_PERMISSIONS_TO");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_PERMISSIONS_FORUM_TO_EXPLAIN");
        echo "</span>";
        echo "</dt>
\t\t\t<dd><select id=\"dest_forums\" name=\"dest_forum_ids[]\" multiple=\"multiple\" size=\"10\">";
        // line 26
        echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
        echo "</select></dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 32
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" />
\t\t";
        // line 34
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t";
        // line 35
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>

\t</form>

";
        // line 40
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "permission_forum_copy.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "permission_forum_copy.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  107 => 26,  98 => 25,  92 => 22,  88 => 21,  78 => 16,  69 => 15,  63 => 12,  57 => 9,  52 => 7,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "permission_forum_copy.html", "");
    }
}
