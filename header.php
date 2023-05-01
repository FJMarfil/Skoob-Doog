<header>
  <!--Logo de la tienda-->
  <a href="index.php"><img src="images/logo.png" class="logo" alt="" /></a>

  <!--Barra de navegación-->
  <div>
    <ul id="navbar">
      <!--Enlaces a las distintas páginas-->
      <li>
        <a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                              echo 'class="active"';
                            } ?>>Inicio</a>
      </li>
      <li>
        <a href="shop.php" <?php if (basename($_SERVER['PHP_SELF']) == 'shop.php') {
                              echo 'class="active"';
                            } ?>>Tienda</a>
      </li>
      <li>
        <a href="about.html" <?php if (basename($_SERVER['PHP_SELF']) == 'about.html') {
                                echo 'class="active"';
                              } ?>>Sobre nosotros</a>
      </li>
      <li>
        <a href="contact.html" <?php if (basename($_SERVER['PHP_SELF']) == 'contact.html') {
                                  echo 'class="active"';
                                } ?>>Contacto</a>
      </li>
      <!--Botón de carrito-->
      <li id="lg-bag">
        <i class="far fa-shopping-bag"></i></a>
        <i id="cart-quantity"></i>
      </li>
    </ul>
    <a href="#" id="close"><i class="far fa-times"></i></a>
  </div>
  <!--Elementos que aparecen si se ve desde un dispositivo móvil-->
  <div id="mobile">
    <a href="#"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
  </div>
</header>