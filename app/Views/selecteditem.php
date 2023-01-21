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
                    <!-- <li class="nav-item">
                        <a class="nav-link text-white" href="/profile">Profile</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link text-white" href="/cart">Cart</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="card" style="margin-top: 30px; margin-bottom: 25px;">
                <img class="card-img-top" src="/img/<?= $product['product_image']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['product_name']; ?></h5>
                </div>
            </div>
            <div class="deskripsi " style="margin-top: 50px ">
                <div class="text-left">
                    <h1><?= $product['product_name']; ?></h1>
                    <h3 class="mb-4"><?= $product['product_desc']; ?></h3>
                    <h3>Rp. <?= $product['product_price']; ?></h3>
                    <h6 style="margin-top: 50px ">Jumlah Barang</h6>
                    <div class="input-group">
                        <input name="qty" id="qty" type="text" class="form-control" placeholder="Qty" aria-label="Recipient's username with two button addons">
                    </div>
                </div>
                <button type="button" class="text-center btn btn-primary mt-3 mb-5">Order</button>
            </div>

        </div>
    </div>

    <!-- CSS -->
    <style>
        .catalog {
            text-align: center;
            margin: 40px;
        }

        .row {
            display: grid;
            grid-template-columns: 2fr 2fr;
            gap: 30px;

        }

        .deskripsi {
            grid-template-rows: auto;
        }

        .card-title {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
            height: 50vh;
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