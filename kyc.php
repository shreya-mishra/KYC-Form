<?php
	include "connect.php";
	$conn=make_connection();
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
    $lname=$_POST['lname'];
	$cname=$_POST['cname'];
	$mobnumber=$_POST['mobnumber'];
	
    $emailid=$_POST['emailid'];
    $dob=$_POST['dob'];
    $pancard=$_POST['pancard'];
	$pincode=$_POST['pincode'];
	$district=$_POST['district'];
    $state=$_POST['state'];
    $city=$_POST['city'];
	$address=$_POST['address'];
	$adharImg=$_POST['adharImg'];
	$panImg=$_POST['panImg'];
	
	$query1="Select * from kyc_details;";
	$result=mysqli_query($conn,$query1);
	if(mysqli_num_rows($result)==0){
		$query2="INSERT INTO `kyc_details` ( `fname`,`mname`,`lname`,`cname`,`mobnumber`,`emailid`,`dob`,`pancard` `pincode`,`district`,`state`,`city`,`address`,`user_id`) VALUES ( '$fname', '$mname','$lname',' $cname',' $cname','$emailid','$dob','$pancard','$pincode','$state',' $city',' $address',' $district',1)";
		mysqli_query($conn,$query2);
		header("location:../login.php");
	}
	else{
		$query3="SELECT MAX(user_id) from kyc_details;";
		$count=mysqli_query($conn,$query3);
		$result=mysqli_fetch_array($count);
		$id=$result['MAX(user_id)']+1;
		$query4="INSERT INTO `kyc_details` ( `fname`,`mname`,`lname`,`cname`,`cname`,`emailid`,`dob`,`pancard` `pincode`,`state`,`city`,`address`,`district`,`user_id`) VALUES ( '$fname', '$mname','$lname',' $cname',' $cname','$emailid','$dob','$pancard','$pincode','$state',' $city',' $address',' $district','$id')";
		if(!mysqli_query($conn,$query4)){echo "failded";}
		$msg="done";
		header("location:../login.php?msg=$msg");
	}
?>