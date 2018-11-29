<?php include('inc/header.php') ?>

        <!--Breadcrumb-->
        <section id="breadcrumb" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 breadcrumb-block">
                        <h2>Bolsa de Trabajo</h2>
                    </div>
                    <div class="col-sm-6 breadcrumb-block text-right hidden-xs">
                        <ol class="breadcrumb">
                            <li><span></span><a href="index.php">MyM Express</a></li>
                            <li class="active">Bolsa de Trabajo</li>
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
                            <h3>Trabaja con Nosotros</h3>
                        </div>
                        <form method="POST" name="submit-to-google-sheet">
                            <div class="form-group col-sm-6 padding-right">
                            <label><i class="fas fa-user"></i> Nombre Completo</label>

                                <input type="text" class="form-control" name="nombre" id="name" required placeholder="Nombre">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-envelope"></i> Correo Electrónico</label>

                                <input type="email" class="form-control" name="correo" id="mail" required placeholder="Correo">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-phone"></i> Tel&eacute;fono</label>

                                <input type="text" class="form-control" name="telefono" id="telefono" required placeholder="Telefono">
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-map-marker-alt"></i> ¿Vives en Nuevo L&eacute;on?</label>

                                <select type="text" class="form-control" name="vivesnl" required>
                                <option selected disabled>Selecciona una opci&oacute;n</option>
                                    <option>Si </option>
                                    <option>No </option>

                                </select>
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-calendar-alt"></i> Años de experiencia</label>
                                <select type="text" class="form-control" name="experiencia-anos" required>
                                    <option selected disabled>Selecciona una opci&oacute;n</option>
                                    <option>0</option>
                                    <option>1-2</option>
                                    <option>3-5</option>
                                    <option>6-9</option>
                                    <option>10 o m&aacute;s</option>

                                </select>
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-address-card"></i> Tipo de Licencia</label>
                                <select type="text" class="form-control" name="licencia">
                                    <option selected disabled>Selecciona una opci&oacute;n</option>
                                    <option>Tipo A </option>
                                    <option>Tipo B </option>
                                    <option>Tipo C </option>
                                    <option>Tipo D </option>
                                    <option>Tipo E </option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12 no-padding">
                                <label><i class="fas fa-briefcase"></i> Experiencia Laboral</label>
                                <textarea class="form-control" name="experiencia" id="comment" placeholder="Trabajos anteriores y referencias"></textarea>
                            </div>
                            <div class="form-group col-sm-6 padding-left">
                            <label><i class="fas fa-business-time"></i> Disponibilidad</label>
                                <select type="text" class="form-control" name="disponibilidad" required>
                                <option selected disabled>Selecciona una opci&oacute;n</option>
                                    <option>For&aacute;neo </option>
                                    <option>Local </option>
                                    <option>Ambas </option>
                                </select>
                            </div>
                            <div class="col-sm-12 button no-padding">
                                <input type="submit" class="sppb-btn sppb-btn-default" value="Enviar Solicitud">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbyNHPW1_CSPKV3f61h_luJoTinvGeyMQhRkQtPnPpwL0q8liaQ/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(setTimeout(function(){ window.location.href = "gracias.php"}, 500))
      .catch(error => console.error('Error!', error.message))
  })




</script>
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
