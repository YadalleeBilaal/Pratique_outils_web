<?php

	function searchName()
	{
		try{
			require("connection.php");
			$array = array();
			$query = 'SELECT * from informations where name like \''.htmlspecialchars($_GET['arg']).'%\'';
			//echo "<script>alert($query)</script>";
			//$query= "SELECT * from informations where name='Anna'";
			$request = $lienBDD->prepare($query);
			$request->execute();

			if($request->rowcount() > 0)
			{	
				while($result = $request->fetch())
				{
					$array['id'][] =$result['id'];
					$array['name'][] =$result['name'];  
				}
				print json_encode($array);	
			}
		}catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}

	function submitName($value)
	{
		require("connection.php");
		$sql = 'INSERT INTO informations (name) values(\''.htmlspecialchars($value).'\')';
		$request = $lienBDD->prepare($sql);
		$request->execute();
	}