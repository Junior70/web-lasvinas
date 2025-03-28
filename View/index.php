<?php
// ****** Modulo de header *******
require_once("header.php"); 
?>


<!--Inicio Seccion Nosotros -->
<section id="nosotros" class="section">



    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Nosotros</h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Nuestro compromiso
                es cuidar la salud de nuestros clientes<br> a base de frutas selectas y naturales y asi brindar un
                servicio <br>exclusivo en atención al ciente de acuerdo a sus necesidades.</p>
            </p>
        </div>
        <div class="row content container">
            <div class="col-md-4 col-sm-8 col-xs-12 sidenav">
                <ul class="showcase">
                    <li class="thumb1"> <a href="#nosotros">
                            <img src="image/Nosotros/nosotros.jpg" width="500" height="374" alt="laviña">
                            <div class="media-body">
                                <h3 class="media-heading">Nosotros<i>╬</i></h3>
                                <p class="text-center wow fadeInDown">Nuestro compromiso es cuidar la salud de nuestro
                                    clientes a base de frutas seleccionadas y naturales, brindando asi un servicio
                                    exclusivo en atención al cliente de acuerdo a sus necesidades.</p>
                            </div>
                        </a> </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-8 col-xs-12 sidenav">
                <ul class="showcase">
                    <li class="thumb2"> <a href="#nosotros">
                            <img src="image/Nosotros/Mision.jpg" width="500" height="374" alt="laviña">
                            <div class="media-body">
                                <h3 class="media-heading">Misión<i>╬</i></h3>
                                <p class="text-center wow fadeInDown">Ofrecemos los mejores jugos naturales a base de
                                    frutas selectas y naturales, y asi satisfacer las necesidades de nuestros clientes.
                                </p>
                            </div>
                        </a> </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-8 col-xs-12 sidenav">
                <ul class="showcase">
                    <li class="thumb1"> <a href="#nosotros">
                            <img src="image/Nosotros/Vision.jpg" width="500" height="374" alt="laviña">
                            <div class="media-body">
                                <h3 class="media-heading">Visión<i>╬</i></h3>
                                <p class="text-center wow fadeInDown">Queremos ser una empresa reconocida a nivel
                                    nacional por la variedad de nuestros jugos,
                                    la continua innovación de productos , la calidad de productos y la atención
                                    exclusiva que damos a nuestros clientes.</p>
                            </div>
                        </a> </li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!--Fin Seccion Nosotros -->

<!--Inicio Seccion Productos -->
<section id="productos" class="section">

    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Productos</h2>
            <hr class="lines">
            <p class="productos-subti">Nuestros productos son de calidad!<br> Porque siempre pensamos en ustedes. <br>
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="controls text-center">
                    <a class="filter active btn btn-common" data-filter="all">
                        Deliciosos Productos!!!
                    </a>
                    <a class="filter btn btn-common" data-filter=".jugos">
                        Jugos y Extractos
                    </a>
                    <a class="filter btn btn-common" data-filter=".ensaladafrutas">
                        Ensaladas de Frutas
                    </a>
                    <a class="filter btn btn-common" data-filter=".sandwichs">
                        Sandwichs Mixtos
                    </a>
                    <a class="filter btn btn-common" data-filter=".calientes">
                        Bebidas Calientes
                    </a>
                </div>

            </div>

            <div id="producto" class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix jugos">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/jugo1.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/jugo1.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix jugos">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/jugo4.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/jugo4.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix jugos">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/jugo2.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/jugo2.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix jugos">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/extracto1.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/extracto1.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ensaladafrutas">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/ensalada1.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/ensalada1.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ensaladafrutas">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/ensalada2.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/ensalada2.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ensaladafrutas">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/frutilado1.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/frutilado1.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix ensaladafrutas">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/minifrutado1.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/minifrutado1.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix sandwichs">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/Sanwitch1.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/Sanwitch1.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix sandwichs">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/Sanwitch2.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/Sanwitch2.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix sandwichs">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/Sanwitch3.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/Sanwitch3.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix calientes">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/calientes1.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/calientes1.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix calientes">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/calientes2.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/calientes2.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix calientes">
                    <div class="producto-item">
                        <div class="shot-item">
                            <img src="<?php echo SERVER ?>image/productos/calientes3.jpg" alt="" />
                            <a class="overlay lightbox" href="image/productos/calientes3.jpg">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--Fin Seccion Productos -->


<!--Inicio Seccion Locales-->
<div id="local" class="section local-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Nuestros Locales</h2>
            <hr class="lines">
            <p class="section-subtitle">
                ¡¡¡Las viñas el paraíso de las frutas!!!<br>
                Visitanos en nuestros principales Locales.<br>
                Te esperamos!
            </p>
        </div>
        <div class="row local-tables">
            <div class="col-md-6 col-sm-8 col-sm-12 col-xs-12">
                <div class="local-table">
                    <div class="local-details">
                        <h2>Jr. Camana 371</h2>
                        <div id="googlemap1" style="height:350px"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-8 col-sm-12 col-xs-12">
                <div class="local-table">
                    <div class="local-details">
                        <h2>Jr. Lampa 406</h2>
                        <div id="googlemap2" style="height:350px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Fin Seccion Locales-->

<!--Inicio Seccion Carta-->
<section id="carta" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">NUESTRA CARTA</h2>
            <hr class="lines">
        </div>
        <div class="col-lg-12 col-md-12 col-xs-4">
            <iframe id="iframe" title="Carta" src="carta/index.html">
            </iframe>

            <div class="col-lg-12 col-md-8 col-xs-4">
            </div>
</section>
<!--Fin Seccion Carta-->

<!--inicio Seccion Bioseguridad-->
<section id="bioseguridad" class="video-promo section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 col-xs-4">
                <div class="video-promo-content text-center">
                    <h2>Bioseguridad
                    </h2>
                    <hr class="linesb">
                    <p>
                        Ya estamos atendiendo en nuestros locales!!!<br>
                        Contamos con todos los protocolos de Bioseguridad...
                    </p>
                    <!--efecto real de la fuente-->
                    <!--a href="https://www.youtube.com/watch?v=oFpp9b-O_JU" class="video-popup wow fadeInUp"
                        data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a-->

                    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#videoModal"
                        data-theVideo="https://www.youtube.com/embed/tMEuxHWhZ-g"><i class="fa fa-film fa-5x"></i></a>

                    <!--a class="btn btn-default videojk" href="https://www.youtube.com/watch?v=tMEuxHWhZ-g"><i
                            class="fa fa-film fa-5x"></i></a-->

                    <!--a class="videojk" href="https://www.youtube.com/watch?v=tMEuxHWhZ-g">This YouTube video with
                        autoplay</a-->
                    <!--a class="btn btn-default videoj" href="https://www.youtube.com/watch?v=3qyhgV0Zew0"><i
                            class="fa fa-film fa-5x"></i>
                        --el efeco esta en la carperta jsk  https://www.youtube.com/watch?v=tMEuxHWhZ-g
                        https://stackoverflow.com/questions/54481655/display-video-in-modal/54481920
                        </a-->
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="788.54" height="443"
                        type="text/html"
                        src="https://www.youtube.com/embed/tMEuxHWhZ-g?autoplay=0&fs=1&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&vq=large&origin=https://youtubeembedcode.com">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- java script esta en form-contact -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div>
                        <iframe width="100%" height="350" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section" data-stellar-background-ratio="-0.2">
    <div class="contact-form">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contáctanos</h2>
                <hr class="lines"><br>
                <p> ¿Buscas información adicional, haznos llegar alguna sugerencia?<br>
                    No dudes en escríbenos, nos comunicaremos a la brevedad posible.</p>
            </div>
            <div class="row rowk">
                <div class="col-lg-6 col-sm-8 col-xs-12">
                    <div class="contact-us">
                        <!--h3>Sucursales</h3-->
                        <div class="contact-address">
                            <div class="social-icons">
                                <h1>
                                    <p>Jr. Camana 371</p>
                                </h1>
                                <ul>
                                    <li class="phone whatsapp"><i class="fa fa-whatsapp fa-lg"></i></li>
                                    <a target="_blank" href="https://wa.me/970702953"><span> (+51 970 702 953)
                                        </span></a>
                                    <br>
                                    <li class="phone telephone"><i class="fa fa-phone fa-lg"></i></li>
                                    <span> (+511 426 3584)
                                    </span>
                                    <br>
                                    <!--li class="phone correo"><i class="fa fa-envelope fa-lg"></i></li>
                                    <span> (contact@mate.com)
                                    </span-->
                                </ul>
                                <br><br>
                                <h1>
                                    <p>Jr. Lampa 406</p>
                                </h1>
                                <ul>
                                    <li class="phone whatsapp"><i class="fa fa-whatsapp fa-lg"></i></li>
                                    <a target="_blank" href="https://wa.me/918163651"><span> (+51 918 163 651)
                                        </span></a>
                                    <br>
                                    <li class="phone telephone"><i class="fa fa-phone fa-lg"></i></li>
                                    <span> (+511 426 3464)
                                    </span>
                                    <br>
                                    <!--li class="phone correo"><i class="fa fa-envelope fa-lg"></i></li>
                                    <span> (contact@mate.com)
                                    </span-->
                                </ul>
                            </div>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li class="facebook"><a target="_blank"
                                        href="https://www.facebook.com/lasvinaselparaisodelasfrutas"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="contact-block">
                        <form id="contactForm" style="display: show;">
                            <div class="control-group-inline controls gname">
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Nombres Completos" required title="Nombre"
                                    data-validation-required-message="Ingrese su nombre completo">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="input-group controls control-group-inline gmail">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Correo Electronico" required
                                    data-validation-required-message="Ingrese su Correo"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-addon">email@example.com</span>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="control-group-inline gnum">
                                <input type="telcel" class="form-control" placeholder="Tel. Cel." id="telefono"
                                    name="telefono" required
                                    data-validation-required-message="Ingrese su Tel. o Cel." />
                                <p class="help-block"></p>
                            </div>
                            <div class="control-group-inline gdes">
                                <textarea rows="10" cols="100" class="form-control" id="descripcion" name="descripcion"
                                    placeholder="Descripcion" required
                                    data-validation-required-message="Ingrese un Mensaje" minlength="5"
                                    data-validation-minlength-message="Minimo 5 caracteres" maxlength="999"
                                    style="resize:none"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="submit-button text-center">
                                <button class="btn btn-common pull-right" id="btnvalidar" type="button">Enviar
                                    Datos</button>
                                <!--div id="btnvalida" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div-->
                            </div>
                        </form>

                    </div>
                    <br><br>
                    <div class="control-group-inline" style="text-align: center; display:none" id="barra">
                        <img src="image/tools/barra.gif" alt="Cargando..." style="width: 200px"><br>
                        Enviando Datos...Datos registrados satisfactoriamente!
                    </div>
                    <div class="alert alert-success mensaje_form " style="display: none; margin-top: 20px;"
                        id="mensaje">
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <span class="textmensaje">Gracias por enviarnos sus comentarios.!</span>
                    </div>
                    <div class="alert alert-danger mensaje_form" style="display: none; margin-top: 20px;" id="error1">
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <span class="textmensaje">No se pudo enviar el mensaje...</span>
                    </div>
                    <div class="alert alert-danger mensaje_form" style="display: none; margin-top: 20px;" id="error3">
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <span class="textmensaje">No hay conexion con la BD</span>
                    </div>

                    <!--div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                        aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <h4 class="modal-title" id="msn"></h4>
                                <h4><label class="modal-title" id="msn"></label></h4>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary pull-right"
                                        data-dismiss="modal">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// ****** Modulo de header *******
require_once("footer.php"); 
?>