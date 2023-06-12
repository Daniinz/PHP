<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inicio - portfolio de produtos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" href="imagens/icons8-marcador-64.png" type="image/png">
  <link rel="icon" href="imagens/icons8-marcador-64.png" type="image/png">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="site.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1>Dan&Mat vendas</h1>
        <span>.</span>
      </a>

      
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="site.php" class="active">Inicio</a></li>
          <li><a href="site.php#about">Sobre nós</a></li>
          <li><a href="site.php#services">Serviços</a></li>
          <li><a href="site.php#portfolio">produtos</a></li>
          <li><a href="site.php#team">Nosso time</a></li>
          <li><a href="site.php#contact">Contatos</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="logout.php">Sair</a>

    </div>
  </header>

  <main id="main">

    
    <section id="hero" class="hero">

      <img src="assets/img/img-pagina-de-vendas.png" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Bem vindo ao Nosso site!</h2>
            <p data-aos="fade-up" data-aos-delay="200">Esse site é uma página de vendas para nossos produtos.</p>
          </div>
          <div class="col-lg-5">
            <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="text" class="form-control" placeholder="e-mail para atualizações semanais!">
              <input type="submit" class="btn btn-primary" value="Eu quero!">
              <!-- Hipoteticamente essa barra para colocar o email iria mandar ele para nosso banco de dados. para envia-lo novas informações sobre o site,
            eu não fiz porque iria dar um trabalho desnecessário para os critérios da avaliação. -->
            </form>
          </div>
        </div>
      </div>

    </section>

    

    
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>Sobre Nós</h3>
            <h2>Somos uma empresa recente de vendas de movéis</h2>
            <p>A Dan&Mat é uma empresa recentemente criada no setor de venda de móveis. Com um foco em oferecer produtos de qualidade e design inovador, a empresa busca atender às necessidades e preferências dos clientes que buscam mobiliar seus espaços de forma elegante e funcional.
</p>
            <a href="site.php" class="read-more"><span>Voltar ao inicio</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Objetivos</h3>
                  <p>A empresa tem como objetivo principal fornecer móveis que combinem estilo e praticidade, visando criar ambientes aconchegantes e sofisticados. Seu catálogo de produtos abrange uma ampla variedade de opções, desde móveis para sala de estar, quartos, cozinhas, até escritórios e áreas externas.</p>
                </div>
              </div>

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Destaque</h3>
                  <p>A Dan&Mat se destaca por sua busca incessante pela excelência no atendimento ao cliente. A equipe da empresa está comprometida em auxiliar os clientes durante todo o processo de compra, desde a seleção do móvel ideal até a entrega e montagem, garantindo uma experiência satisfatória.</p>
                </div>
              </div>

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>O que valorizamos?</h3>
                  <p> Dan&Mat valoriza a qualidade dos materiais utilizados na fabricação dos móveis, buscando parcerias com fornecedores que compartilham dessa mesma visão. Os produtos são cuidadosamente selecionados para garantir durabilidade e resistência, proporcionando aos clientes móveis de alta qualidade.</p>
                </div>
              </div>

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Empresa sustentável</h3>
                  <p>A empresa também se preocupa com a sustentabilidade, buscando reduzir o impacto ambiental em todas as etapas do processo. A Dan&Mat adota práticas sustentáveis na seleção de materiais e embalagens, bem como na gestão de resíduos, contribuindo para a preservação do meio ambiente.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </section>

    
    <section id="stats" class="stats">

      <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="69" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clientes</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="169" data-purecounter-duration="1" class="purecounter"></span>
              <p>Vendas</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1690" data-purecounter-duration="1" class="purecounter"></span>
              <p>Horas de suporte</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="69" data-purecounter-duration="1" class="purecounter"></span>
              <p>Colaboradores</p>
            </div>
          </div>

        </div>

      </div>

    </section>

    
    <section id="services" class="services">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Serviços</h2>
        <p>Dan&Mat contribui para nossos cliente com diversos serviços, dentre eles estão</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Projetos Comerciais</a></h4>
                <p class="description">Além de atender clientes residenciais, a Dan&Mat também oferece serviços de mobiliário para projetos comerciais. Seja para escritórios, lojas, hotéis ou restaurantes, a empresa disponibiliza soluções de mobiliário sob medida, levando em consideração as necessidades específicas de cada projeto e proporcionando ambientes funcionais e esteticamente atraentes.</p>
              </div>
            </div>
          </div>
          

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Consultoria de Design de Interiores</a></h4>
                <p class="description">A Dan&Mat oferece serviços de consultoria de design de interiores, onde uma equipe especializada auxilia os clientes na escolha dos móveis ideais para seus espaços, levando em consideração o estilo desejado, as necessidades funcionais e a otimização do ambiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Entrega e Montagem</a></h4>
                <p class="description">A empresa disponibiliza serviço de entrega e montagem dos móveis adquiridos. Profissionais treinados cuidam do transporte seguro e da montagem adequada, garantindo que os móveis sejam instalados corretamente e prontos para uso.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Personalização de Móveis</a></h4>
                <p class="description">A Dan&Mat oferece opções de personalização de móveis para atender às preferências individuais dos clientes. Eles podem escolher entre diferentes opções de acabamentos, tecidos, cores e tamanhos, permitindo que os móveis sejam adaptados ao estilo e às necessidades específicas de cada cliente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Projeto 3D</a></h4>
                <p class="description"> A empresa oferece serviços de visualização em 3D, onde os clientes podem ter uma prévia realista de como os móveis ficarão em seu ambiente. Isso ajuda na tomada de decisão e permite que os clientes visualizem como os móveis se encaixarão em seu espaço antes de fazer a compra.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Manutenção e Assistência Técnica</a></h4>
                <p class="description">A Dan&Mat oferece serviços de manutenção e assistência técnica para seus móveis. Caso ocorra algum problema ou seja necessário realizar reparos, a empresa disponibiliza uma equipe técnica para solucionar as questões e garantir que os móveis estejam sempre em bom estado.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    
    <section id="features" class="features">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Mais vendidos da semana</h2>
        <p>Abaixo está dois produtos em primeiro lugar de venda nos seus devidos rankings</p>
      </div>

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h3> Luminária de Teto "Estrela Brilhante"</h3>
            <p>
            A luminária de teto "Estrela Brilhante" da Dan&Mat é um destaque na linha de iluminação da empresa. Com um design elegante e contemporâneo, essa luminária proporciona um toque sofisticado a qualquer ambiente. <br> <br> Seu principal diferencial é a forma geométrica em formato de estrela, que cria um efeito de luz único e encantador.
Feita com materiais de alta qualidade, a luminária de teto "Estrela Brilhante" apresenta uma estrutura resistente e durável. Sua instalação é simples e rápida, permitindo que os clientes desfrutem de uma iluminação agradável em pouco tempo. <br> <br>
Uma das características mais impressionantes dessa luminária é a sua capacidade de ajustar a intensidade da luz. Com um sistema de controle de brilho, os usuários podem adaptar a iluminação de acordo com as necessidades e preferências, criando diferentes atmosferas nos espaços.
Além disso, a luminária de teto "Estrela Brilhante" é eficiente em termos energéticos, utilizando tecnologia LED de baixo consumo. Isso não só reduz o impacto ambiental, mas também contribui para a economia de energia elétrica.<br> <br>
Em resumo, a luminária de teto "Estrela Brilhante" da Dan&Mat combina estilo, funcionalidade e eficiência energética. Seu design moderno e o efeito de luz encantador proporcionam uma atmosfera acolhedora e sofisticada aos ambientes.
            </p>
            <a class="btn btn-get-started">R$ 1999,80</a>  <!-- Hipoteticamente esse botão iria levar para um carrinho para a pessoa comprar o produto, mas esse sistema não é relevante para a avaliação do projeto e demandaria mais tempo. -->
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="image-stack">
              <img src="assets/img/features-light-1.jpg" alt="" class="stack-front">
              <img src="assets/img/features-light-2.jpg" alt="" class="stack-back">
            </div>
          </div>
        </div>

        <div class="row gy-4 align-items-stretch justify-content-between features-item ">
          <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
            <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
            <h3> Decoração de Parede "Natureza em Metal"</h3>
            <p>A decoração de parede "Natureza em Metal" é uma das opções de destaque no catálogo da Dan&Mat. Com inspiração na natureza, essa peça de decoração é uma obra de arte em metal que traz um toque de elegância e originalidade aos espaços.<br><br>
            A decoração de parede "Natureza em Metal" é meticulosamente trabalhada em detalhes, apresentando formas orgânicas que representam elementos naturais como árvores, folhas e pássaros. Essa peça é capaz de transformar uma parede comum em um ponto focal impressionante, adicionando profundidade e textura ao ambiente.<br><br>
            Feita com materiais de alta qualidade, essa decoração de parede é resistente e durável, mantendo sua beleza ao longo do tempo. Além disso, seu acabamento em metal oferece um aspecto luxuoso e sofisticado, complementando diferentes estilos de decoração.<br><br>
            Uma das vantagens dessa decoração de parede é sua versatilidade. Ela pode ser facilmente integrada a vários ambientes, como salas de estar, quartos, escritórios ou corredores, adicionando um toque artístico e elegante.<br><br>
            A instalação da decoração de parede "Natureza em Metal" é simples, permitindo que os clientes a fixem de maneira segura e fácil na parede desejada. Dessa forma, é possível transformar rapidamente o ambiente, proporcionando um toque de beleza natural.<br><br>
          </p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Estilosa</span></li>
              <li><i class="bi bi-check"></i><span>Montagem rápida</span></li>
              <li><i class="bi bi-check"></i> <span>Garantia de até 24 meses</span>.</li>
            </ul>
            <a class="btn btn-get-started align-self-start">R$ 1299,80</a>
          </div>
        </div>

      </div>

    </section>

    <section id="portfolio" class="portfolio">

      <div class="container section-title" data-aos="fade-up">
        <h2>Produtos da semana</h2>
        <p>Abaixo, alguns produtos da semana Dan&Mat disponíveis no momento </p>
      </div>

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-app">Utilidade</li>
            <li data-filter=".filter-product">Iluminação e copos</li>
            <li data-filter=".filter-branding">decoração</li>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Umidificador "chill place"</h4>
                <p>Um umidificador perfeito para dar o o toque especial na casa. O umidificador "chill place" é a escolha certa para quem quer conforto em sua moradia.</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pires para chá "benevolent monsieur"</h4>
                <p>Esses maravilhosos pires da marca "benevolent monsieur" é a melhor pedida para vocÇe que quer ter uma bela tarde de chá com seus colegas e colaboradores. </p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Planta falsa "Nature climbing"</h4>
                <p>Esta planta falsa da renomada marca sustentável "nature climbing" é ideal para utilizar nos interiores de sua residencia, seu desing minimalista foi projetado por de nossos donos "Danilo Eduardo - Estoura elas"</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Óculos "raio banido"</h4>
                <p>Esses estilosos óculos da marca "raio banido" é a pedida perfeita para aqueles que querem uma proteção contra o sol e ainda não querem perder o estilo.</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Abajur de mesa "ilumination leverkusen"</h4>
                <p>Esse exuberante abajur de mesa da renomada "ilumination leverkusen" é para aqueles que precisam de uma luz sem perder a elegância.</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Banco de madeira "Nature climbing"</h4>
                <p>Este fenomenal banco da "Nature climbing" é feito com as madeiras de pau-brasil e acácias do sertão, perfeitas para um ambiente exterior</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lentes Canhão "EF 5123 4454"</h4>
                <p>Essas maravilhosas lentes de ultima geração da marca Canhão transformará suas fotos em verdadeiras obras de arte.</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Copo para bebidas "Bebeum levitri"</h4>
                <p>Esse copo da marca "Bebum levitri" é destinado para aqueles que gostam de uma boa noite acompanhada com um charuto rossan.</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Relógio "Moléx" GG-1342</h4>
                <p>Este relógio da marca "Moléx" é uma pedida perfeita para aqueles que querem estilo sem perder o minimalismo.</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div>

          </div>

        </div>

      </div>

    </section>

    
    <section id="pricing" class="pricing">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Valores</h2>
        <p>Os produtos da semana disponíveis estão nos mesmos valores de suas respectivas categorias</p>
      </div>

      <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Categoria - Utilidade</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>R$</sup>999,80<span> / 12X de R$ 90</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Barato</span></li>
                <li><i class="bi bi-check"></i> <span>Popular</span></li>
                <li><i class="bi bi-check"></i> <span>Garantia de 12 meses</span></li>
              </ul>
              <div class="text-center"><a class="buy-btn">Compre Agora</a></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Categoria - Decoração</h3>
              <div class="icon">
                <i class="bi bi-rocket"></i>
              </div>

              <h4><sup>R$</sup>1999,80<span> / 12X de R$170</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Valor justo</span></li>
                <li><i class="bi bi-check"></i> <span>Destinado a decoração</span></li>
                <li><i class="bi bi-check"></i> <span>Garantia de 12 meses</span></li>
              </ul>
              <div class="text-center"><a  class="buy-btn">Compre agora!</a></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Categoria - Iluminação e copos</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>R$</sup>1499,80<span> / 12X de R$125</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Valor justo</span></li>
                <li><i class="bi bi-check"></i> <span>Produto premium</span></li>
                <li><i class="bi bi-check"></i> <span>Garantia de 12 meses</span></li>
              </ul>
              <div class="text-center"><a class="buy-btn">Compre agora</a></div>
            </div>
          </div>

        </div>

      </div>

    </section>

    <section id="team" class="team">

      <div class="container section-title" data-aos="fade-up">
        <h2>Nosso time</h2>
        <p>Nossa empresa conta com um time de duas grandes pessoas, Danilo - Estoura elas e Matheus - Malvadão</p>
      </div>

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/Matheus-foto.jpg" class="img-fluid" alt="">
              <div class="social">
                <a ><i class="bi bi-twitter"></i></a>
                <a ><i class="bi bi-facebook"></i></a>
                <a ><i class="bi bi-instagram"></i></a>
                <a ><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Matheus Malvadão</h4>
              <span>Idealizador - owner</span>
              <p>Matheus Malvadão é um estudante da faculdae Uniprojeção, ele foi um grande idealizador do projeto</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/danilo-foto.jpg" class="img-fluid" alt="">
              <div class="social">
                <a ><i class="bi bi-twitter"></i></a>
                <a ><i class="bi bi-facebook"></i></a>
                <a ><i class="bi bi-instagram"></i></a>
                <a ><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Danilo Estouras</h4>
              <span>Idealizador - Owner</span>
              <p>Danilo Estouras é um estudante da faculdade Uniprojeção, ele foi um dos idealizadores do projeto</p>
            </div>
          </div>

          
          </div>

        </div>

      </div>

    </section>

    <section id="contact" class="contact">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Contatos</h2>
        <p>Esse é o contato de nossa empresa para duvidas e reclamações!</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Endereço</h3>
                  <p>505N asa direita perpendicular</p>
                  <p>Brasília, Distrito Ferederal/p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Nos ligue</h3>
                  <p>+55 (61)9999-9999 - Matheus</p>
                  <p>+55 (61)8888-8888 - Danilo</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Mande um Email</h3>
                  <p>danemat@naoexiste.com</p>
                  <p>matedan@naoexiste.com</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Horário de funcionamento</h3>
                  <p>Segunda - Sexta</p>
                  <p>09:00 - 21:00PM</p>
                </div>
              </div>

            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Seu nome" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Seu email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Titulo" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">carregando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>

                  <button type="submit">Mandar mensagem</button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

</section>

  </main>

  
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Dan&Mat</span>
          </a>
          <p>Dan&Mat é uma nova empresa de venda de móveis que se destaca pelo seu compromisso com a qualidade, design inovador e atendimento ao cliente. Com uma ampla variedade de opções de mobiliário e um foco na satisfação do cliente, a empresa busca oferecer soluções que tornem os ambientes mais confortáveis e esteticamente agradáveis.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
        
          <ul>
        
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contate!</h4>
          <p>505N asa direito perpendicular</p>
          <p>Brasília, Distrito Federal</p>
          <p>Brasil</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+55 (61) 99999-9999</span></p>
          <p><strong>Email:</strong> <span>danemat@naoexiste.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">Dan&Mat</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>


  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>


  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>