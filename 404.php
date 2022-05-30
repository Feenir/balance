<?php
/**
 * Шаблон архива категорий (404.php)
 * @package WordPress
 * @subpackage emitex
 */
get_header();

?>

    <section class="notfound">
        <div class="container">
            <div class="notfound__wrapper">
                <h1 class="notfound__title" style=" font-size: 10em; ">404</h1>
                <div class="notfound__items">
                    <h4 style=" font-size: 48px; ">Страница
                        не найдена</h4>
                    <p>К сожалению, страница на которую вы хотели перейти, не найдена. Возможно был указан некорректнеый адрес, или страница была удалена</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>

<?php get_footer(); ?>