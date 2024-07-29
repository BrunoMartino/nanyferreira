<?php 
//Template Name: Courses-zion
get_header();
$img_url = get_template_directory_uri() . '/dist/imgs';
$sess1_slides = get_field('slides');
$sess2_slides = get_field('about_cursos');
$sess3_slides = get_field('what_learn');
$sess4_slides = get_field('instrutores');
$sess5_cards = get_field('cards');
$sess6_accordion = get_field('duvidas_frequentes');


?>
<main>
  <section id="sess1__courses">
    <div id="courses__slide" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php foreach($sess1_slides as $slide) { ?>
            <li class="splide__slide course__slide-wrapper">
              <div class="course__slide-content">
                <h2>
                  <img src="<?= $img_url . '/rounded-heart.svg' ?>" alt="">
                  <span>Curso de</span>
                </h2>
                <h1><?= $slide['titulo'] ?></h1>
                <div class="course__slide-content-description">
                <?= $slide['descricao'] ?>
                </div>
              </div>
              <img src="<?= $slide['imagem_desk'] ?>" alt="" class="course__slide-img-desk">
              <img src="<?= $slide['imagem_mobile'] ?>" alt="" class="course__slide-img-mobile">
            </li>
            <?php } ?>
        </ul>
      </div>
    </div>
  </section>
  <section id="sess2__courses">
    <h2 class="sess2__courses-title">O que é o Curso?</h2>
    <div id="courses__slide-about" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
        <?php foreach($sess2_slides as $slide) { ?>
            <li class="splide__slide course__about-content">
              <h3><?= $slide['titulo'] ?></h3>
              <div>
              <?= $slide['descricao'] ?>
              </div>
            </li>
            <?php } ?>
        </ul>
      </div>
    </div>
    <div class="sess2__courses-about-img">
      <img src="<?= $img_url . '/logo-courses.png' ?>" alt="logo em formato de coração na cor lilás">
    </div>
  </section>
  <section id="sess3__courses">
  <h2 class="sess3__courses-title">O que você vai aprender</h2>
    <div id="courses__slide-topics" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
        <?php foreach($sess3_slides as $slide) { ?>
            <li class="splide__slide course__topics-content">
              <h3><?= $slide['titulo'] ?></h3>
              <div class="topics__content">
              <?php foreach($slide['topicos'] as $topic) { ?>
                  <p><?= $topic['topico'] ?></p>
              <?php } ?>
              </div>
            </li>
            <?php } ?>
        </ul>
      </div>
    </div>
  </section>
  <section id="sess4__courses">
    <div id="courses__slide-teachers" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
        <?php foreach($sess4_slides as $slide) { ?>
            <li class="splide__slide course__teachers-content">
              <div class="course__teacher-description">
                <h2><?= $slide['presentation'] ?></h2>
                <h3><?= $slide['instrutor'] ?></h3>
                <div><?= $slide['descricao'] ?></div>
              </div>
              <div class="course__teacher-img">
                <h2><?= $slide['presentation'] ?></h2>
                <img src="<?= $slide['imagem'] ?>" alt="foto do instrutor do curso">
              </div>
            </li>
            <?php } ?>
        </ul>
      </div>
    </div>
  </section>
  <section id="sess5__courses">
    <div class="sess5__courses-wrapper">
    <h3>Investimento</h3>
    <?php foreach($sess5_cards as $card) { ?> 
    <div class="courses__card-wrapper">
      <div class="course__card-content">
        <h3><?= $card['titulo']?></h3>
        <div><?= $card['descricao']?></div>
      </div>
      <div class="course__card-cta">
        <p><?= $card['preco']?></p>
        <a class="cta__btn" href="<?= $card['cta_link']?>"><?= $card['cta']?></a>
      </div>
    </div>
    <?php } ?>
    </div>
  </section>
  <section id="sess6__courses">
    <div class="sess6__courses-wrapper">
      <h2><?= the_field('sess6-title')?></h2>
      <?php foreach($sess6_accordion as $index => $question) { ?>
        <div id="accordion-open-<?= $index ?>" data-accordion="open" class="container mx-auto px-8">
          <h3 id="accordion-open-heading-<?= $index ?>">
            <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="accordion-open-body-<?= $index ?>">
                <span><?= $question['pergunta']?></span>
                <svg data-accordion-icon class="w-3 h-3 <?= $index === 0 ? 'rotate-180' : '' ?> shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
            </button>
          </h3>
          <div id="accordion-open-body-<?= $index ?>" class="<?= $index === 0 ? '' : 'hidden' ?>" aria-labelledby="accordion-open-heading-<?= $index ?>">
            <div class="accordion-body">
                <p class="mb-2"><?=$question['resposta']?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
  <section id="sess7__courses">
    <a class='cta__btn' href="<?= the_field('sess7_cta_link')?>"><?= the_field('sess7_cta')?></a>
  </section>
</main>
<?php get_footer(); ?>