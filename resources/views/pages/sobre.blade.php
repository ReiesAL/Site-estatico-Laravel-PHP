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
            <li><a class="nav-link scrollto active" href="/sobre">Sobre nós</a></li>
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
    <h1>Sobre nós</h1>
    <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->


  @endsection


  @section('contents')

  <section id="team" class="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up">
            <div class="pic"><img src="assets/img/team/team-7.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4> Harmonia </h4>
              <span></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up">
            <div class="pic"><img src="assets/img/team/team-6.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4> Sabor </h4>
              <span></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up">
            <div class="pic"><img src="assets/img/team/team-5.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4> Carinho </h4>
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3> Quem somos </h3>
        <p> Somos uma família nascida e criada no interior de Minas Gerais. Levamos conosco o Café Raiz desde 1960, onde originou-se a primeira venda de café para uma pequena kitanda que havia na feira nos finais de semana. Daí em diante, percebemos que a demanda de nosso café estava sempre aumentando, e nisso, fomos crescendo nossas lavouras para poder aumentar a quantiade de produção de café. </p>
        <p>  Hoje, temos mais de 10 plantações de café, com as 3 maiores da região. Veja logo abaixo!</p>
        <p>  "Os melhores momentos são compostos pela simplicidade." </p>
        <a class="cta-btn" href="/">Veja nossa maiores plantações</a>
      </div>

      </div>
    </div>
  </section>  
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">

    </section><!-- End Cta Section -->
    

  @endsection
    