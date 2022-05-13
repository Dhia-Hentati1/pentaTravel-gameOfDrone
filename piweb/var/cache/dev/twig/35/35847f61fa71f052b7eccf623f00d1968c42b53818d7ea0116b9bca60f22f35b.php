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

/* activite/updateActivite.html.twig */
class __TwigTemplate_d12fa862467f828fe7cbe75c323c5d109badb221dce9e233d49c30c6a83f26e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/updateActivite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/updateActivite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/updateActivite.html.twig", 1);
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
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_activite");
        echo "\"><i class=\"ti-control-skip-forward\"style=\"font-size: 50px;\"></i> </a>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Modifier Activite Backend</h5>
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
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 63, $this->source); })()), "type", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Avis <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 72, $this->source); })()), "avis", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "avis", [], "any", false, false, false, 73), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-lg-4 col-form-label\" for=\"val-username\">Path image <span class=\"text-danger\">*</span></label>
                        <div class=\"col-lg-8\">
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 81, $this->source); })()), "image", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 82, $this->source); })()), "image", [], "any", false, false, false, 82), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div>
                    </div>



                    <div class=\"form-group row\">
                        <div class=\"col-lg-8 ml-auto\">

                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 92, $this->source); })()), "Ajouter", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                        </div>
                    </div>





                    ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 100, $this->source); })()), 'form_end');
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
        return "activite/updateActivite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 100,  210 => 92,  197 => 82,  193 => 81,  182 => 73,  178 => 72,  167 => 64,  163 => 63,  152 => 55,  148 => 54,  137 => 46,  133 => 45,  122 => 37,  118 => 36,  108 => 29,  104 => 28,  94 => 21,  90 => 20,  83 => 16,  72 => 8,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig' %}



{% block body %}

    <div  class=\"card\" style=\"display: flex;align-items:center;justify-content: center;\">
        <a href=\"{{ path('display_activite') }}\"><i class=\"ti-control-skip-forward\"style=\"font-size: 50px;\"></i> </a>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Modifier Activite Backend</h5>
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

                            {{ form_widget(f.Ajouter,{'attr':{'class':'btn btn-primary'}}) }}
                        </div>
                    </div>





                    {{ form_end(f) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "activite/updateActivite.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\activite\\updateActivite.html.twig");
    }
}
