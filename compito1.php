<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			$nome = $_POST['nome'];
            $cognome = $_POST['cognome'];
            
            ?>
            Ciao sono <?php echo $nome?> <?php echo $cognome?>
            
        <form method="POST">
			<table>
				<tr>
					<td>
						<label for="nome">nome:</label>
					</td>
					<td>
						<input type="text" name="nome" class="testo" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="cognome">cognome:</label>
					</td>
					<td>
						<input type="text" name="cognome" class="testo" />
					</td>
				</tr>
                <tr>
					<td>
						<input type="submit" value="Invio" />
					</td>
				</tr>
            </table>
		</form>
	</body>
</html>   
