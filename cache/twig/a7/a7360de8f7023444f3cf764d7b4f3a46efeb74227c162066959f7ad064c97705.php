<?php

/* partials/blog-item.html.twig */
class __TwigTemplate_08d28e7ea6ac73ee11d0f93c33f3755319fb5705abf6a974c485fba74be9cb07 extends Twig_Template
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
        echo "<div class=\"content-item h-entry\">



";
        // line 5
        if ( !($context["hero_image_name"] ?? null)) {
            // line 6
            echo "    <div class=\"content-title text-center\">
        ";
            // line 7
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 7)->display(array_merge($context, ["title_level" => "h2"]));
            // line 8
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
                // line 9
                echo "        <h3 >";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []);
                echo "</h3>
        ";
            }
            // line 11
            echo "        ";
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 11)->display($context);
            // line 12
            echo "        ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 12)->display($context);
            // line 13
            echo "    </div>
";
        }
        // line 15
        echo "
    <div class=\"e-content\">
        ";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>

    ";
        // line 20
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", []))) {
            // line 21
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 21)->display($context);
            // line 22
            echo "    ";
        }
        // line 23
        echo "

</div>

<p class=\"prev-next text-center\">


    ";
        // line 30
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 31
            echo "            <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
            echo "\"><i class=\"fa fa-angle-left\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.BLOG.ITEM.PREV_POST");
            echo "</a>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 35
            echo "        <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.BLOG.ITEM.NEXT_POST");
            echo " <i class=\"fa fa-angle-right\"></i></a>
    ";
        }
        // line 37
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  93 => 35,  91 => 34,  88 => 33,  80 => 31,  78 => 30,  69 => 23,  66 => 22,  63 => 21,  61 => 20,  55 => 17,  51 => 15,  47 => 13,  44 => 12,  41 => 11,  35 => 9,  32 => 8,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-item h-entry\">



{% if not hero_image_name %}
    <div class=\"content-title text-center\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
        {% if page.header.subtitle %}
        <h3 >{{ page.header.subtitle }}</h3>
        {% endif %}
        {% include 'partials/blog/date.html.twig' %}
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
{% endif %}

    <div class=\"e-content\">
        {{ page.content|raw }}
    </div>

    {% if page.header.continue_link is same as(true) and config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}


</div>

<p class=\"prev-next text-center\">


    {% if not page.isLast %}
            <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-angle-left\"></i> {{ 'THEME_QUARK.BLOG.ITEM.PREV_POST'|t }}</a>
    {% endif %}

    {% if not page.isFirst %}
        <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'THEME_QUARK.BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
    {% endif %}
</p>
", "partials/blog-item.html.twig", "/Users/dan/Sites/blog-site/user/themes/quark/templates/partials/blog-item.html.twig");
    }
}
