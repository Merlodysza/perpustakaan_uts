<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>

<body class="bg-dark" style="font-family: 'Poppins', sans-serif;">

<div class="container py-5">

    <div class="bg-dark text-white shadow rounded-5 p-5">>

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h1 class="fw-bold mb-1">
                    @yield('title')
                </h1>

                <p class="text-secondary mb-0">
                    Sistem Pendataan Buku
                </p>
            </div>

            <div>
                <a href="/book"
                   class="btn btn-outline-primary rounded-pill">
                    <i class="bi bi-house"></i>
                    Home
                </a>

                <a href="/book/create"
                   class="btn btn-primary rounded-pill">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Buku
                </a>
            </div>

        </div>

        @yield('content')

    </div>

</div>

</body>
</html>