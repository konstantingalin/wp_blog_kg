<?php get_header(); ?>

<div class="section _main" id="_main">
  <div class="section__content">
    <div class="main_box">
      <div class="main_box__posts">
        <?php if(have_posts()){
          while(have_posts()) {
            the_post(); ?>

            <article class="main_box__post">
              <div class="main_box__post__box_img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail( 'post_thumb' ); ?>
                </a>
                <p class="main_box__post__data">
                  <?php the_time('j F Y в H:i') ?>
                </p>
              </div>
              <ul class="main_box__post__tags">
                <?php
										$posttags = get_the_tags();
										if ( $posttags ) {
											foreach( $posttags as $tag ) {
												echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
											}
										}
									?>
              </ul>
              <h2 class="main_box__post__title">
                <?php the_title(); ?>
              </h2>
              <div class="main_box__post__text">
                <?php the_excerpt(); ?>
              </div>
              <div class="main_box__post__bottom_box">
                <div class="main_box__post__button">
                  <a href="<?php the_permalink(); ?>" class="button">Читать далее</a>
                </div>
                <div class="main_box__post__view">
                  <p><?php if(function_exists('the_views')) { the_views(); } ?></p>
                </div>
                <div class="main_box__post__comments">
                  <p><?=get_comments_number()?></p>
                </div>
              </div>
            </article>  

          <?php }
        } ?>
        <div class="posts_navigation">
          <?php the_posts_pagination() ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>