<?php

/* DidYouDoItBundle:TaskList:edit.html.twig */
class __TwigTemplate_b0d5593645b077c93bd8bcfeaa6fa1ca1604e28dccef370b0db9d7f7e71b5b9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DidYouDoItBundle:TaskList:edit.html.twig", 1);
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
        echo "<h2 class=\"text-left\">TaskList edit</h2>
    
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
        <input type=\"submit\" value=\"Update\" class=\"btn btn-warning\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "

    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("did_you_do_it_get_all_tasklist");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "DidYouDoItBundle:TaskList:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  58 => 14,  53 => 12,  49 => 11,  44 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
