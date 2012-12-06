<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile-form.css">
	</head>
	<body>
	<?php
		$persona = array();  //Inizializzazione
		$persona[] = "Luca"; //Elemento alla posizione 0
		$persona[] = "Saba"; //Elemento alla posizione 1
		$persona[] = "M";    //Elemento alla posizione 2
		$persona[] = 1973;   //Elemento alla posizione 3
		
		echo $persona[1];
	?>
	<b>-</b>
	<?php
		//Seconda parte
		$persona = array();                 //Inizializzazione
		$persona['nome']         = "Maria"; //Elemento alla posizione 0
		$persona['cognome']      = "Rossi"; //Elemento alla posizione 1
		$persona['sesso']        = "F";     //Elemento alla posizione 2
		$persona['anno_nascita'] = 1969;    //Elemento alla posizione 3
		
		echo $persona['cognome'].'-'.$persona[3];
	?>
	<b>-</b>
	<?php
		//Terza parte
		$persona = array();          //Inizializzazione
		$persona[12]      = "Ciao";  //Elemento alla posizione 0
		$persona[]        = "pippo"; //Elemento alla posizione 1
		$persona['sesso'] = "M";     //Elemento alla posizione 2
		$persona[]        = "CA";    //Elemento alla posizione 3
		
		echo $persona[12].'-'.$persona[13].'-'.$persona[14];
	?>
	<br/>
	<?php
		var_dump($persona);
	?>
	<br/>
	<?php
		//Quarta parte
		$aula = array();          
		$aula[] = array();
		$aula[0]['nome'] = "Luca";
		$aula[0]['cognome'] = "Saba";
		$aula[] = array();
		$aula[1]['nome'] = 'Federico';
		$aula[1]['cognome'] = 'Ales';
		
		echo "Studente 1: ".$aula[0]['nome'].' '.$aula[0]['cognome'];
		echo "<br/>";
		echo "Studente 2: ".$aula[1]['nome'].' '.$aula[1]['cognome'];
	?>
	</body>
</html>

