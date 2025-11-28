<!-- resources/views/layout/layout_admin.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Page')</title>

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <style>
        /* Flex layout agar header/footer tetap, main mengisi sisa layar */
        /* html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1; */
        /* isi sisa layar */
        /* padding: 1rem 0; */
        /* jarak atas/bawah optional */
        /* } */

        /* Optional: pastikan footer tidak terlalu tinggi */
        /* footer,
        section.bg-success {
            flex-shrink: 0;
        } */
    </style>
</head>

<body>

    <!-- Header -->

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>