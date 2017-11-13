<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!}>
    <div class="container">
        @include('partials.flexible-layout.headline')

        <div class="row">
            @if(have_rows('columns'))
                @php($col_count = 0)
                @while(have_rows('columns'))
                    @php(the_row())
                    @php($col_count++)
                    <div class="col-12 col-lg-6 split-col-{{$col_count}}">
                        @if(get_sub_field('order') === 'image_text')
                            {!! apply_filters('App/Themes/LazyloadedImage', get_sub_field('image'), 'page-row-image') !!}
                        @endif

                        <div class="text-section">
                            <section>
                                @if(get_sub_field('headline'))
                                    <div class="section-heading">
                                        {{ get_sub_field('headline') }}
                                    </div>
                                @endif

                                @if(get_sub_field('text'))
                                    {!! get_sub_field('text') !!}
                                @endif

                                @if(get_sub_field('button_link'))
                                    <a href="{{ get_sub_field('button_link') }}"
                                       class="button button--large button--{{ get_sub_field('button_style') }}"
                                    >
                                        {{ get_sub_field('button_text') }}
                                    </a>
                                @endif
                            </section>
                        </div>

                        @if(get_sub_field('order') === 'text_image')
                            {!! apply_filters('App/Themes/LazyloadedImage', get_sub_field('image'), 'page-row-image') !!}
                        @endif
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
