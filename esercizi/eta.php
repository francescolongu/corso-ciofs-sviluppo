<HTML>
  <HEAD>
   <BODY>
    <TITLE>TITOLO PAGINA web </TITLE>  
     <Table BORDER=1> 
	   <TR>
             <TD COLSPAN=2 ROWSPAN=2>
               <?php
                 $anno_di_nascita = 1980;
                 $anno_attuale = date('Y');
                 $eta = $anno_attuale - $anno_di_nascita; 
                 echo "Tu hai la bellezza di $eta anni";   
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
