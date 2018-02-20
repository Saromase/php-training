<?php

    include 'Fork.class.php';
    session_start();
    if(!isset($_SESSION['Fork'])){
        $_SESSION['Fork'] = new Fork;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-training</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php if (isset($_SESSION['Fork'])): ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Nombre de coup : <?php echo $_SESSION['Fork']->getCount(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Jeux de la fourchette</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                            if (isset($_SESSION['success'])) {
                                echo '<div class="alert alert-succes">Félicitation vous avez trouver le bon nombre </div>';
                                unset($_SESSION['success']);
                                unset($_SESSION['Fork']);
                            }
                            if (isset($_SESSION['less'])) {
                                echo '<div class="alert alert-primary">Le nombre est plus petit </div>';
                                unset($_SESSION['less']);
                            }
                            if (isset($_SESSION['more'])) {
                                echo '<div class="alert alert-primary">Le nombre est plus grand </div>';
                                unset($_SESSION['more']);
                            }
                        ?>
                        <form method="post" action="tryNumber.php">
                            <div class="form-group">
                                <label for="input">Entrer un nombre</label>
                                <input type="number" class="form-control" id="input" placeholder="Entrer un nombre" name="input">
                            </div>
                            <div class="panel-footer">
                                <div class="btn-group btn-group-sm ">
                                    <button type="submit" name="button" class="btn btn-primary" id="tryOneNumber">Essayer le nombre</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="fork.js" charset="utf-8"></script>
</html>
