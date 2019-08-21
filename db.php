<?php
     
	   /* نضال عبدالرحمن بي  
   		 رقم القيد 216185139	
              المهمة الثانية  	*/
	
	
   $dsn      = 'mysql:host=localhost;dbname=madrasati';
   $user     = 'root';
   $password = '';
 
    try{
       $DB_con = new PDO($dsn , $user , $password );   
       $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	  
	}
	catch(PDOException $e){
		echo $e->getMessage();
		
	}


?>
