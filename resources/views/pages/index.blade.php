    @extends('template.index')

    @section('header')
  
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Café Raiz</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Início</a></li>
          <li><a class="nav-link scrollto" href="/sobre">Sobre nós</a></li>
          <li><a class="nav-link scrollto" href="/servicos">Serviços</a></li>
          <li><a class="nav-link scrollto" href="/contato">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


    @endsection

    @section('hero')

      <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
        <h1>Seja bem vindo!</h1>
        <h2>Prove o verdadeiro sabor de sua raiz!</h2>
        <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
    </section><!-- End Hero -->


    @endsection

    @section('contents')

    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Por que nos escolher?</h2>
          <p> Nosso café é muito mais que uma mera mercadoria. Tentamos ao máximo passar todos os sentidos que um simples café pode trazer. Belas risadas, histórias, conversas de longas durações, tradição e muito amor. </p>
        </div>

      </div>
    </section>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Plantação</h2>
          <p>Aqui estão as nossas maiores lavouras de café, localizadas no interior de Minas Gerais</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Campo Limpo</h4>
                <span>São Lourenço/Carmo de Minas </span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="150">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Terra molhada</h4>
                <span>Manhuaçu-MG</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Linhada de Sapucaí</h4>
                <span>Santa Rita do Sapucaí</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Clientes Fiéis</h2>
          <p> Aqui estão algumas pessoas que compraram nosso café uma vez por mês! Dessa forma, ganharam a oportunidade de um comentário em nossa página para exporem o que acharam de nosso café. </p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Huuuum... Esse café estava mesmo uma delicia! preto e amargo, da maneira que eu gosto! Meu estagiário faz todo dia no cuador para mim! realmente uma delícia!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3> Hans Chucrute </h3>
                <h4>Urologista</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Carambolas! esse café estava mesmo delicioso. Tive que levar no lugar onde eu trabalho. Todos adoraram, inclusive meu superior! agora todo dia ele quer que eu faça mais forte no cuador.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Francesco Virgolini</h3>
                <h4> Estagiário em Urologia </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Oh, my, god! Jesus, maria e josé.. Esse café é realmente, de outro mundo! Look this! com certeza foi a melhor compra da minha vida! Com certeza esse café é natural. Obrigado! 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3> Fake Naty</h3>
                <h4> Nutricionista </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Oi pessoal, tudo bem? olha só minha nova... muuuuusicaaaa "Ela é muito é vagabunda, vagabunda ela é
                    Ela deixa o marido em casa e vai ir tomar café". Mas ela não é vagabunda nãão, é só a letra da música, e o café também não é ruim não! Muito Obrigaaadoo!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Manuel Gomes</h3>
                <h4>Fundador da empresa 'Canetas Azuis'</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Este café realmente me impressionou. Muito saboroso. Só acho inconveniente comentar coisas absurdas em um ambiente tão amplo e aberto de famílias. Desde já agreço.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>MacGyver</h3>
                <h4>arquitetos de planilhas no exército</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    @endsection

