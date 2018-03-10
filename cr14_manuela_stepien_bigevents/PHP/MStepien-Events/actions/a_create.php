
<?php

require_once 'connect.php';

if($_POST) {
    $name = $_POST['name'];
    $sImg = $_POST['sImg'];
    $bImg = $_POST['bImg'];
    $cat = $_POST['categorie'];
    $des = $_POST['description'];
    $time = $_POST['eTime'];
    $cost = $_POST['cost'];
    $adr = $_POST['adress'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $url = $_POST['url'];
    $capa = $_POST['capacity'];



    $sql = "INSERT INTO allE (name, sImg, bImg, categorie, description, eTime, cost, adress, email, phone, url, capacity ) VALUES ('$name', '$sImg', '$bImg','$cat','$des','$time','$cost', '$adr', '$mail', '$phone', '$url', '$capa' )";

    if($conn->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../home.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->conn_error;
    }

    $conn->close();
}

?>