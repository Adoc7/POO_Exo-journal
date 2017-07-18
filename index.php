<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajouter des articles</title>
<!--    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">-->
</head>
<body class="img-background">
<div class="liens">
    <a href="read.php" id="retour">Liste des articles</a>
</div>
<h1>Ajouter</h1>

<form action="script.php" method="post">
    <div>
        <label for="titre">Titre</label>
        <input class="entree_donnee" type="text" name="titre" value="">
    </div>
    <br>
    <div>
        <label for="file">Media</label>
        <input class="entree_donnee" type="file" name="media" value="">
    </div>
    <br>
    <div>
        <label for="article">Article</label>
        <br>
        <input class="entree_donnee" type="text" name="article" value="">
        <br>
<!--        <textarea class="entree_donnee" type="text"  name="article" cols="30" rows="10"></textarea>-->
    </div>
    <br>
    <button type="submit" name="button">// Valider</button>
</form>
</body>

</html>

<!--* Créer une page qui affiche les articles avec :-->
<!---->
<!--- le titre-->
<!--- le média-->
<!--- le contenu textuel-->
<!--- la date de création de l'article-->
<!---->
<!--* Créer une base de données "journal" où seront stockées toutes les données-->
<!---->
<!--* Pour les média, stocker uniquement le chemin d'accès en base et-->
<!--stocker les fichiers dans un dossier "uploads" sur le serveur.-->