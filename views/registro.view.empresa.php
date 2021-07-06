<?php require './header.php'; ?>
<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>REGISTRARSE COMO EMPRESA</h2>
                <p>Si necesita asistencia para publicar un anuncio de empleo, puede comunicarse
                    con nosotros a soporte@utepsa.edu o llamando a
                    nuestra línea gratuita (591-3)363-9000. Asistencia teléfonica únicamente para empresas. </p>
            </div>

            <div class="row align-items-center justify-content-center ">
                <!--  -->

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex ">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre de la empresa</label>
                                <input type="text" name="nombre" class="form-control" id="name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Nit</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Direccion</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                                data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">pais</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Telefono</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Correo electronico</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Codigo de fundaempresa</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Iindustria</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">sitio web</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Descripcion</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required"
                                data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-7">
                            <label for="name">Logo</label>
                            <input type="file" name="thumb" class="form-control" id="email" />
                            <div class="validate"></div>
                        </div>

                        <div class="form-group col-md-7">
                            <label for="name">Acepto los terminos de uso</label>
                            <input class="form-check-input" type="checkbox" name="checkbox"value="" id="flexCheckDefault" />
                            <div class="validate"></div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Tu registro se ha realizado. Muchas Gracias!</div>
                        </div>
                        <div class="text-center"><a type="submit" class="get-ver-btn scrollto">Registrate</a></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


<?php require './footer.php';?>