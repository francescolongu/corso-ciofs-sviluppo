<html>
    <head>
		<link rel="stylesheet" type="text/css" href="Bottone.css">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>CSS Buttons Example</title>
  
    </head>
         
    <body>
        <div class="preload">
            <img src="btnNormal.png">
            <img src="btnHover.png">
            <img src="btnPressed.png">
        </div>
        <div style="text-align: center">            
            <div class="button" onclick="$('#showhide').fadeIn()">
                <div class="OK"><b>Mostra</b></div>
            </div>
            <div class="button" onclick="$('#showhide').fadeOut()">
                <div class="Error">Nascondi</div>
            </div>
            <div class="button" onclick="alert('Questo è un messaggio a comparsa!')">
                <div class="Warning">Alert</div>
            </div>
            <div class="button" onclick="alert('Hey, sei sempre così testardo?')">
                <div>Non provare a cliccarmi!</div>
            </div>
             
            <h3 id="showhide">Usa i pulsanti per visualizzarmi o per nascondermi!</h1>
        </div>
    </body>
</html>
