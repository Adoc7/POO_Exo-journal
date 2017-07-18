<?php

include("connect.php");

$titre=$_POST['titre'];
//$file=$_FILES['media']['file'];
$article=$_POST['article'];

var_dump($titre, $article);

/// J'appelle la table où est entree =_article
$req = $pdo->prepare("INSERT INTO entree_article (titre, article)
VALUES (:titre, :article)");

$req->execute(array(
    'titre' => $titre,
    'article' => $article
));

//header("Location: read.php");
// print_r($pdo->errorInfo());

?>