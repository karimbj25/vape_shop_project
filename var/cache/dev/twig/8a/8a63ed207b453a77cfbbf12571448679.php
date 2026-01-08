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

/* product/index.html.twig */
class __TwigTemplate_23fc09a347abeaa39fe0d8148149b47c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        yield "Shop - VapeShop";
        
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
        yield "<!-- Header -->
<div class=\"bg-black/50 py-12 border-b border-white/10\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h1 class=\"text-4xl font-bold text-white mb-2\">All Products</h1>
        <p class=\"text-gray-400\">Browse our premium selection.</p>
    </div>
</div>

<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12\">
    <!-- Grid -->
    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            yield "            <div class=\"group glass rounded-2xl overflow-hidden border border-white/5 hover:border-neon-blue/50 transition-all hover:shadow-[0_0_20px_rgba(0,243,255,0.1)]\">
                <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" class=\"block relative\">
                    <div class=\"h-48 overflow-hidden\">
                        ";
            // line 21
            $context["img_url"] = (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 21)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 21)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 21))));
            // line 22
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img_url"]) || array_key_exists("img_url", $context) ? $context["img_url"] : (function () { throw new RuntimeError('Variable "img_url" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23), "html", null, true);
            yield "\" 
                             class=\"w-full h-full object-cover group-hover:scale-110 transition-transform\"
                             onerror=\"this.src='https://images.unsplash.com/photo-1699631559024-6ab8b00489a8?q=80&w=600&auto=format&fit=crop';\">
                    </div>
                    <div class=\"absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors\"></div>
                </a>
                <div class=\"p-6\">
                    <div class=\"flex justify-between items-start mb-2\">
                        <div>
                            <p class=\"text-xs text-neon-blue font-bold uppercase tracking-wider mb-1\">";
            // line 32
            ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 32)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true)) : (yield "Vape"));
            yield "</p>
                            <h3 class=\"text-lg font-bold text-white group-hover:text-neon-blue transition-colors\">
                                <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\">
                                    ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35), "html", null, true);
            yield "
                                </a>
                            </h3>
                        </div>
                    </div>
                    
                    <div class=\"mt-4 flex justify-between items-center border-t border-white/10 pt-4\">
                        <div>
                            <span class=\"text-xl font-bold text-white\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43), 3), "html", null, true);
            yield " TND</span>
                            <p class=\"text-[10px] text-gray-500 uppercase tracking-tighter\">Stock: ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 44), "html", null, true);
            yield "</p>
                        </div>
                        ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 46) > 0)) {
                // line 47
                yield "                        <button data-add-to-cart data-product-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 47), "html", null, true);
                yield "\" class=\"text-sm bg-white/10 hover:bg-neon-blue hover:text-black hover:shadow-neon-blue text-white px-4 py-2 rounded-lg transition-all font-bold\">
                            Add
                        </button>
                        ";
            } else {
                // line 51
                yield "                        <span class=\"text-[10px] bg-red-500/20 text-red-500 border border-red-500/30 px-2 py-1 rounded font-bold\">SOLD OUT</span>
                        ";
            }
            // line 53
            yield "                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            yield "            <div class=\"col-span-full py-20 text-center text-gray-500\">
                No products found.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "    </div>
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
        return "product/index.html.twig";
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
        return array (  190 => 61,  181 => 57,  173 => 53,  169 => 51,  161 => 47,  159 => 46,  154 => 44,  150 => 43,  139 => 35,  135 => 34,  130 => 32,  118 => 23,  113 => 22,  111 => 21,  106 => 19,  103 => 18,  98 => 17,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Shop - VapeShop{% endblock %}

{% block body %}
<!-- Header -->
<div class=\"bg-black/50 py-12 border-b border-white/10\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h1 class=\"text-4xl font-bold text-white mb-2\">All Products</h1>
        <p class=\"text-gray-400\">Browse our premium selection.</p>
    </div>
</div>

<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12\">
    <!-- Grid -->
    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8\">
        {% for product in products %}
            <div class=\"group glass rounded-2xl overflow-hidden border border-white/5 hover:border-neon-blue/50 transition-all hover:shadow-[0_0_20px_rgba(0,243,255,0.1)]\">
                <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" class=\"block relative\">
                    <div class=\"h-48 overflow-hidden\">
                        {% set img_url = product.image starts with 'http' ? product.image : asset(product.image) %}
                        <img src=\"{{ img_url }}\" 
                             alt=\"{{ product.name }}\" 
                             class=\"w-full h-full object-cover group-hover:scale-110 transition-transform\"
                             onerror=\"this.src='https://images.unsplash.com/photo-1699631559024-6ab8b00489a8?q=80&w=600&auto=format&fit=crop';\">
                    </div>
                    <div class=\"absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors\"></div>
                </a>
                <div class=\"p-6\">
                    <div class=\"flex justify-between items-start mb-2\">
                        <div>
                            <p class=\"text-xs text-neon-blue font-bold uppercase tracking-wider mb-1\">{{ product.category ? product.category.name : 'Vape' }}</p>
                            <h3 class=\"text-lg font-bold text-white group-hover:text-neon-blue transition-colors\">
                                <a href=\"{{ path('app_product_show', {'id': product.id}) }}\">
                                    {{ product.name }}
                                </a>
                            </h3>
                        </div>
                    </div>
                    
                    <div class=\"mt-4 flex justify-between items-center border-t border-white/10 pt-4\">
                        <div>
                            <span class=\"text-xl font-bold text-white\">{{ product.price|number_format(3) }} TND</span>
                            <p class=\"text-[10px] text-gray-500 uppercase tracking-tighter\">Stock: {{ product.stock }}</p>
                        </div>
                        {% if product.stock > 0 %}
                        <button data-add-to-cart data-product-id=\"{{ product.id }}\" class=\"text-sm bg-white/10 hover:bg-neon-blue hover:text-black hover:shadow-neon-blue text-white px-4 py-2 rounded-lg transition-all font-bold\">
                            Add
                        </button>
                        {% else %}
                        <span class=\"text-[10px] bg-red-500/20 text-red-500 border border-red-500/30 px-2 py-1 rounded font-bold\">SOLD OUT</span>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-span-full py-20 text-center text-gray-500\">
                No products found.
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "product/index.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\product\\index.html.twig");
    }
}
