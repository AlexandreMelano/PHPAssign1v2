<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Welcome to our page</h1>

            <ul>



                <?php if(isset($_SESSION["is_logged_in"])) : ?>
                    <li><a href="index.php?pageId=GamesList"><i class="fa fa-gamepad fa-lg" ></i> Games List</a></li>
                <?php endif ?>

            </ul>
            <img src="Images/Welcome2.jpg" class="rounded mx-auto d-block" alt="...">
        </div>
    </div>
</div>