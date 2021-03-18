<div class="header">
    <div class="topbar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6">
                    <div class="topbar-left">
                        <div class="welcome-text">
                            Качественная металлобработка по низким ценам
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6">
                    <div class="topbar-right">
                        <ul class="topbar-menu">
                            <li><a href="/contacts/">Обратная связь</a></li>
                            <li><a href="/contacts/">Контактная информация</a></li>
                        </ul>
                        <ul class="topbar-sosmed">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="topbar-logo">
        <div class="container">
            <div class="contact-info">
                <div class="box-icon-1">
                    <div class="icon">
                        <div class="fa fa-envelope-o"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">Электронная почта</div>
                        info@mysite.ru
                    </div>
                </div>
                <div class="box-icon-1">
                    <div class="icon">
                        <div class="fa fa-phone"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">Телефон</div>
                        8 (495) 123-45-67
                    </div>
                </div>
                <a id="contact_form_trigger" class="btn btn-cta pull-right">Обратный звонок</a>
            </div>
        </div>
    </div>

    <div class="navbar navbar-main">
        <div class="container container-nav">
            <div class="rowe">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <a class="navbar-brand" href="/">
                    <img src="http://t1167801.tmpl24.ru/images/t1167801/images/logo.png" alt=""/>
                </a>

                <nav class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                            <a href="/">Главная</a>
                        </li>
                        <li class="{{ (request()->is('company')) ? 'active' : '' }}">
                            <a href="/company/">О компании</a>
                        </li>
                        <li class="dropdown {{ (request()->is('services')) ? 'active' : '' }}">
                            <a href="/services/"
                               class="dropdown-toggle"
                               data-toggle="dropdown"
                               data-hover="dropdown">
                                Услуги
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach (Service::get_services() as $service)
                                    <li>
                                        <a href="{{ '/' . Category::getById($service->category_id)[0]->name }}/{{ $service->id }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ (request()->is('work')) ? 'active' : '' }}">
                            <a href="/work/">Наши работы</a>
                        </li>
                        <li class="{{ (request()->is('news')) ? 'active' : '' }}">
                            <a href="/news/">Новости</a>
                        </li>
                        <li class="{{ (request()->is('contacts')) ? 'active' : '' }}">
                            <a href="/contacts/">Контакты</a>
                            </liclass>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</div>
