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
    <h1 style=\"   margin-left:43%;\">KTGame</h1>






<div style=\"  display: flex;   justify-content: space-between\">
<div style=\"margin-left:10px;\" class=\"btn-group-vertical\">
<div style=\"margin-left:12px\" class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
 
  <h5 style=\"margin-top: 3px; margin-left: 15px;  \">  YOUR ENNEMIES</h5>
    <div  style=\"margin-left:1px; overflow: auto; height:420px; width: 190px\" >
    
        <button style=\"width:190px\" style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet1.png\">
        <br>
        *Tommy*'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>
        <hr style=\"height: 1px; color: #839D2D\">


                <button style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet2.png\">

        <br>
        *Tommy*'s planet
        </button>
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet3.png\">
        
        <br>
        *Tommy*'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet4.png\">
        
        <br>
        *Tommy*'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>
        
        </button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet5.png\">
    
        <br>
        *Tommy*'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>


    </div >
    </div >
</div>
    
    



       <div class=\"card border-primary mb-3\" style=\"height: 450px; width:700px; text-align:center; margin-bottom: 100px\">
       
          <h4 style=\"margin-top: 10px\"> YOUR BASE</h4>
          <div styke=\"display: flex;   justify-content: space-between\">
          <div class=\"card-body\" style=\"float: left; width: 320px\">
            <h4 class=\"card-title\">Ressources</h4>

             <p class=\"card-text\">Gold</p>
             <h5> 78 / 100 </h5>
      
             <div class=\"progress\">

                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 78%;\"></div>
              </div>
              <hr>

              <p class=\"card-text\">Metal</p>
              <h5> 34 / 100  </h5>

              <div class=\"progress\">


                  <div class=\" progress-bar progress-bar-striped progress-bar-animated bg-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 34%;\"></div>
              </div>
              <hr>
              <p class=\"card-text\">Diamond</p>
              <h5> 12 / 100  </h5>

               <div class=\"progress\">
    
                  <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-info\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 12%;\"></div>
              </div>

          </div>
         <div class=\"card-body\" style=\"float: right; width: 350px\">




            <h4 class=\"card-title\">Army</h4>

            <div style=\" display: flex;   justify-content: space-between; align-items: center\">

                  <img src=\"assets/combat.png\">
                        <h5> 12 / 30  </h5>
                  <button style=\"width:100px; height:40px\" type=\"button\" class=\"btn btn-danger\">Construct</button>

          </div>
            <hr>
            <hr>

            <div style=\" margin-top:30x; display: flex;   justify-content: space-between; align-items: center\">

                <img style=\"margin-left:45px\" src=\"assets/form.png\">
                      <h5> 45 / 50  </h5>
                  <button style=\"width:100px;\" type=\"button\" class=\"btn btn-danger\">Train</button>



          </div>



          </div>

          </div>
 
    </div>





       <div style=\"\" class=\"btn-group-vertical\">

<div style=\"; margin-right:15px\" class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
 

 <h5 style=\"margin-right:10px; margin-left:10px; margin-top:2px\" >  YOUR CONSTRUCTIONS </h5>
         <div  style=\"margin-left:16px; overflow: auto; height:420px; width: 215px\" >


  <div style=\"height:190px\" class=\"card border-warning mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau 2
</div>
  <div class=\"card-body\">
    <h4 class=\"card-title\">Gold mine</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 gold
    <span class=\"badge bg-warning rounded-pill\">2min26</span>  
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-warning\">Improve / 20 gold-10 metal</button>
</div>


  <div style=\"height:190px\" class=\"card border-warning mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau 2
</div>
  <div class=\"card-body\">
    <h4 class=\"card-title\">Gold mine</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 gold
    <span class=\"badge bg-warning rounded-pill\">2min26</span>  
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-warning\">Improve / 20 gold-10 metal</button>
</div>

  <div style=\"height:190px\" class=\"card border-success mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau 2
</div>
  <div class=\"card-body\">
    <h4 class=\"card-title\">Metal refinery</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 gold
    <span class=\"badge bg-success rounded-pill\">2min26</span>  
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-success\">Improve / 20 gold-10 metal</button>
</div>

    </div>


    </div>
    </div>
</div>





        ";
        // line 217
        $this->displayBlock('body', $context, $blocks);
        // line 218
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 219
        echo "
        <hr style=\"size: 100px color: #839D2D\">


    </body>

    <footer style=\"   text-align:center;
    position: fixed;
    bottom:0;
    width:100%;
    display:inline-block;
    vertical-align:top;
    font-size:13px;

    \">
            <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">


    <button style=\"margin-right: 12px; width: 200px; height: 200px\" type=\"button\" class=\"btn btn-outline-warning\">Gold mine<hr> <img src=\"assets/gold.png\"> <hr>Build for 5 diamonds</button>
<button  style=\"margin-right: 12px; width:200px; height: 200px\" type=\"button\" class=\"btn btn-outline-success\">Metal refinery<hr> <img src=\"assets/metal.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-light\">Diamond extractor<hr> <img src=\"assets/diamant.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-secondary\">Unit training center<hr> <img src=\"assets/soldat.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-primary\">Spaceship factory<hr> <img src=\"assets/avion.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-danger\">anti-aircraft turret<hr> <img src=\"assets/tour.png\"> <hr>Build for 5 diamonds</button>

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

    // line 217
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

    // line 218
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
        return array (  373 => 218,  355 => 217,  336 => 7,  317 => 5,  276 => 219,  273 => 218,  271 => 217,  60 => 8,  58 => 7,  53 => 5,  47 => 1,);
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
    <h1 style=\"   margin-left:43%;\">KTGame</h1>






<div style=\"  display: flex;   justify-content: space-between\">
<div style=\"margin-left:10px;\" class=\"btn-group-vertical\">
<div style=\"margin-left:12px\" class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
 
  <h5 style=\"margin-top: 3px; margin-left: 15px;  \">  YOUR ENNEMIES</h5>
    <div  style=\"margin-left:1px; overflow: auto; height:420px; width: 190px\" >
    
        <button style=\"width:190px\" style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet1.png\">
        <br>
        *Tommy*'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>
        <hr style=\"height: 1px; color: #839D2D\">


                <button style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet2.png\">

        <br>
        *Tommy*'s planet
        </button>
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet3.png\">
        
        <br>
        *Tommy*'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet4.png\">
        
        <br>
        *Tommy*'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>
        
        </button>

        <hr style=\"height: 1px; color: #839D2D\">

                <button style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet5.png\">
    
        <br>
        *Tommy*'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>


    </div >
    </div >
</div>
    
    



       <div class=\"card border-primary mb-3\" style=\"height: 450px; width:700px; text-align:center; margin-bottom: 100px\">
       
          <h4 style=\"margin-top: 10px\"> YOUR BASE</h4>
          <div styke=\"display: flex;   justify-content: space-between\">
          <div class=\"card-body\" style=\"float: left; width: 320px\">
            <h4 class=\"card-title\">Ressources</h4>

             <p class=\"card-text\">Gold</p>
             <h5> 78 / 100 </h5>
      
             <div class=\"progress\">

                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 78%;\"></div>
              </div>
              <hr>

              <p class=\"card-text\">Metal</p>
              <h5> 34 / 100  </h5>

              <div class=\"progress\">


                  <div class=\" progress-bar progress-bar-striped progress-bar-animated bg-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 34%;\"></div>
              </div>
              <hr>
              <p class=\"card-text\">Diamond</p>
              <h5> 12 / 100  </h5>

               <div class=\"progress\">
    
                  <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-info\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 12%;\"></div>
              </div>

          </div>
         <div class=\"card-body\" style=\"float: right; width: 350px\">




            <h4 class=\"card-title\">Army</h4>

            <div style=\" display: flex;   justify-content: space-between; align-items: center\">

                  <img src=\"assets/combat.png\">
                        <h5> 12 / 30  </h5>
                  <button style=\"width:100px; height:40px\" type=\"button\" class=\"btn btn-danger\">Construct</button>

          </div>
            <hr>
            <hr>

            <div style=\" margin-top:30x; display: flex;   justify-content: space-between; align-items: center\">

                <img style=\"margin-left:45px\" src=\"assets/form.png\">
                      <h5> 45 / 50  </h5>
                  <button style=\"width:100px;\" type=\"button\" class=\"btn btn-danger\">Train</button>



          </div>



          </div>

          </div>
 
    </div>





       <div style=\"\" class=\"btn-group-vertical\">

<div style=\"; margin-right:15px\" class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
 

 <h5 style=\"margin-right:10px; margin-left:10px; margin-top:2px\" >  YOUR CONSTRUCTIONS </h5>
         <div  style=\"margin-left:16px; overflow: auto; height:420px; width: 215px\" >


  <div style=\"height:190px\" class=\"card border-warning mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau 2
</div>
  <div class=\"card-body\">
    <h4 class=\"card-title\">Gold mine</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 gold
    <span class=\"badge bg-warning rounded-pill\">2min26</span>  
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-warning\">Improve / 20 gold-10 metal</button>
</div>


  <div style=\"height:190px\" class=\"card border-warning mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau 2
</div>
  <div class=\"card-body\">
    <h4 class=\"card-title\">Gold mine</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 gold
    <span class=\"badge bg-warning rounded-pill\">2min26</span>  
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-warning\">Improve / 20 gold-10 metal</button>
</div>

  <div style=\"height:190px\" class=\"card border-success mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau 2
</div>
  <div class=\"card-body\">
    <h4 class=\"card-title\">Metal refinery</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 gold
    <span class=\"badge bg-success rounded-pill\">2min26</span>  
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-success\">Improve / 20 gold-10 metal</button>
</div>

    </div>


    </div>
    </div>
</div>





        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

        <hr style=\"size: 100px color: #839D2D\">


    </body>

    <footer style=\"   text-align:center;
    position: fixed;
    bottom:0;
    width:100%;
    display:inline-block;
    vertical-align:top;
    font-size:13px;

    \">
            <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">
        <hr style=\"color: #839D2D\">


    <button style=\"margin-right: 12px; width: 200px; height: 200px\" type=\"button\" class=\"btn btn-outline-warning\">Gold mine<hr> <img src=\"assets/gold.png\"> <hr>Build for 5 diamonds</button>
<button  style=\"margin-right: 12px; width:200px; height: 200px\" type=\"button\" class=\"btn btn-outline-success\">Metal refinery<hr> <img src=\"assets/metal.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-light\">Diamond extractor<hr> <img src=\"assets/diamant.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-secondary\">Unit training center<hr> <img src=\"assets/soldat.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-primary\">Spaceship factory<hr> <img src=\"assets/avion.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-danger\">anti-aircraft turret<hr> <img src=\"assets/tour.png\"> <hr>Build for 5 diamonds</button>

    </footer>

</html>
", "base.html.twig", "/Users/tommy/Documents/KTGame/KTGame/templates/base.html.twig");
    }
}
