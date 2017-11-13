<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!}>
    <div class="container">
        @include('partials.flexible-layout.headline', compact('title'))

        @php
          $display_style = get_sub_field('display_style');
          $section_alignment = get_sub_field('text_alignment');
        @endphp

        <div class="row no-padding justify-content-center{{ $display_style === 'Inline' ? ' flex-lg-nowrap' : '' }}">
            @while (have_rows('sections'))
                @php(the_row())

                @include('partials.icon-text-section-block', compact('display_style', 'section_alignment'))
            @endwhile
        </div>

        @if (get_sub_field('button_text') && get_sub_field('button_link'))
            <div class="row no-padding justify-content-center button-row">
                <a href="{{ get_sub_field('button_link') }}"
                   class="hero__button button button--large button--{{ get_sub_field('button_style') }}"
                >
                    {{ get_sub_field('button_text') }}
                </a>
            </div>
        @endif

    </div>
</section>
