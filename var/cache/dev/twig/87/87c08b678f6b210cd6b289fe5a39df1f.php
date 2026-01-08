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
class __TwigTemplate_8da4a2568ace57ba75dddb204f952711 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "VapeShop | Home";
        
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
        yield "<!-- Hero Section -->
<section class=\"relative h-[600px] flex items-center overflow-hidden\">
    <div class=\"absolute inset-0 z-0\">
        <img src=\"https://images.unsplash.com/photo-1699631559024-6ab8b00489a8?q=80&w=1920&auto=format&fit=crop\" class=\"w-full h-full object-cover opacity-30\" alt=\"Vape Shop Shelf\">
        <div class=\"absolute inset-0 bg-gradient-to-t from-[#0a0a0f] via-transparent to-transparent\"></div>
    </div>
    
    <div class=\"relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left\">
        <h1 class=\"text-5xl md:text-7xl font-bold mb-6\">
            <span class=\"block text-white\">Experience the</span>
            <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-neon-green to-neon-blue drop-shadow-[0_0_10px_rgba(57,255,20,0.5)]\">
                Future of Vaping
            </span>
        </h1>
        <p class=\"mt-4 text-xl text-gray-300 max-w-2xl mb-8\">
            Premium E-Liquids, cutting-edge Mods, and accessories for the modern vaper. Join the mist.
        </p>
        <div class=\"flex flex-col sm:flex-row gap-4 justify-center sm:justify-start\">
            <a href=\"/products\" class=\"px-8 py-3 bg-neon-green text-black font-bold rounded-lg hover:shadow-[0_0_20px_#39ff14] transition-all transform hover:-translate-y-1\">
                Shop Now
            </a>
            <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index", ["sort" => "newest"]);
        yield "\" class=\"px-8 py-3 glass text-white font-bold rounded-lg hover:bg-white/10 transition-all\">
                New Arrivals
            </a>
        </div>
    </div>
</section>

<!-- Categories -->
<section class=\"py-16 bg-[#0f0f16]\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h2 class=\"text-3xl font-bold text-white mb-10 text-center\">Shop by Category</h2>
        <div class=\"grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6\">
            ";
        // line 39
        $context["icons"] = ["Vapes" => "fas fa-vape-container text-neon-green", "E-Liquids" => "fas fa-tint text-neon-blue", "Nicotine Salts" => "fas fa-skull-crossbones text-neon-purple", "Disposable" => "fas fa-bolt text-yellow-400", "Accessories" => "fas fa-tools text-gray-400", "Mods & Kits" => "fas fa-microchip text-neon-green"];
        // line 47
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 48
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"group relative block p-8 rounded-2xl glass border border-white/5 hover:border-neon-green/30 transition-all hover:-translate-y-2 text-center\">
                <div class=\"mb-4\">
                    <i class=\"";
            // line 50
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 50), [], "array", true, true, false, 50) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 50), [], "array", false, false, false, 50)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 50), [], "array", false, false, false, 50), "html", null, true)) : (yield "fas fa-box"));
            yield " text-3xl group-hover:scale-125 transition-transform duration-300\"></i>
                </div>
                <span class=\"block text-sm font-bold text-white group-hover:text-neon-green transition-colors\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 52), "html", null, true);
            yield "</span>
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </div>
    </div>
</section>

<!-- Featured Products -->
<section class=\"py-20 relative\">
    <div class=\"absolute inset-0 bg-gradient-to-b from-[#0a0a0f] to-[#0f0f16] opacity-50\"></div>
    <div class=\"relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"flex justify-between items-end mb-12\">
            <div>
                <h2 class=\"text-3xl font-bold text-white\">Trending Now</h2>
                <div class=\"h-1 w-20 bg-neon-green mt-2 rounded-full shadow-[0_0_10px_#39ff14]\"></div>
            </div>
            <a href=\"/products\" class=\"text-neon-blue hover:text-white transition-colors\">View All &rarr;</a>
        </div>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 73
            yield "            <div class=\"group glass rounded-2xl overflow-hidden border border-white/5 hover:border-neon-green/30 transition-all hover:shadow-[0_0_20px_rgba(57,255,20,0.1)]\">
                <div class=\"relative h-64 overflow-hidden\">
                    ";
            // line 75
            $context["img_url"] = (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 75)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 75)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 75))));
            // line 76
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img_url"]) || array_key_exists("img_url", $context) ? $context["img_url"] : (function () { throw new RuntimeError('Variable "img_url" does not exist.', 76, $this->source); })()), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77), "html", null, true);
            yield "\" 
                         class=\"w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500\"
                         onerror=\"this.src='https://images.unsplash.com/photo-1699631559024-6ab8b00489a8?q=80&w=600&auto=format&fit=crop';\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-6\">
                        ";
            // line 81
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 81) > 0)) {
                // line 82
                yield "                        <button data-add-to-cart data-product-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "\" class=\"px-6 py-2 bg-neon-green text-black font-bold rounded-full hover:shadow-[0_0_15px_#39ff14] transition-all\">
                            Add to Cart
                        </button>
                        ";
            } else {
                // line 86
                yield "                        <button disabled class=\"px-6 py-2 bg-gray-600 text-gray-400 font-bold rounded-full cursor-not-allowed\">
                            Out of Stock
                        </button>
                        ";
            }
            // line 90
            yield "                    </div>
                    <div class=\"absolute top-4 right-4 flex flex-col gap-2 items-end\">
                        <span class=\"bg-black/70 backdrop-blur text-neon-green border border-neon-green/30 px-3 py-1 rounded-full text-xs font-bold\">
                            ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
            yield "
                        </span>
                        ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 95) <= 0)) {
                // line 96
                yield "                        <span class=\"bg-red-500/80 backdrop-blur text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider\">
                            Sold Out
                        </span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 99
$context["product"], "stock", [], "any", false, false, false, 99) < 5)) {
                // line 100
                yield "                        <span class=\"bg-orange-500/80 backdrop-blur text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider animate-pulse\">
                            Low Stock
                        </span>
                        ";
            }
            // line 104
            yield "                    </div>
                </div>
                <div class=\"p-6\">
                    <h3 class=\"text-xl font-bold text-white mb-2 group-hover:text-neon-green transition-colors\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107), "html", null, true);
            yield "</h3>
                    <p class=\"text-gray-400 text-sm mb-4 line-clamp-2\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 108), "html", null, true);
            yield "</p>
                    <div class=\"flex justify-between items-center\">
                        <div>
                            <span class=\"text-2xl font-bold text-white\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111), 3), "html", null, true);
            yield " TND</span>
                            <p class=\"text-[10px] text-gray-500 uppercase tracking-tighter\">Stock: ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 112), "html", null, true);
            yield " units</p>
                        </div>
                        <div class=\"flex text-yellow-400 text-xs text-shadow-neon\">
                            ★★★★★
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "        </div>
    </div>
</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  266 => 121,  251 => 112,  247 => 111,  241 => 108,  237 => 107,  232 => 104,  226 => 100,  224 => 99,  219 => 96,  217 => 95,  212 => 93,  207 => 90,  201 => 86,  193 => 82,  191 => 81,  184 => 77,  179 => 76,  177 => 75,  173 => 73,  169 => 72,  150 => 55,  141 => 52,  136 => 50,  130 => 48,  125 => 47,  123 => 39,  108 => 27,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}VapeShop | Home{% endblock %}

{% block body %}
<!-- Hero Section -->
<section class=\"relative h-[600px] flex items-center overflow-hidden\">
    <div class=\"absolute inset-0 z-0\">
        <img src=\"https://images.unsplash.com/photo-1699631559024-6ab8b00489a8?q=80&w=1920&auto=format&fit=crop\" class=\"w-full h-full object-cover opacity-30\" alt=\"Vape Shop Shelf\">
        <div class=\"absolute inset-0 bg-gradient-to-t from-[#0a0a0f] via-transparent to-transparent\"></div>
    </div>
    
    <div class=\"relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left\">
        <h1 class=\"text-5xl md:text-7xl font-bold mb-6\">
            <span class=\"block text-white\">Experience the</span>
            <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-neon-green to-neon-blue drop-shadow-[0_0_10px_rgba(57,255,20,0.5)]\">
                Future of Vaping
            </span>
        </h1>
        <p class=\"mt-4 text-xl text-gray-300 max-w-2xl mb-8\">
            Premium E-Liquids, cutting-edge Mods, and accessories for the modern vaper. Join the mist.
        </p>
        <div class=\"flex flex-col sm:flex-row gap-4 justify-center sm:justify-start\">
            <a href=\"/products\" class=\"px-8 py-3 bg-neon-green text-black font-bold rounded-lg hover:shadow-[0_0_20px_#39ff14] transition-all transform hover:-translate-y-1\">
                Shop Now
            </a>
            <a href=\"{{ path('app_product_index', {'sort': 'newest'}) }}\" class=\"px-8 py-3 glass text-white font-bold rounded-lg hover:bg-white/10 transition-all\">
                New Arrivals
            </a>
        </div>
    </div>
</section>

<!-- Categories -->
<section class=\"py-16 bg-[#0f0f16]\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h2 class=\"text-3xl font-bold text-white mb-10 text-center\">Shop by Category</h2>
        <div class=\"grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6\">
            {% set icons = {
                'Vapes': 'fas fa-vape-container text-neon-green',
                'E-Liquids': 'fas fa-tint text-neon-blue',
                'Nicotine Salts': 'fas fa-skull-crossbones text-neon-purple',
                'Disposable': 'fas fa-bolt text-yellow-400',
                'Accessories': 'fas fa-tools text-gray-400',
                'Mods & Kits': 'fas fa-microchip text-neon-green'
            } %}
            {% for cat in categories %}
            <a href=\"{{ path('app_product_index', {'category': cat.id}) }}\" class=\"group relative block p-8 rounded-2xl glass border border-white/5 hover:border-neon-green/30 transition-all hover:-translate-y-2 text-center\">
                <div class=\"mb-4\">
                    <i class=\"{{ icons[cat.name] ?? 'fas fa-box' }} text-3xl group-hover:scale-125 transition-transform duration-300\"></i>
                </div>
                <span class=\"block text-sm font-bold text-white group-hover:text-neon-green transition-colors\">{{ cat.name }}</span>
            </a>
            {% endfor %}
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class=\"py-20 relative\">
    <div class=\"absolute inset-0 bg-gradient-to-b from-[#0a0a0f] to-[#0f0f16] opacity-50\"></div>
    <div class=\"relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"flex justify-between items-end mb-12\">
            <div>
                <h2 class=\"text-3xl font-bold text-white\">Trending Now</h2>
                <div class=\"h-1 w-20 bg-neon-green mt-2 rounded-full shadow-[0_0_10px_#39ff14]\"></div>
            </div>
            <a href=\"/products\" class=\"text-neon-blue hover:text-white transition-colors\">View All &rarr;</a>
        </div>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8\">
            {% for product in products %}
            <div class=\"group glass rounded-2xl overflow-hidden border border-white/5 hover:border-neon-green/30 transition-all hover:shadow-[0_0_20px_rgba(57,255,20,0.1)]\">
                <div class=\"relative h-64 overflow-hidden\">
                    {% set img_url = product.image starts with 'http' ? product.image : asset(product.image) %}
                    <img src=\"{{ img_url }}\" 
                         alt=\"{{ product.name }}\" 
                         class=\"w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500\"
                         onerror=\"this.src='https://images.unsplash.com/photo-1699631559024-6ab8b00489a8?q=80&w=600&auto=format&fit=crop';\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-6\">
                        {% if product.stock > 0 %}
                        <button data-add-to-cart data-product-id=\"{{ product.id }}\" class=\"px-6 py-2 bg-neon-green text-black font-bold rounded-full hover:shadow-[0_0_15px_#39ff14] transition-all\">
                            Add to Cart
                        </button>
                        {% else %}
                        <button disabled class=\"px-6 py-2 bg-gray-600 text-gray-400 font-bold rounded-full cursor-not-allowed\">
                            Out of Stock
                        </button>
                        {% endif %}
                    </div>
                    <div class=\"absolute top-4 right-4 flex flex-col gap-2 items-end\">
                        <span class=\"bg-black/70 backdrop-blur text-neon-green border border-neon-green/30 px-3 py-1 rounded-full text-xs font-bold\">
                            {{ product.category.name }}
                        </span>
                        {% if product.stock <= 0 %}
                        <span class=\"bg-red-500/80 backdrop-blur text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider\">
                            Sold Out
                        </span>
                        {% elseif product.stock < 5 %}
                        <span class=\"bg-orange-500/80 backdrop-blur text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider animate-pulse\">
                            Low Stock
                        </span>
                        {% endif %}
                    </div>
                </div>
                <div class=\"p-6\">
                    <h3 class=\"text-xl font-bold text-white mb-2 group-hover:text-neon-green transition-colors\">{{ product.name }}</h3>
                    <p class=\"text-gray-400 text-sm mb-4 line-clamp-2\">{{ product.description }}</p>
                    <div class=\"flex justify-between items-center\">
                        <div>
                            <span class=\"text-2xl font-bold text-white\">{{ product.price|number_format(3) }} TND</span>
                            <p class=\"text-[10px] text-gray-500 uppercase tracking-tighter\">Stock: {{ product.stock }} units</p>
                        </div>
                        <div class=\"flex text-yellow-400 text-xs text-shadow-neon\">
                            ★★★★★
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>


{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\home\\index.html.twig");
    }
}
