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
	<title>balanse-expert.ru</title>
	
	
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
	
	
	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
	
	<?php wp_head(); ?>
</head>
<body>

<div class="leftSidebar">
	<div class="leftSidebar__burger js-full_burger-open">
		<img src="<?php echo get_template_directory_uri(); ?>/img/burger-balance.png" alt="бургер">
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
				<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path
							d="m12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12c0-6.627-5.373-12-12-12zm5.894 8.221-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
				</svg>
			</a></li>
		<li class="leftSidebar__socialLink"><a href="whatsapp://send?phone=+74957900442">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
				     x="0px" y="0px"
				     width="24px" height="24px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;"
				     xml:space="preserve">
				<g>
					<path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522
						c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982
						c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537
						c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938
						c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537
						c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333
						c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882
						c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977
						c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344
						c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223
						C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"/>
				</g>
</svg>
			
			</a></li>
		<li class="leftSidebar__socialLink"><a href="https://www.youtube.com/channel/UCb8GdnqGjdugs1xlUFfx8tQ/videos">
				<svg width="24px" height="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
				     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				     viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
<g id="XMLID_822_">
	<path id="XMLID_823_" d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
		C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
		C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
		c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
		c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
		C204.394,157.263,202.325,160.684,199.021,162.41z"/>
</g>
</svg>
			
			</a></li>
		<li class="leftSidebar__socialLink"><a href="#"></a></li>
	</ul>

</div>


<header class="header <?php if( !is_front_page() ){ echo "header_black";} ?>" id="header">
	<div class="container header__wrapper">
		<a class="header__img" href="<?= home_url('/'); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/balance.png" alt="Лого">
			<span>Качественный аутсорсинг от команды аттестованных профессиональных бухгалтеров ИПБ России</span>
		</a>
		<ul class="header__list">
			<li class="header__items header__items_map"><a target="_blank" href="https://yandex.ru/maps/?um=constructor%3Ae02c86f800c09c04ce510101bdfc6246508b03b3dc0b39e70cf18c5b8e1bc8e4&source=constructorLink">г.Москва, БЦ Сириус парк Москва
					<span>Посмотреть на карте</span></a>
			</li>
			<li class="header__items"><a href="mailto:accountant@balanse-expert.ru">accountant@balanse-expert.ru</a></li>
		</ul>
		<div class="header__callback">
			<a href="tel:+74957900442 ">+7 (495) 790-04-42 </a>
			<div class="header__burgerWrapper js-full_burger-open">
				<div class="header__burgerMobile"></div>
			</div>
			<button type="button" class="button header__button js-popup_open js-btn_call">Обратный звонок</button>
		</div>
	</div>
</header>





