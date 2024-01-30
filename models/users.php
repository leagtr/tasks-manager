<?php 
function addUser($username, $password){
    include '../models/db.php';
    $req = $db->prepare('INSERT INTO users(username, password) VALUES(:username, :password)');
    $req->execute(array(
        'username' => $username,
        'password' => $password
    ));
}

function connectUser($username, $password){
    include '../models/db.php';
    $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $req->execute(array(
        'username' => $username,
        'password' => $password
    ));
    $user = $req->fetch();
    if(count($user) > 0){
        return $user;
    }
    else{
        return false;
    }
}