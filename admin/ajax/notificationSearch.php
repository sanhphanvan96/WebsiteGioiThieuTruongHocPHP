<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="table-view">
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
        require_once "../../utils/DBConnector.php";
    ?>
    <?php
        $keyword = (isset($_POST["keyword"])) ? $_POST["keyword"] : "";
        $statement = "SELECT * FROM `notification` WHERE `title` LIKE '%{$keyword}%' ORDER BY `created_at` DESC";
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