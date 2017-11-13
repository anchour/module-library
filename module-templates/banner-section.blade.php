<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!}>
    <div class="container container-lg">
        <div class="row">
            <div class="col">
                {!! get_sub_field('content') !!}
            </div>
        </div>
    </div>

    @if (have_rows('images'))
    <div class="row no-gutters no-padding banner-image">
        <div class="col">
            <div class="slick-carousel" data-autoplay="true" data-autoplay-speed="4000" data-lazyload-type="progressive">
                @while(have_rows('images'))
                    @php(the_row())

                    {!! wp_get_attachment_image(get_sub_field('image'), 'page-banner') !!}
                @endwhile
            </div>
        </div>
    </div>
    @endif

    @if ($content_after = get_sub_field('content_after_image'))
        <div class="container container-xl">
            <div class="row banner-image-caption">
                <div class="col-12">
                    <p>
                        {!! $content_after !!}
                    </p>
                </div>
            </div>
        </div>
    @endif
</section>
