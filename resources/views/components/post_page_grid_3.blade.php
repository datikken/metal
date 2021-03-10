<div class="section why overlap">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-sm-6 col-md-4">
                <div class="box-news-1">
                    <div class="media gbr">
                        <img src="http://t1167801.tmpl24.ru/upload/information_system_18/1/5/9/item_159/small_item_159.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="body">
                        <div class="title">
                            <a href="{{ '/' . Category::getById($post->category_id)[0]->name }}/{{ $post->id }}" title="">
                                {{ $post->title }}
                            </a>
                        </div>
                        <div class="meta">
                            <span class="date"><i class="fa fa-clock-o"></i> 05 апреля 2019 г.</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        @include('components.pagination')


    </div>
</div>
