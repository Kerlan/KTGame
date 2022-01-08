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

/* base.html.twig */
class __TwigTemplate_270fb9e744b5d197e90c64b9e3950b8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/vapor/bootstrap.min.css\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    </head>
    <body style=\"  height: 100%;\">
    <h1 style=\"   text-align:center;\">KTGame</h1>

    <div  style=\" overflow: auto; height:400px;\" class=\"btn-group-vertical\">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> 
        <br>
        <br>
        <br>
        <br>
    
        <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet1.png\">
        <br>
        Planete de *Tommy*
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>

        </button>
        <hr style=\"height: 1px; color: #839D2D\">


                <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet2.png\">

        <br>
        Planete de *Tommy*
        </button>
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet3.png\">
        
        <br>
        Planete de *Tommy*
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>

        </button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet4.png\">
        
        <br>
        Planete de *Tommy*
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>
        
        </button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet5.png\">
    
        <br>
        Planete de *Tommy*
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>

        </button>


    </div >
       <div style=\"overflow-y: auto; height:400px; width: 100px; float: right\" class=\"btn-group-vertical\">

        <button type=\"button\" class=\"btn btn-primary\">
        🌕
        <br>
        Planete de *Tommy*
        </button>
        <hr style=\"color: #839D2D\">


                <button type=\"button\" class=\"btn btn-primary\">
        🌎
        <br>
        Planete de *Tommy*
        </button>
        

        <hr style=\"color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        🪐
        <br>
        Planete de *Tommy*
        </button>

        <hr style=\"color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        ☄️
        <br>
        Planete de *Tommy*
        
        </button>

        <hr style=\"color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        ☀️
        <br>
        Planete de *Tommy*
        </button>


    </div>
        ";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "    </body>

    <footer style=\"   text-align:center;
    position: fixed;
    bottom:0;
    width:100%;
    display:inline-block;
    vertical-align:top;
    font-size:13px;\">

        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">

    <button style=\"width: 200px; height: 200px\" type=\"button\" class=\"btn btn-outline-primary\">Génerateur d'or <hr> <img src=\"assets/gold.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px\" type=\"button\" class=\"btn btn-outline-secondary\">Génerateur de metal <hr> <img src=\"assets/metal.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-success\">Génerateur de diamant <hr> <img src=\"assets/diamant.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-info\">Génerateur d'unité<hr> <img src=\"assets/soldat.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-warning\">Génerateur de vaisseaux <hr> <img src=\"assets/avion.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-danger\">Batiment de defense <hr> <img src=\"assets/tour.png\"> <hr>  Construire pour 5 or</button>

    </footer>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  277 => 127,  259 => 126,  240 => 7,  221 => 5,  185 => 128,  182 => 127,  180 => 126,  60 => 8,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/vapor/bootstrap.min.css\">
        {% block stylesheets %} {% endblock %}
    </head>
    <body style=\"  height: 100%;\">
    <h1 style=\"   text-align:center;\">KTGame</h1>

    <div  style=\" overflow: auto; height:400px;\" class=\"btn-group-vertical\">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> 
        <br>
        <br>
        <br>
        <br>
    
        <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet1.png\">
        <br>
        Planete de *Tommy*
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>

        </button>
        <hr style=\"height: 1px; color: #839D2D\">


                <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet2.png\">

        <br>
        Planete de *Tommy*
        </button>
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet3.png\">
        
        <br>
        Planete de *Tommy*
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>

        </button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet4.png\">
        
        <br>
        Planete de *Tommy*
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>
        
        </button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet5.png\">
    
        <br>
        Planete de *Tommy*
        <button type=\"button\" class=\"btn btn-danger\">Attaquer ⚡️</button>

        </button>


    </div >
       <div style=\"overflow-y: auto; height:400px; width: 100px; float: right\" class=\"btn-group-vertical\">

        <button type=\"button\" class=\"btn btn-primary\">
        🌕
        <br>
        Planete de *Tommy*
        </button>
        <hr style=\"color: #839D2D\">


                <button type=\"button\" class=\"btn btn-primary\">
        🌎
        <br>
        Planete de *Tommy*
        </button>
        

        <hr style=\"color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        🪐
        <br>
        Planete de *Tommy*
        </button>

        <hr style=\"color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        ☄️
        <br>
        Planete de *Tommy*
        
        </button>

        <hr style=\"color: #839D2D\">

                <button type=\"button\" class=\"btn btn-primary\">
        ☀️
        <br>
        Planete de *Tommy*
        </button>


    </div>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>

    <footer style=\"   text-align:center;
    position: fixed;
    bottom:0;
    width:100%;
    display:inline-block;
    vertical-align:top;
    font-size:13px;\">

        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">

    <button style=\"width: 200px; height: 200px\" type=\"button\" class=\"btn btn-outline-primary\">Génerateur d'or <hr> <img src=\"assets/gold.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px\" type=\"button\" class=\"btn btn-outline-secondary\">Génerateur de metal <hr> <img src=\"assets/metal.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-success\">Génerateur de diamant <hr> <img src=\"assets/diamant.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-info\">Génerateur d'unité<hr> <img src=\"assets/soldat.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-warning\">Génerateur de vaisseaux <hr> <img src=\"assets/avion.png\"> <hr>  Construire pour 5 or</button>
<button style=\"width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-danger\">Batiment de defense <hr> <img src=\"assets/tour.png\"> <hr>  Construire pour 5 or</button>

    </footer>

</html>
", "base.html.twig", "/Users/tommy/Documents/KTGame/KTGame/templates/base.html.twig");
    }
}
