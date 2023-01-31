<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Francisco Jesús Marfil Vargas" />

    <title>Skoob Doog</title>

    <link rel="stylesheet" type="text/css" href="style.css" />

    <!--Importamos la librería font-awesome (contiene fuentes e iconos que utilizaremos)-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <section>
      <nav>
        <div class="logo">
          <img src="media/logo.png" />
        </div>

        <ul>
          <li><a href="#Home">Inicio</a></li>
          <li><a href="#About">Información</a></li>
          <li><a href="#Featured">Destacados</a></li>
          <li><a href="#Arrivals">Nuevo</a></li>
          <li><a href="#Reviews">Reviews</a></li>
          <li><a href="#Blog">Blog</a></li>
        </ul>

        <!--Aquí pondremos los iconos de Font Awesome-->
        <div class="iconos_fa">
          <i class="fa-solid fa-magnifying-glass"></i>
          <i class="fa-solid fa-heart"></i>
        </div>
      </nav>

      <div class="main">
        <div class="main_tag">
          <h1>Bienvenido a<br /><span>SKOOB DOOG</span></h1>

          <p>Tu librería de confianza. ¡Tenemos el libro que buscas!</p>
          <a href="#" class="main_btn">Ver catálogo</a>
        </div>

        <div class="main_img">
          <img src="media/444.png" />
        </div>
      </div>
    </section>

    <!--Servicios-->

    <div class="servicios">
      <div class="servicios_caja">
        <div class="servicios_tarjeta">
          <i class="fa-solid fa-truck-fast"></i>
          <h3>Envíos rápidos</h3>
          <p>Realiza un pedido y obtén tu libro en muy poco tiempo.</p>
        </div>

        <div class="servicios_tarjeta">
          <i class="fa-solid fa-headset"></i>
          <h3>Asistencia</h3>
          <p>Si tiene algún problema o duda, no dude en contactar con nosotros.</p>
        </div>

        <div class="servicios_tarjeta">
          <i class="fa-solid fa-tag"></i>
          <h3>Mejores precios</h3>
          <p>Garantizamos el mejor precio de mercado.</p>
        </div>

        <div class="servicios_tarjeta">
          <i class="fa-solid fa-lock"></i>
          <h3>Pago seguro</h3>
          <p>Servicio de pago a través de intermediario seguro.</p>
        </div>
      </div>
    </div>

    <!--About-->

    <div class="about">
      <div class="about_image">
        <img src="media/about.png" />
      </div>
      <div class="about_tag">
        <h1>Sobre nosotros</h1>
        <p>
          Somos un equipo de personas que compartimos el amor por la lectura y queremos transmitirlo al resto.
        </p>
        <a href="#" class="about_btn">Más información</a>
      </div>
    </div>
  </body>
</html>
