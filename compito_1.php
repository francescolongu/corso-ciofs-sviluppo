<head>
<title>compito uno</title>
</head>

	<body>
		


ciao <?php echo $_POST["cognome"];?> <?php echo $_POST["nome"];?>



			
			<form method='POST'>
				
					<table>
							<TR>
									<TD>
										<LABEL FOR="nome">Nome</LABEL>
									</TD>
									<td><input type= "text" name="nome" class="testo"/>
									</td>
							</TR>
							<TR>
									<TD>
										<LABEL FOR="cognome">Cognome</LABEL>
									</TD>
									<td><input type= "text" name="cognome" class="testo"/>
									</td>
							</TR>
							<TR>
								<TD>
									<input type="submit" value="invio"/>
									
								</TD>
					</table>
					
			</form>
	</body>

