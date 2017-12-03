<?php

	function searchName()
	{
			require("connection.php");
			$array = array();
			$query = 'SELECT * from informations where name like \''.htmlspecialchars($_GET['arg']).'%\'';
			$request = $lienBDD->prepare($query);
			$request->execute();

			if($request->rowcount() > 0)
			{	
				while($result = $request->fetch())
				{
					$array['id'][] =$result['id'];
					$array['name'][] =$result['name'];  
				}
//////////PRÉFÉRER L'UTILISATION DE JSON POUR DE MEILLEURES PERFORMANCES !!!!
				//UTILISER ÉGALEMENT LE FRAMEWORK HANDLEBARS POUR ÉVITER TROP DE LIGNES DE CODE JS EN DOM !!!
				echo "<table style='border:1px solid black'>
				<tr>
					<th>Id</th>
					<th>Name</th>
				</tr>";
				for($i=0;$i<count($array['id']);$i++)
				{
					echo '<tr><td>'.$array['id'][$i].'</td>';
					echo '<td>'.utf8_encode($array['name'][$i]).'</td></tr>';
				}
				echo "</table>";
			}
			else
			{
				echo "";
			}
	}