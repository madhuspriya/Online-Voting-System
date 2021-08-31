<?php
session_start();
include('connect.php');

$votes = $_post['gvotes'];
$total_votes = $votes+1;
$gid = $_post['gid'];
$uid = $_SESSION['userdata']['id'];

$update_votes = mysqli_query($connect, "UPDATE user SET votes='$total_votes' WHERE id='$gid' ");
$update_users_status = mysqli_query($connect, "UPDATE user SET status=1 WHERE id='$uid' ");

if($update_votes and $update_user_status){
    $groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2");
	$groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
	$_SESSION['userdata']['status'] = 1;
	$_SESSION['groupsdata'] = $groupsdata;
	echo '
    <script>
	    alert("Voting Successfull!");
	    window.location = "../api/dashboard.php";
    </script>    
  ';
}
else{
	echo '
		<script>
		    alert("Some error occoured!");
		    window.location = "../api/dashboard.php";
		 </script>    
        ';
}


?>