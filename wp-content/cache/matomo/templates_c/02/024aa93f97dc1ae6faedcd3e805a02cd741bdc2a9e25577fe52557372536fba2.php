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

/* @TagManager/manageContainers.twig */
class __TwigTemplate_e604920f318377deebcca878a06da08f26054a6526ba9dfff3f85b6fb3adfd86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@TagManager/tagmanager.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), ["TagManager_ManageX", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["TagManager_Containers"])]);
        // line 1
        $this->parent = $this->loadTemplate("@TagManager/tagmanager.twig", "@TagManager/manageContainers.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"top_bar_sites_selector piwikTopControl\">
        <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
    </div>

    <div class=\"piwikTopControl\">
        <div piwik-container-selector ";
        // line 12
        if (((isset($context["container"]) || array_key_exists("container", $context)) &&  !twig_test_empty((isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 12, $this->source); })())))) {
            echo "container-name=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "\"";
        }
        echo "></div>
    </div>

";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div piwik-container-manage>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@TagManager/manageContainers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  74 => 17,  62 => 12,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@TagManager/tagmanager.twig' %}

{% set title = 'TagManager_ManageX'|translate('TagManager_Containers'|translate) %}

{% block topcontrols %}

    <div class=\"top_bar_sites_selector piwikTopControl\">
        <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
    </div>

    <div class=\"piwikTopControl\">
        <div piwik-container-selector {% if container is defined and container is not empty %}container-name=\"{{ container.name }}\"{% endif %}></div>
    </div>

{% endblock %}

{% block content %}
    <div piwik-container-manage>
    </div>
{% endblock %}", "@TagManager/manageContainers.twig", "/home/prestigegt/www/wp-content/plugins/matomo/app/plugins/TagManager/templates/manageContainers.twig");
    }
}
