<?php

include_once('Controllers/users.php');
CheckIfAuthenticated();

include_once('Config/database.php');
include_once('Controllers/games.php');

$isAddition = filter_input(INPUT_POST, "isAddition");
$todo = filter_input(INPUT_POST, "NameTextField"); //$_POST["NameTextField"];
$description = filter_input(INPUT_POST, "CostTextField"); //$_POST["CostTextField"];

if($isAddition == "1") {
 CreateGame($todo, $description);
}
else {
 $gameID = filter_input(INPUT_POST, "IDTextField"); // $_POST["IDTextField"];
 UpdateGame($gameID, $todo, $description);
}

// redirect to index page
header('Location: index.php?pageId=GamesList');
?>
