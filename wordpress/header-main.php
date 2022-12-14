<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#111111">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php 
			wp_head();
		?>
		<title>Федерация футбола города-курорта Геленджик</title>
	</head>
	<body>
		<header class="header">
			<div class="header__block">
				<div class="container">
					<a href="#slider">
						<h1 class="header__block-name">Геленджикская городская<br>общественная организация<br>«Федерация
							футбола города–<br>курорта Геленджик»</h1>
					</a>
					<ul class="header__block-nav">
						<li class="nav__link nav__link-none"><a href="https://ffgel.ru/about">О нас</a></li>
						<li class="nav__link">
							<a href="https://ffgel.ru/news">Новости</a>
							<div class="dropdown">
								<ul class="container">
									<li><a class="news__link" href="https://ffgel.ru/news">Все новости</a>
									</li>
									<li><a class="news__link" href="https://ffgel.ru/news-local">Местный футбол</a>
									</li>
									<li><a class="news__link" href="https://ffgel.ru/news-kray">Краевой футбол</a>
									</li>
									<li><a class="news__link" href="https://ffgel.ru/news-rus">Российский футбол</a>
									</li>
									<li><a class="news__link" href="https://ffgel.ru/news-spartak">Спартак
											Геленджик</a></li>
									<li><a class="news__link" href="https://ffgel.ru/news-vista">Vista</a></li>
								</ul>
							</div>
						</li>
						<li class="nav__link">
							<a href="https://ffgel.ru/tournaments" data-tournaments="all-tournaments">Турниры</a>
							<div class="dropdown">
								<ul class="container">
									<li class="dropdown__nav">
										<a class="dropdown__nav-header tournaments__link"
											href="https://ffgel.ru/tournaments" data-tournaments="kray-tab">Краевые</a>
										<ul class="dropdown__nav-links">
											<li><a class="tournaments__link" data-tournaments="vishaya-liga"
													href="https://ffgel.ru/tournaments">Высшая
													лига</a></li>
											<li><a class="tournaments__link" data-tournaments="kubok-gubernatora"
													href="https://ffgel.ru/tournaments">Кубок
													Губернатора</a></li>
											<li><a class="tournaments__link" data-tournaments="kubok-kraya"
													href="https://ffgel.ru/tournaments">Кубок
													Краснодарского Края</a></li>
										</ul>
									</li>
									<li class="dropdown__nav">
										<a class="dropdown__nav-header tournaments__link"
											href="https://ffgel.ru/tournaments" data-tournaments="local-tab">Местные</a>
										<ul class="dropdown__nav-links">
											<li><a class="tournaments__link" data-tournaments="nfl"
													href="https://ffgel.ru/tournaments">НФЛ</a></li>
											<li><a class="tournaments__link" data-tournaments="zimnie-pervenstvo"
													href="https://ffgel.ru/tournaments">Зимнее
													первенство</a></li>
											<li><a class="tournaments__link" data-tournaments="kubok-glavi"
													href="https://ffgel.ru/tournaments">Кубок
													Главы</a></li>
											<li><a class="tournaments__link" data-tournaments="pervenstvo-goroda"
													href="https://ffgel.ru/tournaments">Первенство города</a></li>
										</ul>
									</li>
									<li class="dropdown__nav">
                                        <a class="dropdown__nav-header" href="https://ffgel.ru/comands">Команды</a>
                                        <ul class="dropdown__nav-links teams">
                                            <a href="https://ffgel.ru/comands">Команды ЛФК МО Геленджик</a>
                                            <li><a href="https://ffgel.ru/comands/rssm">РССМ</a></li>
                                            <li><a href="https://ffgel.ru/comands/sparta">Спарта</a></li>
                                            <li><a href="https://ffgel.ru/comands/volna">Волна</a></li>
                                            <li><a href="https://ffgel.ru/comands/poberezjie">Побережье</a></li>
                                            <li><a href="https://ffgel.ru/comands/hika">Ника</a></li>
                                            <li><a href="https://ffgel.ru/comands/sofi">Софи</a></li>
                                            <li><a href="https://ffgel.ru/comands/veterany">Ветераны</a></li>
                                            <li><a href="https://ffgel.ru/comands/gelenstroy">Геленстрой</a></li>
                                            <li><a href="https://ffgel.ru/comands/champion-mma">Чемпион ММА</a></li>
                                            <li><a href="https://ffgel.ru/comands/chernomorets">Черноморец</a></li>
                                            <li><a href="https://ffgel.ru/comands/ynost">Юность</a></li>
                                            <li><a href="https://ffgel.ru/comands/kabardinka">Кабардинка</a></li>
                                            <li><a href="https://ffgel.ru/comands/vizantiya">Византия</a></li>
                                            <li><a href="https://ffgel.ru/comands/kingbeer">KingBeer</a></li>
                                        </ul>
                                        <ul class="dropdown__nav-links">
                                            <li><a href="https://ffgel.ru/comands/spartak">Cпартак Геленджик</a></li>
                                            <li><a href="https://ffgel.ru/comands/vista">Vista</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown__nav">
										<a class="dropdown__nav-header" href="https://ffgel.ru/stadiums">Стадионы</a>
									</li>
									<li class="dropdown__nav">
										<a class="dropdown__nav-header" href="https://ffgel.ru/referees">Судьи</a>
									</li>
								</ul>
							</div>
						</li>
						<li style="display: inline-block;"><a class="nav__link-img" href="#slider"><img
									src="<?php echo get_template_directory_uri(); ?>/assets/img/header-logo.svg"
									alt="logo"></a></li>
						<li class="nav__link">
							<a href="https://ffgel.ru/schools">Спортшколы</a>
							<div class="dropdown">
                                <ul class="container">
                                    <li><a href="https://ffgel.ru/schools">Все спортшколы</a></li>
                                    <li><a href="https://ffgel.ru/schools/fortuna">Фортуна</a></li>
                                    <li><a href="https://ffgel.ru/schools/start">Старт</a></li>
                                    <li><a href="https://ffgel.ru/schools/sparta-school">Спарта</a></li>
                                </ul>
                            </div>
						</li>
						<li class="nav__link">
							<a class="media__link" href="https://ffgel.ru/media-photo">Медиа</a>
							<div class="dropdown">
								<ul class="container">
									<li><a class="media__link" href="https://ffgel.ru/media-photo">Фото</a></li>
									<li><a class="media__link" href="https://ffgel.ru/media-video">Видео</a></li>
								</ul>
							</div>
						</li>
						<li class="nav__link nav__link-none"><button class="store__btn">Магазин</button></li>
					</ul>
					<button class="burger">
						<span class="burger-line top-line"></span>
						<span class="burger-line mid-line"></span>
						<span class="burger-line bottom-line"></span>
					</button>
					<a class="mobile__logo" href="#slider"><img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/header-logo.svg" alt="logo"></a>
					<div class="header__block-entry">
						<div class="entry__user">
							<?php 
                                if ( is_user_logged_in() ) {
                                    ?><a href="https://ffgel.ru/account">
                                        <?php echo get_avatar( wp_get_current_user(), '', '', '', array('class'=>'avatar') ); ?>
                                   </a><?php
                                } else {
                                    ?> 
                                        <a href="<?php echo wp_login_url(); ?>">
                                            <svg class="entry__user-icon" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.1023 14.8438H10.1313C5.44023 14.8438 1.6355 18.6328 1.6355 23.3057C1.6355 24.2432 2.39635 25 3.33466 25H21.8999C22.8382 25 23.5981 24.2432 23.5981 23.3057C23.5981 18.6328 19.7939 14.8438 15.1023 14.8438ZM12.6168 12.5C16.0828 12.5 18.8918 9.70166 18.8918 6.25C18.8918 2.79834 16.0828 0 12.6168 0C9.15083 0 6.34177 2.79834 6.34177 6.25C6.34177 9.70166 9.15083 12.5 12.6168 12.5Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                        <a class="entry__user-btn" href="<?php echo wp_login_url(); ?>">Войти</a>
                                    <?php
                                }
                            ?>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile hidden">
				<div class="container">
					<div class="mobile__wrap">
						<ul class="mobile__nav">
							<li class="mobile__link mobile__link-none"><a href="https://ffgel.ru/about">О нас</a></li>
							<li class="mobile__link">
								<a class="news__link" href="https://ffgel.ru/news">Новости</a>
								<ul class="mobile__dropdown">
									<li><a class="news__link" href="https://ffgel.ru/news">Все новости</a></li>
									<li><a class="news__link" href="https://ffgel.ru/news-local">Местный футбол</a></li>
									<li><a class="news__link" href="https://ffgel.ru/news-kray">Краевой футбол</a></li>
									<li><a class="news__link" href="https://ffgel.ru/news-rus">Российский футбол</a>
									</li>
									<li><a class="news__link" href="https://ffgel.ru/news-spartak">Спартак Геленджик</a>
									</li>
									<li><a class="news__link" href="https://ffgel.ru/news-vista">Vista</a></li>
								</ul>
							</li>
							<li class="mobile__link">
								<a href="https://ffgel.ru/tournaments" data-tournaments="all-tournaments">Турниры</a>
								<ul class="mobile__dropdown">
									<li class="mobile__dropdown-block">
										<a class="mobile__dropdown-header tournaments__link" data-tournaments="kray-tab"
											href="https://ffgel.ru/tournaments">Краевые</a>
									</li>
									<li class="mobile__dropdown-block">
										<a class="mobile__dropdown-header tournaments__link"
											data-tournaments="local-tab" href="https://ffgel.ru/tournaments">Местные</a>
									</li>
									<li class="mobile__dropdown-block">
										<a class="mobile__dropdown-header" href="https://ffgel.ru/comands">Команды</a>
									</li>
									<li class="mobile__dropdown-block">
										<a class="mobile__dropdown-header" href="https://ffgel.ru/stadiums">Стадионы</a>
									</li>
									<li class="mobile__dropdown-block">
										<a class="mobile__dropdown-header" href="https://ffgel.ru/referees">Судьи</a>
									</li>
								</ul>
							</li>
							<li class="mobile__link">
								<a href="https://ffgel.ru/schools">Спортшколы</a>
								<ul class="mobile__dropdown">
									<li><a href="https://ffgel.ru/schools">Все спортшколы</a></li>
									<li><a href="https://ffgel.ru/schools/fortuna">Фортуна</a></li>
									<li><a href="https://ffgel.ru/schools/start">Старт</a></li>
									<li><a href="https://ffgel.ru/schools/sparta-school">Спарта</a></li>
								</ul>
							</li>
							<li class="mobile__link">
								<a class="media__link" href="https://ffgel.ru/media-photo">Медиа</a>
								<ul class="mobile__dropdown">
									<li><a class="media__link" href="https://ffgel.ru/media-photo">Фото</a></li>
									<li><a class="media__link" href="https://ffgel.ru/media-video">Видео</a></li>
								</ul>
							</li>
							<li class="mobile__link mobile__link-none"><button class="store__btn">Магазин</button></li>
						</ul>
						<div class="mobile__contact">
							<div class="mobile__contact-wrap">
								<div class="mobile__contact-block">
									<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 0C6.00606 0 2.75676 3.2493 2.75676 7.2432C2.75676 12.1998 9.23875 19.4763 9.51473 19.7836C9.77395 20.0723 10.2265 20.0718 10.4853 19.7836C10.7613 19.4763 17.2432 12.1998 17.2432 7.2432C17.2432 3.2493 13.9939 0 10 0ZM10 10.8875C7.99055 10.8875 6.35578 9.25266 6.35578 7.2432C6.35578 5.23375 7.99059 3.59898 10 3.59898C12.0094 3.59898 13.6442 5.23379 13.6442 7.24324C13.6442 9.2527 12.0094 10.8875 10 10.8875Z"
											fill="#0077B6" />
									</svg>
									<p>г. Геленджик, ул. Солнцедарская, д. 1з</p>
								</div>
								<div class="mobile__contact-block">
									<svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M9 0C4.0372 0 0 4.0372 0 9C0 13.9628 4.0372 18 9 18C13.9628 18 18 13.9628 18 9C18 4.0372 13.9628 0 9 0ZM13.2803 13.6552C13.134 13.8014 12.942 13.875 12.75 13.875C12.5581 13.875 12.3659 13.8014 12.2198 13.6552L8.46977 9.90527C8.32874 9.76506 8.25005 9.57445 8.25005 9.37505V4.5C8.25005 4.08527 8.58595 3.75005 9 3.75005C9.41405 3.75005 9.74995 4.08527 9.74995 4.5V9.06454L13.2803 12.5947C13.5735 12.8881 13.5735 13.362 13.2803 13.6552Z"
											fill="#0077B6" />
									</svg>
									<p>Ежедневно 9:00 - 18:00</p>
								</div>
								<div class="mobile__contact-block">
									<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_9_280)">
											<path
												d="M17.2324 13.9201C16.0242 12.8867 14.7981 12.2608 13.6047 13.2926L12.8921 13.9162C12.3707 14.3689 11.4014 16.484 7.65347 12.1726C3.90635 7.86665 6.1362 7.19621 6.65835 6.74743L7.37484 6.12304C8.56196 5.08889 8.11396 3.78704 7.25776 2.44694L6.74108 1.63524C5.88098 0.29826 4.9444 -0.579789 3.75415 0.452796L3.11103 1.01475C2.58498 1.39797 1.11454 2.64363 0.757861 5.01006C0.328592 7.84948 1.68274 11.101 4.78518 14.6686C7.88372 18.2378 10.9175 20.0306 13.7912 19.9993C16.1795 19.9736 17.6219 18.692 18.073 18.2261L18.7184 17.6633C19.9056 16.6315 19.168 15.581 17.959 14.5453L17.2324 13.9201Z"
												fill="#0077B6" />
										</g>
										<defs>
											<clipPath id="clip0_9_280">
												<rect width="20" height="20" fill="white" />
											</clipPath>
										</defs>
									</svg>
									<a href="callto:+7(999)999-99-99">+7 (999) 999-99-99</a>
								</div>
								<div class="mobile__contact-block">
									<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_9_265)">
											<path
												d="M19.8239 3.97363L13.7583 10.0002L19.8239 16.0267C19.9335 15.7975 20 15.5441 20 15.2736V4.72672C20 4.45613 19.9335 4.20281 19.8239 3.97363Z"
												fill="#0077B6" />
											<path
												d="M18.2422 2.96875H1.75785C1.48726 2.96875 1.23394 3.03527 1.00476 3.14492L8.75722 10.8583C9.44269 11.5438 10.5574 11.5438 11.2428 10.8583L18.9953 3.14492C18.7661 3.03527 18.5128 2.96875 18.2422 2.96875Z"
												fill="#0077B6" />
											<path
												d="M0.176172 3.97363C0.0665234 4.20281 0 4.45613 0 4.72672V15.2736C0 15.5442 0.0665234 15.7975 0.176172 16.0267L6.24176 10.0002L0.176172 3.97363Z"
												fill="#0077B6" />
											<path
												d="M12.9297 10.8286L12.0714 11.6869C10.9293 12.8291 9.07078 12.8291 7.92863 11.6869L7.07035 10.8286L1.00476 16.8551C1.23394 16.9648 1.48726 17.0313 1.75785 17.0313H18.2422C18.5128 17.0313 18.7661 16.9648 18.9953 16.8551L12.9297 10.8286Z"
												fill="#0077B6" />
										</g>
										<defs>
											<clipPath id="clip0_9_265">
												<rect width="20" height="20" fill="white" />
											</clipPath>
										</defs>
									</svg>
									<a href="mailto:ffgel@mail.ru">ffgel@mail.ru</a>
								</div>
							</div>
							<div class="mobile__social-wrap">
								<a href="https://t.me/FedFGel">
									<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="15.5" cy="16.5" r="10.5" fill="#0077B6" />
										<path
											d="M15 0C6.71323 0 0 6.71419 0 15C0 23.2858 6.71419 30 15 30C23.2868 30 30 23.2858 30 15C30 6.71419 23.2858 0 15 0ZM22.3674 10.2765L19.9055 21.8777C19.7235 22.7003 19.2339 22.8997 18.5506 22.5126L14.8006 19.7487L12.9919 21.4906C12.7926 21.69 12.6232 21.8594 12.2361 21.8594L12.5023 18.0426L19.4516 11.7639C19.7545 11.4977 19.3848 11.3468 18.9852 11.6129L10.3965 17.0197L6.69484 15.8642C5.89065 15.6106 5.87226 15.06 6.86419 14.6729L21.3261 9.09581C21.9977 8.85387 22.5842 9.25935 22.3665 10.2755L22.3674 10.2765Z"
											fill="white" />
									</svg>
								</a>
								<a href="https://www.youtube.com/channel/UCZKJ_spSZ-fmnmCdxBakQaQ">
									<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="15" cy="15" r="15" fill="white" />
										<path
											d="M25.217 10.1134C25.0923 9.66768 24.8546 9.26171 24.527 8.9348C24.1994 8.60788 23.7929 8.3711 23.3469 8.24738C21.6728 7.79983 14.9428 7.79983 14.9428 7.79983C14.9428 7.79983 8.22549 7.78909 6.53393 8.24738C6.08866 8.37164 5.68297 8.60868 5.35609 8.93556C5.0292 9.26245 4.79217 9.66813 4.66791 10.1134C4.34999 11.8273 4.19341 13.5671 4.20023 15.3102C4.19712 17.0449 4.35368 18.7762 4.66791 20.4822C4.79257 20.9277 5.02968 21.3337 5.35645 21.6612C5.68322 21.9886 6.08869 22.2266 6.53393 22.3523C8.20805 22.7998 14.9428 22.7998 14.9428 22.7998C14.9428 22.7998 21.656 22.7998 23.3469 22.3523C23.7929 22.2272 24.1991 21.9894 24.5267 21.6619C24.8542 21.3344 25.0919 20.9282 25.217 20.4822C25.525 18.7772 25.6753 17.0434 25.6645 15.3102C25.6753 13.5656 25.5283 11.8291 25.217 10.1134V10.1134ZM12.7929 18.5222V12.0841L18.395 15.3102L12.7929 18.5222Z"
											fill="#0077B6" />
									</svg>
								</a>
								<a href="https://vk.com/ffgel">
									<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="15" cy="15" r="15" fill="white" />
										<rect x="4" y="9" width="22" height="13" fill="#0077B6" />
										<path
											d="M5.94 7.4249C3.8313 9.27014 1.8 8.76506 1.8 14.7046V17.4062C1.8 23.3458 3.8313 21.1798 5.94 23.0249C8.04884 24.8701 7.68697 26.3249 14.475 26.3249H16.425C23.2131 26.3249 24.5313 25.4701 26.64 23.6249C28.7488 21.7798 28.02 21.7708 28.02 15.8312V13.5081C28.02 7.56848 27.2588 8.37008 25.15 6.5249C23.0413 4.67979 22.4631 2.3999 15.675 2.3999H14.475C7.6869 2.3999 8.04878 5.57978 5.94 7.4249ZM5.1375 10.3844H8.56253C8.67503 15.3937 11.2 17.5156 13.2 17.9531V10.3843H16.425V14.7046C18.4 14.5187 20.475 12.5499 21.175 10.3843H24.4C24.1361 11.5074 23.6103 12.5709 22.8554 13.5081C22.1004 14.4453 21.1326 15.2361 20.0125 15.8312C21.2632 16.3745 22.3679 17.1438 23.2535 18.0885C24.1391 19.0331 24.7855 20.1314 25.15 21.3109H21.6C21.2729 20.2864 20.6072 19.3692 19.6866 18.6746C18.7659 17.9799 17.6312 17.5386 16.425 17.4062V21.3109H16.0375C9.20003 21.3109 5.30003 17.2094 5.1375 10.3844Z"
											fill="white" />
									</svg>
								</a>
							</div>
						</div>
					</div>
					<h4 class="mobile__name">Геленджикская городская<br>общественная организация<br>«Федерация футбола
						города–<br>курорта
						Геленджик»</h4>
				</div>
			</div>
		</header>
