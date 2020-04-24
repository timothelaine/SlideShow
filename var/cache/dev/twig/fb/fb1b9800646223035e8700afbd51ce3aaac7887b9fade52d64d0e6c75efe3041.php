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

/* home/index.html.twig */
class __TwigTemplate_335d13ff0947f9a2058d7a6ead378e43e7e9aa14a915e56f48f4dfb1cba1214a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <div class=\"container mx-auto mt-6\">
        <div class=\"text-center text-3xl font-semibold text-gray-800 uppercase border-b-2 border-gray-800 p-2\">
            Accueil
        </div>
        <p class=\"mt-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere sodales eros id venenatis. Aliquam eget felis sed eros tempus ultricies a non tortor. Fusce hendrerit vel eros et facilisis. Fusce mauris purus, tempus eu pellentesque id, faucibus ac libero. Quisque purus risus, tempus id sem quis, aliquet viverra diam. Duis sit amet laoreet lorem. Cras scelerisque lobortis risus, id lacinia ipsum rutrum sed. Cras et magna feugiat, tempus orci non, efficitur sem. Ut id nisi venenatis, vehicula mi in, aliquet mi. Praesent suscipit hendrerit est. Nullam maximus neque ante, sed finibus odio cursus nec. Vestibulum viverra nisi quis neque vehicula consectetur. Nunc vel augue a turpis scelerisque tristique. Fusce tincidunt malesuada vehicula.</p>

        <p class=\"mt-4\">Ut non odio ac risus feugiat viverra ut id mi. Proin mi massa, convallis eu euismod ac, pellentesque vel nisi. Maecenas et turpis consequat, fringilla ligula et, volutpat nulla. In molestie vel felis pellentesque rutrum. Donec rhoncus arcu sed libero congue, ac placerat lorem vulputate. Suspendisse imperdiet molestie hendrerit. Sed id sem imperdiet, placerat lacus nec, mattis dui. Ut non odio eget felis maximus ultrices eget ut purus. Morbi posuere nulla ut ex dignissim, ac ullamcorper risus varius. Fusce volutpat nibh eget rhoncus imperdiet. Phasellus magna ante, facilisis molestie semper ac, porta et mi. Sed sollicitudin risus odio, at bibendum purus efficitur eu. </p>

        <p class=\"mt-4\">Nulla sit amet pulvinar arcu. Maecenas porta dui luctus scelerisque aliquet. Phasellus euismod eget nulla vitae vulputate. In facilisis imperdiet leo, eget rutrum nibh venenatis nec. Vestibulum feugiat accumsan ante vel scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam porttitor mi sed magna ultrices vestibulum. Mauris arcu nibh, tempus non aliquam id, fringilla ut felis. Mauris vulputate a eros quis imperdiet. Aenean dapibus consequat nibh rutrum euismod. Fusce lobortis dapibus ligula, ac maximus augue tempor finibus. Quisque eget diam dolor. </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <div class=\"container mx-auto mt-6\">
        <div class=\"text-center text-3xl font-semibold text-gray-800 uppercase border-b-2 border-gray-800 p-2\">
            Accueil
        </div>
        <p class=\"mt-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere sodales eros id venenatis. Aliquam eget felis sed eros tempus ultricies a non tortor. Fusce hendrerit vel eros et facilisis. Fusce mauris purus, tempus eu pellentesque id, faucibus ac libero. Quisque purus risus, tempus id sem quis, aliquet viverra diam. Duis sit amet laoreet lorem. Cras scelerisque lobortis risus, id lacinia ipsum rutrum sed. Cras et magna feugiat, tempus orci non, efficitur sem. Ut id nisi venenatis, vehicula mi in, aliquet mi. Praesent suscipit hendrerit est. Nullam maximus neque ante, sed finibus odio cursus nec. Vestibulum viverra nisi quis neque vehicula consectetur. Nunc vel augue a turpis scelerisque tristique. Fusce tincidunt malesuada vehicula.</p>

        <p class=\"mt-4\">Ut non odio ac risus feugiat viverra ut id mi. Proin mi massa, convallis eu euismod ac, pellentesque vel nisi. Maecenas et turpis consequat, fringilla ligula et, volutpat nulla. In molestie vel felis pellentesque rutrum. Donec rhoncus arcu sed libero congue, ac placerat lorem vulputate. Suspendisse imperdiet molestie hendrerit. Sed id sem imperdiet, placerat lacus nec, mattis dui. Ut non odio eget felis maximus ultrices eget ut purus. Morbi posuere nulla ut ex dignissim, ac ullamcorper risus varius. Fusce volutpat nibh eget rhoncus imperdiet. Phasellus magna ante, facilisis molestie semper ac, porta et mi. Sed sollicitudin risus odio, at bibendum purus efficitur eu. </p>

        <p class=\"mt-4\">Nulla sit amet pulvinar arcu. Maecenas porta dui luctus scelerisque aliquet. Phasellus euismod eget nulla vitae vulputate. In facilisis imperdiet leo, eget rutrum nibh venenatis nec. Vestibulum feugiat accumsan ante vel scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam porttitor mi sed magna ultrices vestibulum. Mauris arcu nibh, tempus non aliquam id, fringilla ut felis. Mauris vulputate a eros quis imperdiet. Aenean dapibus consequat nibh rutrum euismod. Fusce lobortis dapibus ligula, ac maximus augue tempor finibus. Quisque eget diam dolor. </p>
    </div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\MAIN\\Documents\\PROJET\\PHP\\uni\\SlideShow\\templates\\home\\index.html.twig");
    }
}
