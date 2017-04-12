<?php
include_once("Config/database.php");

function _executeAndClose($statement) {
    $statement->execute(); // run on the db server
    $statement->closeCursor(); // close the connection
}


function CreateGame($todo, $description) {
    $db = DBConnection();
    $query = "INSERT INTO todolists (todo, description) VALUES (:todo_name, :description_name)";
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':todo_name', $todo);
    $statement->bindValue(':description_name', $description);
    _executeAndClose($statement);
}

function ReadGames() {
    $db = DBConnection();
    $query = "SELECT * FROM todolists"; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->execute(); // run on the db server
    $todolists = $statement->fetchAll(); // returns an array
    $statement->closeCursor(); // close the connection
    return $todolists;
}

function UpdateGame($id, $todo, $description) {
    $db = DBConnection();
    $query = "UPDATE todolists SET todo = :todo_name, description = :description_name WHERE id = :todo_id "; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':todo_id', $id);
    $statement->bindValue(':todo_name', $todo);
    $statement->bindValue(':description_name', $description);
    _executeAndClose($statement);
}

function GetGameById($gameID){
    $db = DBConnection();
    $query = "SELECT * FROM todolists WHERE id = :todo_id "; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':todo_id', $gameID);
    $statement->execute(); // run on the db server
    $todolist = $statement->fetch(); // returns only one record
    $statement->closeCursor(); // close the connection
    return $todolist;
}

function DeleteGame($id) {
    $db = DBConnection();
    $query = "DELETE FROM todolists WHERE id = :todo_id ";
    $statement = $db->prepare($query);
    $statement->bindValue(":todo_id", $id);
    _executeAndClose($statement);
}
?>