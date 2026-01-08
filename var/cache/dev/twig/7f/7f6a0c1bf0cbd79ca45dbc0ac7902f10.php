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

/* cart/index.html.twig */
class __TwigTemplate_5cbffc9479450f97f204ad089d6d1ecd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        yield "Your Cart - VapeShop";
        
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
    <h1 class=\"text-4xl font-bold text-white mb-10\">Your Cart</h1>

    <div class=\"flex flex-col lg:flex-row gap-12\">
        <!-- Cart Items -->
        <div class=\"lg:w-2/3\">
            ";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "                <div class=\"glass rounded-2xl overflow-hidden border border-white/10\">
                    <table class=\"w-full text-left text-gray-300\">
                        <thead class=\"bg-black/30 text-xs uppercase font-bold text-gray-500\">
                            <tr>
                                <th class=\"px-6 py-4\">Product</th>
                                <th class=\"px-6 py-4\">Price</th>
                                <th class=\"px-6 py-4\">Quantity</th>
                                <th class=\"px-6 py-4\">Total</th>
                                <th class=\"px-6 py-4\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-white/10\">
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                yield "                            <tr class=\"hover:bg-white/5 transition-colors\">
                                <td class=\"px-6 py-4\">
                                    <div class=\"flex items-center\">
                                        <div class=\"h-12 w-12 flex-shrink-0 overflow-hidden rounded-md border border-white/10\">
                                            <img src=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30), "html", null, true);
                yield "\" alt=\"\" class=\"h-full w-full object-cover\">
                                        </div>
                                        <div class=\"ml-4 font-bold text-white\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                yield "</div>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35), 3), "html", null, true);
                yield " TND</td>
                                <td class=\"px-6 py-4\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                                <td class=\"px-6 py-4 text-neon-green font-bold\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 37)), 3), "html", null, true);
                yield " TND</td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\" class=\"text-red-500 hover:text-red-400 text-sm font-bold\">Remove</a>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 47
            yield "                <div class=\"glass p-12 text-center rounded-2xl border border-white/10\">
                    <p class=\"text-2xl text-gray-500 mb-6\">Your cart is empty.</p>
                    <a href=\"/products\" class=\"inline-block px-8 py-3 bg-neon-purple text-white font-bold rounded-lg hover:bg-neon-purple/80 transition-colors\">Start Shopping</a>
                </div>
            ";
        }
        // line 52
        yield "        </div>

        <!-- Summary -->
        <div class=\"lg:w-1/3\">
            <div class=\"glass rounded-2xl p-8 border border-white/10 sticky top-24\">
                <h2 class=\"text-2xl font-bold text-white mb-6\">Order Summary</h2>
                
                <div class=\"space-y-4 mb-6 text-gray-400\">
                    <div class=\"flex justify-between\">
                        <span>Subtotal</span>
                        <span class=\"text-white\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()), 3), "html", null, true);
        yield " TND</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span>Shipping</span>
                        <span class=\"text-green-400\">Free</span>
                    </div>
                </div>
                
                <div class=\"border-t border-white/10 pt-4 mb-8\">
                    <div class=\"flex justify-between items-center\">
                        <span class=\"text-xl font-bold text-white\">Total</span>
                        <span class=\"text-3xl font-bold text-neon-green text-shadow-neon\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 73, $this->source); })()), 3), "html", null, true);
        yield " TND</span>
                    </div>
                </div>

                <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
        yield "\" class=\"block w-full bg-neon-green text-black text-center font-bold text-lg py-4 rounded-xl hover:shadow-[0_0_20px_#39ff14] transition-all mb-4\">
                    Proceed to Checkout
                </a>
                
                <p class=\"text-xs text-center text-gray-500\">Secure Checkout powered by Symfony</p>
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
        return "cart/index.html.twig";
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
        return array (  199 => 77,  192 => 73,  178 => 62,  166 => 52,  159 => 47,  153 => 43,  143 => 39,  138 => 37,  134 => 36,  130 => 35,  124 => 32,  119 => 30,  113 => 26,  109 => 25,  95 => 13,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Your Cart - VapeShop{% endblock %}

{% block body %}
<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20\">
    <h1 class=\"text-4xl font-bold text-white mb-10\">Your Cart</h1>

    <div class=\"flex flex-col lg:flex-row gap-12\">
        <!-- Cart Items -->
        <div class=\"lg:w-2/3\">
            {% if items|length > 0 %}
                <div class=\"glass rounded-2xl overflow-hidden border border-white/10\">
                    <table class=\"w-full text-left text-gray-300\">
                        <thead class=\"bg-black/30 text-xs uppercase font-bold text-gray-500\">
                            <tr>
                                <th class=\"px-6 py-4\">Product</th>
                                <th class=\"px-6 py-4\">Price</th>
                                <th class=\"px-6 py-4\">Quantity</th>
                                <th class=\"px-6 py-4\">Total</th>
                                <th class=\"px-6 py-4\">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=\"divide-y divide-white/10\">
                            {% for item in items %}
                            <tr class=\"hover:bg-white/5 transition-colors\">
                                <td class=\"px-6 py-4\">
                                    <div class=\"flex items-center\">
                                        <div class=\"h-12 w-12 flex-shrink-0 overflow-hidden rounded-md border border-white/10\">
                                            <img src=\"{{ item.product.image }}\" alt=\"\" class=\"h-full w-full object-cover\">
                                        </div>
                                        <div class=\"ml-4 font-bold text-white\">{{ item.product.name }}</div>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4\">{{ item.product.price|number_format(3) }} TND</td>
                                <td class=\"px-6 py-4\">{{ item.quantity }}</td>
                                <td class=\"px-6 py-4 text-neon-green font-bold\">{{ (item.product.price * item.quantity)|number_format(3) }} TND</td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"{{ path('app_cart_remove', {'id': item.product.id}) }}\" class=\"text-red-500 hover:text-red-400 text-sm font-bold\">Remove</a>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% else %}
                <div class=\"glass p-12 text-center rounded-2xl border border-white/10\">
                    <p class=\"text-2xl text-gray-500 mb-6\">Your cart is empty.</p>
                    <a href=\"/products\" class=\"inline-block px-8 py-3 bg-neon-purple text-white font-bold rounded-lg hover:bg-neon-purple/80 transition-colors\">Start Shopping</a>
                </div>
            {% endif %}
        </div>

        <!-- Summary -->
        <div class=\"lg:w-1/3\">
            <div class=\"glass rounded-2xl p-8 border border-white/10 sticky top-24\">
                <h2 class=\"text-2xl font-bold text-white mb-6\">Order Summary</h2>
                
                <div class=\"space-y-4 mb-6 text-gray-400\">
                    <div class=\"flex justify-between\">
                        <span>Subtotal</span>
                        <span class=\"text-white\">{{ total|number_format(3) }} TND</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span>Shipping</span>
                        <span class=\"text-green-400\">Free</span>
                    </div>
                </div>
                
                <div class=\"border-t border-white/10 pt-4 mb-8\">
                    <div class=\"flex justify-between items-center\">
                        <span class=\"text-xl font-bold text-white\">Total</span>
                        <span class=\"text-3xl font-bold text-neon-green text-shadow-neon\">{{ total|number_format(3) }} TND</span>
                    </div>
                </div>

                <a href=\"{{ path('app_checkout') }}\" class=\"block w-full bg-neon-green text-black text-center font-bold text-lg py-4 rounded-xl hover:shadow-[0_0_20px_#39ff14] transition-all mb-4\">
                    Proceed to Checkout
                </a>
                
                <p class=\"text-xs text-center text-gray-500\">Secure Checkout powered by Symfony</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "cart/index.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\cart\\index.html.twig");
    }
}
