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

/* reglement/index.html.twig */
class __TwigTemplate_da9f47be93e1966379886399ccdbbdc7722f45c80f9013ef79da2ee8315fcba0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reglement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    </style>
    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: center:150px;\">
        <div class=\"card\">
            <div class=\"card-title\">


                ";
        // line 15
        echo "                <h4>Liste des Reglements</h4>
<div>
                <form method=\"post\" action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\">
                <th><input type=\"text\" name=\"search\"><input class=\"btn btn-dark\" type=\"submit\" value=\"Rechercher\"></th>

                </form>

</div>

            </div>

            <div class=\"card-body\">
                <div class=\"table-responsive\" >
                    <table class=\"table\"    >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Utilisateur</th>
                            <th>Nom Utilisateur</th>
                            <th>Prenom Utilisateur</th>
                            <th>Date d orperation</th>
                            <th>Montant</th>
                            <th>Mode de paiement</th>
                            <th>Date echeancier</th>
                            <th>Supprimer</th>


                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reglement"]) {
            // line 46
            echo "                            <tr>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "dateoperation", [], "any", false, false, false, 51)), "html", null, true);
            echo "</td>

                                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "montant", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "modedepaiement", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "echeancier", [], "any", false, false, false, 55)), "html", null, true);
            echo "</td>

                                <td>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_reglement", ["id" => twig_get_attribute($this->env, $this->source, $context["reglement"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">Supprimer </a>
                                </td>

                            </tr>



                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reglement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "

                        </tbody>
                    </table>

                    <a class=\"btn btn-dark\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reglement_list");
        echo "\">Imprimer </a>
                </div>
            </div>
        </div>
    </div>
    </style>

    </div>
    </div>
    </div>
    <!-- /# card -->
    </div>


    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reglement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 71,  169 => 66,  155 => 58,  149 => 55,  145 => 54,  141 => 53,  136 => 51,  132 => 50,  128 => 49,  124 => 48,  120 => 47,  117 => 46,  113 => 45,  82 => 17,  78 => 15,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}


    </style>
    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: center:150px;\">
        <div class=\"card\">
            <div class=\"card-title\">


                {# bech taml btn w path thezk page okhra  #}
                <h4>Liste des Reglements</h4>
<div>
                <form method=\"post\" action=\"{{ path('recherche') }}\">
                <th><input type=\"text\" name=\"search\"><input class=\"btn btn-dark\" type=\"submit\" value=\"Rechercher\"></th>

                </form>

</div>

            </div>

            <div class=\"card-body\">
                <div class=\"table-responsive\" >
                    <table class=\"table\"    >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Utilisateur</th>
                            <th>Nom Utilisateur</th>
                            <th>Prenom Utilisateur</th>
                            <th>Date d orperation</th>
                            <th>Montant</th>
                            <th>Mode de paiement</th>
                            <th>Date echeancier</th>
                            <th>Supprimer</th>


                        </tr>
                        </thead>
                        <tbody>
                        {% for reglement in a %}
                            <tr>
                                <td>{{ reglement.id}}</td>
                                <td>{{ reglement.utilisateur.id}}</td>
                                <td>{{ reglement.utilisateur.nom}}</td>
                                <td>{{ reglement.utilisateur.prenom}}</td>
                                <td>{{ reglement.dateoperation|date }}</td>

                                <td>{{ reglement.montant}}</td>
                                <td>{{ reglement.modedepaiement}}</td>
                                <td>{{ reglement.echeancier|date}}</td>

                                <td>
                                    <a class=\"btn btn-danger\" href=\"{{ path('supp_reglement',{'id':reglement.id}) }}\">Supprimer </a>
                                </td>

                            </tr>



                        {% endfor %}


                        </tbody>
                    </table>

                    <a class=\"btn btn-dark\" href=\"{{ path('reglement_list') }}\">Imprimer </a>
                </div>
            </div>
        </div>
    </div>
    </style>

    </div>
    </div>
    </div>
    <!-- /# card -->
    </div>


    </div>
</div>

{% endblock %}
", "reglement/index.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\reglement\\index.html.twig");
    }
}
