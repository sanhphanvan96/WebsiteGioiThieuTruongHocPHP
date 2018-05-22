<!-- header -->
<?php include_once 'inc/header.php'; ?>
<?php include_once '../utils/DBConnector.php'; ?>
<!-- /.header -->

<?php
    if(isset($_POST["submit"])) {
        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";
        $idk = $_POST["idk"];
        $name = $_POST["name"];
		$info = $_POST["info"];
        if($idk == "" || $name == "" || $info == "") {
			header("location: facultyAdd.php");
			die();
		}
		$sql = "INSERT INTO faculty (idk, name, info) VALUES 
			('$idk', '$name', '$info')";
		if ($connect->query($sql) === TRUE) {
			setFlash("success", "Đã tạo mới khoa thành công!");
		} else {
			setFlash("error", "Tạo mới khoa không thành công! ".$connect->error);
		}
    }

?>
<form method="post" action="">
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2"></div>
		  <div class="col-md-10">
			  <?php require_once "inc/flash.php";?>
		  </div>
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <!-- Nav-bar -->
				<?php include_once 'inc/left-bar.php'; ?>
				<!-- /.nav-bar -->
             </div>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Thêm thông báo</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label for="idk">Mã khoa</label>
											<input name="idk" type="text" class="form-control" placeholder="KhoaCNTT">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tên khoa</label>
											<input name="name" type="text" class="form-control" placeholder="Khoa Công nghệ Thông tin">
										</div>
									</div>

									<div class="col-sm-6"></div>

									<div class="col-sm-12">
										<div class="form-group">
										   <label>Giới thiệu</label>
										   <textarea name="info" class="ckeditor form-control" rows="7"></textarea>
										</div>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-sm-12">
										<input name="submit" type="submit" value="Thêm" class="btn btn-success" />
										<input type="reset" value="Nhập lại" class="btn btn-default" />
									</div>
								</div>

							</div>
						</div>
			  		</div>
	  			</div><!-- /.row col-size -->
	  		
		  </div><!-- /.col-md-10 -->
		</div><!-- /.row -->
    </div><!-- Page content -->
</form>
    <script src="ckeditor/ckeditor.js"></script>
   <!-- footer -->
   <?php include_once 'inc/footer.php'; ?>