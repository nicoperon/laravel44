
   
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-{{ Config::get('template.skin') }} sidebar-mini">

<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="/laravel44/public/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Y</b>NOV</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Ingésup</b>YNOV</span>
    </a>

    <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"></a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
         <!-- Messages: style can be found in dropdown.less-->
          
         <li><a href="contact" ><i class="fa fa-cutlery" aria-hidden="true"></i> <span>Ajouter une Recette</span></a></li>
         <li><a href="Contacts"><i class="fa fa-cutlery" aria-hidden="true"></i> <span>Liste de vos Recettes</span></a></li>
        
      </ul>
    </div>
  </nav>
</header>