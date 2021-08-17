<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">

        <!-- Scripts -->
        @routes
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    </head>
    <body class="main">
        @inertia

        <script src="{{ mix('dist/js/app.js') }}"></script>
        <script>
            feather.replace()
        </script>

{{-- <script>
    (function (cash) {
        "use strict";

        // Side Menu
        cash(".side-menu").on("click", function () {
            if (cash(this).parent().find("ul").length) {
                if (
                    cash(this).parent().find("ul").first()[0].offsetParent !== null
                ) {
                    cash(this)
                        .find(".side-menu__sub-icon")
                        .removeClass("transform rotate-180");
                    cash(this).removeClass("side-menu--open");
                    Velocity(cash(this).parent().find("ul").first(), "slideUp", {
                        duration: 300,
                        complete: function (el) {
                            cash(el).removeClass("side-menu__sub-open");
                        },
                    });
                } else {
                    cash(this)
                        .find(".side-menu__sub-icon")
                        .addClass("transform rotate-180");
                    cash(this).addClass("side-menu--open");
                    Velocity(cash(this).parent().find("ul").first(), "slideDown", {
                        duration: 300,
                        complete: function (el) {
                            cash(el).addClass("side-menu__sub-open");
                        },
                    });
                }
            }
        });
    })(cash);

    (function (cash) {
    "use strict";

    cash(".top-bar, .top-bar-boxed")
        .find(".search")
        .find("input")
        .each(function () {
            cash(this).on("focus", function () {
                cash(".top-bar, .top-bar-boxed")
                    .find(".search-result")
                    .addClass("show");
            });

            cash(this).on("focusout", function () {
                cash(".top-bar, .top-bar-boxed")
                    .find(".search-result")
                    .removeClass("show");
            });
        });
})(cash);
    </script> --}}


        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
</html>
