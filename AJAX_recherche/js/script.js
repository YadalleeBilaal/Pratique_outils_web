var xmlHttp = new XMLHttpRequest();
var textBar = document.getElementsByTagName("input");
var insertNewName = document.getElementById("soumettre");
function detectInput()
{
  if(textBar[0].value.length > 0)
  {	
  	
	xmlHttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200)
		{
			var templateScript = document.getElementById("handle").innerHTML;
			var templateCompilation = Handlebars.compile(templateScript);
			if(this.responseText.indexOf("None") < 0)
			{
				var object = templateCompilation(JSON.parse(this.responseText));
				document.getElementsByClassName("result")[0].innerHTML = "<br/>"+object;
			}
			else
				document.getElementsByClassName("result")[0].innerHTML = "<p id='error'>Nom introuvable !</p>";
		}
	};
	xmlHttp.open("GET","http://localhost/AJAX_JSON/AJAX_recherche/launch.php?page=control&function=runQuery&arg="+textBar[0].value,true);
	xmlHttp.send(null);
  }
  else
  	document.getElementById("result").innerHTML = "<p>Veuillez saisir un nom</p>";
}

insertNewName.addEventListener('click',insertInDb);

function insertInDb()
{
	xmlHttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementsByClassName("result")[1].innerHTML = this.responseText;
			document.getElementById("wait").innerHTML = "<span style='color:green'>Insertion successful</span>";
			textBar[1].value = null;
		}
		else
			document.getElementById("wait").innerHTML = "<span style='color:red'>Please wait...</span>";
	};
	var newName = encodeURIComponent(textBar[1].value);
	var argument = "newName="+newName;
	xmlHttp.open("POST","http://localhost/AJAX_JSON/AJAX_recherche/launch.php?page=control&function=addName",true);
	xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlHttp.send(argument);
}