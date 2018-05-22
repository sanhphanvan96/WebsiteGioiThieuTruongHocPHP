<!-- header -->
<?php include_once 'inc/header.php'; ?>
<?php include_once '../utils/DBConnector.php'; ?>
<!-- /.header -->

<?php
    if(isset($_POST["submit"])) {
        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";
        $title = $_POST["title"];
        $detail = $_POST["detail"];
		$idk = $_POST["idk"];
        if($title == "" || $detail == "" || $idk == "") {
			header("location: notificationAdd.php");
			die();
		}
		$sql = "INSERT INTO notification (title, idk, detail) VALUES 
			('$title', '$idk', '$detail')";
		if ($connect->query($sql) === TRUE) {
			setFlash("success", "Đã tạo mới thông báo thành công!");
		} else {
			setFlash("error", "Tạo mới thông báo không thành công! ".$connect->error);
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
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tiêu đề</label>
											<input name="title" type="text" class="form-control" placeholder="Nhập tiêu đề">
										</div>
										
										<div class="form-group">
											<label>Khoa</label>
											<select name="idk" class="form-control">
												<option value="common">Thông báo chung</option>
											<?php
												$statement = "SELECT `idk`, `name` FROM `faculty` ORDER BY `name` ASC";
												$res = $connect->query($statement);
											
												if($res) {
													while ($row = $res->fetch_object()){
														echo '<option value="'.$row->idk.'">'.$row->name.'</option>';
													}
												}
												$connect->close();
											?>
											</select>
										</div>
									</div>

									<div class="col-sm-6"></div>

									<div class="col-sm-12">
										<div class="form-group">
										   <label>Chi tiết</label>
										   <textarea name="detail" class="ckeditor form-control" rows="7"></textarea>
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