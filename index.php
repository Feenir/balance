<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage balanse
 */
get_header(); ?>
    <section class="price">
        <div class="container">
            <div class="price__itemMain">
            <article class="price__articles">
                <h3 class="price__articlesTitle title_color">Полезные статьи</h3>
                <p class="price__articlesText text_color">Простым языком о сложных терминах
                </p>
                <div class="price__articlesBlock">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="price__articlesItems" style=" background-image: url('<?php the_post_thumbnail_url(''); ?>'); ">
                            <h5 class="price__articlesItems-title"><?php the_title(); ?></h5>
                            <div class="price__articlesItems-dateBlock">
                                <span class="price__articlesItems-number"><?php the_date('d'); ?></span>
                                <span class="price__articlesItems-date"><?php the_date(' M '); ?></span>
                            </div>
                        </a>
                    <?php endwhile;
                    else: echo '<p>Наполнение..</p>'; endif; ?>
                </div>
            </article>
        </div>
        </div>
    </section>
<?php get_footer(); ?>