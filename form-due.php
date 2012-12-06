<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile-form.css">
	</head>
	<body>
		<?php
			$utenti = array();
			$utenti['luca'] = 'password123';
			$utenti['fede'] = 'silenzio!';
			
			if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
				$nome_utente_inviato = $_POST['nomeutente'];
				$password_inviata = $_POST['passwd'];
				
				if ( isset($utenti[$nome_utente_inviato])) {
					$password_salvata = $utenti[$nome_utente_inviato];
					if($password_salvata == $password_inviata) {
						echo "Autenticazione riuscita!";
					} else {
						echo "Password errata!";
					}
				} else {
					echo "Nome utente errato!";
				}
			} else {
				echo "Autenticazione richiesta:";
			}
			//var_dump($_POST);
		?>
		<form method="POST">
			<table>
				<tr>
					<td>
						<label for="nomeutente">Nome utente:</label>
					</td>
					<td>
						<input type="text" name="nomeutente" class="testo" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="passwd">Password:</label>
					</td>
					<td>
						<input type="password" name="passwd" class="testo password" />
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Invia dati" />
					</td>
					<td>
						<input type="reset" value="Cancella dati" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

