<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_d7a518b14bbfdc9954c896ac20e05229 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  357 => 123,  353 => 121,  351 => 120,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  303 => 106,  300 => 105,  297 => 104,  291 => 102,  274 => 97,  265 => 96,  231 => 83,  190 => 76,  185 => 74,  806 => 488,  788 => 484,  745 => 476,  723 => 473,  702 => 470,  694 => 468,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  244 => 136,  188 => 90,  170 => 84,  165 => 83,  153 => 77,  97 => 41,  127 => 60,  90 => 42,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 487,  800 => 186,  792 => 485,  789 => 181,  787 => 180,  784 => 482,  776 => 175,  774 => 174,  771 => 481,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 475,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 472,  703 => 147,  701 => 146,  698 => 469,  690 => 467,  688 => 138,  687 => 137,  686 => 466,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 460,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 406,  518 => 88,  515 => 404,  506 => 82,  503 => 81,  500 => 80,  494 => 78,  492 => 77,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  366 => 33,  363 => 126,  350 => 26,  344 => 119,  342 => 23,  335 => 21,  332 => 116,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 101,  281 => 385,  276 => 378,  271 => 371,  266 => 363,  263 => 95,  260 => 360,  255 => 93,  253 => 339,  250 => 338,  248 => 333,  245 => 332,  225 => 295,  222 => 294,  215 => 277,  212 => 78,  210 => 267,  207 => 266,  202 => 77,  197 => 246,  194 => 245,  191 => 243,  186 => 236,  181 => 229,  174 => 65,  161 => 63,  146 => 178,  134 => 158,  124 => 129,  114 => 108,  81 => 40,  23 => 1,  129 => 145,  65 => 15,  237 => 139,  233 => 301,  226 => 135,  205 => 117,  184 => 230,  126 => 144,  118 => 41,  110 => 22,  84 => 40,  76 => 34,  175 => 113,  172 => 112,  104 => 32,  100 => 48,  53 => 10,  58 => 14,  34 => 4,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 91,  294 => 90,  285 => 3,  283 => 100,  278 => 98,  268 => 370,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  229 => 136,  220 => 287,  214 => 69,  177 => 65,  169 => 207,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 377,  269 => 94,  254 => 92,  243 => 92,  240 => 323,  238 => 309,  235 => 85,  230 => 300,  227 => 298,  224 => 81,  221 => 77,  219 => 76,  217 => 286,  208 => 68,  204 => 264,  179 => 221,  159 => 193,  143 => 51,  135 => 62,  119 => 40,  102 => 17,  71 => 19,  67 => 20,  63 => 19,  59 => 13,  201 => 92,  196 => 92,  183 => 116,  171 => 213,  166 => 206,  163 => 82,  158 => 80,  156 => 62,  151 => 185,  142 => 59,  138 => 54,  136 => 48,  121 => 128,  117 => 39,  105 => 18,  91 => 56,  62 => 27,  49 => 11,  94 => 34,  89 => 47,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  87 => 41,  28 => 3,  38 => 7,  25 => 35,  21 => 2,  24 => 3,  31 => 3,  26 => 11,  19 => 1,  93 => 30,  88 => 25,  78 => 26,  46 => 10,  44 => 9,  27 => 3,  79 => 21,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 20,  115 => 43,  111 => 107,  108 => 19,  101 => 31,  98 => 30,  96 => 67,  83 => 25,  74 => 27,  66 => 12,  55 => 13,  52 => 12,  50 => 22,  43 => 11,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 93,  193 => 73,  189 => 237,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 72,  164 => 200,  162 => 57,  154 => 186,  149 => 179,  147 => 75,  144 => 173,  141 => 73,  133 => 55,  130 => 76,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 35,  106 => 51,  103 => 32,  99 => 68,  95 => 50,  92 => 27,  86 => 46,  82 => 28,  80 => 30,  73 => 33,  64 => 13,  60 => 14,  57 => 12,  54 => 13,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 5,);
    }
}
