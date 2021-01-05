<?php require "action.php"?>
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
                <h3 align="center">Formulaire d'inscription</h3>
                <br />
                <?php echo $message; ?>
                <div class="form-group">
                    <label>Pseudo</label>
                    <input type="text" name="name" class="form-control" placeholder="Un Pseudo"
                        value="<?php echo $name; ?>" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Votre Email"
                        value="<?php echo $email; ?>" />
                </div>
                <div class="form-group">
                    <label>Mot de Passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Mot de Passe"
                        value="<?php echo $password; ?>" />
                </div>
                <div class="form-group">
                    <label>Mot de Passe (encore)</label>
                    <input type="password" name="password_repeat" class="form-control"
                        placeholder="Répéter votre Mot de Passe" value="<?php echo $password_repeat; ?>" />
                </div>
                <div class="form-group" align="center">
                    <input type="submit" name="submit" class="btn btn-success" href="../index.php" value="OK" />
                    <button type="button" name="annuler" class="btn btn-warning"><a class="nav-link" href="../index.php">Annuler</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>