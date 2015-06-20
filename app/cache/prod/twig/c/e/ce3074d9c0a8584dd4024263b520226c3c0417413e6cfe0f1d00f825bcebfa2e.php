<?php

/* BraincraftedBootstrapBundle::ie8-support.html.twig */
class __TwigTemplate_ce3074d9c0a8584dd4024263b520226c3c0417413e6cfe0f1d00f825bcebfa2e extends Twig_Template
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
        echo "<!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv-printshiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
<![endif]-->
";
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::ie8-support.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
