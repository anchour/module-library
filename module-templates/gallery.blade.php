<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!}>
    <div class="container">
        @include('partials.flexible-layout.headline')
        <div class="{!! apply_filters('App/Theme/PageRowClasses', 'row') !!} gallery-row">
            @php($images = get_sub_field('gallery'))
            @if($images)
                @foreach($images as $image)
                    <a href="{!! $image['url'] !!}" class="col-12 col-md-4">
                        {!! wp_get_attachment_image( $image['ID'], 'large' ) !!}
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</section>
