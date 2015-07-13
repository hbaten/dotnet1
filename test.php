<?php
	
	function request($req)
	{
		global $dbHost,$dbUser,$dbPass,$dbName;
		$dbHost = "si5wyt7b55.database.windows.net:1433";
		$dbName = "finestoDBService";$dbUser = "hbaten";$dbPass = "0kulene+";
		mysql_connect($dbHost,$dbUser,$dbPass);
		mysql_select_db($dbName);
		// printLog('SESSION',4,'SQL Query: '.$req);
		return mysql_query($req);
	}
	
	phpinfo();
	$result = request("SELECT * FROM _ALL");
	echo($result);
	
	?>