<?php
$message = '';
$name = '';
$email = '';
$password = '';
$password_repeat = '';

function clean_text($str)
{
    $str = trim($str);
    $str = stripslashes($str);
    $str = htmlspecialchars($str);
    return $str;
}

if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $message .= '<p><label class="text-danger">Votre Pseudo SVP</label></p>';
    } else {
        $name = clean_text($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $message .= '<p><label class="text-danger">Seulement des châines de caractères</label></p>';
        }
    }
    if (empty($_POST["email"])) {
        $message .= '<p><label class="text-danger">Votre mail SVP</label></p>';
    } else {
        $email = clean_text($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message .= '<p><label class="text-danger">"Format de mail non valide"</label></p>';
        }
    }
    if (empty($_POST["password"])) {
        $message .= '<p><label class="text-danger">Password est necesaire</label></p>';
    } else {
        $password = clean_text($_POST["password"]);
    }
    if (empty($_POST["password_repeat"])) {
        $message .= '<p><label class="text-danger">Password est necesaire</label></p>';
    } else {
        $password_repeat = clean_text($_POST["password_repeat"]);
    }

    if ($message == '') {
        $file_open = fopen("data.csv", "a");
        $id = count(file("data.csv"));
        if ($id > 1) {
            $id = ($id - 1) + 1;
        }
        $form_data = array(
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_repeat' => $password_repeat,
        );
        fputcsv($file_open, $form_data);
        $message = '<label class="text-success">Merci pour votre inscription</label>';
        $name = '';
        $email = '';
        $password = '';
        $password_repeat = '';
    }
}
