<?php
	
			 function make_connection(){
				$cnn=mysqli_connect("localhost","root","","kyc_db");
				if(mysqli_connect_errno()){
					echo "failed to connect".mysqli_connect_errno();
				}
				else console.log("connection established");
				return $cnn;
			}

		 
				
				
			
?>