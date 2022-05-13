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

/* reglement/updateReglement.html.twig */
class __TwigTemplate_1eb9a90565a47ed6a7bbdd851bb1b94fba4284301dabe46ca38e34088a07e96c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/updateReglement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/updateReglement.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "reglement/updateReglement.html.twig", 1);
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
        echo "    <div  class=\"card\" style=\"display: flex;align-items:center;justify-content: center;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Modifier Rgelement</h5>
                <br/>
                <br/>
                <div class=\"form-validation\">

                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Date d operation <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 17, $this->source); })()), "dateoperation", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 18, $this->source); })()), "dateoperation", [], "any", false, false, false, 18), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">montant <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 26, $this->source); })()), "montant", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 27, $this->source); })()), "montant", [], "any", false, false, false, 27), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Mode de paiement <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 34, $this->source); })()), "modedepaiement", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 35, $this->source); })()), "modedepaiement", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Date echeancier <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 43, $this->source); })()), "echeancier", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 44, $this->source); })()), "echeancier", [], "any", false, false, false, 44), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>




                    <div class=\"form-group row\">
                        <div class=\"col-lg-8 ml-auto\">
                            <table>
                                <tr>
                                    <th>";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 56, $this->source); })()), "Ajouter", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "</th>
                                    <th> <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_reglement");
        echo "\"><i class=\"ti-control-skip-forward\"style=\"font-size: 50px;\"></i> </a></th>
                                </tr>
                            </table>


                        </div>
                    </div>





                    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
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
        return "reglement/updateReglement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 69,  154 => 57,  150 => 56,  135 => 44,  131 => 43,  120 => 35,  116 => 34,  106 => 27,  102 => 26,  91 => 18,  87 => 17,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'basefront.html.twig' %}
{% block body %}
    <div  class=\"card\" style=\"display: flex;align-items:center;justify-content: center;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Modifier Rgelement</h5>
                <br/>
                <br/>
                <div class=\"form-validation\">

                    {{ form_start(ff) }}

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Date d operation <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(ff.dateoperation,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(ff.dateoperation,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">montant <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(ff.montant,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(ff.montant,{'attr':{'class':'text-danger'}}) }}
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Mode de paiement <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(ff.modedepaiement,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(ff.modedepaiement,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Date echeancier <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(ff.echeancier,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(ff.echeancier,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>




                    <div class=\"form-group row\">
                        <div class=\"col-lg-8 ml-auto\">
                            <table>
                                <tr>
                                    <th>{{ form_widget(ff.Ajouter,{'attr':{'class':'btn btn-primary'}}) }}</th>
                                    <th> <a href=\"{{ path('display_reglement') }}\"><i class=\"ti-control-skip-forward\"style=\"font-size: 50px;\"></i> </a></th>
                                </tr>
                            </table>


                        </div>
                    </div>





                    {{ form_end(ff) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "reglement/updateReglement.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\reglement\\updateReglement.html.twig");
    }
}
