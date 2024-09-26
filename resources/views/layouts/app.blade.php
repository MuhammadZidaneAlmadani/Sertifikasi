<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nama Perusahaan')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="main-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            @include('layouts.sidebar')
        </aside>

        <!-- Main Content -->
        <section class="content">
            @yield('content')
        </section>
    </div>

    @include('layouts.footer')

</body>
</html>
