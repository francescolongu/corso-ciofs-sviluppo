<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile-form.css">
	</head>
	<body>
		<?php
		$anno_di_nascita = $_POST['Anno'];
		$mese_di_nascita = $_POST['Mese'];
		$giorno_di_nascita = $_POST['Giorno'];
        $anno_attuale = date('Y');
        $mese_attuale = date('m');
        $giorno_attuale = date('d');
        $eta = $anno_attuale - $anno_di_nascita;
        if ($mese_attuale < $mese_di_nascita) {
			$eta = $eta-1;
		} else if ($mese_attuale == $mese_di_nascita) {
			   if ($giorno_attuale < $giorno_di_nascita) {
				   $eta = $eta-1;
			}
		}
		echo $eta;
		?>
		<form method = "post">
		    <table>
				<tr>
					<td>
						<label for="giorno">Giorno:</label>
				    </td>
				    <td>
						<input type="text" name="Giorno" class="testo" />
				    </td>
				</tr>
				<tr>
					<td>
						<label for="mese">Mese:</label>
				    </td>
				    <td>
						<input type="text" name="Mese" class="testo" />
				    </td>
				</tr>
				<tr>
					<td>
						<label for="anno">Anno:</label>
				    </td>
				    <td>
						<input type="text" name="Anno" class="testo password" />
				    </td>
				</tr>
				<tr>
					<td>
				        <input type="submit" value="Calcola" />
				    </td>
				</tr>
		    </table>
		</form>
	</body>
</html>
