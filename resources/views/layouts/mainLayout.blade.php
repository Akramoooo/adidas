<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @yield('links')
    <title>@yield('title')</title>
</head>

<body>
    <header>
        @include("includes.header")
    </header>



    <section>
        @yield('content')
    </section>



    <footer>
        @include("includes.footer")
    </footer>


    @yield('scripts')

    <script src="js/header_hovers/men_hover.js"></script>
    <script src="js/header_hovers/women_hover.js"></script>
    <script src="js/header_hovers/kids_hover.js"></script>
    <script src="js/header_hovers/sale_hover.js"></script>
    <script src="js/header_hovers/burger_btn.js"></script>


</body>

</html>