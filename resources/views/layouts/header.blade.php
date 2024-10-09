<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #186858;
        }
        .nav-link {
            color: #fff;
        }
        .nav-link.active {
            background-color: #48c5ad;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <!-- <a class="navbar-brand" href="#">My Application</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pages.create') ? 'active' : '' }}" href="{{ route('pages.create') }}">Create Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pages.index') ? 'active' : '' }}" href="{{ route('pages.index') }}">Pages</a>
                </li>
                
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>
</html>
