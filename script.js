    // iniciamos un a vez se ha cargado el DOM de la pagina

    $(document).ready(function(){

        imagen="src/img/taylor.jpg";


        // iniciamos una vez se ha cargado la imagen

        $('#img').attr("src", imagen).load(function(){

            $("#imgSmall img").attr("src",imagen);

            // obtenemos informacion sobre la imagen como:

            // - la posicion en la pantalla (top,left)

            // - la anchura y altura

            var imgPosition=$("#img").position();

            imgTop=imgPosition.top;

            imgLeft=imgPosition.left;

            imgHeight=$("#img").height()+imgTop;

            imgWidth=$("#img").width()+imgLeft;

 

            // Aumentamos el tamaño de la imagen ampliada al doble de su tamaño

            $("#imgSmall img").height(parseInt($("#img").height()*2));

            $("#imgSmall img").width(parseInt($("#img").width()*2));

 

            // evento que se ejecuta al mover el raton por encima de la imagen

            $("#img").mousemove(function(event){

                // posicionamos el recuadro selector en el centro del raton

                mostrarImagen(event);

            });

 

            // evento que se ejecuta cuando nos movemos por dentro del recuadro

            // selector

            $("#square").mousemove(function(event){

                // revisamos que estemos dentro de la imagen que deseamos aumentar

                if(event.pageY>imgTop && event.pageY<imgHeight && event.pageX>imgLeft && event.pageX<imgWidth)

                {

                    mostrarImagen(event);

                }

            });

 

            //

            function mostrarImagen(event)

            {

                // Posicionamos el recuadro en la posicion del raton

                $("#square").css({"top":event.pageY-50, "left":event.pageX-50});

 

                // Preparamos la posición de la imagen a aumentar

                y=-((event.pageY-imgTop)-50)*2;

                x=-((event.pageX-imgLeft)-50)*2;

                $("#imgSmall img").css({"top":y, "left":x});

            }

        });

    });