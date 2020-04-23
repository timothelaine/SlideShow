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

        // line 7
        echo "<section class=\"flex w-full  p-2\">
    <div class=\"flex flex-wrap w-full items-center justify-center\">
        <div class=\"flex items-center justify-center m-2\">
";
        // line 11
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
                <div class=\"flex w-full items-center justify-center\">
                    <label class=\"w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-black hover:text-white\">
                        <svg class=\"w-8 h-8\" fill=\"currentColor\" viewBox=\"0 0 488.455 488.455\" width=\"512\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m287.396 216.317c23.845 23.845 23.845 62.505 0 86.35s-62.505 23.845-86.35 0-23.845-62.505 0-86.35 62.505-23.845 86.35 0\"/><path d=\"m427.397 91.581h-42.187l-30.544-61.059h-220.906l-30.515 61.089-42.127.075c-33.585.06-60.925 27.429-60.954 61.029l-.164 244.145c0 33.675 27.384 61.074 61.059 61.074h366.338c33.675 0 61.059-27.384 61.059-61.059v-244.236c-.001-33.674-27.385-61.058-61.059-61.058zm-183.177 290.029c-67.335 0-122.118-54.783-122.118-122.118s54.783-122.118 122.118-122.118 122.118 54.783 122.118 122.118-54.783 122.118-122.118 122.118z\"/></svg>
                        <span class=\"mt-2 text-base leading-normal font-mono\">Sélectionner des images</span>
";
        // line 17
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "

                    </label>
                </div>
         </div>
";
        // line 23
        echo "        <div class=\"flex   items-center justify-center m-2\">
            <div class=\"flex w-full items-center justify-center bg-grey-lighter\">
                <label class=\"w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-black hover:text-white\">
                    <svg class=\"w-8 h-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\">
                        <path d=\"M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z\" />
                    </svg>
                    <span class=\"mt-2 text-base leading-normal font-mono\">Envoyer</span>
";
        // line 31
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "submit", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "hidden"]]);
        echo "

                </label>
            </div>
        </div>
";
        // line 37
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
        ";
        // line 39
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
    <div id=\"log\"></div>
";
        // line 53
        echo "<section class=\"flex flex-wrap w-full m-2 items-center justify-center\" id=\"imagesDisplay\">
";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagesUploaded"]) || array_key_exists("imagesUploaded", $context) ? $context["imagesUploaded"] : (function () { throw new RuntimeError('Variable "imagesUploaded" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 55
            echo " <div class=\"relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\">
     <div class=\"absolute top-0 right-0\">
          <svg id=\"selected";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\" version=\"1.1\"  xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4 hidden m-2\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
              <ellipse style=\"fill:firebrick;\" cx=\"256\" cy=\"256\" rx=\"256\" ry=\"255.832\"/>
             <polygon style=\"fill:#FFFFFF;\" points=\"235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504
391.88,166.392 \"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
          </svg>
         <input type=\"checkbox\" name=\"checkImage\" id=\"check";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\" class=\"opacity-0\" autocomplete=\"off\">
     </div>
    <img class=\"h-32 object-cover\"  src=\"/uploads/";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return array (  184 => 67,  175 => 64,  170 => 62,  162 => 57,  156 => 55,  152 => 54,  149 => 53,  134 => 39,  129 => 37,  120 => 31,  111 => 23,  102 => 17,  93 => 11,  88 => 7,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mettre en ligne mes images{% endblock %}

{% block body %}
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
    <div id=\"log\"></div>
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
