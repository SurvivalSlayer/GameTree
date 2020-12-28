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

/* jeu.html.twig */
class __TwigTemplate_ae4b3c217ec733ea58b3ef748e3f957b260c88e2ac3a8b7dbbfd4a31c720d3c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jeu.html.twig", 1);
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

        echo "Jeu";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jeu.css"), "html", null, true);
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
        echo "    ";
        $this->loadTemplate("barre_de_navigation.html.twig", "jeu.html.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"jeu-form\">
        <div class=\"jeu\">
            <div class=\"jeu-right\">
                <div class=\"titre\">
                    <h3 class=\"text txt-auteur\"> <strong>raockjie advenced ";
        // line 17
        echo "</strong></h3>
                </div>
                <div class=\"tag_form\">
                    <!--a modifier avec un for twig par rapport au nombre de tag-->
                    <p class=\"tag text\">action ";
        // line 21
        echo "</p>
                    <p class=\"tag text\">plateform ";
        // line 22
        echo "</p>
                    <p class=\"tag text\">réflexion ";
        // line 23
        echo "</p>
                </div>
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"jeu-left\">
                <div class=\"auteur-form\">
                    <div class=\"bandeau\">
                        <div class=\"img-profile\">
                            <img class=\"img-profile\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img_default.jpg"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"auteur-date\">
                            <div class=\"auteur form\">
                                <p class=\"text\"><strong>Nom de l'auteur</strong></p>
                                <p class=\"textg txt\">ragnarock200038 ";
        // line 38
        echo "</p>
                            </div>
                            <div class=\"date form\">
                                <p class=\"text\"><strong>Date de publication</strong></p>
                                <p class=\"textg txt\">11/12/2020 ";
        // line 42
        echo "</p>
                            </div>
                            <div class=\"nb-tele form\">
                                <p class=\"text\"><strong>Nombre de téléchagement</strong></p>
                                <p class=\"textg txt\">500 ";
        // line 46
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class=\"descrip-form\">
                        <div class=\"descrip\">
                            <h3 class=\"text txt-descrip\">Description</h3>
                            <p class=\"textg txt-des\">petit test à remplacer par l'accés à la base de donnée";
        // line 54
        echo "</p>
                        </div>
                    </div>

                <div class=\"tel-form\">
                    <div class=\"btn-telecharger\">
                        <img class=\"img-tele\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/telecharger.png"), "html", null, true);
        echo "\">
                        <button type=\"button\" class=\"btn text\"><strong>Télécharger</strong></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jeu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 60,  183 => 54,  173 => 46,  167 => 42,  161 => 38,  153 => 33,  143 => 26,  138 => 23,  135 => 22,  132 => 21,  126 => 17,  120 => 13,  117 => 12,  107 => 11,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jeu{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/jeu.css') }}\">

{% endblock %}

{% block body %}
    {% include 'barre_de_navigation.html.twig' %}
    <div class=\"jeu-form\">
        <div class=\"jeu\">
            <div class=\"jeu-right\">
                <div class=\"titre\">
                    <h3 class=\"text txt-auteur\"> <strong>raockjie advenced {# {{ app.jeu.name }} #}</strong></h3>
                </div>
                <div class=\"tag_form\">
                    <!--a modifier avec un for twig par rapport au nombre de tag-->
                    <p class=\"tag text\">action {# {{ app.jeu.name }} #}</p>
                    <p class=\"tag text\">plateform {# {{ app.jeu.name }} #}</p>
                    <p class=\"tag text\">réflexion {# {{ app.jeu.name }} #}</p>
                </div>
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset('images/test.jpg') }}\">
                </div>
            </div>
            <div class=\"jeu-left\">
                <div class=\"auteur-form\">
                    <div class=\"bandeau\">
                        <div class=\"img-profile\">
                            <img class=\"img-profile\" src=\"{{ asset('images/img_default.jpg') }}\">
                        </div>
                        <div class=\"auteur-date\">
                            <div class=\"auteur form\">
                                <p class=\"text\"><strong>Nom de l'auteur</strong></p>
                                <p class=\"textg txt\">ragnarock200038 {# {{ app.user.name }} #}</p>
                            </div>
                            <div class=\"date form\">
                                <p class=\"text\"><strong>Date de publication</strong></p>
                                <p class=\"textg txt\">11/12/2020 {# {{ app.jeu.date }} #}</p>
                            </div>
                            <div class=\"nb-tele form\">
                                <p class=\"text\"><strong>Nombre de téléchagement</strong></p>
                                <p class=\"textg txt\">500 {# {{ app.jeu.compteur }} #}</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class=\"descrip-form\">
                        <div class=\"descrip\">
                            <h3 class=\"text txt-descrip\">Description</h3>
                            <p class=\"textg txt-des\">petit test à remplacer par l'accés à la base de donnée{# {{ app.jeu.description }} #}</p>
                        </div>
                    </div>

                <div class=\"tel-form\">
                    <div class=\"btn-telecharger\">
                        <img class=\"img-tele\" src=\"{{ asset('images/telecharger.png') }}\">
                        <button type=\"button\" class=\"btn text\"><strong>Télécharger</strong></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "jeu.html.twig", "C:\\xampp\\htdocs\\Php\\Symfony\\1 co à git\\GameTree\\templates\\jeu.html.twig");
    }
}
