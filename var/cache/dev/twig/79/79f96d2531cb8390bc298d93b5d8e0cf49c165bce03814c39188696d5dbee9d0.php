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

/* postJeu.html.twig */
class __TwigTemplate_d6ffd54c43c091bdb7675768668fd2f9789d7464dda8cf42e4f4ea6b43127546 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postJeu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postJeu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "postJeu.html.twig", 1);
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

        echo "Postez votre jeu";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajout.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"jeu-form\">
        <form class=\"jeu\">
            <h3 class=\"text-titre\">Postez votre jeu</h3>
            <div class=\"descrip\">
                <p class=\"text\">Entrez le titre de votre jeu*</p>
                <input type=\"text\" class=\"titre\"/>
                <p class=\"txt-padding text\">Entrez une bref description de votre jeu*</p>
                <textarea cols=\"35\" rows=\"5\" type=\"text\" class=\"description\" maxlength=\"1000\" placeholder=\"1000 caractères maximum\"></textarea>
            </div>
            <div class=\"tag_form\">
                <p class=\"tag text txt-padding\">Supprimez de la liste les tags qui ne correspondent pas à votre jeu</p>
                <div class=\"list-tag\">
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Aventure de la liste\">Aventure</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Action de la liste\">Action</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Course de la liste\">Course</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer FPS de la liste\">FPS</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Combat de la liste\">Combat</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer MMO/MMORPG de la liste\">MMO/MMORPG</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Simulation de la liste\">Simulation</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Plate-forme de la liste\">Plate-forme</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Réflexion de la liste\">Réflexion</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Stratégie de la liste\">Stratégie</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Autre de la liste\">Autre</button>
                </div>
            </div>
            <div class=\"image-jeu\">
                <img class=\"img-jeu\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\">
                <input class=\"file text\" type=\"file\" value=\"Choisir un fichier\"/>
            </div>
            <div class=\"telecharger\">
                <p class=\"text-telechargement txt-padding text\">Ajoutez votre jeu en éxécutable</p>
                <input type=\"file\" class=\"file text\" value=\"Choisir un fichier\" required=\"required\"/>
            </div>
            <div class=\"validation\">
                <button type=\"submit\" class=\"btn\">Valider</button>
                <button type=\"button\" onclick=\"window.location.href='posts'\" class=\"btn\">Annuler</button>
            </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "postJeu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 38,  117 => 12,  107 => 11,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Postez votre jeu{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/ajout.css') }}\">

{% endblock %}

{% block body %}
    <div class=\"jeu-form\">
        <form class=\"jeu\">
            <h3 class=\"text-titre\">Postez votre jeu</h3>
            <div class=\"descrip\">
                <p class=\"text\">Entrez le titre de votre jeu*</p>
                <input type=\"text\" class=\"titre\"/>
                <p class=\"txt-padding text\">Entrez une bref description de votre jeu*</p>
                <textarea cols=\"35\" rows=\"5\" type=\"text\" class=\"description\" maxlength=\"1000\" placeholder=\"1000 caractères maximum\"></textarea>
            </div>
            <div class=\"tag_form\">
                <p class=\"tag text txt-padding\">Supprimez de la liste les tags qui ne correspondent pas à votre jeu</p>
                <div class=\"list-tag\">
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Aventure de la liste\">Aventure</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Action de la liste\">Action</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Course de la liste\">Course</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer FPS de la liste\">FPS</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Combat de la liste\">Combat</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer MMO/MMORPG de la liste\">MMO/MMORPG</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Simulation de la liste\">Simulation</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Plate-forme de la liste\">Plate-forme</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Réflexion de la liste\">Réflexion</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Stratégie de la liste\">Stratégie</button>
                    <button type=\"button\" class=\"btn-tag\" aria-label=\"Retirer Autre de la liste\">Autre</button>
                </div>
            </div>
            <div class=\"image-jeu\">
                <img class=\"img-jeu\" src=\"{{ asset('images/test.jpg') }}\">
                <input class=\"file text\" type=\"file\" value=\"Choisir un fichier\"/>
            </div>
            <div class=\"telecharger\">
                <p class=\"text-telechargement txt-padding text\">Ajoutez votre jeu en éxécutable</p>
                <input type=\"file\" class=\"file text\" value=\"Choisir un fichier\" required=\"required\"/>
            </div>
            <div class=\"validation\">
                <button type=\"submit\" class=\"btn\">Valider</button>
                <button type=\"button\" onclick=\"window.location.href='posts'\" class=\"btn\">Annuler</button>
            </div>
        </form>
    </div>
{% endblock %}", "postJeu.html.twig", "C:\\xampp\\htdocs\\Php\\Symfony\\1 co à git\\GameTree\\templates\\postJeu.html.twig");
    }
}
