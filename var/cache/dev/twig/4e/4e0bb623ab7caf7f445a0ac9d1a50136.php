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

/* admin/dashboard.html.twig */
class __TwigTemplate_c250e1eab3e91f90fef2342e758f231d extends Template
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
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 4
        yield "    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VENTE") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 5
            yield "        Sales Management
    ";
        } else {
            // line 7
            yield "        Dashboard Oversight
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        yield "    <style>
        :root {
            --neon-green: #39FF14;
            --neon-purple: #BC13FE;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            border-color: var(--neon-purple);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, var(--neon-green), var(--neon-purple));
        }

        .stat-label {
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #f8fafc;
        }

        .recent-orders {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 1.5rem;
        }

        .table-custom {
            width: 100%;
            border-collapse: collapse;
        }

        .table-custom th {
            text-align: left;
            padding: 1rem;
            color: #94a3b8;
            border-bottom: 1px solid var(--glass-border);
        }

        .table-custom td {
            padding: 1rem;
            color: #f8fafc;
            border-bottom: 1px solid var(--glass-border);
        }

        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-completed { background: rgba(57, 255, 20, 0.1); color: var(--neon-green); }
        .status-paid { background: rgba(0, 243, 255, 0.1); color: var(--neon-blue); }
        .status-pending { background: rgba(188, 19, 254, 0.1); color: var(--neon-purple); }
    </style>

    <div class=\"dashboard-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-label\">Total Revenue</div>
            <div class=\"stat-value\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 109, $this->source); })()), "revenue", [], "any", false, false, false, 109), 3, ".", ","), "html", null, true);
        yield " TND</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-label\">Total Orders</div>
            <div class=\"stat-value\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 113, $this->source); })()), "orders", [], "any", false, false, false, 113), "html", null, true);
        yield "</div>
        </div>
        ";
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 116
            yield "            <div class=\"stat-card\">
                <div class=\"stat-label\">Total Products</div>
                <div class=\"stat-value\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 118, $this->source); })()), "products", [], "any", false, false, false, 118), "html", null, true);
            yield "</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Active Users</div>
                <div class=\"stat-value\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 122, $this->source); })()), "users", [], "any", false, false, false, 122), "html", null, true);
            yield "</div>
            </div>
        ";
        }
        // line 125
        yield "    </div>

    <div class=\"dashboard-grid\" style=\"grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));\">
        ";
        // line 129
        yield "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 130
            yield "            <div class=\"recent-orders\" style=\"border-color: #ef4444;\">
                <h3 style=\"color: #ef4444; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;\">
                    <i class=\"fas fa-exclamation-triangle\"></i> Stock Alerts
                </h3>
                <table class=\"table-custom\">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["low_stock_products"]) || array_key_exists("low_stock_products", $context) ? $context["low_stock_products"] : (function () { throw new RuntimeError('Variable "low_stock_products" does not exist.', 143, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 144
                yield "                            <tr>
                                <td style=\"color: ";
                // line 145
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "stock", [], "any", false, false, false, 145) == 0)) ? ("#ef4444") : ("#f59e0b"));
                yield "; font-weight: bold;\">
                                    ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 146), "html", null, true);
                yield "
                                </td>
                                <td>
                                    <span class=\"status-badge\" style=\"background: ";
                // line 149
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "stock", [], "any", false, false, false, 149) == 0)) ? ("rgba(239, 68, 68, 0.1)") : ("rgba(245, 158, 11, 0.1)"));
                yield "; color: ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "stock", [], "any", false, false, false, 149) == 0)) ? ("#ef4444") : ("#f59e0b"));
                yield ";\">
                                        ";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "stock", [], "any", false, false, false, 150), "html", null, true);
                yield " UNIT";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "stock", [], "any", false, false, false, 150) > 1)) ? ("S") : (""));
                yield "
                                    </span>
                                </td>
                                <td>
                                    <a href=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", ["App\\Controller\\Admin\\ProductCrudController"], "method", false, false, false, 154), "setAction", ["edit"], "method", false, false, false, 154), "setEntityId", [CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 154)], "method", false, false, false, 154), "html", null, true);
                yield "\" class=\"btn btn-sm\" style=\"background: var(--neon-blue); color: black; font-weight: bold;\">
                                        RESTOCK
                                    </a>
                                </td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 160
                yield "                            <tr><td colspan=\"3\" style=\"text-align: center; color: var(--neon-green);\">✅ All products have sufficient stock.</td></tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 166
        yield "
        ";
        // line 168
        yield "        <div class=\"recent-orders\">
            <h3 style=\"color: var(--neon-green); margin-bottom: 1.5rem;\">Recent Activity</h3>
            <table class=\"table-custom\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_orders"]) || array_key_exists("recent_orders", $context) ? $context["recent_orders"] : (function () { throw new RuntimeError('Variable "recent_orders" does not exist.', 180, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 181
            yield "                        <tr>
                            <td>#";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 182), "html", null, true);
            yield "</td>
                            <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 183), "email", [], "any", false, false, false, 183), "html", null, true);
            yield "</td>
                            <td>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 184), 3), "html", null, true);
            yield " TND</td>
                            <td>
                                <span class=\"status-badge status-";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 186)), "html", null, true);
            yield "\">
                                    ";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 187), "html", null, true);
            yield "
                                </span>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 192
            yield "                        <tr><td colspan=\"4\" style=\"text-align: center;\">No recent orders.</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "                </tbody>
            </table>
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
        return "admin/dashboard.html.twig";
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
        return array (  364 => 194,  357 => 192,  347 => 187,  343 => 186,  338 => 184,  334 => 183,  330 => 182,  327 => 181,  322 => 180,  308 => 168,  305 => 166,  299 => 162,  292 => 160,  281 => 154,  272 => 150,  266 => 149,  260 => 146,  256 => 145,  253 => 144,  248 => 143,  233 => 130,  230 => 129,  225 => 125,  219 => 122,  212 => 118,  208 => 116,  206 => 115,  201 => 113,  194 => 109,  95 => 12,  85 => 11,  75 => 7,  71 => 5,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title %}
    {% if is_granted('ROLE_VENTE') and not is_granted('ROLE_ADMIN') %}
        Sales Management
    {% else %}
        Dashboard Oversight
    {% endif %}
{% endblock %}

{% block main %}
    <style>
        :root {
            --neon-green: #39FF14;
            --neon-purple: #BC13FE;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            border-color: var(--neon-purple);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, var(--neon-green), var(--neon-purple));
        }

        .stat-label {
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #f8fafc;
        }

        .recent-orders {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 1.5rem;
        }

        .table-custom {
            width: 100%;
            border-collapse: collapse;
        }

        .table-custom th {
            text-align: left;
            padding: 1rem;
            color: #94a3b8;
            border-bottom: 1px solid var(--glass-border);
        }

        .table-custom td {
            padding: 1rem;
            color: #f8fafc;
            border-bottom: 1px solid var(--glass-border);
        }

        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-completed { background: rgba(57, 255, 20, 0.1); color: var(--neon-green); }
        .status-paid { background: rgba(0, 243, 255, 0.1); color: var(--neon-blue); }
        .status-pending { background: rgba(188, 19, 254, 0.1); color: var(--neon-purple); }
    </style>

    <div class=\"dashboard-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-label\">Total Revenue</div>
            <div class=\"stat-value\">{{ stats.revenue|number_format(3, '.', ',') }} TND</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-label\">Total Orders</div>
            <div class=\"stat-value\">{{ stats.orders }}</div>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"stat-card\">
                <div class=\"stat-label\">Total Products</div>
                <div class=\"stat-value\">{{ stats.products }}</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Active Users</div>
                <div class=\"stat-value\">{{ stats.users }}</div>
            </div>
        {% endif %}
    </div>

    <div class=\"dashboard-grid\" style=\"grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));\">
        {# Stock Alerts #}
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"recent-orders\" style=\"border-color: #ef4444;\">
                <h3 style=\"color: #ef4444; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;\">
                    <i class=\"fas fa-exclamation-triangle\"></i> Stock Alerts
                </h3>
                <table class=\"table-custom\">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for p in low_stock_products %}
                            <tr>
                                <td style=\"color: {{ p.stock == 0 ? '#ef4444' : '#f59e0b' }}; font-weight: bold;\">
                                    {{ p.name }}
                                </td>
                                <td>
                                    <span class=\"status-badge\" style=\"background: {{ p.stock == 0 ? 'rgba(239, 68, 68, 0.1)' : 'rgba(245, 158, 11, 0.1)' }}; color: {{ p.stock == 0 ? '#ef4444' : '#f59e0b' }};\">
                                        {{ p.stock }} UNIT{{ p.stock > 1 ? 'S' : '' }}
                                    </span>
                                </td>
                                <td>
                                    <a href=\"{{ ea_url().setController('App\\\\Controller\\\\Admin\\\\ProductCrudController').setAction('edit').setEntityId(p.id) }}\" class=\"btn btn-sm\" style=\"background: var(--neon-blue); color: black; font-weight: bold;\">
                                        RESTOCK
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr><td colspan=\"3\" style=\"text-align: center; color: var(--neon-green);\">✅ All products have sufficient stock.</td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}

        {# Recent Activity #}
        <div class=\"recent-orders\">
            <h3 style=\"color: var(--neon-green); margin-bottom: 1.5rem;\">Recent Activity</h3>
            <table class=\"table-custom\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    {% for order in recent_orders %}
                        <tr>
                            <td>#{{ order.id }}</td>
                            <td>{{ order.user.email }}</td>
                            <td>{{ order.totalPrice|number_format(3) }} TND</td>
                            <td>
                                <span class=\"status-badge status-{{ order.status|lower }}\">
                                    {{ order.status }}
                                </span>
                            </td>
                        </tr>
                    {% else %}
                        <tr><td colspan=\"4\" style=\"text-align: center;\">No recent orders.</td></tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\xampp\\htdocs\\symfonyproject\\templates\\admin\\dashboard.html.twig");
    }
}
