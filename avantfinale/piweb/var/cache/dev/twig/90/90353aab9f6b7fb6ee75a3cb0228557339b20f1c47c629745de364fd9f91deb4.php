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

/* reglement/pdf.html.twig */
class __TwigTemplate_795ddcf846f5b7eadf359a18c990a5145a219248eb7d52aeb5c93b10278a95b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/pdf.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <h1 align =\"center\" style=\"color:dodgerblue;\">Liste des Reglements</h1><hr>
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header card-header-primary\">
                            <h1 align=\"center\" style=\"color:#a3d781;\">Reglement</h1>

                        </div>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <style>
                                #customers {
                                    font-family: Arial, Helvetica, sans-serif;
                                    border-collapse: collapse;
                                    width: 100%;
                                }

                                #customers td, #customers th {
                                    border: 1px solid #ddd;
                                    padding: 8px;
                                }

                                #customers tr:nth-child(even){background-color: #f2f2f2;}

                                #customers tr:hover {background-color: #ddd;}

                                #customers th {
                                    padding-top: 12px;
                                    padding-bottom: 12px;
                                    text-align: left;
                                    background-color: royalblue;
                                    color: white;
                                }
                            </style>
                        </head>



                        <table class=\"table table-striped table-bordered\" id=\"customers\" >
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


                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reglement"]) {
            // line 62
            echo "                            <tr>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 65), "nom", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 66), "prenom", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "dateoperation", [], "any", false, false, false, 67)), "html", null, true);
            echo "</td>
                                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "montant", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "modedepaiement", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "echeancier", [], "any", false, false, false, 70)), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reglement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            </tbody>
                        </table>
                        </html>
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
        return "reglement/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 73,  161 => 70,  157 => 69,  153 => 68,  149 => 67,  145 => 66,  141 => 65,  137 => 64,  133 => 63,  130 => 62,  126 => 61,  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}

    <h1 align =\"center\" style=\"color:dodgerblue;\">Liste des Reglements</h1><hr>
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header card-header-primary\">
                            <h1 align=\"center\" style=\"color:#a3d781;\">Reglement</h1>

                        </div>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <style>
                                #customers {
                                    font-family: Arial, Helvetica, sans-serif;
                                    border-collapse: collapse;
                                    width: 100%;
                                }

                                #customers td, #customers th {
                                    border: 1px solid #ddd;
                                    padding: 8px;
                                }

                                #customers tr:nth-child(even){background-color: #f2f2f2;}

                                #customers tr:hover {background-color: #ddd;}

                                #customers th {
                                    padding-top: 12px;
                                    padding-bottom: 12px;
                                    text-align: left;
                                    background-color: royalblue;
                                    color: white;
                                }
                            </style>
                        </head>



                        <table class=\"table table-striped table-bordered\" id=\"customers\" >
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
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                        </html>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "reglement/pdf.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\reglement\\pdf.html.twig");
    }
}
