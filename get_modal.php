<?php
    require_once 'connect/connect.php';

    if(isset($_GET)){
        $id = $_GET['id'];
        $column = $_GET['column'];
        
        $sql = "SELECT ".$column." FROM `customer` WHERE `customer_id` = ?;";
        $q = $conn->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
    }
?>
<form id="save-info" action="save_info.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input type="hidden" name="column" value="<?php echo $column;?>">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="termsLabel" class="modal-title">Edit <?php echo $column;?></h3>
    </div>
    <div class="modal-body">
        <input type="text" class="form-control" id="column_value" name="<?php echo $column;?>" value="<?php echo $data["$column"];?>">
    </div>
    <div class="modal-footer">
        <button type="button" id="change-info" class="btn btn-success" data-dismiss="modal">Change</button>
    </div>
</form>