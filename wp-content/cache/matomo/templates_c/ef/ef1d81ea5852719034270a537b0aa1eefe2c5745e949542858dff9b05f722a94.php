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

/* @TagManager/tagmanager.twig */
class __TwigTemplate_1bc10dcd52fe20b3c4568d83a17294815562857d724b29c8ed8cd740f16927ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'notification' => [$this, 'block_notification'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["categoryTitle"] = ('' === $tmp = "Tag Manager") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 5
        $context["bodyClass"] = call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.bodyClass", "tagmanager"]);
        // line 6
        $context["isAdminArea"] = true;
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@TagManager/tagmanager.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $context["topMenuModule"] = "TagManager";
        // line 10
        echo "    ";
        $context["topMenuAction"] = (((isset($context["tagAction"]) || array_key_exists("tagAction", $context))) ? (_twig_default_filter((isset($context["tagAction"]) || array_key_exists("tagAction", $context) ? $context["tagAction"] : (function () { throw new RuntimeError('Variable "tagAction" does not exist.', 10, $this->source); })()), "")) : (""));
        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.header", "tagmanager"]);
        echo "
    ";
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 13
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.footer", "tagmanager"]);
        echo "
";
    }

    // line 16
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "@TagManager/tagmanager.twig", 17)->display($context);
        // line 18
        echo "
<div class=\"top_controls\">
    <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>

    ";
        // line 22
        $this->displayBlock('topcontrols', $context, $blocks);
        // line 32
        echo "
    <span class=\"icon icon-arrowup\"></span>
</div>

";
        // line 36
        $macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@TagManager/tagmanager.twig", 36)->unwrap();
        // line 37
        echo "    ";
        echo twig_call_macro($macros["ajax"], "macro_requestErrorDiv", [(((isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context))) ? (_twig_default_filter((isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context) ? $context["emailSuperUser"] : (function () { throw new RuntimeError('Variable "emailSuperUser" does not exist.', 37, $this->source); })()), "")) : ("")), (isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 37, $this->source); })()), (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 37, $this->source); })())], 37, $context, $this->getSourceContext());
        echo "
    ";
        // line 38
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.beforeContent", "admin", (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 38, $this->source); })()), (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 38, $this->source); })())]);
        echo "

<div class=\"page\">

    ";
        // line 42
        if (( !(isset($context["showMenu"]) || array_key_exists("showMenu", $context)) || (isset($context["showMenu"]) || array_key_exists("showMenu", $context) ? $context["showMenu"] : (function () { throw new RuntimeError('Variable "showMenu" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "        ";
            $macros["menu"] = $this->loadTemplate("@CoreHome/_menu.twig", "@TagManager/tagmanager.twig", 43)->unwrap();
            // line 44
            echo "        ";
            echo twig_call_macro($macros["menu"], "macro_menu", [(isset($context["tagManagerMenu"]) || array_key_exists("tagManagerMenu", $context) ? $context["tagManagerMenu"] : (function () { throw new RuntimeError('Variable "tagManagerMenu" does not exist.', 44, $this->source); })()), false, "Menu--admin", (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 44, $this->source); })()), (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 44, $this->source); })())], 44, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 46
        echo "
    <div class=\"pageWrap\">
        <a name=\"main\"></a>
        ";
        // line 49
        $this->displayBlock('notification', $context, $blocks);
        // line 52
        echo "        ";
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@TagManager/tagmanager.twig", 52)->display($context);
        // line 53
        echo "
        <div class=\"admin\" id=\"content\" ng-cloak>

            <div class=\"ui-confirm\" id=\"alert\">
                <h2></h2>
                <input role=\"no\" type=\"button\" value=\"";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
        echo "\"/>
            </div>

            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "
        </div>
    </div>
</div>

";
    }

    // line 22
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
        <div class=\"top_bar_sites_selector piwikTopControl\">
            <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
        </div>

        <div class=\"piwikTopControl\">
            <div piwik-container-selector ";
        // line 29
        if (((isset($context["container"]) || array_key_exists("container", $context)) &&  !twig_test_empty((isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 29, $this->source); })())))) {
            echo "container-name=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 29, $this->source); })()), "idcontainer", [], "any", false, false, false, 29), "html", null, true);
            echo ")\"";
        }
        echo "></div>
        </div>
    ";
    }

    // line 49
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "            ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "@TagManager/tagmanager.twig", 50)->display($context);
        // line 51
        echo "        ";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@TagManager/tagmanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 62,  198 => 61,  194 => 51,  191 => 50,  187 => 49,  174 => 29,  166 => 23,  162 => 22,  153 => 63,  151 => 61,  145 => 58,  138 => 53,  135 => 52,  133 => 49,  128 => 46,  122 => 44,  119 => 43,  117 => 42,  110 => 38,  105 => 37,  103 => 36,  97 => 32,  95 => 22,  89 => 18,  86 => 17,  82 => 16,  76 => 13,  72 => 12,  67 => 11,  64 => 10,  61 => 9,  57 => 8,  52 => 1,  50 => 6,  48 => 5,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% set categoryTitle %}Tag Manager{% endset %}

{% set bodyClass = postEvent('Template.bodyClass', 'tagmanager') %}
{% set isAdminArea = true %}

{% block body %}
    {% set topMenuModule = 'TagManager' %}
    {% set topMenuAction = tagAction|default('') %}
    {{ postEvent(\"Template.header\", \"tagmanager\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"tagmanager\") }}
{% endblock %}

{% block root %}
    {% include \"@CoreHome/_topScreen.twig\" %}

<div class=\"top_controls\">
    <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>

    {% block topcontrols %}

        <div class=\"top_bar_sites_selector piwikTopControl\">
            <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
        </div>

        <div class=\"piwikTopControl\">
            <div piwik-container-selector {% if container is defined and container is not empty %}container-name=\"{{ container.name }} ({{ container.idcontainer }})\"{% endif %}></div>
        </div>
    {% endblock %}

    <span class=\"icon icon-arrowup\"></span>
</div>

{% import 'ajaxMacros.twig' as ajax %}
    {{ ajax.requestErrorDiv(emailSuperUser|default(''), areAdsForProfessionalServicesEnabled, currentModule) }}
    {{ postEvent(\"Template.beforeContent\", \"admin\", currentModule, currentAction) }}

<div class=\"page\">

    {% if showMenu is not defined or showMenu %}
        {% import '@CoreHome/_menu.twig' as menu %}
        {{ menu.menu(tagManagerMenu, false, 'Menu--admin', currentModule, currentAction) }}
    {% endif %}

    <div class=\"pageWrap\">
        <a name=\"main\"></a>
        {% block notification %}
            {% include \"@CoreHome/_notifications.twig\" %}
        {% endblock %}
        {% include \"@CoreHome/_warningInvalidHost.twig\" %}

        <div class=\"admin\" id=\"content\" ng-cloak>

            <div class=\"ui-confirm\" id=\"alert\">
                <h2></h2>
                <input role=\"no\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
            </div>

            {% block content %}
            {% endblock %}

        </div>
    </div>
</div>

{% endblock %}
", "@TagManager/tagmanager.twig", "/home/prestigegt/www/wp-content/plugins/matomo/app/plugins/TagManager/templates/tagmanager.twig");
    }
}
