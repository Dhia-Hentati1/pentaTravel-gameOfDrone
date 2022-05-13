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

/* Admin/index1.html.twig */
class __TwigTemplate_0fd02ae1e7c7da2afc52ede3c557ef2ecde49951e2b7a90c3dbfa285b0887bb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index1.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "Admin/index1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- ***** Fleet Starts ***** -->
    <section class=\"section\" id=\"trainers\">
        <div class=\"container\">
            <br>
            <br>

            <div class=\"row\"style=\"display: flex;align-items: center;justify-content: center;\">
                <div class=\"col-lg-4\">

                    <div class=\"trainer-item\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 16
            echo "                        <div class=\"image-thumb\">

                            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . twig_get_attribute($this->env, $this->source, $context["activite"], "image", [], "any", false, false, false, 18))), "html", null, true);
            echo "\" height=\"200\" width=\"200\">
                        </div>
                        <div class=\"down-content\">
                            <span>
                                <sup>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "prix", [], "any", false, false, false, 22), "html", null, true);
            echo "\$</sup>
                            </span>

                            <h4>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "libele", [], "any", false, false, false, 25), "html", null, true);
            echo "</h4>

                            <p>
                                <i class=\"fa fa-calendar\"></i> Spring &nbsp;&nbsp;&nbsp;

                                <i class=\"fa fa-cube\"></i> 20 nights &nbsp;&nbsp;&nbsp;

                                <i class=\"fa fa-plane\"></i> Flight included &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class=\"social-icons\">
                                <li><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reglement", ["idPrix" => twig_get_attribute($this->env, $this->source, $context["activite"], "prix", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Reglement</a></li>
                            </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  116 => 36,  102 => 25,  96 => 22,  89 => 18,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block body %}

    <!-- ***** Fleet Starts ***** -->
    <section class=\"section\" id=\"trainers\">
        <div class=\"container\">
            <br>
            <br>

            <div class=\"row\"style=\"display: flex;align-items: center;justify-content: center;\">
                <div class=\"col-lg-4\">

                    <div class=\"trainer-item\">
                        {% for activite in a %}
                        <div class=\"image-thumb\">

                            <img src=\"{{ asset('assets/'~activite.image) }}\" height=\"200\" width=\"200\">
                        </div>
                        <div class=\"down-content\">
                            <span>
                                <sup>{{ activite.prix }}\$</sup>
                            </span>

                            <h4>{{ activite.libele }}</h4>

                            <p>
                                <i class=\"fa fa-calendar\"></i> Spring &nbsp;&nbsp;&nbsp;

                                <i class=\"fa fa-cube\"></i> 20 nights &nbsp;&nbsp;&nbsp;

                                <i class=\"fa fa-plane\"></i> Flight included &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class=\"social-icons\">
                                <li><a href=\"{{ path('app_reglement',{'idPrix':activite.prix}) }}\">Reglement</a></li>
                            </ul>
                            {% endfor %}
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>







{% endblock %}", "Admin/index1.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\Admin\\index1.html.twig");
    }
}
