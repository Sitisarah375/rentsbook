<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rents book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-dark navbar-expand-lg bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/books.png" alt="Logo" width="60" height="30" class="d-inline-block align-text-top">
                <b>Rents Books</b>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Comic</a></li>
                            <li><a class="dropdown-item" href="#">Novel</a></li>
                            <li><a class="dropdown-item" href="#">Fiction</a></li>
                            <li><a class="dropdown-item" href="#">History</a></li>
                            <li><a class="dropdown-item" href="#">Drama</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Romance</a></li>
                            <li><a class="dropdown-item" href="#">Sport</a></li>
                            <li><a class="dropdown-item" href="#">Thiller</a></li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li><a class="dropdown-item" href="#">Slice Of Life</a></li>
                            <li><a class="dropdown-item" href="#">Comedy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        @guest
                        <a class="btn btn-outline-light" href="/index-login">Login</a>
                        @endguest
                        @auth
                        <a class="btn btn-outline-light" href="/logout">Logout</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Akhir Navbar --}}
    @if (Session::get('dangerlog'))
    <div class="alert alert-danger">
      {{Session::get('dangerlog')}}
    </div>
    @endif
    {{-- Corousel --}}
    <div id="carouselExampleInterval" class="carousel slide" style="max-height: 420px; max-width:100%"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/images/book1.jpg" class="d-block w-100" alt="..." style="max-height: 420px; max-width:100%">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/images/book2.jpg" class="d-block w-100" alt="..." style="max-height: 420px; max-width:100%">
            </div>
            <div class="carousel-item">
                <img src="/images/book3.jpg" class="d-block w-100" alt="..." style="max-height: 420px; max-width:100%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Akhir Corousel --}}

    {{-- Jumbotron --}}
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-4">
                <h2>Sarah Rent Books</h2>
                <a href="/index-register" class="btn btn-outline-primary">Daftar Sekarang</a>
            </div>
            <div class="col-8">
                <p>Website berbayar untuk meminjam beraneka ragam jenis buku dan di baca secara online dan mudah.<br>Ayo
                    klik daftar sekarang!</p>
            </div>
        </div>
    </div>
    {{-- Akhir Jumbotron --}}

    {{-- card --}}
    <section style="background-color:rgb(244, 241, 241);">
        <div class="container mt-3">
            <div class="row text-center">
                <h2 class="mt-2">Popular Books</h2>
                <hr class="solid">
                <div class="row mt-4 ms-5">
                    <div class="col-lg-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.pinimg.com/564x/cb/2f/7b/cb2f7b25bb98118db21be81fa05c5087.jpg"
                                class="card-img-top" alt="..." style="max-height: 450px">
                            <div class="card-body">
                                <h5 class="card-title">Horror</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-danger w-100">Reading</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.pinimg.com/564x/ab/12/b8/ab12b89f32a1b73c50ff812e142f851a.jpg"
                                class="card-img-top" alt="..." style="max-height: 450px">
                            <div class="card-body">
                                <h5 class="card-title">Comedy</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-danger w-100">Reading</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.pinimg.com/564x/72/cc/95/72cc9579d811281cd9fec1e472fdc7cb.jpg"
                                class="card-img-top" alt="..." style="max-height: 450px">
                            <div class="card-body">
                                <h5 class="card-title">Thiller</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-danger w-100">Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    {{-- Akhir Card --}}

    {{-- Messege --}}
    <div class="container mt-4">
        <div class="row text-center">
            <h2>Messege</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form method="POST" action="{{route('store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Messege</label>
                        <textarea name="pesan" class="form-control" id="pesan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Send</button>
                </form>
            </div>
        </div>
    </div>
    {{-- Akhir Messege --}}

    {{-- footer --}}
    <footer class="mt-5 bg-danger text-center" style="height: 40px">
        <p>Created by <a href="#" style="text-decoration: none; color:white" target="_blank">Siti Sarah Aura Rozak</a>
        </p>
    </footer>
    {{-- Akhir Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>

</html>
