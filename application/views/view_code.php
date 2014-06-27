<?php echo $typo_lib->auto_typography($article->text) ?>

<p>
    <a href='/code'>Back</a>
    <a href='/code/edit/<?php echo $article->id ?>'>Edit</a>
    <a href='/code/delete/<?php echo $article->id ?>'>Delete</a>
</p>
