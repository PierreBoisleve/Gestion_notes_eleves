<?php
include 'database/connexpdo.php';
session_abort();
//Connect BDD
$db = connexpdo('pgsql:dbname=etudiants;host=localhost;port=5433','postgres','new_password');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In · TP n°10</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="index.php">TP n°10 langage PHP & SQL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<main role="main" class="container">
    <div class="jumbotron">
        <div class=" mx-auto text-center">
            <h1 class="display-4">Bonjour</h1>
            <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
        </div>
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Connexion</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <a href="viewlogin.php"><button type="button" class="btn btn-lg btn-block btn-primary">Sign In</button></a>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Inscription</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <a href="viewnewuser.php"><button type="button" class="btn btn-lg btn-block btn-primary">Sign Up</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
