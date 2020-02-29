<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Shareboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Shareboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
            </li>
        </ul>
    </div>
</nav>
<?php require($view); ?>
</body>
</html>

