<header>
  <a href="index.php"><img src="images/logo.png" class="logo" alt="" /></a>

  <div>
    <ul id="navbar">
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
        <a href="blog.html" <?php if (basename($_SERVER['PHP_SELF']) == 'blog.html') {
                              echo 'class="active"';
                            } ?>>Blog</a>
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
      <li id="lg-bag">
        <i class="far fa-shopping-bag"></i></a>
        <i id="cart-quantity"></i>
      </li>
    </ul>
    <a href="#" id="close"><i class="far fa-times"></i></a>
  </div>
  <div id="mobile">
    <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
  </div>
</header>