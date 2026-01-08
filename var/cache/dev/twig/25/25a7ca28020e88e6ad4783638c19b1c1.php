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

/* base.html.twig */
class __TwigTemplate_f97af8299d424c0906ea422c1f0f7b7d extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"dark\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>💨</text></svg>\">
        
        <!-- Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap\" rel=\"stylesheet\">
        
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
        
        <!-- Tailwind CSS -->
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            neon: {
                                green: '#39ff14',
                                purple: '#c026d3', // fuchsia-600
                                blue: '#00f3ff'
                            }
                        },
                        boxShadow: {
                            'neon-green': '0 0 10px #39ff14, 0 0 20px #39ff14',
                            'neon-purple': '0 0 10px #c026d3, 0 0 20px #c026d3',
                        }
                    }
                }
            }
        </script>
        <style>
            .glass {
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            #toast-container {
                position: fixed;
                bottom: 2rem;
                right: 2rem;
                z-index: 100;
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            .toast {
                animation: slideIn 0.3s ease forwards;
            }
            @keyframes slideIn {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            .toast.fadeOut {
                animation: slideOut 0.3s ease forwards;
            }
            @keyframes slideOut {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(100%); opacity: 0; }
            }
        </style>

        ";
        // line 73
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 74
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 75
        yield "    </head>
    <body class=\"bg-[#0a0a0f] text-gray-200 font-sans min-h-screen flex flex-col selection:bg-neon-green selection:text-black\">
        
        <!-- Navbar -->
        <nav class=\"fixed w-full z-50 glass border-b border-white/10\">
            <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
                <div class=\"flex items-center justify-between h-20\">
                    <div class=\"flex items-center\">
                        <a href=\"/\" class=\"text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-neon-green to-neon-blue tracking-tighter hover:scale-105 transition-transform\">
                            VapeShop
                        </a>
                    </div>
                    <div class=\"hidden md:block\">
                        <div class=\"ml-10 flex items-baseline space-x-8\">
                            <a href=\"/\" class=\"hover:text-neon-green transition-colors px-3 py-2 rounded-md text-sm font-medium\">Home</a>
                            <a href=\"/products\" class=\"hover:text-neon-green transition-colors px-3 py-2 rounded-md text-sm font-medium\">Shop</a>
                            
                            ";
        // line 92
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VENTE"))) {
            // line 93
            yield "                                <a href=\"/admin\" class=\"text-neon-purple border border-neon-purple/50 hover:bg-neon-purple hover:text-white transition-all px-3 py-2 rounded-md text-sm font-bold shadow-[0_0_10px_rgba(192,38,211,0.2)]\">
                                    Dashboard
                                </a>
                            ";
        }
        // line 97
        yield "
                            ";
        // line 98
        $context["cart"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "session", [], "any", false, false, false, 98), "get", ["cart", []], "method", false, false, false, 98);
        // line 99
        yield "                            ";
        $context["cartCount"] = 0;
        // line 100
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["qty"]) {
            // line 101
            yield "                                ";
            $context["cartCount"] = ((isset($context["cartCount"]) || array_key_exists("cartCount", $context) ? $context["cartCount"] : (function () { throw new RuntimeError('Variable "cartCount" does not exist.', 101, $this->source); })()) + $context["qty"]);
            // line 102
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['qty'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                            <a href=\"/cart\" class=\"group flex items-center hover:text-neon-green transition-colors px-3 py-2 rounded-md text-sm font-medium\">
                                <span class=\"group-hover:drop-shadow-[0_0_5px_rgba(57,255,20,0.8)]\">Cart</span>
                                <span id=\"cart-count\" class=\"ml-2 bg-neon-purple text-white text-xs px-2 py-0.5 rounded-full\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartCount"]) || array_key_exists("cartCount", $context) ? $context["cartCount"] : (function () { throw new RuntimeError('Variable "cartCount" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</span>
                            </a>
                            
                            ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108)) {
            // line 109
            yield "                                <div class=\"flex items-center gap-4\">
                                    <span class=\"text-xs text-gray-500\">Hi, ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 110), "firstName", [], "any", true, true, false, 110) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 110), "firstName", [], "any", false, false, false, 110)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 110), "firstName", [], "any", false, false, false, 110)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "email", [], "any", false, false, false, 110))), "html", null, true);
            yield "</span>
                                    <a href=\"/logout\" class=\"bg-white/10 hover:bg-red-500 hover:text-white transition-all duration-300 px-4 py-2 rounded-lg text-sm font-bold\">
                                        Logout
                                    </a>
                                </div>
                            ";
        } else {
            // line 116
            yield "                                <a href=\"/login\" class=\"bg-white/10 hover:bg-neon-green hover:text-black hover:shadow-neon-green transition-all duration-300 px-4 py-2 rounded-lg text-sm font-bold\">
                                    Login
                                </a>
                            ";
        }
        // line 120
        yield "                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class=\"flex-grow pt-20\">
            ";
        // line 128
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 129
        yield "        </main>

        <!-- Footer -->
        <footer class=\"glass border-t border-white/10 mt-20 bg-black/50\">
            <div class=\"max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8\">
                <div class=\"grid grid-cols-1 md:grid-cols-4 gap-12\">
                    <div class=\"col-span-1 md:col-span-2\">
                        <span class=\"text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-neon-green to-neon-blue tracking-tighter\">VapeShop</span>
                        <p class=\"mt-4 text-gray-400 max-w-sm\">
                            The industry leader in premium vaping equipment and professional-grade e-liquids. Designed for the discerning vaper.
                        </p>
                        <div class=\"mt-6 flex space-x-6 text-gray-500\">
                            <a href=\"#\" class=\"hover:text-neon-green transition-colors\"><i class=\"fab fa-facebook-f text-xl\"></i></a>
                            <a href=\"#\" class=\"hover:text-neon-blue transition-colors\"><i class=\"fab fa-instagram text-xl\"></i></a>
                            <a href=\"#\" class=\"hover:text-neon-purple transition-colors\"><i class=\"fab fa-twitter text-xl\"></i></a>
                            <a href=\"#\" class=\"hover:text-white transition-colors\"><i class=\"fab fa-tiktok text-xl\"></i></a>
                        </div>
                    </div>
                    <div>
                        <h3 class=\"text-white font-bold uppercase tracking-widest text-xs mb-6\">Quick Links</h3>
                        <ul class=\"space-y-4 text-sm text-gray-400\">
                            <li><a href=\"/\" class=\"hover:text-neon-green transition-colors\">Home</a></li>
                            <li><a href=\"/products\" class=\"hover:text-neon-blue transition-colors\">All Products</a></li>
                            <li><a href=\"/cart\" class=\"hover:text-neon-purple transition-colors\">Shopping Cart</a></li>
                            <li><a href=\"/admin\" class=\"hover:text-white transition-colors\">Admin Panel</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class=\"text-white font-bold uppercase tracking-widest text-xs mb-6\">Support</h3>
                        <ul class=\"space-y-4 text-sm text-gray-400\">
                            <li><a href=\"#\" class=\"hover:text-white transition-colors\">Shipping Policy</a></li>
                            <li><a href=\"#\" class=\"hover:text-white transition-colors\">Terms of Service</a></li>
                            <li><a href=\"#\" class=\"hover:text-white transition-colors\">Contact Us</a></li>
                            <li><a href=\"#\" class=\"hover:text-white transition-colors\">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4\">
                    <p class=\"text-xs text-gray-600\">
                        &copy; ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " VapeShop Inc. Handcrafted with passion.
                    </p>
                    <div class=\"flex gap-4\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg\" alt=\"Visa\" class=\"h-4 opacity-30 grayscale hover:grayscale-0 transition-all cursor-pointer\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg\" alt=\"Mastercard\" class=\"h-4 opacity-30 grayscale hover:grayscale-0 transition-all cursor-pointer\">
                    </div>
                </div>
            </div>
        </footer>

        <div id=\"toast-container\"></div>

        <script>
            function showToast(message, type = 'success') {
                const container = document.getElementById('toast-container');
                const toast = document.createElement('div');
                const bgColor = type === 'success' ? 'bg-green-500/90' : 'bg-red-500/90';
                const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
                
                toast.className = `\${bgColor} backdrop-blur-md text-white px-6 py-4 rounded-2xl shadow-2xl flex items-center gap-3 toast min-w-[300px] border border-white/20`;
                toast.innerHTML = `
                    <i class=\"fas \${icon} text-xl\"></i>
                    <span class=\"font-bold\">\${message}</span>
                `;
                
                container.appendChild(toast);
                
                setTimeout(() => {
                    toast.classList.add('fadeOut');
                    setTimeout(() => toast.remove(), 300);
                }, 3000);
            }

            document.addEventListener('click', async (e) => {
                const btn = e.target.closest('[data-add-to-cart]');
                if (!btn) return;
                
                e.preventDefault();
                const productId = btn.dataset.productId;
                const originalText = btn.innerHTML;
                
                // Visual feedback on button
                btn.disabled = true;
                btn.innerHTML = '<i class=\"fas fa-spinner animate-spin\"></i>';
                
                try {
                    const response = await fetch(`/cart/add/\${productId}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });
                    
                    const data = await response.json();
                    
                    if (data.success) {
                        showToast(data.message);
                        document.getElementById('cart-count').innerText = data.cartCount;
                    } else {
                        showToast(data.message, 'error');
                    }
                } catch (error) {
                    showToast('Failed to add product', 'error');
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            });
        </script>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "VapeShop - Premium Vaping";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  392 => 128,  376 => 74,  360 => 73,  343 => 6,  263 => 168,  222 => 129,  220 => 128,  210 => 120,  204 => 116,  195 => 110,  192 => 109,  190 => 108,  184 => 105,  180 => 103,  174 => 102,  171 => 101,  166 => 100,  163 => 99,  161 => 98,  158 => 97,  152 => 93,  150 => 92,  131 => 75,  128 => 74,  126 => 73,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"dark\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}VapeShop - Premium Vaping{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>💨</text></svg>\">
        
        <!-- Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap\" rel=\"stylesheet\">
        
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
        
        <!-- Tailwind CSS -->
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            neon: {
                                green: '#39ff14',
                                purple: '#c026d3', // fuchsia-600
                                blue: '#00f3ff'
                            }
                        },
                        boxShadow: {
                            'neon-green': '0 0 10px #39ff14, 0 0 20px #39ff14',
                            'neon-purple': '0 0 10px #c026d3, 0 0 20px #c026d3',
                        }
                    }
                }
            }
        </script>
        <style>
            .glass {
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            #toast-container {
                position: fixed;
                bottom: 2rem;
                right: 2rem;
                z-index: 100;
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            .toast {
                animation: slideIn 0.3s ease forwards;
            }
            @keyframes slideIn {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            .toast.fadeOut {
                animation: slideOut 0.3s ease forwards;
            }
            @keyframes slideOut {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(100%); opacity: 0; }
            }
        </style>

        {% block stylesheets %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </head>
    <body class=\"bg-[#0a0a0f] text-gray-200 font-sans min-h-screen flex flex-col selection:bg-neon-green selection:text-black\">
        
        <!-- Navbar -->
        <nav class=\"fixed w-full z-50 glass border-b border-white/10\">
            <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
                <div class=\"flex items-center justify-between h-20\">
                    <div class=\"flex items-center\">
                        <a href=\"/\" class=\"text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-neon-green to-neon-blue tracking-tighter hover:scale-105 transition-transform\">
                            VapeShop
                        </a>
                    </div>
                    <div class=\"hidden md:block\">
                        <div class=\"ml-10 flex items-baseline space-x-8\">
                            <a href=\"/\" class=\"hover:text-neon-green transition-colors px-3 py-2 rounded-md text-sm font-medium\">Home</a>
                            <a href=\"/products\" class=\"hover:text-neon-green transition-colors px-3 py-2 rounded-md text-sm font-medium\">Shop</a>
                            
                            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_VENTE') %}
                                <a href=\"/admin\" class=\"text-neon-purple border border-neon-purple/50 hover:bg-neon-purple hover:text-white transition-all px-3 py-2 rounded-md text-sm font-bold shadow-[0_0_10px_rgba(192,38,211,0.2)]\">
                                    Dashboard
                                </a>
                            {% endif %}

                            {% set cart = app.session.get('cart', []) %}
                            {% set cartCount = 0 %}
                            {% for qty in cart %}
                                {% set cartCount = cartCount + qty %}
                            {% endfor %}
                            <a href=\"/cart\" class=\"group flex items-center hover:text-neon-green transition-colors px-3 py-2 rounded-md text-sm font-medium\">
                                <span class=\"group-hover:drop-shadow-[0_0_5px_rgba(57,255,20,0.8)]\">Cart</span>
                                <span id=\"cart-count\" class=\"ml-2 bg-neon-purple text-white text-xs px-2 py-0.5 rounded-full\">{{ cartCount }}</span>
                            </a>
                            
                            {% if app.user %}
                                <div class=\"flex items-center gap-4\">
                                    <span class=\"text-xs text-gray-500\">Hi, {{ app.user.firstName ?? app.user.email }}</span>
                                    <a href=\"/logout\" class=\"bg-white/10 hover:bg-red-500 hover:text-white transition-all duration-300 px-4 py-2 rounded-lg text-sm font-bold\">
                                        Logout
                                    </a>
                                </div>
                            {% else %}
                                <a href=\"/login\" class=\"bg-white/10 hover:bg-neon-green hover:text-black hover:shadow-neon-green transition-all duration-300 px-4 py-2 rounded-lg text-sm font-bold\">
                                    Login
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class=\"flex-grow pt-20\">
            {% block body %}{% endblock %}
        </main>

        <!-- Footer -->
        <footer class=\"glass border-t border-white/10 mt-20 bg-black/50\">
            <div class=\"max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8\">
                <div class=\"grid grid-cols-1 md:grid-cols-4 gap-12\">
                    <div class=\"col-span-1 md:col-span-2\">
                        <span class=\"text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-neon-green to-neon-blue tracking-tighter\">VapeShop</span>
                        <p class=\"mt-4 text-gray-400 max-w-sm\">
                            The industry leader in premium vaping equipment and professional-grade e-liquids. Designed for the discerning vaper.
                        </p>
                        <div class=\"mt-6 flex space-x-6 text-gray-500\">
                            <a href=\"#\" class=\"hover:text-neon-green transition-colors\"><i class=\"fab fa-facebook-f text-xl\"></i></a>
                            <a href=\"#\" class=\"hover:text-neon-blue transition-colors\"><i class=\"fab fa-instagram text-xl\"></i></a>
                            <a href=\"#\" class=\"hover:text-neon-purple transition-colors\"><i class=\"fab fa-twitter text-xl\"></i></a>
                            <a href=\"#\" class=\"hover:text-white transition-colors\"><i class=\"fab fa-tiktok text-xl\"></i></a>
                        </div>
                    </div>
                    <div>
                        <h3 class=\"text-white font-bold uppercase tracking-widest text-xs mb-6\">Quick Links</h3>
                        <ul class=\"space-y-4 text-sm text-gray-400\">
                            <li><a href=\"/\" class=\"hover:text-neon-green transition-colors\">Home</a></li>
                            <li><a href=\"/products\" class=\"hover:text-neon-blue transition-colors\">All Products</a></li>
                            <li><a href=\"/cart\" class=\"hover:text-neon-purple transition-colors\">Shopping Cart</a></li>
                            <li><a href=\"/admin\" class=\"hover:text-white transition-colors\">Admin Panel</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class=\"text-white font-bold uppercase tracking-widest text-xs mb-6\">Support</h3>
                        <ul class=\"space-y-4 text-sm text-gray-400\">
                            <li><a href=\"#\" class=\"hover:text-white transition-colors\">Shipping Policy</a></li>
                            <li><a href=\"#\" class=\"hover:text-white transition-colors\">Terms of Service</a></li>
                            <li><a href=\"#\" class=\"hover:text-white transition-colors\">Contact Us</a></li>
                            <li><a href=\"#\" class=\"hover:text-white transition-colors\">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4\">
                    <p class=\"text-xs text-gray-600\">
                        &copy; {{ \"now\"|date(\"Y\") }} VapeShop Inc. Handcrafted with passion.
                    </p>
                    <div class=\"flex gap-4\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg\" alt=\"Visa\" class=\"h-4 opacity-30 grayscale hover:grayscale-0 transition-all cursor-pointer\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg\" alt=\"Mastercard\" class=\"h-4 opacity-30 grayscale hover:grayscale-0 transition-all cursor-pointer\">
                    </div>
                </div>
            </div>
        </footer>

        <div id=\"toast-container\"></div>

        <script>
            function showToast(message, type = 'success') {
                const container = document.getElementById('toast-container');
                const toast = document.createElement('div');
                const bgColor = type === 'success' ? 'bg-green-500/90' : 'bg-red-500/90';
                const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
                
                toast.className = `\${bgColor} backdrop-blur-md text-white px-6 py-4 rounded-2xl shadow-2xl flex items-center gap-3 toast min-w-[300px] border border-white/20`;
                toast.innerHTML = `
                    <i class=\"fas \${icon} text-xl\"></i>
                    <span class=\"font-bold\">\${message}</span>
                `;
                
                container.appendChild(toast);
                
                setTimeout(() => {
                    toast.classList.add('fadeOut');
                    setTimeout(() => toast.remove(), 300);
                }, 3000);
            }

            document.addEventListener('click', async (e) => {
                const btn = e.target.closest('[data-add-to-cart]');
                if (!btn) return;
                
                e.preventDefault();
                const productId = btn.dataset.productId;
                const originalText = btn.innerHTML;
                
                // Visual feedback on button
                btn.disabled = true;
                btn.innerHTML = '<i class=\"fas fa-spinner animate-spin\"></i>';
                
                try {
                    const response = await fetch(`/cart/add/\${productId}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });
                    
                    const data = await response.json();
                    
                    if (data.success) {
                        showToast(data.message);
                        document.getElementById('cart-count').innerText = data.cartCount;
                    } else {
                        showToast(data.message, 'error');
                    }
                } catch (error) {
                    showToast('Failed to add product', 'error');
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }
            });
        </script>
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\base.html.twig");
    }
}
