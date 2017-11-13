@php($img = (get_sub_field('background_image') && get_sub_field('style') === 'Image') ? get_sub_field('background_image') : '')
<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!} style="background-image:url({{$img}});">
    <div class="container">
        @include('partials.flexible-layout.headline')
        <div class="{!! apply_filters('App/Theme/PageRowClasses', 'row') !!}">
            @if(have_rows('sections'))
                @while(have_rows('sections'))
                    @php(the_row())
                    <article class="col-12 col-md-4 text-center">
                        <img src="{{get_sub_field('image')}}">
                        <a href="{{get_sub_field('link')}}" class="button button--large button--green">{{get_sub_field('button_text')}}</a>
                        <a href="{{get_sub_field('link')}}">Learn More ></a>
                    </article>
                @endwhile
            @endif
        </div>
    </div>
</section>
