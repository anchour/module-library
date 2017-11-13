@php($img = (get_sub_field('background_image') && get_sub_field('style') === 'Image') ? get_sub_field('background_image') : '')
<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!} style="background-image:url({{$img}});">
    <div class="container">
        @include('partials.flexible-layout.headline')
        <div class="{!! apply_filters('App/Theme/PageRowClasses', 'row') !!}">
            <article class="col-12 col-lg-4">
                @if(get_sub_field('left_column_headline'))
                  <h3>{{ get_sub_field('left_column_headline') }}</h3>
                @endif
                {!! get_sub_field('left_column_text') !!}
            </article>
            <article class="col-12 col-lg-4">
                @if(get_sub_field('middle_column_headline'))
                  <h3>{{ get_sub_field('middle_column_headline') }}</h3>
                @endif
                {!! get_sub_field('middle_column_text') !!}
            </article>
            <article class="col-12 col-lg-4">
                @if(get_sub_field('right_column_headline'))
                  <h3>{{ get_sub_field('right_column_headline') }}</h3>
                @endif
                {!! get_sub_field('right_column_text') !!}
            </article>
        </div>
    </div>
</section>
