<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>Toast Bread Shop</title>
</head>

<body style="height: 100%;">
    <nav class="navbar navbar-expand-lg" style="background-color: #C58940;">
        <div class="container-fluid">
            <a class="navbar-brand text-white">Toast Bread</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 25px; margin-bottom: 25px;">
        <div class="catalog">
            <h1>Catalog</h1>
        </div>
        <div class="row justify-content-md-center">
            <div class="card">
                <img class="card-img-top" src="/img/kue1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/SelectedItem" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/blackforest.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/blackforest.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/blackforest.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/blackforest.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/blackforest.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/blackforest.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/blackforest.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Forest</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-white" style="background-color: #C58940;">
        <!-- Grid container -->
        <div class="container p-4">
            <h5>Toast Bread</h5>
            <h4>Wholesome Bread for all</h4>
        </div>
        <!-- Grid container -->
    </footer>
    <!-- CSS -->
    <style>
        .catalog {
            text-align: center;
            margin: 40px;
        }

        .row {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 30px;
        }

        .card-title {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
            height: 30vh;
            object-fit: cover;
            margin-top: 10px;
        }

        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>Toast Bread Shop</title>
</head>

<body style="height: 100%;">
    <nav class="navbar navbar-expand-lg" style="background-color: #C58940;">
        <div class="container-fluid">
            <a class="navbar-brand text-white">Toast Bread</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 25px; margin-bottom: 25px;">

    </div>

    <footer class="text-center text-white" style="background-color: #C58940;">
        <!-- Grid container -->
        <div class="container p-4">
            <h5>Toast Bread</h5>
            <h4>Wholesome Bread for all</h4>
        </div>
        <!-- Grid container -->
    </footer>
    <!-- CSS -->
    <style>
        .catalog {
            text-align: center;
            margin: 40px;
        }

        .row {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 30px;
        }

        .card-title {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
            height: 30vh;
            object-fit: cover;
            margin-top: 10px;
        }

        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>