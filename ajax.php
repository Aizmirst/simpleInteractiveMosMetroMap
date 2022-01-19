<?php
include "db/connect_db.php";
// var_dump($_POST);
if (isset($_POST['name'])) {
    $val = $_POST['name'];
    // echo json_encode($val);//Необходимая строка
    $goods = json_encode($val,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    $query = "SELECT * FROM metroInfo WHERE NameOfStation = '$val' LIMIT 1";
    // echo $query;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    // print_r($row);
    // echo $row['NameOfStation'];
    $str = $row['District'];
    echo json_encode($str);



    // $query = "SELECT * FROM metroInfo WHERE NameOfStation = '$val'";
    // $result = mysqli_query($conn, $query);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // // print_r($row);
    // echo $row['NameOfStation'];
}
?>
