<?php require_once 'header.php'; 
//$_GET['id']; 
$posts = $blog->getPosts();
/*if ($_GET['id'] < count($posts)) {
    foreach($posts as $post){
        if ($post = $posts[$_GET['id']]) {
            echo "<p>".$post->getMessage()."</p>"; 
            break;
        }
    }*/
if(!empty($posts[$_GET['id']])){
        $post = $posts[$_GET['id']];
        echo "<p>".$post->getMessage()."</p>";
        $authors = $post->getAuthor();
        $datepost = $post->getDate();
        echo "<p><i>par ".$authors->getUsername()."</i>";?>
        <h2><p>Commentaires :</p></h2><?php 
        $comments = $post->getComments();

    if ($_GET['id'] < count($comments)) {
        foreach($comments as $comment){
            echo "<div id='commentaires'><fieldset><p><b>".$comment->getAuthor()->getUsername()."</b></p>".$comment->getMessage()."</fieldset></div>"; 
    }
    } else {
        echo "<p>Pas de commentaire...</p>";
    }

} else {
    echo "<p><h2>ERREUR 404</h2></p><p>POST NON TROUVÉ</p>";
}

//print_r($datepost);
//print_r($comments);
//print_r($authors);
//echo $datepost->date;