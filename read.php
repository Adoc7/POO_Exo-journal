<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Artciles</title>


    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<div class="liens">

    <a href="create.php" id="retour">Retour au formulaire</a><br>

</div>
<h1>Liste des articles</h1>
<table>
    <!-- Afficher la liste des articles-->
    <?php
//    var_dump($titre);
    include("connect.php");
    $reponse = $pdo->query('SELECT * FROM entree_article');
    $reponse1 = $reponse->fetchAll();
     var_dump($reponse1);
    foreach ($reponse1 as $value) {
        ?>
        <div id="corps">
            <div id="text">
                <p><b><span id="oran">/// Titre : </span></b><?= $value->titre ?><br>
                    <b><span id="oran">/// Media : </span></b><?= $value->file ?>
                    <b><span id="oran">/// Article : </span></b><?= $value->article ?>
                </p>
            </div>
        </div>


<!--        <form  action="delete.php" method="post">-->
<!--            <input  type="hidden" type="number" name="id" value="--><?//= $value->id?><!--">-->
<!--            <input class="del-mod" type="submit" value="supprimer">-->
<!--        </form>-->
<!---->
<!--        <form  action="update.php" method="post">-->
<!--            <input  type="hidden" type="number" name="id" value="--><?//= $value->id ?><!--">-->
<!--            <input class="del-mod" type="submit" value="edit">-->
<!--        </form>-->


        <?php
    }
    ?>

</table>
</body>
</html>










