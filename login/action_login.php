<?php
$message = '';
$username = $_POST["username"];
$passwordLog = $_POST["passwordLog"];
$file = file("data.csv");

foreach ($file as $line) {
    list($id, $pseudo, $mail, $pass, $pass_repeat) = explode(",", $line);

    if (isset($_POST["login"])) {
        if (empty($username)) {
            $message .= '<p><label class="text-danger">Votre Pseudo ou email SVP</label></p>';
        } else {
            if ($username == $pseudo || $username == $mail) {
                if (empty($passwordLog)) {
                    $message .= '<p><label class="text-danger">Password est necesaire</label></p>';
                } else {
                    if ($passwordLog == $pass) {
                        $message .= '<label class="text-success">Bienvenu ' . $pseudo . '</label>';
                    } else {
                        $message .= '<label class="text-success">Erreur en Password</label>';
                    }
                }
            }
        }
    }
}
echo $message;
