<?php require_once 'datas.php';
require_once 'classes.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog POO</title>
</head>
<h1><?php echo $blog->getTitle(); ?></h1>

<body>
<p><a href="index.php">Accueil</a></p>
<fieldset>