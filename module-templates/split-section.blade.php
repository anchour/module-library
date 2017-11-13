<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!}>
    @if(have_rows('columns'))
        @php($col_count = 1)
        @while(have_rows('columns'))
            @php(the_row())
            @php($img = (get_sub_field('background_image') && (get_sub_field('style') === 'light-image' || get_sub_field('style') === 'dark-image')) ? get_sub_field('background_image') : '')
            <div class="split-section-bg split-section-bg-{{$col_count}} page-row--{{get_sub_field('style')}}" style="background-image:url({{$img}});"></div>
            @php($col_count++)
        @endwhile
    @endif
    <div class="container">
        <div class="{!! apply_filters('App/Theme/PageRowClasses', 'row') !!}">
            @if(have_rows('columns'))
                @while(have_rows('columns'))
                    @php(the_row())
                    <div class="col-12 col-lg-6 page-row--{{get_sub_field('style')}}">
                        {!! get_sub_field('content') !!}
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
