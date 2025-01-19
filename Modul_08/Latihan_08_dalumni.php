<?php
include 'Latihan_08_config.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM alumni WHERE id=$id";

    if($conn->query($sql)===TRUE){
        echo "Data Berhasil Dihapus";
        header("Location: Latihan_08_index.php?menu=alumni");
    }else{
        echo "Eror Deleting Record:".$conn->eror;
    }
    $coon->close();
}
?>