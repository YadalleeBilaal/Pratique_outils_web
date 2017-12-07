<?php

	function searchName()
	{
			//setlocale(LC_CTYPE, 'fr_FR.UTF-8');
			require("connection.php");
			$array = array();
			$query = 'SELECT * from informations where name like \''.$_GET['arg'].'%\'';
			$request = $lienBDD->prepare($query);
			$request->execute();

			if($request->rowcount() > 0)
			{	
				while($result = $request->fetch())
				{
					array_push($array,array("id"=>$result['id'],"name"=>($result['name'])));
				}
				print json_encode($array, JSON_FORCE_OBJECT);
			}
			else
				print json_encode("None");
	}

	function insertName()
	{
		//setlocale(LC_CTYPE, 'fr_FR.UTF-8');
		if(isset($_POST['newName']))
		{
			require("connection.php");
			$query = 'INSERT INTO informations (name) values (\''.$_POST['newName'].'\')';
			$request = $lienBDD->prepare($query);
			$request->execute();
		}
	}