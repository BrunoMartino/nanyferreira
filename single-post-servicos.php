<?php
/*
PostType Page Template: Servicos
*/
get_header();
$img_url = get_template_directory_uri() . '/dist/imgs';
$post_id = get_the_ID();
$testmonials = get_field('depoimentos');
$faq = get_field('faq')
?>
<main>
  <style>
    #sess1__services {
    background: url('<?= the_field('banner_mobile') ?>');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    @media(min-width:1024px) {
      #sess1__services {
    background: url('<?= the_field('banner_desk') ?>');
    }
    }
  </style>
  <section id="sess1__services">
    <div class="services__title"><h1><?= get_the_title($post_id) ?></h1></div>
  </section>
  <section id="sess2__services">
    <h2 data-anima="scroll"><?= the_field('titulo') ?></h2>
    <div class="sess2__services-wrapper">
      <div class="sess2__services-wrapper__img" data-anima="scroll">
        <img src="<?= the_field('foto_sess_1') ?>" alt="<?= the_field('titulo') ?>">
      </div>
      <div class="sess2__services-wrapper__content" data-anima="scroll">
        <p><?= the_field('descricao_1') ?></p>
        <a class="cta__btn" href="<?= the_field('cta_link') ?>"><?= the_field('cta_1') ?></a>
      </div>
    </div>
  </section>
  <section id="sess3__services">
    <div class="sess3__services-wrapper">
      <div class="sess3__services-wrapper__content" data-anima="scroll">
        <h2><?= the_field('titulo2') ?></h2>
        <p><?= the_field('descricao_2') ?></p>
      </div>
      <div class="sess3__services-wrapper__img" data-anima="scroll">
        <img src="<?= the_field('foto_sess_2') ?>" alt="<?= the_field('titulo2') ?>">
      </div>
    </div>
  </section>
  <section id="sess4__services">
    <div class="services__mosaic-container" data-anima="scroll">
    <div class="mosaic__grid">
        <div class="mosaic__img-1">
            <img  src="<?= the_field('mosaico_1')?>" alt="">
        </div>
        <div class="mosaic__img-4">
            <img  src="<?= the_field('mosaico_4')?>" alt="">
        </div>
        <div class="mosaic__img-6 md:hidden">
            <img src="<?= the_field('mosaico_6')?>" alt="">
        </div>
    </div>
    <div class="mosaic__grid md:col-span-2">
        <div class="mosaic__img-2">
            <img  src="<?= the_field('mosaico_3')?>" alt="">
        </div>
        <div class="mosaic__img-5">
            <img src="<?= the_field('mosaico_5')?>" alt="">
        </div>
        <div class="mosaic__img-3 md:hidden">
            <img src="<?= the_field('mosaico_2')?>" alt="">
        </div>
    </div>
    <div class="mosaic__grid hidden md:grid">
        <div class="mosaic__img-3">
            <img src="<?= the_field('mosaico_2')?>" alt="">
        </div>
        <div class="mosaic__img-6">
            <img src="<?= the_field('mosaico_6')?>" alt="">
        </div>
    </div>
    </div>
  </section>
  <section id="sess5__services">
    <div class="sess5__services-wrapper">
      <h2>Depoimentos</h2>
      <div id="testmonial__slide" class="splide">
        <div class="splide__track pb-10">
          <ul class="splide__list ">
            <?php foreach($testmonials as $testmonial) { ?>
              <li class="splide__slide testimonial__wrapper">
                <div class="testimonial__content">
                  <img src="<?= $img_url . '/testimonial.svg' ?>" alt="aspas">
                  <p><?= $testmonial['depoimento'] ?></p>
                    <div class="heart__wrapper">
                      <img src="<?= $img_url . '/heart.svg' ?>" alt="icone de coração">
                    </div>
                </div>
                <h3><?= $testmonial['nome_da_pessoa'] ?></h3>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="sess6__services">
    <div class="sess6__services-wrapper">
      <h2>Faça seu Agendamento</h2>
      <div class="sess6__services-content">
        <h3><?= the_field('nome_do_servico')?></h3>
        <div><?= the_field('desc')?></div>
      </div>
      <div class="sess6__services-cta">
        <p><?= the_field('preco')?></p>
        <a class="cta__btn" href="<?= the_field('link_do_cta')?>"><?= the_field('cta')?></a>
      </div>
    </div>
  </section>
  <section id="sess7__services">
    <div class="sess7__services-wrapper" data-anima="scroll">
      <h2><?= the_field('titulo_faq')?></h2>
      <?php foreach($faq as $index => $question) { ?>
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
<section id="sess8__services">
  <a class='cta__btn' href="<?= the_field('link_cta_2')?>"><?= the_field('cta')?></a>
</section>
</main>
<?php get_footer(); ?>