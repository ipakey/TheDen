<?php

	if(isset($_POST['login-submit'])){
		require 'db_conn/dbh.inc.php';
		
		$name =$_POST['nameKwnas'];
		$password= $_POST['password'];
		
		
		
		
		if(empty($name)|| empty($password)){
			header("Location: ../index.php?lIerror=emptyfields&name=".$nameuser."&password=".$password);
			exit();
		}
		
		else{
			$sql="SELECT * FROM users WHERE cu_uid=? OR cu_name=?;";
			$stmt=mysqli_stmt_init($connusers);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../index.php?lIerror=sql");
				
			exit();
			}
			else{
				mysqli_stmt_bind_param($stmt,"ss",$name, $name);
				mysqli_stmt_execute($stmt);
				$result=mysqli_stmt_get_result($stmt);
				if($row = mysqli_fetch_assoc($result)){
					$pwdChk= password_verify($password, $row['cu_pwd']);
					if($pwdChk == false){
						header("Location: ../index.php?lIerror=pwd");
						exit();	
					}
					elseif ($pwdChk == true){
						$verified = $row['cu_vUser'];
						if(!$verified == 'Y' ){
						header("Location: ../index.php?lIerror=unverified");
						exit();	
						}
						else{
							session_start();
							$_SESSION['userId']= $row['cu_id'];
							$_SESSION['userName']= $row['cu_name'];
							$_SESSION['userKwas']= $row['cu_uid'];
							$_SESSION['verified']=$row['cu_vUser'];
							
							
						
						}
						
						header("Location: ../index.php?lIerror=sucess");
						exit();
						
					}
					else{
						header("Location: ../index.php?lIerror=nouser");
						exit();
					}
				}
			}
		}
	}
	
	else{
		header("Location: ../index.php?lIerror=loginincorrect");
		exit();

	}

