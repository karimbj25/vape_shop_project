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

/* product/show.html.twig */
class __TwigTemplate_79ddca17330668166943cb3ef462c76d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - VapeShop";
        
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
        yield "<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20\">
    <div class=\"glass rounded-3xl overflow-hidden border border-white/10\">
        <div class=\"grid grid-cols-1 md:grid-cols-2\">
            <!-- Image -->
            <div class=\"lg:col-span-1\">
                <div class=\"glass rounded-3xl overflow-hidden p-4\">
                    ";
        // line 12
        $context["img_url"] = (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12))));
        // line 13
        yield "                    <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img_url"]) || array_key_exists("img_url", $context) ? $context["img_url"] : (function () { throw new RuntimeError('Variable "img_url" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\" 
                         alt=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        yield "\" 
                         class=\"w-full rounded-2xl shadow-2xl\"
                         onerror=\"this.src='https://images.unsplash.com/photo-1699631559024-6ab8b00489a8?q=80&w=600&auto=format&fit=crop';\">
                </div>
            </div>
            <!-- Details -->
            <div class=\"p-8 md:p-12 flex flex-col justify-center\">
                <div class=\"mb-6\">
                    <span class=\"text-neon-green font-bold tracking-wider uppercase text-sm border border-neon-green/30 px-3 py-1 rounded-full\">
                        ";
        // line 23
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true)) : (yield "Unknown"));
        yield "
                    </span>
                </div>
                
                <h1 class=\"text-4xl md:text-5xl font-bold text-white mb-4\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        yield "</h1>
                <p class=\"text-3xl text-white font-bold mb-8\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28), 3), "html", null, true);
        yield " TND</p>
                
                <div class=\"prose prose-invert mb-10 text-gray-400\">
                    <p>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
                    <p>High quality materials, designed for the ultimate experience. Includes standard manufacturer warranty.</p>
                </div>

                <div class=\"flex items-center gap-6\">
                    ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "stock", [], "any", false, false, false, 36) > 0)) {
            // line 37
            yield "                    <button data-add-to-cart data-product-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
            yield "\" class=\"flex-1 bg-neon-green text-black font-bold text-lg py-4 rounded-xl hover:shadow-[0_0_25px_#39ff14] hover:scale-[1.02] transition-all transform duration-200\">
                        Add to Cart
                    </button>
                    ";
        } else {
            // line 41
            yield "                    <button disabled class=\"flex-1 bg-gray-600 text-gray-400 font-bold text-lg py-4 rounded-xl cursor-not-allowed\">
                        Out of Stock
                    </button>
                    ";
        }
        // line 45
        yield "                    <button class=\"p-4 glass rounded-xl border border-white/20 hover:bg-white/10 text-white transition-colors\">
                        ❤️
                    </button>
                </div>
                
                <div class=\"mt-8 flex gap-4 text-sm text-gray-500\">
                    ";
        // line 51
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 51, $this->source); })()), "stock", [], "any", false, false, false, 51) > 0)) {
            // line 52
            yield "                    <span class=\"text-neon-green\">✅ In Stock (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 52, $this->source); })()), "stock", [], "any", false, false, false, 52), "html", null, true);
            yield " available)</span>
                    ";
        } else {
            // line 54
            yield "                    <span class=\"text-red-500\">❌ Out of Stock</span>
                    ";
        }
        // line 56
        yield "                    <span>🚀 Fast Shipping</span>
                    <span>🛡️ Secure Payment</span>
                </div>
            </div>
        </div>
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
        return "product/show.html.twig";
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
        return array (  174 => 56,  170 => 54,  164 => 52,  162 => 51,  154 => 45,  148 => 41,  140 => 37,  138 => 36,  130 => 31,  124 => 28,  120 => 27,  113 => 23,  101 => 14,  96 => 13,  94 => 12,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }} - VapeShop{% endblock %}

{% block body %}
<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20\">
    <div class=\"glass rounded-3xl overflow-hidden border border-white/10\">
        <div class=\"grid grid-cols-1 md:grid-cols-2\">
            <!-- Image -->
            <div class=\"lg:col-span-1\">
                <div class=\"glass rounded-3xl overflow-hidden p-4\">
                    {% set img_url = product.image starts with 'http' ? product.image : asset(product.image) %}
                    <img src=\"{{ img_url }}\" 
                         alt=\"{{ product.name }}\" 
                         class=\"w-full rounded-2xl shadow-2xl\"
                         onerror=\"this.src='https://images.unsplash.com/photo-1699631559024-6ab8b00489a8?q=80&w=600&auto=format&fit=crop';\">
                </div>
            </div>
            <!-- Details -->
            <div class=\"p-8 md:p-12 flex flex-col justify-center\">
                <div class=\"mb-6\">
                    <span class=\"text-neon-green font-bold tracking-wider uppercase text-sm border border-neon-green/30 px-3 py-1 rounded-full\">
                        {{ product.category ? product.category.name : 'Unknown' }}
                    </span>
                </div>
                
                <h1 class=\"text-4xl md:text-5xl font-bold text-white mb-4\">{{ product.name }}</h1>
                <p class=\"text-3xl text-white font-bold mb-8\">{{ product.price|number_format(3) }} TND</p>
                
                <div class=\"prose prose-invert mb-10 text-gray-400\">
                    <p>{{ product.description }}</p>
                    <p>High quality materials, designed for the ultimate experience. Includes standard manufacturer warranty.</p>
                </div>

                <div class=\"flex items-center gap-6\">
                    {% if product.stock > 0 %}
                    <button data-add-to-cart data-product-id=\"{{ product.id }}\" class=\"flex-1 bg-neon-green text-black font-bold text-lg py-4 rounded-xl hover:shadow-[0_0_25px_#39ff14] hover:scale-[1.02] transition-all transform duration-200\">
                        Add to Cart
                    </button>
                    {% else %}
                    <button disabled class=\"flex-1 bg-gray-600 text-gray-400 font-bold text-lg py-4 rounded-xl cursor-not-allowed\">
                        Out of Stock
                    </button>
                    {% endif %}
                    <button class=\"p-4 glass rounded-xl border border-white/20 hover:bg-white/10 text-white transition-colors\">
                        ❤️
                    </button>
                </div>
                
                <div class=\"mt-8 flex gap-4 text-sm text-gray-500\">
                    {% if product.stock > 0 %}
                    <span class=\"text-neon-green\">✅ In Stock ({{ product.stock }} available)</span>
                    {% else %}
                    <span class=\"text-red-500\">❌ Out of Stock</span>
                    {% endif %}
                    <span>🚀 Fast Shipping</span>
                    <span>🛡️ Secure Payment</span>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "product/show.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\product\\show.html.twig");
    }
}
