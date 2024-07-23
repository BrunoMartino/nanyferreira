<?php 
    $img_url = get_template_directory_uri() . '/dist/imgs';
    ?>
<section id="sess__map">
<div class="map__wrapper">
  <div class="address__info">
    <h4>
      Estamos em Perdizes / SP,
    </h4>
    <h4>a 10 min do Allianz Park.</h4>
    <p>Rua Aimbaré, 1398 - Perdizes - São Paulo - SP | CEP:01258-020</p>
  </div>
  <div class="map__content">
    <a class="map__link" href="https://maps.app.goo.gl/o4hQP6THVpP3SSSX7">
      <img src="<?= $img_url . '/map.svg' ?>" alt="">
      <p>clique aqui para ver o mapa completo</p>
    </a>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7477229338824!2d-46.684748!3d-23.5415744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57eeaa2ccb5b%3A0xe212fdfb1bd5b2b0!2sRua%20Aimber%C3%AA%2C%201398%20-%20Perdizes%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001258-020!5e0!3m2!1spt-BR!2sbr!4v1719772025634!5m2!1spt-BR!2sbr" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
</section>
<footer>
<div class="footer__wrapper">
  <img src="<?= $img_url . '/logo-footer.png' ?>" alt="logo" class="footer__logo">
  <?php
        wp_nav_menu([
        'menu'=> 'menu__footer',
        'container' => 'ul',
        'container_class' => 'footer__menu',
        ]);
  ?>
  <div class="contact__wrapper">
    <div class="contact">
      <h5>Contato</h5>
      <a href="tel:+55113110-8092">(011) 3110-8092</a>
      <a href="mailto:contato@nanyferreira.com.br">contato@nanyferreira.com.br</a>
    </div>
    <div class="address__footer">
      <h5>Endereço</h5>
      <p>rua Aimbaré, 1398 - Perdizes</p>
      <p>são paulo - SP | <span>cep:01258-020</span></p>
    </div>
  </div>
  <div class="news__form">
    <div class="news__title">
      <img src="<?= $img_url . '/mail.svg' ?>" alt="icone de mensagem">
      <h5>fique por dentro do que acontece por aqui</h5>
    </div>
    <p>Assine nossa newsletter e</p>
    <p>receba novidades direto em seu e-mail!</p>
    <?php echo do_shortcode('[contact-form-7 id="192fbf4" title="Newsletter"]'); ?>
  </div>
</div>
<div class="footer__end">
  <a href=""><img src="<?= $img_url . '/insta.svg' ?>" alt="instagram"></a>
</div>
</footer>
<?php wp_footer();?>
<script src="<?= get_stylesheet_directory_uri(); ?>/dist/js/main.js"></script>
</body>
</html>