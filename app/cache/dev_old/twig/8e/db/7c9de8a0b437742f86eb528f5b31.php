<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_8edb7c9de8a0b437742f86eb528f5b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  356 => 328,  339 => 316,  297 => 276,  295 => 275,  20 => 1,  77 => 25,  70 => 24,  127 => 28,  97 => 41,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  789 => 181,  787 => 180,  784 => 179,  776 => 175,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 160,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  701 => 146,  698 => 145,  690 => 139,  688 => 138,  687 => 137,  686 => 136,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 120,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  503 => 81,  500 => 80,  494 => 78,  492 => 77,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  366 => 33,  363 => 32,  350 => 26,  344 => 318,  342 => 317,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  281 => 385,  276 => 378,  271 => 371,  266 => 363,  263 => 362,  260 => 360,  255 => 350,  253 => 339,  250 => 338,  248 => 333,  245 => 332,  225 => 295,  222 => 294,  215 => 277,  212 => 276,  197 => 246,  194 => 245,  191 => 243,  186 => 236,  181 => 229,  174 => 214,  161 => 199,  146 => 178,  124 => 129,  114 => 108,  81 => 29,  129 => 145,  175 => 113,  172 => 112,  237 => 139,  233 => 301,  226 => 135,  205 => 117,  184 => 230,  126 => 144,  118 => 41,  110 => 22,  76 => 27,  58 => 18,  104 => 37,  100 => 36,  23 => 1,  213 => 80,  210 => 267,  207 => 266,  202 => 263,  195 => 36,  134 => 158,  90 => 32,  84 => 35,  65 => 22,  53 => 17,  34 => 5,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 105,  337 => 22,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 3,  283 => 88,  278 => 384,  268 => 370,  264 => 84,  258 => 351,  252 => 80,  247 => 78,  241 => 77,  229 => 136,  220 => 287,  214 => 69,  177 => 65,  169 => 207,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 377,  269 => 94,  254 => 92,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  230 => 300,  227 => 298,  224 => 71,  221 => 77,  219 => 76,  217 => 286,  208 => 68,  204 => 264,  179 => 221,  159 => 193,  143 => 56,  135 => 62,  119 => 114,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 13,  38 => 12,  28 => 6,  26 => 6,  201 => 92,  196 => 90,  183 => 116,  171 => 213,  166 => 206,  163 => 19,  158 => 79,  156 => 192,  151 => 185,  142 => 59,  138 => 54,  136 => 165,  121 => 128,  117 => 19,  105 => 18,  91 => 34,  62 => 21,  49 => 14,  94 => 38,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  24 => 2,  87 => 33,  31 => 8,  25 => 35,  21 => 2,  19 => 1,  93 => 30,  88 => 31,  78 => 18,  46 => 14,  44 => 11,  27 => 7,  79 => 29,  72 => 22,  69 => 13,  47 => 15,  40 => 11,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 107,  108 => 19,  101 => 43,  98 => 34,  96 => 35,  83 => 31,  74 => 27,  66 => 25,  55 => 38,  52 => 10,  50 => 16,  43 => 11,  41 => 10,  35 => 9,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 262,  193 => 73,  189 => 237,  187 => 84,  182 => 66,  176 => 220,  173 => 24,  168 => 72,  164 => 200,  162 => 57,  154 => 186,  149 => 179,  147 => 58,  144 => 173,  141 => 172,  133 => 55,  130 => 76,  125 => 83,  122 => 43,  116 => 113,  112 => 39,  109 => 47,  106 => 45,  103 => 69,  99 => 68,  95 => 34,  92 => 28,  86 => 46,  82 => 28,  80 => 30,  73 => 23,  64 => 21,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 13,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}