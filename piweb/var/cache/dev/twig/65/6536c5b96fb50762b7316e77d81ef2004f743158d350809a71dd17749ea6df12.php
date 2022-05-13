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

/* basefront.html.twig */
class __TwigTemplate_6fdf99089b96ef28b4ec3d0470e8111938e113e70e5119d58137230ff8b9d0dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "</head>

<body>
";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "

";
        // line 83
        $this->displayBlock('sidebar', $context, $blocks);
        // line 86
        echo "


";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "


";
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        // line 141
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

        <!-- Template Main JS File -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/main.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 38
        echo "    <!-- ======= Header ======= -->
    <header id=\"header\">
        <div class=\"container d-flex align-items-center justify-content-between\">

            <div class=\"logo\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo.gif"), "html", null, true);
        echo "\" height=\"800\" width=\"100\" />
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
            </div>

            <nav id=\"navbar\" class=\"navbar\">
                <ul>
                    <li><a class=\"nav-link scrollto active\" href=\"\">Home</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_admin");
        echo "\">Les activites </a></li>
                    <li><a class=\"nav-link scrollto\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reglement");
        echo "\">Reglement</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#portfolio\">Portfolio</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
                    <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
                        <ul>
                            <li><a href=\"#\">Drop Down 1</a></li>
                            <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                                <ul>
                                    <li><a href=\"#\">Deep Drop Down 1</a></li>
                                    <li><a href=\"#\">Deep Drop Down 2</a></li>
                                    <li><a href=\"#\">Deep Drop Down 3</a></li>
                                    <li><a href=\"#\">Deep Drop Down 4</a></li>
                                    <li><a href=\"#\">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Drop Down 2</a></li>
                            <li><a href=\"#\">Drop Down 3</a></li>
                            <li><a href=\"#\">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
                    <li><a class=\"getstarted scrollto\" href=\"#about\">Get Started</a></li>
                </ul>
                <i class=\"bi bi-list mobile-nav-toggle\"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 84
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 94
        echo "    <!-- ======= Footer ======= -->
    <footer id=\"footer\">

        <div class=\"footer-top\">

            <div class=\"container\">

                <div class=\"row  justify-content-center\">
                    <div class=\"col-lg-6\">
                        <h3>Bocor</h3>
                        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
                    </div>
                </div>

                <div class=\"row footer-newsletter justify-content-center\">
                    <div class=\"col-lg-6\">
                        <form action=\"\" method=\"post\">
                            <input type=\"email\" name=\"email\" placeholder=\"Enter your Email\"><input type=\"submit\" value=\"Subscribe\">
                        </form>
                    </div>
                </div>

                <div class=\"social-links\">
                    <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                    <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                    <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                    <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                    <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
                </div>

            </div>
        </div>

        <div class=\"container footer-bottom clearfix\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>Bocor</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basefront.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 94,  337 => 93,  319 => 89,  308 => 84,  298 => 83,  259 => 52,  255 => 51,  244 => 43,  237 => 38,  227 => 37,  214 => 31,  208 => 28,  204 => 27,  200 => 26,  196 => 25,  192 => 24,  187 => 23,  177 => 22,  163 => 17,  157 => 14,  153 => 13,  149 => 12,  145 => 11,  141 => 10,  136 => 9,  126 => 8,  107 => 5,  95 => 141,  93 => 93,  88 => 90,  86 => 89,  81 => 86,  79 => 83,  75 => 81,  73 => 37,  68 => 34,  66 => 22,  63 => 21,  60 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
    {% block stylesheets %}
        <link href=\"{{ asset('asset/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('asset/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"{{ asset('asset/css/style.css') }}\" rel=\"stylesheet\">


    {% endblock %}

    {% block javascripts %}
        <script src=\"{{ asset('asset/vendor/aos/aos.js') }}\"></script>
        <script src=\"{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}\"></script>
        <script src=\"{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
        <script src=\"{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}\"></script>
        <script src=\"{{ asset('asset/vendor/php-email-form/validate.js') }}\"></script>

        <!-- Template Main JS File -->
        <script src=\"{{ asset('asset/js/main.js') }}\"></script>

    {% endblock %}
</head>

<body>
{% block header %}
    <!-- ======= Header ======= -->
    <header id=\"header\">
        <div class=\"container d-flex align-items-center justify-content-between\">

            <div class=\"logo\">
                <img src=\"{{ asset('assets/logo.gif') }}\" height=\"800\" width=\"100\" />
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
            </div>

            <nav id=\"navbar\" class=\"navbar\">
                <ul>
                    <li><a class=\"nav-link scrollto active\" href=\"\">Home</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"{{ path('display_admin') }}\">Les activites </a></li>
                    <li><a class=\"nav-link scrollto\" href=\"{{ path('app_reglement') }}\">Reglement</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#portfolio\">Portfolio</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
                    <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
                        <ul>
                            <li><a href=\"#\">Drop Down 1</a></li>
                            <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                                <ul>
                                    <li><a href=\"#\">Deep Drop Down 1</a></li>
                                    <li><a href=\"#\">Deep Drop Down 2</a></li>
                                    <li><a href=\"#\">Deep Drop Down 3</a></li>
                                    <li><a href=\"#\">Deep Drop Down 4</a></li>
                                    <li><a href=\"#\">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Drop Down 2</a></li>
                            <li><a href=\"#\">Drop Down 3</a></li>
                            <li><a href=\"#\">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
                    <li><a class=\"getstarted scrollto\" href=\"#about\">Get Started</a></li>
                </ul>
                <i class=\"bi bi-list mobile-nav-toggle\"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
{% endblock %}


{% block sidebar %}

{% endblock %}



{% block body %}{% endblock %}



{% block footer %}
    <!-- ======= Footer ======= -->
    <footer id=\"footer\">

        <div class=\"footer-top\">

            <div class=\"container\">

                <div class=\"row  justify-content-center\">
                    <div class=\"col-lg-6\">
                        <h3>Bocor</h3>
                        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
                    </div>
                </div>

                <div class=\"row footer-newsletter justify-content-center\">
                    <div class=\"col-lg-6\">
                        <form action=\"\" method=\"post\">
                            <input type=\"email\" name=\"email\" placeholder=\"Enter your Email\"><input type=\"submit\" value=\"Subscribe\">
                        </form>
                    </div>
                </div>

                <div class=\"social-links\">
                    <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                    <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                    <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                    <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                    <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
                </div>

            </div>
        </div>

        <div class=\"container footer-bottom clearfix\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>Bocor</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
{% endblock %}
</body>
</html>
", "basefront.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\basefront.html.twig");
    }
}
