<?php 
function addTask($user, $title, $description, $date){
    include '../models/db.php';
    $req = $db->prepare('INSERT INTO tasks(user, title, description, date) VALUES(:user, :title, :description, :date)');
    $req->execute(array(
        'user' => $user,
        'title' => $title,
        'description' => $description,
        'date' => $date
    ));
}

function getTasks($user){
    include '../models/db.php';
    $req = $db->prepare('SELECT * FROM tasks WHERE user = :user');
    $req->execute(array(
        'user' => $user
    ));
    return $req;
}

function deleteTask($id){
    include '../models/db.php';
    $req = $db->prepare('DELETE FROM tasks WHERE id = :id');
    $req->execute(array(
        'id' => $id
    ));
}

function getTask($id){
    include '../models/db.php';
    $req = $db->prepare('SELECT * FROM tasks WHERE id = :id');
    $req->execute(array(
        'id' => $id
    ));
    return $req;
}

function finishTask($id){
    include '../models/db.php';
    $req = $db->prepare('UPDATE tasks SET finished = 1 WHERE id = :id');
    $req->execute(array(
        'id' => $id
    ));
}

function unfinishTask($id){
    include '../models/db.php';
    $req = $db->prepare('UPDATE tasks SET finished = 0 WHERE id = :id');
    $req->execute(array(
        'id' => $id
    ));
}

function 
