<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>AJAX and JSON</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/handlebars.js"></script>
</head>
<body>
	<h2>Application de recherche dans une base de données</h2>
	<label for="looking_for">Saisir quelque chose :</label>
	<input type="text" name="looking_for" oninput="detectInput()"/>
	<div id="result"></div>
	<h2>Ajouter un nom dans la base de données</h2>
	<form>
		<label for="newname">Le nom à ajouter : </label>
		<input name="newname" type="text">
		<div class="button" onclick="addName()">Soumettre</div>
		<div id="result2"></div>
	</form>
	<script src="js/script.js"></script>
</body>
</html>