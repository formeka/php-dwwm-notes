<?php
$connection = new PDO("mysql:host=mariadb;dbname=notes", 'root', 'root');

$result = $connection->query('select * from note as n
inner join user as u
on u.user_id = n.user_id');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Liste des notes</title>
    </head>
    <body>
        <h1>Liste des notes</h1>
        <ul>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="/show.php?id=<?= $row['id'] ?>">
                    <?= $row['title'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php
$connection = null;
?>
