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

    <div class="container" style="margin-top: 25px; margin-bottom:25px;">
        <div class="row justify-content-md-center">

            <div class="col-6" style="background-color: #FAEAB1;">
                <h1 style="text-align:center; margin: 20px;">PROFILE</h1>
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
                <form action="/profile/update" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">NAMA :</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email :</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForAddress" class="form-label">ALAMAT :</label>
                        <input type="text" name="address" class="form-control" id="InputForName" value="<?= set_value('address') ?>">
                    </div>
                    <div class="text-center" style="margin-bottom:25px;">
                        <button type="submit" class="btn btn-lg" style="background-color: #4579f5; color: white;">SIMPAN</button>
                    </div>
                </form>
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

    </style>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>