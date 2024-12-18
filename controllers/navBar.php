<?php 
$currentPage = basename($_SERVER["PHP_SELF"]);
?>
<div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><img src="images/logo.png" alt="logo" width="100px"></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="<?php echo $currentPage == "index.php" ? "active" : "" ?>">
                    <a href="index.php">Inicio</a>
                  </li>
                  <li class="<?php echo $currentPage == "about.php" ? "active" : "" ?>">
                    <a href="about.php">Nosotros</a></li>
                    <li class="<?php echo $currentPage == "about.php" ? "active" : "" ?>">
                    <a href="services.php">Servicios</a></li>
                    <li class="<?php echo $currentPage == "about.php" ? "active" : "" ?>">
                    <a href="client.php">Clientes</a></li>
                  <li class="<?php echo $currentPage == "contact.php" ? "active" : "" ?>">
                    <a href="contact.php">Contacto</a></li>
                    <li class="<?php echo $currentPage == "https://somospropiedad.com/admin" ? "active" : "" ?>">
                    <a href="https://somospropiedad.com/admin" target="_blank"><i class="bi bi-ui-checks-grid"></i> Administración</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>