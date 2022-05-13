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

/* activite/createActivite.html.twig */
class __TwigTemplate_5213f69148d17ee5a9f1c435a7e5d9f0e5ebb9e88c8db28b9757fd68fe6e0e70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/createActivite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/createActivite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/createActivite.html.twig", 1);
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
    <div  class=\"card\" style=\"display: flex;align-items:center;justify-content: center;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Ajout Activite Backend</h5>
                <br/>
                <br/>
                <div class=\"form-validation\">

                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Libele <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 20, $this->source); })()), "libele", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 21, $this->source); })()), "libele", [], "any", false, false, false, 21), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Prix <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), "prix", [], "any", false, false, false, 29), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Emplacement <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 36, $this->source); })()), "emplacement", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "emplacement", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Description <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" >Date <span >*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 54, $this->source); })()), "date", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 55, $this->source); })()), "date", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>


                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Type <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Avis <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "avis", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 74, $this->source); })()), "avis", [], "any", false, false, false, 74), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Path image <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 82, $this->source); })()), "image", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 83, $this->source); })()), "image", [], "any", false, false, false, 83), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>



                    <div class=\"form-group row\">
                        <div class=\"col-lg-8 ml-auto\">
<table>
    <tr>
        <th>";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 94, $this->source); })()), "Ajouter", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "</th>
    </tr>
</table>


                        </div>
                    </div>





                    ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 106, $this->source); })()), 'form_end');
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
        return "activite/createActivite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 106,  209 => 94,  195 => 83,  191 => 82,  180 => 74,  176 => 73,  165 => 65,  161 => 64,  149 => 55,  145 => 54,  134 => 46,  130 => 45,  119 => 37,  115 => 36,  105 => 29,  101 => 28,  91 => 21,  87 => 20,  80 => 16,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig' %}



{% block body %}

    <div  class=\"card\" style=\"display: flex;align-items:center;justify-content: center;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Ajout Activite Backend</h5>
                <br/>
                <br/>
                <div class=\"form-validation\">

                    {{ form_start(f,{attr:{novalidate:'novalidate'}}) }}
                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Libele <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(f.libele,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(f.libele,{'attr':{'class':'text-danger'}}) }}
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Prix <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(f.prix,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(f.prix,{'attr':{'class':'text-danger'}}) }}
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Emplacement <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(f.emplacement,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(f.emplacement,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Description <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(f.description,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(f.description,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" >Date <span >*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(f.date,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(f.date,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>


                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Type <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(f.type,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(f.type,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Avis <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(f.avis,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(f.avis,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Path image <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            {{ form_widget(f.image,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(f.image,{'attr':{'class':'text-danger'}}) }}

                        </div>
                    </div>



                    <div class=\"form-group row\">
                        <div class=\"col-lg-8 ml-auto\">
<table>
    <tr>
        <th>{{ form_widget(f.Ajouter,{'attr':{'class':'btn btn-primary'}}) }}</th>
    </tr>
</table>


                        </div>
                    </div>





                    {{ form_end(f) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "activite/createActivite.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\activite\\createActivite.html.twig");
    }
}
