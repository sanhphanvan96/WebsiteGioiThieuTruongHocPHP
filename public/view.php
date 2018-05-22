<?php
	if(!isset($_GET["idk"])) {
    header("Location: index.php");
    die();
  }
  
  $idk = $_GET["idk"];

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html  lang="en-US">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <link rel="icon" href="resource/Images/favicon.jpg" type="image/x-icon">
  <head id="Head">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <title>
      Trường Đại học Bách khoa - Đại học Đà Nẵng > KhoaCNTT > Gioithieu
    </title>
    <link href="resource/Portals/_default/skins/dhbk/skin4b95.css?cdv=118" type="text/css" rel="stylesheet"/>
  </head>
  <body id="Body">
      <?php include_once "layout/script_tag.php" ?>
      <div class="wd-wapper">
      	<?php include_once "layout/header.php" ?>
      </div>
      </div>

      <div class="wd-center">
        <div class="row">
          <div id="dnn_LeftContentPanel" class="col-sm-3">
            <div class="DnnModule DnnModule-BKMenuLeft DnnModule-1905">
              <a name="1905"></a>
              <div class="DNNContainer_noTitle">
                <div id="dnn_ctr1905_ContentPane">
                  <!-- Start_Module_1905 -->
				<?php include_once "layout/left_bar.php" ?>
                  <!-- End_Module_1905 -->
                </div>
                <div class="clear"></div>
              </div>
            </div>
            <div class="DnnModule DnnModule-BKLienhe DnnModule-1910">
              <a name="1910"></a>
			<?php include_once "layout/contact.php" ?>
            </div>
          </div>
          <div id="dnn_RightContentPanel" class="col-sm-9">
            <div class="DnnModule DnnModule-BKTintuc DnnModule-1915">
              <a name="1915"></a>
              <div class="DNNContainer_noTitle">
                <div id="dnn_ctr1915_ContentPane">
                  <!-- Start_Module_1915 -->
                  <div id="dnn_ctr1915_ModuleContent" class="DNNModuleContent ModBKTintucC">
                    <div class="wd-list-box">
                      <span id="dnn_ctr1915_View_lblTintuc">
                        <div class='wd-content-detail'>
                          <?php
                              require_once "../utils/DBConnector.php";

                              $statement = "SELECT * FROM faculty WHERE idk='$idk'";
                              $res = $connect->query($statement);
                              
                              $row = null;
                              if($res) {
                                $row = $res->fetch_object();
                              }
                            
                              // redirect if dont have any record
                              if($row != null) {
                          ?>
                          <?php echo "<h2>".$row->name."</h2>"; ?>
                          <?php echo $row->info; }?>
                          </div>
                        </div>
                      </span>
                    </div>
                  </div>
                  <!-- End_Module_1915 -->
                </div>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="wd-wapper">
        <?php include_once "layout/footer.php" ?>
      </div>
      </div>
  </body>
</html>