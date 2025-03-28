<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-sm-6 col-xs-12">
                <ul class="footer-links">
                    <li>
                        <a href="#nosotros">Nosotros</a>
                    </li>
                    <li>
                        <a href="#productos">Productos</a>
                    </li>
                    <li>
                        <a href="#local">Locales</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="copyright">
                    <p> &copy; 2018 Jugueria <a rel="nofollow" href="https://www.lasvinas.com.pe/">LasViñas.com</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" class="back-to-top">
    <i class="lnr lnr-arrow-up"></i>
</a>
<div id="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB09-lF17AJkmoIiS2RpKPghfVwcYbeVDI"></script>
<script src="jsk/jquery-1.9.1.min.js"></script>
<!--script src="kjs/jquery-min.js"></script-->
<script src="kjs/popper.min.js"></script>
<script src="kjs/bootstrap.min.js"></script>
<script src="kjs/jquery.mixitup.js"></script>
<script src="kjs/nivo-lightbox.js"></script>
<script src="kjs/owl.carousel.js"></script>
<script src="kjs/jquery.stellar.min.js"></script>
<script src="kjs/scrolling-nav.js"></script>
<script src="kjs/jquery.easing.min.js"></script>s
<script src="kjs/wow.js"></script>
<script src="kjs/jquery.vide.js"></script>
<script src="kjs/jquery.counterup.min.js"></script>
<script src="kjs/jquery.magnific-popup.min.js"></script>
<script src="kjs/waypoints.min.js"></script>
<script src="kjs/form-validator.min.js"></script>
<!--script src="kjs/contact-form-script.js"></script-->
<script src="kjs/form-contact.js"></script>
<script src="kjs/main.js"></script>
<script src="Kjs/custom-scripts.js"></script>
<script src="jsk/YouTubePopUp.jquery.js"></script>

<script type="text/javascript" language="javascript">
//<!-- Función para obtener el Ancho(Width) --> 
function obtenerAncho(obj, ancho) {
    // $("#anvent").text("El ancho de la " + obj + " es " + ancho + "px. (Width)");
    $("#anvent").text(ancho);

}

//<!-- Función para obtener el Alto(Height) --> 
function obtenerAlto(obj, alto) {
    //$("#alvent").text("El alto de la " + obj + " es " + alto + "px. (Height)");
    $("#alvent").text(alto);
}
obtenerAlto("ventana", $(window).height());
obtenerAncho("ventana", $(window).width());

$(window).resize(function() {
    obtenerAlto("ventana", $(window).height());
    obtenerAncho("ventana", $(window).width());
});






/*window.onload = function(){
    imagen();
}*/
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175559479-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-175559479-1');
</script>

</body>

</html>