<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental-Buku | @yield('title')</title>

    {{-- cdn bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        in  tegrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main d-flex flex-column justify-content-between">
        {{-- navbar --}}
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-book"></i>
                    <b>Rents Books</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#openClose"
                    aria-controls="openClose" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-lg-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a style="margin-right: 30px;" class="nav-link dropdown-toggle second-text fw-bold"
                                href="/dashboard" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-user me-2"></i>{{Auth::User()->name}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/logout"
                                        style="background-color:rgb(255, 255, 255)"><i class="bi bi-box-arrow-left"> Logout</i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- end navbar --}}

        {{-- content --}}
        <div class="body-main h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="openClose">
                    <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif><i
                            class="fas fa-home p-2"></i>Dashboard</a>
                    <a href="/users" @if(request()->route()->uri == 'users') class='active' @endif><i
                            class="fas fa-user p-2"></i>User</a>
                    <a href="/book" @if(request()->route()->uri == 'book') class='active' @endif><i
                            class="fas fa-book p-2"></i>Books</a>
                    <a href="/category" @if(request()->route()->uri == 'category') class='active' @endif><i
                            class="fas fa-tags p-2"></i>Category</a>
                    <a href="/rentlog" @if(request()->route()->uri == 'rentlog') class='active' @endif><i
                            class="fas fa-bookmark p-2"></i>Rent Logs</a>
                    <a href="/pesan" @if(request()->route()->uri == 'pesan') class='active' @endif><i
                            class="bi bi-chat-fill p-2"></i>Message</a>
                    <a href="/logout"><i class="bi bi-box-arrow-left p-2"></i>Logout</a>
                </div>
                <div class="content col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
        {{-- end content --}}
    </div>

    {{-- scrript --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

</body>

</html>
