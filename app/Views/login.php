<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>Login</title>
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
                        <a class="nav-link active text-white" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 25px; margin-bottom: 25px;">
        <div class="row justify-content-md-center">
            <div class="col-5" style="background-color: #FAEAB1; height: 450px;">
                <h1 style="text-align:center; margin: 20px;">Sign In</h1>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <form action="/login/auth" method="post">
                    <div class="mb-3" style="padding: 5px; font-size: 24px;">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3" style="padding: 5px; font-size: 24px;">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <div class="text-center" style="margin-top: 40px;">
                        <button type="submit" class="btn btn-lg" style="background-color: #C58940; color: white;">Login</button>
                    </div>
                    <div class="text-center" style="margin-top: 40px;">
                        <a href="/register">Dont Have an Account? Sign Up</a>
                        <h1>tess</h1>
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

    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>