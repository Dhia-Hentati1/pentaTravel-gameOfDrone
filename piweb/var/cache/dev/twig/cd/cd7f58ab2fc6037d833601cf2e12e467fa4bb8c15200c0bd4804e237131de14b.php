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
class __TwigTemplate_6c3febe1fcc8a7207a14143e5750485fb66ef1beb11d4d942176de3a4d48c71e extends Template
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
        echo "    </style>
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
            <div class=\"card-body\" style=\"display: flex;align-items: center;justify-content: center;margin-top: center:150px;>
                <div class=\"table-responsive\" >
                    <table class=\"table\"    >
                        <thead>
                        <tr>
                            <th>image</th>
                            <th>libele</th>
                            <th>prix</th>
                            <th>emplacement</th>
                            <th>description</th>



                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 31
            echo "                            <tr>
                                <td> <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . twig_get_attribute($this->env, $this->source, $context["activite"], "image", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" height=\"400\" width=\"400\"      ></td>
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





                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return "Admin/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  104 => 31,  100 => 30,  79 => 11,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
            <div class=\"card-body\" style=\"display: flex;align-items: center;justify-content: center;margin-top: center:150px;>
                <div class=\"table-responsive\" >
                    <table class=\"table\"    >
                        <thead>
                        <tr>
                            <th>image</th>
                            <th>libele</th>
                            <th>prix</th>
                            <th>emplacement</th>
                            <th>description</th>



                        </tr>
                        </thead>
                        <tbody>
                        {% for activite in a %}
                            <tr>
                                <td> <img src=\"{{ asset('assets/'~activite.image) }}\" height=\"400\" width=\"400\"      ></td>
                                <td>{{ activite.libele}}</td>
                                <td>{{ activite.prix}}</td>
                                <td>{{ activite.emplacement}}</td>
                                <td>{{ activite.description}}</td>





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



{% endblock %}", "Admin/index1.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\Admin\\index1.html.twig");
    }
}
