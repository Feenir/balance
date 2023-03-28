<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage balanse
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen"/>-->
	<!--    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>-->
	<!--    <link rel="stylesheet" href="css/fancybox.css">-->
	<!--    <link rel="stylesheet" href="css/style.css">-->
	<?php if (current_user_can('manage_options')) : endif; ?>
	
	<!-- Marquiz script start -->
	<script> (function (w, d, s, o) {
			var j = d.createElement(s);
			j.async = true;
			j.src = '//script.marquiz.ru/v2.js';
			j.onload = function () {
				if (document.readyState !== 'loading') Marquiz.init(o); else document.addEventListener("DOMContentLoaded", function () {
					Marquiz.init(o);
				});
			};
			d.head.insertBefore(j, d.head.firstElementChild);
		})(window, document, 'script', {
			host: '//quiz.marquiz.ru',
			region: 'eu',
			id: '6256979d61cca8003f3237ac',
			autoOpen: false,
			autoOpenFreq: 'once',
			openOnExit: false,
			disableOnMobile: false
		}); </script> <!-- Marquiz script end -->




    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(87649152, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/87649152" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>


	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
	
	<?php wp_head(); ?>
</head>
<body>

<div class="leftSidebar">
	<div class="leftSidebar__burger js-full_burger-open">
		<img src="<?php echo get_template_directory_uri(); ?>/img/burger-balance.png" alt="меню">
	</div>
	<ul class="leftSidebar__contacts">
		<li class="leftSidebar__items"><a href="<?= home_url('/contacts'); ?>">контакты</a></li>
		<li class="leftSidebar__items"><a href="<?= home_url('/price'); ?>">Прайс</a></li>
		<li class="leftSidebar__items"><a href="<?= home_url('/tariffs'); ?>">тарифы</a></li>
		<li class="leftSidebar__items"><a href="<?= home_url('/'); ?>">главная</a></li>
	</ul>
	
	<ul class="leftSidebar__social">
		<li class="leftSidebar__socialLink">
			<a href="tg://resolve?domain=BalanseExpert">
				<svg class="leftSidebar__socialsSvg">
					<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/set.svg#telegram"></use>
				</svg>
			</a></li>
		<li class="leftSidebar__socialLink"><a href="whatsapp://send?phone=+74957900442">
				<svg class="leftSidebar__socialsSvg">
					<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/set.svg#whatsapp"></use>
				</svg>
			</a></li>
		<li class="leftSidebar__socialLink"><a href="https://www.youtube.com/channel/UCb8GdnqGjdugs1xlUFfx8tQ/videos">
				<svg class="leftSidebar__socialsSvg"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/set.svg#youtube"></use>
				</svg></a></li>
		<li class="leftSidebar__socialLink"><a href="#">
				<svg class="leftSidebar__socialsSvg">
					<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/set.svg#instagram"></use>
				</svg>
			</a></li>
	</ul>

</div>


<header class="header <?php if( !is_front_page() ){ echo "header_black";} ?>" id="header">
	<div class="container header__wrapper">
		<a class="header__img" href="<?= home_url('/'); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/balance.png" alt="Лого">
			<span>Качественный аутсорсинг от команды аттестованных профессиональных бухгалтеров ИПБ России</span>
		</a>
		<ul class="header__list">
			<li class="header__items header__items_map"><a target="_blank" href="https://yandex.ru/maps/?um=constructor%3Ae02c86f800c09c04ce510101bdfc6246508b03b3dc0b39e70cf18c5b8e1bc8e4&source=constructorLink">г.Москва, БЦ Сириус парк 
					<span>Посмотреть на карте</span></a>
			</li>
			<li class="header__items header__items--copy"><a class="js-mail_copy" href="mailto:accountant@balanse-expert.ru">accountant@balanse-expert.ru</a>
				<span class="header__copy js-headerMailcopy">Скопировать почту</span></li>
		</ul>
		<div class="header__callback">
			<a href="tel:+74957900442 ">+7 (495) 790-04-42 </a>
			<button type="button" class="button header__button js-popup_open js-btn_call">Обратный звонок</button>
		</div>
		<div class="header__burgerWrapper js-full_burger-open">
			<div class="header__burgerMobile"></div>
		</div>
	</div>
</header>


<style>
    .pages-additional {
        margin-top: 80px;
    }
</style>