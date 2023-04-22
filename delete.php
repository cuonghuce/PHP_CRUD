<?php
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    include 'connection.php';
    
    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}
header("location: ./index.php");
exit;

?>