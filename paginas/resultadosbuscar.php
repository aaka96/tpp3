<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filosofia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/filosofia.css">

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="container">
                        <a class="navbar-brand" href="../index.html">
                            <img src="../images/logocontipito.svg" alt="" height="150">
                        </a>
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class=" nav-link h3" href="historia.html">Historia</a>
                        </li>
                        <li class="nav-item">
                            <a class="active nav-link h3" href="filosofia.html">Filosofia</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle h3" href="artistas.html" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Artistas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item h3 nav-link" href="artistas.html">Artistas</a></li>
                                <li><a class="dropdown-item h3 nav-link" href="obras-iconicas.html">Obras Iconicas</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link h3" href="museos.html">Museo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3" href="contacto.html">Contacto</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article style="width:60%;margin:0 auto;border:solid;padding:10px">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . "<br>";
            echo $resultados['bio'] . "<br>";
			
	?>
    </p>
    <img class="artist" src="<?php echo $resultados['foto'];?>" alt="">
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>
    <footer class="text-center my-0">
        <span>
            Hecho por Axel Kachani - 2022
        </span>
    </footer>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>