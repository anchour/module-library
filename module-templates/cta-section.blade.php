<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!}>
    <div class="container container-lg">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="cta-section__header text-center">
                    @if(get_sub_field('header'))
                        <h2 class="cta-section__title">
                            {!! apply_filters('App/Theme/cta_section_header', get_sub_field('header')) !!}
                        </h2>
                    @endif

                    @if(get_sub_field('content'))
                        <div class="cta-section__subtitle">
                            {!! apply_filters('App/Theme/cta_section_subtitle', get_sub_field('content')) !!}
                        </div>
                    @endif

                    @php($multi = count(get_sub_field('buttons')) > 1 ? 'multi' : 'singular')
                    @if(have_rows('buttons'))
                        <div class="row button-row-{{$multi}}">
                            @while(have_rows('buttons'))
                                @php(the_row())
                                <a href="{{get_sub_field('button_link')}}"
                                    class="button button--{{get_sub_field('button_style')}}"
                                >{{get_sub_field('button_text')}}</a>
                            @endwhile
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
