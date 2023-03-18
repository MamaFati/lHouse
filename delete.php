<?php
if ( isset($_GET ["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "languecomment";

    $connection = new mysqli($servername, $username, $password, $database);

    // sql code to delate
    $sql = "DELETE FROM lcomments WHERE id = $id";
    $connection->query($sql);

}
 header("location:/assignment2/index.php");
exit;
?>