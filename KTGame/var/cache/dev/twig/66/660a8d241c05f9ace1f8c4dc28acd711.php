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
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/vapor/bootstrap.min.css\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body style=\"  height: 100%;\">
    <h1 style=\"   margin-left:43%;\">KTGame</h1>






<div style=\"  display: flex;   justify-content: space-between\">
<div style=\"margin-left:10px;\" class=\"btn-group-vertical\">
<div style=\"margin-left:12px\" class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
 
  <h5 style=\"margin-top: 3px; margin-left: 15px;  \">  YOUR ENNEMIES</h5>
    <div  style=\"margin-left:1px; overflow: auto; height:420px; width: 190px\" >
    
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["ennemies"]) || array_key_exists("ennemies", $context) ? $context["ennemies"] : (function () { throw new RuntimeError('Variable "ennemies" does not exist.', 26, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "        <button style=\"width:190px\" style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet1.png\">
        <br>
        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ennemies"]) || array_key_exists("ennemies", $context) ? $context["ennemies"] : (function () { throw new RuntimeError('Variable "ennemies" does not exist.', 30, $this->source); })()), $context["i"], [], "array", false, false, false, 30), "html", null, true);
            echo "'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>
        <hr style=\"height: 1px; color: #839D2D\">

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

    </div >
    </div >
</div>
    
    



       <div class=\"card border-primary mb-3\" style=\"height: 450px; width:700px; text-align:center; margin-bottom: 100px\">
       
          <h4 style=\"margin-top: 10px\"> YOUR BASE</h4>
          <div styke=\"display: flex;   justify-content: space-between\">
          <div class=\"card-body\" style=\"float: left; width: 320px\">
            <h4 class=\"card-title\">Ressources</h4>

             <p class=\"card-text\">Gold</p>
             <h5> ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["goldStock"]) || array_key_exists("goldStock", $context) ? $context["goldStock"] : (function () { throw new RuntimeError('Variable "goldStock" does not exist.', 55, $this->source); })()), "html", null, true);
        echo " / 100 </h5>
      
             <div class=\"progress\">

                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["goldStock"]) || array_key_exists("goldStock", $context) ? $context["goldStock"] : (function () { throw new RuntimeError('Variable "goldStock" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "%;\"></div>
              </div>
              <hr>

              <p class=\"card-text\">Metal</p>
              <h5> ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["metalStock"]) || array_key_exists("metalStock", $context) ? $context["metalStock"] : (function () { throw new RuntimeError('Variable "metalStock" does not exist.', 64, $this->source); })()), "html", null, true);
        echo " / 100  </h5>

              <div class=\"progress\">


                  <div class=\" progress-bar progress-bar-striped progress-bar-animated bg-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["metalStock"]) || array_key_exists("metalStock", $context) ? $context["metalStock"] : (function () { throw new RuntimeError('Variable "metalStock" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "%;\"></div>
              </div>
              <hr>
              <p class=\"card-text\">Diamond</p>
              
              <h5> ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["diamondStock"]) || array_key_exists("diamondStock", $context) ? $context["diamondStock"] : (function () { throw new RuntimeError('Variable "diamondStock" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " / 100  </h5>

               <div class=\"progress\">
    
                  <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-info\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["metalStock"]) || array_key_exists("metalStock", $context) ? $context["metalStock"] : (function () { throw new RuntimeError('Variable "metalStock" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "%;\"></div>
              </div>

          </div>
         <div class=\"card-body\" style=\"float: right; width: 350px\">




            <h4 class=\"card-title\">Army</h4>

            <div style=\" display: flex;   justify-content: space-between; align-items: center\">

                  <img src=\"assets/combat.png\">
                        <h5> ";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["shipStock"]) || array_key_exists("shipStock", $context) ? $context["shipStock"] : (function () { throw new RuntimeError('Variable "shipStock" does not exist.', 92, $this->source); })()), "html", null, true);
        echo " / 30  </h5>
                  <button style=\"width:100px; height:40px\" type=\"button\" class=\"btn btn-danger\">Construct</button>

          </div>
            <hr>
            <hr>

            <div style=\" margin-top:30x; display: flex;   justify-content: space-between; align-items: center\">

                <img style=\"margin-left:45px\" src=\"assets/form.png\">
                      <h5> ";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["unityStock"]) || array_key_exists("unityStock", $context) ? $context["unityStock"] : (function () { throw new RuntimeError('Variable "unityStock" does not exist.', 102, $this->source); })()), "html", null, true);
        echo " / 50  </h5>
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
        // line 181
        $this->displayBlock('body', $context, $blocks);
        // line 182
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 183
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

    // line 7
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

    // line 9
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

    // line 181
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

    // line 182
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 182,  356 => 181,  337 => 9,  318 => 7,  277 => 183,  274 => 182,  272 => 181,  190 => 102,  177 => 92,  160 => 78,  153 => 74,  145 => 69,  137 => 64,  129 => 59,  122 => 55,  102 => 37,  89 => 30,  84 => 27,  80 => 26,  62 => 10,  60 => 9,  55 => 7,  47 => 1,);
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
    
        {%  for i in 0..ennemies|length - 1   %}
        <button style=\"width:190px\" style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"assets/planet1.png\">
        <br>
        {{ennemies[i]}}'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>
        <hr style=\"height: 1px; color: #839D2D\">

{% endfor %}


    </div >
    </div >
</div>
    
    



       <div class=\"card border-primary mb-3\" style=\"height: 450px; width:700px; text-align:center; margin-bottom: 100px\">
       
          <h4 style=\"margin-top: 10px\"> YOUR BASE</h4>
          <div styke=\"display: flex;   justify-content: space-between\">
          <div class=\"card-body\" style=\"float: left; width: 320px\">
            <h4 class=\"card-title\">Ressources</h4>

             <p class=\"card-text\">Gold</p>
             <h5> {{goldStock}} / 100 </h5>
      
             <div class=\"progress\">

                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{goldStock}}%;\"></div>
              </div>
              <hr>

              <p class=\"card-text\">Metal</p>
              <h5> {{metalStock}} / 100  </h5>

              <div class=\"progress\">


                  <div class=\" progress-bar progress-bar-striped progress-bar-animated bg-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{metalStock}}%;\"></div>
              </div>
              <hr>
              <p class=\"card-text\">Diamond</p>
              
              <h5> {{diamondStock}} / 100  </h5>

               <div class=\"progress\">
    
                  <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-info\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{metalStock}}%;\"></div>
              </div>

          </div>
         <div class=\"card-body\" style=\"float: right; width: 350px\">




            <h4 class=\"card-title\">Army</h4>

            <div style=\" display: flex;   justify-content: space-between; align-items: center\">

                  <img src=\"assets/combat.png\">
                        <h5> {{shipStock}} / 30  </h5>
                  <button style=\"width:100px; height:40px\" type=\"button\" class=\"btn btn-danger\">Construct</button>

          </div>
            <hr>
            <hr>

            <div style=\" margin-top:30x; display: flex;   justify-content: space-between; align-items: center\">

                <img style=\"margin-left:45px\" src=\"assets/form.png\">
                      <h5> {{unityStock}} / 50  </h5>
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
