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
class __TwigTemplate_4254e6429759901cca7def7ec65206f13eb16301f1ee6b73cb8750b238c695da extends Template
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
        echo "    <section class=\"flex flex-wrap w-full m-2 items-center justify-center\" id=\"imagesDisplay\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagesUploaded"]) || array_key_exists("imagesUploaded", $context) ? $context["imagesUploaded"] : (function () { throw new RuntimeError('Variable "imagesUploaded" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 9
            echo "            <div class=\"relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                <div class=\"absolute top-0 right-0\">
                    <svg id=\"selected";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\" version=\"1.1\"  xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4 hidden m-2\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
              <ellipse style=\"fill:darkseagreen;\" cx=\"256\" cy=\"256\" rx=\"256\" ry=\"255.832\"/>
                        <polygon style=\"fill:#FFFFFF;\" points=\"235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504
391.88,166.392 \"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
          </svg>
                    <input type=\"checkbox\" name=\"checkImage\" id=\"check";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"opacity-0\" autocomplete=\"off\">
                </div>
                <img class=\"h-32 object-cover\"  src=\"/uploads/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </section>


";
        // line 25
        echo "<div class=\"flex items-center justify-center m-2\">

    <button type=\"button\" id=\"selectImage\"  class=\"check bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center\">
        <span class=\"mr-2\">Ajouter une image</span>
        <svg width=\"16\" fill=\"currentcolor\" height=\"16\" viewBox=\"0 0 448 448\"  xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0\"/></svg>
    </button>
</div>

";
        // line 34
        echo "    <section class=\"flex items-center justify-center\">
        <div class=\"flex m-2 p-3 w-2/4 shadow-2xl items-center justify-center\">
            <div id=\"slide\" class=\"flex items-center justify-center bg-gray-200 w-3/4 h-64\">

            </div>
        </div>
    </section>




";
        // line 46
        echo "    <section>
        <div class=\"flex items-center justify-center\">

            <div class=\"m-3\">
                <button id=\"confirm\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center\">
                    <span class=\"mr-2\">Ajouter au slide</span>
                </button>
            </div>

            <div class=\"m-3\">
                <button id=\"kenburnEffect\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-gray-800  hover:gray-800 hover:bg-gray-800 hover:text-white shadow-md py-2 px-6 inline-flex items-center\">
                    <span class=\"mr-2\">Effet ken burn</span>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                        <path fill=\"currentcolor\" d=\"M6 2v6h.01L6 8.01 10 12l-4 4 .01.01H6V22h12v-5.99h-.01L18 16l-4-4 4-3.99-.01-.01H18V2H6zm10 14.5V20H8v-3.5l4-4 4 4zm-4-5l-4-4V4h8v3.5l-4 4z\"></path>
                    </svg>
                </button>
            </div>
            <div class=\"flex flex-wrap \">
                <div class=\"flex w-8/12\">
                    <input type=\"text\" value=\"7\" id=\"inputNbr\"
                           class=\"bg-white text-sm text-gray-900 text-center focus:outline-none border border-gray-800 focus:border-gray-600 rounded-l-md w-full\">
                </div>
                <div class=\"flex flex-col w-4/12\">
                    <button id=\"btnUp\"
                            class=\"text-white text-center text-md font-semibold rounded-tr-md  bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600\">
                        +
                    </button>
                    <button id=\"btnDown\"
                            class=\"text-white text-center text-md font-semibold rounded-br-md px-1 bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600\">
                        -
                    </button>
                </div>
            </div>
            <div class=\"m-3\">
                <button class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center\">
                    <span class=\"mr-3\">Sauvegarder le slide</span>
                    <svg version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\">
<g>
    <g>
        <path d=\"M484.128,104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856c-7.208,0-13.964,2.788-19.028,7.856
\t\t\tL203.508,314.81L62.024,173.322c-5.064-5.06-11.82-7.852-19.028-7.852c-7.204,0-13.956,2.792-19.024,7.852l-16.12,16.112
\t\t\tC2.784,194.51,0,201.27,0,208.47c0,7.204,2.784,13.96,7.852,19.028l159.744,159.736c0.212,0.3,0.436,0.58,0.696,0.836
\t\t\tl16.12,15.852c5.064,5.048,11.82,7.572,19.084,7.572h0.084c7.212,0,13.968-2.524,19.024-7.572l16.124-15.992
\t\t\tc0.26-0.256,0.48-0.468,0.612-0.684l244.784-244.76C494.624,132.01,494.624,114.966,484.128,104.478z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                </button>
            </div>
        </div>
    </section>

    ";
        // line 98
        echo "    <section class=\"flex flex-col items-center m-8\">

        <div id=\"slideShow\" class=\"rounded overflow-x-hidden flex snap-x shadow-2xl p-2\">

        </div>

        <div id=\"index\" class=\"flex mt-8\">

        </div>
    </section>

    <script
            src=\"https://code.jquery.com/jquery-3.5.0.js\"
            integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\"
            crossorigin=\"anonymous\"></script>
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
        return array (  206 => 98,  153 => 46,  140 => 34,  130 => 25,  125 => 21,  116 => 18,  111 => 16,  103 => 11,  97 => 9,  93 => 8,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un slide{% endblock %}

{% block body %}
    {#Display of uploaded images section#}
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


{#    Add image button #}
<div class=\"flex items-center justify-center m-2\">

    <button type=\"button\" id=\"selectImage\"  class=\"check bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center\">
        <span class=\"mr-2\">Ajouter une image</span>
        <svg width=\"16\" fill=\"currentcolor\" height=\"16\" viewBox=\"0 0 448 448\"  xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0\"/></svg>
    </button>
</div>

{#    slide creation#}
    <section class=\"flex items-center justify-center\">
        <div class=\"flex m-2 p-3 w-2/4 shadow-2xl items-center justify-center\">
            <div id=\"slide\" class=\"flex items-center justify-center bg-gray-200 w-3/4 h-64\">

            </div>
        </div>
    </section>




{#    Action button#}
    <section>
        <div class=\"flex items-center justify-center\">

            <div class=\"m-3\">
                <button id=\"confirm\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center\">
                    <span class=\"mr-2\">Ajouter au slide</span>
                </button>
            </div>

            <div class=\"m-3\">
                <button id=\"kenburnEffect\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-gray-800  hover:gray-800 hover:bg-gray-800 hover:text-white shadow-md py-2 px-6 inline-flex items-center\">
                    <span class=\"mr-2\">Effet ken burn</span>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                        <path fill=\"currentcolor\" d=\"M6 2v6h.01L6 8.01 10 12l-4 4 .01.01H6V22h12v-5.99h-.01L18 16l-4-4 4-3.99-.01-.01H18V2H6zm10 14.5V20H8v-3.5l4-4 4 4zm-4-5l-4-4V4h8v3.5l-4 4z\"></path>
                    </svg>
                </button>
            </div>
            <div class=\"flex flex-wrap \">
                <div class=\"flex w-8/12\">
                    <input type=\"text\" value=\"7\" id=\"inputNbr\"
                           class=\"bg-white text-sm text-gray-900 text-center focus:outline-none border border-gray-800 focus:border-gray-600 rounded-l-md w-full\">
                </div>
                <div class=\"flex flex-col w-4/12\">
                    <button id=\"btnUp\"
                            class=\"text-white text-center text-md font-semibold rounded-tr-md  bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600\">
                        +
                    </button>
                    <button id=\"btnDown\"
                            class=\"text-white text-center text-md font-semibold rounded-br-md px-1 bg-gray-800 focus:bg-gray-600 focus:outline-none border border-gray-800 focus:border-gray-600\">
                        -
                    </button>
                </div>
            </div>
            <div class=\"m-3\">
                <button class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center\">
                    <span class=\"mr-3\">Sauvegarder le slide</span>
                    <svg version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         viewBox=\"0 0 492 492\" style=\"enable-background:new 0 0 492 492;\" xml:space=\"preserve\">
<g>
    <g>
        <path d=\"M484.128,104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856c-7.208,0-13.964,2.788-19.028,7.856
\t\t\tL203.508,314.81L62.024,173.322c-5.064-5.06-11.82-7.852-19.028-7.852c-7.204,0-13.956,2.792-19.024,7.852l-16.12,16.112
\t\t\tC2.784,194.51,0,201.27,0,208.47c0,7.204,2.784,13.96,7.852,19.028l159.744,159.736c0.212,0.3,0.436,0.58,0.696,0.836
\t\t\tl16.12,15.852c5.064,5.048,11.82,7.572,19.084,7.572h0.084c7.212,0,13.968-2.524,19.024-7.572l16.124-15.992
\t\t\tc0.26-0.256,0.48-0.468,0.612-0.684l244.784-244.76C494.624,132.01,494.624,114.966,484.128,104.478z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                </button>
            </div>
        </div>
    </section>

    {#    slide preview#}
    <section class=\"flex flex-col items-center m-8\">

        <div id=\"slideShow\" class=\"rounded overflow-x-hidden flex snap-x shadow-2xl p-2\">

        </div>

        <div id=\"index\" class=\"flex mt-8\">

        </div>
    </section>

    <script
            src=\"https://code.jquery.com/jquery-3.5.0.js\"
            integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"/js/creationSlide.js\"></script>
{% endblock %}
", "slide_creation/index.html.twig", "C:\\Users\\MAIN\\Documents\\PROJET\\PHP\\slideproject\\templates\\slide_creation\\index.html.twig");
    }
}
