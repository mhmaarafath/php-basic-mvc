<?php
    require "partials/header.view.php"
?>

    <div class="header">
    <?php foreach($users as $user) : ?>
        <br>
        <a href="#">
            <?=$user->name?>
        </a>
    <?php endforeach ?>

    </div>

    <form method="POST" action="/user">
        Name : <input type="text" name="name" value="">
        <input type="submit" value="Submit">
    </form>

<?php
    require "partials/footer.view.php"
?>