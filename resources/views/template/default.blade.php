<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html>
    <head>
        <title>HTML - @yield ('title')</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }

        </style>
        @stack('styles')
    </head>
    <body>
        <div class="container mt-4">
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
