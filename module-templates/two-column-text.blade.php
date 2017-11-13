@php($img = (get_sub_field('background_image') && get_sub_field('style') === 'Image') ? get_sub_field('background_image') : '')
<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!} style="background-image:url({{$img}});">
    <div class="container">
        @include('partials.flexible-layout.headline')

        <div class="{!! apply_filters('App/Theme/PageRowClasses', 'row') !!}">
            <div class="col-12 col-lg-6">
                {!! get_sub_field('left_column_text') !!}
            </div>
            <div class="col-12 col-lg-6">
                {!! get_sub_field('right_column_text') !!}
            </div>
        </div>
    </div>
</section>
