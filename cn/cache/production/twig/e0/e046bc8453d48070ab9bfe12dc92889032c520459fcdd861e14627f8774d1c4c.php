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

/* acp_update.html */
class __TwigTemplate_e5b6151e5a85196ebca6c20f09f39ebbb2ca09bd217a7c5ff9add3d6b62c57d8 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_update.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSION_CHECK");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSION_CHECK_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_UPDATE_INCOMPLETE"]) ? $context["S_UPDATE_INCOMPLETE"] : null)) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPDATE_INCOMPLETE");
            echo " ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPDATE_INCOMPLETE_MORE");
            echo "</p>
\t</div>
";
        }
        // line 14
        if ((isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
            // line 15
            echo "\t<div class=\"successbox\">
\t\t<p>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSION_UP_TO_DATE_ACP");
            echo " - <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
";
        } elseif ( !        // line 18
(isset($context["S_UPDATE_INCOMPLETE"]) ? $context["S_UPDATE_INCOMPLETE"] : null)) {
            // line 19
            echo "\t<div class=\"errorbox\">
\t\t<p>";
            // line 20
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSION_NOT_UP_TO_DATE_ACP");
            echo " - <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
";
        }
        // line 23
        if ((isset($context["S_VERSION_UPGRADEABLE"]) ? $context["S_VERSION_UPGRADEABLE"] : null)) {
            // line 24
            echo "\t<div class=\"errorbox notice\">
\t\t<p>";
            // line 25
            echo (isset($context["UPGRADE_INSTRUCTIONS"]) ? $context["UPGRADE_INSTRUCTIONS"] : null);
            echo "</p>
\t</div>
";
        }
        // line 28
        echo "
<fieldset>
\t<legend></legend>
\t";
        // line 31
        if ( !(isset($context["S_UPDATE_INCOMPLETE"]) ? $context["S_UPDATE_INCOMPLETE"] : null)) {
            // line 32
            echo "\t<dl>
\t\t<dt><label>";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_VERSION");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 34
            echo (isset($context["CURRENT_VERSION"]) ? $context["CURRENT_VERSION"] : null);
            echo "</strong></dd>
\t</dl>
\t";
        } else {
            // line 37
            echo "\t<dl>
\t\t<dt><label>";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILES_VERSION");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 39
            echo (isset($context["FILES_VERSION"]) ? $context["FILES_VERSION"] : null);
            echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 42
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DATABASE_VERSION");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 43
            echo (isset($context["CURRENT_VERSION"]) ? $context["CURRENT_VERSION"] : null);
            echo "</strong></dd>
\t</dl>
\t";
        }
        // line 46
        echo "</fieldset>

";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", []));
        foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
            // line 49
            echo "\t<fieldset>
\t\t<legend></legend>
\t\t<dl>
\t\t\t<dt><label>";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_VERSION");
            echo "</label></dt>
\t\t\t<dd><strong>";
            // line 53
            echo $this->getAttribute($context["updates_available"], "current", []);
            echo "</strong></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
            // line 56
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RELEASE_ANNOUNCEMENT");
            echo "</label></dt>
\t\t\t<dd><strong><a href=\"";
            // line 57
            echo $this->getAttribute($context["updates_available"], "announcement", []);
            echo "\">";
            echo $this->getAttribute($context["updates_available"], "announcement", []);
            echo "</a></strong></dd>
\t\t</dl>
\t</fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        // line 62
        if ((isset($context["S_UPDATE_INCOMPLETE"]) ? $context["S_UPDATE_INCOMPLETE"] : null)) {
            // line 63
            echo "\t";
            echo (isset($context["INCOMPLETE_INSTRUCTIONS"]) ? $context["INCOMPLETE_INSTRUCTIONS"] : null);
            echo "
\t<br>
";
        }
        // line 66
        echo "
";
        // line 67
        if ( !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
            // line 68
            echo "\t";
            echo (isset($context["UPDATE_INSTRUCTIONS"]) ? $context["UPDATE_INSTRUCTIONS"] : null);
            echo "
\t<br /><br />
";
        }
        // line 71
        echo "
";
        // line 72
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_update.html", 72)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 72,  216 => 71,  209 => 68,  207 => 67,  204 => 66,  197 => 63,  195 => 62,  192 => 61,  180 => 57,  176 => 56,  170 => 53,  166 => 52,  161 => 49,  157 => 48,  153 => 46,  147 => 43,  143 => 42,  137 => 39,  133 => 38,  130 => 37,  124 => 34,  120 => 33,  117 => 32,  115 => 31,  110 => 28,  104 => 25,  101 => 24,  99 => 23,  89 => 20,  86 => 19,  84 => 18,  75 => 16,  72 => 15,  70 => 14,  62 => 11,  59 => 10,  57 => 9,  52 => 7,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_update.html", "");
    }
}
