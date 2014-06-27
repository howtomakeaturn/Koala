<h1>Edit Code</h1>
<form action='/code/add' method='post'>
    <input type='text' name='title' value='<?php echo $article->title ?>' />
    <br />
    <textarea rows=20 name='content' ><?php echo $article->text ?></textarea>
    <input type='submit' value='submit' />
</form>
