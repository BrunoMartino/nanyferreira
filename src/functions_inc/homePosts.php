<?php

function format_posts ($posts, $img_size = 'large') {
  $posts_final = [];
  foreach($posts as $post) {
    $posts_final[] = [
      'name' => $post['blogpost_title'],
      'link' => $post['blogpost_link'],
      'resume' => $post['blogpost_resume'],
      'img' => $post['blogpost_img'],
      'cta' => $post['blogpost_cta']
    ];
  }
  return $posts_final;
}
?>
<?php 
function nany_post_list($posts) {
?>
  <div id="post__wrapper" class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        <?php foreach($posts as $post) { ?>
          <li class="splide__slide post__item">
            <a href="<?= $post['link'] ?>">
              <div class="post_img">
                <img src="<?= $post['img'] ?>" alt="<?= $post['name'] ?>">
              </div>
              <div class="post_info">
              <h4><?= $post['name'] ?></h4>
              <p> <?= $post['resume'] ?></p>
              </div>
              <p class="post_cta"><?= $post['cta'] ?></p>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php } ?>
