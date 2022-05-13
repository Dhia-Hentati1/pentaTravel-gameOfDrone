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

/* activite/index.html.twig */
class __TwigTemplate_9e4fd031d57a1d971c3aa7ac601ae3471d6e092e963dfd121d45753d6c74c2d6 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    </style>
    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: center:120px;\">
        <div class=\"card\">
            <div class=\"card-title\">

                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addActivite");
        echo "\"><i class=\"ti-control-backward\"style=\"font-size: 50px;\"></i> </a>
                ";
        // line 14
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 35
            echo "                            <tr>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "libele", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "prix", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "emplacement", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 40)), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "type", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td> <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . twig_get_attribute($this->env, $this->source, $context["activite"], "image", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" height=\"150\" width=\"150\"      ></td>


                                <td>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_activite", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Supprimer </a>
                                </td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifActivite", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Modifier </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "activite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  147 => 49,  141 => 46,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  107 => 35,  103 => 34,  81 => 14,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}


    </style>
    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: center:120px;\">
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
{% endblock %}
", "activite/index.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\activite\\index.html.twig");
    }
}
