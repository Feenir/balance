<?php
/**
 * Главная страница (page.php)
 * @package WordPress
 * @subpackage balanse
 * Template Name: обычная страница
 */
get_header();

?>

<?php if (current_user_can('manage_options')) : // если админ показываем: ?>
	<section class="calculator-page">
	<div class="container">
		<h2 class="pages-additional title_color">Калькулятор стоимости бухгалтерского обслуживания</h2>
		<div class="calculator">
			<div class="calculator__body calculator__body--active" id="step-one">
				<div class="calculator__header">

					<h3 class="calculator__title">
							Расчёт стоимости бухгалтерского обслуживания
					</h3>

			</div>
				<div class="calculator__wrapper">
						<div class="calculator__inner">
							<h3 class="calculator__inner-title">Бухгалтерских операций в месяц:</h3>
							<div class="range">
								<label class="range__label-hidden">
									<input class="range__steps-hidden" id="range-steps-input" type="range" min="1" max="300" value="">
								</label>
							<div class="range__wrapper">
								<div class="range__stripe" id="range-steps-fake"></div>
							</div>
								<div class="range__number-inner">
									<span class="range__number range__number--before">1</span>
									<span class="range__number">350</span>
								</div>
						</div>
							<div class="calculator__tariff">

								<div class="calculator__tariff-left">
									<h4 class="calculator__tariff-title">Система налогообложения:</h4>
									<div class="calculator__radio-inner">
										<input class="calculator__input js-taxation-six" type="radio" id="taxation" name="taxation">
										<label class="calculator__label" for="taxation">
											<span class="calculator__fake-radio"></span>
											<span class="calculator__fake-input">усн 6%</span>
										</label>
										<input class="calculator__input" type="radio" id="taxation-one" name="taxation" checked>
										<label class="calculator__label" for="taxation-one">
												<span class="calculator__fake-radio"></span>
											<span class="calculator__fake-input">осно</span>
										</label>
										<input class="calculator__input js-taxation-fifteen" type="radio" id="taxation-two" name="taxation">
										<label class="calculator__label" for="taxation-two">
											<span class="calculator__fake-radio"></span>
											<span class="calculator__fake-input">усн 15%</span>
										</label>
									</div>
								</div>

								<div class="calculator__tariff-right">
									<h4 class="calculator__tariff-title">Тариф:</h4>
									<div class="calculator__radio-inner">
										<input class="calculator__input js-lite" type="radio" id="rates" name="rates">
										<label class="calculator__label js-lite-label" for="rates">
											<span class="calculator__fake-radio"></span>
											<span class="calculator__fake-input">Лайт</span>
										</label>
										<input class="calculator__input js-normal" type="radio" id="rates-one" name="rates" checked>
										<label class="calculator__label js-normal-label" for="rates-one">
											<span class="calculator__fake-radio"></span>
											<span class="calculator__fake-input">Базовый</span>
										</label>
										<input class="calculator__input js-premium" type="radio" id="rates-two" name="rates">
										<label class="calculator__label js-premium-label" for="rates-two">
											<span class="calculator__fake-radio"></span>
											<span class="calculator__fake-input">Премиум</span>
										</label>
									</div>
								</div>
							</div>

							<div class="calculator__staff-inner">
								<h4 class="calculator__staff-title">Колличество сотрудников:</h4>
								<label class="calculator__staff-label">
									<input class="calculator__staff-input js-staff" type="number" min="1" placeholder="1">
								</label>
							</div>




					</div>


							<div class="calculator__right">
								<div class="calculator__staff-inner calculator__staff-inner--right">
									<div class="calculator__photo-inner">
										<div class="calculator__img-inner" id="fordays">
											<img src="<?php echo get_template_directory_uri(); ?>/img/boss.png" alt="Сотрудник">
										</div>
										<div class="calculator__staff-text-inner">
											<p class="calculator__staff-name">Анастасия<br>Богачева</p>
											<p class="calculator__staff-post">Руководитель агенства</p>
										</div>
									</div>
									<div class="calculator__text-quiz">При отсутсвии в списке подходящего ответа укажите свой в поле “Другое”</div>
								</div>
								<button class="calculator__button btn load-screen" type="button">
						<span class="calculator__button-text">Рассчитать стоимость</span></button>
							</div>



				</div>


		</div>
			<div class="calculator__body calculator__body--load" id="step-two">
				<div class="calculator__header calculator__header--progressbar">

					<h3 class="calculator__title">
							Расчёт стоимости бухгалтерского обслуживания
					</h3>

			</div>
				<div class="calculator__wrapper calculator__wrapper--progressbar">
							<div class="calculator__progressbar-inner">
								<svg class="calculator__progressbar progressbar" viewBox="0 0 62 80">
							<circle class="progressbar__track" cx="31" cy="31"></circle>
							<circle class="progressbar__thumb" cx="31" cy="31"></circle>
							<text x="32" y="33" class="progressbar__percent" text-anchor="middle" dominant-baseline="middle"><tspan>0</tspan>%</text>
							<text x="32" y="73" class="progressbar__info" text-anchor="middle" dominant-baseline="middle"></text>
						</svg>
							</div>
				</div>


</div>
			<div class="calculator__body" id="step-three">
				<div class="calculator__header">

					<h3 class="calculator__title">
							Расчёт стоимости бухгалтерского обслуживания
					</h3>

			</div>
				<div class="calculator__wrapper calculator__wrapper--last">

					<div class="calculator__inner calculator__inner--step-last">
					<div class="calculator__step calculator__step-one calculator-step-active">
							<svg class="calculator__arrow-back btn-back" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g opacity="0.5">
						<path d="M15.8337 10H4.16699" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M10.0003 15.8332L4.16699 9.99984L10.0003 4.1665" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</g>
						</svg>
						<p class="calculator__form-text">
							Стоимость по вашим параметрам посчитана, для того что бы ее увидеть, оставьте контактные данные
						</p>

						<form class="calculator__form js-submit" action="#">

							<label class="calculator__last-label">
								<input class="calculator__last-input" type="text" placeholder="Имя">
							</label>
							<label class="calculator__last-label calculator__last-label--button">
								<input class="calculator__last-input js-phoneMask" type="text" placeholder="Телефон">
							</label>
							<label class="calculator__hidden-field">
								<input class="price-in-form" type="text" value="">
							</label>
							<button class="calculator__last-button set-form" type="submit">узнать стоимость</button>
							<input class="calculator__real-input" id="privacy-policy" type="checkbox" checked>
							<label class="calculator__privacy-policy-inner" for="privacy-policy">
								<span class="fake-checkbox"></span>
								<span class="calculator__privacy-policy">
									<span>С</span> Положением об обработке персональных данных <span><br>и</span> <a href="#">Политикой конфиденциальности</a> <span>ознакомлен и согласен</span>
								</span>
							</label>
						</form>
					</div>

					<div class="calculator__step calculator__step-two">
							<svg class="calculator__arrow-back back-form-screen" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g opacity="0.5">
						<path d="M15.8337 10H4.16699" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M10.0003 15.8332L4.16699 9.99984L10.0003 4.1665" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</g>
						</svg>
						<div class="calculator__thanks-inner">

						<h3 class="calculator__thanks">Спасибо, что оставили завявку!</h3>
						<p class="calculator__thanks-text">
							В скором времени наши менеджеры <br> свяжутся с Вами!
						</p>
						<button class="calculator__back-first js-reset">
							<svg class="calculator__arrow" width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.375 13H5.625" stroke="url(#paint0_linear_568_286)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.5 20.5832L5.625 12.9998L13.5 5.4165" stroke="url(#paint1_linear_568_286)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<defs>
<linearGradient id="paint0_linear_568_286" x1="5.97307" y1="13.766" x2="18.9313" y2="7.9274" gradientUnits="userSpaceOnUse">
<stop stop-color="#BB6D22"/>
<stop offset="0.270833" stop-color="#F8B857"/>
<stop offset="0.494792" stop-color="#FFCD89"/>
<stop offset="0.739583" stop-color="#F8C16D"/>
<stop offset="1" stop-color="#C38137"/>
</linearGradient>
<linearGradient id="paint1_linear_568_286" x1="5.79903" y1="17.0335" x2="13.5917" y2="16.9178" gradientUnits="userSpaceOnUse">
<stop stop-color="#BB6D22"/>
<stop offset="0.270833" stop-color="#F8B857"/>
<stop offset="0.494792" stop-color="#FFCD89"/>
<stop offset="0.739583" stop-color="#F8C16D"/>
<stop offset="1" stop-color="#C38137"/>
</linearGradient>
</defs>
</svg>пересчитать</button>
					</div>
						</div>

					</div>

					<div class="calculator__right calculator__right--last">
										<p class="calculator__price-text">
											Приблизительная стоимость:
										</p>
									<div class="calculator__price calculator__price--blur price-popup">-- --- -</div>
							</div>
				</div>


	</div>
	</div>
</div>
</section>
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

<? else : // если не админ?>
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
<?php endif; //  блок админ или нет?>




<?php get_footer(); // подключаем footer.php ?>


