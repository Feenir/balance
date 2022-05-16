<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage balanse
 */
?>

<?php
//get_template_part( 'template-modal/modal', 'all' );
//get_template_part( 'template-modal/modal', 'feedback' );
?>
<footer class="footer" id="footer">
	<div class="container footer__wrapper">
		<div class="footer__top">
			<div class="footer__topBlock footer__topBlock_form">
				<h3 class="footer__topTitle">Обратный <span>звонок</span></h3>
				<form action="#" class="popup__form footer__form">
					<div class="popup__userBlock footer__userBlock">
						<input class="hidden js-form-name" type="hidden" value="Обратный звонок">
						<label><input type="text" placeholder="Ваше имя:" name="Имя"></label>
						<label><input type="tel" placeholder="Ваш номер:" name="телефон" class="js-phoneMask"></label>
					</div>
					<button class="popup__button footer__userBlock-button" type="submit">Оставить заявку</button>
				</form>
			</div>
			<div class="footer__topBlock footer__topBlock_info">
				<a href="#">Личный кабинет</a>
				<a href="#quiz">Стоимость</a>
				<a href="#six">Услуги</a>
				<a href="#">Тарифы</a>
				<a href="#">Оплата</a>
			</div>
			<div class="footer__topBlock footer__topBlock_contacts">
				<div class="footer__contactsWrapper">
					<h4><a href="#">Контакты</a></h4>
					<a href="tel:+74957900442">+7 (495) 790-04-42</a>
					<a href="mailto:accountant@balanse-expert.ru">accountant@balanse-expert.ru</a>
					<ul class="popupFull__socialsList footer__socialsList">
						<li class="popupFull__socialsItems"><a href="tg://resolve?domain=BalanseExpert">
								<svg width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path
											d="m12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12c0-6.627-5.373-12-12-12zm5.894 8.221-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
								</svg>
							</a></li>
						<li class="popupFull__socialsItems"><a href="whatsapp://send?phone=+74957900442" target="_blank">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								     x="0px" y="0px"
								     width="90px" height="90px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;"
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
						<li class="popupFull__socialsItems"><a target="_blank"
						                                       href="https://www.youtube.com/channel/UCb8GdnqGjdugs1xlUFfx8tQ/videos">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
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
					</ul>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<p>Все права сайта <span>защищены2022©</span></p>
			<div>
				<a href="#">Пользовательское Соглашение</a>
				<a href="#">Разработка сайта</a>
			</div>
		</div>
	</div>
	<div class="border_top">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
			<path class="elementor-shape-fill"
			      d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
		</svg>
	</div>
	<div class="backGround-gradient backGround-gradient_about"></div>
</footer>

<div class="popup">
	<div class="popup__callBody">
		<div class="popup__callContent">
			<h3 class="popup__title js-popup_head">Обратный <span>звонок</span></h3>
			<p class="popup__textBody js-text_sale">Оставьте заявку и мы свяжемся с Вами в ближайшие время </p>
			<form action="#" class="popup__form">
				<div class="popup__userBlock">
					<input class="hidden js-form-name" type="hidden" value="Обратный звонок">
					<label><input type="text" placeholder="Ваше имя:"></label>
					<label><input type="tel" placeholder="Ваш номер:" class="js-phoneMask"></label>
				</div>
				<button class="popup__button" type="submit">Оставить заявку</button>
			</form>
			<div class="popup__callClose js-popup_close">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
				     height="40" viewBox="0 0 16 16">
					<path fill="#252525"
					      d="M8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM12.2 10.8l-1.4 1.4-2.8-2.8-2.8 2.8-1.4-1.4 2.8-2.8-2.8-2.8 1.4-1.4 2.8 2.8 2.8-2.8 1.4 1.4-2.8 2.8 2.8 2.8z"></path>
				</svg>
			</div>
		</div>
		<div class="backGround backGround_popup"></div>
	</div>

</div>

<div class="popupFull">
	<div class="popupFull__body">
		<div class="popupFull__content popupFull__content_top">
			<ul class="popupFull__firstList">
				<li class="popupFull__firstItems"><a href="#">Блог</a></li>
				<li class="popupFull__firstItems"><a href="#">Тарифы</a></li>
				<li class="popupFull__firstItems"><a href="#">Прайс</a></li>
				<li class="popupFull__firstItems"><a href="#footer">Контакты</a></li>
			</ul>
		</div>
		
		<div class="popupFull__content popupFull__content_bottom">
			<div class="popupFull__logo">
				<a href="Логотип"><img src="<?php echo get_template_directory_uri(); ?>/img/balance.png" alt="Лого"></a></div>
			<ul class="popupFull__twoList">
				<li class="popupFull__twoItems">
					<a class="popupFull__twoLink" href="tel:+74957900442">
						<svg fill="white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
						     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						     width="22px" height="22px" viewBox="0 0 477.156 477.156"
						     style="enable-background:new 0 0 477.156 477.156;"
						     xml:space="preserve">
							<g>
								<path d="M475.009,380.316l-2.375-7.156c-5.625-16.719-24.062-34.156-41-38.75l-62.688-17.125c-17-4.625-41.25,1.594-53.688,14.031
									l-22.688,22.688c-82.453-22.28-147.109-86.938-169.359-169.375L145.9,161.94c12.438-12.438,18.656-36.656,14.031-53.656
									l-17.094-62.719c-4.625-16.969-22.094-35.406-38.781-40.969L96.9,2.19c-16.719-5.563-40.563,0.063-53,12.5L9.962,48.659
									C3.899,54.69,0.024,71.94,0.024,72.003c-1.187,107.75,41.063,211.562,117.281,287.781
									c76.031,76.031,179.454,118.219,286.891,117.313c0.562,0,18.312-3.813,24.375-9.845l33.938-33.938
									C474.946,420.878,480.571,397.035,475.009,380.316z"/>
							</g>


</svg>
						+7 (495_790-04-42</a></li>
				<li class="popupFull__twoItems">
					<a class="popupFull__twoLink" href="mailto:accountant@balanse-expert.ru">
						<svg fill="white" width="22px" height="22px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
						     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						     viewBox="0 0 330.001 330.001" style="enable-background:new 0 0 330.001 330.001;" xml:space="preserve">
					<g id="XMLID_348_">
						<path id="XMLID_350_" d="M173.871,177.097c-2.641,1.936-5.756,2.903-8.87,2.903c-3.116,0-6.23-0.967-8.871-2.903L30,84.602
							L0.001,62.603L0,275.001c0.001,8.284,6.716,15,15,15L315.001,290c8.285,0,15-6.716,15-14.999V62.602l-30.001,22L173.871,177.097z"
						/>
						<polygon id="XMLID_351_" points="165.001,146.4 310.087,40.001 19.911,40"/>
					</g></svg>
						accountant@balanse-expert.ru</a></li>
				<li class="popupFull__twoItems">
					<a class="popupFull__twoLink" target="_blank"
					   href="https://yandex.ru/maps/?um=constructor%3Ae02c86f800c09c04ce510101bdfc6246508b03b3dc0b39e70cf18c5b8e1bc8e4&source=constructorLink">
						<svg fill="white" width="22px" height="22px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
						     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						     viewBox="0 0 477 477" style="enable-background:new 0 0 477 477;" xml:space="preserve">
<g>
	<path d="M238,0c-40,0-74,13.833-102,41.5S94,102.334,94,141c0,23.333,13.333,65.333,40,126s48,106,64,136
		s29.333,54.667,40,74c10.667-19.333,24-44,40-74s37.5-75.333,64.5-136S383,164.333,383,141c0-38.667-14.167-71.833-42.5-99.5
		S278,0,238,0L238,0z"/>
</g>
</svg>
						БЦ Сириус парк Москва, Каширское ш., д.3, корп. 2, стр. 2</a></li>
			</ul>
			
			<ul class="popupFull__socialsList ">
				<li class="popupFull__socialsItems"><a href="tg://resolve?domain=BalanseExpert">
						<svg width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path
									d="m12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12c0-6.627-5.373-12-12-12zm5.894 8.221-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
						</svg>
					</a></li>
				<li class="popupFull__socialsItems"><a href="whatsapp://send?phone=+74957900442" target="_blank">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						     x="0px" y="0px"
						     width="90px" height="90px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;"
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
				<li class="popupFull__socialsItems"><a target="_blank"
				                                       href="https://www.youtube.com/channel/UCb8GdnqGjdugs1xlUFfx8tQ/videos">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
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
			</ul>
		</div>
		<div class="popupFull__close">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
			     height="40" viewBox="0 0 16 16">
				<path fill="#B08F7C"
				      d="M8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM12.2 10.8l-1.4 1.4-2.8-2.8-2.8 2.8-1.4-1.4 2.8-2.8-2.8-2.8 1.4-1.4 2.8 2.8 2.8-2.8 1.4 1.4-2.8 2.8 2.8 2.8z"></path>
			</svg>
		</div>
	</div>
</div>


<?php wp_footer(); ?>
</body>
</html>