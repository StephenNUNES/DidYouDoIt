<?php

/* ::base.html.twig */
class __TwigTemplate_85c30feece845c66ca1b387481e97851a411ceaf2429294fb11c15f5402031c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h1 class=\"text-center\">Did You Do It ?</h1>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "                </div>
                <div class=\"panel-footer\">
                   <div class=\"text-right\"> Created with Symfony - Bootstrap</div>
                </div>
            </div>
        </div>

        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Did you do it ?";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <!-- Bootstrap -->
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "            <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <!-- Include all JavaScripts, compiled by Assetic -->
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  96 => 29,  93 => 28,  90 => 27,  85 => 19,  79 => 8,  76 => 7,  73 => 6,  67 => 5,  61 => 33,  59 => 27,  50 => 20,  48 => 19,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
