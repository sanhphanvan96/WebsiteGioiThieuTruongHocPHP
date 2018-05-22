<!-- header -->
<?php include_once 'inc/header.php'; ?>
<!-- /.header -->
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <!-- Nav-bar -->
				<?php include_once 'inc/left-bar.php'; ?>
				<!-- /.nav-bar -->
             </div>
		  </div>
		  <div class="col-md-10">
				<div class="row">
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Dashboard</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
							<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-10">
								<?php require_once "inc/flash.php";?>
							</div>
				            <div class="col-md-4 col-sm-4 col-xs-4">
				                <div class="panel panel-back noti-box">
				                    <span class="icon-box bg-color-green set-icon">
				                    <span class="glyphicon glyphicon-th-list"></span>
				                </span>
				                    <div class="text-box">
				                        <p class="main-text"><a class="fs-14" href="notifications.php" title="">Quản lý thông báo</a></p>
				                        <p class="text-muted">Có 4 thông báo</p>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-4 col-sm-4 col-xs-4">
				                <div class="panel panel-back noti-box">
				                    <span class="icon-box bg-color-blue set-icon">
				                    <span class="glyphicon glyphicon-book"></span>
				                </span>
				                    <div class="text-box">
				                        <p class="main-text"><a class="fs-14" href="faculties.php" title="">Quản lý khoa</a></p>
				                        <p class="text-muted">Có 20 khoa</p>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-4 col-sm-4 col-xs-4">
				                <div class="panel panel-back noti-box">
				                    <span class="icon-box bg-color-brown set-icon">
				                    <span class="glyphicon glyphicon-user"></span>
				                </span>
				                    <div class="text-box">
				                        <p class="main-text"><a class="fs-14" href="" title="">Quản lý người dùng</a></p>
				                        <p class="text-muted">Có 5 người dùng</p>
				                    </div>
				                </div>
				            </div>
				        </div>
					</div>
		  		</div>
		  	</div>	

		  	<div class="row">

		  	</div>
		  	
		  </div><!-- /.col-md-10 -->
		</div><!-- /.row -->
    </div><!-- /.page-content -->

    <!-- Footer -->
    <?php include_once 'inc/footer.php'; ?>
    <!-- /.footer -->