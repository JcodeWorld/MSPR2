<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_b6901a68db9e8ea04e2b9fc427cbe591 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"container text-center my-5\">
    <div class=\"mb-4\">
        <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo-canopees.png"), "html", null, true);
        yield "\" alt=\"Logo Canopees\" style=\"max-width: 200px;\">
    </div>

    <h1 class=\"mb-4\">Page d'administration site</h1>

    <div class=\"mx-auto w-50 text-start\">
        <p>
            Vous pouvez accéder à la page d'administration. Mais tout d'abord il est nécessaire de vous inscrire et d’obtenir les droits d’administrateur, attribués par l’administrateur du site.
        </p>

        <div class=\"d-flex align-items-center mb-3\">
            <span>Accéder au menu d'inscription :</span>
            <a class=\"btn btn-primary ms-2\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
        yield "\">Inscription</a>
        </div>

        <div class=\"d-flex align-items-center\">
            <span>Accéder au menu de connexion :</span>
            <a class=\"btn btn-primary ms-2\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connexion</a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  103 => 23,  95 => 18,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container text-center my-5\">
    <div class=\"mb-4\">
        <img src=\"{{ asset('logo-canopees.png') }}\" alt=\"Logo Canopees\" style=\"max-width: 200px;\">
    </div>

    <h1 class=\"mb-4\">Page d'administration site</h1>

    <div class=\"mx-auto w-50 text-start\">
        <p>
            Vous pouvez accéder à la page d'administration. Mais tout d'abord il est nécessaire de vous inscrire et d’obtenir les droits d’administrateur, attribués par l’administrateur du site.
        </p>

        <div class=\"d-flex align-items-center mb-3\">
            <span>Accéder au menu d'inscription :</span>
            <a class=\"btn btn-primary ms-2\" href=\"{{ path('app_signin') }}\">Inscription</a>
        </div>

        <div class=\"d-flex align-items-center\">
            <span>Accéder au menu de connexion :</span>
            <a class=\"btn btn-primary ms-2\" href=\"{{ path('app_login') }}\">Connexion</a>
        </div>
    </div>
</div>
{% endblock %}

", "home/index.html.twig", "F:\\C-DOSSIER JEROME\\INFORMATIQUE\\formation developpeur Web\\Cours programmation\\Exercice\\MSPR2\\Back_End\\templates\\home\\index.html.twig");
    }
}
