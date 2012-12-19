<?php include 'funzioni.php' ?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css">
	</head>
	<body>
        <?php $nome = getParametro('nome'); ?>
        Benvenuto <?php echo $nome ?><br/><p>
        Lancio dei dadi:<br>
        <?php
            $computer = rand(1,6);
            $giocatore = rand(1,6);
        ?>
        <?php echo $nome ?> hai fatto <b><?php echo $giocatore ?></b>
        mentre io ho fatto <b><?php echo $computer ?></b><p>
        <?php
        
            if ($computer == $giocatore) {
                echo "Hai pareggiato!";
            }
            if ($computer > $giocatore) {
                echo "Mi dispiace $nome hai perso!";
            }
            if ($computer < $giocatore) {
                echo "Complimenti $nome hai vinto!";
            }
            
        ?>
        </p>
        
        <form method='POST'>
            <input type='hidden' name='nome' value="<?php echo $nome ?>" />
            <input type='submit' value='Rigioca' />
        </form>
	</body>
</html>   
