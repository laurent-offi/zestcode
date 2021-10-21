<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['id'])) {
    header("Location: /backend/");

} else {

    if (isset($_POST) && !empty($_POST)) {
        extract($_POST);
        $valid = true;

        if (isset($_POST['login'])) {
            $username = stripslashes(htmlentities(strtolower(trim($_POST['username']))));
            $password = trim($_POST['password']);


            if (!empty($username) and !empty($password)) {

                $req = $DB->prepare("SELECT * FROM admins WHERE admin_name = ? AND admin_password = ?");
                $req->execute(array($username, hash('sha512', $password)));
                $reu = $req->rowCount();
                $res = $req->fetch();

                if ($reu == 0) {
                    $valid = false;
                    $error['login'] = "L'adresse username ou le mot de passe est incorrect.";
                }

                if ($valid) {

                    $_SESSION['id'] = $res['admin_id'];
                    header("Location: /backend/");

                }
            }
        }
    }
}

include $patch_root . "/backend/views/authentification.php";