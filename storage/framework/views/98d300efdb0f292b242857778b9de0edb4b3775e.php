<?php $__env->startSection('contenido'); ?>

<style>
    .grow:hover
    {
        -webkit-transform: scale(0.8);
        -ms-transform: scale(0.8);
        transform: scale(0.8);
    }
    #zoom:hover
    {
       -webkit-transform: scale(1.3);
       -ms-transform: scale(1.3);
       transform: scale(1.3);"
   }
</style>

<!-- revolution slider begin -->
<div id="section-slider" class="fullwidthbanner-container">
    <div id="revolution-slider">
        <ul>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="images-slider/thumbs/thumb1.jpg">
                <!--  BACKGROUND IMAGE -->
                <img src="images-slider/miami.jpg" alt="imagen" />
                                <!--<div class="tp-caption big-white sft"
                                    data-x="center"
                                    data-y="165"
                                    data-speed="800"
                                    data-start="400"
                                    data-easing="easeInOutExpo"
                                    data-endspeed="450">
                                    WE CREATE</span>
                                </div>-->

                                <div class="tp-caption ultra-big-white customin customout start"
                                data-x="center"
                                data-y="center"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="400">
                                TECNOTROPOLIS</span>
                            </div>

                            <div class="tp-caption sfb"
                            data-x="center"
                            data-y="325"
                            data-speed="400"
                            data-start="800"
                            data-easing="easeInOutExpo">
                            <a href="<?php echo e(route ('catalogo.index')); ?>" class="btn-slider">CATÁLAGO
                            </a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="images-slider/thumbs/thumb1.jpg">
                        <!--  BACKGROUND IMAGE -->
                        <img src="images-slider/venezuela.jpg" alt="imagen" />
                                <!--<div class="tp-caption big-white sft"
                                    data-x="center"
                                    data-y="165"
                                    data-speed="800"
                                    data-start="400"
                                    data-easing="easeInOutExpo"
                                    data-endspeed="450">
                                    specialize on</span>
                                </div>-->

                                <div class="tp-caption ultra-big-white customin customout start"
                                data-x="center"
                                data-y="center"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="400">
                                MASTER DEALER</span>
                            </div>

                            <div class="tp-caption sfb"
                            data-x="center"
                            data-y="325"
                            data-speed="400"
                            data-start="800"
                            data-easing="easeInOutExpo">
                            <a href="<?php echo e(route ('catalogo.index')); ?>" class="btn-slider">CATÁLOGO
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- revolution slider close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top content-overlay">
            <div class="row">

                <!-- section begin -->
                <section id="section-about">
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <h1 class="animated" data-animation="fadeInUp">¿Quienes <span class="id-color">Somos?</span>
                                        <span class="small-border animated" data-animation="fadeInUp"></span>
                                    </h1>

                                    <div class="spacer-single"></div>
                                </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-3">
                               
                                <!-- normal -->
                                <div class="ih-item circle effect2 left_to_right"><a href="#">
                                    <div class="img"><img src="images/tecnotropolis_gris.png" alt="imagen"></div>
                                    <div class="info">
                                      <h3><?php echo e($contenido[0]->str_titulo); ?></h3>
                                      <p><?php echo $contenido[0]->str_descripcion; ?></p>
                                  </div></a></div>
                                  <!-- end normal -->
                                  
                              </div>

                              <div class="col-sm-3">
                               
                                <!-- normal -->
                                <div class="ih-item circle effect2 left_to_right"><a href="#">
                                    <div class="img"><img src="images/innovacion.png" alt="imagen"></div>
                                    <div class="info">
                                      <h3><?php echo e($contenido[1]->str_titulo); ?></h3>
                                      <p><?php echo $contenido[1]->str_descripcion; ?></p>
                                  </div></a></div>
                                  <!-- end normal -->
                                  
                              </div>

                              <div class="col-sm-3">
                               
                                <!-- normal -->
                                <div class="ih-item circle effect2 left_to_right"><a href="#">
                                    <div class="img"><img src="images/enfoque4.png" alt="imagen"></div>
                                    <div class="info">
                                      <h3><?php echo e($contenido[2]->str_titulo); ?></h3>
                                      <p><?php echo $contenido[2]->str_descripcion; ?></p>
                                  </div></a></div>
                                  <!-- end normal -->
                                  
                              </div>

                              <div class="col-sm-3">
                               
                                <!-- normal -->
                                <div class="ih-item circle effect2 left_to_right"><a href="#">
                                    <div class="img"><img src="images/clientes.png" alt="imagen"></div>
                                    <div class="info">
                                      <h3><?php echo e($contenido[3]->str_titulo); ?></h3>
                                      <p><?php echo $contenido[3]->str_descripcion; ?></p>
                                  </div></a></div>
                                  <!-- end normal -->
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- section close -->


              <section id="section-products" class="dark" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h1 class="animated" data-animation="fadeInUp">NUESTROS <span class="id-color">EQUIPOS</span>
                                <span class="small-border animated" data-animation="fadeInUp"></span>
                            </h1>

                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true }' >
                               <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <div class="carousel-cell grow" onclick="redireccion('/Informacion/<?php echo e($pr->id); ?>')" style="margin-right: 10px; cursor: pointer;" >
                                 <img  src="<?php echo e($pr->str_urlimage); ?>" alt="imagen" height="230" width="230" style="">
                                 <br>
                                 <center><?php echo e($pr->str_nombre); ?></center>
                             </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- section begin -->
         <section id="section-services" class="no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h1 class="animated" data-animation="fadeInUp">NUESTROS <span class="id-color">Servicios</span>
                            <span class="small-border animated" data-animation="fadeInUp"></span>
                        </h1>

                        <div class="spacer-single"></div>
                    </div>
                </div>

                <div class="row">
                 <div class="col-sm-4">

                    <!-- normal -->
                    <div class="ih-item square effect14 left_to_right"><a>
                        <div class="img" style="margin-left:25%; margin-top:10%"><img src="<?php echo e(url('images/mante.png')); ?>" style="width: 60%" alt="imagen"><h3 style="margin-left: -18%"><?php echo e($contenido[4]->str_titulo); ?></h3></div>
                        <div class="info">
                          <h3><?php echo e($contenido[4]->str_titulo); ?></h3>
                          <?php echo $contenido[4]->str_descripcion; ?>

                      </div></a></div>
                      <!-- end normal -->

                  </div>
                  <!-- feature box begin -->
                  <div class="col-sm-4">

                    <!-- normal -->
                    <div class="ih-item square effect14 left_to_right"><a>
                        <div class="img" style="margin-left:25%; margin-top:10%"><img src="<?php echo e(url('images/capacitacion.png')); ?>" style="width: 60%" alt="imagen"><h3><?php echo e($contenido[5]->str_titulo); ?></h3></div>
                        <div class="info">
                          <h3 style="margin-top:1px"><?php echo e($contenido[5]->str_titulo); ?></h3>
                          <?php echo $contenido[5]->str_descripcion; ?>

                      </div></a></div>
                      <!-- end normal -->

                  </div>
                  <!-- feature box close -->

                  <div class="col-sm-4">

                    <!-- normal -->
                    <div class="ih-item square effect14 left_to_right"><a>
                        <div class="img" style="margin-left:25%; margin-top:10%"><img src="<?php echo e(url('images/soporte.png')); ?>" style="width: 60%" alt="imagen"><h3 style="margin-left: 14%"><?php echo e($contenido[6]->str_titulo); ?></h3></div>
                        <div class="info">
                          <h3><?php echo e($contenido[6]->str_titulo); ?></h3>
                          <?php echo $contenido[6]->str_descripcion; ?>

                      </div></a></div>
                      <!-- end normal -->

                  </div>
                  <!-- feature box close -->


                  <div class="spacer-single"></div>

              </div>
          </div>
      </section>
      <!-- section close -->

      <!-- section begin -->
      <section id="section-social" class="dark" data-stellar-background-ratio=".2">
        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">
                    <h1 class="animated" data-animation="fadeInUp">REDES <span class="id-color">SOCIALES</span></h1>
                    <span class="small-border animated" data-animation="fadeInUp"></span>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-md-4 animated" data-animation="fadeInLeft" data-delay="100">
                    <div class="de_count" id="zoom">
                        <a href="https://www.facebook.com/Tecnotropolis-LLC-751994258189169/?fref=ts" target="_blank" class="redes"><i class="fa fa-facebook-square animated" data-animation="fadeInDown" data-delay="0"></i></a>
                        <h3 class="timer" data-to="429" data-speed="2500">0</h3>
                        <span>Seguidores</span>
                    </div>
                </div>

                <div class="col-md-4 animated" data-animation="fadeInLeft" data-delay="0" >
                    <div class="de_count"  id="zoom">
                        <a href="https://twitter.com/TecnotropolisLA?lang=es" target="_blank" class="redes"><i class="fa fa-twitter-square animated" data-animation="fadeInDown" data-delay="200" ></i></a>
                        <h3 class="timer" data-to="648" data-speed="2500">0</h3>
                        <span>Twetts</span>
                    </div>
                </div>

                <div class="col-md-4 animated" data-animation="fadeInRight" data-delay="0">
                    <div class="de_count"  id="zoom">
                        <a href="https://www.instagram.com/blu_tecnotropolis/" target="_blank" class="redes"><i class="fa fa-instagram animated" data-animation="fadeInDown" data-delay="400"></i></a>
                        <h3 class="timer" data-to="549" data-speed="2500">0</h3>
                        <span>Posts</span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
                <section id="section-sede">
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <h1 class="animated" data-animation="fadeInUp">Nuestras <span class="id-color">Sedes</span>
                                        <span class="small-border animated" data-animation="fadeInUp"></span>
                                    </h1>

                                    <div class="spacer-single"></div>
                                </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-3">
                               
                                <!-- normal -->
                                <div class="ih-item circle effect2 left_to_right"><a href="#">
                                    <div class="img"><img src="images/venezuela.png" alt="imagen"></div>
                                    <div class="info">
                                      <h3></h3>
                                      <p><?php echo $contenido[14]->str_descripcion; ?></p>
                                  </div></a></div>
                                  <!-- end normal -->
                                  
                              </div>

                              <div class="col-sm-3">
                               
                                <!-- normal -->
                                <div class="ih-item circle effect2 left_to_right"><a href="#">
                                    <div class="img"><img src="images/us.png" alt="imagen"></div>
                                    <div class="info">
                                      <h3></h3>
                                      <p><?php echo $contenido[11]->str_descripcion; ?></p>
                                  </div></a></div>
                                  <!-- end normal -->
                                  
                              </div>

                              <div class="col-sm-3">
                               
                                <!-- normal -->
                                <div class="ih-item circle effect2 left_to_right"><a href="#">
                                    <div class="img"><img src="images/chile.png" alt="imagen"></div>
                                    <div class="info">
                                      <h3></h3>
                                      <p><?php echo $contenido[12]->str_descripcion; ?></p>
                                  </div></a></div>
                                  <!-- end normal -->
                                  
                              </div>

                               <div class="col-sm-3">
                               
                                <!-- normal -->
                                
                                  <div class="ih-item circle effect2 left_to_right"><a href="http://bluproducts.com.es/">
                                    <div class="img"><img src="images/esp.png" alt="imagen"></div>
                                    <div class="info">
                                      <h3></h3>
                                      <p><?php echo $contenido[13]->str_descripcion; ?></p>
                                  </div></a></div>
                                  <!-- end normal -->
                                  <!-- end normal -->

                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- section close -->

    <?php if($pais=="Chile"): ?>
    <section style="padding: 0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.2527797137063!2d-70.13916648508797!3d-20.20681428644937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915216aedebdd8bb%3A0x77422fce64b8a648!2sBlu+Tecnotropolis+Chile!5e0!3m2!1ses-419!2sve!4v1510769097847" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <?php else: ?>
    <section style="padding: 0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.143603994849!2d-80.37348265751429!3d25.79883604972823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9beb15629f745%3A0xd50b3ccde3720abc!2s10840+NW+27th+St%2C+Doral%2C+FL+33172%2C+EE.+UU.!5e0!3m2!1ses-419!2sve!4v1479844108281" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </section>
    <?php endif; ?>

    <!-- section begin -->
    <section id="section-contact" class="dark" data-stellar-background-ratio=".2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="animated" data-animation="fadeInUp">Contactanos <span class="id-color"></span>
                        <span class="small-border animated" data-animation="fadeInUp"></span>
                    </h1>
                    <p class="animated" data-animation="fadeIn">
                        Póngase en contacto con nosotros. Siéntase libre de usar contacto a continuación.
                    </p>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-md-8 animated" data-animation="fadeInUp" data-delay="200" data-speed="5">

                    <form name="contactForm" id='contact_form' method="post" action="<?php echo e(route('home.correo')); ?>">
                        <div class="row">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="token">
                            <div class="col-md-6">
                                <div id='name_error' class='error'>Por favor, escriba su nombre.</div>
                                <div>
                                    <input type='text' class="form-control" placeholder="Su Nombre" maxlength="100" name="name" id="name" required="required" data-msg-required="Por favor ingrese su nombre completo." >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='email_error' class='error'>Por favor ingrese su correo electrónico.</div>
                                <div>
                                    <input type='text' placeholder="Su Email" maxlength="100" class="form-control" name="email" id="email" required="required" data-msg-required="Por favor ingrese su dirección de correo electrónico" data-msg-email="Por favor ingrese una dirección de correo válida">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id='empresa_error' class='error'>Por favor ingrese el nombre de su Empresa.</div>
                                <div>
                                    <input type='text' placeholder="Empresa" maxlength="100" class="form-control" name="empresa" id="empresa" required="required" data-msg-required="Por favor ingrese el nombre de su empresa.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='pais_error' class='error'>Por favor ingrese algún país.</div>
                                <div>
                                    <select name='pais' id='pais' class="form-control inputs">
                                        <option value="">Seleccione</option>
                                        <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lugar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($lugar->str_value); ?>"><?php echo e($lugar->str_options); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='telefono_error' class='error'>Por favor ingrese su número de teléfono.</div>
                                <div>
                                    <input type="hidden" name="pais_cl" value="<?php echo e($pais); ?>">
                                    <input type='text' placeholder="Teléfono" value="" data-msg-required="Por favor ingrese su numero de teléfono." maxlength="100" class="form-control" name="telefono" id="telefono" required="required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id='message_error' class='error'>Por favor ingrese su mensaje.</div>
                                <div>
                                    <textarea placeholder="Su Mensaje" maxlength="5000" rows="10" class="form-control" name="message" id="message" required="required" data-msg-required="Por favor ingrese el contenido del mensaje"></textarea>
                                </div>
                            </div>
                            <div id='mail_success' class='success'>Tu mensaje ha sido enviado exitosamente</div>
                            <div id='mail_fail' class='error'>Lo sentimos, esta vez se produjo un error al enviar su mensaje.</div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="6Le7sR8UAAAAAKaUyXllcH_EOUtF2bRtmTDpNCPt"></div>
                            </div>

                            <div class="spacer-single"></div>

                            <div class="col-md-12">
                                <p id='submit'>
                                    <input type='submit' id='send_message' value='Enviar' class=" btn-border" data-loading-text="Loading...">
                                </p>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-4">
                    <?php if($pais=='Chile'): ?>
                    <address>
                        <span><i class="fa fa-map-marker fa-lg"></i>Colón 51-52, Iquique, Región de Tarapacá, Chile.</span>
                        <span><i class="fa fa-phone fa-lg"></i>+55 27 2 269197/ +57 930 922.700</span>
                        <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:info@blu-tecnotropolis.cl">info@blu-tecnotropolis.cl</a></span>
                        <span><i class="fa fa-clock-o fa-lg"></i><?php echo $contenido[10]->str_titulo; ?>: <?php echo $contenido[10]->str_descripcion; ?></a></span>
                    </address>

                    <?php else: ?>
                    <address>
                        <span><i class="fa fa-map-marker fa-lg"></i><?php echo $contenido[7]->str_descripcion; ?></span>
                        <span><i class="fa fa-phone fa-lg"></i><?php echo $contenido[8]->str_descripcion; ?></span>
                        <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:info@tecnotropolisla.com"><?php echo $contenido[9]->str_descripcion; ?></a></span>
                        <span><i class="fa fa-clock-o fa-lg"></i><?php echo $contenido[10]->str_titulo; ?>: <?php echo $contenido[10]->str_descripcion; ?></a></span>
                    </address>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>