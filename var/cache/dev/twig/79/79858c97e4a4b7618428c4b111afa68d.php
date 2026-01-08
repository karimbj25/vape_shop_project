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

/* registration/register.html.twig */
class __TwigTemplate_c3cb6e3b76ed5e12fbd9883bf8ebb29d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Register - VapeShop";
        
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
        yield "<div class=\"flex items-center justify-center min-h-[80vh] py-12\">
    <div class=\"glass p-10 rounded-2xl w-full max-w-md border border-white/10 relative overflow-hidden\">
        <div class=\"absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-neon-purple to-neon-green\"></div>

        <h1 class=\"text-3xl font-bold text-white mb-8 text-center\">Join the Club</h1>

        ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
            
            ";
        // line 14
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), 'errors')) {
            // line 15
            yield "                 <div class=\"bg-red-500/10 border border-red-500/50 text-red-500 px-4 py-3 rounded-lg mb-6\">
                    ";
            // line 16
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'errors');
            yield "
                </div>
            ";
        }
        // line 19
        yield "
            <div class=\"mb-4\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'row');
        yield "
            </div>

            <div class=\"grid grid-cols-2 gap-4 mb-4\">
                <div>";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "firstName", [], "any", false, false, false, 25), 'row');
        yield "</div>
                <div>";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "lastName", [], "any", false, false, false, 26), 'row');
        yield "</div>
            </div>

            <div class=\"mb-6\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "plainPassword", [], "any", false, false, false, 30), 'row');
        yield "
            </div>

            <div class=\"flex items-center mb-6\">
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "agreeTerms", [], "any", false, false, false, 34), 'widget');
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "agreeTerms", [], "any", false, false, false, 35), 'label');
        yield "
            </div>

            <button type=\"submit\" class=\"w-full bg-neon-purple text-white font-bold py-3 rounded-lg hover:shadow-[0_0_20px_#c026d3] transition-all mb-4\">
                Register
            </button>
            
            <div class=\"text-center text-sm text-gray-500\">
                Already have an account? <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-neon-green hover:text-white\">Login</a>
            </div>

        ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
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
        return "registration/register.html.twig";
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
        return array (  159 => 46,  153 => 43,  142 => 35,  138 => 34,  131 => 30,  124 => 26,  120 => 25,  113 => 21,  109 => 19,  103 => 16,  100 => 15,  98 => 14,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register - VapeShop{% endblock %}

{% block body %}
<div class=\"flex items-center justify-center min-h-[80vh] py-12\">
    <div class=\"glass p-10 rounded-2xl w-full max-w-md border border-white/10 relative overflow-hidden\">
        <div class=\"absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-neon-purple to-neon-green\"></div>

        <h1 class=\"text-3xl font-bold text-white mb-8 text-center\">Join the Club</h1>

        {{ form_start(registrationForm) }}
            
            {% if form_errors(registrationForm) %}
                 <div class=\"bg-red-500/10 border border-red-500/50 text-red-500 px-4 py-3 rounded-lg mb-6\">
                    {{ form_errors(registrationForm) }}
                </div>
            {% endif %}

            <div class=\"mb-4\">
                {{ form_row(registrationForm.email) }}
            </div>

            <div class=\"grid grid-cols-2 gap-4 mb-4\">
                <div>{{ form_row(registrationForm.firstName) }}</div>
                <div>{{ form_row(registrationForm.lastName) }}</div>
            </div>

            <div class=\"mb-6\">
                {{ form_row(registrationForm.plainPassword) }}
            </div>

            <div class=\"flex items-center mb-6\">
                {{ form_widget(registrationForm.agreeTerms) }}
                {{ form_label(registrationForm.agreeTerms) }}
            </div>

            <button type=\"submit\" class=\"w-full bg-neon-purple text-white font-bold py-3 rounded-lg hover:shadow-[0_0_20px_#c026d3] transition-all mb-4\">
                Register
            </button>
            
            <div class=\"text-center text-sm text-gray-500\">
                Already have an account? <a href=\"{{ path('app_login') }}\" class=\"text-neon-green hover:text-white\">Login</a>
            </div>

        {{ form_end(registrationForm) }}
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\registration\\register.html.twig");
    }
}
