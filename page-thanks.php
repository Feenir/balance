<?php
/**
 * Главная страница (page-thanks.php)
 * @package WordPress
 * @subpackage balanse
 * Template Name: Страница спасибо
 */
get_header();

?>


    <section class="paper">
        <div class="container">
            <div class="paper__wrapperBlock" >
            <?php // get_template_part( 'template-parts/breadcrumb' ); // хлебные кошки?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
                    <h1 style=" font-size: 30px; padding-bottom: 30px;"><?php the_title(); // заголовок поста ?></h1>
                    <?php the_content(); // контент ?>
                </article>
            <?php endwhile; // конец цикла ?>
        </div>
        </div>
    </section>

<?php get_footer(); // подключаем footer.php ?>