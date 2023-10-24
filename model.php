<?php
function open_database_connection()
{
    $connection = new PDO("mysql:host=mariadb;dbname=notes", 'root', 'root');

    return $connection;
}

function close_database_connection(&$connection)
{
    $connection = null;
}

function get_all_notes()
{
    $connection = open_database_connection();

    $result = $connection->query('select * from note as n
inner join user as u
on u.user_id = n.user_id');

    $notes = [];
    while ($note = $result->fetch(PDO::FETCH_ASSOC)) {
        $notes[] = $note;
    }
    close_database_connection($connection);

    return $notes;
}

function get_note_by_id($id)
{
    $connection = open_database_connection();

    $query = 'select * from note as n
  inner join user as u
  on u.user_id = n.user_id
  where n.id = :id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $note = $statement->fetch(PDO::FETCH_ASSOC);

    close_database_connection($connection);

    return $note;
}
