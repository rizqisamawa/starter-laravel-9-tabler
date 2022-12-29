<!DOCTYPE html>
<html lang="in">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, viewport-fit=cover"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>
            Dashboard - Tabler - Premium and Open Source dashboard template with
            responsive and high quality UI.
        </title>
        @include('layouts.styles')
    </head>
    <body>
        <div class="wrapper">
            @include('layouts.sidebar')

            <div class="page-wrapper">
                <div class="container-xl">
                    <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            @yield('content-header')
                        </div>
                    </div>
                </div>

                <div class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            @yield('content')
                        </div>
                    </div>
                </div>

                @include('layouts.footer')
            </div>
        </div>

        @include('layouts.scripts')
    </body>
</html>
