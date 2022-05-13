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

/* activite/productdetails.html.twig */
class __TwigTemplate_e6a97c1261f46559f146f5677c97c2f31445ec3b8d139795941e3530d5e2045e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/productdetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/productdetails.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "activite/productdetails.html.twig", 1);
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
        echo "    <div class=\"card-body\">
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "libele", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "prix", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "emplacement", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 29)), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "type", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td> <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . twig_get_attribute($this->env, $this->source, $context["activite"], "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" height=\"150\" width=\"150\"></td>


                        <td>
                            <a class=\"btn btn-danger\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_activite", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Supprimer </a>
                        </td>
                        <td>
                            <a class=\"btn btn-success\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifActivite", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Modifier </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
                </tbody>
            </table>
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
        return "activite/productdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  131 => 38,  125 => 35,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  91 => 24,  87 => 23,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'basefront.html.twig' %}



{% block body %}
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
                        <td> <img src=\"{{ asset('assets/'~activite.image) }}\" height=\"150\" width=\"150\"></td>


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

{% endblock %}", "activite/productdetails.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\activite\\productdetails.html.twig");
    }
}
