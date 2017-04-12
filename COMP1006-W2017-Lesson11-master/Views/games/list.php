<?php

include_once('Controllers/users.php');
CheckIfAuthenticated();

require_once('Controllers/games.php');

$todolists = ReadGames();
?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Todo list</h1>
            <!--
            <a class="btn btn-primary" href="../../Game/game_details.php?gameID=0">
            -->
            <a class="btn btn-primary" href="index.php?pageId=GameDetails&gameID=0">
                <i class="fa fa-plus"></i> Add New Todo</a>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Desc</th>
                    <th></th>
                    <th></th>
                </tr>
                    <?php foreach($todolists as $todolist) : ?>
                        <tr>
                            <td><?php echo $todolist['id'] ?></td>
                            <td><?php echo $todolist['todo'] ?></td>
                            <td><?php echo $todolist['description'] ?></td>
                            <!-- This line sends the gameID to the game_details page -->

                            <td><a class="btn btn-primary" href="index.php?pageId=GameDetails&gameID=<?php echo $todolist['id'] ?>">
                                    <i class="fa fa-pencil-square-o"></i> Edit</a></td>

                            <td><a class="btn btn-danger" href="index.php?pageId=GameDelete&gameID=<?php echo $todolist['id'] ?>">
                                    <i class="fa fa-trash-o"></i> Delete</a></td>
                        </tr>
                    <?php endforeach; ?>

            </table>

        </div>
    </div>
</div>

