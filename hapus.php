<?php
    include "koneksi.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM obat WHERE id = $id";
        $query = mysqli_query($db, $sql);
        
        if($query){
            header('Location: obat.php');
        }
    }
?>