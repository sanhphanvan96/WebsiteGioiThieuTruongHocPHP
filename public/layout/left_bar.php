<?php
  require_once "../utils/DBConnector.php";
?>
<div id="dnn_ctr1905_ModuleContent" class="DNNModuleContent ModBKMenuLeftC">
<span id="dnn_ctr1905_View_lblGroup">
  <p class='wd-title-nav'>ĐH BÁCH KHOA ĐHĐN</p>
  <div class='wd-left-accordion'>
    <a class='' href='index.php' >Thông báo</a>
    <h3 class='sub-title-accordion'>Về các khoa<span class='arrow'></span>
    </h3>
    <div class='sub-link'>
    <?php
      $statement = "SELECT `idk`, `name` FROM `faculty` ORDER BY `name` ASC";
      $res = $connect->query($statement);
    
      if($res) {
        while ($row = $res->fetch_object()){
    ?>
      <a class='' href='./view.php?idk=<?php echo $row->idk; ?>' ><?php echo $row->name; ?></a>
    <?php 
        } 
      } ?>
    </div>
  </div>
</span>
</div>