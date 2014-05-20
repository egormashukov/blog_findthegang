<h2>Theme: <?php echo $article->theme ?></h2>

<p><b>Text:</b> <?php echo $article->text ?></p>

<h2>List of comments:</h2>

<?php if ($comments){

    foreach($comments as $comment){

        echo '<b> User Name:</b> '.$comment->user_name;
        echo '<b> User Email:</b> '.$comment->user_email;
        echo '<b> Text:</b> '.$comment->text;
        echo '<br/>';
    }
}