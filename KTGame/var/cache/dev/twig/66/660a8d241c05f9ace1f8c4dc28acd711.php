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
        if ( !twig_test_empty((isset($context["ennemies"]) || array_key_exists("ennemies", $context) ? $context["ennemies"] : (function () { throw new RuntimeError('Variable "ennemies" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["ennemies"]) || array_key_exists("ennemies", $context) ? $context["ennemies"] : (function () { throw new RuntimeError('Variable "ennemies" does not exist.', 27, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 28
                echo "        <button style=\"width:190px\" style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"../assets/planet2.png\">
        <br>
        ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ennemies"]) || array_key_exists("ennemies", $context) ? $context["ennemies"] : (function () { throw new RuntimeError('Variable "ennemies" does not exist.', 31, $this->source); })()), $context["i"], [], "array", false, false, false, 31), "html", null, true);
                echo "'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>
        <hr style=\"height: 1px; color: #839D2D\">

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 39
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
        // line 57
        echo twig_escape_filter($this->env, (isset($context["goldStock"]) || array_key_exists("goldStock", $context) ? $context["goldStock"] : (function () { throw new RuntimeError('Variable "goldStock" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " / 100 </h5>
      
             <div class=\"progress\">

                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["goldStock"]) || array_key_exists("goldStock", $context) ? $context["goldStock"] : (function () { throw new RuntimeError('Variable "goldStock" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "%;\"></div>
              </div>
              <hr>

              <p class=\"card-text\">Metal</p>
              <h5> ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["metalStock"]) || array_key_exists("metalStock", $context) ? $context["metalStock"] : (function () { throw new RuntimeError('Variable "metalStock" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " / 100  </h5>

              <div class=\"progress\">


                  <div class=\" progress-bar progress-bar-striped progress-bar-animated bg-success\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["metalStock"]) || array_key_exists("metalStock", $context) ? $context["metalStock"] : (function () { throw new RuntimeError('Variable "metalStock" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "%;\"></div>
              </div>
              <hr>
              <p class=\"card-text\">Diamond</p>
              
              <h5> ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["diamondStock"]) || array_key_exists("diamondStock", $context) ? $context["diamondStock"] : (function () { throw new RuntimeError('Variable "diamondStock" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " / 100  </h5>

               <div class=\"progress\">
    
                  <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-info\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["metalStock"]) || array_key_exists("metalStock", $context) ? $context["metalStock"] : (function () { throw new RuntimeError('Variable "metalStock" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "%;\"></div>
              </div>

          </div>
         <div class=\"card-body\" style=\"float: right; width: 350px\">




            <h4 class=\"card-title\">Army</h4>

            <div style=\" display: flex;   justify-content: space-between; align-items: center\">

                  <img src=\"../assets/combat.png\">
                        <h5> ";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["shipStock"]) || array_key_exists("shipStock", $context) ? $context["shipStock"] : (function () { throw new RuntimeError('Variable "shipStock" does not exist.', 94, $this->source); })()), "html", null, true);
        echo " / 30  </h5>
                  <button style=\"width:100px; height:40px\" type=\"button\" class=\"btn btn-danger\">Construct</button>

          </div>
            <hr>
            <hr>

            <div style=\" margin-top:30x; display: flex;   justify-content: space-between; align-items: center\">

                <img style=\"margin-left:45px\" src=\"../assets/form.png\">
                      <h5> ";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["unityStock"]) || array_key_exists("unityStock", $context) ? $context["unityStock"] : (function () { throw new RuntimeError('Variable "unityStock" does not exist.', 104, $this->source); })()), "html", null, true);
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
    ";
        // line 130
        if ( !twig_test_empty((isset($context["goldBuildings"]) || array_key_exists("goldBuildings", $context) ? $context["goldBuildings"] : (function () { throw new RuntimeError('Variable "goldBuildings" does not exist.', 130, $this->source); })()))) {
            // line 131
            echo "
        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["goldBuildings"]) || array_key_exists("goldBuildings", $context) ? $context["goldBuildings"] : (function () { throw new RuntimeError('Variable "goldBuildings" does not exist.', 132, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 133
                echo "


  <div style=\"height:190px\" class=\"card border-warning mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau ";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["goldBuildings"]) || array_key_exists("goldBuildings", $context) ? $context["goldBuildings"] : (function () { throw new RuntimeError('Variable "goldBuildings" does not exist.', 137, $this->source); })()), $context["i"], [], "array", false, false, false, 137), "lvl", [], "any", false, false, false, 137), "html", null, true);
                echo "
</div>

  <div class=\"card-body\">
    <h4 class=\"card-title\">Gold mine</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 Gold
               <span class=\"badge bg-warning rounded-pill\">";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["goldBuildings"]) || array_key_exists("goldBuildings", $context) ? $context["goldBuildings"] : (function () { throw new RuntimeError('Variable "goldBuildings" does not exist.', 144, $this->source); })()), $context["i"], [], "array", false, false, false, 144), "getRestTime", [], "method", false, false, false, 144), "html", null, true);
                echo "</span>
            
  </div>

<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-warning\">";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["goldBuildings"]) || array_key_exists("goldBuildings", $context) ? $context["goldBuildings"] : (function () { throw new RuntimeError('Variable "goldBuildings" does not exist.', 148, $this->source); })()), $context["i"], [], "array", false, false, false, 148), "goldPrice", [], "any", false, false, false, 148), "html", null, true);
                echo " gold-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["goldBuildings"]) || array_key_exists("goldBuildings", $context) ? $context["goldBuildings"] : (function () { throw new RuntimeError('Variable "goldBuildings" does not exist.', 148, $this->source); })()), $context["i"], [], "array", false, false, false, 148), "metalPrice", [], "any", false, false, false, 148), "html", null, true);
                echo " metal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["goldBuildings"]) || array_key_exists("goldBuildings", $context) ? $context["goldBuildings"] : (function () { throw new RuntimeError('Variable "goldBuildings" does not exist.', 148, $this->source); })()), $context["i"], [], "array", false, false, false, 148), "diamondPrice", [], "any", false, false, false, 148), "html", null, true);
                echo " diamond</button>
</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 153
        echo "    ";
        if ( !twig_test_empty((isset($context["metalBuildings"]) || array_key_exists("metalBuildings", $context) ? $context["metalBuildings"] : (function () { throw new RuntimeError('Variable "metalBuildings" does not exist.', 153, $this->source); })()))) {
            // line 154
            echo "

        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["metalBuildings"]) || array_key_exists("metalBuildings", $context) ? $context["metalBuildings"] : (function () { throw new RuntimeError('Variable "metalBuildings" does not exist.', 156, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 157
                echo "


  <div style=\"height:190px\" class=\"card border-success mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau ";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["metalBuildings"]) || array_key_exists("metalBuildings", $context) ? $context["metalBuildings"] : (function () { throw new RuntimeError('Variable "metalBuildings" does not exist.', 161, $this->source); })()), $context["i"], [], "array", false, false, false, 161), "lvl", [], "any", false, false, false, 161), "html", null, true);
                echo "
</div>
  <div class=\"card-body\">
    <h4 class=\"card-title\">Metal refinery</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 Metals

    <span class=\"badge bg-success rounded-pill\">";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["metalBuildings"]) || array_key_exists("metalBuildings", $context) ? $context["metalBuildings"] : (function () { throw new RuntimeError('Variable "metalBuildings" does not exist.', 168, $this->source); })()), $context["i"], [], "array", false, false, false, 168), "getRestTime", [], "method", false, false, false, 168), "html", null, true);
                echo "</span>  
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-success\">";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["metalBuildings"]) || array_key_exists("metalBuildings", $context) ? $context["metalBuildings"] : (function () { throw new RuntimeError('Variable "metalBuildings" does not exist.', 171, $this->source); })()), $context["i"], [], "array", false, false, false, 171), "goldPrice", [], "any", false, false, false, 171), "html", null, true);
                echo " gold-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["metalBuildings"]) || array_key_exists("metalBuildings", $context) ? $context["metalBuildings"] : (function () { throw new RuntimeError('Variable "metalBuildings" does not exist.', 171, $this->source); })()), $context["i"], [], "array", false, false, false, 171), "metalPrice", [], "any", false, false, false, 171), "html", null, true);
                echo " metal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["metalBuildings"]) || array_key_exists("metalBuildings", $context) ? $context["metalBuildings"] : (function () { throw new RuntimeError('Variable "metalBuildings" does not exist.', 171, $this->source); })()), $context["i"], [], "array", false, false, false, 171), "diamondPrice", [], "any", false, false, false, 171), "html", null, true);
                echo " diamond</button>
</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 176
        echo "    ";
        if ( !twig_test_empty((isset($context["diamondBuildings"]) || array_key_exists("diamondBuildings", $context) ? $context["diamondBuildings"] : (function () { throw new RuntimeError('Variable "diamondBuildings" does not exist.', 176, $this->source); })()))) {
            // line 177
            echo "
  ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["diamondBuildings"]) || array_key_exists("diamondBuildings", $context) ? $context["diamondBuildings"] : (function () { throw new RuntimeError('Variable "diamondBuildings" does not exist.', 178, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "<div style=\"height:190px\" class=\"card border-light mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau ";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["diamondBuildings"]) || array_key_exists("diamondBuildings", $context) ? $context["diamondBuildings"] : (function () { throw new RuntimeError('Variable "diamondBuildings" does not exist.', 179, $this->source); })()), $context["i"], [], "array", false, false, false, 179), "lvl", [], "any", false, false, false, 179), "html", null, true);
                echo "
</div>
  <div class=\"card-body\">
    <h5 class=\"card-title\">Diamond extractor</h5>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 Diamonds

    <span class=\"badge bg-light rounded-pill\">";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["diamondBuildings"]) || array_key_exists("diamondBuildings", $context) ? $context["diamondBuildings"] : (function () { throw new RuntimeError('Variable "diamondBuildings" does not exist.', 186, $this->source); })()), $context["i"], [], "array", false, false, false, 186), "getRestTime", [], "method", false, false, false, 186), "html", null, true);
                echo "</span>  
 
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-light\">";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["diamondBuildings"]) || array_key_exists("diamondBuildings", $context) ? $context["diamondBuildings"] : (function () { throw new RuntimeError('Variable "diamondBuildings" does not exist.', 190, $this->source); })()), $context["i"], [], "array", false, false, false, 190), "goldPrice", [], "any", false, false, false, 190), "html", null, true);
                echo " gold-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["diamondBuildings"]) || array_key_exists("diamondBuildings", $context) ? $context["diamondBuildings"] : (function () { throw new RuntimeError('Variable "diamondBuildings" does not exist.', 190, $this->source); })()), $context["i"], [], "array", false, false, false, 190), "metalPrice", [], "any", false, false, false, 190), "html", null, true);
                echo " metal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["diamondBuildings"]) || array_key_exists("diamondBuildings", $context) ? $context["diamondBuildings"] : (function () { throw new RuntimeError('Variable "diamondBuildings" does not exist.', 190, $this->source); })()), $context["i"], [], "array", false, false, false, 190), "diamondPrice", [], "any", false, false, false, 190), "html", null, true);
                echo " diamond</button>
</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 195
        echo "

    </div>


    </div>
    </div>
</div>





        ";
        // line 208
        $this->displayBlock('body', $context, $blocks);
        // line 209
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 210
        echo "
        <hr style=\"size: 100px color: #839D2D\">
<hr style=\"margin-top:14%\">

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


    <button style=\"margin-right: 12px; width: 200px; height: 200px\" type=\"button\" class=\"btn btn-outline-warning\">Gold mine<hr> <img src=\"../assets/gold.png\"> <hr>Build for 5 diamonds</button>
<button  style=\"margin-right: 12px; width:200px; height: 200px\" type=\"button\" class=\"btn btn-outline-success\">Metal refinery<hr> <img src=\"../assets/metal.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-light\">Diamond extractor<hr> <img src=\"../assets/diamant.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-secondary\">Unit training center<hr> <img src=\"../assets/soldat.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-primary\">Spaceship factory<hr> <img src=\"../assets/avion.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-danger\">anti-aircraft turret<hr> <img src=\"../assets/tour.png\"> <hr>Build for 5 diamonds</button>

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

    // line 208
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

    // line 209
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
        return array (  479 => 209,  461 => 208,  442 => 9,  423 => 7,  382 => 210,  379 => 209,  377 => 208,  362 => 195,  347 => 190,  340 => 186,  330 => 179,  324 => 178,  321 => 177,  318 => 176,  303 => 171,  297 => 168,  287 => 161,  281 => 157,  277 => 156,  273 => 154,  270 => 153,  255 => 148,  248 => 144,  238 => 137,  232 => 133,  228 => 132,  225 => 131,  223 => 130,  194 => 104,  181 => 94,  164 => 80,  157 => 76,  149 => 71,  141 => 66,  133 => 61,  126 => 57,  106 => 39,  92 => 31,  87 => 28,  82 => 27,  80 => 26,  62 => 10,  60 => 9,  55 => 7,  47 => 1,);
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
    
    {% if ennemies is not empty %}
        {%  for i in 0..ennemies|length - 1   %}
        <button style=\"width:190px\" style=\"width:190px\" type=\"button\" class=\"btn btn-primary\">
        <img src=\"../assets/planet2.png\">
        <br>
        {{ennemies[i]}}'s planet
        <button style=\"width:190px;\" type=\"button\" class=\"btn btn-danger\">Invade⚡️</button>

        </button>
        <hr style=\"height: 1px; color: #839D2D\">

{% endfor %}
{% endif %}


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

                  <img src=\"../assets/combat.png\">
                        <h5> {{shipStock}} / 30  </h5>
                  <button style=\"width:100px; height:40px\" type=\"button\" class=\"btn btn-danger\">Construct</button>

          </div>
            <hr>
            <hr>

            <div style=\" margin-top:30x; display: flex;   justify-content: space-between; align-items: center\">

                <img style=\"margin-left:45px\" src=\"../assets/form.png\">
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
    {% if goldBuildings is not empty %}

        {%  for i in 0..goldBuildings|length - 1   %}



  <div style=\"height:190px\" class=\"card border-warning mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau {{goldBuildings[i].lvl}}
</div>

  <div class=\"card-body\">
    <h4 class=\"card-title\">Gold mine</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 Gold
               <span class=\"badge bg-warning rounded-pill\">{{goldBuildings[i].getRestTime()}}</span>
            
  </div>

<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-warning\">{{goldBuildings[i].goldPrice}} gold-{{goldBuildings[i].metalPrice}} metal-{{goldBuildings[i].diamondPrice}} diamond</button>
</div>

{% endfor %}
{% endif %}
    {% if metalBuildings is not empty %}


        {%  for i in 0..metalBuildings|length - 1    %}



  <div style=\"height:190px\" class=\"card border-success mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau {{metalBuildings[i].lvl}}
</div>
  <div class=\"card-body\">
    <h4 class=\"card-title\">Metal refinery</h4>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 Metals

    <span class=\"badge bg-success rounded-pill\">{{metalBuildings[i].getRestTime()}}</span>  
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-success\">{{metalBuildings[i].goldPrice}} gold-{{metalBuildings[i].metalPrice}} metal-{{metalBuildings[i].diamondPrice}} diamond</button>
</div>

{% endfor %}
{% endif %}
    {% if diamondBuildings is not empty %}

  {%  for i in 0..diamondBuildings|length - 1 %}<div style=\"height:190px\" class=\"card border-light mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Niveau {{diamondBuildings[i].lvl}}
</div>
  <div class=\"card-body\">
    <h5 class=\"card-title\">Diamond extractor</h5>
     <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    5 Diamonds

    <span class=\"badge bg-light rounded-pill\">{{diamondBuildings[i].getRestTime()}}</span>  
 
    
  </div>
<button style=\"margin-bottom:5px; margin-left:4px; margin-right:4px; height:30px; font-size:small;\" type=\"button\" class=\"btn btn-light\">{{diamondBuildings[i].goldPrice}} gold-{{diamondBuildings[i].metalPrice}} metal-{{diamondBuildings[i].diamondPrice}} diamond</button>
</div>

{% endfor %}
{% endif %}


    </div>


    </div>
    </div>
</div>





        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

        <hr style=\"size: 100px color: #839D2D\">
<hr style=\"margin-top:14%\">

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


    <button style=\"margin-right: 12px; width: 200px; height: 200px\" type=\"button\" class=\"btn btn-outline-warning\">Gold mine<hr> <img src=\"../assets/gold.png\"> <hr>Build for 5 diamonds</button>
<button  style=\"margin-right: 12px; width:200px; height: 200px\" type=\"button\" class=\"btn btn-outline-success\">Metal refinery<hr> <img src=\"../assets/metal.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-light\">Diamond extractor<hr> <img src=\"../assets/diamant.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-secondary\">Unit training center<hr> <img src=\"../assets/soldat.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-primary\">Spaceship factory<hr> <img src=\"../assets/avion.png\"> <hr>Build for 5 diamonds</button>
<button style=\"margin-right: 12px; width:200px; height: 200px;\" type=\"button\" class=\"btn btn-outline-danger\">anti-aircraft turret<hr> <img src=\"../assets/tour.png\"> <hr>Build for 5 diamonds</button>

    </footer>

</html>
", "base.html.twig", "/Users/tommy/Desktop/KTGame/KTGame/templates/base.html.twig");
    }
}
