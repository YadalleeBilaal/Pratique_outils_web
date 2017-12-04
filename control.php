<?php

	function initialize()
	{
		require("search.php");
	}

	function runQuery()
	{
		require("./modele/call.php");
		searchName();
	}

	function insertName()
	{
		require("./modele/call.php");
		submitName($_POST['ar']);
	}