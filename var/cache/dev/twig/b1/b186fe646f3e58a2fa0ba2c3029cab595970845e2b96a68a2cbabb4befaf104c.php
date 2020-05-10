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

/* slide_creation/index.html.twig */
class __TwigTemplate_bf75089a4a172ce2165ade81af904e2f4a687943971fb411d148350c3293030f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "slide_creation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "slide_creation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "slide_creation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Créer un slide";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "    <div class=\"flex m-2\" id=\"errorSlide\">
        <div class=\"m-3\">
            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                <strong class=\"font-bold\">Erreur !</strong><br />
                <span class=\"block sm:inline\" id=\"errorSlideDisplay\">

                </span>
                <span class=\"absolute top-0 bottom-0 right-0 px-4 py-3\">
                    <svg class=\"fill-current h-6 w-6 text-red-500\" role=\"button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><title>Close</title><path d=\"M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z\"/></svg>
                </span>
            </div>
        </div>
    </div>

    ";
        // line 22
        echo "    <div class=\"flex m-2\" id=\"messageSlide\">
        <div class=\"m-auto\">
            <div class=\"bg-white rounded-lg border-gray-300 border p-3 shadow-lg\">
                <div class=\"flex flex-row\">
                    <div class=\"p-2\">
                        <svg width=\"32\" height=\"32\" viewBox=\"0 0 1792 1792\" fill=\"#44C997\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z\"/>
                        </svg>
                    </div>
                    <div class=\"ml-2 mr-6\">
                        <span class=\"font-semibold\">Création réussie !</span>
                        <span class=\"block text-gray-500\">La slide a bien été créé.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 40
        echo "    <div class=\"flex flex-row flex-wrap items-center justify-center m-2\">
        <div class=\"m-1\">
            <button type=\"button\" id=\"slideCreate\"  class=\"check bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl py-2 px-6 inline-flex items-center\">
                <span class=\"mr-2\">Créer un slide</span>
                <svg width=\"16\" fill=\"currentcolor\" height=\"16\" viewBox=\"0 0 448 448\"  xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0\"/></svg>
            </button>
        </div>

";
        // line 49
        echo "        <div class=\"m-1 flex flex-wrap \" id=\"slideName\">
            <div class=\"flex w-9/12\">
                <input type=\"text\" value=\"\" placeholder=\"Nom du slide\" id=\"nameOfSlide\" class=\"bg-white text-sm text-gray-900 text-center focus:outline-none border rounded-tl-md rounded-bl-md border-gray-800 focus:border-gray-600 hover:border-green-600  w-full\">
            </div>
            <div class=\"flex flex-row w-3/12 \">
                <button id=\"slideNameSend\" class=\"text-white text-center text-md w-full font-semibold rounded-tr-md rounded-br-md bg-gray-800 hover:border-green-600 hover:bg-green-500 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600 \">
                    <svg class=\"m-3\" version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\"><g><g>
                        <path d=\"M484.128,104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856c-7.208,0-13.964,2.788-19.028,7.856
                            L203.508,314.81L62.024,173.322c-5.064-5.06-11.82-7.852-19.028-7.852c-7.204,0-13.956,2.792-19.024,7.852l-16.12,16.112
                            C2.784,194.51,0,201.27,0,208.47c0,7.204,2.784,13.96,7.852,19.028l159.744,159.736c0.212,0.3,0.436,0.58,0.696,0.836
                            l16.12,15.852c5.064,5.048,11.82,7.572,19.084,7.572h0.084c7.212,0,13.968-2.524,19.024-7.572l16.124-15.992
                            c0.26-0.256,0.48-0.468,0.612-0.684l244.784-244.76C494.624,132.01,494.624,114.966,484.128,104.478z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    ";
        // line 68
        echo "    <div id=\"contentSlide\">
        <section class=\"flex flex-wrap w-full m-2 items-center justify-center\" id=\"imagesDisplay\">
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagesUploaded"]) || array_key_exists("imagesUploaded", $context) ? $context["imagesUploaded"] : (function () { throw new RuntimeError('Variable "imagesUploaded" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 71
            echo "                <div class=\"relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                    <div class=\"absolute top-0 right-0\">
                        <svg id=\"selected";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" version=\"1.1\"  xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4 hidden m-2\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
                            <ellipse style=\"fill:darkseagreen;\" cx=\"256\" cy=\"256\" rx=\"256\" ry=\"255.832\"/>
                            <polygon style=\"fill:#FFFFFF;\" points=\"235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504
                                391.88,166.392 \"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                        <input type=\"checkbox\" name=\"checkImage\" id=\"check";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\" class=\"opacity-0\" autocomplete=\"off\">
                    </div>
                    <img class=\"h-32 object-cover\"  src=\"/uploads/";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </section>

        ";
        // line 86
        echo "        <div class=\"flex items-center justify-center m-2\">
            <button type=\"button\" id=\"selectImage\"  class=\"check bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl py-2 px-6 inline-flex items-center\">
                <span class=\"mr-2\">Ajouter une image</span>
                <svg width=\"16\" fill=\"currentcolor\" height=\"16\" viewBox=\"0 0 448 448\"  xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0\"/></svg>
            </button>
        </div>

        ";
        // line 94
        echo "        <section class=\"flex items-center justify-center\">
            <div class=\"flex m-2 p-3 w-3/4 shadow-2xl items-center justify-center\">
                <div id=\"slide\" class=\"flex items-center justify-center bg-gray-200 w-3/4 h-64\"></div>
            </div>
        </section>

        ";
        // line 101
        echo "        <section>
            <div class=\"flex flex-wrap items-center justify-center\">
                <div class=\"m-3\">
                    <button id=\"confirm\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl  p-3 inline-flex items-center\">
                        <span class=\"mr-2\">Ajouter au slide</span>
                    </button>
                </div>

                <div class=\"m-3\">
                    <div class=\"mt-1 flex flex-wrap shadow-2xl\">
                        <div class=\"flex flex-row w-3/12 rounded border-b-2 border-gray-800 hover:border-gray-800 hover:text-white shadow-2xl border-r-0\">
                            <button class=\"text-white text-center text-md w-full font-semibold rounded-tl-md rounded-bl-md  bg-white focus:outline-none border  \">
                                <svg class=\"h-6 w-6 ml-4\" version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\"><g><g><g>
                                    <path d=\"M391.84,48.87l54.306,45.287c3.739,3.119,8.281,4.641,12.798,4.641c5.729,0,11.415-2.448,15.371-7.191
                                        c7.074-8.483,5.932-21.095-2.552-28.169L417.457,18.15c-8.481-7.074-21.094-5.933-28.169,2.551
                                        C382.214,29.184,383.356,41.795,391.84,48.87z\"/>
                                    <path d=\"M53.057,98.797c4.516,0,9.059-1.522,12.798-4.641L120.16,48.87c8.483-7.074,9.626-19.686,2.552-28.169
                                        c-7.073-8.482-19.686-9.625-28.169-2.551L40.237,63.437c-8.483,7.074-9.626,19.686-2.552,28.169
                                        C41.642,96.349,47.328,98.797,53.057,98.797z\"/>
                                    <path d=\"M422.877,109.123C383.051,69.297,331.494,45.474,276,40.847V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v20.847
                                        c-55.494,4.627-107.051,28.449-146.877,68.275C44.548,153.697,20,212.962,20,276s24.548,122.303,69.123,166.877
                                        C133.697,487.452,192.962,512,256,512c50.754,0,99.118-15.869,139.864-45.894c8.893-6.552,10.789-19.072,4.237-27.965
                                        c-6.553-8.894-19.074-10.789-27.966-4.237C338.313,458.827,298.154,472,256,472c-108.075,0-196-87.925-196-196S147.925,80,256,80
                                        s196,87.925,196,196c0,33.01-8.354,65.638-24.161,94.356c-5.326,9.677-1.799,21.839,7.878,27.165
                                        c9.674,5.324,21.838,1.8,27.165-7.878C481.931,355.032,492,315.735,492,276C492,212.962,467.452,153.697,422.877,109.123z\"/>
                                    <path d=\"M353.434,155.601c-8.584-6.947-21.178-5.622-28.128,2.965l-63.061,77.925C260.209,236.17,258.124,236,256,236
                                        c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40c0-5.052-0.951-9.884-2.668-14.338l63.067-77.933
                                        C363.348,175.142,362.021,162.548,353.434,155.601z\"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </button>
                        </div>
                        <div class=\"flex w-5/12 rounded border-b-2 border-gray-800 hover:border-gray-800  hover:text-white shadow-md border-r-0 border-r-0 \">
                            <input type=\"text\" value=\"0\" id=\"inputTimer\" class=\"bg-white text-sm text-gray-900 text-center focus:outline-none border   w-full\">
                        </div>
                        <div class=\"flex flex-col w-4/12 rounded border-b-2 border-gray-800 hover:border-gray-800  hover:text-white shadow-md\">
                            <button id=\"timerUp\" class=\"btnUp text-gray-800 text-center text-md font-semibold rounded-tr-md bg-white focus:outline-none\">
                                +
                            </button>
                            <button id=\"timerDown\" class=\"btnDown text-gray-800 text-center text-md font-semibold  px-1 bg-white focus:outline-none\">
                                -
                            </button>
                        </div>
                    </div>
                </div>
            ";
        // line 146
        echo "                <div class=\"flex flex-col m-3\">
                    <button id=\"kenburnEffect\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-gray-800  hover:gray-800 hover:bg-gray-800 hover:text-white shadow-2xl p-3 inline-flex items-center\">
                        <span class=\"mr-2\">Effet ken burn</span>
                        <svg width=\"24\" height=\"24\" fill=\"currentcolor\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\"><g><g>
                            <path d=\"M508.875,493.792L353.089,338.005c32.358-35.927,52.245-83.296,52.245-135.339C405.333,90.917,314.417,0,202.667,0
                            S0,90.917,0,202.667s90.917,202.667,202.667,202.667c52.043,0,99.411-19.887,135.339-52.245l155.786,155.786
                            c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125C513.042,504.708,513.042,497.958,508.875,493.792z
                            M202.667,384c-99.979,0-181.333-81.344-181.333-181.333S102.688,21.333,202.667,21.333S384,102.677,384,202.667
                            S302.646,384,202.667,384z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                    </button>
                    <div class=\"mt-1 flex flex-wrap \" id=\"timer\">
                        <div class=\"flex flex-row w-3/12 \">
                            <button id=\"valideTimer\"
                                    class=\"text-white text-center text-md w-full font-semibold rounded-tl-md rounded-bl-md bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600 \">
                                <svg class=\"m-3\" version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\"><g><g>
                                    <path d=\"M484.128,104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856c-7.208,0-13.964,2.788-19.028,7.856
                                        L203.508,314.81L62.024,173.322c-5.064-5.06-11.82-7.852-19.028-7.852c-7.204,0-13.956,2.792-19.024,7.852l-16.12,16.112
                                        C2.784,194.51,0,201.27,0,208.47c0,7.204,2.784,13.96,7.852,19.028l159.744,159.736c0.212,0.3,0.436,0.58,0.696,0.836
                                        l16.12,15.852c5.064,5.048,11.82,7.572,19.084,7.572h0.084c7.212,0,13.968-2.524,19.024-7.572l16.124-15.992
                                        c0.26-0.256,0.48-0.468,0.612-0.684l244.784-244.76C494.624,132.01,494.624,114.966,484.128,104.478z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </button>
                        </div>
                        <div class=\"flex w-5/12\">
                            <input type=\"text\" value=\"0\" id=\"inputNbr\" class=\"bg-white text-sm text-gray-900 text-center focus:outline-none border border-gray-800 focus:border-gray-600  w-full\">
                        </div>
                        <div class=\"flex flex-col w-4/12\">
                            <button class=\"btnUp text-white text-center text-md font-semibold rounded-tr-md  bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600\">
                                +
                            </button>
                            <button class=\"btnDown text-white text-center text-md font-semibold rounded-br-md px-1 bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600\">
                                -
                            </button>
                        </div>
                    </div>
                </div>

";
        // line 185
        echo "                <div class=\"m-3\">
                    <button  id=\"save\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl p-3 inline-flex items-center\">
                        <a href=\"#header\" class=\"mr-3\">Sauvegarder le slide</a>
                        <svg version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\"><g><g>
                            <path d=\"M484.128,104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856c-7.208,0-13.964,2.788-19.028,7.856
                                L203.508,314.81L62.024,173.322c-5.064-5.06-11.82-7.852-19.028-7.852c-7.204,0-13.956,2.792-19.024,7.852l-16.12,16.112
                                C2.784,194.51,0,201.27,0,208.47c0,7.204,2.784,13.96,7.852,19.028l159.744,159.736c0.212,0.3,0.436,0.58,0.696,0.836
                                l16.12,15.852c5.064,5.048,11.82,7.572,19.084,7.572h0.084c7.212,0,13.968-2.524,19.024-7.572l16.124-15.992
                                c0.26-0.256,0.48-0.468,0.612-0.684l244.784-244.76C494.624,132.01,494.624,114.966,484.128,104.478z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        ";
        // line 201
        echo "        <section class=\"flex flex-col items-center m-8  p-2\">
            <div id=\"slideShow\" class=\"w-11/12  overflow-x-hidden flex snap-x p-1\">

            </div>

            <div id=\"index\" class=\"flex p-1\">

            </div>
        </section>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.5.0.js\" integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\" crossorigin=\"anonymous\"></script>
    <script src=\"/js/creationSlide.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "slide_creation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 201,  298 => 185,  258 => 146,  212 => 101,  204 => 94,  195 => 86,  191 => 83,  182 => 80,  177 => 78,  169 => 73,  163 => 71,  159 => 70,  155 => 68,  135 => 49,  125 => 40,  106 => 22,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un slide{% endblock %}

{% block body %}
    {# Error display #}
    <div class=\"flex m-2\" id=\"errorSlide\">
        <div class=\"m-3\">
            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                <strong class=\"font-bold\">Erreur !</strong><br />
                <span class=\"block sm:inline\" id=\"errorSlideDisplay\">

                </span>
                <span class=\"absolute top-0 bottom-0 right-0 px-4 py-3\">
                    <svg class=\"fill-current h-6 w-6 text-red-500\" role=\"button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><title>Close</title><path d=\"M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z\"/></svg>
                </span>
            </div>
        </div>
    </div>

    {# Message display #}
    <div class=\"flex m-2\" id=\"messageSlide\">
        <div class=\"m-auto\">
            <div class=\"bg-white rounded-lg border-gray-300 border p-3 shadow-lg\">
                <div class=\"flex flex-row\">
                    <div class=\"p-2\">
                        <svg width=\"32\" height=\"32\" viewBox=\"0 0 1792 1792\" fill=\"#44C997\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z\"/>
                        </svg>
                    </div>
                    <div class=\"ml-2 mr-6\">
                        <span class=\"font-semibold\">Création réussie !</span>
                        <span class=\"block text-gray-500\">La slide a bien été créé.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {# Create slide button #}
    <div class=\"flex flex-row flex-wrap items-center justify-center m-2\">
        <div class=\"m-1\">
            <button type=\"button\" id=\"slideCreate\"  class=\"check bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl py-2 px-6 inline-flex items-center\">
                <span class=\"mr-2\">Créer un slide</span>
                <svg width=\"16\" fill=\"currentcolor\" height=\"16\" viewBox=\"0 0 448 448\"  xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0\"/></svg>
            </button>
        </div>

{#        Input name Slide#}
        <div class=\"m-1 flex flex-wrap \" id=\"slideName\">
            <div class=\"flex w-9/12\">
                <input type=\"text\" value=\"\" placeholder=\"Nom du slide\" id=\"nameOfSlide\" class=\"bg-white text-sm text-gray-900 text-center focus:outline-none border rounded-tl-md rounded-bl-md border-gray-800 focus:border-gray-600 hover:border-green-600  w-full\">
            </div>
            <div class=\"flex flex-row w-3/12 \">
                <button id=\"slideNameSend\" class=\"text-white text-center text-md w-full font-semibold rounded-tr-md rounded-br-md bg-gray-800 hover:border-green-600 hover:bg-green-500 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600 \">
                    <svg class=\"m-3\" version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\"><g><g>
                        <path d=\"M484.128,104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856c-7.208,0-13.964,2.788-19.028,7.856
                            L203.508,314.81L62.024,173.322c-5.064-5.06-11.82-7.852-19.028-7.852c-7.204,0-13.956,2.792-19.024,7.852l-16.12,16.112
                            C2.784,194.51,0,201.27,0,208.47c0,7.204,2.784,13.96,7.852,19.028l159.744,159.736c0.212,0.3,0.436,0.58,0.696,0.836
                            l16.12,15.852c5.064,5.048,11.82,7.572,19.084,7.572h0.084c7.212,0,13.968-2.524,19.024-7.572l16.124-15.992
                            c0.26-0.256,0.48-0.468,0.612-0.684l244.784-244.76C494.624,132.01,494.624,114.966,484.128,104.478z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {# Display of uploaded images section #}
    <div id=\"contentSlide\">
        <section class=\"flex flex-wrap w-full m-2 items-center justify-center\" id=\"imagesDisplay\">
            {% for image in imagesUploaded %}
                <div class=\"relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded\" id=\"{{ image.id }}\">
                    <div class=\"absolute top-0 right-0\">
                        <svg id=\"selected{{ image.id }}\" version=\"1.1\"  xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4 hidden m-2\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
                            <ellipse style=\"fill:darkseagreen;\" cx=\"256\" cy=\"256\" rx=\"256\" ry=\"255.832\"/>
                            <polygon style=\"fill:#FFFFFF;\" points=\"235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504
                                391.88,166.392 \"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                        <input type=\"checkbox\" name=\"checkImage\" id=\"check{{ image.id }}\" class=\"opacity-0\" autocomplete=\"off\">
                    </div>
                    <img class=\"h-32 object-cover\"  src=\"/uploads/{{ image.name }}\">
                </div>
            {% endfor %}
        </section>

        {# Button to add image #}
        <div class=\"flex items-center justify-center m-2\">
            <button type=\"button\" id=\"selectImage\"  class=\"check bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl py-2 px-6 inline-flex items-center\">
                <span class=\"mr-2\">Ajouter une image</span>
                <svg width=\"16\" fill=\"currentcolor\" height=\"16\" viewBox=\"0 0 448 448\"  xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0\"/></svg>
            </button>
        </div>

        {# Slide creation section #}
        <section class=\"flex items-center justify-center\">
            <div class=\"flex m-2 p-3 w-3/4 shadow-2xl items-center justify-center\">
                <div id=\"slide\" class=\"flex items-center justify-center bg-gray-200 w-3/4 h-64\"></div>
            </div>
        </section>

        {# Action button #}
        <section>
            <div class=\"flex flex-wrap items-center justify-center\">
                <div class=\"m-3\">
                    <button id=\"confirm\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl  p-3 inline-flex items-center\">
                        <span class=\"mr-2\">Ajouter au slide</span>
                    </button>
                </div>

                <div class=\"m-3\">
                    <div class=\"mt-1 flex flex-wrap shadow-2xl\">
                        <div class=\"flex flex-row w-3/12 rounded border-b-2 border-gray-800 hover:border-gray-800 hover:text-white shadow-2xl border-r-0\">
                            <button class=\"text-white text-center text-md w-full font-semibold rounded-tl-md rounded-bl-md  bg-white focus:outline-none border  \">
                                <svg class=\"h-6 w-6 ml-4\" version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\"><g><g><g>
                                    <path d=\"M391.84,48.87l54.306,45.287c3.739,3.119,8.281,4.641,12.798,4.641c5.729,0,11.415-2.448,15.371-7.191
                                        c7.074-8.483,5.932-21.095-2.552-28.169L417.457,18.15c-8.481-7.074-21.094-5.933-28.169,2.551
                                        C382.214,29.184,383.356,41.795,391.84,48.87z\"/>
                                    <path d=\"M53.057,98.797c4.516,0,9.059-1.522,12.798-4.641L120.16,48.87c8.483-7.074,9.626-19.686,2.552-28.169
                                        c-7.073-8.482-19.686-9.625-28.169-2.551L40.237,63.437c-8.483,7.074-9.626,19.686-2.552,28.169
                                        C41.642,96.349,47.328,98.797,53.057,98.797z\"/>
                                    <path d=\"M422.877,109.123C383.051,69.297,331.494,45.474,276,40.847V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v20.847
                                        c-55.494,4.627-107.051,28.449-146.877,68.275C44.548,153.697,20,212.962,20,276s24.548,122.303,69.123,166.877
                                        C133.697,487.452,192.962,512,256,512c50.754,0,99.118-15.869,139.864-45.894c8.893-6.552,10.789-19.072,4.237-27.965
                                        c-6.553-8.894-19.074-10.789-27.966-4.237C338.313,458.827,298.154,472,256,472c-108.075,0-196-87.925-196-196S147.925,80,256,80
                                        s196,87.925,196,196c0,33.01-8.354,65.638-24.161,94.356c-5.326,9.677-1.799,21.839,7.878,27.165
                                        c9.674,5.324,21.838,1.8,27.165-7.878C481.931,355.032,492,315.735,492,276C492,212.962,467.452,153.697,422.877,109.123z\"/>
                                    <path d=\"M353.434,155.601c-8.584-6.947-21.178-5.622-28.128,2.965l-63.061,77.925C260.209,236.17,258.124,236,256,236
                                        c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40c0-5.052-0.951-9.884-2.668-14.338l63.067-77.933
                                        C363.348,175.142,362.021,162.548,353.434,155.601z\"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </button>
                        </div>
                        <div class=\"flex w-5/12 rounded border-b-2 border-gray-800 hover:border-gray-800  hover:text-white shadow-md border-r-0 border-r-0 \">
                            <input type=\"text\" value=\"0\" id=\"inputTimer\" class=\"bg-white text-sm text-gray-900 text-center focus:outline-none border   w-full\">
                        </div>
                        <div class=\"flex flex-col w-4/12 rounded border-b-2 border-gray-800 hover:border-gray-800  hover:text-white shadow-md\">
                            <button id=\"timerUp\" class=\"btnUp text-gray-800 text-center text-md font-semibold rounded-tr-md bg-white focus:outline-none\">
                                +
                            </button>
                            <button id=\"timerDown\" class=\"btnDown text-gray-800 text-center text-md font-semibold  px-1 bg-white focus:outline-none\">
                                -
                            </button>
                        </div>
                    </div>
                </div>
            {#Ken burn effect button#}
                <div class=\"flex flex-col m-3\">
                    <button id=\"kenburnEffect\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-gray-800  hover:gray-800 hover:bg-gray-800 hover:text-white shadow-2xl p-3 inline-flex items-center\">
                        <span class=\"mr-2\">Effet ken burn</span>
                        <svg width=\"24\" height=\"24\" fill=\"currentcolor\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\"><g><g>
                            <path d=\"M508.875,493.792L353.089,338.005c32.358-35.927,52.245-83.296,52.245-135.339C405.333,90.917,314.417,0,202.667,0
                            S0,90.917,0,202.667s90.917,202.667,202.667,202.667c52.043,0,99.411-19.887,135.339-52.245l155.786,155.786
                            c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125C513.042,504.708,513.042,497.958,508.875,493.792z
                            M202.667,384c-99.979,0-181.333-81.344-181.333-181.333S102.688,21.333,202.667,21.333S384,102.677,384,202.667
                            S302.646,384,202.667,384z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                    </button>
                    <div class=\"mt-1 flex flex-wrap \" id=\"timer\">
                        <div class=\"flex flex-row w-3/12 \">
                            <button id=\"valideTimer\"
                                    class=\"text-white text-center text-md w-full font-semibold rounded-tl-md rounded-bl-md bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600 \">
                                <svg class=\"m-3\" version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\"><g><g>
                                    <path d=\"M484.128,104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856c-7.208,0-13.964,2.788-19.028,7.856
                                        L203.508,314.81L62.024,173.322c-5.064-5.06-11.82-7.852-19.028-7.852c-7.204,0-13.956,2.792-19.024,7.852l-16.12,16.112
                                        C2.784,194.51,0,201.27,0,208.47c0,7.204,2.784,13.96,7.852,19.028l159.744,159.736c0.212,0.3,0.436,0.58,0.696,0.836
                                        l16.12,15.852c5.064,5.048,11.82,7.572,19.084,7.572h0.084c7.212,0,13.968-2.524,19.024-7.572l16.124-15.992
                                        c0.26-0.256,0.48-0.468,0.612-0.684l244.784-244.76C494.624,132.01,494.624,114.966,484.128,104.478z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </button>
                        </div>
                        <div class=\"flex w-5/12\">
                            <input type=\"text\" value=\"0\" id=\"inputNbr\" class=\"bg-white text-sm text-gray-900 text-center focus:outline-none border border-gray-800 focus:border-gray-600  w-full\">
                        </div>
                        <div class=\"flex flex-col w-4/12\">
                            <button class=\"btnUp text-white text-center text-md font-semibold rounded-tr-md  bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600\">
                                +
                            </button>
                            <button class=\"btnDown text-white text-center text-md font-semibold rounded-br-md px-1 bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600\">
                                -
                            </button>
                        </div>
                    </div>
                </div>

{#                save slide button#}
                <div class=\"m-3\">
                    <button  id=\"save\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl p-3 inline-flex items-center\">
                        <a href=\"#header\" class=\"mr-3\">Sauvegarder le slide</a>
                        <svg version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\"><g><g>
                            <path d=\"M484.128,104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856c-7.208,0-13.964,2.788-19.028,7.856
                                L203.508,314.81L62.024,173.322c-5.064-5.06-11.82-7.852-19.028-7.852c-7.204,0-13.956,2.792-19.024,7.852l-16.12,16.112
                                C2.784,194.51,0,201.27,0,208.47c0,7.204,2.784,13.96,7.852,19.028l159.744,159.736c0.212,0.3,0.436,0.58,0.696,0.836
                                l16.12,15.852c5.064,5.048,11.82,7.572,19.084,7.572h0.084c7.212,0,13.968-2.524,19.024-7.572l16.124-15.992
                                c0.26-0.256,0.48-0.468,0.612-0.684l244.784-244.76C494.624,132.01,494.624,114.966,484.128,104.478z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        {# Slide preview #}
        <section class=\"flex flex-col items-center m-8  p-2\">
            <div id=\"slideShow\" class=\"w-11/12  overflow-x-hidden flex snap-x p-1\">

            </div>

            <div id=\"index\" class=\"flex p-1\">

            </div>
        </section>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.5.0.js\" integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\" crossorigin=\"anonymous\"></script>
    <script src=\"/js/creationSlide.js\"></script>
{% endblock %}
", "slide_creation/index.html.twig", "/home/pierre/Documents/applications/SlideShow/templates/slide_creation/index.html.twig");
    }
}
