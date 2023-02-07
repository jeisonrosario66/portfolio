<?php
include("php/conex_db.php");
$query_project = "SELECT * FROM portafolio.project";
$query_project_result = mysqli_query($conex, $query_project);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a29143056b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Jeison Developer</title>
</head>
<body>
    <div class="contenedor ">
        <?php
            include("php/menu_lateral.php");
        ?>
        <div id="info_principal" class="info_principal if_prcp_cntr">
            <?php
            include("php/cabezera_2.php");
            ?>
           
            <section  id="inicio"  class="card">
                <div class="card_inicio">
                    <h1>Soy Jeison Rosario<i class="fa-solid fa-circle"></i></h1>
                    <p>En busca de nuevas experiencias en el campo de la programación y la tecnología de la información</p>
                    <div class="botones">
                        <button id="btn" class="btn_basic btn_portfolio"><i class="fa-solid fa-folder"></i><a href="#portafolio" >Ver Portafolio</a></button>
                        <button id="btn_contacto" class="btn_basic btn_contacto">
                            <i id="btn_contacto_tag" class="fa-solid fa-envelope"></i>
                            <a id="btn_contacto_tag2" href="#contacto">Contáctame</a>
                        </button>
                    </div>
                </div>
            </section>
            
            <section id="about" class="card">
                <div class="card_about card_basic">
                    <h2>Acerca de mi</h2>
                    <div class="separador"></div>   
                    <div class="info_c">
                        <img src="source/img/perfil.jpg" alt="perfil jeison rosarsio" class="foto_perfil">
                        <div class="info_c2">
                            <h3>Hola</h3>
                            <p class="about_me">Pensamiento lógico y analítico, para aportar al equipo de trabajo. Habilidades y manejo de nivel medio en el lenguaje python
                                habilidades en: Python, Php, Sql, Html, CSS, Javascript Sistemas Estudios independientes (+2 año) con alto ritmo de aprendizaje.
                                </p>
                            <div class="info_c3">
                                <div class="div1">
                                    <p><span>Nombre:</span> Jeison Rosario</p>
                                    <p><span>Nacimiento:</span>5 Marzo, 1999</p>
                                </div>
                                <div class="div2">
                                    <p><span>Residencia:</span> Santigo, Chile</p>
                                    <p><span>Email:</span> developer@jeisonrosariodev.com</p>
                                </div>
                            </div>
                            <button id="btn_cv" class="btn_cv btn_basic"><a ><i class="fa-solid fa-circle-down"></i>Descargar CV</a></button>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="skills" class="card">
                <div class="card_skill card_basic">
                    <h2>Mis Skills</h2>
                    <div class="separador"></div>   
                    <!-- <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam accusantium autem doloribus temporibus ipsum, repellat dolorum. Quo inventore aspernatur</p> -->
                    <br>
                    <br>
                    <div class="list_skill">
                        <div class="skill_g_1">
                            <div class="skill_python skills">
                                <h3>Python</h3>
                                <div class="barra_progress">
                                    <div class="progress" style="width: 80%;"></div>
                                </div>
                            </div>     
                            <div class="skill_php skills">
                                <h3>PHP</h3>
                                <div class="barra_progress">
                                    <div class="progress" style="width: 60%;"></div>
                                </div>
                            </div> 
                        </div>
                        <div class="skill_g_2">
                            <div class="skill_sql skills">
                                <h3>SQL</h3>
                                <div class="barra_progress">
                                    <div class="progress" style="width: 65%;"></div>
                                </div>
                            </div>    
                            <div class="skill_html skills">
                                <h3>HTML</h3>
                                <div class="barra_progress">
                                    <div class="progress" style="width: 70%;"></div>
                                </div>
                            </div>  
                        </div>     
                        <div class="skill_g_3">
                            <div class="skill_css skills">
                                <h3>Css</h3>
                                <div class="barra_progress">
                                    <div class="progress" style="width: 65%;"></div>
                                </div>
                            </div>
                            <div class="skill_js skills">
                                <h3>JavaScrip</h3>
                                <div class="barra_progress">
                                    <div class="progress" style="width: 40%;"></div>
                                </div>
                            </div>       
                        </div>                      
                    </div>
                </div>
            </section>
          
            <section class="card">
                <div class="card_lenguajes card_basic">
                    <div class="div1">
                        <i class="fa-brands fa-python"></i>
                        <i class="fa-brands fa-php"></i>
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <div class="div2">
                        <i class="fa-brands fa-html5"></i>
                        <i class="fa-brands fa-css3-alt"></i>
                        <i class="fa-brands fa-square-js"></i>
                    </div>
                </div>
            </section>
            
            <section id="portafolio" class="card">
                <div class="card_portafolio card_basic">
                    <h2>Portafofio</h2>
                    <div class="separador"></div>
                    <div class="categorias">
                        <p class="all">Todos</p>
                    </div>
                    <div class="proyectos">
                        
                    <?php
                        while($row=mysqli_fetch_assoc($query_project_result)) { ?>
                        <div id="card_project" class="card_project">
                            <?php $id = $row['id_project'];?>
                            <a href='<?php echo "project_index.php?idproject=$id"; ?>' class="enlace_contenedor">
                                <div class="project_card_backgraund">
                                    <div id="info_project" class="info_project">
                                        <h4><?php echo $row['titulo']; ?></h4>
                                        <!-- <p>Html, Css, Javascrip, Php</p> -->
                                        <p class="fecha_project"><?php echo $row['fecha']; ?></p>
                                    </div>
                                    <img src="<?php echo $row['portada']; ?>" alt="imgen de proyecto" id="portada_proyecto" class="portada_proyecto">
                                </div>
                            </a>
                        </div>
                    <?php } mysqli_free_result($query_project_result); ?>   

                    </div>
                </div>
            </section>
        
            <section id="contacto" class="card">
                <div class="card_contacto">
                    <a href="https://wa.me/56934644131"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://github.com/jeisonrosario66"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/jeison-rosario-0488a7253/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </section>
        </div>
    </div>
    <script src="js.js"></script>

</body>
</html>