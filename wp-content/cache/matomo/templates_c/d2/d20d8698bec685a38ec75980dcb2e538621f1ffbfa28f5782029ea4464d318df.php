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

/* @CoreHome/_dataTableActions.twig */
class __TwigTemplate_e468176d9645b7995b003a77ca4849a1b86003f66f3bf5e94655948ff71d5742 extends Template
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
        echo " ";
        $context["randomIdForDropdown"] = twig_random($this->env, 999999);
        // line 2
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 3, $this->source); })()), "show_footer", [], "any", false, false, false, 3) && twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 3, $this->source); })()), "show_footer_icons", [], "any", false, false, false, 3))) {
            // line 4
            echo "
        <a class='dropdown-button dropdownConfigureIcon dataTableAction'
           href='javascript:;'
           data-target='dropdownConfigure";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "'><span class=\"icon-configure\"></span></a>

        ";
            // line 9
            $context["activeFooterIcon"] = "";
            // line 10
            echo "        ";
            $context["numIcons"] = 0;
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <ul id='dropdownVisualizations";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "' class='dropdown-content dataTableFooterIcons'>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footerIcons"]) || array_key_exists("footerIcons", $context) ? $context["footerIcons"] : (function () { throw new RuntimeError('Variable "footerIcons" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["footerIconGroup"]) {
                // line 14
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIconGroup"], "buttons", [], "any", false, false, false, 14), function ($__footerIcon__) use ($context, $macros) { $context["footerIcon"] = $__footerIcon__; return twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 14); }));
                foreach ($context['_seq'] as $context["_key"] => $context["footerIcon"]) {
                    // line 15
                    echo "                        <li>
                            ";
                    // line 16
                    $context["numIcons"] = ((isset($context["numIcons"]) || array_key_exists("numIcons", $context) ? $context["numIcons"] : (function () { throw new RuntimeError('Variable "numIcons" does not exist.', 16, $this->source); })()) + 1);
                    // line 17
                    echo "                            ";
                    $context["isActiveEcommerceView"] = (twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "abandonedCarts", [], "any", true, true, false, 17) && (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 18
$context["footerIcon"], "id", [], "any", false, false, false, 18), "ecommerceOrder")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 18, $this->source); })()), "abandonedCarts", [], "any", false, false, false, 18), 0))) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 19
$context["footerIcon"], "id", [], "any", false, false, false, 19), "ecommerceAbandonedCart")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 19, $this->source); })()), "abandonedCarts", [], "any", false, false, false, 19), 1)))));
                    // line 20
                    echo "                            <a class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIconGroup"], "class", [], "any", false, false, false, 20), "html", null, true);
                    echo " tableIcon ";
                    if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 20, $this->source); })()), "viewDataTable", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["footerIcon"], "id", [], "any", false, false, false, 20))) || (isset($context["isActiveEcommerceView"]) || array_key_exists("isActiveEcommerceView", $context) ? $context["isActiveEcommerceView"] : (function () { throw new RuntimeError('Variable "isActiveEcommerceView" does not exist.', 20, $this->source); })()))) {
                        echo "activeIcon";
                        $context["activeFooterIcon"] = twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 20);
                    }
                    echo "\"
                               data-footer-icon-id=\"";
                    // line 21
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "id", [], "any", false, false, false, 21), "html", null, true);
                    echo "\">
                                ";
                    // line 22
                    if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 22)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "icon-") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                        // line 23
                        echo "                                    <span title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "title", [], "any", false, false, false, 23), "html", null, true);
                        echo "\" class=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 23), "html", null, true);
                        echo "\"></span>
                                ";
                    } else {
                        // line 25
                        echo "                                    <img width=\"16\" height=\"16\" title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "title", [], "any", false, false, false, 25), "html", null, true);
                        echo "\" src=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 25), "html", null, true);
                        echo "\"/>
                                ";
                    }
                    // line 27
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["footerIcon"], "title", [], "any", true, true, false, 27)) {
                        echo "<span>";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "title", [], "any", false, false, false, 27), "html", null, true);
                        echo "</span>";
                    }
                    // line 28
                    echo "                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    <li class=\"divider\"></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIconGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ul>
        ";
            $context["visualizationIcons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 36, $this->source); })()), "show_periods", [], "any", false, false, false, 36)) {
                // line 37
                echo "            <a class=\"dropdown-button dataTableAction activatePeriodsSelection\"
               href=\"javascript:;\"
               title=\"";
                // line 39
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ChangePeriod"]), "html_attr");
                echo "\"
               data-target=\"dropdownPeriods";
                // line 40
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 40, $this->source); })()), "html", null, true);
                echo "\">
                <span class=\"icon-calendar\"></span>
            </a>
            <ul id='dropdownPeriods";
                // line 43
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "' class='dropdown-content dataTablePeriods'>
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 44, $this->source); })()), "selectable_periods", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["selectablePeriod"]) {
                    // line 45
                    echo "                    <li>
                        <a data-period=\"";
                    // line 46
                    echo \Piwik\piwik_escape_filter($this->env, $context["selectablePeriod"], "html", null, true);
                    echo "\" class=\"tableIcon ";
                    if ((0 === twig_compare(((twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "period", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "period", [], "any", false, false, false, 46), "")) : ("")), $context["selectablePeriod"]))) {
                        echo "activeIcon";
                    }
                    echo "\">
                            <span>";
                    // line 47
                    echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 47), $context["selectablePeriod"], [], "array", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 47), $context["selectablePeriod"], [], "array", false, false, false, 47), $context["selectablePeriod"])) : ($context["selectablePeriod"])), "html", null, true);
                    echo "</span>
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectablePeriod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            </ul>
        ";
            }
            // line 53
            echo "
        ";
            // line 54
            if (((isset($context["activeFooterIcon"]) || array_key_exists("activeFooterIcon", $context) ? $context["activeFooterIcon"] : (function () { throw new RuntimeError('Variable "activeFooterIcon" does not exist.', 54, $this->source); })()) && (1 === twig_compare((isset($context["numIcons"]) || array_key_exists("numIcons", $context) ? $context["numIcons"] : (function () { throw new RuntimeError('Variable "numIcons" does not exist.', 54, $this->source); })()), 1)))) {
                // line 55
                echo "            <a class=\"dropdown-button dataTableAction activateVisualizationSelection\"
               href=\"javascript:;\"
               data-target=\"dropdownVisualizations";
                // line 57
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\">
                ";
                // line 58
                if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (isset($context["activeFooterIcon"]) || array_key_exists("activeFooterIcon", $context) ? $context["activeFooterIcon"] : (function () { throw new RuntimeError('Variable "activeFooterIcon" does not exist.', 58, $this->source); })())) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "icon-") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
                    // line 59
                    echo "                    <span title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ChangeVisualization"]), "html_attr");
                    echo "\" class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["activeFooterIcon"]) || array_key_exists("activeFooterIcon", $context) ? $context["activeFooterIcon"] : (function () { throw new RuntimeError('Variable "activeFooterIcon" does not exist.', 59, $this->source); })()), "html", null, true);
                    echo "\"></span>
                ";
                } else {
                    // line 61
                    echo "                    <img title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ChangeVisualization"]), "html_attr");
                    echo "\" width=\"16\" height=\"16\" src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["activeFooterIcon"]) || array_key_exists("activeFooterIcon", $context) ? $context["activeFooterIcon"] : (function () { throw new RuntimeError('Variable "activeFooterIcon" does not exist.', 61, $this->source); })()), "html", null, true);
                    echo "\"/>
                ";
                }
                // line 63
                echo "            </a>
            ";
                // line 64
                echo (isset($context["visualizationIcons"]) || array_key_exists("visualizationIcons", $context) ? $context["visualizationIcons"] : (function () { throw new RuntimeError('Variable "visualizationIcons" does not exist.', 64, $this->source); })());
                echo "
        ";
            }
            // line 66
            echo "
        ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 67, $this->source); })()), "show_export", [], "any", false, false, false, 67)) {
                // line 68
                echo "            ";
                $context["requestParams"] = json_encode(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 68, $this->source); })()), "request_parameters_to_modify", [], "any", false, false, false, 68));
                // line 69
                echo "
            ";
                // line 70
                $context["formats"] = ["CSV" => "CSV", "TSV" => "TSV (Excel)", "XML" => "XML", "JSON" => "Json", "HTML" => "HTML"];
                // line 71
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 71, $this->source); })()), "show_export_as_rss_feed", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                ";
                    $context["formats"] = twig_array_merge((isset($context["formats"]) || array_key_exists("formats", $context) ? $context["formats"] : (function () { throw new RuntimeError('Variable "formats" does not exist.', 72, $this->source); })()), ["RSS" => "RSS"]);
                    // line 73
                    echo "            ";
                }
                // line 74
                echo "
            <a class=\"dataTableAction activateExportSelection\" piwik-report-export
               report-title=\"";
                // line 76
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 76, $this->source); })()), "title", [], "any", false, false, false, 76), "html_attr");
                echo "\" request-params=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["requestParams"]) || array_key_exists("requestParams", $context) ? $context["requestParams"] : (function () { throw new RuntimeError('Variable "requestParams" does not exist.', 76, $this->source); })()), "html_attr");
                echo "\"
               api-method=\"";
                // line 77
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 77, $this->source); })()), "apiMethodToRequestDataTable", [], "any", false, false, false, 77), "html", null, true);
                echo "\" report-formats=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["formats"]) || array_key_exists("formats", $context) ? $context["formats"] : (function () { throw new RuntimeError('Variable "formats" does not exist.', 77, $this->source); })())), "html_attr");
                echo "\"
               href='javascript:;' title=\"";
                // line 78
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ExportThisReport"]), "html_attr");
                echo "\"
               max-filter-limit=\"";
                // line 79
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 79, $this->source); })()), "max_export_filter_limit", [], "any", false, false, false, 79), "html_attr");
                echo "\"
               ><span class=\"icon-export\"></span></a>
        ";
            }
            // line 82
            echo "
        ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 83, $this->source); })()), "show_export_as_image_icon", [], "any", false, false, false, 83)) {
                // line 84
                echo "            <a class=\"dataTableAction tableIcon\" href=\"javascript:;\" id=\"dataTableFooterExportAsImageIcon\"
               onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\"
               title=\"";
                // line 86
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ExportAsImage"]), "html", null, true);
                echo "\">
                <span class=\"icon-image\"></span>
            </a>
        ";
            }
            // line 90
            echo "
        ";
            // line 91
            if ((call_user_func_array($this->env->getFunction('isPluginLoaded')->getCallable(), ["Annotations"]) &&  !twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 91, $this->source); })()), "hide_annotations_view", [], "any", false, false, false, 91))) {
                // line 92
                echo "            <a class='dataTableAction annotationView'
               href='javascript:;' title=\"";
                // line 93
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Annotations_Annotations"]), "html_attr");
                echo "\"
            ><span class=\"icon-annotation\"></span></a>
        ";
            }
            // line 96
            echo "
        ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 97, $this->source); })()), "show_search", [], "any", false, false, false, 97)) {
                // line 98
                echo "            <a class='dropdown-button dataTableAction searchAction'
               href='javascript:;' title=\"";
                // line 99
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Search"]), "html_attr");
                echo "\"
               ><span class=\"icon-search\"></span>
                <span class=\"icon-close\" title=\"";
                // line 101
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_CloseSearch"]), "html_attr");
                echo "\"></span>
                <input id=\"widgetSearch_";
                // line 102
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 102, $this->source); })()), "report_id", [], "any", false, false, false, 102), "html", null, true);
                echo "\"
                       title=\"";
                // line 103
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_DataTableHowToSearch"]), "html_attr");
                echo "\"
                       type=\"text\"
                       class=\"dataTableSearchInput\" />
            </a>
        ";
            }
            // line 108
            echo "
        ";
            // line 109
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_actions", [], "any", true, true, false, 109)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_actions", [], "any", false, false, false, 109))) : ("")))) {
                // line 110
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 110, $this->source); })()), "datatable_actions", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 111
                    echo "            <a class='dataTableAction ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 111), "html_attr");
                    echo "'
               href='javascript:;' title=\"";
                    // line 112
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 112), "html_attr");
                    echo "\"
            >
                ";
                    // line 114
                    if ((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 114)) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "icon-") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)))) {
                        // line 115
                        echo "                    <span class=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 115), "html", null, true);
                        echo "\"></span>
                ";
                    } else {
                        // line 117
                        echo "                    <img width=\"16\" height=\"16\" title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 117), "html", null, true);
                        echo "\" src=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 117), "html", null, true);
                        echo "\"/>
                ";
                    }
                    // line 119
                    echo "            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "        ";
            }
            // line 122
            echo "
        <ul id='dropdownConfigure";
            // line 123
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 123, $this->source); })()), "html", null, true);
            echo "' class='dropdown-content tableConfiguration'>
            ";
            // line 124
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 124, $this->source); })()), "show_flatten_table", [], "any", false, false, false, 124)) {
                // line 125
                echo "                <li>
                    <div class=\"configItem dataTableFlatten\"></div>
                </li>
                ";
                // line 128
                if ((twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "flat", [], "any", true, true, false, 128) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 128, $this->source); })()), "flat", [], "any", false, false, false, 128), 1)))) {
                    // line 129
                    echo "                    ";
                    if ((((isset($context["hasMultipleDimensions"]) || array_key_exists("hasMultipleDimensions", $context))) ? (_twig_default_filter((isset($context["hasMultipleDimensions"]) || array_key_exists("hasMultipleDimensions", $context) ? $context["hasMultipleDimensions"] : (function () { throw new RuntimeError('Variable "hasMultipleDimensions" does not exist.', 129, $this->source); })()))) : (""))) {
                        // line 130
                        echo "                        <li>
                            <div class=\"configItem dataTableShowDimensions\"></div>
                        </li>
                    ";
                    }
                    // line 134
                    echo "                    <li>
                        <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                    </li>
                ";
                }
                // line 138
                echo "            ";
            }
            // line 139
            echo "            ";
            if (( !(isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 139, $this->source); })()) && ((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_totals_row", [], "any", true, true, false, 139)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_totals_row", [], "any", false, false, false, 139), 0)) : (0)))) {
                // line 140
                echo "                <li>
                    <div class=\"configItem dataTableShowTotalsRow\"></div>
                </li>
            ";
            }
            // line 144
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 144, $this->source); })()), "show_exclude_low_population", [], "any", false, false, false, 144)) {
                // line 145
                echo "                <li>
                    <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                </li>
            ";
            }
            // line 149
            echo "            ";
            if (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_pivot_by_subtable", [], "any", true, true, false, 149)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_pivot_by_subtable", [], "any", false, false, false, 149))) : (""))) &&  !(((isset($context["isComparing"]) || array_key_exists("isComparing", $context))) ? (_twig_default_filter((isset($context["isComparing"]) || array_key_exists("isComparing", $context) ? $context["isComparing"] : (function () { throw new RuntimeError('Variable "isComparing" does not exist.', 149, $this->source); })()), false)) : (false)))) {
                // line 150
                echo "                <li>
                    <div class=\"configItem dataTablePivotBySubtable\"></div>
                </li>
            ";
            }
            // line 154
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableActions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 154,  444 => 150,  441 => 149,  435 => 145,  432 => 144,  426 => 140,  423 => 139,  420 => 138,  414 => 134,  408 => 130,  405 => 129,  403 => 128,  398 => 125,  396 => 124,  392 => 123,  389 => 122,  386 => 121,  379 => 119,  371 => 117,  365 => 115,  363 => 114,  358 => 112,  353 => 111,  348 => 110,  346 => 109,  343 => 108,  335 => 103,  331 => 102,  327 => 101,  322 => 99,  319 => 98,  317 => 97,  314 => 96,  308 => 93,  305 => 92,  303 => 91,  300 => 90,  293 => 86,  289 => 84,  287 => 83,  284 => 82,  278 => 79,  274 => 78,  268 => 77,  262 => 76,  258 => 74,  255 => 73,  252 => 72,  249 => 71,  247 => 70,  244 => 69,  241 => 68,  239 => 67,  236 => 66,  231 => 64,  228 => 63,  220 => 61,  212 => 59,  210 => 58,  206 => 57,  202 => 55,  200 => 54,  197 => 53,  193 => 51,  183 => 47,  175 => 46,  172 => 45,  168 => 44,  164 => 43,  158 => 40,  154 => 39,  150 => 37,  148 => 36,  145 => 35,  141 => 33,  134 => 31,  126 => 28,  119 => 27,  111 => 25,  103 => 23,  101 => 22,  97 => 21,  87 => 20,  85 => 19,  84 => 18,  82 => 17,  80 => 16,  77 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  55 => 9,  50 => 7,  45 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% set randomIdForDropdown = random(999999) %}

    {% if properties.show_footer and properties.show_footer_icons %}

        <a class='dropdown-button dropdownConfigureIcon dataTableAction'
           href='javascript:;'
           data-target='dropdownConfigure{{ randomIdForDropdown }}'><span class=\"icon-configure\"></span></a>

        {% set activeFooterIcon = '' %}
        {% set numIcons = 0 %}
        {% set visualizationIcons %}
            <ul id='dropdownVisualizations{{ randomIdForDropdown }}' class='dropdown-content dataTableFooterIcons'>
                {% for footerIconGroup in footerIcons %}
                    {% for footerIcon in footerIconGroup.buttons|filter(footerIcon => footerIcon.icon) %}
                        <li>
                            {% set numIcons = numIcons + 1 %}
                            {% set isActiveEcommerceView = clientSideParameters.abandonedCarts is defined and
                            ((footerIcon.id == 'ecommerceOrder' and clientSideParameters.abandonedCarts == 0) or
                            (footerIcon.id == 'ecommerceAbandonedCart' and clientSideParameters.abandonedCarts == 1)) %}
                            <a class=\"{{ footerIconGroup.class }} tableIcon {% if clientSideParameters.viewDataTable == footerIcon.id or isActiveEcommerceView %}activeIcon{% set activeFooterIcon = footerIcon.icon %}{% endif %}\"
                               data-footer-icon-id=\"{{ footerIcon.id }}\">
                                {% if footerIcon.icon starts with 'icon-' %}
                                    <span title=\"{{ footerIcon.title }}\" class=\"{{ footerIcon.icon }}\"></span>
                                {% else %}
                                    <img width=\"16\" height=\"16\" title=\"{{ footerIcon.title }}\" src=\"{{ footerIcon.icon }}\"/>
                                {% endif %}
                                {% if footerIcon.title is defined %}<span>{{ footerIcon.title }}</span>{% endif %}
                            </a>
                        </li>
                    {% endfor %}
                    <li class=\"divider\"></li>
                {% endfor %}
            </ul>
        {% endset %}

        {% if properties.show_periods %}
            <a class=\"dropdown-button dataTableAction activatePeriodsSelection\"
               href=\"javascript:;\"
               title=\"{{ 'CoreHome_ChangePeriod'|translate|e('html_attr') }}\"
               data-target=\"dropdownPeriods{{ randomIdForDropdown }}\">
                <span class=\"icon-calendar\"></span>
            </a>
            <ul id='dropdownPeriods{{ randomIdForDropdown }}' class='dropdown-content dataTablePeriods'>
                {% for selectablePeriod in properties.selectable_periods %}
                    <li>
                        <a data-period=\"{{ selectablePeriod }}\" class=\"tableIcon {% if (clientSideParameters.period|default('')) == selectablePeriod %}activeIcon{% endif %}\">
                            <span>{{ properties.translations[selectablePeriod]|default(selectablePeriod) }}</span>
                        </a>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}

        {% if activeFooterIcon and numIcons > 1 %}
            <a class=\"dropdown-button dataTableAction activateVisualizationSelection\"
               href=\"javascript:;\"
               data-target=\"dropdownVisualizations{{ randomIdForDropdown }}\">
                {% if activeFooterIcon starts with 'icon-' %}
                    <span title=\"{{ 'CoreHome_ChangeVisualization'|translate|e('html_attr') }}\" class=\"{{ activeFooterIcon }}\"></span>
                {% else %}
                    <img title=\"{{ 'CoreHome_ChangeVisualization'|translate|e('html_attr') }}\" width=\"16\" height=\"16\" src=\"{{ activeFooterIcon }}\"/>
                {% endif %}
            </a>
            {{ visualizationIcons|raw }}
        {% endif %}

        {% if properties.show_export %}
            {% set requestParams = properties.request_parameters_to_modify|json_encode %}

            {% set formats = {\"CSV\":\"CSV\",\"TSV\":\"TSV (Excel)\",\"XML\":\"XML\",\"JSON\":\"Json\",\"HTML\":\"HTML\"} %}
            {% if properties.show_export_as_rss_feed %}
                {% set formats = formats|merge({\"RSS\": \"RSS\"}) %}
            {% endif %}

            <a class=\"dataTableAction activateExportSelection\" piwik-report-export
               report-title=\"{{ properties.title|e('html_attr') }}\" request-params=\"{{ requestParams|e('html_attr') }}\"
               api-method=\"{{ properties.apiMethodToRequestDataTable }}\" report-formats=\"{{ formats|json_encode|e('html_attr') }}\"
               href='javascript:;' title=\"{{ 'General_ExportThisReport'|translate|e('html_attr') }}\"
               max-filter-limit=\"{{ properties.max_export_filter_limit|e('html_attr') }}\"
               ><span class=\"icon-export\"></span></a>
        {% endif %}

        {% if properties.show_export_as_image_icon %}
            <a class=\"dataTableAction tableIcon\" href=\"javascript:;\" id=\"dataTableFooterExportAsImageIcon\"
               onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\"
               title=\"{{ 'General_ExportAsImage'|translate }}\">
                <span class=\"icon-image\"></span>
            </a>
        {% endif %}

        {% if isPluginLoaded('Annotations') and not properties.hide_annotations_view %}
            <a class='dataTableAction annotationView'
               href='javascript:;' title=\"{{ 'Annotations_Annotations'|translate|e('html_attr') }}\"
            ><span class=\"icon-annotation\"></span></a>
        {% endif %}

        {% if properties.show_search %}
            <a class='dropdown-button dataTableAction searchAction'
               href='javascript:;' title=\"{{ 'General_Search'|translate|e('html_attr') }}\"
               ><span class=\"icon-search\"></span>
                <span class=\"icon-close\" title=\"{{ 'CoreHome_CloseSearch'|translate|e('html_attr') }}\"></span>
                <input id=\"widgetSearch_{{ properties.report_id }}\"
                       title=\"{{ 'CoreHome_DataTableHowToSearch'|translate|e('html_attr') }}\"
                       type=\"text\"
                       class=\"dataTableSearchInput\" />
            </a>
        {% endif %}

        {% if properties.datatable_actions|default is not empty %}
        {% for action in properties.datatable_actions %}
            <a class='dataTableAction {{ action.id|e('html_attr') }}'
               href='javascript:;' title=\"{{ action.title|e('html_attr') }}\"
            >
                {% if action.icon starts with 'icon-' %}
                    <span class=\"{{ action.icon }}\"></span>
                {% else %}
                    <img width=\"16\" height=\"16\" title=\"{{ action.title }}\" src=\"{{ action.icon }}\"/>
                {% endif %}
            </a>
        {% endfor %}
        {% endif %}

        <ul id='dropdownConfigure{{ randomIdForDropdown }}' class='dropdown-content tableConfiguration'>
            {% if properties.show_flatten_table %}
                <li>
                    <div class=\"configItem dataTableFlatten\"></div>
                </li>
                {% if clientSideParameters.flat is defined and clientSideParameters.flat == 1 %}
                    {% if hasMultipleDimensions|default %}
                        <li>
                            <div class=\"configItem dataTableShowDimensions\"></div>
                        </li>
                    {% endif %}
                    <li>
                        <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                    </li>
                {% endif %}
            {% endif %}
            {% if not isDataTableEmpty and properties.show_totals_row|default(0) %}
                <li>
                    <div class=\"configItem dataTableShowTotalsRow\"></div>
                </li>
            {% endif %}
            {% if properties.show_exclude_low_population %}
                <li>
                    <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                </li>
            {% endif %}
            {% if properties.show_pivot_by_subtable|default is not empty and not isComparing|default(false) %}
                <li>
                    <div class=\"configItem dataTablePivotBySubtable\"></div>
                </li>
            {% endif %}
        </ul>
    {% endif %}
", "@CoreHome/_dataTableActions.twig", "/home/prestigegt/www/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_dataTableActions.twig");
    }
}
