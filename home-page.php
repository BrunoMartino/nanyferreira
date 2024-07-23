<?php
//Template Name: Home-zion
get_header();
$img_url = get_template_directory_uri() . '/dist/imgs';
$banners = get_field('sess1_slides');
$data = [];
$data['posts'] = format_posts(get_field("blogposts_home"));
?>
<main>
<section id="sess1">
  <div id="banner__slide" class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        <?php foreach($banners as $slide) { ?>
        <li class="splide__slide banner__wrapper">
          <img src="<?= $slide['slide'] ?>" alt="Banners com clientes e com a Nanny sorrindo">
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>
<section id="sess2">
   <div class="mosaic__container" data-anima="scroll">
        <div class="mosaic__copy">
          <p class="pl-8 pt-8"><?= the_field('mosaico_copy_1')?></p>
        </div>
        
        <div class="about-box">
          <a href="<?= the_field('link_1') ?>">
          <img src="<?= the_field('imagem_1') ?>" alt="<?= the_field('cta_1') ?>">
          <p><?= the_field('cta_1') ?></p>
          </a>
        </div>
        <div class="eyelash-box">
        <a href="<?= the_field('link_3') ?>">
          <img src="<?= the_field('imagem_3') ?>" alt="<?= the_field('cta_3') ?>">
          <p><?= the_field('cta_3') ?></p>
          </a>
        </div>
      <div class="facial-box">
      <a href="<?= the_field('link_2') ?>">
          <img src="<?= the_field('imagem_2') ?>" alt="<?= the_field('cta_2') ?>">
          <p><?= the_field('cta_2') ?></p>
          </a>
        </div>
        <div class="mosaic__copy">
          <p class="pl-8 pt-8"><?= the_field('mosaico_copy_2')?></p>
        </div>
        <div class="eyebrow-box">
        <a href="<?= the_field('link_4') ?>">
          <img src="<?= the_field('imagem_4') ?>" alt="<?= the_field('cta_4') ?>">
          <p><?= the_field('cta_4') ?></p>
          </a>
        </div>
   </div> 
</section>
<section id="sess3" class="pt-5 pb-10">
    <div class="container mx-auto px-4">
        <div class="about__wrapper">
          <div class="about__img" data-anima="scroll">
            <img src="<?= the_field('sess3_img')  ?>" alt="foto da Nanny, com um fundo circular lilás">
          </div>
          <div class="about__content" data-anima="scroll">
            <h2><?= the_field('sess_2_title')  ?></h2>
            <p><?= the_field('sess_2_text')  ?></p>
            <a class="cta__btn" href="<?= the_field('sess_2_cta_link')  ?>">
              <?= the_field('sess_2_cta')  ?>
            </a>
          </div>
        </div>  
    </div>
</section>
<section id="sess4">
    <div id="sess4__wrapper">
      <img src="<?= the_field('sess_3_bg')  ?>" alt="<?= the_field('sess_3_title')  ?>">
      <div class="sess4-parallax">
      <h3><?= the_field('sess_3_title')  ?></h3>
      </div>
    </div>
</section>
<section id="sess5">
  <?php nany_post_list($data['posts'])  ?>
</section>
<section id="sess6">
    <div id="sess6__wrapper">
      <img src="<?= the_field('sess_4_bg')  ?>" alt="<?= the_field('sess_4_title')  ?>">
      <div class="sess6-parallax">
      <h3><?= the_field('sess_4_title')  ?></h3>
      </div>
    </div>
</section>
<section id="sess7">
  <h2 class="sess7__title"><?= the_field('sess_5_title')  ?></h2>
  <div class="social__wrapper" data-anima="scroll">
    <div class="social__container">
    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </div>
     <a href="<?= the_field('sess_5_cta_link')  ?>" class="cta__btn"><?= the_field('sess_5_cta')  ?></a>     
  </div>
</section>
<section id="sess8">
  <h2 class="sess8__title"><?= the_field('sess_6_title')  ?></h2>
  <a href="<?= the_field('sess_6_cta_link')  ?>" class="cta__btn"><?= the_field('sess_6_cta')  ?></a>  
</section>
</main>
<?php get_footer(); ?>