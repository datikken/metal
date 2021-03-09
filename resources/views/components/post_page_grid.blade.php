<div class="section services overlap">
    <div class="container">
        <div class="row no-gutter">
            <div class="row">
                @foreach($posts as $post)

                    <div class="col-sm-6 col-md-4">
                        <div class="feature-box-8">
                            <div class="media">
                                <a href="/work/{{ $post->id }}">
                                    <img src="http://t1167801.tmpl24.ru/upload/information_system_17/1/7/5/item_175/small_item_175.jpg"
                                         alt="Гидроабразивная резка" class="img-responsive">
                                </a>
                            </div>
                            <div class="body"><a href="/services/gidroabrazivnaya-rezka/" class="title">Гидроабразивная
                                    резка</a>
                                <p><span>Есть много вариантов Lorem Ipsum.&nbsp;</span></p><a
                                    href="/services/gidroabrazivnaya-rezka/" class="readmore">Подробнее</a></div>
                        </div>
                    </div>
                @endforeach
            </div>

            {!! $posts->links() !!}

        </div>
    </div>
</div>
