<p><a href='/code/add'>/code/add</a></p>
<?php foreach($posts as $post): ?>
    <p><?php echo $post->text ?></p>
    <p><a href='/code/view/<?php echo $post->id ?>'>Read More...</a></p>
    <hr />
<?php endforeach; ?>
