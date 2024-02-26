<?php
require_once 'classes.php';
    // CREATION DU BLOG AVEC UN TITRE
    $blog = new Blog("Ma vie de dev web") ;

    // UTILISATEURS
    $owner = new User("admin", "Jean", "Durand") ;
    $visitor1 = new User("Tristandu06", "Tristan", "Gabriele") ;
    $visitor2 = new User("CallOfGamer", "Rémy", "Simpson") ;
    $visitor3 = new User("Red_Juggernaut", "Lucie", "Pernaut") ;
    $visitor4 = new User("Scavenger", "Yann", "Jorès") ;

    // AFFECTATION DU PROPRIETAIRE DU BLOG
    $blog->setOwner($owner);
	
    // POSTS DU BLOG
    $post1 = new Post();
    $post1->setTitle("Bienvenue sur mon Blog");
    $post1->setMessage("Ceci est mon tout premier post sur mon nouveau blog ! Je vous souhaite la bienvenue à tous ! Je vous raconterai toutes les anecdotes de ma nouvelle vie de développeur");
    $post1->setViews(152);
    $post1->setDate(new DateTime('2017-04-19 12:50 GMT'));
    $post1->setAuthor($owner);


    $post2 = new Post();
    $post2->setTitle("En savoir plus sur ce blog");
    $post2->setMessage("J'ai créé ce blog from scratch durant ma formation DWWM. Il est réalisé en PHP et (pour l'instant) sans base de données.");
    $post2->setViews(27);
    $post2->setDate(new DateTime('2017-04-22 13:21 GMT'));
    $post2->setAuthor($owner);


    $post3 = new Post();
    $post3->setTitle("Le post du vendredi soir !");
    $post3->setMessage("C'est le week-end ! Après une semaine bien chargée avec une mise en prod pour un client délicate. Mais comme on dit - ne jamais mettre en prod un vendredi ! Alors on croise les doigts.");
    $post3->setViews(27);
    $post3->setDate(new DateTime('2017-04-26 19:54 GMT'));
    $post3->setAuthor($owner);

    $post4 = new Post();
    $post4->setTitle("Nouvelle version de Vue.js");
    $post4->setMessage("La nouvelle version majeure de Vue.js vient d'être annoncée, avec énormément de nouveautés au programme ! Ca devrait envoyer du lourd ! Qui utilise déjà vue.js parmi vous ?");
    $post4->setViews(27);
    $post4->setDate(new DateTime('2017-04-26 19:54 GMT'));
    $post4->setAuthor($owner);

    // CREATION DES COMMENTAIRES
    $comment1 = new Comment("Trop bien ton blog !", $visitor1, new DateTime('2017-04-19 14:10 GMT')) ;
    $comment2 = new Comment("G rien compri. C toi qui là coder ce blogue ?", $visitor2, new DateTime('2017-04-19 16:21 GMT')) ;
    $comment3 = new Comment("Bon courage moi g fais une formation de 3 moi, personne na voulut ment baucher", $visitor2, new DateTime('2017-06-04 7:21 GMT')) ;
    $comment4 = new Comment("Normal, si tu codes comme tu écris ...", $visitor3, new DateTime('2017-06-04 14:41 GMT')) ;
    $comment5 = new Comment("Règle d'or - pas de mise en prod le vendredi :D", $visitor3, new DateTime('2017-04-29 14:10 GMT')) ;
    $comment6 = new Comment("Ou alors faut prévoir de passer un week-end tout pourri ^^", $visitor4, new DateTime('2017-04-29 16:14 GMT')) ;
    $comment7 = new Comment("C quoi vujs???", $visitor2, new DateTime('2017-04-28 15:45 GMT')) ;
    $comment8 = new Comment("Bien mieux qu'Angular, le vrai concurrent de reactJS !", $visitor4, new DateTime('2017-04-29 14:04 GMT')) ;
    $comment9 = new Comment("Merci c'est gentil !", $owner, new DateTime('2017-04-19 14:24 GMT')) ;

    // AJOUT DES COMMENTAIRES AUX POSTS
    $post1->addComment($comment1);
    $post1->addComment($comment9);
    $post1->addComment($comment2);
    $post2->addComment($comment3);
    $post2->addComment($comment4);
    $post3->addComment($comment5);
    $post3->addComment($comment6);
    $post4->addComment($comment7);
    $post4->addComment($comment8);
	
    // AJOUT DES POSTS AU BLOG
    $blog->addPost($post1);
    $blog->addPost($post2);
    $blog->addPost($post3);
    $blog->addPost($post4);

?>
