<?php
/**
 * Страница контактов (page-contacts.php)
 * @package WordPress
 * @subpackage balanse
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

<section class="" style="margin-top: 120px">
    <div class="">
        <div class="map" >
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae02c86f800c09c04ce510101bdfc6246508b03b3dc0b39e70cf18c5b8e1bc8e4&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
    </div>
</section>
<?php get_footer(); // подключаем footer.php ?>

