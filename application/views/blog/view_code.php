<?php echo $typo_lib->auto_typography($article->text) ?>

<p>
    <a href='/blog'>Back</a>
    <a href='/blog/edit/<?php echo $article->id ?>'>Edit</a>
    <a href='/blog/delete/<?php echo $article->id ?>'>Delete</a>
</p>
