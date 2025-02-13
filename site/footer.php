  <!-- FOOTER -->
  <footer class="mt-5 bg-blue w-100 py-5">
                  <div class="container ">
                    <p align='center'><img src="img/logobranca.png">
                      <p align='center'>Desenvolvido durante o curso de Desenvolvedor Web. - <a href="#">Voltar ao topo</a></p>
                    </div>
                  </footer>

                  


                  <script src="js/bootstrap.bundle.min.js"></script>
                  <script src="js/jquery-3.6.0.min.js"></script>

                  <!--Faz a página rolar suavemente ao clicar no menu-->
                  <script type="text/javascript">
                    $('nav a').click(function(e){
                      e.preventDefault();
                      var id = $(this).attr('href').slice(10),
                      targetOffset = $(id).offset().top,
                      menuHeight = $('nav').innerHeight();

                      console.log(menuHeight);

                      $('html, body').animate({
                        scrollTop: targetOffset - menuHeight-50
                      }, 200);
                    });
                  </script>

                </body>
                </html>
