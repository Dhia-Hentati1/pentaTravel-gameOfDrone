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

/* base.html.twig */
class __TwigTemplate_f0b799da589ff9694b58b94145c6a2bcfc90ecdfd17c088b9d134411d703170a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </head>

    <body>
    ";
        // line 66
        $this->displayBlock('header', $context, $blocks);
        // line 273
        echo "

    ";
        // line 275
        $this->displayBlock('sidebar', $context, $blocks);
        // line 372
        echo "


        ";
        // line 375
        $this->displayBlock('body', $context, $blocks);
        // line 385
        echo "


    ";
        // line 388
        $this->displayBlock('footer', $context, $blocks);
        // line 401
        echo "    </body>
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
        echo "
            <!-- Standard -->
            <link rel=\"shortcut icon\" href=\"http://placehold.it/64.png/000/fff\">
            <!-- Retina iPad Touch Icon-->
            <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"http://placehold.it/144.png/000/fff\">
            <!-- Retina iPhone Touch Icon-->
            <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"http://placehold.it/114.png/000/fff\">
            <!-- Standard iPad Touch Icon-->
            <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"http://placehold.it/72.png/000/fff\">
            <!-- Standard iPhone Touch Icon-->
            <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"http://placehold.it/57.png/000/fff\">
            <!-- Styles -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/calendar2/pignose.calendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/chartist/chartist.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/themify-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/weather-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/menubar/sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/helper.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
            <!-- nano scroller -->
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/menubar/sidebar.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/preloader/pace.min.js"), "html", null, true);
        echo "\"></script>
            <!-- sidebar -->

            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
            <!-- bootstrap -->

            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/calendar-2/moment.latest.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/calendar-2/pignose.calendar.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/calendar-2/pignose.init.js"), "html", null, true);
        echo "\"></script>


            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/weather/jquery.simpleWeather.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/weather/weather-init.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/circle-progress/circle-progress-init.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/chartist/chartist.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/sparklinechart/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/sparklinechart/sparkline.init.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/owl-carousel/owl.carousel-init.js"), "html", null, true);
        echo "\"></script>
            <!-- scripit init-->
            <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard2.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 67
        echo "        <div class=\"header\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"float-left\">
                            <div class=\"hamburger sidebar-toggle\">
                                <span class=\"line\"></span>
                                <span class=\"line\"></span>
                                <span class=\"line\"></span>
                            </div>
                        </div>
                        <div class=\"float-right\">
                            <div class=\"dropdown dib\">
                                <div class=\"header-icon\" data-toggle=\"dropdown\">
                                    <i class=\"ti-bell\"></i>
                                    <div class=\"drop-down dropdown-menu dropdown-menu-right\">
                                        <div class=\"dropdown-content-heading\">
                                            <span class=\"text-left\">Recent Notifications</span>
                                        </div>
                                        <div class=\"dropdown-content-body\">
                                            <ul>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mr. John</div>
                                                            <div class=\"notification-text\">5 members joined today </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mariam</div>
                                                            <div class=\"notification-text\">likes a photo of you</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Tasnim</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mr. John</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class=\"text-center\">
                                                    <a href=\"#\" class=\"more-link\">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dropdown dib\">
                                <div class=\"header-icon\" data-toggle=\"dropdown\">
                                    <i class=\"ti-email\"></i>
                                    <div class=\"drop-down dropdown-menu dropdown-menu-right\">
                                        <div class=\"dropdown-content-heading\">
                                            <span class=\"text-left\">2 New Messages</span>
                                            <a href=\"email.html\">
                                                <i class=\"ti-pencil-alt pull-right\"></i>
                                            </a>
                                        </div>
                                        <div class=\"dropdown-content-body\">
                                            <ul>
                                                <li class=\"notification-unread\">
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/1.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Michael Qin</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class=\"notification-unread\">
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/2.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mr. John</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Michael Qin</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/2.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mr. John</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class=\"text-center\">
                                                    <a href=\"#\" class=\"more-link\">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dropdown dib\">
                                <div class=\"header-icon\" data-toggle=\"dropdown\">
                                <span class=\"user-avatar\">John
                                    <i class=\"ti-angle-down f-s-10\"></i>
                                </span>
                                    <div class=\"drop-down dropdown-profile dropdown-menu dropdown-menu-right\">
                                        <div class=\"dropdown-content-heading\">
                                            <span class=\"text-left\">Upgrade Now</span>
                                            <p class=\"trial-day\">30 Days Trail</p>
                                        </div>
                                        <div class=\"dropdown-content-body\">
                                            <ul>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-user\"></i>
                                                        <span>Profile</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-email\"></i>
                                                        <span>Inbox</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-settings\"></i>
                                                        <span>Setting</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-lock\"></i>
                                                        <span>Lock Screen</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-power-off\"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 275
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 276
        echo "        <div class=\"sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures\">
            <div class=\"nano\">
                <div class=\"nano-content\">
                    <ul>
                        <div class=\"logo\"><a href=\"index.html\">
                                <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo.gif"), "html", null, true);
        echo "\" height=\"150\" width=\"170\" /></a></div>


                        <li><a href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_activite");
        echo "\"><i class=\"ti-calendar\"></i> Gestion des Activite </a></li>
                        <li><a href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_reglement");
        echo "\"><i class=\"ti-email\"></i> Gestion des Regelement</a></li>
                        <li><a href=\"app-profile.html\"><i class=\"ti-user\"></i> Profile</a></li>
                        <li><a href=\"app-widget-card.html\"><i class=\"ti-layout-grid2-alt\"></i> Widget</a></li>
                        <li class=\"label\">Features</li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-layout\"></i> UI Elements <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"ui-typography.html\">Typography</a></li>
                                <li><a href=\"ui-alerts.html\">Alerts</a></li>

                                <li><a href=\"ui-button.html\">Button</a></li>
                                <li><a href=\"ui-dropdown.html\">Dropdown</a></li>

                                <li><a href=\"ui-list-group.html\">List Group</a></li>

                                <li><a href=\"ui-progressbar.html\">Progressbar</a></li>
                                <li><a href=\"ui-tab.html\">Tab</a></li>

                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-panel\"></i> Components <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"uc-calendar.html\">Calendar</a></li>
                                <li><a href=\"uc-carousel.html\">Carousel</a></li>
                                <li><a href=\"uc-weather.html\">Weather</a></li>
                                <li><a href=\"uc-datamap.html\">Datamap</a></li>
                                <li><a href=\"uc-todo-list.html\">To do</a></li>
                                <li><a href=\"uc-scrollable.html\">Scrollable</a></li>
                                <li><a href=\"uc-sweetalert.html\">Sweet Alert</a></li>
                                <li><a href=\"uc-toastr.html\">Toastr</a></li>
                                <li><a href=\"uc-range-slider-basic.html\">Basic Range Slider</a></li>
                                <li><a href=\"uc-range-slider-advance.html\">Advance Range Slider</a></li>
                                <li><a href=\"uc-nestable.html\">Nestable</a></li>

                                <li><a href=\"uc-rating-bar-rating.html\">Bar Rating</a></li>
                                <li><a href=\"uc-rating-jRate.html\">jRate</a></li>
                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-layout-grid4-alt\"></i> Table <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"table-basic.html\">Basic</a></li>

                                <li><a href=\"table-export.html\">Datatable Export</a></li>
                                <li><a href=\"table-row-select.html\">Datatable Row Select</a></li>
                                <li><a href=\"table-jsgrid.html\">Editable </a></li>
                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-heart\"></i> Icons <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"font-themify.html\">Themify</a></li>
                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-map\"></i> Maps <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"gmaps.html\">Basic</a></li>
                                <li><a href=\"vector-map.html\">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class=\"label\">Form</li>
                        <li><a href=\"form-basic.html\"><i class=\"ti-view-list-alt\"></i> Basic Form </a></li>
                        <li class=\"label\">Extra</li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-files\"></i> Invoice <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"invoice.html\">Basic</a></li>
                                <li><a href=\"invoice-editable.html\">Editable</a></li>
                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-target\"></i> Pages <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"page-login.html\">Login</a></li>
                                <li><a href=\"page-register.html\">Register</a></li>
                                <li><a href=\"page-reset-password.html\">Forgot password</a></li>
                            </ul>
                        </li>
                        <li><a href=\"../documentation/index.html\"><i class=\"ti-file\"></i> Documentation</a></li>
                        <li><a><i class=\"ti-close\"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 375
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 376
        echo "







        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 388
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 389
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"footer\">
                    <p>2018 © Admin Board. - <a href=\"#\">example.com</a></p>
                </div>
            </div>
        </div>
        </section>
        </div>
        </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  692 => 389,  682 => 388,  664 => 376,  654 => 375,  557 => 285,  553 => 284,  547 => 281,  540 => 276,  530 => 275,  315 => 67,  305 => 66,  293 => 61,  288 => 59,  284 => 58,  280 => 57,  276 => 56,  272 => 55,  268 => 54,  264 => 53,  260 => 52,  256 => 51,  250 => 48,  246 => 47,  242 => 46,  236 => 43,  232 => 42,  226 => 39,  222 => 38,  217 => 36,  212 => 35,  202 => 34,  190 => 31,  186 => 30,  182 => 29,  178 => 28,  174 => 27,  170 => 26,  166 => 25,  162 => 24,  158 => 23,  154 => 22,  150 => 21,  136 => 9,  126 => 8,  107 => 5,  95 => 401,  93 => 388,  88 => 385,  86 => 375,  81 => 372,  79 => 275,  75 => 273,  73 => 66,  68 => 63,  66 => 34,  63 => 33,  60 => 8,  56 => 5,  50 => 1,);
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

            <!-- Standard -->
            <link rel=\"shortcut icon\" href=\"http://placehold.it/64.png/000/fff\">
            <!-- Retina iPad Touch Icon-->
            <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"http://placehold.it/144.png/000/fff\">
            <!-- Retina iPhone Touch Icon-->
            <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"http://placehold.it/114.png/000/fff\">
            <!-- Standard iPad Touch Icon-->
            <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"http://placehold.it/72.png/000/fff\">
            <!-- Standard iPhone Touch Icon-->
            <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"http://placehold.it/57.png/000/fff\">
            <!-- Styles -->
            <link href=\"{{ asset('assets/css/lib/calendar2/pignose.calendar.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/lib/chartist/chartist.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/lib/font-awesome.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/lib/themify-icons.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/lib/owl.carousel.min.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('assets/css/lib/owl.theme.default.min.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('assets/css/lib/weather-icons.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('assets/css/lib/menubar/sidebar.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/lib/bootstrap.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/lib/helper.css') }}\" rel=\"stylesheet\">
            <link href=\"{{asset('assets/css/style.css') }}\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('assets/js/lib/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/jquery.nanoscroller.min.js') }}\"></script>
            <!-- nano scroller -->
            <script src=\"{{ asset('assets/js/lib/menubar/sidebar.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/preloader/pace.min.js') }}\"></script>
            <!-- sidebar -->

            <script src=\"{{ asset('assets/js/lib/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/scripts.js') }}\"></script>
            <!-- bootstrap -->

            <script src=\"{{ asset('assets/js/lib/calendar-2/moment.latest.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/calendar-2/pignose.calendar.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/calendar-2/pignose.init.js') }}\"></script>


            <script src=\"{{ asset('assets/js/lib/weather/jquery.simpleWeather.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/weather/weather-init.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/circle-progress/circle-progress.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/circle-progress/circle-progress-init.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/chartist/chartist.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/sparklinechart/sparkline.init.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/owl-carousel/owl.carousel.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/lib/owl-carousel/owl.carousel-init.js') }}\"></script>
            <!-- scripit init-->
            <script src=\"{{ asset('assets/js/dashboard2.js') }}\"></script>
        {% endblock %}
    </head>

    <body>
    {% block header %}
        <div class=\"header\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"float-left\">
                            <div class=\"hamburger sidebar-toggle\">
                                <span class=\"line\"></span>
                                <span class=\"line\"></span>
                                <span class=\"line\"></span>
                            </div>
                        </div>
                        <div class=\"float-right\">
                            <div class=\"dropdown dib\">
                                <div class=\"header-icon\" data-toggle=\"dropdown\">
                                    <i class=\"ti-bell\"></i>
                                    <div class=\"drop-down dropdown-menu dropdown-menu-right\">
                                        <div class=\"dropdown-content-heading\">
                                            <span class=\"text-left\">Recent Notifications</span>
                                        </div>
                                        <div class=\"dropdown-content-body\">
                                            <ul>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mr. John</div>
                                                            <div class=\"notification-text\">5 members joined today </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mariam</div>
                                                            <div class=\"notification-text\">likes a photo of you</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Tasnim</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mr. John</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class=\"text-center\">
                                                    <a href=\"#\" class=\"more-link\">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dropdown dib\">
                                <div class=\"header-icon\" data-toggle=\"dropdown\">
                                    <i class=\"ti-email\"></i>
                                    <div class=\"drop-down dropdown-menu dropdown-menu-right\">
                                        <div class=\"dropdown-content-heading\">
                                            <span class=\"text-left\">2 New Messages</span>
                                            <a href=\"email.html\">
                                                <i class=\"ti-pencil-alt pull-right\"></i>
                                            </a>
                                        </div>
                                        <div class=\"dropdown-content-body\">
                                            <ul>
                                                <li class=\"notification-unread\">
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/1.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Michael Qin</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class=\"notification-unread\">
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/2.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mr. John</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/3.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Michael Qin</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <img class=\"pull-left m-r-10 avatar-img\"
                                                             src=\"assets/images/avatar/2.jpg\" alt=\"\" />
                                                        <div class=\"notification-content\">
                                                            <small class=\"notification-timestamp pull-right\">02:34
                                                                PM</small>
                                                            <div class=\"notification-heading\">Mr. John</div>
                                                            <div class=\"notification-text\">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class=\"text-center\">
                                                    <a href=\"#\" class=\"more-link\">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dropdown dib\">
                                <div class=\"header-icon\" data-toggle=\"dropdown\">
                                <span class=\"user-avatar\">John
                                    <i class=\"ti-angle-down f-s-10\"></i>
                                </span>
                                    <div class=\"drop-down dropdown-profile dropdown-menu dropdown-menu-right\">
                                        <div class=\"dropdown-content-heading\">
                                            <span class=\"text-left\">Upgrade Now</span>
                                            <p class=\"trial-day\">30 Days Trail</p>
                                        </div>
                                        <div class=\"dropdown-content-body\">
                                            <ul>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-user\"></i>
                                                        <span>Profile</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-email\"></i>
                                                        <span>Inbox</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-settings\"></i>
                                                        <span>Setting</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-lock\"></i>
                                                        <span>Lock Screen</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"ti-power-off\"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}


    {% block sidebar %}
        <div class=\"sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures\">
            <div class=\"nano\">
                <div class=\"nano-content\">
                    <ul>
                        <div class=\"logo\"><a href=\"index.html\">
                                <img src=\"{{ asset('assets/logo.gif') }}\" height=\"150\" width=\"170\" /></a></div>


                        <li><a href=\"{{ path('display_activite') }}\"><i class=\"ti-calendar\"></i> Gestion des Activite </a></li>
                        <li><a href=\"{{ path('display_reglement') }}\"><i class=\"ti-email\"></i> Gestion des Regelement</a></li>
                        <li><a href=\"app-profile.html\"><i class=\"ti-user\"></i> Profile</a></li>
                        <li><a href=\"app-widget-card.html\"><i class=\"ti-layout-grid2-alt\"></i> Widget</a></li>
                        <li class=\"label\">Features</li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-layout\"></i> UI Elements <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"ui-typography.html\">Typography</a></li>
                                <li><a href=\"ui-alerts.html\">Alerts</a></li>

                                <li><a href=\"ui-button.html\">Button</a></li>
                                <li><a href=\"ui-dropdown.html\">Dropdown</a></li>

                                <li><a href=\"ui-list-group.html\">List Group</a></li>

                                <li><a href=\"ui-progressbar.html\">Progressbar</a></li>
                                <li><a href=\"ui-tab.html\">Tab</a></li>

                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-panel\"></i> Components <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"uc-calendar.html\">Calendar</a></li>
                                <li><a href=\"uc-carousel.html\">Carousel</a></li>
                                <li><a href=\"uc-weather.html\">Weather</a></li>
                                <li><a href=\"uc-datamap.html\">Datamap</a></li>
                                <li><a href=\"uc-todo-list.html\">To do</a></li>
                                <li><a href=\"uc-scrollable.html\">Scrollable</a></li>
                                <li><a href=\"uc-sweetalert.html\">Sweet Alert</a></li>
                                <li><a href=\"uc-toastr.html\">Toastr</a></li>
                                <li><a href=\"uc-range-slider-basic.html\">Basic Range Slider</a></li>
                                <li><a href=\"uc-range-slider-advance.html\">Advance Range Slider</a></li>
                                <li><a href=\"uc-nestable.html\">Nestable</a></li>

                                <li><a href=\"uc-rating-bar-rating.html\">Bar Rating</a></li>
                                <li><a href=\"uc-rating-jRate.html\">jRate</a></li>
                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-layout-grid4-alt\"></i> Table <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"table-basic.html\">Basic</a></li>

                                <li><a href=\"table-export.html\">Datatable Export</a></li>
                                <li><a href=\"table-row-select.html\">Datatable Row Select</a></li>
                                <li><a href=\"table-jsgrid.html\">Editable </a></li>
                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-heart\"></i> Icons <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"font-themify.html\">Themify</a></li>
                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-map\"></i> Maps <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"gmaps.html\">Basic</a></li>
                                <li><a href=\"vector-map.html\">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class=\"label\">Form</li>
                        <li><a href=\"form-basic.html\"><i class=\"ti-view-list-alt\"></i> Basic Form </a></li>
                        <li class=\"label\">Extra</li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-files\"></i> Invoice <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"invoice.html\">Basic</a></li>
                                <li><a href=\"invoice-editable.html\">Editable</a></li>
                            </ul>
                        </li>
                        <li><a class=\"sidebar-sub-toggle\"><i class=\"ti-target\"></i> Pages <span
                                        class=\"sidebar-collapse-icon ti-angle-down\"></span></a>
                            <ul>
                                <li><a href=\"page-login.html\">Login</a></li>
                                <li><a href=\"page-register.html\">Register</a></li>
                                <li><a href=\"page-reset-password.html\">Forgot password</a></li>
                            </ul>
                        </li>
                        <li><a href=\"../documentation/index.html\"><i class=\"ti-file\"></i> Documentation</a></li>
                        <li><a><i class=\"ti-close\"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    {% endblock %}



        {% block body %}








        {% endblock %}



    {% block footer %}
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"footer\">
                    <p>2018 © Admin Board. - <a href=\"#\">example.com</a></p>
                </div>
            </div>
        </div>
        </section>
        </div>
        </div>
        </div>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\thebejaoui\\Desktop\\3A2\\semestre 2\\web2.0\\piweb\\templates\\base.html.twig");
    }
}
