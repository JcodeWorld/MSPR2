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

/* login/index.html.twig */
class __TwigTemplate_ccd76f55f6aa5671ad5bcfc15e272d69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

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
        yield "<div class=\"text-center mb-4\">
    <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo-canopees.png"), "html", null, true);
        yield "\" alt=\"Logo Canopees\" style=\"max-width: 200px;\">
</div>

<h1 class=\"mb-4 text-center\">Connexion</h1>

";
        // line 10
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    <div class=\"alert alert-danger text-center\">
        ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            yield "
    </div>
";
        }
        // line 15
        yield "
<form class=\"text-start ms-5 d-flex justify-content-center\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
    <div class=\"w-25\">
        <div class=\"mb-3\">
            <label for=\"username\">Email :</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" required class=\"form-control\">
        </div>

        <div class=\"mb-3\">
            <label for=\"password\">Mot de passe :</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required class=\"form-control\">
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"/admin\">

        <div class=\"mt-4 d-flex justify-content-center\">
            <button class=\"btn btn-primary\" type=\"submit\">Connexion</button>
        </div>
    </div>
</form>

<hr class=\"my-5\">

<div class=\"ms-5\">
    <p>
        Vous pouvez vous connecter à la page d'administration. <br>
        Mais il est nécessaire de vous inscrire et d’obtenir les droits administrateur accordés par l’administrateur du site.
    </p>
    <div class=\"d-flex align-items-center\">
        <span>Pour accéder au menu d'inscription :</span>
        <a class=\"btn btn-outline-primary ms-2\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
        yield "\">Inscription</a>
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
        return "login/index.html.twig";
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
        return array (  136 => 45,  108 => 20,  101 => 16,  98 => 15,  92 => 12,  89 => 11,  87 => 10,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"text-center mb-4\">
    <img src=\"{{ asset('logo-canopees.png') }}\" alt=\"Logo Canopees\" style=\"max-width: 200px;\">
</div>

<h1 class=\"mb-4 text-center\">Connexion</h1>

{% if error %}
    <div class=\"alert alert-danger text-center\">
        {{ error.messageKey|trans(error.messageData, 'security') }}
    </div>
{% endif %}

<form class=\"text-start ms-5 d-flex justify-content-center\" action=\"{{ path('app_login') }}\" method=\"post\">
    <div class=\"w-25\">
        <div class=\"mb-3\">
            <label for=\"username\">Email :</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required class=\"form-control\">
        </div>

        <div class=\"mb-3\">
            <label for=\"password\">Mot de passe :</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required class=\"form-control\">
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"/admin\">

        <div class=\"mt-4 d-flex justify-content-center\">
            <button class=\"btn btn-primary\" type=\"submit\">Connexion</button>
        </div>
    </div>
</form>

<hr class=\"my-5\">

<div class=\"ms-5\">
    <p>
        Vous pouvez vous connecter à la page d'administration. <br>
        Mais il est nécessaire de vous inscrire et d’obtenir les droits administrateur accordés par l’administrateur du site.
    </p>
    <div class=\"d-flex align-items-center\">
        <span>Pour accéder au menu d'inscription :</span>
        <a class=\"btn btn-outline-primary ms-2\" href=\"{{ path('app_signin') }}\">Inscription</a>
    </div>
</div>
{% endblock %}

", "login/index.html.twig", "F:\\C-DOSSIER JEROME\\INFORMATIQUE\\formation developpeur Web\\Cours programmation\\Exercice\\MSPR2\\Back_End\\templates\\login\\index.html.twig");
    }
}
