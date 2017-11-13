<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!}>
    <div class="container">
        <div class="{{ apply_filters('App/Theme/TextImageOrder', get_sub_field('order')) }}">
            <div class="col-12 col-lg-6 text-col">
                @include('partials.flexible-layout.headline')
                {!! get_sub_field('text') !!}
                @if(get_sub_field('button_link'))
                    <a href="{{ get_sub_field('button_link') }}"
                       class="button button--large button--{{ get_sub_field('button_style') }}"
                    >
                        {{ get_sub_field('button_text') }}
                    </a>
                @endif
            </div>

            <div class="col-12 col-lg-6 image-col">
                {!! apply_filters('App/Themes/LazyloadedImage', get_sub_field('image'), 'page-row-image') !!}
            </div>
        </div>
    </div>
</section>
