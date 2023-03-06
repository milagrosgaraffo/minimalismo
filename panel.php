<?php session_start();

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){

echo "Hola! ";
echo $_SESSION['nombre'];
echo $_SESSION['apellido'];
echo "<a href='salir.php'>Cerrar sesion</a>";
}
?>
<!DOCTYPE html>
<body lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<header>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="artistas.html">Artistas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historia.html">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="obras.html">Obras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Cuenta</a>
			<li class="nav-item">
            <a class="nav-link" href="cerrar.php">Cerrar Sesión</a>
          </li>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="register.html">Registro</a></li>
              <li><a class="dropdown-item" href="login.html">Login</a></li>
            </ul>
          </li>
        </ul>
        <form action="buscador.php" method="post">
          <input type="search" class="form-control" placeholder="Buscar" name="busqueda">
        </form>
      </div>
    </div>
  </nav>
</header>

<section class="py-5 text-center container">
    <div class="row py-lg-2">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h2 class="fw-normal">Bienvenido <?php echo $_SESSION['nombre'];?> a tu perfil!</h2>
		<h4 class="fw-light p-2">Disfrutá de nuestro contenido exclusivo</h4>
      </div>
    </div>

<div class="row featurette p-3 container-fluid">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1 p-5">Profundizando sobre el minimalismo...</h2>
    <p class="lead p-2"> Como sucede con cualquier corriente artística, el arte minimalista tiene una serie de peculiaridades que la caracterizan y la diferencian de otras formas de expresión. Es una tendencia que se refiere a todo aquello que es reducido a lo esencial, despojando elementos que no son de gran utilidad. En las obra artística se usan los mínimos recursos posibles. Sobre todo destaca por la ausencia de elementos orgánicos y la abstracción de toda la obra, mediante figuras geométricas. Además su simplicidad y sencillez llega a envolver los espacios expositivos con paredes blancas y salas de gran tamaño, aumentado la sensación de apertura y simplicidad. Es una forma abstracta de criticar el consumismo desmedido y la exageración moderna del siglo XX. </p>
  </div>
  <div class="col-md-5">
    <img src="imagenes/filosofiafoto.png" height="500" alt="">
  </div>
</div>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 Milagros Garaffo</p>
</div>
</body>
</html>
<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "Hola! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];

}
?>
<body>
</body>
</html>