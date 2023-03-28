<?php
/**
 * Главная страница (tpl-home.php)
 * @package WordPress
 * @subpackage balanse
 * Template Name: Главная
 */
get_header();

?>
    <style>
        p {
            line-height: 1.4;
            margin-bottom: 10px;
        }
    </style>
    <section class="tarifs">
        <div class="container">
            <div class="tarifs__wrapperBlock" >
                <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>">
                        <h1 class="pages-additional title_color"><?php the_title(); ?></h1>
<!--                        --><?php //if (has_post_thumbnail()) { the_post_thumbnail('', 'large'); } ?>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            </div>
<!--            --><?php //previous_post_link('%link', '<- Предыдущая новость: %title', TRUE); ?>
<!--            --><?php //next_post_link('%link', 'Следующая новость: %title ->', TRUE); ?>
        </div>
    </section>

<?php get_footer(); ?>