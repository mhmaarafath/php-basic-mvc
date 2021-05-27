<?php
    require "partials/header.view.php"
?>

    <div class="header">
    <?php foreach($tasks as $task) : ?>
        <br>
        <a href="#">
            <?php if($task->completed) : ?>
                <strike>
            <?php endif ?>
                    <?=$task->description?>
            <?php if($task->completed) : ?>
                </strike>
            <?php endif ?>

        </a>
    <?php endforeach ?>
    <?php foreach($users as $user) : ?>
        <br>
        <a href="#">
            <?=$user->name?>
        </a>
    <?php endforeach ?>

    </div>

    <form method="POST" action="/names">
        Name : <input type="text" name="name" value="">
        <input type="submit" value="Submit">
    </form>

<?php
    require "partials/footer.view.php"
?>