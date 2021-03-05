<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="footer-item">
                    <img src="./images/logo-light.png" alt="logo bottom" class="logo-bottom">
                    <p>За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке,
                        некоторые - намеренно (например, юмористические варианты).</p>
                    <div class="footer-sosmed">
                        <a href="#" title="">
                            <div class="item">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </a>
                        <a href="#" title="">
                            <div class="item">
                                <i class="fa fa-twitter"></i>
                            </div>
                        </a>
                        <a href="#" title="">
                            <div class="item">
                                <i class="fa fa-instagram"></i>
                            </div>
                        </a>
                        <a href="#" title="">
                            <div class="item">
                                <i class="fa fa-pinterest"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="footer-item">
                    <div class="footer-title">
                        Последние новости
                    </div>


                    <ul class="recent-post">
                        <li>
                            <a href="/news/pervaya-novost/">Большой заголовок первой новость в две строки</a>
                            <span class="date"><i class="fa fa-clock-o"></i> 03 апреля 2019 г.</span>
                        </li>
                        <li>
                            <a href="/news/bolshoj-zagolovok-vtoroj-novost-v-dve-stroki/">Большой заголовок второй
                                новость в две строки</a>
                            <span class="date"><i class="fa fa-clock-o"></i> 05 апреля 2019 г.</span>
                        </li>
                    </ul>


                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="footer-item">
                    <div class="footer-title">
                        Услуги
                    </div>
                    <ul class="list">
                        <li>
                            <a href="/services/gidroabrazivnaya-rezka/">Гидроабразивная резка</a>
                        </li>
                        <li>
                            <a href="/services/poroshkovaya-okraska/">Порошковая окраска</a>
                        </li>
                        <li>
                            <a href="/services/tokarnaya-obrabotka-detalej/">Токарная обработка деталей</a>
                        </li>
                        <li>
                            <a href="/services/frezernaya-obrabotka-detalej/">Фрезерная обработка деталей</a>
                        </li>
                        <li>
                            <a href="/services/lazernaya-rezka-metalla/">Лазерная резка металла</a>
                        </li>
                        <li>
                            <a href="/services/shtampovka-gibka-svarka-detalej/">Штамповка и гибка деталей</a>
                        </li>
                    </ul>

                </div>
            </div>


            <div class="col-sm-3 col-md-3">
                <div class="footer-item">
                    <div class="footer-title">
                        Компания
                    </div>
                    <ul class="list">
                        <li>
                            <a href="/" title="Главная">Главная</a>
                        </li>
                        <li>
                            <a href="/company/" title="О компании">О компании</a>
                        </li>
                        <li>
                            <a href="/services/" title="Услуги">Услуги</a>
                        </li>
                        <li>
                            <a href="/work/" title="Наши работы">Наши работы</a>
                        </li>
                        <li>
                            <a href="/news/" title="Новости">Новости</a>
                        </li>
                        <li>
                            <a href="/contacts/" title="Контакты">Контакты</a>
                        </li>
                    </ul>

                </div>
            </div>


        </div>
    </div>

    <div class="fcopy">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <p class="ftex">© «Металлообработка» – Изготовление узлов и деталей оборудования, 2019. Система
                        управления – <a href="https://hostcms.ru">HostCMS</a></p>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/jquery.superslides.js"></script>
<script type="text/javascript" src="./js/owl.carousel.js"></script>
<script type="text/javascript" src="./js/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="./js/easings.js"></script>
<script type="text/javascript" src="./js/isotope.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="./js/modernizr.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
<script>
    function callbackform() {
        $.fancybox.open({
            src: '/contacts.blade.php/callback/?newform',
            type: 'ajax'
        });
    }

    $(document).ready(function () {
        $('body').on('click', '#form2 #button_form2', function () {
            $.loadingScreen('show');
            $('.ajax-result-form2').load('/contacts.blade.php/callback/', {
                name_c: document.getElementById('name_c').value,
                phone_c: document.getElementById('phone_c').value,
                action_c: document.getElementById('action_c').value
            });
        });
        $('body').on('click', '#form3 #button_form3', function () {
            $.loadingScreen('show');
            $('.ajax-result-form3').load('/contacts.blade.php/feedback/', {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                email: document.getElementById('email').value,
                text: document.getElementById('text').value,
                action: document.getElementById('action').value,
                Submit: document.getElementById('button_form3').value
            });
        });
    });
</script>
