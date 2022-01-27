<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/estilo.css" rel="stylesheet" type="text/css">
       
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Estela Landing!</title>
    </head>
    <body  >
        <div class="container-fluid">
            <div class="row" style="background-color: #BDCCC7;">
                <div class="col-8" >
                    <div class="jumbotron" id="box">
                        <img src="img/INGLES.png" class="img-ingles"> 
                        <img src="img/Grupo43.png" class="logo" alt="...">                                
                        <p class="text">El nuevo<br>ícono de negocios<br>en Culiacán.</p>                       
                        <p class="lead" id="text2">El proyecto incorpora un concepto inmobiliario<br> absolutamente nuevo simbiosis de diseño y<br> tecnología.</p>                        
                        <a  href="#" style="color: white;">Reproducir Video</a>                  
                        <hr class="my-4">                        
                    </div>
                </div>
                <div class="col-4" style="background-color: #BDCCC7;">
                    <div class="text-form">
                        ¿Quieres saber más? Recibe a tu correo nuestro brochure
                    </div>            
                    <form class="row g-3" action="guardar.php" method="POST" id="formulario">
                        <div class="col-md-12" style="margin-top: 10px;">                          
                            <input type="text" class="form-control" id="name" name="nombre" required placeholder="Nombre*">
                        </div>                    
                        <div class="col-md-12" style="margin-top: 10px;">                                                                            
                            <input type="number" class="form-control" id="tel" name="telefono" placeholder="Teléfono" maxlength=10 min="0">                          
                        </div>                                      
                        <div class="col-md-12" style="margin-top: 10px;">                          
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico*" required>
                        </div>
                        <div class="col-12" style="margin-top: 10px;">
                            <div class="form-check" >
                            <input type="hidden" name="check1" value="0" />
                                <input class="form-check-input" type="checkbox"  id="invalidCheck2"  name="check1" value=1 >
                               
                                <label class="form-check-label" for="invalidCheck2">
                                    Quiero recibir noticias, novedades y ofertas especiales a mi correo
                                </label>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 10px;">
                            <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Quiero recibir el brochure</button>
                        </div>
                    </form>  
                    <div id='modal'></div>                    
                                        
                </div>   
            </div>


            <div class="row">
                <div class="col" id="text3">
                    Un lugar ideal para <br> el trabajo, comercio<br> y la vida
                </div>
                <div class="col" id="text4">
                    Proyecto exclusivo de oficinas corporativas en renta y <br>
                    venta del Noroeste del país. Ubicado en la zona con<br>
                    más crecimiento y plusvaía en la ciudad de Culiacán.<br>
                    Diseñado bajo las mas estrictas y vanguardistas<br>
                    especificaciones de eficiencia y modernidad
                </div>
            </div>

            <div class="row" id="box-carrusel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-left: 2%;">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/IMAGENGRANDE.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/IMAGENGRANDE.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/IMAGENGRANDE.png" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

            <div class="row">
                <img src="img/LOGOICONO.png" class="img-logo">  
            </div>

            <div class="row" id="cuadros">
                <div class="col">
                    <div class="card text-white">
                        <img src="img/CUADRO IMAGEN 1.png" class="card-img" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card  text-white">
                        <img src="img/CUADRO IMAGEN 2.png" class="card-img" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card  text-white">
                        <img src="img/CUADRO IMAGEN 3.png" class="card-img" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white">
                        <img src="img/CUADRO IMAGEN 4.png" class="card-img" alt="...">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col" id="bloque">
                    <img src="img/IMAGEN.png" class="img-fluid" alt="Responsive image">   
                 </div>
                 <div class="col" id="bloque">
                    <p class="titulobloque1">Titulo Oficinas</p>
                    <p class="textbloque1">  Proyecto exclusivo de oficinas<br>
                        corporativas en renta y venta del<br>
                        Noroeste del país. Ubicado en la <br>
                        zona con más crecimiento y<br>
                        plusvaía en la ciudad de Culiacán.<br>
                        Diseñado bajo las mas estrictas y<br>
                        vanguardistas especificaciones de<br>
                        eficiencia y modernidad
                    </p>
                    <div class="hiperbloque1">
                        <a href="#">Entérate mas sobre el proyecto -></a>
                    </div>                  
                </div>
            </div>

            <div class="row">
                <div class="col" id="bloque">
                    <p class="titulobloque2">Locales comerciales</p>
                    <p class="textbloque2">Proyecto exclusivo de oficinas<br>
                        corporativas en renta y venta del<br>
                        Noroeste del país. Ubicado en la<br>
                        zona con más crecimiento y<br>
                        plusvaía en la ciudad de Culiacán.<br>
                        Diseñado bajo las mas estrictas y<br>
                        vanguardistas especificaciones de<br>
                        eficiencia y modernidad
                    </p>
                    <div class="hiperbloque1">
                        <a href="#">Entérate mas sobre el proyecto -></a>
                    </div> 
                </div>
                <div class="col" id="bloque">
                    <img src="img/IMAGEN2.png" class="img-fluid" alt="Responsive image">
                   </div>
            </div>

            <div class="row">
                <div class="col" id="bloque">
                    <img src="img/imagen3.png" class="img-fluid" alt="Responsive image">   
                 </div>
                 <div class="col" id="bloque">
                    <p class="titulobloque1">Penthouses</p>
                    <p class="textbloque1"> Proyecto exclusivo de oficinas<br>
                        corporativas en renta y venta del<br>
                        Noroeste del país. Ubicado en la<br>
                        zona con más crecimiento y<br>
                        plusvaía en la ciudad de Culiacán.<br>
                        Diseñado bajo las mas estrictas y<br>
                        vanguardistas especificaciones de <br>
                        eficiencia y modernidad                      
                    </p>
                    <div class="hiperbloque1">
                        <a href="#">Entérate mas sobre el proyecto -></a>
                    </div>                  
                </div>
            </div>

            <div class="jumbotron jumbotron-fluid" style="background-image: url(img/imgbloqueo.png);margin-top: 10%;background-repeat: no-repeat;" >
                <div class="container">
                    <img src="img/icono.png" class="img-icono">
                    <div class="title-bloqueo">Creando el futuro</div>                                                        
                  <p class="lead" id="text-bloqueo">Proyecto exclusivo de oficinas corporativas en renta y venta del<br>
                    Noroeste del país. Ubicado en la zona con más crecimiento y<br>
                    plusvaía en la ciudad de Culiacán. Diseñado bajo las mas estrictas<br>
                    y vanguardistas especificaciones de eficiencia y modernidad</p>
                    <div class="hiper">
                        <a href="#">Entérate mas sobre el proyecto -></a>
                    </div> 
                </div>
            </div>

            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3045.6512286132483!2d-107.42198324223932!3d24.798531349655835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1643229590611!5m2!1ses-419!2smx" width="95%" height="400" style="border:0;margin-left: 1%;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="row" style="margin-top: 1%;">
                <div class="card"  id="footer" >
                    <img src="img/Grupo43.png" class="img-footer" alt="...">
                    <P class="text-footer">® 2019 ESTELA CORPORATE CENTER</P>           
                  </div> 
            </div>
        </div>
       
    
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="agregar.js"></script>

        
    </body>
</html>