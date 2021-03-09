<div class="section why overlap">
    <div class="container">
        <div class="row grid-services" style="position: relative; height: 390px;">
            @foreach($posts as $post)
                <div class="col-sm-6 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                    <div class="box-image-4">
                        <a href="{{ '/' . Category::getById($post->category_id)[0]->name }}/{{ $post->id }}">
                            <div class="media">
                                <img
                                    src="http://t1167801.tmpl24.ru/upload/information_system_21/0/0/9/group_9/small_group_9.jpg"
                                    alt="" class="img-responsive">
                            </div>
                            <div class="body">
                                <div class="content">
                                    <h4 class="title">Металлообработка</h4>
                                    <span
                                        class="category"><p><span>Есть много вариантов Lorem Ipsum.&nbsp;</span></p></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {!! $posts->links() !!}

    </div>
</div>
