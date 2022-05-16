<?php
/**
 * Главная страница (page.php)
 * @package WordPress
 * @subpackage balanse
 * Template Name: обычная страница
 */
get_header();

?>


    <section class="tarifs">
        <div class="container">
            <div class="tarifs__wrapperBlock" >
            <?php // get_template_part( 'template-parts/breadcrumb' ); // хлебные кошки?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
                    <h1 class="pages-additional title_color"><?php the_title(); // заголовок поста ?></h1>
                    <?php the_content(); // контент ?>
                </article>
            <?php endwhile; // конец цикла ?>
        </div>
        </div>
    </section>

<?php get_footer(); // подключаем footer.php ?>