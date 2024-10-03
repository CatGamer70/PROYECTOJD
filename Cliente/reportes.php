<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consolas Demo</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <header>
    <!--Encabezado-->
    <?php include_once("Vistas/encabezado.php"); ?>
  </header>

  <div class="container">
    <h2>REPORTES DE USUARIOS</h2>
    <div class="row">
        <div class="col">
            <a href="R_usu_pdf.php">
                <img src="Recursos/PDF.png" width="50px" height="50px">
            </a>
        </div>
        <div class="col">
            <a href="R_usu_excel.php">
                <img src="Recursos/EXCEL.png" width="50px" height="50px">
            </a>
        </div>
        <div class="col">
        <a href="R_usu_gra.php">
                <img src="Recursos/GRAFICA.png" width="50px" height="50px">
            </a>
        </div>
    </div>

    <h2>REPORTES DE PRODUCTOS</h2>
    <div class="row">
        <div class="col">
            <a href="R_prod_pdf.php">
                <img src="Recursos/PDF.png" width="50px" height="50px">
            </a>
        </div>
        <div class="col">
            <a href="R_prod_excel.php">
                <img src="Recursos/EXCEL.png" width="50px" height="50px">
            </a>
        </div>
        <div class="col">
        <a href="R_prod_gra.php">
                <img src="Recursos/GRAFICA.png" width="50px" height="50px">
            </a>
        </div>
    </div>

    <h2>REPORTES DE CATEGORIAS</h2>
    <div class="row">
        <div class="col">
            <a href="R_cate_pdf.php">
                <img src="Recursos/PDF.png" width="50px" height="50px">
            </a>
        </div>
        <div class="col">
            <a href="R_cate_excel.php">
                <img src="Recursos/EXCEL.png" width="50px" height="50px">
            </a>
        </div>
        <div class="col">
        <a href="R_cate_gra.php">
                <img src="Recursos/GRAFICA.png" width="50px" height="50px">
            </a>
        </div>
    </div>
  </div>
  <footer>
    <!-- inicia pie-->
    <?php include_once("Vistas/pie.php"); ?>
    <!--fin pie-->
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>
