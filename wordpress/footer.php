        <div class="modal-store modal hidden">
            <div class="modal__dialog">
                <div class="modal__content">
                    <button class="modal__close">&times;</button>
                    <p class="modal__descr modal-violation__descr modal-question-thanks__descr">Скоро открытие</p>
                </div>
            </div>
        </div>
        
        <div class="modal-question-thanks modal hidden">
            <div class="modal__dialog">
                <div class="modal__content">
                    <button class="modal__close">&times;</button>
                    <h2 class="modal__title">Спасибо за оставленный вопрос</h2>
                    <p class="modal__descr modal-violation__descr modal-question-thanks__descr">Мы свяжемся с вами и ответим на него в ближайшее время. Обычно это занимает до 60 минут</p>
                </div>
            </div>
        </div>

        <div class="modal-violation-thanks modal hidden">
            <div class="modal__dialog">
                <div class="modal__content">
                    <button class="modal__close">&times;</button>
                    <h2 class="modal__title">Спасибо за направленую информацию</h2>
                    <p class="modal__descr modal-violation__descr modal-question-thanks__descr">Мы рассмотрим и обработаем ее в ближайшее время</p>
                </div>
            </div>
        </div>
        
        <div class="modal-violation modal hidden">
            <div class="modal__dialog">
                <div class="modal__content">
                    <button class="modal__close">&times;</button>
                    <form class="form" action="POST" data-modal="violation">
                        <h2 class="modal__title">Направить информацию</h2>
                        <p class="modal__descr modal-violation__descr">Функция позволяет своевременно информировать, выявлять и предотвращать организацию договорных матчей,
                        применение допинга и иные факты нарушений принципов честной игры, в том числе несоблюдение этических норм</p>
                        <?php echo do_shortcode('[contact-form-7 id="750" title="Информация о нарушении"]'); ?>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal-question modal hidden">
            <div class="modal__dialog">
                <div class="modal__content">
                    <button class="modal__close">&times;</button>
                    <form class="form" action="POST" data-modal="question">
                        <style> 
                            .form::after{
                                content:'';
                                background: url("<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif") center / 50px no-repeat;
                            }
                        </style>
                        <h2 class="modal__title">Есть вопрос?</h2>
                        <p class="modal__descr">Оставьте заявку и мы свяжемся с вами в ближайшее время</p>
                        <?php echo do_shortcode('[contact-form-7 id="749" title="Вопрос"]'); ?>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt="logo">
                <div class="footer__menu">
                    <div class="footer__wrap">
                        <ul class="footer__links">
                            <li><a href="https://ffgel.ru/about">О нас</a></li>
                            <li><a href="https://ffgel.ru/news">Новости</a></li>
                            <li><a href="https://ffgel.ru/tournaments">Турниры</a></li>
                            <li><a href="https://ffgel.ru/schools">Спортшколы</a></li>
                            <li><a href=https://ffgel.ru/media-photo">Медиа</a></li>
                        </ul>
                        <div class="footer-contact">
                            <div class="footer-contact__wrap">
                                <div class="footer-contact__item">
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
                                <div class="footer-contact__item">
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
                                <div class="footer-contact__item">
                                    <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 0C6.00606 0 2.75676 3.2493 2.75676 7.2432C2.75676 12.1998 9.23875 19.4763 9.51473 19.7836C9.77395 20.0723 10.2265 20.0718 10.4853 19.7836C10.7613 19.4763 17.2432 12.1998 17.2432 7.2432C17.2432 3.2493 13.9939 0 10 0ZM10 10.8875C7.99055 10.8875 6.35578 9.25266 6.35578 7.2432C6.35578 5.23375 7.99059 3.59898 10 3.59898C12.0094 3.59898 13.6442 5.23379 13.6442 7.24324C13.6442 9.2527 12.0094 10.8875 10 10.8875Z"
                                            fill="#0077B6" />
                                    </svg>
                                    <p>г. Геленджик, ул. Солнцедарская, д. 1з</p>
                                </div>
                                <div class="footer-contact__item">
                                    <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 0C4.0372 0 0 4.0372 0 9C0 13.9628 4.0372 18 9 18C13.9628 18 18 13.9628 18 9C18 4.0372 13.9628 0 9 0ZM13.2803 13.6552C13.134 13.8014 12.942 13.875 12.75 13.875C12.5581 13.875 12.3659 13.8014 12.2198 13.6552L8.46977 9.90527C8.32874 9.76506 8.25005 9.57445 8.25005 9.37505V4.5C8.25005 4.08527 8.58595 3.75005 9 3.75005C9.41405 3.75005 9.74995 4.08527 9.74995 4.5V9.06454L13.2803 12.5947C13.5735 12.8881 13.5735 13.362 13.2803 13.6552Z"
                                            fill="#0077B6" />
                                    </svg>
                                    <p>Ежедневно 9:00 - 18:00</p>
                                </div>
                            </div>
                            <div class="footer-contact__social-wrap">
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
                    <span class="footer__line"></span>
                    <div class="footer-info__wrap">
                        <div class="footer__info">
                            <a href="https://ffgel.ru/privacy-policy/">Политика конфиденциальности</a>
                            <a href="https://ffgel.ru/license/">Порядок использования информации</a>
                        </div>
                        <div class="footer__info">
                            <button class="modal-violation__btns">Сообщить о нарушении</button>
                            <button class="modal-question__btns">Форма для связи</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-mobile__info">
                    <span class="footer-mobile__line"></span>
                    <div class="footer-mobile__wrap">
                        <div class="footer-mobile__info-block">
                            <a href="#">Политика конфиденциальности</a>
                            <a href="#">Порядок использования информации</a>
                        </div>
                        <div class="footer-mobile__info-block">
                            <button class="modal-violation__btns">Сообщить о нарушении</button>
                            <button class="modal-question__btns">Форма для связи</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container developed-container">
                <div class="developed">
                    <a href="#">
                        <img class="developed-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/developed.png" alt="developed logo">
                    </a>
                    <span class="developed-line"></span>
                    <a href="#">
                        <p class="developed-descr">Создание сайтов</p>
                    </a>
                </в>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <?php 
            wp_footer();
        ?>
</body>
</html>