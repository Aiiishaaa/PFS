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

/* @CoreVisualizations/macros.twig */
class __TwigTemplate_1bc17d27a4e1172b1c055853a045117957717bd9f967216d7c1fe5a85ced6877 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 21
        echo "
";
    }

    // line 2
    public function macro_sparklineEvolution($__evolution__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "evolution" => $__evolution__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            $context["evolutionPretty"] = twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 3, $this->source); })()), "percent", [], "any", false, false, false, 3);
            // line 4
            echo "
    ";
            // line 5
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 5, $this->source); })()), "percent", [], "any", false, false, false, 5), 0))) {
                // line 6
                echo "        ";
                $context["evolutionClass"] = "negative-evolution";
                // line 7
                echo "        ";
                $context["evolutionIcon"] = "arrow_down.png";
                // line 8
                echo "    ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 8, $this->source); })()), "percent", [], "any", false, false, false, 8), 0)) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 8, $this->source); })()), "percent", [], "any", false, false, false, 8), "0%")))) {
                // line 9
                echo "        ";
                $context["evolutionClass"] = "neutral-evolution";
                // line 10
                echo "        ";
                $context["evolutionIcon"] = "stop.png";
                // line 11
                echo "    ";
            } else {
                // line 12
                echo "        ";
                $context["evolutionClass"] = "positive-evolution";
                // line 13
                echo "        ";
                $context["evolutionIcon"] = "arrow_up.png";
                // line 14
                echo "        ";
                $context["evolutionPretty"] = ("+" . twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 14, $this->source); })()), "percent", [], "any", false, false, false, 14));
                // line 15
                echo "    ";
            }
            // line 16
            echo "
    <span class=\"metricEvolution\" title=\"";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 17, $this->source); })()), "tooltip", [], "any", false, false, false, 17)]), "html_attr");
            echo "\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionIcon"]) || array_key_exists("evolutionIcon", $context) ? $context["evolutionIcon"] : (function () { throw new RuntimeError('Variable "evolutionIcon" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"/>
    <strong class=\"";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionClass"]) || array_key_exists("evolutionClass", $context) ? $context["evolutionClass"] : (function () { throw new RuntimeError('Variable "evolutionClass" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionPretty"]) || array_key_exists("evolutionPretty", $context) ? $context["evolutionPretty"] : (function () { throw new RuntimeError('Variable "evolutionPretty" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "</strong></span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_singleSparkline($__sparkline__ = null, $__allMetricsDocumentation__ = null, $__areSparklinesLinkable__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "sparkline" => $__sparkline__,
            "allMetricsDocumentation" => $__allMetricsDocumentation__,
            "areSparklinesLinkable" => $__areSparklinesLinkable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 23
            echo "
    <div class=\"sparkline ";
            // line 24
            if (((isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context)) &&  !(isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 24, $this->source); })()))) {
                echo "notLinkable";
            }
            echo "\"
         ";
            // line 25
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "seriesIndices", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "seriesIndices", [], "any", false, false, false, 25))) : ("")))) {
                echo "data-series-indices=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 25, $this->source); })()), "seriesIndices", [], "any", false, false, false, 25)), "html_attr");
                echo "\"";
            }
            // line 26
            echo "         ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "graphParams", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "graphParams", [], "any", false, false, false, 26))) : ("")))) {
                echo "data-graph-params=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 26, $this->source); })()), "graphParams", [], "any", false, false, false, 26)), "html_attr");
                echo "\"";
            }
            // line 27
            echo "    >
        <div>
            ";
            // line 29
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "title", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "title", [], "any", false, false, false, 29))) : ("")))) {
                echo "<h6 class=\"sparkline-title\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29)]), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), "html", null, true);
                echo "</h6>";
            }
            // line 30
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 30, $this->source); })()), "url", [], "any", false, false, false, 30)) {
                echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 30, $this->source); })()), "url", [], "any", false, false, false, 30)]);
            }
            // line 31
            echo "        </div>
\t<div>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 33, $this->source); })()), "metrics", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["groupName"] => $context["group"]) {
                // line 34
                echo "            ";
                if ( !twig_test_empty($context["groupName"])) {
                    echo "<span class=\"metric-group-title\">";
                    echo \Piwik\piwik_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "</span>";
                }
                // line 35
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["group"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
                    // line 36
                    echo "                <span class=\"sparkline-metrics\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["allMetricsDocumentation"] ?? null), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 36), [], "array", true, true, false, 36) && twig_get_attribute($this->env, $this->source, (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 36, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 36), [], "array", false, false, false, 36))) {
                        echo "title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 36, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 36), [], "array", false, false, false, 36), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                ";
                    // line 37
                    if (twig_in_filter("%s", twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 37))) {
                        // line 38
                        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 38), (("<strong>" . call_user_func_array($this->env->getFilter('number')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["metric"], "value", [], "any", false, false, false, 38), 2])) . "</strong>")]);
                    } else {
                        // line 40
                        echo "                    <strong>";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["metric"], "value", [], "any", false, false, false, 40), 2]), "html", null, true);
                        echo "</strong> ";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 40), "html", null, true);
                    }
                    // line 41
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) {
                        echo ", ";
                    }
                    // line 42
                    echo "                </span>
                ";
                    // line 43
                    if (twig_get_attribute($this->env, $this->source, $context["metric"], "evolution", [], "any", true, true, false, 43)) {
                        // line 44
                        echo "                    ";
                        echo twig_call_macro($macros["_self"], "macro_sparklineEvolution", [twig_get_attribute($this->env, $this->source, $context["metric"], "evolution", [], "any", false, false, false, 44)], 44, $context, $this->getSourceContext());
                        echo "
                ";
                    }
                    // line 46
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "evolution", [], "any", true, true, false, 48)) {
                // line 49
                echo "            ";
                echo twig_call_macro($macros["_self"], "macro_sparklineEvolution", [twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 49, $this->source); })()), "evolution", [], "any", false, false, false, 49)], 49, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 51
            echo "\t</div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 51,  266 => 49,  263 => 48,  257 => 47,  243 => 46,  237 => 44,  235 => 43,  232 => 42,  228 => 41,  222 => 40,  219 => 38,  217 => 37,  208 => 36,  190 => 35,  183 => 34,  179 => 33,  175 => 31,  170 => 30,  162 => 29,  158 => 27,  151 => 26,  145 => 25,  139 => 24,  136 => 23,  121 => 22,  108 => 19,  104 => 18,  100 => 17,  97 => 16,  94 => 15,  91 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  65 => 5,  62 => 4,  59 => 3,  46 => 2,  41 => 21,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro sparklineEvolution(evolution) %}
    {% set evolutionPretty = evolution.percent %}

    {% if evolution.percent < 0 %}
        {% set evolutionClass = 'negative-evolution' %}
        {% set evolutionIcon  = 'arrow_down.png' %}
    {% elseif evolution.percent == 0 or evolution.percent == '0%' %}
        {% set evolutionClass = 'neutral-evolution' %}
        {% set evolutionIcon  = 'stop.png' %}
    {% else %}
        {% set evolutionClass  = 'positive-evolution' %}
        {% set evolutionIcon   = 'arrow_up.png' %}
        {% set evolutionPretty = '+' ~ evolution.percent %}
    {% endif %}

    <span class=\"metricEvolution\" title=\"{{ evolution.tooltip|rawSafeDecoded|e('html_attr') }}\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/{{ evolutionIcon }}\"/>
    <strong class=\"{{ evolutionClass }}\">{{ evolutionPretty }}</strong></span>
{% endmacro %}

{% macro singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) %}

    <div class=\"sparkline {% if areSparklinesLinkable is defined and not areSparklinesLinkable %}notLinkable{% endif %}\"
         {% if sparkline.seriesIndices|default is not empty %}data-series-indices=\"{{ sparkline.seriesIndices|json_encode|e('html_attr') }}\"{% endif %}
         {% if sparkline.graphParams|default is not empty %}data-graph-params=\"{{ sparkline.graphParams|json_encode|e('html_attr') }}\"{% endif %}
    >
        <div>
            {% if sparkline.title|default is not empty %}<h6 class=\"sparkline-title\" title=\"{{ sparkline.title|rawSafeDecoded|e('html_attr') }}\">{{ sparkline.title }}</h6>{% endif %}
            {% if sparkline.url %}{{ sparkline(sparkline.url)|raw }}{% endif %}
        </div>
\t<div>
        {% for groupName, group in sparkline.metrics %}
            {% if groupName is not empty %}<span class=\"metric-group-title\">{{ groupName }}</span>{% endif %}
            {% for metric in group %}
                <span class=\"sparkline-metrics\" {% if allMetricsDocumentation[metric.column] is defined and allMetricsDocumentation[metric.column] %}title=\"{{ allMetricsDocumentation[metric.column] }}\"{% endif %}>
                {% if '%s' in metric.description -%}
                    {{ metric.description|translate(\"<strong>\"~metric.value|number(2)~\"</strong>\")|raw }}
                {%- else %}
                    <strong>{{ metric.value|number(2) }}</strong> {{ metric.description }}
                {%- endif %}{% if not loop.last %}, {% endif %}
                </span>
                {% if metric.evolution is defined %}
                    {{ _self.sparklineEvolution(metric.evolution) }}
                {% endif %}
            {% endfor %}
        {% endfor %}
        {% if sparkline.evolution is defined %}
            {{ _self.sparklineEvolution(sparkline.evolution) }}
        {% endif %}
\t</div>
    </div>
{% endmacro %}
", "@CoreVisualizations/macros.twig", "/home/prestigegt/www/wp-content/plugins/matomo/app/plugins/CoreVisualizations/templates/macros.twig");
    }
}
