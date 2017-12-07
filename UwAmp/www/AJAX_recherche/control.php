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

	function addName()
	{
		require("./modele/call.php");
		insertName();
	}