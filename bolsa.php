<?php include('inc/header.php') ?>

        <!--Breadcrumb-->
        <section id="breadcrumb" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 breadcrumb-block">
                        <h2>bolsa de trabajo</h2>
                    </div>
                    <div class="col-sm-6 breadcrumb-block text-right">
                        <ol class="breadcrumb">
                            <li><span></span><a href="index.php">Inicio</a></li>
                            <li class="active">bolsa de trabajo</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Us-->
        <section id="contact" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 contact-block">
                        <div class="col-sm-12 main-heading">
                            <h3>Trabaja con nosotros en MyM Express</h3>
                        </div>
                        <ul class="address">
                            <li><i class="fa fa-map-marker"></i>Libramiento Noreste, Arco Vial Parte Industrial Ciudad Mitras. Nuevo León, México</li>
                            <li><a href="tel:+0883462543"><i class="fa fa-phone"></i>(+52) 1 812 351 3718</a> </li>
                            <li><a href="mailto:ventas@mymexpress.com "><i class="fa fa-envelope"></i>ventas@mymexpress.com </a> </li>
                            <li><i class="fa fa-clock-o"></i>Lun - Sab: 7:00 - 17:00</li>
                        </ul>
                        <ul class="sppb-person-social">
                            <li><a target="_parent" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_parent" href="#"><i class="fa fa-twitter"></i></a></li>
                       
                        </ul>
                    </div>
                    <div class="col-sm-8 contact-block">
                        <div class="col-sm-12 main-heading">
                            <h3>Trabaja con Nosotros</h3>
                        </div>
                        <form id="contact-form">
                            <div class="form-group col-sm-6 padding-right">
                                <input type="text" class="form-control" name="name" id="name" required placeholder="Nombre">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                                <input type="email" class="form-control" name="mail" id="mail" required placeholder="Email">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                                <input type="text" class="form-control" name="telefono" id="telefono" required placeholder="Telefono">
                            </div>
                          
                            <div class="col-sm-12 button no-padding">
                                <input type="submit" id="submit_contact" class="sppb-btn sppb-btn-default" value="Enviar Informacion">
                                <div id="msg" class="message"></div>
                            </div>
                        </form>
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
