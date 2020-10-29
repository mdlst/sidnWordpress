<?php
  get_header(); 
?>
<body class='index'>
    <div background="img/fondoPersonas1.png" class="container degradado"> 
        <div class="container">
            <div class="row">
                <div class="col-12 imagenPersonas1">
                    <div class="row">
                        <div class="col-3 col-md-6">
                            <p class="textoGrande">Ahorra dinero, 
                                haciendo tu empresa 
                                más rentable y productiva. </p>
                        </div>
                        <div class="col-md-5 offset-md-1 col-12 ">
                            <form class="p-5  ">
                                <div class="form-group">
                                    <h5>Empieza a ahorrar ahora</h5>
                                </div>
                                <div class="form-group">
                                    <P class="letraPequeña">Rellena el siguiente formulario para que podamos atender tus dudas:</P>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
                                </div>  
                                <div class="form-group">
                                    <input type="text" class="form-control" id="telefono" aria-describedby="telefono" placeholder="Teléfono">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mensaje" aria-describedby="mensaje" placeholder="Mensaje">
                                </div>
                                <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input terminos" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">He leído y acepto los términos de política de privacidad.</label>
                                </div>
                                <button type="submit" class="btn btn-primary infor">Obtener información</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>


  
