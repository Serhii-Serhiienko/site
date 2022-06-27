<?php
    include "app/database/db.php";
    $isSubmit = false;
    $errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        $errMsg = "Post all empty tables!";
    }elseif (mb_strlen($login,'UTF-8')< 2) {
        $errMsg = "Login shorter 2 signs";
    }elseif ( $passF !== $passS){
        $errMsg = "Passwords must be same";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence['email'] === $email){
            $errMsg = "Email is already used";
        }else{
            $pass = password_hash($passF,PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username'=> $login,
                'email' => $email,
                'password' => $pass,
            ];
            $id = insert('users', $post);
            tt($post);
        }
    }


    }else{
    echo 'GET';
    $login = '';
    $email = '';
}



