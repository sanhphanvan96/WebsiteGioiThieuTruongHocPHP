<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="table-view">
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
       require_once "../../utils/DBConnector.php";
    ?>
    <?php
        $keyword = (isset($_POST["keyword"])) ? $_POST["keyword"] : "";
        $statement = "SELECT * FROM `faculty` WHERE `name` LIKE '%{$keyword}%' ORDER BY `name` ASC";
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