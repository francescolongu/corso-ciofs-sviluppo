<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile-form.css">
	</head>
	<body>
		<?php
			$cambio = array();
			$cambio['EU'] = 1;
			$cambio['USD'] = 1.28;
			$cambio['YEN'] = 105.37;
			$cambio['GBP'] = 0.80;
			$cambio['CHF'] = 1.20;
            
            $soldi_da_cambiare = $_POST['valuta'];
            $tasso_di_cambio_origine = $cambio[$_POST['cambio_da']];
            $tasso_di_cambio_destinazione = $cambio[$_POST['cambio_a']];
			
            $risultato = $soldi_da_cambiare/$tasso_di_cambio_origine*$tasso_di_cambio_destinazione;
            
            echo "$soldi_da_cambiare ".$_POST['cambio_da']." corrispondono a $risultato ".$_POST['cambio_a'];
		?>
		<form method="POST">
			Converti 
			<input type="text" name="valuta" />
			<select name="cambio_da">
			<?php foreach($cambio as $key => $val): ?>
				<option value="<?php echo $key ?>">
					<?php echo $key ?>
				</option>
			<?php endforeach; ?>
			</select>
			in
			<select name="cambio_a">
			<?php foreach($cambio as $key => $val): ?>
				<option value="<?php echo $key ?>">
					<?php echo $key ?>
				</option>
			<?php endforeach; ?>
			</select>
			<input type="submit" value="Calcola cambio" />
		</form>
		
	</body>
</html>

