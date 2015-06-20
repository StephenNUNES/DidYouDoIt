<?php

/* DidYouDoItBundle:TaskList:index.html.twig */
class __TwigTemplate_1a1c895b02568c5a2d5d2453cc52822b83f12c99147505cee69b7bea1c6846ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DidYouDoItBundle:TaskList:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h2 class=\"text-left\">TaskLists</h2>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                <ul class=\"list-unstyled\">
                    <li>
                        <a class=\"btn btn-info\" role=\"button\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("did_you_do_it_get_one_tasklist", array("id" => $this->getAttribute($context["entity"], "tasklistid", array()))), "html", null, true);
            echo "\">Show</a>
                    </li>
                    <li>
                        <a class=\"btn btn-warning\" role=\"button\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("did_you_do_it_edit_tasklist", array("id" => $this->getAttribute($context["entity"], "tasklistid", array()))), "html", null, true);
            echo "\">Edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

        <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-success\" role=\"button\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("did_you_do_it_new_tasklist");
        echo "\">
                Create a new task list 
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "DidYouDoItBundle:TaskList:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 34,  75 => 29,  63 => 23,  57 => 20,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
