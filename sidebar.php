<div class="main_box__sidebar">
  <div class="author_box">
    <img src="<?= get_template_directory_uri() ?>/assets/public/author_img.png" alt="Фото автора блога">
    <p class="author_box__text1">
      Приветствую!
    </p>
    <p class="author_box__text2">
      Я – Галин Константин, веб-разработчик с опытом более 3 лет. Мой блог посвящен PHP, JavaScript и Dart – языкам программирования, на которых я активно работаю и изучаю новые технологии. Здесь ты найдешь полезные статьи, уроки и советы, которые помогут тебе улучшить свои навыки в веб-разработке. 
    </p>
  </div>
  <div class="pupular_pubs_box">
    <p class="pupular_pubs_box__text1">
      Популярные публикации
    </p>
    <div class="pupular_pubs_box__items">
      <?php if (function_exists ('get_most_viewed')): ?>
							<?php get_most_viewed ('post', 5); ?>
							<?php endif; ?>
      <div class="pupular_pubs_box__watch_all">
        <a href="<?php echo home_url() . '/popular'; ?>">
          Показать все<?php $count_posts = wp_count_posts(); echo ' ' . $published_posts = $count_posts->publish; ?>
        </a>
      </div>
    </div>
  </div>
  <div class="category_box">
    <p class="category_box__text1">
      Темы
    </p>
    <ul class='category_box__list'>
      <?php
        $cats = wp_list_categories('echo=0&show_count=1&title_li=');
        $cats = str_replace( ['(',')'], '', $cats );
        echo $cats;
      ?>
    </ul>
  </div>
  <div class="archives_box">
    <p class="archives_box__text1">
      Архив публикаций
    </p>
    <ul class='archives_box__list'>
      <?php 
        $arch = wp_get_archives('echo=0&show_post_count=1&type=monthly&limit=12');;
        $arch = str_replace( ['(',')'], '', $arch );
        echo $arch; 
        ?>
    </ul>
  </div>
  <div class="box_tags">
    <p class="box_tags__text1">
      Популярные метки
    </p>
    <?php
      $tags = get_tags(array('number' => 20));
      $html = '<ul class="box_tags__list">';

      foreach ( $tags as $tag ) {
        $tag_link = get_tag_link( $tag->term_id );

        $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a></li>";
      }

      $html .= '</ul>';

      echo $html;
    ?>
  </div>
</div>