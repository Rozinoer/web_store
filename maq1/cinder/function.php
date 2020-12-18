<?php

function connect()
{
    $conn = mysqli_connect("localhost", "id15703878_evgenii", "huMvy3-javjyh-bengur", "id15703878_store");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
function init(){
    $conn = connect();
    $sql = "SELECT * FROM product_info";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo '0';
    }
    mysqli_close($conn);
}

function selectOneGoods(){
    $conn = connect();
    $name = $_REQUEST['gname'];
    if ($name== "Все товары") {
        $sql = "SELECT * FROM product_info";
    }
    else {
        $sql = "SELECT * FROM product_info WHERE name = '$name'";
    }
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo '0';
    }
    mysqli_close($conn);
}


