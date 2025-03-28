$(document).ready(function() {
    autoPlayYouTubeModal();
    //imagen();
    $("#nombre").change(function() {
        /*alert( "Handler for .change() called." );*/
        $(".gname").removeClass("has-error");
    });

    $('.gname').keydown(function() {
        if (event.keyCode > 45 && event.keyCode < 57) {
            return false;
        }
    });
    $("#email").change(function() {
        /*alert( "Handler for .change() called." );*/
        if (/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)+([a-zA-Z0-9\-]{2,4})$/.test(email)) {
            $(".gmail").removeClass("has-error");
        } else {
            $(".gmail").removeClass("has-error");
        }
    });
    $("#telefono").change(function() {
        /*alert( "Handler for .change() called." );*/
        $(".gnum").removeClass("has-error");
    });
    $(".gnum").keydown(function(event) {
        //alert(event.keyCode);
        if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) &&
            event.keyCode !== 190 && event.keyCode !== 110 && event.keyCode !== 8 && event.keyCode !== 9
        ) {
            return false;
        }

    });
    $("#descripcion").change(function() {
        /*alert( "Handler for .change() called." );*/
        $(".gdes").removeClass("has-error");
    });


    $("#btnvalidar").click(function() {

        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var telefono = $("#telefono").val();
        var descripcion = $("#descripcion").val();

        if (nombre == '') {
            $(".gname").addClass("has-error");
            return false;
        }
        $(".gname").removeClass("has-error");

        if (email == "") {
            $(".gmail").addClass("has-error");
            return false;
        } else {
            if (/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)+([a-zA-Z0-9\-]{2,4})$/.test(email)) {} else {
                $(".gmail").addClass("has-error");
                return false
            }
        }
        $(".gmail").removeClass("has-error");

        if (telefono == '') {
            $(".gnum").addClass("has-error");
            return false;
        }
        $(".gnum").removeClass("has-error");

        if (descripcion == '') {
            $(".gdes").addClass("has-error");
            return false;
        }
        $(".gdes").removeClass("has-error");

        var data = 'nombre=' + nombre + '&email=' + email + '&telefono=' + telefono + '&descripcion=' + encodeURIComponent(descripcion);
        //$('#barra').show();
        //$('#mensaje').show();
        $.ajax({
            //this is the php file that processes the data and sends email
            //url: "contact.php",   
            url: "php/formulario.php",

            //GET method is used
            type: "POST",

            //pass the data         
            data: data,
            dataType: 'Json',
            //data: $(this).serialize(),
            //Do not cache the page
            cache: false,

            //success
            success: function(recuperado) {
                //console.log("INGRESO LOG");

                //console.log(recuperado);

                //if contact.php returned 1/true (send mail success)
                //if (recuperado==1) {

                //show the success message
                //alert(recuperado);controls

                //$("#msn").text("DATOS REGISTRADOS CORRECTAMENTE");
                //$(".modal").modal('show');
                $("#nombre").val("");
                $("#email").val("");
                $("#telefono").val("");
                $("#descripcion").val("");
                /*setTimeout(function() {
                     $('#mensaje').hide();
                     $('#barra').hide();
                 }, 3000);*/


                if (recuperado.error == 1) {
                    $('#error1').show();
                    setTimeout(function() {
                        $('#error1').hide();
                    }, 3000);
                }
                if (recuperado.error == 3) {
                    $('#error3').show();
                    setTimeout(function() {
                        $('#error3').hide();
                    }, 3000);
                }

                if (recuperado.exito == 1) {
                    //$('#formDefault1').html(respuesta.mensaje);
                    $('#barra').show();
                    $('#mensaje').show();
                    setTimeout(function() {
                        $('#mensaje').hide();
                        $('#barra').hide();
                    }, 3000);
                }

                /*if (recuperado.error == 1) {
                    $('#error').show();
                    setTimeout(function() {
                        $('#error').hide();
                    }, 3000);
                }*/


                //if contact.php returned 0/false (send mail failed)
                //} else alert('Sorry, unexpected error. Please try again later.');               
            },

            error: function(jqXHR, exception) {
                console.log(jqXHR);
            }

        })


        //cancel the submit button default behaviours
        return false;


    });
});



//Funcion para cambiar imagenes por tamaño de ventana DEL BANNER

$(window).resize(function() {

    imagen();

});

//window.onload = imagen;

function imagen() {

    var anchoimagen = $(window).width();
    var img = $('<iframe />');
    if (anchoimagen > 1024) {
        //console.log(anchoimagen);
        $("#imagen1").attr('src', 'image/banner/Banner1-g.jpg');
        $("#imagen2").attr('src', 'image/banner/Banner2-g.jpg');
        $("#imagen3").attr('src', 'image/banner/Banner3-g.jpg');
        $("#imagen4").attr('src', 'image/banner/Banner4-g.jpg');
        /* $("#iframe").css({ height: '600px' });*/
        //console.log(iframe);
        //document.getElementById("imagen1").src = "image/banner/BannerK-2.jpg";
    }
    if (anchoimagen < 800) {
        //console.log(anchoimagen);
        //document.getElementById("imagen1").src = "image/banner/BannerK-1.jpg";
        $("#imagen1").attr('src', 'image/banner/Banner1-p.jpg');
        $("#imagen2").attr('src', 'image/banner/Banner2-p.jpg');
        $("#imagen3").attr('src', 'image/banner/Banner3-p.jpg');
        $("#imagen4").attr('src', 'image/banner/Banner4-p.jpg');
        /*  $("#iframe").css({
              width: '100%',
              height: '400px'
          });*/
    }
    /*
    if (anchoimagen > 1024) {
        //console.log(anchoimagen);
        $("#imagen2").attr('src', 'image/banner/Banner2-g.jpg');
        //document.getElementById("imagen1").src = "image/banner/BannerK-2.jpg";
    }
    if (anchoimagen < 800) {
        //console.log(anchoimagen);
        //document.getElementById("imagen1").src = "image/banner/BannerK-1.jpg";
        $("#imagen2").attr('src', 'image/banner/Banner2-p.jpg');
    }
    if (anchoimagen > 1024) {
        //console.log(anchoimagen);
        $("#imagen3").attr('src', 'image/banner/Banner3-g.jpg');
        //document.getElementById("imagen1").src = "image/banner/BannerK-2.jpg";

    }
    if (anchoimagen < 800) {
        //console.log(anchoimagen);
        //document.getElementById("imagen1").src = "image/banner/BannerK-1.jpg";
        $("#imagen3").attr('src', 'image/banner/Banner3-p.jpg');
    }
    if (anchoimagen > 1024) {
        // console.log(anchoimagen);
        $("#imagen4").attr('src', 'image/banner/Banner4-g.jpg');
        //document.getElementById("imagen1").src = "image/banner/BannerK-2.jpg";

    }
    if (anchoimagen < 800) {
        //console.log(anchoimagen);
        //document.getElementById("imagen1").src = "image/banner/BannerK-1.jpg";
        $("#imagen4").attr('src', 'image/banner/Banner4-p.jpg');
    }*/

}

/*FUNCION PARA VER VIDEOS EN UN MODAL*/

function autoPlayYouTubeModal() {
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function() {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-theVideo"),
            videoSRCauto = videoSRC + "?autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function() {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
    });
}