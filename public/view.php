<?php
	if(!isset($_GET["idk"])) {
    header("Location: index.php");
    die();
  }
  
  $idk = $_GET["idk"];
  require_once "../utils/DBConnector.php";

  $statement = "SELECT * FROM faculty WHERE idk='$idk'";
  $res = $connect->query($statement);
  
  $row = null;
  if($res) {
    $row = $res->fetch_object();
    echo "<pre>";
    echo $row->name;
    echo $row->info;
    echo "</pre>";
  } else {
    echo "<p>Dữ liệu trống</p>";
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html  lang="en-US">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
                          <h2>Bộ môn Công nghệ Phần mềm</h2>
                          <p><strong>Giới thiệu</strong></p>
                          <p style="text-align:justify">Bộ m&ocirc;n C&ocirc;ng nghệ Phần mềm, trực thuộc Khoa C&ocirc;ng nghệ Th&ocirc;ng tin được th&agrave;nh lập từ năm 2005. Bộ m&ocirc;n C&ocirc;ng nghệ ph&acirc;n mềm chịu tr&aacute;ch nhiệm đảm nhận giảng dạy c&aacute;c học phần về lĩnh vực ph&aacute;t triển phần mềm, như Cấu tr&uacute;c dữ liệu, Ph&acirc;n t&iacute;ch v&agrave; thiết kế thuật to&aacute;n, Cơ sở dữ liệu, Ph&acirc;n t&iacute;ch v&agrave; thiết kế hệ thống, C&ocirc;ng nghệ phần mềm, Kiểm thử phần mềm, Lập tr&igrave;nh, Quản trị dự &aacute;n&hellip; Bộ m&ocirc;n chịu tr&aacute;ch nhiệm giảng dạy v&agrave; hướng dẫn đồ &aacute;n tốt nghiệp cho c&aacute;c sinh vi&ecirc;n đăng k&yacute; theo học chuy&ecirc;n ng&agrave;nh C&ocirc;ng nghệ phần mềm.</p>
                          <p style="text-align:justify">Chuy&ecirc;n ng&agrave;nh C&ocirc;ng nghệ phần mềm trang bị kiến thức tổng qu&aacute;t về qui tr&igrave;nh x&acirc;y dựng, quản l&yacute; v&agrave; bảo tr&igrave; hệ thống phần mềm; c&oacute; khả năng ph&acirc;n t&iacute;ch; thiết kế v&agrave; quản l&yacute; c&aacute;c dự &aacute;n phần mềm; cung cấp phương ph&aacute;p luận v&agrave; c&ocirc;ng nghệ mới để sinh vi&ecirc;n c&oacute; thể nắm bắt v&agrave; l&agrave;m chủ c&aacute;c tiến bộ khoa học. Sinh vi&ecirc;n được cung cấp kiến thức cơ bản về tổ chức v&agrave; quản l&yacute; c&ocirc;ng nghệ phần mềm để c&oacute; khả năng x&acirc;y dựng m&ocirc; h&igrave;nh v&agrave; &aacute;p dụng c&aacute;c nguy&ecirc;n tắc của c&ocirc;ng nghệ phần mềm v&agrave;o thực tế. Sinh vi&ecirc;n c&oacute; thể l&agrave;m lập tr&igrave;nh vi&ecirc;n, ph&aacute;t triển phần mềm, chuy&ecirc;n vi&ecirc;n kiểm định v&agrave; thử nghiệm phần mềm, lập dự &aacute;n, l&ecirc;n kế hoạch, hoạch định ch&iacute;nh s&aacute;ch ph&aacute;t triển phần mềm v&agrave; c&aacute;c ứng dụng, trưởng nh&oacute;m phần mềm, kiểm định, thử nghiệm v&agrave; đ&aacute;nh gi&aacute; phần mềm, gi&aacute;m đốc dự &aacute;n, gi&aacute;m đốc th&ocirc;ng tin (CIO); ngo&agrave;i ra sinh vi&ecirc;n được trang bị kiến thức để c&oacute; thể đảm nhiệm c&aacute;c chức danh.</p>
                          <p>- C&aacute;n bộ nghi&ecirc;n cứu v&agrave; ứng dụng C&ocirc;ng nghệ th&ocirc;ng tin ở c&aacute;c viện, trung t&acirc;m nghi&ecirc;n cứu v&agrave; c&aacute;c trường đại học, cao đẳng<br />
                            - Giảng vi&ecirc;n C&ocirc;ng nghệ th&ocirc;ng tin ở c&aacute;c trường đại học, cao đẳng, trung học chuy&ecirc;n nghiệp v&agrave; dạy nghề<br />
                            - C&aacute;n bộ quản l&yacute; c&aacute;c dự &aacute;n, c&aacute;c hệ thống th&ocirc;ng tin quản l&yacute;, mạng truyền th&ocirc;ng ở c&aacute;c cơ quan, ng&agrave;nh, tổng cục, c&ocirc;ng ty<br />
                            - Tiếp tục được đ&agrave;o tạo sau đại học để nhận c&aacute;c tr&igrave;nh độ thạc sĩ v&agrave; tiến sĩ, trở th&agrave;nh c&aacute;c chuy&ecirc;n gia trong lĩnh vực CNTT
                          </p>
                          <p><strong>Đội ngũ c&aacute;n bộ</strong></p>
                          <p style="text-align:justify">Bộ m&ocirc;n gồm c&oacute; 13&nbsp;c&aacute;n bộ, trong đ&oacute; c&oacute; 12&nbsp;giảng vi&ecirc;n, 01 c&aacute;n bộ thực h&agrave;nh với&nbsp;07 Tiến sỹ, &nbsp;06&nbsp;Thạc sỹ.</p>
                          <div>
                            <p><strong>Li&ecirc;n hệ</strong></p>
                            <p>C&aacute;c tổ chức, c&aacute; nh&acirc;n, sinh vi&ecirc;n, học vi&ecirc;n cao học, nghi&ecirc;n cứu sinh quan t&acirc;m đến c&aacute;c lĩnh vực tr&ecirc;n c&oacute; thể li&ecirc;n hệ:&nbsp;ltmhanh@dut.udn.vn</p>
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