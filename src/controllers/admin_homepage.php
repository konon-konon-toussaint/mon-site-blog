<?php
session_start();

require('src/models/Article.php');
$articles = getArticles();


if (!isset($_SESSION['admin']) && empty($_SESSION["admin"])) {
    header("Location: views/login.php");
}

// On charge la vue
require('views/admin/homepage.php');

