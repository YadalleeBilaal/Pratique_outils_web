<?php

	if(isset($_GET['page']) && !empty($_GET['page']))
	{
		require($_GET['page'].'.php');
		if(isset($_GET['function']) && !empty($_GET['function']))
			$_GET['function']();
	}
	else
		echo "<h2>Bienvenue !</h2><p>Indiquez la page souhaitée en URL ! :)</p>";