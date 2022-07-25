<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8757c1678.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="../../infotkd_web_site/css/normalize.css">
    <link rel="stylesheet" href="../../infotkd_web_site/css/stylepageform.css">
    <title>Infotkd</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <nav class="nav_contenedor container">

            <figure class="logo">
                <img class="logo_img" src="../../infotkd_web_site/image/infotkd-logo.png" href="../../infotkd_web_site/html/index.html">
            </figure>

            <div class="cont_links" id="cont_links">
                <div class="cont_menu">
                    <h3>Infotkd</h3>
                    <ul class="nav_links">
                        <li>
                            <a href="../../infotkd_web_site/html/index.html" class="nav__links">Home<i class="fa-solid fa-house"></i></a>
                        </li>

                        <li>
                            <a href="../../infotkd_web_site/html/pagina_en_construccion.html" class="nav__links">Noticias<i class="fa-solid fa-newspaper"></i></a>
                        </li>

                        <li>
                            <a href="../../infotkd_web_site/html/pagina_en_construccion.html" class="nav__links">Eventos<i class="fa-solid fa-calendar-check"></i></a>
                        </li>
                        
                        <li>
                            <a href="../../infotkd_web_site/html/pagina_en_construccion.html" class="nav__links">BBL<i class="fa-solid fa-barcode"></i></a>
                        </li>

                        <li>
                            <a href="../../infotkd_web_site/html/pagina_en_construccion.html" class="nav__links">Contacto<i class="fa-solid fa-paper-plane"></i></a>
                        </li>
                    </ul>
                    <div class="cont_redes">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>

                        <li>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                    </div>
                </div> 
            </div>  

            <div id="menu_hamburguesa">
                <i class="fa-solid fa-bars"></i>
            </div>  
        </nav>
    </header>

    <main class="main container">
        <section class="section">   
                <?php if(!empty($error)): ?>
                    <div class="div_alerta">
                        <div class="div_alerta_p"><i class="fa-solid fa-triangle-exclamation"></i><?php echo $error; ?></div>
                    </div>
                <?php endif; ?>

                <?php if(!empty($exitoso)): ?>
                    <div class="div_exitoso">
                                <div class="div_exitoso_p"><i class="fa-solid fa-circle-check"></i><?php echo $exitoso; ?></div>
                    </div>
                <?php endif; ?>

                <?php if(!empty($alerta_dni)): ?>
                    <div class="div_alerta_dni">
                        <div class="div_alerta_dni_p"><i class="fa-solid fa-triangle-exclamation"></i><?php echo $alerta_dni; ?></div>
                    </div>
                <?php endif; ?>

                <form class="form" name="form1" action="../../infotkd_web_site/php/form.php" method="POST">
                    <div class="contenedor_titulo_princ">
                        <h1>Torneo Nacional</h1>
                        <h2>¡Inscribite ya!</h2>
                    </div>

                    <div class="fila_A">
                            <div class="cont_titulo_filaA">
                                <h3>Datos del Coach/Instructor</h3>
                            </div>

                            <div class="div_A">
                                <input type="text" name="escuela" id="" placeholder="Escuela" require>
                            </div>
            
                            <div class="div_A">
                                <input type="text" name="instructor" id="" placeholder="Instructor (Nombre y Apellido)" require> 
                            </div>
            
                            <div class="div_A">
                                <input type="text" name="coach" id="" placeholder="Coach (Nombre y Apellido)" require>
                            </div>
                        
                            <div class="div_A">
                                <input type="text" name="email" id="" placeholder="E-mail: xxxxxxx@gmail.com" require>
                            </div>
            
                            <div class="div_A">
                                <input type="tel" name="celular" id="" placeholder="Celular/Whatsapp" require>
                            </div>

                            <div class="div_A">
                                <input type="text" name="othercamp" id="" placeholder="Othercamp">
                            </div>  
                    </div>
                        
                    <div class="fila_B clonar">

                            <div class="cont_titulo_filaB">
                                <h3>Datos del Competidor</h3>
                                <span class="puntero ocultar">Eliminar</span>
                            </div>

                            <div class="columnaB">
                
                                <div class="cont_nombre_dni">
                                    <div class="div_nombre_dni">
                                        <input type="text" name="competidor[]" id="" placeholder="Nombre y Apellido del competidor" require>
                                    </div>
            
                                    <div class="div_nombre_dni">
                                        <input type="tel" name="dni[]" id="" placeholder="DNI (sin puntos ni comas)" require>
                                    </div>
                                </div>

                                <div class="div_B">
                                    <span><p>Género</p></span>
                                    <select name="genero[]" id="">
                                        <option value="-">-</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>  
                                </div>
                
                                <div class="div_B">
                                    <span><p>Categoría</p></span>
                                    <select name="categoria[]" id="">
                                        <option value="-">-</option>
                                        <option value="Blanco - Blanco P. Amarilla">Blanco - Blanco P. Amarilla</option>
                                        <option value="Verde - Verde P. Azul">Verde - Verde P. Azul</option>  
                                        <option value="Amarillo - Amarillo P. Verde">Amarillo - Amarillo P. Verde</option>
                                        <option value="Azul - Azul P. Roja">Azul - Azul P. Roja</option>
                                        <option value="Rojo - Rojo P. Negra">Rojo - Rojo P. Negra</option>
                                        <option value="1° Dan">1° Dan</option>
                                        <option value="2° Dan">2° Dan</option>
                                        <option value="3° Dan">3° Dan</option>
                                        <option value="4° Dan">4° Dan</option>
                                        <option value="5° Dan">5° Dan</option>
                                        <option value="6° Dan">6° Dan</option>
                                        <option value="7° Dan">7° Dan</option>
                                        <option value="8° Dan">8° Dan</option>
                                        <option value="9° Dan">9° Dan</option>
                                    </select>
                                </div> 
                            
                                <div class="div_B">
                                    <span><p>Edad</p></span>
                                    <select name="edad[]" id="inputEdad">
                                        <option value="-">-</option>
                                        <option value="2-5 años">2 a 5 años</option>
                                        <option value="6-9 años">6 a 9 años</option>
                                        <option value="10-13 años">10 a 13 años</option>
                                        <option value="14-17 años">14 a 17 años</option>
                                        <option value="18-35 años">18 a 35 años</option>
                                        <option value="+35 años">+35 años</option>
                                    </select>                        
                                </div>
                
                                <div class="div_B">
                                    <span><p>Peso*</p></span>
                                    <select name="peso[]" id="">
                                        <option value="-">-</option>
                                        <option value="60-65kg">60-65kg</option>
                                        <option value="66-70kg">66-70kg</option>
                                        <option value="71-80kg">71-80kg</option>
                                        <option value="+80kg">+80kg</option>
                                        <option value="No Aplica">No Aplica</option>
                                    </select>
                                </div> 
                                <div class="div_B"><p>*Tenga en cuenta que aquellos competidores menores a 13 años
                                    deben elegir la opción 'No Aplica' para su peso.
                                </p></div>
                            </div>
                    </div>

                    <div class="contenedorClonado" id="contenedorClonado"></div>

                    <div class="div_buttons" id="div_btn_agregar">
                            <div class="cont_buttons">
                                <button class="button_agregar" id="agregar">Agregar competidor</button>
                                <button class="button_enviar" id="enviar" name="enviar">Enviar</button>
                            </div>
                    </div>
                </form>
        </section>
    </main>

    


    <script>
        let agregar = document.getElementById("agregar");
        let contenido = document.getElementById("contenedorClonado");

        agregar.addEventListener("click", e =>{
            e.preventDefault();

            let clonado = document.querySelector(".clonar");
            let clon = clonado.cloneNode(true);

            contenido.appendChild(clon).classList.remove("clonar");

            let remover = contenido.lastChild.childNodes[1].querySelectorAll("span");
            remover[0].classList.remove("ocultar");
        });

        contenido.addEventListener("click", e=>{
            e.preventDefault();

            if(e.target.classList.contains("puntero")){

                let contenedor = e.target.parentNode.parentNode;

                contenedor.parentNode.removeChild(contenedor);
            }
        });
    </script>

    <!-- Función mostrar menú -->

    <script>
        document.getElementById("menu_hamburguesa").addEventListener("click", mostrarMenu);

        function mostrarMenu (){
            //document.getElementById("move_background_form1").classList.toggle('move_background_form1');//
            document.getElementById("cont_links").classList.toggle('move_cont_links');
        };
    </script>

    <!-- <script src="../infotkd_web_site/js/script.js"></script> -->

</body>
</html>