<p><a href='/blog/add'>/blog/add</a></p>
<p><a href='/blog/clear'>/blog/clear</a></p>

<?php foreach($articles as $article): ?>
    <p><?php echo $article->text ?></p>
    <p>
        <a href='/blog/edit/<?php echo $article->id ?>'>Edit</a>
        <a href='/blog/delete/<?php echo $article->id ?>'>Delete</a>
    </p>
    <p><strong><a href='/blog/view/<?php echo $article->id ?>'>Read More...</a></strong></p>
    <hr />
<?php endforeach; ?>
