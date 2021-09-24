<?php

error_reporting(0);

if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}
if (!$captcha_data) {
    echo "Por favor, confirme o captcha.";
    exit;
} else {
    $link = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LckytUUAAAAALgn1zVZc52fKhLEJ2UXjqVeinA2&response=" . $captcha_data . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
    $resposta = json_decode($link);
    if ($resposta->success) {
        
        $login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE;
        $senha = isset($_POST["senha"]) ? md5(trim('!' . $_POST["senha"] . '@saude')) : FALSE;

        if (!$login || !$senha) {            
            header('Location: ../');
            exit;
        } else {
                header('Location: ../app.php');
            } 
        }
    }
