<?php
$connection = new PDO("mysql:host=mariadb;dbname=notes", 'root', 'root');

$id = $_GET['id'];

$query = 'select * from note as n
  inner join user as u
  on u.user_id = n.user_id
  where n.id = :id';
$statement = $connection->prepare($query);
$statement->bindValue(':id', $id, PDO::PARAM_INT);
$statement->execute();

$note = $statement->fetch(PDO::FETCH_ASSOC);

$connection = null;
?>

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
