<?php
session_start();
require('src/models/Article.php');

$id = $_GET["id"];

$success = deleteArticle($id);


if (!isset($_SESSION['admin']) && empty($_SESSION["admin"])) {
    header("Location: views/login.php");
}

if ($success) {
    throw new Exception("Identifiant invalide");
} else {
    header("location: index.php?controllers=admin_homepage");
}

