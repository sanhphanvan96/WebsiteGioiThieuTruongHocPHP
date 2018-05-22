<!-- header -->
<?php include_once 'inc/header.php'; ?>
<?php include_once '../utils/DBConnector.php'; ?>
<!-- /.header -->

<?php
    $idk = null;
    $name = null;
    $info = null;
    if(isset($_GET["id"])) {
        $idk = $_GET["id"];
        // Nếu chưa submit thì hiển thị form chỉnh sửa
        if(!isset($_POST["submit"])) {
            // Tìm record có idk = $idk
            $field = mysqli_query($connect, "SELECT * FROM faculty WHERE idk='$idk'");
            if($field = $field->fetch_object()){
                $idk = $field->idk;
                $name = $field->name;
                $info = $field->info;
            } else {
                // Chuyển hướng trang nếu không tìm thấy dữ liệu
                header("Location: index.php");
            }
        } else {
            // Nếu submit thì cập nhật thông báo
            $name = htmlentities($_POST["name"], ENT_QUOTES);
            $idk = htmlentities($_POST["idk"], ENT_QUOTES);
            $info = $_POST["info"];
            // kiểm tra tất cả các trường có null ko
            if($idk == "" || $name == "" || $info == "") {
                setFlash("error", "Lỗi: các trường không được để trống!");
            } else {
                // cập nhật giá trị cho thông báo
                $sql = "UPDATE faculty SET name='$name', info='$info' WHERE idk='$idk'";
                if ($connect->query($sql) === TRUE) {
                    setFlash("success", "Đã cập nhật thông tin khoa thành công!");
                } else {
                    setFlash("error", "Cập nhật thông tin khoa không thành công! ".$connect->error);
                }
            }
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
		  					<div class="panel-title ">Chỉnh sửa thông tin Khoa</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								<div class="row">
                                    <div class="col-sm-3">
										<div class="form-group">
                                            <label for="idk">Mã khoa</label>
                                            <input name="idk" type="hidden" value="<?php echo $idk; ?>">
											<input name="idk" type="text" class="form-control" 
                                            value="<?php echo $idk; ?>"
                                            disabled
                                            >
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="name">Tên khoa</label>
											<input name="name" type="text" class="form-control" 
                                            value="<?php echo $name; ?>"
                                            placeholder="Nhập tiêu đề">
										</div>
									</div>

									<div class="col-sm-6"></div>

									<div class="col-sm-12">
										<div class="form-group">
										   <label>Giới thiệu</label>
										   <textarea name="info" class="ckeditor form-control" rows="7">
                                                <?php echo $info; ?>
                                           </textarea>
										</div>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-sm-12">
										<input name="submit" type="submit" value="Lưu" class="btn btn-success" />
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