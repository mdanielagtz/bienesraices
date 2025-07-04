<?php 
    require 'includes/app.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contendor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">   
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cumque incidunt. Reiciendis consequuntur eveniet deleniti facere porro placeat magni eius laborum illum, earum quaerat possimus provident sit quibusdam doloremque perspiciatis.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cumque incidunt. Reiciendis consequuntur eveniet deleniti facere porro placeat magni eius laborum illum, earum quaerat possimus provident sit quibusdam doloremque perspiciatis.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, cumque incidunt. Reiciendis consequuntur eveniet deleniti facere porro placeat magni eius laborum illum, earum quaerat possimus provident sit quibusdam doloremque perspiciatis.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>
        
       <?php

            $limite = 3;
            include 'includes/templates/anuncios.php';
       
       ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
            <a href="contacto.php" class="boton boton-amarillo">Contactar</a>
        </div> <!-- .contenido-imagen -->
    </section>

    <div class = "contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article>
  
             <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
                        <p>Consejos para decorar tu hogar con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article>     
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Daniela Gutierrez</p>
            </div>
        </section>
    </div>

<?php 
    require 'includes/funciones.php';
    incluirTemplate('footer');
?>

