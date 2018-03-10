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


    $id = $_POST['id'];

    $sql = "UPDATE allE SET name = '$name', sImg = '$sImg', bImg = '$bImg', categorie  = '$cat', description ='$des' , eTime  = '$time', cost ='$cost', adress = '$adr', email = '$mail', phone = '$phone', url = '$url',capacity = '$capa' WHERE id = {$id}";

    if($conn->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {
        echo "Erorr while updating record : ". $conn->error;
    }


    $conn->close();

}

 

?>