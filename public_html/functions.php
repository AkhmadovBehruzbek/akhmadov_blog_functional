<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./config/dbConnection.php');

function getPostsAll($status = true) {
    global $conn;
    $state = $conn->prepare("SELECT * FROM posts WHERE published = :status");
    $state->execute(['status' => $status]);
    return $state->fetchAll(PDO::FETCH_ASSOC);
}

function getPost($status = true) {
    global $conn;
    $state = $conn->prepare("SELECT * FROM posts WHERE published = :status ORDER BY id DESC LIMIT 5 ");
    $state->execute(['status' => $status]);
    return $state->fetchAll(PDO::FETCH_ASSOC);
}

function getBlog($slug, $status=true) {
    global $conn;
    $state = $conn->prepare("SELECT * FROM posts WHERE published = :status AND slug = :slug");
    $state->execute(['status' => $status, 'slug' => $slug]);
    return $state->fetch(PDO::FETCH_ASSOC);
}



function getPage($prop) {
    if (isset($_GET[$prop])) {
        return $_GET[$prop];
    }
    return false;
}
