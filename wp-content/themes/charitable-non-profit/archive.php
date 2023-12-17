<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Charitable Non Profit
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
  <?php if ( get_theme_mod('charitable_non_profit_header_page_title' , true)) : ?>
      <?php the_archive_title('<h1 class="mb-0">', '</h1>') ?> <?php the_archive_description(); ?>
  <?php endif; ?>
  <?php if ( get_theme_mod('charitable_non_profit_header_breadcrumb' , true)) : ?>
    <div class="crumb-box mt-3">
      <?php charitable_non_profit_the_breadcrumb(); ?>
    </div>
  <?php endif; ?>
  </div>
</div>

<div id="content" class="mt-5">
  <div class="container">
    <?php $charitable_non_profit_post_layout = get_theme_mod( 'charitable_non_profit_post_layout','Right Sidebar');
    if($charitable_non_profit_post_layout == 'Right Sidebar'): ?>
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <div class="row">
            <?php
              if ( have_posts() ) :

                while ( have_posts() ) :

                  the_post();
                  get_template_part( 'template-parts/content' );

                endwhile;

              else:

                esc_html_e( 'Sorry, no post found on this archive.', 'charitable-non-profit' );

              endif;

              get_template_part( 'template-parts/pagination' );
            ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    <?php elseif ($charitable_non_profit_post_layout == 'Left Sidebar') : ?>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-8 col-md-8">
          <div class="row">
            <?php
              if ( have_posts() ) :

                while ( have_posts() ) :

                  the_post();
                  get_template_part( 'template-parts/content' );

                endwhile;

              else:

                esc_html_e( 'Sorry, no post found on this archive.', 'charitable-non-profit' );

              endif;

              get_template_part( 'template-parts/pagination' );
            ?>
          </div>
        </div>
      </div>
    <?php elseif ($charitable_non_profit_post_layout == 'One Column') : ?>
      <div class="row">
        <?php
          if ( have_posts() ) :

            while ( have_posts() ) :

              the_post();
              get_template_part( 'template-parts/content' );

            endwhile;

          else:

            esc_html_e( 'Sorry, no post found on this archive.', 'charitable-non-profit' );

          endif;

          get_template_part( 'template-parts/pagination' );
        ?>
      </div>
    <?php elseif ($charitable_non_profit_post_layout == 'Three Columns') : ?>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <?php
              if ( have_posts() ) :

                while ( have_posts() ) :

                  the_post();
                  get_template_part( 'template-parts/content' );

                endwhile;

              else:

                esc_html_e( 'Sorry, no post found on this archive.', 'charitable-non-profit' );

              endif;

              get_template_part( 'template-parts/pagination' );
            ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="sidebar-area">
            <?php
              dynamic_sidebar('sidebar-2');
            ?>
          </div>
        </div>
      </div>
    <?php elseif ($charitable_non_profit_post_layout == 'Four Columns') : ?>
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="row">
            <?php
              if ( have_posts() ) :

                while ( have_posts() ) :

                  the_post();
                  get_template_part( 'template-parts/content' );

                endwhile;

              else:

                esc_html_e( 'Sorry, no post found on this archive.', 'charitable-non-profit' );

              endif;

              get_template_part( 'template-parts/pagination' );
            ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="sidebar-area">
            <?php
              dynamic_sidebar('sidebar-2');
            ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="sidebar-area sidebar-three">
            <?php
              dynamic_sidebar('sidebar-3');
            ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>