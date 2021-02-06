<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @CoreHome/_javaScriptDisabled.twig */
class __TwigTemplate_a3941c0a1ef21080b3f0deb6079dac3871647e5ec280597f1b87f84cc5b450d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<noscript>
    <div id=\"javascriptDisabled\">";
        // line 2
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_JavascriptDisabled", "<a href=\"\">", "</a>"]);
        echo "</div>
</noscript>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_javaScriptDisabled.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<noscript>
    <div id=\"javascriptDisabled\">{{ 'CoreHome_JavascriptDisabled'|translate('<a href=\"\">','</a>')|raw }}</div>
</noscript>
", "@CoreHome/_javaScriptDisabled.twig", "/home/prestigegt/www/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_javaScriptDisabled.twig");
    }
}
