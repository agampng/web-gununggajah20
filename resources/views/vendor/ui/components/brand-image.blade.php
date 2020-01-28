@if(strlen(config('laravolt.ui.brand_image')) > 0)
    <img src="{{ asset(config('laravolt.ui.brand_image')) }}" class="ui image centered" alt="" style="width:  60px; margin-top: 20px">
@endif
