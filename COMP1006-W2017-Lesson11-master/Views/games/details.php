<?php
include_once('Controllers/users.php');
CheckIfAuthenticated();

include_once('Controllers/games.php');


$gameID = $_GET["gameID"]; // assigns the gameID from the URL

if($gameID == 0) {
    $todolist = null;
    $isAddition = 1;
} else {
    $isAddition = 0;
    $todolist = GetGameById($gameID);
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Todo Details</h1>
            <form action="index.php?pageId=GameUpdate" method="post">
                <div class="form-group">
                    <label for="IDTextField" hidden>Todo ID</label>
                    <input type="hidden" class="form-control" id="IDTextField" name="IDTextField"
                           placeholder="todoId" value="<?php echo $todolist['id']; ?>">
                </div>
                <div class="form-group">
                    <label for="NameTextField">Todo</label>
                    <input type="text" class="form-control" id="NameTextField"  name="NameTextField"
                           placeholder="Todo name" required  value="<?php echo $todolist['todo']; ?>">
                </div>
                <div class="form-group">
                    <label for="CostTextField">Description</label>
                    <input type="text" class="form-control" id="CostTextField" name="CostTextField"
                           placeholder="Description" required  value="<?php echo $todolist['description']; ?>">
                </div>
                    <input type="hidden" name="isAddition" value="<?php echo $isAddition; ?>">
                <button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>
                <a href="index.php?pageId=GamesList">
                    <input type="button" class="btn btn-warning" value="Cancel"/>
                </a>

            </form>

        </div>
    </div>
</div>


