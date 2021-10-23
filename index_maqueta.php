<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distefano Shop</title>

  <!-- <link rel="stylesheet" href="assets/css/styles.css"/> -->
</head>

<body>

  <!-- cabecera -->
  <div id="container">
    <header id="header">
      <div id="logo">
        <img src="assets/img/Distefano.jpeg" alt="Distefano logo" href="index.php" />
        <a href="index.php">
          Distefano Shop
        </a>
      </div>
    </header>
    <!-- menu -->
    <nav id="menu">
      <ul>
        <li>
          <a href="#">Inicio</a>
        </li>
        <li>
          <a href="#">Categoria 1</a>
        </li>
        <li>
          <a href="#">Categoria 2</a>
        </li>
        <li>
          <a href="#">Categoria 3</a>
        </li>
        <li>
          <a href="#">Categoria 4</a>
        </li>
      </ul>
    </nav>

    <!-- barra lateral -->
    <div id="content">

      <aside id="lateral">
        <div id="login" class="block-aside">
          <h3>Entrar a la web </h3>
          <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />
            <label for="password">Contraseña</label>
            <input type="password" name="password" />
            <input type="submit" value="Enviar" />
          </form>
          <ul>
            <li>
              <a href="#">Mis pedidos</a>
            </li>
            <li>
              <a href="#">Gestionar pedidos</a>
            </li>
            <li>
              <a href="#">Gestionar categorias</a>
            </li>
          </ul>

        </div>
      </aside>
      <!-- contenido -->

      <div id="central">
        <h1>Productos destacados</h1>
        <div class="product">
          <img src="assets/img/camisa.jpg" />
          <h2>Camiseta Azul Ancha</h2>
          <p>30 quetzales</p>
          <a href="" class="button">Comprar</a>
        </div>
        <div class="product">
          <img src="assets/img/camisa.jpg" />
          <h2>Camiseta Azul Ancha</h2>
          <p>30 quetzales</p>
          <a href="" class="button">Comprar</a>
        </div>
        <div class="product">
          <img src="assets/img/camisa.jpg" />
          <h2>Camiseta Azul Ancha</h2>
          <p>30 quetzales</p>
          <a href="" class="button">Comprar</a>
        </div>
        <div class="product">
          <img src="assets/img/camisa.jpg" />
          <h2>Camiseta Azul Ancha</h2>
          <p>30 quetzales</p>
          <a href="" class="button">Comprar</a>
        </div>
        <div class="product">
          <img src="assets/img/camisa.jpg" />
          <h2>Camiseta Azul Ancha</h2>
          <p>30 quetzales</p>
          <a href="" class="button">Comprar</a>
        </div>
      </div>
    </div>


    <!-- footer -->
    <div class="container">
      <footer class="text-center">
        <p>Desarrollado por Jonathan Cameros &copy; <?= date('Y') ?></p>
      </footer>
    </div>
  </div>
</body>

</html>