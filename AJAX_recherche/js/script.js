// var request = new XMLHttpRequest();
// request.open("GET","http://localhost/AJAX_JSON/js/file.json");
// request.onload = function(){
// 	var donnees = JSON.parse(request.responseText);
// 	console.log(donnees);
// 	alert(donnees.interests[1]);
// };

// request.send();
var xmlHttp = new XMLHttpRequest();
var textBar = document.getElementsByTagName("input");
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
				//console.log(JSON.parse(this.responseText));
				document.getElementById("result").innerHTML = "<br/>"+object;
			}
			else
			{
				document.getElementById("result").innerHTML = "<p id='error'>Nom introuvable !</p>";
			}
			
			//onsole.log(object);
		}
	};
	xmlHttp.open("GET","http://localhost/AJAX_JSON/AJAX/launch.php?page=control&function=runQuery&arg="+textBar[0].value,true);
	xmlHttp.send(null);

  }
}