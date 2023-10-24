<!DOCTYPE html>
<html>
    <head>
        <title>Liste des notes</title>
    </head>
    <body>
        <h1>Liste des notes</h1>

      <ul>
        <?php foreach ($notes as $note): ?>
        <li>
            <a href="/show.php?id=<?= $note['id'] ?>">
                <?= $note['title'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
    </body>
</html>

<?php
$connection = null;
?>
