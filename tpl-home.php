<?php
/**
 * Главная страница (tpl-home.php)
 * @package WordPress
 * @subpackage balanse
 * Template Name: Главная
 */
get_header();
?>
	<section class="hero" id="hero">
		<div class="container hero__wrapper">
			<h1 class="hero__title">Бухгалтерское Обслуживание</h1>
			<p class="hero__text">Качественный аутсорсинг от команды аттестованных <strong>профессиональных
					бухгалтеров</strong>
				ИПБ России и членов Палаты налоговых консультантов.
				<span>Вы занимаетесь бизнесом, мы — Вашей бухгалтерией</span></p>
			<div class="hero__buttonsLink">
				<a href="" class="hero__link js-popup_open js-btn_audit"><span>Экспресс-аудит бесплатно</span></a>
			</div>
			<ul class="hero__list">
				<li class="hero__items arrow">Индивидуальный подход</li>
				<li class="hero__items arrow">Фиксированная цена</li>
				<li class="hero__items arrow">Вникаем в специфику бизнеса</li>
				<li class="hero__items arrow">Первый месяц бесплатно</li>
			</ul>

			<?php if (current_user_can('manage_options')) : // если админ показываем: ?>

				<div class="calculator-popup-position">
					<a class="calculator-popup js-calculate" href="#">
				<div class="calculator-popup__inner">
					<div class="calculator-popup__body">
						<svg clip="calculator-popup__svg-icon" width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 13.5C6 13.8978 5.84196 14.2794 5.56066 14.5607C5.27936 14.842 4.89782 15 4.5 15C4.10218 15 3.72064 14.842 3.43934 14.5607C3.15804 14.2794 3 13.8978 3 13.5C3 13.1022 3.15804 12.7206 3.43934 12.4393C3.72064 12.158 4.10218 12 4.5 12C4.89782 12 5.27936 12.158 5.56066 12.4393C5.84196 12.7206 6 13.1022 6 13.5ZM6 18C6 18.3978 5.84196 18.7794 5.56066 19.0607C5.27936 19.342 4.89782 19.5 4.5 19.5C4.10218 19.5 3.72064 19.342 3.43934 19.0607C3.15804 18.7794 3 18.3978 3 18C3 17.6022 3.15804 17.2206 3.43934 16.9393C3.72064 16.658 4.10218 16.5 4.5 16.5C4.89782 16.5 5.27936 16.658 5.56066 16.9393C5.84196 17.2206 6 17.6022 6 18ZM13.5 15C13.8978 15 14.2794 14.842 14.5607 14.5607C14.842 14.2794 15 13.8978 15 13.5C15 13.1022 14.842 12.7206 14.5607 12.4393C14.2794 12.158 13.8978 12 13.5 12C13.1022 12 12.7206 12.158 12.4393 12.4393C12.158 12.7206 12 13.1022 12 13.5C12 13.8978 12.158 14.2794 12.4393 14.5607C12.7206 14.842 13.1022 15 13.5 15ZM15 18C15 18.3978 14.842 18.7794 14.5607 19.0607C14.2794 19.342 13.8978 19.5 13.5 19.5C13.1022 19.5 12.7206 19.342 12.4393 19.0607C12.158 18.7794 12 18.3978 12 18C12 17.6022 12.158 17.2206 12.4393 16.9393C12.7206 16.658 13.1022 16.5 13.5 16.5C13.8978 16.5 14.2794 16.658 14.5607 16.9393C14.842 17.2206 15 17.6022 15 18ZM9 15C9.39782 15 9.77936 14.842 10.0607 14.5607C10.342 14.2794 10.5 13.8978 10.5 13.5C10.5 13.1022 10.342 12.7206 10.0607 12.4393C9.77936 12.158 9.39782 12 9 12C8.60218 12 8.22064 12.158 7.93934 12.4393C7.65804 12.7206 7.5 13.1022 7.5 13.5C7.5 13.8978 7.65804 14.2794 7.93934 14.5607C8.22064 14.842 8.60218 15 9 15ZM10.5 18C10.5 18.3978 10.342 18.7794 10.0607 19.0607C9.77936 19.342 9.39782 19.5 9 19.5C8.60218 19.5 8.22064 19.342 7.93934 19.0607C7.65804 18.7794 7.5 18.3978 7.5 18C7.5 17.6022 7.65804 17.2206 7.93934 16.9393C8.22064 16.658 8.60218 16.5 9 16.5C9.39782 16.5 9.77936 16.658 10.0607 16.9393C10.342 17.2206 10.5 17.6022 10.5 18ZM5.25 3C4.65326 3 4.08097 3.23705 3.65901 3.65901C3.23705 4.08097 3 4.65326 3 5.25V6.75C3 7.34674 3.23705 7.91903 3.65901 8.34099C4.08097 8.76295 4.65326 9 5.25 9H12.75C13.3467 9 13.919 8.76295 14.341 8.34099C14.7629 7.91903 15 7.34674 15 6.75V5.25C15 4.65326 14.7629 4.08097 14.341 3.65901C13.919 3.23705 13.3467 3 12.75 3H5.25ZM4.5 5.25C4.5 5.05109 4.57902 4.86032 4.71967 4.71967C4.86032 4.57902 5.05109 4.5 5.25 4.5H12.75C12.9489 4.5 13.1397 4.57902 13.2803 4.71967C13.421 4.86032 13.5 5.05109 13.5 5.25V6.75C13.5 6.94891 13.421 7.13968 13.2803 7.28033C13.1397 7.42098 12.9489 7.5 12.75 7.5H5.25C5.05109 7.5 4.86032 7.42098 4.71967 7.28033C4.57902 7.13968 4.5 6.94891 4.5 6.75V5.25ZM18 20.25C18 21.2446 17.6049 22.1984 16.9016 22.9016C16.1984 23.6049 15.2446 24 14.25 24H3.75C2.75544 24 1.80161 23.6049 1.09835 22.9016C0.395088 22.1984 0 21.2446 0 20.25V3.75C0 2.75544 0.395088 1.80161 1.09835 1.09835C1.80161 0.395088 2.75544 0 3.75 0H14.25C15.2446 0 16.1984 0.395088 16.9016 1.09835C17.6049 1.80161 18 2.75544 18 3.75V20.25ZM16.5 3.75C16.5 3.15326 16.2629 2.58097 15.841 2.15901C15.419 1.73705 14.8467 1.5 14.25 1.5H3.75C3.15326 1.5 2.58097 1.73705 2.15901 2.15901C1.73705 2.58097 1.5 3.15326 1.5 3.75V20.25C1.5 20.8467 1.73705 21.419 2.15901 21.841C2.58097 22.2629 3.15326 22.5 3.75 22.5H14.25C14.8467 22.5 15.419 22.2629 15.841 21.841C16.2629 21.419 16.5 20.8467 16.5 20.25V3.75Z" fill="url(#paint0_linear_525_62)"/>
								<defs>
								<linearGradient id="paint0_linear_525_62" x1="0.39779" y1="18.383" x2="18.2054" y2="18.0009" gradientUnits="userSpaceOnUse">
								<stop stop-color="#C9A255"/>
								<stop offset="0.270833" stop-color="#E3C673"/>
								<stop offset="0.494792" stop-color="#FEFDC8"/>
								<stop offset="0.739583" stop-color="#E3C673"/>
								<stop offset="1" stop-color="#C9A255"/>
								</linearGradient>
								</defs>
						</svg>
						<p class="calculator-popup__text">
							Калькулятор <br> стоимости
						</p>
					</div>
				</div>
			</a>
				</div>

			<? else : // если не админ?>
				<a href="#hero" class="videoBlock__position js-popup_open js-btn_sail">
				<div class="videoBlock">
					<div class="videoBlock__img">
						<svg width="22px" height="22px" viewBox="0 0 49 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
								 xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Gesture-7" fill="white">
									<path
										d="M45.4,59.4 L42.4,59.4 L42.4,53.1 L45.4,42.4 L45.4,32.6 L32.7,30.3 C28,29 25.4,26.2 25.4,22.5 L25.4,15.6 C25.4,13.4 23.6,11.6 21.5,11.6 C19.3,11.6 17.5,13.4 17.5,15.6 L17.5,39.4 L6.9,39.4 C4.7,39.4 3,41.2 3,43.4 C3,45.7 4.8,47.5 6.9,47.5 L11.5,47.5 C15.8,47.5 19.2,51 19.2,55.3 L19.2,59.2 L16.2,59.2 L16.2,55.3 C16.2,52.6 14.1,50.5 11.5,50.5 L6.9,50.5 C3.1,50.5 0,47.4 0,43.5 C0,39.6 3.1,36.4 6.9,36.4 L14.5,36.4 L14.5,15.6 C14.5,11.8 17.6,8.6 21.4,8.6 C25.3,8.6 28.4,11.7 28.4,15.6 L28.4,22.5 C28.4,25.3 31.1,26.7 33.5,27.4 L48.4,30.1 L48.4,42.8 L45.4,53.5 L45.4,59.4 Z"
										id="Shape"></path>
									<path
										d="M15.5,31.4 C9.3,28.9 5.3,23 5.3,16.3 C5.3,7.3 12.6,0 21.6,0 C30.6,0 37.9,7.3 37.9,16.3 C37.9,21.4 35.6,26.1 31.5,29.2 L29.7,26.8 C33,24.3 34.9,20.4 34.9,16.2 C34.9,8.9 28.9,2.9 21.6,2.9 C14.3,2.9 8.3,8.9 8.3,16.2 C8.3,21.6 11.6,26.5 16.6,28.5 L15.5,31.4 Z"
										id="Shape"></path>
								</g>
							</g>
						</svg>
					</div>
					<p class="videoBlock__text">Расчет услуг онлайн</p>
				</div>
			</a>
			<?php endif; //  блок админ или нет?>

		</div>
		<div class="backGround"></div>
		<div class="backGround-gradient"></div>
		<div class="border border_bottom">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="border-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
			</svg>
		</div>
	</section>
	<section class="we">
		<div class="container">
			<h2 class="we__title title_color">Работаем в интересах Вашего бизнеса</h2>
			<p class="we__text text_color">Бухгалтерские и юридические услуги</p>
			<div class="we__blockWrapper">
				<div class="we__blockCenter">
					<div class="we__blockFront we__blockGray">
						<span class="we__number">I</span>
						<p>Сдадим отчетность и оплатим налоги</p>
						<div class="we__clickPosition">
							<svg width="22px" height="22px" viewBox="0 0 49 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
									 xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="Gesture-7" fill="#A48573">
										<path
											d="M45.4,59.4 L42.4,59.4 L42.4,53.1 L45.4,42.4 L45.4,32.6 L32.7,30.3 C28,29 25.4,26.2 25.4,22.5 L25.4,15.6 C25.4,13.4 23.6,11.6 21.5,11.6 C19.3,11.6 17.5,13.4 17.5,15.6 L17.5,39.4 L6.9,39.4 C4.7,39.4 3,41.2 3,43.4 C3,45.7 4.8,47.5 6.9,47.5 L11.5,47.5 C15.8,47.5 19.2,51 19.2,55.3 L19.2,59.2 L16.2,59.2 L16.2,55.3 C16.2,52.6 14.1,50.5 11.5,50.5 L6.9,50.5 C3.1,50.5 0,47.4 0,43.5 C0,39.6 3.1,36.4 6.9,36.4 L14.5,36.4 L14.5,15.6 C14.5,11.8 17.6,8.6 21.4,8.6 C25.3,8.6 28.4,11.7 28.4,15.6 L28.4,22.5 C28.4,25.3 31.1,26.7 33.5,27.4 L48.4,30.1 L48.4,42.8 L45.4,53.5 L45.4,59.4 Z"
											id="Shape"></path>
										<path
											d="M15.5,31.4 C9.3,28.9 5.3,23 5.3,16.3 C5.3,7.3 12.6,0 21.6,0 C30.6,0 37.9,7.3 37.9,16.3 C37.9,21.4 35.6,26.1 31.5,29.2 L29.7,26.8 C33,24.3 34.9,20.4 34.9,16.2 C34.9,8.9 28.9,2.9 21.6,2.9 C14.3,2.9 8.3,8.9 8.3,16.2 C8.3,21.6 11.6,26.5 16.6,28.5 L15.5,31.4 Z"
											id="Shape"></path>
									</g>
								</g>
							</svg>
						</div></div>
				
					<div class="we__blockBack we__blockGray">
						<p>Декларации отправим в срок, платежки на налоги подготовим во время</p>
					</div>
				
				</div>
				
				<div class="we__blockCenter">
					<div class="we__blockFront we__blockBrown">
						<span class="we__number">II</span>
						<p>Берем на себя ответственность</p>
						<span class="we__backBlock we__backBlock-paper"></span></div>
					<div class="we__blockBack we__blockBrown">
						<p>Наша профессиональная ответственность застрахована на 1&nbsp;млн&nbsp;руб</p>
					</div>
				</div>
				
				<div class="we__blockCenter">
					<div class="we__blockFront we__blockGray">
						<span class="we__number">III</span>
						<p>Вникаем в специфику бизнеса</p></div>
					<div class="we__blockBack we__blockGray">
						<p>Погружаемся в деятельность организации, отслеживаем недостающие документы и сигнализируем</p>
					</div>
				</div>
				
				<div class="we__blockCenter">
					<div class="we__blockFront we__blockBrown">
						<span class="we__number">IV</span>
						<p>Следим за контрагентами</p>
						<span class="we__backBlock we__backBlock-pen"></span></div>
					<div class="we__blockBack we__blockBrown">
						<p>Мы-проверяем контрагентов на благонадежность, вы - спокойны за свою репутацию</p>
					</div>
				</div>
				
				<div class="we__blockCenter">
					<div class="we__blockFront we__blockGray">
						<span class="we__number">V</span>
						<p>Легально оптимизируем налоги</p></div>
					<div class="we__blockBack we__blockGray">
						<p>Внедряем все возможные способы законного снижения налогов</p>
					</div>
				</div>
				
				<div class="we__blockCenter">
					<div class="we__blockFront we__blockBrown">
						<span class="we__number">VI</span>
						<p>Фиксируем цены на обслуживание</p>
						<span class="we__backBlock we__backBlock-print"></span></div>
					<div class="we__blockBack  we__blockBrown">
						<p>У нас нет скрытых ежемесячных доплат, оплата только за работу</p>
					</div>
				</div>
				
				<div class="we__blockCenter">
					<div class="we__blockFront we__blockGray">
						<span class="we__number">VII</span>
						<p>Простое общение и всесторонняя поддержка</p>
					
					</div>
					<div class="we__blockBack we__blockGray">
						<p class="we__textSmall">Говорим на понятном языке, будем общаться там где Вам удобно:
						</p>
						<ul class="we__list">
							<li class="we__items arrow">Whatsapp</li>
							<li class="we__items arrow">Телефон</li>
							<li class="we__items arrow">Telegram</li>
							<li class="we__items arrow">Email</li>
							<li class="we__items arrow">ЛК</li>
						</ul>
					
					</div>
				</div>
			</div>
		
		</div>
	</section>
	<section class="six" id="six">
		<div class="container six__wrapper">
			<h2 class="six__title title_color">Бухгалтерские и юридические услуги для бизнеса</h2>
			<div class="six__img">
				
				<div class="six__popupWrapper">
					<div class="six__popupItem">
						<div class="six__popupText">
							<h5>Бухгалтерские услуги</h5>
							<div class="six__plusImg">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="27" height="27" rx="13.5" fill="url(#paint0_radial_30_6)"/>
									<rect x="2.21338" y="2.2135" width="22.573" height="22.573" rx="11.2865"
												fill="url(#paint1_radial_30_6)"
												stroke="#2F2C2B" stroke-width="2"/>
									<path d="M13.6516 9.10107V18.2022" stroke="white" stroke-width="2"/>
									<path d="M18.2021 13.6517L9.10102 13.6517" stroke="white" stroke-width="2"/>
									<defs>
										<radialGradient id="paint0_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(5.91573 10.7697) rotate(35.48) scale(17.5096)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
										<radialGradient id="paint1_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(6.59736 11.0151) rotate(35.48) scale(15.9357)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
									</defs>
								</svg>
							</div>
							<div class="six__popupInvisible">
								<ul class="six__popupList">
									<li class="six__popupItems">– полное ведение бухгалтерского и налогового учета</li>
									<li class="six__popupItems">– формирование первичных документов</li>
									<li class="six__popupItems">– начисление заработной платы, отпускных, больничных, компенсации при
										увольнении
									</li>
									<li class="six__popupItems">– ведение банк-клиента</li>
									<li class="six__popupItems">– сдача отчетности в контролирующие органы</li>
									<li class="six__popupItems">– импорт/экспорт</li>
								</ul>
							</div>
						</div>
					
					</div>
					<div class="six__popupItem six__popupItem_right">
						<div class="six__popupText">
							<h5>Постановка и восстановление учета</h5>
							<div class="six__plusImg">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="27" height="27" rx="13.5" fill="url(#paint0_radial_30_6)"/>
									<rect x="2.21338" y="2.2135" width="22.573" height="22.573" rx="11.2865"
												fill="url(#paint1_radial_30_6)"
												stroke="#2F2C2B" stroke-width="2"/>
									<path d="M13.6516 9.10107V18.2022" stroke="white" stroke-width="2"/>
									<path d="M18.2021 13.6517L9.10102 13.6517" stroke="white" stroke-width="2"/>
									<defs>
										<radialGradient id="paint0_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(5.91573 10.7697) rotate(35.48) scale(17.5096)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
										<radialGradient id="paint1_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(6.59736 11.0151) rotate(35.48) scale(15.9357)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
									</defs>
								</svg>
							</div>
							<div class="six__popupInvisible">
								<ul class="six__popupList">
									<li class="six__popupItems">– Постановим бухгалтерский и налоговый учет "с нуля"</li>
									<li class="six__popupItems">– Восстановим "пробелы" в ведении учета и сдадим корректировочные
										декларации, отчеты в контролирующие органы
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="six__popupItem">
						<div class="six__popupText">
							<h5>Кадровое делопроизводство</h5>
							<div class="six__plusImg">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="27" height="27" rx="13.5" fill="url(#paint0_radial_30_6)"/>
									<rect x="2.21338" y="2.2135" width="22.573" height="22.573" rx="11.2865"
												fill="url(#paint1_radial_30_6)"
												stroke="#2F2C2B" stroke-width="2"/>
									<path d="M13.6516 9.10107V18.2022" stroke="white" stroke-width="2"/>
									<path d="M18.2021 13.6517L9.10102 13.6517" stroke="white" stroke-width="2"/>
									<defs>
										<radialGradient id="paint0_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(5.91573 10.7697) rotate(35.48) scale(17.5096)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
										<radialGradient id="paint1_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(6.59736 11.0151) rotate(35.48) scale(15.9357)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
									</defs>
								</svg>
							</div>
							<div class="six__popupInvisible">
								<ul class="six__popupList">
									<li class="six__popupItems">– приказы руководителя</li>
									<li class="six__popupItems">– шаблоны заявлений для сотрудников</li>
									<li class="six__popupItems">– трудовые договоры</li>
									<li class="six__popupItems">– справка 2-НДФЛ, 182н</li>
									<li class="six__popupItems">– штатное расписание</li>
									<li class="six__popupItems">– график отпусков</li>
									<li class="six__popupItems">– локальные нормативные акты</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="six__popupItem six__popupItem_right">
						<div class="six__popupText">
							<h5>Дополнительные услуги</h5>
							<div class="six__plusImg">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="27" height="27" rx="13.5" fill="url(#paint0_radial_30_6)"/>
									<rect x="2.21338" y="2.2135" width="22.573" height="22.573" rx="11.2865"
												fill="url(#paint1_radial_30_6)"
												stroke="#2F2C2B" stroke-width="2"/>
									<path d="M13.6516 9.10107V18.2022" stroke="white" stroke-width="2"/>
									<path d="M18.2021 13.6517L9.10102 13.6517" stroke="white" stroke-width="2"/>
									<defs>
										<radialGradient id="paint0_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(5.91573 10.7697) rotate(35.48) scale(17.5096)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
										<radialGradient id="paint1_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(6.59736 11.0151) rotate(35.48) scale(15.9357)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
									</defs>
								</svg>
							</div>
							<div class="six__popupInvisible">
								<ul class="six__popupList">
									<li class="six__popupItems">– доступ к облаку</li>
									<li class="six__popupItems">– подключение к электронной сдачи отчетности</li>
									<li class="six__popupItems">– оформление ЭЦП</li>
									<li class="six__popupItems">– подключение к ЭДО</li>
									<li class="six__popupItems">– открытие расчетного счета</li>
									<li class="six__popupItems">– ВЭД</li>
									<li class="six__popupItems">– отчетность в Росстат, МинЮст, Росприроднадзор, ЦБ РФ и др.</li>
								
								</ul>
							</div>
						
						</div>
					</div>
					
					<div class="six__popupItem ">
						<div class="six__popupText">
							<h5>Налоговое консультирование</h5>
							<div class="six__plusImg">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="27" height="27" rx="13.5" fill="url(#paint0_radial_30_6)"/>
									<rect x="2.21338" y="2.2135" width="22.573" height="22.573" rx="11.2865"
												fill="url(#paint1_radial_30_6)"
												stroke="#2F2C2B" stroke-width="2"/>
									<path d="M13.6516 9.10107V18.2022" stroke="white" stroke-width="2"/>
									<path d="M18.2021 13.6517L9.10102 13.6517" stroke="white" stroke-width="2"/>
									<defs>
										<radialGradient id="paint0_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(5.91573 10.7697) rotate(35.48) scale(17.5096)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
										<radialGradient id="paint1_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(6.59736 11.0151) rotate(35.48) scale(15.9357)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
									</defs>
								</svg>
							</div>
							<div class="six__popupInvisible">
								<ul class="six__popupList">
									<li class="six__popupItems">Устные и письменные консультации:</li>
									<li class="six__popupItems">– о возможных способах оптимизации в рамках действующего
										Законодательства
									</li>
									<li class="six__popupItems">– по вопросам применения норм налогового права на практике</li>
									<li class="six__popupItems">– о возможным налоговых рисках компании</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="six__popupItem six__popupItem_right">
						<div class="six__popupText">
							<h5>Нулевая отчетность</h5>
							<div class="six__plusImg">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="27" height="27" rx="13.5" fill="url(#paint0_radial_30_6)"/>
									<rect x="2.21338" y="2.2135" width="22.573" height="22.573" rx="11.2865"
												fill="url(#paint1_radial_30_6)"
												stroke="#2F2C2B" stroke-width="2"/>
									<path d="M13.6516 9.10107V18.2022" stroke="white" stroke-width="2"/>
									<path d="M18.2021 13.6517L9.10102 13.6517" stroke="white" stroke-width="2"/>
									<defs>
										<radialGradient id="paint0_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(5.91573 10.7697) rotate(35.48) scale(17.5096)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
										<radialGradient id="paint1_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(6.59736 11.0151) rotate(35.48) scale(15.9357)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
									</defs>
								</svg>
							</div>
							<div class="six__popupInvisible">
								<ul class="six__popupList">
									<li class="six__popupItems">Формирование и сдача нулевой отчетности в ИФНС, ПФР, ФСС
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="six__popupItem">
						<div class="six__popupText">
							<h5>Юридические услуги</h5>
							<div class="six__plusImg six__popupItem_help">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="27" height="27" rx="13.5" fill="url(#paint0_radial_30_6)"/>
									<rect x="2.21338" y="2.2135" width="22.573" height="22.573" rx="11.2865"
												fill="url(#paint1_radial_30_6)"
												stroke="#2F2C2B" stroke-width="2"/>
									<path d="M13.6516 9.10107V18.2022" stroke="white" stroke-width="2"/>
									<path d="M18.2021 13.6517L9.10102 13.6517" stroke="white" stroke-width="2"/>
									<defs>
										<radialGradient id="paint0_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(5.91573 10.7697) rotate(35.48) scale(17.5096)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
										<radialGradient id="paint1_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(6.59736 11.0151) rotate(35.48) scale(15.9357)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
									</defs>
								</svg>
							</div>
							<div class="six__popupInvisible">
								<ul class="six__popupList">
									<li class="six__popupItems">– регистрация ИП</li>
									<li class="six__popupItems">– ликвидация ИП</li>
									<li class="six__popupItems">– внесение изменений в ЕГРЮЛ/ЕГРИП</li>
									<li class="six__popupItems">– приказы/протоколы</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="six__popupItem six__popupItem_right">
						<div class="six__popupText">
							<h5>Управленческий учет</h5>
							<div class="six__plusImg">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="27" height="27" rx="13.5" fill="url(#paint0_radial_30_6)"/>
									<rect x="2.21338" y="2.2135" width="22.573" height="22.573" rx="11.2865"
												fill="url(#paint1_radial_30_6)"
												stroke="#2F2C2B" stroke-width="2"/>
									<path d="M13.6516 9.10107V18.2022" stroke="white" stroke-width="2"/>
									<path d="M18.2021 13.6517L9.10102 13.6517" stroke="white" stroke-width="2"/>
									<defs>
										<radialGradient id="paint0_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(5.91573 10.7697) rotate(35.48) scale(17.5096)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
										<radialGradient id="paint1_radial_30_6" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
																		gradientTransform="translate(6.59736 11.0151) rotate(35.48) scale(15.9357)">
											<stop stop-color="#A98976"/>
											<stop offset="1" stop-color="#80685A"/>
										</radialGradient>
									</defs>
								</svg>
							</div>
							<div class="six__popupInvisible">
								<ul class="six__popupList">
									<li class="six__popupItems">Заполнение специальных форм по Ваши образцам</li>
								</ul>
							</div>
						</div>
					</div>
				
				
				</div>
			</div>
			
			
			<div class="backGround backGround_six"></div>
			<div class="backGround-gradient backGround-gradient_six"></div>
			<div class="border_top">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
					<path class="elementor-shape-fill"
								d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
				</svg>
			</div>
			<div class="border border_bottom">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
					<path class="border-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
				</svg>
			</div>
		</div>
	</section>
	<section class="quiz" id="quiz">
		<div class="container">
			<h2 class="quiz__title title_color">Расчет стоимости услуг</h2>
			<p class="quiz__text text_color">Ответьте на 5 вопросов и узнайте стоимость бухгалтерского обслуживания</p>
			<div class="quiz__markQuiz">
				<div data-marquiz-id="6256979d61cca8003f3237ac"></div>
				<script>(function (t, p) {
            window.Marquiz ? Marquiz.add([t, p]) : document.addEventListener('marquizLoaded', function () {
              Marquiz.add([t, p])
            })
          })('Inline', {
            id: '6256979d61cca8003f3237ac',
            buttonText: 'Рассчитать',
            bgColor: '#af8e7b',
            textColor: '#ffffff',
            rounded: true,
            shadow: 'rgba(175, 142, 123, 0.5)',
            blicked: true,
            buttonOnMobile: true,
            width: '1162'
          })</script>
			</div>
		</div>
	</section>
	<section class="about" id="about">
		<div class="container about__wrapper">
			<div class="about__block">
				<style>
					.about__text {
          }

          .about__block p {
              color: #FFFFFF;
              margin-bottom: 20px;
          }
				</style>
				
				
				<h3 class="about__title title_color">Об агенстве</h3>

				<?php the_content(); ?>
				
				<a href="https://www.youtube.com/watch?v=fC_sJAsac2M&t=2s" class="js-fancybox-video about__link"
					 data-rel="media">Узнайте о нашей компании всего за 60 секунд</a>
				
				<div class="about__discriptionsBlock">
					<a href="#about" class="about__discriptionsLink js-popup_open js-btn_consultation">Получить консультацию</a>
					<a href="#reviews" class="about__discriptionsLink">Смотреть отзывы </a>
				</div>
			</div>
		</div>
		<div class="backGround backGround_about"></div>
		<div class="backGround-gradient backGround-gradient_about"></div>
		<div class="border_top">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill"
							d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
			</svg>
		</div>
		<div class="border border_bottom">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="border-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
			</svg>
		</div>
	</section>


	<section class="price" id="price">
		<div class="container">
			<div class="price__itemMain">



				<article class="price__articles">
					<h3 class="price__articlesTitle title_color">Полезные статьи</h3>
					<p class="price__articlesText text_color">Простым языком о сложных терминах
					</p>
					<div class="price__articlesBlock">
                        <?php
                        $args = array(
	                        'post_type' => '',
	                        //                'type_news' => 'news_company',
	                        'order' => 'DESC', // 'order' => 'DESC',
	                        'posts_per_page' => 3
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
	                        while ($query->have_posts()) {
		                        $query->the_post();

		                        $date_n = get_the_date('d ');
		                        $date_m = get_the_date(' M ');
		                        ?>
														<a href="<?php the_permalink(); ?>" class="price__articlesItems" style=" background-image: url('<?php the_post_thumbnail_url(''); ?>'); ">
                                            <h5 class="price__articlesItems-title"><?php the_title(); ?></h5>
                                            <div class="price__articlesItems-dateBlock">
                                                <span class="price__articlesItems-number"><?= $date_n; ?></span>
                                                <span class="price__articlesItems-date"><?= $date_m; ?></span>
                                            </div>
                                        </a>
	                        <?php }
	                        wp_reset_postdata();
                        } ?>
					</div>
					<a class="price__blog" href="https://balanse-expert.ru/blog/">Читать все статьи</a>
				</article>
			
			</div>
	</section>
	
	<section class="quest">
		<div class="quest__wrapper container">
			<h2 class="quest__title price__title title_color">Часто задаваемые вопросы</h2>
			<br>
			<br>
			<ul class="price__itemLink">
				<li class="quest__link price__link js-tab-trigger active" data-tab="1">Что входит в стандартную бухгалтерскую услугу?</li>
				<li class="quest__link price__link js-tab-trigger" data-tab="2">Кому подходит бухгалтерский аутсорсинг?</li>
				<li class="quest__link price__link js-tab-trigger" data-tab="3">Преимущества аутсорсинга?</li>
			</ul>
			
			<div class="price__tabsWrapper">
				<div data-tab="1" class="price__tabs price__tabs_one js-tab-content active">
					<ul class="price__tabsList">
						<li class="quest__tabsItems price__tabsItems">прием, регистрация и учет первичных документов</li>
						<li class="quest__tabsItems price__tabsItems">ведение бухгалтерского и налогового учета в программе 1С</li>
						<li class="quest__tabsItems price__tabsItems">расчет заработной платы сотрудникам до 3-х человек</li>
						<li class="quest__tabsItems price__tabsItems">расчет налогов и сборов, формирование платежных поручений на оплату</li>
						<li class="quest__tabsItems price__tabsItems">составление бухгалтерской и налоговой отчетности, сдача в контролирующие
							органы
							по почте ( ИФНС, ПФР,ФСС)
						</li>
						<li class="quest__tabsItems price__tabsItems">представление интересов организации в контролирующих органах по вопросам
							расчета и начисления налогов и сборов
						</li>
						<li class="quest__tabsItems price__tabsItems">неограниченное количество устных консультаций бухгалтера</li>
						<li class="quest__tabsItems price__tabsItems">сверка с контрагентами (до 5 Актов сверки в месяца)</li>
						<li class="quest__tabsItems price__tabsItems">выгрузка сданной отчетности за квартал в Личный кабинет</li>
						<li class="quest__tabsItems price__tabsItems">хранения архива документов бесплатно 1 календарный год</li>
						<li class="quest__tabsItems price__tabsItems">курьерские услуги (подписание договора, доверенностей, вопросы касающиеся
							налогов, сборов)
						</li>
					</ul>
				</div>
				<div data-tab="2" class="price__tabs price__tabs_two js-tab-content">
					<p class="quest__text price__textTabs price__textTabs_title">Бухгалтерский аутсорсинг подходит организациям и
						индивидуальным
						предпринимателям
						малого,среднего бизнеса, холдинговым компаниям , которые хотят:</p>
					<ul class="price__tabsList">
						<li class="quest__tabsItems price__tabsItems">отдать частично или полностью ведение бухгалтерского, налогового учета или
							кадрового делопроизводства профессионалам
						</li>
						<li class="quest__tabsItems price__tabsItems">получить непрерывность в работе и знать, что если бухгалтер заболеет работа
							не
							встанет, все будет выполнена в срок
						</li>
						<li class="quest__tabsItems price__tabsItems">сэкономить свое время и деньги на организационных вопросах по созданию
							штатной
							бухгалтерской службы
						</li>
					</ul>
				</div>
				<div data-tab="3" class="price__tabs price__tabs_tree js-tab-content">
					<div class="price__textBlockTabs">
						<div class="price__textBlock">
							<p class="quest__text price__textTabs price__textTabs_title">1) Уверенность в профессионализме</p>
							<p class="quest__text price__textTabs">Наше агентство дорожит своей репутацией и принимает на работу только
								бухгалтеров, имеющих аттестат "Профессионального бухгалтера".</p>
						</div>
						<div class="quest__text price__textBlock">
							<p class="quest__text price__textTabs price__textTabs_title">2) Всегда на связи</p>
							<p class="quest__text price__textTabs">Штатный бухгалтер уходит в отпуск, болеет и в этот момент рабочие процессы
								останавливаются. У нас команда профессиональных специалистов, которые готовы всегда подменить друг
								друга для того, чтобы Ваши бизнес-процессы постоянно и бесперебойно работали.</p>
						</div>
						<div class="price__textBlock">
							<p class="quest__text price__textTabs price__textTabs_title">3) Автоматизация работы</p>
							<p class="quest__text price__textTabs">Внедряем новые технологии, чтобы работать быстрее и эффективнее. Облачные 1С,
								электронный документооборот, распознавание документов по сканам, доработка 1С под потребности клиента
								- это давно наша действительность.</p>
						</div>
						<div class="price__textBlock">
							<p class="quest__text price__textTabs price__textTabs_title">4) Экономим деньги</p>
							<p class="quest__text price__textTabs">Всем известно, что бухгалтер в штате обходится на 30% дороже бухгалтерии на
								аутсорсинге. Как минимум бухгалтеру надо организовать рабочее место, купить 1С, платить заработную
								плату и сверху еще 30% страховые взносы. </p>
							<p class="quest__text price__textTabs">Работая с нами,эти расходы мы берем на себя и как следствие Вы получается
								снижение затрат и дополнительную прибыль для развития бизнеса.</p>
						</div>
					</div>
				</div>
			
			</div>
		</div>
		<div class="backGround backGround_about"></div>
		<div class="backGround-gradient backGround-gradient_about"></div>
		<div class="border_top">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill"
							d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
			</svg>
		</div>
		<div class="border border_bottom">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="border-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
			</svg>
		</div>
	</section>


<?php
$reviews = get_field('reviews');
if ($reviews): ?>
	<section class="reviews" id="reviews">
			<div class="container">
				<h3 class="reviews__title title_color">Отзывы клиентов</h3>
				<!-- Swiper -->
				<div class="swiper reviewsSwiper">
					<div class="swiper-wrapper reviewsSwiper__wrapper">
						<?php foreach ($reviews as $reviews_id): ?>
							<div class="swiper-slide reviewsSwiper__slide">
<!--								<a class="reviews__fancybox" href="--><?php //= esc_url($reviews_id['sizes']['full']); ?><!--">-->
								<!--				-->
								<!--								</a>-->
										<img src="<?= esc_url($reviews_id['sizes']['large']); ?>" alt="<?= $reviews_id['title']; ?>">
							</div>
						<?php endforeach; ?>
					</div>
					<div class="reviewsSwiper__arrow reviewsSwiper__next"></div>
					<div class="reviewsSwiper__arrow reviewsSwiper__prev"></div>
					<div class="swiper-pagination reviewsSwiper__pagination"></div>
				</div>
			</div>
		</section>
<?php endif; ?>
<?php /* ?>
 <section class="reviews" id="reviews">
		<div class="container">
			<h3 class="reviews__title title_color">Отзывы клиентов</h3>
			<!-- Swiper -->
			<div class="swiper reviewsSwiper">
				<div class="swiper-wrapper reviewsSwiper__wrapper">
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
					<div class="swiper-slide reviewsSwiper__slide">
						<a href="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg" data-fancybox="images"
						   data-caption="My caption">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/reviews1.jpeg"
							     alt="Письмо благодарности">
						</a>
					</div>
				</div>

				<div class="reviewsSwiper__arrow reviewsSwiper__next"></div>
				<div class="reviewsSwiper__arrow reviewsSwiper__prev"></div>
				<div class="swiper-pagination reviewsSwiper__pagination"></div>
			</div>
		</div>
	</section>
    <?php */ ?>
	
	<style>
		.border_bottom {
        z-index: 5;
    }

    .price__textTabs:not(:last-child) {
        margin-bottom: 10px;
    }
	</style>

<?php if (current_user_can('manage_options')) : // если админ показываем: ?>
	<div class="popup-calculator">
	<div class="popup-calculator__body js-calculator-body">

		<div class="calculator calculator--popup">
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
				<div class="calculator__close">
					<svg class="calculator__close-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g opacity="0.25">
						<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M15 9L9 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M9 9L15 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</g>
					</svg>

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
				<div class="calculator__close">
					<svg class="calculator__close-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g opacity="0.25">
						<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M15 9L9 15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M9 9L15 15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</g>
					</svg>

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
				<div class="calculator__close">
					<svg class="calculator__close-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g opacity="0.25">
						<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M15 9L9 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M9 9L15 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</g>
					</svg>

				</div>

	</div>
	</div>

</div>
	</div>


<?php endif; //  блок админ или нет?>
<?php get_footer(); ?>