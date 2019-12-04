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

/* captcha_default_acp_demo.html */
class __TwigTemplate_0d9498c2a1e75844b6727fbdcc12ebfc733c3190493c7c9b15247d7cdace692d extends \Twig\Template
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
        echo "<dl>
\t<dt><label for=\"captcha_preview\">";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CAPTCHA_PREVIEW_EXPLAIN");
        echo "</span></dt>
\t<dd><img src=\"";
        // line 3
        echo (isset($context["CONFIRM_IMAGE"]) ? $context["CONFIRM_IMAGE"] : null);
        echo "\" alt=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
        echo "\" width=\"360\" height=\"96\" id=\"captcha_preview\" /></dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "captcha_default_acp_demo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_default_acp_demo.html", "");
    }
}
