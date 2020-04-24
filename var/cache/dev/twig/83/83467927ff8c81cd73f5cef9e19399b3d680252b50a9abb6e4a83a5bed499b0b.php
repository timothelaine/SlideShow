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

/* security/login.html.twig */
class __TwigTemplate_3480e4292a05eac998d0c822288086b33f41c9d1d73ad92a54e1e15b1f2e4abd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", [], "any", false, false, false, 7), "html", null, true);
            echo "
    ";
        }
        // line 9
        echo "
    <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js\" defer></script>

    <div class=\"container max-w-full mx-auto \">
        <div class=\"font-sans\">
            <div class=\"max-w-sm mx-auto px-6\">
                <div class=\"relative flex flex-wrap\">
                    <div class=\"w-full relative\">
                        <div class=\"mt-6\">
                            <div class=\"text-center text-3xl font-semibold text-gray-800 uppercase border-b-2 border-gray-800 p-2\">
                                Connexion
                            </div>

                            <form class=\"mt-8\">
                                <div class=\"mx-auto max-w-lg\">
                                    <div class=\"py-2\">
                                        <span class=\"px-1 text-sm text-gray-600\">Nom d'utilisateur</span>
                                        <input id=\"email\" name=\"_username\" type=\"email\" type=\"text\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\"
                                               class=\"text-md block px-3 py-2  rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none\">
                                    </div>
                                    ";
        // line 31
        echo "                                    <div class=\"py-2\" x-data=\"{ show: true }\">
                                        <span class=\"px-1 text-sm text-gray-600\">Mot de passe</span>
                                        <div class=\"relative\">
                                            <input id=\"password\" name=\"_password\" type=\"password\"  :type=\"show ? 'password' : 'text'\" class=\"text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-none\">

                                            <div class=\"absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5\">

                                                <svg class=\"h-6 text-gray-700\" fill=\"none\" @click=\"show = !show\"
                                                     :class=\"{'hidden': !show, 'block':show }\" xmlns=\"http://www.w3.org/2000/svg\"
                                                     viewbox=\"0 0 576 512\">
                                                    <path fill=\"currentColor\"
                                                          d=\"M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z\">
                                                    </path>
                                                </svg>

                                                <svg class=\"h-6 text-gray-700\" fill=\"none\" @click=\"show = !show\"
                                                     :class=\"{'block': !show, 'hidden':show }\" xmlns=\"http://www.w3.org/2000/svg\"
                                                     viewbox=\"0 0 640 512\">
                                                    <path fill=\"currentColor\"
                                                          d=\"M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z\">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
 <button class=\"mt-3 text-lg font-semibold
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black\">
                                        Se connecter
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        // line 86
        echo "
";
        // line 91
        echo "
";
        // line 96
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 96,  173 => 91,  170 => 86,  123 => 31,  116 => 26,  97 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
    {% if error %}
        {{ error.messageKey }}
    {% endif %}

    <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js\" defer></script>

    <div class=\"container max-w-full mx-auto \">
        <div class=\"font-sans\">
            <div class=\"max-w-sm mx-auto px-6\">
                <div class=\"relative flex flex-wrap\">
                    <div class=\"w-full relative\">
                        <div class=\"mt-6\">
                            <div class=\"text-center text-3xl font-semibold text-gray-800 uppercase border-b-2 border-gray-800 p-2\">
                                Connexion
                            </div>

                            <form class=\"mt-8\">
                                <div class=\"mx-auto max-w-lg\">
                                    <div class=\"py-2\">
                                        <span class=\"px-1 text-sm text-gray-600\">Nom d'utilisateur</span>
                                        <input id=\"email\" name=\"_username\" type=\"email\" type=\"text\" value=\"{{ last_username }}\"
                                               class=\"text-md block px-3 py-2  rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none\">
                                    </div>
                                    {#                    <input id=\"email\" name=\"_username\" type=\"email\" class=\"form-control\" value=\"{{ last_username }}\">#}
                                    <div class=\"py-2\" x-data=\"{ show: true }\">
                                        <span class=\"px-1 text-sm text-gray-600\">Mot de passe</span>
                                        <div class=\"relative\">
                                            <input id=\"password\" name=\"_password\" type=\"password\"  :type=\"show ? 'password' : 'text'\" class=\"text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-none\">

                                            <div class=\"absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5\">

                                                <svg class=\"h-6 text-gray-700\" fill=\"none\" @click=\"show = !show\"
                                                     :class=\"{'hidden': !show, 'block':show }\" xmlns=\"http://www.w3.org/2000/svg\"
                                                     viewbox=\"0 0 576 512\">
                                                    <path fill=\"currentColor\"
                                                          d=\"M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z\">
                                                    </path>
                                                </svg>

                                                <svg class=\"h-6 text-gray-700\" fill=\"none\" @click=\"show = !show\"
                                                     :class=\"{'block': !show, 'hidden':show }\" xmlns=\"http://www.w3.org/2000/svg\"
                                                     viewbox=\"0 0 640 512\">
                                                    <path fill=\"currentColor\"
                                                          d=\"M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z\">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
 <button class=\"mt-3 text-lg font-semibold
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black\">
                                        Se connecter
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{#    <div class=\"card\">#}
{#        <div class=\"card-header\">#}
{#            Connexion#}
{#        </div>#}
{#        <div class=\"card-body\">#}
{#            <form action=\"{{ path('login') }}\" method=\"post\">#}
{#                <div class=\"form-group\">#}
{#                    <label for=\"username\">Email</label>#}
{#                    <input id=\"email\" name=\"_username\" type=\"email\" class=\"form-control\" value=\"{{ last_username }}\">#}
{#                </div>#}

{#                <div class=\"form-group\">#}
{#                    <label for=\"password\">Mot de passe</label>#}
{#                    <input id=\"password\" name=\"_password\" type=\"password\" class=\"form-control\">#}
{#                </div>#}

{#                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>#}
{#            </form>#}
{#        </div>#}
{#    </div>#}

{% endblock %}
", "security/login.html.twig", "C:\\Users\\MAIN\\Documents\\PROJET\\PHP\\slideproject\\templates\\security\\login.html.twig");
    }
}
