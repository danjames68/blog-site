<?php

/* partials/blog-list-item.html.twig */
class __TwigTemplate_8cd4d516f5eed0c9555bbc01ce58988007f42ac14d14b7bae1a16db7a53c78ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"card\">
    ";
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 4
            echo "    <div class=\"card-image\">
        <a href=\"";
            // line 5
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 800, 1 => 400], "method"), "html", []);
            echo "</a>
    </div>
    ";
        }
        // line 8
        echo "    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            ";
        // line 10
        $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
        <div class=\"card-title\">
        ";
        // line 13
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 13)->display(array_merge($context, ["title_level" => "h5"]));
        // line 14
        echo "        </div>
    </div>
    <div class=\"card-body\">
        ";
        // line 17
        if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 18
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
        ";
        } else {
            // line 20
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        ";
        }
        // line 22
        echo "    </div>
    <div class=\"card-footer\">
        ";
        // line 24
        $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 24)->display($context);
        // line 25
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  73 => 24,  69 => 22,  63 => 20,  57 => 18,  55 => 17,  50 => 14,  48 => 13,  44 => 11,  42 => 10,  38 => 8,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\">
    {% set image = page.media.images|first %}
    {% if image %}
    <div class=\"card-image\">
        <a href=\"{{ page.url }}\">{{ image.cropZoom(800,400).html }}</a>
    </div>
    {% endif %}
    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            {% include 'partials/blog/date.html.twig' %}
    </div>
        <div class=\"card-title\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
        </div>
    </div>
    <div class=\"card-body\">
        {% if page.summary != page.content %}
            {{ page.summary|raw }}
        {% else %}
            {{ page.content|raw }}
        {% endif %}
    </div>
    <div class=\"card-footer\">
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
</div>

", "partials/blog-list-item.html.twig", "/Users/dan/Sites/blog-site/user/themes/quark/templates/partials/blog-list-item.html.twig");
    }
}
