// var request = new XMLHttpRequest();
// request.open("GET","http://localhost/AJAX_JSON/js/file.json");
// request.onload = function(){
// 	var donnees = JSON.parse(request.responseText);
// 	console.log(donnees);
// 	alert(donnees.interests[1]);
// };

// request.send();
var xmlHttp = new XMLHttpRequest();
var div = document.getElementById("result")
var textBar = document.getElementsByTagName("input");
div.style.display = "none";
function detectInput()
{
  if(textBar[0].value.length > 0)
  {	
  	
	xmlHttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200)
		{
			//alert(this.responseText);
			var object = JSON.parse(this.responseText);
			console.log(object);
			// div.innerHTML = object;
			div.style.display = "block";
		}
	};
	xmlHttp.open("GET","http://localhost/AJAX_JSON/launch.php?page=control&function=runQuery&arg="+encodeURIComponent(textBar[0].value),true);
	xmlHttp.send(null);

  }
  else
  {
  	div.style.display = "none";
  }
}

function addName()
{

	if(textBar[1].value.length > 0)
	{
		xmlHttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("result2").innerHTML = this.responseText;
			}
			else
				alert("Échec de l'ajout");
		}
	};
		var argument = "ar="+encodeURIComponent(textBar[1].value);
		xmlHttp.open("POST","http://localhost/AJAX_JSON/launch.php?page=control&function=insertName",true);
		xmlHttp.send(argument);
}		