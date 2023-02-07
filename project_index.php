<?php
include("php/conex_db.php");
$id = $_GET["idproject"];
$query_project = "SELECT titulo, contenido, portada, repo, fecha FROM portafolio.project
WHERE id_project = '$id'";

$query_project_result = mysqli_query($conex, $query_project);
while ($row= mysqli_fetch_assoc($query_project_result)) {
    $titulo = $row['titulo'];
    $contenido = $row['contenido'];
    $portada = $row['portada'];
    $repo = $row['repo'];
    $fecha = $row['fecha'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "Proyecto: $titulo"; ?></title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="https://kit.fontawesome.com/a29143056b.js" crossorigin="anonymous"></script>
    <style>
        .foto_portada {
            width: 100%;
        }
        .info_principal {
            width: 100%;
        }
        .contenido {
            margin: 40px 0 30px 0;
        }
        .footer_project {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .footer_project div a i {
            color: #000;
            font-size: 60px;
            
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <?php include("php/menu_lateral.php") ?>
        <div id="info_principal" class="info_principal if_prcp_cntr">
            <?php include("php/cabezera_2.php") ?>
            <section id="about" class="card">
                <div class="card_about card_basic">
                    <h2><?php echo $titulo; ?></h2>
                    <div class="separador"></div>   
                    <div class="info_c">
                        <img src="<?php echo $portada; ?>" alt="portada projecto" class="foto_portada">
                    </div>
                    <p class="contenido"><?php echo $contenido; ?></p>
                    <div class="footer_project">
                        <div>
                                <a class="repositorio" href="<?php echo $repo; ?>">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            <p>Repositorio</p>
                        </div>                        
                        <p class="fecha"><?php echo "Publicado: $fecha"; ?></p>
                    </div>
                </div>
            </section>
            
        </div>
    </div>
    <script src="js.js"></script>

</body>
</html>