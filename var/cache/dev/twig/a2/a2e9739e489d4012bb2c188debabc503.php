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

/* payment/index.html.twig */
class __TwigTemplate_8710f65171fdd2b4f845e87517b02d3a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/index.html.twig", 1);
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

        yield "Payment Simulation | VapeShop";
        
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
        yield "<div class=\"max-w-xl mx-auto px-4 py-12\">
    <div class=\"glass p-8 rounded-3xl border border-white/10\">
        <div class=\"text-center mb-8\">
            <div class=\"w-16 h-16 bg-neon-blue/20 rounded-full flex items-center justify-center mx-auto mb-4\">
                <i class=\"fas fa-credit-card text-2xl text-neon-blue\"></i>
            </div>
            <h1 class=\"text-3xl font-bold text-white mb-2\">Secure Checkout</h1>
            <p class=\"text-gray-400\">Order #";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield " • <span class=\"text-neon-blue font-bold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "totalPrice", [], "any", false, false, false, 13), 3), "html", null, true);
        yield " TND</span></p>
        </div>

        <form action=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_process", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" method=\"POST\" id=\"payment-form\" class=\"space-y-6\">
            <div class=\"space-y-4\">
                <!-- Cardholder Name -->
                <div>
                    <label class=\"block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">Cardholder Name</label>
                    <input type=\"text\" name=\"cardholder_name\" required placeholder=\"J. DOE\" 
                           class=\"w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition-all\">
                </div>

                <!-- Card Number -->
                <div>
                    <label class=\"block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">Card Number</label>
                    <div class=\"relative\">
                        <input type=\"text\" name=\"card_number\" id=\"card-number\" required placeholder=\"0000 0000 0000 0000\" maxlength=\"19\"
                               class=\"w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition-all pr-12\">
                        <div class=\"absolute right-4 top-1/2 -translate-y-1/2 text-gray-500\" id=\"card-icon\">
                            <i class=\"fab fa-cc-visa text-xl\"></i>
                        </div>
                    </div>
                </div>

                <!-- Expiry and CVV -->
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <label class=\"block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">Expiry Date</label>
                        <input type=\"text\" name=\"expiry\" id=\"expiry\" required placeholder=\"MM/YY\" maxlength=\"5\"
                               class=\"w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition-all text-center\">
                    </div>
                    <div>
                        <label class=\"block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">CVV</label>
                        <input type=\"text\" name=\"cvv\" id=\"cvv\" required placeholder=\"***\" maxlength=\"3\"
                               class=\"w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition-all text-center\">
                    </div>
                </div>
            </div>

            <div class=\"pt-4\">
                <button type=\"submit\" id=\"pay-button\" class=\"w-full bg-neon-blue text-black font-bold text-lg py-4 rounded-xl hover:shadow-[0_0_20px_rgba(0,243,255,0.4)] transition-all transform active:scale-95 flex items-center justify-center gap-3\">
                    <span id=\"button-text\">Pay ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 54, $this->source); })()), "totalPrice", [], "any", false, false, false, 54), 3), "html", null, true);
        yield " TND</span>
                    <div id=\"loader\" class=\"hidden animate-spin h-5 w-5 border-2 border-black border-t-transparent rounded-full\"></div>
                </button>
            </div>
            
            <p class=\"text-[10px] text-gray-500 text-center uppercase tracking-widest leading-relaxed\">
                <i class=\"fas fa-shield-alt mr-1\"></i> Simulated Encrypted Transaction <br>
                This is a test environment. No real funds will be processed.
            </p>
        </form>
    </div>
</div>

<script>
    // Simple Card Formatting
    const cardNumber = document.getElementById('card-number');
    const expiry = document.getElementById('expiry');
    const cvv = document.getElementById('cvv');
    const form = document.getElementById('payment-form');
    const payBtn = document.getElementById('pay-button');
    const btnText = document.getElementById('button-text');
    const loader = document.getElementById('loader');

    cardNumber.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\\D/g, '');
        let formatted = value.match(/.{1,4}/g)?.join(' ') || '';
        e.target.value = formatted;
        
        // Simple card type detection icon
        const icon = document.getElementById('card-icon').querySelector('i');
        if (value.startsWith('4')) icon.className = 'fab fa-cc-visa text-xl text-blue-400';
        else if (value.startsWith('5')) icon.className = 'fab fa-cc-mastercard text-xl text-orange-400';
        else if (value.startsWith('3')) icon.className = 'fab fa-cc-amex text-xl text-green-400';
        else icon.className = 'fas fa-credit-card text-xl';
    });

    expiry.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\\D/g, '');
        if (value.length > 2) {
            e.target.value = value.slice(0, 2) + '/' + value.slice(2, 4);
        } else {
            e.target.value = value;
        }
    });

    cvv.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\\D/g, '');
    });

    form.addEventListener('submit', function(e) {
        payBtn.disabled = true;
        btnText.innerText = 'Authorizing...';
        loader.classList.remove('hidden');
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "payment/index.html.twig";
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
        return array (  143 => 54,  102 => 16,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Payment Simulation | VapeShop{% endblock %}

{% block body %}
<div class=\"max-w-xl mx-auto px-4 py-12\">
    <div class=\"glass p-8 rounded-3xl border border-white/10\">
        <div class=\"text-center mb-8\">
            <div class=\"w-16 h-16 bg-neon-blue/20 rounded-full flex items-center justify-center mx-auto mb-4\">
                <i class=\"fas fa-credit-card text-2xl text-neon-blue\"></i>
            </div>
            <h1 class=\"text-3xl font-bold text-white mb-2\">Secure Checkout</h1>
            <p class=\"text-gray-400\">Order #{{ order.id }} • <span class=\"text-neon-blue font-bold\">{{ order.totalPrice|number_format(3) }} TND</span></p>
        </div>

        <form action=\"{{ path('app_payment_process', {'id': order.id}) }}\" method=\"POST\" id=\"payment-form\" class=\"space-y-6\">
            <div class=\"space-y-4\">
                <!-- Cardholder Name -->
                <div>
                    <label class=\"block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">Cardholder Name</label>
                    <input type=\"text\" name=\"cardholder_name\" required placeholder=\"J. DOE\" 
                           class=\"w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition-all\">
                </div>

                <!-- Card Number -->
                <div>
                    <label class=\"block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">Card Number</label>
                    <div class=\"relative\">
                        <input type=\"text\" name=\"card_number\" id=\"card-number\" required placeholder=\"0000 0000 0000 0000\" maxlength=\"19\"
                               class=\"w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition-all pr-12\">
                        <div class=\"absolute right-4 top-1/2 -translate-y-1/2 text-gray-500\" id=\"card-icon\">
                            <i class=\"fab fa-cc-visa text-xl\"></i>
                        </div>
                    </div>
                </div>

                <!-- Expiry and CVV -->
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <label class=\"block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">Expiry Date</label>
                        <input type=\"text\" name=\"expiry\" id=\"expiry\" required placeholder=\"MM/YY\" maxlength=\"5\"
                               class=\"w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition-all text-center\">
                    </div>
                    <div>
                        <label class=\"block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">CVV</label>
                        <input type=\"text\" name=\"cvv\" id=\"cvv\" required placeholder=\"***\" maxlength=\"3\"
                               class=\"w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition-all text-center\">
                    </div>
                </div>
            </div>

            <div class=\"pt-4\">
                <button type=\"submit\" id=\"pay-button\" class=\"w-full bg-neon-blue text-black font-bold text-lg py-4 rounded-xl hover:shadow-[0_0_20px_rgba(0,243,255,0.4)] transition-all transform active:scale-95 flex items-center justify-center gap-3\">
                    <span id=\"button-text\">Pay {{ order.totalPrice|number_format(3) }} TND</span>
                    <div id=\"loader\" class=\"hidden animate-spin h-5 w-5 border-2 border-black border-t-transparent rounded-full\"></div>
                </button>
            </div>
            
            <p class=\"text-[10px] text-gray-500 text-center uppercase tracking-widest leading-relaxed\">
                <i class=\"fas fa-shield-alt mr-1\"></i> Simulated Encrypted Transaction <br>
                This is a test environment. No real funds will be processed.
            </p>
        </form>
    </div>
</div>

<script>
    // Simple Card Formatting
    const cardNumber = document.getElementById('card-number');
    const expiry = document.getElementById('expiry');
    const cvv = document.getElementById('cvv');
    const form = document.getElementById('payment-form');
    const payBtn = document.getElementById('pay-button');
    const btnText = document.getElementById('button-text');
    const loader = document.getElementById('loader');

    cardNumber.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\\D/g, '');
        let formatted = value.match(/.{1,4}/g)?.join(' ') || '';
        e.target.value = formatted;
        
        // Simple card type detection icon
        const icon = document.getElementById('card-icon').querySelector('i');
        if (value.startsWith('4')) icon.className = 'fab fa-cc-visa text-xl text-blue-400';
        else if (value.startsWith('5')) icon.className = 'fab fa-cc-mastercard text-xl text-orange-400';
        else if (value.startsWith('3')) icon.className = 'fab fa-cc-amex text-xl text-green-400';
        else icon.className = 'fas fa-credit-card text-xl';
    });

    expiry.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\\D/g, '');
        if (value.length > 2) {
            e.target.value = value.slice(0, 2) + '/' + value.slice(2, 4);
        } else {
            e.target.value = value;
        }
    });

    cvv.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\\D/g, '');
    });

    form.addEventListener('submit', function(e) {
        payBtn.disabled = true;
        btnText.innerText = 'Authorizing...';
        loader.classList.remove('hidden');
    });
</script>
{% endblock %}
", "payment/index.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\payment\\index.html.twig");
    }
}
