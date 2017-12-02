<?php
    require_once 'connect/connect.php';

    if(isset($_POST)){
        $id = $_POST['id'];
        $column = $_POST['column'];

        try{

            if($column == "firstname"){
                $type_column = $_POST['firstname'];
                $sql = "UPDATE `customer` SET `firstname` = ? WHERE `customer`.`customer_id` = ?;";
            }else if($column == "lastname"){
                $type_column = $_POST['lastname'];
                $sql = "UPDATE `customer` SET `lastname` = ? WHERE `customer`.`customer_id` = ?;";
            }else if($column == "email"){
                $type_column = $_POST['email'];
                $sql = "UPDATE `customer` SET `email` = ? WHERE `customer`.`customer_id` = ?;";
            }
            $q = $conn->prepare($sql);
            $q->execute(array($type_column,$id));

            echo "update_success";
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
?>