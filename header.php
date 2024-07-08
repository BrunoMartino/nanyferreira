<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"> -->
  <title><?php bloginfo('name');?> <?php wp_title('|'); ?></title>
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header>
<?php 
    $img_url = get_template_directory_uri() . '/dist/imgs';
    ?>


<nav class="header__nav ">
  <div class="nav__container ">
    <div class="nav__wrapper">
        <button class="menu__btn" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
          <img src="<?= $img_url . '/menu.svg'?>" class="h-8 me-3" alt="Menu" />
        </button>
        <a href="#" class="logo">
          <img src="<?= $img_url . '/logo2.png'?>" class="h-8 me-3" alt="Nany Ferreira Logo" />
        </a>
        <a href="#" class="insta">
          <img src="<?= $img_url . '/insta.svg'?>" class="h-8 me-3" alt="Nany Ferreira Logo" />
        </a>
    </div>
  </div>
</nav>

<!-- drawer component -->
<div id="drawer-navigation" class="fixed top-12 left-0 z-40 w-64 h-screen py-6 overflow-y-auto transition-transform -translate-x-full bg-gray-100" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent mt-2 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 my-8 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
  <div class="py-8 overflow-y-auto">
           <?php
        wp_nav_menu([
        'menu'=> 'sidebar__menu',
        'container' => 'ul',
        'container_class' => 'sidebar__nav',
        ]);
      ?>
   </div>
</div>
      


</header>
