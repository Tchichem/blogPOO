<?php require_once 'header.php'; ?>
<div id="posts">
<h2>Posts</h2>
<?php

$posts = $blog->getPosts();
//print_r($posts);
$val = 0;
foreach($posts as $post){
    echo "<li><a href='post.php?id=$val'><p>".$post->getTitle()."</a>"."&emsp;<b> ".$post->getAuthor()->getUsername()."</b>, <i>".$post->getViews()." vues </i></p></li>";
    $val = $val + 1;
}

?> 
<li><a href="post.php?id="></a></li></div>	

</fieldset>
</body>


