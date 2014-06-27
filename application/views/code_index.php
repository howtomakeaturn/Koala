<p><a href='/code/add'>/code/add</a></p>
<p><a href='/code/clear'>/code/clear</a></p>

<?php foreach($posts as $post): ?>
    <p><?php echo $post->text ?></p>
    <p>
        <a href='/code/edit/<?php echo $post->id ?>'>Edit</a>
        <a href='/code/delete/<?php echo $post->id ?>'>Delete</a>
    </p>
    <p><strong><a href='/code/view/<?php echo $post->id ?>'>Read More...</a></strong></p>
    <hr />
<?php endforeach; ?>
