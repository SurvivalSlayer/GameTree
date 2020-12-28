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

/* acceuil.html.twig */
class __TwigTemplate_7be5a72dc1a8da7af97f93b01e2e668d408d58848ce89d43ca1788ef2c5409e3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acceuil.html.twig", 1);
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

        echo "Acceuil";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/acceuil.css"), "html", null, true);
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
        $this->loadTemplate("barre_de_navigation.html.twig", "acceuil.html.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"acceuil-form\">
        <h3 class=\"nov\">Nouveautés</h3>
        <!--ajouter une fonction pour afficher au maximun 5 posts triés du plus récent au moins récent
        et aussi un for twig pour créer le bon nombre de div avec le last-post-->
        <div class=\"post-container\">
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 26
        echo "</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 29
        echo "</p><!--modif-->
                </div>
            </div>
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 40
        echo "</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 43
        echo "</p><!--modif-->
                </div>
            </div>
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 54
        echo "</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 57
        echo "</p><!--modif-->
                </div>
            </div>
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 68
        echo "</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 71
        echo "</p><!--modif-->
                </div>
            </div>
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test.jpg"), "html", null, true);
        echo "\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 ";
        // line 82
        echo "</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.";
        // line 85
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
        return "acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 85,  222 => 82,  213 => 76,  206 => 71,  201 => 68,  192 => 62,  185 => 57,  180 => 54,  171 => 48,  164 => 43,  159 => 40,  150 => 34,  143 => 29,  138 => 26,  129 => 20,  120 => 13,  117 => 12,  107 => 11,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Acceuil{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset ('css/acceuil.css') }}\">

{% endblock %}

{% block body %}
    {% include 'barre_de_navigation.html.twig' %}
    <div class=\"acceuil-form\">
        <h3 class=\"nov\">Nouveautés</h3>
        <!--ajouter une fonction pour afficher au maximun 5 posts triés du plus récent au moins récent
        et aussi un for twig pour créer le bon nombre de div avec le last-post-->
        <div class=\"post-container\">
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset ('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset ('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset ('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset ('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
            <div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset ('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} #}</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} #}</p><!--modif-->
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "acceuil.html.twig", "C:\\xampp\\htdocs\\Php\\Symfony\\1 co à git\\GameTree\\templates\\acceuil.html.twig");
    }
}
