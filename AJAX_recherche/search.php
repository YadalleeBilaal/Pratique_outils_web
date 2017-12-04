<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>AJAX and JSON</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h2>Application de recherche dans une base de données</h2>
	<label for="looking_for">Saisir quelque chose :</label>
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
	<div id="result"></div>
	<script src="js/handlebars.js"></script>
	<script src="js/script.js"></script>
</body>
</html>