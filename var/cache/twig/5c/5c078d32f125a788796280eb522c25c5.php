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

/* index.twig */
class __TwigTemplate_4eb78a0d86df59af64b09269b99e7354 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Oficina Virtual | Fundación Trabaja Para Ti</title>

\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome Icons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Theme style -->
\t\t<link rel=\"stylesheet\" href=\"/css/adminlte.min.css\">
\t</head>
\t<body class=\"hold-transition sidebar-mini\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"index3.html\" class=\"nav-link\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<!-- Right navbar links -->
\t\t\t\t<ul
\t\t\t\t\tclass=\"navbar-nav ml-auto\">
\t\t\t\t\t<!-- Navbar Search -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"navbar-search-block\">
\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Messages Dropdown Menu -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tBrad Diesel
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tJohn Pierce
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tNora Silvester
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- Notifications Dropdown Menu -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t\t\t\t<span class=\"dropdown-header\">15 Notifications</span>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope mr-2\"></i>
\t\t\t\t\t\t\t\t4 new messages
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-users mr-2\"></i>
\t\t\t\t\t\t\t\t8 friend requests
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-file mr-2\"></i>
\t\t\t\t\t\t\t\t3 new reports
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-expand-arrows-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-th-large\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.navbar -->

\t\t\t<!-- Main Sidebar Container -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t\t\t<!-- Brand Logo -->
\t\t\t\t<a href=\"index3.html\" class=\"brand-link\">
\t\t\t\t\t<img src=\"/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\">AdminLTE 3</span>
\t\t\t\t</a>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\">
\t\t\t\t\t<!-- Sidebar user panel (optional) -->
\t\t\t\t\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<img src=\"/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block\">Alexander Pierce</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- SidebarSearch Form -->
\t\t\t\t\t<div class=\"form-inline\">
\t\t\t\t\t\t<div class=\"input-group\" data-widget=\"sidebar-search\">
\t\t\t\t\t\t\t<input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sidebar\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Sidebar Menu -->
\t\t\t\t\t<nav class=\"mt-2\">
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t\t\t\t\t<!-- Add icons to the links using the .nav-icon class
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               with font-awesome or any other icon font library -->
\t\t\t\t\t\t\t<li class=\"nav-item menu-open\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link active\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tStarter Pages
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link active\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Active Page</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Inactive Page</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-th\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tSimple Link
\t\t\t\t\t\t\t\t\t\t<span class=\"right badge badge-danger\">New</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t</div>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>


\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t<div class=\"content-header\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<h1 class=\"m-0\">Starter Page</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Starter Page</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t</div>
\t\t\t\t<!-- /.content-header -->


\t\t\t\t<!-- Main content -->
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>

\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\tSome quick example text to build on the card title and make up the bulk of the card's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  content.
\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card card-primary card-outline\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>

\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\tSome quick example text to build on the card title and make up the bulk of the card's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  content.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col-md-6 -->
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Featured</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Special title treatment</h6>

\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card card-primary card-outline\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Featured</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Special title treatment</h6>

\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col-md-6 -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t</div>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\">
\t\t\t\t<!-- Control sidebar content goes here -->
\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t<h5>Title</h5>
\t\t\t\t\t<p>Sidebar content</p>
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->


\t\t\t<!-- Main Footer -->
\t\t\t<footer
\t\t\t\tclass=\"main-footer\">
\t\t\t\t<!-- To the right -->
\t\t\t\t<div class=\"float-right d-none d-sm-inline\">
\t\t\t\t\tAnything you want
\t\t\t\t</div>
\t\t\t\t<!-- Default to the left -->
\t\t\t\t<strong>Copyright &copy; 2022-2023
\t\t\t\t\t<a href=\"https://fundaciontrabajaparati.org\">FUNDACIÓN TRABAJA PARA TI</a>.</strong>
\t\t\t\tAll rights reserved.
\t\t\t</footer>
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- REQUIRED SCRIPTS -->

\t\t<!-- jQuery --><script src=\"/plugins/jquery/jquery.min.js\"> </script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"/js/adminlte.min.js\"></script>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Oficina Virtual | Fundación Trabaja Para Ti</title>

\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome Icons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Theme style -->
\t\t<link rel=\"stylesheet\" href=\"/css/adminlte.min.css\">
\t</head>
\t<body class=\"hold-transition sidebar-mini\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"index3.html\" class=\"nav-link\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<!-- Right navbar links -->
\t\t\t\t<ul
\t\t\t\t\tclass=\"navbar-nav ml-auto\">
\t\t\t\t\t<!-- Navbar Search -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"navbar-search-block\">
\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Messages Dropdown Menu -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tBrad Diesel
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tJohn Pierce
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tNora Silvester
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- Notifications Dropdown Menu -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t\t\t\t<span class=\"dropdown-header\">15 Notifications</span>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope mr-2\"></i>
\t\t\t\t\t\t\t\t4 new messages
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-users mr-2\"></i>
\t\t\t\t\t\t\t\t8 friend requests
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-file mr-2\"></i>
\t\t\t\t\t\t\t\t3 new reports
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-expand-arrows-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-th-large\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.navbar -->

\t\t\t<!-- Main Sidebar Container -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t\t\t<!-- Brand Logo -->
\t\t\t\t<a href=\"index3.html\" class=\"brand-link\">
\t\t\t\t\t<img src=\"/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\">AdminLTE 3</span>
\t\t\t\t</a>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\">
\t\t\t\t\t<!-- Sidebar user panel (optional) -->
\t\t\t\t\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<img src=\"/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block\">Alexander Pierce</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- SidebarSearch Form -->
\t\t\t\t\t<div class=\"form-inline\">
\t\t\t\t\t\t<div class=\"input-group\" data-widget=\"sidebar-search\">
\t\t\t\t\t\t\t<input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sidebar\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Sidebar Menu -->
\t\t\t\t\t<nav class=\"mt-2\">
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t\t\t\t\t<!-- Add icons to the links using the .nav-icon class
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               with font-awesome or any other icon font library -->
\t\t\t\t\t\t\t<li class=\"nav-item menu-open\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link active\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tStarter Pages
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link active\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Active Page</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Inactive Page</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-th\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tSimple Link
\t\t\t\t\t\t\t\t\t\t<span class=\"right badge badge-danger\">New</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t</div>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>


\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t<div class=\"content-header\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<h1 class=\"m-0\">Starter Page</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Starter Page</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t</div>
\t\t\t\t<!-- /.content-header -->


\t\t\t\t<!-- Main content -->
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>

\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\tSome quick example text to build on the card title and make up the bulk of the card's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  content.
\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card card-primary card-outline\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>

\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\tSome quick example text to build on the card title and make up the bulk of the card's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  content.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col-md-6 -->
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Featured</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Special title treatment</h6>

\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card card-primary card-outline\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\">Featured</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Special title treatment</h6>

\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col-md-6 -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t</div>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\">
\t\t\t\t<!-- Control sidebar content goes here -->
\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t<h5>Title</h5>
\t\t\t\t\t<p>Sidebar content</p>
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->


\t\t\t<!-- Main Footer -->
\t\t\t<footer
\t\t\t\tclass=\"main-footer\">
\t\t\t\t<!-- To the right -->
\t\t\t\t<div class=\"float-right d-none d-sm-inline\">
\t\t\t\t\tAnything you want
\t\t\t\t</div>
\t\t\t\t<!-- Default to the left -->
\t\t\t\t<strong>Copyright &copy; 2022-2023
\t\t\t\t\t<a href=\"https://fundaciontrabajaparati.org\">FUNDACIÓN TRABAJA PARA TI</a>.</strong>
\t\t\t\tAll rights reserved.
\t\t\t</footer>
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- REQUIRED SCRIPTS -->

\t\t<!-- jQuery --><script src=\"/plugins/jquery/jquery.min.js\"> </script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"/js/adminlte.min.js\"></script>
\t</body>
</html>
", "index.twig", "C:\\laragon\\www\\erp-ftpt\\app\\Views\\index.twig");
    }
}
