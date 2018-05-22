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
	  					<div class="panel-title ">Quản lý Khoa ĐHBK ĐN</div>
		  			</div>
				</div>
				<hr>	
				<div class="row">
					<div class="col-md-8">
						<a href="facultyAdd.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>

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
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-striped table-bordered" id="table-view">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tên khoa</th>
								<th>Giới thiệu</th>
								<th>Chức năng</th>
							</tr>
						</thead>
						<tbody>
						<?php
							require_once "../utils/DBConnector.php";
						?>
						<?php
							$statement = "SELECT * FROM `faculty` ORDER BY `name` ASC";
							$res = $connect->query($statement);
						
							if($res) {
								while ($row = $res->fetch_object()){
							?>
								<tr class="<?php if($row->id % 2 == 0) echo "odd";  else echo "even"; ?>">
									<td width="150">
										<?php echo "<code>".$row->idk."</code>"; ?>
									</td>
									<td width="200"><a href="../public/view.php?idk=<?php echo $row->idk; ?>" target="_blank">
										<?php echo $row->name; ?></a>
									</td>
									<?php 
									$info = $row->info; 
									if (strlen($info) > 200)
										$info = substr($info, 0, 200) . '...';
									?>
									<td width="500" height="100"><?php echo htmlspecialchars($info); ?></td>
									<td width="200" class="center text-center">
										<a href="facultyEdit.php?id=<?php echo $row->idk;?>" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
										<a href="facultyDel.php?id=<?php echo $row->idk;?>" 
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
				url: "./ajax/facultySearch.php",
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