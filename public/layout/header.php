<?php
  require_once "../utils/DBConnector.php";
?>

<div id="Content" class="wd-content-container">
  <div id="dnn_BannerContentPanel">
    <div class="DnnModule DnnModule-BKBanner2 DnnModule-1902">
      <a name="1902"></a>
      <div class="DNNContainer_noTitle">
        <div id="dnn_ctr1902_ContentPane">
          <!-- Start_Module_1902 -->
          <div id="dnn_ctr1902_ModuleContent" class="DNNModuleContent ModBKBanner2C">
            <div class="wd-head-container">
              <div class="wd-center">
                <div class="wd-top-header">
                  <div class="wd-top-left">
                    <ul class="wd-list-menu-l">
                      <li class="first"><a href="index.php">Thông báo</a></li>
                      <li><a href="#">Liên hệ</a></li>
                    </ul>
                  </div>
                  <div class="wd-top-right">
                    <span id="dnn_ctr1902_View_lblMenuTop">
                      <ul class='wd-list-menu-r'>
                      <ul class='wd-list-menu-r'>
                        <li>
                          <a href='#' >Khoa</a>
                          <ul class='wd-content-list-category-menu' style='display: none;'>
                            <div class='wd-arrow'></div>
                            <?php
                              $statement = "SELECT `idk`, `name` FROM `faculty` ORDER BY `name` ASC";
                              $res = $connect->query($statement);
                            
                              if($res) {
                                while ($row = $res->fetch_object()){
                            ?>
                              <li><a href='./view.php?idk=<?php echo $row->idk; ?>' ><?php echo $row->name; ?></a></li>
                            <?php 
                                } 
                              }
                            ?>
                          </ul>
                        </li>
                        <li>
                          <a href='#' >Phòng</a>
                          <ul class='wd-content-list-category-menu' style='display: none;'>
                            <div class='wd-arrow'></div>
                            <li><a href='#' >Công tác sinh viên</a></li>
                            <li><a href='#' >Cơ sở vật chất</a></li>
                            <li><a href='#' >Đào tạo</a></li>
                            <li><a href='#' >Kế hoạch - Tài chính</a></li>
                            <li><a href='#' >Khảo thí & Đảm bảo chất lượng giáo dục</a></li>
                            <li><a href='#' >Khoa học công nghệ & Hợp tác quốc tế</a></li>
                            <li><a href='#' >Tổ chức - Hành chính </a></li>
                            <li><a href='#' >Thanh tra - Pháp chế</a></li>
                          </ul>
                        </li>
                      </ul>
                  </div>
                  </span>
                </div>
                <div class="clear"></div>
              </div>
              <div class="wd-center">
                <div class="wd-header-content">
                  <div class="wd-content">
                    <h1>
                      <a class="wd-logo" href="index.php">
                      <img src="resource/portals/_default/skins/dhbk/img/front/logo.png" alt="DHBK" /></a>
                      <a class="wd-logo-small" href="index.php">
                      <img src="resource/portals/_default/skins/dhbk/img/front/logo-small.png" alt="DHBK" /></a>
                    </h1>
                    <div class="wd-content-right">
                      <fieldset class="wd-form-search">
                        <div class="wd-input">
                          <input class="txt-search" type="text" placeholder="Tìm kiếm thông tin" />
                          <input class="btn-search" type="submit" value="">
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
              <div class="wd-center">
                <span id="dnn_ctr1902_View_lblMenu">
                  <div id='cbp - hrmenu' class='menu'>
                    <ul>
                      <li><a href='index.php' >Home</a></li>
                      <li>
                        <a href='#' >Giới thiệu</a>
                        <ul>
                          <li><a href='#'> Tầm nhìn và Sứ mạng</a></li>
                          <li><a href='#'> Kế hoạch chiến lược phát triển</a></li>
                          <li><a href='#'> Giới thiệu chung</a></li>
                          <li><a href='#'> Cơ cấu tổ chức</a></li>
                          <li><a href='#'> Bộ môn Công nghệ phần mềm</a></li>
                          <li><a href='#'> Bộ môn Mạng và Truyền thông</a></li>
                          <li><a href='#'> Bộ môn Hệ thống nhúng</a></li>
                          <li><a href='#'> Đội ngũ cán bộ</a></li>
                          <li><a href='#'> Cơ sở vật chất</a></li>
                        </ul>
                      </li>
                      <li><a href='#' >Tuyển sinh</a></li>
                      <li>
                        <a href='#' >Đào tạo</a>
                        <ul>
                          <li><a href='#' >Mô hình đào tạo</a></li>
                          <li>
                            <a href='#' >Đào tạo đại học</a>
                            <ul>
                              <li><a href='#' >Kỹ sư CNTT</a></li>
                              <li><a href='#' >Kỹ sư CLC CNTT tiếng Anh</a></li>
                              <li><a href='#' >Kỹ sư CLC CNTT chuẩn Nhật Bản</a></li>
                              <li><a href='#' >Kỹ sư CLC PFIEV CNTT</a></li>
                            </ul>
                          </li>
                          <li>
                            <a href='#' >Đào tạo sau đại học</a>
                            <ul>
                              <li><a href='#' >Thạc sĩ Khoa học máy tính</a></li>
                              <li><a href='#' >Đào tạo tiến sĩ</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href='#' >Liên hệ</a></li>
                    </ul>
                  </div>
                </span>
              </div>
              <div class="clear"></div>
              <div class="wd-center">
                <div style="margin-top: 0px; margin-bottom: 0px">
                  <span id="dnn_ctr1902_View_lblMenuNav">
                    <ul class='wd - breadcrumb'>
                      <li><a class='wd-fist-link' href=''>Trang chủ</a></li>
                    </ul>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End_Module_1902 -->
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>