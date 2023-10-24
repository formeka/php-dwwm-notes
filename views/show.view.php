<!DOCTYPE html>
<html>
    <head>
        <title>Note</title>
    </head>
    <body>
<section>
<article>
    <h2><?= $note['title'] ?></h2>

    <p>
        <?= $note['content'] ?>
    </p>
    <p>
    Publiée le : <?= $note['created_at'] ?> 
    par <strong><?=$note['name']?></strong>
    </p>
    <p><a href="index.php">Retour à la liste des notes</a>
</article>
</section>

</html>
