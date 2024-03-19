<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../assets/css/style.css">


<body>



    <!-- MAIN -->
    <main>
        <section>
            <div class="container contact-container">
                <h1 style="font-size: 35px;">Creer un Article</h1>

                <form action="../../index.php?controller=admin_creat" method="post">

                <div>
                        <input type="text" name="title" placeholder="Titre de l'article">
                    </div> <div>
                        <input type="text" name="subtitle" placeholder="sous Titre de l'article">
                    </div>

                    <div>
                        <textarea name="content" id="" cols="50" rows="4" placeholder="Entrer le contenu de l'article"></textarea>
                    </div>

                    <!-- Button -->
                    <div>
                        <input type="submit" value="Send" class="send-message">
                    </div>
                </form>
            </div>
            <hr>
        </section>
    </main>
    <!-- FIN MAIN -->


</body>

</html>