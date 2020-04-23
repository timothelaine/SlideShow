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

/* slide/create.html.twig */
class __TwigTemplate_66ce2e9fa1c6b8af2fe23adb8e81a46f645ab750d58354d69deefaf5816fec79 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "slide/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "slide/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "slide/create.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 7
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 7))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\" onclick=\"slideCreate()\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("slide_store");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"name\">Nom du slide</label>
            <input id=\"name\" name=\"name\" class=\"form-control\">
        </div>

        <div id=\"list-image\">

        </div>

        <button type=\"submit\">test</button>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    <script>
        function slideCreate() {
            var idImage = event.srcElement.id;

            var listImage = document.getElementById('list-image');

            let hr = document.createElement(\"hr\");
            listImage.appendChild(hr);

            let inputHiden = document.createElement(\"input\");
            inputHiden.setAttribute(\"type\", \"hidden\");
            inputHiden.setAttribute(\"name\", \"imageid[]\");
            inputHiden.value = idImage;
            listImage.appendChild(inputHiden);

            /////////////////////////////////////////////

            let formGroup1 = document.createElement(\"div\");
            formGroup1.classList.add(\"form-group\");
            listImage.appendChild(formGroup1);

            let labelX1 = document.createElement(\"label\");
            let labelTextX1 = document.createTextNode(\"Coordonnées X1\");
            labelX1.appendChild(labelTextX1);
            formGroup1.appendChild(labelX1);

            let inputX1 = document.createElement(\"input\");
            inputX1.setAttribute(\"name\", \"x1[]\");
            formGroup1.appendChild(inputX1);

            let labelY1 = document.createElement(\"label\");
            let labelTextY1 = document.createTextNode(\"Coordonnées Y1\");
            labelY1.appendChild(labelTextY1);
            formGroup1.appendChild(labelY1);

            let inputY1 = document.createElement(\"input\");
            inputY1.setAttribute(\"name\", \"y1[]\");
            formGroup1.appendChild(inputY1);

            let labelZ1 = document.createElement(\"label\");
            let labelTextZ1 = document.createTextNode(\"Coordonnées Z1\");
            labelZ1.appendChild(labelTextZ1);
            formGroup1.appendChild(labelZ1);

            let inputZ1 = document.createElement(\"input\");
            inputZ1.setAttribute(\"name\", \"z1[]\");
            formGroup1.appendChild(inputZ1);

            /////////////////////////////////////////////

            let formGroup2 = document.createElement(\"div\");
            formGroup2.classList.add(\"form-group\");
            listImage.appendChild(formGroup2);

            let labelX2 = document.createElement(\"label\");
            let labelTextX2 = document.createTextNode(\"Coordonnées X2\");
            labelX2.appendChild(labelTextX2);
            formGroup2.appendChild(labelX2);

            let inputX2 = document.createElement(\"input\");
            inputX2.setAttribute(\"name\", \"x2[]\");
            formGroup2.appendChild(inputX2);

            let labelY2 = document.createElement(\"label\");
            let labelTextY2 = document.createTextNode(\"Coordonnées Y2\");
            labelY2.appendChild(labelTextY2);
            formGroup2.appendChild(labelY2);

            let inputY2 = document.createElement(\"input\");
            inputY2.setAttribute(\"name\", \"y2[]\");
            formGroup2.appendChild(inputY2);

            let labelZ2 = document.createElement(\"label\");
            let labelTextZ2 = document.createTextNode(\"Coordonnées Z2\");
            labelZ2.appendChild(labelTextZ2);
            formGroup2.appendChild(labelZ2);

            let inputZ2 = document.createElement(\"input\");
            inputZ2.setAttribute(\"name\", \"z2[]\");
            formGroup2.appendChild(inputZ2);

            document.getElementById(idImage).onclick = null;
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "slide/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 25,  131 => 24,  108 => 10,  105 => 9,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un slide{% endblock %}

{% block body %}
    {% for image in images %}
        <img src=\"{{ asset('/uploads/'~image.name) }}\" id=\"{{ image.id }}\" onclick=\"slideCreate()\" />
    {% endfor %}

    <form action=\"{{ path('slide_store') }}\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"name\">Nom du slide</label>
            <input id=\"name\" name=\"name\" class=\"form-control\">
        </div>

        <div id=\"list-image\">

        </div>

        <button type=\"submit\">test</button>
    </form>
{% endblock %}

{% block javascripts %}
    <script>
        function slideCreate() {
            var idImage = event.srcElement.id;

            var listImage = document.getElementById('list-image');

            let hr = document.createElement(\"hr\");
            listImage.appendChild(hr);

            let inputHiden = document.createElement(\"input\");
            inputHiden.setAttribute(\"type\", \"hidden\");
            inputHiden.setAttribute(\"name\", \"imageid[]\");
            inputHiden.value = idImage;
            listImage.appendChild(inputHiden);

            /////////////////////////////////////////////

            let formGroup1 = document.createElement(\"div\");
            formGroup1.classList.add(\"form-group\");
            listImage.appendChild(formGroup1);

            let labelX1 = document.createElement(\"label\");
            let labelTextX1 = document.createTextNode(\"Coordonnées X1\");
            labelX1.appendChild(labelTextX1);
            formGroup1.appendChild(labelX1);

            let inputX1 = document.createElement(\"input\");
            inputX1.setAttribute(\"name\", \"x1[]\");
            formGroup1.appendChild(inputX1);

            let labelY1 = document.createElement(\"label\");
            let labelTextY1 = document.createTextNode(\"Coordonnées Y1\");
            labelY1.appendChild(labelTextY1);
            formGroup1.appendChild(labelY1);

            let inputY1 = document.createElement(\"input\");
            inputY1.setAttribute(\"name\", \"y1[]\");
            formGroup1.appendChild(inputY1);

            let labelZ1 = document.createElement(\"label\");
            let labelTextZ1 = document.createTextNode(\"Coordonnées Z1\");
            labelZ1.appendChild(labelTextZ1);
            formGroup1.appendChild(labelZ1);

            let inputZ1 = document.createElement(\"input\");
            inputZ1.setAttribute(\"name\", \"z1[]\");
            formGroup1.appendChild(inputZ1);

            /////////////////////////////////////////////

            let formGroup2 = document.createElement(\"div\");
            formGroup2.classList.add(\"form-group\");
            listImage.appendChild(formGroup2);

            let labelX2 = document.createElement(\"label\");
            let labelTextX2 = document.createTextNode(\"Coordonnées X2\");
            labelX2.appendChild(labelTextX2);
            formGroup2.appendChild(labelX2);

            let inputX2 = document.createElement(\"input\");
            inputX2.setAttribute(\"name\", \"x2[]\");
            formGroup2.appendChild(inputX2);

            let labelY2 = document.createElement(\"label\");
            let labelTextY2 = document.createTextNode(\"Coordonnées Y2\");
            labelY2.appendChild(labelTextY2);
            formGroup2.appendChild(labelY2);

            let inputY2 = document.createElement(\"input\");
            inputY2.setAttribute(\"name\", \"y2[]\");
            formGroup2.appendChild(inputY2);

            let labelZ2 = document.createElement(\"label\");
            let labelTextZ2 = document.createTextNode(\"Coordonnées Z2\");
            labelZ2.appendChild(labelTextZ2);
            formGroup2.appendChild(labelZ2);

            let inputZ2 = document.createElement(\"input\");
            inputZ2.setAttribute(\"name\", \"z2[]\");
            formGroup2.appendChild(inputZ2);

            document.getElementById(idImage).onclick = null;
        }
    </script>
{% endblock %}
", "slide/create.html.twig", "/home/pierre/Documents/SlideShow/templates/slide/create.html.twig");
    }
}
