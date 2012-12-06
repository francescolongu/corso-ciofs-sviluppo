<HTML>
 <HEAD>
 </HEAD> 
  <BODY>
    <TITLE>TITOLO PAGINA web </TITLE>
	  	
	<?php
	if (!$link = mysql_connect('localhost', 'francesco')) {
		echo 'Could not connect to mysql';
		exit;
}
	var_dump($link);
	if (!mysql_select_db('mydb', $link)) {
		echo 'Could not select database';
		exit;
}
$sql = 'SELECT * FROM UM where UMcod = "l"';
$result = mysql_query($sql,$link);

if (!$result) {
	echo "DB Error, could not query the database\n";
	echo 'MySQL Error: ' . mysql_error();
	exit;
}

while ($row = mysql_fetch_assoc($result)) {
	echo $row['UMcod'], "<br>",$row['descrizione'], "<br>", $row['idUM'];
}			    
	?>
  </BODY>
</HTML>

