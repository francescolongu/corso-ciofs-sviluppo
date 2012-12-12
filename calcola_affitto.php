<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
            $obbiettivo = $_POST['obbiettivo_euro'];
            $imu = $_POST['imu'];
            $aliquota = $_POST['aliquota'];
            
            
            $risultato = ((($obbiettivo*12)+$imu)*10000)/(9700-85*$aliquota);
            $tasse = ($risultato*0.85)*($aliquota/100);
        ?>    
         Per avere un mensile netto di <?php echo $obbiettivo ?> euro, sar&agrave; neccessario appliccare un affitto annuo di <?php echo number_format($risultato, 2, ',', '.') ?> euro.
         In questo modo pagherai <?php echo $imu ?> euro di imu e un totale di <?php echo $tasse ?> euro di irpef.
            
		<form method="POST">
			<table>
				<tr>
					<td>
						<label for="Obbiettivo:Euro">Obbiettivo:Euro</label>
					</td>
					<td>
						<input type="text" name="obbiettivo_euro" class="testo" /> al mese
					</td>
				</tr>
				<tr>
					<td>
						<label for="IMU": "Euro">IMU: Euro</label>
					</td>
					<td>
						<input type="text" name="imu" class="testo" />
					</td>
				</tr>
                <tr>
					<td>
						<label for="Aliquota":> Aliquota:</label>
					</td>
					<td>
						<input type="text" name="aliquota" class="testo" /> % dell'imponibile
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

