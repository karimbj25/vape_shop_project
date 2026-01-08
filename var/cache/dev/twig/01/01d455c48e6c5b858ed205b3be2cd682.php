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

/* checkout/success.html.twig */
class __TwigTemplate_69aa90999dce46b73b4d4616384451fa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/success.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/success.html.twig", 1);
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

        yield "Order Confirmed - VapeShop";
        
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
    <div class=\"glass p-12 rounded-3xl text-center max-w-2xl border border-neon-green/30\">
        <div class=\"w-24 h-24 bg-neon-green/10 rounded-full flex items-center justify-center mx-auto mb-6\">
            <span class=\"text-6xl\">✅</span>
        </div>
        
        <h1 class=\"text-4xl font-bold text-white mb-4\">Order Placed!</h1>
        <p class=\"text-xl text-gray-300 mb-8\">Thank you for your purchase. Your order #";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield " has been confirmed.</p>
        
        <div class=\"bg-black/30 p-6 rounded-xl mb-8 text-left\">
            <div class=\"flex justify-between mb-2\">
                <span class=\"text-gray-400\">Order Number</span>
                <span class=\"text-white font-bold\">#";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</span>
            </div>
            <div class=\"flex justify-between mb-2\">
                <span class=\"text-gray-400\">Date</span>
                <span class=\"text-white\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22), "Y-m-d H:i"), "html", null, true);
        yield "</span>
            </div>
            <div class=\"flex justify-between border-t border-white/10 pt-2 mt-2\">
                <span class=\"text-gray-400\">Total</span>
                <span class=\"text-neon-green font-bold text-xl\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "totalPrice", [], "any", false, false, false, 26), 3), "html", null, true);
        yield " TND</span>
            </div>
        </div>
        
        <a href=\"/\" class=\"inline-block px-8 py-3 bg-neon-green text-black font-bold rounded-lg hover:shadow-[0_0_20px_#39ff14] transition-all\">
            Continue Shopping
        </a>
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
        return "checkout/success.html.twig";
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
        return array (  116 => 26,  109 => 22,  102 => 18,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order Confirmed - VapeShop{% endblock %}

{% block body %}
<div class=\"flex items-center justify-center min-h-[80vh]\">
    <div class=\"glass p-12 rounded-3xl text-center max-w-2xl border border-neon-green/30\">
        <div class=\"w-24 h-24 bg-neon-green/10 rounded-full flex items-center justify-center mx-auto mb-6\">
            <span class=\"text-6xl\">✅</span>
        </div>
        
        <h1 class=\"text-4xl font-bold text-white mb-4\">Order Placed!</h1>
        <p class=\"text-xl text-gray-300 mb-8\">Thank you for your purchase. Your order #{{ order.id }} has been confirmed.</p>
        
        <div class=\"bg-black/30 p-6 rounded-xl mb-8 text-left\">
            <div class=\"flex justify-between mb-2\">
                <span class=\"text-gray-400\">Order Number</span>
                <span class=\"text-white font-bold\">#{{ order.id }}</span>
            </div>
            <div class=\"flex justify-between mb-2\">
                <span class=\"text-gray-400\">Date</span>
                <span class=\"text-white\">{{ order.createdAt|date('Y-m-d H:i') }}</span>
            </div>
            <div class=\"flex justify-between border-t border-white/10 pt-2 mt-2\">
                <span class=\"text-gray-400\">Total</span>
                <span class=\"text-neon-green font-bold text-xl\">{{ order.totalPrice|number_format(3) }} TND</span>
            </div>
        </div>
        
        <a href=\"/\" class=\"inline-block px-8 py-3 bg-neon-green text-black font-bold rounded-lg hover:shadow-[0_0_20px_#39ff14] transition-all\">
            Continue Shopping
        </a>
    </div>
</div>
{% endblock %}
", "checkout/success.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\checkout\\success.html.twig");
    }
}
