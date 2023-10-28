<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestor Contraseñas</title>
    <style>
      body {
        background-color: rgb(167, 88, 219);
      }
      h3 {
        background-color: aliceblue;
      }
      .contenedorpadre {
        position: relative;
        width: 1000px;
        height: 200px;
      }

      .contenedorhijo {
        width: 400px;
        height: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -25px 0 0 -25px;
        background-color: pink;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="contenedorpadre">
      <div class="contenedorhijo">
        <h3>
          Generador de contraseñas seguras
        </h3>
        <form action="Generador.php" method="post">
          <br>
          <br>
          <input type="number" name="generar"><br>
          <br>
          <div class="boton">
            <input type="submit" value="Generar contraseñas">
            <br>
          </div>
        </form>
        <hr />
        <h4>BBVA:</h4>
        <p>
          
        </p>
        <hr />
      </div>
    </div>
  </body>
</html>
