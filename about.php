<?php
//Template Name: About-zion
get_header();
$img_url = get_template_directory_uri() . '/dist/imgs';
$photos = get_field('fotos_clientes');
$facials = get_field('lista_servico_1');
$brows = get_field('lista_servico_2');
$removal = get_field('lista_servico_3');
$lash = get_field('lista_servico_4');
$courses = get_field('lista_servico_5');
$makeups = get_field('lista_servico_6');

?>
<section id="sess1__about">
  <div class="about__banner_wrapper">
    <img src="<?= the_field('banner') ?>" alt="" class="about__banner_item">
  </div>
</section>
<section id="sess2__about">
    <div class="container mx-auto px-4">
        <div class="sess2__about-wrapper">
          <div class="sess2__about-img" data-anima="scroll">
            <img src="<?= the_field('foto_bio')  ?>" alt="foto da Nanny, com um fundo circular lilás">
          </div>
          <div class="sess2__about-content" data-anima="scroll">
            <h2><?= the_field('titulo_1')  ?></h2>
            <p><?= the_field('texto_1')  ?></p>
            <a class="cta__btn" href="<?= the_field('cta_link_1')  ?>">
              <?= the_field('cta_1')  ?>
            </a>
          </div>
        </div>  
    </div>
</section>
<section id="sess3__about">
  <div class="sess3__content-wrapper">
    <h2 class="sess3__about-title" data-anima="scroll"><?= the_field('titulo_2')  ?></h2>
    <div id="sess3__photos" class="splide py-12">
      <div class="splide__track ">
        <ul class="splide__list ">
          <?php foreach($photos as $photo) { ?>
            <li class="splide__slide photo__wrapper">
              <img src="<?= $photo['foto'] ?>" alt="fotos da nany com clientes.">
              <div class="heart__wrapper">
                <img src="<?= $img_url . '/heart.svg' ?>" alt="icone de coração">
              </div>
            </li>
            <?php } ?>
        </ul>
      </div>
    </div>
    <div class="sess3__about-text">
      <p><?= the_field('texto_2')?></p>
    </div> 
  </div>
</section>
<section id="sess4__about">
  <div class="accordion__wrapper" data-anima="scroll">
    <h2 class="services__titles"><?= the_field('titulo_3')?></h2>
    <div id="accordion-open-1" data-accordion="open" class="container mx-auto px-8">
    <h2 id="accordion-open-heading-1">
        <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
            <span><?= the_field('sub_titulo_1')?></span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
        <div class="accordion-body">
            <?php foreach($facials as $service) {?>
                <div class="flex items-center">
                    <img class="mb-2 mr-2" src="<?= $img_url .'/check.svg' ?>" alt="">
                    <p class="mb-2"><?= $service['servico']?></p>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<div id="accordion-open-2" data-accordion="open" class="container mx-auto px-8">
    <h2 id="accordion-open-heading-2">
        <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
            <span><?= the_field('sub_titulo_2')?></span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
        <div class="accordion-body">
            <?php foreach($brows as $service) {?>
                <div class="flex items-center">
                    <img class="mb-2 mr-2" src="<?= $img_url .'/check.svg' ?>" alt="">
                    <p class="mb-2"><?= $service['servico']?></p>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<div id="accordion-open-3" data-accordion="open" class="container mx-auto px-8">
    <h2 id="accordion-open-heading-3">
        <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
            <span><?= the_field('sub_titulo_3')?></span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
        <div class="accordion-body">
            <?php foreach($removal as $service) {?>
                <div class="flex items-center">
                    <img class="mb-2 mr-2" src="<?= $img_url .'/check.svg' ?>" alt="">
                    <p class="mb-2"><?= $service['servico']?></p>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<div id="accordion-open-4" data-accordion="open" class="container mx-auto px-8">
    <h2 id="accordion-open-heading-4">
        <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
            <span><?= the_field('sub_titulo_4')?></span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
        <div class="accordion-body">
            <?php foreach($lash as $service) {?>
                <div class="flex items-center">
                    <img class="mb-2 mr-2" src="<?= $img_url .'/check.svg' ?>" alt="">
                    <p class="mb-2"><?= $service['servico']?></p>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<div id="accordion-open-5" data-accordion="open" class="container mx-auto px-8">
    <h2 id="accordion-open-heading-5">
        <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
            <span><?= the_field('sub_titulo_5')?></span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-5" class="hidden" aria-labelledby="accordion-open-heading-5">
        <div class="accordion-body">
            <?php foreach($courses as $service) {?>
                <div class="flex items-center">
                    <img class="mb-2 mr-2" src="<?= $img_url .'/check.svg' ?>" alt="">
                    <p class="mb-2"><?= $service['servico']?></p>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<div id="accordion-open-6" data-accordion="open" class="container mx-auto px-8">
    <h2 id="accordion-open-heading-6">
        <button type="button" class="accordion-title" data-accordion-target="#accordion-open-body-6" aria-expanded="false" aria-controls="accordion-open-body-6">
            <span><?= the_field('sub_titulo_6')?></span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
    </h2>
    <div id="accordion-open-body-6" class="hidden" aria-labelledby="accordion-open-heading-6">
        <div class="accordion-body">
            <?php foreach($makeups as $service) {?>
                <div class="flex items-center">
                    <img class="mb-2 mr-2" src="<?= $img_url .'/check.svg' ?>" alt="">
                    <p class="mb-2"><?= $service['servico']?></p>
                </div>
            <?php }?>
        </div>
    </div>
</div>
  </div>
</section>
<section id="sess5__about">
<div class="about__mosaic-container" data-anima="scroll">
    <div class="mosaic__grid">
        <div class="mosaic__img-1">
            <img  src="<?= the_field('imagem_1')?>" alt="">
        </div>
        <div class="mosaic__img-4">
            <img  src="<?= the_field('imagem_4')?>" alt="">
        </div>
        <div class="mosaic__img-6 md:hidden">
            <img src="<?= the_field('imagem_6')?>" alt="">
        </div>
    </div>
    <div class="mosaic__grid md:col-span-2">
        <div class="mosaic__img-2">
            <img  src="<?= the_field('imagem_3')?>" alt="">
        </div>
        <div class="mosaic__img-5">
            <img src="<?= the_field('imagem_5')?>" alt="">
        </div>
        <div class="mosaic__img-3 md:hidden">
            <img src="<?= the_field('imagem_2')?>" alt="">
        </div>
    </div>
    <div class="mosaic__grid hidden md:grid">
        <div class="mosaic__img-3">
            <img src="<?= the_field('imagem_2')?>" alt="">
        </div>
        <div class="mosaic__img-6">
            <img src="<?= the_field('imagem_6')?>" alt="">
        </div>
    </div>
</div>
</section>
<section id="sess6__about">
    <h2 class="sess6__about-title"><?= the_field('titulo_4')?></h2>
    <a href="<?= the_field('cta_link_2')?>" class="cta__btn"><?= the_field('cta_2')?></a>
</section>



<?php get_footer(); ?>