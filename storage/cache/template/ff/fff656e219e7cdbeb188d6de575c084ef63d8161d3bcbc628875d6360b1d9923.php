<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/home.twig */
class __TwigTemplate_f206cd0288d71f7db681849f1565d093353a059b12c19c578eefbab3b3aac91c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap'); */
    /*  
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap'); */
    
    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        cursor: pointer;
    }
    
    section[class^=\"tanishq-\"] {
        position: relative;
        margin-top: 1.25em;
        margin-bottom: 3.75em;
    }
    
    section[class^=\"tanishq-\"]:first-child {
        margin-top: 0 !important;
    }
    
    section[class^=\"tanishq-\"]::before,
    section[class^=\"tanishq-\"]::after {
        content: \"\";
        clear: both;
        display: table;
    }
    
    .heading1 {
        font-size: 5em;
        line-height: 1em;
        color: #832729;
        font-weight: 700;
    }
    
    .heading2 {
        font-size: 3.75em;
        line-height: 1em;
        color: #832729;
        font-weight: 600;
    }
    
    .heading3 {
        font-size: 40px;
        line-height: 40px;
        color: #832729;
        font-weight: 400;
    }
    
    .heading3.bold {
        font-weight: 800;
        letter-spacing: 0.5px;
    }
    
    .heading4 {
        font-size: 30px;
        line-height: 32px;
        color: #832729;
        font-weight: 900 !important;
        letter-spacing: 0.5px;
    }
    
    .heading5 {
        font-size: 20px;
        line-height: 22px;
        color: #832729;
        font-weight: 700;
    }
    
    .heading6 {
        font-size: 20px;
        line-height: 20px;
        font-weight: 800;
        color: #832729;
        margin-bottom: 20px;
    }
    /* Default Style - Rajeev */
    
    .row>* {
        padding-right: calc(var(--bs-gutter-x) * .3);
        padding-left: calc(var(--bs-gutter-x) * .3);
    }
    
    section[class^=\"tanishq-\"] p {
        line-height: 1.875em;
        font-kerning: normal;
        font-weight: 400;
        letter-spacing: 0rem;
    }
    /* new for you button start */
    
    .align-self-center.flex-column.m-auto.absolute.left.right.bottom.text-center.mb-4.self-link-position {
        bottom: 0px;
    }
    /* new for you button end */
    
.btn {
    position: relative;
    font-size: 18px;
    line-height: 20px;
    border-radius: 0.375em;
    text-align: center;
    padding: 0.875em 1.875em;
    color: #000000;
    margin: 0 5px;
    margin-bottom: 0.625em;
    font-weight: 400;
    outline: 0;
    box-shadow: none;
    font-family: \"Nunito Sans\", sans-serif;
    text-transform: none;
    letter-spacing: initial;
    float: none;
}
.btn {
    padding: 0.675em 1.275em;
}
.btn.btn-wide {
    min-width: 140px;
}

.btn.btn-secondary-3 {
    color: #832729;
    border: 0.01em solid #832729;
    background-color: #ffffff;
    border-radius: 0.325em;
    padding: 0.675em 1.275em;
    border-width: thin;
    font-weight: 600;
    white-space: nowrap;
    font-size: 0.75em;
}

.btn.btn-secondary-3:active,
.btn.btn-secondary-3:hover,
.btn.btn-secondary-3:focus,
.btn.btn-secondary-3:visited {
    color: #ffffff;
    background-color: #631617;
}

@media only screen and (max-width: 768px) {
    .btn.btn-secondary-3 {
        padding: 0.675em 1.375em !important;
    }
}
    .btn.btn-banner-t1 {
        border: 1px solid #832729;
        background-color: #ffffff;
        color: #832729;
    }
    
    .btn.expander {
        border: 0;
        background-color: transparent;
        color: #000000;
        font-size: 0.75em;
        /* padding: 12px 20px; */
        position: relative;
        z-index: 0;
        font-weight: 600;
        min-width: 180px;
        max-width: 180px;
        margin: 0 auto;
        text-align: center;
        transition: all .35s;
        border-radius: 4px;
        overflow: hidden;
        border: 1px solid #ddd;
    }
    
    .btn.expander::before {
        content: '';
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        position: absolute;
        z-index: -1;
        opacity: 0.8;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        transition: all .35s;
    }
    
    .btn.expander::after {
        /* content: \"\\f061\"; */
        content: \"\";
        font-family: \"Font Awesome 5 Free\";
        font-weight: 900;
        margin: 0;
        position: absolute;
        right: auto;
        top: 14%;
        left: 8.75em;
        display: none;
        transition: all .35s;
        background-image: url(/wps/wcm/connect/tanishqrt/2be73a22-511f-4ff4-ae62-7048fcacd990/Arrow-right-long.svg?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE.Z18_90IA1H80O0T6206GQH590V3000-2be73a22-511f-4ff4-ae62-7048fcacd990-o23WHTz);
        background-repeat: no-repeat;
        background-position: center;
        background-size: 1.5em;
        width: 40px;
        height: 22px;
    }
    
    .btn.expander:hover {
        max-width: 100%;
        width: 100%;
        text-align: left;
    }
    
    .btn.expander:hover::after {
        display: block;
        left: calc(100% - 3.5em);
    }
    
    .btn.expander i {
        color: #000000;
    }
    
    .btn.expander.exp-pink {
        padding-right: 1.875em;
        text-align: left;
        max-width: 100%;
        width: 100%;
        border: 0;
    }
    
    .btn.expander.exp-pink::before {
        /* content: attr(data-text); */
        background-color: #F2C1C2;
        opacity: 0.4;
        width: 100%;
        left: 0;
        right: auto;
        max-width: 35%;
    }
    
    .btn.expander.exp-pink::after {
        display: block;
        left: 23%;
        top: 10px;
        right: auto;
    }
    
    .btn.expander.exp-pink.exp-pink-md::before {
        max-width: 160px;
    }
    
    .btn.expander.exp-pink.exp-pink-md::after {
        left: 120px;
        top: 5px;
    }
    
    .btn.expander.exp-pink.exp-pink-lg::before {
        max-width: 200px;
    }
    
    .btn.expander.exp-pink.exp-pink-lg::after {
        left: 160px;
        top: 5px;
    }
    
    .btn.expander.exp-pink:hover::before {
        width: 100%;
        max-width: 100%;
    }
    
    .btn.expander.exp-pink:hover::after {
        left: calc(90% - 10px);
    }
    
    .btn.expander.exp-pink i {
        color: #832729;
    }
    
    .btn.expander.absolute {
        position: absolute;
    }
    
    .btn.expander.absolute.left {
        left: 0rem;
    }
    
    .btn.expander.absolute.top {
        top: 0rem;
    }
    
    .btn.expander.absolute.right {
        right: 0rem;
    }
    
    .btn.expander.absolute.bottom {
        bottom: 0rem;
    }
    
    .btn.caption-button {
        padding: 10px 40px;
        font-size: 0.75em;
        border-radius: 0;
        border: 0;
        font-weight: 600;
        background-color: #ffffff;
        color: #000000;
        opacity: 0.8;
    }
    
    .btn.caption-button:hover {
        background-color: #832729;
        color: #ffffff;
        opacity: 0.6;
    }
    
    */ .elastic-link {
        position: relative;
        text-align: center;
        padding: 0;
        font-size: 0.625em;
        display: inline-block;
        width: 100%;
        height: 1.25em;
        font-weight: 600;
        -moz-transition: width 0.3s ease-out;
        -o-transition: width 0.3s ease-out;
        -webkit-transition: width 0.3s ease-out;
        transition: width 0.3s ease-out;
        z-index: 0;
    }
    
    .elastic-link::before {
        content: attr(data-labeltext);
        width: 60px;
        height: 100%;
        background-color: #ffffff;
        position: absolute;
        z-index: -1;
        opacity: 0.8;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        transition: all .35s;
        line-height: 1.25em;
        margin: 0 auto;
        margin-left: calc(50% - 40px);
    }
    
    .elastic-link::after {
        /* content: \"\\f105\";
        font-family: \"Font Awesome 5 Free\"; */
        font-weight: 900;
        position: absolute;
        top: -3px;
        bottom: 0;
        left: 0;
        right: 0;
        transition: all .35s;
        line-height: inherit;
        margin-left: calc(50% + 10px);
        width: 10px;
        text-align: center;
        font-size: smaller;
        background-image: url(\"data:image/svg+xml,%3C%3Fxml version='1.0' encoding='utf-8'%3F%3E%3C!-- Generator: Adobe Illustrator 27.0.1  SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.0' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 761 1080' style='enable-background:new 0 0 761 1080%3B' xml:space='preserve'%3E%3Cg%3E%3Cpath d='M622.9 469.9L622.9 469.9l-412-411.9c-17.2-17.2-45-17.2-62.1 0l0 0c-20.5 20.5-20.5 53.6 0 74.1L524 507.3c17 17 17 44.6 0 61.6L135.6 957.3c-13.2 13.2-13.2 34.5 0 47.7l18.3 18.3c14.3 14.3 37.6 14.3 51.9 0l417.1-417.1l0.1 0.1l1.2-1.2c37-37 37-96.9 0.1-133.9L622.9 469.9z'/%3E%3C/g%3E%3C/svg%3E\");
        content: '' !important;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 76%;
        width: 10px;
        top: 0 !important;
    }
    
    .elastic-link:hover::before {
        margin-left: 0;
    }
    
    .elastic-link:hover::after {
        background-image: url(\"data:image/svg+xml,%3C%3Fxml version='1.0' encoding='utf-8'%3F%3E%3C!-- Generator: Adobe Illustrator 27.0.1  SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.0' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 761 1080' style='enable-background:new 0 0 761 1080%3B' xml:space='preserve'%3E%3Cg%3E%3Cpath d='M622.9 469.9L622.9 469.9l-412-411.9c-17.2-17.2-45-17.2-62.1 0l0 0c-20.5 20.5-20.5 53.6 0 74.1L524 507.3c17 17 17 44.6 0 61.6L135.6 957.3c-13.2 13.2-13.2 34.5 0 47.7l18.3 18.3c14.3 14.3 37.6 14.3 51.9 0l417.1-417.1l0.1 0.1l1.2-1.2c37-37 37-96.9 0.1-133.9L622.9 469.9z' fill='%23832729'/%3E%3C/g%3E%3C/svg%3E\");
        margin-left: calc(100% - 10px);
    }
    
    .elastic-link.el-left {}
    
    .elastic-link.el-left::after {}
    
    .elastic-link.el-left::before {}
    
    .elastic-link.el-left:hover::after {}
    /* .elastic-link.el-left:hover::before {} */
    
    .elastic-link.el-right {
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
    }
    
    .elastic-link.el-right::after {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: calc(100% - 25px);
        top: 0px;
    }
    
    .elastic-link.el-right::before {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: calc(100% - 120px);
        width: 100px;
    }
    /* .elastic-link.el-right:hover:after {} */
    
    .elastic-link.el-right:hover:before {
        margin-left: 1rem;
    }
    
    .elastic-link .arrow {
        line-height: inherit;
    }
    
    .absolute {
        /* background: #fff; */
        position: absolute;
        box-sizing: border-box;
        display: inline-block;
        /* width: auto; */
    }
    
    .absolute.right {
        right: 0rem;
    }
    
    .absolute.left {
        left: 0rem;
    }
    
    .absolute.bottom {
        bottom: 1rem;
    }
    
    .absolute.top {
        top: 1rem;
    }
    /* End of Default Style - Rajeev */
    /*  nav {
        display: flex;
        width: 100%;
        background-color: #f2e9e9;
        position: relative;
        justify-content: space-between;
        text-align: center;
        padding: 0.9375em 1.875em;
        padding-top: 0.4375em;
        padding-bottom: 0.4375em;
    }
    
    nav .icon {
        height: 4.6875em;
        cursor: pointer;
    }
    
    nav ol {
        display: flex;
        list-style: none;
        margin: auto 0;
        margin-right: 4.6875em;
        margin-top: 2.1875em;
        word-spacing: 0.9375em;
    }
    
    nav ol li {
        margin: 0 2px;
    }
    
    nav ol li a {
        color: #fff;
        font-size: 0.9375em;
        text-decoration: none;
        text-transform: capitalize;
        letter-spacing: 0px;
        padding: 5px 1.25em;
        color: #832729;
    }
    
    nav .search_box {
        display: flex;
        margin: auto 0;
        height: 1.6875em;
        line-height: 2.1875em;
    }
    
    nav .search_box input {
        border: none;
        outline: none;
        background: #fff;
        height: 100%;
        padding: 0px 10px;
        font-size: 0.9375em;
        width: 450px;
        border-radius: 7px;
    }
    
    nav .search_box span {
        font-size: 1.25em;
        height: 100%;
        padding: 0.5em;
        position: relative;
        cursor: pointer;
        z-index: 1;
    }
    
    nav .search_box span::after {
        height: 100%;
        width: 0%;
        content: '';
        position: relative;
        top: 0;
        right: 0;
        z-index: -1;
    }
    
    nav .search_box span:hover::after {
        width: 100%;
    }
    
    nav .bar {
        position: relative;
        margin: auto;
    }
    
    nav .bar span {
        position: absolute;
        font-size: 2.1875em;
    }
    
    input[type=\"checkbox\"] {
        -webkit-appearance: none;
        display: none;
    }*/
    
    a,
    a>* {
        text-decoration: none;
        font-style: normal;
        outline: 0;
        color: #000;
    }
    
    .price-text {
        font-size: 1em;
        color: #000;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .stike-text {
        text-decoration: line-through;
        color: #908E8A;
        font-weight: 400;
    }
    
    .offer-text {
        color: #832729;
        font-weight: 400;
    }
    
    .whishlist-heart {
        font-size: 1.375em;
    }
    
    .stike-text.small,
    .offer-text.small {
        font-size: 0.675em;
    }
    
    .small,
    small {
        line-height: initial;
        font-size: 80%;
    }
    
    .band-strip {
        position: absolute;
        top: 2em;
        left: 0;
        right: auto;
        bottom: auto;
        padding: 0;
        font-size: 0.5875em;
        line-height: 0.7875em;
        background-color: #832729;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.04rem;
        margin: 0;
        width: 46%;
        text-align: left;
    }
    
    .band-strip.bstrip-bestseller {
        opacity: 0.6;
    }
    
    .band-strip.bstrip-trending {
        opacity: 1;
    }
    
    .band-strip>span {
        position: relative;
        display: inline-block;
        width: 100%;
        padding: 6px 10px 4px 10px;
    }
    
    .band-strip>span:before,
    .band-strip>span:after {
        content: '';
        display: inline-block;
        width: 0;
        height: 0;
        border: 12px solid transparent;
        vertical-align: middle;
        position: absolute;
        right: 0;
        border-top-color: transparent;
        border-bottom-color: transparent;
        border-right-color: transparent;
        border-left-color: #832729;
    }
    
    .band-strip>span:before {
        transform: rotate(90deg);
        top: 0px;
        bottom: auto;
        right: -12px;
    }
    
    .band-strip>span:after {
        transform: rotate(-90deg);
        top: auto;
        bottom: 0;
        right: -12px;
    }
    
    .ellipsis {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    
    .block-ellipsis {
        display: -webkit-box;
        max-width: 100%;
        height: 43px;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .hr-vector {
        width: calc(100% + 8px);
        height: 40px;
        padding: 10px 4px;
        position: relative;
        margin: 10px 0;
        margin-left: -4px;
        margin-right: -4px;
        clear: both;
    }
    
    .hr-vector::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 104%;
    }
    
    .testimonial-info {
        margin-top: 10px;
    }
    
    .tanishq-connect-withus .card .icon .fa-solid,
    .fab {
        font-family: \"Font Awesome 5 Free\" !important;
        font-weight: 500;
    }
    /* added to fix cls image score start*/
    
    .homepromo {
        width: 100%;
        height: auto;
        aspect-ratio: 2.94;
    }
    
    .tile1 {
        aspect-ratio: 1;
        height: auto;
        width: 100%;
    }
    
    .rivaahleft {
        width: 100%;
        height: auto;
        aspect-ratio: 1.43;
    }
    
    .rivaahright {
        width: 100%;
        height: auto;
        aspect-ratio: 1.43;
    }
    /* added to fix cls image score end*/
    
    #CT_ConnectUS .tanishq-connect-withus .card .icon .fa-whatsapp:before {
        content: \"f232\";
        color: transparent;
        border: none;
    }
    
    #CT_ConnectUS .tanishq-connect-withus .card .icon .fa-map-marker-alt:before {
        content: \"\\f3c5\";
        color: transparent;
        border: none;
    }
    
    #CT_ConnectUS .tanishq-connect-withus .card .icon .fa-video:before {
        content: \"\\f03d\";
        color: transparent;
        border: none;
    }
    
    .tanishq-connect-withus .card .icon .fa-whatsapp {
        background-image: url(/wps/wcm/connect/tanishqrt/aa64903f-919a-473e-b5d8-e9321b92a93a/R+%282%29-01.svg?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE.Z18_90IA1H80O0T6206GQH590V3000-aa64903f-919a-473e-b5d8-e9321b92a93a-o6PFTPC);
        /*background-repeat: no-repeat;
    width: 100%;
    max-width: 100%;
    position: relative;
    left: 60%;
    margin-top: 0px;*/
        background-repeat: no-repeat;
        width: 50%;
        max-width: 50%;
        position: relative;
        left: auto;
        right: 0;
        margin-top: 0px;
        background-position: top right;
    }
    
    .tanishq-connect-withus .card .icon .fa-map-marker-alt {
        background-image: url(/wps/wcm/connect/tanishqrt/abdbefd5-dffe-4c8c-bae0-b5a011dcbcc4/b.svg?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE.Z18_90IA1H80O0T6206GQH590V3000-abdbefd5-dffe-4c8c-bae0-b5a011dcbcc4-o6PFGEE);
        /*background-repeat: no-repeat;
    width: 100%;
    max-width: 100%;
    position: relative;
    left: 50%;
    min-height: 200px;
    min-width: 200px;*/
        background-repeat: no-repeat;
        width: 100%;
        max-width: 100%;
        position: relative;
        left: auto;
        right: 0;
        background-position: top center;
        background-size: 130%;
    }
    
    .tanishq-connect-withus .card .icon .fa-video {
        background-image: url(/wps/wcm/connect/tanishqrt/2571a084-8a40-485c-9d5e-0bf1c52657e8/b-1.svg?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE.Z18_90IA1H80O0T6206GQH590V3000-2571a084-8a40-485c-9d5e-0bf1c52657e8-o6PTIuF);
        background-repeat: no-repeat;
        width: 100%;
        max-width: 100%;
        position: relative;
        left: 44%;
        min-height: 200px;
        min-width: 200px;
    }
    
    /* .tanishq-poster-callback .btn.btn-secondary-3 {
        padding: 14px 17px;
        font-size: 14px;
        font-weight: 800;
        padding: 10px 30px;
    } */
    
    .rating-css {
        /* padding: 20px; */
    }
    
    .rating-css span.fa-star {
        color: #838383;
    }
    
    .rating-css span.fa-star.checked {
        color: #743030;
    }
    
    .rating-css div {
        color: #743030;
        font-size: 0.875em;
        font-family: sans-serif;
        font-weight: 800;
        text-align: left;
        text-transform: uppercase;
        padding: 0 0 4px 0;
    }
    
    .rating-css input {
        display: none;
    }
    
    .rating-css input+label {
        font-size: 0.875em;
        /* text-shadow: 1px 1px 0 #ffe400; */
        cursor: pointer;
    }
    
    .rating-css input:checked+label~label {
        color: #838383;
    }
    
    .rating-css label:active {
        transform: scale(0.8);
        transition: 0.3s ease;
    }
    
    .testimonial-quote {
        font-size: 5.625em;
        line-height: 7.25em;
        text-align: center;
        border-radius: 100%;
        border: 1px solid #ddd;
        width: 70px;
        min-width: 70px;
        height: 70px;
        display: inline-block;
        box-sizing: content-box;
        color: #743030;
        margin: 10px;
    }
    
    .testimonial-quote.bg-img {
        background-image: url('assets/SVG/Group-14197.svg');
        background-position: center;
        background-size: 90%;
        background-repeat: no-repeat;
        text-indent: -99999999999px;
        overflow: hidden;
        border: 0 !important;
    }
    
    .hrslider-scroll-device {}
    
    /* .newfor-you-slick .btn.btn-secondary-3 {
        width: auto;
        font-weight: 800;
    } */
    
    @media only screen and (max-width: 768px) {
        .tanishq-poster-callback .img-fluid {
            width: 100%;
        }
        #CT_NewForYou .card {
            overflow: unset;
        }
        #CT_Products .elastic-link::after {
            top: 0px;
            left: 0px;
        }
        .card .card-title {
            margin-bottom: auto !important;
        }
        #CT_Home_Promises .slick-dots {
            width: 100%;
            height: 30px;
        }
        #CT_Home_Promises .hrslider-scroll-device {
            overflow-x: hidden;
        }
        .hrslider-scroll-device {
            max-width: 100%;
            overflow-x: auto;
        }
        .hrslider-scroll-device>div {
            width: max-content;
            max-width: initial;
            display: inline-block;
            margin-bottom: 20px;
        }
        .hrslider-scroll-device>div>div {
            display: inline-block;
            float: left;
            width: 89vw;
            max-width: 89vw;
            margin: 0 10px;
        }
        .hrslider-scroll-device.split-2>div>div {
            display: inline-block;
            float: left;
            width: calc(92vw / 2);
            max-width: calc(92vw / 2);
            margin: 0;
        }
        .btn.btn-secondary-3 {
            white-space: break-spaces;
            padding: 0.875em 2.15em;
        }
        .btn.expander.exp-pink.exp-pink-lg::before {
            max-width: 12em;
        }
        .btn.expander.exp-pink.exp-pink-lg::after {
            left: 8em;
            top: 0px;
        }
    }
    
    #CT_ShopByOccasion .slick-dots .slick-active {
        background: #832729;
        border: 1px solid #fff;
    }
    
    #CT_ShopByOccasion .slick-dots li {
        background-color: #9c9a97;
        border: 1px solid #fff;
    }
    
    #CT_Home_Promises .slick-dots .slick-active {
        background: #832729;
        border: 1px solid #fff;
    }
    
    #CT_Home_Promises .slick-dots li {
        background-color: #9c9a97;
        border: 1px solid #fff;
    }
    
    @media only screen and (max-width: 767px) {
        .centerSlick.slick .card .watermark.right {
            right: 1px !important;
        }
        .centerSlick.slick .card .watermark.top {
            top: 0px !important;
        }
        .tanishq-poster-callback .btn.btn-secondary-3 {
            width: 100px;
            padding: 7px 16px;
            font-size: 12px;
            top: 20px;
            position: relative;
        }
        .tanishq-poster-callback .card .absolute.bottom {
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }
        #CT_NewForYou .btn.btn-secondary-3 {
            padding: 0;
            margin: 0 auto;
            width: 100%;
        }
        #CT_NewForYou .card {
            overflow: unset;
        }
        #CT_NewForYou .slick-dots {
            bottom: -15px;
        }
        #CT_NewForYou .slick-dots .slick-active {
            background: #832729;
            border: 1px solid #fff;
        }
        #CT_NewForYou .slick-dots li {
            background-color: #9c9a97;
            border: 1px solid #fff;
        }
        #CT_NewForYou .heading3.bold {
            font-size: 27px;
        }
        .tanishq-shopby-Category .slick-dots {
            bottom: -15px;
        }
        .slick-dots .slick-active {
            cursor: pointer;
            background-color: #832729;
            border: 1px solid #fff;
        }
        .slick-dots li {
            background: #D6D6D6;
            border: 1px solid #fff;
        }
        /* html,
    body {
        font-size: 14px;
        line-height: 20px;
    } */
        .heading1 {
            font-size: 3em;
            line-height: 1em;
        }
        .heading2 {
            font-size: 2em;
            line-height: 1em;
        }
        .heading3 {
            font-size: 1.4em;
            line-height: 1.375em;
        }
        .heading4 {
            font-size: 1.275em;
            line-height: 1em;
        }
        .heading5 {
            font-size: 12px;
            line-height: 14px;
            font-weight: 600;
        }
        svg#b,
        svg#whatsappIcon,
        svg#Layer_1 {
            height: 20px;
            margin: 5px auto;
        }
        .tanishq-connect-with-device.d-block.d-sm-block.d-md-block.d-lg-none {
            margin-bottom: 0px;
        }
        .heading6 {
            font-size: 0.675em;
            line-height: 1.4em;
            color: #832729;
            font-weight: bold;
        }
        p {
            /* font-size: 0.675em; */
            margin-bottom: 0.4rem;
        }
        .heading1+p,
        .heading2+p,
        .heading3+p,
        .heading4+p,
        .heading5+p,
        .heading6+p {
            max-width: 80%;
            margin: 0 auto;
        }
        .elastic-link.el-right::before {
            margin-left: calc(100% - 100px);
        }
        .elastic-link.el-right:hover:before {
            margin-left: 0;
            width: fit-content;
            padding: 0 10px;
        }
        .btn.expander.exp-pink.exp-pink-md::before {
            max-width: 12em;
        }
        .btn.expander.exp-pink.exp-pink-md::after {
            left: 9em;
            margin: 0;
            width: 20px;
            top: 0px;
        }
        .btn.expander.exp-pink:hover::before {
            max-width: 100%;
            /*calc(100% - 2em)*/
        }
        .hr-vector {
            height: 40px;
            padding: 2px 4px;
            margin: 0px 0;
            margin-left: -4px;
            margin-right: -4px;
        }
        .hr-vector::before {
            background-size: 200%;
        }
        .hrslider-scroll-device {
            max-width: 100%;
            overflow: hidden;
            overflow-x: auto;
        }
        .hrslider-scroll-device>div {
            width: max-content;
            max-width: initial;
            display: inline-block;
            margin-bottom: 10px;
        }
        .hrslider-scroll-device>div>div {
            display: inline-block;
            float: left;
            width: 66vw;
            max-width: 66vw;
            margin: 0 10px;
        }
        .hrslider-scroll-device.split-2>div>div {
            display: inline-block;
            float: left;
            width: calc(69vw / 2);
            max-width: calc(69vw / 2);
            margin: 0;
        }
        .elastic-link::after {
            line-height: 1.6em;
        }
        .band-strip {
            width: 70%;
        }
        .offer-text.small {
            display: block;
            width: 100%;
        }
        /* added to fix cls image score start */
        .homepromo {
            width: 100%;
            height: auto;
            aspect-ratio: 1.39;
        }
        .rivaahright {
            width: 100%;
            height: auto;
            aspect-ratio: 1.369;
        }
        /* added to fix cls image score end*/
    }
    
    @media only screen and (max-width: 576px) {
        .hrslider-scroll-device>div>div {
            display: inline-block;
            float: left;
            width: 94vw;
            max-width: 94vw;
            margin: 0 10px;
        }
        .hrslider-scroll-device.split-2>div>div {
            display: inline-block;
            float: left;
            width: calc(98vw / 2);
            max-width: calc(98vw / 2);
            margin: 0;
        }
    }
    /* card style - Rajeev */
    
    .card {
        margin-bottom: 10px;
        overflow: hidden;
    }
    
    .card:hover {
        box-shadow: rgba(242, 193, 194, 0.24) 0px 3px 6px, rgba(242, 193, 194, 0.54) 0px 3px 6px;
    }
    
    .owl-carousel .card:hover,
    .carousel .card:hover,
    .slider .card:hover {
        box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
    }
    
    .card .card-img,
    .card .card-img-top {
        display: block;
        width: 100%;
        margin: 0 auto;
        max-width: 100%;
        vertical-align: middle;
        height: auto;
    }
    
    .card .card-title {
        font-size: 14px;
        line-height: 14px;
        color: #832729;
        font-weight: bold;
    }
    
    .card:hover .elastic-link {
        width: 100%;
        color: #832729;
        text-align: left;
        -moz-transition: width 0.3s ease-in;
        -o-transition: width 0.3s ease-in;
        -webkit-transition: width 0.3s ease-in;
        transition: width 0.3s ease-in;
    }
    
    .card:hover .elastic-link .arrow {
        float: right;
    }
    
    .card .absolute {
        /* background: #fff; */
        position: absolute;
        box-sizing: border-box;
        display: inline-block;
        /* width: auto; */
    }
    
    .card .absolute.right {
        right: 1rem;
        float: right;
    }
    
    .card .absolute.left {
        left: 1rem;
        float: left;
    }
    
    .card .absolute.bottom {
        bottom: 30px;
    }
    
    .card .absolute.top {
        top: 1rem;
    }
    
    .category-card:hover .absolute {
        /* width: calc(100% - 2rem); */
    }
    
    .category-card .card-title {
        position: relative;
        margin-bottom: 0;
    }
    
    #CT_ShopBy .category-card .elastic-link {
        width: 100%;
    }
    
    .category-card:hover .elastic-link::before {
        margin-left: 0;
        /* width: 100%; */
    }
    
    .connect-card {
        border-radius: 4px;
    }
    
    .connect-card .btn.expander {
        min-width: calc(100% + 20px);
        width: calc(100% + 20px);
        padding: 10px 16px;
        padding-right: 40px;
        font-weight: 800;
    }
    
    .connect-card .icon {
        font-size: 6.275em;
        line-height: 1em;
        opacity: 0.4;
    }
    
    .prod-card {
        margin-bottom: 16px;
    }
    
    .prod-card:hover .elastic-link::before {
        margin-left: 0;
        /* width: 100%; */
    }
    
    .prod-card:hover .elastic-link::after {
        margin-left: calc(100% - 10px);
        background-image: url(\"data:image/svg+xml,%3C%3Fxml version='1.0' encoding='utf-8'%3F%3E%3C!-- Generator: Adobe Illustrator 27.0.1  SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.0' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 761 1080' style='enable-background:new 0 0 761 1080%3B' xml:space='preserve'%3E%3Cg%3E%3Cpath d='M622.9 469.9L622.9 469.9l-412-411.9c-17.2-17.2-45-17.2-62.1 0l0 0c-20.5 20.5-20.5 53.6 0 74.1L524 507.3c17 17 17 44.6 0 61.6L135.6 957.3c-13.2 13.2-13.2 34.5 0 47.7l18.3 18.3c14.3 14.3 37.6 14.3 51.9 0l417.1-417.1l0.1 0.1l1.2-1.2c37-37 37-96.9 0.1-133.9L622.9 469.9z' fill='%23832729'/%3E%3C/g%3E%3C/svg%3E\");
    }
    /* category card style */
    
    .category-card:hover .card-title {
        opacity: 0;
    }
    /* recommendation card style */
    
    .recomm-card {
        height: 100%;
        margin: 10px 5px;
    }
    
    .recomm-card .card-body {
        flex: 1 1 auto;
        padding: 0.6rem 0.6rem;
    }
    
    .recomm-card .card-title {
        position: relative;
        margin-bottom: 0;
    }
    
    .recomm-card .card-title h5,
    .recomm-card .card-title h6 {
        font-size: 0.8875em;
        line-height: 1.075em;
        color: #000;
        padding-right: 30px;
        font-weight: 600;
        height: calc(1.075em * 2);
        -webkit-line-clamp: 2;
    }
    
    .recomm-card .absolute.right {
        right: 0.1rem;
        float: right;
    }
    
    .recomm-card .absolute.left {
        left: 0.1rem;
        float: left;
    }
    
    .recomm-card .absolute.bottom {
        bottom: 0.1rem;
    }
    
    .recomm-card .absolute.top {
        top: 0.1rem;
    }
    
    .curved-std-card {
        border-radius: 6px;
        min-height: 320px;
        overflow: hidden;
    }
    
    .curved-super-card {
        border-radius: 26px;
        overflow: hidden;
        /* height: 320px; */
    }
    
    .testimonial-card {
        border: 0;
    }
    
    .testimonial-card:hover {
        box-shadow: none !important;
    }
    
    .testimonial-card .card-body {
        padding: 6px;
    }
    
    .testimonial-card p {
        font-size: 0.625em;
        line-height: 1em;
        box-sizing: content-box;
    }
    
    .testimonial-card p.block-ellipsis {
        height: calc(1.25em * 3);
        font-size: 0.625em;
        line-height: 1.25em;
        font-style: italic;
        margin-right: 20%;
    }
    
    .testimonial-card .author,
    .testimonial-card .dateTime {
        font-size: 0.675em;
        line-height: 1.25em;
    }
    
    .connect-card-block {
        background-color: #f2e9e9;
        border-radius: 0.8em;
    }
    
    .connect-card-block .icon {
        font-size: 2.8em;
    }
    
    .connect-card-block .card-title {
        font-size: 1.6em;
        min-height: calc(1.2em * 2);
        line-height: 1.1em;
        vertical-align: middle;
    }
    /* end of card style */
    
    .flex-container {
        display: flex;
        flex-wrap: nowrap;
        letter-spacing: 0px;
        justify-content: space-between;
    }
    
    .bg-white-pattern {
        background-image: url(/wps/wcm/connect/tanishqrt/2bc65a9d-3a10-47b7-8be9-93b8672dae52/Upto-20-off-Bg.jpg?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE.Z18_90IA1H80O0T6206GQH590V3000-2bc65a9d-3a10-47b7-8be9-93b8672dae52-o81gbDb);
        background-repeat: repeat;
        background-size: 60px;
    }
    
    .bg-red {
        background-color: #832729;
    }
    
    .bg-pink {
        background-color: #E48586;
    }
    
    .border-red {
        border: 1px solid #832729;
    }
    
    .border-pink {
        border: 1px solid #E48586;
    }
    
    .text-red {
        color: #832729;
    }
    
    .text-pink {
        color: #E48586;
    }
    
    @media only screen and (max-width: 768px) {
        #CT_NewForYou .btn.btn-secondary-3 {
            padding: 2px;
            margin: 0 auto;
            width: 100%;
            font-size: 12px;
            font-weight: 500;
        }
        .heading5,
        .text-red {
            font-size: 13px;
        }
        .newfor-you-slick .slick-slide {
            margin-bottom: 24px;
        }
        .newfor-you-slick .slick-slide .self-link-position {
            margin: 0 !important;
            bottom: -10px;
        }
    }
    
    @media only screen and (max-width: 767px) {
        /* new for you button start */
        .align-self-center.flex-column.m-auto.absolute.left.right.bottom.text-center.mb-4.self-link-position {
            bottom: -10px;
        }
        /* new for you button end */
        .card-body {
            padding: 0.5rem 0.5rem;
        }
        .curved-super-card {
            border-radius: 10px
        }
        .tanishq-poster-video .btn.expander {
            margin-bottom: 0 !important;
            bottom: 0 !important;
        }
        .connect-card .btn.expander {
            min-width: calc(100% + 20px);
            width: calc(100% + 20px);
            padding: 10px;
        }
        #MobileTopIcon .card .card-title {
            margin-bottom: 10px;
        }
        #MobileTopIcon .connect-card-block img {
            width: 2em;
            margin-bottom: 0.5em;
            aspect-ratio: 1;
        }
        .btn.expander.exp-pink::before {
            max-width: 44%;
        }
        .connect-card .icon {
            font-size: 3em;
            right: 0.5rem !important;
            top: 0.5rem !important;
        }
        .recomm-card .absolute.right {
            right: 0.4rem;
            float: right;
        }
        .recomm-card .absolute.left {
            left: 0.4rem;
            float: left;
        }
        .recomm-card .absolute.bottom {
            bottom: 0.4rem;
        }
        .recomm-card .absolute.top {
            top: 0.4rem;
        }
    }
    
    @media only screen and (max-width: 574px) {
        .connect-card-block {
            background-color: #f2e9e9;
            border-radius: 0.8em;
        }
        .connect-card-block .icon {
            font-size: 1.6em;
        }
        .connect-card-block .card-title {
            font-size: 0.7em !IMPORTANT;
            min-height: calc(1.1em * 2);
            line-height: 1.1em !IMPORTANT;
            vertical-align: middle;
        }
    }
    /* Carousel Style - Rajeev */
    
    .carousel-control-next,
    .carousel-control-prev {
        position: absolute;
        top: 44%;
        bottom: auto;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding: 0;
        color: #fff;
        text-align: center;
        background: 0 0;
        border: 0;
        opacity: .5;
        transition: opacity .15s ease;
    }
    
    .carousel-control-next {
        right: 6%;
    }
    
    .carousel-control-prev {
        left: 6%;
    }
    
    .carousel.slide {
        margin-bottom: 60px;
        position: relative;
    }
    
    .carousel-indicators,
    .owl-dots {
        bottom: -60px;
        margin-top: 1rem;
    }
    
    .carousel-indicators li {
        width: 10px;
        height: 10px;
        border-radius: 100%;
    }
    
    .carousel-indicators [data-bs-target] {
        background-color: #9c9a97;
        width: 6px;
        height: 6px;
        border-radius: 100%;
        padding: 4px;
        margin-right: 10px;
        margin-left: 10px;
        box-sizing: border-box;
    }
    
    .carousel-indicators .active {
        background-color: #832729;
    }
    
    .carousel-item {
        position: relative;
    }
    
    .carousel-caption {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 0;
        left: 0;
        padding-top: 0;
        padding-bottom: 0;
        color: #fff;
        text-align: center;
    }
    
    .caption-content {
        height: 80%;
        padding-right: 16%;
    }
    
    .product-code {
        font-size: 0.75em;
        padding: 20px 20px 0px 20px;
    }
    
    .weblink {
        font-size: 0.75em;
        padding: 0px 20px 20px 20px;
    }
    
    .carousel-item .absolute {
        position: absolute;
    }
    
    .carousel-item .absolute.left {
        left: 1rem;
    }
    
    .carousel-item .absolute.right {
        right: 1rem;
    }
    
    .carousel-item .absolute.bottom {
        bottom: 1rem;
    }
    
    .carousel-item .absolute.top {
        top: 1rem;
    }
    
    .owl-carousel.testimonial-carousel .owl-nav button.owl-next,
    .owl-carousel.testimonial-carousel .owl-nav button.owl-prev {
        position: absolute;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        background: 0 0;
        border: 0;
        opacity: .5;
        transition: opacity .15s ease;
        bottom: -70%;
        top: auto;
        left: 0;
        right: 0;
        margin: 0 auto;
        width: 80px;
    }
    
    .owl-carousel.testimonial-carousel .owl-nav button.owl-next {
        right: -220px;
    }
    
    .owl-carousel.testimonial-carousel .owl-nav button.owl-prev {
        left: -220px;
    }
    
    .owl-theme .owl-dots .owl-dot span {
        background-color: #9c9a97;
        width: 8px;
        height: 8px;
    }
    
    .owl-theme .owl-dots .owl-dot.active span {
        background-color: #832729;
    }
    
    .owl-stage,
    .owl-stage .owl-item {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: stretch;
        align-content: center;
    }
    
    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        border-radius: 100%;
        padding: 20px !important;
        background-size: 58%;
        position: relative;
        background-position: 54%;
    }
    
    .carousel-control-prev-icon {
        background-position: 42%;
    }
    
    .carousel-control-next-icon::before,
    .carousel-control-prev-icon::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        border-radius: 100%;
        background-color: #7f7f7f;
        z-index: -1;
    }
    
    .carousel-control-next:hover .carousel-control-next-icon:before,
    .carousel-control-prev:hover .carousel-control-prev-icon::before {
        background-color: #522e2e;
    }
    
    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
        position: absolute;
        top: 38%;
        bottom: auto;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding: 0;
        margin: 0;
        color: #fff;
        text-align: center;
        background: 0 0;
        border: 0;
        opacity: .5;
        transition: opacity .15s ease;
    }
    
    .owl-theme .owl-nav [class*=owl-] {
        opacity: 0.5;
    }
    
    .owl-theme .owl-nav [class*=owl-]:hover {
        background: transparent;
        opacity: 0.9;
    }
    
    .owl-carousel .owl-nav button.owl-next {
        right: 2rem;
    }
    
    .owl-carousel .owl-nav button.owl-prev {
        left: 2rem;
    }
    
    .owl-carousel .owl-nav button.owl-next span,
    .owl-carousel .owl-nav button.owl-prev span {
        border-radius: 100%;
        padding: 20px !important;
        background-size: 58%;
        position: relative;
        background-color: #7f7f7f;
        height: 40px;
        width: 40px;
        line-height: 0em;
        background-repeat: no-repeat;
        background-position: center;
        text-indent: -999999px;
        white-space: nowrap;
        overflow: hidden;
    }
    
    .owl-carousel .owl-nav button.owl-next:hover span,
    .owl-carousel .owl-nav button.owl-prev:hover span {
        background-color: #522e2e;
    }
    
    .owl-carousel .owl-nav button.owl-next span {
        background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e\");
    }
    
    .owl-carousel .owl-nav button.owl-prev span {
        background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e\");
    }
    /* end of Carousel Style */
    /* slick carousel style - Rajeev */
    
    .slick-initialized .slick-slide {
        display: block;
        position: relative;
        transition: all 0.4s ease-in-out;
    }
    
    .centerSlick.slick-slider {
        margin-bottom: 60px;
    }
    
    .centerSlick.slick-initialized .slick-slide {
        display: block;
        margin: 6px;
    }
    
    .centerSlick .slick-track {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 0;
        margin: 30px 0;
    }
    
    .centerSlick.slick .card {
        transform: translate(0, 0) scale(1);
        display: block;
        background: #743030;
        color: #fff;
        font-size: 2.25em;
        position: relative;
        text-align: center;
        transition: all .4s ease;
        margin: 0;
        padding: 0;
        width: 100%;
        min-height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease-in-out;
    }
    
    .centerSlick.slick .card .container {
        padding: 10px 30px;
    }
    
    .centerSlick.slick .card p {
        display: none;
        font-size: 0.5em;
        line-height: 0.6875em;
        text-align: left;
        transition: all 0.4s ease-in-out;
        margin: 0;
    }
    
    @media only screen and (min-width: 768px) {
        .centerSlick.slick .card .container {
            padding: 30px 30px;
        }
        /*   .centerSlick.slick .slick-slide {
            transform: translate(0, 0) scale(.7);
            transition: all 0.4s ease-in-out;
        }
        .centerSlick .slick-slide.lt2 {
            transform: translate(-4%, 0) scale(.7);
        }
        .centerSlick .slick-slide.lt1 {
            transform: translate(-30%, 0) scale(.7);
        }
        .centerSlick .slick-slide.gt1 {
            transform: translate(30%, 0) scale(.7);
        }
        .centerSlick .slick-slide.gt2 {
            transform: translate(4%, 0) scale(.7);
        } */
        .centerSlick.slick .slick-slide.slick-current.slick-active,
        .centerSlick.slick .slick-slide.slick-center.slick-active {
            transform: translate(0, 0) scale(1.8);
            z-index: 1;
            transition: all 0.4s ease-in-out;
            margin: 0 2%;
        }
        .centerSlick.slick .card {
            margin: 0 auto;
        }
    }
    
    @media only screen and (max-width: 768px) {
        .centerSlick.slick .card p {
            display: block;
            font-size: 0.3em;
            line-height: 1.3em;
        }
        .centerSlick .slick-track {
            margin: 0;
            padding: 0;
        }
    }
    
    .centerSlick.slick .slick-center .card p {
        display: block;
        font-size: 0.18em;
        line-height: 1.3em;
        font-weight: 100;
        transition: all 0.4s ease-in-out;
        max-width: 120px;
    }
    
    .centerSlick.slick .card .watermark {
        opacity: 0.1;
        font-size: 3em;
        line-height: 1em;
        font-weight: 100;
        z-index: 0;
    }
    
    .centerSlick.slick .card .watermark.top {
        top: -12px;
    }
    
    .centerSlick.slick .card .watermark.right {
        right: -12px;
    }
    
    .centerSlick.slick .card .callout {
        text-align: left;
        border-left: 3px solid #E48586;
        padding: 8px 0;
        padding-left: 10px;
        margin: 10px 0 20px 0;
        font-size: 15px;
        max-width: 150px;
        font-weight: 600;
    }
    
    .centerSlick.slick .slick-slide.slick-center.slick-active .card .callout {
        font-size: 0.775rem;
        padding: 16px 0 16px 16px;
        min-height: 60px;
        font-weight: bold;
        border-left: 2px solid #E48586;
        max-width: 120px;
    }
    
    @media only screen and (max-width: 768px) {
        .centerSlick.slick .card .callout {
            font-size: 0.5em;
            font-weight: 700;
            margin: 40px 0;
            padding: 12px 0 12px 20px;
            min-height: 86px;
            max-width: 168px;
            border-left: 2px solid #E48586;
        }
        .centerSlick.slick .card p {
            margin: 40px 0px;
        }
        .centerSlick.slick .card .watermark {
            font-size: 3.6em;
        }
        .centerSlick.slick .card {
            max-width: unset;
            margin: 0 auto;
            min-height: 400px !important;
            /* transform: translate(0, 0) scale(1.6); */
        }
        .hrslider-scroll-device>div.centerSlick>div {
            max-width: calc(92vw - 10px);
        }
    }
    
    @media only screen and (max-width: 767px) {
        .centerSlick.slick .card {
            max-width: unset;
        }
    }
    
    @media only screen and (max-width: 576px) {
        .centerSlick.slick .card {
            max-width: unset;
        }
    }
    /* .slick-slide {
            border: solid 1px #2dc37f;
        } */
    
    .centerSlick .slick-slide.slick-center .card {
        z-index: 1;
        transform: scale(1);
        opacity: 1;
    }
    
    .slick-prev,
    .slick-next {
        position: absolute;
        top: 50%;
        appearance: none;
        margin-top: -10px;
        padding: 0;
        border: 0;
        background: none;
        cursor: pointer;
        color: transparent;
        outline: none;
        z-index: 100;
        border-radius: 100%;
        padding: 20px !important;
        background-size: 58%;
        opacity: 0.6;
    }
    
    .slick-prev {
        width: 0;
        height: 0;
        border-style: solid;
        /* border-width: 15px 15px 15px 0;
            border-color: transparent #007bff transparent transparent; */
        left: 2rem;
    }
    
    .slick-next {
        width: 0;
        height: 0;
        border-style: solid;
        /* border-width: 15px 0 15px 15px;
            border-color: transparent transparent transparent #007bff; */
        right: 2rem;
    }
    
    .slick-next:hover,
    .slick-prev:hover {
        opacity: 0.9;
    }
    
    .slick-next::before,
    .slick-prev::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        border-radius: 100%;
        background-color: #7f7f7f;
        z-index: -1;
    }
    
    .slick-slider .slick-next:hover::before,
    .slick-slider .slick-prev:hover::before {
        background-color: #522e2e;
    }
    
    .slick-next::after,
    .slick-prev::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        border-radius: 100%;
        z-index: -1;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 58%;
    }
    
    .slick-next::after {
        background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e\");
    }
    
    .slick-prev::after {
        background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e\");
    }
    
    .slick-dots {
        display: block;
        margin: 0 auto;
        position: absolute;
        bottom: -40px;
        left: 0;
        right: 0;
        list-style: none;
        text-align: center;
        padding: 0;
    }
    
    .slick-dots li {
        display: inline-block;
        list-style: none;
        overflow: hidden;
    }
    
    .slick-dots li button {
        text-indent: -999999px;
        width: 8px;
        height: 8px;
        margin: 5px 7px;
        background: #D6D6D6;
        display: block;
        -webkit-backface-visibility: visible;
        transition: opacity .2s ease;
        border-radius: 30px;
        border: 0;
        outline: 0;
    }
    
    .slick-dots li.slick-active button {
        background: #832729;
    }
    
    .slick-slider .card {
        height: 100%;
        margin: 10px 5px;
    }
    
    .slick-slider .card.prod-card {
        margin: 0;
        margin-bottom: 0.8rem;
    }
    
    cElText {
        display: inline !important;
    }
    /* end of slick carousel style - Rajeev */
    
    @media only screen and (min-width: 576px) {
        /* styles for browsers larger than 576px;  */
        .connectexploresubbtn {
            font-size: 0.625em;
            padding: 2px;
            height: 22px;
        }
    }
    
    @media screen and (max-width: 1250px) {
        nav {
            display: block;
            padding: 0;
        }
        nav.icon {
            display: inline-block;
            padding: 15px 30px;
        }
        nav .search_box {
            width: 100%;
            display: inline-flex;
            justify-content: center;
            margin-bottom: 15px;
        }
        nav .search_box input {
            width: 90%;
        }
        nav ol {
            display: flex;
            flex-direction: column;
        }
    }
    
    @media only screen and (min-width: 375px) {
        /* styles for mobile browsers smaller than 480px; (iPhone) */
        .stylenavinput {
            width: 300px;
        }
    }
    
    @media only screen and (max-width: 375px) {
        /* styles for browsers lesser than 768px; */
        .stylelist {
            display: none;
        }
        .tanishq-poster-callback .btn.btn-secondary-3 {
            width: 90px;
            padding: 2px 15px;
            position: relative;
            margin-bottom: 0;
            font-size: 10px;
        }
        .newfor-you-slick .slick-slide .self-link-position {
            bottom: -18px !important;
        }
    }
    
    @media only screen and (min-width: 768px) {
        /* styles for browsers larger than 768px; */
        .stylenavinput {
            width: 654px;
        }
        .slick-slide>div {
            padding-right: calc(var(--bs-gutter-x) * .3);
            padding-left: calc(var(--bs-gutter-x) * .3);
        }
        .adobe_CT_BannerCarousel .slick-slide>div {
            padding-right: 0;
            padding-left: 0;
        }
    }
    
    @media only screen and (max-width: 768px) {
        /* styles for browsers lesser than 768px; */
        .stylelist {
            display: none;
        }
        .caption-content {
            padding: 0;
            width: 100%;
            justify-content: center !important;
        }
        cElText {
            display: none !important;
        }
    }
    
    @media only screen and (max-width: 767px) {
        section[class^=\"tanishq-\"] {
            position: relative;
            margin-top: 10px;
            margin-bottom: 30px;
        }
        .slick-slide>div {
            padding-right: calc(var(--bs-gutter-x) * .3);
            padding-left: calc(var(--bs-gutter-x) * .3);
        }
        .adobe_CT_BannerCarousel .slick-slide>div {
            padding-right: 0;
            padding-left: 0;
        }
        .card .card-title {
            font-size: 73%;
            line-height: 1.675em;
        }
        .card-title {
            margin-bottom: 0;
        }
        .recomm-card .card-title {
            position: inherit;
        }
        /* .carousel-control-next,
    .carousel-control-prev {
        display: none !important;
    } */
        .carousel-item .absolute.left {
            left: 0.2rem;
        }
        .carousel-item .absolute.right {
            right: 0.2rem;
        }
        .carousel-item .absolute.bottom {
            bottom: 0.2rem;
        }
        .carousel-item .absolute.top {
            top: 0.2rem;
        }
        .prod-card {
            margin-bottom: 0.4rem;
        }
        /* .slick-list {
            margin-bottom: 40px;
        } */
        .tanishq-poster-offer .ms-5 {
            margin-left: 0.5rem!important;
        }
        .tanishq-poster-offer .ps-5 {
            padding-left: 0.5rem!important;
        }
        .btn.expander {
            /* font-size: 0.55em; */
            /* padding: 6px 10px; */
            min-width: auto;
            max-width: max-content;
        }
        .btn.expander.exp-pink {
            font-size: 0.55em;
        }
        .btn.expander::after {
            top: 0;
        }
        .btn.expander.exp-pink:hover::before {
            width: 100%;
            /*calc(100% - 2em);*/
        }
        .btn.expander.exp-pink:hover::after {
            left: calc(100% - 6em);
        }
    }
    
    @media only screen and (min-width: 992px) {
        /* styles for browsers larger than 960px; */
        .stylenavinput {
            width: 400px;
        }
    }
    
    @media only screen and (min-width: 1200px) {
        /* styles for browsers larger than 960px; */
        .stylenavinput {
            width: 550px;
            height: 32px;
        }
        .connectexploresubbtn {
            font-size: 0.75em;
            padding: 2px;
            height: 39px;
            padding-left: 10px;
            padding-right: 14px;
        }
        .owl-carousel .owl-nav button.owl-prev {
            left: -4rem;
        }
        .owl-carousel .owl-nav button.owl-next {
            right: -4rem;
        }
        .slick-prev {
            left: -4rem;
        }
        .slick-next {
            right: -4rem;
        }
    }
    
    .bg-valentines-day {
        background-image: url('assets/Images/Mia-Banner.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    
    .whishlist-heart {
        display: flex !important;
        justify-content: center;
        align-items: center;
        height: 26px;
        width: 26px;
    }
    /*      CHECKBOX         */
    
    .whishlist-heart input[type=\"checkbox\"] {
        display: none;
    }
    
    .whishlist-heart input[type=\"checkbox\"]+label {
        position: relative;
        display: inline-block;
        font-size: 16px;
        font-family: \"Font Awesome 6 Free\";
        font-weight: 400;
        width: 26px;
        height: 26px;
        padding: 0px;
    }
    
    .whishlist-heart input[type=\"checkbox\"]+label:before {
        /* content: \"\\f004\"; */
        content: \"\";
        top: 3px;
        left: 2px;
        border: 1px solid transparent;
        padding: 10px;
        border-radius: 3px;
        display: block;
        position: absolute;
        transition: .5s ease;
        width: 20px;
        height: 20px;
        font-size: 30px;
        background-image: url(./assets/heart.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100%;
    }
    
    .whishlist-heart input[type=\"checkbox\"]:checked+label:before {
        border: 1px solid transparent;
        background-color: transparent;
        /* content: '\\2661'; */
        background-image: url('./assets/heart-red-fill.png');
    }
    /* .whishlist-heart input[type=\"checkbox\"]:checked+label:after {
    content: '\\2665';
    font-size: 18px;
    position: absolute;
    top: -1px;
    left: 1px;
    transition: .5s ease;
    width: 30px;
    height: 30px;
    font-size: 30px;
} */
    
    @media only screen and (min-width: 768px) {
        .tanishq-shopby-Category .col-sm-12.col-lg-2 {
            padding-left: 10px;
            padding-right: 10px;
        }
    }
    
    .product-promises img {
        margin-right: 10px;
    }
    
    .product-promises p {
        line-height: 25px;
    }
    
    @media all and (max-width: 1024px) {
        #MobileTopIcon {
            padding-top: 120px;
        }
    }
</style>
<style>
\t.home-testimonial {
\t\tbackground-color: #231834;
\t\theight: 380px
\t}

\t.home-testimonial-bottom {
\t\tbackground-color: #f8f8f8;
\t\ttransition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
\t\tmargin-top: 20px;
\t\tmargin-bottom: 0;
\t\tposition: relative;
\t\theight: 130px;
\t\ttop: 190px
\t}

\t.home-testimonial h3 {
\t\tcolor: var(--orange);
\t\tfont-size: 14px;
\t\tfont-weight: 500;
\t\ttext-transform: uppercase
\t}

\t.home-testimonial h2 {
\t\tcolor: white;
\t\tfont-size: 28px;
\t\tfont-weight: 700
\t}

\t.testimonial-inner {
\t\tposition: relative;
\t\ttop: -174px
\t}

\t.testimonial-pos {
\t\tposition: relative;
\t\ttop: 24px
\t}

\t.testimonial-inner .tour-desc {
\t\tborder-radius: 5px;
\t\tpadding: 40px
\t}

\t.color-grey-3 {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 14px;
\t\tcolor: #6c83a2
\t}

\t.testimonial-inner img.tm-people {
\t\twidth: 60px;
\t\theight: 60px;
\t\t-webkit-border-radius: 50%;
\t\tborder-radius: 50%;
\t\t-o-object-fit: cover;
\t\tobject-fit: cover;
\t\tmax-width: none
\t}

\t.link-name {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 14px;
\t\tcolor: #6c83a2
\t}

\t.link-position {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 12px;
\t\tcolor: #6c83a2
\t}


\t@media screen and(max-width:750px) {
\t\t.hide_phone {
\t\t\tdisplay: none;
\t\t}

\t\t.product-card {
\t\t\theight: auto;
\t\t}

\t\t.slider_banner {
\t\t\twidth: 100%;
\t\t}

\t\t.slide-row {
\t\t\tmargin: -20px 0 0;
\t\t}
\t}

\t.slider_banner {
\t\twidth: 100%;
\t}
</style>

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
\t<div class=\"\">
\t\t<div class=\"row slide-row\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 2493
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 2494
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 2494);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 2495
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 2495);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2498
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<section class=\"cares separation container mt-4\">
\t<div class=\"container new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br />
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 2515
        if (($context["new_products"] ?? null)) {
            // line 2516
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 2517
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 2521
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 2521);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 2522
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 2522);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2522);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 2523
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2523);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 2526
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 2526);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 2527
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 2527)) {
                    // line 2528
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 2528);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 2529
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2529);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 2529);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 2530
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 2530);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 2530);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 2531
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 2531);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 2534
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 2538
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 2542
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 2542);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 2543
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2543);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 2548
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 2548)) {
                    // line 2549
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 2550
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 2550)) {
                        // line 2551
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 2551);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 2553
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 2553);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 2554
                        echo twig_get_attribute($this->env, $this->source,                         // line 2555
$context["product"], "price", [], "any", false, false, false, 2555);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 2557
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 2557)) {
                        // line 2558
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 2559
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 2559);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 2561
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 2563
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 2565
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 2565);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2578
            echo "\t\t\t\t\t\t";
        }
        // line 2579
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"cares separation mt-5 container\">
\t<div class=\"container new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">Best Seller
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br />
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 2598
        if (($context["pop_products"] ?? null)) {
            // line 2599
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 2600
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 2605
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 2605);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 2606
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 2606);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2606);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 2607
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2607);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 2611
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 2611);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 2612
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 2612)) {
                    // line 2613
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 2614
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 2614);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 2615
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2615);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 2615);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 2616
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 2616);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 2616);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 2617
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 2617);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 2622
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 2627
                echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 2632
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 2632);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 2633
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 2633);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 2638
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 2638)) {
                    // line 2639
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 2640
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 2640)) {
                        // line 2641
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 2641);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 2643
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 2643);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 2644
                        echo twig_get_attribute($this->env, $this->source,                         // line 2645
$context["product"], "price", [], "any", false, false, false, 2645);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 2647
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 2647)) {
                        // line 2648
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 2649
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 2649);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 2651
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 2653
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 2655
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 2655);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2669
            echo "\t\t\t\t\t\t";
        }
        // line 2670
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!---Shop by room------>
<section class=\"tanishq-shopby-Category\">
\t<div class=\"container\">
\t\t<h1 class=\"text-center heading3 bold\">Shop Jewellery By Category</h1>
\t\t<p class=\"text-center small\">Browse through your favourite categories. We've got them all!</p>
\t\t<div class=\"hr-vector\">&nbsp;</div>
\t\t<div class=\"slick-slider slick-initialized\">
\t\t\t<div class=\"slick-list\">
\t\t\t\t<div class=\"slick-track\" style=\"width: 1296px; opacity: 1; transform: translate3d(0px, 0px, 0px);\">
\t\t\t\t\t<div data-index=\"0\" class=\"slick-slide slick-active slick-current\" tabindex=\"-1\" aria-hidden=\"false\"
\t\t\t\t\t\tstyle=\"outline: none; width: 216px;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/gold-coins?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/GoldCoin.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/GoldCoin.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Gold Coins</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/engagement-rings?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/CoupleRing.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/CoupleRing.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Engagement Rings</h6><span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"elastic-link\" data-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div data-index=\"1\" class=\"slick-slide slick-active\" tabindex=\"-1\" aria-hidden=\"false\"
\t\t\t\t\t\tstyle=\"outline: none; width: 216px;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/earrings?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/earrings-new.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/earrings-new.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Earrings</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/chains?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Chain.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Chain.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Chains</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div data-index=\"2\" class=\"slick-slide slick-active\" tabindex=\"-1\" aria-hidden=\"false\"
\t\t\t\t\t\tstyle=\"outline: none; width: 216px;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/pendants?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Pendant.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Pendant.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Pendants</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/bangles?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Bangle.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Bangle.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Bangles</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div data-index=\"3\" class=\"slick-slide slick-active\" tabindex=\"-1\" aria-hidden=\"false\"
\t\t\t\t\t\tstyle=\"outline: none; width: 216px;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/finger-rings?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Ring.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Ring.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Finger Rings</h6><span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"elastic-link\" data-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/bracelets?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/bracelets-new.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/bracelets-new.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Bracelets</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div data-index=\"4\" class=\"slick-slide slick-active\" tabindex=\"-1\" aria-hidden=\"false\"
\t\t\t\t\t\tstyle=\"outline: none; width: 216px;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/mangalsutra?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/mangalsutras-new.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/mangalsutras-new.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Mangalsutras</h6><span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"elastic-link\" data-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/nosepins?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/nosepins-new.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/nosepins-new.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Nose Pins</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div data-index=\"5\" class=\"slick-slide slick-active\" tabindex=\"-1\" aria-hidden=\"false\"
\t\t\t\t\t\tstyle=\"outline: none; width: 216px;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/necklace?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Neckwear.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/Neckwear.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Neckwear</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-sm-12\" tabindex=\"-1\" style=\"width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t<div class=\"card prod-card\"><a href=\"/shop/pendant-earrings-set?sort=10\"><img
\t\t\t\t\t\t\t\t\t\t\tdata-src=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/pendant-set-new.webp\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://staticimg.titan.co.in/Tanishq/Banners/home/ShopByCategory/pendant-set-new.webp\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">Pendant Sets</h6><span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"elastic-link\" data-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>









";
        // line 2874
        if (($context["room_categories"] ?? null)) {
            // line 2875
            echo "<section class=\"shopy_by_room separation mt-5 container\">
\t<div class=\"container\">
\t\t<div class=\" align-items-center heading \">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"text-center \">Shop By Categories<span class=\"hb\"
\t\t\t\t\t\tstyle=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row mt-4\">
\t\t\t";
            // line 2886
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 2887
                echo "\t\t\t<div class=\"col-sm-2 col-6 text-center mt-2\">
\t\t\t\t<a href=\"";
                // line 2888
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 2888);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t<img src=\"";
                // line 2889
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 2889);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\" />
\t\t\t\t</a>
\t\t\t\t<h5 class=\" mt-2 mb-2\">
\t\t\t\t\t<span style=\"z-index:2;    position: relative;\">";
                // line 2892
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 2892);
                echo "</span>
\t\t\t\t</h5>
\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2897
            echo "
\t\t</div>
\t</div>
</section>

<br />

";
        }
        // line 2905
        echo "

<style>
\t.serv-name3 {
\t\tposition: absolute;
\t\tfont-weight: 800;

\t\tcolor: white;
\t\tpadding: 5px 35px;
\t\tfont-family: 'Work Sans', sans-serif;
\t\tfont-size: 18px;
\t\ttop: auto;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tdisplay: flex;
\t\twidth: 100%;
\t\theight: 100%;
\t}

\t.btn-primary {
\t\tbackground: #fff;
\t\tcolor: #000;
\t\tfont-weight: 800;
\t\tborder-radius: 33px;
\t}
</style>


<div style=\"background:#f1f1f1; padding:30px 0px\">
\t<section class=\" separation \">
\t\t<div class=\"\">
\t\t\t<div class=\" align-items-center heading  \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center \">Printed & Solid<span class=\"hb\"
\t\t\t\t\t\t\tstyle=\"display: flex;justify-content: center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"margin-top:3%;\">

\t\t\t\t<div class=\"col-md-6 col-6 mt-3 p-0\" style=\"    background: black;\">
\t\t\t\t\t<div class=\"serv-name3\">

\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">New Arrivals</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\"
\t\t\t\t\t\t\tclass=\"zoom serv-img\" title=\"\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-6 mt-3 p-0\" style=\"    background: black;\">
\t\t\t\t\t<div class=\"serv-name3\">

\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Best Seller</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\"
\t\t\t\t\t\t\tclass=\"zoom serv-img\" title=\"\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t</section>
</div>


<br />


";
        // line 2980
        echo ($context["column_right"] ?? null);
        echo "


<!-- News -->
<section class=\"home-testimonial\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row d-flex justify-content-center testimonial-pos\">
\t\t\t<div class=\"col-md-12 pt-4 d-flex justify-content-center\">
\t\t\t\t<h3>Testimonials</h3>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 d-flex justify-content-center\">
\t\t\t\t<h2>Explore the experience</h2>
\t\t\t</div>
\t\t</div>
\t\t<section class=\"home-testimonial-bottom\">
\t\t\t<div class=\"container testimonial-inner\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Dolorum deleniti adipisci molestias illum quia
\t\t\t\t\t\t\t\t\tvoluptate error quam sunt similique impedit.
\t\t\t\t\t\t\t\t\t&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Eng.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Similique eligendi odit nesciunt sunt! Saepe est ipsam
\t\t\t\t\t\t\t\t\tnobis quia impedit. Nemo.&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet,
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Placeat voluptatibus nostrum unde pariatur deserunt
\t\t\t\t\t\t\t\t\tenim, id cupiditate facere similique sunt.&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
</section>


<div class=\"fb-card mt-5\" style=\"background: #fff; margin-top:10px; padding:10px; max-height: 550px; overflow-y: auto;\">

\t<script src=\"\" defer></script>
\t<div class=\"elfsight-app-7f65417f-5c88-4573-b789-68eed13537d5\"></div>
</div>


<script>
\tvar swiper = new Swiper(\".topSwiper\", {
\t\tpagination: {
\t\t\tel: \".top-swiper-pagination\",
\t\t\tclickable: true
\t\t},
\t\tnavigation: {
\t\t\tnextEl: \".swiper-button-next\",
\t\t\tprevEl: \".swiper-button-prev\"
\t\t},
\t\tautoplay: false,
\t\t// Default parameters
\t\tslidesPerView: 4,
\t\tspaceBetween: 10,
\t\t// Responsive breakpoints
\t\tbreakpoints: { // when window width is >= 320px
\t\t\t320: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t740: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t}
\t\t}
\t});
</script>

";
        // line 3086
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3342 => 3086,  3233 => 2980,  3156 => 2905,  3146 => 2897,  3135 => 2892,  3129 => 2889,  3125 => 2888,  3122 => 2887,  3118 => 2886,  3105 => 2875,  3103 => 2874,  2897 => 2670,  2894 => 2669,  2874 => 2655,  2870 => 2653,  2866 => 2651,  2861 => 2649,  2856 => 2648,  2853 => 2647,  2848 => 2645,  2847 => 2644,  2842 => 2643,  2836 => 2641,  2834 => 2640,  2831 => 2639,  2829 => 2638,  2821 => 2633,  2817 => 2632,  2810 => 2627,  2803 => 2622,  2795 => 2617,  2789 => 2616,  2783 => 2615,  2779 => 2614,  2776 => 2613,  2774 => 2612,  2770 => 2611,  2763 => 2607,  2757 => 2606,  2753 => 2605,  2746 => 2600,  2741 => 2599,  2739 => 2598,  2718 => 2579,  2715 => 2578,  2696 => 2565,  2692 => 2563,  2688 => 2561,  2683 => 2559,  2678 => 2558,  2675 => 2557,  2670 => 2555,  2669 => 2554,  2664 => 2553,  2658 => 2551,  2656 => 2550,  2653 => 2549,  2651 => 2548,  2643 => 2543,  2639 => 2542,  2633 => 2538,  2627 => 2534,  2621 => 2531,  2615 => 2530,  2609 => 2529,  2604 => 2528,  2602 => 2527,  2598 => 2526,  2592 => 2523,  2586 => 2522,  2582 => 2521,  2576 => 2517,  2571 => 2516,  2569 => 2515,  2550 => 2498,  2541 => 2495,  2536 => 2494,  2532 => 2493,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
