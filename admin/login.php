<?php
	require_once "../utils/session.php";
	// Nếu đã đăng nhập thì chuyển hướng đến index
	if(isLogin()) header("Location: index.php");

	// khi nhấn login
	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		echo $username;
		// Nếu chưa nhập đủ thông tin thì về lại trang đăng nhập
		if($username == "" ||  $password == "") {
			header("location: login.php");
		} else {
			require_once "../utils/DBConnector.php";
			// Truy vấn tìm có phải là admin không
			$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
			echo $sql;
			$res = mysqli_query($connect, $sql);
			if (mysqli_num_rows($res) > 0) {
				// Set đăng nhập thành công và chuyển hướng đến trang chủ
				setIsLogin();
				setFlash("success", "Đăng nhập thành công!");
				header("location: index.php");
			} else {
				header("location: login.php");
			}
			$connect->close();
		}
	}
?>
<!-- header -->
<?php include_once 'inc/header.php'; ?>
<!-- /.header -->

	<div class="page-content container">
		<div class="row">
		  <div class="col-md-2"></div>
		  <div class="col-md-10">
			  <?php require_once "inc/flash.php";?>
		  </div>
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			            	<img width="100px" height="100px" class="img-circle" src="images/icon-120x120.png">
			                <h6>Đăng nhập</h6>
			            <form action="" method="post">
			                <div class="form-group">
			                	<label class="text-left pull-left" for="username">Tên đăng nhập</label>
			               		<input name="username" class="form-control" type="text" placeholder="Username">
			                </div>
			                
			                <div class="form-group">
			                	<label class="text-left pull-left" for="password">Mật khẩu</label>
			                	<input name="password" class="form-control" type="password" placeholder="Password">
			                </div>
			                
			                <div class="action">
								<button type="submit" name="login" value="login" class="btn btn-primary signup btn-block" >Login</button>
							</div>
						</form>              
			            </div>
			        </div>

			        <div class="already">
			            <p>Don't have an account yet?</p>
			            <a href="javascript:void(0)">Sign Up</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>