<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_f53b9b751e8d416ec6230031107c5f7073a3b589de416fd5c186337bb52209e6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["channel_is_defined"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["logs"] ?? null)), "channel", array(), "any", true, true);
        // line 2
        echo "<table class=\"logs\" data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info,Debug\" data-filters>
    <thead>
        <tr>
            <th data-filter=\"level\">Level</th>
            ";
        // line 6
        if (($context["channel_is_defined"] ?? null)) {
            echo "<th data-filter=\"channel\">Channel</th>";
        }
        // line 7
        echo "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 13
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["log"], "priority", array()) >= 400)) {
                // line 14
                echo "            ";
                $context["status"] = "error";
                // line 15
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["log"], "priority", array()) >= 300)) {
                // line 16
                echo "            ";
                $context["status"] = "warning";
                // line 17
                echo "        ";
            } else {
                // line 18
                echo "            ";
                $context["severity"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "context", array(), "any", false, true), "exception", array(), "any", false, true), "severity", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "context", array(), "any", false, true), "exception", array(), "any", false, true), "severity", array()), false)) : (false));
                // line 19
                echo "            ";
                $context["status"] = ((((($context["severity"] ?? null) === constant("E_DEPRECATED")) || (($context["severity"] ?? null) === constant("E_USER_DEPRECATED")))) ? ("warning") : ("normal"));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        <tr class=\"status-";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "\" data-filter-level=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", array())), "html", null, true);
            echo "\"";
            if (($context["channel_is_defined"] ?? null)) {
                echo " data-filter-channel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "channel", array()), "html", null, true);
                echo "\"";
            }
            echo ">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", array()), "html", null, true);
            echo "</span>
                <span class=\"text-muted newline\">";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
            echo "</span>
            </td>
            ";
            // line 26
            if (($context["channel_is_defined"] ?? null)) {
                // line 27
                echo "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "channel", array()), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 31
            echo "            <td>
                ";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatLogMessage(twig_get_attribute($this->env, $this->source, $context["log"], "message", array()), twig_get_attribute($this->env, $this->source, $context["log"], "context", array()));
            echo "
                ";
            // line 33
            if ((((twig_get_attribute($this->env, $this->source, $context["log"], "context", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, $context["log"], "context", array())))) ? (twig_get_attribute($this->env, $this->source, $context["log"], "context", array())) : (false))) {
                // line 34
                echo "                    <pre class=\"text-muted prewrap m-t-5\">";
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["log"], "context", array()), ((twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_UNICODE")) | twig_constant("JSON_UNESCAPED_SLASHES"))), "html", null, true);
                echo "</pre>
                ";
            }
            // line 36
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  119 => 36,  113 => 34,  111 => 33,  107 => 32,  104 => 31,  98 => 28,  95 => 27,  93 => 26,  88 => 24,  84 => 23,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  42 => 12,  35 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/logs.html.twig", "C:\\wamp64\\www\\ppe2\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
