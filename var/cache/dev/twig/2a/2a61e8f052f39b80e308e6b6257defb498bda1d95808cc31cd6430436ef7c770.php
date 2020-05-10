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

/* slide_creation/show.html.twig */
class __TwigTemplate_f3d4d67fa9af15e43798688fd3556771a53652a2c56fb92382d56775bd3c5960 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "slide_creation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "slide_creation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "slide_creation/show.html.twig", 1);
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

        echo "Slides";
        
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
        echo "    <div class=\"flex flex justify-center\">
     <p class=\" text-center text-lg font-semibold tracking-widest text-gray-900  dark-mode:text-white focus:outline-none focus:shadow-outline border-b-2 border-gray-800 p-2 m-2\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["slide"]) || array_key_exists("slide", $context) ? $context["slide"] : (function () { throw new RuntimeError('Variable "slide" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
    </div>
";
        // line 23
        echo "
";
        // line 32
        echo "
";
        // line 35
        echo "
    <section class=\"flex flex-col items-center  p-3\">
        <div class=\"w-10/12 overflow-x-hidden flex snap-x   py-3\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slide_uploads"]) || array_key_exists("slide_uploads", $context) ? $context["slide_uploads"] : (function () { throw new RuntimeError('Variable "slide_uploads" does not exist.', 38, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide_upload"]) {
            // line 39
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39), "html", null, true);
            echo "\" class=\"snap-start w-full h-full flex items-center justify-center flex-shrink-0 \">
                    <img  class=\"h-64  object-cover border-double border-2 border-black \"  src=\"/uploads/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide_upload"], "upload", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide_upload'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>
            <div id=\"index\" class=\"flex p-1\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slide_uploads"]) || array_key_exists("slide_uploads", $context) ? $context["slide_uploads"] : (function () { throw new RuntimeError('Variable "slide_uploads" does not exist.', 45, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide_upload"]) {
            // line 46
            echo "                    <a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"w-8 mr-1 h-8 text-gray-900 border-solid border-2 rounded-full border-gray-900 hover:border-gray-900 hover:bg-gray-800 hover:text-white flex justify-center items-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide_upload'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </div>

    </section>

";
        // line 57
        echo "
";
        // line 59
        echo "


";
        // line 63
        echo "
    <script src=\"https://code.jquery.com/jquery-3.5.0.js\" integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\" crossorigin=\"anonymous\"></script>
    <script src=\"/js/runSlide.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "slide_creation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 63,  195 => 59,  192 => 57,  186 => 48,  167 => 46,  150 => 45,  146 => 43,  129 => 40,  124 => 39,  107 => 38,  102 => 35,  99 => 32,  96 => 23,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Slides{% endblock %}

{% block body %}
    <div class=\"flex flex justify-center\">
     <p class=\" text-center text-lg font-semibold tracking-widest text-gray-900  dark-mode:text-white focus:outline-none focus:shadow-outline border-b-2 border-gray-800 p-2 m-2\">{{ slide.name }}</p>
    </div>
{#    <section class=\"flex items-center justify-center\">#}
{#        <div class=\"flex m-2 p-3 w-2/4 shadow-2xl items-center justify-center\">#}
{#            <div id=\"slide\" class=\"flex items-center justify-center bg-gray-200 w-3/4 h-64\">#}
{#                <button id=\"run\" class=\"bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-2xl p-3 inline-flex items-center\">#}
{#                    <svg version=\"1.1\" fill=\"currentcolor\" width=\"18\" height=\"18\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\"><g><g>#}
{#                        <path d=\"M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M357.771,264.969#}
{#                            l-149.333,96c-1.75,1.135-3.771,1.698-5.771,1.698c-1.75,0-3.521-0.438-5.104-1.302C194.125,359.49,192,355.906,192,352V160#}
{#                            c0-3.906,2.125-7.49,5.563-9.365c3.375-1.854,7.604-1.74,10.875,0.396l149.333,96c3.042,1.958,4.896,5.344,4.896,8.969#}
{#                            S360.813,263.01,357.771,264.969z\"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>#}
{#                    </svg>#}
{#                </button>#}
{#            </div>#}
{#        </div>#}
{#    </section>#}

{#    <section class=\"flex flex-wrap w-full m-2 items-center justify-center\" id=\"imagesDisplay\">#}
{#        {% for slide_upload in slide_uploads %}#}
{#            <div class=\"relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded\">#}
{#                <div class=\"absolute top-0 right-0\">#}
{#                    <input type=\"checkbox\" name=\"checkImage\" class=\"opacity-0\" autocomplete=\"off\">#}
{#                </div>#}
{#                <img class=\"h-32 object-cover\"  src=\"/uploads/{{ slide_upload.upload.name }}\">#}
{#            </div>#}

{#        {% endfor %}#}
{#    </section>#}

    <section class=\"flex flex-col items-center  p-3\">
        <div class=\"w-10/12 overflow-x-hidden flex snap-x   py-3\">
            {% for slide_upload in slide_uploads %}
                <div id=\"{{ loop.index }}\" class=\"snap-start w-full h-full flex items-center justify-center flex-shrink-0 \">
                    <img  class=\"h-64  object-cover border-double border-2 border-black \"  src=\"/uploads/{{ slide_upload.upload.name }}\">
                </div>
            {% endfor %}
        </div>
            <div id=\"index\" class=\"flex p-1\">
                {% for slide_upload in slide_uploads %}
                    <a href=\"#{{ loop.index }}\" class=\"w-8 mr-1 h-8 text-gray-900 border-solid border-2 rounded-full border-gray-900 hover:border-gray-900 hover:bg-gray-800 hover:text-white flex justify-center items-center\">{{ loop.index }}</a>
                {% endfor %}
            </div>

    </section>

{#<section class=\"flex flex-wrap w-full m-2 items-center justify-center\">#}
{#    <div class=\"relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded\" >#}
{#        <img id=\"imgSlide\" class=\"h-64 object-cover\"  src=\"\">#}
{#    </div>#}
{#</section>#}

{#    {% for slide_upload in slide_uploads %}#}



{#    {% endfor %}#}

    <script src=\"https://code.jquery.com/jquery-3.5.0.js\" integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\" crossorigin=\"anonymous\"></script>
    <script src=\"/js/runSlide.js\"></script>
{% endblock %}

", "slide_creation/show.html.twig", "C:\\Users\\MAIN\\Documents\\PROJET\\PHP\\uni\\SlideShow\\templates\\slide_creation\\show.html.twig");
    }
}
