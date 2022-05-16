<?php
/**
 * Шаблон архива каталога (donars
 * .php)
 * @package WordPress
 * @subpackage emitex
 */
get_header();

?>

<?php

$login_id = 'pk_164c5cfabd83a1fface7dc6481e75';
$login_api = 'a4a124c5bf7f98e689d6dd4c9ca4f06a';
//$data = '';
$data = array(
    'Date' => '2022-04-28',
    'TimeZone' => 'MSK',
);

//$ch = curl_init('api.cloudpayments.ru'); // боевая
//$ch = curl_init('https://api.cloudpayments.ru/test');
$ch = curl_init('https://api.cloudpayments.ru/payments/list');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_USERPWD, 'pk_164c5cfabd83a1fface7dc6481e75' . ":" . 'a4a124c5bf7f98e689d6dd4c9ca4f06a');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
$res = curl_exec($ch);
curl_close($ch);



//    echo '<pre>';
//    print_r($res);
//    print_r(json_decode($res));
//    var_dump($res);
//    echo '</pre>';


//$resAmount = $res['Amount'];
//echo '<br>' . $resAmount ;
//wp_die();
?>
<?php
//$my_postarr = array(
//    'post_type'    => 'donation',
//    'post_title'    => 'Федя',
//    'post_content'  => '', // контент
//    'post_status'   => 'publish' // опубликованный пост
//);
//
//// добавляем пост и получаем его ID
//$my_post_id = wp_insert_post( $my_postarr );
//
//$field_key = 'field_626aba8a891d2';
//$value = '11';
//update_field($field_key, $value, $my_post_id);

// присваиваем рубрику к посту (ссылка на документацию wp_set_object_terms() дана чуть выше)
//wp_set_object_terms( $my_post_id, 5, 'category' );
// присваиваем метки
//wp_set_object_terms( $my_post_id, array(7, 8), 'post_tag' );
?>


    <div class="children__block">
        <h4 class="children__block-title">СЕРДЕЧНО БЛАГОДАРИМ!</h4>
        <table class="table" cellpadding="0" cellspacing="0">
            <tbody class="table__body">
            <tr>
                <td class="table__body-name">Имя</td>
                <td>100р</td>
                <td>дата</td>
                <td>время</td>
            </tr>
            <?php
            $args = array(
                'post_type' => 'donation',
//                'order' => 'ASC',
                'order' => 'DESC',
                'posts_per_page' => 9
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    $donar_name = get_field('donar_name');
                    $donar_last_name = get_field('donar_last_name');
                    $donar_price = get_field('donar_price');
                    $donar_data = get_field('donar_data');
                    $donar_time = get_field('donar_time');
                    ?>
                    <tr>
                        <td class="table__body-name"><?php the_title(); ?></td>
                        <td><?=$donar_price;?></td>
                        <td><?php the_date(''); ?></td>
                        <td><?php the_time(''); ?></td>
                    </tr>
                <?php }
                wp_reset_postdata();
            } ?>
            </tbody>
        </table>
    </div>

<?php
//$data = '{"name":"ivan","lastName":"ivanov","phone":""}';

//$outcls=json_decode($data);
//$outmsv=json_decode($data, true);
//print_r($outmsv);
//echo '<br>++';
//echo $outcls->{'name'};
//echo '<br>-';
//echo $outmsv['x1'];

//print_r(json_encode($data=>name));
//print_r(json_decode($data=>name));
//echo '<br>';


?>


    <section class="single-news" style=" background-color: #ccc; ">
        <div class="container">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
	                <?php if (has_post_thumbnail()) { the_post_thumbnail('', 'large'); } ?>
                    <?php the_content(); ?>


                </article>
            <?php endwhile; ?>


            <form>
                <div class="sample">


                    <div class="form-group">

                        <label for="name-sample-4">Ваше имя:</label>
                        <div>
                            <?php // <input id="name-sample-4" required="" placeholder="" class="form-control" type="text" value="Walter" size="30"> ?>
                            <input id="name-sample-4" required="" placeholder="" class="form-control" type="text" value="ivan" size="30">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastName-sample-4">Фамилия:</label>
                        <div>
                            <input id="lastName-sample-4" required="" placeholder="" class="form-control" type="text"
                                   value="ivanov" size="30">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone-sample-4">Номер телефона:</label>
                        <div>
                            <input id="phone-sample-4" required="" placeholder="" class="form-control" type="text"
                                   size="30">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email-sample-4">E-mail адрес:</label>
                        <div>
                            <input id="email-sample-4" required="" placeholder="" class="form-control" type="text"
                                   value="w.white@cloudpayments.ru" size="30">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="amount-sample-4">Сумма:</label>
                        <div>
                            <input id="amount-sample-4" required="" placeholder="" class="form-control" type="text"
                                   value="10" size="30">
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="recurrent-sample-4">
                            <input id="recurrent-sample-4" type="checkbox">
                            Помогать ежемесячно
                        </label>
                        <p class="help-block">При включении, пожертвования будут производиться автоматически с вашей
                            карты каждый месяц.</p>
                    </div>
                    <br>

                    <button id="checkout-sample-4" value="Пожертвовать" class="button" type="button">Пожертвовать
                    </button>

                </div>
            </form>
        </div>
    </section>

<?php get_footer(); ?>