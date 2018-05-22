<?php
    if(!isset($_GET["id"])) {
        header("Location: index.php");
        die();
    }
  
    $id = $_GET["id"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html  lang="en-US">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head id="Head">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <link rel="icon" href="resource/Images/favicon.jpg" type="image/x-icon">
    <title>
      Trường Đại học Bách khoa - Đại học Đà Nẵng
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

                              $statement = "SELECT * FROM notification WHERE id='$id' LIMIT 1";
                              $res = $connect->query($statement);
                              
                              $row = null;
                              if($res) {
                                $row = $res->fetch_object();
                              }
                            
                              // redirect if dont have any record
                              if($row != null) {
                          ?>
                          <?php echo "<h2>".$row->title."</h2>"; ?>
                          <div class="wd-date">16/04/2018 10:11</div>
                          <?php echo $row->detail; }?>
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