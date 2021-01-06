<?php require "action_login.php"?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulaire d'inscription</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <div class="container">
        <h2 align="center">Bienvenu à SportSARSS</h2>
        <br />
        <div class="col-md-6" style="margin:0 auto; float:none;">
            <form method="post">
                <h3 align="center">Connectez-vous</h3>
                <br />
                <?php echo $message; ?>
                <div class="form-group">
                    <label>Pseudo ou Email</label>
                    <input type="text" name="username" class="form-control" placeholder="Pseudo ou votre email"
                        value="<?php echo $username; ?>" />
                </div>
                <div class="form-group">
                    <label>Mot de Passe</label>
                    <input type="password" name="passwordLog" class="form-control" placeholder="Mot de Passe"
                        value="<?php echo $passwordLog; ?>" />
                </div>
                <div class="form-group" align="center">
                    <input type="submit" name="login" class="btn btn-success" value="OK" />
                </div>
                <div class="form-group">
                <li class="nav-item active">
                    <a class="nav-link" href="inscription.php">Pas encore inscrit ?</a>
                  </li>
                </div>
            </form>
        </div>
    </div>
</body>

</html>