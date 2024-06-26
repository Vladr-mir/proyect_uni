<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="form-style.css">
  <script src="../../main.js" defer></script>
  <title>Añadir unidad de medida</title>
</head>
<body>
  <!-- Titulo principal de la pagina -->
  <header class="bright">
    <p>EL PROGRESO</p>
    <button onclick="location.href='../user/admin.php'">Volver</button>
  </header>

  <!-- Añade tipo de unidad de medida -->

  <div class="page">
    <!-- Barra de navegación izquierda -->
    <nav>
      <a href="../../home.html">Home</a>
      <a href="../static/products.html">Productos</a>
      <a href="../static/services.html">Servicios</a>
      <a href="../static/about.html">Sobre nosotros</a>
      <a href="../static/oferts.html">Ofertas</a>
      <a href="../static/tipos_de_cocina.html">Tipos de cocina</a>
      <a href="../static/contact.html">Contactanos</a>
    </nav>

    <!-- En esta seccion se encuentra el contenido de la pagina -->
    <section>
      <!-- Formulario -->
      <form action="../scripts/unidadeshandler.php" method="POST">
        <h1>Añadir unidad de medida</h1>
        <table>
          <!-- row:1 -->
          <tr>
            <td>Nombre de la unidad de medida:</td>
            <td><input type="text" name="unidad" id="" placeholder="Libras"></td>
          </tr>

          <!-- row:2 -->
          <tr>
            <td>Descripcion:</td>
            <td><input type="text" name="descripcion" id="" placeholder="Descripcion"></td>
          </tr>

          <!-- row:3 -->
          <tr>
            <td colspan="2">
              <input type="submit" value="Enviar">
              <input type="reset" value="Empezar de nuevo">
            </td>
          </tr>
        </table>
      </form>
    </section>
  </div>

  <footer class="dark">Copyright © Universidad Tecnológica</footer>
</body>
</html>