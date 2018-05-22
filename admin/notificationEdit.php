<!-- header -->
<?php include_once 'inc/header.php'; ?>
<?php include_once '../utils/DBConnector.php'; ?>
<!-- /.header -->

<?php
    $id = null;
    $idk = null;
    $detail = null;
    $title = null;

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        // Nếu chưa submit thì hiển thị form chỉnh sửa
        if(!isset($_POST["submit"])) {
            // Tìm record có id = $id
            $field = mysqli_query($connect, "SELECT * FROM notification WHERE id='$id'");
            if($field = $field->fetch_object()){
                $id = $field->id;
                $idk = $field->idk;
                $detail = $field->detail;
                $title = $field->title;
            } else {
                // Chuyển hướng trang nếu không tìm thấy dữ liệu
                header("Location: index.php");
            }
        } else {
            // Nếu submit thì cập nhật thông báo
            $id = htmlentities($_POST["id"], ENT_QUOTES);
            $title = htmlentities($_POST["title"], ENT_QUOTES);
            $idk = $_POST["idk"];
            $detail = $_POST["detail"];
            // kiểm tra tất cả các trường có null ko
            if($id == "" || $title == "" || $idk == "" || $detail == "") {
                setFlash("error", "Lỗi: các trường không được để trống!");
            } else {
                // cập nhật giá trị cho thông báo
                $sql = "UPDATE notification SET title='$title', idk='$idk', detail='$detail' WHERE id='$id'";
                if ($connect->query($sql) === TRUE) {
                    setFlash("success", "Đã cập nhật thông tin thông báo thành công!");
                } else {
                    setFlash("error", "Cập nhật thông tin thông báo không thành công! ".$connect->error);
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
		  					<div class="panel-title ">Chỉnh sửa thông báo</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div>
								<div class="row mb-10"></div>
								<input name="id" type="hidden" value="<?php echo $id; ?>" >
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="title">Tiêu đề</label>
											<input name="title" type="text" class="form-control" 
                                            value="<?php echo $title; ?>"
                                            placeholder="Nhập tiêu đề">
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
                                                        if(strcmp($row->idk, $idk) == 0 )
                                                            echo '<option value="'.$row->idk.'" selected>'.$row->name.'</option>';
                                                        else
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
										   <textarea name="detail" class="ckeditor form-control" rows="7">
                                                <?php echo $detail; ?>
                                           </textarea>
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