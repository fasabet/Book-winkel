<?php
    require('includes/config.php');
    $query = "DELETE FROM `fs_contact` WHERE `con_id`=" . $_GET['sid'];
    mysqli_query($conn, $query) or die("I can't Execute...");
    header("location:contact.php");
?>