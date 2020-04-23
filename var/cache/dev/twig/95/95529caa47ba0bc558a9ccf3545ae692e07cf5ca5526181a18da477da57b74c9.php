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

/* upload/index.html.twig */
class __TwigTemplate_ffdfd0d19799ab591538d096cd615dd7ed6bf00b8bdbcccf2ff0e38afd4c4f54 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "upload/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "upload/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "upload/index.html.twig", 1);
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

        echo "Mettre en ligne mes images";
        
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
        echo "
";
        // line 8
        echo "<section class=\"m-2\">
    ";
        // line 9
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), "ok") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), "ko"))) {
            // line 10
            echo "    <div class=\"flex\" id=\"message\">
        <div class=\"m-auto\" >
            <div class=\"bg-white rounded-lg border-gray-300 border p-3 shadow-lg\">
                <div class=\"flex flex-row\">
                    <div class=\"px-2\">
                        ";
            // line 15
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15), "ok")) {
                // line 16
                echo "                        <svg  width=\"24\" height=\"24\" viewBox=\"0 0 1792 1792\" fill=\"#44C997\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z\"/>
                        </svg>
                        ";
            } else {
                // line 20
                echo "                        <svg  width=\"24\" height=\"24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                             viewBox=\"0 0 455.111 455.111\" style=\"enable-background:new 0 0 455.111 455.111;\" xml:space=\"preserve\">
                            <circle style=\"fill:#E24C4B;\" cx=\"227.556\" cy=\"227.556\" r=\"227.556\"/>
                            <path style=\"fill:#D1403F;\" d=\"M455.111,227.556c0,125.156-102.4,227.556-227.556,227.556c-72.533,0-136.533-32.711-177.778-85.333
                                c38.4,31.289,88.178,49.778,142.222,49.778c125.156,0,227.556-102.4,227.556-227.556c0-54.044-18.489-103.822-49.778-142.222
                                C422.4,91.022,455.111,155.022,455.111,227.556z\"/>
                            <path style=\"fill:#FFFFFF;\" d=\"M331.378,331.378c-8.533,8.533-22.756,8.533-31.289,0l-72.533-72.533l-72.533,72.533
                                c-8.533,8.533-22.756,8.533-31.289,0c-8.533-8.533-8.533-22.756,0-31.289l72.533-72.533l-72.533-72.533
                                c-8.533-8.533-8.533-22.756,0-31.289c8.533-8.533,22.756-8.533,31.289,0l72.533,72.533l72.533-72.533
                                c8.533-8.533,22.756-8.533,31.289,0c8.533,8.533,8.533,22.756,0,31.289l-72.533,72.533l72.533,72.533
                                C339.911,308.622,339.911,322.844,331.378,331.378z\"/><g></g><g></g><g></g><g></g><g></g><g>g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        ";
            }
            // line 33
            echo "                    </div>
                    <div class=\"ml-2 mr-6\">
                        <span class=\"font-semibold\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
                        <span class=\"block text-gray-500\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 43
        echo "
    <div class=\"flex\" id=\"deleteMessage\">
        <div class=\"m-auto\" id=\"deleteMessage\">
            <div class=\"bg-white rounded-lg border-gray-300 border p-3 shadow-lg\">
                <div class=\"flex flex-row\">
                    <div class=\"px-2\">
                        <svg id=\"svgSuccess\" width=\"24\" height=\"24\" viewBox=\"0 0 1792 1792\" fill=\"#44C997\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z\"/>
                        </svg>
                        <svg id=\"svgError\"  width=\"24\" height=\"24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                         viewBox=\"0 0 455.111 455.111\" style=\"enable-background:new 0 0 455.111 455.111;\" xml:space=\"preserve\">
                            <circle style=\"fill:#E24C4B;\" cx=\"227.556\" cy=\"227.556\" r=\"227.556\"/>
                                                        <path style=\"fill:#D1403F;\" d=\"M455.111,227.556c0,125.156-102.4,227.556-227.556,227.556c-72.533,0-136.533-32.711-177.778-85.333
                                c38.4,31.289,88.178,49.778,142.222,49.778c125.156,0,227.556-102.4,227.556-227.556c0-54.044-18.489-103.822-49.778-142.222
                                C422.4,91.022,455.111,155.022,455.111,227.556z\"/>
                                                        <path style=\"fill:#FFFFFF;\" d=\"M331.378,331.378c-8.533,8.533-22.756,8.533-31.289,0l-72.533-72.533l-72.533,72.533
                                c-8.533,8.533-22.756,8.533-31.289,0c-8.533-8.533-8.533-22.756,0-31.289l72.533-72.533l-72.533-72.533
                                c-8.533-8.533-8.533-22.756,0-31.289c8.533-8.533,22.756-8.533,31.289,0l72.533,72.533l72.533-72.533
                                c8.533-8.533,22.756-8.533,31.289,0c8.533,8.533,8.533,22.756,0,31.289l-72.533,72.533l72.533,72.533
                                C339.911,308.622,339.911,322.844,331.378,331.378z\"/><g></g><g></g><g></g><g></g><g></g><g>g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                    </div>
                    <div class=\"ml-2 mr-6\">
                        <span id=\"title\" class=\"font-semibold\"></span>
                        <span id=\"content\" class=\"block text-gray-500\"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
";
        // line 76
        echo "<section class=\"flex w-full  p-2\">
    <div class=\"flex flex-wrap w-full items-center justify-center\">
        <div class=\"flex items-center justify-center m-2\">
";
        // line 80
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_start');
        echo "
                <div class=\"flex w-full items-center justify-center\">
                    <label class=\"w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-black hover:text-white\">
                        <svg class=\"w-8 h-8\" fill=\"currentColor\" viewBox=\"0 0 488.455 488.455\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m287.396 216.317c23.845 23.845 23.845 62.505 0 86.35s-62.505 23.845-86.35 0-23.845-62.505 0-86.35 62.505-23.845 86.35 0\"/><path d=\"m427.397 91.581h-42.187l-30.544-61.059h-220.906l-30.515 61.089-42.127.075c-33.585.06-60.925 27.429-60.954 61.029l-.164 244.145c0 33.675 27.384 61.074 61.059 61.074h366.338c33.675 0 61.059-27.384 61.059-61.059v-244.236c-.001-33.674-27.385-61.058-61.059-61.058zm-183.177 290.029c-67.335 0-122.118-54.783-122.118-122.118s54.783-122.118 122.118-122.118 122.118 54.783 122.118 122.118-54.783 122.118-122.118 122.118z\"/></svg>
                        <span class=\"mt-2 text-base leading-normal font-mono\">Sélectionner des images</span>
";
        // line 86
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "

                    </label>
                </div>
         </div>
";
        // line 92
        echo "        <div class=\"flex   items-center justify-center m-2\">
            <div class=\"flex w-full items-center justify-center bg-grey-lighter\">
                <label class=\"w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-black hover:text-white\">
                    <svg class=\"w-8 h-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\">
                        <path d=\"M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z\" />
                    </svg>
                    <span class=\"mt-2 text-base leading-normal font-mono\">Envoyer</span>
";
        // line 100
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "submit", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "

                </label>
            </div>
        </div>
";
        // line 106
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_end');
        echo "
        ";
        // line 108
        echo "        <div class=\"flex   items-center justify-center m-2\" id=\"btnDelete\">
            <div class=\"flex w-full items-center justify-center bg-grey-lighter\">
                <label class=\"w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-black hover:text-white\">
                    <svg class=\"w-8 h-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\">
                        <path d=\"M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z\" />
                    </svg>
                    <span class=\"mt-2 text-base leading-normal font-mono\">Supprimmer</span>
                </label>
            </div>
        </div>
    </div>
</section>

";
        // line 122
        echo "<section class=\"flex flex-wrap w-full m-2 items-center justify-center\" id=\"imagesDisplay\">
";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagesUploaded"]) || array_key_exists("imagesUploaded", $context) ? $context["imagesUploaded"] : (function () { throw new RuntimeError('Variable "imagesUploaded" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 124
            echo " <div class=\"relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
     <div class=\"absolute top-0 right-0\">
          <svg id=\"selected";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\" version=\"1.1\"  xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4 hidden m-2\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
              <ellipse style=\"fill:firebrick;\" cx=\"256\" cy=\"256\" rx=\"256\" ry=\"255.832\"/>
             <polygon style=\"fill:#FFFFFF;\" points=\"235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504
391.88,166.392 \"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
          </svg>
         <input type=\"checkbox\" name=\"checkImage\" id=\"check";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 131), "html", null, true);
            echo "\" class=\"opacity-0\" autocomplete=\"off\">
     </div>
    <img class=\"h-32 object-cover\"  src=\"/uploads/";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 133), "html", null, true);
            echo "\">
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "</section>
    <script
            src=\"https://code.jquery.com/jquery-3.5.0.js\"
            integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\"
            crossorigin=\"anonymous\"></script>
<script src=\"/js/upload.js\"></script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "upload/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 136,  265 => 133,  260 => 131,  252 => 126,  246 => 124,  242 => 123,  239 => 122,  224 => 108,  219 => 106,  210 => 100,  201 => 92,  192 => 86,  183 => 80,  178 => 76,  144 => 43,  134 => 36,  130 => 35,  126 => 33,  111 => 20,  105 => 16,  103 => 15,  96 => 10,  94 => 9,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mettre en ligne mes images{% endblock %}

{% block body %}

{#    message section#}
<section class=\"m-2\">
    {% if message.type == 'ok'or message.type == 'ko' %}
    <div class=\"flex\" id=\"message\">
        <div class=\"m-auto\" >
            <div class=\"bg-white rounded-lg border-gray-300 border p-3 shadow-lg\">
                <div class=\"flex flex-row\">
                    <div class=\"px-2\">
                        {% if message.type == 'ok' %}
                        <svg  width=\"24\" height=\"24\" viewBox=\"0 0 1792 1792\" fill=\"#44C997\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z\"/>
                        </svg>
                        {% else %}
                        <svg  width=\"24\" height=\"24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                             viewBox=\"0 0 455.111 455.111\" style=\"enable-background:new 0 0 455.111 455.111;\" xml:space=\"preserve\">
                            <circle style=\"fill:#E24C4B;\" cx=\"227.556\" cy=\"227.556\" r=\"227.556\"/>
                            <path style=\"fill:#D1403F;\" d=\"M455.111,227.556c0,125.156-102.4,227.556-227.556,227.556c-72.533,0-136.533-32.711-177.778-85.333
                                c38.4,31.289,88.178,49.778,142.222,49.778c125.156,0,227.556-102.4,227.556-227.556c0-54.044-18.489-103.822-49.778-142.222
                                C422.4,91.022,455.111,155.022,455.111,227.556z\"/>
                            <path style=\"fill:#FFFFFF;\" d=\"M331.378,331.378c-8.533,8.533-22.756,8.533-31.289,0l-72.533-72.533l-72.533,72.533
                                c-8.533,8.533-22.756,8.533-31.289,0c-8.533-8.533-8.533-22.756,0-31.289l72.533-72.533l-72.533-72.533
                                c-8.533-8.533-8.533-22.756,0-31.289c8.533-8.533,22.756-8.533,31.289,0l72.533,72.533l72.533-72.533
                                c8.533-8.533,22.756-8.533,31.289,0c8.533,8.533,8.533,22.756,0,31.289l-72.533,72.533l72.533,72.533
                                C339.911,308.622,339.911,322.844,331.378,331.378z\"/><g></g><g></g><g></g><g></g><g></g><g>g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        {% endif %}
                    </div>
                    <div class=\"ml-2 mr-6\">
                        <span class=\"font-semibold\">{{message.title}}</span>
                        <span class=\"block text-gray-500\">{{message.content}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}

    <div class=\"flex\" id=\"deleteMessage\">
        <div class=\"m-auto\" id=\"deleteMessage\">
            <div class=\"bg-white rounded-lg border-gray-300 border p-3 shadow-lg\">
                <div class=\"flex flex-row\">
                    <div class=\"px-2\">
                        <svg id=\"svgSuccess\" width=\"24\" height=\"24\" viewBox=\"0 0 1792 1792\" fill=\"#44C997\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z\"/>
                        </svg>
                        <svg id=\"svgError\"  width=\"24\" height=\"24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                         viewBox=\"0 0 455.111 455.111\" style=\"enable-background:new 0 0 455.111 455.111;\" xml:space=\"preserve\">
                            <circle style=\"fill:#E24C4B;\" cx=\"227.556\" cy=\"227.556\" r=\"227.556\"/>
                                                        <path style=\"fill:#D1403F;\" d=\"M455.111,227.556c0,125.156-102.4,227.556-227.556,227.556c-72.533,0-136.533-32.711-177.778-85.333
                                c38.4,31.289,88.178,49.778,142.222,49.778c125.156,0,227.556-102.4,227.556-227.556c0-54.044-18.489-103.822-49.778-142.222
                                C422.4,91.022,455.111,155.022,455.111,227.556z\"/>
                                                        <path style=\"fill:#FFFFFF;\" d=\"M331.378,331.378c-8.533,8.533-22.756,8.533-31.289,0l-72.533-72.533l-72.533,72.533
                                c-8.533,8.533-22.756,8.533-31.289,0c-8.533-8.533-8.533-22.756,0-31.289l72.533-72.533l-72.533-72.533
                                c-8.533-8.533-8.533-22.756,0-31.289c8.533-8.533,22.756-8.533,31.289,0l72.533,72.533l72.533-72.533
                                c8.533-8.533,22.756-8.533,31.289,0c8.533,8.533,8.533,22.756,0,31.289l-72.533,72.533l72.533,72.533
                                C339.911,308.622,339.911,322.844,331.378,331.378z\"/><g></g><g></g><g></g><g></g><g></g><g>g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                    </div>
                    <div class=\"ml-2 mr-6\">
                        <span id=\"title\" class=\"font-semibold\"></span>
                        <span id=\"content\" class=\"block text-gray-500\"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
{#Upload section#}
<section class=\"flex w-full  p-2\">
    <div class=\"flex flex-wrap w-full items-center justify-center\">
        <div class=\"flex items-center justify-center m-2\">
{#            start of Upload files form#}
                {{ form_start(form) }}
                <div class=\"flex w-full items-center justify-center\">
                    <label class=\"w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-black hover:text-white\">
                        <svg class=\"w-8 h-8\" fill=\"currentColor\" viewBox=\"0 0 488.455 488.455\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m287.396 216.317c23.845 23.845 23.845 62.505 0 86.35s-62.505 23.845-86.35 0-23.845-62.505 0-86.35 62.505-23.845 86.35 0\"/><path d=\"m427.397 91.581h-42.187l-30.544-61.059h-220.906l-30.515 61.089-42.127.075c-33.585.06-60.925 27.429-60.954 61.029l-.164 244.145c0 33.675 27.384 61.074 61.059 61.074h366.338c33.675 0 61.059-27.384 61.059-61.059v-244.236c-.001-33.674-27.385-61.058-61.059-61.058zm-183.177 290.029c-67.335 0-122.118-54.783-122.118-122.118s54.783-122.118 122.118-122.118 122.118 54.783 122.118 122.118-54.783 122.118-122.118 122.118z\"/></svg>
                        <span class=\"mt-2 text-base leading-normal font-mono\">Sélectionner des images</span>
{#                        button to upload files#}
                        {{ form_widget(form.name, {'attr': {'class':'hidden'}} ) }}

                    </label>
                </div>
         </div>
{#        Button to send files#}
        <div class=\"flex   items-center justify-center m-2\">
            <div class=\"flex w-full items-center justify-center bg-grey-lighter\">
                <label class=\"w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-black hover:text-white\">
                    <svg class=\"w-8 h-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\">
                        <path d=\"M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z\" />
                    </svg>
                    <span class=\"mt-2 text-base leading-normal font-mono\">Envoyer</span>
{#                    Button submit to send the files#}
                    {{ form_widget(form.submit, {'attr': {'class':'hidden'}}) }}

                </label>
            </div>
        </div>
{#        end of Upload form #}
            {{ form_end(form) }}
        {#        Button to delete files#}
        <div class=\"flex   items-center justify-center m-2\" id=\"btnDelete\">
            <div class=\"flex w-full items-center justify-center bg-grey-lighter\">
                <label class=\"w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-black hover:text-white\">
                    <svg class=\"w-8 h-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\">
                        <path d=\"M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z\" />
                    </svg>
                    <span class=\"mt-2 text-base leading-normal font-mono\">Supprimmer</span>
                </label>
            </div>
        </div>
    </div>
</section>

{#Display of uploaded images section#}
<section class=\"flex flex-wrap w-full m-2 items-center justify-center\" id=\"imagesDisplay\">
{% for image in imagesUploaded %}
 <div class=\"relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded\" id=\"{{ image.id }}\">
     <div class=\"absolute top-0 right-0\">
          <svg id=\"selected{{ image.id }}\" version=\"1.1\"  xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4 hidden m-2\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
              <ellipse style=\"fill:firebrick;\" cx=\"256\" cy=\"256\" rx=\"256\" ry=\"255.832\"/>
             <polygon style=\"fill:#FFFFFF;\" points=\"235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504
391.88,166.392 \"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
          </svg>
         <input type=\"checkbox\" name=\"checkImage\" id=\"check{{ image.id }}\" class=\"opacity-0\" autocomplete=\"off\">
     </div>
    <img class=\"h-32 object-cover\"  src=\"/uploads/{{ image.name }}\">
</div>
{% endfor %}
</section>
    <script
            src=\"https://code.jquery.com/jquery-3.5.0.js\"
            integrity=\"sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=\"
            crossorigin=\"anonymous\"></script>
<script src=\"/js/upload.js\"></script>



{% endblock %}
", "upload/index.html.twig", "C:\\Users\\MAIN\\Documents\\PROJET\\PHP\\slideproject\\templates\\upload\\index.html.twig");
    }
}
