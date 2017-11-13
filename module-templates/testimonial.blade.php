<section {!! apply_filters('App/Theme/PageRowAttributes', '') !!}>
    <div class="container container-md">
        <div class="row">
            <div class="col text-center">
                <div class="quote">
                    {!! get_sub_field('text') !!}
                </div>
                <label>{{ get_sub_field('attribution') }}</label>
            </div>
        </div>
    </div>
</section>
