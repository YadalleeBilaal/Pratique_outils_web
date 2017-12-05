<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>AJAX and JSON</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h2>Application de recherche dans une base de données</h2>
	<label for="looking_for">Rechercher un nom :</label>
	<input type="text" name="looking_for" oninput="detectInput()"/>
	<script id="handle" type="text/x-handlebars-template">
		<table id="result">
			<tr>
				<th>Nom</th>
				<th>Identifiant</th>
			</tr>
		{{#each this}}
			<tr>
				<td>{{name}}</td>
				<td>{{id}}</td>
			</tr>
		{{/each}}
		</table>
	</script>
	<div class="result"></div>

	<h2>Insertion d'une nouvelle donnée</h2>
	<label for="addName">Saisir le nouveau nom :</label>
	<input type="text" name="addName">
	<div id="soumettre">Soumettre</div>
	<div class="result"></div>
	<p id="wait"></p>
	<script src="js/handlebars.js"></script>
	<script src="js/script.js"></script>
</body>
</html>