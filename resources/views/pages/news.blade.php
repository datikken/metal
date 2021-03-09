@extends('layouts.app')


@section('content')
    @include('components.post_page_parallax.blade.php', [
        'heading' => 'Новости',
        'crumb' => 'Новости'
    ])
    <div class="section why overlap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="box-news-1">
                        <div class="media gbr">
                            <img src="http://t1167801.tmpl24.ru/upload/information_system_18/1/6/7/item_167/small_item_167.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="/news/pervaya-novost/" title="">Большой заголовок первой новость в две строки</a>
                            </div>
                            <div class="meta">
                                <span class="date"><i class="fa fa-clock-o"></i> 03 апреля 2019 г.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="box-news-1">
                        <div class="media gbr">
                            <img src="http://t1167801.tmpl24.ru/upload/information_system_18/1/5/9/item_159/small_item_159.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="/news/bolshoj-zagolovok-vtoroj-novost-v-dve-stroki/" title="">Большой заголовок второй новость в две строки</a>
                            </div>
                            <div class="meta">
                                <span class="date"><i class="fa fa-clock-o"></i> 05 апреля 2019 г.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="box-news-1">
                        <div class="media gbr">
                            <img src="http://t1167801.tmpl24.ru/upload/information_system_18/1/5/8/item_158/small_item_158.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title">
                                <a href="/news/bolshoj-zagolovok-tretej-novost-v-dve-stroki/" title="">Большой заголовок третьей новость в две строки</a>
                            </div>
                            <div class="meta">
                                <span class="date"><i class="fa fa-clock-o"></i> 07 апреля 2019 г.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <ul class="pagination">
                        <li class="active">
                            <a href="javascript:void(0);">1</a>
                        </li>
                        <li>
                            <a href="/news/page-2/">2</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
