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

/* Users/profilModif.html.twig */
class __TwigTemplate_ace846a312def7da8f6e6bb0e08b1aec3081d8a370be3e85c68573d9ca891097 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Users/profilModif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Users/profilModif.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Users/profilModif.html.twig", 1);
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

        echo "Modification du profil";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profilModif.css"), "html", null, true);
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
        $this->loadTemplate("barre_de_navigation.html.twig", "Users/profilModif.html.twig", 11)->display($context);
        // line 12
        echo "    <div id=\"profile-form\">
        <div class=\"profile\">
            <div id=\"modif-img\">
                <div id=\"photo-profil\">
                    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "images", [], "any", false, false, false, 16)) {
            // line 17
            echo "                        ";
            // line 18
            echo "                    ";
        } else {
            // line 19
            echo "                        <img class=\"img-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img_default.jpg"), "html", null, true);
            echo "\" />
                    ";
        }
        // line 21
        echo "                    ";
        // line 22
        echo "                    <label class=\"text\" for=\"profileImage\">Choisissez une image carré de préférence</label>
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ImageUpload"]) || array_key_exists("ImageUpload", $context) ? $context["ImageUpload"] : (function () { throw new RuntimeError('Variable "ImageUpload" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ImageUpload"]) || array_key_exists("ImageUpload", $context) ? $context["ImageUpload"] : (function () { throw new RuntimeError('Variable "ImageUpload" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), 'row');
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ImageUpload"]) || array_key_exists("ImageUpload", $context) ? $context["ImageUpload"] : (function () { throw new RuntimeError('Variable "ImageUpload" does not exist.', 25, $this->source); })()), "submit", [], "any", false, false, false, 25), 'row');
        echo "
                    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ImageUpload"]) || array_key_exists("ImageUpload", $context) ? $context["ImageUpload"] : (function () { throw new RuntimeError('Variable "ImageUpload" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
            <form method=\"post\">
                <div id=\"user-info\">
                    <div id=\"info-static\">
                        <strong>
                            <p class=\"static-text text\">Nom d'utilisateur</p>
                            <p class=\"static-text text\">Mot de passe</p>
                            <p class=\"static-text text\">Confirmer mot de passe</p>
                        </strong>
                    </div>
                    <div id=\"info-dynamic\">
                        <input type=\"text\" id=\"username\" name=\"username\" class=\"dynamic-text text\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "username", [], "any", false, false, false, 39), "html", null, true);
        echo "\"/>
                        <input type=\"password\" id=\"pass\" name=\"pass\" class=\"dynamic-text text\"/>
                        <input type=\"password\" id=\"pass2\" name=\"pass2\" class=\"dynamic-text text\"/>
                    </div>

                </div>
                <div class=\"validation-form\">
                    <div class=\"validation\">
                        <button class=\"bg\" type=\"submit\">Valider</button>
                        <button class=\"bg\" type=\"button\" onclick=\"window.location.href=";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Profile");
        echo "\">Annuler</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Scripts/afficheImage.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Users/profilModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 55,  183 => 48,  171 => 39,  155 => 26,  151 => 25,  147 => 24,  143 => 23,  140 => 22,  138 => 21,  132 => 19,  129 => 18,  127 => 17,  125 => 16,  119 => 12,  116 => 11,  106 => 10,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification du profil{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/profilModif.css') }}\">
{% endblock %}

{% block body %}
    {% include 'barre_de_navigation.html.twig' %}
    <div id=\"profile-form\">
        <div class=\"profile\">
            <div id=\"modif-img\">
                <div id=\"photo-profil\">
                    {% if app.user.images %}
                        {#<img src=\" { vich_uploader_asset(user, 'file')| filter('thumbnail')}}\" />#}
                    {% else %}
                        <img class=\"img-profile\" src=\"{{ asset ('images/img_default.jpg') }}\" />
                    {% endif %}
                    {#<input type=\"file\" id=\"img_profil\" name=\"img_profil\" class=\"text\" value=\"Choisir un fichier\"/>#}
                    <label class=\"text\" for=\"profileImage\">Choisissez une image carré de préférence</label>
                    {{ form_start(ImageUpload) }}
                        {{ form_row(ImageUpload.image) }}
                        {{ form_row(ImageUpload.submit) }}
                    {{ form_end(ImageUpload) }}
                </div>
            </div>
            <form method=\"post\">
                <div id=\"user-info\">
                    <div id=\"info-static\">
                        <strong>
                            <p class=\"static-text text\">Nom d'utilisateur</p>
                            <p class=\"static-text text\">Mot de passe</p>
                            <p class=\"static-text text\">Confirmer mot de passe</p>
                        </strong>
                    </div>
                    <div id=\"info-dynamic\">
                        <input type=\"text\" id=\"username\" name=\"username\" class=\"dynamic-text text\" placeholder=\"{{ app.user.username }}\"/>
                        <input type=\"password\" id=\"pass\" name=\"pass\" class=\"dynamic-text text\"/>
                        <input type=\"password\" id=\"pass2\" name=\"pass2\" class=\"dynamic-text text\"/>
                    </div>

                </div>
                <div class=\"validation-form\">
                    <div class=\"validation\">
                        <button class=\"bg\" type=\"submit\">Valider</button>
                        <button class=\"bg\" type=\"button\" onclick=\"window.location.href={{path('app_Profile')}}\">Annuler</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script src=\"{{ asset('Scripts/afficheImage.js') }}\"></script>
{% endblock %}", "Users/profilModif.html.twig", "C:\\xampp\\htdocs\\Php\\Symfony\\1 co a git\\GameTree\\templates\\Users\\profilModif.html.twig");
    }
}
