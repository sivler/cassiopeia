<?php

/* CassioEvalBundle:Example/Location:edit_location.html.twig */
class __TwigTemplate_7ec234de03da414aeb0aaa5c6c193641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MainBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["section"] = "examples";
        // line 60
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 61
        $context["article_link"] = "http://showmethecode.es/php/symfony/symfony2-selects-dependientes-mediante-eventos/";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function(){
            \$(\"#location_country\").change(function(){
                var data = {
                    country_id: \$(this).val()
                };

                \$.ajax({
                    type: 'post',
                    url: '";
        // line 16
        echo $this->env->getExtension('routing')->getPath("select_provinces");
        echo "',
                    data: data,
                    success: function(data) {
                        \$('#location_province').html(data);
                        \$('#location_city').html(\"<option>Ciudad</option>\");
                    }
                });
            });

            \$(\"#location_province\").change(function(){
                var data = {
                    province_id: \$(this).val()
                };

                \$.ajax({
                    type: 'post',
                    url: '";
        // line 32
        echo $this->env->getExtension('routing')->getPath("select_cities");
        echo "',
                    data: data,
                    success: function(data) {
                        \$('#location_city').html(data);
                    }
                });
            });
        });
    </script>
";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "    <div class=\"row\">
        <div class=\"span12\">
            <form action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("examples_dependent_selects_location_edit", array("slug" => $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "slug"))), "html", null, true);
        echo "\" method=\"POST\" novalidate>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'row');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'row');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "province"), 'row');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'row');
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <button type=\"submit\" class=\"btn btn-success\">
                    Guardar
                </button>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CassioEvalBundle:Example/Location:edit_location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  100 => 48,  53 => 17,  58 => 13,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 32,  67 => 20,  63 => 19,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  94 => 28,  89 => 20,  85 => 43,  75 => 17,  68 => 14,  56 => 9,  87 => 26,  28 => 60,  38 => 6,  25 => 3,  21 => 2,  24 => 3,  31 => 4,  26 => 3,  19 => 1,  93 => 28,  88 => 44,  78 => 36,  46 => 10,  44 => 12,  27 => 20,  79 => 18,  72 => 16,  69 => 25,  47 => 11,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 50,  101 => 32,  98 => 31,  96 => 47,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 16,  50 => 14,  43 => 10,  41 => 8,  35 => 5,  32 => 4,  29 => 21,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 51,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 50,  92 => 46,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 16,  60 => 6,  57 => 12,  54 => 13,  51 => 14,  48 => 11,  45 => 9,  42 => 9,  39 => 9,  36 => 5,  33 => 4,  30 => 61,);
    }
}
