<?php include('inc/header.php') ?>

        <!--Breadcrumb-->
        <section id="breadcrumb" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 breadcrumb-block">
                        <h2>Contacto</h2>
                    </div>
                    <div class="col-sm-6 breadcrumb-block text-right hidden-xs">
                        <ol class="breadcrumb">
                            <li><span></span><a href="index.php">MyM Express</a></li>
                            <li class="active">Contacto directo</li>
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
                            <li><a href="tel:+0883462543"><i class="fa fa-phone"></i>(+52) 81 8063 2383</a> </li>
                            <li><a href="mailto:ventas@mymexpress.com "><i class="fa fa-envelope"></i>proyectos@mymexpress.com </a> </li>
                            <li><i class="fa fa-clock-o"></i>Lun - Sab: 8:30 - 18:00</li>
                        </ul>
                        <ul class="sppb-person-social">
                            <li><a target="_parent" href="https://www.facebook.com/mymexpress/"><i class="fab fa-facebook"></i></a></li>
                            <li><a target="_parent" href="https://www.linkedin.com/company/m&m-express-mexico/"><i class="fab fa-linkedin"></i></a></li>
                       
                        </ul>
                    </div>
                    <div class="col-sm-8 contact-block">
                        <div class="col-sm-12 main-heading">
                            <h3>Contacto Directo</h3>
                        </div>
                        <form name="submit-to-google-sheet" method="post">
                            <div class="form-group col-sm-6 padding-right">
                            <label><i class="fas fa-user"></i> Nombre</label>
                                <input type="text" class="form-control" name="nombre" required placeholder="Name">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-user"></i> Correo Electr&oacute;nico</label>

                                <input type="email" class="form-control" name="correo"  required placeholder="Email">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-user"></i> Tel&eacute;fono</label>

                                <input type="text" class="form-control" name="telefono"  required placeholder="Telefono">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-building"></i> Empresa</label>

                                <input type="text" class="form-control" name="empresa"  required placeholder="Empresa">
                            </div>
                          
                            <div class="form-group col-sm-12 no-padding">
                            <label><i class="fas fa-building"></i> Mensaje</label>

                                <textarea class="form-control" name="mensaje" placeholder=""></textarea>
                            </div>
                            <div class="col-sm-12 button no-padding">
                                <input type="submit"  class="sppb-btn sppb-btn-default" value="Enviar">
                                <div id="msg" class="message"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Map-->
        <!-- <section id="map">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 no-padding">
                        <div class="sppb-addon-gmap-canvas" data-lat="25.8164042" data-lng="-100.4095318" data-maptype="ROADMAP" data-mapzoom="15" data-mousescroll="false"></div>
                    </div>
                </div>
            </div>
        </section> -->
        <?php include('inc/footer.php') ?>

      
      <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxXYvfenO6svB8PpYr9kG7yXX3XRBpDUaXq5lZ6W_Nw--lk6XM/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(setTimeout(function(){ window.location.href = "gracias.php"}, 500))
      .catch(error => console.error('Error!', error.message))
  })

     


</script>
