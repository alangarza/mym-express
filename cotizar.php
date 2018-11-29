<?php include('inc/header.php') ?>

        <!--Breadcrumb-->
        <section id="breadcrumb" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 breadcrumb-block">
                        <h2>Cotización Personalizada</h2>
                    </div>
                    <div class="col-sm-6 breadcrumb-block text-right hidden-xs">
                        <ol class="breadcrumb">
                            <li><span></span><a href="index">MyM Express</a></li>
                            <li class="active">Cotizar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!--Contact Us-->
        <section id="contact">
            <div class="container">
                <div class="row">


                    <div class="col-sm-8 contact-block">
                    <div class="col-sm-12 hidden-md hidden-lg hidden-sm about-block">
                        <h2 class="ctaquote">Cotiza con Nosotros</h2>
                        <div class="imgcontquote"><img src="https://alphamedia.sfo2.cdn.digitaloceanspaces.com/mym/m4.png" class="imgquote"> </div>

                        <ul class="bulletquote">
                            <li><i class="icon-check"></i> Cotizaciones sin compromisos. </li>
                            <li><i class="icon-check"></i> 100% garantía de puntualidad. </li>

                            <li><i class="icon-check"></i> Precios competitivos. </li>
                            <li><i class="icon-check"></i> Descuentos en Volumen</li>

                        </ul>
                    </div>

                        <form id="form-mym" name="submit-to-google-sheet">
                        <div class="row">

                            <div class="col-sm-12 main-heading">
                                <h4 class="quote-header">Datos de Contacto </h4>
                                <hr class="divider-header-quote">

                            </div>
                            <div class="form-group col-sm-6 padding-right">
                                    <label><i class="fas fa-user"></i> Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Nombre de Contacto">
                                </div>

                            <div class="form-group col-sm-6 padding-right">
                                <label><i class="fas fa-envelope"></i> Email</label>
                                    <input type="email" class="form-control" name="correo" id="email" required placeholder="Correo Electronico">
                            </div>
                            <div class="form-group col-sm-6 padding-right">
                                    <label><i class="fas fa-phone"></i> Tel&eacutefono</label>
                                        <input type="text" class="form-control" name="telefono" id="telefono" required placeholder="Teléfono de Contacto">
                                </div>
                                <!-- <div class="form-group col-sm-6 padding-right">
                                <label><i class="fas fa-building"></i> Empresa</label>
                                    <input type="text" class="form-control" name="empresa" id="empresa" required placeholder="Nombre de la Empresa">
                            </div>

                            <div class="form-group col-sm-6 padding-right">
                                <label><i class="fas fa-globe-americas"></i> Pagina Web</label>
                                    <input type="text" class="form-control" name="web" id="web" required placeholder="Pagina Web">
                            </div> -->
                        </div>
                        <div class="row">

                            <div class="col-sm-12 main-heading">
                                <br>
                                <h4 class="quote-header">Datos de Servicio </h4>
                                <hr class="divider-header-quote">
                            </div>
                            <div class="form-group col-sm-12 padding-right">
                                <label><i class="fas fa-box"></i> Producto</label>
                                    <input type="text" class="form-control" name="producto" id="name"  placeholder="Descripcion del producto">
                            </div>
                            <div class="col-sm-12 main-heading">
                                <br>
                                <h4 class="quote-header">Origen de Ruta </h4>
                                <hr class="divider-header-quote">
                            </div>
                            <div class="form-group col-sm-6 padding-right select-form-control">
                                    <label><i class="fas fa-map-marker-alt"></i> Origen (Estado) </label>
                                    <select class="form-control" type="text" name="origen-e" id="name" >
                                    <option value="volvo" selected disabled>Estado</option>
                                            <option value="Nuevo León">Nuevo León</option>
                                            <option value="Jalisco">Jalisco</option>
                                            <option value="CDMX">CDMX</option>
                                            <option value="Querétaro">Querétaro</option>
                                            <option value="Guanajuato">Guanajuato</option>
                                    </select>
                            </div>
                            <div class="form-group col-sm-6 padding-right select-form-control">
                                    <label><i class="fas fa-map-marker-alt"></i> Origen (Municipio) </label>       <input type="text" class="form-control" name="origen-m" id="name"  placeholder="Municipio">
                                    <!-- <select class="form-control" type="text" name="origen-m" id="name" >

                                    <option value="volvo" selected disabled>Municipio</option>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                    </select> -->

                            </div>
                            <div class="col-sm-12 main-heading">
                                <br>
                                <h4 class="quote-header">Destino de Ruta </h4>
                                <hr class="divider-header-quote">
                            </div>

                            <div class="form-group col-sm-6 padding-right select-form-control">
                                    <label><i class="fas fa-map-marker-alt"></i> Destino (Estado) </label>
                                    <select class="form-control" type="text" name="destino-e" id="name" >
                                    <option value="volvo" selected disabled>Estado</option>
                                    <option value="Nuevo León">Nuevo León</option>
                                            <option value="Jalisco">Jalisco</option>
                                            <option value="CDMX">CDMX</option>
                                            <option value="Querétaro">Querétaro</option>
                                            <option value="Guanajuato">Guanajuato</option>
                                    </select>

                            </div>
                            <div class="form-group col-sm-6 padding-right select-form-control">
                                    <label><i class="fas fa-map-marker-alt"></i> Destino (Municipio) </label>       <input type="text" class="form-control" name="destino-m" id="name"  placeholder="Municipio">
                                    <!-- <select class="form-control" type="text" name="destino-m" id="name" >
                                    <option value="volvo" selected disabled>Municipio</option>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                    </select> -->
                            </div>

                            <div class="form-group col-sm-12 no-padding">
                            <label><i class="fas fa-pencil-alt"></i> Comentarios</label>

                                <textarea class="form-control" name="comentarios" id="comment" placeholder=""></textarea>
                            </div>
                            <input type="hidden" name="utm_source" />
                            <input type="hidden" name="utm_medium" />
                            <input type="hidden" name="utm_content" />
                            <input type="hidden" name="utm_campaign" />



                        </div>

                            <div class="col-sm-12 button no-padding text-center">


                                <input type="submit" id="submit-form" class="sppb-btn sppb-btn-default" value="Enviar Cotizacion">
                                <div id="submit-form" class="message"></div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-4">
                    <div class="col-sm-12 about-block bulletsquotes">
                        <h2 class="headerbullets">Cotiza con Nosotros</h2>
                        <ul>
                            <li><i class="icon-check"></i> Cotizaciones sin compromisos. </li>
                            <li><i class="icon-check"></i> 100% garantía de puntualidad. </li>

                            <li><i class="icon-check"></i> Precios competitivos. </li>
                            <li><i class="icon-check"></i> Descuentos en Volumen</li>

                        </ul>
                    </div>

                        <img src="https://alphamedia.sfo2.cdn.digitaloceanspaces.com/mym/m4.png">

                        <h2 class="quote-header"> Profesionales en el servicio de transporte de carga de mercancías en caja seca 53"</h2>

                    </div>
                </div>
            </div>
        </section>
        <!--Map-->
        <section id="map">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 no-padding">
                        <div class="sppb-addon-gmap-canvas" data-lat="25.8164042" data-lng="-100.4095318" data-maptype="ROADMAP" data-mapzoom="15" data-mousescroll="false"></div>
                    </div>
                </div>
            </div>
        </section>


      <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbyAzzLvjeiLwjCB3dcqaZGa9cKwYMrGF-VpvegDT4XvJhMqff2s/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(setTimeout(function(){ window.location.href = "gracias.php"}, 500))
      .catch(error => console.error('Error!', error.message))
  })




</script>


        <?php include('inc/footer.php') ?>





</body>

</html>
