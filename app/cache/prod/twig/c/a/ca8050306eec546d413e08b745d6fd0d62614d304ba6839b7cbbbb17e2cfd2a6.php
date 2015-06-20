<?php

/* DidYouDoItBundle:TaskList:show.html.twig */
class __TwigTemplate_ca8050306eec546d413e08b745d6fd0d62614d304ba6839b7cbbbb17e2cfd2a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DidYouDoItBundle:TaskList:show.html.twig", 1);
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
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo "</h2>
    <table class=\"table table-hover\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 7
            echo "            <tr>
                <td>
                    ";
            // line 9
            if ($this->getAttribute($context["task"], "checked", array())) {
                // line 10
                echo "                        <span class=\"glyphicon glyphicon-check\" aria-hidden=\"true\"></span>
                    ";
            } else {
                // line 12
                echo "                        <span class=\"glyphicon glyphicon-unchecked aria-hidden=\"true\"></span>
                    ";
            }
            // line 14
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "libelle", array()), "html", null, true);
            echo "</td>
                </td>
\t\t\t    <td><a class=\"btn btn-warning\" role=\"button\"  href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("did_you_do_it_edit_task_from_tasklist", array("idTaskList" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tasklistid", array()), "idTask" => $this->getAttribute($context["task"], "taskid", array()))), "html", null, true);
            echo "\">
\t\t\t\t    Edit task 
\t\t\t        </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </table>
\t<ul class=\"list-unstyled\">
\t\t<li>
\t\t<a class=\"btn btn-success\" role=\"button\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("did_you_do_it_new_task", array("idTaskList" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tasklistid", array()))), "html", null, true);
        echo "\">
\t\t\tAdd new Task
\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"btn btn-warning\" role=\"button\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("did_you_do_it_edit_tasklist", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tasklistid", array()))), "html", null, true);
        echo "\">
\t\t\t\tEdit
\t\t\t</a>
\t\t</li>
\t\t<li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
\t\t<li>
\t\t\t<a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("did_you_do_it_get_all_tasklist");
        echo "\">
\t\t\t\tBack to the list
\t\t\t</a>
\t\t</li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "DidYouDoItBundle:TaskList:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  93 => 34,  86 => 30,  78 => 25,  73 => 22,  61 => 16,  55 => 14,  51 => 12,  47 => 10,  45 => 9,  41 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
