<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $db = new mysqli($servername, $username, $password);
    if ($db->connect_error)
    {
        die("Connection failed: " . $db->connect_error);
    } 
    $db->query("CREATE DATABASE IF NOT EXISTS `obat`");
    $db->select_db('obat');  
    $sql="CREATE TABLE IF NOT EXISTS `obat`(
                `id` INT(128) NOT NULL AUTO_INCREMENT , `nama_obat` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`));";
?>