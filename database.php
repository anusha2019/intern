<?php 

if(isset($_POST['signup'])){
	$connection = mysqli_connect('localhost','root','','internship_project');
	if(! $connection){
		echo "error in connecting";
		return;
	}

	$sql = "SELECT * FROM `user`";
	//print_r($connection);
$result = mysqli_query( $connection, $sql);
$flag=0;

if ( mysqli_num_rows($result) > 0 ) {
	while( $row = mysqli_fetch_assoc ( $result ) ) {
		if( $row['email'] == $_POST['email'] ){

			$flag=1;
			break;
		}
	}
}
if($flag==0){
	$insert_sql="INSERT INTO `user` 
	(`userName`, `email`, `password`, `userType`) VALUES 
	( '".$_POST['userName']."', '".$_POST['email']."', '".$_POST['password']."',2)";
		$display = mysqli_query($connection, $insert_sql);


//INSERT INTO `usermeta` (`id`, `userId`, `metaKey`, `metaValue`) VALUES (NULL, '', '".$_POST['phoneNumber']."', '')
print_r($_POST);
$USERID;
$sql = "SELECT userId FROM `user` WHERE `email`='".$_POST['email']."'";
	//print_r($connection);
$result = mysqli_query( $connection, $sql);

print_r($result);
if ( mysqli_num_rows($result) > 0 ) {
	while( $row = mysqli_fetch_assoc ( $result ) ) {
		$USERID=	 $row['userId'];
			
		}
	}

echo($USERID);



$meta_array = array('first_name' =>$_POST['firstName'] ,'last_name' =>$_POST['lastName'] ,'phone' => $_POST['phoneNumber'] );

foreach ($meta_array as $key => $value) {
	# code...


	$insert_sql="INSERT INTO `usermeta` (`id`, `userId`, `metaKey`, `metaValue`) VALUES (NULL, '".$USERID."', '".$key."', '".$value."')";
	$result = mysqli_query( $connection, $insert_sql);
	if($result)
		echo "inserted";	


}



			
}

		else{
			echo "user existing";
		}







}


?>