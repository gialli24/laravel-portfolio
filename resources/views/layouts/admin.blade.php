<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>

    @include('admin.partials.sidebar')
    @include('admin.partials.topbar')

    @yield('content')


    <script>
        // Gestione responsiva della sidebar su schermi piccoli
            const toggleBtn = document.getElementById('toggleSidebar');
            const sidebar = document.getElementById('sidebar');
    
            toggleBtn.addEventListener('click', (e) => {
                sidebar.classList.toggle('active');
                e.stopPropagation();
            });
    
            // Chiude la sidebar se clicchi fuori (su mobile)
            document.addEventListener('click', (e) => {
                if (window.innerWidth < 992) {
                    if (!sidebar.contains(e.target) && e.target !== toggleBtn) {
                        sidebar.classList.remove('active');
                    }
                }
            });
    </script>
</body>

</html>