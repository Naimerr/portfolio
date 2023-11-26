<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>
    <main>
        @yield('content')
    </main>

    <!-- <footer>
        @include('partials.footer')
    </footer> -->
    
    <footer class="footer">
        <div class="container">
            <div class="social-icons">
                <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <!-- Add more social media icons with links -->
            </div>
        </div>
    </footer>
</body>
</html>
