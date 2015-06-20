<?php

/* BraincraftedBootstrapBundle:Menu:bootstrap.html.twig */
class __TwigTemplate_63024360ace1b00ef6f4321570011da9d85e0113c908725d140f492c4285b488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        // line 22
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("currentDepth" => 0));
        // line 23
        if ((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array(), "any", true, true)) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array()) == "current"))) {
            // line 24
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("currentClass" => "active"));
            // line 25
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("ancestorClass" => "active"));
        }
        // line 27
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array());
        // line 28
        $this->displayBlock("list", $context, $blocks);
    }

    // line 31
    public function block_list($context, array $blocks = array())
    {
        // line 32
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 33
            echo "    ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => trim((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")))));
            // line 34
            echo "
    ";
            // line 35
            $context["listClass"] = "";
            // line 36
            echo "    ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "tabs"))) {
                // line 37
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 38
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "stacked-tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "justified-tabs"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-tabs nav-justified";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "pills"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 44
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "justified-pills"))) {
                // line 45
                echo "        ";
                $context["listClass"] = "nav-pills nav-justified";
                // line 46
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "stacked-pills"))) {
                // line 47
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 48
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "list"))) {
                // line 49
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 50
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "navbar"))) {
                // line 51
                echo "        ";
                $context["listClass"] = "navbar-nav";
                // line 52
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "navbar-right"))) {
                // line 53
                echo "        ";
                $context["listClass"] = "navbar-nav navbar-right";
                // line 54
                echo "    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array()) == "right"))) {
                // line 57
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : null), "")) : ("")) . " pull-right"));
                // line 58
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array()) == "left"))) {
                // line 59
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : null), "")) : ("")) . "pull-left"));
                // line 60
                echo "    ";
            }
            // line 61
            echo "    
    ";
            // line 62
            $context["listClass"] = ((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) == 0)) ? (((isset($context["listClass"]) ? $context["listClass"] : null) . " nav")) : ((isset($context["listClass"]) ? $context["listClass"] : null)));
            // line 63
            echo "
    ";
            // line 64
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => trim((((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["listClass"]) ? $context["listClass"] : null)))));
            // line 65
            echo "
    <ul";
            // line 66
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : null)), "method");
            echo ">
        ";
            // line 67
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 72
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 73
        ob_start();
        // line 74
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true))))) {
            // line 75
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " dropdown-menu"))));
            // line 76
            echo "        <ul";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : null)), "method");
            echo ">
        ";
            // line 77
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_listList($context, array $blocks = array())
    {
        // line 84
        ob_start();
        // line 85
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 86
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function block_children($context, array $blocks = array())
    {
        // line 93
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : null);
        // line 94
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : null);
        // line 96
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()))) {
            // line 97
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : null), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "depth", array()) - 1)));
        }
        // line 99
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("currentDepth" => ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) + 1)));
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : null), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : null);
        // line 105
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : null);
    }

    // line 108
    public function block_item($context, array $blocks = array())
    {
        // line 109
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", array())) {
            // line 111
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 112
            if (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array())))) {
                // line 113
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array())));
            } elseif (((            // line 114
array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array())), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor", array())))) {
                // line 115
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", array())));
            }
            // line 117
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", array())) {
                // line 118
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", array())));
            }
            // line 120
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", array())) {
                // line 121
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", array())));
            }
            // line 123
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "list")) ||  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1)))) {
                // line 124
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "nav-header"));
            } elseif (((($this->getAttribute(            // line 125
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true))))) {
                // line 126
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "dropdown"));
            }
            // line 129
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", array());
            // line 131
            if ((((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "navbar")) && $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array()))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1))) {
                // line 132
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "divider-vertical"));
            } elseif (($this->getAttribute(            // line 133
(isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array())))) {
                // line 134
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "divider"));
            }
            // line 137
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 138
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 141
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : null)), "method");
            echo ">";
            // line 142
            if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array())))) {
            } elseif ((((($this->getAttribute(            // line 143
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1)) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true))))) {
                // line 144
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif ((((($this->getAttribute(            // line 145
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1)) && (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "dropdown", array()) === false)) || $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array(0 => false), "method")))) {
                // line 146
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 147
(isset($context["item"]) ? $context["item"] : null), "uri", array())) && ((array_key_exists("matcher", $context) &&  !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", array())))) {
                // line 148
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 149
(isset($context["item"]) ? $context["item"] : null), "uri", array())) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array())) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", array())))) {
                // line 150
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 152
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 155
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 156
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()))));
            // line 157
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 158
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "list") ||  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1)))) {
                // line 159
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute(            // line 160
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified")))) {
                // line 161
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 163
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 165
            echo "    </li>
";
        }
    }

    // line 169
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array())), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 171
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 172
        ob_start();
        // line 173
        echo "    ";
        $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array());
        // line 174
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), array("class" => trim(((($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array()), "")) : ("")) . " dropdown-toggle"))));
        // line 175
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), array("data-toggle" => "dropdown"));
        // line 176
        echo "    <a href=\"#\"";
        echo $this->getAttribute($this, "attributes", array(0 => (isset($context["labelAttributes"]) ? $context["labelAttributes"] : null)), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 180
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 181
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array())), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 187
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()));
        } else {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "html", null, true));
        }
    }

    // line 3
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 6,  467 => 5,  463 => 4,  452 => 3,  442 => 187,  432 => 185,  427 => 181,  424 => 180,  414 => 176,  411 => 175,  408 => 174,  405 => 173,  403 => 172,  400 => 171,  388 => 169,  382 => 165,  378 => 163,  374 => 161,  372 => 160,  369 => 159,  367 => 158,  365 => 157,  363 => 156,  361 => 155,  357 => 152,  353 => 150,  351 => 149,  348 => 148,  346 => 147,  343 => 146,  341 => 145,  338 => 144,  336 => 143,  334 => 142,  330 => 141,  327 => 138,  325 => 137,  322 => 134,  320 => 133,  318 => 132,  316 => 131,  314 => 129,  311 => 126,  309 => 125,  307 => 124,  305 => 123,  302 => 121,  300 => 120,  297 => 118,  295 => 117,  292 => 115,  290 => 114,  288 => 113,  286 => 112,  284 => 111,  282 => 109,  279 => 108,  275 => 105,  273 => 104,  256 => 101,  239 => 100,  237 => 99,  234 => 97,  232 => 96,  230 => 94,  228 => 93,  225 => 91,  216 => 86,  213 => 85,  211 => 84,  208 => 83,  199 => 77,  194 => 76,  191 => 75,  188 => 74,  186 => 73,  183 => 72,  175 => 67,  171 => 66,  168 => 65,  166 => 64,  163 => 63,  161 => 62,  158 => 61,  155 => 60,  152 => 59,  149 => 58,  146 => 57,  144 => 56,  141 => 55,  138 => 54,  135 => 53,  132 => 52,  129 => 51,  126 => 50,  123 => 49,  120 => 48,  117 => 47,  114 => 46,  111 => 45,  108 => 44,  105 => 43,  102 => 42,  99 => 41,  96 => 40,  93 => 39,  90 => 38,  87 => 37,  84 => 36,  82 => 35,  79 => 34,  76 => 33,  74 => 32,  71 => 31,  67 => 28,  65 => 27,  61 => 25,  58 => 24,  56 => 23,  54 => 22,  51 => 17,  44 => 13,  42 => 12,  39 => 11,  11 => 1,);
    }
}
