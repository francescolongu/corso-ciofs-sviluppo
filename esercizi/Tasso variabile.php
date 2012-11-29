<HTML>
  <HEAD>
   </BODY>
    <TITLE>TITOLO PAGINA web </TITLE>  
        <Table BORDER=1> 
	   <TR>
             <TD COLSPAN=2 ROWSPAN=2>
               <?php
                 $prestito = 10000;
                 $tasso = 5.45;
                 $restituzione = ($prestito/100)*$tasso;
                 echo "Per $prestito ora mi devi restituire $restituzione euro";   
               ?>   
             </TD>  
	     <TD>1.3</TD>
	   </TR>
	   <TR>
             </TD>
             <TD>2.3</TD>
           </TR>
           <TR>
             </TD>   
	     <TD>3.1</TD>
	     <TD>3.2</TD>
             <TD>3.3</TD>
	   </TR>
	</TABLE>
      </BODY>
</HTML>
