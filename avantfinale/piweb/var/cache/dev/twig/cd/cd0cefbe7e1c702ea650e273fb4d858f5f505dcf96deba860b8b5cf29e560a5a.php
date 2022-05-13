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

/* activite/indexfront.html.twig */
class __TwigTemplate_3bdf950e784d903335490c338b20c99f096fbb4db587937a8f5f0ba32e4db9de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/indexfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/indexfront.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "activite/indexfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    </style>
    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: center:150px;\">
        <div class=\"card\">
            <div class=\"card-title\">

                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addActivite");
        echo "\"><i class=\"ti-control-backward\"style=\"font-size: 50px;\"></i> </a>
                ";
        // line 11
        echo "                <h4>Liste des Activite </h4>

            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\" >
                    <table class=\"table\"    >
                        <thead>
                        <tr>
                            <th>libele</th>
                            <th>prix</th>
                            <th>emplacement</th>
                            <th>description</th>
                            <th>date</th>
                            <th>type</th>
                            <th>image</th>
                            <th>supprimer</th>
                            <th>modifier</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 32
            echo "                            <tr>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "libele", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "prix", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "emplacement", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 37)), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "type", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td> <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . twig_get_attribute($this->env, $this->source, $context["activite"], "image", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" height=\"150\" width=\"150\"      ></td>


                                <td>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_activite", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Supprimer </a>
                                </td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifActivite", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Modifier </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    <!-- /# card -->
    </div>


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activite/indexfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 50,  146 => 46,  140 => 43,  133 => 39,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  106 => 32,  102 => 31,  80 => 11,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}
{% block body %}

    </style>
    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: center:150px;\">
        <div class=\"card\">
            <div class=\"card-title\">

                <a href=\"{{ path('addActivite') }}\"><i class=\"ti-control-backward\"style=\"font-size: 50px;\"></i> </a>
                {# bech taml btn w path thezk page okhra  #}
                <h4>Liste des Activite </h4>

            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\" >
                    <table class=\"table\"    >
                        <thead>
                        <tr>
                            <th>libele</th>
                            <th>prix</th>
                            <th>emplacement</th>
                            <th>description</th>
                            <th>date</th>
                            <th>type</th>
                            <th>image</th>
                            <th>supprimer</th>
                            <th>modifier</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for activite in a %}
                            <tr>
                                <td>{{ activite.libele}}</td>
                                <td>{{ activite.prix}}</td>
                                <td>{{ activite.emplacement}}</td>
                                <td>{{ activite.description}}</td>
                                <td>{{ activite.date|date}}</td>
                                <td>{{ activite.type}}</td>
                                <td> <img src=\"{{ asset('assets/'~activite.image) }}\" height=\"150\" width=\"150\"      ></td>


                                <td>
                                    <a class=\"btn btn-danger\" href=\"{{ path('supp_activite',{'id':activite.id}) }}\">Supprimer </a>
                                </td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"{{ path('modifActivite',{'id':activite.id}) }}\">Modifier </a>
                                </td>
                            </tr>
                        {% endfor %}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    <!-- /# card -->
    </div>


    </div>

{% endblock %}", "activite/indexfront.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\activite\\indexfront.html.twig");
    }
}
