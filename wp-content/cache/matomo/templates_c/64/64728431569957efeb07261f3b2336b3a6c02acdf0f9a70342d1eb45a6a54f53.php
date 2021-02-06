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

/* ajaxMacros.twig */
class __TwigTemplate_73153365f793b3ad66fd6d911a6f3da741cb9a67c7b0ee5399cf5e25c32a8270 extends Template
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
        // line 4
        echo "
";
        // line 15
        echo "
";
    }

    // line 1
    public function macro_errorDiv($__id__ = "ajaxError", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <div id=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\" style=\"display:none\"></div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_loadingDiv($__id__ = "ajaxLoadingDiv", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 6
            echo "<div id=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
            echo "
    </div>
    <div class=\"loadingSegment\">
        ";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_LoadingSegmentedDataMayTakeSomeTime"]), "html", null, true);
            echo "
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_requestErrorDiv($__emailSuperUser__ = null, $__areAdsForProfessionalServicesEnabled__ = false, $__currentModule__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailSuperUser" => $__emailSuperUser__,
            "areAdsForProfessionalServicesEnabled" => $__areAdsForProfessionalServicesEnabled__,
            "currentModule" => $__currentModule__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 17
            echo "    <div id=\"loadingError\">
        <div class=\"alert alert-danger\">

            ";
            // line 20
            if (((isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context)) && (isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context) ? $context["emailSuperUser"] : (function () { throw new RuntimeError('Variable "emailSuperUser" does not exist.', 20, $this->source); })()))) {
                // line 21
                echo "                ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ErrorRequest", (("<a href=\"mailto:" . (isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context) ? $context["emailSuperUser"] : (function () { throw new RuntimeError('Variable "emailSuperUser" does not exist.', 21, $this->source); })())) . "\">"), "</a>"]);
                echo "
            ";
            } else {
                // line 23
                echo "                ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ErrorRequest", "", ""]), "html", null, true);
                echo "
            ";
            }
            // line 25
            echo "
            <br /><br />
            ";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NeedMoreHelp"]), "html", null, true);
            echo "

            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/faq/troubleshooting/faq_19489/\">";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Faq"]), "html", null, true);
            echo "</a> –
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://forum.matomo.org/\">";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_CommunityHelp"]), "html", null, true);
            echo "</a>";
            // line 32
            if ((isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 32, $this->source); })())) {
                // line 33
                echo "                –
                ";
                // line 34
                $context["supportUrl"] = (("https://matomo.org/support-plans/?pk_campaign=Help&pk_medium=AjaxError&pk_content=" . (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 34, $this->source); })())) . "&pk_source=Matomo_App");
                // line 35
                echo "                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["supportUrl"]) || array_key_exists("supportUrl", $context) ? $context["supportUrl"] : (function () { throw new RuntimeError('Variable "supportUrl" does not exist.', 35, $this->source); })()), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalHelp"]), "html", null, true);
                echo "</a>";
            }
            // line 36
            echo ".
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "ajaxMacros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 36,  167 => 35,  165 => 34,  162 => 33,  160 => 32,  157 => 30,  153 => 29,  148 => 27,  144 => 25,  138 => 23,  132 => 21,  130 => 20,  125 => 17,  110 => 16,  97 => 11,  89 => 8,  83 => 6,  70 => 5,  58 => 2,  45 => 1,  40 => 15,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro errorDiv(id='ajaxError') %}
    <div id=\"{{ id }}\" style=\"display:none\"></div>
{% endmacro %}

{% macro loadingDiv(id='ajaxLoadingDiv') %}
<div id=\"{{ id }}\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"{{ 'General_LoadingData'|translate }}\" />{{ 'General_LoadingData'|translate }}
    </div>
    <div class=\"loadingSegment\">
        {{ 'SegmentEditor_LoadingSegmentedDataMayTakeSomeTime'|translate }}
    </div>
</div>
{% endmacro %}

{% macro requestErrorDiv(emailSuperUser, areAdsForProfessionalServicesEnabled = false, currentModule = '') %}
    <div id=\"loadingError\">
        <div class=\"alert alert-danger\">

            {% if emailSuperUser is defined and emailSuperUser %}
                {{ 'General_ErrorRequest'|translate('<a href=\"mailto:' ~ emailSuperUser ~ '\">', '</a>')|raw }}
            {% else %}
                {{ 'General_ErrorRequest'|translate('', '') }}
            {% endif %}

            <br /><br />
            {{ 'General_NeedMoreHelp'|translate }}

            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/faq/troubleshooting/faq_19489/\">{{ 'General_Faq'|translate }}</a> –
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://forum.matomo.org/\">{{ 'Feedback_CommunityHelp'|translate }}</a>

            {%- if areAdsForProfessionalServicesEnabled %}
                –
                {% set supportUrl = 'https://matomo.org/support-plans/?pk_campaign=Help&pk_medium=AjaxError&pk_content=' ~ currentModule ~ '&pk_source=Matomo_App' %}
                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ supportUrl|e('html_attr') }}\">{{ 'Feedback_ProfessionalHelp'|translate }}</a>
            {%- endif %}.
        </div>
    </div>
{% endmacro %}
", "ajaxMacros.twig", "/home/prestigegt/www/wp-content/plugins/matomo/app/plugins/Morpheus/templates/ajaxMacros.twig");
    }
}
