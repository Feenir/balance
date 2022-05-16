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
	            
	            <h3 class="paper__title title_color">Заявка отправлена!</h3>
	            <p class="paper__text text_color">Менеджер с Вами свяжется в ближайшее время!</p>
	            <ul class="paper__list">
		            <li class="paper__items"></li>
		            <li class="paper__items"></li>
		            <li class="paper__items"></li>
	            </ul>
            <?php // get_template_part( 'template-parts/breadcrumb' ); // хлебные кошки?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
                    <?php the_content(); // контент ?>
                </article>
            <?php endwhile; // конец цикла ?>
        </div>
        </div>
    </section>

<?php get_footer(); // подключаем footer.php ?>