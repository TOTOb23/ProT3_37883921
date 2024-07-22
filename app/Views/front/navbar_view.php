<!--bara de navegacion-->
<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>
<nav class="navbar navbar-expand-lg bg-body-green">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/principal_ultimo') ?>">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar para admin (perfil_id = 1) -->
    <?php if($perfil == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="#">Admin: <?php echo $nombre; ?></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/quienes_somos') ?>">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/acerca_de') ?>">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/registro') ?>">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/login') ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout') ?>">Logout</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

    <!-- Navbar para cliente (perfil_id = 2) -->
    <?php elseif($perfil == 2): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="#">Cliente: <?php echo $nombre; ?></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/quienes_somos') ?>">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/acerca_de') ?>">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/mi_cuenta') ?>">Mi cuenta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout') ?>">Logout</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

    <!-- Navbar para usuario deslogueado (perfil_id no definido o diferente de 1 y 2) -->
    <?php else: ?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/quienes_somos') ?>">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/acerca_de') ?>">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/registro') ?>">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/login') ?>">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    <?php endif; ?>
  </div>
</nav>
<!--Fin de barra de navegacion-->
