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

/* security/login.html.twig */
class __TwigTemplate_e35afdd909e1c07d85d843bc62711eed extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Log in - VapeShop";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"flex items-center justify-center min-h-[80vh]\">
    <div class=\"glass p-10 rounded-2xl w-full max-w-md border border-white/10 relative overflow-hidden\">
        <div class=\"absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-neon-green to-neon-purple\"></div>
        
        <form method=\"post\">
            ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "                <div class=\"bg-red-500/10 border border-red-500/50 text-red-500 px-4 py-3 rounded-lg mb-6\">
                    ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 16
        yield "
            ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            yield "                <div class=\"mb-3 text-white\">
                    You are logged in as ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "userIdentifier", [], "any", false, false, false, 19), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-neon-green\">Logout</a>
                </div>
            ";
        }
        // line 22
        yield "
            <h1 class=\"text-3xl font-bold text-white mb-8 text-center\">Welcome Back</h1>
            
            <div class=\"mb-6\">
                <label for=\"inputEmail\" class=\"block text-sm font-bold text-gray-400 mb-2\">Email</label>
                <input type=\"email\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" id=\"inputEmail\" class=\"w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-neon-green focus:shadow-[0_0_10px_rgba(57,255,20,0.3)]\" autocomplete=\"email\" required autofocus>
            </div>
            
            <div class=\"mb-8\">
                <label for=\"inputPassword\" class=\"block text-sm font-bold text-gray-400 mb-2\">Password</label>
                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-neon-green focus:shadow-[0_0_10px_rgba(57,255,20,0.3)]\" autocomplete=\"current-password\" required>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            <button class=\"w-full bg-neon-green text-black font-bold py-3 rounded-lg hover:shadow-[0_0_20px_#39ff14] transition-all mb-4\">
                Sign in
            </button>
            
            <div class=\"text-center text-sm text-gray-500\">
                Don't have an account? <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-neon-blue hover:text-white\">Register</a>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  147 => 42,  137 => 35,  126 => 27,  119 => 22,  111 => 19,  108 => 18,  106 => 17,  103 => 16,  97 => 13,  94 => 12,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in - VapeShop{% endblock %}

{% block body %}
<div class=\"flex items-center justify-center min-h-[80vh]\">
    <div class=\"glass p-10 rounded-2xl w-full max-w-md border border-white/10 relative overflow-hidden\">
        <div class=\"absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-neon-green to-neon-purple\"></div>
        
        <form method=\"post\">
            {% if error %}
                <div class=\"bg-red-500/10 border border-red-500/50 text-red-500 px-4 py-3 rounded-lg mb-6\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            {% if app.user %}
                <div class=\"mb-3 text-white\">
                    You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\" class=\"text-neon-green\">Logout</a>
                </div>
            {% endif %}

            <h1 class=\"text-3xl font-bold text-white mb-8 text-center\">Welcome Back</h1>
            
            <div class=\"mb-6\">
                <label for=\"inputEmail\" class=\"block text-sm font-bold text-gray-400 mb-2\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"inputEmail\" class=\"w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-neon-green focus:shadow-[0_0_10px_rgba(57,255,20,0.3)]\" autocomplete=\"email\" required autofocus>
            </div>
            
            <div class=\"mb-8\">
                <label for=\"inputPassword\" class=\"block text-sm font-bold text-gray-400 mb-2\">Password</label>
                <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-neon-green focus:shadow-[0_0_10px_rgba(57,255,20,0.3)]\" autocomplete=\"current-password\" required>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            <button class=\"w-full bg-neon-green text-black font-bold py-3 rounded-lg hover:shadow-[0_0_20px_#39ff14] transition-all mb-4\">
                Sign in
            </button>
            
            <div class=\"text-center text-sm text-gray-500\">
                Don't have an account? <a href=\"{{ path('app_register') }}\" class=\"text-neon-blue hover:text-white\">Register</a>
            </div>
        </form>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\security\\login.html.twig");
    }
}
