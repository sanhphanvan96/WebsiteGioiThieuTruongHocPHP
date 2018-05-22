<!-- header -->
<?php include_once 'inc/header.php'; ?>
<!-- /.header -->

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

  			<div class="content-box-large">
  				<div class="row">
	  				<div class="panel-heading">
	  					<div class="panel-title ">Quản lý Thông báo</div>
		  			</div>
				</div>
				<hr>	
				<div class="row">
					<div class="col-md-8">
						<a href="notificationAdd.php" class="btn btn-success">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>

					</div>
                	<div class="col-md-4">
                 	 <div class="input-group form">
                       <input id="search" type="text" class="form-control" placeholder="Search..." autofocus>
                       <span class="input-group-btn">
                         <button id="btn-search"class="btn btn-primary" type="button">Search</button>
                       </span>
                  	 </div>
                  	</div>
				</div>

				<div class="row">
  				<div class="panel-body">
					  <table cellpadding="0" cellspacing="0" border="0" 
					  	class="table table-hover table-striped table-bordered" 
					  	id="table-view">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tiêu đề</th>
								<th>Khoa</th>
								<th>Chi tiết</th>
								<th>Chức năng</th>
							</tr>
						</thead>
						<tbody>
						<?php
							require_once "../utils/DBConnector.php";
						?>
						<?php
							$statement = "SELECT * FROM `notification` ORDER BY `created_at` DESC";
							$res = $connect->query($statement);
						
							if($res) {
								while ($row = $res->fetch_object()){
							?>
								<tr class="<?php if($row->id % 2 == 0) echo "odd";  else echo "even"; ?> gradeX">
									<td><?php echo $row->id; ?></td>
									<td>
										<a href="../public/notificationView.php?id=<?php echo $row->id; ?>" target="_blank"><?php echo $row->title; ?></a>
										<br><br>
										<?php echo "<code>".$row->created_at."</code>"; ?>
									</td>
									<td><?php echo $row->idk; ?></td>
									<?php 
									$detail = $row->detail; 
									if (strlen($detail) > 400)
										$detail = substr($detail, 0, 400) . '...';
									?>
									<td width="600"><?php echo htmlspecialchars($detail); ?></td>
									<td width="160" class="center text-center">
										<a href="notificationEdit.php?id=<?php echo $row->id;?>" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
										<a href="notificationDel.php?id=<?php echo $row->id;?>" 
											title="" 
											class="btn btn-danger"
											onclick="return confirm('Bạn chắc chắn muốn xóa?');"
											><span class="glyphicon glyphicon-trash"></span> Xóa</a>
									</td>
								</tr>
							<?php 
								} 
							}
						?>
						</tbody>
					</table>

					<!-- Pagination -->
					<nav class="text-center" aria-label="...">
					   <ul class="pagination">
					      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					      <li><a href="#">2</a></li>
					      <li><a href="#">3</a></li>
					      <li><a href="#">4</a></li>
					      <li><a href="#">5</a></li>
					      <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
					   </ul>
					</nav>
					<!-- /.pagination -->
					
  				</div>
  				</div><!-- /.row -->
			  </div><!-- /.content-box-large -->
			  

		  </div>
		</div>
    </div>
	<script>
        $(document).ready(function () {
			$("#btn-search").on("click", ajaxSearch);
			$("#search").keypress(function(e) {
				if(e.which == 13) {
					ajaxSearch(e);
				}
			});
		});
		
		function ajaxSearch(e) {
			e.preventDefault();
			var searchForm = $("#search");
			var data = searchForm.val();
			console.log(searchForm.val());
			$.ajax({
				url: "./ajax/notificationSearch.php",
				type: "POST",
				cache: false,
				data: {
					keyword: data
				},
				success: function(res) {
					$("#table-view").html(res);
				},
				error: function () {
					console.log("error: search form");
				}
			});
		}
    </script>
 	<!-- Footer -->
    <?php include_once 'inc/footer.php'; ?>
    <!-- /.footer -->