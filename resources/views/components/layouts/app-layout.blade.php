<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- Logo --}}
    <link rel="icon" href="{{ asset('images/vimeo.svg') }}" type="image/svg+xml">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    {{-- Notyf --}}
    <link rel="stylesheet" href="{{ asset('notyf/notyf.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
    @livewireStyles
    @stack('wire-loading')
</head>

<body class="antialiased">
    <main>
        {{ $slot }}
    </main>
    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    {{-- Sweet Alert --}}
    <script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>
    {{-- Notyf --}}
    <script src="{{ asset('notyf/notyf.min.js') }}"></script>
    @livewireScripts
    <script>
                // waiting for DOM loaded
        // document.addEventListener('DOMContentLoaded', function () {
        //                             // listen for the event
        //                             window.livewire.on('urlChanged', param => {
        //                                     // pushing on the history by passing the current url with the param appended
        //                                     history.pushState(null, null, `${document.location.pathname}?${param}`);
        //                                     });
        //                             });
        var notyf = new Notyf({
                            delay:2000,
                            position: {
                                x:'right',
                                y:'top',
                            }
                            });
        window.addEventListener('notyf:success', event => {
            notyf.success(event.detail.message);
        });
        window.addEventListener('notyf:delete', event => {
            notyf.error(event.detail.message);
        });
        window.addEventListener('closeModal', event => {
            $("#confirmModal").modal('hide');
        });
        window.addEventListener('openModal', event => {
            $("#confirmModal").modal('show');
        });
        window.addEventListener('closeDeleteModal', event => {
            $("#deleteModal").modal('hide');
        });
        window.addEventListener('openDeleteModal', event => {
            $("#deleteModal").modal('show');
        });
        
    </script>
</body>

</html>
