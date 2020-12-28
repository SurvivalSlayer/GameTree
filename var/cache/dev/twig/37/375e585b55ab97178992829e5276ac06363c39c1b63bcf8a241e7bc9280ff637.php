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

/* recherche.html.twig */
class __TwigTemplate_8c3f0e732477316a96b2318ac94b189d912fdceb20363507e0847271150dc3b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recherche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recherche.html.twig", 1);
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

        echo "Recherche";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/recherche.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("barre_de_navigation.html.twig", "recherche.html.twig", 11)->display($context);
        // line 12
        echo "    <div class=\"recherche-form\">
        <h3 class=\"result\">Résultat de votre recherche</h3>
        <form method=\"post\" class=\"form-filtre\">
            <select id=\"inputState\" class=\"form-select\">
                <option selected>... Selectionnez un tag...</option>
                <option>Aventure</option>
                <option>Action</option>
                <option>Combat</option>
                <option>Course</option>
                <option>FPS</option>
                <option>MMO/MMORPG</option>
                <option>Simulation</option>
                <option>Plate-forme</option>
                <option>Réflexion</option>
                <option>Statégie</option>
                <option>Autre</option>
            </select>
            <button type=\"submit\" class=\"btn-filtre\">Appliquer filtre</button>
        </form>
        <div class=\"post-container\">
            <!--for twig sur le nombre de résultat-->
            <div class=\"resultat-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 41
        echo "</p><!--modif accés basse-->
                    </div>
                    <div class=\"tag_form\">
                        <!--a modifier avec un for twig par rapport au nombre de tag-->
                        <p class=\"tag text\">action ";
        // line 45
        echo "</p>
                        <p class=\"tag text\">plateform ";
        // line 46
        echo "</p>
                        <p class=\"tag text\">réflexion ";
        // line 47
        echo "</p>
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 50
        echo "</p><!--modif-->
                </div>
            </div>
            <div class=\"resultat-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 61
        echo "</p><!--modif accés basse-->
                    </div>
                    <div class=\"tag_form\">
                        <!--a modifier avec un for twig par rapport au nombre de tag-->
                        <p class=\"tag text\">action ";
        // line 65
        echo "</p>
                        <p class=\"tag text\">plateform ";
        // line 66
        echo "</p>
                        <p class=\"tag text\">réflexion ";
        // line 67
        echo "</p>
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 70
        echo "</p><!--modif-->
                </div>
            </div>
            <div class=\"resultat-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 81
        echo "</p><!--modif accés basse-->
                    </div>
                    <div class=\"tag_form\">
                        <!--a modifier avec un for twig par rapport au nombre de tag-->
                        <p class=\"tag text\">action ";
        // line 85
        echo "</p>
                        <p class=\"tag text\">plateform ";
        // line 86
        echo "</p>
                        <p class=\"tag text\">réflexion ";
        // line 87
        echo "</p>
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 90
        echo "</p><!--modif-->
                </div>
            </div>
            <div class=\"resultat-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 101
        echo "</p><!--modif accés basse-->
                    </div>
                    <div class=\"tag_form\">
                        <!--a modifier avec un for twig par rapport au nombre de tag-->
                        <p class=\"tag text\">action ";
        // line 105
        echo "</p>
                        <p class=\"tag text\">plateform ";
        // line 106
        echo "</p>
                        <p class=\"tag text\">réflexion ";
        // line 107
        echo "</p>
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 110
        echo "</p><!--modif-->
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
        return "recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 110,  264 => 107,  261 => 106,  258 => 105,  252 => 101,  243 => 95,  236 => 90,  231 => 87,  228 => 86,  225 => 85,  219 => 81,  210 => 75,  203 => 70,  198 => 67,  195 => 66,  192 => 65,  186 => 61,  177 => 55,  170 => 50,  165 => 47,  162 => 46,  159 => 45,  153 => 41,  144 => 35,  119 => 12,  116 => 11,  106 => 10,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recherche{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/recherche.css') }}\">
{% endblock %}

{% block body %}
    {% include 'barre_de_navigation.html.twig' %}
    <div class=\"recherche-form\">
        <h3 class=\"result\">Résultat de votre recherche</h3>
        <form method=\"post\" class=\"form-filtre\">
            <select id=\"inputState\" class=\"form-select\">
                <option selected>... Selectionnez un tag...</option>
                <option>Aventure</option>
                <option>Action</option>
                <option>Combat</option>
                <option>Course</option>
                <option>FPS</option>
                <option>MMO/MMORPG</option>
                <option>Simulation</option>
                <option>Plate-forme</option>
                <option>Réflexion</option>
                <option>Statégie</option>
                <option>Autre</option>
            </select>
            <button type=\"submit\" class=\"btn-filtre\">Appliquer filtre</button>
        </form>
        <div class=\"post-container\">
            <!--for twig sur le nombre de résultat-->
            <div class=\"resultat-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <div class=\"tag_form\">
                        <!--a modifier avec un for twig par rapport au nombre de tag-->
                        <p class=\"tag text\">action {# {{ app.jeu.name }} #}</p>
                        <p class=\"tag text\">plateform {# {{ app.jeu.name }} #}</p>
                        <p class=\"tag text\">réflexion {# {{ app.jeu.name }} #}</p>
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
            <div class=\"resultat-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <div class=\"tag_form\">
                        <!--a modifier avec un for twig par rapport au nombre de tag-->
                        <p class=\"tag text\">action {# {{ app.jeu.name }} #}</p>
                        <p class=\"tag text\">plateform {# {{ app.jeu.name }} #}</p>
                        <p class=\"tag text\">réflexion {# {{ app.jeu.name }} #}</p>
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
            <div class=\"resultat-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <div class=\"tag_form\">
                        <!--a modifier avec un for twig par rapport au nombre de tag-->
                        <p class=\"tag text\">action {# {{ app.jeu.name }} #}</p>
                        <p class=\"tag text\">plateform {# {{ app.jeu.name }} #}</p>
                        <p class=\"tag text\">réflexion {# {{ app.jeu.name }} #}</p>
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
            <div class=\"resultat-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <div class=\"tag_form\">
                        <!--a modifier avec un for twig par rapport au nombre de tag-->
                        <p class=\"tag text\">action {# {{ app.jeu.name }} #}</p>
                        <p class=\"tag text\">plateform {# {{ app.jeu.name }} #}</p>
                        <p class=\"tag text\">réflexion {# {{ app.jeu.name }} #}</p>
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "recherche.html.twig", "C:\\xampp\\htdocs\\Php\\Symfony\\1 co à git\\GameTree\\templates\\recherche.html.twig");
    }
}
