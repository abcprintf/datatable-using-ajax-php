<?php
    require_once 'connect/connect.php';

    function get_all_data($conn, $sql)
    {
        if($sql == null){
            $sql = "SELECT * FROM `customer`";
        }
        $q = $conn->prepare($sql);
        $q->execute(array());
        return $q->rowCount();
    }

    $column = array("customer_id", "firstname", "lastname", "email");

    $error = false;
    try{
        $sql = "SELECT * FROM `customer` WHERE ";

        if(isset($_POST['search']['value'])){
            $sql .= "(`firstname` LIKE '%".$_POST['search']['value']."%'";
            $sql .= "OR `lastname` LIKE '%".$_POST['search']['value']."%'";
            $sql .= "OR `email` LIKE '%".$_POST['search']['value']."%')";
        }else {
            $sql .= "1 ";
        }

        if(isset($_POST['order'])){
            $sql .= "ORDER BY ".$column[$_POST['order']['0']['column']]." ".$_POST['order']['0']['dir']." ";
        }else{
            $sql .= "ORDER BY `customer_id` ASC";
        }

        if($_POST['length'] != -1){
            $sql1 = $sql." LIMIT ".$_POST['start'].", ".$_POST['length'];
        }else {
            $sql1 = $sql;
        }
    
        $q = $conn->prepare($sql1);
        $q->execute(array());
        $check_row = $q->rowCount();
        $data = array();
        while($row = $q->fetch(PDO::FETCH_ASSOC)){
            $sub_array = array();
            $sub_array[] = $row["customer_id"];
            $sub_array[] = $row["firstname"];
            $sub_array[] = $row["lastname"];
            $sub_array[] = $row["email"];
            $data[] = $sub_array;
        }
    }catch(Exception $e){
        $error = $e->getMessage();
    }

    $output = array(
        "draw" => intval($_POST["draw"]),
        "recordsTotal" => get_all_data($conn, $sql),
        "recordsFiltered" => get_all_data($conn, $sql),
        "data" => $data,
        "error" => $error
    );

    echo json_encode($output);
?>