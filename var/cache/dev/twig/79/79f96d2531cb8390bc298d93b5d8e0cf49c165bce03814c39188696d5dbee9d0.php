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
        <div class=\"jeu\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["method" => "POST"]);
        echo "
            <h3 class=\"text-titre\">Postez votre jeu</h3>
            <div class=\"descrip\">
                <p class=\"text\">Entrez le titre de votre jeu*</p>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), 'row');
        echo "
                <p class=\"txt-padding text\">Entrez une bref description de votre jeu*</p>
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), 'row');
        echo "
            </div>
            <div class=\"tag_form\">
                <p class=\"tag text txt-padding\">Ajouter les tags, séparé d'une virgule</p>
                <div id=\"tag-list\" class=\"list-tag\">
                    <button type=\"button\" id=\"1\" onclick=\"suppr(1)\" class=\"btn-tag\" aria-label=\"Retirer Aventure de la liste\">Aventure</button>
                    <button type=\"button\" id=\"2\" onclick=\"suppr(2)\" class=\"btn-tag\" aria-label=\"Retirer Action de la liste\">Action</button>
                    <button type=\"button\" id=\"3\" onclick=\"suppr(3)\" class=\"btn-tag\" aria-label=\"Retirer Course de la liste\">Course</button>
                    <button type=\"button\" id=\"4\" onclick=\"suppr(4)\" class=\"btn-tag\" aria-label=\"Retirer FPS de la liste\">FPS</button>
                    <button type=\"button\" id=\"5\" onclick=\"suppr(5)\" class=\"btn-tag\" aria-label=\"Retirer Combat de la liste\">Combat</button>
                    <button type=\"button\" id=\"6\" onclick=\"suppr(6)\" class=\"btn-tag\" aria-label=\"Retirer MMO/MMORPG de la liste\">MMO/MMORPG</button>
                    <button type=\"button\" id=\"7\" onclick=\"suppr(7)\" class=\"btn-tag\" aria-label=\"Retirer Simulation de la liste\">Simulation</button>
                    <button type=\"button\" id=\"8\" onclick=\"suppr(8)\" class=\"btn-tag\" aria-label=\"Retirer Plate-forme de la liste\">Plate-forme</button>
                    <button type=\"button\" id=\"9\" onclick=\"suppr(9)\" class=\"btn-tag\" aria-label=\"Retirer Réflexion de la liste\">Réflexion</button>
                    <button type=\"button\" id=\"10\" onclick=\"suppr(10)\" class=\"btn-tag\" aria-label=\"Retirer Stratégie de la liste\">Stratégie</button>
                    <button type=\"button\" id=\"11\" onclick=\"suppr(11)\" class=\"btn-tag\" aria-label=\"Retirer Autre de la liste\">Autre</button>
                </div>
                
            </div>
            <div class=\"image-jeu\">
                <img class=\"img-jeu\" id=\"profileDisplay\" onclick=\"triggerClick()\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\">
                <label class=\"text\" for=\"profileImage\">Choisissez une image</label>
                ";
        // line 43
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "images", [], "any", false, false, false, 43), 'row');
        echo "
            </div>
            <div class=\"telecharger\">
                <p class=\"text-telechargement txt-padding text\">Ajoutez votre jeu en éxécutable</p>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "files", [], "any", false, false, false, 47), 'row');
        echo "
            </div>
            <div class=\"validation\">
                <button type=\"submit\" class=\"btn\">Valider</button>
                <button type=\"button\" onclick=\"window.location.href='";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post");
        echo "';\" class=\"btn\">Annuler</button>
            </div>
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Scripts/afficheImage.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Scripts/suppr.js"), "html", null, true);
        echo "\"></script>
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
        return array (  191 => 57,  187 => 56,  181 => 53,  176 => 51,  169 => 47,  161 => 43,  156 => 40,  133 => 20,  128 => 18,  121 => 14,  117 => 12,  107 => 11,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
        <div class=\"jeu\">
            {{ form_start(form,{'method': 'POST'}) }}
            <h3 class=\"text-titre\">Postez votre jeu</h3>
            <div class=\"descrip\">
                <p class=\"text\">Entrez le titre de votre jeu*</p>
                {{ form_row(form.title)}}
                <p class=\"txt-padding text\">Entrez une bref description de votre jeu*</p>
                {{ form_row(form.content)}}
            </div>
            <div class=\"tag_form\">
                <p class=\"tag text txt-padding\">Ajouter les tags, séparé d'une virgule</p>
                <div id=\"tag-list\" class=\"list-tag\">
                    <button type=\"button\" id=\"1\" onclick=\"suppr(1)\" class=\"btn-tag\" aria-label=\"Retirer Aventure de la liste\">Aventure</button>
                    <button type=\"button\" id=\"2\" onclick=\"suppr(2)\" class=\"btn-tag\" aria-label=\"Retirer Action de la liste\">Action</button>
                    <button type=\"button\" id=\"3\" onclick=\"suppr(3)\" class=\"btn-tag\" aria-label=\"Retirer Course de la liste\">Course</button>
                    <button type=\"button\" id=\"4\" onclick=\"suppr(4)\" class=\"btn-tag\" aria-label=\"Retirer FPS de la liste\">FPS</button>
                    <button type=\"button\" id=\"5\" onclick=\"suppr(5)\" class=\"btn-tag\" aria-label=\"Retirer Combat de la liste\">Combat</button>
                    <button type=\"button\" id=\"6\" onclick=\"suppr(6)\" class=\"btn-tag\" aria-label=\"Retirer MMO/MMORPG de la liste\">MMO/MMORPG</button>
                    <button type=\"button\" id=\"7\" onclick=\"suppr(7)\" class=\"btn-tag\" aria-label=\"Retirer Simulation de la liste\">Simulation</button>
                    <button type=\"button\" id=\"8\" onclick=\"suppr(8)\" class=\"btn-tag\" aria-label=\"Retirer Plate-forme de la liste\">Plate-forme</button>
                    <button type=\"button\" id=\"9\" onclick=\"suppr(9)\" class=\"btn-tag\" aria-label=\"Retirer Réflexion de la liste\">Réflexion</button>
                    <button type=\"button\" id=\"10\" onclick=\"suppr(10)\" class=\"btn-tag\" aria-label=\"Retirer Stratégie de la liste\">Stratégie</button>
                    <button type=\"button\" id=\"11\" onclick=\"suppr(11)\" class=\"btn-tag\" aria-label=\"Retirer Autre de la liste\">Autre</button>
                </div>
                
            </div>
            <div class=\"image-jeu\">
                <img class=\"img-jeu\" id=\"profileDisplay\" onclick=\"triggerClick()\" src=\"{{ asset('images/test.jpg') }}\">
                <label class=\"text\" for=\"profileImage\">Choisissez une image</label>
                {#<input class=\"file text\" type=\"file\" name=\"profileImage\" onchange=\"displayImage(this)\" id=\"profileImage\" style=\"display: none;\"  accept=\".jpg, .jpeg, .png\" required=\"required\"/>#}
                {{ form_row(form.images)}}
            </div>
            <div class=\"telecharger\">
                <p class=\"text-telechargement txt-padding text\">Ajoutez votre jeu en éxécutable</p>
                {{ form_row(form.files)}}
            </div>
            <div class=\"validation\">
                <button type=\"submit\" class=\"btn\">Valider</button>
                <button type=\"button\" onclick=\"window.location.href='{{path('app_post')}}';\" class=\"btn\">Annuler</button>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
    <script src=\"{{ asset('Scripts/afficheImage.js') }}\"></script>
    <script src=\"{{ asset('Scripts/suppr.js') }}\"></script>
{% endblock %}", "postJeu.html.twig", "C:\\xampp\\htdocs\\Php\\Symfony\\1 co a git\\GameTree\\templates\\postJeu.html.twig");
    }
}
