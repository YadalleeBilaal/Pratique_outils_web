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