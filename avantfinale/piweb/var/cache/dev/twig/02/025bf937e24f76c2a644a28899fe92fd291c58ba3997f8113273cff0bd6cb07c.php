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

/* reglement/createReglement.html.twig */
class __TwigTemplate_55a19cd9ca00fcf084c220d074f1246d34047cd000c58838209ba2b1c2a2baaa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/createReglement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reglement/createReglement.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "reglement/createReglement.html.twig", 1);
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
                <h5 class=\"card-title\">Ajout Rgelement</h5>
                <br/>
                <br/>
                <div class=\"form-validation\">

                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                     <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Date d operation <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                           ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 17, $this->source); })()), "dateoperation", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
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


                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Nom d'Utilisateur <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 52, $this->source); })()), "utilisateur", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                        </div>
                    </div>




                    <div class=\"form-group row\">
                        <div class=\"col-lg-8 ml-auto\">
                            <table>
                                <tr>
                                    <th>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 65, $this->source); })()), "Ajouter", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "</th>
                                    <th> <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_reglement");
        echo "\"><i class=\"ti-control-skip-forward\"style=\"font-size: 50px;\"></i> </a></th>
                                    <th><a class=\"btn btn-success\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_admin");
        echo "\">Revenir </a></th>
                                </tr>
                            </table>


                        </div>
                    </div>





                    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ff"]) || array_key_exists("ff", $context) ? $context["ff"] : (function () { throw new RuntimeError('Variable "ff" does not exist.', 79, $this->source); })()), 'form_end');
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
        return "reglement/createReglement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  164 => 67,  160 => 66,  156 => 65,  140 => 52,  128 => 43,  117 => 35,  113 => 34,  103 => 27,  99 => 26,  87 => 17,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'basefront.html.twig' %}
{% block body %}
    <div  class=\"card\" style=\"display: flex;align-items:center;justify-content: center;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Ajout Rgelement</h5>
                <br/>
                <br/>
                <div class=\"form-validation\">

                    {{ form_start(ff,{attr:{novalidate:'novalidate'}}) }}

                     <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Date d operation <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                           {{ form_widget(ff.dateoperation,{'attr':{'class':'form-control'}}) }}


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


                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Nom d'Utilisateur <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(ff.utilisateur,{'attr':{'class':'form-control'}}) }}


                        </div>
                    </div>




                    <div class=\"form-group row\">
                        <div class=\"col-lg-8 ml-auto\">
                            <table>
                                <tr>
                                    <th>{{ form_widget(ff.Ajouter,{'attr':{'class':'btn btn-primary'}}) }}</th>
                                    <th> <a href=\"{{ path('display_reglement') }}\"><i class=\"ti-control-skip-forward\"style=\"font-size: 50px;\"></i> </a></th>
                                    <th><a class=\"btn btn-success\" href=\"{{ path('display_admin') }}\">Revenir </a></th>
                                </tr>
                            </table>


                        </div>
                    </div>





                    {{ form_end(ff) }}
                </div>
            </div>
        </div>
    </div>
  {% endblock %}", "reglement/createReglement.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\reglement\\createReglement.html.twig");
    }
}
