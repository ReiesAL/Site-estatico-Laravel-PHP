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
            <li><a class="nav-link scrollto" href="/">Início</a></li>
            <li><a class="nav-link scrollto" href="/sobre">Sobre nós</a></li>
            <li><a class="nav-link scrollto active" href="/servicos">Serviços</a></li>
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
    <h1>Nosso Trabalho</h1>
    <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->


  @endsection


  @section('contents')

     <!-- ======= Services Section ======= -->

    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3> Uma xícara, uma lembrança </h3>
              <p>
                  Temos zelo desde a plantação até a nossa torra. Evitamos utilizar conservantes e por isso um sabor tão especial!
              </p>
              <a href="/contato" class="about-btn"> Faça sua encomenda! <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Nota de informações</h4>
                  <p>Aqui deixamos anotado todos os processos, junto com suas características e a melhor forma de fazer seu café</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Fotos atenciosas!</h4>
                  <p>Enviamos fotos a todo momento para tirar sua ansiedade (ou aumenta-lá..)</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="589" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Famílias Felizes</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="261" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Empresas Clientes</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Atendimentos realizados em horas</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="56" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Apoiadores</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section --> 


  @endsection