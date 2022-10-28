<!DOCTYPE html>
<html lang="en">

<head>
    <title> &right Photo Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/logo.png" width="180" height="70"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Country
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#mond">Mondstad</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#liyue">Liyue</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#inazuma">Inazuma</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#sumeru">Sumeru</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/mond1.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MONDSTAD</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/liye1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>LIYUE</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/inazuma1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>INAZUMA</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/sumeru1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>SUMERU</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <a id="mond">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Mondstad</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/mond1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/mond2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/mond3.jpg" class="img-fluid pb-3">
                    </div>

                </div>
            </div>
        </section>
    </a>
    <a id="liyue">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Liyue</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/liye1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/liyue2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/liyue3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/liyue4.jpg" class="img-fluid pb-3">
                    </div>

                </div>
            </div>
        </section>
    </a>
    <a id="inazuma">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Inazuma</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/inazuma1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/inazuma2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/inazuma3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/inazuma4.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>
    <a id="sumeru">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Sumeru</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/sumeru1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/sumeru2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/sumeru3.jpg" class="img-fluid pb-3">
                    </div>

                </div>
            </div>
        </section>
    </a>

    <a id="contact">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Contact Us</h2>
            </div>

            <div class="w-50 m-auto">
                <form action="about.php" method="POST">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NUmber:</label>
                        <input type="text" name="number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Submit </button>
                </form>
            </div>
        </section>
    </a>

    <a id="about">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">About</h2>
            </div>
            <div class="container-fluid">
                <h3 class="text-center">Genshin Impact</h3>
                <p class="text-center"><b>Genshin Impact is a RPG, cross-platform, open world game developed by miHoyo (now HoyoVerse) with anime style art for it's characters.
                        With Seven different continents in this world called Teyvat, and ruled by their Archons allocated by the central power, Celestia.
                    </b></p>
            </div>
        </section>
    </a>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
</body>

</html>