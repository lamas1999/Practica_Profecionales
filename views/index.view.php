<?php require './header.php'; ?>
<main id="main">

    <!-- Post -->

    <!-- ======= Team Section de empleo ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Ofertas de Empleo</h2>
            </div>

            <!-- Post -->
            <div class="row">
            <?php foreach($post as $post): ?>
                <div class="col-md-12 mb-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100" >
                        <!-- <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div> -->
                        <div class="pic col-md-3"><img src="assets/img/logo_empresa/<?php echo $post['logo']; ?>" class="img-fluid" alt=""></div>
                        <div class="member-info">
                        <h4><a href="single.php?id=<?php echo $post['id_oferta']; ?>"><?php echo $post['titulo']; ?></a></h4>
                        <span><?php echo $post['nombre']; ?></span>
                        <h6> <i class="far fa-calendar-alt"></i> <?php echo fecha($post['fecha_publicado']); ?></h6>
                        <h6> <i class="fas fa-map-marker-alt"></i> <?php echo $post['ciudad']; ?>, <?php echo $post['pais']; ?></h6>
                            <p>  <?php echo $post['descripcion']; ?>.</p></br>
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a href="<?php echo RUTA?>/modulos/modulo_estudiante/index.php" class="get-ver-btn scrollto">Ver Empleo</a>
                        </div>
                        </div>
                    </div>
                </div>


                <?php endforeach;?>
            </div><!-- row -->

               <!-- PAGINACION  -->
        <br>
        <?php require 'paginacion.php';?>
        </div>
    </section>
  <!-- end section -->

</main>

<?php require './footer.php';?>