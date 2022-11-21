<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Laravel">
        <meta name="description"
            content="Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">
        <link rel="canonical" href="{{ env('APP_URL') }}" />
        <title>{{ env('APP_NAME', 'Laravel') }}</title>

        <!-- Fonts Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        <header>
            @include('layouts.navigation')
        </header>
        <main class="bg-dark">
            {{ $slot }}
        </main>
        <footer>
            <!-- Footer -->
        </footer>

        <script>
            var navbar = document.querySelector('#navbar');
            window.addEventListener("scroll", function () {
                if (window.pageYOffset > 50) {
                    navbar.classList.add("sticky", "bg-white", "shadow-sm", "navbar-light");
                    navbar.classList.remove("bg-transparent", "navbar-dark");
                } else {
                    navbar.classList.remove("sticky", "bg-white", "shadow-sm", "navbar-light");
                    navbar.classList.add("bg-transparent", "navbar-dark");
                }
            });
        </script>
    </body>

</html>
