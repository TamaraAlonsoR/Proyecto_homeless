<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    <style>
        #main-content {

            max-width: 800px;
            margin: 20px auto;
            box-shadow: 0 0 10px #81ADB6;
            padding: 2%;
        }

        #global {
            height: 500px;
            width: 100%;
            border: 2px solid #81ADB6;
            background: #E2F2F5;
            overflow-y: scroll;
            margin-bottom: 10%;

        }

        /*scrollbar*/
        ::-webkit-scrollbar {
            width: 15px;
        }

    
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
           
        }

        
        ::-webkit-scrollbar-thumb {
            background: #81ADB6;
            border-radius: 10px;
            
        }

        
        ::-webkit-scrollbar-thumb:hover {
            background: cadetblue;

    </style>

</head>

<body>
    <div class="container-fluid">
         <!-- barra navegacion-->
        <?php 
    session_start();
    if(isset($_SESSION['codigo_empleado'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
        ?>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">

                    <div class="col-12" /style="margin-top:8%;text-align:center; justify-content:center;color:#116272; ">
                        <section id="main-content">

                            <article>
                                <header>

                                    <h1>Aqu?? encontrar??s noticias relacionadas con los recursos de la Comunidad de Madrid.</h1>
                                </header>

                            </article>

                        </section>

                    </div>
                    <!--global-->
                    <div class="col-12" id="global">
                        <div class="col-12"><br></div>
                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia6.jpg" alt="manifestaci??n" width="100%">
                                </div>
                                <div class="col-9">
                                    <h3 style="color: #116272; margin-top:2%; ">Los albergues madrile??os cierran antes de lo previsto ???dejando en la calle a personas vulnerables???</h3>
                                    <p>El grupo 5 Acci??n Gesti??n Social S.A.U acab?? la Campa??a de Fr??o el pasado 31 de marzo. Los trabajadores sociales denuncian que iban a estar abiertos hasta el d??a 9, coincidiendo con el fin del Estado de Alarma, pero ???todo cambi?? sin explicaci??n de un d??a para otro???.</p>
                                    <form style="margin-left:80%" action="https://www.elsaltodiario.com/personas-sin-hogar/albergues-madrilenos-cierran-antes-previsto-dejando-calle-personas-vulnerables">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>
                                </div>
                            </div>

                        </div>

                        <div class="col-12"><br></div>
                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-9" style="margin-top: 2%">
                                    <h3 style="color: #116272; margin-top:2%; ">Los comedores sociales de Madrid, un salvavidas para miles de madrile??os en Navidad</h3>
                                    <p>Los comedores sociales se han convertido en un recurso clave para cientos de personas en Madrid y su regi??n. Si su labor result?? fundamental tras el aumento de la pobreza extrema, a ra??z de la crisis econ??mica de 2008, con la actual crisis sanitaria provocada por el coronavirus se han convertido en un socorro vital ante la "escasez de ayudas oficiales". Ahora que llega la Navidad tambi??n jugar??n un papel fundamental.</p>
                                    <form style="margin-left:80%" action="https://www.telemadrid.es/noticias/madrid/Miles-madrilenos-Navidad-comedores-sociales-0-2294170587--20201209110100.html">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>

                                </div>
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia5.jpg" alt="persona recogiendo comida" width="100%">
                                </div>
                            </div>

                        </div>
                        <div class="col-12"><br></div>
                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia%204.jpeg" alt="familia en situaci??n de calle" width="100%">
                                </div>
                                <div class="col-9">
                                    <h3 style="color: #116272; margin-top:2%; ">LOS ESTRAGOS DE LA PANDEMIA EN MADRID. El Ayuntamiento de Madrid, en el punto de mira de asociaciones ciudadanas: "Est??n quitando todo lo social"</h3>
                                    <p>Con la pobreza avanzando tras cada ola de la pandemia, el Consistorio madrile??o se muestra incapaz de atender la creciente demanda de dos derechos b??sicos: techo y comida. Colectivos sociales y de vivienda denuncian que no es s??lo un problema de falta de medios, sino tambi??n de gesti??n.</p>
                                    <form style="margin-left:80%" action="https://www.publico.es/sociedad/estragos-pandemia-madrid-ayuntamiento-madrid-punto-mira-asociaciones-ciudadanas-quitando-social.html">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>
                                </div>
                            </div>

                        </div>

                        <div class="col-12"><br></div>


                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-9" style="margin-top: 2%">
                                    <h3 style="color: #116272; margin-top:2%; ">Se mantienen las colas del hambre en Madrid despu??s de un a??o de pandemia</h3>
                                    <p>Un a??o despu??s del inicio de la pandemia y del confinamiento domiciliario contin??an las colas de decenas de personas frente a comedores sociales, ONGs o parroquias. En Madrid, en el a??o del COVID, C??ritas y la Fundaci??n Madrina, han pasado de atender a 400 personas al mes a 4.000 al d??a.</p>
                                    <form style="margin-left:80%" action="https://www.rtve.es/noticias/20210315/se-mantienen-colas-hambre-madrid-tras-pandemia/2082260.shtml">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>

                                </div>
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia3.png" alt="esperando a recoger comida" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><br></div>
                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-3" style="margin-top: 4%">
                                    <img src="imagenes/noticia2.jfif" alt="mujer en la calle" width="100%">
                                </div>
                                <div class="col-9">
                                    <h3 style="color: #116272; margin-top:2%; ">Verg??enza, frustraci??n y sue??os en las ???l??neas del hambre??? del Madrid.</h3>
                                    <p>Aunque su rostro est?? cubierto con una m??scara negra, Rita Carrasco todav??a usa l??piz labial rojo brillante. Pero su sonrisa f??cil se desvaneci?? cuando tuvo que unirse a las ???l??neas de hambre??? de Madrid para obtener ayuda alimentaria.</p>
                                    <form style="margin-left:80%" action="https://radiocentro977.com/verguenza-frustracion-y-suenos-en-las-lineas-del-hambre-del-madrid/">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>
                                </div>
                            </div>

                        </div>
                        <div class="col-12"><br></div>

                        <div class="col-12" style="background-color:beige;border-top: 3px solid cadetblue; border-bottom: 3px solid cadetblue;border-left: 3px solid cadetblue; border-right: 3px solid cadetblue;">
                            <div class="row">
                                <div class="col-9" style="margin-top: 2%">
                                    <h3 style="color: #116272; margin-top:2%; ">As?? fueron los d??as que llevaron a Espa??a al confinamiento</h3>
                                    <p>El 13 de marzo de 2020 el Gobierno declara el estado de alarma en Espa??a, que entra en vigor el d??a 14 y llev?? al confinamiento domiciliario de todo el pa??s para frenar la transmisi??n de la COVID-19. RTVE.es recopila los acontecimientos m??s destacados de la narraci??n minuto a minuto que hizo en aquellos d??as que dieron paso a la experiencia directa de la pandemia en nuestras vidas. Volver la vista atr??s y repasar lo sucedido entonces nos muestra con perspectiva d??nde estamos y lo que entonces desconoc??amos de una pandemia que solo ahora con la vacuna se empieza a doblegar. Y proyectamos la mirada al d??a de hoy, a la situaci??n un a??o despu??s, con varios reportajes y an??lisis de c??mo ha sido este tiempo que tanto nos ha cambiado.</p>
                                    <form style="margin-left:80%" action="https://www.rtve.es/noticias/20210313/repaso-cronologia-ano-estado-alarma-espana-covid/2081113.shtml">
                                        <button type="submit" class="btn btn-outline-info">Leer noticia</button>
                                    </form><br>

                                </div>
                                <div class="col-3" style="margin-top: 10%">
                                    <img src="imagenes/noticia1.jfif" alt="imagen de un hospital" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><br></div>
                    </div>
                    <!--acaba el global-->
                </div>


            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>
