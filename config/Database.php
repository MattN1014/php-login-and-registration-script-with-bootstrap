<?php 

    define("DSN", "mysql:host=localhost;dbname=login_register_script");
    define("USERNAME", "matt");
    define("PWD", "password");


	

	try {
            
            //Create the connection 
            $db = new PDO(DSN, USERNAME, PWD);
            
            //set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //Display succesfull connection message
            echo "Connection successful";

	}
	catch (PDOException $ex) {
            //Display error message
            echo "Connection failed ".$ex->getMessage();
        }




	