<?php
    $db = new mysqli("localhost", "root", "", "mydb");
    var_dump($db);
    echo '<br> e qui ci siamo';

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    
    echo '<br> e anche qui ci siamo <br>';
    
    $query = "SELECT UMcod, descrizione FROM UM ORDER by UMcod limit 3";
    $result = $db->query($query);

    var_dump($result);

    /* numeric array */
    $row = $result->fetch_array(MYSQLI_NUM);
    printf ("<br>%s (%s)\n", $row[0], $row[1]);
	echo "<br>chiamata con vettore a indici numerici";
	
    /* associative array */
    $row = $result->fetch_array(MYSQLI_ASSOC);
    printf ("<br>%s (%s)\n", $row["UMcod"], $row["descrizione"]);
	echo "<br>chiamata con vettore con chiavi";
	
    /* associative and numeric array */
    $row = $result->fetch_array(MYSQLI_BOTH);
    printf ("<br>%s (%s)\n", $row[0], $row["descrizione"]);
    echo "<br>chiamata con vettore a indici misti";

    /* free result set */
    $result->free();

    /* close connection */
    $mysqli->close();

?>
