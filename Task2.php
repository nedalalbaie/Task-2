<?php 
         /* نضال عبدالرحمن بي  
   		 رقم القيد 216185139	
              المهمة الثانية  	*/
		 
		 
     include"db.php";
        
     if(isset($_POST['submit']))	{
		  
		  $user_type    = $_POST['usertype'];
		  $national_no  = $_POST['nationalno'];
		  $first_name   = $_POST['firstname'];
		  $second_name  = $_POST['secondname'];
		  $third_name   = $_POST['thirdname'];
		  $last_name    = $_POST['lastname'];
		  $gender       = $_POST['gender'];
		  $birthday     = $_POST['birthday'];
		  $address      = $_POST['address'];
		  $nationality  = $_POST['nationality'];
		  $phone_number = $_POST['phone'];
		  $email        = $_POST['email'];
		  $username     = $_POST['username'];
		  $password     = $_POST['password'];
		  
		 try{ 
		  $query = "INSERT INTO user(user_type , national_no ,first_name  , second_name , third_name , last_name , gender , birthday 
                     , address , nationality , phone_number , email , username , password ) 
		       VALUES('$user_type' , '$national_no' ,'$first_name ' , '$second_name' ,'$third_name' , '$last_name' , '$gender' , '$birthday' 
				  , '$address' , '$nationality' , '$phone_number', '$email' , '$username' , '$password')";
		$lee = $DB_con->prepare($query);
		if($lee->execute()){
			echo"<h2>تم الإدخال بنجاح</h2>";
			
		  }
	  }
	  catch(PDOException $e){
		echo $e->getMessage();
		
	}
	  
	 }
?>