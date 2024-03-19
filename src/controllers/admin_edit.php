<?php
session_start();

if (!isset($_SESSION['admin']) && empty($_SESSION["admin"])) {
    header("Location: views/login.php");
}
require_once("src/models/Article.php");


$id = $_GET["id"];
$article = getArticle($id);


require("views/admin/edit.php");