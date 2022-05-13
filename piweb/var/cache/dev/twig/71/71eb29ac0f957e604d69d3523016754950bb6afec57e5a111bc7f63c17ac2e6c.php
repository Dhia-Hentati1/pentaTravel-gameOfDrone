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
class __TwigTemplate_4f2ea56e1e5d7e88b2b03e8c143b2111927b5f320fce2df993b25fdfe4a8baf5 extends Template
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
        echo "                <h4>Liste des Reglements </h4>

            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\" >
                    <table class=\"table\"    >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date d orperation</th>
                            <th>Montant</th>
                            <th>Mode de paiement</th>
                            <th>Date echeancier</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reglement"]) {
            // line 35
            echo "                            <tr>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "dateoperation", [], "any", false, false, false, 37)), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "montant", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "modedepaiement", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "echeancier", [], "any", false, false, false, 40)), "html", null, true);
            echo "</td>

                                <td>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_reglement", ["id" => twig_get_attribute($this->env, $this->source, $context["reglement"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Supprimer </a>
                                </td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifReglement", ["id" => twig_get_attribute($this->env, $this->source, $context["reglement"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Modifier </a>
                                </td>
                            </tr>



                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reglement'], $context['_parent'], $context['loop']);
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
        return "reglement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 53,  134 => 46,  128 => 43,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  103 => 35,  99 => 34,  78 => 15,  68 => 6,  58 => 5,  35 => 1,);
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
                <h4>Liste des Reglements </h4>

            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\" >
                    <table class=\"table\"    >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date d orperation</th>
                            <th>Montant</th>
                            <th>Mode de paiement</th>
                            <th>Date echeancier</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for reglement in a %}
                            <tr>
                                <td>{{ reglement.id}}</td>
                                <td>{{ reglement.dateoperation|date }}</td>
                                <td>{{ reglement.montant}}</td>
                                <td>{{ reglement.modedepaiement}}</td>
                                <td>{{ reglement.echeancier|date}}</td>

                                <td>
                                    <a class=\"btn btn-danger\" href=\"{{ path('supp_reglement',{'id':reglement.id}) }}\">Supprimer </a>
                                </td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"{{ path('modifReglement',{'id':reglement.id}) }}\">Modifier </a>
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
", "reglement/index.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\reglement\\index.html.twig");
    }
}
