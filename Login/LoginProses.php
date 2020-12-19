<?php 
include '../Connection/connection.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$result = mysqli_query($connect,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($result);
if($cek > 0){
	$data = mysqli_fetch_assoc($result);
	if($data['level']==1){
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        $_SESSION['level'] = 1;
        echo "Admin sukses";
		//header("location:../admin/index.php");
	}else if($data['level']==2){
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $username;
        $_SESSION['level'] = 2;
        echo "Developer sukses";
		//header("location:../developer/index.php");
	}else if($data['level']==3){
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $username;
        $_SESSION['level'] = 3;
        echo "user sukses";
		//header("location:../user/index.php");
	}else{
		echo "ID level tidak ditemukan";
    }
}else{
	echo "Username with the same Password is not found";
}
?>