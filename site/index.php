<?php
  include('header.php');

  $query_cursos = "SELECT id, nome, imagem FROM cursos";
  $result_cursos = $conn->prepare($query_cursos);
  $result_cursos->execute();
?>

    <main class='pt-5'>
      <section id="inicio"> 
        <div id="myCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="img/bg1.png">            
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <div class='container'>

        <section id="quemsomos">
          <div class="row featurette" >
            <div class="col-md-7">
              <h2 class="featurette-heading">Quem Somos</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non velit dictum, aliquet magna eget, ornare diam. Nullam in erat et tellus imperdiet egestas eget ut risus. Cras sagittis dictum vehicula. Mauris interdum purus nunc, ac porttitor lorem varius ut. Vivamus nisi augue, iaculis eu cursus vitae, maximus vitae lectus. Ut tellus tortor, eleifend id fermentum et, tristique vel nulla. Aenean iaculis fermentum tellus ac venenatis. Mauris fringilla sapien ex, et tristique ex posuere nec.</p>
            </div>
            <div class="col-md-5">
              <img src="img/sobre.jpg" class='img-fluid'>

            </div>
          </div>
        </section>

      </div><!-- /.container -->

      <section id="cursos">
        <div class='cursos bg-light py-5 my-5'>
          <div class='container'>
            <h2 class="titulo text-center mb-5">Cursos</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 
              if(($result_cursos) AND ($result_cursos->rowCount()!=0)){
                while($row_cursos = $result_cursos->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div class="col">
                <div class="card">
                  <a href="curso.html"><img src="img/cursos/<?php echo $row_cursos['imagem']?>" class='img-fluid'>
                    <div class="card-body">
                      <h5 class="card-title text-center"><?php echo $row_cursos['nome']?></h5>                
                    </div></a>
                  </div>
                </div>
                <?php
                }
              }
            ?>  
            
                      </div>

                    </div>
                  </section>

                  <section id="contato">
                    <div class='contato py-5 my-5'  id="contato">
                      <div class='container'>
                        <div class="row featurette">
                          <div class="col-lg-6">
                            <h2 class="titulo">Contato</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non velit dictum, aliquet magna eget, ornare diam.</p>  

                            <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.76457430403!2d2.2769948739278507!3d48.85894658138312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2zUGFyaXMsIEZyYW7Dp2E!5e0!3m2!1spt-BR!2sbr!4v1646186731207!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      

                          </div>
                          <div class="col-lg-6">
                            <div class='form-contato py-4 px-4'>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <input type="submit" name=""  class="btn btn-primary w-100">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </main>

<?php
  include('footer.php');
?>