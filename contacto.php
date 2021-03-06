<?php

$enviado = -1; // Controla si se envia o no

if (isset($_POST['Nombre'])) { // Verifica si viene desde el formulario o se carga la pagina por primera vez

$to = 'enriquevaquer93@gmail.com'; // Se envia al webmaster la primer copia

$mensaje = 'El mensaje lo envia ' . $_POST['Nombre'] . ' con telefono ' . $_POST['Telefono'] . ' desde su email ' . $_POST['Email'] . " \r \r" . $_POST['Mensaje'];

mail($to, $_POST['Mensaje desde la web Aglaia Psicología'], $mensaje); // envio al webmaster

$to = $_POST['Email']; // SE envia al usuario la segunda copia

$mensaje = "Su mensaje ha sido recibido correctamente, en la brevedad de lo posible nos pondremos en contacto con usted. \r \r Gracias por contactar con nosotros \r \r"  . $_POST['Mensaje'];


mail($to, $_POST['Respuesta Aglaia Psicología'], $mensaje); // Envio al usuario

$enviado = 1; // Marca que se envio OK

}

?>

<!--=======================================================================
    =======================================================================

                                88                                       88
             .""""".            88            ,d                         88    
    ____    __\\\\\\__          88            88                         88
    \___'¬¬"          .-.       88,dPPYba,  MM88MMM  88,dPYba,,adPYba,   88    
    /___<             '0'       88P'    "8a   88     88P'   "88"    "8a  88
   /____,¬¬.       y     B      88       88   88     88      88      88  88
           "".____  ___-"       88       88   88,    88      88      88  88
           //    / /            88       88   "Y888  88      88      88  88

    =======================================================================
    Enrique Vaquer - CSS 
    FECHA
    ======================================================================= -->

    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Contacto</title>
        
                <!-- Metadatos Web -->
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
            
                <!-- HTML Meta Tags -->
                <title>Contacto</title>
                <meta name="description" content="Contacta a través de correo electrónico o por teléfono para reservar tu cita previa con nosotros y comenzar tu asesoramiento.">
            
                <!-- Google / Search Engine Tags -->
                <meta itemprop="name" content="Contacto">
                <meta itemprop="description" content="Contacta a través de correo electrónico o por teléfono para reservar tu cita previa con nosotros y comenzar tu asesoramiento.">
                <!-- <meta itemprop="image" content="http://"> -->
            
                <!-- Facebook Meta Tags -->
                <meta property="og:url" content="https://www.facebook.com/AglaiaCentroPsicologia">
                <meta property="og:type" content="website">
                <meta property="og:title" content="Aglaia Psicologia">
                <meta property="og:description" content="Contacta a través de correo electrónico o por teléfono para reservar tu cita previa con nosotros y comenzar tu asesoramiento.">
                <!-- <meta property="og:image" content="http://"> -->
            
                <!-- Twitter Meta Tags -->
                <!-- <meta name="twitter:card" content="summary_large_image">
                <meta name="twitter:title" content="Aglaia Psicologia">
                <meta name="twitter:description" content="">
                <meta name="twitter:image" content="http://"> -->
        
                <!-- Enlace a biblioteca de iconos tipográficos -->
                <!-- FONTAWESOME -->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
                <!-- Enlaces externos -->
                <!-- CSS -->
                <link rel="stylesheet" href="css/estilos.css">

                <!-- -+-+-+-+-+-+-+-+- FAVICON +-+-+-+-+-+-+-+-+-+-+-+- -->
                <link rel="shortcut icon" href="iconos/logo_favicon.ico" type="image/x-icon">
                <link rel="icon" href="iconos/logo_favicon.ico" type="image/x-icon">
        
        </head>
        
        <body>
            
            
            <!--
            db   db d88888b  .d8b.  d8888b. d88888b d8888b.
            88   88 88'     d8' `8b 88  `8D 88'     88  `8D
            88ooo88 88ooooo 88ooo88 88   88 88ooooo 88oobY'
            88~~~88 88~~~~~ 88~~~88 88   88 88~~~~~ 88`8b
            88   88 88.     88   88 88  .8D 88.     88 `88.
            YP   YP Y88888P YP   YP Y8888D' Y88888P 88   YD
        
        
            -->
            <header>
                    <!-- Caja para todo contenido -->
                    <div class="gamburger">
                        
                        <!-- "input i label" para abrir i cerar Meniu -->
                        <input class="input__meniu" type="checkbox" id="activ">
                        <label class="icon_burger" for="activ">&#9776</label>
                        <!-- Caja de meniu principal -->
                        <nav class="meniu">           
                            <div class="caja__desplegable">
                                <input class="input__submeniu" type="checkbox" id="submeniu">
                                <label class="desplegable" for="submeniu">Servicios</label>
                                <span class="caja__submeniu__movil">
                                <!-- Caja meniu desplegable de servicios -->
                                    <ul class="menu__services__desplegable">
                                        <li class="salud"><a href="servicios_clinica.html">Psicología de la Salud</a></li>   
                                        <li class="legal"><a href="servicios_forense.html">Psicología Legal y Forense</a></li>
                                        <li class="formaciones"><a href="servicios_formacion.html">
                                    Investigación,Formación, Asesoramiento a Profesionales </a></li>
                                    </ul>
                                </span>
                                <i class="icon__f fas fa-caret-up"></i>
                                </div>
                            <a href="contacto.php">Contacto</a>
                            <a class="blog" href="#">Blog</a>
                        </nav>
                        <!-- icono para cerrar meniu principal -->
                         <a class="acloseMeniu" href=""><i class="fas fa-times closeMeniu"></i></a>        
                    <!-- LOGO -->
                        <picture>
                            <!-- Por defecto, baja resolución de imagen para Smartphone -->
                            <source srcset="img/smartphone/@1x/logo.png 1x,img/smartphone/@2x/logo@2x.png 2x" media="(min-width:0px) and (max-width:576px)">
                                
                      
                                
                            <!-- Alta resolución para Escritorio -->
                            <source srcset="img/tablet/@1x/logo.png 1x, img/tablet/@2x/logo@2x.png 2x" media="(min-width:992px) and (max-width:1920px)">
            
                                <!-- Imagen de respaldo en caso que no se admita el elemento picture -->
                             <a href="index.html"><img src="img/smartphone/logo.png" alt='Aglaia'></a>
                                
                        </picture>
                    
                   </div>
                </header>
            
        
        
        
            <section class= 'contacto'>
            <!--
             .o88b.  .d88b.  d8b   db d888888b d88888b d8b   db d888888b d8888b.  .d88b.
            d8P  Y8 .8P  Y8. 888o  88 `~~88~~' 88'     888o  88   `88'   88  `8D .8P  Y8.
            8P      88    88 88V8o 88    88    88ooooo 88V8o 88    88    88   88 88    88
            8b      88    88 88 V8o88    88    88~~~~~ 88 V8o88    88    88   88 88    88
            Y8b  d8 `8b  d8' 88  V888    88    88.     88  V888   .88.   88  .8D `8b  d8'
             `Y88P'  `Y88P'  VP   V8P    YP    Y88888P VP   V8P Y888888P Y8888D'  `Y88P'
             -->

     
            

            <h2 class="contacto__titulo">Información</h2>

            <?php

            if ($enviado == 1) { // Se envio ??

            ?>

                 El mensaje fue enviado con exito.

            <?php

            } else { // No es el envio es la primera vez y pide los datos

            ?>

            <form action="" class="contacto__form" name = "FormContactar">

                <input type="text" class="contacto__form__input1"
                placeholder="* Nombre y Apellidos" name = "Nombre" required>

                <input type="email" class="contacto__form__input2"
                placeholder="* Email" name = "Email" required>

                <input type="text" class="contacto__form__input3"
                placeholder="Teléfono" name = "Telefono">

                <textarea name="text"  class="contacto__form__input4"
                >* Mensaje</textarea name = "Mensaje" required>

                <button class="contacto__form__boton" type="submit">Enviar</button>
            </form>
            
        <?php

        }
        
        ?>

            <iframe class="contacto__mapa"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3075.3344148932656!2d2.6490415148266027!3d39.574612914346694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12979250d64f23d1%3A0x120a43ffa231e064!2sCarrer+de+Can+Ma%C3%A7anet%2C+1%2C+1C%2C+07003+Palma%2C+Illes+Balears!5e0!3m2!1ses!2ses!4v1542485060806" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        
        
            </section>
        
        
        
        
            <footer class="footer">
                <!--
                d88888b  .d88b.   .d88b.  d888888b d88888b d8888b.
                88'     .8P  Y8. .8P  Y8. `~~88~~' 88'     88  `8D
                88ooo   88    88 88    88    88    88ooooo 88oobY'
                88~~~   88    88 88    88    88    88~~~~~ 88`8b
                88      `8b  d8' `8b  d8'    88    88.     88 `88.
                YP       `Y88P'   `Y88P'     YP    Y88888P 88   YD
            
            
                -->
            
                <!-- -+-+-+-+-+-+-+-+- INFORMACION DE CONTACTO +-+-+-+-+-+-+-+-+-+-+-+- -->
                
                <ul class="footer__info">
    
                    <div class="footer__caja__telf">
                        <li class="footer__info__telf">            
                            <!-- <i class="footer__info__telf__icono"></i> -->
                            <a href="tel: +34 871 71 33 89" class="footer__info__telf__texto">871 71 33 89</a>
                        </li>
                        <li class="footer__info__mvl">
                            <!-- <i class="footer__info__mvl__icono"></i> -->
                            <a href="tel: +34 635 93 67 29" class="footer__info__mvl__texto">635 93 67 29</a>
                        </li>
                    </div>
                    
                    <div class="footer__caja__ubi">
                        <li class="footer__info__mail">
                            <!-- <i class="footer__info__mail__icono"></i> -->
                            <span class="footer__info__mail__texto1">info@aglaiapsicologia.es</span>
                        </li>
                        <li class="footer__info__ubi">
                            <!-- <i class="footer__info__ubi__icono"></i> -->
                            <div class="footer__info__ubi__texto"> 
                                <p class="footer__info__ubi__texto__direccion">
                                Aglaia Centro de Psicología <br>
                                C/ Can Maçanet, 1-1C <br>
                                07003 Palma de Mallorca 
                                </p>
                            </div>
                        </li>
                    </div>
            
                    <!-- -+-+-+-+-+-+-+-+- REDES SOCIALES +-+-+-+-+-+-+-+-+-+-+-+- -->
                    
                    <li class="footer__info__redes">
                        <a href="https://www.facebook.com/AglaiaCentroPsicologia" class="footer__info__redes__face">
                                <svg 
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         width="50px" height="50px"
                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"/></svg>
                        </a>
                        <a class="footer__info__redes__inta">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="50px" height="50px" viewBox="0 0 97.395 97.395" style="enable-background:new 0 0 97.395 97.395;"
                                xml:space="preserve">
                           <g>
                               <path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
                                   V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
                                   h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
                                   c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
                                   c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
                                   H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
                                   c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"/>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           </svg>
                        </a>
                        <a class="footer__info__redes__twitter">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="50px" height="50px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                <g>
                                    <g id="post-twitter">
                                        <path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z
                                             M400.35,186.15c-2.55,117.3-76.5,198.9-188.7,204C165.75,392.7,132.6,377.4,102,359.55c33.15,5.101,76.5-7.649,99.45-28.05
                                            c-33.15-2.55-53.55-20.4-63.75-48.45c10.2,2.55,20.4,0,28.05,0c-30.6-10.2-51-28.05-53.55-68.85c7.65,5.1,17.85,7.65,28.05,7.65
                                            c-22.95-12.75-38.25-61.2-20.4-91.8c33.15,35.7,73.95,66.3,140.25,71.4c-17.85-71.4,79.051-109.65,117.301-61.2
                                            c17.85-2.55,30.6-10.2,43.35-15.3c-5.1,17.85-15.3,28.05-28.05,38.25c12.75-2.55,25.5-5.1,35.7-10.2
                                            C425.85,165.75,413.1,175.95,400.35,186.15z"/>
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                        </a>
                    </li>
                
            
                <!-- -+-+-+-+-+-+-+-+- COLABORACIONES +-+-+-+-+-+-+-+-+-+-+-+- -->
                    <div class="footer__col">
                    <!-- -+-+-+-+-+-+-+-+- logo MICA +-+-+-+-+-+-+-+-+-+-+-+- -->
                    <a href="http://lasovejasdemica.com/">
                    <picture class="footer__pic1">
                        <!-- -+-+-+-+-+-+-+-+- movil +-+-+-+-+-+-+-+-+-+-+-+- -->
                        <source srcset='img/smartphone/@2x/logo_mica@2x.jpg' media='(min-width:320px)'>
            
                        <!-- -+-+-+-+-+-+-+-+- escritorio +-+-+-+-+-+-+-+-+-+-+-+- -->
                        <source srcset='img/desktop/@2x/logo_mica@2x.jpg' media='(min-width:1024px)'>
            
                        <img src='img/smartphone/@2x/logo_mica.jpg' alt="" class="footer__pic1__mica">
                    </picture>
                    </a>
            
                    <!-- -+-+-+-+-+-+-+-+- logo UIB +-+-+-+-+-+-+-+-+-+-+-+- -->
                    <a href="http://www.uib.cat/">
                    <picture class="footer__pic2">
                        <!-- -+-+-+-+-+-+-+-+- movil +-+-+-+-+-+-+-+-+-+-+-+- -->
                        <source srcset='img/smartphone/@2x/logo_uib@2x.jpg' media='(min-width:320px)'>
                     
                        <!-- -+-+-+-+-+-+-+-+- escritorio +-+-+-+-+-+-+-+-+-+-+-+- -->
                        <source srcset='img/desktop/@2x/logo_uib@2x.jpg' media='(min-width:1024px)'>
                
                        <img src='img/smartphone/@2x/logo_uib.jpg' alt="" class="footer__pic2__uib">
                    </picture>
                    </div>
                    </a>
            
            
                <!-- -+-+-+-+-+-+-+-+- COOCKIES Y COPYRIGHT +-+-+-+-+-+-+-+-+-+-+-+- -->
                    
                    <div class="footer__final">
                        <a href="">
                        <h5 class="footer__coockies__legalidad">Legalidad</h5>
                        </a>
                        
                        <a href="">
                        <h5 class="footer__mapa">Mapa del sitio web</h5>
                        </a>
                        
                        <a href="">
                        <h5 class="footer__privacidad">Privacidad</h5>
                        </a>
                            
                    </div>
                    <h6 class="footer__copyright">&copy; Copyright 2018 - Aglaia Psicología</h6>
                    
                </ul>
                </footer>

        </body>
        </html>
        
        