<?php include('inc/header.php') ?>

        <!--Breadcrumb-->
        <section id="breadcrumb" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 breadcrumb-block">
                        <h2>Cotizacion Personalizada</h2>
                    </div>
                    <div class="col-sm-6 breadcrumb-block text-right hidden-xs">
                        <ol class="breadcrumb">
                            <li><span></span><a href="index.php">MyM Express</a></li>
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
                       
                        <form id="contact-form">
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
                                    <input type="email" class="form-control" name="email" id="email" required placeholder="Correo Electronico">
                            </div>
                            <div class="form-group col-sm-6 padding-right">
                                    <label><i class="fas fa-phone"></i> Telefono</label>
                                        <input type="text" class="form-control" name="telefono" id="telefono" required placeholder="Telefono de Contacto">
                                </div>
                            
                            <div class="form-group col-sm-6 padding-right">
                                <label><i class="fas fa-building"></i> Empresa</label>
                                    <input type="text" class="form-control" name="empresa" id="empresa" required placeholder="Nombre de la Empresa">
                            </div>
                            
                            <div class="form-group col-sm-6 padding-right">
                                <label><i class="fas fa-globe-americas"></i> Pagina Web</label>
                                    <input type="text" class="form-control" name="web" id="web" required placeholder="Pagina Web">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 main-heading">
                                <br>
                                <h4 class="quote-header">Datos de Servicio </h4>
                                <hr class="divider-header-quote">
                            </div>
                            <div class="form-group col-sm-12 padding-right">
                                <label><i class="fas fa-box"></i> Producto</label>
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="Descripcion del producto">
                            </div>
                            <div class="form-group col-sm-6 padding-right select-form-control">
                                    <label><i class="fas fa-map-marker-alt"></i> Origen (Municipio, Origen)</label>
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="Datos Origen">
                            </div>
                            <div class="form-group col-sm-6 padding-right select-form-control">
                                    <label><i class="fas fa-map-marker-alt"></i> Destino (Municipio, Origen)</label>
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="Datos Destino">
                            </div>
                            <div class="form-group col-sm-6 padding-right select-form-control">
                                    <label><i class="fas fa-map-marker-alt"></i> Descripcion del Servicio Requerido</label>
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="Datos Destino">
                            </div>
        
                        </div>

                            <div class="col-sm-12 button no-padding text-center">
                                <input type="submit" id="submit_contact" class="sppb-btn sppb-btn-default" value="Enviar Cotizacion">
                                <div id="msg" class="message"></div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-4">

                        <img src="images/m/m4.png"> 
                        
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
        <?php include('inc/footer.php') ?>
