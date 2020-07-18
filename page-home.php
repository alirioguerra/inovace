<?php
/*
Template Name: Home
*/
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- start section -->
<section id="start" class="section--full">
  <div class="light-gray-circle-right"></div>
  <div class="light-gray-circle-left"></div>
  <div class="primary-circle-bottom"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 start-content">
        <div class="section-title" style="margin-bottom: 0; text-align: left;">
          <h1>Sua <strong>empresa</strong> e a mídia do <span>futuro!</span></h1>
        </div>
        <p>Com  soluções rápidas e modernas, tornamos mais fácil a sua vida e o dia-a-dia da sua empresa!</p>
      </div>
      <div class="col-md-6 start-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/future-people.svg" alt="Future People">
      </div>
    </div>
  </div>
</section>
<!-- start section end -->

<!-- services section -->
<section id="services" class="section--full bg--gray">
  <div class="container">

    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h1>Como a <strong>inovace</strong> pode te ajudar <span>hoje</span></h1>
          <p>Fazer sua empresa ser vista e estar conectada com seus consumidores é só o começo. Estar presente no mundo digital é essencial para o seu negócio</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="mobile--arrow"></div>
        <div class="services">
          <div class="services-item">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/img/svg/socialmedia.svg" alt="">
            </div>
            <h2>Social media</h2>
            <p>As redes sociais se tornaram uma ferramenta de comunicação indispensável para qualquer empresa e isto envolve grandes vantagens.</p>
            <ul>
              <li>Curadoria de conteudo</li>
              <li>Criação de Material Educativo</li>
              <li>Otimização de Sites e Links Patrocinados</li>
            </ul>
          </div>

          <div class="services-item">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/img/svg/video.svg" alt="">
            </div>
            <h2>Vídeo</h2>
            <p>Tire suas ideias do papel e transforme em uma arte para as telas. Nós realizamos tudo para você: roteiro, produção, gravação, trilha, locução e pós produção.</p>
            <ul>
              <li>Produção e captação</li>
              <li>Vídeos institucionais e Publicitários</li>
              <li>Cobertura de eventos</li>
            </ul>
          </div>

          <div class="services-item">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/img/svg/branding.svg" alt="">
            </div>
            <h2>Branding</h2>
            <p>O branding é essencial no mundo digital, alinhando as novas tecnologias para melhorar sua marca através de interações com os usuários em seus dispositivos.</p>
            <ul>
              <li>Identidade</li>
              <li>Visibilidade</li>
              <li>Credibilidade</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- services section end-->

<!-- about section -->
<section id="about" class="section--full">
  <div class="container">
    <div class="row justify-content-center about">
      <div class="col-md-6 about-img">
        <img src="<?php echo get_template_directory_uri();?>/img/svg/3-people-rocket-clouds.svg" alt="">
      </div>
      <div class="col-md-6 about-content d-flex align-items-center justify-content-center">
        <div class="section-title" style="text-align: left;">
          <h1>Uma empresa do <strong>presente</strong>, comunicando com o <span>futuro!</span></h1>
        </div>
        <p>Hoje, conseguimos pagar contas pela internet, ver uma pessoa que está do outro lado do  mundo a um clique de distância, e tudo vem ficando digital, cada vez mais. Estar presente no mundo digital é essencial para sua empresa, ser vista e estar conectada com seus consumidores. <strong>O futuro é agora!</strong> </br>Somos especialistas em marketing digital que usa as melhores maneiras que uma empresa ou marca tem para se comunicar com o público alvo de forma personalizada, direta e no momento certo.</p>
      </div>
    </div>
  </div>
</section>
<!-- about section end -->

<!-- partners section -->
<section id="partners" class="bg--gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="mobile--arrow"></div>
        <h2>Parceiros:</h2>
        <ul class="partners d-flex  align-items-center">
          <li><img src="<?php echo get_template_directory_uri();?>/img/png/facebook.png" alt="facebook logo"></li>
          <li><img src="<?php echo get_template_directory_uri();?>/img/png/aws.png" alt="amazon aws logo"></li>
          <li><img src="<?php echo get_template_directory_uri();?>/img/png/google.png" alt="google logo"></li>
          <li><img src="<?php echo get_template_directory_uri();?>/img/png/adobe.png" alt="adobe logo"></li>
          <li><img src="<?php echo get_template_directory_uri();?>/img/png/instagram.png" alt="instagram logo"></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- partners section end -->

<!-- portfolio section -->
<section id="portfolio" class="section--full">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h1>Nossos <strong>trabalhos</strong> mais <span>recentes</span></h1>
        </div>
        <div class="portfolio">
          <!-- port -->

          <?php
              $args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1 );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
              ?>
          <div class="portfolio--item portfolio--item--1">
            <div class="portfolio--item--image">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="portfolio--item--content">
              <h1><?php echo the_title(); ?></h1>
              <h2><?php echo the_field('categoria'); ?></h2>
              <p><?php echo the_content(); ?></p>
               <?php
                $programas = get_field('programas_usados');
                if( $programas ): ?>
                <ul>
                  <?php foreach( $programas as $programa ): ?>
                    <li><?php echo $programa; ?></li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
              <!-- <a href="<?php echo get_the_permalink(); ?>" class="btn btn--primary">+ infos</a> -->
            </div>
          </div>
          <?php endwhile; ?>
     
        </div><!-- port -->
        <div class="carousel--nav">
          <!-- nav -->
          <a href="#" id="move--left" class="btn btn--secondary arrow">
            <</a> <a href="#" id="move--right" class="btn btn--secondary arrow">>
          </a>
        </div><!-- nav -->
      </div>
    </div>
  </div>
</section>
<!-- portfolio section end -->

<?php endwhile; else : endif; ?>

<?php get_footer(); ?>
