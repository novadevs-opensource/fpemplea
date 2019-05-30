<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_bc0cff0b8cd3d4e7e9471dcc3e3e392dbbb726e250b5525120995bd93c6fbcca extends Twig_Template
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
        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = $this->getAttribute(($context["color_schemes"] ?? null), ($context["color_scheme"] ?? null), array(), "array");
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 66
        echo "a        { color: ";
        echo $this->getAttribute(($context["colors"] ?? null), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 77
        echo $this->getAttribute(($context["colors"] ?? null), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 90
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 108
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 112
        echo $this->getAttribute(($context["colors"] ?? null), "success", array());
        echo ";
    color: ";
        // line 113
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 117
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 126
        echo ".label:not([class*=label-]) {
    background: ";
        // line 127
        echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 139
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? null), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 154
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 163
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 205
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 221
        echo "span.badge {
    background-color: ";
        // line 222
        echo ($context["brand_color"] ?? null);
        echo ";
}

";
        // line 227
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 244
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 245
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 246
($context["color_scheme"] ?? null))) {
            // line 247
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 249
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 252
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 273
        echo ($context["brand_color"] ?? null);
        echo ";
    border-color: transparent;
    color: ";
        // line 275
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: ";
        // line 284
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 299
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 301
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 309
        echo $this->getAttribute(($context["colors"] ?? null), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 311
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}

";
        // line 315
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 321
        echo ($context["brand_color"] ?? null);
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 350
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 355
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 357
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 358
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 360
        echo "    color: ";
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 365
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 366
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 368
($context["color_scheme"] ?? null))) {
            // line 369
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 371
        echo "}

.has-error .error-block {
    color: ";
        // line 374
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 390
        echo $this->getAttribute(($context["colors"] ?? null), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 400
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 401
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 402
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 403
($context["color_scheme"] ?? null))) {
            // line 404
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 405
            echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 407
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 409
        if ((((isset($context["kernel_debug"]) || array_key_exists("kernel_debug", $context))) ? (_twig_default_filter(($context["kernel_debug"] ?? null), false)) : (false))) {
            // line 410
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 413
        echo "    z-index: 9999;
}

";
        // line 418
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 424
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 429
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 430
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 431
($context["color_scheme"] ?? null))) {
            // line 432
            echo "    border-top-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 434
        echo "}
.field-group .field-divider hr {
";
        // line 436
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 437
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 438
($context["color_scheme"] ?? null))) {
            // line 439
            echo "    border-top-color: #EEE;
";
        }
        // line 441
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 447
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 448
            echo "    border-bottom: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
    color: ";
            // line 449
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 450
($context["color_scheme"] ?? null))) {
            // line 451
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 452
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 454
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 458
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 459
            echo "    color: #555;
";
        } elseif (("light" ==         // line 460
($context["color_scheme"] ?? null))) {
            // line 461
            echo "    color: #777;
";
        }
        // line 463
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 470
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 471
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 472
($context["color_scheme"] ?? null))) {
            // line 473
            echo "    border: 1px solid #EEE;
";
        }
        // line 475
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 478
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 479
            echo "    color: #555;
";
        } elseif (("light" ==         // line 480
($context["color_scheme"] ?? null))) {
            // line 481
            echo "    color: #777;
";
        }
        // line 483
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 486
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 487
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 489
($context["color_scheme"] ?? null))) {
            // line 490
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 492
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 494
        echo "    padding: 11px 10px 9px;
}
";
        // line 496
        if (("light" == ($context["color_scheme"] ?? null))) {
            // line 497
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 501
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 511
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 515
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 518
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 526
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 533
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 537
        echo ($context["brand_color"] ?? null);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 540
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 543
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 549
        echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 562
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 563
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 564
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 577
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 587
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 588
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 589
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 611
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 619
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 620
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 626
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 634
        echo "
";
        // line 637
        echo ".content-wrapper {
    background: ";
        // line 638
        echo $this->getAttribute(($context["colors"] ?? null), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 646
        echo ".main-header {
    background: ";
        // line 647
        echo ($context["brand_color"] ?? null);
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 651
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 653
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 678
        echo ($context["brand_color"] ?? null);
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 697
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 754
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 770
        echo ".main-sidebar,
.wrapper {
";
        // line 772
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 773
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 774
($context["color_scheme"] ?? null))) {
            // line 775
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 777
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 783
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 784
            echo "    color: #777;
";
        } elseif (("light" ==         // line 785
($context["color_scheme"] ?? null))) {
            // line 786
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        }
        // line 788
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 793
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 794
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 795
($context["color_scheme"] ?? null))) {
            // line 796
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 798
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 815
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 816
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 818
($context["color_scheme"] ?? null))) {
            // line 819
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 821
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 827
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 828
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 829
($context["color_scheme"] ?? null))) {
            // line 830
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 832
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 841
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 842
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 845
($context["color_scheme"] ?? null))) {
            // line 846
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 849
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 858
        echo ".sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
";
        // line 863
        echo ".sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

";
        // line 869
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 886
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 887
            echo "    background: #333;
";
        } elseif (("light" ==         // line 888
($context["color_scheme"] ?? null))) {
            // line 889
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 891
        echo "}

";
        // line 894
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 895
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 896
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 897
($context["color_scheme"] ?? null))) {
            // line 898
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 900
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 910
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 915
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 916
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 917
($context["color_scheme"] ?? null))) {
            // line 918
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 920
            echo $this->getAttribute(($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        }
        // line 922
        echo "    margin: 10px 0 5px;
}

";
        // line 928
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 964
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 977
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
";
        // line 978
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 979
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 980
($context["color_scheme"] ?? null))) {
            // line 981
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 983
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 987
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1028
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1041
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1048
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1049
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 1050
($context["color_scheme"] ?? null))) {
            // line 1051
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 1053
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1055
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    border-color: ";
        // line 1056
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 1058
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1061
        echo ($context["brand_color"] ?? null);
        echo ";
    color: ";
        // line 1062
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1074
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1082
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1084
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    font-size: 16px;
}

";
        // line 1091
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1113
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1135
        echo "body.show .form-control {
";
        // line 1136
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1137
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1138
($context["color_scheme"] ?? null))) {
            // line 1139
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 1141
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1155
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1160
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    border: 1px solid ";
        // line 1161
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1162
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1167
        echo $this->getAttribute(($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 1168
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1184
        echo "
";
        // line 1188
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1212
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1259
        echo "    body.list table {
        background: ";
        // line 1260
        echo $this->getAttribute(($context["colors"] ?? null), "white", array());
        echo ";
        border: 1px solid ";
        // line 1261
        echo $this->getAttribute(($context["colors"] ?? null), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1267
        echo $this->getAttribute(($context["colors"] ?? null), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1271
        echo $this->getAttribute(($context["colors"] ?? null), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1276
        echo $this->getAttribute(($context["colors"] ?? null), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1282
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1287
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1288
            echo "        background: ";
            echo ($context["brand_color"] ?? null);
            echo ";
        color: ";
            // line 1289
            echo $this->getAttribute(($context["colors"] ?? null), "white", array());
            echo ";
";
        }
        // line 1291
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1294
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1295
            echo "        color: ";
            echo $this->getAttribute(($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1296
($context["color_scheme"] ?? null))) {
            // line 1297
            echo "        color: ";
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1299
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1307
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1310
        echo ($context["brand_color"] ?? null);
        echo ";
    }
    ";
        // line 1313
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1314
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1315
            echo "        border-left: 1px solid ";
            echo ($context["brand_color"] ?? null);
            echo ";
        border-top: 1px solid ";
            // line 1316
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1318
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1320
        echo $this->getAttribute(($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1329
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", array());
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1341
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1342
        echo $this->getAttribute(($context["colors"] ?? null), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1345
        echo $this->getAttribute(($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1385
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1861 => 1385,  1820 => 1345,  1814 => 1342,  1810 => 1341,  1795 => 1329,  1783 => 1320,  1779 => 1318,  1774 => 1316,  1769 => 1315,  1767 => 1314,  1764 => 1313,  1759 => 1310,  1753 => 1307,  1743 => 1299,  1737 => 1297,  1735 => 1296,  1730 => 1295,  1728 => 1294,  1723 => 1291,  1718 => 1289,  1713 => 1288,  1711 => 1287,  1703 => 1282,  1694 => 1276,  1686 => 1271,  1679 => 1267,  1670 => 1261,  1666 => 1260,  1663 => 1259,  1615 => 1212,  1590 => 1188,  1587 => 1184,  1571 => 1168,  1567 => 1167,  1559 => 1162,  1555 => 1161,  1551 => 1160,  1544 => 1155,  1531 => 1141,  1525 => 1139,  1523 => 1138,  1518 => 1137,  1516 => 1136,  1513 => 1135,  1492 => 1113,  1471 => 1091,  1464 => 1084,  1460 => 1082,  1453 => 1074,  1441 => 1062,  1437 => 1061,  1431 => 1058,  1426 => 1056,  1422 => 1055,  1418 => 1053,  1412 => 1051,  1410 => 1050,  1405 => 1049,  1403 => 1048,  1394 => 1041,  1381 => 1028,  1339 => 987,  1333 => 983,  1327 => 981,  1325 => 980,  1320 => 979,  1318 => 978,  1314 => 977,  1299 => 964,  1263 => 928,  1258 => 922,  1253 => 920,  1249 => 918,  1247 => 917,  1242 => 916,  1240 => 915,  1233 => 910,  1224 => 900,  1220 => 898,  1218 => 897,  1215 => 896,  1213 => 895,  1210 => 894,  1206 => 891,  1200 => 889,  1198 => 888,  1195 => 887,  1193 => 886,  1174 => 869,  1167 => 863,  1161 => 858,  1151 => 849,  1146 => 846,  1144 => 845,  1137 => 842,  1135 => 841,  1124 => 832,  1118 => 830,  1116 => 829,  1113 => 828,  1111 => 827,  1103 => 821,  1097 => 819,  1095 => 818,  1091 => 816,  1089 => 815,  1070 => 798,  1064 => 796,  1062 => 795,  1059 => 794,  1057 => 793,  1050 => 788,  1044 => 786,  1042 => 785,  1039 => 784,  1037 => 783,  1029 => 777,  1023 => 775,  1021 => 774,  1018 => 773,  1016 => 772,  1012 => 770,  996 => 754,  938 => 697,  916 => 678,  889 => 653,  885 => 651,  878 => 647,  875 => 646,  866 => 638,  863 => 637,  860 => 634,  853 => 626,  846 => 620,  842 => 619,  832 => 611,  809 => 589,  805 => 588,  802 => 587,  792 => 577,  777 => 564,  773 => 563,  770 => 562,  756 => 549,  747 => 543,  741 => 540,  735 => 537,  728 => 533,  718 => 526,  707 => 518,  701 => 515,  695 => 511,  686 => 501,  680 => 497,  678 => 496,  674 => 494,  669 => 492,  663 => 490,  661 => 489,  657 => 487,  655 => 486,  650 => 483,  646 => 481,  644 => 480,  641 => 479,  639 => 478,  634 => 475,  630 => 473,  628 => 472,  625 => 471,  623 => 470,  614 => 463,  610 => 461,  608 => 460,  605 => 459,  603 => 458,  597 => 454,  592 => 452,  589 => 451,  587 => 450,  583 => 449,  578 => 448,  576 => 447,  568 => 441,  564 => 439,  562 => 438,  559 => 437,  557 => 436,  553 => 434,  547 => 432,  545 => 431,  542 => 430,  540 => 429,  533 => 424,  527 => 418,  522 => 413,  517 => 410,  515 => 409,  511 => 407,  506 => 405,  501 => 404,  499 => 403,  495 => 402,  490 => 401,  488 => 400,  475 => 390,  456 => 374,  451 => 371,  445 => 369,  443 => 368,  437 => 366,  435 => 365,  426 => 360,  422 => 358,  420 => 357,  415 => 355,  408 => 350,  378 => 321,  370 => 315,  364 => 311,  359 => 309,  348 => 301,  343 => 299,  325 => 284,  313 => 275,  308 => 273,  284 => 252,  279 => 249,  273 => 247,  271 => 246,  266 => 245,  264 => 244,  245 => 227,  239 => 222,  236 => 221,  219 => 205,  175 => 163,  168 => 154,  161 => 149,  151 => 143,  144 => 139,  133 => 130,  127 => 127,  124 => 126,  115 => 117,  111 => 116,  105 => 113,  101 => 112,  95 => 108,  77 => 90,  67 => 81,  60 => 77,  45 => 66,  39 => 60,  32 => 52,  29 => 45,  27 => 44,  24 => 43,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/css/easyadmin.css.twig", "/Users/blorente/Sites/fpemplea/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/css/easyadmin.css.twig");
    }
}
