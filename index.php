<?php
$response=array();
    $response["success"]=-1;
session_start();
if (!isset($_SESSION["session_name"])){
    header("Location:../index.php");
  exit();
}
else{
    // reaching from current directory to _user_info
    require_once __DIR__ . '/../../php/user_info.php';
    
    $user=new UserInfo();
<<<<<<< HEAD
    $json = $user->module_user_id("delta","./school_management",$_SESSION["session_name"]);
    //echo $json;
	
	//var_dump(json_decode($json,true));
	//echo "<script>console.log(".$json.")</script>";
	
	$userInfo = json_decode($json,true);
	$myUserName = $userInfo['result'][0]['username'];
	$myUserType = $userInfo['result'][0]['user_role'];
	//$userInfo['result'][6]['user_info'];
    //echo $json['result'][6]['user_role'];

=======
    echo $user->module_user_id("delta","./school_management",$_SESSION["session_name"]);
>>>>>>> origin/master
}
//echo json_encode($response);
?>


<style>
<?php include 'css/master-ui.css'; ?>
</style>

<?php include '_header.html'; ?>

<?php
<<<<<<< HEAD
require("conection/connect.php");



if(isset($myUserName) && isset($myUserType)){
	
	$sql=mysql_query("SELECT * FROM users_tbl WHERE username='$myUserName' AND type='$myUserType' AND approved='1'");
	//echo $myUserName." AND ".$myUserType;
	 
	if($sql){
								
			$cout=mysql_num_rows($sql);
			if($cout>0){
				$row=mysql_fetch_array($sql);
				
					if($row['type']=='admin') {
                        header("location: admin.php");	
						}
                
					else if($row['type']=='student') {
                        header("location: student.php");	
						}
                
					else if($row['type']=='teacher') {
                        header("location: teacher.php");	
						}
                                
					else {
						echo "<div style='width: 500px; margin-top: 100px; margin-left: 350px;''>" 
										."<div class='alert alert-danger col-lg-12'>"
										."<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
										."</button>"
										."<strong>Your Request Has been sent to admin. Please wait for approval!</strong>"
										."</div>"
										."</div>";
				}				
			}else{
				$sql = mysql_query("INSERT INTO users_tbl(username,type) VALUES('$myUserName','$myUserType');");
				
				echo "<div style='width: 500px; margin-top: 100px; margin-left: 350px;''>" 
										."<div class='alert alert-danger col-lg-12'>"
										."<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
										."</button>"
										."<strong>Your Request Has been sent to admin. Please wait for approval!</strong>"
										."</div>"
										."</div>";
			}
		}
			else{
			
				mysql_query("INSERT INTO users_tbl(username,type) VALUES('$myUserName','$myUserType';");
				
				echo "<div style='width: 500px; margin-top: 100px; margin-left: 350px;''>" 
										."<div class='alert alert-danger col-lg-12'>"
										."<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
										."</button>"
										."<strong>Your Request Has been sent to admin. Please wait for approval!</strong>"
										."</div>"
										."</div>";
			}
							
}
/*
	//session_start();
	//$_SESSION	
=======

//	session_start();
	
>>>>>>> origin/master
	require("conection/connect.php");
	
	$msg="";
	if(isset($_POST['btn_log'])){
		$uname=$_POST['username'];
		$pwd=$_POST['password'];
        $role=$_POST['role'];
        
		
		$sql=mysql_query("SELECT * FROM users_tbl
								WHERE username='$uname' AND password='$pwd' AND type='$role'
								
							");
						
		$cout=mysql_num_rows($sql);
			if($cout>0){
				$row=mysql_fetch_array($sql);
					if($row['type']=='Admin') {
                        header("location: admin.php");	
						}
                
                    if($row['type']=='Student') {
                        header("location: student.php");	
						}
                
                    if($row['type']=='Teacher') {
                        header("location: teacher.php");	
						}
                                
					else 
						$msg = "Wrong Credentials!";
			}

			
			else
					// $msg="Wrong Username and Password";
							echo "<div style='width: 200px; margin-top: 10px; margin-left: 575px;''>" 
										."<div class='alert alert-danger col-lg-12'>"
										."<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
										."</button>"
										."<strong>Wrong Credentials!</strong>"
										."</div>"
										."</div>";
<<<<<<< HEAD
}*/
=======
}
>>>>>>> origin/master

?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
<<<<<<< HEAD
			
=======
			<form role="form" data-toggle="validator" method="post" class="login_form logo_div">
			 	<h4 class="text-center">LOGIN</h4>
			 	<p>Please fill out the following form with your login credentials.</p>
			 	<div class="form-group">
			    <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
			    	<input type="text" class="form-control" id="username" name="username"  placeholder="Your Username..." required>
			    </div>
			    <div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
			    <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-key"></i></span>
			    	<input type="password" class="form-control" id="password" name="password"  placeholder="Password" required>
			    </div>
			    <div class="help-block with-errors"></div>
				</div>
                
                <div class="form-group">
			    <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select class="form-control" name="role">
                            <option>Admin</option>
                            <option>Teacher</option>
                            <option>Student</option>
                        </select>
			    </div>
			    <div class="help-block with-errors"></div>
				</div>
                
				<div class="form-group">
			    <button type="submit" name="btn_log" class="btn btn-success pull-right">Submit</button>
			  </div>
			  <div class="clearfix"></div>
			</form>
>>>>>>> origin/master
		</div>
	</div>
</div>
<?php include '_footer.html'; ?>