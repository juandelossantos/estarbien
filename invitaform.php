<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Club de Bienestar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/estilos.min.css">
        <script src="js/vendor/modernizr-2.7.1.min.js"></script>
    </head>
    <body>
      <header class="header">
        <div class="logo"><img src="img/logo.png"></div>
        <nav class="mainMenu">
          <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="queesherbalife.html">¿Qué es Herbalife?</a></li>
            <li><a href="estarbien.html">Estar Bien</a></li>
            <li><a href="unbuennegocio.html">Un Buen Negocio</a></li>
            <li><a class="activo" href="contacto.html">Contacto</a></li>
          </ul>
        </nav>
      </header>
      <div class="contenedor">
      <section class="sectionform">
      <div class="msg">
      <?php

      if(isset($_POST['email'])) {

      // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
      $email_to = "yoquiero@estarbien.co";
      $email_subject = "Solicitud de invitación a desayuno gratis desde la web";

      // Aquí se deberían validar los datos ingresados por el usuario
      if(!isset($_POST['nombre']) ||
      !isset($_POST['telefono']) ||
      !isset($_POST['email']) ||
      !isset($_POST['cuando'])) {

      echo "<h4>Ocurrió un error y el formulario no ha sido enviado. </h4>";
      echo "<p>Por favor, vuelva atrás y verifique la información ingresada</p >";
      die();
      }

      $email_message = "Detalles del formulario de contacto:\n\n";
      $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
      $email_message .= "E-mail: " . $_POST['email'] . "\n";
      $email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
      $email_message .= "Cuando: " . $_POST['cuando'] . "\n\n";

      $email_from = $_POST['email'];

      // Ahora se envía el e-mail usando la función mail() de PHP
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      @mail($email_to, $email_subject, $email_message, $headers);

      echo "<h4>Los datos se han enviado correctamente.</h4><p>¡Estaremos en contacto!.</p>";
      }
      ?>
      <a class="boton enlace" href="index.html">Regresar</a>
      </div>

    </section>
    </div>
    <footer class="footer clearfix">
      <h2>2014. <a href="mailto:yoquiero@estarbien.co">yoquiero@estarbien.co</a> - Distribuidor Independiente de <a href="http://www.herbalife.com.co" target="_blank">Herbalife</a>&copy;.</h2>
    </footer>
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>-->
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-52625311-1', 'auto');
            ga('create', 'UA-52623920-1', 'auto', {'name': 'estarBien'});
            ga('send', 'pageview');
            ga('estarBien.send', 'pageview');
    </script>
</body>
</html>
