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

        <div class=\"post-container\">

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 19
            echo "                <div class=\"last-post\">
                    <div class=\"image-jeu\">
                        ";
            // line 22
            echo "                        <button class=\"btn-jeu\" onclick=\"window.location.href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Acceuil");
            echo "\">Voir le jeu</button><!--A modifier le path-->
                    </div>
                    <div class=\"description\">
                        <div class=\"date-form\">
                            <p class=\"date-txt text\">Date</p>
                            <p class=\"date text\">";
            // line 27
            echo "</p>
                        </div>
                            <p class=\"date-txt text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                            <p class=\"descri-jeu text\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "content", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                    </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "

            ";
        // line 107
        echo "        </div>

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
        return array (  172 => 107,  168 => 35,  161 => 33,  153 => 30,  149 => 29,  145 => 27,  136 => 22,  132 => 19,  127 => 18,  120 => 13,  117 => 12,  107 => 11,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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

        <div class=\"post-container\">

            {% for annonce in annonces %}
                <div class=\"last-post\">
                    <div class=\"image-jeu\">
                        {#{{annonce.images}}#}
                        <button class=\"btn-jeu\" onclick=\"window.location.href={{path('app_Acceuil')}}\">Voir le jeu</button><!--A modifier le path-->
                    </div>
                    <div class=\"description\">
                        <div class=\"date-form\">
                            <p class=\"date-txt text\">Date</p>
                            <p class=\"date text\">{#{{annonce.time}}#}</p>
                        </div>
                            <p class=\"date-txt text\">{{ annonce.title }}</p>
                            <p class=\"descri-jeu text\">{{ annonce.content }}</p>
                    </div>
            {% else %}

            {% endfor %}


            {#<div class=\"last-post\">
                <div class=\"image-jeu\">
                    <img class=\"img-jeu\" src=\"{{ asset ('images/test.jpg') }}\"><!--modi accées bd-->
                    <button class=\"btn-jeu\" onclick=\"window.location.href='jeu'\">Voir le jeu</button>
                </div>
                <div class=\"description\">
                    <div class=\"date-form\">
                        <p class=\"date-txt text\">Date</p>
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} </p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} </p><!--modif-->
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
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} </p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }}</p><!--modif-->
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
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} </p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }}</p><!--modif-->
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
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }}</p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }} </p><!--modif-->
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
                        <p class=\"date text\">20/25/2003 {# {{ app.jeu.date }} </p><!--modif accés basse-->
                    </div>
                    <p class=\"text titredes\">Description</p>
                    <p class=\"descri-jeu text\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.{# {{ app.jeu.description }}</p><!--modif-->
                </div>
            </div>#}
        </div>

    </div>

{% endblock %}", "acceuil.html.twig", "C:\\xampp\\htdocs\\Php\\Symfony\\1 co a git\\GameTree\\templates\\acceuil.html.twig");
    }
}
