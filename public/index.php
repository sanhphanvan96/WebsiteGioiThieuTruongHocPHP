<?php 
  require_once "../utils/DBConnector.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html  lang="en-US">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head id="Head">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <link rel="icon" href="resource/Images/favicon.jpg" type="image/x-icon">
    <title>
      Khoa Công nghệ thông tin, Trường ĐH Bách khoa, ĐHĐN
    </title>
    <link href="resource/Portals/_default/skins/dhbk/skin4b95.css?cdv=118" type="text/css" rel="stylesheet"/>
  </head>
  <body id="Body">
      <?php include_once "layout/script_tag.php" ?>
      <div class="wd-wapper">
        <?php include_once "layout/header.php" ?>

        <div class="wd-center">
          <div id="dnn_TopContentPanel" class="wd-sub-slider">
            <?php include_once "partial/slide.php" ?>
          </div>
          <div id="Main">
            <div class="row">
              <div id="dnn_MainLeft" class="wd-left-subpage col-md-3">
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
                <?php include_once "layout/contact.php" ?>
              </div>
              <div id="dnn_MainCenter" class="wd-left-subpage col-md-6">
                <div class="DnnModule DnnModule-BKNotifications DnnModule-1906">
                  <a name="1906"></a>
                  <div class="DNNContainer_noTitle">
                    <div id="dnn_ctr1906_ContentPane">
                      <!-- Start_Module_1906 -->
                      <div id="dnn_ctr1906_ModuleContent" class="DNNModuleContent ModBKNotificationsC">
                        <div class="wd-section">
                          <div class="wd-block-left-content">
                            <h3 class="wd-title">
                            <span class="wd-icon-30 wd-icon-notify"></span>THÔNG TIN - THÔNG BÁO
                            </h3>
                            <div id="wd-easytab" class="wd-tab-content">
                              <ul class="wd-list-notify">
                              <?php 
                                $statement = "SELECT * FROM notification ORDER BY created_at DESC";
                                $res = $connect->query($statement);
            
                                if($res) {
                                    while ($row = $res->fetch_object()){
                              ?>
                                <li>
                                  <div class="wd-notify">
                                    <div class="wd-notify-left"><span class="name">18/05</span><span class="number">2018</span></div>
                                    <div class="wd-notify-right">
                                      <p class="des"><a href="notificationView.php?id=<?php echo $row->id; ?>" >
                                        <?php echo $row->title ?></a>
                                        <span class='wd-notify-news'>New</span></p>
                                      <p class="time">18/05/2018 16:45</p>
                                    </div>
                                  </div>
                                </li>
                              <?php }} ?>
                                <li>
                                  <div class="wd-notify">
                                    <div class="wd-notify-left"><span class="name">18/05</span><span class="number">2018</span></div>
                                    <div class="wd-notify-right">
                                      <p class="des"><a href="#">Trường Đại học Sư phạm Kỹ thuật Vinh tuyển dụng giảng viên</a><span class='wd-notify-news'>New</span></p>
                                      <p class="time">18/05/2018 16:45</p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="wd-notify">
                                    <div class="wd-notify-left"><span class="name">17/05</span><span class="number">2018</span></div>
                                    <div class="wd-notify-right">
                                      <p class="des"><a href="#">THÔNG TIN TUYỂN DỤNG - KHỐI GIẢI PHÁP DOANH NGHIỆP - TCT VIỄN THÔNG VIETTEL</a><span class='wd-notify-news'>New</span></p>
                                      <p class="time">17/05/2018 15:45</p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="wd-notify">
                                    <div class="wd-notify-left"><span class="name">17/05</span><span class="number">2018</span></div>
                                    <div class="wd-notify-right">
                                      <p class="des"><a href="#">Khoa CNTT - Thông báo về việc chuẩn bị nộp và bảo vệ ĐATN cho Khóa 13T</a><span class='wd-notify-news'>New</span></p>
                                      <p class="time">17/05/2018 05:35</p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="wd-notify">
                                    <div class="wd-notify-left"><span class="name">14/05</span><span class="number">2018</span></div>
                                    <div class="wd-notify-right">
                                      <p class="des"><a href="#">ASIANTECH - Tuyển thực tập sinh- Khóa hè 2018</a></p>
                                      <p class="time">14/05/2018 08:49</p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="wd-notify">
                                    <div class="wd-notify-left"><span class="name">10/05</span><span class="number">2018</span></div>
                                    <div class="wd-notify-right">
                                      <p class="des"><a href="#">Chung kết "Cuộc đua số 2017-2018" - Cùng cổ vũ cho các thành viên Trường Đại học Bách khoa, ĐHĐN</a></p>
                                      <p class="time">10/05/2018 07:49</p>
                                    </div>
                                  </div>
                                </li>
                                <a href="#" class="wd-view-detail">Xem tất cả thông báo</a>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End_Module_1906 -->
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <?php include_once "layout/right_bar.php" ?>
            </div>
          </div>
          <br />
        </div>
        <div class="clear"></div>
        <?php include_once "layout/footer.php" ?>
      </div>
      </div>
  </body>
</html>