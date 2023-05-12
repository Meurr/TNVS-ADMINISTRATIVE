<?php
include '../database/connection.php';
if (isset($_POST['docu_id'])) {
    $docu_id = $_POST['docu_id'];

    $sql = "DELETE FROM admin_document_archive WHERE docu_id=$docu_id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:../modules/document-archive.php');
    } else {
        die(mysqli_error($con));
    }
}
