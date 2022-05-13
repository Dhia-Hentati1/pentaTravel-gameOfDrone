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

/* reglement/listr.html.twig */
class __TwigTemplate_f9010f154818402d92acef8ac128309822437d79edcc5a3d88a7345ee059406d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/listr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/listr.html.twig"));

        // line 1
        echo "



";
        // line 5
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

        // line 6
        echo "

    <div> <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo.gif"), "html", null, true);
        echo "\" height=\"150\" width=\"170\" /></div>


                ";
        // line 12
        echo "                <h4>Liste des Reglements</h4>


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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reglement"], "utilisateur", [], "any", false, false, false, 39), "prenom", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "dateoperation", [], "any", false, false, false, 40)), "html", null, true);
            echo "</td>

                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "montant", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "modedepaiement", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reglement"], "echeancier", [], "any", false, false, false, 44)), "html", null, true);
            echo "</td>



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
    <h4>Signature</h4>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reglement/listr.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 53,  139 => 44,  135 => 43,  131 => 42,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  107 => 35,  103 => 34,  79 => 12,  73 => 8,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



{% block body %}


    <div> <img src=\"{{ asset('assets/logo.gif') }}\" height=\"150\" width=\"170\" /></div>


                {# bech taml btn w path thezk page okhra  #}
                <h4>Liste des Reglements</h4>


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

                </div>

            </div>
    <h4>Signature</h4>


{% endblock %}
", "reglement/listr.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\reglement\\listr.html.twig");
    }
}
