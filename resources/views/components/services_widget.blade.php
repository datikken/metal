<div class="widget categories">
    <ul class="category-nav">

        @foreach (Service::get_services() as $service)
            <li>
                <a href="{{ '/' . Category::getById($service->category_id)[0]->name }}/{{ $service->id }}">{{ $service->title }}</a>
            </li>
        @endforeach

    </ul>
</div>
