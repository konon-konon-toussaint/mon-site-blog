<?php
class Article
{

    public string $id;
    public string $title;
    public string $subtitle;
    public string $content;
    public ?string $created;
}


// Recupere tous les articles de la base de donnée
function getArticles()
{
    if (require("src/lib/database.php")) {
        $statement = $db->prepare("SELECT * FROM articles"); //Request
        $statement->execute(); //True

        $articles = [];

        while ($row = $statement->fetch()) {
            $article = new Article();

            $article->id = $row["id"];
            $article->title = $row["title"];
            $article->subtitle = $row["subtitle"];
            $article->content = $row["content"];
            $article->created = $row["created"];

            $articles[] = $article;
        }

        return $articles;
    }
}



// Recupere un article en fonction de l'id
function getArticle($id)
{
    if (require("src/lib/database.php")) {
        $statement = $db->prepare("SELECT * FROM articles WHERE id = ?"); //Request
        $statement->execute([$id]);

        $row = $statement->fetch();

        $article = new Article();

        $article->id = $row["id"];
        $article->title = $row["title"];
        $article->subtitle = $row["subtitle"];
        $article->content = $row["content"];
        $article->created = $row["created"];

        return $article;


    }
}
function createArticle($title, $subtitle, $content)
{

    if (require("src/lib/database.php")) {

        $statement = $db->prepare("INSERT INTO articles
         (title, subtitle, content, created) VALUES (?,?, ?now()");

        $affectedLines = $statement->execute(
            [$title, $subtitle, $content]
        );

        return($affectedLines > 0);
    }
}

function updateArticle($title, $subtitle, $content, $id)
{

    if (require("src/lib/database.php")) {

        $statement = $db->prepare("INSERT INTO articles
         SET (title, subtitle, content, created) VALUES (?,?, ?now() where id = ?");
        "UPDATE articles SET title = ?, subtitle = ?, created = now () WHERE id = ?";
        $affectedLines = $statement->execute(
            [$title, $subtitle, $content, $id]
        );

        return($affectedLines > 0);
    }
}



function deleteArticle($id)
{
    if (require("src/lib/database.php")) {
        $statement = $db->prepare("DELETE  FROM articles WHERE id = ?"); //Request
        $affectedLines = $statement->execute([$id]);

        return($affectedLines > 0);
    }
}
// echo "<pre>";
// var_dump(getArticle(4));
// echo "</pre>";
