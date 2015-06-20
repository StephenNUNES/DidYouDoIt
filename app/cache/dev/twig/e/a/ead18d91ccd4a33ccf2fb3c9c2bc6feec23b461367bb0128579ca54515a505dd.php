<?php

/* BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig */
class __TwigTemplate_ead18d91ccd4a33ccf2fb3c9c2bc6feec23b461367bb0128579ca54515a505dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : (""));
        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "    ";
            if ((array_key_exists("style", $context) && ((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "pager"))) {
                // line 5
                echo "
        ";
                // line 6
                $context["prev_label"] = ((array_key_exists("prev_label", $context)) ? (_twig_default_filter((isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label")), "Previous")) : ("Previous"));
                // line 7
                echo "        ";
                $context["next_label"] = ((array_key_exists("next_label", $context)) ? (_twig_default_filter((isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label")), "Next")) : ("Next"));
                // line 8
                echo "        ";
                $context["aligned"] = ((array_key_exists("aligned", $context)) ? (_twig_default_filter((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned")), false)) : (false));
                // line 9
                echo "
        <ul class=\"pager";
                // line 10
                if ( !twig_test_empty((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                }
                echo "\">
            ";
                // line 11
                if (array_key_exists("previous", $context)) {
                    // line 12
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " class=\"previous\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 14
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " previous";
                    }
                    echo "\"><span>";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</span></li>
            ";
                }
                // line 16
                echo "            ";
                if (array_key_exists("next", $context)) {
                    // line 17
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " class=\"next\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 19
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " next";
                    }
                    echo "\"><span>";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</span></li>
            ";
                }
                // line 21
                echo "        </ul>
    ";
            } else {
                // line 23
                echo "
        ";
                // line 24
                $context["prev_label"] = ((array_key_exists("prev_label", $context)) ? (_twig_default_filter((isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label")), "&laquo;")) : ("&laquo;"));
                // line 25
                echo "        ";
                $context["next_label"] = ((array_key_exists("next_label", $context)) ? (_twig_default_filter((isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label")), "&raquo;")) : ("&raquo;"));
                // line 26
                echo "
        <ul class=\"pagination";
                // line 27
                if ( !twig_test_empty((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                }
                echo "\">
            ";
                // line 28
                if (((array_key_exists("first_label", $context) && array_key_exists("first", $context)) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                    // line 29
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["first_label"]) ? $context["first_label"] : $this->getContext($context, "first_label"));
                    echo "</a></li>
            ";
                } elseif (                // line 30
array_key_exists("last_label", $context)) {
                    // line 31
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["first_label"]) ? $context["first_label"] : $this->getContext($context, "first_label"));
                    echo "</span></li>
            ";
                }
                // line 33
                echo "
            ";
                // line 34
                if (array_key_exists("previous", $context)) {
                    // line 35
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 37
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</span></li>
            ";
                }
                // line 39
                echo "
            ";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
                    echo "                ";
                    if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                        // line 42
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 44
                        echo "                    <li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</span></li>
                ";
                    }
                    // line 46
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "
            ";
                // line 49
                if (array_key_exists("next", $context)) {
                    // line 50
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 52
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</span></li>
            ";
                }
                // line 54
                echo "
            ";
                // line 55
                if (((array_key_exists("last_label", $context) && array_key_exists("last", $context)) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                    // line 56
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["last_label"]) ? $context["last_label"] : $this->getContext($context, "last_label"));
                    echo "</a></li>
            ";
                } elseif (                // line 57
array_key_exists("last_label", $context)) {
                    // line 58
                    echo "                <li class=\"disabled\"><span>";
                    echo (isset($context["last_label"]) ? $context["last_label"] : $this->getContext($context, "last_label"));
                    echo "</span></li>
            ";
                }
                // line 60
                echo "        </ul>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 60,  221 => 58,  219 => 57,  212 => 56,  210 => 55,  207 => 54,  201 => 52,  193 => 50,  191 => 49,  188 => 48,  181 => 46,  175 => 44,  167 => 42,  164 => 41,  160 => 40,  157 => 39,  151 => 37,  143 => 35,  141 => 34,  138 => 33,  132 => 31,  130 => 30,  123 => 29,  121 => 28,  114 => 27,  111 => 26,  108 => 25,  106 => 24,  103 => 23,  99 => 21,  89 => 19,  77 => 17,  74 => 16,  64 => 14,  52 => 12,  50 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
